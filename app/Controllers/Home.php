<?php

namespace App\Controllers;

use App\Models\AttendeeModel;

class Home extends BaseController
{
    public function index(): string
    {
        $data['page'] = 'home';
        $data['_view'] = 'pages/home';
        return view('layouts/main',$data);
    }

    public function contact(): string
    {
        $data['page'] = 'contact';
        $data['_view'] = 'pages/contact';
        return view('layouts/main',$data);
    }

    public function schedule(): string
    {
        $data['page'] = 'schedule';
        $data['_view'] = 'pages/schedule';
        return view('layouts/main',$data);
    }

    public function attendance(): string
    {
        $data['page'] = 'attendance';
        $data['_view'] = 'pages/attendance';
        return view('layouts/main',$data);
    }

    public function attendanceSubmit()
    {
        // Only accept POST
        if (! $this->request->is('post')) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Invalid request.']);
        }

        $fullName     = trim((string) $this->request->getPost('full_name'));
        $organisation = trim((string) $this->request->getPost('organisation'));
        $email        = trim((string) $this->request->getPost('email'));

        $attendeeModel = new AttendeeModel();

        $data = [
            'full_name'    => $fullName,
            'organisation' => $organisation,
            'email'        => $email,
        ];

        if (! $attendeeModel->insert($data)) {
            return $this->response->setJSON([
                'status'  => 'error',
                'message' => 'Please check the form.',
                'errors'  => $attendeeModel->errors(),
            ]);
        }

        // Sanitise for output (email body / view)
        $fullNameOut     = esc($fullName);
        $organisationOut = esc($organisation);
        $emailOut        = esc($email);

        // Build HTML acknowledgement email
        $body = view('emails/attendance_ack', [
            'fullName'     => $fullNameOut,
            'organisation' => $organisationOut,
            'email'        => $emailOut,
        ]);

        $emailService = \Config\Services::email();
        $emailService->setTo($email);
        $emailService->setSubject('You\'re confirmed — Cyber Security Convention 2026');
        $emailService->setMessage($body);

        if (! $emailService->send(false)) {
            log_message('error', 'Attendance acknowledgement email failed: ' . $emailService->printDebugger(['headers']));
        }

        return $this->response->setJSON([
            'status'  => 'success',
            'message' => "Thanks, {$fullNameOut} — your attendance is recorded. A confirmation email is on its way to {$emailOut}.",
        ]);
    }

    public function send()
    {
        // Only accept POST
        if (! $this->request->is('post')) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Invalid request.']);
        }

        // Validate
        $rules = [
            'name'    => 'required|min_length[2]|max_length[100]',
            'email'   => 'required|valid_email',
            'org'     => 'permit_empty|max_length[150]',
            'topic'   => 'required',
            'message' => 'required|min_length[5]|max_length[5000]',
        ];

        if (! $this->validate($rules)) {
            return $this->response->setJSON([
                'status'  => 'error',
                'message' => 'Please check the form.',
                'errors'  => $this->validator->getErrors(),
            ]);
        }

        // Collect + sanitise
        $name    = esc($this->request->getPost('name'));
        $email   = esc($this->request->getPost('email'));
        $org     = esc($this->request->getPost('org') ?? '—');
        $topic   = esc($this->request->getPost('topic'));
        $message = esc($this->request->getPost('message'));

        // Build HTML email
        $body = view('emails/contact', [
            'name'    => $name,
            'email'   => $email,
            'org'     => $org,
            'topic'   => $topic,
            'message' => $message,
            'sentAt'  => date('d M Y, H:i') . ' FJT',
            'ip'      => $this->request->getIPAddress(),
        ]);

        $emailService = \Config\Services::email();
        $emailService->setTo('support@cyberconfiji.com');
        $emailService->setReplyTo($email, $name);
        $emailService->setSubject('New contact message: ');
        $emailService->setMessage($body);

        if (! $emailService->send(false)) {
            log_message('error', 'Contact email failed: ' . $emailService->printDebugger(['headers']));
            return $this->response->setJSON([
                'status'  => 'error',
                'message' => 'Message could not be sent. Please try again later.',
            ]);
        }

        return $this->response->setJSON([
            'status'  => 'success',
            'message' => 'Thanks — your message has been sent. We usually reply within two business days.',
        ]);
    }
}

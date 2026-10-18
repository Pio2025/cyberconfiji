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

        // Validate before touching the raw input any further
        $rules = [
            'full_name'    => 'required|min_length[2]|max_length[100]|regex_match[/^[\p{L}\p{M} .\'\-]+$/u]',
            'organisation' => 'required|min_length[2]|max_length[150]|regex_match[/^[\p{L}\p{N}\p{M} .,\'\-&()]+$/u]',
            'email'        => 'required|valid_email|max_length[150]',
        ];

        if (! $this->validate($rules)) {
            return $this->response->setJSON([
                'status'  => 'error',
                'message' => 'Please check the form.',
                'errors'  => $this->validator->getErrors(),
            ]);
        }

        // Strip any tags/control characters before persisting or echoing anywhere
        $fullName     = strip_tags(trim((string) $this->request->getPost('full_name')));
        $organisation = strip_tags(trim((string) $this->request->getPost('organisation')));
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
            // Rendered via textContent on the client, so plain (already stripped) text is used here —
            // esc() is reserved for the HTML email body above.
            'message' => "Thanks, {$fullName} — your attendance is recorded. A confirmation email is on its way to {$email}.",
        ]);
    }

    public function send()
    {
        // Only accept POST
        if (! $this->request->is('post')) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Invalid request.']);
        }

        $allowedTopics = [
            'Delegate passes',
            'Speaking & facilitating',
            'Sponsorship',
            'Press & media',
            'Feedback',
            'Something else',
        ];

        // Validate
        $rules = [
            'name'    => 'required|min_length[2]|max_length[100]|regex_match[/^[\p{L}\p{M} .\'\-]+$/u]',
            'email'   => 'required|valid_email|max_length[150]',
            'org'     => 'permit_empty|max_length[150]|regex_match[/^[\p{L}\p{N}\p{M} .,\'\-&()]*$/u]',
            'topic'   => 'required|in_list[' . implode(',', $allowedTopics) . ']',
            'message' => 'required|min_length[5]|max_length[5000]',
        ];

        if (! $this->validate($rules)) {
            return $this->response->setJSON([
                'status'  => 'error',
                'message' => 'Please check the form.',
                'errors'  => $this->validator->getErrors(),
            ]);
        }

        // Collect + strip any tags/control characters; final output escaping
        // for the HTML email body happens once, in the email view itself.
        $name    = strip_tags(trim((string) $this->request->getPost('name')));
        $email   = trim((string) $this->request->getPost('email'));
        $org     = strip_tags(trim((string) $this->request->getPost('org'))) ?: '—';
        $topic   = $this->request->getPost('topic');
        $message = strip_tags(trim((string) $this->request->getPost('message')));

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
        $emailService->setCC('zaahid.shah@digitalfiji.gov.fj');
        $emailService->setReplyTo($email, $name);
        $emailService->setSubject('New contact message: ' . $topic);
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

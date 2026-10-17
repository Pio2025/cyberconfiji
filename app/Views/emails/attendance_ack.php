<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>You're confirmed — Cyber Security Convention 2026</title>
</head>
<body style="margin:0;padding:0;background:#f4f6f8;font-family:Arial,Helvetica,sans-serif;color:#1f2937;">
  <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:#f4f6f8;padding:24px 0;">
    <tr>
      <td align="center">
        <table role="presentation" width="600" cellpadding="0" cellspacing="0" style="background:#ffffff;border-radius:8px;overflow:hidden;box-shadow:0 2px 8px rgba(0,0,0,0.06);">

          <!-- Header -->
          <tr>
            <td style="background:#0b3d91;padding:20px 32px;">
              <table role="presentation" width="100%" cellpadding="0" cellspacing="0">
                <tr>
                  <!-- Logo (left) -->
                  <td align="left" valign="middle" style="width:60px;">
                    <img
                        src="<?= base_url('assets/img/logo.png') ?>"
                        alt="CyberCon Fiji"
                        width="48"
                        height="48"
                        style="display:block;border:0;outline:none;text-decoration:none;border-radius:6px;background:#ffffff;padding:4px;">
                  </td>

                  <!-- Title (right of logo) -->
                  <td align="left" valign="middle" style="padding-left:16px;">
                    <h1 style="margin:0;color:#ffffff;font-size:20px;font-weight:600;line-height:1.3;">
                        Cyber Security Convention 2026
                    </h1>
                    <p style="margin:4px 0 0;color:#c9d6ee;font-size:13px;">
                        Attendance confirmation
                    </p>
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          <!-- Body -->
          <tr>
            <td style="padding:32px;">
              <p style="margin:0 0 20px;font-size:15px;line-height:1.6;">
                Dear <?= $fullName ?>,
              </p>
              <p style="margin:0 0 20px;font-size:15px;line-height:1.6;">
                Thank you for confirming your attendance at the <strong>Cyber Security Convention 2026</strong>. We're pleased to let you know your registration has been received and recorded.
              </p>

              <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;font-size:14px;margin-bottom:20px;">
                <tr>
                  <td style="padding:10px 12px;background:#f9fafb;border:1px solid #e5e7eb;width:35%;font-weight:600;">Full name</td>
                  <td style="padding:10px 12px;border:1px solid #e5e7eb;"><?= $fullName ?></td>
                </tr>
                <tr>
                  <td style="padding:10px 12px;background:#f9fafb;border:1px solid #e5e7eb;font-weight:600;">Organisation</td>
                  <td style="padding:10px 12px;border:1px solid #e5e7eb;"><?= $organisation ?></td>
                </tr>
                <tr>
                  <td style="padding:10px 12px;background:#f9fafb;border:1px solid #e5e7eb;font-weight:600;">Email</td>
                  <td style="padding:10px 12px;border:1px solid #e5e7eb;"><?= $email ?></td>
                </tr>
              </table>

              <h3 style="margin:0 0 8px;font-size:15px;color:#0b3d91;">Event details</h3>
              <div style="padding:16px;background:#f9fafb;border-left:3px solid #0b3d91;border-radius:4px;font-size:14px;line-height:1.7;">
                <strong>Date:</strong> 28 October 2026<br>
                <strong>Venue:</strong> Grand Pacific Hotel, Victoria Parade, Suva, Fiji<br>
                <strong>Time:</strong> Sessions run throughout the day &mdash; the full program is available on the event website.
              </div>

              <p style="margin:28px 0 0;font-size:14px;line-height:1.6;">
                Please keep this email as confirmation of your attendance. If you have any questions in the meantime, simply reply to this email or reach us at <a href="mailto:support@cyberconfiji.com" style="color:#0b3d91;text-decoration:none;">support@cyberconfiji.com</a>.
              </p>

              <p style="margin:20px 0 0;font-size:14px;line-height:1.6;">
                We look forward to seeing you there.
              </p>
            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td style="background:#f9fafb;padding:16px 32px;border-top:1px solid #e5e7eb;">
              <p style="margin:0;font-size:12px;color:#6b7280;">
                This is an automated confirmation from the Cyber Security Convention 2026 attendance registration at cyberconfiji.com.
              </p>
            </td>
          </tr>

        </table>
      </td>
    </tr>
  </table>
</body>
</html>

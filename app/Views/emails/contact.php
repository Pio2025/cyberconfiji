<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>New Contact Message</title>
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
                        CyberCon Fiji — Contact Form
                    </h1>
                    <p style="margin:4px 0 0;color:#c9d6ee;font-size:13px;">
                        Submitted <?= esc($sentAt) ?>
                    </p>
                    </td>
                </tr>
                </table>
            </td>
            </tr>

          <!-- Body -->
          <tr>
            <td style="padding:32px;">
              <p style="margin:0 0 20px;font-size:15px;line-height:1.5;">
                A new message has been submitted via the contact form on your website.
              </p>

              <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;font-size:14px;">
                <tr>
                  <td style="padding:10px 12px;background:#f9fafb;border:1px solid #e5e7eb;width:35%;font-weight:600;">Full name</td>
                  <td style="padding:10px 12px;border:1px solid #e5e7eb;"><?= esc($name) ?></td>
                </tr>
                <tr>
                  <td style="padding:10px 12px;background:#f9fafb;border:1px solid #e5e7eb;font-weight:600;">Email</td>
                  <td style="padding:10px 12px;border:1px solid #e5e7eb;">
                    <a href="mailto:<?= esc($email) ?>" style="color:#0b3d91;text-decoration:none;"><?= esc($email) ?></a>
                  </td>
                </tr>
                <tr>
                  <td style="padding:10px 12px;background:#f9fafb;border:1px solid #e5e7eb;font-weight:600;">Organisation</td>
                  <td style="padding:10px 12px;border:1px solid #e5e7eb;"><?= esc($org) ?></td>
                </tr>
                <tr>
                  <td style="padding:10px 12px;background:#f9fafb;border:1px solid #e5e7eb;font-weight:600;">Topic</td>
                  <td style="padding:10px 12px;border:1px solid #e5e7eb;"><?= esc($topic) ?></td>
                </tr>
              </table>

              <h3 style="margin:28px 0 8px;font-size:15px;color:#0b3d91;">Message</h3>
              <div style="padding:16px;background:#f9fafb;border-left:3px solid #0b3d91;border-radius:4px;font-size:14px;line-height:1.6;white-space:pre-wrap;"><?= esc($message) ?></div>

              <p style="margin:28px 0 0;font-size:12px;color:#6b7280;">
                Submitted from IP: <?= esc($ip) ?>
              </p>
            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td style="background:#f9fafb;padding:16px 32px;border-top:1px solid #e5e7eb;">
              <p style="margin:0;font-size:12px;color:#6b7280;">
                This message was sent from the contact form at cyberconfiji.com. Reply directly to respond to <?= esc($name) ?>.
              </p>
            </td>
          </tr>

        </table>
      </td>
    </tr>
  </table>
</body>
</html>
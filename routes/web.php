<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('landing');
});

Route::get('/platform', function () {
    return view('platform');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/publications', function () {
    return view('publications');
});

Route::post('/about/contact', function (Request $request) {
    $request->validate([
        'full_name' => 'required|string|max:255',
        'email'     => 'required|email|max:255',
        'role'      => 'required|string|max:100',
        'message'   => 'nullable|string|max:2000',
    ]);

    $name    = $request->input('full_name');
    $email   = $request->input('email');
    $role    = $request->input('role');
    $message = $request->input('message', '—');

    $demoUrl = 'https://www.figma.com/make/pzpthe0EZHzCNgB7PtJZKW/Oncology-Dashboard-Design?code-node-id=0-9&p=f&t=gdJ0ELOch9sD8ckK-0&fullscreen=1';

    $html = <<<HTML
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Welcome to Keti AI</title>
    </head>
    <body style="margin:0;padding:0;background:#f4f6f9;font-family:'Segoe UI',Arial,sans-serif;">
      <table width="100%" cellpadding="0" cellspacing="0" style="background:#f4f6f9;padding:40px 0;">
        <tr>
          <td align="center">
            <table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff;border-radius:12px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,.08);">

              <!-- Header -->
              <tr>
                <td style="background:#0f172a;padding:32px 40px;text-align:center;">
                  <p style="margin:0;font-size:22px;font-weight:700;color:#ffffff;letter-spacing:.5px;">Keti AI Lab</p>
                  <p style="margin:6px 0 0;font-size:13px;color:#94a3b8;letter-spacing:1px;text-transform:uppercase;">Precision Oncology Intelligence</p>
                </td>
              </tr>

              <!-- Body -->
              <tr>
                <td style="padding:40px 40px 32px;">
                  <p style="margin:0 0 8px;font-size:22px;font-weight:700;color:#0f172a;">Hello, {$name} 👋</p>
                  <p style="margin:0 0 24px;font-size:15px;color:#64748b;">Thank you for reaching out to Keti AI Lab.</p>

                  <p style="margin:0 0 20px;font-size:15px;color:#334155;line-height:1.7;">
                    We've received your message and we're thrilled to connect with you. Whether you're here to explore
                    our platform, discuss a collaboration, or learn how AI-powered decision support can transform
                    oncology outcomes — you've come to the right place.
                  </p>

                  <p style="margin:0 0 32px;font-size:15px;color:#334155;line-height:1.7;">
                    In the meantime, we'd love for you to explore our interactive oncology dashboard demo.
                    It gives you a live feel for how Keti AI quantifies chemotherapy resistance and surfaces
                    actionable clinical insights.
                  </p>

                  <!-- CTA Button -->
                  <table cellpadding="0" cellspacing="0" style="margin:0 auto 36px;">
                    <tr>
                      <td align="center" style="background:#16a34a;border-radius:8px;">
                        <a href="{$demoUrl}"
                           style="display:inline-block;padding:14px 36px;font-size:15px;font-weight:700;color:#ffffff;text-decoration:none;letter-spacing:.3px;">
                          View the Demo Dashboard &rarr;
                        </a>
                      </td>
                    </tr>
                  </table>

                  <p style="margin:0 0 6px;font-size:14px;color:#94a3b8;">Or copy this link into your browser:</p>
                  <p style="margin:0 0 32px;font-size:13px;color:#2563eb;word-break:break-all;">
                    <a href="{$demoUrl}" style="color:#2563eb;">{$demoUrl}</a>
                  </p>

                  <hr style="border:none;border-top:1px solid #e2e8f0;margin:0 0 28px;">

                  <p style="margin:0 0 6px;font-size:14px;color:#94a3b8;">A member of our team will follow up with you shortly at:</p>
                  <p style="margin:0;font-size:15px;font-weight:600;color:#0f172a;">{$email}</p>
                </td>
              </tr>

              <!-- Footer -->
              <tr>
                <td style="background:#f8fafc;padding:24px 40px;border-top:1px solid #e2e8f0;text-align:center;">
                  <p style="margin:0 0 4px;font-size:13px;color:#94a3b8;">Keti AI Lab &mdash; Precision Oncology Intelligence</p>
                  <p style="margin:0;font-size:12px;color:#cbd5e1;">You're receiving this because you reached out via ketiai.com</p>
                </td>
              </tr>

            </table>
          </td>
        </tr>
      </table>
    </body>
    </html>
    HTML;

    // Send welcome + demo link to the person who contacted us
    Mail::html($html, function ($msg) use ($name, $email) {
        $msg->to($email, $name)
            ->subject('Welcome to Keti AI — Here is Your Demo Link');
    });

    // Notify the team
    Mail::raw(
        "New contact form submission\n\nName: {$name}\nEmail: {$email}\nRole: {$role}\nMessage:\n{$message}",
        function ($msg) use ($name, $email, $role) {
            $msg->to('info@ketiai.com')
                ->replyTo($email, $name)
                ->subject("New Contact – {$name} ({$role})");
        }
    );

    return back()->with('contact_sent', true);
});

Route::post('/publications/request', function (Request $request) {
    $request->validate([
        'name'  => 'required|string|max:255',
        'email' => 'required|email|max:255',
    ]);

    $name  = $request->input('name');
    $email = $request->input('email');

    Mail::raw(
        "Full Publication Request\n\n"
        . "{$name} ({$email}) is requesting access to the full 50–100 page publications from the Keti AI website.\n\n"
        . "Please follow up with them at: {$email}",
        function ($message) use ($name, $email) {
            $message->to('info@ketiai.com')
                    ->replyTo($email, $name)
                    ->subject("Full Publication Request – {$name}");
        }
    );

    return back()->with('pub_request_sent', true);
});

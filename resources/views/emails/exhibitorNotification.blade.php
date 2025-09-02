<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPPPEX Exhibitor Registration Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid #B53438;
        }
        .logo {
            max-width: 200px;
            margin-bottom: 20px;
        }
        .title {
            color: #B53438;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .subtitle {
            color: #666;
            font-size: 16px;
        }
        .content {
            margin-bottom: 30px;
        }
        .info-box {
            background-color: #f8f9fa;
            border-left: 4px solid #B53438;
            padding: 20px;
            margin: 20px 0;
            border-radius: 5px;
        }
        .tag-number {
            background-color: #B53438;
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            display: inline-block;
            font-weight: bold;
            font-size: 18px;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            color: #666;
            font-size: 14px;
        }
        .button {
            display: inline-block;
            background-color: #B53438;
            color: white;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 5px;
            margin: 20px 0;
            font-weight: bold;
        }
        .highlight {
            color: #B53438;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="title">IPPPEX 2024</div>
            <div class="subtitle">International Paper, Publishing, Packaging & Printing Expo</div>
        </div>

        <div class="content">
            <h2>Dear <span class="highlight">{{ $company_name }}</span>,</h2>
            
            <p>Thank you for registering your interest in exhibiting at IPPPEX 2024! We're excited to have you join us for this premier industry event.</p>

            <div class="info-box">
                <h3>Registration Details</h3>
                <p><strong>Company:</strong> {{ $company_name }}</p>
                <p><strong>Email:</strong> {{ $email }}</p>
                <p><strong>Registration ID:</strong> <span class="tag-number">{{ $tagnumber }}</span></p>
            </div>

            <p>Your registration has been successfully received and is being processed by our team. We will contact you shortly with further details about:</p>
            
            <ul>
                <li>Stand availability and selection</li>
                <li>Exhibition package options</li>
                <li>Technical specifications and requirements</li>
                <li>Payment and booking procedures</li>
                <li>Event logistics and setup information</li>
            </ul>

            <p>If you have any immediate questions or need assistance, please don't hesitate to contact us:</p>
            
            <div class="info-box">
                <p><strong>Phone:</strong> +234 803 545 7443</p>
                <p><strong>Email:</strong> info@ipppex.com.ng</p>
                <p><strong>Address:</strong> 44 Abeokuta Street Anifowoshe-Ikeja Lagos</p>
            </div>

            <p>We look forward to making IPPPEX 2024 a successful and memorable event for all participants!</p>
        </div>

        <div class="footer">
            <p>Best regards,<br>
            <strong>IPPPEX Team</strong></p>
            
            <p>Follow us on social media for updates:</p>
            <p>
                <a href="https://web.facebook.com/ipppexdcsexpo" style="color: #B53438; text-decoration: none; margin: 0 10px;">Facebook</a> |
                <a href="https://twitter.com/ipppexpo" style="color: #B53438; text-decoration: none; margin: 0 10px;">Twitter</a> |
                <a href="https://www.instagram.com/ipppexdcs/" style="color: #B53438; text-decoration: none; margin: 0 10px;">Instagram</a> |
                <a href="https://www.linkedin.com/in/international-paper-publishing-packaging-printing-expo-787554286/" style="color: #B53438; text-decoration: none; margin: 0 10px;">LinkedIn</a>
            </p>
            
            <p style="margin-top: 20px; font-size: 12px; color: #999;">
                This email was sent to {{ $email }}. If you have any questions, please contact our support team.
            </p>
        </div>
    </div>
</body>
</html>


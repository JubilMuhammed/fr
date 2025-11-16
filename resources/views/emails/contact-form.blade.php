<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #1a1a1a;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .content {
            background-color: #f9f9f9;
            padding: 30px;
            border: 1px solid #ddd;
        }
        .field {
            margin-bottom: 20px;
        }
        .field-label {
            font-weight: bold;
            color: #555;
            margin-bottom: 5px;
        }
        .field-value {
            padding: 10px;
            background-color: #fff;
            border-left: 3px solid #1a1a1a;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            padding: 20px;
            color: #777;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>New Contact Form Submission</h2>
    </div>
    
    <div class="content">
        <div class="field">
            <div class="field-label">Name:</div>
            <div class="field-value">{{ $data['name'] }}</div>
        </div>

        <div class="field">
            <div class="field-label">Email:</div>
            <div class="field-value">{{ $data['email'] }}</div>
        </div>

        <div class="field">
            <div class="field-label">Phone:</div>
            <div class="field-value">{{ $data['phone'] }}</div>
        </div>

        <div class="field">
            <div class="field-label">Project Budget:</div>
            <div class="field-value">{{ $data['budget'] }}</div>
        </div>

        <div class="field">
            <div class="field-label">Message:</div>
            <div class="field-value">{{ $data['message'] }}</div>
        </div>
    </div>

    <div class="footer">
        <p>This email was sent from your portfolio contact form.</p>
    </div>
</body>
</html>
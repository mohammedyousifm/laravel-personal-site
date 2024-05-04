<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>رسالة تواصل جديدة</title>
    <style>
        body {
            font-family: 'Tahoma', sans-serif;
            /* A font family that supports Arabic characters */
            background-color: #f4f4f4;
            /* Light grey background */
            color: #333;
            /* Dark grey text for readability */
            padding: 20px;
            /* Adds padding around the email content */
            direction: rtl;
            /* Right-to-left direction for Arabic */
            text-align: right;
            /* Right-align text for Arabic */
        }

        .email-container {
            background-color: #ffffff;
            /* White background for the main content area */
            padding: 20px;
            border-radius: 8px;
            /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Subtle shadow */
            margin: 20px auto;
            max-width: 600px;
            /* Maximum width and center alignment */
        }

        p {
            font-size: 16px;
            /* Slightly larger font size for readability */
            line-height: 1.6;
            /* Line height for better readability in Arabic */
            margin-bottom: 10px;
            /* Space between paragraphs */
        }

        .email-header {
            font-size: 20px;
            /* Larger font size for the header */
            color: #444;
            /* Slightly darker than regular text */
            margin-bottom: 20px;
            /* Space below the header */
        }

        .highlight {
            color: #0056b3;
            /* A blue color for important names or links */
            font-weight: bold;
            /* Makes certain text stand out */
        }
    </style>
</head>

<body>
    <div class="email-container">
        <p class="email-header">رسالة تواصل جديدة</p>
        <p><strong>الاسم:</strong> {{ $details['name'] }}</p>
        <p><strong>البريد الإلكتروني:</strong> {{ $details['email'] }}</p>
        <p><strong>الرسالة:</strong> {{ $details['subject'] }}</p>
    </div>
</body>

</html>

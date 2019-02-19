<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Email confirmation</title>
</head>
<body>
<h1>Thanks for your registration!</h1>

<p>
    Please click the link below to confirm your registration:
    <a href="{{ route('confirm_email', $user->activation_token) }}">
        {{ route('confirm_email', $user->activation_token) }}
    </a>
</p>

<p>
    If this is not your own operation, please ignore this message.
</p>
</body>
</html>

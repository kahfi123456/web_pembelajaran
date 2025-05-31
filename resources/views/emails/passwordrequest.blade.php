<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
</head>
<body>
    <h2>Halo, {{ $mahasiswa->email }}</h2>
    <p>Kami menerima permintaan untuk mengatur ulang password akun Anda.</p>

    <p>Silakan klik tombol di bawah ini untuk mengatur ulang password Anda:</p>

    {{-- <a href="{{ url('/reset-password/' . $mahasiswa->token) }}" style="padding: 10px 20px; background-color: #007bff; color: #fff; text-decoration: none; border-radius: 5px;">
        Reset Password
    </a> --}}

    <p>Jika Anda tidak meminta ini, abaikan email ini.</p>

    <p>Terima kasih,<br>Tim Support Universitas</p>
</body>
</html>

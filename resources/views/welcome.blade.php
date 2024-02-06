<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome</h1>
    <p>Selamat datang, <span id="user_name"></span>!</p>

    <script>
        // Ambil data nama dari URL dan tampilkan di halaman
        const urlParams = new URLSearchParams(window.location.search);
        const firstName = urlParams.get('first_name');
        const lastName = urlParams.get('last_name');
        document.getElementById('user_name').textContent = `${firstName} ${lastName}`;
    </script>
</body>
</html>

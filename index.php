<?php
// Halaman login Cashie
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Cashie</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="login-body">

    <main class="login-container">

        <section class="login-brand">
            <div class="brand-content">
                <img src="assets/img/logocashie.jpeg"
                    alt="Logo Cashie"
                    class="cashie-logo">
            </div>

            <div class="brand-footer">
                <span>Cashie - Smart Cashier System</span>
            </div>
        </section>

        <section class="login-form-section">
            <div class="login-form-wrapper">

                <div class="helpdesk">
                    <span>Helpdesk</span>
                </div>

                <p class="login-tagline">
                     Manage Smart. Grow Faster.
                </p>

                <h2>Welcome!</h2>

                <p class="login-description">
                     Silahkan masuk ke akun kasir anda.
                </p>

                <form action="#" method="POST">

                    <div class="form-group">
                        <label for="username">Email atau username</label>
                        <input
                            type="text"
                            id="username"
                            name="username"
                            placeholder="Masukkan email atau username"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Masukkan password"
                            required
                        >
                    </div>

                    <button type="submit" 
                    class="login-button">
                        Log in
                    </button>
                    <p class="register-link">
                        Belum punya akun?
                        <a href="register.php">Daftar sekarang</a>
                    </p>

                </form>

            </div>
        </section>

    </main>

</body>
</html>
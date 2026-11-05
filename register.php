<?php
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Cashie</title>
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
            <div class="login-form-wrapper register-form-wrapper">

                <div class="helpdesk">
                    <span>Helpdesk</span>
                </div>

                <h2>Create Account</h2>

                <p class="login-description">
                    Daftarkan akun Anda untuk mulai menggunakan Cashie.
                </p>

                <form action="#" method="POST">

                    <div class="form-group">
                        <label for="fullname">Nama lengkap</label>
                        <input type="text" id="fullname"
                               name="fullname"
                               placeholder="Masukkan nama lengkap"
                               required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email"
                               name="email"
                               placeholder="Masukkan email"
                               required>
                    </div>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username"
                               name="username"
                               placeholder="Buat username"
                               required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password"
                               name="password"
                               placeholder="Buat password"
                               minlength="8"
                               required>
                    </div>

                    <div class="form-group">
                        <label for="confirm_password">
                            Konfirmasi password
                        </label>
                        <input type="password"
                               id="confirm_password"
                               name="confirm_password"
                               placeholder="Ulangi password"
                               minlength="8"
                               required>
                    </div>

                    <button type="submit" class="login-button">
                        Register
                    </button>

                </form>

                <p class="register-link">
                    Sudah punya akun?
                    <a href="index.php">Login di sini</a>
                </p>

            </div>
        </section>

    </main>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">

</head>
<body>
    <div class="login-page">
        <div class="form">
            <form action="<?= base_url("aksi_registration") ?>" method="post" class="register-form">
            <input type="text" name="username" placeholder="username"/>
            <input type="password" name="password" placeholder="password"/>
            <input type="text" name="nama" placeholder="nama lengkap"/>
            <button>Daftar</button>
            <p class="message">sudah punya akun? <a href="#">Sign In</a></p>
            </form>
            <form action="<?= base_url("aksi_login") ?>" method="post" class="login-form">
            <input type="text" placeholder="username" name="username"/>
            <input type="password" placeholder="kata sandi" name="password"/>
            <button type="submit">login</button>
            <p class="message">Belum punya akun? <a href="#">Bikin Akun</a></p>
            </form>
        </div>
    </div>
    <script src="<?= base_url("js/jquery.min.js") ?>"></script>
    <script>
        $('.message a').click(function(){
            $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
        });
    </script>
</body>
</html>
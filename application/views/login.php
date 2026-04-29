<style type="text/css">
html,
body {
    min-height: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
}

body {
    background: linear-gradient(rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.35)), url("<?php echo base_url('assets/nulagunalogo.jpg') ?>") center center / cover no-repeat fixed;
    color: #fff;
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
}

.wrapper {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 25px;
}

.form-signin {
    width: 100%;
    max-width: 450px;
    padding: 35px 30px 40px;
    background-color: rgba(255, 255, 255, 0.92);
    border-radius: 16px;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.25);
}

.form-signin .form-signin-heading,
.form-signin .checkbox {
    margin-bottom: 30px;
}

.form-signin .checkbox {
    font-weight: normal;
}

.form-signin .form-control {
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    box-sizing: border-box;
}

.form-signin .form-control:focus {
    z-index: 2;
}

.form-signin .login-logo {
    max-width: 160px;
    height: auto;
    display: block;
    margin: 0 auto 15px;
}

.form-signin .logo-container {
    margin-bottom: 10px;
}

.form-signin .logo-title {
    margin: 0;
    font-size: 24px;
    font-weight: 700;
    letter-spacing: 0.05em;
    color: #1f1f1f;
}

.form-signin input[type="text"],
.form-signin input[type="password"] {
    border-radius: 0;
}

.form-signin input[type="text"] {
    margin-bottom: 0;
}

.form-signin input[type="password"] {
    margin-bottom: 0;
}

.form-signin .btn {
    font-weight: 600;
}

@media (max-width: 575px) {
    .form-signin {
        padding: 25px 20px 30px;
    }
}

.form-signin .login-icon {
    width: 70px;
    height: auto;
    display: inline-block;
    margin-bottom: 10px;
}
</style>

<div class="wrapper">
    <?php
	$attributes = array( 
	'class' => 'form-signin'
	);
	?>
    <?php echo form_open('AuthController/login_validation',$attributes )?>
    <div class="logo-container text-center">
        <img src="<?php echo base_url('assets/nulogo.png'); ?>" alt="NU Laguna Logo" class="login-logo">
    </div>
    <br>
    <?php if($this->session->flashdata('error')): ?>
    <div class="form-group">
        <?php echo ($this->session->flashdata('error'))?>
    </div>
    <?php endif; ?>
    <div class="input-group form-group">
        <span class="input-group-addon"><i class="fa fa-user " aria-hidden="true"></i></span>
        <label class="sr-only" for="username">Username</label>
        <input autocomplete="username" id="username" type="text" class="form-control input-md" name="username"
            placeholder="Username">
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon"><i class="fa fa-key " aria-hidden="true"></i></span>
        <label class="sr-only" for="password">Password</label>
        <input autocomplete="current-password" id="password" type="password" class="form-control input-md"
            name="password" placeholder="Password">
    </div>

    <div class="form-group">
        <button class="btn btn-md btn-primary btn-block" type="submit">Login</button>
    </div>
    <p class="text-center" style="color: #777">&copy; 2023 All Rights Reserved <br> Developed for: <a
            href="https://national-u.edu.ph/nu-laguna/">NU-Laguna Assets Management Office</a></p>
    <?php echo form_close() ?>
</div>
</body>

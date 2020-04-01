<?php
    session_start();
?>
<?php include_once('./includes/header.php'); ?>
<body class="login">

<div class="logo">
    <a href="javascript:;">
        User Panel
    </a>
</div>
<div class="content">
    <form action="includes/functions.php" class="login-form" method="POST" autocomplete="off">
    <h3 class="form-title font-green">Sign In</h3>
    <div id="error"></div>
    <?php
            if(isset($_GET['error'])){
                if($_GET['error'] == "emptyfields"){
                    echo '<p class="signuperror">Fill in all fields!</p>';
                }elseif($_GET['error'] == "wrongpwd"){
                    echo '<p class="signuperror">Wrong Password. Please Try Again</p>';
                }elseif($_GET['error'] == "nouser"){
                    echo '<p class="signuperror">User does not exist. Please Register</p>';
                }
            }
        ?>
    <div class="form-group form-md-line-input">
        <label class="control-label visible-ie8 visible-ie9">Username</label>
        <input class="form-control" type="text" placeholder="Username" name="username" id="username" autocomplete="new-username">
        <span class="help-block help-block-error"> </span>
        <div class="form-control-focus"> </div>
    </div>
    <div class="form-group form-md-line-input">
        <label class="control-label visible-ie8 visible-ie9">Password</label>
        <input class="form-control" type="password" placeholder="Password" name="password" id="password" autocomplete="new-password">
        <span class="help-block help-block-error"> </span>
        <div class="form-control-focus"> </div>
    </div>
    <div class="form-actions">
        <button type="submit" name="login-btn" class="btn green uppercase btn-xs btn-outline">Login</button>
        <span class="md-checkbox has-success m-l-20">
            <input type="checkbox" id="remember" class="md-check" name="remember" value="1">
                <label for="remember">
                    <span class="inc"></span>
                    <span class="check"></span>
                    <span class="box"></span> Remember </label>
        </span>
    <a href="./forgot_password.php" id="forget-password" class="forget-password">Forgot Password?</a>
    </div>

    <div class="create-account">
        <p>
            <a href="./register.php" id="register-btn" class="uppercase">Create an account</a>
        </p>
    </div>
</form>

</div>
<?php include_once('./includes/footer.php'); ?>

<?php include_once('./includes/header.php'); ?>
<body class="login" style="">
<div class="logo">
    <a href="javascript:;">
        User Panel
    </a>
</div>

<div class="content">
    <form action="includes/functions.php" method="POST" class="register-form" style="display: block;">
        <h3 class="font-green">Sign Up</h3>
        <div id="errorRegister"></div>
        <p class="hint"> Enter your personal details below: </p>
        <?php
            if(isset($_GET['error'])){
                if($_GET['error'] == "emptyfields"){
                    echo '<p class="signuperror">Fill in all fields!</p>';
                }elseif($_GET['error'] == "invalidusernameRegister"){
                    echo '<p class="signuperror">Invalid username!</p>';
                }elseif($_GET['error'] == "invalidemailRegister"){
                    echo '<p class="signuperror">Invalid email!</p>';
                }elseif($_GET['error'] == "passwordcheck"){
                    echo '<p class="signuperror">Your passwords do not match!</p>';
                }elseif($_GET['error'] == "usertaken"){
                    echo '<p class="signuperror">Username is already taken!</p>';
                }
            }
        ?>
        <div class="form-group form-md-line-input register show">
            <input class="form-control" type="text" placeholder="Name" name="nameRegister" id="nameRegister">
            <label class="control-label visible-ie8 visible-ie9">Name</label>
            <span class="form-control-focus"> </span>
        </div>
        <div class="form-group form-md-line-input register show">
            <input class="form-control placeholder-no-fix" type="text" placeholder="Username" name="usernameRegister" id="usernameRegister">
            <label class="control-label visible-ie8 visible-ie9">Username</label>
            <span class="form-control-focus"> </span>
        </div>
        <div class="form-group form-md-line-input register show">
            <input class="form-control" type="password" id="passwordRegister" placeholder="Password" name="passwordRegister">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <span class="form-control-focus"> </span>
        </div>
        <div class="form-group form-md-line-input register show">
            <input class="form-control" type="password" placeholder="Re-type Your Password" name="cpasswordRegister" id="cpasswordRegister">
            <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
            <span class="form-control-focus"> </span>
        </div>
        <div class="form-group form-md-line-input register show">
            <input class="form-control" type="email" placeholder="Email" name="emailRegister" id="emailRegister">
            <label class="control-label visible-ie8 visible-ie9">Email</label>
            <span class="form-control-focus"> </span>
        </div>
        <div class="form-group register show">
            <input class="form-control" type="text" placeholder="captcha" name="captcha" id="captcha">
            <label class="control-label visible-ie8 visible-ie9">Captcha</label>
            <div class="g-recaptcha" ><img src="captcha.php" ></div>
        </div>
        <div class="form-actions">
            <button type="button" id="register-back-btn" class="btn dark btn-outline" onclick="window.location.href = 'index.php'">Back</button>
            <button type="submit" name="reg-btn" id="register-submit-btn" class="btn green uppercase btn-outline pull-right register show">Sign Up</button>
        </div>
    </form>
</div>

<?php include_once('./includes/footer.php'); ?>


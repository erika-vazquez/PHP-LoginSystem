<?php include_once('./includes/header.php'); ?>

<body class="login" style="">


<!-- BEGIN LOGO -->
<div class="logo">
    <a href="javascript:;">
        User Panel
    </a> 
</div>

<div class="content">
    <form class="forget-form" style="display: block;">
        <h3 class="font-green">Forgot Password ?</h3>
        <p> Enter your username address below to reset your password. </p>
         <div id="errorForget"></div>
        <div id="alert"><div class="alert alert-danger">This username is not registered. Please type the correct username</div></div><div class="form-group form-md-line-input forget show">
            <input class="form-control placeholder-no-fix" type="text" placeholder="username" name="usernameForget" id="usernameForget">
            <div class="form-control-focus"> </div>
        </div>
        <div class="form-actions">
            <button type="button" id="back-btn" class="btn dark btn-outline" onclick="window.location.href = 'index.php'">Back</a></button>
            <button type="submit" class="btn green uppercase btn-outline pull-right forget show"  id="forget-btn" name="forgot-btn">Submit</button>
        </div>
    </form>
</div>

<?php include_once('./includes/footer.php'); ?>

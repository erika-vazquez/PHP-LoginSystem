<?php
//Sign Up
if(isset($_POST['reg-btn'])){ //////////////////// SIGN UP //////////////////

    require 'db.php';

    $name = $_POST['nameRegister'];
    $username = $_POST['usernameRegister'];
    $password = $_POST['passwordRegister'];
    $passwordRepeat = $_POST['cpasswordRegister'];
    $email = $_POST['emailRegister'];

    if(empty($name) || empty($username) || empty($password) || empty($passwordRepeat) || empty($email)){
        header("Location: ../register.php?error=emptyfields&nameRegister=".$name."&usernameRegister=".$username."&emailRegister=".$email);
        exit();
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("Location: ../register.php?error=invalidemailRegister&usernameRegister");
        exit();
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../register.php?error=invalidemailRegister&usernameRegister=".$username);
        exit();
    }elseif(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("Location: ../register.php?error=invalidusernameRegister&emailRegister=".$email);
        exit();
    }elseif($password !== $passwordRepeat){
        header("Location: ../register.php?error=passwordcheck&usernameRegister=".$username."&emailRegister=".$email);
        exit();
    }else{

        $sql = "SELECT username FROM users WHERE username=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../register.php?error=sqlerror");
            exit();
        }else{
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if($resultCheck > 0){
                header("Location: ../register.php?error=usertaken&emailRegister".$email);
                exit();
            }else{
                $sql = "INSERT INTO users (name, username, password, email) VALUES (?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../register.php?error=sqlerror");
                    exit();
                }else{
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "ssss", $name, $username, $hashedPwd, $email);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../register.php?signup=success");
                    exit();                
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    } elseif(isset($_POST['login-btn'])){ /////////////// LOGIN ///////////////////

        require 'db.php';

        $usernameLogin = $_POST['username'];
        $passwordLogin = $_POST['password'];

        if(empty($usernameLogin) || empty($passwordLogin)){
            header("Location: ../index.php?error=emptyfields");
            exit();     
        }else{
            $sql = "SELECT * FROM users WHERE username=?;";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: ../index.php?error=sqlerror");
                exit();     
            }else{

                mysqli_stmt_bind_param($stmt, "ss", $usernameLogin, $usernameLogin); 
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if ($row= mysqli_fetch_assoc($result)){ 
                    $pwdCheck = password_verify($passwordLogin, $row['password']);
                    if($pwdCheck == false){
                        header("Location: ../index.php?error=wrongpwd");
                        exit();     
                    }elseif($pwdCheck == true){
                        session_start();
                        $_SESSION['userId'] = $row['id'];
                        $_SESSION['userUid'] = $row['username'];

                        header("Location: ../index.php?login=success");
                        exit();     
                    }
                    else{
                        header("Location: ../index.php?error=error");
                        exit();     
                    }
                }else{
                    header("Location: ../index.php?error=nouser");
                        exit();     
                }
            }
        }
        
    }elseif(isset($_POST['forgot-btn'])){ //////////////////// Forgot Password ////////////////
        require 'db.php';

        $usernameF = $_POST['usernameForget'];

        $query = mysqli_query($conn,"SELECT * FROM users where username='$usernameF'") or die(mysqli_error($conn)); 

        $numrows = $query->num_rows();                                  

        if ($numrows == 1) {  
            $code=rand(100,999);
            $message='Your activation link is: http://bing.fun2pk.com/forgot.php?email=$email&code=$code';
            mail($email, "Subject Goes Here", $message);
            echo 'Email sent';
        } else {
            echo 'No user exist';
        }
    }elseif(isset($_POST['add-btn'])){ //////////// CREATE USER ///////////////
        require 'db.php';

        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        if(empty($name) || empty($username) || empty($password) || empty($email)){
            header("Location: ../add_user.php?error=emptyfields&nameRegister=".$name."&usernameRegister=".$username."&emailRegister=".$email);
            exit();
        }else{
    
            $sql = "SELECT username FROM users WHERE username=?";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: ../add_user.php?error=sqlerror");
                exit();
            }else{
                mysqli_stmt_bind_param($stmt, "s", $username);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $resultCheck = mysqli_stmt_num_rows($stmt);
                if($resultCheck > 0){
                    header("Location: ../add_user.php?error=usertaken&emailRegister".$email);
                    exit();
                }else{
                    $sql = "INSERT INTO users (name, username, password, email) VALUES (?, ?, ?, ?)";
                    $stmt = mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt, $sql)){
                        header("Location: ../add_user.php?error=sqlerror");
                        exit();
                    }else{
                        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
    
                        mysqli_stmt_bind_param($stmt, "ssss", $name, $username, $hashedPwd, $email);
                        mysqli_stmt_execute($stmt);
                        header("Location: ../add_user.php?signup=success");
                        exit();                
                    }
                }
            }
        }
    }elseif(isset($_POST['update-btn'])){ //////////////////// Update/Edit User ////////////////
        require 'db.php';

        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
 
    $id = $_POST['id'];
 
    $sql = "UPDATE users SET name = '$name', username = '$username', password = '$password', email = '$email' WHERE id = {$id}";
        if($connect->query($sql) === TRUE) {
            echo "<p>Succcessfully Updated</p>";
        } else {
            echo "Erorr while updating record : ". $connect->error;
        }
    }elseif(isset($_POST['delete-btn'])){ //////////////////// Delete/Remove User ////////////////
        require 'db.php';

        $id = $_GET['delete_id'];
        $query = mysqli_query($conn, "DELETE FROM users WHERE id = '$id'");
        if($query){
        header("location:users.php");
        }else{
        echo "Error while deleteing record";
        }
    }else{
        echo "No form submission";
        //header("Location: ../index.php");
        exit();     
    }



?>


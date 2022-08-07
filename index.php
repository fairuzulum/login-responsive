<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body>
    <div class="form-container sign-in-form">
        <div class="form-box sign-in-box">
            <h2>Login</h2>
            <form action="">
                <div class="field">
                    <i class="uil uil-at"></i>
                    <input type="email" placeholder="Email ID" required>
                </div>
                <div class="field">
                    <i class="uil uil-lock-alt"></i>
                    <input type="password" class="password-input" placeholder="Password" required>
                    <div class="eye-btn"><i class="uil uil-eye-slash"></i></div>
                </div>
                <div class="forgot-link">
                    <a href="">Forgot Password</a>
                </div>
                <input type="submit" class="submit-btn" value="Login">
            </form>
            <div class="login-options">
                <p class="text">Or, login with...</p>
                <div class="other-logins">
                    <a href=""><img src="img/google.png" alt=""></a>
                    <a href=""><img src="img/facebook.png" alt=""></a>
                    <a href=""><img src="img/github.png" alt=""></a>
                </div>
            </div>
        </div>
        <div class="imgBox sign-in-imgBox">
            <div class="sliding-link">
                <p>Don't have an account?</p>
                <span class="sign-up-btn">Sign up</span>
            </div>
            <img src="img/sign.jpg" alt="">
        </div>
    </div>

    <div class="form-container sign-up-form">
        <div class="imgBox sign-up-imgBox">
            <div class="sliding-link">
                <p>Already a member?</p>
                <span class="sign-in-btn">Sign in</span>
            </div>
            <img src="img/signup.jpg" alt="">
        </div>
        <div class="form-box sign-up-box">
            <h2>Sign up</h2>
            <div class="login-options">
                <div class="other-logins">
                    <a href=""><img src="img/google.png" alt=""></a>
                    <a href=""><img src="img/facebook.png" alt=""></a>
                    <a href=""><img src="img/github.png" alt=""></a>
                </div>
                <p class="text">Or, sign up with email...</p>
            </div>
            <form action="">
                <div class="field">
                    <i class="uil uil-at"></i>
                    <input type="email" placeholder="Email ID" required>
                </div>
                <div class="field">
                    <i class="uil uil-user"></i>
                    <input type="text" placeholder="Full name" required>
                </div>
                <div class="field">
                    <i class="uil uil-lock-alt"></i>
                    <input type="password" placeholder="Password" required>
                </div>
                <div class="field">
                    <i class="uil uil-lock-access"></i>
                    <input type="password" placeholder="Confirm password" required>
                </div>
                <input type="submit" class="submit-btn" value="Sign up">
            </form>
           
        </div>
    </div>
    <script>
        const textInputs = document.querySelectorAll("input");

        textInputs.forEach(textInputs => {
            textInputs.addEventListener("focus", () => {
                let parent = textInputs.parentNode;
                parent.classList.add("active");
            });
            textInputs.addEventListener("blur", () => {
                let parent = textInputs.parentNode;
                parent.classList.remove("active");
            });
        });

        //password showhide
        const passwordInput = document.querySelector(".password-input");
        const eyeBtn = document.querySelector(".eye-btn");

        eyeBtn.addEventListener("click", () => {
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeBtn.innerHTML = "<i class='uil uil-eye'></i>"
            } else {
                passwordInput.type = "password";
                eyeBtn.innerHTML = "<i class='uil uil-eye-slash'></i>"
            }
        });

        //sliding between signin & signup
        const signUpBtn = document.querySelector(".sign-up-btn");
        const signInBtn = document.querySelector(".sign-in-btn");
        const signUpForm = document.querySelector(".sign-up-form");
        const signInForm = document.querySelector(".sign-in-form");

        signUpBtn.addEventListener("click", () => {
            signInForm.classList.add("hide");
            signUpForm.classList.add("show");
            signInForm.classList.remove("show");
        });
        signInBtn.addEventListener("click", () => {
            signInForm.classList.remove("hide");
            signUpForm.classList.remove("show");
            signInForm.classList.add("show");
        });
    </script>
</body>

</html>
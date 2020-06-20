<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <link rel="stylesheet" href="https://colorlib.com/etc/regform/colorlib-regform-7/fonts/material-icon/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" href="https://colorlib.com/etc/regform/colorlib-regform-7/css/style.css">
</head>

<body>
    <div class="main">

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="get" class="register-form" id="register-form" action="{{URL::to('/store')}}">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="firstname" id="name" placeholder="First Name" />
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="lastname" id="name" placeholder="Last Name" />
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-user material-icons-user"></i></label>
                                <input type="text" name="gender" id="name" placeholder="Gender" />
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="name" placeholder="User Name" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" />
                            </div>

                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-city"></i></label>
                                <input type="text" name="city" id="pass" placeholder="City" />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-phone"></i></label>
                                <input type="text" name="mobile" id="pass" placeholder="Mobile Number" />
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-department material-icons-department"></i></label>
                                <input type="text" name="department" id="name" placeholder="Department" />
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-department material-icons-department"></i></label>
                                <input type="text" name="password" id="name" placeholder="Password" />
                            </div>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="https://colorlib.com/etc/regform/colorlib-regform-7/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>


    </div>

    <script src="https://colorlib.com/etc/regform/colorlib-regform-7/vendor/jquery/jquery.min.js" type="3760c09e344594b19f6eece3-text/javascript"></script>
    <script src="https://colorlib.com/etc/regform/colorlib-regform-7/js/main.js" type="3760c09e344594b19f6eece3-text/javascript"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="3760c09e344594b19f6eece3-text/javascript"></script>
    <script type="3760c09e344594b19f6eece3-text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="3760c09e344594b19f6eece3-|49" defer=""></script>
</body>

</html>
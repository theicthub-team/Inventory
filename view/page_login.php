<?php
session_start();
session_destroy();
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="../resources/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../resources/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../resources/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../resources/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../resources/vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="../resources/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form id="authentication" onsubmit="authenticate(); return false;">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                        </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                        </div>
                                <div class="checkbox">
                                    <label>
                                <input type="checkbox"> Remember Me
                            </label>
                                    <label class="pull-right">
                                <a href="#">Forgotten Password?</a>
                            </label>

                                </div>

                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                                <div class="social-login-content">
                                    <div class="social-button">
                                        <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Sign in with facebook</button>
                                        <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Sign in with twitter</button>
                                    </div>
                                </div>
                                <div class="register-link m-t-15 text-center">
                                    <p>Don't have account ? <a href="page-register.html"> Sign Up Here</a></p>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!--<script src="vendors/jquery/dist/jquery.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="../resources/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="../resources/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../resources/assets/js/main.js"></script>
    <script>
        function authenticate()
        {

            var email= document.getElementById('email').value;
            var password= document.getElementById('password').value;
           // var email="abdullahalrifat95@gmail.com";
           // var password="accessdenied";
            var login = "authenticate";
            var token;
            var user_id;
            var user_type_Name;
            var user_type_access_level;
            var user_Status;

            // alert(From+" "+To);
            jQuery.ajax({
                type: 'POST',
                url: '../apis/token_based_user_authenticate.php',
                cache: false,
                //dataType: "json", // and this
                data: {
                    email: email,
                    password: password,
                    login: login
                },

                success: function(response) {
                    //alert(response);
                    //alert("response : "+JSON.stringify(response));
                    //document.forms["authentication"].submit();

                    var obj = JSON.parse(response);

                    token = obj.token;
                    //alert("token: "+token);
                    var datas = obj.user_authenticate;
                    for (var key in datas) {
                        if (datas.hasOwnProperty(key)) {
                           //alert(datas[key].user_id);
                            user_id = datas[key].user_id;
                            user_type_Name = datas[key].user_type_Name;
                            user_type_access_level = datas[key].user_type_access_level;
                            user_Status = datas[key].user_Status;

                            //alert(user_Status);
                            //alert(user_leave_count);
                           //alert(datas[key].user_Name);
                           //alert(datas[key].user_PhoneNo);
                           //alert(datas[key].user_Email);
                           //alert(datas[key].user_designation_Name);
                           //alert(datas[key].user_type_Name);
                           //alert(datas[key].user_type_access_level);

                        }
                    }

                    //window.open("dashboard.html","_self");
                    //alert(response);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    //console.log(textStatus, errorThrown);
                    alert("alert : "+errorThrown);
                },
                complete:function(response) {
                    //alert(response);
                    jQuery.ajax({
                        type: 'POST',
                        url: '../controller/define_session.php',
                        cache: false,
                        //dataType: "json", // and this
                        data: {
                            token: token,
                            user_id: user_id,
                            user_type_Name: user_type_Name,
                            user_type_access_level:user_type_access_level,
                            user_Status:user_Status,

                        },

                        success: function(response) {
                           // alert(response);
                            //alert("response : "+JSON.stringify(response));
                            //document.forms["authentication"].submit();
                            var obj = JSON.parse(response);

                            user_authenticate = obj.user_authenticate;

                            if(user_authenticate == "True")
                            {
                                if(user_type_access_level > 1)
                                    window.open("admin/index.php","_self");
                                else
                                    window.open("dashboard.php","_self");
                            }
                            else
                            {
                                alert("Authentication Error !!!");

                            }

                            //window.open("dashboard.html","_self");
                            //alert(response);
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            //console.log(textStatus, errorThrown);
                            alert("alert : "+errorThrown);
                        }
                    });
                }
            });
        }
        // authenticate();
    </script>

</body>

</html>

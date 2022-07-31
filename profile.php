<html>
    <head>
        <title>Ldrp-itr</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <style>
        .navbar-default .navbar-nav>li>a {
            color: lavender;
        }
        .navbar-default .navbar-nav>li>a:hover {
            color: cadetblue;
            background-color: transparent;
        }
        * {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        .item {
            position: relative;

            border: 1px solid #333;
            margin: 2%;
            overflow: hidden;
            /*width: 540px;*/
        }
        .item img {
            max-width: 100%;

            -moz-transition: all 0.3s;
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
        }
        .item:hover img {
            -moz-transform: scale(1.1);
            -webkit-transform: scale(1.1);
            transform: scale(1.4);
        }
    </style>
<body style="font-family: verdana, sans-serif;">
    <div class="container" style="margin:100px;padding:100px;margin-top: 10px;">
        <?php
        include_once 'header.php';
        ?>
        <h1 style="text-align: center;margin-top:40px;margin-bottom: 30px">Your Profile</h1>

        <div class="row">
            <div id="content" class="col-md-12" role="main">
                <form onsubmit="signup_edit();return false;">
                    <div class="alert alert-danger d3" style="display:none">
                        Something went's wrong,please try aain later
                    </div>
                    <div class="alert alert-success s3" style="display:none">
                        Data saved Successfully
                    </div>
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" id="firstname_e" placeholder="Please Enter First Name" required="true" value="<?= isset($_SESSION['first_name']) ? $_SESSION['first_name'] : '' ?>">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" id="lastname_e" placeholder="Please Enter Last Name" required="true" value="<?= isset($_SESSION['last_name']) ? $_SESSION['last_name'] : '' ?>">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Email</label>
                        <input type="email" class="form-control" id="email_id_e" placeholder="Please Enter Email Address" required="true" value="<?= isset($_SESSION['email_id']) ? $_SESSION['email_id'] : '' ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">UserId</label>
                        <input type="text" class="form-control" id="eUser_e" placeholder="User id" required="true" value="<?= isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '' ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="ePassword_e" minlength="5" maxlength="20" placeholder="Password" required="true" value="<?= isset($_SESSION['password']) ? $_SESSION['password'] : '' ?>">
                    </div>

                    <div class="row" style="text-align:center">
                        <button type="submit" class="btn btn-default btn-lg" style="padding:10px 30px 10px 30px !important">Submit</button>
                    </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once 'footer.php';
?>
</body>
</html>
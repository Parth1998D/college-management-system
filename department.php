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
         .card{
            box-shadow: 0 4px 2px 0 #76323f, 0 4px 5px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2) !important;
    
    background-color: #efebe9 !important;
    margin-bottom: 50px !important;
        }
    </style>
<body style="font-family: verdana, sans-serif;">
    <div class="container" style="margin:100px">
        <?php
        include_once 'header.php';
        ?>
        <h1 style="text-align: center;margin-top:40px;margin-bottom: 30px">Departments</h1>


        <div class="row">
            <!--start-->
            <div class="col-sm-4" >
                <div class="card" style="width: 35rem;text-align:center;background-color: #fff;transition: box-shadow .25s, -webkit-box-shadow .25s;border-radius: 2px;box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);padding: 15px;margin-bottom: 15px">

                <div class="item card" >
                    <img src="http://localhost/college_management_system/images/it.jpg" alt="Information Technology" style="width:306px">

                    <div class="item-overlay top"></div>
                </div>
                <div class="card-body">
                    <h4 class="card-title"><b>Information Technology</b></h4>

                </div>

</div>
            </div>
            <!--end-->
            <div class="col-sm-4" >
<div class="card" style="width: 35rem;text-align:center;background-color: #fff;transition: box-shadow .25s, -webkit-box-shadow .25s;border-radius: 2px;box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);padding: 15px;margin-bottom: 15px">

                <div class="item card" >
                    <img src="http://localhost/college_management_system/images/ce.jpg" alt="Computer Engineering" style="width:306px">

                    <div class="item-overlay top"></div>
                </div>
                <div class="card-body">
                    <h4 class="card-title"><b>Computer Engineering</b></h4>

                </div>

</div>
            </div>
            <div class="col-sm-4" >
<div class="card" style="width: 35rem;text-align:center;background-color: #fff;transition: box-shadow .25s, -webkit-box-shadow .25s;border-radius: 2px;box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);padding: 15px;margin-bottom: 15px">

                <div class="item card" >
                    <img src="http://localhost/college_management_system/images/me.jpg" alt="Mechanical Engineering" style="width:306px">

                    <div class="item-overlay top"></div>
                </div>
                <div class="card-body">
                    <h4 class="card-title"><b>Mechanical Engineering</b></h4>

                </div>

</div>
            </div>
            <div class="col-sm-4" >
<div class="card" style="width: 35rem;text-align:center;background-color: #fff;transition: box-shadow .25s, -webkit-box-shadow .25s;border-radius: 2px;box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);padding: 15px;margin-bottom: 15px">

                <div class="item card" >
                    <img src="http://localhost/college_management_system/images/ec.jpg" alt="Electronics & Communication" style="width:306px">

                    <div class="item-overlay top"></div>
                </div>
                <div class="card-body">
                    <h4 class="card-title"><b>Electronics & Communication</b></h4>

                </div>

</div>
            </div>
            <div class="col-sm-4" >
<div class="card" style="width: 35rem;text-align:center;background-color: #fff;transition: box-shadow .25s, -webkit-box-shadow .25s;border-radius: 2px;box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);padding: 15px;margin-bottom: 15px">

                <div class="item card" >
                    <img src="http://localhost/college_management_system/images/am.jpg" alt="Automobile Engineering" style="width:306px">

                    <div class="item-overlay top"></div>
                </div>
                <div class="card-body">
                    <h4 class="card-title"><b>Automobile Engineering</b></h4>

                </div>

</div>
            </div>
            <div class="col-sm-4" >
<div class="card" style="width: 35rem;text-align:center;background-color: #fff;transition: box-shadow .25s, -webkit-box-shadow .25s;border-radius: 2px;box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);padding: 15px;margin-bottom: 15px">

                <div class="item card" >
                    <img src="http://localhost/college_management_system/images/ee.jpg" alt="Electrical Engineering" style="width:306px">

                    <div class="item-overlay top"></div>
                </div>
                <div class="card-body">
                    <h4 class="card-title"><b>Electrical Engineering</b></h4>

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
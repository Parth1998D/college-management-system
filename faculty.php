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
        .image {
            transition: .5s;
            margin-top: -40px;
            border-radius: 50%;
        }
        table{
            font-size: 20px;
        }
        table tr td{
            padding: 10px;
        }
        
    </style>
<body style="font-family: verdana, sans-serif;">
    <div class="container" style="margin:100px">
        <?php
        include_once 'header.php';
        ?>
        <h1 style="text-align: center;margin-top:40px;margin-bottom: 30px">Faculties</h1>

        <div class="row">
            <!--start-->
            <div class="col-md-12" style="padding-bottom: 60px">
                <img src="images/faculty1.png" alt="Avatar" class="image" style="width:270px; float: left;margin-right: 70px; padding-top: 13px">
                <table>
                    <tbody>
                        <tr>
                            <td><b>Name </b></td>
                            <td style="width: 30px;text-align: center"> : </td>
                            <td> Avani Dadhania</td>
                        </tr>
                        <tr>
                            <td><b>Designation </b></td>
                            <td style="width: 30px;text-align: center"> : </td>
                            <td> Lecturer</td>
                        </tr>
                        <tr>
                            <td><b>Qualification </b></td>
                            <td style="width: 30px;text-align: center"> : </td>
                            <td>M Tech (CSE) </td>
                        </tr>
                        <tr>
                            <td><b>Date Of Join </b></td>
                            <td style="width: 30px;text-align: center"> : </td>
                            <td>28/7/2008</td>
                        </tr>
                        <tr>
                            <td><b>Exprience </b></td>
                            <td style="width: 30px;text-align: center"> : </td>
                            <td> 10.4 Years</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            <!--end-->
            <div class="col-md-12" style="padding-bottom: 60px">
                <img src="images/faculty.png" alt="Avatar" class="image" style="width:270px; float: left;margin-right: 70px; padding-top: 13px">
                <table>
                    <tbody>
                        <tr>
                            <td><b>Name </b></td>
                            <td style="width: 30px;text-align: center"> : </td>
                            <td> Hitesh Patel</td>
                        </tr>
                        <tr>
                            <td><b>Designation </b></td>
                            <td style="width: 30px;text-align: center"> : </td>
                            <td> Lecturer</td>
                        </tr>
                        <tr>
                            <td><b>Qualification </b></td>
                            <td style="width: 30px;text-align: center"> : </td>
                            <td> Phd Pursuing, MTech(ce), BE (IT)</td>
                        </tr>
                        <tr>
                            <td><b>Date Of Join </b></td>
                            <td style="width: 30px;text-align: center"> : </td>
                            <td>12/06/2017</td>
                        </tr>
                        <tr>
                            <td><b>Exprience </b></td>
                            <td style="width: 30px;text-align: center"> : </td>
                            <td> 14.3 Years</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            <div class="col-md-12" style="padding-bottom: 60px">
                <img src="images/faculty.png" alt="Avatar" class="image" style="width:270px; float: left;margin-right: 70px; padding-top: 13px">
                <table>
                    <tbody>
                        <tr>
                            <td><b>Name </b></td>
                            <td style="width: 30px;text-align: center"> : </td>
                            <td> Dr. Hiren B. Patel</td>
                        </tr>
                        <tr>
                            <td><b>Designation </b></td>
                            <td style="width: 30px;text-align: center"> : </td>
                            <td> Professor</td>
                        </tr>
                        <tr>
                            <td><b>Qualification </b></td>
                            <td style="width: 30px;text-align: center"> : </td>
                            <td>Ph.D. (Computer Engineering), ME, BE. </td>
                        </tr>
                        <tr>
                            <td><b>Date Of Join </b></td>
                            <td style="width: 30px;text-align: center"> : </td>
                            <td>1/4/2017</td>
                        </tr>
                        <tr>
                            <td><b>Exprience </b></td>
                            <td style="width: 30px;text-align: center"> : </td>
                            <td> 16.10 Years</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>             
        </div>
    </div>
    <?php
    include_once 'footer.php';
    ?>
</body>
</html>
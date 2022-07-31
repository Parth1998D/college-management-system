<style>
    .form-control {
    height: 40px;
    }
    body {
    font-family: verdana,sans-serif;
    font-size: 13px;
    line-height: 2;
    color: #666;
    background-color: #fff;
    /*color: rgba(0,0,0,0.87);*/
}
.btn{
            margin-top: 5px;
            /*padding: 10px;*/
            border-radius: 3px;
            background-color: #76323f;
            color:white!important;
            padding: 6px 18px 6px 18px;
        }
        .btn:hover{
           margin-top: 5px;
            /*padding: 10px;*/
            border-radius: 3px;
            background-color: #ac495c;
            color:white!important;
            padding: 6px 18px 6px 18px;
        }
</style>
<?php
session_start();
?>
<body>
<div class="row" style="margin-bottom: 0px;">
    <nav class="navbar navbar-default navbar-fixed-top" style="min-height: 110px;margin-bottom: 0px;background-color: #263238;border: 0px">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://localhost/college_management_system/"><img src="http://localhost/college_management_system/images/ldrp.png " style="height: 92px; margin-top: -6px" title="ldrp">
                </a>
                
            </div>
            <div class="navbar-header">
               
               <h1 style="
    margin-top: 37px;
    margin-left: 32px;
    color: lavender;
">LDRP-ITR</h1> 
                
            </div>
<!--<h2>LDRP</h2>-->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin-top: 29px; font-size: 18px; margin-right:10px ">


                <ul class="nav navbar-nav navbar-right">
                   
                    <li><a href="http://localhost/college_management_system/">Home</a></li>
                    <li><a href="http://localhost/college_management_system/department.php">Departments</a></li>
                    <li><a href="http://localhost/college_management_system/faculty.php">Faculties</a></li>
                    <li><a href="http://localhost/college_management_system/placement.php">Placement</a></li>
                <?php
                   
                    if(isset($_SESSION['name'])){ ?>
                        
                         <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Welcome,<?= $_SESSION['name'] ?><span class="caret"></span></a>
                        <ul class="dropdown-menu"  style="min-width: 175px">
                            <li><a href="http://localhost/college_management_system/profile.php" >Profile</a></li>
                            <li><a href="http://localhost/college_management_system/logout.php">logout</a></li>                
                        </ul>
                    </li>
                <?php     }else{
                    
                    ?>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login/Sign Up <span class="caret"></span></a>
                        <ul class="dropdown-menu"  style="min-width: 174px">
                            <li><a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal">Login</a></li>
                            <li><a href="javascript:void(0)" data-toggle="modal" data-target="#signup_modal">Sign Up</a></li>

                        </ul>
                    </li>
                <?php } ?>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Login</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form onsubmit="login();return false;">
                    <div class="alert alert-danger d1" style="display:none">
  Please enter valid user id or password !
</div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">UserId</label>
                        <input type="text" class="form-control" id="exampleInputUser" placeholder="User id" required="true">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" minlength="5" maxlength="20" placeholder="Password" required="true">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-default">Submit</button>

            </div>
            </form>
        </div>
    </div>
</div>
<!--sign up-->
<div class="modal fade" id="signup_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Sign Up</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form onsubmit="signup();return false;">
                    <div class="alert alert-danger d2" style="display:none">
  Something went's wrong,please try aain later
</div>
                    <div class="alert alert-success s2" style="display:none">
  Data saved Successfully
</div>
                     <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" id="firstname" placeholder="Please Enter First Name" required="true">
                    </div>
                     <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" id="lastname" placeholder="Please Enter Last Name" required="true">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Email</label>
                        <input type="email" class="form-control" id="email_id" placeholder="Please Enter Email Address" required="true">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">UserId</label>
                        <input type="text" class="form-control" id="eUser" placeholder="User id" required="true">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="ePassword" minlength="5" maxlength="20" placeholder="Password" required="true">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-default">Submit</button>

            </div>
            </form>
        </div>
    </div>
</div>
</body>
<script>
    function login() {
        var user = $("#exampleInputUser").val();
        var password = $("#exampleInputPassword1").val();
        $.ajax({
            url: "request_process.php",
            type: "POST",
            data: {user: user, password: password, is_login: 1},
            success: function (result) {
                if (result == 1) {
                    location.reload();
                } else {
                    $(".d1").css("display","block");
                }

            }
        });
        return false;
    }
     function signup() {
        var firstname = $("#firstname").val();
        var lastname = $("#lastname").val();
        
        var email_id = $("#email_id").val();
        var user_id = $("#eUser").val();
        var password = $("#ePassword").val();
    
        $.ajax({
            url: "request_process.php",
            type: "POST",
            data: {firstname: firstname, lastname: lastname,email_id:email_id,user_id:user_id,password:password,is_singnup: 1},
            success: function (result) {
                if (result == 1) {
                    $(".s2").css("display","block");
                    $("#firstname").val('');
                    $("#lastname").val('');
        
        $("#email_id").val('');
        $("#eUser").val('');
        $("#ePassword").val('');
    
                } else {
                    $(".d2").css("display","block");
                }

            }
        });
        return false;
    }
    
      function signup_edit() {
        var firstname = $("#firstname_e").val();
        var lastname = $("#lastname_e").val();
        
        var email_id = $("#email_id_e").val();
        var user_id = $("#eUser_e").val();
        var password = $("#ePassword_e").val();
    
        $.ajax({
            url: "request_process.php",
            type: "POST",
            data: {firstname: firstname, lastname: lastname,email_id:email_id,user_id:user_id,password:password,is_singnup_edit: 1},
            success: function (result) {
                if (result == 1) {
                    $(".s3").css("display","block");
                    
                } else {
                    $(".d3").css("display","block");
                }

            }
        });
        return false;
    }
</script>
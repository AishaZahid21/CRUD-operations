<?php
include ("connection.php");
session_start();
if(isset($_REQUEST['submit']))
{
    $user = $_REQUEST['username'];
    $pass = $_REQUEST['password'];
    $query = "SELECT * FROM people WHERE username = '$user' && password = '$pass'";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    if($total == 1){
        $_SESSION['username'] = $user;
        header("Location:index.php");
    }
    else{
    ?><script>alert("Incorrect Username/Password");</script><?php
    }
   
}
?>
<!DOCTYPE.html>
<html>
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <title>Document</title>
    <style>
    body {
        font-family: 'Varela Round', sans-serif;
        background-color: #EAEDED;
        }
        .modal-login{
            width: 350px;
           
        }
        
        .modal-login .modal-content {
            border-radius: 5px;
            border: none;
            background: #fff;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3) , 0 6px 15px 0 rgba(0 , 0 , 0 ,0.1.9)
            margin-bottom: 15px;
            padding: 25px;
           
	}
        .modal-login .modal-header{
            border-bottom: none;
            position: relative;
            justify-content: center;
        }
   /*/    .modal-login .close {
            position: absolute;
            top: -10px;
            right: -10px;
	}/*/
        .modal-login h4 {
            color: #636363;
            text-align: center;
            font-size: 26px;
            margin-top: 0;
	}
        .modal-login .form-group{
            margin-bottom: 20px;
        }
  
	.modal-login .form-control {
		min-height: 38px;
		padding-left: 5px;
		box-shadow: none !important;
		border-width: 0 0 1px 0;
		border-radius: 0;
	}
	.modal-login .form-control:focus {
		border-color: #ccc;
	}
	.modal-login .input-group-addon {
            max-width: 42px;
            text-align: center;
            background: none;
            border-width: 0 0 1px 0;
            padding-left: 5px;
            border-radius: 0;
            font-size: 21px;
	}
        .modal-login .btn{
            font-size: 16px;
            color: white;
            display: block;
           font-weight: bold;
            background: #19aa8d;
            border: none;
            outline: none !important;
            border-radius: 3px;
            min-width: 272px;
        }
        .modal-login .btn:hover, .modal-login .btn:focus{
            background: #179b81;
        }
        .modal-login .hint-text {
            text-align: center;
            padding-top: 5px;
            font-size: 13px;
        }
        .modal-login .modal-footer {
            color: #999;
            border-color: #dee4e7;
            text-align: center;
            margin: 0 -40px -30px;
            font-size: 13px;
            justify-content: center;
        }
	   .modal-login a {
            color: #19aa8d;
            text-decoration: none;
        }
        .modal-login a:hover {
            text-decoration: underline;
        }
        .trigger-btn {
		display: inline-block;
		margin: 100px auto;
	}
    </style>
    </head>
<body>
   <!-- <div class="text-center">
    <a href="#myModal" class="trigger-btn" data-toggle="modal">Click to Open Login Modal</a>
         
    </div>
    <!--modal-->
    <!--<div id="myModal" class="modal fade">-->
        <div class="modal-dialog modal-login">
            <!--content-->
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Sign In</h4>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->
            </div>
            <!--body-->
            <div class="modal-body">
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" name="username" placeholder="Username" required="required" >
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" name="password" placeholder="Password" required="required" >
                    </div>
                </div>
                
                
                    <div class="form-group">
						<input class="btn" type="submit" name="submit" value="Sign In"> 
					</div>
               <p class="hint-text"><a href="#">Forget Password?</a></p>
                </form>
                <div class="modal-footer">Don't have any account?<a href="signup.php">Create one</a></div>
            </div>
            </div>
        </div>
    </div>

    </body>
</html>
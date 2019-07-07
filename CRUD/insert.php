<?php
include ("connection.php");
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $class = $_POST['class'];
    $gpa = $_POST['gpa'];
    $query = "INSERT INTO student(name,gender,class,gpa) VALUES('$name', '$gender', '$class', '$gpa')";
    $data = mysqli_query($conn, $query);
    if($query){
        header("Location:index.php");
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    
    <title>Document</title>
    <style>
   body {
        font-family: 'Varela Round', sans-serif;
       background: #EAEDED;
        }
        .modal-add{
            width: 320px; 
        }
        
        .modal-add .modal-content {
            border-radius: 5px;
            border: none;
            background: #fff;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3) , 0 6px 15px 0 rgba(0 , 0 , 0 ,0.1.9)
            padding: 25px;

           
	}
        .modal-add .modal-header{
            border-bottom: none;
            position: relative;
            justify-content: center;
        }
        .modal-add .close {
            position: absolute;
            top: -10px;
            right: -10px;
	}
        .modal-add h4 {
            color: #636363;
            text-align: center;
            font-size: 26px;
            margin-top: 0;
	}
        .modal-add .form-group{
            margin-bottom: 20px;
        }
  
	.modal-add .form-control {
		min-height: 38px;
		padding-left: 5px;
		box-shadow: none !important;
		border-width: 0 0 1px 0;
		border-radius: 0;
        min-width: 285px;
	}
         .modal-add .form-control:focus {
		border-color: #ccc;
	}
        .modal-add .btn{
            font-size: 16px;
            color: white;
            display: block;
            font-weight: bold;
            background: #0097A7;
            border: none;
            outline: none !important;
            border-radius: 3px;
            min-width: 272px;
        }
        .modal-add .btn:hover, .modal-login .btn:focus{
            background: #00838F;
        } 
    </style>
</head>
<body>
    <!--modal-->
    <div id="addStudent" >
        <div class="modal-dialog modal-add">
            <!--content-->
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Insert Data</h4>
               <!--  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->
            </div>
            
            <div class="modal-body">
            <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control" name="name"
                           id="" placeholder="Enter Name" required="required" >
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="input-group">
                    <input type="text" class="form-control" name="gender" id="" placeholder="Enter Gender" required="required" >
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="input-group">
                    <input type="text" class="form-control" name="class" id="" placeholder="Enter Class" required="required" >
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="input-group">
                    <input type="text" class="form-control" name="gpa" id="" placeholder="Enter Gpa" required="required" >
                    </div>
                </div>
                
                    <div class="form-group">
						 <button name="submit" id="submit" class="btn btn-primary btn-block " >Add Record</button>
					</div>
              
                            
                </form>
            </div>
            
                   
               </div>
    </div>
            </div>
 
</body>
</html>
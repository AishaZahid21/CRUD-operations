
<!--Delete data-->
<?php
include ("connection.php");
error_reporting(0);
session_start();
if(isset($_GET['del'])){
    $id = $_GET['del'];
    $query = "DELETE FROM student WHERE id = $id";
    $data = mysqli_query($conn,$query);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="bootstrap-3.3.7-dist/js/jquery-3.1.1.js" type="text/javascript"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.js" type="text/javascript"></script>
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <style>
        body {
        color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 14px;
	}
	.table-wrapper {
        background: #fff;
        padding: 20px 25px;
        margin: 30px 0;
		border-radius: 5px;
        box-shadow: 0 1px 1px rgba(0,0,0,.2),0 3px 3px 0 rgba(0,0,0,0.1);
    }
	.table-title {        
		padding-bottom: 15px;
		background: #435d7d;
		color: #fff;
		padding: 16px 30px;
		margin: -20px -25px 10px;
		border-radius: 5px 5px 0 0;
    }
    .table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
	}
        .table-title .btn {
		color: #fff;
		float: right;
		font-size: 13px;
		min-width: 50px;
		border-radius: 4px;
		border: none;
		outline: none !important;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
    }
        table.table tr th:last-child {
		width: 100px;
	}
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
        }
        table.table td a.edit {
        color: #FFC107;
    }
         table.table td a.edit:hover {
        color: #FFA000;
    }
    table.table td a.delete {
        color: #F44336;
    }
        table.table td a.delete:hover{
        color: #D32F2F;
    }
    #logo{
            color: #fff;
            line-height: 30px;
            padding-right: 30px;
           
        }
        #me{
            display: block;
        }
        #me:hover{
            background-color: #2E4053;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-inverse" style="border-radius: 0px; background-color: #283747; border: 0px;">
  <div class="container-fluid">
      <div class="container">
    <div class="navbar-header">
      <h4 id="logo">OnlyOreo</h4>
    </div>
    <ul class="nav navbar-nav">
      <li class=><a href="main.html" id="me">Home</a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="me"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;<?php echo "Welcom ".$_SESSION['username'];?>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Profile Settings</a></li>
          <li><a href="logout.php">Logout</a></li>
          
        </ul>
      </li>
    </ul>
  </div>
    </div>
</nav>
    
    
    
   <div class="container">
       <div class="table-wrapper">
           <div class="table-title">
       <div class="row">
           <div class="col-sm-6">
                   <h2>Students Data</h2>
                   </div>
           <div class="col-sm-6">
						<a href="insert.php" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
           </div>
            </div>
                </div>
                   <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Class</th>
                        <th>GPA</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                   <?php
                   $query = "SELECT * FROM student";
                   $fire = mysqli_query($conn, $query);
                   if(mysqli_num_rows($fire)>0){
                       while($emp = mysqli_fetch_assoc($fire)){
                           ?>
                           <tr>
                           <td><?php echo $emp['name'];?></td>
                           <td><?php echo $emp['gender'];?></td>
                           <td><?php echo $emp['class'];?></td> 
                           <td><?php echo $emp['gpa'];?></td> 
                            <td>
                                <a href="<?php $_SERVER['PHP_SELF']?>?del=<?php echo $emp['id']?>"class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                
                                <a href="update.php?upd=<?php echo $emp['id']?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>     
                        </td>
                           </tr>
                           <?php
                           //echo $emp['Name']." ".$emp['Gender']." ".$emp['Post'];
                       }
                   }
                   ?>
                </tbody>
                </table>
              
           
          
    </div>
       </div>
    </body>
</html>
           
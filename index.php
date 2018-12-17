<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Home</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="jquery/jquery.min.js" type="text/javascript"></script>
        <link href="CSS/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="CSS/main.css">
    </head>
    <body>
        <?php require_once 'Student.php';?>
         <?php 
           if(isset($_SESSION['message']));?>
           <div class="alert" alert-<?=$_SESSION['msg_type']?>">
           <?php 
             echo $_SESSION['message'];
             unset($_SESSION['message']);
              ?>
           </div>
   
       <form action="Student.php" method="POST">
            <div class="form-group">
                <label> Roll no</label>
                <input type="text" name="no" class="form-control" value="Enter your no">
            </div>
            
            <div class="form-group">
                <label>Name</label>
                
                <input type="text" name="name" class= "form-control" value="Enter your name">
              </div>
            
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="Address" class="form-control" value="Enter your Address">
                </div>
            
            <div class="form-group">
                <label> Mobile No </label>
                <input type="text" name="Mno" class="form-control" value="Enter your mobile no">
                </div>
            <div class="form-group">
               <button type="submit" class="btn-btn-primary" name ="save">Save</button>
                </div>
            <div class="form-group">
               <button type="submit" class="btn-btn-primary" name ="Update">Update</button>
                </div>
            <div class="form-group">
               <button type="submit" class="btn-btn-primary" name ="Delete">Delete</button>
                </div>
        </form>
        
    </body>
</html>

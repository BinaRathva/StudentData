<?php
$con=mysqli_connect("localhost","root","","studentdb");
error_reporting();

if(isset($_POST['save']))
{    
 $no=$_POST['no'] ;
 $name=$_POST['name'] ; 
 $Address=$_POST['Address'] ;
 $Mno=$_POST['Mno'] ;
 $sql=mysqli_query($con,"INSERT INTO student(RollNo,Name,Address,MobileNo) VALUES('$no','$name','$Address','$Mno')");
 
 $_SESSION['message']="Record has been saved";
 $_SESSION['msg_type']="Success";
}
if(isset($_POST['Delete']))
{    
    $no=$_POST['no'] ;
    $sql=mysqli_query($con,"DELETE FROM student WHERE RollNo='$no'" );
    $_SESSION['message']="Record has been removed";
    $_SESSION['msg_type']="danger";
    
}

if(isset($_POST['Update']))
{    
   $no=$_POST['no'] ;
 $name=$_POST['name'] ; 
 $Address=$_POST['Address'] ;
 $Mno=$_POST['Mno'] ;
    $sql=mysqli_query($con,"UPDATE student SET RollNo='$no',Name='$name',Address='$Address',MobileNo='$Mno' where RollNo='$no'" );
    $_SESSION['message']="Record has been updated";
    $_SESSION['msg_type']="updated";
}
 
    
    
   



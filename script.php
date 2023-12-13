<?php
    session_start();
    include ("./dbcon.php");
    if (isset($_POST["login"]))//login kiyanne login page eke name eka
    {
      $un=mysqli_real_escape_string($con,$_POST['username']);
      $pw=mysqli_real_escape_string($con,$_POST['password']);
      $query= "SELECT * FROM login WHERE username='$un' AND logpass='$pw'" ;
      $result=mysqli_query($con,$query); 
      if(mysqli_num_rows($result) > 0){
        $_SESSION['login'] = $un;
        header("location:./Dashboard.php");
      }else {
                // header ("location:./login.php");
            }
    }

    if(isset($_POST['create'])){
     
      $name=mysqli_real_escape_string($con,$_POST['name']);
      $city=mysqli_real_escape_string($con,$_POST['city']);
      $age=mysqli_real_escape_string($con,$_POST['age']);
      $Lname=mysqli_real_escape_string($con,$_POST['Lname']);
      $NIC=mysqli_real_escape_string($con,$_POST['NIC']);
      $Telno=mysqli_real_escape_string($con,$_POST['Telno']);
      $query="INSERT INTO employee(Name,City,Age,Lname,Telno,NIC) VALUES('$name','$city','$age','$Lname','$Telno','$NIC')";
      $result=mysqli_query($con,$query);
      header("location:./addempnew.php");
    
    }

    if(isset($_POST['update'])){
      $id=mysqli_real_escape_string($con,$_POST['id']);
      $Name=mysqli_real_escape_string($con,$_POST['Name']);
      $Lname=mysqli_real_escape_string($con,$_POST['Lname']);
      $age=mysqli_real_escape_string($con,$_POST['age']);
      $city=mysqli_real_escape_string($con,$_POST['city']);
      $NIC=mysqli_real_escape_string($con,$_POST['NIC']);
      $Telno=mysqli_real_escape_string($con,$_POST['Telno']);

      $query="UPDATE employee SET Name='$Name',LName='$LName',Age='$age',City='$city',Telno='$Telno',NIC='$NIC' where ID='$id'";
      $result=mysqli_query($con,$query);
      header("location:./Dashboard.php");
    }
?>
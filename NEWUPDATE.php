<?php
    include "./navbar.php";
    include "./dbcon.php";
    $id=mysqli_real_escape_string($con,$_GET['ID']);
    $query ="SELECT * FROM employee where ID='$id'";
    $result=mysqli_query($con,$query);
    $data=mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>

/* Form Style */

        .form {
  display: flex;
  flex-direction: column;
  gap: 10px;
  max-width: 350px;
  background-color: #fff;
  padding: 20px;
  border-radius: 20px;
  position: relative;
}

.title {
  font-size: 28px;
  color: royalblue;
  font-weight: 600;
  letter-spacing: -1px;
  position: relative;
  display: flex;
  align-items: center;
  padding-left: 30px;
}

.title::before,.title::after {
  position: absolute;
  content: "";
  height: 16px;
  width: 16px;
  border-radius: 50%;
  left: 0px;
  background-color: royalblue;
}

.title::before {
  width: 18px;
  height: 18px;
  background-color: royalblue;
}

.title::after {
  width: 18px;
  height: 18px;
  animation: pulse 1s linear infinite;
}

.message, .signin {
  color: rgba(88, 87, 87, 0.822);
  font-size: 14px;
}

.signin {
  text-align: center;
}

.signin a {
  color: royalblue;
}

.signin a:hover {
  text-decoration: underline royalblue;
}

.flex {
  display: flex;
  width: 100%;
  gap: 6px;
}

.form label {
  position: relative;
}

.form label .input {
  width: 100%;
  padding: 10px 10px 20px 10px;
  outline: 0;
  border: 1px solid rgba(105, 105, 105, 0.397);
  border-radius: 10px;
}

.form label .input + span {
  position: absolute;
  left: 10px;
  top: 15px;
  color: grey;
  font-size: 0.9em;
  cursor: text;
  transition: 0.3s ease;
}

.form label .input:placeholder-shown + span {
  top: 15px;
  font-size: 0.9em;
}

.form label .input:focus + span,.form label .input:valid + span {
  top: 30px;
  font-size: 0.7em;
  font-weight: 600;
}

.form label .input:valid + span {
  color: green;
}

.submit {
  border: none;
  outline: none;
  background-color: royalblue;
  padding: 10px;
  border-radius: 10px;
  color: #fff;
  font-size: 16px;
  transform: .3s ease;
}

.submit:hover {
  background-color: rgb(56, 90, 194);
}

@keyframes pulse {
  from {
    transform: scale(0.9);
    opacity: 1;
  }

  to {
    transform: scale(1.8);
    opacity: 0;
  }
}


/* Body Style */

html {
    height:100%;
}
 
body {
    margin:0;
}
 
.bg {
    animation:slide 3s ease-in-out infinite alternate;
    background-image: linear-gradient(-60deg, #6c3 50%, #09f 50%);
    bottom:0;
    left:-50%;
    opacity:.5;
    position:fixed;
    right:-50%;
    top:0;
    z-index:-1;
}
 
.bg2 {
    animation-direction:alternate-reverse;
    animation-duration:4s;
}
 
.bg3 {
    animation-duration:5s;
}
 
.content {
    background-color:rgba(255,255,255,.8);
    border-radius:.25em;
    box-shadow:0 0 .25em rgba(0,0,0,.25);
    box-sizing:border-box;
    left:50%;
    padding:10vmin;
    position:fixed;
    text-align:center;
    top:50%;
    transform:translate(-50%, -50%);
}
h1 {
  background: linear-gradient(to right, #f00, #ff0, #0f0, #00f, #f0f);
  -webkit-background-clip: text;
  -moz-background-clip: text;
  background-clip: text;
  color: transparent;
  font-weight: bold;
  text-align: center;
}
 
@keyframes slide {
    0% {
        transform:translateX(-25%);
    }
 
    100% {
        transform:translateX(25%);
    }
}

/* Body Style */

    </style>
</head>

<body>
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
<div class="content">
    <h1>SD Production</h1>
  
    <form action="script.php" method="post" class="form">
    <p class="title">Update employee details</p>
    <p class="message">Check carefully and enter correct data. </p>

    <label for="id">
        <input type="text" name="NIC" id="NIC"  class="input" value="<?php echo $data['NIC'] ?>">

            <span>NIC No</span>
        </label>
        <div class="flex">
        <label for="id">
        <input type="text" name="id" id="id"  class="input" value="<?php echo $data['ID'] ?>">

            <span>ID</span>
        </label>
      
        <label>
        <input type="text" name="age" id="age" class="input" value="<?php echo $data['Age'] ?>">

            <span>Age</span>
        </label>
    </div>  
    <div class="flex">         
    <label>
    <input type="text" name="Name" id="Name"  class="input" value="<?php echo $data['Name'] ?>">

        <span>First Name</span>
    </label>
    
    <label>
    <input type="text" name="LName" id="LName"  class="input" value="<?php echo $data['LName'] ?>">

        <span>Last Name</span>
    </label>
    </div>
       
    <label>
    <input type="text" name="city" id="city" class="input" value="<?php echo $data['City'] ?>">

        <span>City</span>
    </label>
       
    <label>
    <input type="text" name="Telno" id="Telno" class="input" value="<?php echo $data['Telno'] ?>">

        <span>Telephone Number</span>
    </label>
    
    <input type="submit" value="submit" class="submit" name="update">


  </form>
</div>
</body>
</html>
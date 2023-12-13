<?php

include "./navbar.php"
?>

<style>
  .btn {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 13rem;
  overflow: hidden;
  height: 3rem;
  background-size: 300% 300%;
  backdrop-filter: blur(1rem);
  border-radius: 5rem;
  transition: 0.5s;
  animation: gradient_301 5s ease infinite;
  border: double 4px transparent;
  background-image: linear-gradient(#212121, #212121),  linear-gradient(137.48deg, #ffdb3b 10%,#FE53BB 45%, #8F51EA 67%, #0044ff 87%);
  background-origin: border-box;
  background-clip: content-box, border-box;
}

#container-stars {
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 100%;
  overflow: hidden;
  transition: 0.5s;
  backdrop-filter: blur(1rem);
  border-radius: 5rem;
}

strong {
  z-index: 2;
  font-family: 'Avalors Personal Use';
  font-size: 12px;
  letter-spacing: 5px;
  color: #FFFFFF;
  text-shadow: 0 0 4px white;
}

#glow {
  position: absolute;
  display: flex;
  width: 12rem;
}

.circle {
  width: 100%;
  height: 30px;
  filter: blur(2rem);
  animation: pulse_3011 4s infinite;
  z-index: -1;
}

.circle:nth-of-type(1) {
  background: rgba(254, 83, 186, 0.636);
}

.circle:nth-of-type(2) {
  background: rgba(142, 81, 234, 0.704);
}

.btn:hover #container-stars {
  z-index: 1;
  background-color: #212121;
}

.btn:hover {
  transform: scale(1.1)
}

.btn:active {
  border: double 4px #FE53BB;
  background-origin: border-box;
  background-clip: content-box, border-box;
  animation: none;
}

.btn:active .circle {
  background: #FE53BB;
}

#stars {
  position: relative;
  background: transparent;
  width: 200rem;
  height: 200rem;
}

#stars::after {
  content: "";
  position: absolute;
  top: -10rem;
  left: -100rem;
  width: 100%;
  height: 100%;
  animation: animStarRotate 90s linear infinite;
}

#stars::after {
  background-image: radial-gradient(#ffffff 1px, transparent 1%);
  background-size: 50px 50px;
}

#stars::before {
  content: "";
  position: absolute;
  top: 0;
  left: -50%;
  width: 170%;
  height: 500%;
  animation: animStar 60s linear infinite;
}

#stars::before {
  background-image: radial-gradient(#ffffff 1px, transparent 1%);
  background-size: 50px 50px;
  opacity: 0.5;
}

@keyframes animStar {
  from {
    transform: translateY(0);
  }

  to {
    transform: translateY(-135rem);
  }
}

@keyframes animStarRotate {
  from {
    transform: rotate(360deg);
  }

  to {
    transform: rotate(0);
  }
}

@keyframes gradient_301 {
  0% {
    background-position: 0% 50%;
  }

  50% {
    background-position: 100% 50%;
  }

  100% {
    background-position: 0% 50%;
  }
}

@keyframes pulse_3011 {
  0% {
    transform: scale(0.75);
    box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.7);
  }

  70% {
    transform: scale(1);
    box-shadow: 0 0 0 10px rgba(0, 0, 0, 0);
  }

  100% {
    transform: scale(0.75);
    box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
  }
}

button {
 position: relative;
 border: none;
 background: transparent;
 padding: 0;
 cursor: pointer;
 outline-offset: 4px;
 transition: filter 250ms;
 user-select: none;
 touch-action: manipulation;
}

.shadow {
 position: absolute;
 top: 0;
 left: 0;
 width: 100%;
 height: 100%;
 border-radius: 12px;
 background: hsl(0deg 0% 0% / 0.25);
 will-change: transform;
 transform: translateY(2px);
 transition: transform
    600ms
    cubic-bezier(.3, .7, .4, 1);
}

.edge {
 position: absolute;
 top: 0;
 left: 0;
 width: 100%;
 height: 100%;
 border-radius: 12px;
 background: linear-gradient(
    to left,
    hsl(340deg 100% 16%) 0%,
    hsl(340deg 100% 32%) 8%,
    hsl(340deg 100% 32%) 92%,
    hsl(340deg 100% 16%) 100%
  );
}

.front {
 display: block;
 position: relative;
 padding: 12px 27px;
 border-radius: 12px;
 font-size: 1.1rem;
 color: white;
 background: hsl(345deg 100% 47%);
 will-change: transform;
 transform: translateY(-4px);
 transition: transform
    600ms
    cubic-bezier(.3, .7, .4, 1);
}

button:hover {
 filter: brightness(110%);
}

button:hover .front {
 transform: translateY(-6px);
 transition: transform
    250ms
    cubic-bezier(.3, .7, .4, 1.5);
}

button:active .front {
 transform: translateY(-2px);
 transition: transform 34ms;
}

button:hover .shadow {
 transform: translateY(4px);
 transition: transform
    250ms
    cubic-bezier(.3, .7, .4, 1.5);
}

button:active .shadow {
 transform: translateY(1px);
 transition: transform 34ms;
}

button:focus:not(:focus-visible) {
 outline: none;
}

.custom-btn {
 width: 130px;
 height: 40px;
 color: #fff;
 border-radius: 5px;
 padding: 10px 25px;
 font-family: 'Lato', sans-serif;
 font-weight: 500;
 background: transparent;
 cursor: pointer;
 transition: all 0.3s ease;
 position: relative;
 display: inline-block;
 box-shadow: inset 2px 2px 2px 0px rgba(255,255,255,.5),
   7px 7px 20px 0px rgba(0,0,0,.1),
   4px 4px 5px 0px rgba(0,0,0,.1);
 outline: none;
}

.btn-1 {
 background: rgb(6,14,131);
 background: linear-gradient(0deg, rgba(6,14,131,1) 0%, rgba(12,25,180,1) 100%);
 border: none;
}

.btn-1:hover {
 background: rgb(0,3,255);
 background: linear-gradient(0deg, rgb(0, 17, 255) 0%, rgba(2,126,251,1) 100%);
}



table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  border: 1px solid black;
  padding: 5px;
}

th {
  background-color: #ccc;
  font-weight: bold;
}

tr:hover {
  background-color: #eee;
}

/*  for heading */
h1 {
  background: linear-gradient(to right, #f00, #ff0, #0f0, #00f, #f0f);
  -webkit-background-clip: text;
  -moz-background-clip: text;
  background-clip: text;
  color: transparent;
  font-weight: bold;
  text-align: center;
}


</style>
<div class="bg"></div>
 <div class="bg bg2"></div>
 <div class="bg bg3">
 
 </div>
 <div class="content">
<h1>
 Employee Details Management System
</h1>


<table class="table">
 <tr>
 <th>ID</th>
 <Th>NIC No</Th>
 <Th>First Name</Th>
 <Th>Last Name</Th>
 <Th>Tel no</Th>
 
 <th>City</th>
 <th>Age</th>
 </tr>

<?php
  include "./dbcon.php";
  $query="SELECT * FROM employee";
  $result=mysqli_query($con,$query);
  while ($data=mysqli_fetch_assoc($result)){
?>
 <tr>
 <td><?php echo $data ['ID'] ?></td>
 <td><?php if (isset($data['NIC'])) { echo $data['NIC']; } ?></td>
 <td><?php if (isset($data['Name'])) { echo $data['Name']; } ?></td>
 <td><?php if (isset($data['LName'])) { echo $data['LName']; } ?></td>
 <td><?php if (isset($data['Telno'])) { echo $data['Telno']; } ?></td>
 <td><?php if (isset($data['City'])) { echo $data['City']; } ?></td>
 <td><?php if (isset($data['Age'])) { echo $data['Age']; } ?></td>
 <td><a href="NEWUPDATE.php?ID=<?php echo $data['ID'] ?>"><button class="custom-btn btn-1">UPDATE</button></a></td>
 <td><a href="deleteemp.php?ID=<?php echo $data['ID'] ?>"><button>
  <span class="shadow"></span>
  <span class="edge"></span>
  <span class="front text"> DELETE
  </span>
</button></a></td>
 </tr>
 
<?php
}
?>

</table>
<a href="addempnew.php"><button class="btn" type="button">
  <strong>Create User</strong>
  <div id="container-stars">
    <div id="stars"></div>
  </div>

  <div id="glow">
    <div class="circle"></div>
    <div class="circle"></div>
  </div>
</button></a>


 </div>
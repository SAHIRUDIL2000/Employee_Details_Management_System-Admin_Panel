<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">

    <style>
           
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
    font-family:monospace;
}
 
@keyframes slide {
    0% {
        transform:translateX(-25%);
    }
 
    100% {
        transform:translateX(25%);
    }
}

nav {
  background-color: transparent;
}
nav {
  background-color: transparent;
  border-radius: 5px;
  padding: 10px;
}

nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

nav li {
  display: inline-block;
}

nav a {
  text-decoration: none;
  color: #000;
  padding: 10px;
}

nav a:hover {
  background-color: #ccc;
}

/* BODY */
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
    font-family:monospace;
}
 
@keyframes slide {
    0% {
        transform:translateX(-25%);
    }
 
    100% {
        transform:translateX(25%);
    }
}

/* Log out button */

.LogOutBtn {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  width: 45px;
  height: 45px;
  border: none;
  border-radius: 50%;
  cursor: pointer;
  position: relative;
  overflow: hidden;
  transition-duration: .3s;
  box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.199);
  background-color: rgb(255, 65, 65);
}

/* plus sign */
.sign1 {
  width: 100%;
  transition-duration: .3s;
  display: flex;
  align-items: center;
  justify-content: center;
}

.sign1 svg {
  width: 17px;
}

.sign1 svg path {
  fill: white;
}
/* text */
.text1 {
  position: absolute;
  right: 0%;
  width: 0%;
  opacity: 0;
  color: white;
  font-size: 1.2em;
  font-weight: 600;
  transition-duration: .3s;
}
/* hover effect on button width */
.LogOutBtn:hover {
  width: 125px;
  border-radius: 40px;
  transition-duration: .3s;
}

.LogOutBtn:hover .sign1 {
  width: 30%;
  transition-duration: .3s;
  padding-left: 20px;
}
/* hover effect button's text */
.LogOutBtn:hover .text1 {
  opacity: 1;
  width: 70%;
  transition-duration: .3s;
  padding-right: 10px;
}
/* button click effect*/
.LogOutBtn:active {
  transform: translate(2px ,2px);
}


/* Home Button */
.HomeButton {
  padding: 0.6em 0.9em;
  font-size: 1em;
  background-color: transparent;
  border: 0.2em solid;
  border-color: #00ffff #04ff00 #0051ff #d400ff;
  border-radius: 1.5em;
  color: #fff;
  cursor: pointer;
  transition: transform 0.2s ease, border-radius 0.2s ease, color 0.2s ease,
    border-shadow 0.2s ease, border-style 0.2s ease;
}

.HomeButton:active {
}

.HomeButton:hover {
  transform: scale(1.3);
  border-radius: 1.5em;
  animation: btn-animation 0.4s 0.2s linear infinite;
  color: #00ddff;
}

@keyframes btn-animation {
  0% {
    border-color: #00ffff #04ff00 #0051ff #d400ff;
    transform: rotate(5deg) scale(1.3);
  }

  25% {
    border-color: #d400ff #00ffff #04ff00 #0051ff;
    transform: rotate(-5deg) scale(1.3);
  }

  50% {
    border-color: #0051ff #d400ff #00ffff #04ff00;
    transform: rotate(5deg) scale(1.3);
  }

  75% {
    border-color: #04ff00 #0051ff #d400ff #00ffff;
    transform: rotate(-5deg) scale(1.3);
  }

  100% {
    border-color: #00ffff #04ff00 #0051ff #d400ff;
    transform: rotate(5deg) scale(1.3);
  }
}


.HomeNavStyle{
  margin: auto;
}
    </style>
</head>
<body class="bg-primary">
    <header>
       
        <nav>
        
            <ul>
                <li>
                <a href="logout.php"><button class="LogOutBtn">
  
  <div class="sign1"><svg viewBox="0 0 512 512"><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path></svg></div>
  
  <div class="text1">Logout</div>
</button>

</a> 
                </li>
                <li class="HomeNavStyle">
                <a href="Dashboard.php"><button class="HomeButton">Home</button></a> 
                </li>
            </ul>

        </nav>
    </header>
    
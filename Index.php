<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        button {
        padding: 0.8em 1.8em;
        border: 2px solid #17C3B2;
        position: relative;
        overflow: hidden;
        background-color: transparent;
        text-align: center;
        text-transform: uppercase;
        font-size: 16px;
        transition: .3s;
        z-index: 1;
        font-family: inherit;
        color: #17C3B2;
        }

        button::before {
        content: '';
        width: 0;
        height: 300%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) rotate(45deg);
        background: #17C3B2;
        transition: .5s ease;
        display: block;
        z-index: -1;
        }

        button:hover::before {
        width: 105%;
        }

        button:hover {
        color: #111;
        }
        .circle {
            width: 200px;
            height: 200px;
            border-radius: 50%; /* Makes it a circle */
            overflow: hidden; /* Clips the image to the circle shape */
        }

        /* Style for the image within the circle */
        .circle img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Scales the image to cover the circle */
        }

    </style>
</head>
<body>
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3">
    
    </div>
    <div class="content">
       <center>
         <div class="circle">
           <img src="SD.png" alt="Logo"> 
        </div>
        </center>
        
        <h1>SD Production</h1>
        <H2>Welcome! Employee Details Management System</H2>
    <a href="login.php"><button type="button">Welcome</button></a>
    
    </div>
    
</body >
</html>
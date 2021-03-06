<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
  <title>Pleasant Tours</title>
  
    <script>
        $(document).ready(function () {
            $('nav div ul li a#contact').addClass('active');
            
        });
    </script>
    <style>
    div#conten ul li a{
        color:#000;
    }
    div#conten ul li a:hover{
        color:red;
    }
    div#contat ul a{
        color:#000;
        text-decoration: none;
    }
    div#contat ul a:hover{
        color:red;
        text-decoration: none;
        font-size:25px;
    }
    </style>
</head>
<body>
<?php include('../Web/header.php'); ?>

<div class="container">
            <div class="row">
                <p>Contact With Us</p>
            </div>
            
            <div class="row">
                <div class="col-xs-12 col-md-4 p-4" id="contat">
                    <ul>
                        <b>THE FIRST HEADQUATER OF THE COMPANY</b>
                        <li> <i class="fa fa-map-marker" aria-hidden="true"></i></i>285 Can, Ba Dinh, Hanoi</li>
                        <li> <i class="fa fa-phone-square" aria-hidden="true"></i>0334499072</li>
                        <a href="https://support.google.com/mail/answer/8494?co=GENIE.Platform%3DDesktop&hl=en"><li> <i class="fa fa-envelope"></i></i>vuongluc2708@gmail.com</li></a>
                    </ul>
                </div>

                <div class="col-xs-12 col-md-4 p-4" id="contat">
                    <ul>
                        <b>THE SECOND HEADQUATER OF THE COMPANY</b>
                        <li> <i class="fa fa-map-marker" aria-hidden="true"></i></i>212 Nguyen Dinh Chieu, Ward 6, Q3, HCMC</li>
                        <li> <i class="fa fa-phone-square" aria-hidden="true"></i></i>0858163849</li>
                        <a href="https://support.google.com/mail/answer/8494?co=GENIE.Platform%3DDesktop&hl=en"><li><i class="fa fa-envelope"></i></i>hoangvanlinh7200@gmail.com</li></a>
                    </ul>
                </div>

                <div class="col-xs-12 col-md-4 p-4" id="conten">
                    <ul>
                        <b>CONNECT WITH US</b>
                        <li> <i class="fa fa-facebook-square"></i><a href="https://www.facebook.com/aptechvietnam.com.vn/?__tn__=%2Cd%2CP-R&eid=ARAOU6P2-A-VmOEorQbkGFUVGRJH7E9PesQDyl_b8Bh09JIICDc6b_Ox0yvZK0wqpRbf8J9n1898QvBx">Connect Facebook</a></li>
                        <li> <i class="fa fa-twitter-square"></i><a href="https://twitter.com/AptechAprotrain">Connect Tiwitter</a></li>
                        <li> <i class="fa fa-instagram" aria-hidden="true"></i><a href="https://www.instagram.com/explore/locations/655850756/aprotrain-aptech/">Connect
                                Instagram</a></li>
                        
                    </ul>
                </div>

                
            </div>
        </div>
    </div>

<div class="container">
        <div class="row" id="map">
            <div class=" col-sm-6 col-md-6 p-4">
                <h6 class="title">Map showing baseline 1st</h6>
                <a href="https://www.google.com/maps/place/285+%C4%90%E1%BB%99i+C%E1%BA%A5n,+Li%E1%BB%85u+Giai,+Ba+%C4%90%C3%ACnh,+H%C3%A0+N%E1%BB%99i,+Vi%E1%BB%87t+Nam/@21.0357568,105.8167964,17z/data=!3m1!4b1!4m5!3m4!1s0x3135ab0d127a01e7:0xab069cd4eaa76ff2!8m2!3d21.0357568!4d105.8189851"
                    target="_black">
                    <img src="../image/coso1.png" alt="map" id="HN">
                </a>
            </div>
            
            <div class=" col-sm-6 col-md-6 p-4">
                <h6 class="title">Map showing baseline 2nd</h6>
                <a href="https://www.google.com/maps/place/212+Nguy%E1%BB%85n+%C4%90%C3%ACnh+Chi%E1%BB%83u,+Ph%C6%B0%E1%BB%9Dng+6,+Qu%E1%BA%ADn+3,+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam/@10.7787659,106.6878343,17z/data=!3m1!4b1!4m5!3m4!1s0x31752f3a9d92c4a7:0x6293396afcadc8a5!8m2!3d10.7787659!4d106.690023"
                    target="_black">
                    <img src="../image/coso2.png" alt="map" id="HCM">
                </a>
            </div>

            

        </div>
    </div>


    

<br><br><br>


</body>
</html>

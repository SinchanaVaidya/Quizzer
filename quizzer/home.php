<!DOCTYPE html>
<html lang="en">
    <head>
        <style type="text/css">
            body {
                width: 100%;
                background: url(image/book1.jpg) ;
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }
			h1{
				color:black;
				font-family:Verdana;
				margin-left:300px;
				margin-right:300px;
				margin-top:5%;
				font-size:100px;
				text-shadow: 4px 4px 10px white;
			}
			
			.btn{
				display: inline-block;
				padding: 15px 30px;
				border: 2px solid black;
				text-transform: uppercase;
				letter-spacing: 0.015em;
				font-size: 18px;
				font-weight: 600;
				line-height: 1;
				color: black;
				text-decoration: none;
				-webkit-transition: all 0.4s;
				-moz-transition: all 0.4s;
				-o-transition: all 0.4s;
				transition: all 0.4s;
			}
			.btn:hover {
				color: #000;
				border-color: #fff;
				background-color: #607d8b;
			}
        </style>
    </head>
    <body>
        <center>
            <div class="intro">
                <h1 > Online Quiz </h1>
                <a href="login.php" class="btn" style="color:black;font-family:Verdana"> login </a> &emsp;
                <a href="register.php" class="btn" style="color:black;font-family:Verdana"> register </a>
                <!--<h2> Good &nbsp;Luck. </h2>-->
            </div>
        </center>
    </body>
</html>
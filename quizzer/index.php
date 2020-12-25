<?php include 'database.php'; ?>
<?php
/*
 *	Get Total Questions
 */
 $query ="SELECT * FROM questions";
 //Get results
 $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
 $total = $results->num_rows;
?>
<!DOCTYPE html>

<html>
	<head>
	<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome | Online Quiz System</title>
    <link  rel="stylesheet" href="css/bootstrap.min.css"/>
    <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
    <link rel="stylesheet" href="css/welcome.css">
    <link  rel="stylesheet" href="css/font.css">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"  type="text/javascript"></script>
	<style type="text/css">
            body{
                  width: 100%;
                  background: url(image/book1.jpg) ;
                  background-position: center center;
                  background-repeat: no-repeat;
                  background-attachment: fixed;
                  background-size: cover;
                }
          </style>
</head>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
<nav class="navbar navbar-default title1">
        <div class="container-fluid">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        <a class="navbar-brand" href="#"><b></b></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-left">
            <li <?php if(@$_GET['q']==1) echo'class="active"'; ?> ><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
			<li <?php if(@$_GET['q']==2) echo'class="active"'; ?>><a href="add.php">Add Questions<span class="sr-only">(current)</span></a></li>
            <!--<li <?php #if(@$_GET['q']==2) echo'class="active"'; ?>> <a href="welcome.php?q=2"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;History</a></li>
            <li <?php #if(@$_GET['q']==3) echo'class="active"'; ?>> <a href="welcome.php?q=3"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;Ranking</a></li>-->
            
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li <?php echo''; ?> > <a href="logout.php?q=welcome.php">Log out</a></li>
        </ul>
        
           
           
       
        </div>
    </div>
    </nav>
	<header>
		
	</header>
	<main>
		<div class="container" id="rcorners1">
			
			<h2 style="font-family:Verdana">Test Your DS Knowledge!</h2>
			<p style="font-family:Verdana">This is a multiple choice quiz to test your knowledge of Data Structures</p>
			<ul style="font-family:Verdana">
				<li><strong>Number of Questions: </strong><?php echo $total; ?></li>
				<li><strong>Type: </strong>Multiple Choice</li>
				<li><strong>Estimated Time: </strong><?php echo $total * .5; ?> Minutes</li>
			</ul>
			<a href="question.php?n=1" class="start" style="font-family:Verdana;margin-left:350px;margin-right:350px;">Start Quiz</a>
			
		</div>
	</main>
	
</body>
</html>
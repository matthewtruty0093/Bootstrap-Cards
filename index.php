<?php include "functions.php";?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/animate.css">


</head>

<body class="body-index">
<div id="wrapper">
    <div class="col-md-3" style="padding: 5px 5px;">
        <a href="#">
            <div class="card add-card" onclick="add_card();">
                <p>
                <h1>Add a new card</h1><br/>
                <span class="glyphicon glyphicon-plus glyphicon-l"></span>
                </p>

            </div>
        </a>
    </div>
    <div id="card-container"></div>
</div>


<!-- Google jQuery CDN -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- Microsoft jQuery CDN 
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js"></script>
-->
<script src="js/lightbox.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
<?php 
session_start(); // Bara för att
include 'includes/db.php'; // Inkludera databas anslutningen
?>
 <!-- Nedan visar vi alla mina skapade hemsidor genom att hämta dom från databasen. -->
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samuel G Portfolio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<!-- Header section -->
<header class="header">
    <div class="container text-center">
        <h1>Samuel G Portfolio</h1>
        <p class="subheader">made in PHP, JS, HTML & CSS</p>
    </div>
</header>
<!-- Om mig sektion -->
<section class="about-me">
    <div class="container">
      <br> <h2>Samuel G Porfolio</h2>
        <img src="assets/me.png" alt="Bild på mig">
        <p><?php include 'includes/aboutme.php'; // Här visar jag mina kunskaper inom filhantering i PHP?></p>
    </div>
</section>
<!-- Färdigheter sektion -->
<section class="skills">
    <div class="container">
        <h2>Färdigheter</h2>
        <div class="row">
            <div class="col-md-6">
                <h4>PHP</h4>
                <div class="progress">
                    <div class="progress-bar" style="width: 90%;">90%</div>
                </div>
                <h4>HTML</h4>
                <div class="progress">
                    <div class="progress-bar" style="width: 90%;">80%</div>
                    </div>
                     <h4>CSS</h4>
                <div class="progress">
                    <div class="progress-bar" style="width: 60%;">60%</div>
                    </div>
                     <h4>JavaScript</h4>
                <div class="progress">
                    <div class="progress-bar" style="width: 70%;">70%</div>
                    </div>
                     <h4>.NET</h4>
                <div class="progress">
                    <div class="progress-bar" style="width: 90%;">90%</div>
                    </div>
        </div>
    </div>
</section>
<!-- Varför anställa mig sektion -->
<section class="why-hire-me">
    <div class="container">
       <br> <h2>Varför anställa mig</h2>
<?php include 'includes/varfor.php';?>
    </div>
</section>
<?php 
include 'includes/porfolio.php';
?>
<!-- Nedan inkluderar vi alla script vi vill använda oss av. -->
<script src="/includes/expand.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>


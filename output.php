<?php

if(isset($_POST["dice"])) {
  $diceNumber = $_POST["dice"];
}

?>

<html>

<head>

	<!-- meta tags and title -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dice Roller</title>

	<!-- external and internal CSS -->
	<link rel="stylesheet" href="styles.css" media="all">
	<style>
		/* in-file CSS here */
	</style>

	<!-- external and internal JavaScript -->
	<script type="text/javascript" src="scripts.js" defer></script>
	<script>
		// in-page JavaScript here
	</script>

<body>
  
<div id="rollResults">
<?
$roll1 = rand(1,6);
$roll2 = rand (1,6);
$roll3 = rand(1,6);
$roll4 = rand(1,6);
$roll5 = rand(1,6);
$roll6 = rand(1,6);
$sum1 = $roll1 + $roll2;
$sum2 = $roll1 + $roll2 + $roll3;
$sum3 = $roll1 + $roll2 + $roll3 + $roll4;
$sum4 = $roll1 + $roll2 + $roll3 + $roll4 + $roll5;
$sum5 = $roll1 + $roll2 + $roll3 + $roll4 + $roll5 + $roll6;

if($diceNumber==1) {
   echo "<h2>You rolled a " . $roll1 . "</h2>"; }

if($diceNumber==2) {
   echo "<h2>You rolled a " . $roll1 . " and " . $roll2 . " which is a total of " . $sum1 . "</h2>"; }

if($diceNumber==3) {
   echo "<h2>You rolled a " . $roll1 . ", " . $roll2 . ", and " . $roll3 . " which is a total of " . $sum2 . "</h2>"; }

if($diceNumber==4) {
   echo "<h2>You rolled a " . $roll1 . ", " . $roll2 . ", " . $roll3 . ", and " . $roll4 . " which is a total of " . $sum3 . "</h2>"; }

if($diceNumber==5) {
   echo "<h2>You rolled a " . $roll1 . ", " . $roll2 . ", " . $roll3 . ", " . $roll4 . ", and " . $roll5 . " which is a total of " . $sum4 . "</h2>"; }

if($diceNumber==6) {
   echo "<h2>You rolled a " . $roll1 . ", " . $roll2 . ", " . $roll3 . ", " . $roll4 . ", " . $roll5 . ", and " . $roll6 . " which is a total of " . $sum5 . "</h2>"; }
?>

  </div>  
  
  </body>
</head>

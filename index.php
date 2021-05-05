<!DOCTYPE html>
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
 <div id="formBlock">
<form method = "POST" action = "output.php">
  <label for "dice"><h1>Number of Dice to Roll</h1><h2>
    Please only choose up to six dice.</h2></label> <br />
  <input type = "number" id = "dice" name = "dice" value = "Number of Dice"></input>
  <button type = "submit">Roll the Dice!</button>
</form>
</div>
  </body>
</head>

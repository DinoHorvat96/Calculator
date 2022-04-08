<?php
$answer=0;
if(isset($_POST['opr'])){
	$num1=$_POST['x'];
	$num2=$_POST['y'];
	$operator=$_POST['opr'];
	if($operator=="+")
		$answer=$num1+$num2;
	else if($operator=="-")
		$answer=$num1-$num2;
	else if($operator=="x")
		$answer=$num1*$num2;
	else if($operator=="/")
		$answer=$num1/$num2;
}?>
<html>
<head>
	<title>Dino Horvat - PHP Calculator</title>
	<style type="text/css">
		.container {
			left: 25%;
			padding: 100px;
			text-align: center;
			border: 1px solid green;	
		}
		
		input, select {
  			width: 40%;
  			padding: 12px 20px;
  			margin: 8px 0;
  			display: inline-block;
  			border: 1px solid #ccc;
  			border-radius: 4px;
  			box-sizing: border-box;
		}

		input[type=submit] {
  			width: 5%;
 		 	background-color: #4CAF50;
  			color: white;
  			padding: 14px 20px;
  			margin: 8px 0;
  			border: none;
	 	 	border-radius: 4px;
  			cursor: pointer;
		}
	</style>
</head>

<body>
	<div class="container">
		<form method="post" action="">
			<h1>PHP Calculator</h1>
			<br>
			<p>First number: <input name="x" value=""></p>
			<p>Second number: <input name="y" value=""></p>
			<br>
			<input type="submit" name="opr" value="+">
			<input type="submit" name="opr" value="-">
			<input type="submit" name="opr" value="x">
			<input type="submit" name="opr" value="/">
			<br>
			<br>Result: <input type='text' value="<?php echo $answer; ?>" disabled><br>
		</form>
	</div>
</body>
</html>
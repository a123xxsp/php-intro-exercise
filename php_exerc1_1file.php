<html>
<head><title>ms13075 movie search</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>

<body>
	<?php if( isset($_POST['search_name']) and isset($_POST['movie_category']) )  {
	echo "<h1> Yo bro ... here are the results! </h1>";
	//$srchname = $_POST['search_name']
	$movies = array(
		"drama" => array("The Shawshank Redemption","The Green Mile","Requiem for a Dream"),
		"comedy" => array("The Hangover","Knocked Up","Due Date"),	
		"horror" => array("Halloween","The Conjuring","The Shining") );

	$sub_ar = $movies[$_POST['movie_category']];
	$matches = preg_grep("/{$_POST['search_name']}/",$sub_ar);
	echo "Total results ".count($matches)."<br>";
	if  (count($matches) != 0) {
		$matches = preg_grep("/{$_POST['search_name']}/",$sub_ar);
		foreach($matches as $key => $value)
			{
			echo "Movie : ".$value.", matches given word : ".$_POST['search_name']."<br>";
			}
	} else {
		echo "No matching movies titles found";
		}
	?> <a href="php_exerc1_1file.php">Πάτα εδώ να μία νέα αναζήτηση</a> <?php
	} else { ?>
	<h1> Yo bro ... what are you looking for? </h1>
	<form method="post" action="php_exerc1_1file.php">
		Search for: <input type="text" name="search_name" value=""> <br>
		in movie category
		<select name="movie_category">
			<option value="drama">Drama</option>
			<option value="comedy">Comedy</option>
			<option value="horror">Horror</option>
		</select>
		<input type="submit" value="ΑΝΑΖΗΤΗΣΗ"/>
	</form>
	 <?php  
	} ?>
</body>
</html>
<html>
<head><title>ms13075 movie search</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>

<body>
	<h1> Yo bro ... here are the results! </h1>
	<?php
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
	?> <a href="php_exerc1.html">Πάτα εδώ να μία νέα αναζήτηση</a> 
</body>
</html>
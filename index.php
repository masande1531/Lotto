
<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of index.php
 * 
 * @Form
 * @Submit form
 * @Check if form is posted
 * @Call play lotto method
 * @Print random lotto numbers
 * @author Masande
 */
require_once (dirname(__FILE__) . '/class/Lotto.php');
?>

<link href="css/lotto.css" rel="stylesheet">
<h1> You need to click Play Lotto </h1>
<form name="lotto" action="" method="post">
<input type="submit" name="play" value="Play Lotto" />
</form>
<?php

if(isset($_POST['play'])){
	$lotto_numbers = new Lotto();
	$print = $lotto_numbers->play_lotto(1,40,7) ;#Call method from lotto class

	foreach ( $print as $value) {
		echo '<span class="number"> '.$value.' </span>&nbsp ';#print the random lotto numbers
    
	}

}


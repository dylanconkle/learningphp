<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>

	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

 $i = 45;

 if ($i < 10) {
 	echo "I hate PHP";
 } elseif ($i < 100) {
 	echo "I love PHP! <br />";
 } else {
 	echo "Why am I taking this course?";
 }

 for ($i=1; $i <= 10 ; $i++) {
 	echo $i . "<br />";
}

$number = 34;

switch ($number) {
	case 30:
	  echo "I am 34";
		break;
	case 31:
		echo "I am 34";
		break;
	case 34:
		echo "I am 34";
		break;
	default:
		echo "you're cool!";
		break;
}


?>






</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>

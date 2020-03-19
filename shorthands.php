<?php
	$loggedIn = false;
	$arr =[1,2,3,4,5];

	/*
	if($loggedIn){
		echo 'You are logged in';
	} else {
		echo 'You are NOT logged in';
	}
	*/

	// klaustukas ternary operator kas norime, kad atsitiktu kai yra tiesa po dvitaskio kas atsitiktu jei netiesa
	// echo($loggedIn) ? 'You are logged in' : 'You are NOT logged in';
	
	#galime patikrinti ar tiesa ir kitu budu

	//$isRegistered = ($loggedIn == true) ? true : false;
	//echo $isRegistered; //jei teisingas teiginys mes 1, jei neteisingas nemes nieko.

	#nested shorthand statement

	/*
	$age = 7;
	$score = 12;

	echo 'Your score is: '.($score > 10 ? ($age > 10 ? 'Average': 'Exeptional'): ($age > 10 ? 'Horrible' :'Average')); //ats bus exeptional
	*/

	#alternetive syntax for conditional

?>

<!--galimas uzrasymas if statement html viduje -->

<div>
<?php if($loggedIn) { ?>
	<h1>Welcome User</h1>
<?php } else { ?> <!--riestiniai skliausteliai po php turi buti atitraukti -->
	<h1>Welcome Guest</h1>
<?php } ?> <!--riestiniai skliausteliai po php turi buti atitraukti -->
</div>


<div>
<?php if($loggedIn): ?>
	<h1>Welcome user</h1>
<?php else : ?>
	<h1>Welcome Guest</h1>
<?php endif; ?>
</div>

<!--for array looping with foreach in html -->

<div>
	<?php foreach($arr as $val): ?>
		<?php echo $val; ?>
	<?php endforeach; ?>

</div>

<!--using for loop in html -->
<div>
	<?php for($i = 0;$i < 10;$i++): ?>
		<li><?php echo $i; ?></li>
	<?php endfor; ?>	
</div>
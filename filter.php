<?php
	//Check for posted data  //Check for post or get values when we submit form (we can use if is set data)
	
	/*
	if(filter_has_var(INPUT_POST, 'data')) { //jei formoje bus naudojamas get metodas, turime nurodyti INPUT_GET
		echo 'Data Found';
			} else {
		echo 'No Data';	
	}


	*/

	//We can also valide input data //we will check is email valid
	
	/*

	if(filter_has_var(INPUT_POST, 'data')) {
		if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)) {
			echo 'Email is valid';
		} else {
			echo 'Email is not vaid';
		}	
	}
	
	*/

	//Sanitize email data //isvalo nereikalingus simbolius

	/*
	if(filter_has_var(INPUT_POST, 'data')){
		$email = $_POST['data'];

		// Remove illegal chars
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);
		echo $email.'<br>';

		if(filter_var($email,FILTER_VALIDATE_EMAIL)){
			echo 'Email is valid';
		} else {
			echo 'Email is NOT valid';
		}
	}
	*/


	//we can do different validations, we can test for:
	#FILTER_VALIDATE_BOOLEAN
	#FILTER_VALIDATE_EMAIL
	#FILTER_VALIDATE_FLOAT
	#FILTER_VALIDATE_INT
	#FILTER_VALIDATE_IP
	#FILTER_VALIDATE_REGEXP
	#FILTER_VALIDATE_URL

	//for sanitize we have:
	#FILTER_SANITIZE_EMAIL
	#FILTER_SANITIZE_ENCODED
	#FILTER_SANITIZE_NUMBER_FLOAT
	#FILTER_SANITIZE_NUMBER_INT
	#FILTER_SANITIZE_SPECIAL_CHARS
	#FILTER_SANITIZE_STRING
	#FILTER_SANITIZE_URL

	//Integer validation

	/*
	$var ='23'; //nesvarbuar skaiciu parasysima paprastai ar kaip stringa, jis bus identifikuotas kai integeris

		if(filter_var($var, FILTER_VALIDATE_INT)) {
			ECHO $var.' is a number';
		} else {
			echo $var.' is NOT a number';
		}	
	*/		

	//Sanitizing integer or number

	/*	

	$var = 'dfdfdf66664ffd4646fff';
	var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT)); //isvalo raides, parodo tik svaru skaiciu

	*/

	//apsidaugojimas nuo neleistiniu skriptu

	/*
	$var = '<script>alert(1)</script>';
	echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);
	*/
	
	#filter_input_array
	
	/*
	$filters = array(
		"data" => FILTER_VALIDATE_EMAIL,
		"data2" => array(
			"filter" =>FILTER_VALIDATE_INT,
			"options" => array(
				"min_rage" => 1,
				"max_range" => 100
			)
		)
	);

	print_r(filter_input_array(INPUT_POST,$filters)); //patikrina ar data lauka ivedame emaila, o i data skaiciu is intervalo 1 iki 100.PVZ. lauke data ivedamas ne el pastas, o lauke 589, reiksmes nera perduodamos. Laukai veikia atkirai. Per viena lauka gali buti perduodam reiksme, per kita ne. PVZ. jei i viena irasome emaila, o i kita skaiciu 589, emailo bus perduodamas i kintamaji, o skaicius ne ir pan.

	*/

	#filter_var_array

	$arr = array(
		"name" => "Martynas Nelis",
		"age" => "35",
		"email" => "martynas@gmail.com"
	);

	$filter = array(
		"name" => array(
			"filter" => FILTER_CALLBACK, //allows apply a function to this value
			"options" => "ucwords"	//kadangi naudojam FILTER_CALL, "options" => "ucwords" (panaudosime funkcija), kad paversi didziosioms raidems name "Martynas Kelis"
		),
		"age" => array(
			"filter" => FILTER_VALIDATE_INT,  //turi buti integer reiksme
			"options" => array(
				"min_range" => 1,
				"max_range" => 120
			)	
		),
		"email" => FILTER_VALIDATE_EMAIL //email filter
	);

	print_r(filter_var_array($arr, $filter)); //paimame masyma ir filtrus ir tada tikriname

?>


<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> <!--$_SERVER['PHP_SELF'] givesas the corrent page-->
	<input type="text" name="data">
	<input type="text" name="data2">
	<button type="submit">Submit</button>
</form>
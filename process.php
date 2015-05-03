<?php

$errors         = array();  	// array to hold validation errors
$data 			= array(); 		// array to pass back data

// validate the variables ======================================================
	if (empty($_POST['partner']))
		$errors['partner'] = 'Partner is required.';
    
    if (empty($_POST['vendor']))
		$errors['vendor'] = 'Vendor is required.';

    if (empty($_POST['user']))
		$errors['user'] = 'User is required.';

    if (empty($_POST['pwd']))
		$errors['pwd'] = 'Password is required.';

    if (empty($_POST['amt']))
		$errors['amt'] = 'Amount is required.';

	if (empty($_POST['superheroAlias']))
		$errors['superheroAlias'] = 'Superhero alias is required.';

// return a response ===========================================================

	// response if there are errors
	if ( ! empty($errors)) {

		// if there are items in our errors array, return those errors
		$data['success'] = false;
		$data['errors']  = $errors;
	} else {

		// if there are no errors, return a message
		$data['success'] = true;
		$data['message'] = 'Success!';
	}

	// return all our data to an AJAX call
	echo json_encode($data);

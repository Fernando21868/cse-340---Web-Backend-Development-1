<?php

// Accounts Controller

    // Get the database connection file
    require_once '../library/connections.php';
    // Get the phpmotors model for use as needed
    require_once '../model/main-model.php';
    // Get the accounts model
    require_once '../model/vehicles-model.php';

    // Get the array of classifications
    $classifications = getClassifications();

    // Build a navigation bar using the $classifications array
    $navList = '<ul>';
    $navList .= "<li><a href='/phpmotors/index.php' title='View the PHP Motors home page'>Home</a></li>";
    foreach ($classifications as $classification) {
    $navList .= "<li><a href='/phpmotors/index.php?action=".urlencode($classification['classificationName'])."' title='View our $classification[classificationName] product line'>$classification[classificationName]</a></li>";
    }
    $navList .= '</ul>';

    $classificationList = '<label class="top"><select required name="classificationId"><option value disabled selected>Select Classification</option>';
    foreach ($classifications as $classification) {
        $classificationList .= "<option value='$classification[classificationId]'>$classification[classificationName]</option>";
    }
    $classificationList .= '</select></label>';

    // Get the value from the action name - value pair
    $action = filter_input(INPUT_POST,'action');
    if($action == NULL){
        $action = filter_input(INPUT_GET,'action');
    }

    switch ($action) {
        // Code to deliver the views
        case 'new-classifications':
            include '../view/add-classification.php';
            break;
        case 'new-vehicles':
            include '../view/add-vehicle.php';
            break;
        case 'add-classification':
            // Filter and store the data
            $classificationName = filter_input(INPUT_POST, 'classificationName');

            // Check for missing data
            if(empty($classificationName)){
                $message = '<p class="message error">Please provide information for all empty form fields.</p>';
                include '../view/add-classification.php';
                exit;
            }

            // Send the data to the model
            $regOutcome = regClassification($classificationName);

            // Check and report the result
            if($regOutcome === 1 ){
                header("Location: http://localhost/phpmotors/vehicles/");
                exit;
            } else {
                $message = "<p class='message error'>Sorry but the registration of the new $classificationName failed.</p>";
                include '../view/add-classification.php';
                exit;
            }
        case 'add-vehicle':
            // Filter and store the data
            $classificationId = filter_input(INPUT_POST, 'classificationId');
            $invMake = filter_input(INPUT_POST, 'invMake');
            $invModel = filter_input(INPUT_POST, 'invModel');
            $invDescription = filter_input(INPUT_POST, 'invDescription');
            $invImage = filter_input(INPUT_POST, 'invImage');
            $invThumbnail = filter_input(INPUT_POST, 'invThumbnail');
            $invPrice = filter_input(INPUT_POST, 'invPrice');
            $invStock = filter_input(INPUT_POST, 'invStock');
            $invColor = filter_input(INPUT_POST, 'invColor');


            // var_dump($classificationId);
            // var_dump($invMake);
            // var_dump($invModel);
            // var_dump($invDescription);
            // var_dump($invImage);
            // var_dump($invThumbnail);
            // var_dump($invPrice);
            // var_dump($invStock);
            // var_dump($invColor);
            // exit;

            // Check for missing data
            if(empty($classificationId) || empty($invMake) || empty($invModel) || empty($invDescription) || empty($invImage) || empty($invThumbnail) || empty($invPrice) || empty($invStock) || empty($invColor)){
                $message = '<p class="message error">Please provide information for all empty form fields.</p>';
                include '../view/add-vehicle.php';
                exit;
            }

            // Send the data to the model
            $regOutcome = regVehicle($classificationId, $invMake, $invModel, $invDescription, $invImage, $invThumbnail, $invPrice, $invStock, $invColor);

            // Check and report the result
            if($regOutcome === 1 ){
                $message = "<p class='message success'>Thanks for registering a new vehicle.</p>";
                include '../view/add-vehicle.php';
                exit;
            } else {
                $message = "<p class='message error'>Sorry but the registration of the new a new vehicle has failed.</p>";
                include '../view/add-vehicle.php';
                exit;
            }
        default:
            include '../view/vehicle-man.php';
            break;
    }


?>
<?php

// Controller

    // Get the database connection file
    require_once 'library/connections.php';
    require_once 'model/main-model.php';

    // Get the array of classifications
    $classifications = getClassifications();
    // var_dump($classfications);
    //     exit;

    $navList = '<ul>';
    $navList .= "<li><a href='/phpmotors/index.php' title='View the PHP Motors home page'>Home</a></li>";
    foreach ($classifications as $classification) {
    $navList .= "<li><a href='/phpmotors/index.php?action=".urlencode($classification['classificationName'])."' title='View our $classification[classificationName] product line'>$classification[classificationName]</a></li>";
    }
    $navList .= '</ul>';

    // echo $navList;
    // exit;

    $action = filter_input(INPUT_POST,'action');
    if($action == NULL){
        $action = filter_input(INPUT_GET,'action');
    }
    switch ($action) {
        case 'template':
            include 'view/template.php';
            break;
        
        default:
            include 'view/home.php';
    }


?>
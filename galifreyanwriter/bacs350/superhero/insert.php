<?php

    // Code to define functions
    require_once (dirname(__DIR__).'../../views.php');
    require_once 'superhero_views.php';
    require_once 'superhero_db.php';

    // Pick out the inputs
    $name = filter_input(INPUT_GET, 'name');
    $alias = filter_input(INPUT_GET, 'alias');
    $image = filter_input(INPUT_GET, 'image');
    $strengths = filter_input(INPUT_GET, 'strengths');
    $weaknesses = filter_input(INPUT_GET, 'weaknesses');

    if ($name == '' || $alias == '' || $image == '' || $strengths == '' || $weaknesses == '') {
        
        // Form view to add superhero
        $add_form = add_superhero_form();


        // Button to clear
        $clear_button = '<a href="delete.php">Reset Superheros</a>';


        // Display the HTML in the page
        $intro = 'This form collects data to create a superhero record in the database.';
        $content = "$intro $list $add_form $clear_button";

        echo render_page('UNC BACS 350', "Add Superhero", $content);
    }

    // Add record and return to list
    if (add_hero($db, $name, $alias, $image, $strengths, $weaknesses))
    {
        header("Location: index.php");
    };
 
?>
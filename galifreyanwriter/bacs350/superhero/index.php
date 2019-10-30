<?php
    $site_title = 'UNC BACS 350';
    $page_title = 'Superhero Gallery';

    // Code to define functions
    require_once 'views.php';
    require_once 'superhero_views.php';
    require_once 'superhero_db.php';

    // List superhero records
    $list = render_superheroes(list_superheros($db));
    
    // Button to go to other views
    $add_button = '<p><a class="button" href="insert.php">Add Superhero</a></p>';

    $content = "$add_button $list";

    // Show the page
    echo render_page($site_title, $page_title, $content);
?>
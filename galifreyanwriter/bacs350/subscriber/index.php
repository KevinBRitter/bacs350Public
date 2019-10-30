<!--New code for skill#7-->
<?php

    // Connect to the subscribers database at Bluehost via subscriber.php
    require 'subscriber.php';

    $site_title = 'UNC BACS 350';
    
    $page_title = 'Subscribers to the SQL';
    
    $section1 = '<h1>Connect to database</h1>        <p>Subscribers:</p>';
    // SQL SELECT
    // Get a list of records into an array
    $subscribers = list_subscribers($db);

    // Create an HTML list on the output
    $query1 = "";
    foreach($subscribers as $row) {
        $query1 .= '<li><b>'.$row[name].'</b> - email: '.$row[email].'</li>';
        };

    
    $section6 = '<p>This page was successful. Grats!</p>';

    $content = $section1 .'<ul>'.$query1 .'</ul>' .$section6;
    include (dirname(__DIR__).'/views.php');
    
    echo render_page($site_title, $page_title, $content);

?>
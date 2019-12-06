<?php

    // Get the parameter off the URL
    // URL = http://localhost/bacs350/planner/doc.php?doc=ToDo.md
    // Eg. Doc = ToDo.md

    $doc = $_GET['doc'];
    $page = $_SERVER['REQUEST_URI'];
    $doc_label = "<p>" . $doc . "</p>";


    // Use the views code
    require_once (dirname(__DIR__).'../../views.php');


    // Link to Home
    $home = '<a href=".">Other Documents</a>';


    // Read Markdown Text from file
    $text = render_markdown($doc);
    $content = render_card($doc, $text);


    // Display the HTML in the page
    echo render_page('Ritter Files', "Document Manager", $home . $content);

?>

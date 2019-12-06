<?php

    require_once (dirname(__DIR__).'../../views.php');


    // Read Markdown Text from file
    $content = render_markdown("Planner.md");


    // Display the HTML in the page
    echo render_page("Kevin's Project Planner", "UNC BACS 350 - Brain App", $content);

?>

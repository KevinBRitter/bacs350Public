<?php

    require_once (dirname(__DIR__).'../../views.php');

    // Read Markdown Text from file
    $content = render_markdown("Plan.md");

    // Display the HTML in the page
    echo render_page("Kevin's Review Planner", "UNC BACS 350 - Database of Reviews", $content);

?>
<?php

    require_once 'views.php';

    // Read Markdown Text from file
    $content = render_markdown("Plan.md");

    // Display the HTML in the page
    echo render_page("Kevin's Review Planner", "UNC BACS 350 - Database of Reviews", $content);

?>
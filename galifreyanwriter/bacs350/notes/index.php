<!--New code for skill#8-->
<?php

    $site_title = 'UNC BACS 350';
    $page_title = 'Notes Saver Database';
    
    // Connect to the notes database at Bluehost via notes_db.php
    require_once 'views.php';
    require_once 'notes_views.php';
    require_once 'notes_db.php';
    
    // List note records
    $list = render_notes(list_notes($db));

    // Button to go to add notes
    $add_button = '<p><a class="button" href="insert.php">Add Note</a></p>';

    $content = "$add_button $list";


    // Add css from the main style at root
//    include (dirname(__DIR__).'/bacs350/unc.css');
    
    // Show the page
    echo render_page($site_title, $page_title, $content);

?>
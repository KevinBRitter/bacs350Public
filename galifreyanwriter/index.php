<?php

    /*
        Create page content with a template.
    */

    $site_title = "Kevin Ritter";
    
    $page_title = 'BACS 350 Code Workshop';

    $content = '
        <p>
            <a href="/bacs350">Home</a>
        </p>
        <p> 
            <img src="/images/Profile.png" alt="Kevin Ritter">
        </p>
        
        <h3>Code</h3>
        
        <ul>
            <li>
                <a href="/bacs350/demo">Mark\'s Code Demos</a>
            </li>
            <li>
                <a href="/bacs350/pattern">Mark\'s Design Patterns</a>
            </li>
            <li>
                <a href="/bacs350/project">My Projects</a>
            </li>
        </ul>
        
    ';

    include 'views.php';

    echo render_page($site_title, $page_title, $content);

?>

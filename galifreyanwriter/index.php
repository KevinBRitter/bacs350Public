<?php

    /*
        Create page content with a template.
    */
    require_once 'log.php';
    require_once 'views.php';
    require_once 'auth.php';


    // Log the page load
    log_page();

    $site_title = "Kevin Ritter";
    
    $page_title = 'BACS 350 Code Workshop';

    $content = '
        <p>
            <a href="/bacs350">BACS350 Page</a>
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

    echo render_page($site_title, $page_title, $content);

?>

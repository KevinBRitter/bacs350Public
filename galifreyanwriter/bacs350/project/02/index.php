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
            <img src="/images/Profile.png" alt="Kevin Ritter"></img>
        </p>
        
        <h3>Code</h3>
        
        <ul>
            <li>
                <a href="/bacs350/demo">My Code Demos</a>
            </li>
            <li>
                <a href="/bacs350/pattern">My Design Patterns</a>
            </li>
            <li>
                <a href="/bacs350/project">My Projects</a>
            </li>
        </ul>
        
        <h3>Web Services</h3>
        
        <ul>
            <li>
                <a href="https://www.unco.edu/canvas/">Canvas</a>
            </li>
            <li>
                <a href="https://unco-bacs.org">WordPress site</a>
            </li>
            <li>
                <a href="https://unco-bacs.org/bacs350">My Home Page</a>
            </li>
            <li>
                <a href="https://shrinking-world.com/unc/bacs350">Sensei Server</a>
            </li>
            <li>
                <a href="https://github.com/KevinBRitter/UNC-BACS350-2019-Fall">Github</a>
            </li>
        </ul>
        
        
    ';

    include '../../views.php';

    echo render_page($site_title, $page_title, $content);

?>

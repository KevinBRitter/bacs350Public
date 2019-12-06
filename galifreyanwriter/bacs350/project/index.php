<?php
    /*
        Create page content by rendering a template.
    */

    $site_title = 'UNC BACS 350';
    
    $page_title = "My Projects";
    
    $content = '
        <p>
            <a href="..">Home</a>
        </p>
        <p> 
            Projects in BACS 350.
        </p>
        
        <ul>
            <li>
                <a href="01">Project #1 - Setup Web Hosting</a>
            </li>
            <li>
                <a href="02">Project #2 - Page Template</a>
            </li>
            <li>
                <a href="../">Built for Class Pages</a>
            </li>
        </ul>
    ';

    require_once (dirname(__DIR__).'../../views.php');
    
    echo render_page($site_title, $page_title, $content);

?>

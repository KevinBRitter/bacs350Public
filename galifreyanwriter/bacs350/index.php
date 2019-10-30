<?php

    /*
        Create page content with a template.
    */

    $site_title = "Kevin Ritter BACS 350 Home";
    
    $page_title = "Peeling back the layers of Seaman's Brain";
    
    $content = '
        <p>
            <a href="..">Home</a>
        </p>
        <p> 
            <img src="/images/Profile.png" alt="Kevin Ritter">
        </p>
        <p> 
            This page is the beginning of an ongoing project in BACS 350.
        </p>
        <p> 
            It is a custom information manager. Really! Check out my favi-con up top.
        </p>
        <p> 
            Different pages within this PHP app will contain different types of info.
        </p>
        
        <h3>Code</h3>
        
        <ul>
            <li>
                <a href="demo">Mark\'s Code Demos</a>
            </li>
            <li>
                <a href="pattern">Mark\'s Design Patterns</a>
            </li>
            <li>
                <a href="project">My Projects</a>
            </li>
        </ul>
        
        <h3>Web Services</h3>
        
        <ul>
            <li>
                <a href="https://www.unco.edu/canvas/">Canvas</a>
            </li>
            <li>
                <a href="http://galifreyanwriter.com/">WordPress site</a>
            </li>
            <li>
                <a href="http://galifreyanwriter.com/">My Home Page</a>
            </li>
            <li>
                <a href="https://shrinking-world.com/unc/bacs350">Sensei Server</a>
            </li>
            <li>
                <a href="https://github.com/KevinBRitter/bacs350Public">Github</a>
            </li>
        </ul>
        <h3>Subscribers List</h3>
        
        <ul>
            <li>
                <a href="subscriber">Subscribers From SQL</a>
            </li>
        </ul> 
        <h3>Super Hero Project</h3>
        
        <ul>
            <li>
                <a href="superhero">Superhero Card Collection</a>
            </li>
        </ul>    
        <h3>Notes Database</h3>
        
        <ul>
            <li>
                <a href="notes">See Notes</a>
            </li>
        </ul>
    ';

    include 'views.php';
    
    echo render_page($site_title, $page_title, $content);

?>
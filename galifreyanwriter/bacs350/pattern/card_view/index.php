<?php

    /*
        Render a Card View within a Page
    */

    $site_title = 'UNC BACS 350';

    $page_title = "Card View Pattern";

    $content = '
        <p>
            Render a Card View within a Page
        </p>
        <ul>
            <li>
                <a href="..">Other Design Patterns</a>
            </li>
            <li>
                <a href="card_view.php">PHP Code</a>
            </li>
        </ul>

    ';

    require_once (dirname(dirname(__DIR__)).'../../views.php');

    echo render_page($site_title, $page_title, $content);

?>

<?php

    /*
        Access the superhero database and
        Render a Card View within the Page        
    */

    require 'superhero_db.php';
    require_once (dirname(__DIR__).'../../secret_settings.php');

    // Get a list of records into an array
    $superheros = list_superheros($db);

    $cardlist = "";
    foreach($superheros as $hero){
        $body = "Alter-Ego: " . $hero[alias] . "<br>Strengths: " . $hero[strengths] . "<br>Weaknesses: " . $hero[weaknesses];
        $Rimage = "hero_images/" . $hero[image];
        $card = render_card($hero[name], $body, $Rimage);
//        $cardlist += $card;    
    }

    $content =  '
        <div class="container-fluid">
            <div class="row">
                
                ' . $card . '

            </div>
        </div>
    ';

    echo render_page($site_title, $page_title, $content);

?>
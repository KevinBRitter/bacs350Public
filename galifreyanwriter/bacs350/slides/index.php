<?php
    require_once 'slides.php';
    require_once (dirname(__DIR__).'../../views.php');
    require_once (dirname(__DIR__).'../../log.php');

    // Log the page load
    log_page();

    // Display the page content
    $content = '<div><p>';
    $content .= render_button('Other Demos', '..');
    $content .= render_button('Show Log', 'pagelog.php');
    $content .= render_button('Add Slide Show', 'index.php?action=add');
    $content .= '</p></div>';
    $content .= handle_actions();

    // Create main part of page content
    $settings = array(
        "site_title" => "Slide Builder App",
        "page_title" => "Working on reveal js",
        "logo"       => "http://galifreyanwriter.com/images/GWLogoKnights.png",
        "style"      => "http://galifreyanwriter.com/myStyle.css",
        "content"    => $content);

//    echo render_page($settings);
    echo render_page("Slide Builder App", "Working on reveal js", $content);

?>
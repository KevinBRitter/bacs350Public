<?php

    require_once (dirname(__DIR__).'../../views.php');
    require_once (dirname(__DIR__).'../../log.php');

    // Clear the log if requested
    $action = filter_input(INPUT_GET, 'action');
    if ($action == 'clear') {
        clear_log($db);
    }

    // Clear button
    $home = render_button('Home', 'index.php');
    $clear = render_button('Clear Log', 'pagelog.php?action=clear');

    // Show page history
    $history = render_history(query_log($db));

    // Show Page
    $settings = array(
        "site_title" => "Galifreyan Writer slides log",
        "page_title" => "Display Pages History",
        "style"      => 'style.css',
        "content"    => $home . $clear . $history);
    $content = $home . $clear . $history;
//    echo render_page($settings);
    echo render_page("Galifreyan Writer slides log", "Display Pages History", $content);

?>

<?php

    /*
        render_page -- build a page with custom settings
    */

    header("Pragma: no-cache");
    header("Expires: 0");
    header("Cache-Control: no-store, no-cache, must-revalidate");   

    function render_page($site_title, $page_title, $content) {
        
        return '
            
            <!DOCTYPE html>
            <html lang="en">
                <head>

                    <meta charset="UTF-8">
                    <title>' . $page_title . '</title>

                    <link rel="icon" type="image/x-icon" href="/images/R_favicon.png">
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
                    <link rel="stylesheet" href="/myStyle.css">

                </head>
                <body>
                
                    <header>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h1>' . $site_title . '</h1>
                                    <h2>' . $page_title . '</h2>
                                </div>
                                <div class="logo col-sm-4">
                                    <div class="pull-right">
                                        <img class="img-rounded img-responsive" 
                                        src="http://galifreyanwriter.com/images/GWLogoKnights.png" 
                                        alt="Knights Logo" width="150">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>

                    <main>

                        ' . $content . '

                    </main>
                </body>
            </html>
        ';

    }
    // render_list -- Create a bullet list in HTML
    function render_list($list) {
        $s = '<ul>';
        foreach($list as $i) {
            $s .= "<li>$i</li>";
        }
        $s .= '</ul>';
        return $s;
    }
    // render_links -- Create a bullet list of hyperlinks in HTML
    function render_links($list) {
        $s = '<ul>';
        foreach($list as $text) {
            $url = 'doc.php?doc=' . $text;
            $s .= "<li>" . render_link($text, $url) . "</li>";
        }
        $s .= '</ul>';
        return $s;
    }
    // render_link -- Create a hyperlink in HTML
    function render_link($text, $url) {
        return "<a href=\"$url\">$text</a>";
    }
    // render_card -- build HTML text for a card
    function render_card($title, $body) {
        return '
            <div class="card">
                <div class="card-header">
                    ' . $title . '
                </div>
                <div class="card-body card-padding">
                    ' . $body . '
                </div>
            </div>
        ';
    }
    // render_markdown -- Read Markdown Text from file and convert into HTML
    function render_markdown($file) {
        $text = file_get_contents($file);
        require_once 'Parsedown.php';
        $converter = new Parsedown();
        return $converter->text($text);
    }

?>

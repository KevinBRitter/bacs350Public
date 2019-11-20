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
                    <link rel="stylesheet" href="/mystyle.css">

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

?>

<!--ripped from project 6 index.php-->
<h1>Subscribers Database</h1>

<p>This page demonstrates a connection to an actual database at Bluehost.</p>
<p>The last output for this page should be a success confirmation. </p>

<?php

    // Connect to the subscribers database at Bluehost
    require 'subscriber.php';

    // Get a list of subscribers records
    $subscribers = query_subscribers($db);


    // Build a list of subscribers in HTML
    $list = render_subscriber_list($subscribers);

    echo $list;
    
?>
<p><b>Success !!</b></p>

<!--ripped from project 6 subscriber.php-->
<?php

    // Connect to the Bluehost database for subscribers
    function subscriber_db() {
        $port = '3306';
        $dbname = 'layzqfmy_subscribers';
        $db_connect = "mysql:host=localhost:$port;dbname=$dbname";
        $username = 'layzqfmy_350';
        $password = 'password_350';
        return new PDO($db_connect, $username, $password);
    }

    
    // Query for all subscribers
    function query_subscribers ($db) {
        $query = "SELECT * FROM subscribers";
        $statement = $db->prepare($query);
        $statement->execute();
        return $statement->fetchAll();
    }


    // render_subscriber_list -- Create a bullet list in HTML
    function render_subscriber_list($subscribers) {
        $s = '<ul>';
        foreach($subscribers as $row) {
            $name = "<b>$row[name]</b>";
            $email = "email: $row[email]";
            $s .= "<li>$name - $email</li>";
        }
        $s .= '</ul>';
        return $s;
    }


    // Create a connection
    $db = subscriber_db();
   
?>

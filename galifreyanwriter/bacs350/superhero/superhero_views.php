<?php

    require_once (dirname(__DIR__).'../../views.php');

    // add_superhero_form -- Create an HTML form to add record.
    function add_superhero_form() {
        $title = 'Add Superhero';
        $body = '
            <form action="insert.php" method="get">
                <table class="table table-hover">
                    <tr><td><label>Super Name:</label> &nbsp; </td><td><input type="text" name="name"></td></tr>
                    <tr><td><label>Secret Identity:</label> &nbsp; </td><td><input type="text" name="alias"></td></tr>
                    <tr><td><label>Photo:</label> &nbsp; </td><td><input type="text" name="image"></td></tr>
                    <tr><td><label>Strengths:</label> &nbsp; 
                    </td><td><textarea name="strengths">Text goes here.</textarea></td></tr>
                    <tr><td><label>Weaknesses:</label> &nbsp;
                    </td><td><textarea name="weaknesses">Text goes here.</textarea></td></tr>
                    <tr><input class="button" type="submit" value="Add Superhero"/></tr>
                </table>
            </form>
            ';
        $photo = "hero_images/thor_dave_rapoza_deviantart.jpg";
        return render_card_image($title, $body, $photo);
    }


    // Create an HTML list on the output
    function render_superheroes($superheroes) {
        $html = '';
        foreach($superheroes as $hero) {
            $title = $hero[name];
            $delete = "<a href='delete.php?id=$hero[id]'>Delete Record</a>";
            $photo = "hero_images/$hero[image]";
            $body = "
                <table class='table table-hover'>
                    <tr><td>Super Name:</td><td>$hero[alias]</td></tr>
                    <tr><td>Secret Identity:</td><td>$title</td></tr>
                    <tr><td>Strengths:</td><td>$hero[strengths]</td></tr>
                    <tr><td>Weaknesses:</td><td>$hero[weaknesses]</td></tr>
                    <tr><td>Record $hero[id]</td><td>$delete</td></tr>
                </table>";
            $html = $html . render_card_image($title, $body, $photo);
        }
        return $html;
    }
    
?>

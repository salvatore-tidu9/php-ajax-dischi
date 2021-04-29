<?php

    require "database.php";

    header("Content-Type: application.json");
    

    if (!empty($_GET["listAuthors"]))  {

        $listAuthors = $_GET["listAuthors"];

        $authors = [];

        if ($listAuthors == true) {

            foreach($database as $element) {

                if (!in_array($element["author"], $authors)) {

                    $authors[] = $element["author"];
                }
            }
        }

        echo json_encode($authors);
    }

    else {

        echo json_encode($database);
    }

?>
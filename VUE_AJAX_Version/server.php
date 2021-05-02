<?php

    require "database.php";

    header("Content-Type: application.json");


    $call = $_GET["call"];

    
    switch ($call) {

        case "allAlbums":

            echo json_encode($database);

            break;


        case "allAuthors":

            $authors = [];

            foreach ($database as $element) {

                $authors[] = $element["author"];
            }

            echo json_encode($authors);

            break;


        case "filteredAuthors":

            $filteredDatabase = [];

            $author = $_GET["author"];

            if ($author == "") {

                $filteredDatabase = $database;
            }

            else {

                foreach ($database as $element) {

                    if ($author != "" && $element["author"] == $author) {
    
                        $filteredDatabase[] = $element;
                    }
                }
            };

            echo json_encode($filteredDatabase);

            break;

    }

?>
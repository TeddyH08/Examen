<?php

    if (isset($_POST)) {
        if (!empty($_POST['exampleInputName1']) && !empty($_POST['exampleInputFirstname1']) && !empty($_POST['exampleInputEmail1'])) {
            $name = $_POST['exampleInputName1'];
            $firstname = $_POST['exampleInputFirstname1'];
            $mail = $_POST['exampleInputEmail1'];

            echo $name ." ". $firstname . ", ". $mail ." à bien été reçu, nous vous contacterons dans les plus bref delais.";

            $tab = array();

            $tab['name'] = $name;
            $tab['firstname'] = $firstname;
            $tab['mail'] = $mail;

            $js = file_get_contents('tableau.json');
            $js = json_decode($js, true);
            $js[] = $tab;
            $js = json_encode($js);

            file_put_contents('tableau.json', $js);
        } else {
            if (empty($_POST['exampleInputName1'])) {
                $name = $_POST['exampleInputName1'];

                echo "Attention, le champ Nom doit être remplis.";
            } else if (empty($_POST['exampleInputFirstname1'])) {
                $firstname = $_POST['exampleInputFirstname1'];

                echo "Attention, le champ Prénom doit être remplis.";
            } else if (empty($_POST['exampleInputEmail1'])) {
                $mail = $_POST['exampleInputEmail1'];

                echo "Attention, le champ Adresse mail doit être remplis.";
            } else {

            }
        }
    }

    
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Atelier PHP - Étape 2</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style>
        html {
            height: 100%;
        }
        BODY {
            font-family: "Trebuchet MS", Helvetica, sans-serif;
            background-attachment: fixed;
            background: linear-gradient(#2196F3 250px, #EEEEEE 1px);
        }
        header {
            margin: auto;
            width: 570px;
            padding: 15px;
            color: #FFFFFF;
        }
        .contentbox {
            padding: 0px;
            margin: auto;
            width: 600px;

        }
        .maincontent {
            float: left;
            display: block;
            width: 596px;
            background-color: #FFFFFF;
            border-radius: 0.125rem;
            box-shadow: 0 0.125rem 0.3125rem 0 rgba(0, 0, 0, 0.25);
        }

        .action_buttons {
            float: left;
            width: 100%;
            margin-bottom: 5px;

        }

        .button {
            float: right;
            margin-right: 25px;
        }

        .button INPUT {
            margin:10px; padding: 5px;
            width: 100%;
            height: 40px;
            border-radius:0;
            border: 0px;
            background-color: transparent;
            font-size: 18px;
            color: #1976D2;
            border-radius: 0.2em;

        }

        .button INPUT:hover {
            background-color: #E3F2FD;
        }

        .fields {
            float: left;
            margin: auto;
            width: 540px;
            padding: 25px;
            color: #424242;
        }
        LABEL {

            padding-left: 40px;
            float: left;
            width: 40%;
            margin: auto;
            margin-bottom: 10px;
            padding-bottom: 10px;
            padding-top: 10px;
            font-size: 18px;
            color: #424242;
        }
        LABEL:hover {
            color: #212121;

        }
        .checkbox {
            position: relative;
            top: -0.375rem;
            margin: 0 1rem 0 0;
            cursor: pointer;
            margin-right: 25px;
        }

        .checkbox:before {

            transition: all 0.3s ease-in-out;
            content: "";
            position: absolute;
            left: 0;
            z-index: 1;
            width: 1rem;
            height: 1rem;
            border: 2px solid #9E9E9E;
        }

        .checkbox:checked:before {
            transform: rotate(-45deg);
            height: .5rem;
            border-color: #2196F3;
            border-top-style: none;
            border-right-style: none;
        }

        .checkbox:after {
            content: "";
            position: absolute;
            top: -0.125rem;
            left: 0;
            width: 1.1rem;
            height: 1.1rem;
            background: #fff;
            cursor: pointer;
        }


    </style>
</head>
<body>
<header>
    <h1>Atelier PHP - Étape 3</h1>

</header>
<section class="contentbox">
    <div class="maincontent">
        <div class="fields">
            <?php
                $answer = $_POST['answer'];
                $result = $_POST['result'];
                $question = $_POST['question'];

                foreach ($_POST['answer'] as $round => $answer ) {
            ?>
                    <h2>Résultat</h2>
                        <p><?php  echo $question[$round]?></p>
                    <p>votre réponse: <?php echo $answer?> </p>
                    <?php if ($result[$round] == $answer) {
                        echo '<p style="color:green">Bonne réponse !</p>';

                    } else {
                        echo '<p style="color:red">Mauvaise réponse !</p>';
                        echo '<p style="color:red">La bonne réponse est: '.$result[$round].'</p>';
                    }
            } ?>
        </div>
    </div>
</section>

</body>
</html>

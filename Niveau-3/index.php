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
    <p>Afficher les tables de multiplication</p>
</header>


    <form method="POST" action="index.php">
        <section class="contentbox">
            <div class="maincontent">
                <div class="fields">
                    <h3>Choisissez une ou plusieurs table et résolvez les opérations proposés</h3>
                    <label><input type="checkbox" name="check[]" value="0" class="checkbox" /> Table de 0</label>
                    <label><input type="checkbox" name="check[]" value="1" class="checkbox" /> Table de 1</label>
                    <label><input type="checkbox" name="check[]" value="2" class="checkbox" /> Table de 2</label>
                    <label><input type="checkbox" name="check[]" value="3" class="checkbox" /> Table de 3</label>
                    <label><input type="checkbox" name="check[]" value="4" class="checkbox" /> Table de 4</label>
                    <label><input type="checkbox" name="check[]" value="5" class="checkbox" /> Table de 5</label>
                    <label><input type="checkbox" name="check[]" value="6" class="checkbox" /> Table de 6</label>
                    <label><input type="checkbox" name="check[]" value="7" class="checkbox" /> Table de 7</label>
                    <label><input type="checkbox" name="check[]" value="8" class="checkbox" /> Table de 8</label>
                    <label><input type="checkbox" name="check[]" value="9" class="checkbox" /> Table de 9</label>
                    <label><input type="checkbox" name="check[]" value="10" class="checkbox" /> Table de 10</label>
                </div>
                <div class="action_buttons">
                    <div class="button"><input type="submit" name="sub" value="Lancer le QUIZ"></div>
                    <div class="button"><input type="reset" value="Annuler"></div>
                </div>
            </div>
        </section>
    </form>
    <form action="resultat.php" method="post">
        <section class="contentbox">
            <div class="maincontent">
                <div class="fields">
        <?php
        if (!empty($_POST) && isset($_POST['check']))
            foreach ($_POST['check'] as $table) :
                ?>
                <h1>Table de
                    <?php echo $table ?>
                </h1>

                <?php
                for ($i = 0; $i < 1; $i++) :
                    $randnumb = rand(0,10);
                    $result = $table * $randnumb;
                    ?>

                    <p>Combien font <?php echo $table?> x <?php echo $randnumb?> ?</p>
                    <input type="text" name="answer[]">
                    <input type="hidden" name="result[]" value="<?= $result ?>">
                    <input type="hidden" name="question[]" value="Combien font <?php echo $table?> x <?php echo $randnumb?> ?">

                <?php endfor ?>
                <br>
                <div class='action_buttons'>
                    <div class='button'>
                        <input type='submit' id="validmultiple" value='Valider les réponses'>
                    </div>
                </div>
            <?php endforeach ?>
                </div>
            </div>
        </section>
    </form>


</body>
</html>
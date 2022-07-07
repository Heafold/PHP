<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>Contact</title>
</head>
<body>
    <div class="text-center mt-12">
        <form action="" method="$_GET">

            <label for="mail">Email</label>
            <input type="email" id="mail" name="mail">

            <label for="sujet">Sujet</label>
            <select name="sujet" id="sujet">
                <option value="stage">Proposition de stage</option>
                <option value="emploi">Proposition d'emploi</option>
                <option value="stage">Demande de projet</option>
            </select>

            <label for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>

            <p>Civilité</p>

            <label for="Madame">Madame</label>
            <input type="radio" name="civilite" id="Madame">
            <label for="Monsieur">Monsieur</label>
            <input type="radio" name="civilite" id="Monsieur">

            <button>Envoyer</button>

        </form>
    </div>

    <?php 
        $mail = $_GET['mail'] ?? null;
        $sujet = $_GET['sujet'] ?? null;
        $message = $_GET['message'] ?? null;
        $civilite = $_GET['civilite'] ?? null;
        $success = false;
    
        if(empty($mail)){
            echo ' Email obligatoire ';
        }
        
        elseif(empty($sujet)){
            echo ' Veuillez renseigner le sujet ';
        }
        elseif(strlen($message) < 15){
            echo (' Le message doit faire 15 caractères ');
        }
        else{
            $success = true;
        }
    ?>
</body>
</html>
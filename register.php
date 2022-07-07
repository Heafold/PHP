<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>Inscription</title>
</head>

<body>

    <?php
    // $_POST est un tableau comme $_GET
    var_dump($_POST);

    // etape 1 s'assurer que tout fonctionne avec le var-dump
    // etape 2 récupèrer les champs dans les variables
    $email = $_POST['email'] ?? null;
    $password = $_POST['password'] ?? null;
    $success = false;

    if (!empty($_POST)) {
        // Étape 3 - Vérifier le formulaire (post, erreurs...)
        if (empty($email)){
            $errors[] = 'L\'email est obligatoire.';
        }

        if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors[] = 'L\'email est invalide.';
        }

        if(strlen($password) < 8){
            $errors[] = 'Le mot de passe doit faire 8 caractères' ;
        }

        // Étape 4 - Afficher un message de succès ou les erreurs
        if(empty($errors)){
            $success = true;
            // Base de données, email....
        }
        
    }
    

    ?>

    <?php
    if ($success) { ?>
        <h1>Merci <?= $email ?>, vous êtes bien enregistré avec le mot de passe : <?= $password ?></h1>
    <?php } ?>

    <?php if (!empty($errors)){ ?>
        <div class="bg-red-300 p-5 rounded border border-red-800 text-red-800 my-4">
            <?php foreach ($errors as $error){ ?>
                    <p><?= $error ?></p>
            <?php } ?>
            </div>
   <?php } ?>

    <div class="max-w-4xl mx-auto text-center">
        <h2>Formulaire d'incription</h2>
        <a href="index.php">Retour à l'accueil</a>

        <form action="" method="post">
            <div class="mb-3">
                <label for="email" class="block">Email</label>
                <input class="w-64" type="email" name="email" id="email">
            </div>

            <div class="mb-3">
                <label for="password" class="block">Mot de passe</label>
                <input class="w-64" type="password" name="password" id="password">
            </div>
            <button class="bg-blue-600 text-white px-3 py-2 rounded">S'inscrire</button>
        </form>
    </div>
</body>

</html>
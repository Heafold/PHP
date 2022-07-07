<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>SuperGlobales</title>
</head>
<body>
    <div class="container text-center mt-12">
        <h2>Les supers globales en PHP</h2>
        <p>$_GET et $_POST sont des variables superglobales. On va les utiliser pour récupérer des valeurs dans l'URL ou dans un formulaire. </p>


        <?php 
            // $_GET est un tableau qui contient tous les paramètres de l'URL
            // index.php?nom=toto&age=30 = > $_GET contient ['nom' = > 'toto' , 'age' => 30]
            var_dump($_GET);
            // L'opérateur null coalesing permet de vérifier si une valeur existe
            $name = $_GET['nom'] ?? '?';
            $age = isset($_GET['age']) ? $_GET['age'] : null;
            $uppercase = (bool) ($_GET['uppercase'] ?? null); // On caste une valeur en booléen
            var_dump($uppercase);

            if($uppercase){
                $name = strtoupper($name);
            }
        ?>

        <h1 class="text-2xl">Bonjour <?= $name; ?></h1>
        <?php 
            if ($age){ ?>
                 <p class="text-2xl">Tu as <?= $age; ?> ans</p>
            <?php }
        ?>
       

        <a href="index.php?nom=toto&age=30" > Toto</a>
        <a href="index.php?nom=tata" > Tata</a>
        <a href="index.php" >Rien </a>


        <h2>Un formulaire avec $_GET</h2>

        <form action="" method="GET">
                <label for="name">Nom</label>
                <input type="text" name="nom" id="name" placeholder="<?= $name; ?>">
                <label for="age">Âge</label>
                <select name="age" id="age">
                    <?php for ($i = 18; $i <= 50; $i++){ ?>
                        <option <?= $i == $age ? 'selected' : ''; ?> value="<?= $i; ?>">
                         <?= $i; ?> ans</option>
                  <?php  } ?>
                </select>

                <div  class="mb-4">
                    <label for="uppercase">
                        <input type="checkbox" <?= $uppercase ? 'checked' : ''; ?> name="uppercase" id="uppercase"> Majuscule
                    </label>
                </div>

                <button class="bg-blue-400 hover:bg-blue-500 p-2 px-3 py-2 rounded text-white ">Envoyer</button>
        </form>

        <a href="register.php">Inscription</a>
    </div>
</body>
</html>
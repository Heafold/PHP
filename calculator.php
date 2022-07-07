<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>Calculator</title>
</head>

<body>
    <form action="" method="get">

        <div class="w-2/5 mx-auto flex justify-around text-center">

            <label for="nbr1">Nombre 1</label>
            <input type="number" name="nbr1" id="nbr1">
            <label for="nbr2">Nombre 2</label>
            <input type="number" name="nbr2" id="nbr2">
            <button class="border bg-blue-500 text-white px-4 ">Calculer</button>
        </div>

        <label for="plus">+</label>
        <input type="radio" name="choix" value="1" id="plus">

        <label for="moins">-</label>
        <input type="radio" name="choix" value="2" id="moins">

        <label for="div">/</label>
        <input type="radio" name="choix" value="3" id="div">

        <label for="fois">x</label>
        <input type="radio" name="choix" value="4" id="fois">



    </form>
    <div class="mx-auto w-2/5">
        <form>
            <input type="number" id="convertion" name="nombreconvertion">
            <select name="EuBit" id="EuBit">
                <option value="euro">En euro</option>
                <option value="bitcoin">En Bitcoin </option>
            </select>
            <button class="border bg-blue-500 text-white px-4 ">Convertir</button>

        </form>
    </div>
    <div class="text-center">
        <?php
        $nombreconvertion = $_GET['nombreconvertion'] ?? 0;
        $nombre1 = $_GET['nbr1'] ?? 0;
        $nombre2 = $_GET['nbr2'] ?? 0;
        $choix = $_GET['choix'] ?? null;
        $choixConv  = $_GET['EuBit'] ?? null;

        if ($nombre1 && $nombre2 && $choix == 1) {
            echo $nombre1 + $nombre2;
        }
        if ($nombre1 && $nombre2 && $choix == 2) {
            echo $nombre1 - $nombre2;
        }
        if ($nombre1 && $nombre2 && $choix == 3) {
            echo $nombre1 / $nombre2;
        }
        if ($nombre1 && $nombre2 && $choix == 4) {
            echo $nombre1 * $nombre2;
        }

        if ($nombreconvertion && $choixConv == "bitcoin") { ?>
            <p><?= round($nombreconvertion / 18000, 1) ?> bitcoin(s)</p>
        <?php }

        if ($nombreconvertion && $choixConv == "euro") { ?>
            <p><?= round($nombreconvertion * 18000) ?> euros</p>
        <?php }
        
        ?>
    </div>
</body>

</html>
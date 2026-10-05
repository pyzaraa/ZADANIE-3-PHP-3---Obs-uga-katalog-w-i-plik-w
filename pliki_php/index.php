<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moje pliki</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>MOJE PLIKI</h1>
    <?php
        $folder = getcwd();
        echo "Aktuaqlny katalog: <br>". $folder;
        echo "<br><br>";

        echo "ZAWARTOŚĆ KATALOGU <br>";
        echo "<table><tr><th>Nazwa</th><th>Typ</th></tr>";

        $pliki = scandir("dokumenty");
        foreach ($pliki as $plik) {

            if ($plik == "." || $plik == "..")
                continue;

            if (is_file("dokumenty/" . $plik)) {
                $typ = "PLIK";
            } elseif (is_dir("dokumenty/" . $plik)) {
                $typ = "KATALOG";
            }

            echo "<tr>";
            echo "<td>$plik</td>";
            echo "<td>$typ</td>";
            echo "</tr>";
        }

        echo "</table>";
    ?>
</body>
</html>
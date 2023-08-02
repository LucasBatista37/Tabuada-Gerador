<!DOCTYPE html>
<html>
<head>
    <title>Gerar Tabuada</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <div>
            <h1>Tabuada</h1>
            <form method="post">
                <label for="numero">Número</label>
                <input type="number" name="numero" id="numero">
                <input type="submit" value="Gerar">
            </form>
        </div>
        <div>
            <?php gerarTabuada(); ?>
        </div>
    </section>
    <?php
    function gerarTabuada(){
        if (isset($_POST['numero'])) {
            $i = intval($_POST['numero']);

            if ($i === 0) {
                echo "<h2>Todas as Tabuadas de 1 a 10</h2>";

                for ($j = 1; $j <= 10; $j++) {
                    echo "<h3>Tabuada do $j</h3>";
                    for ($x = 1; $x <= 10; $x++) {
                        $r = $j * $x;
                        echo "<p>$j X $x = $r</p>";
                    }
                }
            } else {
                echo "<h2>Tabuada do $i</h2>";

                for ($x = 1; $x <= 10; $x++) {
                    $r = $i * $x;
                    echo "<p>$i X $x = $r</p>";
                }
            }
        }
    }
    ?>
</body>
</html>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include 'includes/head.php' ?>
    <title>Calculatrice en POO</title>
</head>
<body>
    
    <h1>Calculatrice</h1>

    <form action="logic.php" method="post">

        <div>
            <label for="num1">Premier nombre</label>
            <input type="number" name="num1" id="num1" required>
        </div>
        <div>
            <label for="num2">Second Nombre</label>
            <input type="number" name="num2" id="num2" required>
        </div>
        <?php if(isset($_GET['result'])){ ?>
            <div>
                <label for="result">Resultat</label>
                <input type="text" id="result" value="<?= $_GET['result'] ?>" disabled>
            </div>
            <?php } ?>
        <div>
            <input type="submit" value="addition" name="op">
            <input type="submit" value="soustraction" name="op">
            <input type="submit" value="multiplication" name="op">
            <input type="submit" value="division" name="op">
            <input type="submit" value="puissance" name="op">
        </div>

    </form>

</body>
</html>
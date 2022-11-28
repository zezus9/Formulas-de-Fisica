<?php

    include "bd - calculos/database.php";

    $id = $_GET['select'];
    $formula = $sql -> query("SELECT * FROM formulas WHERE id = '$id'");

    while ($dadosF = mysqli_fetch_array($formula)) {
        $nome = $dadosF['nome'];
        $sigla = $dadosF['sigla'];
        $elementos = explode(',',$dadosF['elementos']);
    }
?>
<!DOCTYPE html>
<html lang="pt-br" class="h-100">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css'>
    <title><?php echo $nome; ?></title>
</head>
<body class="bg-dark d-flex justify-content-center align-items-center h-100">
    <main class="d-flex align-items-center flex-column h-100 w-75 p-5 text-light">
        <h1><?php echo "$nome - $sigla"; ?></h1>
        <form>
            <h4>Elemento que deseja encontrar<h3>
            <?php
                for ($i=0; $i < count($elementos); $i++) {
                    echo "
                        <label for='$i' class='h-100 p-2 d-flex justify-content-between bg-white text-warning m-1 w-100'>
                            <input type='radio' name='radios' id='$i' value='$elementos[$i]' required>
                            <h5 class='px-2'>$elementos[$i]</h5>
                        </label>
                    ";
                }
            ?>
            <div class='d-flex justify-content-center align-items-center'>
                <buttons type='submit' class='btn bg-white text-black px-5 p-2 botoes' name='botoes'>Salvar</buttons>
            </div>
        </form>
    </main>
</body>
</html>
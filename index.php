<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Raiz quadrada & Raiz cúbica</title>
</head>
<body>

    <?php 
        $num = $_POST['num'] ?? 1;

    
    ?>

    <main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
        <label for="numero">Número</label>
        <input type="number" name="num" id="num">
        <input type="submit" value="Calcular Raízes">
        </form>

    </main>

    <section>

        <h1>Resultado Final</h1>
        <?php 
        
        $raizq = sqrt($num);
        $x = NULL;
        $raizc =  $num**(1/3);


        echo "<p>Analisando o <strong>número $num</strong>, temos:</p>
                <ul>
                <li> A sua raiz quadrada é <strong>". number_format($raizq,3,",",".")."</strong></li>
                <li> A sua raiz cúbica é <strong>".number_format($raizc,3,",",".")."</strong></li>
                
                
                
                </ul>"

        
        
        ?>
    </section>
    
</body>
</html>
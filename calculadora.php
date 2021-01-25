<?php
//Válida se é requisição via post e faz um switch para a operação
    if($_POST){

        $num1 = $_POST['numero1'];
        $num2 = $_POST['numero2'];
        $op = $_POST['operacao'];

        switch($op){
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '/':
                $result = $num1 / $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '**':
                $result = pow($num1, $num2);
                break;
            default: 
                echo "Digite uma operação válida!";
                break;
        }



    }else{
        echo "Não há envio de dados!";
    }

?>

<!--Mostra o resultado :)-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Arthur"/>
    <meta name="keywords" content="Calculadora,cálcular,dividir,somar,subtrair,multiplicar"/>
    <meta name="description" content="Calculadora para facilitar sua vida :)"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/a7cf753026.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" 
    rel="stylesheet">   
    <link rel="stylesheet" href="scss/style.css">
    <title>Resultado</title>
</head>
<body>    
    <main>
        <div class="sucesso">
            <div class="container">
                <h2>Resultado:</h2>
                <div class="container-estilo">
                <?php
                    echo $result;
                ?>
                <br><br><br><br>
                <a href="index.html">Voltar</a>
                </div><!--container-estilo-->
            </div><!--container-->
        </div><!--sucesso-->
    </main>
    <script src="js/sucess.js"></script>
</body>
</html>
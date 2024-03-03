<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Projeto Programação web</title>
    <style type="text/css">

    h2{
    text-align: left;
    }
    p{
        text-align: left;
    }



    </style>
    <header>

       <h3>PROGRAMAÇÃO WEB</h3>
       <h4>PROJETO WEB MARCOS VINÍCIUS</h4>
    </header>
    <br>
    <section>
    <h2>Resultados da análise de crédito</h2>
    <br><br>
        <?php 

            $nomeCliente=$_POST["nome"];

            $idade=$_POST["idade"];

            $profissao=$_POST["salario"];
            
            $salarioCliente=$_POST["salario"];


           
            
            echo"<br><p>olá Sr(a) <b>$nomeCliente</b>, aqui está o resultado da sua solicitação<p><br><br>";

            if ($salarioCliente>=2000 && $idade >=18){
            echo "<h2>Parabéns, seu seguro foi APROVADO, um de nossos consultores(as) entrará em contato com você em breve.</h2><br>";
            echo "Agradecemos a confiança.";

            }
            else{
                echo "Pedimos desculpas, infelizmente <b>não foi possível aprovar o seguro neste momento.</b><br>";
            }
        
        ?>
      
        <br>
        
        <a href="index.php"> <br> <<< Voltar ao ínicio </a>

         
    </section>
    <br>

    <footer>
        <h3>MV sistemas</h3>
        <h4>PROGRAMAÇÃO WEB COM HTML, CSS, E PHP. &#9788;</h4>
        <br>
        <p ><b>Contatos:</b></p>
        <p >Email: vinizito25@gmail.com</p>
        <p >Whatsapp: (51)985512493</p>
        <br>
        <p >CNPJ: 6352647384934032</p>
        <p >Desenvolvido por MV sistemas em html, css e PHP, MARCOS VINÍCIUS</p>
    </footer>
    
</body>
</html>
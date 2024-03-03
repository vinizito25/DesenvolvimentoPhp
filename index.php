<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Projeto Programação web</title>
    <style type="text/css">

header{
            background-color: #0000CD;
            color: #FFFAFA;
            font-family: arial;
            padding-left: 1.5%;
            padding-top: 1.5%;
            padding-bottom: 1%;
            font-size: 1.6rem;
        }

        .formulario{
            background-color: #0000CD;
            color: #FFFFFF;
            text-shadow: 2.1px 2.1px #000;
            padding: 10px;
            font-size: 1.8rem;
            font-weight: bold;
    }

        input{
            font-size: 1.7rem;
            padding: 4px;
            border-radius: 10px;
            border: solid;
            font-weight: bold;
        }

        footer{
            background-color: #B0C4DE;
            text-align: center;
            margin: 2%;
            font-family: arial;
            padding: 2%;
            font-size: 1.6rem;
       }
       h1{
        text-align: left;
       }
       
       h2{
        text-align: left;
    }

    </style>
    <header>
       <h3>PROGRAMAÇÃO WEB PHP</h3>
       <h4>PROJETO WEB MARCOS VINÍCIUS</h4>
    </header>
    <br>
    <section>
        <h1>Análise de crédito - utilizando a função SE (IF/ELSE)</h1><br>
        <h2>Insira as informações para cálculo do FGTS</h2>
        <div class="formulario">
         <form action="analise.php" method="post" target="">
         
         <label for="nome">Nome</label><br>
         <input type="text" id="nome" name="nome" placeholder="Insira o seu nome">

         <br><br>

         <label for="idade">Idade</label><br>
         <input type="text" id="idade" name="idade" placeholder="Insira a sua idade">

         <br><br>

         <label for="profissao">Profissão</label><br>
         <input type="text" id="profissao" placeholder="Insira sua profissão">

         <br><br>

         <label for="salario">Salário</label><br>
         <input type="text" id="salario" name="salario" placeholder="Insira seu salário atual">

        <br><br>

         <input type="submit" name="ENVIAR"><br>

         </form>
         </div>
    </section>
    <br>

    <footer>
        <h3>MV sistemas</h3>
        <h4>PROGRAMAÇÃO WEB COM HTML, CSS, E PHP. &#9788;</h4>
        <br>
        <p ><b>Contatos:</b></p>
        <p >Email: vinizito25@gmail.com</p>
        <br>
        <p >Whatsapp: (51)985512493</p>
        <br>
        <p >Desenvolvido por MV sistemas em html, css e PHP, MARCOS VINÍCIUS.</p>
    </footer>
    
</body>
</html>
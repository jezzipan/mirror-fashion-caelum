<!DOCTYPE html>
<html>
 <head>
   <meta charset= "UTF-8">
   <meta name="viewport" content="width=device-width">
   <title> Mirror Fashion </title>

   <link rel="stylesheet" href="css/reset.css">  
   <link rel="stylesheet" href="css/estilo.css">
   <meta name="viewport" content="width=device-width">
   <link rel="stylesheet" href="css/mobile.css" media="(max-width: 320px">
 </head>
    <body>
    <?php include("cabecalho.php"); ?>
        
    <form>
      <fieldset>    
        <legend> Escolha a cor: </legend>

        <input type="radio" name="cor" value="verde" id="verde" checked>
        <label for="verde">
            <img src="img/produtos/foto2-verde.png" alt="verde">
        </label>


        <input type="radio" name="cor" value="rosa" id="rosa" checked>
        <label for="rosa">
            <img src="img/produtos/foto2-rosa.png" alt="rosa">
        </label>


        <input type="radio" name="cor" value="azul" id="azul" checked>
        <label for="azul">
            <img src="img/produtos/foto2-verde.png" alt="azul">
        </label>
      </fieldset>
      <input type="submit" class="comprar" value="Comprar">
    </form>

    <?php include("rodape.php"); ?>
        

    </body>
<html>


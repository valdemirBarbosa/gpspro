<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data" action="<?php echo  URL_BASE . "Upload/recebedor" ?>">

		<?php 
        $view = "upload/index"; 
    ?>
       <input type="file" name="arquivo"><br/><br/>
       <input type="text" name="descricao" required><br/><br/>
       <input type="submit" name="ENVIAR">
       <input type="hidden" name="view" value="<?php echo $view ?>">



    </form>

    <div class="upload">
    <?php
        if(isset($arq)){
            foreach($arq as $aq){
            }

        echo "<br/>Arquivo enviado com sucesso, dados abaixo: <br/>";
        print_r($aq);
        echo "<br/>";
       


//A última alteração foi a mudança do colchete do if da linha 20 para a linah 33
        }

        ?>
        </div>

</body>
</html>
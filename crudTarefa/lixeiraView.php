<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table border ='1'>
            <tr>
                <td>ID</td>
                <td>Tarefa</td>
                <td>Imagem</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <?php

                foreach($excluidos as $excluido){
                    $img = 'N/D';


                    if(!empty($excluido['imagem'])){
                        if(is_file($excluido['imagem'])){}
                            $img = "<img src='{$excluido['imagem']}' width='50' height='50'>";
                    }
                
                    echo "<tr>
                            <td>{$excluido['id']}</td>
                            <td>{$excluido['descricao']}</td>
                            <td>$img</td>
                            <td><button formaction='lixeira.php?a=r' name='id' value='{$excluido['id']}'>Restaurar</button></td>
                            <td><button formaction='lixeira.php?a=a' name='id' value='{$excluido['id']}'>KILL</button></td>
                          </tr>";
                    
                }

                
            ?>
        </table>
    </form>
    <br>
    <a href="index.php">Menu</a>
</body>
</html>
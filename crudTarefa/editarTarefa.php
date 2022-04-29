<?php

require_once 'conexao.php';

$id = preg_replace('/\D/', '', $_POST['id']);


if(isset($_POST['tarefa'])){//atualiza registro
    $stmt = $bd->prepare('UPDATE tarefas SET descricao = :descricao WHERE id = :id');
    $stmt->bindParam(':descricao', $_POST['tarefa']);
    $stmt->bindParam(':id', $id);

    if($stmt->execute()){
        echo "Tarefa Atualizada!";
    }else{
        echo "Erro ao Atualizar :(";
    }
}

$arquivoEnviado = '';

if($_FILES['figura']['error'] == 0 &&
    $_FILES['figura']['size'] > 0){

    $mimeType = mime_content_type($_FILES['figura']['tmp_name']);

    var_dump($_FILES);

    $campos = explode('/', $mimeType);

    $tipo = $campos[0];

    $ext = $campos[1];

    if($tipo == 'image'){
        $arquivoEnviado = 'imagem/' . $_FILES['figura']['name'] 

                . '_' . md5(rand(-9999999, 9999999) . microtime()) 

                    . '.' . $ext;
        move_uploaded_file($_FILES['figura']['tmp_name'], "$arquivoEnviado");
    }else{
        echo "Arquivo ignorado por não se tratar de um arquivo de imagem<br>";
    }
}
//fim atualiza registro

$stmt = $bd->query("SELECT descricao FROM tarefas WHERE id = $id");
$stmt->execute();
$tarefa = $stmt->fetch(PDO::FETCH_ASSOC);

$img = 'N/D';

if(!empty($tarefa['imagem'])){
    if(is_file($tarefa['imagem'])){
        $img = "<img src='{$tarefa['imagem']}' width='50' height='50'>";
    }
}

echo "<form method='post' enctype='multipart/form-data'>
        <label for='tarefa'>Tarefa</label>
        <input type='text' id='tarefa' name='tarefa'    value='{$tarefa['descricao']}'>
        <br><br>
        $img
        <br><br>
        <iput type='file' name='figura'>
        <input type='hidden' name='id' value='$id'>
        <input type='submit' value='atualizar'>
     </form>
     <a href='listarTarefa.php'>Voltar</a>";

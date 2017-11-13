<?php
    error_reporting(1);
    
    if ($_POST != NULL) {
        
        $db = new mysqli("localhost", "root", "", "livremente");
        
        if($db->connect_error == true){
            echo "Erro de conexão:" . $db->connect_error . "<br />";
            exit;
        }
    
        $titulo =       $_POST["titulo"];
        $autor =        $_POST["autor"];
        $ano =          $_POST["ano"];
        $qtdPaginas =   $_POST["qtdPaginas"];
        $foto =         $_POST["foto"];

        $sql = "INSERT INTO livro(titulo, autor, ano, qtdPaginas, foto) VALUES('$titulo','$autor', '$ano','$qtdPaginas','$foto')";

        $retorno = $db->query($sql);

        if (!retorno) {
            echo "<script>alert('Erro ao adicionar.')</script>";
            echo $db->error;
        }
    }
?>
<?php
    function exibeMensagemSession(){
        session_start();
        if (isset($_SESSION['mensagem'])) {
            echo "<p style='text-align: center;'>" . $_SESSION['mensagem'] . "</p>";
            unset($_SESSION['mensagem']);
        }
    }
?>
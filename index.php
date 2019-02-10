<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'Linear/Base/ListaSimplesmenteEncadeada.php';
        require_once 'Caneta.php';
        
        $oListaSimplesmenteEncadeada = new ListaSimplesmenteEncadeada();
        
        echo "<br>esta vazia: {$oListaSimplesmenteEncadeada->isEmpty()}";
        echo "<br>Tamanho   : {$oListaSimplesmenteEncadeada->size()}";
        
        for ($i = 0; $i < 4; $i++) {
            $oListaSimplesmenteEncadeada->addFirst(new Caneta('Modelo'.$i));
        }
        
        echo '<br>tostring:'.$oListaSimplesmenteEncadeada->toString();
        echo "<br>Tamanho   : {$oListaSimplesmenteEncadeada->size()}";
        $oListaSimplesmenteEncadeada->removeFirst();
        echo '<br>tostring:'.$oListaSimplesmenteEncadeada->toString();
        echo "<br>Tamanho   : {$oListaSimplesmenteEncadeada->size()}";
        
        ?>
    </body>
</html>

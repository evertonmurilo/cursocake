<?php

echo $this->Form->create("Categoria",array("action" => "cadastrar"));
echo $this->Form->input('nome');
echo $this->Form->end('Cadastrar');
?>
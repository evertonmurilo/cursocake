<?php

echo $this->Form->create("Categoria",array("action" => "editar"));
echo $this->Form->hidden('id');
echo $this->Form->input('nome');
echo $this->Form->end('Editar');
?>
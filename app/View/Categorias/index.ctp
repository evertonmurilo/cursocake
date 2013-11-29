<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <? foreach($Categorias as $categorias) { ?>
        <tr>
            <td><?=$categorias['Categoria']['id'];?></td>
            <td><?=$categorias['Categoria']['nome'];?></td>
            <td><?=$this->Html->link('Editar',array('action' => 'editar',$categorias['Categoria']['id']));?>
            <?=$this->Html->link('Excluir',array('action' => 'delete',$categorias['Categoria']['id']));?></td>
        </tr>
        <? } ?>
    </tbody>
</table>
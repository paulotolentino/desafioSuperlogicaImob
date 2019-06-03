<div class="table-responsive">
<?php
if($proprietarios == NULL){
    echo "erro";
}else{
?>
    <table class="table">
		<caption>Lista de proprietários</caption>
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Nome</th>
				<th scope="col">CPF / CNPJ</th>
				<th scope="col">Cidade</th>
				<th scope="col">Ação</th>
			</tr>
		</thead>
		<tbody>
        <?php
        $cont = 1;
        foreach($proprietarios->data as $proprietario){
        ?>
            <tr>
				<th scope="row"><?php echo $cont++;//$proprietario->id_pessoa_pes; ?></th>
				<td><?php echo $proprietario->st_nome_pes; ?></td>
				<td><?php echo $proprietario->st_cnpj_pes; ?></td>
				<td><?php echo $proprietario->st_cidade_pes; ?></td>
				<td>
                    <a href="<?php echo base_url()?>detalhes/proprietario/<?php echo $proprietario->id_pessoa_pes?>" class="btn btn-info">Ver detalhes</a>
                    <button type="button" class="btn btn-danger" data-toggle="modal"
                    data-target="#modalExcluir"
                    data-nome="<?php echo $proprietario->st_nome_pes; ?>"
                    data-id="<?php echo $proprietario->id_pessoa_pes; ?>">
                        Excluir
                    </button>
                </td>
			</tr>
        <?php
        }
        ?>
        <!-- <?php foreach($proprietarios as $proprietario){
            var_dump($proprietario);
        }?> -->
		</tbody>
	</table>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
        <?php 
        if($num_pagina != 1){
        ?>
            <li class="page-item">
                <a class="page-link" href="<?php echo base_url()?>consultar/proprietarios/<?php echo $num_pagina-1; ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
        <?php
        }
        ?>
            <li class="page-item"><a class="page-link" href=""><?php echo $num_pagina; ?></a></li>
        <?php 
        if($cont%51 == 0){
        ?>
            <li class="page-item">
                <a class="page-link" href="<?php echo base_url()?>consultar/proprietarios/<?php echo $num_pagina+1; ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        <?php
        }
        ?>
        </ul>
    </nav>
<?php
}
?>
</div>

<div class="modal fade" id="modalExcluir" tabindex="-1" role="dialog" aria-labelledby="modalExcluirLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalExcluirLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h2></h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Não</button>
                <button type="button" class="btn btn-danger">Sim</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('#modalExcluir').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var id = button.data('id');
        var nome = button.data('nome');
        var modal = $(this);
        modal.find('.modal-title').text('Excluir o proprietário ' + nome);
        modal.find('.modal-body').text('Você tem certeza de que deseja excluir o proprietário ' + nome);
    });
</script>
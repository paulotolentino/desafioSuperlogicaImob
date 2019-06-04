<div class="table-responsive">
<?php
if($corretores == NULL){
    echo "erro";
}else{
?>
    <table class="table">
		<caption>Lista de corretores</caption>
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
        foreach($corretores->data as $corretor){
        ?>
            <tr>
				<th scope="row"><?php echo ++$cont;//$corretor->id_pessoa_pes; ?></th>
				<td><?php echo $corretor->st_nome_pes; ?></td>
				<td><?php echo $corretor->st_cnpj_pes; ?></td>
				<td><?php echo $corretor->st_cidade_pes; ?></td>
				<td>
                    <a href="<?php echo base_url()?>detalhes/corretor/<?php echo $corretor->id_pessoa_pes?>" class="btn btn-info">Ver detalhes</a>
                    <button type="button" class="btn btn-danger" data-toggle="modal"
                    data-target="#modalExcluirCorretor"
                    data-nome="<?php echo $corretor->st_nome_pes; ?>"
                    data-id="<?php echo $corretor->id_pessoa_pes; ?>">
                        Excluir
                    </button>
                </td>
			</tr>
        <?php
        }
        ?>
		</tbody>
	</table>
    <input id="id" type="hidden" value=""/>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
        <?php 
        if($num_pagina != 1){
        ?>
            <li class="page-item">
                <a class="page-link" href="<?php echo base_url()?>consultar/corretores/<?php echo $num_pagina-1; ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
        <?php
        }
        ?>
            <li class="page-item"><a class="page-link" href=""><?php echo $num_pagina; ?></a></li>
        <?php 
        if($cont%50 == 0){
        ?>
            <li class="page-item">
                <a class="page-link" href="<?php echo base_url()?>consultar/corretores/<?php echo $num_pagina+1; ?>" aria-label="Next">
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

<div class="modal fade" id="modalExcluirCorretor" tabindex="-1" role="dialog" aria-labelledby="modalExcluirCorretor" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalExcluirCorretor"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="corpo">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Não</button>
                <button type="button" class="btn btn-danger" onclick="excluir(4)">Sim</button>
            </div>
        </div>
    </div>
</div>
<div class="table-responsive">
<?php
if($imoveis == NULL){
    echo "erro";
}else{
?>
    <table class="table">
		<caption>Lista de imoveis</caption>
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Tipo</th>
				<th scope="col">CEP</th>
				<th scope="col">Aluguel</th>
				<th scope="col">Proprietário</th>
				<th scope="col">Ação</th>
			</tr>
		</thead>
		<tbody>
        <?php
        $cont = 1;
        foreach($imoveis->data as $imovel){
        ?>
            <tr>
				<th scope="row"><?php echo $cont++;//$imovel->id_pessoa_pes; ?></th>
				<td><?php echo $imovel->st_tipo_imo; ?></td>
				<td><?php echo $imovel->st_cep_imo; ?></td>
				<td>R$ <?php echo number_format($imovel->vl_aluguel_imo, 2, ',', '.'); ?></td>
				<td>
                    <a href="<?php echo base_url()?>proprietarios/" data-toggle="modal" data-target="#modal<?php echo $imovel->id_imovel_imo; ?>">Ver proprietários</a>
                    <!-- Modal -->
                    <div class="modal fade" id="modal<?php echo $imovel->id_imovel_imo; ?>" tabindex="-1" role="dialog" aria-labelledby="modal<?php echo $imovel->id_imovel_imo; ?>label" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modal<?php echo $imovel->id_imovel_imo; ?>label">Proprietários</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <?php                                
                                foreach($imovel->proprietarios_beneficiarios as $proprietario){
                                    echo $proprietario->st_fantasia_pes;
                                }
                                ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <!-- <?php echo $imovel->proprietarios_beneficiarios[0]->st_fantasia_pes; ?> -->
				<td>
                    
                </td>
			</tr>
        <?php
        }
        ?>
        <!-- <?php foreach($imoveis as $imovel){
            var_dump($imovel);
        }?> -->
		</tbody>
	</table>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
        <?php 
        if($num_pagina != 1){
        ?>
            <li class="page-item">
                <a class="page-link" href="<?php echo base_url()?>consultar/imoveis/<?php echo $num_pagina-1; ?>" aria-label="Previous">
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
                <a class="page-link" href="<?php echo base_url()?>consultar/imoveis/<?php echo $num_pagina+1; ?>" aria-label="Next">
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

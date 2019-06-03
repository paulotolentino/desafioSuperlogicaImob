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
        $cont = 1;
        foreach($corretores->data as $corretor){
        ?>
            <tr>
				<th scope="row"><?php echo $cont++;//$corretor->id_pessoa_pes; ?></th>
				<td><?php echo $corretor->st_nome_pes; ?></td>
				<td><?php echo $corretor->st_cnpj_pes; ?></td>
				<td><?php echo $corretor->st_cidade_pes; ?></td>
				<td>
                    <a class="btn btn-warning btn-sm" href="<?php echo base_url(); ?>corretor/<?php echo $corretor->id_pessoa_pes; ?>">
                        Alterar
                    </a>
                    <a class="btn btn-danger btn-sm" href="<?php echo base_url(); ?>excluir/<?php echo $corretor->id_pessoa_pes; ?>">
                        Excluir
                    </a>
                </td>
			</tr>
        <?php
        }
        ?>
        <!-- <?php foreach($corretores as $corretor){
            var_dump($corretor);
        }?> -->
		</tbody>
	</table>
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
        if($cont%51 == 0){
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

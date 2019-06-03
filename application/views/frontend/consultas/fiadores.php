<div class="table-responsive">
<?php
if($fiadores == NULL){
    echo "erro";
}else{
?>
    <table class="table">
		<caption>Lista de fiadores</caption>
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
        foreach($fiadores->data as $fiador){
        ?>
            <tr>
				<th scope="row"><?php echo $cont++;//$fiador->id_pessoa_pes; ?></th>
				<td><?php echo $fiador->st_nome_pes; ?></td>
				<td><?php echo $fiador->st_cnpj_pes; ?></td>
				<td><?php echo $fiador->st_cidade_pes; ?></td>
				<td>
                    
                </td>
			</tr>
        <?php
        }
        ?>
        <!-- <?php foreach($fiadores as $fiador){
            var_dump($fiador);
        }?> -->
		</tbody>
	</table>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
        <?php 
        if($num_pagina != 1){
        ?>
            <li class="page-item">
                <a class="page-link" href="<?php echo base_url()?>consultar/fiadores/<?php echo $num_pagina-1; ?>" aria-label="Previous">
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
                <a class="page-link" href="<?php echo base_url()?>consultar/fiadores/<?php echo $num_pagina+1; ?>" aria-label="Next">
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

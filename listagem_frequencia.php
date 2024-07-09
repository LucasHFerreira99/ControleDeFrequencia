<div class="container" id="listar_frequencia" >
<table class="table table-striped">
	
	<thead>
		<tr class =>
			
			<th>Data</th>
			<th>Situação</th>	
			<th>Excluir</th>
			<th><a class='btn btn-success'>Salvar</a></th>

		</tr>
	</thead>
	<!--<tbody>
		<?php
			while ($linha = $listagem->fetch_assoc()) {
		?>
				<tr>
					
					<td class="pesquisar"><?=$linha["professor"];?></td>
					<td class="pesquisar"><?=$linha["cpf"];?></td>
					
					<td class="pesquisar"><?=$linha["email"];?></td>
				
					<td>
						<a href="index.php?id=<?=$linha["id"];?>" class="btn btn-primary">
							Editar
						</a>
					</td>
					<td>
						<a href="excluir.php?id=<?=$linha["id"];?>" onclick="return confirm('Tem certeza?');" class="btn btn-danger">
							Excluir
						</a>
					</td>
					
				</tr>
		<?php
			}
		?>
	</tbody>-->
</table>
</div>
<!--<script>
	function buscar(texto) {
		$("table tbody tr").each(function() {
			var mostrar = false;
			$(this).find("td.pesquisar").each(function() {
				if ($(this).html().toLowerCase().includes(texto.toLowerCase())) mostrar = true;
			});
			if (mostrar) $(this).show();			
			else $(this).hide();
		});
	}
</script>-->
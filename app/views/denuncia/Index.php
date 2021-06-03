<div="base-home">
	<h1 class="titulo"><span class="cor">Lista de</span> denuncia</h1>
<div class="base-lista">
	<script type="text/javascript" src="<?php echo URL_BASE.'assets\js\script.js' ?>"> </script> 
	<span class="qtde">Há <b><?php echo count($denuncia) ?></b> denuncia(s) cadastrada(s)</span>
	<div class="btn-inc"><a href="<?php echo URL_BASE . "denuncia/novo" ?>" >INCLUIR </a></div>

	<div class="tabela">	
		<table width="100%" border="1" cellspacing="0" cellpadding="0">
		  <thead>
			   <tr>
				<th width="5%" align="left">id</th>
				<th width="15%" align="left">fato da denúncia</th>
				<th width="15%" align="left">nome denunciante</th>
				<th width="10%" align="left">tipo documento</th>
				<th width="10%" align="center">número</th>
				<th width="10%" align="left">data de entrada</th>
				<th width="15%" align="left">observação</th>
				<th width="20%" colspan="3" align="center">Ação</th>
			  </tr>
		  </thead>
		  <tbody>
		  	<?php 
			  URL_BASE."denuncia/denunciado"; 
			  foreach($denuncia as $d){   ?>
				<tr class="cor1">
				<td align="center"><?php echo $d->id_denuncia  ?></td>
				<td><?php echo $d->denuncia_fato  ?></td>
				<td> <?php echo $d->nome_denunciante ?> </td>
				<td align="center"><?php echo $d->tipo_documento  ?></td>
				<td align="center"><?php echo $d->numero_documento  ?></td>
				<td><?php echo date('d/m/Y', strtotime($d->data_entrada))  ?></td>
				<td><?php echo $d->observacao  ?></td>

				<td align="center">
					<a href="<?php echo URL_BASE ."denuncia/Edit/".$d->id_denuncia ?>" class="btn">Editar</a>
				</td>

				<td align="center">
					<a href="<?php echo URL_BASE ."denuncia/vincularDenunciadoDenuncia/".$d->id_denuncia ?>" class="btn-inc">vincular Denunciado</a>
				</td>

				<td align="center">
					<a href="<?php echo URL_BASE ."denuncia/denunciado/".$d->id_denuncia ?>" class="btn-inc">Ver Denunciado</a>
				</td>

				<td align="center">
					<a href="<?php echo URL_BASE ."denuncia/Excluir/".$d->id_denuncia ?>" class="btn excluir">excluir</a>
				</td>
			 </tr>
			 </tbody>

	<!-- TABELA FILHA	          !-->
		<table width="100%" border="3" cellspacing="0" cellpadding="0">

		<p>Tabela filha</p>
			 <tr>
				<th width="5%" align="left">+</th>
				<th width="15%" align="left">id_denunciado</th>
				<th width="15%" align="left">nome denunciado</th>
				<th width="10%" align="left">matricula</th>
				<th width="15%" align="left">observação</th>
				<th width="20%" colspan="2" align="center">Ação</th>
			  </tr>

		  	<?php foreach($denunciado as $den){   ?>
				<tr class="cor1">
				<td align="center"><?php //  ?></td>
				<td align="center"><?php echo $den->id_denunciado  ?></td>
				<td align="center"><?php echo $den->id_denuncia  ?></td>
				<td align="center"><?php echo $den->id_servidor  ?></td>
				<td><?php echo $den->observacao  ?></td>

				<td align="center">
					<a href="<?php echo URL_BASE ."denuncia/Edit/".$d->id_denuncia ?>" class="btn">Editar</a>
				</td>

				<td align="center">
					<a href="<?php echo URL_BASE ."denuncia/vincularDenunciadoDenuncia/".$d->id_denuncia ?>" class="btn-inc">vincular Denunciado</a>
				</td>

				<td align="center">
					<a href="<?php echo URL_BASE ."denuncia/denunciado/".$d->id_denuncia ?>" class="btn-inc">Ver Denunciado</a>
				</td>

				<td align="center">
					<a href="<?php echo URL_BASE ."denuncia/Excluir/".$d->id_denuncia ?>" class="btn excluir">excluir</a>
				</td>
			 </tr>	
			 <?php } ?>		
			 			 <?php } ?>									  
							  

		  </tbody>
		</table>
</div>					
</div>
</div>

</body>
</html>
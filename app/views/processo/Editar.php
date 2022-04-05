<div class="base-home">
	<h1 class="titulo-pagina">Alterar dados do Processo </h1>
</div>

<form enctype="multipart/form-data" action="<?php echo URL_BASE ."Processo/Salvar" ?>" method="POST">
<?php foreach($processo as $pd){ ?>
	<fieldset>
		<legend><h4>Códigos</h4></legend>	
			<label>Id do Processo</label>
				<input id="txt_id" readonly name="txt_id_processo" enable="false" value="<?php echo $pd->id_processo ?>" >
			<label>Id da denuncia</label>
			<input readonly name="txt_id_denuncia" enable="false" value="<?php echo $pd->id_denuncia ?>" >

			<label>fase</label>
				<select name="txt_id_fase">
					<option value="<?php echo $pd->id_fase ?>"><?php echo $pd->fase ?></option>
<?php } ?>					

<?php foreach($fase as $f){ ?>
						<option readonly value="<?php echo $f->id_fase ?>"><?php echo $f->fase ?> </option>
<?php } ?>
				</select>

				<label>Número do Processo</label>
			<input class="txt_numero_processo" name="txt_numero_processo" type="number" placeholder="Insira o número do processo" value="<?php echo $pd->numero_processo ?>">

	</fieldset>		

	<table><tr><td colspan="5"><td></td> <td></td> <td></td> <td></td>
    <fieldset>
    <legend>informações do processo</legend>
			
		<label>Data de Instauração</label>
            <input name="txt_data_instauracao" type="date" value="<?php echo $pd->data_instauracao ?>">
   
<!--	A data de encerramento ficará só pra mudança de fase e para finalização do processo
        <label>Data de Encerramento</label>
		<input name="txt_data_encerramento" type="date" readonly value="<?php echo $pd->data_encerramento ?>">
		<input type="hidden" name="id_processo" value="<?php echo $pd->id_processo ?>">	
 -->
		<br/>
		<label>Observação</label>
			<input class="" size="125px" name="txt_observacao" type="text" placeholder="Insira o número do processo" value="<?php echo $pd->observacao ?>">

	</fieldset>
	
	<fieldset>
	<legend>Anexar arquivos</legend>
		<input type="file" name="arquivo"><br/><br/>
		<input type="hidden" name="view" value="<?php echo $view ?>">
		<label for="descricaoArquivo"></label>
       	<input type="text" name="descricaoArquivo">
		<label for="data_inclusao"></label>
       	<input type="date" name="data_inclusao">

	</fieldset>
	
		
	</td></tr>
	<fieldset>
	<br/>
				<!--Botões !-->
	<div class="btn">
		<script> //Link para voltar à página anterior
			document.write('<a href="' + document.referrer + '">Voltar</a>');
		</script>
	</div>	

		<input type="submit" value="Salvar" class="btn">
	</fieldset>
	</table>
</form>

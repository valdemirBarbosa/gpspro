<div class="base-home">
	<h1 class="titulo-pagina"><span class="cor">Incluir </span>Processo</h1>
</div>

<form action="<?php echo URL_BASE ."Processo/Salvar" ?>" method="POST">

<fieldset>
	<legend><h4>id - identificadores </h4></legend>
	<br/>
<br/>
<br/>


	<label>Id da denuncia</label>
			<?php
				if(isset($_GET['id'])){?>
					<label><?php echo $_GET['id'] ?> </label>
				<?php } ?> 
		
		<label class="faseLbl">Fase</label>
		<?php
				if(isset($_GET['f'])){?>
					<label>
						<?php
							$fase = $_GET['f'];
							if($fase == 1)
								echo "Processo Preliminar";
								if($fase == 2)
									echo "Sindicância";
									if($fase == 3)
										echo "Processo Prelimiar";
				} ?> 
					</label>

					<br/>
					<br/>
					<br/>
	<div class="num_processo">
		<label>Número do Processo</label>
		<input name="txt_numero_processo" type="number" placeholder="Insira o número do processo">
	
		<label>Data de Instauração</label>
		<input name="txt_data_instauracao" type="date" >
	</div>		


	<div class="obs">
		<label id="obs">observação</label> 
	</div>
	
	<textarea rows="4" cols="95" name="txt_observacao" class="txtArea"> 
	</textarea>		

	<div class="dtEncerramento">
		<label>Data de Enceramento</label>
		<input name="txt_data_encerramento" type="date" >
	</div>

	<label class="lblAnexo">Anexo</label>
	<input class="btnAnexo" name="txt_anexo" type="file" >

		<input type="submit" value="Cadastrar" class="btn">
		<input type="reset" name="Reset" id="button" value="Limpar" class="btn_limpar">
	</form>
</fieldset>
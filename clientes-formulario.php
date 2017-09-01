<?php 
require_once("php/cabecalho.php"); 
require_once("usuario-logica.php");

verificaUsuario();
?>

<div class="container">
	<h2>Cadastrar Cliente</h2>

	<form  action="clientes-adicionar.php"  method="post">
		<div class="row">
			<div class="form-group col-md-8">
				<label for="nomedocliente">Nome</label>
				<input type="text" name="nomeCliente" class="form-control" id="nomedocliente" placeholder="Insira o nome" required>
			</div>

			<div class="form-group col-md-4">
				<label for="cpfcliente">CPF</label>
				<input type="text" name="cpfCliente" class="form-control" id="cpfcliente" placeholder="Insira o valor" required>
			</div>
		</div>
		
		<div class="row">
			<div class="form-group col-md-6">
				<label for="telefonecliente">Telefone</label>
				<input type="text" name="telefoneCliente" class="form-control" id="telefonecliente" placeholder="Insira o telefone" required>
			</div>

			<div class="form-group col-md-6">
				<label for="celularcliente">Celular</label>
				<input type="text" name="celularCliente" class="form-control" id="celularcliente" placeholder="Insira o celular">
			</div>
		</div>

		<div class="row">
			<div class="form-group col-md-6">
				<label for="enderecodocliente">Endereço</label>
				<input type="text" name="enderecoCliente" class="form-control" id="enderecodocliente" placeholder="Insira o endereço" required>
			</div>

			<div class="form-group col-md-3">
				<label for="numerodocliente">Nº</label>
				<input type="text" name="numeroCliente" class="form-control" id="numerodocliente" placeholder="Insira o número" required>
			</div>

			<div class="form-group col-md-3">
				<label for="complementocliente">Compl.</label>
				<input type="text" name="complementoCliente" class="form-control" id="complementocliente" placeholder="Insira o complemento">
			</div>
		</div>
		
		<div class="row">
			<div class="form-group col-md-3">
				<label for="cepcliente">CEP</label>
				<input type="text" name="cepCliente" class="form-control" id="cepcliente" placeholder="Insira o CEP" required>
			</div>

			<div class="form-group col-md-5">
				<label for="cidadecliente">Cidade</label>
				<input type="text" name="cidadeCliente" class="form-control" id="cidadecliente" placeholder="Insira a cidade" required>
			</div>

			<div class="form-group col-md-4">
				<label for="estadocliente">Example select</label>
				<select class="form-control" id="estadocliente" name="estadoCliente" required>
					<option disabled selected>Selecione o Estado</option>
					<option value="AC">Acre</option>
					<option value="AL">Alagoas</option>
					<option value="AP">Amapá</option>
					<option value="AM">Amazonas</option>
					<option value="BA">Bahia</option>
					<option value="CE">Ceará</option>
					<option value="DF">Distrito Federal</option>
					<option value="ES">Espírito Santo</option>
					<option value="GO">Goiás</option>
					<option value="MA">Maranhão</option>
					<option value="MT">Mato Grosso</option>
					<option value="MS">Mato Grosso do Sul</option>
					<option value="MG">Minas Gerais</option>
					<option value="PA">Pará</option>
					<option value="PB">Paraíba</option>
					<option value="PR">Paraná</option>
					<option value="PE">Pernambuco</option>
					<option value="PI">Piauí</option>
					<option value="RJ">Rio de Janeiro</option>
					<option value="RN">Rio Grande do Norte</option>
					<option value="RS">Rio Grande do Sul</option>
					<option value="RO">Rondônia</option>
					<option value="RR">Roraima</option>
					<option value="SC">Santa Catarina</option>
					<option value="SP">São Paulo</option>
					<option value="SE">Sergipe</option>
					<option value="TO">Tocantins</option>
				</select>
			</div>
		</div>
		<div class="row">
			<button type="submit" class="btn btn-primary col-md-4">Cadastrar</button>
			<a href="index.php" class="btn btn-danger col-md-4 ml-md-auto">Cancelar</a>
		</div>
	</form>
</div>

<?php include("php/rodape.php");?> 
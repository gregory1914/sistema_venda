<?php 
require_once("php/cabecalho.php"); 
require_once("usuario-logica.php");

verificaUsuario();

?>
<div class="container">
	<h2>Cadastrar Fornecedor</h2>
	<form action="fornecedores-adicionar.php"  method="post">
		<div class="row">
			<div class="form-group col-md-6">
				<label for="nomedofornecedor">Nome</label>
				<input type="text" name="nomeFornecedor" class="form-control" id="nomedofornecedor" placeholder="Insira o nome" required>
			</div>

			<div class="form-group col-md-6">
				<label for="cnpjdofornecedor">CNPJ</label>
				<input type="text" name="cnpjFornecedor" class="form-control" id="cnpjdofornecedor" placeholder="Insira o CNPJ" required>
			</div>
		</div>
		
		<div class="row">
			<div class="form-group col-md-6">
				<label for="telefonedofornecedor">Telefone</label>
				<input type="text" name="telefoneFornecedor" class="form-control" id="telefonedofornecedor" placeholder="Insira o telefone" required>
			</div>

			<div class="form-group col-md-6">
				<label for="celulardofornecedor">Celular</label>
				<input type="text" name="celularFornecedor" class="form-control" id="celulardofornecedor" placeholder="Insira o celular">
			</div>
		</div>

		<div class="row">
			<div class="form-group col-md-6">
				<label for="enderecodofornecedor">Endereço</label>
				<input type="text" name="enderecoFornecedor" class="form-control" id="enderecodofornecedor" placeholder="Insira o endereço" required>
			</div>

			<div class="form-group col-md-3">
				<label for="numerodofornecedor">Nº</label>
				<input type="number" name="numeroFornecedor" class="form-control" id="numerodofornecedor" placeholder="Insira o número" required>
			</div>

			<div class="form-group col-md-3">
				<label for="complementodofornecedor">Compl.</label>
				<input type="text" name="complementoFornecedor" class="form-control" id="complementofornecedor" placeholder="Insira o complemento">
			</div>
		</div>

		<div class="row">
			<div class="form-group col-md-3">
				<label for="cepfornecedor">CEP</label>
				<input type="text" name="cepFornecedor" class="form-control" id="cepfornecedor" placeholder="Insira o CEP" required>
			</div>

			<div class="form-group col-md-5">
				<label for="cidadefornecedor">Cidade</label>
				<input type="text" name="cidadeFornecedor" class="form-control" id="cidadefornecedor" placeholder="Insira a cidade" required>
			</div>

			<div class="form-group col-md-4">
				<label for="estadofornecedor">Example select</label>
				<select class="form-control" id="estadofornecedor" name="estadoFornecedor" required>
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
<?php include("php/rodape.php"); ?>

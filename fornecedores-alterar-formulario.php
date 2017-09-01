<?php 
require_once("php/cabecalho.php"); 
require_once("banco-fornecedor.php");
require_once("usuario-logica.php");

verificaUsuario();

$id = $_POST['id-editar'];
$fornecedor = buscaFornecedor($conexao, $id);

?>
<div class="container">
	<h2>Cadastrar Fornecedor</h2>
	<form action="fornecedores-alterar.php"  method="post">
		<div class="row">
			<input type="hidden" name="idFornecedor" value="<?= $fornecedor->getId() ?>">

			<div class="form-group col-md-8">
				<label for="nomedofornecedor">Nome</label>
				<input type="text" name="nomeFornecedor" class="form-control" id="nomedofornecedor" value="<?= $fornecedor->getNome() ?>" required>
			</div>

			<div class="form-group col-md-4">
				<label for="cnpjdofornecedor">CNPJ</label>
				<input type="text" name="cnpjFornecedor" class="form-control" id="cnpjdofornecedor" value="<?= $fornecedor->getCnpj() ?>" required>
			</div>
		</div>
		
		<div class="row">
			<div class="form-group col-md-6">
				<label for="telefonedofornecedor">Telefone</label>
				<input type="text" name="telefoneFornecedor" class="form-control" id="telefonedofornecedor" value="<?= $fornecedor->getTelefone() ?>" required>
			</div>

			<div class="form-group col-md-6">
				<label for="celulardofornecedor">Celular</label>
				<input type="text" name="celularFornecedor" class="form-control" id="celulardofornecedor" value="<?= $fornecedor->getCelular() ?>">
			</div>
		</div>

		<div class="row">
			<div class="form-group col-md-6">
				<label for="enderecodofornecedor">Endereço</label>
				<input type="text" name="enderecoFornecedor" class="form-control" id="enderecodofornecedor" value="<?= $fornecedor->getEndereco() ?>" required>
			</div>

			<div class="form-group col-md-3">
				<label for="numerodofornecedor">Nº</label>
				<input type="text" name="numeroFornecedor" class="form-control" id="numerodofornecedor" value="<?= $fornecedor->getNumero() ?>" required>
			</div>

			<div class="form-group col-md-3">
				<label for="complementodofornecedor">Compl.</label>
				<input type="text" name="complementoFornecedor" class="form-control" id="complementofornecedor" value="<?= $fornecedor->getComplemento() ?>">
			</div>
		</div>

		<div class="row">
			<div class="form-group col-md-3">
				<label for="cepfornecedor">CEP</label>
				<input type="text" name="cepFornecedor" class="form-control" id="cepfornecedor" value="<?= $fornecedor->getCep() ?>" required>
			</div>

			<div class="form-group col-md-5">
				<label for="cidadefornecedor">Cidade</label>
				<input type="text" name="cidadeFornecedor" class="form-control" id="cidadefornecedor" value="<?= $fornecedor->getCidade() ?>" required>
			</div>

			<div class="form-group col-md-4">
				<label for="estadofornecedor">Example select</label>
				<select class="form-control" id="estadofornecedor" name="estadoFornecedor" option="<?= $fornecedor->getEstado() ?>" selected required>
					<option value="AC" <?php if ($fornecedor->getEstado() == "AC"){ echo "selected";}  ?>>Acre</option>
					<option value="AL" <?php if ($fornecedor->getEstado() == "AL"){ echo "selected";}  ?>>Alagoas</option>
					<option value="AP" <?php if ($fornecedor->getEstado() == "AP"){ echo "selected";}  ?>>Amapá</option>
					<option value="AM" <?php if ($fornecedor->getEstado() == "AM"){ echo "selected";}  ?>>Amazonas</option>
					<option value="BA" <?php if ($fornecedor->getEstado() == "BA"){ echo "selected";}  ?>>Bahia</option>
					<option value="CE" <?php if ($fornecedor->getEstado() == "CE"){ echo "selected";}  ?>>Ceará</option>
					<option value="DF" <?php if ($fornecedor->getEstado() == "DF"){ echo "selected";}  ?>>Distrito Federal</option>
					<option value="ES" <?php if ($fornecedor->getEstado() == "ES"){ echo "selected";}  ?>>Espírito Santo</option>
					<option value="GO" <?php if ($fornecedor->getEstado() == "GO"){ echo "selected";}  ?>>Goiás</option>
					<option value="MA" <?php if ($fornecedor->getEstado() == "MA"){ echo "selected";}  ?>>Maranhão</option>
					<option value="MT" <?php if ($fornecedor->getEstado() == "MT"){ echo "selected";}  ?>>Mato Grosso</option>
					<option value="MS" <?php if ($fornecedor->getEstado() == "MS"){ echo "selected";}  ?>>Mato Grosso do Sul</option>
					<option value="MG" <?php if ($fornecedor->getEstado() == "MG"){ echo "selected";}  ?>>Minas Gerais</option>
					<option value="PA" <?php if ($fornecedor->getEstado() == "PA"){ echo "selected";}  ?>>Pará</option>
					<option value="PB" <?php if ($fornecedor->getEstado() == "PB"){ echo "selected";}  ?>>Paraíba</option>
					<option value="PR" <?php if ($fornecedor->getEstado() == "PR"){ echo "selected";}  ?>>Paraná</option>
					<option value="PE" <?php if ($fornecedor->getEstado() == "PE"){ echo "selected";}  ?>>Pernambuco</option>
					<option value="PI" <?php if ($fornecedor->getEstado() == "PI"){ echo "selected";}  ?>>Piauí</option>
					<option value="RJ" <?php if ($fornecedor->getEstado() == "RJ"){ echo "selected";}  ?>>Rio de Janeiro</option>
					<option value="RN" <?php if ($fornecedor->getEstado() == "RN"){ echo "selected";}  ?>>Rio Grande do Norte</option>
					<option value="RS" <?php if ($fornecedor->getEstado() == "RS"){ echo "selected";}  ?>>Rio Grande do Sul</option>
					<option value="RO" <?php if ($fornecedor->getEstado() == "RO"){ echo "selected";}  ?>>Rondônia</option>
					<option value="RR" <?php if ($fornecedor->getEstado() == "RR"){ echo "selected";}  ?>>Roraima</option>
					<option value="SC" <?php if ($fornecedor->getEstado() == "SC"){ echo "selected";}  ?>>Santa Catarina</option>
					<option value="SP" <?php if ($fornecedor->getEstado() == "SP"){ echo "selected";}  ?>>São Paulo</option>
					<option value="SE" <?php if ($fornecedor->getEstado() == "SE"){ echo "selected";}  ?>>Sergipe</option>
					<option value="TO" <?php if ($fornecedor->getEstado() == "TO"){ echo "selected";}  ?>>Tocantins</option>
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

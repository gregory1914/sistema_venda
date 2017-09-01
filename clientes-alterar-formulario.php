<?php 
require_once("php/cabecalho.php"); 
require_once("banco-cliente.php");
require_once("usuario-logica.php");

verificaUsuario();

$id = $_POST['id-editar'];
$cliente = buscaCliente($conexao, $id);

?>
<div class="container">
	<h2>Alterar Clientes</h2>
	<form action="clientes-alterar.php"  method="post">
		<div class="row">
			<input type="hidden" name="idCliente" value="<?= $cliente->getId() ?>">

			<div class="form-group col-md-8">
				<label for="nomedocliente">Nome</label>
				<input type="text" name="nomeCliente" class="form-control" id="nomedocliente" value="<?= $cliente->getNome() ?>" required>
			</div>

			<div class="form-group col-md-4">
				<label for="cpfcliente">CPF</label>
				<input type="text" name="cpfCliente" class="form-control" id="cpfdocliente" value="<?= $cliente->getCpf() ?>" required>
			</div>
		</div>
		
		<div class="row">
			<div class="form-group col-md-6">
				<label for="telefonedocliente">Telefone</label>
				<input type="text" name="telefoneCliente" class="form-control" id="telefonedocliente" value="<?= $cliente->getTelefone() ?>" required>
			</div>

			<div class="form-group col-md-6">
				<label for="celulardocliente">Celular</label>
				<input type="text" name="celularCliente" class="form-control" id="celulardocliente" value="<?= $cliente->getCelular() ?>">
			</div>
		</div>

		<div class="row">
			<div class="form-group col-md-6">
				<label for="enderecodocliente">Endereço</label>
				<input type="text" name="enderecoCliente" class="form-control" id="enderecodocliente" value="<?= $cliente->getEndereco() ?>" required>
			</div>

			<div class="form-group col-md-3">
				<label for="numerodocliente">Nº</label>
				<input type="text" name="numeroCliente" class="form-control" id="numerodocliente" value="<?= $cliente->getNumero() ?>" required>
			</div>

			<div class="form-group col-md-3">
				<label for="complementodocliente">Compl.</label>
				<input type="text" name="complementoCliente" class="form-control" id="complementocliente" value="<?= $cliente->getComplemento() ?>">
			</div>
		</div>

		<div class="row">
			<div class="form-group col-md-3">
				<label for="cepcliente">CEP</label>
				<input type="text" name="cepCliente" class="form-control" id="cepcliente" value="<?= $cliente->getCep() ?>" required>
			</div>

			<div class="form-group col-md-5">
				<label for="cidadecliente">Cidade</label>
				<input type="text" name="cidadeCliente" class="form-control" id="cidadecliente" value="<?= $cliente->getCidade() ?>" required>
			</div>

			<div class="form-group col-md-4">
				<label for="estadocliente">Example select</label>
				<select class="form-control" id="estadoCliente" name="estadoCliente" option="<?= $cliente->getEstado() ?>" required>
					<option value="AC" <?php if ($cliente->getEstado() == "AC"){ echo "selected";}  ?>>Acre</option>
					<option value="AL" <?php if ($cliente->getEstado() == "AL"){ echo "selected";}  ?>>Alagoas</option>
					<option value="AP" <?php if ($cliente->getEstado() == "AP"){ echo "selected";}  ?>>Amapá</option>
					<option value="AM" <?php if ($cliente->getEstado() == "AM"){ echo "selected";}  ?>>Amazonas</option>
					<option value="BA" <?php if ($cliente->getEstado() == "BA"){ echo "selected";}  ?>>Bahia</option>
					<option value="CE" <?php if ($cliente->getEstado() == "CE"){ echo "selected";}  ?>>Ceará</option>
					<option value="DF" <?php if ($cliente->getEstado() == "DF"){ echo "selected";}  ?>>Distrito Federal</option>
					<option value="ES" <?php if ($cliente->getEstado() == "ES"){ echo "selected";}  ?>>Espírito Santo</option>
					<option value="GO" <?php if ($cliente->getEstado() == "GO"){ echo "selected";}  ?>>Goiás</option>
					<option value="MA" <?php if ($cliente->getEstado() == "MA"){ echo "selected";}  ?>>Maranhão</option>
					<option value="MT" <?php if ($cliente->getEstado() == "MT"){ echo "selected";}  ?>>Mato Grosso</option>
					<option value="MS" <?php if ($cliente->getEstado() == "MS"){ echo "selected";}  ?>>Mato Grosso do Sul</option>
					<option value="MG" <?php if ($cliente->getEstado() == "MG"){ echo "selected";}  ?>>Minas Gerais</option>
					<option value="PA" <?php if ($cliente->getEstado() == "PA"){ echo "selected";}  ?>>Pará</option>
					<option value="PB" <?php if ($cliente->getEstado() == "PB"){ echo "selected";}  ?>>Paraíba</option>
					<option value="PR" <?php if ($cliente->getEstado() == "PR"){ echo "selected";}  ?>>Paraná</option>
					<option value="PE" <?php if ($cliente->getEstado() == "PE"){ echo "selected";}  ?>>Pernambuco</option>
					<option value="PI" <?php if ($cliente->getEstado() == "PI"){ echo "selected";}  ?>>Piauí</option>
					<option value="RJ" <?php if ($cliente->getEstado() == "RJ"){ echo "selected";}  ?>>Rio de Janeiro</option>
					<option value="RN" <?php if ($cliente->getEstado() == "RN"){ echo "selected";}  ?>>Rio Grande do Norte</option>
					<option value="RS" <?php if ($cliente->getEstado() == "RS"){ echo "selected";}  ?>>Rio Grande do Sul</option>
					<option value="RO" <?php if ($cliente->getEstado() == "RO"){ echo "selected";}  ?>>Rondônia</option>
					<option value="RR" <?php if ($cliente->getEstado() == "RR"){ echo "selected";}  ?>>Roraima</option>
					<option value="SC" <?php if ($cliente->getEstado() == "SC"){ echo "selected";}  ?>>Santa Catarina</option>
					<option value="SP" <?php if ($cliente->getEstado() == "SP"){ echo "selected";}  ?>>São Paulo</option>
					<option value="SE" <?php if ($cliente->getEstado() == "SE"){ echo "selected";}  ?>>Sergipe</option>
					<option value="TO" <?php if ($cliente->getEstado() == "TO"){ echo "selected";}  ?>>Tocantins</option>
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

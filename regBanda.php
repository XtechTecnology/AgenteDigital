<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body >
	<div>
        <?php include("header.php");
    	?> 
    </div>
	<div>
		<section>
			
			<center>
				<h1>Registar Banda</h1>

				<div>
					<form method="POST" >
						<table width="100%"> 
							<tr>
								<td style="float: right;">Nome da Banda</td>
								<td><input type="name" name="nome" ></td>
							</tr>
							<tr>
								<td style="float: right;">Estilo Musical</td>
									<td><select name="eMusical">
										<option value="pagode">Pagode</option>
										<option value="samba">Samba</option>
										<option value="forro">Forró</option>
										<option value="rock">Rock</option>
									</select>
									</td>
							</tr>
							<tr>
								<td style="float: right;">Numero de integrantes</td>
								<td><input type="number" name="integrantes"></td>
							</tr>
							<tr>
								<td style="float: right;">CNPJ</td>
								<td><input type="name" name="cnpj"></td>
							</tr>
							<tr>
								<td style="float: right;">Estado</td>
								<td><input type="text" name="estado" ></td>
							</tr>
							<tr>
								<td style="float: right;">Cidade</td>
								<td><input type="text" name="cidade" ></td>
							</tr>
							<tr>
								<td style="float: right;">Bairro</td>
								<td><input type="text" name="bairro" ></td>
							</tr>
							<tr>
								<td style="float: right;">E-mail</td>
								<td><input type="e-mail" name="email" ></td>
							</tr>
							<tr>
								<td style="float: right;">Senha</td>
								<td><input type="password" name="pass" ></td>
							</tr>
							<tr>
								<td style="float: right;">Confirme a Senha</td>
								<td><input type="password" name="cpass" ></td>
							</tr>
							<tr>
								<td style="float: right;">Fone para contato</td>
								<td><input type="text" name="fone" ></td>
							</tr>
							<tr>
								<td style="float: right;">Celular</td>
								<td><input type="text" name="celular" ></td>
							</tr>

						</table>
								<input type="submit" name="registrar" value="Registrar">
								<input type="reset" name="limpar" value="Cancelar">

					</form>
				</div>
			</center>
			
		</section>
	</div>
</body>
</html>
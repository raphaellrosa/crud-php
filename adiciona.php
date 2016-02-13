<!DOCTYPE html>

<?php

include "connect.inc";

		$vid=$_POST["F_Id"];
		$vnome=$_POST["F_Nome"];
		$vdesc=$_POST["F_Desc"];
		$vpreco=$_POST["F_Preco"];
		
		
		$sql="INSERT INTO tb_estoque VALUES ($vid, '$vnome', '$vdesc', $vpreco)";
		$res=mysqli_query($con,$sql);
		$linhas=mysqli_affected_rows($con);
		
		if($linhas == 1){
			echo "Gravado com sucesso!<br/>";
		}else{
			echo "Falha na Gravação do registro."; 
		}
		
mysqli_close($con);
?>


<html>
	<head>
		<title>Sistema Gerenciador de Estoque</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="styles.css"/>
	</head>
	<body>
		<div id="top"><h1>Sistema Gerenciador de Estoque</h1>
		<p>Área de Administrativa</p></div>
		<hr/>
		
		<div id="menu-estoque">
			<ul>Estoque
				<li><a href="index.html">Adicionar</a></li>
				<li><a href="lista.php">Listar</a></li>
				<li><a href="edita.php">Editar</a></li>
				<li><a href="exclui.php">Exluir</a></li><br/>
			</ul>
		</div>
		
		<div id="content">
			<p>iten adicionado com sucesso!</p>
			
		
		</form>
		</div>
		
		<div id="footer"></div>
	</body>
</html>
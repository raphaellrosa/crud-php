<!DOCTYPE html>

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
			<div align="center">
			<table border="1px" cellpadding="5px" cellspacing="0">
		<tr>
			<td>id</td><td>Nome</td><td>Descrição</td><td>Preço</td>
		</tr>
		
	<?php
		include "connect.inc";
		
		
		$sql="SELECT * FROM tb_estoque";
		$res=mysqli_query($con,$sql);
		
		while($vreg=mysqli_fetch_row($res)){
			$vid=$vreg[0];
			$vnome=$vreg[1];
			$vdesc=$vreg[2];
			$vpreco=$vreg[3];
			
			echo"<tr>";
			echo "<td>$vid</td><td>$vnome</td><td>$vdesc</td><td>$vpreco</td>";
			echo "</tr>";
			
		}
		
		mysqli_close($con);
	?>
		</table></div>
		</div>
		
		<div id="footer"></div>
	</body>
</html>
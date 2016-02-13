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
	<form name="f_excluir" method="post" action="exclui.php">
		
		<table border="1px" cellpadding="5px" cellspacing="0">
			<tr>
				<td>ID</td><td>Nome</td><td>Selecionar</td>
			</tr>
			
			<?php
				include "connect.inc";
				
				if(isset($_POST['sel'])){
					foreach($_POST['sel'] as $codigo){
						$sql="Delete FROM tb_estoque WHERE id=$codigo";
						$res=mysqli_query($con,$sql);
						echo "Iten excluido<br/>";
					}
				}else{
					echo "Selecione os itens, e clique em excluir.<br/><br/>";
				}

			$sql="SELECT * FROM tb_estoque order by id";
			$res=mysqli_query($con,$sql);
			
			while($vreg=mysqli_fetch_row($res)){
				$vid=$vreg[0];
				$vnome=$vreg[1];
				
				echo "<tr>";
				echo "<td>$vid</td><td>$vnome</td>";
				echo "<td align=center><input type=checkbox value=$vid name=sel[]></td>";
				echo "</tr>";
			}
			
			mysqli_close($con);
			?>
		</table><br/>
		<input type="submit" value="Excluir" name="bt_excluir"/>
		
	</form>
		</div>
	</div>
		
		<div id="footer"></div>
	</body>
</html>
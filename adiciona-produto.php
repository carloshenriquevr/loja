<?php include("cabecalho.php") ?>
			<?php  
			$nome = $_GET["nome"];
			$preco =$_GET["preco"];

			$conexao = mysqli_connect('localhost', 'root','','loja');
			$query ="insert into produtos (nome,preco) values ('{$nome}',{$preco})";
			
				if(mysqli_query($conexao, $query)){?>
					<p class="alert-success">Produto <?= $nome; ?>, <?= $preco;?> adiconado COM SUCESSO!</p>
					
					<?php }else{ ?>
					
					<p class="alert-danger">Produto <?= $nome; ?> não adiconado!</p>
				
					<?php
				}
				
				mysqli_close($conexao);
			?>

			
<?php include("rodape.php") ?>
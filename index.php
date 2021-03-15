<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade PHP</title>
</head>
<?php $fundo = "orange";?>
<style type="text/css">
	body{
		display: flex;
		flex-direction: column;
		height: 900px;
	}
	#section{
		display: flex;
		justify-content: center;
		align-items: flex-start;
	}
	#section2{
		display: flex;
		justify-content: center;
		align-items: center;
		margin-top: 10vw;
		background-color: <?php echo $fundo;?>;
		}
	#imagem{
		height: auto;
		width: 500px;
	}
</style>
<body>
	<section id="section">
		<?php
		$nome = "Arthur";
		$idade = 16;
		$email = "arthur.chaves@etec.sp.gov.br";

		echo '<background-color="'.$fundo.'"><h1>Ola <font color="#000060">'.$nome. '</font>, Bem Vindo! <br> Você Tem <font color="#FF0000">'.$idade.'</font> anos, Seu email é: "<font color="#228B22">'.$email.'</font>"</h1>' ;
		?>
	</section>
	<section id="section2">
		<?php 
			$name = "Arthur Martins";
			$imagem = "https://wallup.net/wp-content/uploads/2019/09/217172-hyundai-ix35-2011-748x561.jpg";
			//NAVE TERRESTRE ACIMA!!
			echo '<background-color="'.$fundo.'"><h1 style="margin-left: 30%;">'.$name.'<br></h1><img src="'.$imagem.'" id="imagem">';
		 ?>
	</section>
</body>
</html>

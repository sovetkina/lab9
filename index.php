<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Лабораторная работа</title>
	</head>
	<body>
		<form method="POST" action=" ">
			<a>Введите число n</a><input type="text1" name="n">
			<a>Введите число x</a><input type="text2" name="x">
			<input type="submit" onclick="pii()" value="Отправить">
		</form>

		<?php
			function pii(){
				$n=$_POST['n'];
				$x=$_POST['x'];
				$f;
				$sum = 0;
				for ($i=0; $i<=$n; $i++) {
					$f = pow(-1, $n)*pow($x-1,$n+1)/($n+1);
					$sum = $sum + $f;
				}
				echo $sum;
			}		
		?>	
	</body>
</html>
	
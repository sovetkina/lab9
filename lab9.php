<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Лабораторная работа</title>
	</head>
	<body>
		<form method="POST" action="">
			<a>Введите число n</a><input type="text1" name="n"><br/>
			<a>Введите число x</a><input type="text2" name="x"><br/>
			<input type="submit" value="Отправить">
		</form>
		<?php
			$n=$_POST['n'];
			$x=$_POST['x'];
			$sum=0;
			for($i=0; $i<=$n; $i++){
				$f=pow(-1, $n)*pow($x-1,$n+1)/($n+1);
				$sum=$sum + $f;
			}
			echo $sum;
		?>	
	</body>
</html>

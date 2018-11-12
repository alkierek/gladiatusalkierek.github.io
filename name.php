<?php
if (isset($_POST['send'])) {
	$name = $_POST['name'];
	if ($name == 'arverys') {
		echo "TE AMO ARVERYS!<br>ERES EL AMOR DE MI VIDA Y CONTIGO ME QUIERO CASAR.<br>ERES TODO PARA MI QUIERO SER POR Y PARA SIEMPRE TU NOVIO, ESPOSO, AMANTE.<br>QUIERO TODO CONTIGO QUIERO SER EL PADRE DE NUESTROS HIJOS TODO A TU LADO! <3";
	} elseif ($name == 'Arverys') {
		echo "TE AMO ARVERYS!<br>ERES EL AMOR DE MI VIDA Y CONTIGO ME QUIERO CASAR.<br>ERES TODO PARA MI QUIERO SER POR Y PARA SIEMPRE TU NOVIO, ESPOSO, AMANTE.<br>QUIERO TODO CONTIGO QUIERO SER EL PADRE DE NUESTROS HIJOS TODO A TU LADO! <3";
	} elseif ($name == 'ARVERYS') {
		echo "TE AMO ARVERYS!<br>ERES EL AMOR DE MI VIDA Y CONTIGO ME QUIERO CASAR.<br>ERES TODO PARA MI QUIERO SER POR Y PARA SIEMPRE TU NOVIO, ESPOSO, AMANTE.<br>QUIERO TODO CONTIGO QUIERO SER EL PADRE DE NUESTROS HIJOS TODO A TU LADO! <3";
	} elseif (empty($name)) {
		echo "No seas asi, dime tu nombre :(";
	} else {
		$rand = rand(1,10);
		if ($rand == 1) {
			echo "Hola $name";
		} elseif ($rand == 2) {
			echo "Que nombre mas extraño tienes";
		} elseif ($rand == 3) {
			echo "¿seguro que ese es tu nombre?";
		} elseif ($rand == 4) {
			echo "Feo";
		} elseif ($rand == 5) {
			echo "Me das tu numero? :$";
		} elseif ($rand == 6) {
			echo "Que te gusta por donde? :o";
		} elseif ($rand == 7) {
			echo "Ya te agrege en facebook .... es mentira feo";
		} elseif ($rand == 8) {
			echo "$name presentame a tus primas";
		} elseif ($rand == 9) {
			echo "Me lo paro... el taxi♪";
		} elseif ($rand == 10) {
			echo "Chao  $name";
		}
	}
}
?>
<form method="post" accept-charset="utf-8" action="name.php">
<div class="input-text"><label for="name">Escribe tu nombre (en minusucula)</label><div class="input_wrap"><input type="text" id="name" name="name" value="" /></div></div>
<input type="submit" id="submit" value="Listo!" name="send" />
</form>
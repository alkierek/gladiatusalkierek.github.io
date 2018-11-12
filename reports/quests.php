<?php

## PRIMERO AVERIGUAR SI TIENE MISIONES
$averiguar1 = mysql_query("SELECT * FROM quests WHERE quest_type = '1' AND quest_userID = '".$userID."' AND quest_accept = 1 ");
$averiguar2 = mysql_num_rows($averiguar1);
if (!empty($averiguar2)) {
	## LUEGO ASEGURAMOS QUE HAYA GANADO
	if ($mww == 1) {
		$conteo1 = 1;
		while ($conteo1 <= $averiguar2) {
			$averiguar3 = mysql_fetch_array($averiguar1);
			$qid = $averiguar3['quest_id'];
			$um1 = $averiguar3['quest_enemyK'];
			$um2 = $averiguar3['quest_enemyKM'];
			## TRATAMOS DE EVITAR SUMAS DE MAS
			if ($um1 < $um2) {
				$um1++;
				## AÑADIMOS LA VICTORIA
				$añadir1 = "UPDATE quests SET quest_enemyK = '".$um1."' WHERE quest_id = '".$qid."' ";
				$añadir2 = mysql_query($añadir1);
				if ($añadir2) {
					## COMPLETADO!
					$conteo1++;
				}
			} else {
				$conteo1++;
			}
		}
	}
}

?>
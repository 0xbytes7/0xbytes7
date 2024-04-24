<?php

// Konfigurasi untuk mengupdate Google Search Engine
$URL = "https://www.xml-sitemaps.com/download/kel-gantiang.padangpanjang.go.id-8ed979a2b/sitemap.xml";
$ch = curl_init($URL);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$data = curl_exec($ch);
curl_close($ch);

echo "Sitemap berhasil diupdate ke Google Search Engine.";

?>

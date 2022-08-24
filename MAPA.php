<?php

include("Librerias/principal.php");

plantilla::aplicar();
$vehiculomapa = manejador_vehiculos::listaVehiculos();

?>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>

<style>
    html, body {
        height: 100%;
        margin: 0;
    }
    .leaflet-container {
        height: 400px;
        width: 100%;
        max-width: 100%;
        max-height: 100%;
    }
</style>

<div id="map" style="width: 100%; height: 648px;"></div>

<script>

	var map = L.map('map').setView([19.11659993358639, -70.51500163318731], 8);

	var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);

	var marker = L.marker([51.5, -0.09]).addTo(map)
		.bindPopup('<b>Hello world!</b><br />I am a popup.');

    var datax = <?php echo json_encode($vehiculomapa);?>;

   

    for(k in datax){
        datos = datax[k];
        var marker = L.marker([datos.lat, datos.lng]).addTo(map)
		.bindPopup('<b> Vehiculos </b> <br> Marca: '+datos.marca+'<br />Placa: '+datos.placa+' <br />Modelo: '+datos.modelo+' <br />Comentario: '+datos.comentario+' <br> <a href="agregar_vehiculos.php?id='+datos.id+'">Ver...</a>');
    }

</script>
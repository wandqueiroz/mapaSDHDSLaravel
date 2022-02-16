@extends('layouts.master')
@section('content')
      
<link rel="stylesheet" type="text/css" href="css/mapas.css">

<div class="top_content">
  <div class="cards" style="display:flex">
    <div class="card card_red">
      <h5>Baixa performance</h5>
      <div style="display:flex; justify-content:space-between">
        <h5 class="text__data__card" style="color:white">30</h5>
        <i class="fa fa-thumbs-down fa-5x" aria-hidden="true"></i>
      </div>
      
    </div>
    <div class="card card_orange">
      <h5>Média performance</h5>
      <div style="display:flex; justify-content:space-between">
        <h5 class="text__data__card" style="color:white">70</h5>
        <i class="fa fa-line-chart fa-5x" aria-hidden="true"></i>
      </div>
    </div>

    <div class="card card_green">
      <h5>Alta performance</h5>
        <div style="display:flex; justify-content:space-between">
          <h5 class="text__data__card" style="color:white">100</h5>
          <i class="fa fa-thumbs-up fa-5x" aria-hidden="true"></i>
        </div>
    </div>
    
  </div>

  
</div>  

<div id="quadro_mapa">
  <div id="map"></div>
  <div id="tester"></div>
</div>
<div>

  <table id="myTable" class="table table-striped" >  
    <thead>  
      <tr>  
        <th>ENO</th>  
        <th>EMPName</th>  
        <th>Country</th>  
        <th>Salary</th>  
      </tr>  
    </thead>  
    <tbody>  
      <tr>  
        <td>001</td>  
        <td>Anusha</td>  
        <td>India</td>  
        <td>10000</td>  
      </tr>  
      <tr>  
        <td>002</td>  
        <td>Charles</td>  
        <td>United Kingdom</td>  
        <td>28000</td>  
      </tr>  
      <tr>  
        <td>003</td>  
        <td>Sravani</td>  
        <td>Australia</td>  
        <td>7000</td>  
      </tr>  
   <tr>  
        <td>004</td>  
        <td>Amar</td>  
        <td>India</td>  
        <td>18000</td>  
      </tr>  
      <tr>  
        <td>005</td>  
        <td>Lakshmi</td>  
        <td>India</td>  
        <td>12000</td>  
      </tr>  
  
    </tbody>  
  </table>  
  
</div>


<script>
  var ultimateColors = [
  ['rgb(222, 54, 71)', 'rgb(255, 165, 0)', 'rgb(89, 170, 74)'],
  
];
var data = [{
  values: [19, 26, 55],
  labels: ['Baixa Performance', 'Média Peformance', 'Alta Performance'],
  type: 'pie',
  marker: {
    colors: ultimateColors[0]
  },
}];



var layout = {
  height: 400,
  width: 500,
  padding: 10,
  paper_bgcolor: "rgb(240, 246, 246)", 

};

Plotly.newPlot('tester', data, layout);
</script>

<script type="text/javascript">
  var greenIcon = new L.Icon({
    iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png',
    shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
    iconSize: [25, 41],
    iconAnchor: [12, 41],
    popupAnchor: [1, -34],
    shadowSize: [41, 41]
  });

  var orangeIcon = new L.Icon({
    iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-orange.png',
    shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
    iconSize: [25, 41],
    iconAnchor: [12, 41],
    popupAnchor: [1, -34],
    shadowSize: [41, 41]
  });

  var blueIcon = new L.Icon({
    iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-blue.png',
    shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
    iconSize: [25, 41],
    iconAnchor: [12, 41],
    popupAnchor: [1, -34],
    shadowSize: [41, 41]
  });

  var barra = L.marker([-3.7084337, -38.5800338], {icon: greenIcon}).bindPopup('CRAS BARRA DO CEARÁ'),
  jacarecanga = L.marker([-3.7212433, -38.5389852], {icon: greenIcon}).bindPopup('CRAS JACARECANGA'),
  lagamar = L.marker([-3.7613805, -38.5112225], {icon: greenIcon}).bindPopup('CRAS LAGAMAR'),
  futuro = L.marker([-3.7644719, -38.4403997], {icon: greenIcon}).bindPopup('CRAS PRAIA DO FUTURO'),
  mucuripe = L.marker([-3.7268639, -38.4778337], {icon: greenIcon}).bindPopup('CRAS MUCURIPE'), 
  serviluz = L.marker([-3.7163742, -38.4651728], {icon: greenIcon}).bindPopup('CRAS SERVILUZ'),
  bela_vista = L.marker([-3.7519851, -38.5639419], {icon: greenIcon}).bindPopup('CRAS BELA VISTA'),
  quintino_cunha = L.marker([-3.7318696, -38.6008863], {icon: greenIcon}).bindPopup('CRAS QUINTINO CUNHA'),
  ant_bezerra = L.marker([-3.7374242, -38.5902629], {icon: greenIcon}).bindPopup('CRAS ANTONIO BEZERRA'),
  pres_kennedy = L.marker([-3.7291766, -38.5705202], {icon: greenIcon}).bindPopup('CRAS PRESIDENTE KENNEDY'),
  joao_23 = L.marker([-3.7746614, -38.580733], {icon: greenIcon}).bindPopup('CRAS JOAO XXIII'),
  messejana = L.marker([-3.8306437, -38.4676208], {icon: greenIcon}).bindPopup('CRAS MESSEJANA'),
  pres_kennedy = L.marker([-3.7291766, -38.5705202], {icon: greenIcon}).bindPopup('CRAS PRESIDENTE KENNEDY'),
  pres_kennedy = L.marker([-3.7291766, -38.5705202], {icon: greenIcon}).bindPopup('CRAS PRESIDENTE KENNEDY'),
  pres_kennedy = L.marker([-3.7291766, -38.5705202], {icon: greenIcon}).bindPopup('CRAS PRESIDENTE KENNEDY');

  var cras = L.layerGroup([barra, jacarecanga, lagamar, futuro, mucuripe, serviluz, bela_vista, quintino_cunha, ant_bezerra, pres_kennedy, joao_23, messejana]);

  var refeitorio1 = L.marker([-3.7227971, -38.5368819]).bindPopup('REFEITORIO SOCIAL');
  var refeitorios = L.layerGroup([refeitorio1]);

  var nucad1 = L.marker([-3.7320829, -38.5460421], {icon: orangeIcon}).bindPopup('NUCAD I');
  var nucad2 = L.marker([-3.75865, -38.4820032], {icon: orangeIcon}).bindPopup('NUCAD II');
  var nucad3 = L.marker([-3.7396156, -38.5563457], {icon: orangeIcon}).bindPopup('NUCAD III');
  var nucad4 = L.marker([-3.79057, -38.5403766], {icon: orangeIcon}).bindPopup('NUCAD IV');
  var nucads = L.layerGroup([nucad1, nucad2, nucad3, nucad4 ]);

  var vapt_antoniob = L.marker([-3.7372669, -38.5851197]).bindPopup('VAPT VUPT ANT BEZERRA');
  var vapt_vupts = L.layerGroup([vapt_antoniob]);

  var layoutMap = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'});
    

    var map = L.map('map', {
        //center: [-3.76838, -38.535683],
        center: [-3.783411, -38.535233],
        zoom: 12,
        layers: [layoutMap, cras, refeitorios, nucads]
    });

var baseMaps = {
"OpenStreetMap": layoutMap

};

var overlayMaps = {
    "<strong>CRAS</strong>": cras,
    "<strong>REFEITORIOS</strong>": refeitorios,
    "<strong>NUCADS</strong>": nucads
};

L.control.layers(baseMaps, overlayMaps).addTo(map);
</script>
@endsection
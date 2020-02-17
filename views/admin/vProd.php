<?php

$html='
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8" />
    <title>Vista Media Property Management | Dashboard </title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
</head>
<style>
#map {
   width: 100%;
   height: 320px;
   background-color: grey;
 }
@media print{
#containers{
	width:800px;
	margin: auto;
}
#rows{
	width:100%;
	
}
#logo{
	width:778px;
	margin:10px 0;
	float:left;
	font-size:10px;
}
#logo img{
	float:left;
}
#logo h2{
font-family: verdana;
	padding-left:100px;
	margin:0px;
}
#logo p{
font-family: verdana;
    
	margin:0px;
	padding-left:100px;
}
#koordinat{
	clear: both;
	font-family: verdana;
    font-size: 12px;
	width: 250px;
	margin:5px;
	padding : 5px;
	background-color:#fff;
	top:140px;
	position:absolute;
	z-index:10;
}
#fimg{
	clear: both;
    float: left;
    margin: 0;
    padding: 0;
	
    width: 778px;
	border:1px solid #000;
}
#rowst{
	clear: both;
    float: left;
    margin: 0;
    padding: 0px;
    width: 778px;
	border:1px solid #000;
	font-size:10px;
}
#desk{
    float: left;
    margin: 5px 10px 5px 0;
    padding: 0px;
    width: 383px;
	font-family: verdana;
	border:1px solid #000;
	font-size:12px;
}
#desk h4{
	font-family: verdana;
	margin:0;
	width:300px;
	float:left;
	padding:5px;
	border-bottom:1px solid #000;
}
#desk .deskimg{
	 width:73px;height:25px; padding: 0px; margin:0; bottom:0px;border-bottom:1px solid #000;
}
#desk table{
	font-family: verdana;
	margin:0;
	float:left;
	padding:5px;
	
}
#desk ul{
	font-family: verdana;
    font-size: 12px;
	margin:0;
	padding:0 0 0 15px;
}
#desks{
    float: left;
    margin: 5px 10px 5px 0;
    padding: 0px;
    width: 778px;
	font-family: verdana;
    font-size:12px;
	border:1px solid #000;
	min-height:70px;
}
#desks h4{
	font-family: verdana;
    
	margin:0;
	
	width:695px;
	float:left;
	padding:5px;
	border-bottom:1px solid #000;
}
#desks .desksimg{
	 width:73px;height:25px; padding: 0px; margin:0; bottom:0px;border-bottom:1px solid #000;
}
#desks p{
	font-family: verdana;
    font-size: 12px;
	margin:0;
	float:left;
	padding:5px;
	
}
#fTitle h2{
font-family: verdana;
    font-size: 12px;
	margin:0px;
	padding: 10px;	
	float:left;
}
#fTitle h3{
	margin:0px;
	padding: 0px;
	float:left;
}
	
}
@media only screen and (min-width: 800px) {
#containers{
	width:800px;
	margin: auto;
}
#rows{
	width:100%;
	
}
#logo{
	width:778px;
	margin:10px 0;
	float:left;
	font-size:10px;
}
#logo img{
	float:left;
}
#logo h2{
font-family: verdana;
	padding-left:100px;
	margin:0px;
}
#logo p{
font-family: verdana;
    
	margin:0px;
	padding-left:100px;
}
#koordinat{
	clear: both;
	font-family: verdana;
    font-size: 12px;
	width: 250px;
	margin:5px;
	padding : 5px;
	background-color:#fff;
	top:140px;
	position:absolute;
	z-index:10;
}
#fimg{
	clear: both;
    float: left;
    margin: 0;
    padding: 0;
	
    width: 778px;
	border:1px solid #000;
}
#rowst{
	clear: both;
    float: left;
    margin: 0;
    padding: 0px;
    width: 778px;
	border:1px solid #000;
	font-size:10px;
}
#desk{
    float: left;
    margin: 5px 10px 5px 0;
    padding: 0px;
    width: 383px;
	font-family: verdana;
	border:1px solid #000;
	font-size:12px;
}
#desk h4{
	font-family: verdana;
	margin:0;
	width:300px;
	float:left;
	padding:5px;
	border-bottom:1px solid #000;
}
#desk .deskimg{
	 width:73px;height:25px; padding: 0px; margin:0; bottom:0px;border-bottom:1px solid #000;
}
#desk table{
	font-family: verdana;
	margin:0;
	float:left;
	padding:5px;
	
}
#desk ul{
	font-family: verdana;
    font-size: 12px;
	margin:0;
	padding:0 0 0 15px;
}
#desks{
    float: left;
    margin: 5px 10px 5px 0;
    padding: 0px;
    width: 778px;
	font-family: verdana;
    font-size:12px;
	border:1px solid #000;
	min-height:70px;
}
#desks h4{
	font-family: verdana;
    
	margin:0;
	
	width:695px;
	float:left;
	padding:5px;
	border-bottom:1px solid #000;
}
#desks .desksimg{
	 width:73px;height:25px; padding: 0px; margin:0; bottom:0px;border-bottom:1px solid #000;
}
#desks p{
	font-family: verdana;
    font-size: 12px;
	margin:0;
	float:left;
	padding:5px;
	
}
#fTitle h2{
font-family: verdana;
    font-size: 12px;
	margin:0px;
	padding: 10px;	
	float:left;
}
#fTitle h3{
	margin:0px;
	padding: 0px;
	float:left;
}
}
@media only screen and (min-width: 480px) and (max-width: 767px) {
#containers{
	width:100%;
	margin: auto;
}
#rows{
	width:100%;

}
#logo{
	width:100%;
	margin:10px 0;
	float:left;
	font-size:10px;
}
#logo img{
	float:left;
}
#logo h2{
font-family: verdana;
	padding-left:100px;
	margin:0px;
	font-size:12px;
}
#logo p{
font-family: verdana;
    font-size: 10px;
	margin:0px;
	padding-left:100px;
}
#koordinat{
	clear: both;
	font-family: verdana;
    font-size: 12px;
	width: 250px;
	margin:5px;
	padding : 5px;
	background-color:#fff;
	top:135px;
	position:absolute;
	z-index:10;
}
#fimg{
	clear: both;
    float: left;
    margin: 0;
    padding: 0;
	
    width: 100%;
	border:1px solid #000;
}
#rowst{
	clear: both;
    float: left;
    margin: 0;
    padding: 0px;
	font-size: 10px;
    width: 100%;
	border:1px solid #000;
}
#desk{
    float: left;
    margin: 5px 10px 5px 0;
    padding: 0px;
    width: 100%;
	font-family: verdana;
    font-size: 12px;
	border:1px solid #000;
}
#desk h4{
	font-family: verdana;
    font-size: 12px;
	margin:0;
	width:80%;
	float:left;
	padding:5px;
	border-bottom:1px solid #000;
}
#desk table{
	font-family: verdana;
    font-size: 12px;
	margin:0;
	float:left;
	padding:5px;
	
}
#desk ul{
	font-family: verdana;
    font-size: 12px;
	margin:0;
	padding:0 0 0 15px;
}
#desks{
    float: left;
    margin: 5px 10px 5px 0;
    padding: 0px;
    width: 100%;
	font-family: verdana;
    font-size: 10px;
	border:1px solid #000;
	min-height:70px;
}
#desks h4{
	font-family: verdana;
    font-size: 12px;
	margin:0;
	width:80%;
	float:left;
	padding:5px;
	border-bottom:1px solid #000;
}

#desks p{
	font-family: verdana;
    font-size: 12px;
	margin:0;
	float:left;
	padding:5px;
	
}
#fTitle h2{
font-family: verdana;
    font-size: 12px;
	margin:0px;
	padding: 10px;	
	float:left;
}
#fTitle h3{
	margin:0px;
	padding: 0px;
	float:left;
}
}
@media only screen and (min-width: 240px) and (max-width: 480px) {
#containers{
	width:100%;
	margin: auto;
}
#rows{
	width:100%;

}
#logo{
	width:100%;
	margin:10px 0;
	float:left;
	font-size:10px;
}
#logo img{
	float:left;
}
#logo h2{
font-family: verdana;
	padding-left:100px;
	margin:0px;
	font-size:10px;
}
#logo p{
font-family: verdana;
    
	margin:0px;
	padding-left:100px;
}
#koordinat{
	clear: both;
	font-family: verdana;
    font-size: 12px;
	width: 200px;
	margin:5px;
	padding : 5px;
	background-color:#fff;
	top:200px;
	position:absolute;
	z-index:10;
}
#fimg{
	clear: both;
    float: left;
    margin: 0;
    padding: 0;
	
    width: 100%;
	border:1px solid #000;
}
#rowst{
	clear: both;
    float: left;
    margin: 0;
    padding: 0px;
	font-size: 10px;
    width: 100%;
	border:1px solid #000;
}
#desk{
    float: left;
    margin: 5px 10px 5px 0;
    padding: 0px;
    width: 100%;
	font-family: verdana;
    font-size: 12px;
	border:1px solid #000;
}
#desk h4{
	font-family: verdana;
    font-size: 12px;
	margin:0;
	width:70%;
	float:left;
	padding:5px;
	border-bottom:1px solid #000;
}
#desk table{
	font-family: verdana;
    font-size: 12px;
	margin:0;
	float:left;
	padding:5px;
	
}
#desk ul{
	font-family: verdana;
    font-size: 10px;
	margin:0;
	padding:0 0 0 15px;
}
#desks{
    float: left;
    margin: 5px 10px 5px 0;
    padding: 0px;
    width: 100%;
	font-family: verdana;
    font-size: 8px;
	border:1px solid #000;
	min-height:70px;
}
#desks h4{
	font-family: verdana;
    font-size: 12px;
	margin:0;
	width:50%;
	float:left;
	padding:5px;
	
}

#desks p{
	font-family: verdana;
    font-size: 12px;
	margin:0;
	float:left;
	padding:5px;
	
}
#fTitle h2{
font-family: verdana;
    font-size: 14px;
	margin:0px;
	padding: 10px;	
	float:left;
}
#fTitle h3{
	margin:0px;
	padding: 0px;
	float:left;
}
}
</style>
<body>
<div id="containers">
';


				foreach($this->listPro as $prodx){
					foreach($prodx as $prod){
$html=$html.'
	<div id="rows">
		<div id="logo">
		<img src="'.URL.'logo.png">
		<h2>PT. VISTA MEDIA</h2>
		<p>Jl. Pulau Kawe No.40 - Denpsar | Bali <br>
		Ph. +62 361 5572727 Fax. +62 361 5573737<br> Email : info@vistamedia.co.id | website : www.vistamedia.co.id</p>
		</div>
		<div id="rowst">
			<div id="fTitle">
			<h2 style="color:red;">'.strtoupper($prod["ProductCode"]).'</h2>
			<h3>
			<img src="'.URL.'/assets/img/title-top.jpg"  style="width:55px;height:40px; padding: 0px; margin:0; bottom:0px;" ></h3>
			<h2>  '.$prod["Address"].'</h2>
			</div>
		</div>
		<div id="koordinat"> Koordinat : '.$prod["Latitude"].', '.$prod["Longitude"].'</div>
		<div id="fimg">';

if($prod["img"]!=""){
$html=$html.'
<img src="'.URL.$prod["img"].'" style="width:100%;height:400px;" alt=""/>';
}else{ 
$html=$html.'harap set gambar untuk vistamedia<br> &nbsp; <br>';
}
$html=$html.'
		</div>
	
	<div id="desk">
			<h4>Informasi Area</h4><img src="'.URL.'/assets/img/title-a.jpg" class="deskimg" >
					<table>
					<tr>
						<td   style="padding: 5px;vertical-align: top;text-align: left;">Rute Jalan </td>
						<td  style="padding:5px;vertical-align: top;text-align: left;"> : </td>
						<td  style="padding:5px;vertical-align: top;text-align: left;"> '. $prod["RuteJalan"].'</td>
					</tr>
					<tr>
						<td   style="padding:5px;vertical-align: top;text-align: left;">Akses Menuju </td>
						<td  style="padding:5px;vertical-align: top;text-align: left;"> : </td>
						<td  style="padding:5px;vertical-align: top;text-align: left;">'. $prod["akses"].'</td>
					</tr>
					<tr>
						<td   style="padding:5px;vertical-align: top;text-align: left;">Jarak Pandang </td>
						<td  style="padding:5px;vertical-align: top;text-align: left;"> : </td>
						<td  style="padding:5px;vertical-align: top;text-align: left;"> '. $prod["JarakPandang"].'</td>
					</tr>
					<tr>
						<td   style="padding:5px;vertical-align: top;text-align: left;">Kecepatan Kendaraan </td>
						<td  style="padding:5px;vertical-align: top;text-align: left;"> : </td>
						<td  style="padding:5px;vertical-align: top;text-align: left;"> '. $prod["KecepatanKendaraan"].'</td>
					</tr>
					<tr>
						<td   style="padding:5px;vertical-align: top;text-align: left;">Kawasan</td>
						<td  style="padding:5px;vertical-align: top;text-align: left;"> : </td>
						<td  style="padding:5px;vertical-align: top;text-align: left;"> '. $prod["Kawasan"].'</td>
					</tr>
</table>			
		</div>	

	<div id="desk">
			<h4>Deskripsi</h4><img src="'.URL.'/assets/img/title-a.jpg" class="deskimg" >
					<table>
					<tr>
						<td   style="padding:5px;">Jenis</td>
						<td  style="padding:5px;"> : </td>
						<td  style="padding:5px;"> '.$prod["NamaJenis"].'</td>
					</tr>
					<tr>
						<td   style="padding:5px;">Ukuran</td>
						<td  style="padding:5px;"> : </td>
						<td  style="padding:5px;"> '.$prod["Ukuran"].'</td>
					</tr>
					<tr>
						<td   style="padding:5px;">Jumlah </td>
						<td  style="padding:5px;"> : </td>
						<td  style="padding:5px;"> '.$prod["Jumlah"].'</td>
					</tr>
					<tr>
						<td   style="padding:5px;">Orientasi </td>
						<td  style="padding:5px;"> : </td>
						<td  style="padding:5px;">';
						if($prod["Orientasi"]=="V"){ $html=$html.'Vertical';}else{ $html=$html.'Horisontal';}
						$html=$html.'
						</td>
					</tr>
					<tr>
						<td   style="padding:5px;">Penerangan</td>
						<td  style="padding:5px;"> : </td>
						<td  style="padding:5px;"> ';
										switch($prod["Penerangan"]){
											case 'N' : $html=$html.'No-Light'; break;
											case 'B' : $html=$html.'Back Light'; break;
											case 'F' : $html=$html.'Front Light'; break;
										}
$html=$html.'</td>
					</tr>
				</table>
		</div>
	<div id="desks">
			<h4>Keterangan Lokasi :</h4><img src="'.URL.'/assets/img/title-a.jpg" class="desksimg">
			<p>'.$prod["Keterangan"].'</p>		
		</div>
	<div id="desks">
	<div id="map"></div>
	</div>
		</div>
	</div>';
				 }} 
$html.='</div>';
$html.='
<script>
      function initMap() {
        var uluru = {lat: '.$prod["Latitude"].', lng: '.$prod["Longitude"].'};
        var map = new google.maps.Map(document.getElementById("map"), {
          zoom: 17,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key='.GMAPKEY.'&callback=initMap">
    </script>
</body>

    <!-- END BODY -->
</html>

	';
echo $html;
	
		
		
	
<style>
#containers{
	width:800px;
	margin: auto;
}
#rows{
	width:100%;
	background:url("../images/bg.png");
}
#logo{
	width:778px;
	margin:10px 0;
	float:left;
}
#logo img{
	float:left;
}
#logo h2{
font-family: verdana;
    font-size: 14;
	padding-left:100px;
	margin:0px;
}
#logo p{
font-family: verdana;
    font-size: 12;
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
	top:128px;
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
}
#desk{
    float: left;
    margin: 10px 10px 10px 0;
    padding: 0px;
    width: 383px;
	font-family: verdana;
    font-size: 8;
	border:1px solid #000;
}
#desk h4{
	font-family: verdana;
    font-size: 14;
	margin:0;
	width:300px;
	float:left;
	padding:5px;
	border-bottom:1px solid #000;
}
#desk table{
	font-family: verdana;
    font-size: 12;
	margin:0;
	float:left;
	padding:5px;
	
}
#desk ul{
	font-family: verdana;
    font-size: 12;
	margin:0;
	padding:0 0 0 15px;
}
#desks{
    float: left;
    margin: 10px 10px 10px 0;
    padding: 0px;
    width: 778px;
	font-family: verdana;
    font-size: 8;
	border:1px solid #000;
	min-height:70px;
}
#desks h4{
	font-family: verdana;
    font-size: 14;
	margin:0;
	width:695px;
	float:left;
	padding:5px;
	border-bottom:1px solid #000;
}

#desks p{
	font-family: verdana;
    font-size: 12;
	margin:0;
	float:left;
	padding:5px;
	
}
#fTitle h2{
font-family: verdana;
    font-size: 14;
	margin:0px;
	padding: 10px;	
	float:left;
}
#fTitle h3{
	margin:0px;
	padding: 0px;
	float:left;
}

</style>
<div id="containers">
<?php 
				foreach($this->listPro as $prodx){
						foreach($prodx as $prod){
						
							
				
			?>
	<div id="rows">
		<div id="logo">
		<img src="../assets/img/logo.jpg">
		<h2>PT. VISTA MEDIA</h2>
		<p>Jl. Pulau Kawe No.40 - Denpsar | Bali <br>
		Ph. +62 361 5572727 Fax. +62 361 5573737<br> Email : info@vistamedia.co.id | website : www.vistamedia.co.id</p>
		</div>
		<div id="rowst">
			<div id="fTitle">
			<h2 style="color:red;"><?php echo strtoupper($prod["ProductCode"]);?></h2>
			<h3>
			<img src="../assets/img/title-top.jpg"  style="width:55px;height:40px; padding: 0px; margin:0; bottom:0px;" ></h3>
			<h2>  <?php echo $prod["Address"];?></h2>
			</div>
		</div>
		<div id="koordinat"> Koordinat : <?php echo $prod["Latitude"];?>, <?php echo $prod["Longitude"];?></div>
		<div id="fimg">
			<?php
//echo "==>".$prod["img"];
if($prod["img"]!=""){
?>
								<img src="<?php echo URL.$prod["img"];?>" style="width:100%;height:400px;" alt=""/>
<?php
}else{ echo "harap set gambar untuk vistamedia<br> &nbsp; <br>";}
?>
		</div>
	
	<div id="desk">
			<h4>Informasi Area</h4><img src="../assets/img/title-a.jpg"  style="width:73px;height:27px; padding: 0px; margin:0; bottom:0px;border-bottom:1px solid #000;" >
					<table>
					<tr>
						<td   style="padding: 5px;vertical-align: top;text-align: left;">Rute Jalan </td>
						<td  style="padding:5px;vertical-align: top;text-align: left;"> : </td>
						<td  style="padding:5px;vertical-align: top;text-align: left;"> <?php echo $prod["RuteJalan"];?></td>
					</tr>
					<tr>
						<td   style="padding:5px;vertical-align: top;text-align: left;">Akses Menuju </td>
						<td  style="padding:5px;vertical-align: top;text-align: left;"> : </td>
						<td  style="padding:5px;vertical-align: top;text-align: left;"> <?php echo $prod["akses"];?></td>
					</tr>
					<tr>
						<td   style="padding:5px;vertical-align: top;text-align: left;">Jarak Pandang </td>
						<td  style="padding:5px;vertical-align: top;text-align: left;"> : </td>
						<td  style="padding:5px;vertical-align: top;text-align: left;"> <?php echo $prod["JarakPandang"];?></td>
					</tr>
					<tr>
						<td   style="padding:5px;vertical-align: top;text-align: left;">Kecepatan Kendaraan </td>
						<td  style="padding:5px;vertical-align: top;text-align: left;"> : </td>
						<td  style="padding:5px;vertical-align: top;text-align: left;"> <?php echo $prod["KecepatanKendaraan"];?></td>
					</tr>
					<tr>
						<td   style="padding:5px;vertical-align: top;text-align: left;">Kawasan</td>
						<td  style="padding:5px;vertical-align: top;text-align: left;"> : </td>
						<td  style="padding:5px;vertical-align: top;text-align: left;"> <?php echo $prod["Kawasan"];?></td>
					</tr>
</table>			
		</div>	

	<div id="desk">
			<h4>Deskripsi</h4><img src="../assets/img/title-a.jpg"  style="width:73px;height:27px; padding: 0px; margin:0; bottom:0px;border-bottom:1px solid #000;" >
					<table>
					<tr>
						<td   style="padding:5px;">Jenis</td>
						<td  style="padding:5px;"> : </td>
						<td  style="padding:5px;"> <?php echo $prod["NamaJenis"];?></td>
					</tr>
					<tr>
						<td   style="padding:5px;">Ukuran</td>
						<td  style="padding:5px;"> : </td>
						<td  style="padding:5px;"> <?php echo $prod["Ukuran"];?></td>
					</tr>
					<tr>
						<td   style="padding:5px;">Jumlah </td>
						<td  style="padding:5px;"> : </td>
						<td  style="padding:5px;"> <?php echo $prod["Jumlah"];?></td>
					</tr>
					<tr>
						<td   style="padding:5px;">Orientasi </td>
						<td  style="padding:5px;"> : </td>
						<td  style="padding:5px;"><?php if($prod["Orientasi"]=="V"){ echo "Vertical";}else{ echo "Horisontal";}?></td>
					</tr>
					<tr>
						<td   style="padding:5px;">Penerangan</td>
						<td  style="padding:5px;"> : </td>
						<td  style="padding:5px;">  <?php  
										switch($prod["Penerangan"]){
											case 'N' : echo "No-Light"; break;
											case 'B' : echo "Back Light"; break;
											case 'F' : echo "Front Light"; break;
										} ?></td>
					</tr>
				</table>
		</div>
	<div id="desks">
			<h4>Keterangan Lokasi :</h4><img src="../assets/img/title-a.jpg"  style="width:73px;height:27px; padding: 0px; margin:0; bottom:0px;border-bottom:1px solid #000;" >
			<p><?php echo $prod["Keterangan"];?></p>		
		</div>
	<div id="desks">
	<img width="778" src="https://maps.googleapis.com/maps/api/staticmap?center= <?php echo $prod["Latitude"];?>, <?php echo $prod["Longitude"];?>&zoom=13&scale=1&size=778x350&maptype=roadmap&key=<?php echo GMAPKEY;?>&format=jpg&visual_refresh=true&markers=size:mid%7Ccolor:0xff0000%7Clabel:%7C <?php echo $prod["Latitude"];?>, <?php echo $prod["Longitude"];?>" alt="<?php echo $pro["ProductCode"].'|'.$prod["Address"];?>">
	</div><div id="desks">
	<img width="778" src="https://maps.googleapis.com/maps/api/staticmap?center= <?php echo $prod["Latitude"];?>, <?php echo $prod["Longitude"];?>&zoom=13&scale=1&size=778x350&maptype=satellite&key=<?php echo GMAPKEY;?>&format=jpg&visual_refresh=true&markers=size:mid%7Ccolor:0xff0000%7Clabel:%7C <?php echo $prod["Latitude"];?>, <?php echo $prod["Longitude"];?>" alt="<?php echo $pro["ProductCode"].'|'.$prod["Address"];?>">
	</div>
		</div>
	</div>
					<?php }} ?>
</div>			
	
		
		
	
<!DOCTYPE html>
<?php
	include_once "database.php";
	include_once "functions.php";

?>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Restoran "Ad Astra"</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<script src="store.js" async></script>
	</head>

	<body>
		<div class="top">
			<div class="w3-bar bar">
				<a href="#" class="bar-item button w3-hide-small">HOME</a>
				<a href="#reservation" class="bar-item button w3-hide-small">RESERVATION</a>
				<a href="#menu" class="bar-item button w3-hide-small">MENU</a>
				<a href="#reserved" class="bar-item button w3-hide-small">RESERVED</a>
				<span class="logo">Ad Astra</span>
				<div class="w3-dropdown-hover">
					<button class="w3-button w3-hide-large w3-hide-medium"><i class="fa fa-bars" style="font-size: 17px; color: white; padding: 10px 12px;"></i></button>
					<div class="bar w3-dropdown-content w3-bar-block">
						<a href="#" class="w3-bar-item button">HOME</a>
						<a href="#reservation" class="w3-bar-item button">RESERVATION</a>
						<a href="#menu" class="w3-bar-item button">MENU</a>
						<a href="#reserved" class="w3-bar-item button">RESERVED</a>
					</div>
				</div>
			</div>
		</div>

		<header class="bgimg display-container naslov" id="home">
			<div class="display-middle center" style="text-align: center;">
				<span class="text-gold"><br>RESTORAN<br><br>AD ASTRA</span>
			</div>
		</header>
		
		<section id="reservation" class="container text-center pt">
			<h3>RESERVATION</h3>
			<div class="row border-reservation">
				<div class="col-lg-4 border-reservation-bottom">
					<img src="Table6.png" class="Table6 w3-dropdown-click" id="1" onclick="myFunction()">
					<div id="reserve" class="w3-dropdown-content w3-bar-block w3-border" style="text-align: center; z-index: 0;">
						<form action="functions.php" method="post" id="f1">
						<select name="Stol-1" id="1" multiple size="10">
							<?php 
								$novi_sati = date("H", strtotime('+2 hours'));
								$sati = $novi_sati;
								if($sati >= 10){
									while($sati <= 21) {
										$vrijeme = "Datum: " . date("d.m.y") . " - od " . $sati . ":00   Do - " . ($sati + 1) . ":00";  
										echo "<option value='{$vrijeme}'>" . $vrijeme . "</option>";
										$sati++;
									}
								}
								$drugi_dan = date("d.m.y", strtotime('+1 days'));
								$sati = 10;
								while($sati <= 21) {
									$vrijeme = "Datum: " . $drugi_dan . " - od " . $sati . ":00   Do - " . ($sati + 1) . ":00";  
									echo "<option value='{$vrijeme}'>" . $vrijeme . "</option>";
									$sati++;
								}
							?>
						</select>
						<input type="submit" value="Rezerviraj">
						</form>
					</div>
					
					<img src="Table4.png" class="Table4" id="2">
					<img src="Table6.png" class="Table6" id="3">
					<img src="Table4.png" class="Table4" id="4">
					<img src="Table6.png" class="Table6" id="5">
					<img src="Table4.png" class="Table4" id="6">
					<img src="Table6.png" class="Table6" id="7">
					<img src="Table4.png" class="Table4" id="8">
					<img src="Table6.png" class="Table6" id="9">
					<img src="Table6.png" class="Table6" id="10">
					<img src="Table4.png" class="Table4" id="11">
				</div>
			</form>
				<div class="col-lg-4 border-reservation-right-left">
					<img src="Table6.png" class="Table6" id="12">
					<img src="Table6.png" class="Table6" id="13">
					<img src="Table6.png" class="Table6" id="14">
					<img src="Table4.png" class="Table4" id="15">
					<img src="Table4.png" class="Table4" id="16">
					<img src="Table4.png" class="Table4" id="17">
					<img src="Table4.png" class="Table4" id="18">
					<img src="Table4.png" class="Table4" id="19">
					<img src="Table4.png" class="Table4" id="20">
				</div>
				<div class="col-lg-4 border-reservation-bottom">
					<img src="Table10.png" class="Table10" id="21">
					<img src="Table10.png" class="Table10" id="22">
					<img src="Table16.png" class="Table16" id="23">
					<img src="Table16.png" class="Table16" id="24">
					<img src="Table10.png" class="Table10" id="25">
					<img src="Table10.png" class="Table10" id="26">
				</div>
			</div>
			<div class="row border-reservation-terasa">
				<img src="Table10.png" class="Table10" id="27">
				<img src="Table4.png" class="Table4" id="28">
				<img src="Table6vr.png" class="Tablevr" id="29">
				<img src="Table6vr.png" class="Tablevr" id="30">
				<img src="Table4.png" class="Table4" id="31">
				<img src="Table4.png" class="Table4" id="32">
				<img src="Table6vr.png" class="Tablevr" id="33">
				<img src="Table6vr.png" class="Tablevr" id="34">
				<img src="Table4.png" class="Table4" id="35">
				<img src="Table10.png" class="Table10" id="36">
			</div>
		</section>
		
		<section id="menu" class="container text-center content-section pt">
			<h3>MENU</h3>
			<br>
			<div class="shop-items">
			<div class="row">
				<div class="col-sm-4">
					<p class="text-center"><strong>Predjela</strong></p><br>
					<a href="#jela" data-toggle="collapse">
						<img src="predjelo.jpg" class="img-circle" width="250" height="200">
					</a>
					<div id="jela" class="collapse">
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Pršut</span><div class="shop-item-details"><span class="shop-item-price"> 100g/30,00 kn</p></span></div></div></div>
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Ovčji sir</span><div class="shop-item-details"><span class="shop-item-price"> 100g/35,00 kn</p></span></div></div></div>
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Mozzarela s pršutom</span><div class="shop-item-details"><span class="shop-item-price"> 35,00 kn</span></div></div></div>
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Salata od hobotnice</span><div class="shop-item-details"><span class="shop-item-price"> 46,00 kn</span></div></div></div>
					</div>
				</div>
				<div class="col-sm-4">
					<p class="text-center"><strong>Salate</strong></p><br>
					<a href="#jela2" data-toggle="collapse">
						<img src="salate.jpg" class="img-circle" alt="Random Name" width="250" height="200">
					</a>
					<div id="jela2" class="collapse">
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Dnevna salata</span><div class="shop-item-details"><span class="shop-item-price"> 15,00 kn</span></div></div></div>
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Šopska salata</span><div class="shop-item-details"><span class="shop-item-price"> 20,00 kn</span></div></div></div>
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Mozzarela salata</span><div class="shop-item-details"><span class="shop-item-price"> 30,00 kn</span></div></div></div>
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Tuna salata</span><div class="shop-item-details"><span class="shop-item-price"> 45,00 kn</span></div></div></div>
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Pileća salata</span><div class="shop-item-details"><span class="shop-item-price"> 45,00 kn</span></div></div></div>
					</div>
				</div>
				<div class="col-sm-4">
					<p class="text-center"><strong>Juhe</strong></p><br>
					<a href="#jela3" data-toggle="collapse">
						<img src="juha3.jpg" class="img-circle" alt="Random Name" width="250" height="200">
					</a>
					<div id="jela3" class="collapse">
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Goveđa juha</span><div class="shop-item-details"><span class="shop-item-price"> 15,00 kn</span></div></div></div>
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Krem juha od gljiva</span><div class="shop-item-details"><span class="shop-item-price"> 15,00 kn</span></div></div></div>
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Krem juha od brokule</span><div class="shop-item-details"><span class="shop-item-price"> 15,00 kn</span></div></div></div>
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Krem juha od bundeve</span><div class="shop-item-details"><span class="shop-item-price"> 15,00 kn</span></div></div></div>
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Domaća juha</span><div class="shop-item-details"><span class="shop-item-price"> 15,00 kn</span></div></div></div>
					</div>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-sm-4">
					<p class="text-center"><strong>Mesna jela</strong></p><br>
					<a href="#jela4" data-toggle="collapse">
						<img src="mesnajela.jpg" class="img-circle" width="250" height="200">
					</a>
					<div id="jela4" class="collapse">
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Pileći file u umaku od gljiva</span><div class="shop-item-details"><span class="shop-item-price"> 48,00 kn</span></div></div></div>
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Pohani pileći file</span><div class="shop-item-details"><span class="shop-item-price"> 45,00 kn</span></div></div></div>
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Pureći odrezak</span><div class="shop-item-details"><span class="shop-item-price"> 63,00 kn</span></div></div></div>
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Svinjski medaljoni</span><div class="shop-item-details"><span class="shop-item-price"> 60,00 kn</span></div></div></div>
					</div>
				</div>
				<div class="col-sm-4">
					<p class="text-center"><strong>Grill</strong></p><br>
					<a href="#jela5" data-toggle="collapse">
						<img src="grill.jpg" class="img-circle" alt="Random Name" width="250" height="200">
					</a>
					<div id="jela5" class="collapse">
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Kraljevski ražnjići</span><div class="shop-item-details"><span class="shop-item-price"> 42,00 kn</span></div></div></div>
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Ramstek na žari</span><div class="shop-item-details"><span class="shop-item-price"> 72,00 kn</span></div></div></div>
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Pljeskavica</span><div class="shop-item-details"><span class="shop-item-price"> 40,00 kn</span></div></div></div>
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Čevapčići</span><div class="shop-item-details"><span class="shop-item-price"> 45,00 kn</span></div></div></div>
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Mesna plata za 3 osobe</span><div class="shop-item-details"><span class="shop-item-price"> 200,00 kn</span></div></div></div>
					</div>
				</div>
				<div class="col-sm-4">
					<p class="text-center"><strong>Prilozi</strong></p><br>
					<a href="#jela6" data-toggle="collapse">
						<img src="prilozi.jpg" class="img-circle" alt="Random Name" width="250" height="200">
					</a>
					<div id="jela6" class="collapse">
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Domaći njoki/Kroketi/Riža</span><div class="shop-item-details"><span class="shop-item-price"> 12,00 kn</span></div></div></div>
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Lešo/Grill krumpir</span><div class="shop-item-details"><span class="shop-item-price"> 10,00 kn</span></div></div></div>
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Blitva</span><div class="shop-item-details"><span class="shop-item-price"> 18,00 kn</span></div></div></div>
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Pomfrit</span><div class="shop-item-details"><span class="shop-item-price"> 14,00 kn</span></div></div></div>
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Zapečeni grah</span><div class="shop-item-details"><span class="shop-item-price"> 27,00 kn</span></div></div></div>
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Povrće/Šampinjoni s grilla</span><div class="shop-item-details"><span class="shop-item-price"> 25,00 kn</span></div></div></div>
					</div>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-sm-4">
				  <p class="text-center"><strong>Riblja jela</strong></p><br>
				  <a href="#jela7" data-toggle="collapse">
					<img src="ribljajela.jpg" class="img-circle" width="250" height="200">
				  </a>
				  <div id="jela7" class="collapse">
					<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Lignje frigane</span><div class="shop-item-details"><span class="shop-item-price"> 54,00 kn</span></div></div></div>
					<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Lignje s grilla</span><div class="shop-item-details"><span class="shop-item-price"> 67,00 kn</span></div></div></div>
					<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Losos s grilla</span><div class="shop-item-details"><span class="shop-item-price"> 52,00 kn</span></div></div></div>
					<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Orada/Brancin s grilla</span><div class="shop-item-details"><span class="shop-item-price"> 54,00 kn</span></div></div></div>
					<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Tuna steak s grilla</span><div class="shop-item-details"><span class="shop-item-price"> 70,00 kn</span></div></div></div>
					<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Škampi</span><div class="shop-item-details"><span class="shop-item-price"> 100,00 kn</span></div></div></div>
					<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Riblja plata za 2 osobe</span><div class="shop-item-details"><span class="shop-item-price"> 240,00 kn</span></div></div></div>
				  </div>
				</div>
				<div class="col-sm-4">
					<p class="text-center"><strong>Deserti</strong></p><br>
					<a href="#jela8" data-toggle="collapse">
						<img src="deserti.jpg" class="img-circle" alt="Random Name" width="250" height="200">
					</a>
					<div id="jela8" class="collapse">
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Kuglica sladoleda</span><div class="shop-item-details"><span class="shop-item-price"> 7,00 kn</span></div></div></div>
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Palačinke s marmeladom</span><div class="shop-item-details"><span class="shop-item-price"> 12,00, kn</span></div></div></div>
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Palačinka s Nutellom</span><div class="shop-item-details"><span class="shop-item-price"> 15,00 kn</span></div></div></div>
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Tiramisu</span><div class="shop-item-details"><span class="shop-item-price"> 16,00 kn</span></div></div></div>
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Panna cotta sa šumskim voćem</span><div class="shop-item-details"><span class="shop-item-price"> 18,00 kn</span></div></div></div>
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Panna cotta s Nutellom</span><div class="shop-item-details"><span class="shop-item-price"> 18,00 kn</span></div></div></div>
					</div>
				</div>
				<div class="col-sm-4">
					<p class="text-center"><strong>Pizze</strong></p><br>
					<a href="#jela9" data-toggle="collapse">
						<img src="pizze.jpg" class="img-circle" alt="Random Name" width="250" height="200">
					</a>
					<div id="jela9" class="collapse">
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Margherita</span><div class="shop-item-details"><span class="shop-item-price"> 34,00 kn</span></div></div></div>
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Funghi</span><div class="shop-item-details"><span class="shop-item-price"> 35,00 kn</span></div></div></div>
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Vesuvio</span><div class="shop-item-details"><span class="shop-item-price"> 36,00 kn</span></div></div></div>
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">4 sira</span><div class="shop-item-details"><span class="shop-item-price"> 34,00 kn</span></div></div></div>
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Mješana</span><div class="shop-item-details"><span class="shop-item-price"> 37,00 kn</span></div></div></div>
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Tuna</span><div class="shop-item-details"><span class="shop-item-price"> 45,00 kn</span></div></div></div>
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Mediteranska</span><div class="shop-item-details"><span class="shop-item-price"> 48,00 kn</span></div></div></div>
						<div class="shop-items"><div class="shop-item"><span class="shop-item-title shop-item-button">Slavonska</span><div class="shop-item-details"><span class="shop-item-price"> 55,00 kn</span></div></div></div>
					</div>
				</div>
			</div>
			</div>
		</section>
		
		<section id="reserved" class="container content-section text-center pt">
			<h3>RESERVED</h3>
			<div class="row">
				<div class="col-sm-6">

				</div>
				<div class="col-sm-6">
					<div class="cart-row">
						<span class="cart-item cart-header cart-column">ITEM</span>
						<span class="cart-price cart-header cart-column">PRICE</span>
						<span class="cart-quantity cart-header cart-column">QUANTITY</span>
					</div>
					<div class="cart-items">
					</div>
					<div class="cart-total">
						<strong class="cart-total-title">Total</strong>
						<span class="cart-total-price">0kn</span>
					</div>
				</div>
			</div>
            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
		</section>
		
		<script>
			function myFunction() {
			  var x = document.getElementById("reserve");
			  if (x.className.indexOf("w3-show") == -1) {
				x.className += " w3-show";
			  } else { 
				x.className = x.className.replace(" w3-show", "");
			  }
			}
		</script>
		
	</body>
</html>
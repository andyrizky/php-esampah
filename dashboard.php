<?php $thisPage="Dashboard"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard | E-SAMPAH</title>
	<script type="text/javascript">
	function myFunciton() {
		document.getElementById('Transaksi').classList.toggle("show");
	}

	window.onclick = function (event) {
		if (!event.target.matches('.button-transaksi')) {
			var dropdowns = document.getElementsByClassName('transaksi-content');
			var i;
			for (i = 0; i < dropdowns.length; i++) {
				var openDropdown = dropdowns[i];
				if (openDropdown.classList.containts('show')) {
					openDropdown.classList.remove('show');
				}
			}
		}
	}

	</script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
  <input type="checkbox" id="tag-menu"/>
  <label class="fa fa-bars menu-bar" for="tag-menu"><a> E-SAMPAH</a></label>
  <?php if($thisPage == "Dashboard") //echo "class='active'";?> <a href="dashboard.php"> <button class="button-dashboard" type="button">Dashboard</button></a>
  <?php if($thisPage == "Member") //echo "class='active'";?> <a href="member.php"> <button class="button-member">Member</button></a>
  <?php if($thisPage == "Member") //echo "class='active'";?> <a href="#"> <button onclick="myFunciton()" class="button-transaksi">Transaksi</button></a>
	<div id="Transaksi" class="transaksi-content">
		<a href="#">Pembelian</a>
		<a href="#">Penjualan</a>
	</div>

  <div class="jw-drawer">
    <nav>
      <ul>
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i>&nbsp;&nbsp;Dashboard</a></li>
        <li><a href="#"><i class="fa fa-table"></i>&nbsp;&nbsp;Master</a>
					<ul>
						<li><a href="#"><i class="fa fa-trash"></i>&nbsp;&nbsp;Jenis Sampah</a></li>
					</ul>
				</li>
        <li><a href="#"><i class="fa fa-user"></i>&nbsp;&nbsp;Data Member</a></li>
        <li><a href="#"><i class="fa fa-money"></i>&nbsp;&nbsp;Data Transaksi</a></li>
        <li><a href="#"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Event</a></li>
        <li><a href="#"><i class="fa fa-book"></i>&nbsp;&nbsp;Laporan</a></li>
      </ul>
    </nav>
  </div>
</header>

</body>
</html>

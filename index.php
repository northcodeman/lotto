<?php
include("include/navbar.php")
?>

  <!-- header -->
  <header class="header">
    <img src="assets/img/banner.jpg" alt="">
  </header>
  <!-- /.header -->

  <!-- main content -->
  <main class="main-content">
    <img src="assets/img/blush.png" alt="" class="mb-5" style="margin-top: -15px; width: 100%;">

    <!-- <div class="row d-flex justify-content-center" style="--bs-gutter-x: 0;">
      <div class="col-4 col-sm-3 d-flex justify-content-center">
        <img src="assets/img/box.png" alt="" class="lotto-today">
      </div>
      <div class="col-4 col-sm-3 d-flex justify-content-center">
        <img src="assets/img/box.png" alt="" class="lotto-today">
      </div>
      <div class="col-4 col-sm-3 d-flex justify-content-center">
        <img src="assets/img/box.png" alt="" class="lotto-today">
      </div>
    </div> -->
<br>
    <div class="container">

    <section id="services" style="padding-top:50px ;">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12 cnt_head">
					<span class="sub_head" id="current-time"></span>
					<h2 class="s_head">ดูผลหวยออนไลน์</h2>
					<!-- <p class="h_body">ผลหวยออนไลน์ ตรวจหวยล่าสุด ผลหวยย้อนหลัง ผลหวยงวดที่ผ่านมา แม่นยำ รวดเร็ว ครบทุกหวย
						ผลหวยรัฐบาล ผลหวยลาว ผลหวยฮานอย หวยฮานอยพิเศษ หวยฮานอย VIP</p> -->
				</div>
			</div>
			<div class="row ser_cnt text-center">
				<div class="col-lg-4 col-md-12 col-xs-12 serv ">
					<a href="result-huay/huay-thai.php" style="text-decoration: none;color:unset;">
						<div class="card" style="padding:15px">
							<div class="row">
								<div class="col-4 text-center" style="vertical-align: middle">
									<img class="img-fluid" src="assets/img/flags/thai_flag.png" alt="" srcset="">
								</div>
								<div class="col-8 text-left">
									<div class="row">
										<div class="col-12">
											<span class="ser_ttl" style="font-size: 18px;">ผลหวยรัฐบาลไทย</span>
										</div>
										<div class="col-12">
											<small>งวดล่าสุด</small>
											<p style="font-size: 16px;margin-bottom: 0px;" id="date-thai">รออัพเดท...</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-12 col-xs-12 serv ">
					<a href="result-huay/huay-lao.php" style="text-decoration: none;color:unset;">
						<div class="card" style="padding:15px">
							<div class="row">
								<div class="col-4 text-center" style="vertical-align: middle">
									<img class="img-fluid" src="assets/img/flags/lao_flag.png" alt="" srcset="">
								</div>
								<div class="col-8 text-left">
									<div class="row">
										<div class="col-12">
											<span class="ser_ttl" style="font-size: 18px;">ผลหวยลาว</span>
										</div>
										<div class="col-12">
											<small>งวดล่าสุด</small>
											<p style="font-size: 16px;margin-bottom: 0px;" id="date-lao">รออัพเดท...</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-12 col-xs-12 serv ">
					<a href="result-huay/huay-lao-vip.php" style="text-decoration: none;color:unset;">
						<div class="card" style="padding:15px">
							<div class="row">
								<div class="col-4 text-center" style="vertical-align: middle">
									<img class="img-fluid" src="assets/img/flags/lao_flag.png" alt="" srcset="">
								</div>
								<div class="col-8 text-left">
									<div class="row">
										<div class="col-12">
											<span class="ser_ttl" style="font-size: 18px;">ผลหวยลาว <b class="text-warning">VIP</b></span>
										</div>
										<div class="col-12">
											<small>งวดล่าสุด</small>
											<p style="font-size: 16px;margin-bottom: 0px;" id="date-lao-vip">รออัพเดท...</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-12 col-xs-12 serv ">
					<a href="result-huay/huay-lao-star.php" style="text-decoration: none;color:unset;">
						<div class="card" style="padding:15px">
							<div class="row">
								<div class="col-4 text-center" style="vertical-align: middle">
									<img class="img-fluid" src="assets/img/flags/lao_flag.png" alt="" srcset="">
								</div>
								<div class="col-8 text-left">
									<div class="row">
										<div class="col-12">
											<span class="ser_ttl" style="font-size: 18px;">ผลหวยลาว <b class="text-danger">สตาร์</b></span>
										</div>
										<div class="col-12">
											<small>งวดล่าสุด</small>
											<p style="font-size: 16px;margin-bottom: 0px;" id="date-lao-star">รออัพเดท...</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-12 col-xs-12 serv ">
					<a href="result-huay/huay-hanoi.php" style="text-decoration: none;color:unset;">
						<div class="card" style="padding:15px">
							<div class="row">
								<div class="col-4 text-center" style="vertical-align: middle">
									<img class="img-fluid" src="assets/img/flags/hanoi_flag.png" alt="" srcset="">
								</div>
								<div class="col-8 text-left">
									<div class="row">
										<div class="col-12">
											<span class="ser_ttl" style="font-size: 18px;">ผลหวยฮานอย</span>
										</div>
										<div class="col-12">
											<small>งวดล่าสุด</small>
											<p style="font-size: 16px;margin-bottom: 0px;" id="date-hanoi">รออัพเดท...</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-12 col-xs-12 serv ">
					<a href="result-huay/huay-hanoi-s.php" style="text-decoration: none;color:unset;">
						<div class="card" style="padding:15px">
							<div class="row">
								<div class="col-4 text-center" style="vertical-align: middle">
									<img class="img-fluid" src="assets/img/flags/hanoi_flag.png" alt="" srcset="">
								</div>
								<div class="col-8 text-left">
									<div class="row">
										<div class="col-12">
											<span class="ser_ttl" style="font-size: 18px;">ผลหวยฮานอย <b
													class="text-danger">พิเศษ</b></span>
										</div>
										<div class="col-12">
											<small>งวดล่าสุด</small>
											<p style="font-size: 16px;margin-bottom: 0px;" id="date-hanoi-s">รออัพเดท...</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-12 col-xs-12 serv ">
					<a href="result-huay/huay-hanoi-vip.php" style="text-decoration: none;color:unset;">
						<div class="card" style="padding:15px">
							<div class="row">
								<div class="col-4 text-center" style="vertical-align: middle">
									<img class="img-fluid" src="assets/img/flags/hanoi_flag.png" alt="" srcset="">
								</div>
								<div class="col-8 text-left">
									<div class="row">
										<div class="col-12">
											<span class="ser_ttl" style="font-size: 18px;">ผลหวยฮานอย <b
													class="text-warning">VIP</b></span>
										</div>
										<div class="col-12">
											<small>งวดล่าสุด</small>
											<p style="font-size: 16px;margin-bottom: 0px;" id="date-hanoi-vip">รออัพเดท...</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-12 col-xs-12 serv ">
					<a href="result-huay/huay-malay.php" style="text-decoration: none;color:unset;">
						<div class="card" style="padding:15px">
							<div class="row">
								<div class="col-4 text-center" style="vertical-align: middle">
									<img class="img-fluid" src="assets/img/flags/malay_flag.png" alt="" srcset="">
								</div>
								<div class="col-8 text-left">
									<div class="row">
										<div class="col-12">
											<span class="ser_ttl" style="font-size: 18px;">ผลหวยมาเลย์
										</div>
										<div class="col-12">
											<small>งวดล่าสุด</small>
											<p style="font-size: 16px;margin-bottom: 0px;" id="date-malay">รออัพเดท...</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>

  <section id="projects">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 col-md-12 cnt_head">
					<h2 class="s_head">หวยหุ้นอัพเดท</h2>
					<!-- <p class="h_body">รวมหวยหุ้นต่างๆ </p> -->
					<div class="row" id="StockBtn">
						<div class="col-md-12">
							<button class="btn btn-outline-danger btn-sm btn-block">กำลังโหลด กรุณารอสักครู่...</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="owl-carousel owl-theme pr_cnt" id="cardSlide">
						<center><h3>กำลังโหลดข้อมูล ...</h3></center>
					</div>
				</div>
			</div>
		</div>
	</section>

      <div>
        <img src="assets/img/ads.gif" alt="" class="w-100 my-2">
      </div>

    </div>
  
    <?php
include("include/footer.php")
?>
    
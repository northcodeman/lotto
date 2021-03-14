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
		<section>
			<div class="row mt-3 d-flex justify-content-center" style="--bs-gutter-x: 0;">
        <div class="col-12 col-sm-4 check-huay">
          <form action="" class="my-2" style="width: 80%; margin: 0 auto;">
					<div>
					<h3 class="text-white text-center">ตรวจหวย<span>
						<select id="huay-type" class="form-select form-select-sm" aria-label=".form-select-sm example"  style="color: #FF0000;">
							<option selected value="หวยลาว">หวยลาว</option>
							<option value="หวยลาวสตาร์">หวยลาวสตาร์</option>
							<option value="หวยลาว VIP">หวยลาว VIP</option>
							<option value="หวยฮานอย">หวยฮานอย</option>
							<option value="หวยฮานอยVIP">หวยฮานอยVIP</option>
							<option value="หวยฮานอยพิเศษ">หวยฮานอยพิเศษ</option>
							<option value="หวยมาเลย์">หวยมาเลย์</option>
							<option value="หุ้นเกาหลี">หุ้นเกาหลี</option>
							<option value="นิเคอิ รอบเช้า">นิเคอิรอบเช้า</option>
							<option value="นิเคอิ รอบบ่าย">นิเคอิรอบบ่าย</option>
							<option value="ฮั่งเส็ง รอบเช้า">ฮั่งเส็งรอบเช้า</option>
							<option value="ฮั่งเส็ง รอบบ่าย">ฮั่งเส็งรอบบ่าย</option>
							<option value="หุ้นจีน รอบเช้า">หุ้นจีนรอบเช้า</option>
							<option value="หุ้นจีน รอบบ่าย">หุ้นจีนรอบบ่าย</option>
							<option value="หุ้นไต้หวัน">หุ้นไต้หวัน</option>
							<option value="หุ้นสิงคโปร์">หุ้นสิงคโปร์</option>
							<option value="หุ้นสิงคโปร์ 4D">หุ้นสิงคโปร์4D</option>
							<option value="หุ้นอียิปต์">หุ้นอียิปต์</option>
							<option value="หุ้นเยอรมัน">หุ้นเยอรมัน</option>
							<option value="หุ้นอังกฤษ">หุ้นอังกฤษ</option>
							<option value="หุ้นรัสเซีย">หุ้นรัสเซีย</option>
							<option value="หุ้นอินเดีย">หุ้นอินเดีย</option>
							<option value="หุ้นดาวน์โจน">หุ้นดาวโจนส์</option>
						</select>
					</span></h3></div>
					<input id="huay" type="text" placeholder="กรอกเลขหวย" maxlength="6" pattern="[0-9]*" style="border-radius: 50px; text-align: center; width: 100%;">
          </form>
          <button class="check-huay-btn" onclick="checkhuay()">ยืนยัน</button>
        </div>
      </div>
		</section>

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
							<div class="row head-huay-card">
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
							<div class="row bg-huay-card">
								<div class="col-12">
									<div class="row pb-5">
										<div class="col-12"><p class="huay-title-in-card">รางวัลที่1</p></div>
										<div class="col-12 d-flex justify-content-center">
											<img id="th-1-1" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
											<img id="th-1-2" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
											<img id="th-1-3" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
											<img id="th-1-4" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
											<img id="th-1-5" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
											<img id="th-1-6" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
										</div>
										<div class="col-4">
											<p class="huay-title-in-card">เลขท้าย2</p>
											<div class="row">
												<div class="col-12 d-flex justify-content-center">
													<img id="th-2-1" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
													<img id="th-2-2" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
												</div>
											</div>
										</div>
										<div class="col-4">
											<p class="huay-title-in-card">3ตัวหน้า</p>
											<div class="row">
												<div class="col-12 d-flex justify-content-center">
													<img id="th-3-1-1" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
													<img id="th-3-1-2" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
													<img id="th-3-1-3" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
												</div>
											</div>
										</div>
										<div class="col-4">
											<p class="huay-title-in-card">3 ตัวท้าย</p>
											<div class="row">
												<div class="col-12 d-flex justify-content-center">
													<img id="th-3-2-1" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
													<img id="th-3-2-2" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
													<img id="th-3-2-3" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
												</div>
											</div>
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
							<div class="row head-huay-card">
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
							<div class="row bg-huay-card">
								<div class="col-12">
									<div class="row pb-5">
										<div class="col-12"><p class="huay-title-in-card">รางวัล 5 ตัวตรง</p></div>
										<div class="col-12 d-flex justify-content-center">
											<img id="lo-1-1" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
											<img id="lo-1-2" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
											<img id="lo-1-3" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
											<img id="lo-1-4" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
											<img id="lo-1-5" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
										</div>
										<div class="col-5">
											<p class="huay-title-in-card">4 ตัวตรง</p>
											<div class="row">
												<div class="col-12 d-flex justify-content-center">
													<img id="lo-2-1" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
													<img id="lo-2-2" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
													<img id="lo-2-3" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
													<img id="lo-2-4" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
												</div>
											</div>
										</div>
										<div class="col-4">
											<p class="huay-title-in-card">3 ตัวบน</p>
											<div class="row">
												<div class="col-12 d-flex justify-content-center">
													<img id="lo-3-1" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
													<img id="lo-3-2" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
													<img id="lo-3-3" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
												</div>
											</div>
										</div>
										<div class="col-3">
											<p class="huay-title-in-card">2 ตัวบน</p>
											<div class="row">
												<div class="col-12 d-flex justify-content-center">
													<img id="lo-2-1-1" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
													<img id="lo-2-1-2" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
												</div>
											</div>
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
							<div class="row head-huay-card">
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
							<div class="row bg-huay-card">
								<div class="col-12">
									<div class="row pb-5">
										<div class="col-12"><p class="huay-title-in-card">รางวัล 4 ตัวตรง</p></div>
										<div class="col-12 d-flex justify-content-center">
											<img id="lov-1-1" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
											<img id="lov-1-2" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
											<img id="lov-1-3" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
											<img id="lov-1-4" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
										</div>
										<div class="col-5">
											<p class="huay-title-in-card">เลขท้าย 2 ตัว</p>
											<div class="row">
												<div class="col-12 d-flex justify-content-center">
													<img id="lov-2-1" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
													<img id="lov-2-2" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
												</div>
											</div>
										</div>
										<div class="col-7">
											<p class="huay-title-in-card">เลขท้าย 3 ตัว</p>
											<div class="row">
												<div class="col-12 d-flex justify-content-center">
													<img id="lov-3-1" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
													<img id="lov-3-2" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
													<img id="lov-3-3" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
												</div>
											</div>
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
							<div class="row head-huay-card">
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
							<div class="row bg-huay-card">
								<div class="col-12">
									<div class="row pb-5">
									<div class="col-12"><p class="huay-title-in-card">รางวัล 4 ตัวตรง</p></div>
										<div class="col-12 d-flex justify-content-center">
											<img id="los-1-1" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
											<img id="los-1-2" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
											<img id="los-1-3" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
											<img id="los-1-4" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
										</div>
										<div class="col-5">
											<p class="huay-title-in-card">เลขท้าย 2 ตัว</p>
											<div class="row">
												<div class="col-12 d-flex justify-content-center">
													<img id="los-2-1" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
													<img id="los-2-2" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
												</div>
											</div>
										</div>
										<div class="col-7">
											<p class="huay-title-in-card">เลขท้าย 3 ตัว</p>
											<div class="row">
												<div class="col-12 d-flex justify-content-center">
													<img id="los-3-1" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
													<img id="los-3-2" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
													<img id="los-3-3" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
												</div>
											</div>
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
							<div class="row head-huay-card">
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
							<div class="row bg-huay-card">
								<div class="col-12">
									<div class="row pb-5">
										<div class="col-12"><p class="huay-title-in-card">รางวัล 4 ตัวตรง</p></div>
										<div class="col-12 d-flex justify-content-center">
											<img id="vn-1-1" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
											<img id="vn-1-2" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
											<img id="vn-1-3" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
											<img id="vn-1-4" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
										</div>
										<div class="col-3">
											<p class="huay-title-in-card">2 ตัวบน</p>
											<div class="row">
												<div class="col-12 d-flex justify-content-center">
													<img id="vn-2-1-1" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
													<img id="vn-2-1-2" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
												</div>
											</div>
										</div>
										<div class="col-3">
											<p class="huay-title-in-card">2ตัวล่าง</p>
											<div class="row">
												<div class="col-12 d-flex justify-content-center">
													<img id="vn-2-2-1" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
													<img id="vn-2-2-2" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
												</div>
											</div>
										</div>
										<div class="col-6">
											<p class="huay-title-in-card">เลขท้าย 3 ตัวบน</p>
											<div class="row">
												<div class="col-12 d-flex justify-content-center">
													<img id="vn-3-1" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
													<img id="vn-3-2" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
													<img id="vn-3-3" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
												</div>
											</div>
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
							<div class="row head-huay-card">
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
							<div class="row bg-huay-card">
								<div class="col-12">
									<div class="row pb-5">
									<div class="col-12"><p class="huay-title-in-card">รางวัล 4 ตัวตรง</p></div>
										<div class="col-12 d-flex justify-content-center">
											<img id="vns-1-1" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
											<img id="vns-1-2" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
											<img id="vns-1-3" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
											<img id="vns-1-4" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
										</div>
										<div class="col-3">
											<p class="huay-title-in-card">2 ตัวบน</p>
											<div class="row">
												<div class="col-12 d-flex justify-content-center">
													<img id="vns-2-1-1" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
													<img id="vns-2-1-2" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
												</div>
											</div>
										</div>
										<div class="col-3">
											<p class="huay-title-in-card">2ตัวล่าง</p>
											<div class="row">
												<div class="col-12 d-flex justify-content-center">
													<img id="vns-2-2-1" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
													<img id="vns-2-2-2" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
												</div>
											</div>
										</div>
										<div class="col-6">
											<p class="huay-title-in-card">เลขท้าย 3 ตัวบน</p>
											<div class="row">
												<div class="col-12 d-flex justify-content-center">
													<img id="vns-3-1" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
													<img id="vns-3-2" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
													<img id="vns-3-3" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
												</div>
											</div>
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
							<div class="row head-huay-card">
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
							<div class="row bg-huay-card">
								<div class="col-12">
									<div class="row pb-5">
										<div class="col-12"><p class="huay-title-in-card">รางวัล 4 ตัวตรง</p></div>
										<div class="col-12 d-flex justify-content-center">
											<img id="vnp-1-1" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
											<img id="vnp-1-2" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
											<img id="vnp-1-3" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
											<img id="vnp-1-4" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
										</div>
										<div class="col-3">
											<p class="huay-title-in-card">2 ตัวบน</p>
											<div class="row">
												<div class="col-12 d-flex justify-content-center">
													<img id="vnp-2-1-1" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
													<img id="vnp-2-1-2" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
												</div>
											</div>
										</div>
										<div class="col-3">
											<p class="huay-title-in-card">2ตัวล่าง</p>
											<div class="row">
												<div class="col-12 d-flex justify-content-center">
													<img id="vnp-2-2-1" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
													<img id="vnp-2-2-2" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
												</div>
											</div>
										</div>
										<div class="col-6">
											<p class="huay-title-in-card">เลขท้าย 3 ตัวบน</p>
											<div class="row">
												<div class="col-12 d-flex justify-content-center">
													<img id="vnp-3-1" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
													<img id="vnp-3-2" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
													<img id="vnp-3-3" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
												</div>
											</div>
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
							<div class="row head-huay-card">
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
							<div class="row bg-huay-card">
								<div class="col-12">
									<div class="row pb-5">
									<div class="col-12"><p class="huay-title-in-card">รางวัล 4 ตัวตรง</p></div>
										<div class="col-12 d-flex justify-content-center">
											<img id="ml-1-1" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
											<img id="ml-1-2" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
											<img id="ml-1-3" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
											<img id="ml-1-4" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
										</div>
										<div class="col-3">
											<p class="huay-title-in-card">2 ตัวบน</p>
											<div class="row">
												<div class="col-12 d-flex justify-content-center">
													<img id="ml-2-1-1" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
													<img id="ml-2-1-2" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
												</div>
											</div>
										</div>
										<div class="col-3">
											<p class="huay-title-in-card">2ตัวล่าง</p>
											<div class="row">
												<div class="col-12 d-flex justify-content-center">
													<img id="ml-2-2-1" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
													<img id="ml-2-2-2" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
												</div>
											</div>
										</div>
										<div class="col-6">
											<p class="huay-title-in-card">เลขท้าย 3 ตัวบน</p>
											<div class="row">
												<div class="col-12 d-flex justify-content-center">
													<img id="ml-3-1" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
													<img id="ml-3-2" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
													<img id="ml-3-3" src="assets/img/number/num-0.png" alt="" style="width: auto; height: 100%">
												</div>
											</div>
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

		<div id="successModal" class="modal fade">
			<div class="modal-dialog modal-sm modal-dialog-centered">
					<div class="modal-content bg-dark text-light">
							<div class="modal-header border-secondary">
									<h4 id="successTitle" class="modal-title w-100"></h4>
							</div>
							<div id="successBody" class="modal-body">
							</div>
							<div class="modal-footer">
									<button class="btn btn-success btn-block" data-dismiss="modal" onclick="closePopup()">ปิด</button>
							</div>
					</div>
			</div>
		</div>
    <?php
include("include/footer.php")
?>
    
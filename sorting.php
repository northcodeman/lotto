<?php
if (isset($_GET['lotto'])) {
    $datatoarray = json_decode(file_get_contents("https://www.bauto28.com/latest-date.php"), true);
    if ($_GET['lotto'] == '0') { // ไทย 0
        $huay = 0;
        // print_r($datatoarray[$huay]["prize1"]);
        $number = $datatoarray[$huay]["prize1"];
        @$number2 = $datatoarray[$huay]["prize2"][0];
        if (!empty($number) and !empty($number2)) {
            $prize1  = array_map('intval', str_split($datatoarray[$huay]["prize1"]));

?>
            <div class="col-12">
                <p class="huay-title-in-card">รางวัลที่1</p>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <img id="th-1-1" src="assets/img/number/num-<?= $prize1[0] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="th-1-2" src="assets/img/number/num-<?= $prize1[1] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="th-1-3" src="assets/img/number/num-<?= $prize1[2] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="th-1-4" src="assets/img/number/num-<?= $prize1[3] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="th-1-5" src="assets/img/number/num-<?= $prize1[4] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="th-1-6" src="assets/img/number/num-<?= $prize1[5] ?>.png" alt="" style="width: 30px; height: 100%">
            </div>
            <div class="col-4">
                <p class="huay-title-in-card">เลขท้าย2</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="th-2-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="th-2-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-4">
                <p class="huay-title-in-card">3ตัวหน้า</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="th-3-1-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="th-3-1-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="th-3-1-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-4">
                <p class="huay-title-in-card">3 ตัวท้าย</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="th-3-2-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="th-3-2-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="th-3-2-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
        <?php
        } else {
        ?>
            <div class="col-12">
                <p class="huay-title-in-card">รางวัลที่1</p>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <img id="th-1-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="th-1-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="th-1-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="th-1-4" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="th-1-5" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="th-1-6" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
            </div>
            <div class="col-4">
                <p class="huay-title-in-card">เลขท้าย2</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="th-2-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="th-2-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-4">
                <p class="huay-title-in-card">3ตัวหน้า</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="th-3-1-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="th-3-1-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="th-3-1-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-4">
                <p class="huay-title-in-card">3 ตัวท้าย</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="th-3-2-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="th-3-2-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="th-3-2-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>

        <?php
        } // end if



    } elseif ($_GET['lotto'] == '1') { // หวยลาว 5
        $huay = 5;
        // print_r($datatoarray[$huay]);
        $number = $datatoarray[$huay]["prize1"];
        @$number2 = $datatoarray[$huay]["prize2"][0];
        if (!empty($number) and !empty($number2)) {
            $prize1  = array_map('intval', str_split($datatoarray[$huay]["prize1"])); ?>
            <div class="col-12">
                <p class="huay-title-in-card">รางวัล 5 ตัวตรง</p>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <img id="lo-1-1" src="assets/img/number/num-<?= $prize1[0] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="lo-1-2" src="assets/img/number/num-<?= $prize1[1] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="lo-1-3" src="assets/img/number/num-<?= $prize1[2] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="lo-1-4" src="assets/img/number/num-<?= $prize1[3] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="lo-1-5" src="assets/img/number/num-<?= $prize1[4] ?>.png" alt="" style="width: 30px; height: 100%">
            </div>
            <div class="col-5">
                <p class="huay-title-in-card">4 ตัวตรง</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="lo-2-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="lo-2-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="lo-2-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="lo-2-4" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-4">
                <p class="huay-title-in-card">3 ตัวบน</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="lo-3-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="lo-3-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="lo-3-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-3">
                <p class="huay-title-in-card">2 ตัวบน</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="lo-2-1-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="lo-2-1-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
        <?php
        } else { ?>

            <div class="col-12">
                <p class="huay-title-in-card">รางวัล 5 ตัวตรง</p>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <img id="lo-1-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="lo-1-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="lo-1-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="lo-1-4" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="lo-1-5" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
            </div>
            <div class="col-5">
                <p class="huay-title-in-card">4 ตัวตรง</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="lo-2-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="lo-2-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="lo-2-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="lo-2-4" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-4">
                <p class="huay-title-in-card">3 ตัวบน</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="lo-3-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="lo-3-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="lo-3-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-3">
                <p class="huay-title-in-card">2 ตัวบน</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="lo-2-1-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="lo-2-1-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
        <?php
        } // end if


    } elseif ($_GET['lotto'] == '2') { // หวยลาว vip 7
        $huay = 7;
        // print_r($datatoarray[$huay]);
        $number = $datatoarray[$huay]["prize1"];
        @$number2 = $datatoarray[$huay]["prize2"][0];
        if (!empty($number) and !empty($number2)) {
            $prize1  = array_map('intval', str_split($datatoarray[$huay]["prize1"]));
            $prize2_1  = array_map('intval', str_split($datatoarray[$huay]["prize2"][0]));
            $prize2_2  = array_map('intval', str_split($datatoarray[$huay]["prize2"][1]));
        ?>
            <div class="col-12">
                <p class="huay-title-in-card">รางวัล 4 ตัวตรง</p>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <img id="lov-1-1" src="assets/img/number/num-<?= $prize1[0] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="lov-1-2" src="assets/img/number/num-<?= $prize1[1] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="lov-1-3" src="assets/img/number/num-<?= $prize1[2] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="lov-1-4" src="assets/img/number/num-<?= $prize1[3] ?>.png" alt="" style="width: 30px; height: 100%">
            </div>
            <div class="col-5">
                <p class="huay-title-in-card">เลขท้าย 2 ตัว</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="lov-2-1" src="assets/img/number/num-<?= $prize2_1[0] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="lov-2-2" src="assets/img/number/num-<?= $prize2_1[1] ?>.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-7">
                <p class="huay-title-in-card">เลขท้าย 3 ตัว</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="lov-3-1" src="assets/img/number/num-<?= $prize2_2[0] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="lov-3-2" src="assets/img/number/num-<?= $prize2_2[1] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="lov-3-3" src="assets/img/number/num-<?= $prize2_2[2] ?>.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
        <?php
        } else { ?>

            <div class="col-12">
                <p class="huay-title-in-card">รางวัล 4 ตัวตรง</p>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <img id="lov-1-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="lov-1-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="lov-1-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="lov-1-4" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
            </div>
            <div class="col-5">
                <p class="huay-title-in-card">เลขท้าย 2 ตัว</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="lov-2-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="lov-2-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-7">
                <p class="huay-title-in-card">เลขท้าย 3 ตัว</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="lov-3-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="lov-3-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="lov-3-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
        <?php

        } // end if


    } elseif ($_GET['lotto'] == '3') { // หวยลาว star 6
        $huay = 6;
        // print_r($datatoarray[$huay]);
        $number = $datatoarray[$huay]["prize1"];
        @$number2 = $datatoarray[$huay]["prize2"][0];
        if (!empty($number) and !empty($number2)) {
            $prize1  = array_map('intval', str_split($datatoarray[$huay]["prize1"]));
            $prize2_1  = array_map('intval', str_split($datatoarray[$huay]["prize2"][0]));
            $prize2_2  = array_map('intval', str_split($datatoarray[$huay]["prize2"][1]));
        ?>
            <div class="col-12">
                <p class="huay-title-in-card">รางวัล 4 ตัวตรง</p>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <img id="los-1-1" src="assets/img/number/num-<?= $prize1[0] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="los-1-2" src="assets/img/number/num-<?= $prize1[1] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="los-1-3" src="assets/img/number/num-<?= $prize1[2] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="los-1-4" src="assets/img/number/num-<?= $prize1[3] ?>.png" alt="" style="width: 30px; height: 100%">
            </div>
            <div class="col-5">
                <p class="huay-title-in-card">เลขท้าย 2 ตัว</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="los-2-1" src="assets/img/number/num-<?= $prize2_1[0] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="los-2-2" src="assets/img/number/num-<?= $prize2_1[1] ?>.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-7">
                <p class="huay-title-in-card">เลขท้าย 3 ตัว</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="los-3-1" src="assets/img/number/num-<?= $prize2_2[0] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="los-3-2" src="assets/img/number/num-<?= $prize2_2[1] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="los-3-3" src="assets/img/number/num-<?= $prize2_2[2] ?>.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
        <?php
        } else { ?>
            <div class="col-12">
                <p class="huay-title-in-card">รางวัล 4 ตัวตรง</p>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <img id="los-1-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="los-1-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="los-1-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="los-1-4" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
            </div>
            <div class="col-5">
                <p class="huay-title-in-card">เลขท้าย 2 ตัว</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="los-2-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="los-2-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-7">
                <p class="huay-title-in-card">เลขท้าย 3 ตัว</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="los-3-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="los-3-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="los-3-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
        <?php
        } // end if


    } elseif ($_GET['lotto'] == '4') { // หวยฮานอย 4
        $huay = 4;
        // print_r($datatoarray[$huay]);
        $number = $datatoarray[$huay]["prize1"];
        @$number2 = $datatoarray[$huay]["prize2"][0];
        if (!empty($number) and !empty($number2)) {
            $prize1  = array_map('intval', str_split($datatoarray[$huay]["prize1"]));
            $prize2_1  = array_map('intval', str_split($datatoarray[$huay]["prize2"][0]));
            $prize2_2  = array_map('intval', str_split($datatoarray[$huay]["prize2"][1]));
            $prize2_3  = array_map('intval', str_split($datatoarray[$huay]["prize2"][2]));
        ?>
            <div class="col-12">
                <p class="huay-title-in-card">รางวัล 4 ตัวตรง</p>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <img id="vn-1-1" src="assets/img/number/num-<?= $prize1[0] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-2" src="assets/img/number/num-<?= $prize1[1] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-3" src="assets/img/number/num-<?= $prize1[2] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-4" src="assets/img/number/num-<?= $prize1[3] ?>.png" alt="" style="width: 30px; height: 100%">
            </div>
            <div class="col-3">
                <p class="huay-title-in-card">2 ตัวบน</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-2-1-1" src="assets/img/number/num-<?= $prize2_2[0] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-2-1-2" src="assets/img/number/num-<?= $prize2_2[1] ?>.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-3">
                <p class="huay-title-in-card">2ตัวล่าง</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-2-2-1" src="assets/img/number/num-<?= $prize2_3[0] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-2-2-2" src="assets/img/number/num-<?= $prize2_3[1] ?>.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-6">
                <p class="huay-title-in-card">เลขท้าย 3 ตัวบน</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-3-1" src="assets/img/number/num-<?= $prize2_1[0] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-3-2" src="assets/img/number/num-<?= $prize2_1[1] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-3-3" src="assets/img/number/num-<?= $prize2_1[2] ?>.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
        <?php
        } else { ?>
            <div class="col-12">
                <p class="huay-title-in-card">รางวัล 4 ตัวตรง</p>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <img id="vn-1-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-4" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
            </div>
            <div class="col-3">
                <p class="huay-title-in-card">2 ตัวบน</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-2-1-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-2-1-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-3">
                <p class="huay-title-in-card">2ตัวล่าง</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-2-2-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-2-2-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-6">
                <p class="huay-title-in-card">เลขท้าย 3 ตัวบน</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-3-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-3-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-3-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
        <?php
        } // end if


    } elseif ($_GET['lotto'] == '5') { // หวยฮานอยพิเศษ 3
        $huay = 3;
        // print_r($datatoarray[$huay]);
        $number = $datatoarray[$huay]["prize1"];
        @$number2 = $datatoarray[$huay]["prize2"][0];
        if (!empty($number) and !empty($number2)) {
            $prize1  = array_map('intval', str_split($datatoarray[$huay]["prize1"]));
            $prize2_1  = array_map('intval', str_split($datatoarray[$huay]["prize2"][0]));
            $prize2_2  = array_map('intval', str_split($datatoarray[$huay]["prize2"][1]));
            $prize2_3  = array_map('intval', str_split($datatoarray[$huay]["prize2"][2]));
        ?>
            <div class="col-12">
                <p class="huay-title-in-card">รางวัล 4 ตัวตรง</p>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <img id="vn-1-1" src="assets/img/number/num-<?= $prize1[0] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-2" src="assets/img/number/num-<?= $prize1[1] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-3" src="assets/img/number/num-<?= $prize1[2] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-4" src="assets/img/number/num-<?= $prize1[3] ?>.png" alt="" style="width: 30px; height: 100%">
            </div>
            <div class="col-3">
                <p class="huay-title-in-card">2 ตัวบน</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-2-1-1" src="assets/img/number/num-<?= $prize2_2[0] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-2-1-2" src="assets/img/number/num-<?= $prize2_2[1] ?>.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-3">
                <p class="huay-title-in-card">2ตัวล่าง</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-2-2-1" src="assets/img/number/num-<?= $prize2_3[0] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-2-2-2" src="assets/img/number/num-<?= $prize2_3[1] ?>.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-6">
                <p class="huay-title-in-card">เลขท้าย 3 ตัวบน</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-3-1" src="assets/img/number/num-<?= $prize2_1[0] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-3-2" src="assets/img/number/num-<?= $prize2_1[1] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-3-3" src="assets/img/number/num-<?= $prize2_1[2] ?>.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
        <?php
        } else { ?>
            <div class="col-12">
                <p class="huay-title-in-card">รางวัล 4 ตัวตรง</p>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <img id="vn-1-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-4" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
            </div>
            <div class="col-3">
                <p class="huay-title-in-card">2 ตัวบน</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-2-1-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-2-1-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-3">
                <p class="huay-title-in-card">2ตัวล่าง</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-2-2-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-2-2-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-6">
                <p class="huay-title-in-card">เลขท้าย 3 ตัวบน</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-3-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-3-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-3-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
        <?php
        } // end if


    } elseif ($_GET['lotto'] == '6') { // หวยฮานอย VIP 2
        $huay = 2;
        // print_r($datatoarray[$huay]);
        $number = $datatoarray[$huay]["prize1"];
        @$number2 = $datatoarray[$huay]["prize2"][0];
        if (!empty($number) and !empty($number2)) {
            $prize1  = array_map('intval', str_split($datatoarray[$huay]["prize1"]));
            $prize2_1  = array_map('intval', str_split($datatoarray[$huay]["prize2"][0]));
            $prize2_2  = array_map('intval', str_split($datatoarray[$huay]["prize2"][1]));
            $prize2_3  = array_map('intval', str_split($datatoarray[$huay]["prize2"][2]));
        ?>
            <div class="col-12">
                <p class="huay-title-in-card">รางวัล 4 ตัวตรง</p>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <img id="vn-1-1" src="assets/img/number/num-<?= $prize1[0] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-2" src="assets/img/number/num-<?= $prize1[1] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-3" src="assets/img/number/num-<?= $prize1[2] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-4" src="assets/img/number/num-<?= $prize1[3] ?>.png" alt="" style="width: 30px; height: 100%">
            </div>
            <div class="col-3">
                <p class="huay-title-in-card">2 ตัวบน</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-2-1-1" src="assets/img/number/num-<?= $prize2_2[0] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-2-1-2" src="assets/img/number/num-<?= $prize2_2[1] ?>.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-3">
                <p class="huay-title-in-card">2ตัวล่าง</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-2-2-1" src="assets/img/number/num-<?= $prize2_3[0] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-2-2-2" src="assets/img/number/num-<?= $prize2_3[1] ?>.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-6">
                <p class="huay-title-in-card">เลขท้าย 3 ตัวบน</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-3-1" src="assets/img/number/num-<?= $prize2_1[0] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-3-2" src="assets/img/number/num-<?= $prize2_1[1] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-3-3" src="assets/img/number/num-<?= $prize2_1[2] ?>.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
        <?php
        } else { ?>
            <div class="col-12">
                <p class="huay-title-in-card">รางวัล 4 ตัวตรง</p>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <img id="vn-1-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-4" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
            </div>
            <div class="col-3">
                <p class="huay-title-in-card">2 ตัวบน</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-2-1-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-2-1-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-3">
                <p class="huay-title-in-card">2ตัวล่าง</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-2-2-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-2-2-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-6">
                <p class="huay-title-in-card">เลขท้าย 3 ตัวบน</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-3-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-3-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-3-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
<?php
        } // end if


    } elseif ($_GET['lotto'] == '7') { // หวยมาเลย์ 1
        $huay = 1;
        // print_r($datatoarray[$huay]);
        $number = $datatoarray[$huay]["prize1"];
        @$number2 = $datatoarray[$huay]["prize2"][0];
        if (!empty($number) and !empty($number2)) {
            $prize1  = array_map('intval', str_split($datatoarray[$huay]["prize1"]));
            $prize2_1  = array_map('intval', str_split($datatoarray[$huay]["prize2"][0]));
            $prize2_2  = array_map('intval', str_split($datatoarray[$huay]["prize2"][1]));
            $prize2_3  = array_map('intval', str_split($datatoarray[$huay]["prize2"][2]));
        ?>
            <div class="col-12">
                <p class="huay-title-in-card">รางวัล 4 ตัวตรง</p>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <img id="vn-1-1" src="assets/img/number/num-<?= $prize1[0] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-2" src="assets/img/number/num-<?= $prize1[1] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-3" src="assets/img/number/num-<?= $prize1[2] ?>.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-4" src="assets/img/number/num-<?= $prize1[3] ?>.png" alt="" style="width: 30px; height: 100%">
            </div>
            <div class="col-3">
                <p class="huay-title-in-card">2 ตัวบน</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-2-1-1" src="assets/img/number/num-<?= $prize2_2[0] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-2-1-2" src="assets/img/number/num-<?= $prize2_2[1] ?>.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-3">
                <p class="huay-title-in-card">2ตัวล่าง</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-2-2-1" src="assets/img/number/num-<?= $prize2_3[0] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-2-2-2" src="assets/img/number/num-<?= $prize2_3[1] ?>.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-6">
                <p class="huay-title-in-card">เลขท้าย 3 ตัวบน</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-3-1" src="assets/img/number/num-<?= $prize2_1[0] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-3-2" src="assets/img/number/num-<?= $prize2_1[1] ?>.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-3-3" src="assets/img/number/num-<?= $prize2_1[2] ?>.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
        <?php
        } else { ?>
            <div class="col-12">
                <p class="huay-title-in-card">รางวัล 4 ตัวตรง</p>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <img id="vn-1-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                <img id="vn-1-4" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
            </div>
            <div class="col-3">
                <p class="huay-title-in-card">2 ตัวบน</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-2-1-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-2-1-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-3">
                <p class="huay-title-in-card">2ตัวล่าง</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-2-2-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-2-2-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
            <div class="col-6">
                <p class="huay-title-in-card">เลขท้าย 3 ตัวบน</p>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="vn-3-1" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-3-2" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                        <img id="vn-3-3" src="assets/img/number/num-0.png" alt="" style="width: 30px; height: 100%">
                    </div>
                </div>
            </div>
<?php
        } // end if


    }
} // isset lotto



?>
<?php
  $image1 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/90deg/gate_images2/image1.svg");
  $image2 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/90deg/gate_images2/image2.svg");
  $image3 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/90deg/gate_images2/image3.svg");
  $image4 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/90deg/gate_images2/image4.svg");
  $image5 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/90deg/gate_images2/image5.svg");
  $image6 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/90deg/gate_images2/image6.svg");
  $css    = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/styles/triangular/90deg/gate2.css");
  $a1 = '';
  $a2 = '';
  $b2 = '';

  if($wicket == 'on') {
  $start_gate1 = 96;
  $pillar1 = 155;
  $image_width1 = 1022.28;
  $result_left1 = $image_width1/$manual_a*$wicket_left+$start_gate1;

  $start_gate2 = 68;
  $pillar2 = 155;
  $image_width2 = 1062.98;
  $result_left2 = $image_width2/$manual_a*$wicket_left+$start_gate2;
  }

  if ($material == "brick") {
    $a3 = $gate_opening + 380;
  } else {
    $a3 = $gate_opening + 290;
  }
  if ( $manual_a ) {
    $a = $manual_a;
  } else {
    $a = round(($a3 + ($a3 / 2) / 1.25) / 100) * 100;
  }
  $a1 = $a3 - 111;
  $a2 = $a;
  $a4 = $a - $a3 + 60;
  $b = $gate_height - $clearance_under_gate;
  if ( $guide == "60x70" ) {
    $b1 = $b - 102;
  } else if ( $guide == "85x95" ) {
    $b1 = $b - 127;
  } else if ( $guide == "72x80" ) {
    $b1 = $b - 114;
  }

  $b1_1 = $b1;

  $b2 = $b1 + 40;
  $b4 = $gate_height + 20;
  $b5 = $gate_height;
  $c = $a3 - 140;
  $c1 = ($a3 - 230) / 4;
  $d = ($b1 - 128) / 2;
  $g = round(100 + (sqrt((($b1 + 42) * ($b1 + 42)) + ($a - $a3) * ($a - $a3))));
  $g1 = round(100 + (sqrt(($b1 - 98) * ($b1 - 98) + (($c - 60) / 3 * ($c - 60) / 3))) / 2);
  if ($material == "brick") {
    $l1 = $a - $gate_opening - 580;
    $l2 = $gate_opening + 780;
  } else {
    $l1 = $a - $gate_opening - 530;
    $l2 = $gate_opening + 730;
  }
  $r1 = 300;
  $r2 = $gate_height - 300;
  $a5 = $l1 + 450;
  $a6 = $l1 + 150;
  $a7 = 900;
  $a8 = 80;

  $clearance_under_gate = "<font style='color: red; font-weight: 700;'>" . $clearance_under_gate . "</font>";
  $a = "<font style='color: red; font-weight: 700;'>" . $a . "</font>";
  $a1 = "<font style='color: red; font-weight: 700;'>" . $a1 . "</font>";
  $a2 = "<font style='color: red; font-weight: 700;'>" . $a2 . "</font>";
  $a3 = "<font style='color: red; font-weight: 700;'>" . $a3 . "</font>";
  $a4 = "<font style='color: red; font-weight: 700;'>" . $a4 . "</font>";
  $a5 = "<font style='color: red; font-weight: 700;'>" . $a5 . "</font>";
  $a6 = "<font style='color: red; font-weight: 700;'>" . $a6 . "</font>";
  $a7 = "<font style='color: red; font-weight: 700;'>" . $a7 . "</font>";
  $a8 = "<font style='color: red; font-weight: 700;'>" . $a8 . "</font>";
  $b =  "<font style='color: red; font-weight: 700;'>" . $b . "</font>";
  $b1 = "<font style='color: red; font-weight: 700;'>" . $b1 . "</font>";
  $b2 = "<font style='color: red; font-weight: 700;'>" . $b2 . "</font>";
  $b4 = "<font style='color: red; font-weight: 700;'>" . $b4 . "</font>";
  $b5 = "<font style='color: red; font-weight: 700;'>" . $b5 . "</font>";
  $c = "<font style='color: red; font-weight: 700;'>" . $c . "</font>";
  $c1 = "<font style='color: red; font-weight: 700;'>" . $c1 . "</font>";
  $d = "<font style='color: red; font-weight: 700;'>" . $d . "</font>";
  $g = "<font style='color: red; font-weight: 700;'>" . $g . "</font>";
  $g1 = "<font style='color: red; font-weight: 700;'>" . $g1 . "</font>";
  $l1 = "<font style='color: red; font-weight: 700;'>" . $l1 . "</font>";
  $l2 = "<font style='color: red; font-weight: 700;'>" . $l2 . "</font>";
  $a3 = "<font style='color: red; font-weight: 700;'>" . $a3 . "</font>";
  $a = "<font style='color: red; font-weight: 700;'>" . $a . "</font>";
  $r1 = "<font style='color: red; font-weight: 700;'>" . $r1 . "</font>";
  $r2 = "<font style='color: red; font-weight: 700;'>" . $r2 . "</font>";
?>

<?php if($wicket == 'on') { ?>
<style type="text/css">
.svg-container {
    position: relative;
    width: 100%!important; /* Задайте ширину контейнера */
    height: 100%!important; /* Задайте высоту контейнера */
}

.svg-base {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}

.svg-overlay {
    position: absolute;
    top: 13.8%;
    left: <?=$result_left1?>px;
    width: 176.9px!important;
    height: 307px!important;
    z-index: 2;
}

.svg-line1 {
	position: absolute;
	background-color: gray;
    top: 12.5641%;
    left: <?=($result_left1+25)?>px;
    width: 127.0px!important;
    height: 1px!important;
    z-index: 3;
}

.svg-line2 {
	position: absolute;
	background-color: gray;
    top: 10.01%;
    left: <?=($result_left1+25)?>px;
    width: 1px!important;
    height: 50px!important;
    z-index: 3;
}

.svg-line3 {
	position: absolute;
	background-color: gray;
    top: 10.01%;
    left: <?=($result_left1+8+143)?>px;
    width: 1px!important;
    height: 50px!important;
    z-index: 3;
}

.svg-text1 {
	position: absolute;
	background-color: transparent;
	color: red;
	font-weight: 700;
    top: 10.71%;
    left: <?=($result_left1+25)?>px;
    width: 127.0px!important;
    z-index: 3;
    text-align: center;
}

.svg-line4 {
	position: absolute;
	background-color: gray;
    top: 65.71%;
    left: <?=($start_gate1)?>px;
    width: <?=(($result_left1)-76)?>px!important;
    height: 1px!important;
    z-index: 3;
}

.svg-line5 {
	position: absolute;
	background-color: gray;
    top: 50.71%;
    left: <?=($start_gate1)?>px;
    width: 1px!important;
    height: 150px!important;
    z-index: 3;
}

.svg-line6 {
	position: absolute;
	background-color: gray;
    top: 50.71%;
    left: <?=($result_left1+20)?>px;
    width: 1px!important;
    height: 150px!important;
    z-index: 3;
}

.svg-text2 {
	position: absolute;
	background-color: transparent;
	color: red;
	font-weight: 700;
    top: 63.71%;
    left: <?=($start_gate1)?>px;
    width: <?=(($result_left1)-76)?>px!important;
    z-index: 3;
    text-align: center;
}
</style>
<style type="text/css">
.svg-base2 {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}

.svg-overlay2 {
    position: absolute;
    top: 15.2%;
    left: <?=$result_left2?>px;
    width: 188.9px!important;
    height: 330px!important;
    z-index: 2;
}

.svg-line2_1 {
	position: absolute;
	background-color: gray;
    top: 13.71%;
    left: <?=($result_left2+27)?>px;
    width: 135.0px!important;
    height: 1px!important;
    z-index: 3;
}

.svg-line2_2 {
	position: absolute;
	background-color: gray;
    top: 12.01%;
    left: <?=($result_left2+27)?>px;
    width: 1px!important;
    height: 50px!important;
    z-index: 3;
}

.svg-line2_3 {
	position: absolute;
	background-color: gray;
    top: 12.01%;
    left: <?=($result_left2+5+156)?>px;
    width: 1px!important;
    height: 50px!important;
    z-index: 3;
}

.svg-text2_1 {
	position: absolute;
	background-color: transparent;
	color: red;
	font-weight: 700;
    top: 12.31%;
    left: <?=($result_left2+27)?>px;
    width: 135.0px!important;
    z-index: 3;
    text-align: center;
}

.svg-line2_4 {
	position: absolute;
	background-color: gray;
    top: 67.71%;
    left: <?=($start_gate2)?>px;
    width: <?=(($result_left2)-66)?>px!important;
    height: 1px!important;
    z-index: 3;
}

.svg-line2_5 {
	position: absolute;
	background-color: gray;
    top: 49.71%;
    left: <?=($start_gate2)?>px;
    width: 1px!important;
    height: 160px!important;
    z-index: 3;
}

.svg-line2_6 {
	position: absolute;
	background-color: gray;
    top: 49.71%;
    left: <?=($result_left2+21)?>px;
    width: 1px!important;
    height: 160px!important;
    z-index: 3;
}

.svg-text2_2 {
	position: absolute;
	background-color: transparent;
	color: red;
	font-weight: 700;
    top: 66.31%;
    left: <?=($start_gate2)?>px;
    width: <?=(($result_left2)-66)?>px!important;
    z-index: 3;
    text-align: center;
}

.svg-line2_7 {
	position: absolute;
    background-color: gray;
    top: 54%;
    left: 45px;
    width: 100px !important;
    height: 1px !important;
    z-index: 3;
}

.svg-line2_8 {
	position: absolute;
    background-color: gray;
    top: 16.2%;
    left: 50px;
    width: 1px !important;
    height: 319px !important;
    z-index: 3;
}

.svg-line2_9 {
  position: absolute;
    background-color: gray;
    top: 16.2%;
    left: 45px;
    width: 100px !important;
    height: 1px !important;
    z-index: 3;
}

.svg-text2_3 {
	position: absolute;
    background-color: transparent;
    text-align: center;
    top: 16.2%;
    left: 50px;
    width: 1px !important;
    height: 319px !important;
    z-index: 3;
    writing-mode: vertical-lr;
    transform: rotate(180deg);
    color: red;
    font-weight: 700;
}
</style>
<?php } ?>
<style type="text/css">
    <?php echo $css; ?>
</style>
<!--<link rel='stylesheet' id='pdf-stylesheet-css' href='--><?php //=$_SERVER['APP_URL']?><!--/parts/styles/triangular/90deg/gate2.css' type='text/css' media='all' />-->
<div id="page-container">
  <?php if (strrpos($pages, "1")) : ?>
	<div id="pf1" class="pf w0 h0" data-page-no="1">
		<div class="watermark">novi-vorota.com.ua</div>
		<div class="pc pc1 w0 h0">
      <?php if($wicket == 'on') { ?>
	<div class="svg-container">
		<div class="svg-line1"></div>
		<div class="svg-line2"></div>
		<div class="svg-line3"></div>
		<div class="svg-line4"></div>
		<div class="svg-line5"></div>
		<div class="svg-line6"></div>
		<div class="svg-text1"><?=($wicket_width+15)?></div>
		<div class="svg-text2"><?=($wicket_left)?></div>
		<?php
		$image1 = str_replace("<svg", "<svg class=\"svg-base\"", $image1);
		echo $image1;
		?>
	<svg class="svg-overlay" width="175" height="303" viewBox="0 0 175 303" fill="none" xmlns="http://www.w3.org/2000/svg">
		<rect x="2" y="1" width="172" height="301" fill="white"/>
		<path d="M143.986 301.719H31.64M143.986 301.719V294.79M143.986 301.719H149.397M31.64 301.719H26.2355M31.64 301.719V157.05M155.231 301.72V0.920013M20.4476 301.72L20.401 0.920044M26.2355 0.920044V301.719M20.401 0.920044L30.64 0.921936L149.397 0.920013M20.401 0.920044L1.68005 0.924225M149.397 0.920013H155.231M149.397 0.920013V7.58862M155.231 0.920013H161.066M149.397 7.58862V301.719M149.397 7.58862H143.986V14.39M149.397 7.58862L31.64 7.59M26.6375 7.59H31.64M26.2355 301.719H14.6132M149.397 301.719H161.066M143.986 152.12H31.64M143.986 152.12V14.39M143.986 152.12V157.05M31.64 294.79H143.986M143.986 294.79V157.05M143.986 157.05H31.64M31.64 152.12V14.39M31.64 152.12V157.05M143.986 14.39H31.64M31.64 14.39V7.59M174 12.3855H165.472M14.6132 301.719H10.2024M14.6132 301.719L14.5666 7.59M1.68005 301.719H10.2024M10.2024 301.719V296.787M1.68005 296.787H10.2024M10.2024 296.787L10.1799 157.05M14.5666 0.920044V7.59M10.1558 7.59H14.5666M10.1558 7.59H1.68005M10.1558 7.59L10.1791 152.12M10.1558 12.39H1.67999M174 0.920013H161.066M161.066 0.920013V301.719M161.066 301.719H165.472M165.472 301.719L165.48 296.787M165.472 301.719H174M165.468 296.787H165.48M165.48 296.787L174 296.787M165.48 296.787L165.476 157.05M165.472 7.58862H161.468M165.472 7.58862L165.472 12.3855M165.472 7.58862H174M165.472 12.3855L165.476 152.12M10.1791 152.12H1.67999M10.1791 152.12L10.1799 157.05M10.1799 157.05H1.68005M165.476 152.12H174M165.476 152.12L165.476 157.05M165.476 157.05H174" stroke="black" stroke-width="1.70133" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
	</svg>
	</div>
	<?php } else { ?>
      <?php echo $image1; ?>
      <?php } ?>
			<div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">130</div>
			<div class="t m1 x2 h2 y2 ff1 fs0 fc0 sc0 ls0 ws0">250</div>
			<div class="t m2 x3 h2 y2 ff1 fs0 fc0 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m1 x4 h2 y3 ff1 fs0 fc0 sc0 ls0 ws0">300</div>
			<div class="t m1 x5 h2 y4 ff1 fs0 fc0 sc0 ls0 ws0">250</div>
			<div class="t m3 x6 h2 y5 ff1 fs0 fc0 sc0 ls0 ws0"><?php echo $l2; ?>- довжина зубчатої рейки</div>
			<div class="t m4 x7 h2 y6 ff1 fs0 fc0 sc0 ls0 ws0"><?php echo $l1; ?>- відстань між роліковими опорами.</div>
			<div class="t m5 x8 h2 y7 ff1 fs0 fc0 sc0 ls0 ws0"><?php echo $b; ?></div>
			<div class="t m6 x9 h2 y8 ff1 fs0 fc0 sc0 ls0 ws0">Відстань від фундаменту до верху воріт</div>
			<div class="t m7 xa h2 y9 ff1 fs0 fc0 sc0 ls0 ws0"><?php echo $clearance_under_gate; ?>-відстань від низу</div>
			<div class="t m8 xb h2 ya ff1 fs0 fc0 sc0 ls0 ws0">воріт до фундаменту</div>
			<div class="t m9 xc h2 yb ff1 fs0 fc0 sc0 ls0 ws0"><?php echo $a; ?></div>
			<div class="t ma xd h2 yc ff1 fs0 fc0 sc0 ls0 ws0">450</div>
			<div class="t ma xe h3 yd ff1 fs1 fc1 sc0 ls0 ws0">Встановлення та кріаленя кінцевого роліка показано на розрізі AD-AD, та Вид АF (Лист_6)</div>
			<div class="t mb xf h3 yd ff1 fs1 fc1 sc0 ls0 ws0">1.</div>
			<div class="t mc xf h3 ye ff1 fs1 fc1 sc0 ls0 ws0">2. Уловитель нижній встановити в складальному вигляді воріт та роліків верхніх в горізонтальній поверхні на 3-4мм</div>
			<div class="t ma xf h3 yf ff1 fs1 fc1 sc0 ls0 ws0">вище кінцевого роліка, місцевий Вид L, Вид S, розріз F-F (Лист_1, Лист_5).</div>
			<div class="t md xf h3 y10 ff1 fs1 fc1 sc0 ls0 ws0">2. *** Уловлювач верхній та верхній ролік встановити після встановленя уловлювача нижнього, місцевий Вид R, Вид Z,</div>
			<div class="t me xf h3 y11 ff1 fs1 fc1 sc0 ls0 ws0">Вид W, Вид J (Лист_1, Лист_5, Лист_6).</div>
			<div class="t mc xf h3 y12 ff1 fs1 fc1 sc0 ls0 ws0">3. Умова розміщеня привода воріт (зацепленя шестерні в зубчатій рейці) без натягу.</div>
			<div class="t mf xf h3 y13 ff1 fs1 fc1 sc0 ls0 ws0">4. Розмістити привід таким чином, щоб шестерня привода була розміщена по середині зубчатої рейки, місцевий вид АВ</div>
			<div class="t m10 xf h3 y14 ff1 fs1 fc1 sc0 ls0 ws0">(Лист_6). Бокова поверхня шестерні повиннна бути паралельна боковій поверхні рейки зубчатої.</div>
			<div class="t m11 xf h3 y15 ff1 fs1 fc1 sc0 ls0 ws0">5. Магнітні кінцевики (положеня-відкрито. закрито) встановити на зубчатій рейці по факту умови повного закривання та</div>
			<div class="t m12 xf h3 y16 ff1 fs1 fc1 sc0 ls0 ws0">відкривання воріт (Лист_1).</div>
			<div class="t m13 xf h3 y17 ff1 fs1 fc1 sc0 ls0 ws0">6. Кріпленя магнітного кінцевика вказано на розрізі AD-AD, Вид АЕ (Лист_6)</div>
			<div class="t m14 x10 h3 y18 ff1 fs1 fc1 sc0 ls0 ws0">Q <span class="_ _0"> </span> Q</div>
			<div class="t m15 x11 h3 y19 ff1 fs1 fc1 sc0 ls0 ws0">J</div>
			<div class="t m1 x0 h3 y1a ff1 fs1 fc1 sc0 ls0 ws0">L</div>
			<div class="t m14 x12 h3 y1b ff1 fs1 fc1 sc0 ls0 ws0">F <span class="_ _1"> </span> F</div>
			<div class="t m14 x13 h3 y1c ff1 fs1 fc1 sc0 ls0 ws0">AD</div>
			<div class="t m14 x13 h3 y1d ff1 fs1 fc1 sc0 ls0 ws0">AD</div>
			<div class="t m15 x14 h3 y1e ff1 fs1 fc1 sc0 ls0 ws0">Z</div>
			<div class="t m16 x15 h3 y1f ff1 fs1 fc1 sc0 ls0 ws0">I</div>
			<div class="t m14 x16 h3 y20 ff1 fs1 fc1 sc0 ls0 ws0">Z1</div>
			<div class="t m17 x17 h2 y21 ff1 fs0 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m18 x18 h2 y22 ff1 fs0 fc1 sc0 ls0 ws0">Магнітний кінцевик положення-відкрито</div>
			<div class="t m19 x19 h2 y23 ff1 fs0 fc1 sc0 ls0 ws0">Заглушка</div>
			<div class="t mf x1a h2 y24 ff1 fs0 fc1 sc0 ls0 ws0">задня</div>
			<div class="t m1a x1b h2 y25 ff1 fs0 fc1 sc0 ls0 ws0">Магнітний кінцевик</div>
			<div class="t m1b x1c h2 y26 ff1 fs0 fc1 sc0 ls0 ws0">положення-закрито</div>
			<div class="t m1c x1d h3 y27 ff1 fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ Q-Q</div>
			<div class="t m4 x1e h3 y28 ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 17</div>
			<div class="t m1d x1f h3 y29 ff1 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ J</div>
			<div class="t m11 x20 h3 y2a ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 2 : 17</div>
			<div class="t m1e x21 h3 y2b ff1 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ L</div>
			<div class="t m11 x22 h3 y2c ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 2 : 17</div>
			<div class="t m1f x23 h3 y2d ff1 fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ F-F</div>
			<div class="t m4 x24 h3 y2e ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 17</div>
			<div class="t m20 x25 h3 y2f ff1 fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ AD-AD</div>
			<div class="t m4 x25 h3 y30 ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 17</div>
			<div class="t m21 x26 h3 y31 ff1 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ Z</div>
			<div class="t m11 x27 h3 y32 ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 2 : 17</div>
			<div class="t m22 x28 h3 y33 ff1 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ I</div>
			<div class="t m11 x29 h3 y34 ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 2 : 17</div>
			<div class="t m23 x2a h3 y35 ff1 fs1 fc1 sc0 ls0 ws0">ВИД Z1</div>
			<div class="t m4 x2b h3 y36 ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 17</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "2")) : ?>
	<div id="pf2" class="pf w0 h0" data-page-no="2">
		<div class="watermark">novi-vorota.com.ua</div>
		<div class="pc pc2 w0 h0">
      <?php echo $image2; ?>
			<div class="t m1 x2d h2 y38 ff2 fs0 fc0 sc0 ls0 ws0">95</div>
			<div class="t m0 x2e h2 y39 ff2 fs0 fc0 sc0 ls0 ws0">100 <span class="_ _2"> </span> 100</div>
			<div class="t ma x2f h2 y3a ff2 fs0 fc0 sc0 ls0 ws0">240</div>
			<div class="t m24 x30 h2 y3b ff2 fs0 fc0 sc0 ls0 ws0">500</div>
			<div class="t m2 x31 h2 y3c ff2 fs0 fc0 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m25 x32 h2 y3d ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $l1; ?></div>
			<div class="t m26 x33 h2 y3e ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $b5; ?></div>
			<div class="t m5 x34 h2 y3f ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $b4; ?></div>
			<div class="t m1 x35 h2 y40 ff2 fs0 fc0 sc0 ls0 ws0">95</div>
			<div class="t m27 x36 h2 y41 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a7; ?></div>
			<div class="t m28 x37 h2 y42 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a6; ?></div>
			<div class="t m14 x38 h3 y43 ff2 fs1 fc1 sc0 ls0 ws0">A <span class="_ _3"> </span> A</div>
			<div class="t m14 x39 h3 y44 ff2 fs1 fc1 sc0 ls0 ws0">N</div>
			<div class="t m28 x3a h2 y45 ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m29 x3b h2 y46 ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m1b x32 h2 y47 ff2 fs0 fc1 sc0 ls0 ws0">для роліка опорного</div>
			<div class="t m1 x3c h2 y48 ff2 fs0 fc1 sc0 ls0 ws0">переднього</div>
			<div class="t m28 x3a h2 y49 ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m29 x3b h2 y4a ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m1b x32 h2 y4b ff2 fs0 fc1 sc0 ls0 ws0">для роліка опорного</div>
			<div class="t m2a x3d h2 y4c ff2 fs0 fc1 sc0 ls0 ws0">заднього</div>
			<div class="t m28 x3e h2 y4d ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m29 x3f h2 y4e ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m9 x40 h2 y4f ff2 fs0 fc1 sc0 ls0 ws0">для кронштейна</div>
			<div class="t m2b x41 h2 y50 ff2 fs0 fc1 sc0 ls0 ws0">привода</div>
			<div class="t m2c x42 h2 y51 ff2 fs0 fc1 sc0 ls0 ws0">Ролік задній розмістити в складальному вигляді з рамою воріт</div>
			<div class="t m11 x42 h2 y52 ff2 fs0 fc1 sc0 ls0 ws0">максимально віддаленим по довжині хвостовика воріт.</div>
			<div class="t m2d x43 h2 y53 ff2 fs0 fc1 sc0 ls0 ws0">11</div>
			<div class="t m25 x44 h2 y54 ff2 fs0 fc1 sc0 ls0 ws0">10</div>
			<div class="t m28 x45 h2 y55 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a5; ?></div>
			<div class="t m1 x46 h2 y56 ff2 fs0 fc0 sc0 ls0 ws0">95</div>
			<div class="t m2e x47 h2 y57 ff2 fs0 fc0 sc0 ls0 ws0">160</div>
			<div class="t ma x48 h2 y58 ff2 fs0 fc0 sc0 ls0 ws0">240</div>
			<div class="t m1 x49 h2 y59 ff2 fs0 fc0 sc0 ls0 ws0">60</div>
			<div class="t m26 x4a h2 y5a ff2 fs0 fc0 sc0 ls0 ws0">40</div>
			<div class="t m2f x4b h3 y5b ff2 fs1 fc1 sc0 ls0 ws0">A-A МАСШТАБ1 : 16</div>
			<div class="t m30 x4c h2 y5c ff2 fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m31 x4d h2 y5d ff2 fs0 fc1 sc0 ls0 ws0">Стовп</div>
			<div class="t m32 x4e h2 y5e ff2 fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m33 x10 h2 y5f ff2 fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m29 x4f h2 y60 ff2 fs0 fc1 sc0 ls0 ws0">(Розміщення швелера відносно стовпа)</div>
			<div class="t m28 x50 h2 y61 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a8; ?></div>
			<div class="t m24 x51 h2 y62 ff2 fs0 fc0 sc0 ls0 ws0">500</div>
			<div class="t m15 x52 h3 y63 ff2 fs1 fc1 sc0 ls0 ws0">O</div>
			<div class="t m34 x53 h3 y64 ff2 fs1 fc1 sc0 ls0 ws0">ВИД N</div>
			<div class="t m4 x54 h3 y65 ff2 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 16</div>
			<div class="t m0 x55 h2 y66 ff2 fs0 fc0 sc0 ls0 ws0">160</div>
			<div class="t m21 x56 h3 y67 ff2 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ O</div>
			<div class="t m2c x55 h3 y68 ff2 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m30 x57 h2 y69 ff2 fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m32 x58 h2 y6a ff2 fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m33 x59 h2 y6b ff2 fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m35 xb h2 y6c ff2 fs0 fc0 sc0 ls0 ws0">Лист_2</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "3")) : ?>
	<div id="pf3" class="pf w0 h0" data-page-no="3">
		<div class="watermark">novi-vorota.com.ua</div>
		<div class="pc pc3 w0 h0">
      <?php if($wicket == 'on') { ?>
	<div class="svg-container">
		<div class="svg-line2_1"></div>
		<div class="svg-line2_2"></div>
		<div class="svg-line2_3"></div>
		<div class="svg-line2_4"></div>
		<div class="svg-line2_5"></div>
		<div class="svg-line2_6"></div>
		<div class="svg-line2_7"></div>
		<div class="svg-line2_8"></div>
    <div class="svg-line2_9"></div>
		<div class="svg-text2_1"><?=($wicket_width+15)?></div>
		<div class="svg-text2_2"><?=($wicket_left)?></div>
		<div class="svg-text2_3"><?=($b1_1-100)?></div>
		<?php
		$image3 = str_replace("<svg", "<svg class=\"svg-base2\"", $image3);
		echo $image3;
		?>
	<svg class="svg-overlay2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="375px" height="649px" viewBox="0 0 375 649" version="1.1">
<g id="surface1">
<path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;" d="M 4.285156 2.140625 L 372.855469 2.140625 L 372.855469 646.859375 L 4.285156 646.859375 Z M 4.285156 2.140625 "/>
<path style="fill:none;stroke-width:1.70133;stroke-linecap:round;stroke-linejoin:round;stroke:rgb(0%,0%,0%);stroke-opacity:1;stroke-miterlimit:10;" d="M 143.986719 301.719749 L 31.640365 301.719749 M 143.986719 301.719749 L 143.986719 294.789616 M 143.986719 301.719749 L 149.397135 301.719749 M 31.640365 301.719749 L 26.235417 301.719749 M 31.640365 301.719749 L 31.640365 157.049577 M 155.230469 301.719749 L 155.230469 0.919154 M 20.447656 301.719749 L 20.40026 0.919154 M 26.235417 0.919154 L 26.235417 301.719749 M 20.40026 0.919154 L 30.639583 0.922802 L 149.397135 0.919154 M 20.40026 0.919154 L 1.680729 0.924626 M 149.397135 0.919154 L 155.230469 0.919154 M 149.397135 0.919154 L 149.397135 7.588496 M 155.230469 0.919154 L 161.065625 0.919154 M 149.397135 7.588496 L 149.397135 301.719749 M 149.397135 7.588496 L 143.986719 7.588496 L 143.986719 14.389144 M 149.397135 7.588496 L 31.640365 7.590319 M 26.638281 7.590319 L 31.640365 7.590319 M 26.235417 301.719749 L 14.6125 301.719749 M 149.397135 301.719749 L 161.065625 301.719749 M 143.986719 152.120065 L 31.640365 152.120065 M 143.986719 152.120065 L 143.986719 14.389144 M 143.986719 152.120065 L 143.986719 157.049577 M 31.640365 294.789616 L 143.986719 294.789616 M 143.986719 294.789616 L 143.986719 157.049577 M 143.986719 157.049577 L 31.640365 157.049577 M 31.640365 152.120065 L 31.640365 14.389144 M 31.640365 152.120065 L 31.640365 157.049577 M 143.986719 14.389144 L 31.640365 14.389144 M 31.640365 14.389144 L 31.640365 7.590319 M 173.999219 12.384877 L 165.471615 12.384877 M 14.6125 301.719749 L 10.202865 301.719749 M 14.6125 301.719749 L 14.566927 7.590319 M 1.680729 301.719749 L 10.202865 301.719749 M 10.202865 301.719749 L 10.202865 296.786589 M 1.680729 296.786589 L 10.202865 296.786589 M 10.202865 296.786589 L 10.179167 157.049577 M 14.566927 0.919154 L 14.566927 7.590319 M 10.155469 7.590319 L 14.566927 7.590319 M 10.155469 7.590319 L 1.680729 7.590319 M 10.155469 7.590319 L 10.179167 152.120065 M 10.155469 12.390348 L 1.680729 12.390348 M 173.999219 0.919154 L 161.065625 0.919154 M 161.065625 0.919154 L 161.065625 301.719749 M 161.065625 301.719749 L 165.471615 301.719749 M 165.471615 301.719749 L 165.480729 296.786589 M 165.471615 301.719749 L 173.999219 301.719749 M 165.467969 296.786589 L 165.480729 296.786589 M 165.480729 296.786589 L 173.999219 296.786589 M 165.480729 296.786589 L 165.47526 157.049577 M 165.471615 7.588496 L 161.46849 7.588496 M 165.471615 7.588496 L 165.471615 12.384877 M 165.471615 7.588496 L 173.999219 7.588496 M 165.471615 12.384877 L 165.47526 152.120065 M 10.179167 152.120065 L 1.680729 152.120065 M 10.179167 152.120065 L 10.179167 157.049577 M 10.179167 157.049577 L 1.680729 157.049577 M 165.47526 152.120065 L 173.999219 152.120065 M 165.47526 152.120065 L 165.47526 157.049577 M 165.47526 157.049577 L 173.999219 157.049577 " transform="matrix(2.142857,0,0,2.141914,0,0)"/>
</g>
</svg>

	</div>
	<?php } else { ?>
      <?php echo $image3; ?>
      <?php } ?>
			<div class="t m9 x5a h2 y6e ff3 fs0 fc0 sc0 ls0 ws0"><?php echo $a; ?></div>
			<div class="t m28 x5b h2 y6f ff3 fs0 fc0 sc0 ls0 ws0"><?php echo $a2; ?></div>
			<div class="t m28 x5c h2 y70 ff3 fs0 fc0 sc0 ls0 ws0"><?php echo $a3; ?></div>
			<div class="t m1 x5d h2 y71 ff3 fs0 fc0 sc0 ls0 ws0"><?php echo $c; ?></div>
			<div class="t m25 x5e h2 y72 ff3 fs0 fc0 sc0 ls0 ws0"><?php echo $c1; ?> <span class="_ _4"> </span> <?php echo $c1; ?> <span class="_ _5"> </span> <?php echo $c1; ?></div>
			<div class="t m5 x5f h2 y73 ff3 fs0 fc0 sc0 ls0 ws0"><?php echo $d; ?> <span class="_ _6"> </span> <?php echo $d; ?></div>
			<div class="t m36 x60 h6 y74 ff3 fs2 fc0 sc0 ls0 ws0"><?php echo $g; ?></div>
			<div class="t m26 x2c h2 y75 ff3 fs0 fc0 sc0 ls0 ws0"><?php echo $b2; ?></div>
			<div class="t m37 x61 h2 y76 ff3 fs0 fc0 sc0 ls0 ws0"><?php echo $b1; ?></div>
			<div class="t m38 x62 h7 y77 ff3 fs3 fc1 sc0 ls0 ws0"><?php echo $g1; ?></div>
			<div class="t m38 x63 h7 y78 ff3 fs3 fc1 sc0 ls0 ws0"><?php echo $g1; ?></div>
			<div class="t m9 x64 h3 y79 ff3 fs1 fc1 sc0 ls0 ws0">A</div>
			<div class="t m15 x0 h3 y7a ff3 fs1 fc1 sc0 ls0 ws0">B</div>
			<div class="t m1 x3d h3 y7b ff3 fs1 fc1 sc0 ls0 ws0">C</div>
			<div class="t m15 x1b h3 y7c ff3 fs1 fc1 sc0 ls0 ws0">D</div>
			<div class="t m1 x65 h3 y7d ff3 fs1 fc1 sc0 ls0 ws0">E</div>
			<div class="t m39 x66 h8 y7e ff3 fs4 fc1 sc0 ls0 ws0">1</div>
			<div class="t m3a x67 h8 y7f ff3 fs4 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3a x68 h8 y80 ff3 fs4 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3b x1c h8 y81 ff3 fs4 fc1 sc0 ls0 ws0">4</div>
			<div class="t m3a x69 h8 y82 ff3 fs4 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3a x6a h8 y83 ff3 fs4 fc1 sc0 ls0 ws0">6</div>
			<div class="t m3a x6b h8 y84 ff3 fs4 fc1 sc0 ls0 ws0">7</div>
			<div class="t m3a x6b h8 y85 ff3 fs4 fc1 sc0 ls0 ws0">7</div>
			<div class="t m3a x5b h8 y86 ff3 fs4 fc1 sc0 ls0 ws0">7</div>
			<div class="t m3a x5b h8 y87 ff3 fs4 fc1 sc0 ls0 ws0">7</div>
			<div class="t m3a x6c h8 y88 ff3 fs4 fc1 sc0 ls0 ws0">8</div>
			<div class="t m3a x6d h8 y89 ff3 fs4 fc1 sc0 ls0 ws0">8</div>
			<div class="t m3a x6e h8 y8a ff3 fs4 fc1 sc0 ls0 ws0">9</div>
			<div class="t m20 x6f h3 y8b ff3 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ A</div>
			<div class="t m2c x70 h3 y8c ff3 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m3a x4f h8 y8d ff3 fs4 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3a x2c h8 y8e ff3 fs4 fc1 sc0 ls0 ws0">5</div>
			<div class="t m21 x71 h3 y8f ff3 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ B</div>
			<div class="t m2c x31 h3 y90 ff3 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m3a x72 h8 y91 ff3 fs4 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3a x73 h8 y92 ff3 fs4 fc1 sc0 ls0 ws0">2</div>
			<div class="t m39 x71 h8 y93 ff3 fs4 fc1 sc0 ls0 ws0">1</div>
			<div class="t m1e x74 h3 y94 ff3 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ C</div>
			<div class="t m2c x75 h3 y95 ff3 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m3a x76 h8 y96 ff3 fs4 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3b x77 h8 y97 ff3 fs4 fc1 sc0 ls0 ws0">4</div>
			<div class="t m3a x6a h8 y98 ff3 fs4 fc1 sc0 ls0 ws0">8</div>
			<div class="t m3a x78 h8 y99 ff3 fs4 fc1 sc0 ls0 ws0">9</div>
			<div class="t m21 x79 h3 y9a ff3 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ D</div>
			<div class="t m2c x39 h3 y9b ff3 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m39 x7a h8 y9c ff3 fs4 fc1 sc0 ls0 ws0">1</div>
			<div class="t m3a x7b h8 y9d ff3 fs4 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3b x7c h8 y9e ff3 fs4 fc1 sc0 ls0 ws0">4</div>
			<div class="t m1e x29 h3 y9f ff3 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ E</div>
			<div class="t m2c x7d h3 ya0 ff3 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m3a x7e h8 ya1 ff3 fs4 fc1 sc0 ls0 ws0">9</div>
			<div class="t m3a x30 h8 ya2 ff3 fs4 fc1 sc0 ls0 ws0">2</div>
			<div class="t m39 x7f h8 ya3 ff3 fs4 fc1 sc0 ls0 ws0">1</div>
			<div class="t m35 x80 h2 ya4 ff3 fs0 fc0 sc0 ls0 ws0">Лист_3</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "4")) : ?>
	<div id="pf4" class="pf w4 h9" data-page-no="4" style="transform: rotate(90deg) scale(1.1) translate(0, -5%); transform-origin: center;">
		<div class="watermark">novi-vorota.com.ua</div>
		<div class="pc pc4 w4 h9">
      <?php echo $image4; ?>
			<div class="c x81 ya6 w6 hb">
				<div class="t m3c x82 hc ya7 ff4 fs5 fc1 sc0 ls0 ws0">40</div>
				<div class="t m3c x83 hc ya8 ff4 fs5 fc1 sc0 ls0 ws0"><?php echo $g1; ?></div>
				<div class="t m3c x84 hc ya9 ff4 fs5 fc1 sc0 ls0 ws0"><?php echo $c; ?></div>
				<div class="t m3c x85 hc yaa ff4 fs5 fc1 sc0 ls0 ws0"><?php echo $d; ?></div>
				<div class="t m3c x36 hc yab ff4 fs5 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3d x86 hc yac ff4 fs5 fc1 sc0 ls0 ws0">40</div>
				<div class="t m3c x87 hc yad ff4 fs5 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3d x7a hc yae ff4 fs5 fc1 sc0 ls0 ws0">30</div>
				<div class="t m3c x88 hc yaf ff4 fs5 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3d x89 hc yb0 ff4 fs5 fc1 sc0 ls0 ws0">30</div>
				<div class="t m3c x88 hc yb1 ff4 fs5 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3d x8a hc yb2 ff4 fs5 fc1 sc0 ls0 ws0">30</div>
				<div class="t m3c x42 hc yb3 ff4 fs5 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3d x8a hc yb4 ff4 fs5 fc1 sc0 ls0 ws0">30</div>
				<div class="t m3c x6b hc yb5 ff4 fs5 fc1 sc0 ls0 ws0"><?php echo $a; ?></div>
				<div class="t m3c x36 hc yb6 ff4 fs5 fc1 sc0 ls0 ws0">70</div>
				<div class="t m3d x8b hc yb7 ff4 fs5 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3c x8c hc yb8 ff4 fs5 fc1 sc0 ls0 ws0"><?php echo $g; ?></div>
				<div class="t m3c x8d hc yb9 ff4 fs5 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3d x8e hc yba ff4 fs5 fc1 sc0 ls0 ws0">40</div>
				<div class="t m3c x36 hc ybb ff4 fs5 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3d x8e hc ybc ff4 fs5 fc1 sc0 ls0 ws0">40</div>
				<div class="t m3c x6c hc ybd ff4 fs5 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3d x88 hc ybe ff4 fs5 fc1 sc0 ls0 ws0">30</div>
				<div class="t m3c x8f hc ybf ff4 fs5 fc1 sc0 ls0 ws0"><?php echo $a2; ?></div>
				<div class="t m3c x90 hc yc0 ff4 fs5 fc1 sc0 ls0 ws0">71</div>
				<div class="t m3c x91 hc yc1 ff5 fs5 fc1 sc0 ls0 ws0"><?php echo $a1; ?></div>
				<div class="t m3c x92 hc yc2 ff4 fs5 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3d x93 hc yc3 ff4 fs5 fc1 sc0 ls0 ws0">40</div>
				<div class="t m3c x7a hc yc4 ff4 fs5 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3d x94 hc yc5 ff4 fs5 fc1 sc0 ls0 ws0">30</div>
				<div class="t m3c x36 hc yc6 ff4 fs5 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3d x86 hc yc7 ff4 fs5 fc1 sc0 ls0 ws0">40</div>
				<div class="t m3c x87 hc yc8 ff4 fs5 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3d x7a hc yc9 ff4 fs5 fc1 sc0 ls0 ws0">30</div>
				<div class="t m3c x95 hc yca ff5 fs5 fc1 sc0 ls0 ws0"><?php echo $b1; ?></div>
				<div class="t m3c x6f hc ycb ff4 fs5 fc1 sc0 ls0 ws0">30</div>
				<div class="t m3c x4e hd ycc ff4 fs6 fc1 sc0 ls0 ws0">1.</div>
				<div class="t m3c x96 hd ycd ff4 fs6 fc1 sc0 ls0 ws0">2.</div>
				<div class="t m3c x0 hd yce ff4 fs6 fc1 sc0 ls0 ws0">3.</div>
				<div class="t m3c x96 hd ycf ff4 fs6 fc1 sc0 ls0 ws0">4.</div>
				<div class="t m3c x0 hd yd0 ff4 fs6 fc1 sc0 ls0 ws0">5.</div>
				<div class="t m3c x96 hd yd1 ff4 fs6 fc1 sc0 ls0 ws0">6.</div>
				<div class="t m3c x4e hd yd2 ff4 fs6 fc1 sc0 ls0 ws0">7.</div>
				<div class="t m3c x4e hd yd3 ff4 fs6 fc1 sc0 ls0 ws0">8.</div>
				<div class="t m3c x4e hd yd4 ff4 fs6 fc1 sc0 ls0 ws0">9.</div>
				<div class="t m3d x97 hc ybe ff4 fs5 fc1 sc0 ls0 ws0">30</div>
				<div class="t m3c x98 hc yd5 ff5 fs5 fc1 sc0 ls0 ws0"><?php echo $a3; ?></div>
				<div class="t m3c xf hc yd6 ff4 fs5 fc1 sc0 ls0 ws0">30</div>
				<div class="t m3d x99 hc yd7 ff4 fs5 fc1 sc0 ls0 ws0">38</div>
				<div class="t m3d x9a hc yd8 ff4 fs5 fc1 sc0 ls0 ws0">30</div>
				<div class="t m3d xc hc yd7 ff4 fs5 fc1 sc0 ls0 ws0">38</div>
				<div class="t m3d x9b hc yd8 ff4 fs5 fc1 sc0 ls0 ws0">30</div>
				<div class="t m3c x9c hc yd9 ff4 fs5 fc1 sc0 ls0 ws0">40</div>
				<div class="t m3c x24 hc yda ff4 fs5 fc1 sc0 ls0 ws0">30</div>
				<div class="t m3c x9d hc ydb ff5 fs5 fc1 sc0 ls0 ws0"><?php echo $b2; ?></div>
				<div class="t m3c x9e hc ydc ff5 fs5 fc1 sc0 ls0 ws0"><?php echo $b5; ?></div>
				<div class="t m3c x9f hc ydd ff4 fs5 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3d x89 hc yde ff4 fs5 fc1 sc0 ls0 ws0">40</div>
				<div class="t m3c xa0 hd ydf ff4 fs6 fc1 sc0 ls0 ws0">11.</div>
				<div class="t m3c xa0 hd ye0 ff4 fs6 fc1 sc0 ls0 ws0">10.</div>
				<div class="t m3d x8e hc ye1 ff4 fs5 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3c xa1 hc ye2 ff4 fs5 fc1 sc0 ls0 ws0">40</div>
				<div class="t m3c x73 hc ye3 ff5 fs5 fc1 sc0 ls0 ws0"><?php echo $b4; ?></div>
				<div class="t m3c xa2 he ye4 ff5 fs7 fc1 sc0 ls0 ws0">Порізка профілей на заготовки</div>
				<div class="t m3c xa2 he ye5 ff5 fs7 fc1 sc0 ls0 ws0">Порізка нащільника заднього</div>
				<div class="t m3c xa2 he ye6 ff5 fs7 fc1 sc0 ls0 ws0">Порізка нащільника переднього</div>
				<div class="t m3c x79 hd ycc ff5 fs6 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m3c x79 hd ye7 ff5 fs6 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m3c x79 hd ye8 ff5 fs6 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m3c x79 hd ye9 ff5 fs6 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m3c x79 hd yea ff5 fs6 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m3c x79 hd yeb ff5 fs6 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m3c xa3 hd yec ff5 fs6 fc1 sc0 ls0 ws0">4шт.</div>
				<div class="t m3c xa3 hd yed ff5 fs6 fc1 sc0 ls0 ws0">2шт.</div>
				<div class="t m3c x79 hd yee ff5 fs6 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m3c x79 hd yef ff5 fs6 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m3c x79 hd yf0 ff5 fs6 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m3c xa4 hc yf1 ff4 fs5 fc1 sc0 ls0 ws0">80</div>
				<div class="t m3d xa5 hc yf2 ff4 fs5 fc1 sc0 ls0 ws0">48</div>
				<div class="t m3c xa6 hf yf3 ff5 fs8 fc2 sc0 ls0 ws0">Лист_4</div>
			</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[0.000000,1.000000,-1.000000,0.000000,842.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "5")) : ?>
	<div id="pf5" class="pf w0 h0" data-page-no="5">
		<div class="watermark">novi-vorota.com.ua</div>
		<div class="pc pc5 w0 h0">
      <?php echo $image5; ?>
			<div class="t m5 x0 h2 yf9 ff9 fs0 fc0 sc0 ls0 ws0">(**)</div>
			<div class="t m3f xa9 h2 yfa ff9 fs0 fc0 sc0 ls0 ws0"><?php echo $b5; ?> (висота розміщеня уловлювача верхнього</div>
			<div class="t m40 xaa h2 yfb ff9 fs0 fc0 sc0 ls0 ws0">по висоті воріт)</div>
			<div class="t m2 x68 h2 yfc ff9 fs0 fc0 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m41 x26 h2 yfd ff9 fs0 fc0 sc0 ls0 ws0"><?php echo $b4; ?> Висота розміщеня верхнього роліка</div>
			<div class="t m3f xab h2 yfe ff9 fs0 fc0 sc0 ls0 ws0">по нащільнику задньому</div>
			<div class="t m1 xac h2 yff ff9 fs0 fc0 sc0 ls0 ws0">95 <span class="_ _7"> </span> 95</div>
			<div class="t m6 x8a h2 y100 ff9 fs0 fc1 sc0 ls0 ws0">Відстань від фундаменту до верху воріт</div>
			<div class="t m15 xad h2 y101 ff9 fs0 fc1 sc0 ls0 ws0">R</div>
			<div class="t m15 x11 h2 y102 ff9 fs0 fc1 sc0 ls0 ws0">S</div>
			<div class="t m9 x5b h2 y103 ff9 fs0 fc1 sc0 ls0 ws0">Кріпленя нащільника переднього та заднього провести на закладні зварюваням.</div>
			<div class="t mb xae h2 y103 ff9 fs0 fc1 sc0 ls0 ws0">1.</div>
			<div class="t mc xaf h2 y104 ff9 fs0 fc1 sc0 ls0 ws0">** Уловлювач нижній розмістити в складальному вигляді з стулкою воріт та роліками</div>
			<div class="t m2d xae h2 y104 ff9 fs0 fc1 sc0 ls0 ws0">2.</div>
			<div class="t m42 xae h2 y105 ff9 fs0 fc1 sc0 ls0 ws0">опорними в горізонтальній поверхні на 3мм-4мм вище роліка кінцевого.</div>
			<div class="t m43 xae h2 y106 ff9 fs0 fc1 sc0 ls0 ws0">3. Ролік верхній розмістити по висоті нащільника заднього.</div>
			<div class="t m25 xb0 h2 y107 ff9 fs0 fc1 sc0 ls0 ws0">10</div>
			<div class="t m2d xe h2 y108 ff9 fs0 fc1 sc0 ls0 ws0">11</div>
			<div class="t m44 xb1 h2 y109 ff9 fs0 fc1 sc0 ls0 ws0">W</div>
			<div class="t m31 xe h2 y10a ff9 fs0 fc1 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m45 x5 h2 y10b ff9 fs0 fc1 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m46 xb2 h2 y10b ff9 fs0 fc1 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m44 xb3 h3 y10c ff9 fs1 fc1 sc0 ls0 ws0">W</div>
			<div class="t m15 xb4 h3 y10d ff9 fs1 fc1 sc0 ls0 ws0">R</div>
			<div class="t m15 xb5 h3 y10e ff9 fs1 fc1 sc0 ls0 ws0">S</div>
			<div class="t m47 xb6 h3 y10f ff9 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ W</div>
			<div class="t m13 xb7 h3 y110 ff9 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m46 xb8 h2 y111 ff9 fs0 fc1 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m2f x1c h2 y112 ff9 fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m33 xb9 h2 y113 ff9 fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m21 x46 h3 y114 ff9 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ R</div>
			<div class="t m13 xba h3 y115 ff9 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m2f xbb h2 y116 ff9 fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m48 x4d h2 y117 ff9 fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m49 xbc h2 y118 ff9 fs0 fc1 sc0 ls0 ws0">Уловитель верхній</div>
			<div class="t m21 xbd h3 y119 ff9 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ S</div>
			<div class="t m13 x98 h3 y11a ff9 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m28 xbe h2 y11b ff9 fs0 fc1 sc0 ls0 ws0">Уловитель нижній</div>
			<div class="t m2f xbf h2 y11c ff9 fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m48 x6 h2 y11d ff9 fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m37 xc0 h2 y11e ff9 fs0 fc0 sc0 ls0 ws0"><?php echo $r1; ?></div>
			<div class="t m26 xc1 h2 y11f ff9 fs0 fc0 sc0 ls0 ws0"><?php echo $r2; ?></div>
			<div class="t m4a xc2 h15 y120 ff9 fsb fc0 sc0 ls0 ws0">Встановити в міжцегляному</div>
			<div class="t m4b xc3 h15 y121 ff9 fsb fc0 sc0 ls0 ws0">шву на відстані півцегли</div>
			<div class="t m4c xc4 h15 y122 ff9 fsb fc0 sc0 ls0 ws0">відносно внутнішньої</div>
			<div class="t m4d xc5 h15 y123 ff9 fsb fc0 sc0 ls0 ws0">поверхні стовпа.</div>
			<div class="t m4e xc6 h3 y124 ff9 fs1 fc0 sc0 ls0 ws0">Встановити в міжцегляному</div>
			<div class="t m4f xc7 h3 y125 ff9 fs1 fc0 sc0 ls0 ws0">шву на відстані півцегли</div>
			<div class="t m50 xc8 h3 y126 ff9 fs1 fc0 sc0 ls0 ws0">відносно внутрішньої</div>
			<div class="t m51 xc9 h3 y127 ff9 fs1 fc0 sc0 ls0 ws0">поверхні стовпа.</div>
			<div class="t m14 x3c h3 y128 ff9 fs1 fc1 sc0 ls0 ws0">АА <span class="_ _8"> </span> АА</div>
			<div class="t m52 xca h2 y129 ff9 fs0 fc1 sc0 ls0 ws0">СЕЧЕНИЕ АА-АА</div>
			<div class="t m13 xcb h2 y12a ff9 fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m53 xc5 h2 y12b ff9 fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m13 xc7 h2 y12c ff9 fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m53 xcc h2 y12d ff9 fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m13 xcd h2 y12e ff9 fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m53 xce h2 y12f ff9 fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m13 xcd h2 y130 ff9 fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m53 xce h2 y131 ff9 fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m54 xcf h2 y132 ff9 fs0 fc1 sc0 ls0 ws0">(4 місця)</div>
			<div class="t m55 xd0 h3 y133 ff9 fs1 fc1 sc0 ls0 ws0">АА-АА</div>
			<div class="t m2c xd1 h3 y134 ff9 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m14 xd2 h3 y135 ff9 fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕАА <span class="_ _9"> </span> СЕЧЕНИЕАА</div>
			<div class="t m4 xd3 h3 y136 ff9 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 10</div>
			<div class="t m2f xd4 h2 y137 ff9 fs0 fc1 sc0 ls0 ws0">Закладна нащільника</div>
			<div class="t m35 xd5 h2 y138 ff9 fs0 fc0 sc0 ls0 ws0">Лист_5</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "6")) : ?>
	<div id="pf6" class="pf w0 h0" data-page-no="6">
		<div class="watermark">novi-vorota.com.ua</div>
		<div class="pc pc6 w0 h0">
      <?php echo $image6; ?>
			<div class="t m1d xd7 h3 y13a ffa fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ J</div>
			<div class="t m2c xd8 h3 y13b ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m45 xd9 h2 y13c ffa fs0 fc1 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m56 xda h2 y13d ffa fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m57 xdb h2 y13e ffa fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m1e xdc h3 y13f ffa fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ L</div>
			<div class="t m2c xdd h3 y140 ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m31 xda h2 y141 ffa fs0 fc1 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m56 x8f h2 y142 ffa fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m57 xde h2 y143 ffa fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m21 xdf h3 y144 ffa fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ Z</div>
			<div class="t m2c xe0 h3 y145 ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m46 xe1 h2 y146 ffa fs0 fc1 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m56 xe2 h2 y147 ffa fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m57 x6 h2 y148 ffa fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t ma xe3 h2 y149 ffa fs0 fc0 sc0 ls0 ws0">450</div>
			<div class="t m1 xe4 h2 y14a ffa fs0 fc0 sc0 ls0 ws0">300</div>
			<div class="t m22 xbd h17 y14b ffa fsc fc1 sc0 ls0 ws0">МЕСТНЫЙ I</div>
			<div class="t m42 xe5 h17 y14c ffa fsc fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m17 x64 h2 y14d ffa fs0 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t mc x33 h2 y14e ffa fs0 fc1 sc0 ls0 ws0">Ролік</div>
			<div class="t m1 x4d h2 y14f ffa fs0 fc1 sc0 ls0 ws0">опорний</div>
			<div class="t m48 xda h2 y150 ffa fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m1a xe6 h2 y151 ffa fs0 fc1 sc0 ls0 ws0">Нащільник задній</div>
			<div class="t m58 xe7 h2 y152 ffa fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m44 xe8 h2 y153 ffa fs0 fc1 sc0 ls0 ws0">армований</div>
			<div class="t m59 x23 h2 y14e ffa fs0 fc1 sc0 ls0 ws0">Кронштейн</div>
			<div class="t m2b x5b h2 y14f ffa fs0 fc1 sc0 ls0 ws0">привода</div>
			<div class="t m49 xb2 h2 y154 ffa fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m5a x24 h2 y155 ffa fs0 fc1 sc0 ls0 ws0">Рейка зубчата</div>
			<div class="t m5b x92 h17 y156 ffa fsc fc1 sc0 ls0 ws0">AB</div>
			<div class="t m5c xe9 h17 y157 ffa fsc fc1 sc0 ls0 ws0">МЕСТНЫЙ Z1</div>
			<div class="t m42 xc4 h17 y158 ffa fsc fc1 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m49 xea h2 y159 ffa fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m5d xeb h2 y15a ffa fs0 fc1 sc0 ls0 ws0">Кінцевик</div>
			<div class="t m4 x63 h2 y15b ffa fs0 fc1 sc0 ls0 ws0">магнітний_закрито</div>
			<div class="t m5e x33 h17 y15c ffa fsc fc1 sc0 ls0 ws0">МЕСТНЫЙ AB</div>
			<div class="t m42 xec h17 y15d ffa fsc fc1 sc0 ls0 ws0">МАСШТАБ 1 : 3</div>
			<div class="t m49 xed h2 y15e ffa fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m5f xee h2 y15f ffa fs0 fc1 sc0 ls0 ws0">Кінцевик магнітний</div>
			<div class="t m60 xef h2 y160 ffa fs0 fc1 sc0 ls0 ws0">(положення-закрито)</div>
			<div class="t m61 x70 h2 y161 ffa fs0 fc1 sc0 ls0 ws0">Рейка</div>
			<div class="t m62 xf0 h2 y162 ffa fs0 fc1 sc0 ls0 ws0">зубчата</div>
			<div class="t m63 xf1 h2 y163 ffa fs0 fc1 sc0 ls0 ws0">Шестерня</div>
			<div class="t m64 xf2 h2 y164 ffa fs0 fc1 sc0 ls0 ws0">Клепальна гайка</div>
			<div class="t m65 xf3 h2 y165 ffa fs0 fc1 sc0 ls0 ws0">(кріпленя зубчатої рейки)</div>
			<div class="t m17 xf4 h2 y166 ffa fs0 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t mc xf5 h2 y167 ffa fs0 fc1 sc0 ls0 ws0">Ролік</div>
			<div class="t m1 x17 h2 y168 ffa fs0 fc1 sc0 ls0 ws0">опорний</div>
			<div class="t m33 xf4 h2 y169 ffa fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m43 xd6 h2 y169 ffa fs0 fc1 sc0 ls0 ws0">Кронштейн привода</div>
			<div class="t m66 xf6 h17 y16a ffa fsc fc1 sc0 ls0 ws0">AE</div>
			<div class="t m66 x15 h17 y16b ffa fsc fc1 sc0 ls0 ws0">AF</div>
			<div class="t m67 x7d h17 y16c ffa fsc fc1 sc0 ls0 ws0">СЕЧЕНИЕ AD-AD</div>
			<div class="t m42 x7f h17 y16d ffa fsc fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m24 xf7 h2 y16e ffa fs0 fc0 sc0 ls0 ws0">20</div>
			<div class="t m26 xf8 h2 y16f ffa fs0 fc0 sc0 ls0 ws0">40</div>
			<div class="t m68 xcf h17 y170 ffa fsc fc1 sc0 ls0 ws0">МЕСТНЫЙ AE</div>
			<div class="t m55 x5b h17 y171 ffa fsc fc1 sc0 ls0 ws0">МАСШТАБ 1 : 1.5</div>
			<div class="t m5d xf9 h2 y172 ffa fs0 fc1 sc0 ls0 ws0">Кінцевик</div>
			<div class="t m9 xe0 h2 y173 ffa fs0 fc1 sc0 ls0 ws0">магнітний</div>
			<div class="t m69 xfa h2 y174 ffa fs0 fc1 sc0 ls0 ws0">відкрито</div>
			<div class="t m5a x6a h2 y175 ffa fs0 fc1 sc0 ls0 ws0">Рейка зубчата</div>
			<div class="t m5a xfb h2 y176 ffa fs0 fc1 sc0 ls0 ws0">Клепальна гайка</div>
			<div class="t m6a xfc h2 y177 ffa fs0 fc1 sc0 ls0 ws0">кріпленя рейки зубчатої</div>
			<div class="t m68 xfd h17 y178 ffa fsc fc1 sc0 ls0 ws0">МЕСТНЫЙ AF</div>
			<div class="t m42 x2 h17 y179 ffa fsc fc1 sc0 ls0 ws0">МАСШТАБ 1 : 2</div>
			<div class="t m6b xeb h2 y17a ffa fs0 fc1 sc0 ls0 ws0">Кінцевий ролік</div>
			<div class="t m28 x9f h2 y17b ffa fs0 fc1 sc0 ls0 ws0">Профіль</div>
			<div class="t m6c xfe h2 y17c ffa fs0 fc1 sc0 ls0 ws0">Прижимна</div>
			<div class="t m44 xb1 h2 y17d ffa fs0 fc1 sc0 ls0 ws0">планка</div>
			<div class="t m17 xff h2 y17e ffa fs0 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m6d x100 h17 y17f ffa fsc fc1 sc0 ls0 ws0">Q <span class="_ _a"> </span> Q</div>
			<div class="t m6d x101 h17 y180 ffa fsc fc1 sc0 ls0 ws0">F <span class="_ _b"> </span> F</div>
			<div class="t m5c x102 h17 y181 ffa fsc fc1 sc0 ls0 ws0">СЕЧЕНИЕQ-Q</div>
			<div class="t m42 xf7 h17 y182 ffa fsc fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m32 x103 h2 y183 ffa fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m48 x104 h2 y184 ffa fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m45 x105 h2 y185 ffa fs0 fc1 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m56 x106 h2 y186 ffa fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m57 x107 h2 y187 ffa fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m6e x108 h3 y188 ffa fs1 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m53 x108 h3 y189 ffa fs1 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m52 xc9 h17 y18a ffa fsc fc1 sc0 ls0 ws0">СЕЧЕНИЕ F-F</div>
			<div class="t m42 x109 h17 y18b ffa fsc fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m56 x10a h2 y18c ffa fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m57 x10b h2 y18d ffa fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m31 x10c h2 y18e ffa fs0 fc1 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m32 x10d h2 y18f ffa fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m48 x10e h2 y190 ffa fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m35 x10f h3 y191 ffa fs1 fc0 sc0 ls0 ws0">Лист_6</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif; ?>
</div>

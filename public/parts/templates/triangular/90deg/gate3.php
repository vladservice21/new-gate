<?php
  $image1 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/90deg/gate_images3/image1.svg");
  $image2 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/90deg/gate_images3/image2.svg");
  $image3 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/90deg/gate_images3/image3.svg");
  $image4 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/90deg/gate_images3/image4.svg");
  $image5 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/90deg/gate_images3/image5.svg");
  $image6 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/90deg/gate_images3/image6.svg");
  $css    = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/styles/triangular/90deg/gate3.css");
  $a1 = '';
  $a2 = '';
  $b2 = '';

  if($wicket == 'on') {
  $start_gate1 = 110;
  $pillar1 = 155;
  $image_width1 = 992.08;
  $result_left1 = $image_width1/$manual_a*$wicket_left+$start_gate1;

  $start_gate2 = 103;
  $pillar2 = 155;
  $image_width2 = 992.08;
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
    $a = round(($a3 + ($a3 / 2) / 1.25) / 10) * 10;
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
  $g1 = round(100 + (sqrt(($b1 - 98) * ($b1 - 98) + (($c - 90) / 4 * ($c - 90) / 4))) / 2);
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
    top: 20.6%;
    left: <?=$result_left1?>px;
    width: 150.9px!important;
    height: 263px!important;
    z-index: 2;
}

.svg-line1 {
	position: absolute;
	background-color: gray;
    top: 17.7641%;
    left: <?=($result_left1+22)?>px;
    width: 106.0px!important;
    height: 1px!important;
    z-index: 3;
}

.svg-line2 {
	position: absolute;
	background-color: gray;
    top: 16.01%;
    left: <?=($result_left1+22)?>px;
    width: 1px!important;
    height: 50px!important;
    z-index: 3;
}

.svg-line3 {
	position: absolute;
	background-color: gray;
    top: 16.01%;
    left: <?=($result_left1+8+120)?>px;
    width: 1px!important;
    height: 50px!important;
    z-index: 3;
}

.svg-text1 {
	position: absolute;
	background-color: transparent;
	color: red;
	font-weight: 700;
    top: 16.01%;
    left: <?=($result_left1+22)?>px;
    width: 106.0px!important;
    z-index: 3;
    text-align: center;
}

.svg-line4 {
	position: absolute;
	background-color: gray;
    top: 65.71%;
    left: <?=($start_gate1)?>px;
    width: <?=(($result_left1)-93)?>px!important;
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
    left: <?=($result_left1+17)?>px;
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
    width: <?=(($result_left1)-93)?>px!important;
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
    top: 15.6%;
    left: <?=$result_left2?>px;
    width: 150.9px!important;
    height: 262px!important;
    z-index: 2;
}

.svg-line2_1 {
	position: absolute;
	background-color: gray;
    top: 13.71%;
    left: <?=($result_left2+22)?>px;
    width: 106.0px!important;
    height: 1px!important;
    z-index: 3;
}

.svg-line2_2 {
	position: absolute;
	background-color: gray;
    top: 12.01%;
    left: <?=($result_left2+22)?>px;
    width: 1px!important;
    height: 50px!important;
    z-index: 3;
}

.svg-line2_3 {
	position: absolute;
	background-color: gray;
    top: 12.01%;
    left: <?=($result_left2+5+123)?>px;
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
    left: <?=($result_left2+22)?>px;
    width: 106.0px!important;
    z-index: 3;
    text-align: center;
}

.svg-line2_4 {
	position: absolute;
	background-color: gray;
    top: 60.71%;
    left: <?=($start_gate2)?>px;
    width: <?=(($result_left2)-85)?>px!important;
    height: 1px!important;
    z-index: 3;
}

.svg-line2_5 {
	position: absolute;
	background-color: gray;
    top: 43.71%;
    left: <?=($start_gate2)?>px;
    width: 1px!important;
    height: 160px!important;
    z-index: 3;
}

.svg-line2_6 {
	position: absolute;
	background-color: gray;
    top: 43.71%;
    left: <?=($result_left2+17)?>px;
    width: 1px!important;
    height: 160px!important;
    z-index: 3;
}

.svg-text2_2 {
	position: absolute;
	background-color: transparent;
	color: red;
	font-weight: 700;
    top: 58.31%;
    left: <?=($start_gate2)?>px;
    width: <?=(($result_left2)-85)?>px!important;
    z-index: 3;
    text-align: center;
}

.svg-line2_7 {
	position: absolute;
    background-color: gray;
    top: 46.3%;
    left: 85px;
    width: 100px !important;
    height: 1px !important;
    z-index: 3;
}

.svg-line2_8 {
	position: absolute;
    background-color: gray;
    top: 16.2%;
    left: 90px;
    width: 1px !important;
    height: 254px !important;
    z-index: 3;
}

.svg-line2_9 {
  position: absolute;
    background-color: gray;
    top: 16.2%;
    left: 85px;
    width: 100px !important;
    height: 1px !important;
    z-index: 3;
}

.svg-text2_3 {
	position: absolute;
    background-color: transparent;
    text-align: center;
    top: 16.2%;
    left: 90px;
    width: 1px !important;
    height: 254px !important;
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
<!--<link rel='stylesheet' id='pdf-stylesheet-css' href='--><?php //=$_SERVER['APP_URL']?><!--/parts/styles/triangular/90deg/gate3.css' type='text/css' media='all' />-->
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
			<div class="t m1 x2 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">250</div>
			<div class="t m2 x3 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m3 x4 h2 y2 ff1 fs0 fc0 sc0 ls0 ws0"><?php echo $b; ?></div>
			<div class="t m4 x5 h2 y3 ff1 fs0 fc0 sc0 ls0 ws0">Відстань від фундаменту до верху воріт</div>
			<div class="t m1 x6 h2 y4 ff1 fs0 fc0 sc0 ls0 ws0">300</div>
			<div class="t m5 x7 h2 y5 ff1 fs0 fc0 sc0 ls0 ws0"><?php echo $l1; ?>-Відстань між роліковими опорами.</div>
			<div class="t m1 x8 h2 y6 ff1 fs0 fc0 sc0 ls0 ws0">250</div>
			<div class="t m6 x9 h2 y7 ff1 fs0 fc0 sc0 ls0 ws0"><?php echo $l2; ?>-довжина зубчатої рейки</div>
			<div class="t m7 xa h2 y8 ff1 fs0 fc0 sc0 ls0 ws0"><?php echo $clearance_under_gate; ?>-відстань від низу воріт</div>
			<div class="t m8 xb h2 y9 ff1 fs0 fc0 sc0 ls0 ws0">до фундаменту</div>
			<div class="t m9 xc h2 ya ff1 fs0 fc0 sc0 ls0 ws0"><?php echo $a; ?></div>
			<div class="t ma xd h2 yb ff1 fs0 fc1 sc0 ls0 ws0">450</div>
			<div class="t ma x8 h3 yc ff1 fs1 fc1 sc0 ls0 ws0">Встановлення та кріаленя кінцевого роліка показано на розрізі AD-AD, та Вид АF (Лист_6)</div>
			<div class="t mb xe h3 yc ff1 fs1 fc1 sc0 ls0 ws0">1.</div>
			<div class="t mc xe h3 yd ff1 fs1 fc1 sc0 ls0 ws0">2. Уловитель нижній встановити в складальному вигляді воріт та роліків верхніх в горізонтальній поверхні на 3-4мм</div>
			<div class="t ma xe h3 ye ff1 fs1 fc1 sc0 ls0 ws0">вище кінцевого роліка, місцевий Вид L, Вид S, розріз F-F (Лист_1, Лист_5).</div>
			<div class="t md xe h3 yf ff1 fs1 fc1 sc0 ls0 ws0">2. *** Уловлювач верхній та верхній ролік встановити після встановленя уловлювача нижнього, місцевий Вид R, Вид Z,</div>
			<div class="t me xe h3 y10 ff1 fs1 fc1 sc0 ls0 ws0">Вид W, Вид J (Лист_1, Лист_5, Лист_6).</div>
			<div class="t mc xe h3 y11 ff1 fs1 fc1 sc0 ls0 ws0">3. Умова розміщеня привода воріт (зацепленя шестерні в зубчатій рейці) без натягу.</div>
			<div class="t mf xe h3 y12 ff1 fs1 fc1 sc0 ls0 ws0">4. Розмістити привід таким чином, щоб шестерня привода була розміщена по середині зубчатої рейки, місцевий вид АВ</div>
			<div class="t m6 xe h3 y13 ff1 fs1 fc1 sc0 ls0 ws0">(Лист_6). Бокова поверхня шестерні повиннна бути паралельна боковій поверхні рейки зубчатої.</div>
			<div class="t m5 xe h3 y14 ff1 fs1 fc1 sc0 ls0 ws0">5. Магнітні кінцевики (положеня-відкрито. закрито) встановити на зубчатій рейці по факту умови повного закривання та</div>
			<div class="t m10 xe h3 y15 ff1 fs1 fc1 sc0 ls0 ws0">відкривання воріт (Лист_1).</div>
			<div class="t m11 xe h3 y16 ff1 fs1 fc1 sc0 ls0 ws0">6. Кріпленя магнітного кінцевика вказано на розрізі AD-AD, Вид АЕ (Лист_6)</div>
			<div class="t m12 x0 h3 y17 ff1 fs1 fc1 sc0 ls0 ws0">Q <span class="_ _0"> </span> Q</div>
			<div class="t m13 xf h3 y18 ff1 fs1 fc1 sc0 ls0 ws0">J</div>
			<div class="t m12 x10 h3 y19 ff1 fs1 fc1 sc0 ls0 ws0">F <span class="_ _1"> </span> F</div>
			<div class="t m1 x11 h3 y1a ff1 fs1 fc1 sc0 ls0 ws0">L</div>
			<div class="t m12 x12 h3 y1b ff1 fs1 fc1 sc0 ls0 ws0">AD</div>
			<div class="t m12 x12 h3 y1c ff1 fs1 fc1 sc0 ls0 ws0">AD</div>
			<div class="t m13 x13 h3 y1d ff1 fs1 fc1 sc0 ls0 ws0">Z</div>
			<div class="t m12 x14 h3 y1e ff1 fs1 fc1 sc0 ls0 ws0">Z1</div>
			<div class="t m14 x15 h3 y1f ff1 fs1 fc1 sc0 ls0 ws0">I</div>
			<div class="t m12 x16 h3 y20 ff1 fs1 fc1 sc0 ls0 ws0">Y</div>
			<div class="t m15 x17 h4 y21 ff1 fs2 fc1 sc0 ls0 ws0">Магнітний кінцевик положеня-відкрито</div>
			<div class="t m16 x18 h4 y22 ff1 fs2 fc1 sc0 ls0 ws0">Магнітний кінцевик положеня-закрито</div>
			<div class="t m5 x19 h4 y23 ff1 fs2 fc1 sc0 ls0 ws0">Заглушка</div>
			<div class="t mf x1a h4 y24 ff1 fs2 fc1 sc0 ls0 ws0">задня</div>
			<div class="t m17 x1b h4 y25 ff1 fs2 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m18 x1c h3 y26 ff1 fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ Q-Q</div>
			<div class="t m19 x1d h3 y27 ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 20</div>
			<div class="t m1a x1e h3 y28 ff1 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ J</div>
			<div class="t m1b x1f h3 y29 ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 10</div>
			<div class="t m1c x20 h3 y2a ff1 fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ F-F</div>
			<div class="t m19 x21 h3 y2b ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 20</div>
			<div class="t m1d x22 h3 y2c ff1 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ L</div>
			<div class="t m1b x23 h3 y2d ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 10</div>
			<div class="t m1e x24 h3 y2e ff1 fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ AD-AD</div>
			<div class="t m19 x24 h3 y2f ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 20</div>
			<div class="t m1f x25 h3 y30 ff1 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ Z</div>
			<div class="t m1b x26 h3 y31 ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 10</div>
			<div class="t m20 x27 h3 y32 ff1 fs1 fc1 sc0 ls0 ws0">ВИД Z1</div>
			<div class="t m19 x28 h3 y33 ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 20</div>
			<div class="t m21 x29 h3 y34 ff1 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ I</div>
			<div class="t m1b x2a h3 y35 ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 10</div>
			<div class="t m22 x2b h3 y36 ff1 fs1 fc1 sc0 ls0 ws0">ВИД Y</div>
			<div class="t m19 x20 h3 y37 ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 20</div>
			<div class="t m23 x2c h4 y38 ff1 fs2 fc0 sc0 ls0 ws0">Лист_1</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "2")) : ?>
	<div id="pf2" class="pf w0 h0" data-page-no="2">
		<div class="watermark">novi-vorota.com.ua</div>
		<div class="pc pc2 w0 h0">
      <?php echo $image2; ?>
			<div class="t m1 x2e h4 y3a ff2 fs2 fc0 sc0 ls0 ws0">95</div>
			<div class="t m0 x2f h4 y3b ff2 fs2 fc0 sc0 ls0 ws0">100 <span class="_ _2"> </span> 100</div>
			<div class="t ma x30 h4 y3c ff2 fs2 fc0 sc0 ls0 ws0">240</div>
			<div class="t m24 x31 h4 y3d ff2 fs2 fc0 sc0 ls0 ws0">500</div>
			<div class="t m2 x32 h4 y3e ff2 fs2 fc0 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m25 x33 h4 y3f ff2 fs2 fc0 sc0 ls0 ws0"><?php echo $l1; ?></div>
			<div class="t m26 x34 h4 y40 ff2 fs2 fc0 sc0 ls0 ws0"><?php echo $b5; ?></div>
			<div class="t m3 x35 h4 y41 ff2 fs2 fc0 sc0 ls0 ws0"><?php echo $b4; ?></div>
			<div class="t m1 xe h4 y42 ff2 fs2 fc0 sc0 ls0 ws0">95</div>
			<div class="t m27 x36 h4 y43 ff2 fs2 fc0 sc0 ls0 ws0"><?php echo $a7; ?></div>
			<div class="t m28 x37 h4 y44 ff2 fs2 fc0 sc0 ls0 ws0"><?php echo $a6; ?></div>
			<div class="t m12 x38 h3 y45 ff2 fs1 fc1 sc0 ls0 ws0">A <span class="_ _3"> </span> A</div>
			<div class="t m12 x39 h3 y46 ff2 fs1 fc1 sc0 ls0 ws0">N</div>
			<div class="t m28 x3a h4 y47 ff2 fs2 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m29 x3b h4 y48 ff2 fs2 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m2a x33 h4 y49 ff2 fs2 fc1 sc0 ls0 ws0">для роліка опорного</div>
			<div class="t m2b x3c h4 y4a ff2 fs2 fc1 sc0 ls0 ws0">переднього</div>
			<div class="t m28 x3a h4 y4b ff2 fs2 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m29 x3b h4 y4c ff2 fs2 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m2a x33 h4 y4d ff2 fs2 fc1 sc0 ls0 ws0">для роліка опорного</div>
			<div class="t m2c x3d h4 y4e ff2 fs2 fc1 sc0 ls0 ws0">заднього</div>
			<div class="t m28 x3e h4 y4f ff2 fs2 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m29 x6 h4 y50 ff2 fs2 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m9 x3f h4 y51 ff2 fs2 fc1 sc0 ls0 ws0">для кронштейна</div>
			<div class="t m16 x40 h4 y52 ff2 fs2 fc1 sc0 ls0 ws0">привода</div>
			<div class="t m2d x41 h4 y53 ff2 fs2 fc1 sc0 ls0 ws0">Ролік задній розмістити в складальному вигляді з рамою воріт</div>
			<div class="t m19 x41 h4 y54 ff2 fs2 fc1 sc0 ls0 ws0">максимально віддаленим по довжині хвостовика воріт.</div>
			<div class="t m2e x42 h4 y55 ff2 fs2 fc1 sc0 ls0 ws0">11</div>
			<div class="t m25 x43 h4 y56 ff2 fs2 fc1 sc0 ls0 ws0">10</div>
			<div class="t m28 x44 h4 y57 ff2 fs2 fc0 sc0 ls0 ws0"><?php echo $a5; ?></div>
			<div class="t m1 x45 h4 y58 ff2 fs2 fc0 sc0 ls0 ws0">95</div>
			<div class="t m2f x1 h4 y59 ff2 fs2 fc0 sc0 ls0 ws0">160</div>
			<div class="t ma x46 h4 y5a ff2 fs2 fc0 sc0 ls0 ws0">240</div>
			<div class="t m1 x47 h4 y5b ff2 fs2 fc0 sc0 ls0 ws0">60</div>
			<div class="t m26 x48 h4 y5c ff2 fs2 fc0 sc0 ls0 ws0">40</div>
			<div class="t m9 x49 h3 y5d ff2 fs1 fc1 sc0 ls0 ws0">A-A МАСШТАБ1 : 16</div>
			<div class="t m30 x4a h4 y5e ff2 fs2 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m31 x4b h4 y5f ff2 fs2 fc1 sc0 ls0 ws0">Стовп</div>
			<div class="t m32 x4c h4 y60 ff2 fs2 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m33 x4d h4 y61 ff2 fs2 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m29 x4e h4 y62 ff2 fs2 fc1 sc0 ls0 ws0">(Розміщення швелера відносно стовпа)</div>
			<div class="t m28 x4f h4 y63 ff2 fs2 fc0 sc0 ls0 ws0"><?php echo $a8; ?></div>
			<div class="t m24 x50 h4 y64 ff2 fs2 fc0 sc0 ls0 ws0">500</div>
			<div class="t m13 x51 h3 y65 ff2 fs1 fc1 sc0 ls0 ws0">O</div>
			<div class="t m34 x52 h3 y66 ff2 fs1 fc1 sc0 ls0 ws0">ВИД N</div>
			<div class="t m1b x53 h3 y67 ff2 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 16</div>
			<div class="t m0 x54 h4 y68 ff2 fs2 fc0 sc0 ls0 ws0">160</div>
			<div class="t m1f x55 h3 y69 ff2 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ O</div>
			<div class="t m2d x54 h3 y6a ff2 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m30 x56 h4 y6b ff2 fs2 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m32 x57 h4 y6c ff2 fs2 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m33 x21 h4 y6d ff2 fs2 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m35 x58 h4 y6e ff2 fs2 fc0 sc0 ls0 ws0">Лист_2</div>
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
			<div class="t m9 x59 h4 y70 ff3 fs2 fc0 sc0 ls0 ws0"><?php echo $a; ?></div>
			<div class="t m28 x5a h4 y71 ff3 fs2 fc0 sc0 ls0 ws0"><?php echo $a2; ?></div>
			<div class="t m26 x5b h4 y72 ff3 fs2 fc0 sc0 ls0 ws0"><?php echo $b2; ?></div>
			<div class="t m36 x5c h4 y73 ff3 fs2 fc0 sc0 ls0 ws0"><?php echo $b1; ?></div>
			<div class="t m37 x5d h7 y74 ff3 fs3 fc0 sc0 ls0 ws0"><?php echo $g; ?></div>
			<div class="t m28 x5e h4 y75 ff3 fs2 fc0 sc0 ls0 ws0"><?php echo $a3; ?></div>
			<div class="t m2b x5f h4 y76 ff3 fs2 fc0 sc0 ls0 ws0"><?php echo $c; ?></div>
			<div class="t m25 x60 h4 y77 ff3 fs2 fc0 sc0 ls0 ws0"><?php echo $c1; ?> <span class="_ _4"> </span> <?php echo $c1; ?> <span class="_ _5"> </span> <?php echo $c1; ?> <span class="_ _6"> </span> <?php echo $c1; ?></div>
			<div class="t m3 x61 h4 y78 ff3 fs2 fc0 sc0 ls0 ws0"><?php echo $d; ?></div>
			<div class="t m3 x61 h4 y79 ff3 fs2 fc0 sc0 ls0 ws0"><?php echo $d; ?></div>
			<div class="t m38 x62 h8 y7a ff3 fs4 fc1 sc0 ls0 ws0"><?php echo $g1; ?></div>
			<div class="t m38 x62 h8 y7b ff3 fs4 fc1 sc0 ls0 ws0"><?php echo $g1; ?></div>
			<div class="t m9 x11 h3 y7c ff3 fs1 fc1 sc0 ls0 ws0">A</div>
			<div class="t m13 x63 h3 y7d ff3 fs1 fc1 sc0 ls0 ws0">B</div>
			<div class="t m1 x64 h3 y7e ff3 fs1 fc1 sc0 ls0 ws0">C</div>
			<div class="t m13 x65 h3 y7f ff3 fs1 fc1 sc0 ls0 ws0">D</div>
			<div class="t m1 x66 h3 y80 ff3 fs1 fc1 sc0 ls0 ws0">E</div>
			<div class="t m39 x67 h9 y81 ff3 fs5 fc1 sc0 ls0 ws0">1</div>
			<div class="t m3a x68 h9 y82 ff3 fs5 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3a x69 h9 y83 ff3 fs5 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3b x40 h9 y84 ff3 fs5 fc1 sc0 ls0 ws0">4</div>
			<div class="t m3a x1 h9 y85 ff3 fs5 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3a x20 h9 y86 ff3 fs5 fc1 sc0 ls0 ws0">6</div>
			<div class="t m3a x6a h9 y87 ff3 fs5 fc1 sc0 ls0 ws0">7</div>
			<div class="t m3a x6b h9 y88 ff3 fs5 fc1 sc0 ls0 ws0">7</div>
			<div class="t m3a x6c h9 y89 ff3 fs5 fc1 sc0 ls0 ws0">7</div>
			<div class="t m3a x6d h9 y8a ff3 fs5 fc1 sc0 ls0 ws0">7</div>
			<div class="t m3a x6e h9 y89 ff3 fs5 fc1 sc0 ls0 ws0">7</div>
			<div class="t m3a x6f h9 y8a ff3 fs5 fc1 sc0 ls0 ws0">7</div>
			<div class="t m3a x70 h9 y8b ff3 fs5 fc1 sc0 ls0 ws0">8</div>
			<div class="t m3a x71 h9 y8c ff3 fs5 fc1 sc0 ls0 ws0">8</div>
			<div class="t m3a x72 h9 y8d ff3 fs5 fc1 sc0 ls0 ws0">9</div>
			<div class="t m1e x73 h3 y8e ff3 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ A</div>
			<div class="t m2d x74 h3 y8f ff3 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 6</div>
			<div class="t m3a x46 h9 y90 ff3 fs5 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3a x75 h9 y91 ff3 fs5 fc1 sc0 ls0 ws0">5</div>
			<div class="t m1f x76 h3 y92 ff3 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ B</div>
			<div class="t m2d x32 h3 y93 ff3 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 6</div>
			<div class="t m3a x77 h9 y94 ff3 fs5 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3a x78 h9 y95 ff3 fs5 fc1 sc0 ls0 ws0">2</div>
			<div class="t m39 x79 h9 y96 ff3 fs5 fc1 sc0 ls0 ws0">1</div>
			<div class="t m1d x7a h3 y97 ff3 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ C</div>
			<div class="t m2d x7b h3 y98 ff3 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 6</div>
			<div class="t m3a x7c h9 y99 ff3 fs5 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3b x7d h9 y9a ff3 fs5 fc1 sc0 ls0 ws0">4</div>
			<div class="t m3a x7e h9 y9b ff3 fs5 fc1 sc0 ls0 ws0">8</div>
			<div class="t m3a x7f h9 y9c ff3 fs5 fc1 sc0 ls0 ws0">9</div>
			<div class="t m1f x80 h3 y9d ff3 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ D</div>
			<div class="t m2d x81 h3 y9e ff3 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 6</div>
			<div class="t m3b x82 h9 y9f ff3 fs5 fc1 sc0 ls0 ws0">4</div>
			<div class="t m39 x83 h9 ya0 ff3 fs5 fc1 sc0 ls0 ws0">1</div>
			<div class="t m3a x84 h9 ya1 ff3 fs5 fc1 sc0 ls0 ws0">2</div>
			<div class="t m1d x85 h3 ya2 ff3 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ E</div>
			<div class="t m2d x31 h3 ya3 ff3 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 6</div>
			<div class="t m3a x86 h9 ya4 ff3 fs5 fc1 sc0 ls0 ws0">9</div>
			<div class="t m3a x87 h9 ya5 ff3 fs5 fc1 sc0 ls0 ws0">2</div>
			<div class="t m39 x88 h9 ya6 ff3 fs5 fc1 sc0 ls0 ws0">1</div>
			<div class="t m35 xa h4 ya7 ff3 fs2 fc0 sc0 ls0 ws0">Лист_3</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "4")) : ?>
	<div id="pf4" class="pf w4 ha" data-page-no="4" style="transform: rotate(90deg) scale(1.1) translate(0, -5%); transform-origin: center;">
		<div class="watermark">novi-vorota.com.ua</div>
		<div class="pc pc4 w4 ha">
      <?php echo $image4; ?>
			<div class="c x89 ya9 w6 hc">
				<div class="t m3c x8a hd yaa ff4 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m3c x8b hd yab ff4 fs6 fc1 sc0 ls0 ws0"><?php echo $g1; ?></div>
				<div class="t m3c x8c hd yac ff4 fs6 fc1 sc0 ls0 ws0"><?php echo $c; ?></div>
				<div class="t m3c x8d hd yad ff4 fs6 fc1 sc0 ls0 ws0"><?php echo $d; ?></div>
				<div class="t m3c x36 hd yae ff4 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3d x81 hd yaf ff4 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m3c x8e hd yb0 ff4 fs6 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3d x8f hd yb1 ff4 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m3c x90 hd yb2 ff4 fs6 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3d x91 hd yb3 ff4 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m3c x90 hd yb4 ff4 fs6 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3d x92 hd yb5 ff4 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m3c x41 hd yb6 ff4 fs6 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3d x92 hd yb7 ff4 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m3c x93 hd yb8 ff4 fs6 fc1 sc0 ls0 ws0"><?php echo $a; ?></div>
				<div class="t m3c x36 hd yb9 ff4 fs6 fc1 sc0 ls0 ws0">70</div>
				<div class="t m3d x94 hd yba ff4 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3c x95 hd ybb ff4 fs6 fc1 sc0 ls0 ws0"><?php echo $g; ?></div>
				<div class="t m3c x96 hd ybc ff4 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3d x97 hd ybd ff4 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m3c x36 hd ybe ff4 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3d x97 hd ybf ff4 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m3c x98 hd yc0 ff4 fs6 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3d x90 hd yc1 ff4 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m3c x99 hd yc2 ff4 fs6 fc1 sc0 ls0 ws0"><?php echo $a2; ?></div>
				<div class="t m3c x9a hd yc3 ff4 fs6 fc1 sc0 ls0 ws0">71</div>
				<div class="t m3c x9b hd yc4 ff5 fs6 fc1 sc0 ls0 ws0"><?php echo $a1; ?></div>
				<div class="t m3c x9c hd yc5 ff4 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3d x9d hd yc6 ff4 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m3c x8f hd yc7 ff4 fs6 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3d x9e hd yc8 ff4 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m3c x36 hd yc9 ff4 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3d x81 hd yca ff4 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m3c x8e hd ycb ff4 fs6 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3d x8f hd ycc ff4 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m3c x9f hd ycd ff5 fs6 fc1 sc0 ls0 ws0"><?php echo $b1; ?></div>
				<div class="t m3c xa0 hd yce ff4 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m3c x4c he ycf ff4 fs7 fc1 sc0 ls0 ws0">1.</div>
				<div class="t m3c x75 he yd0 ff4 fs7 fc1 sc0 ls0 ws0">2.</div>
				<div class="t m3c xa1 he yd1 ff4 fs7 fc1 sc0 ls0 ws0">3.</div>
				<div class="t m3c x75 he yd2 ff4 fs7 fc1 sc0 ls0 ws0">4.</div>
				<div class="t m3c xa1 he yd3 ff4 fs7 fc1 sc0 ls0 ws0">5.</div>
				<div class="t m3c x75 he yd4 ff4 fs7 fc1 sc0 ls0 ws0">6.</div>
				<div class="t m3c x4c he yd5 ff4 fs7 fc1 sc0 ls0 ws0">7.</div>
				<div class="t m3c x4c he yd6 ff4 fs7 fc1 sc0 ls0 ws0">8.</div>
				<div class="t m3c x4c he yd7 ff4 fs7 fc1 sc0 ls0 ws0">9.</div>
				<div class="t m3d xa2 hd yc1 ff4 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m3c x78 hd yd8 ff5 fs6 fc1 sc0 ls0 ws0"><?php echo $a3; ?></div>
				<div class="t m3c xa3 hd yd9 ff4 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m3d xa4 hd yda ff4 fs6 fc1 sc0 ls0 ws0">38</div>
				<div class="t m3d x74 hd ydb ff4 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m3d xa5 hd yda ff4 fs6 fc1 sc0 ls0 ws0">38</div>
				<div class="t m3d x6f hd ydb ff4 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m3c xa6 hd ydc ff4 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m3c xa7 hd ydd ff4 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m3c xa8 hd yde ff5 fs6 fc1 sc0 ls0 ws0"><?php echo $b2; ?></div>
				<div class="t m3c xa9 hd ydf ff5 fs6 fc1 sc0 ls0 ws0"><?php echo $b5; ?></div>
				<div class="t m3c xaa hd ye0 ff4 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3d x91 hd ye1 ff4 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m3c xab he ye2 ff4 fs7 fc1 sc0 ls0 ws0">11.</div>
				<div class="t m3c xab he ye3 ff4 fs7 fc1 sc0 ls0 ws0">10.</div>
				<div class="t m3d x97 hd ye4 ff4 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3c xac hd ye5 ff4 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m3c x95 hd ye6 ff5 fs6 fc1 sc0 ls0 ws0"><?php echo $b4; ?></div>
				<div class="t m3c xad hf ye7 ff5 fs8 fc1 sc0 ls0 ws0">Порізка профілей на заготовки</div>
				<div class="t m3c xad hf ye8 ff5 fs8 fc1 sc0 ls0 ws0">Порізка нащільника заднього</div>
				<div class="t m3c xad hf ye9 ff5 fs8 fc1 sc0 ls0 ws0">Порізка нащільника переднього</div>
				<div class="t m3c xae he ycf ff5 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m3c xae he yea ff5 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m3c xae he yeb ff5 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m3c xae he yec ff5 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m3c xae he yed ff5 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m3c xae he yee ff5 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m3c xaf he yef ff5 fs7 fc1 sc0 ls0 ws0">6шт.</div>
				<div class="t m3c xaf he yf0 ff5 fs7 fc1 sc0 ls0 ws0">2шт.</div>
				<div class="t m3c xae he yf1 ff5 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m3c xae he yf2 ff5 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m3c xae he yf3 ff5 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m3c x7f hd yf4 ff4 fs6 fc1 sc0 ls0 ws0">80</div>
				<div class="t m3d xb0 hd yf5 ff4 fs6 fc1 sc0 ls0 ws0">48</div>
				<div class="t m3c xb1 h10 yf6 ff5 fs9 fc2 sc0 ls0 ws0">Лист_4</div>
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
			<div class="t m3 xa1 h4 yfc ff9 fs2 fc0 sc0 ls0 ws0">(**)</div>
			<div class="t m3f x6b h4 yfd ff9 fs2 fc0 sc0 ls0 ws0"><?php echo $b5; ?> (висота розміщеня уловлювача верхнього</div>
			<div class="t m40 xb4 h4 yfe ff9 fs2 fc0 sc0 ls0 ws0">по висоті воріт)</div>
			<div class="t m2 xb5 h4 yff ff9 fs2 fc0 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m41 xb6 h4 y100 ff9 fs2 fc0 sc0 ls0 ws0"><?php echo $b4; ?> Висота розміщеня верхнього роліка</div>
			<div class="t m3f x21 h4 y101 ff9 fs2 fc0 sc0 ls0 ws0">по нащільнику задньому</div>
			<div class="t m1 xb7 h4 y102 ff9 fs2 fc0 sc0 ls0 ws0">95 <span class="_ _7"> </span> 95</div>
			<div class="t m4 x92 h4 y103 ff9 fs2 fc1 sc0 ls0 ws0">Відстань від фундаменту до верху воріт</div>
			<div class="t m13 xb8 h4 y104 ff9 fs2 fc1 sc0 ls0 ws0">R</div>
			<div class="t m13 xb9 h4 y105 ff9 fs2 fc1 sc0 ls0 ws0">S</div>
			<div class="t m42 xba h4 y106 ff9 fs2 fc1 sc0 ls0 ws0">Кріпленя нащільника переднього та заднього провести на закладні зварюваням.</div>
			<div class="t mb xbb h4 y106 ff9 fs2 fc1 sc0 ls0 ws0">1.</div>
			<div class="t mc x20 h4 y107 ff9 fs2 fc1 sc0 ls0 ws0">** Уловлювач нижній розмістити в складальному вигляді з стулкою воріт та роліками</div>
			<div class="t m2e xbb h4 y107 ff9 fs2 fc1 sc0 ls0 ws0">2.</div>
			<div class="t m43 xbb h4 y108 ff9 fs2 fc1 sc0 ls0 ws0">опорними в горізонтальній поверхні на 3мм-4мм вище роліка кінцевого.</div>
			<div class="t m44 xbb h4 y109 ff9 fs2 fc1 sc0 ls0 ws0">3. Ролік верхній розмістити по висоті нащільника заднього.</div>
			<div class="t m25 xbc h4 y10a ff9 fs2 fc1 sc0 ls0 ws0">10</div>
			<div class="t m2e xb8 h4 y10b ff9 fs2 fc1 sc0 ls0 ws0">11</div>
			<div class="t m23 xbd h4 y10c ff9 fs2 fc1 sc0 ls0 ws0">W</div>
			<div class="t m31 xb8 h4 y10d ff9 fs2 fc1 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m45 xbe h4 y10e ff9 fs2 fc1 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m46 xbf h4 y10e ff9 fs2 fc1 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m23 xc0 h3 y10f ff9 fs1 fc1 sc0 ls0 ws0">W</div>
			<div class="t m13 xc1 h3 y110 ff9 fs1 fc1 sc0 ls0 ws0">R</div>
			<div class="t m13 xc2 h3 y111 ff9 fs1 fc1 sc0 ls0 ws0">S</div>
			<div class="t m47 xc3 h3 y112 ff9 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ W</div>
			<div class="t m11 xc4 h3 y113 ff9 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m46 x84 h4 y114 ff9 fs2 fc1 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m9 xc5 h4 y115 ff9 fs2 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m33 xc6 h4 y116 ff9 fs2 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m1f x45 h3 y117 ff9 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ R</div>
			<div class="t m11 xc7 h3 y118 ff9 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m9 xc8 h4 y119 ff9 fs2 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m48 x4b h4 y11a ff9 fs2 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m49 xc9 h4 y11b ff9 fs2 fc1 sc0 ls0 ws0">Уловитель верхній</div>
			<div class="t m1f xca h3 y11c ff9 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ S</div>
			<div class="t m11 x78 h3 y11d ff9 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m28 xcb h4 y11e ff9 fs2 fc1 sc0 ls0 ws0">Уловитель нижній</div>
			<div class="t m9 xcc h4 y11f ff9 fs2 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m48 xcd h4 y120 ff9 fs2 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m36 x66 h4 y121 ff9 fs2 fc0 sc0 ls0 ws0"><?php echo $r1; ?></div>
			<div class="t m26 xce h4 y122 ff9 fs2 fc0 sc0 ls0 ws0"><?php echo $r2; ?></div>
			<div class="t m4a xcf h16 y123 ff9 fsc fc0 sc0 ls0 ws0">Встановити в міжцегляному</div>
			<div class="t m4b xd0 h16 y124 ff9 fsc fc0 sc0 ls0 ws0">шву на відстані півцегли</div>
			<div class="t m4c x25 h16 y125 ff9 fsc fc0 sc0 ls0 ws0">відносно внутнішньої</div>
			<div class="t m4d xd1 h16 y126 ff9 fsc fc0 sc0 ls0 ws0">поверхні стовпа.</div>
			<div class="t m4e xd2 h3 y127 ff9 fs1 fc0 sc0 ls0 ws0">Встановити в міжцегляному</div>
			<div class="t m4f xd3 h3 y128 ff9 fs1 fc0 sc0 ls0 ws0">шву на відстані півцегли</div>
			<div class="t m50 xd4 h3 y129 ff9 fs1 fc0 sc0 ls0 ws0">відносно внутрішньої</div>
			<div class="t m51 xd5 h3 y12a ff9 fs1 fc0 sc0 ls0 ws0">поверхні стовпа.</div>
			<div class="t m12 x3c h3 y12b ff9 fs1 fc1 sc0 ls0 ws0">АА <span class="_ _8"> </span> АА</div>
			<div class="t m52 xd6 h4 y12c ff9 fs2 fc1 sc0 ls0 ws0">СЕЧЕНИЕ АА-АА</div>
			<div class="t m11 xd7 h4 y12d ff9 fs2 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m53 xd1 h4 y12e ff9 fs2 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m11 xd3 h4 y12f ff9 fs2 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m53 xd8 h4 y130 ff9 fs2 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m11 xd9 h4 y131 ff9 fs2 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m53 x14 h4 y132 ff9 fs2 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m11 xd9 h4 y133 ff9 fs2 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m53 x14 h4 y134 ff9 fs2 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m54 x5a h4 y135 ff9 fs2 fc1 sc0 ls0 ws0">(4 місця)</div>
			<div class="t m55 xda h3 y136 ff9 fs1 fc1 sc0 ls0 ws0">АА-АА</div>
			<div class="t m2d xdb h3 y137 ff9 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m12 xdc h3 y138 ff9 fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕАА <span class="_ _9"> </span> СЕЧЕНИЕАА</div>
			<div class="t m1b x20 h3 y139 ff9 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 10</div>
			<div class="t m9 xdd h4 y13a ff9 fs2 fc1 sc0 ls0 ws0">Закладна нащільника</div>
			<div class="t m35 x4 h4 y13b ff9 fs2 fc0 sc0 ls0 ws0">Лист_5</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "6")) : ?>
	<div id="pf6" class="pf w0 h0" data-page-no="6">
		<div class="watermark">novi-vorota.com.ua</div>
		<div class="pc pc6 w0 h0">
      <?php echo $image6; ?>
			<div class="t m1a xdf h3 y13d ffa fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ J</div>
			<div class="t m2d xe0 h3 y13e ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m45 xe1 h4 y13f ffa fs2 fc1 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m56 xe2 h4 y140 ffa fs2 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m57 xe3 h4 y141 ffa fs2 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m1d xe4 h3 y142 ffa fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ L</div>
			<div class="t m2d x1b h3 y143 ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m31 xe2 h4 y144 ffa fs2 fc1 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m56 x99 h4 y145 ffa fs2 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m57 xe5 h4 y146 ffa fs2 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m1f xe6 h3 y147 ffa fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ Z</div>
			<div class="t m2d x6d h3 y148 ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m46 xe7 h4 y149 ffa fs2 fc1 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m56 xe8 h4 y14a ffa fs2 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m57 xcd h4 y14b ffa fs2 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t ma xe9 h4 y14c ffa fs2 fc0 sc0 ls0 ws0">450</div>
			<div class="t m2b xea h4 y14d ffa fs2 fc0 sc0 ls0 ws0">300</div>
			<div class="t m21 xca h18 y14e ffa fsd fc1 sc0 ls0 ws0">МЕСТНЫЙ I</div>
			<div class="t m43 xeb h18 y14f ffa fsd fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m17 xec h4 y150 ffa fs2 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t mc x34 h4 y151 ffa fs2 fc1 sc0 ls0 ws0">Ролік</div>
			<div class="t m2b x4b h4 y152 ffa fs2 fc1 sc0 ls0 ws0">опорний</div>
			<div class="t m48 xe2 h4 y153 ffa fs2 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m58 xed h4 y154 ffa fs2 fc1 sc0 ls0 ws0">Нащільник задній</div>
			<div class="t m59 x12 h4 y155 ffa fs2 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m23 xee h4 y156 ffa fs2 fc1 sc0 ls0 ws0">армований</div>
			<div class="t m5a xef h4 y151 ffa fs2 fc1 sc0 ls0 ws0">Кронштейн</div>
			<div class="t m16 xf0 h4 y152 ffa fs2 fc1 sc0 ls0 ws0">привода</div>
			<div class="t m49 xbf h4 y157 ffa fs2 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m5b xa7 h4 y158 ffa fs2 fc1 sc0 ls0 ws0">Рейка зубчата</div>
			<div class="t m5c x9c h18 y159 ffa fsd fc1 sc0 ls0 ws0">AB</div>
			<div class="t m5d xf1 h18 y15a ffa fsd fc1 sc0 ls0 ws0">МЕСТНЫЙ Z1</div>
			<div class="t m43 x25 h18 y15b ffa fsd fc1 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m49 xf2 h4 y15c ffa fs2 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m5e xf3 h4 y15d ffa fs2 fc1 sc0 ls0 ws0">Кінцевик</div>
			<div class="t m5f x18 h4 y15e ffa fs2 fc1 sc0 ls0 ws0">магнітний_закрито</div>
			<div class="t m60 x34 h18 y15f ffa fsd fc1 sc0 ls0 ws0">МЕСТНЫЙ AB</div>
			<div class="t m43 xf4 h18 y160 ffa fsd fc1 sc0 ls0 ws0">МАСШТАБ 1 : 3</div>
			<div class="t m49 xf5 h4 y161 ffa fs2 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m61 xf6 h4 y162 ffa fs2 fc1 sc0 ls0 ws0">Кінцевик магнітний</div>
			<div class="t m62 x76 h4 y163 ffa fs2 fc1 sc0 ls0 ws0">(положення-закрито)</div>
			<div class="t m63 xf7 h4 y164 ffa fs2 fc1 sc0 ls0 ws0">Рейка</div>
			<div class="t m64 x10 h4 y165 ffa fs2 fc1 sc0 ls0 ws0">зубчата</div>
			<div class="t m65 x0 h4 y166 ffa fs2 fc1 sc0 ls0 ws0">Шестерня</div>
			<div class="t m66 xf8 h4 y167 ffa fs2 fc1 sc0 ls0 ws0">Клепальна гайка</div>
			<div class="t m67 xf9 h4 y168 ffa fs2 fc1 sc0 ls0 ws0">(кріпленя зубчатої рейки)</div>
			<div class="t m17 xfa h4 y169 ffa fs2 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t mc xfb h4 y16a ffa fs2 fc1 sc0 ls0 ws0">Ролік</div>
			<div class="t m2b xfc h4 y16b ffa fs2 fc1 sc0 ls0 ws0">опорний</div>
			<div class="t m33 xfa h4 y16c ffa fs2 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m44 xde h4 y16c ffa fs2 fc1 sc0 ls0 ws0">Кронштейн привода</div>
			<div class="t m68 xfd h18 y16d ffa fsd fc1 sc0 ls0 ws0">AE</div>
			<div class="t m68 xfe h18 y16e ffa fsd fc1 sc0 ls0 ws0">AF</div>
			<div class="t m69 x1a h18 y16f ffa fsd fc1 sc0 ls0 ws0">СЕЧЕНИЕ AD-AD</div>
			<div class="t m43 x88 h18 y170 ffa fsd fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m24 xff h4 y171 ffa fs2 fc0 sc0 ls0 ws0">20</div>
			<div class="t m26 x100 h4 y172 ffa fs2 fc0 sc0 ls0 ws0">40</div>
			<div class="t m6a x5a h18 y173 ffa fsd fc1 sc0 ls0 ws0">МЕСТНЫЙ AE</div>
			<div class="t m55 xf0 h18 y174 ffa fsd fc1 sc0 ls0 ws0">МАСШТАБ 1 : 1.5</div>
			<div class="t m5e x101 h4 y175 ffa fs2 fc1 sc0 ls0 ws0">Кінцевик</div>
			<div class="t m9 x6d h4 y176 ffa fs2 fc1 sc0 ls0 ws0">магнітний</div>
			<div class="t m6b x102 h4 y177 ffa fs2 fc1 sc0 ls0 ws0">відкрито</div>
			<div class="t m5b x103 h4 y178 ffa fs2 fc1 sc0 ls0 ws0">Рейка зубчата</div>
			<div class="t m5b x104 h4 y179 ffa fs2 fc1 sc0 ls0 ws0">Клепальна гайка</div>
			<div class="t m6c x105 h4 y17a ffa fs2 fc1 sc0 ls0 ws0">кріпленя рейки зубчатої</div>
			<div class="t m6a x106 h18 y17b ffa fsd fc1 sc0 ls0 ws0">МЕСТНЫЙ AF</div>
			<div class="t m43 x107 h18 y17c ffa fsd fc1 sc0 ls0 ws0">МАСШТАБ 1 : 2</div>
			<div class="t m6d xf3 h4 y17d ffa fs2 fc1 sc0 ls0 ws0">Кінцевий ролік</div>
			<div class="t m28 xaa h4 y17e ffa fs2 fc1 sc0 ls0 ws0">Профіль</div>
			<div class="t m6e x108 h4 y17f ffa fs2 fc1 sc0 ls0 ws0">Прижимна</div>
			<div class="t m23 xbd h4 y180 ffa fs2 fc1 sc0 ls0 ws0">планка</div>
			<div class="t m17 x109 h4 y181 ffa fs2 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m6f x10a h18 y182 ffa fsd fc1 sc0 ls0 ws0">Q <span class="_ _a"> </span> Q</div>
			<div class="t m6f x10b h18 y183 ffa fsd fc1 sc0 ls0 ws0">F <span class="_ _b"> </span> F</div>
			<div class="t m5d x10c h18 y184 ffa fsd fc1 sc0 ls0 ws0">СЕЧЕНИЕQ-Q</div>
			<div class="t m43 xff h18 y185 ffa fsd fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m32 x10d h4 y186 ffa fs2 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m48 x10e h4 y187 ffa fs2 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m45 x7d h4 y188 ffa fs2 fc1 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m56 x10f h4 y189 ffa fs2 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m57 x110 h4 y18a ffa fs2 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m70 x111 h3 y18b ffa fs1 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m53 x111 h3 y18c ffa fs1 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m52 xd5 h18 y18d ffa fsd fc1 sc0 ls0 ws0">СЕЧЕНИЕ F-F</div>
			<div class="t m43 x112 h18 y18e ffa fsd fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m56 x113 h4 y18f ffa fs2 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m57 x114 h4 y190 ffa fs2 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m31 x115 h4 y191 ffa fs2 fc1 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m32 x116 h4 y192 ffa fs2 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m48 x117 h4 y193 ffa fs2 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m35 x118 h3 y194 ffa fs1 fc0 sc0 ls0 ws0">Лист_6</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif; ?>
</div>

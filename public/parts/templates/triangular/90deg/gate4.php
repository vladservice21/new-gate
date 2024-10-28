<?php
  $image1 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/90deg/gate_images4/image1.svg");
  $image2 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/90deg/gate_images4/image2.svg");
  $image3 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/90deg/gate_images4/image3.svg");
  $image4 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/90deg/gate_images4/image4.svg");
  $image5 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/90deg/gate_images4/image5.svg");
  $image6 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/90deg/gate_images4/image6.svg");
  $css    = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/styles/triangular/90deg/gate4.css");
  $a1 = '';
  $a2 = '';
  $b2 = '';

  if($wicket == 'on') {
  $start_gate1 = 69;
  $pillar1 = 155;
  $image_width1 = 915.28;
  $result_left1 = $image_width1/$manual_a*$wicket_left+$start_gate1;

  $start_gate2 = 65;
  $pillar2 = 155;
  $image_width2 = 1030.79;
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
  $c1 = ($a3 - 260) / 5;
  $d = ($b1 - 128) / 2;
  $g = round(100 + (sqrt((($b1 + 42) * ($b1 + 42)) + ($a - $a3) * ($a - $a3))));
  $g1 = round(100 + (sqrt($c1 * $c1 + $d * $d)));
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
    top: 17.9%;
    left: <?=$result_left1?>px;
    width: 131.0px!important;
    height: 269px!important;
    z-index: 2;
}

.svg-line1 {
	position: absolute;
	background-color: gray;
    top: 18.7641%;
    left: <?=($result_left1+19)?>px;
    width: 93.0px!important;
    height: 1px!important;
    z-index: 3;
}

.svg-line2 {
	position: absolute;
	background-color: gray;
    top: 16.01%;
    left: <?=($result_left1+19)?>px;
    width: 1px!important;
    height: 50px!important;
    z-index: 3;
}

.svg-line3 {
	position: absolute;
	background-color: gray;
    top: 16.01%;
    left: <?=($result_left1+8+104)?>px;
    width: 1px!important;
    height: 50px!important;
    z-index: 3;
}

.svg-text1 {
	position: absolute;
	background-color: transparent;
	color: red;
	font-weight: 700;
    top: 17.01%;
    left: <?=($result_left1+19)?>px;
    width: 93.0px!important;
    z-index: 3;
    text-align: center;
}

.svg-line4 {
	position: absolute;
	background-color: gray;
    top: 62.71%;
    left: <?=($start_gate1)?>px;
    width: <?=(($result_left1)-53)?>px!important;
    height: 1px!important;
    z-index: 3;
}

.svg-line5 {
	position: absolute;
	background-color: gray;
    top: 47.71%;
    left: <?=($start_gate1)?>px;
    width: 1px!important;
    height: 150px!important;
    z-index: 3;
}

.svg-line6 {
	position: absolute;
	background-color: gray;
    top: 47.71%;
    left: <?=($result_left1+15)?>px;
    width: 1px!important;
    height: 150px!important;
    z-index: 3;
}

.svg-text2 {
	position: absolute;
	background-color: transparent;
	color: red;
	font-weight: 700;
    top: 60.71%;
    left: <?=($start_gate1)?>px;
    width: <?=(($result_left1)-53)?>px!important;
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
    top: 15.0%;
    left: <?=$result_left2?>px;
    width: 136.9px!important;
    height: 262px!important;
    z-index: 2;
}

.svg-line2_1 {
	position: absolute;
	background-color: gray;
    top: 13.71%;
    left: <?=($result_left2+20)?>px;
    width: 98.0px!important;
    height: 1px!important;
    z-index: 3;
}

.svg-line2_2 {
	position: absolute;
	background-color: gray;
    top: 12.01%;
    left: <?=($result_left2+20)?>px;
    width: 1px!important;
    height: 50px!important;
    z-index: 3;
}

.svg-line2_3 {
	position: absolute;
	background-color: gray;
    top: 12.01%;
    left: <?=($result_left2+5+112)?>px;
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
    left: <?=($result_left2+20)?>px;
    width: 98.0px!important;
    z-index: 3;
    text-align: center;
}

.svg-line2_4 {
	position: absolute;
	background-color: gray;
    top: 58.71%;
    left: <?=($start_gate2)?>px;
    width: <?=(($result_left2)-48)?>px!important;
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
    left: <?=($result_left2+16)?>px;
    width: 1px!important;
    height: 160px!important;
    z-index: 3;
}

.svg-text2_2 {
	position: absolute;
	background-color: transparent;
	color: red;
	font-weight: 700;
    top: 56.31%;
    left: <?=($start_gate2)?>px;
    width: <?=(($result_left2)-48)?>px!important;
    z-index: 3;
    text-align: center;
}

.svg-line2_7 {
	position: absolute;
    background-color: gray;
    top: 44.4%;
    left: 52px;
    width: 100px !important;
    height: 1px !important;
    z-index: 3;
}

.svg-line2_8 {
	position: absolute;
    background-color: gray;
    top: 17%;
    left: 60px;
    width: 1px !important;
    height: 231px !important;
    z-index: 3;
}

.svg-line2_9 {
  position: absolute;
    background-color: gray;
    top: 17%;
    left: 52px;
    width: 100px !important;
    height: 1px !important;
    z-index: 3;
}

.svg-text2_3 {
	position: absolute;
    background-color: transparent;
    text-align: center;
    top: 17%;
    left: 60px;
    width: 1px !important;
    height: 231px !important;
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
<!--<link rel='stylesheet' id='pdf-stylesheet-css' href='--><?php //=$_SERVER['APP_URL']?><!--/parts/styles/triangular/90deg/gate4.css' type='text/css' media='all' />-->
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
			<div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m1 x2 h2 y2 ff1 fs0 fc1 sc0 ls0 ws0">250</div>
			<div class="t m1 x3 h2 y3 ff1 fs0 fc2 sc0 ls0 ws0">300</div>
			<div class="t m2 x4 h2 y4 ff1 fs0 fc2 sc0 ls0 ws0"><?php echo $l1; ?>-відстань між роліковими опорами</div>
			<div class="t m3 x5 h2 y5 ff1 fs0 fc2 sc0 ls0 ws0"><?php echo $l2; ?>-довжина зубчатої рейки</div>
			<div class="t m4 x6 h2 y6 ff1 fs0 fc2 sc0 ls0 ws0"><?php echo $clearance_under_gate; ?>-відстань від низу воріт</div>
			<div class="t m5 x7 h2 y7 ff1 fs0 fc2 sc0 ls0 ws0">до фундаменту</div>
			<div class="t m6 x8 h2 y8 ff1 fs0 fc2 sc0 ls0 ws0">150</div>
			<div class="t m7 x7 h2 y9 ff1 fs0 fc2 sc0 ls0 ws0"><?php echo $b; ?></div>
			<div class="t m8 x9 h2 ya ff1 fs0 fc2 sc0 ls0 ws0">Відстань від фундаменту до верху воріт</div>
			<div class="t m1 xa h2 yb ff1 fs0 fc2 sc0 ls0 ws0">250</div>
			<div class="t m9 xb h2 yc ff1 fs0 fc2 sc0 ls0 ws0"><?php echo $a; ?></div>
			<div class="t m6 xc h2 yd ff1 fs0 fc2 sc0 ls0 ws0">130</div>
			<div class="t ma xd h2 ye ff1 fs0 fc0 sc0 ls0 ws0">450</div>
			<div class="t mb x0 h3 yf ff1 fs1 fc0 sc0 ls0 ws0">Q <span class="_ _0"> </span> Q</div>
			<div class="t mc xe h3 y10 ff1 fs1 fc0 sc0 ls0 ws0">J</div>
			<div class="t mb x0 h3 y11 ff1 fs1 fc0 sc0 ls0 ws0">F <span class="_ _1"> </span> F</div>
			<div class="t md xf h3 y12 ff1 fs1 fc0 sc0 ls0 ws0">L</div>
			<div class="t mb x10 h3 y13 ff1 fs1 fc1 sc0 ls0 ws0">AD</div>
			<div class="t mb x10 h3 y14 ff1 fs1 fc1 sc0 ls0 ws0">AD</div>
			<div class="t me x11 h3 y15 ff1 fs1 fc0 sc0 ls0 ws0">I</div>
			<div class="t mc x12 h3 y16 ff1 fs1 fc0 sc0 ls0 ws0">Z</div>
			<div class="t mf x13 h4 y17 ff1 fs2 fc0 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m10 x14 h4 y18 ff1 fs2 fc0 sc0 ls0 ws0">Магнітний кінцевик-положення відкрито</div>
			<div class="t m11 x15 h4 y19 ff1 fs2 fc0 sc0 ls0 ws0">Магнітний кінцевик-положення</div>
			<div class="t m12 x15 h4 y1a ff1 fs2 fc0 sc0 ls0 ws0">закрито</div>
			<div class="t m13 x16 h3 y1b ff1 fs1 fc0 sc0 ls0 ws0">СЕЧЕНИЕQ-Q</div>
			<div class="t m14 x17 h3 y1c ff1 fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 23</div>
			<div class="t m15 x18 h3 y1d ff1 fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ J</div>
			<div class="t m16 x19 h3 y1e ff1 fs1 fc0 sc0 ls0 ws0">МАСШТАБ 2 : 23</div>
			<div class="t m17 x1a h3 y1f ff1 fs1 fc0 sc0 ls0 ws0">СЕЧЕНИЕ F-F</div>
			<div class="t m14 x1b h3 y20 ff1 fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 23</div>
			<div class="t m18 x1c h3 y21 ff1 fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ L</div>
			<div class="t m16 x1b h3 y22 ff1 fs1 fc0 sc0 ls0 ws0">МАСШТАБ 2 : 23</div>
			<div class="t m19 x1d h3 y23 ff1 fs1 fc0 sc0 ls0 ws0">СЕЧЕНИЕAD-AD</div>
			<div class="t m14 x1e h3 y24 ff1 fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 23</div>
			<div class="t m1a x1f h3 y25 ff1 fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ I</div>
			<div class="t m16 x20 h3 y26 ff1 fs1 fc0 sc0 ls0 ws0">МАСШТАБ 2 : 23</div>
			<div class="t m1b x21 h4 y27 ff1 fs2 fc0 sc0 ls0 ws0">Встановлення та кріаленя кінцевого роліка показано на розрізі AD-AD, та Вид АF (Лист_6)</div>
			<div class="t m1c x22 h4 y27 ff1 fs2 fc0 sc0 ls0 ws0">1.</div>
			<div class="t m1d x22 h4 y28 ff1 fs2 fc0 sc0 ls0 ws0">2. Уловитель нижній встановити в складальному вигляді воріт та роліків верхніх в горізонтальній поверхні на 3-4мм</div>
			<div class="t ma x22 h4 y29 ff1 fs2 fc0 sc0 ls0 ws0">вище кінцевого роліка, місцевий Вид L, Вид S, розріз F-F (Лист_1, Лист_5).</div>
			<div class="t m1e x22 h4 y2a ff1 fs2 fc0 sc0 ls0 ws0">2. *** Уловлювач верхній та верхній ролік встановити після встановленя уловлювача нижнього, місцевий Вид R, Вид Z,</div>
			<div class="t m1f x22 h4 y2b ff1 fs2 fc0 sc0 ls0 ws0">Вид W, Вид J (Лист_1, Лист_5, Лист_6).</div>
			<div class="t m1d x22 h4 y2c ff1 fs2 fc0 sc0 ls0 ws0">3. Умова розміщеня привода воріт (зацепленя шестерні в зубчатій рейці) без натягу.</div>
			<div class="t m20 x22 h4 y2d ff1 fs2 fc0 sc0 ls0 ws0">4. Розмістити привід таким чином, щоб шестерня привода була розміщена по середині зубчатої рейки, місцевий вид АВ</div>
			<div class="t m3 x22 h4 y2e ff1 fs2 fc0 sc0 ls0 ws0">(Лист_6). Бокова поверхня шестерні повиннна бути паралельна боковій поверхні рейки зубчатої.</div>
			<div class="t m21 x22 h4 y2f ff1 fs2 fc0 sc0 ls0 ws0">5. Магнітні кінцевики (положеня-відкрито. закрито) встановити на зубчатій рейці по факту умови повного закривання та</div>
			<div class="t m22 x22 h4 y30 ff1 fs2 fc0 sc0 ls0 ws0">відкривання воріт (Лист_1).</div>
			<div class="t m23 x22 h4 y31 ff1 fs2 fc0 sc0 ls0 ws0">6. Кріпленя магнітного кінцевика вказано на розрізі AD-AD, Вид АЕ (Лист_6)</div>
			<div class="t m24 x23 h3 y32 ff1 fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ Z</div>
			<div class="t m16 x24 h3 y33 ff1 fs1 fc0 sc0 ls0 ws0">МАСШТАБ 2 : 23</div>
			<div class="t m25 x25 h5 y34 ff1 fs3 fc2 sc0 ls0 ws0">Лист_1</div>
			<div class="t m25 x26 h5 y35 ff1 fs3 fc0 sc0 ls0 ws0">Лист_1</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "2")) : ?>
	<div id="pf2" class="pf w0 h0" data-page-no="2">
		<div class="watermark">novi-vorota.com.ua</div>
		<div class="pc pc2 w0 h0">
      <?php echo $image2; ?>
			<div class="t m1 x28 h2 y37 ff2 fs0 fc2 sc0 ls0 ws0">95</div>
			<div class="t m6 x29 h2 y38 ff2 fs0 fc2 sc0 ls0 ws0">100 <span class="_ _2"> </span> 100</div>
			<div class="t ma x2a h2 y39 ff2 fs0 fc2 sc0 ls0 ws0">240</div>
			<div class="t m26 x2b h2 y3a ff2 fs0 fc2 sc0 ls0 ws0">500</div>
			<div class="t m0 x2c h2 y3b ff2 fs0 fc2 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m27 x2d h2 y3c ff2 fs0 fc2 sc0 ls0 ws0"><?php echo $l1; ?></div>
			<div class="t m28 x2e h2 y3d ff2 fs0 fc2 sc0 ls0 ws0"><?php echo $b5; ?></div>
			<div class="t m7 x2f h2 y3e ff2 fs0 fc2 sc0 ls0 ws0"><?php echo $b4; ?></div>
			<div class="t m1 x30 h2 y3f ff2 fs0 fc2 sc0 ls0 ws0">95</div>
			<div class="t m29 x31 h2 y40 ff2 fs0 fc2 sc0 ls0 ws0"><?php echo $a7; ?></div>
			<div class="t m2a x32 h2 y41 ff2 fs0 fc2 sc0 ls0 ws0"><?php echo $a6; ?></div>
			<div class="t mb x33 h4 y42 ff2 fs2 fc0 sc0 ls0 ws0">A <span class="_ _3"> </span> A</div>
			<div class="t mb x34 h4 y43 ff2 fs2 fc0 sc0 ls0 ws0">N</div>
			<div class="t m2a x35 h2 y44 ff2 fs0 fc0 sc0 ls0 ws0">Вихід</div>
			<div class="t m2b xd h2 y45 ff2 fs0 fc0 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m2c x2d h2 y46 ff2 fs0 fc0 sc0 ls0 ws0">для роліка опорного</div>
			<div class="t m1 x36 h2 y47 ff2 fs0 fc0 sc0 ls0 ws0">переднього</div>
			<div class="t m2a x35 h2 y48 ff2 fs0 fc0 sc0 ls0 ws0">Вихід</div>
			<div class="t m2b xd h2 y49 ff2 fs0 fc0 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m2c x2d h2 y4a ff2 fs0 fc0 sc0 ls0 ws0">для роліка опорного</div>
			<div class="t m2d x37 h2 y4b ff2 fs0 fc0 sc0 ls0 ws0">заднього</div>
			<div class="t m2a x38 h2 y4c ff2 fs0 fc0 sc0 ls0 ws0">Вихід</div>
			<div class="t m2b x39 h2 y4d ff2 fs0 fc0 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m9 x3a h2 y4e ff2 fs0 fc0 sc0 ls0 ws0">для кронштейна</div>
			<div class="t m2e x3b h2 y4f ff2 fs0 fc0 sc0 ls0 ws0">привода</div>
			<div class="t m2f x3c h2 y50 ff2 fs0 fc0 sc0 ls0 ws0">Ролік задній розмістити в складальному вигляді з рамою воріт</div>
			<div class="t m14 x3c h2 y51 ff2 fs0 fc0 sc0 ls0 ws0">максимально віддаленим по довжині хвостовика воріт.</div>
			<div class="t m30 x3d h2 y52 ff2 fs0 fc0 sc0 ls0 ws0">11</div>
			<div class="t m27 x3e h2 y53 ff2 fs0 fc0 sc0 ls0 ws0">10</div>
			<div class="t m2a x3f h2 y54 ff2 fs0 fc2 sc0 ls0 ws0"><?php echo $a5; ?></div>
			<div class="t m1 x40 h2 y55 ff2 fs0 fc2 sc0 ls0 ws0">95</div>
			<div class="t m31 x41 h2 y56 ff2 fs0 fc2 sc0 ls0 ws0">160</div>
			<div class="t ma x42 h2 y57 ff2 fs0 fc2 sc0 ls0 ws0">240</div>
			<div class="t m1 x43 h2 y58 ff2 fs0 fc2 sc0 ls0 ws0">60</div>
			<div class="t m28 x44 h2 y59 ff2 fs0 fc2 sc0 ls0 ws0">40</div>
			<div class="t m32 x45 h4 y5a ff2 fs2 fc0 sc0 ls0 ws0">A-A МАСШТАБ1 : 16</div>
			<div class="t m33 xf h2 y5b ff2 fs0 fc0 sc0 ls0 ws0">Швелер</div>
			<div class="t m34 x46 h2 y5c ff2 fs0 fc0 sc0 ls0 ws0">Стовп</div>
			<div class="t m11 x47 h2 y5d ff2 fs0 fc0 sc0 ls0 ws0">Нащільник</div>
			<div class="t m35 x48 h2 y5e ff2 fs0 fc0 sc0 ls0 ws0">задній</div>
			<div class="t m2b x49 h2 y5f ff2 fs0 fc0 sc0 ls0 ws0">(Розміщення швелера відносно стовпа)</div>
			<div class="t m2a x4a h2 y60 ff2 fs0 fc2 sc0 ls0 ws0"><?php echo $a8; ?></div>
			<div class="t m26 x4b h2 y61 ff2 fs0 fc2 sc0 ls0 ws0">500</div>
			<div class="t mc x4c h4 y62 ff2 fs2 fc0 sc0 ls0 ws0">O</div>
			<div class="t m36 x4d h4 y63 ff2 fs2 fc0 sc0 ls0 ws0">ВИД N</div>
			<div class="t m2 x4e h4 y64 ff2 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 16</div>
			<div class="t m6 x4f h2 y65 ff2 fs0 fc2 sc0 ls0 ws0">160</div>
			<div class="t m24 x50 h4 y66 ff2 fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ O</div>
			<div class="t m2f x4f h4 y67 ff2 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m33 x51 h2 y68 ff2 fs0 fc0 sc0 ls0 ws0">Швелер</div>
			<div class="t m11 x52 h2 y69 ff2 fs0 fc0 sc0 ls0 ws0">Нащільник</div>
			<div class="t m35 x53 h2 y6a ff2 fs0 fc0 sc0 ls0 ws0">задній</div>
			<div class="t m37 x54 h2 y6b ff2 fs0 fc2 sc0 ls0 ws0">Лист_2</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "3")) : ?>
	<div id="pf3" class="pf w0 h0 scale" data-page-no="3" >
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
			<div class="t m9 x55 h2 y6d ff3 fs0 fc2 sc0 ls0 ws0"><?php echo $a; ?></div>
			<div class="t m2a x56 h2 y6e ff3 fs0 fc2 sc0 ls0 ws0"><?php echo $a3; ?></div>
			<div class="t m28 x57 h2 y6f ff3 fs0 fc2 sc0 ls0 ws0"><?php echo $b2; ?></div>
			<div class="t m38 x37 h2 y70 ff3 fs0 fc2 sc0 ls0 ws0"><?php echo $b1; ?></div>
			<div class="t m1 x58 h2 y71 ff3 fs0 fc2 sc0 ls0 ws0"><?php echo $c; ?></div>
			<div class="t m27 x59 h2 y72 ff3 fs0 fc2 sc0 ls0 ws0"><?php echo $c1; ?> <span class="_ _4"> </span> <?php echo $c1; ?></div>
			<div class="t m27 x5a h2 y73 ff3 fs0 fc2 sc0 ls0 ws0"><?php echo $c1; ?> <span class="_ _5"> </span> <?php echo $c1; ?></div>
			<div class="t m27 x31 h2 y74 ff3 fs0 fc2 sc0 ls0 ws0"><?php echo $c1; ?></div>
			<div class="t m7 x2c h2 y75 ff3 fs0 fc2 sc0 ls0 ws0"><?php echo $d; ?> <span class="_ _6"> </span> <?php echo $d; ?></div>
			<div class="t m39 x5b h8 y76 ff3 fs4 fc2 sc0 ls0 ws0"><?php echo $g; ?></div>
			<div class="t m2a x5c h2 y77 ff3 fs0 fc2 sc0 ls0 ws0"><?php echo $a2; ?></div>
			<div class="t m3a x5d h9 y78 ff3 fs5 fc0 sc0 ls0 ws0"><?php echo $g1; ?></div>
			<div class="t m3a x5e h9 y79 ff3 fs5 fc0 sc0 ls0 ws0"><?php echo $g1; ?></div>
			<div class="t m9 xf h4 y7a ff3 fs2 fc0 sc0 ls0 ws0">A</div>
			<div class="t mc x27 h4 y7b ff3 fs2 fc0 sc0 ls0 ws0">B</div>
			<div class="t m1 x5f h4 y7c ff3 fs2 fc0 sc0 ls0 ws0">C</div>
			<div class="t mc x60 h4 y7d ff3 fs2 fc0 sc0 ls0 ws0">D</div>
			<div class="t m1 x61 h4 y7e ff3 fs2 fc0 sc0 ls0 ws0">E</div>
			<div class="t m3b x14 ha y7f ff3 fs6 fc0 sc0 ls0 ws0">1</div>
			<div class="t m3c x62 ha y80 ff3 fs6 fc0 sc0 ls0 ws0">2</div>
			<div class="t m3c x63 ha y81 ff3 fs6 fc0 sc0 ls0 ws0">3</div>
			<div class="t m3d x12 ha y82 ff3 fs6 fc0 sc0 ls0 ws0">4</div>
			<div class="t m3c x64 ha y83 ff3 fs6 fc0 sc0 ls0 ws0">5</div>
			<div class="t m3c x65 ha y84 ff3 fs6 fc0 sc0 ls0 ws0">6</div>
			<div class="t m3c x66 ha y85 ff3 fs6 fc0 sc0 ls0 ws0">7</div>
			<div class="t m3c x66 ha y86 ff3 fs6 fc0 sc0 ls0 ws0">7</div>
			<div class="t m3c x67 ha y85 ff3 fs6 fc0 sc0 ls0 ws0">7</div>
			<div class="t m3c x67 ha y87 ff3 fs6 fc0 sc0 ls0 ws0">7</div>
			<div class="t m3c x68 ha y85 ff3 fs6 fc0 sc0 ls0 ws0">7</div>
			<div class="t m3c x69 ha y87 ff3 fs6 fc0 sc0 ls0 ws0">7</div>
			<div class="t m3c x6a ha y88 ff3 fs6 fc0 sc0 ls0 ws0">7</div>
			<div class="t m3c x6b ha y89 ff3 fs6 fc0 sc0 ls0 ws0">7</div>
			<div class="t m3c x31 ha y8a ff3 fs6 fc0 sc0 ls0 ws0">8</div>
			<div class="t m3c x6c ha y8b ff3 fs6 fc0 sc0 ls0 ws0">8</div>
			<div class="t m3c x6d ha y8c ff3 fs6 fc0 sc0 ls0 ws0">9</div>
			<div class="t m3e x6e h4 y8d ff3 fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ A</div>
			<div class="t m2f x6f h4 y8e ff3 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m3c x70 ha y8f ff3 fs6 fc0 sc0 ls0 ws0">3</div>
			<div class="t m3c x64 ha y90 ff3 fs6 fc0 sc0 ls0 ws0">5</div>
			<div class="t m24 x71 h4 y91 ff3 fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ B</div>
			<div class="t m2f x72 h4 y92 ff3 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m3b x73 ha y93 ff3 fs6 fc0 sc0 ls0 ws0">1</div>
			<div class="t m3c x74 ha y94 ff3 fs6 fc0 sc0 ls0 ws0">5</div>
			<div class="t m3c x75 ha y95 ff3 fs6 fc0 sc0 ls0 ws0">2</div>
			<div class="t m18 x76 h4 y96 ff3 fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ C</div>
			<div class="t m2f x77 h4 y97 ff3 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m3c x78 ha y98 ff3 fs6 fc0 sc0 ls0 ws0">3</div>
			<div class="t m3d x4f ha y99 ff3 fs6 fc0 sc0 ls0 ws0">4</div>
			<div class="t m3c x3e ha y9a ff3 fs6 fc0 sc0 ls0 ws0">9</div>
			<div class="t m3c x78 ha y9b ff3 fs6 fc0 sc0 ls0 ws0">8</div>
			<div class="t m24 x79 h4 y9c ff3 fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ D</div>
			<div class="t m2f x7a h4 y9d ff3 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m3b x7b ha y9e ff3 fs6 fc0 sc0 ls0 ws0">1</div>
			<div class="t m3c x7c ha y9f ff3 fs6 fc0 sc0 ls0 ws0">2</div>
			<div class="t m3d x7d ha ya0 ff3 fs6 fc0 sc0 ls0 ws0">4</div>
			<div class="t m18 x2b h4 ya1 ff3 fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ E</div>
			<div class="t m2f x7e h4 ya2 ff3 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m3b x7f ha ya3 ff3 fs6 fc0 sc0 ls0 ws0">1</div>
			<div class="t m3c x25 ha ya4 ff3 fs6 fc0 sc0 ls0 ws0">9</div>
			<div class="t m3c x80 ha ya5 ff3 fs6 fc0 sc0 ls0 ws0">2</div>
			<div class="t m37 x81 h5 ya6 ff3 fs3 fc2 sc0 ls0 ws0">Лист_3</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "4")) : ?>
	<div id="pf4" class="pf w4 hb " data-page-no="4">
		<div class="watermark">novi-vorota.com.ua</div>
		<div class="pc pc4 w4 hb">
      <?php echo $image4; ?>
			<div class="c x82 ya8 w6 hd">
				<div class="t m3f x83 he ya9 ff4 fs7 fc0 sc0 ls0 ws0">40</div>
				<div class="t m3f x73 he yaa ff4 fs7 fc0 sc0 ls0 ws0"><?php echo $g1; ?></div>
				<div class="t m3f x84 he yab ff4 fs7 fc0 sc0 ls0 ws0"><?php echo $c; ?></div>
				<div class="t m3f x66 he yac ff4 fs7 fc0 sc0 ls0 ws0"><?php echo $d; ?></div>
				<div class="t m3f x31 he yad ff4 fs7 fc0 sc0 ls0 ws0">60</div>
				<div class="t m40 x85 he yae ff4 fs7 fc0 sc0 ls0 ws0">40</div>
				<div class="t m3f x86 he yaf ff4 fs7 fc0 sc0 ls0 ws0">20</div>
				<div class="t m40 x3 he yb0 ff4 fs7 fc0 sc0 ls0 ws0">30</div>
				<div class="t m3f x3 he yb1 ff4 fs7 fc0 sc0 ls0 ws0">20</div>
				<div class="t m40 x87 he yb2 ff4 fs7 fc0 sc0 ls0 ws0">30</div>
				<div class="t m3f x3 he yb3 ff4 fs7 fc0 sc0 ls0 ws0">20</div>
				<div class="t m40 x88 he yb4 ff4 fs7 fc0 sc0 ls0 ws0">30</div>
				<div class="t m3f x3c he yb5 ff4 fs7 fc0 sc0 ls0 ws0">20</div>
				<div class="t m40 x88 he yb6 ff4 fs7 fc0 sc0 ls0 ws0">30</div>
				<div class="t m3f x89 he yb7 ff4 fs7 fc0 sc0 ls0 ws0"><?php echo $a; ?></div>
				<div class="t m3f x31 he yb8 ff4 fs7 fc0 sc0 ls0 ws0">70</div>
				<div class="t m40 x8a he yb9 ff4 fs7 fc0 sc0 ls0 ws0">60</div>
				<div class="t m3f x8b he yba ff4 fs7 fc0 sc0 ls0 ws0"><?php echo $g; ?></div>
				<div class="t m3f x8c he ybb ff4 fs7 fc0 sc0 ls0 ws0">60</div>
				<div class="t m40 x8d he ybc ff4 fs7 fc0 sc0 ls0 ws0">40</div>
				<div class="t m3f x31 he ybd ff4 fs7 fc0 sc0 ls0 ws0">60</div>
				<div class="t m40 x8d he ybe ff4 fs7 fc0 sc0 ls0 ws0">40</div>
				<div class="t m3f x8e he ybf ff4 fs7 fc0 sc0 ls0 ws0">20</div>
				<div class="t m40 x3 he yc0 ff4 fs7 fc0 sc0 ls0 ws0">30</div>
				<div class="t m3f x8f he yc1 ff4 fs7 fc0 sc0 ls0 ws0"><?php echo $a2; ?></div>
				<div class="t m3f x90 he yc2 ff4 fs7 fc0 sc0 ls0 ws0">71</div>
				<div class="t m3f x70 he yc3 ff5 fs7 fc0 sc0 ls0 ws0"><?php echo $a1; ?></div>
				<div class="t m3f x91 he yc4 ff4 fs7 fc0 sc0 ls0 ws0">60</div>
				<div class="t m40 x92 he yc5 ff4 fs7 fc0 sc0 ls0 ws0">40</div>
				<div class="t m3f x3 he yc6 ff4 fs7 fc0 sc0 ls0 ws0">20</div>
				<div class="t m40 x93 he yc7 ff4 fs7 fc0 sc0 ls0 ws0">30</div>
				<div class="t m3f x31 he yc8 ff4 fs7 fc0 sc0 ls0 ws0">60</div>
				<div class="t m40 x85 he yc9 ff4 fs7 fc0 sc0 ls0 ws0">40</div>
				<div class="t m3f x86 he yca ff4 fs7 fc0 sc0 ls0 ws0">20</div>
				<div class="t m40 x3 he ycb ff4 fs7 fc0 sc0 ls0 ws0">30</div>
				<div class="t m3f x94 he ycc ff5 fs7 fc0 sc0 ls0 ws0"><?php echo $b1; ?></div>
				<div class="t m3f x95 he ycd ff4 fs7 fc0 sc0 ls0 ws0">30</div>
				<div class="t m3f x47 hf yce ff4 fs8 fc0 sc0 ls0 ws0">1.</div>
				<div class="t m3f x96 hf ycf ff4 fs8 fc0 sc0 ls0 ws0">2.</div>
				<div class="t m3f x97 hf yd0 ff4 fs8 fc0 sc0 ls0 ws0">3.</div>
				<div class="t m3f x96 hf yd1 ff4 fs8 fc0 sc0 ls0 ws0">4.</div>
				<div class="t m3f x97 hf yd2 ff4 fs8 fc0 sc0 ls0 ws0">5.</div>
				<div class="t m3f x96 hf yd3 ff4 fs8 fc0 sc0 ls0 ws0">6.</div>
				<div class="t m3f x47 hf yd4 ff4 fs8 fc0 sc0 ls0 ws0">7.</div>
				<div class="t m3f x47 hf yd5 ff4 fs8 fc0 sc0 ls0 ws0">8.</div>
				<div class="t m3f x47 hf yd6 ff4 fs8 fc0 sc0 ls0 ws0">9.</div>
				<div class="t m40 x6f he yc0 ff4 fs7 fc0 sc0 ls0 ws0">30</div>
				<div class="t m3f x98 he yd7 ff5 fs7 fc0 sc0 ls0 ws0"><?php echo $a3; ?></div>
				<div class="t m3f x99 he yd8 ff4 fs7 fc0 sc0 ls0 ws0">30</div>
				<div class="t m40 x9a he yd9 ff4 fs7 fc0 sc0 ls0 ws0">38</div>
				<div class="t m40 x9b he yda ff4 fs7 fc0 sc0 ls0 ws0">30</div>
				<div class="t m40 x9c he yd9 ff4 fs7 fc0 sc0 ls0 ws0">38</div>
				<div class="t m40 x9d he yda ff4 fs7 fc0 sc0 ls0 ws0">30</div>
				<div class="t m3f x9e he ydb ff4 fs7 fc0 sc0 ls0 ws0">40</div>
				<div class="t m3f x9f he ydc ff4 fs7 fc0 sc0 ls0 ws0">30</div>
				<div class="t m3f x67 he ydd ff5 fs7 fc0 sc0 ls0 ws0"><?php echo $b2; ?></div>
				<div class="t m3f xa0 he yde ff5 fs7 fc0 sc0 ls0 ws0"><?php echo $b5; ?></div>
				<div class="t m3f xa1 he ydf ff4 fs7 fc0 sc0 ls0 ws0">60</div>
				<div class="t m40 x87 he ye0 ff4 fs7 fc0 sc0 ls0 ws0">40</div>
				<div class="t m3f x0 hf ye1 ff4 fs8 fc0 sc0 ls0 ws0">11.</div>
				<div class="t m3f x0 hf ye2 ff4 fs8 fc0 sc0 ls0 ws0">10.</div>
				<div class="t m40 x8d he ye3 ff4 fs7 fc0 sc0 ls0 ws0">60</div>
				<div class="t m3f xa2 he ye4 ff4 fs7 fc0 sc0 ls0 ws0">40</div>
				<div class="t m3f x8b he ye5 ff5 fs7 fc0 sc0 ls0 ws0"><?php echo $b4; ?></div>
				<div class="t m3f xa3 h10 ye6 ff5 fs9 fc0 sc0 ls0 ws0">Порізка профілей на заготовки</div>
				<div class="t m3f xa3 h10 ye7 ff5 fs9 fc0 sc0 ls0 ws0">Порізка нащільника заднього</div>
				<div class="t m3f xa3 h10 ye8 ff5 fs9 fc0 sc0 ls0 ws0">Порізка нащільника переднього</div>
				<div class="t m3f xa4 hf yce ff5 fs8 fc0 sc0 ls0 ws0">1шт.</div>
				<div class="t m3f xa4 hf ye9 ff5 fs8 fc0 sc0 ls0 ws0">1шт.</div>
				<div class="t m3f xa4 hf yea ff5 fs8 fc0 sc0 ls0 ws0">1шт.</div>
				<div class="t m3f xa4 hf yeb ff5 fs8 fc0 sc0 ls0 ws0">1шт.</div>
				<div class="t m3f xa4 hf yec ff5 fs8 fc0 sc0 ls0 ws0">1шт.</div>
				<div class="t m3f xa4 hf yed ff5 fs8 fc0 sc0 ls0 ws0">1шт.</div>
				<div class="t m3f xa5 hf yee ff5 fs8 fc0 sc0 ls0 ws0">8шт.</div>
				<div class="t m3f xa5 hf yef ff5 fs8 fc0 sc0 ls0 ws0">2шт.</div>
				<div class="t m3f xa4 hf yf0 ff5 fs8 fc0 sc0 ls0 ws0">1шт.</div>
				<div class="t m3f xa4 hf yf1 ff5 fs8 fc0 sc0 ls0 ws0">1шт.</div>
				<div class="t m3f xa4 hf yf2 ff5 fs8 fc0 sc0 ls0 ws0">1шт.</div>
				<div class="t m3f x6b he yf3 ff4 fs7 fc0 sc0 ls0 ws0">80</div>
				<div class="t m40 xa6 he yf4 ff4 fs7 fc0 sc0 ls0 ws0">48</div>
				<div class="t m3f xa7 h11 yf5 ff5 fsa fc3 sc0 ls0 ws0">Лист_4</div>
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
			<div class="t m7 x97 h2 yfb ff9 fs0 fc2 sc0 ls0 ws0">(**)</div>
			<div class="t m43 xab h2 yfc ff9 fs0 fc2 sc0 ls0 ws0"><?php echo $b5; ?> (висота розміщеня уловлювача верхнього</div>
			<div class="t m44 x71 h2 yfd ff9 fs0 fc2 sc0 ls0 ws0">по висоті воріт)</div>
			<div class="t m0 xac h2 yfe ff9 fs0 fc2 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m45 xad h2 yff ff9 fs0 fc2 sc0 ls0 ws0"><?php echo $b4; ?> Висота розміщеня верхнього роліка</div>
			<div class="t m43 xae h2 y100 ff9 fs0 fc2 sc0 ls0 ws0">по нащільнику задньому</div>
			<div class="t m1 xaf h2 y101 ff9 fs0 fc2 sc0 ls0 ws0">95 <span class="_ _7"> </span> 95</div>
			<div class="t m8 x88 h2 y102 ff9 fs0 fc0 sc0 ls0 ws0">Відстань від фундаменту до верху воріт</div>
			<div class="t mc xb0 h2 y103 ff9 fs0 fc0 sc0 ls0 ws0">R</div>
			<div class="t mc xb1 h2 y104 ff9 fs0 fc0 sc0 ls0 ws0">S</div>
			<div class="t m9 xb2 h2 y105 ff9 fs0 fc0 sc0 ls0 ws0">Кріпленя нащільника переднього та заднього провести на закладні зварюваням.</div>
			<div class="t m1c xb3 h2 y105 ff9 fs0 fc0 sc0 ls0 ws0">1.</div>
			<div class="t m1d xb4 h2 y106 ff9 fs0 fc0 sc0 ls0 ws0">** Уловлювач нижній розмістити в складальному вигляді з стулкою воріт та роліками</div>
			<div class="t m30 xb3 h2 y106 ff9 fs0 fc0 sc0 ls0 ws0">2.</div>
			<div class="t m16 xb3 h2 y107 ff9 fs0 fc0 sc0 ls0 ws0">опорними в горізонтальній поверхні на 3мм-4мм вище роліка кінцевого.</div>
			<div class="t m46 xb3 h2 y108 ff9 fs0 fc0 sc0 ls0 ws0">3. Ролік верхній розмістити по висоті нащільника заднього.</div>
			<div class="t m27 xb5 h2 y109 ff9 fs0 fc0 sc0 ls0 ws0">10</div>
			<div class="t m30 xb0 h2 y10a ff9 fs0 fc0 sc0 ls0 ws0">11</div>
			<div class="t m25 x7a h2 y10b ff9 fs0 fc0 sc0 ls0 ws0">W</div>
			<div class="t m34 xb0 h2 y10c ff9 fs0 fc0 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m47 xb6 h2 y10d ff9 fs0 fc0 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m48 xb7 h2 y10d ff9 fs0 fc0 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m1b xb8 h4 y10e ff9 fs2 fc0 sc0 ls0 ws0">W</div>
			<div class="t mc x23 h4 y10f ff9 fs2 fc0 sc0 ls0 ws0">R</div>
			<div class="t mc xb9 h4 y110 ff9 fs2 fc0 sc0 ls0 ws0">S</div>
			<div class="t m49 xba h4 y111 ff9 fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ W</div>
			<div class="t m23 xbb h4 y112 ff9 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m48 xbc h2 y113 ff9 fs0 fc0 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m32 xbd h2 y114 ff9 fs0 fc0 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m35 xbe h2 y115 ff9 fs0 fc0 sc0 ls0 ws0">задній</div>
			<div class="t m24 x40 h4 y116 ff9 fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ R</div>
			<div class="t m23 x64 h4 y117 ff9 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m32 xbf h2 y118 ff9 fs0 fc0 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m4a x46 h2 y119 ff9 fs0 fc0 sc0 ls0 ws0">передній</div>
			<div class="t m4b xc0 h2 y11a ff9 fs0 fc0 sc0 ls0 ws0">Уловитель верхній</div>
			<div class="t m24 xc1 h4 y11b ff9 fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ S</div>
			<div class="t m23 x98 h4 y11c ff9 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m2a xc2 h2 y11d ff9 fs0 fc0 sc0 ls0 ws0">Уловитель нижній</div>
			<div class="t m32 xc3 h2 y11e ff9 fs0 fc0 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m4a xc4 h2 y11f ff9 fs0 fc0 sc0 ls0 ws0">передній</div>
			<div class="t m38 xc5 h2 y120 ff9 fs0 fc2 sc0 ls0 ws0"><?php echo $r1; ?></div>
			<div class="t m28 xc6 h2 y121 ff9 fs0 fc2 sc0 ls0 ws0"><?php echo $r2; ?></div>
			<div class="t m4c xc7 h17 y122 ff9 fsd fc2 sc0 ls0 ws0">Встановити в міжцегляному</div>
			<div class="t m4d xc8 h17 y123 ff9 fsd fc2 sc0 ls0 ws0">шву на відстані півцегли</div>
			<div class="t m4e xc9 h17 y124 ff9 fsd fc2 sc0 ls0 ws0">відносно внутнішньої</div>
			<div class="t m4f xca h17 y125 ff9 fsd fc2 sc0 ls0 ws0">поверхні стовпа.</div>
			<div class="t m50 xcb h4 y126 ff9 fs2 fc2 sc0 ls0 ws0">Встановити в міжцегляному</div>
			<div class="t m51 xcc h4 y127 ff9 fs2 fc2 sc0 ls0 ws0">шву на відстані півцегли</div>
			<div class="t m52 xcd h4 y128 ff9 fs2 fc2 sc0 ls0 ws0">відносно внутрішньої</div>
			<div class="t m53 xce h4 y129 ff9 fs2 fc2 sc0 ls0 ws0">поверхні стовпа.</div>
			<div class="t mb x36 h4 y12a ff9 fs2 fc0 sc0 ls0 ws0">АА <span class="_ _8"> </span> АА</div>
			<div class="t m54 xcf h2 y12b ff9 fs0 fc0 sc0 ls0 ws0">СЕЧЕНИЕ АА-АА</div>
			<div class="t m23 xd0 h2 y12c ff9 fs0 fc0 sc0 ls0 ws0">Закладна</div>
			<div class="t m55 xca h2 y12d ff9 fs0 fc0 sc0 ls0 ws0">нащільника</div>
			<div class="t m23 xcc h2 y12e ff9 fs0 fc0 sc0 ls0 ws0">Закладна</div>
			<div class="t m55 xd1 h2 y12f ff9 fs0 fc0 sc0 ls0 ws0">нащільника</div>
			<div class="t m23 xd2 h2 y130 ff9 fs0 fc0 sc0 ls0 ws0">Закладна</div>
			<div class="t m55 xd3 h2 y131 ff9 fs0 fc0 sc0 ls0 ws0">нащільника</div>
			<div class="t m23 xd2 h2 y132 ff9 fs0 fc0 sc0 ls0 ws0">Закладна</div>
			<div class="t m55 xd3 h2 y133 ff9 fs0 fc0 sc0 ls0 ws0">нащільника</div>
			<div class="t m56 xd4 h2 y134 ff9 fs0 fc0 sc0 ls0 ws0">(4 місця)</div>
			<div class="t m57 xd5 h4 y135 ff9 fs2 fc0 sc0 ls0 ws0">АА-АА</div>
			<div class="t m2f xd6 h4 y136 ff9 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t mb xd7 h4 y137 ff9 fs2 fc0 sc0 ls0 ws0">СЕЧЕНИЕАА <span class="_ _9"> </span> СЕЧЕНИЕАА</div>
			<div class="t m2 xd8 h4 y138 ff9 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 10</div>
			<div class="t m32 xd9 h2 y139 ff9 fs0 fc0 sc0 ls0 ws0">Закладна нащільника</div>
			<div class="t m37 xda h2 y13a ff9 fs0 fc2 sc0 ls0 ws0">Лист_5</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "6")) : ?>
	<div id="pf6" class="pf w0 h0" data-page-no="6">
		<div class="watermark">novi-vorota.com.ua</div>
		<div class="pc pc6 w0 h0">
      <?php echo $image6; ?>
			<div class="t m15 xdc h4 y13c ffa fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ J</div>
			<div class="t m2f xdd h4 y13d ffa fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m47 x59 h2 y13e ffa fs0 fc0 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m58 xde h2 y13f ffa fs0 fc0 sc0 ls0 ws0">Стулка</div>
			<div class="t m59 xdf h2 y140 ffa fs0 fc0 sc0 ls0 ws0">воріт</div>
			<div class="t m18 xe0 h4 y141 ffa fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ L</div>
			<div class="t m2f x13 h4 y142 ffa fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m34 xde h2 y143 ffa fs0 fc0 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m58 x8f h2 y144 ffa fs0 fc0 sc0 ls0 ws0">Стулка</div>
			<div class="t m59 xe1 h2 y145 ffa fs0 fc0 sc0 ls0 ws0">воріт</div>
			<div class="t m24 x68 h4 y146 ffa fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ Z</div>
			<div class="t m2f xe2 h4 y147 ffa fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m48 xe3 h2 y148 ffa fs0 fc0 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m58 xe4 h2 y149 ffa fs0 fc0 sc0 ls0 ws0">Стулка</div>
			<div class="t m59 xc4 h2 y14a ffa fs0 fc0 sc0 ls0 ws0">воріт</div>
			<div class="t ma x75 h2 y14b ffa fs0 fc2 sc0 ls0 ws0">450</div>
			<div class="t m1 xe5 h2 y14c ffa fs0 fc2 sc0 ls0 ws0">300</div>
			<div class="t m1a xc1 h3 y14d ffa fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ I</div>
			<div class="t m5a xe6 h3 y14e ffa fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m2c xe7 h2 y14f ffa fs0 fc0 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m1d x2e h2 y150 ffa fs0 fc0 sc0 ls0 ws0">Ролік</div>
			<div class="t m1 x46 h2 y151 ffa fs0 fc0 sc0 ls0 ws0">опорний</div>
			<div class="t m4a xde h2 y152 ffa fs0 fc0 sc0 ls0 ws0">передній</div>
			<div class="t m5b x6e h2 y153 ffa fs0 fc0 sc0 ls0 ws0">Нащільник задній</div>
			<div class="t m5c xe8 h2 y154 ffa fs0 fc0 sc0 ls0 ws0">Швелер</div>
			<div class="t m25 xe9 h2 y155 ffa fs0 fc0 sc0 ls0 ws0">армований</div>
			<div class="t m5d xea h2 y150 ffa fs0 fc0 sc0 ls0 ws0">Кронштейн</div>
			<div class="t m2e xb4 h2 y151 ffa fs0 fc0 sc0 ls0 ws0">привода</div>
			<div class="t m4b xb7 h2 y156 ffa fs0 fc0 sc0 ls0 ws0">Привід</div>
			<div class="t m5e x9f h2 y157 ffa fs0 fc0 sc0 ls0 ws0">Рейка зубчата</div>
			<div class="t m15 x91 h3 y158 ffa fs1 fc0 sc0 ls0 ws0">AB</div>
			<div class="t m13 xeb h3 y159 ffa fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ Z1</div>
			<div class="t m5a xc9 h3 y15a ffa fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m4b xec h2 y15b ffa fs0 fc0 sc0 ls0 ws0">Привід</div>
			<div class="t m5f xed h2 y15c ffa fs0 fc0 sc0 ls0 ws0">Кінцевик</div>
			<div class="t m60 xee h2 y15d ffa fs0 fc0 sc0 ls0 ws0">магнітний_закрито</div>
			<div class="t m61 x2e h3 y15e ffa fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ AB</div>
			<div class="t m5a xef h3 y15f ffa fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 3</div>
			<div class="t m4b xf0 h2 y160 ffa fs0 fc0 sc0 ls0 ws0">Привід</div>
			<div class="t m62 xf1 h2 y161 ffa fs0 fc0 sc0 ls0 ws0">Кінцевик магнітний</div>
			<div class="t m63 xf2 h2 y162 ffa fs0 fc0 sc0 ls0 ws0">(положення-закрито)</div>
			<div class="t m64 xf3 h2 y163 ffa fs0 fc0 sc0 ls0 ws0">Рейка</div>
			<div class="t m65 xf4 h2 y164 ffa fs0 fc0 sc0 ls0 ws0">зубчата</div>
			<div class="t m66 xf5 h2 y165 ffa fs0 fc0 sc0 ls0 ws0">Шестерня</div>
			<div class="t m67 xf6 h2 y166 ffa fs0 fc0 sc0 ls0 ws0">Клепальна гайка</div>
			<div class="t m68 xf7 h2 y167 ffa fs0 fc0 sc0 ls0 ws0">(кріпленя зубчатої рейки)</div>
			<div class="t m2c xf8 h2 y168 ffa fs0 fc0 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m1d xf9 h2 y169 ffa fs0 fc0 sc0 ls0 ws0">Ролік</div>
			<div class="t m1 xfa h2 y16a ffa fs0 fc0 sc0 ls0 ws0">опорний</div>
			<div class="t m35 xf8 h2 y16b ffa fs0 fc0 sc0 ls0 ws0">задній</div>
			<div class="t m46 xdb h2 y16b ffa fs0 fc0 sc0 ls0 ws0">Кронштейн привода</div>
			<div class="t m69 xfb h3 y16c ffa fs1 fc0 sc0 ls0 ws0">AE</div>
			<div class="t m69 xfc h3 y16d ffa fs1 fc0 sc0 ls0 ws0">AF</div>
			<div class="t m6a xfd h3 y16e ffa fs1 fc0 sc0 ls0 ws0">СЕЧЕНИЕ AD-AD</div>
			<div class="t m5a xfe h3 y16f ffa fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m26 xff h2 y170 ffa fs0 fc2 sc0 ls0 ws0">20</div>
			<div class="t m28 x100 h2 y171 ffa fs0 fc2 sc0 ls0 ws0">40</div>
			<div class="t m6b xd4 h3 y172 ffa fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ AE</div>
			<div class="t m57 xb4 h3 y173 ffa fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 1.5</div>
			<div class="t m5f x101 h2 y174 ffa fs0 fc0 sc0 ls0 ws0">Кінцевик</div>
			<div class="t m9 xe2 h2 y175 ffa fs0 fc0 sc0 ls0 ws0">магнітний</div>
			<div class="t m6c x102 h2 y176 ffa fs0 fc0 sc0 ls0 ws0">відкрито</div>
			<div class="t m5e x5a h2 y177 ffa fs0 fc0 sc0 ls0 ws0">Рейка зубчата</div>
			<div class="t m5e x103 h2 y178 ffa fs0 fc0 sc0 ls0 ws0">Клепальна гайка</div>
			<div class="t m6d x104 h2 y179 ffa fs0 fc0 sc0 ls0 ws0">кріпленя рейки зубчатої</div>
			<div class="t m6b x105 h3 y17a ffa fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ AF</div>
			<div class="t m5a x106 h3 y17b ffa fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 2</div>
			<div class="t m6e xed h2 y17c ffa fs0 fc0 sc0 ls0 ws0">Кінцевий ролік</div>
			<div class="t m2a xa1 h2 y17d ffa fs0 fc0 sc0 ls0 ws0">Профіль</div>
			<div class="t m6f x107 h2 y17e ffa fs0 fc0 sc0 ls0 ws0">Прижимна</div>
			<div class="t m25 x7a h2 y17f ffa fs0 fc0 sc0 ls0 ws0">планка</div>
			<div class="t m2c x11 h2 y180 ffa fs0 fc0 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t mb x108 h3 y181 ffa fs1 fc0 sc0 ls0 ws0">Q <span class="_ _a"> </span> Q</div>
			<div class="t mb x109 h3 y182 ffa fs1 fc0 sc0 ls0 ws0">F <span class="_ _b"> </span> F</div>
			<div class="t m13 x10a h3 y183 ffa fs1 fc0 sc0 ls0 ws0">СЕЧЕНИЕQ-Q</div>
			<div class="t m5a xff h3 y184 ffa fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m11 x10b h2 y185 ffa fs0 fc0 sc0 ls0 ws0">Нащільник</div>
			<div class="t m4a x10c h2 y186 ffa fs0 fc0 sc0 ls0 ws0">передній</div>
			<div class="t m47 x10d h2 y187 ffa fs0 fc0 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m58 x12 h2 y188 ffa fs0 fc0 sc0 ls0 ws0">Стулка</div>
			<div class="t m59 x7d h2 y189 ffa fs0 fc0 sc0 ls0 ws0">воріт</div>
			<div class="t m70 x10e h4 y18a ffa fs2 fc0 sc0 ls0 ws0">Закладна</div>
			<div class="t m55 x10e h4 y18b ffa fs2 fc0 sc0 ls0 ws0">нащільника</div>
			<div class="t m17 xce h3 y18c ffa fs1 fc0 sc0 ls0 ws0">СЕЧЕНИЕ F-F</div>
			<div class="t m5a x10f h3 y18d ffa fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m58 x110 h2 y18e ffa fs0 fc0 sc0 ls0 ws0">Стулка</div>
			<div class="t m59 x81 h2 y18f ffa fs0 fc0 sc0 ls0 ws0">воріт</div>
			<div class="t m34 x111 h2 y190 ffa fs0 fc0 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m11 x112 h2 y191 ffa fs0 fc0 sc0 ls0 ws0">Нащільник</div>
			<div class="t m4a x113 h2 y192 ffa fs0 fc0 sc0 ls0 ws0">передній</div>
			<div class="t m37 x114 h4 y193 ffa fs2 fc2 sc0 ls0 ws0">Лист_6</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif; ?>
</div>

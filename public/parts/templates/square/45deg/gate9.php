
<?php
  $image1 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/45deg/gate_images9/image1.svg");
  $image2 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/45deg/gate_images9/image2.svg");
  $image3 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/45deg/gate_images9/image3.svg");
  $image4 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/45deg/gate_images9/image4.svg");
  $image5 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/45deg/gate_images9/image5.svg");
  $image6 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/45deg/gate_images9/image6.svg");
  $css    = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/styles/square/45deg/gate9.css");
  if($wicket == 'on') {
  $start_gate1 = 47;
  $pillar1 = 155;
  $image_width1 = 1073.48;
  $result_left1 = $image_width1/$manual_a*$wicket_left+$start_gate1;

  $start_gate2 = 148;
  $pillar2 = 155;
  $image_width2 = 1446.89;
  $result_left2 = $image_width2/$manual_a*$wicket_left+$start_gate2;
  }
  $g = '';
  if ( $manual_a ) {
    $a = $manual_a;
  } else {
    if ($material == "brick") {
      $a = round((130 + $gate_opening + (130 + $gate_opening / 2 * 0.8)) / 10) * 10;
    } else {
      $a = round((80 + $gate_opening + (80 + $gate_opening / 2 * 0.8)) / 10) * 10;
    }
  }
  $a3 = $a;
  $b = $gate_height - $clearance_under_gate;
  if ( $guide == "60x70" ) {
    $b1 = $b - 60;
  } else if ( $guide == "85x95" ) {
    $b1 = $b - 85;
  } elseif( $guide == "72x80" ) {
  	$b1 = $b - 72;
  }

  $b1_1 = $b1;

  $b4 = $gate_height + 20;
  $b5 = $gate_height;
  $c = $a - 140;
  $c1 = round(($a - 140 - 10 * 30) / 11);
  $d = ($b1 - 170) / 2;
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
  $a3 = "<font style='color: red; font-weight: 700;'>" . $a3 . "</font>";
  $a5 = "<font style='color: red; font-weight: 700;'>" . $a5 . "</font>";
  $a6 = "<font style='color: red; font-weight: 700;'>" . $a6 . "</font>";
  $a7 = "<font style='color: red; font-weight: 700;'>" . $a7 . "</font>";
  $a8 = "<font style='color: red; font-weight: 700;'>" . $a8 . "</font>";
  $b =  "<font style='color: red; font-weight: 700;'>" . $b . "</font>";
  $b1 = "<font style='color: red; font-weight: 700;'>" . $b1 . "</font>";
  $b4 = "<font style='color: red; font-weight: 700;'>" . $b4 . "</font>";
  $b5 = "<font style='color: red; font-weight: 700;'>" . $b5 . "</font>";
  $c = "<font style='color: red; font-weight: 700;'>" . $c . "</font>";
  $c1 = "<font style='color: red; font-weight: 700;'>" . $c1 . "</font>";
  $d = "<font style='color: red; font-weight: 700;'>" . $d . "</font>";
  $g1 = "<font style='color: red; font-weight: 700;'>" . $g1 . "</font>";
  $l1 = "<font style='color: red; font-weight: 700;'>" . $l1 . "</font>";
  $l2 = "<font style='color: red; font-weight: 700;'>" . $l2 . "</font>";
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
    top: 21.1%;
    left: <?=$result_left1?>px;
    width: 97.4px!important;
    height: 303px!important;
    z-index: 2;
}

.svg-line1 {
	position: absolute;
	background-color: gray;
    top: 26.7641%;
    left: <?=($result_left1+14)?>px;
    width: 70.0px!important;
    height: 1px!important;
    z-index: 3;
}

.svg-line2 {
	position: absolute;
	background-color: gray;
    top: 24.71%;
    left: <?=($result_left1+14)?>px;
    width: 1px!important;
    height: 50px!important;
    z-index: 3;
}

.svg-line3 {
	position: absolute;
	background-color: gray;
    top: 24.71%;
    left: <?=($result_left1+8+75)?>px;
    width: 1px!important;
    height: 50px!important;
    z-index: 3;
}

.svg-text1 {
	position: absolute;
	background-color: transparent;
	color: red;
	font-weight: 700;
    top: 25.2%;
    left: <?=($result_left1+14)?>px;
    width: 70.0px!important;
    z-index: 3;
    text-align: center;
}

.svg-line4 {
	position: absolute;
	background-color: gray;
    top: 63.71%;
    left: <?=($start_gate1)?>px;
    width: <?=(($result_left1)-36)?>px!important;
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
    left: <?=($result_left1+11)?>px;
    width: 1px!important;
    height: 150px!important;
    z-index: 3;
}

.svg-text2 {
	position: absolute;
	background-color: transparent;
	color: red;
	font-weight: 700;
    top: 61.71%;
    left: <?=($start_gate1)?>px;
    width: <?=(($result_left1)-36)?>px!important;
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
    top: 18.8%;
    left: <?=($result_left2)?>px;
    width: 88.2px !important;
    height: 348px !important;
    z-index: 2;
}

.svg-line2_1 {
	position: absolute;
	background-color: gray;
    top: 22.71%;
    left: <?=($result_left2+13)?>px;
    width: 63.0px!important;
    height: 1px!important;
    z-index: 3;
}

.svg-line2_2 {
	position: absolute;
	background-color: gray;
    top: 21.01%;
    left: <?=($result_left2+13)?>px;
    width: 1px!important;
    height: 80px!important;
    z-index: 3;
}

.svg-line2_3 {
	position: absolute;
	background-color: gray;
    top: 21.01%;
    left: <?=($result_left2+5+70)?>px;
    width: 1px!important;
    height: 80px!important;
    z-index: 3;
}

.svg-text2_1 {
	position: absolute;
	background-color: transparent;
	color: red;
	font-weight: 700;
    top: 21.51%;
    left: <?=($result_left2+13)?>px;
    width: 63.0px!important;
    z-index: 3;
    text-align: center;
}

.svg-line2_4 {
	position: absolute;
	background-color: gray;
    top: 48.71%;
    left: <?=($start_gate2)?>px;
    width: <?=(($result_left2)-137)?>px!important;
    height: 1px!important;
    z-index: 3;
}

.svg-line2_5 {
	position: absolute;
	background-color: gray;
    top: 40.71%;
    left: <?=($start_gate2)?>px;
    width: 1px!important;
    height: 140px!important;
    z-index: 3;
}

.svg-line2_6 {
	position: absolute;
	background-color: gray;
    top: 40.71%;
    left: <?=($result_left2+10)?>px;
    width: 1px!important;
    height: 140px!important;
    z-index: 3;
}

.svg-text2_2 {
	position: absolute;
	background-color: transparent;
	color: red;
	font-weight: 700;
    top: 47.0%;
    left: <?=($start_gate2)?>px;
    width: <?=(($result_left2)-137)?>px!important;
    z-index: 3;
    text-align: center;
}

.svg-line2_7 {
	position: absolute;
    background-color: gray;
    top: 42.86%;
    left: 112px;
    width: 300px !important;
    height: 1px !important;
    z-index: 3;
}

.svg-line2_8 {
	position: absolute;
    background-color: gray;
    top: 24.3%;
    left: 117px;
    width: 1px !important;
    height: 222px !important;
}

.svg-line2_9 {
  position: absolute;
    background-color: gray;
    top: 24.3%;
    left: 112px;
    width: 300px !important;
    height: 1px !important;
    z-index: 3;
}

.svg-text2_3 {
	position: absolute;
    background-color: transparent;
    text-align: center;
    top: 24.3%;
    left: 117px;
    width: 1px !important;
    height: 222px !important;
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
<!--<link rel='stylesheet' id='pdf-stylesheet-css' href='--><?php //=$_SERVER['APP_URL']?><!--/parts/styles/square/45deg/gate9.css' type='text/css' media='all' />-->
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
			<div class="t m1 x2 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m2 x3 h2 y2 ff1 fs0 fc0 sc0 ls0 ws0"><?php echo $a; ?></div>
			<div class="t m3 x4 h2 y3 ff1 fs0 fc0 sc0 ls0 ws0">250</div>
			<div class="t m4 x5 h2 y4 ff1 fs0 fc0 sc0 ls0 ws0"><?php echo $l2; ?>-довжина зубчатої рейки</div>
			<div class="t m5 x6 h2 y5 ff1 fs0 fc0 sc0 ls0 ws0"><?php echo $l1; ?>-відстань між роліковими опорами</div>
			<div class="t m6 x7 h2 y6 ff1 fs0 fc0 sc0 ls0 ws0"><?php echo $b; ?></div>
			<div class="t m7 x8 h2 y7 ff1 fs0 fc0 sc0 ls0 ws0">Відстань від фундаменту до верху воріт</div>
			<div class="t m8 x9 h2 y8 ff1 fs0 fc0 sc0 ls0 ws0"><?php echo $clearance_under_gate; ?>-відстань від фундаменту до низу воріт</div>
			<div class="t m3 xa h2 y9 ff1 fs0 fc0 sc0 ls0 ws0">300</div>
			<div class="t m9 xb h2 y9 ff1 fs0 fc1 sc0 ls0 ws0">450</div>
			<div class="t m9 xc h3 ya ff1 fs1 fc1 sc0 ls0 ws0">Встановлення та кріаленя кінцевого роліка показано на розрізі AD-AD, та Вид АF (Лист_6)</div>
			<div class="t ma x4 h3 ya ff1 fs1 fc1 sc0 ls0 ws0">1.</div>
			<div class="t mb x4 h3 yb ff1 fs1 fc1 sc0 ls0 ws0">2. Уловитель нижній встановити в складальному вигляді воріт та роліків верхніх в горізонтальній поверхні на 3-4мм</div>
			<div class="t m9 x4 h3 yc ff1 fs1 fc1 sc0 ls0 ws0">вище кінцевого роліка, місцевий Вид L, Вид S, розріз F-F (Лист_1, Лист_5).</div>
			<div class="t mc x4 h3 yd ff1 fs1 fc1 sc0 ls0 ws0">2. *** Уловлювач верхній та верхній ролік встановити після встановленя уловлювача нижнього, місцевий Вид R, Вид Z,</div>
			<div class="t md x4 h3 ye ff1 fs1 fc1 sc0 ls0 ws0">Вид W, Вид J (Лист_1, Лист_5, Лист_6).</div>
			<div class="t mb x4 h3 yf ff1 fs1 fc1 sc0 ls0 ws0">3. Умова розміщеня привода воріт (зацепленя шестерні в зубчатій рейці) без натягу.</div>
			<div class="t me x4 h3 y10 ff1 fs1 fc1 sc0 ls0 ws0">4. Розмістити привід таким чином, щоб шестерня привода була розміщена по середині зубчатої рейки, місцевий вид АВ</div>
			<div class="t m4 x4 h3 y11 ff1 fs1 fc1 sc0 ls0 ws0">(Лист_6). Бокова поверхня шестерні повиннна бути паралельна боковій поверхні рейки зубчатої.</div>
			<div class="t mf x4 h3 y12 ff1 fs1 fc1 sc0 ls0 ws0">5. Магнітні кінцевики (положеня-відкрито. закрито) встановити на зубчатій рейці по факту умови повного закривання та</div>
			<div class="t m10 x4 h3 y13 ff1 fs1 fc1 sc0 ls0 ws0">відкривання воріт (Лист_1).</div>
			<div class="t m11 x4 h3 y14 ff1 fs1 fc1 sc0 ls0 ws0">6. Кріпленя магнітного кінцевика вказано на розрізі AD-AD, Вид АЕ (Лист_6)</div>
			<div class="t m12 xd h3 y15 ff1 fs1 fc1 sc0 ls0 ws0">J</div>
			<div class="t m3 xe h3 y16 ff1 fs1 fc1 sc0 ls0 ws0">L</div>
			<div class="t m12 xf h3 y17 ff1 fs1 fc1 sc0 ls0 ws0">Z</div>
			<div class="t m13 x10 h3 y18 ff1 fs1 fc1 sc0 ls0 ws0">I</div>
			<div class="t m14 x0 h3 y19 ff1 fs1 fc1 sc0 ls0 ws0">Q <span class="_ _0"> </span> Q</div>
			<div class="t m14 x11 h3 y1a ff1 fs1 fc1 sc0 ls0 ws0">F <span class="_ _1"> </span> F</div>
			<div class="t m14 x2 h3 y1b ff1 fs1 fc1 sc0 ls0 ws0">AD</div>
			<div class="t m14 x2 h3 y1c ff1 fs1 fc1 sc0 ls0 ws0">AD</div>
			<div class="t m15 x12 h4 y1d ff1 fs2 fc1 sc0 ls0 ws0">Заглушка</div>
			<div class="t m16 x13 h4 y1e ff1 fs2 fc1 sc0 ls0 ws0">задня</div>
			<div class="t m17 x14 h5 y1f ff1 fs3 fc1 sc0 ls0 ws0">Магнітний кінцевик</div>
			<div class="t m18 x15 h5 y20 ff1 fs3 fc1 sc0 ls0 ws0">положення-закрито</div>
			<div class="t m19 x16 h4 y21 ff1 fs2 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m1a x17 h4 y22 ff1 fs2 fc1 sc0 ls0 ws0">Магнітний кінцевик</div>
			<div class="t m1b x18 h4 y23 ff1 fs2 fc1 sc0 ls0 ws0">положення-відкрито</div>
			<div class="t m1c x19 h4 y24 ff1 fs2 fc2 sc0 ls0 ws0">Z1</div>
			<div class="t m1d x1a h3 y25 ff1 fs1 fc1 sc0 ls0 ws0">Z1</div>
			<div class="t m1e x1b h3 y26 ff1 fs1 fc1 sc0 ls0 ws0">ВИД</div>
			<div class="t m5 x1c h3 y27 ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 31</div>
			<div class="t m1f x1d h2 y28 ff1 fs0 fc0 sc0 ls0 ws0">Лист_1</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
	<div id="pf2" class="pf w0 h0" data-page-no="2">
		<div class="watermark">novi-vorota.com.ua</div>
		<div class="pc pc2 w0 h0">
      <?php echo $image2; ?>
			<div class="t m3 x1f h7 y2a ff2 fs0 fc0 sc0 ls0 ws0">95</div>
			<div class="t m0 x20 h7 y2b ff2 fs0 fc0 sc0 ls0 ws0">100 <span class="_ _2"> </span> 100</div>
			<div class="t m9 x21 h7 y2c ff2 fs0 fc0 sc0 ls0 ws0">240</div>
			<div class="t m20 x22 h7 y2d ff2 fs0 fc0 sc0 ls0 ws0">500</div>
			<div class="t m1 x23 h7 y2e ff2 fs0 fc0 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m21 x24 h7 y2f ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $l1; ?></div>
			<div class="t m22 x25 h7 y30 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $b5; ?></div>
			<div class="t m6 x26 h7 y31 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $b4; ?></div>
			<div class="t m3 x27 h7 y32 ff2 fs0 fc0 sc0 ls0 ws0">95</div>
			<div class="t m23 x28 h7 y33 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a7; ?></div>
			<div class="t m24 x29 h7 y34 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a6; ?></div>
			<div class="t m14 x2a h8 y35 ff2 fs1 fc1 sc0 ls0 ws0">A <span class="_ _3"> </span> A</div>
			<div class="t m14 x2b h8 y36 ff2 fs1 fc1 sc0 ls0 ws0">N</div>
			<div class="t m24 x2c h7 y37 ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m25 x2d h7 y38 ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m26 x24 h7 y39 ff2 fs0 fc1 sc0 ls0 ws0">для роліка опорного</div>
			<div class="t m3 x2e h7 y3a ff2 fs0 fc1 sc0 ls0 ws0">переднього</div>
			<div class="t m24 x2c h7 y3b ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m25 x2d h7 y3c ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m26 x24 h7 y3d ff2 fs0 fc1 sc0 ls0 ws0">для роліка опорного</div>
			<div class="t m27 x2f h7 y3e ff2 fs0 fc1 sc0 ls0 ws0">заднього</div>
			<div class="t m24 x30 h7 y3f ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m25 x31 h7 y40 ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m2 x32 h7 y41 ff2 fs0 fc1 sc0 ls0 ws0">для кронштейна</div>
			<div class="t m28 x33 h7 y42 ff2 fs0 fc1 sc0 ls0 ws0">привода</div>
			<div class="t m29 x34 h7 y43 ff2 fs0 fc1 sc0 ls0 ws0">Ролік задній розмістити в складальному вигляді з рамою воріт</div>
			<div class="t mf x34 h7 y44 ff2 fs0 fc1 sc0 ls0 ws0">максимально віддаленим по довжині хвостовика воріт.</div>
			<div class="t m2a x35 h7 y45 ff2 fs0 fc1 sc0 ls0 ws0">11</div>
			<div class="t m21 x36 h7 y46 ff2 fs0 fc1 sc0 ls0 ws0">10</div>
			<div class="t m24 x37 h7 y47 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a5; ?></div>
			<div class="t m3 xc h7 y48 ff2 fs0 fc0 sc0 ls0 ws0">95</div>
			<div class="t m2b x38 h7 y49 ff2 fs0 fc0 sc0 ls0 ws0">160</div>
			<div class="t m9 x39 h7 y4a ff2 fs0 fc0 sc0 ls0 ws0">250</div>
			<div class="t m3 x3a h7 y4b ff2 fs0 fc0 sc0 ls0 ws0">60</div>
			<div class="t m22 x3b h7 y4c ff2 fs0 fc0 sc0 ls0 ws0">40</div>
			<div class="t m2c x3c h8 y4d ff2 fs1 fc1 sc0 ls0 ws0">A-A МАСШТАБ1 : 16</div>
			<div class="t m2d x3d h7 y4e ff2 fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m2e x3e h7 y4f ff2 fs0 fc1 sc0 ls0 ws0">Стовп</div>
			<div class="t m2f x3f h7 y50 ff2 fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m30 x40 h7 y51 ff2 fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m25 x41 h7 y52 ff2 fs0 fc1 sc0 ls0 ws0">(Розміщення швелера відносно стовпа)</div>
			<div class="t m24 x42 h7 y53 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a8; ?></div>
			<div class="t m20 x43 h7 y54 ff2 fs0 fc0 sc0 ls0 ws0">500</div>
			<div class="t m12 x44 h8 y55 ff2 fs1 fc1 sc0 ls0 ws0">O</div>
			<div class="t m31 x45 h8 y56 ff2 fs1 fc1 sc0 ls0 ws0">ВИД N</div>
			<div class="t m5 x46 h8 y57 ff2 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 16</div>
			<div class="t m0 x47 h7 y58 ff2 fs0 fc0 sc0 ls0 ws0">160</div>
			<div class="t m32 x48 h8 y59 ff2 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ O</div>
			<div class="t m29 x47 h8 y5a ff2 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m2d x49 h7 y5b ff2 fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m2f x4a h7 y5c ff2 fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m30 x4b h7 y5d ff2 fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m33 x4c h7 y5e ff2 fs0 fc0 sc0 ls0 ws0">Лист_2</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
	<div id="pf3" class="pf w4 hb" data-page-no="3" style="transform: scale(0.70); transform-origin: 18% 1%;">
		<div class="watermark">novi-vorota.com.ua</div>
		<div class="pc pc3 w4 hb" >
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
	<svg class="svg-overlay2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="175px" height="450px" viewBox="0 0 175 450" version="1.1">
<g id="surface1">
<path style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;" d="M 2 1.484375 L 174 1.484375 L 174 448.515625 L 2 448.515625 Z M 2 1.484375 "/>
<path style="fill:none;stroke-width:1.70133;stroke-linecap:round;stroke-linejoin:round;stroke:rgb(0%,0%,0%);stroke-opacity:1;stroke-miterlimit:10;" d="M 143.984375 301.719089 L 31.640625 301.719089 M 143.984375 301.719089 L 143.984375 294.79112 M 143.984375 301.719089 L 149.398438 301.719089 M 31.640625 301.719089 L 26.234375 301.719089 M 31.640625 301.719089 L 31.640625 157.04974 M 155.230469 301.719089 L 155.230469 0.920573 M 20.449219 301.719089 L 20.402344 0.920573 M 26.234375 0.920573 L 26.234375 301.719089 M 20.402344 0.920573 L 30.640625 0.923203 L 149.398438 0.920573 M 20.402344 0.920573 L 1.679688 0.923203 M 149.398438 0.920573 L 155.230469 0.920573 M 149.398438 0.920573 L 149.398438 7.588151 M 155.230469 0.920573 L 161.066406 0.920573 M 149.398438 7.588151 L 149.398438 301.719089 M 149.398438 7.588151 L 143.984375 7.588151 L 143.984375 14.38987 M 149.398438 7.588151 L 31.640625 7.590781 M 26.636719 7.590781 L 31.640625 7.590781 M 26.234375 301.719089 L 14.613281 301.719089 M 149.398438 301.719089 L 161.066406 301.719089 M 143.984375 152.120729 L 31.640625 152.120729 M 143.984375 152.120729 L 143.984375 14.38987 M 143.984375 152.120729 L 143.984375 157.04974 M 31.640625 294.79112 L 143.984375 294.79112 M 143.984375 294.79112 L 143.984375 157.04974 M 143.984375 157.04974 L 31.640625 157.04974 M 31.640625 152.120729 L 31.640625 14.38987 M 31.640625 152.120729 L 31.640625 157.04974 M 143.984375 14.38987 L 31.640625 14.38987 M 31.640625 14.38987 L 31.640625 7.590781 M 174 12.385651 L 165.472656 12.385651 M 14.613281 301.719089 L 10.203125 301.719089 M 14.613281 301.719089 L 14.566406 7.590781 M 1.679688 301.719089 L 10.203125 301.719089 M 10.203125 301.719089 L 10.203125 296.787448 M 1.679688 296.787448 L 10.203125 296.787448 M 10.203125 296.787448 L 10.179688 157.04974 M 14.566406 0.920573 L 14.566406 7.590781 M 10.15625 7.590781 L 14.566406 7.590781 M 10.15625 7.590781 L 1.679688 7.590781 M 10.15625 7.590781 L 10.179688 152.120729 M 10.15625 12.390911 L 1.679688 12.390911 M 174 0.920573 L 161.066406 0.920573 M 161.066406 0.920573 L 161.066406 301.719089 M 161.066406 301.719089 L 165.472656 301.719089 M 165.472656 301.719089 L 165.480469 296.787448 M 165.472656 301.719089 L 174 301.719089 M 165.46875 296.787448 L 165.480469 296.787448 M 165.480469 296.787448 L 174 296.787448 M 165.480469 296.787448 L 165.476562 157.04974 M 165.472656 7.588151 L 161.46875 7.588151 M 165.472656 7.588151 L 165.472656 12.385651 M 165.472656 7.588151 L 174 7.588151 M 165.472656 12.385651 L 165.476562 152.120729 M 10.179688 152.120729 L 1.679688 152.120729 M 10.179688 152.120729 L 10.179688 157.04974 M 10.179688 157.04974 L 1.679688 157.04974 M 165.476562 152.120729 L 174 152.120729 M 165.476562 152.120729 L 165.476562 157.04974 M 165.476562 157.04974 L 174 157.04974 " transform="matrix(1,0,0,1.485149,0,0)"/>
</g>
</svg>
	</div>
	<?php } else { ?>
      <?php echo $image3; ?>
      <?php } ?>
			<div class="t m35 x50 hd y62 ff4 fs5 fc0 sc0 ls0 ws0"><?php echo $c1; ?></div>
			<div class="t m35 x51 hd y63 ff4 fs5 fc0 sc0 ls0 ws0"><?php echo $c1; ?></div>
			<div class="t m36 x52 hd y64 ff4 fs5 fc0 sc0 ls0 ws0"><?php echo $d; ?> <span class="_ _4"> </span> <?php echo $d; ?></div>
			<div class="t m37 xc hd y65 ff4 fs5 fc0 sc0 ls0 ws0"><?php echo $b1; ?></div>
			<div class="t m3 x53 hd y66 ff4 fs5 fc0 sc0 ls0 ws0"><?php echo $c; ?></div>
			<div class="t m35 x54 hd y67 ff4 fs5 fc0 sc0 ls0 ws0"><?php echo $c1; ?></div>
			<div class="t m20 x27 hd y68 ff4 fs5 fc0 sc0 ls0 ws0">60</div>
			<div class="t m36 x4f hd y69 ff4 fs5 fc0 sc0 ls0 ws0"><?php echo $b; ?></div>
			<div class="t m2 x55 hd y6a ff4 fs5 fc0 sc0 ls0 ws0"><?php echo $a; ?></div>
			<div class="t m35 x13 hd y6b ff4 fs5 fc0 sc0 ls0 ws0"><?php echo $c1; ?> <span class="_ _5"> </span> <?php echo $c1; ?></div>
			<div class="t m35 x56 hd y6c ff4 fs5 fc0 sc0 ls0 ws0"><?php echo $c1; ?></div>
			<div class="t m35 x57 hd y6d ff4 fs5 fc0 sc0 ls0 ws0"><?php echo $c1; ?></div>
			<div class="t m35 x58 hd y6e ff4 fs5 fc0 sc0 ls0 ws0"><?php echo $c1; ?> <span class="_ _6"> </span> <?php echo $c1; ?></div>
			<div class="t m35 x59 hd y6b ff4 fs5 fc0 sc0 ls0 ws0"><?php echo $c1; ?></div>
			<div class="t m38 x5a he y6f ff4 fs6 fc0 sc0 ls0 ws0"><?php echo $g1; ?></div>
			<div class="t m2c xd hf y70 ff4 fs7 fc1 sc0 ls0 ws0">A</div>
			<div class="t m12 x5b hf y71 ff4 fs7 fc1 sc0 ls0 ws0">B</div>
			<div class="t m39 x5c hf y72 ff4 fs7 fc1 sc0 ls0 ws0">A1</div>
			<div class="t m1d x5d hf y73 ff4 fs7 fc1 sc0 ls0 ws0">В1</div>
			<div class="t m3a x5e h7 y74 ff4 fs0 fc1 sc0 ls0 ws0">1</div>
			<div class="t m3 x56 h7 y75 ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3 x5f h7 y76 ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3 x60 h7 y77 ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3 x61 h7 y78 ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t m12 x62 h7 y77 ff4 fs0 fc1 sc0 ls0 ws0">4</div>
			<div class="t m3 x63 h7 y79 ff4 fs0 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3 x63 h7 y7a ff4 fs0 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3 x64 h7 y79 ff4 fs0 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3 x64 h7 y7b ff4 fs0 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3 x65 h7 y7c ff4 fs0 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3 x66 h7 y7d ff4 fs0 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3 x67 h7 y7e ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m3 x68 h7 y7f ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m3b x69 hf y80 ff4 fs7 fc1 sc0 ls0 ws0">МЕСТНЫЙ A</div>
			<div class="t m11 x6a hf y81 ff4 fs7 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m3 x6b h7 y82 ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3 x6c h7 y83 ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3 x6d h7 y84 ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m3c x6e hf y85 ff4 fs7 fc1 sc0 ls0 ws0">МЕСТНЫЙ B</div>
			<div class="t m11 x6f hf y86 ff4 fs7 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m3a x70 h7 y87 ff4 fs0 fc1 sc0 ls0 ws0">1</div>
			<div class="t m3 x71 h7 y88 ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3 x72 h7 y89 ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3 x73 h7 y8a ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m3d x74 hf y8b ff4 fs7 fc1 sc0 ls0 ws0">МЕСТНЫЙ A1</div>
			<div class="t m11 x22 hf y8c ff4 fs7 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m3e x75 hf y8d ff4 fs7 fc1 sc0 ls0 ws0">дзеркальне відображеня ВидА</div>
			<div class="t m3 x76 h7 y8e ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3 x77 h7 y8f ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3 x78 h7 y90 ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m3f x79 hf y91 ff4 fs7 fc1 sc0 ls0 ws0">МЕСТНЫЙ В1</div>
			<div class="t m11 x7a hf y92 ff4 fs7 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m5 x7b hf y93 ff4 fs7 fc1 sc0 ls0 ws0">дзеркальне відображеня ВидВ</div>
			<div class="t m3a x50 h7 y94 ff4 fs0 fc1 sc0 ls0 ws0">1</div>
			<div class="t m3 x7c h7 y95 ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3 x7d h7 y96 ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3 x7e h7 y97 ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m33 x7f hd y98 ff4 fs5 fc0 sc0 ls0 ws0">Лист_3</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
	<div id="pf4" class="pf w6 h10" data-page-no="4"  style="margin-top: -350px;">
		<div class="watermark">novi-vorota.com.ua</div>
		<div class="pc pc4 w6 h10">
      <?php echo $image4; ?>
			<div class="c x80 y9a w8 h12">
				<div class="t m34 x81 h13 y9b ff5 fs8 fc1 sc0 ls0 ws0"><?php echo $g1; ?></div>
				<div class="t m34 x82 h13 y9c ff5 fs8 fc1 sc0 ls0 ws0"><?php echo $c; ?></div>
				<div class="t m34 x83 h13 y9d ff5 fs8 fc1 sc0 ls0 ws0"><?php echo $d; ?></div>
				<div class="t m34 x84 h13 y9e ff5 fs8 fc1 sc0 ls0 ws0">20</div>
				<div class="t m40 x85 h13 y9f ff5 fs8 fc1 sc0 ls0 ws0">30</div>
				<div class="t m34 x84 h13 ya0 ff5 fs8 fc1 sc0 ls0 ws0">20</div>
				<div class="t m40 x86 h13 ya1 ff5 fs8 fc1 sc0 ls0 ws0">30</div>
				<div class="t m34 x34 h13 ya2 ff5 fs8 fc1 sc0 ls0 ws0">20</div>
				<div class="t m40 x52 h13 ya3 ff5 fs8 fc1 sc0 ls0 ws0">30</div>
				<div class="t m34 x87 h13 ya4 ff5 fs8 fc1 sc0 ls0 ws0"><?php echo $a; ?></div>
				<div class="t m34 x88 h13 ya5 ff6 fs8 fc1 sc0 ls0 ws0">а(Ш)</div>
				<div class="t m40 x10 h13 ya6 ff6 fs8 fc1 sc0 ls0 ws0">в(В)</div>
				<div class="t m34 x28 h13 ya7 ff5 fs8 fc1 sc0 ls0 ws0">60</div>
				<div class="t m40 x89 h13 ya8 ff5 fs8 fc1 sc0 ls0 ws0">40</div>
				<div class="t m34 x8a h13 ya9 ff5 fs8 fc1 sc0 ls0 ws0">20</div>
				<div class="t m40 x84 h13 yaa ff5 fs8 fc1 sc0 ls0 ws0">30</div>
				<div class="t m34 x8b h13 yab ff5 fs8 fc1 sc0 ls0 ws0"><?php echo $a3; ?></div>
				<div class="t m34 x3f h14 yac ff5 fs9 fc1 sc0 ls0 ws0">1.</div>
				<div class="t m34 x8c h14 yad ff5 fs9 fc1 sc0 ls0 ws0">2.</div>
				<div class="t m34 x8d h14 yae ff5 fs9 fc1 sc0 ls0 ws0">3.</div>
				<div class="t m34 x8c h14 yaf ff5 fs9 fc1 sc0 ls0 ws0">4.</div>
				<div class="t m34 x8d h14 yb0 ff5 fs9 fc1 sc0 ls0 ws0">5.</div>
				<div class="t m34 x8c h14 yb1 ff5 fs9 fc1 sc0 ls0 ws0">6.</div>
				<div class="t m34 x3f h14 yb2 ff5 fs9 fc1 sc0 ls0 ws0">7.</div>
				<div class="t m34 x3f h14 yb3 ff5 fs9 fc1 sc0 ls0 ws0">8.</div>
				<div class="t m34 x8e h13 yb4 ff6 fs8 fc1 sc0 ls0 ws0"><?php echo $b5; ?></div>
				<div class="t m34 x8f h13 yb5 ff5 fs8 fc1 sc0 ls0 ws0">60</div>
				<div class="t m40 x90 h13 yb6 ff5 fs8 fc1 sc0 ls0 ws0">40</div>
				<div class="t m40 x89 h13 yb7 ff5 fs8 fc1 sc0 ls0 ws0">60</div>
				<div class="t m34 x5f h13 yb8 ff5 fs8 fc1 sc0 ls0 ws0">40</div>
				<div class="t m34 x91 h13 yb9 ff6 fs8 fc1 sc0 ls0 ws0"><?php echo $b4; ?></div>
				<div class="t m34 x92 h15 yba ff6 fsa fc1 sc0 ls0 ws0">Порізка профілей на заготовки</div>
				<div class="t m34 x92 h15 ybb ff6 fsa fc1 sc0 ls0 ws0">Порізка нащільника заднього</div>
				<div class="t m34 x92 h15 ybc ff6 fsa fc1 sc0 ls0 ws0">Порізка нащільника переднього</div>
				<div class="t m34 x71 h14 yac ff6 fs9 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m34 x93 h14 ybd ff6 fs9 fc1 sc0 ls0 ws0">2шт.</div>
				<div class="t m34 x93 h14 ybe ff6 fs9 fc1 sc0 ls0 ws0">2шт.</div>
				<div class="t m34 x71 h14 ybf ff6 fs9 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m34 x93 h14 yc0 ff6 fs9 fc1 sc0 ls0 ws0">20шт.</div>
				<div class="t m34 x93 h14 yc1 ff6 fs9 fc1 sc0 ls0 ws0">4шт.</div>
				<div class="t m34 x71 h14 yc2 ff6 fs9 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m34 x71 h14 yc3 ff6 fs9 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m34 x94 h13 yc4 ff5 fs8 fc1 sc0 ls0 ws0">80</div>
				<div class="t m40 x95 h13 yc5 ff5 fs8 fc1 sc0 ls0 ws0">48</div>
				<div class="t m34 x96 h16 yc6 ff6 fsb fc4 sc0 ls0 ws0">Лист_4</div>
				<div class="t m34 x97 h13 yc7 ff6 fs8 fc1 sc0 ls0 ws0"><?php echo $b1; ?></div>
				<div class="t m34 x28 h13 yc8 ff5 fs8 fc1 sc0 ls0 ws0">60</div>
				<div class="t m40 x89 h13 yc9 ff5 fs8 fc1 sc0 ls0 ws0">40</div>
				<div class="t m34 x8a h13 yca ff5 fs8 fc1 sc0 ls0 ws0">20</div>
				<div class="t m40 x84 h13 ycb ff5 fs8 fc1 sc0 ls0 ws0">30</div>
				<div class="t m41 x98 h17 ycc ff5 fsc fc1 sc0 ls0 ws0">45</div>
				<div class="t m42 x99 h17 ycd ff5 fsc fc1 sc0 ls0 ws0">45</div>
				<div class="t m43 x9a h18 yce ff5 fsd fc1 sc0 ls0 ws0">45</div>
				<div class="t m41 x3b h17 ycf ff5 fsc fc1 sc0 ls0 ws0">45</div>
				<div class="t m44 x9b h19 yd0 ff5 fse fc1 sc0 ls0 ws0">W*</div>
				<div class="t m45 x9c h1a yd1 ff5 fsf fc1 sc0 ls0 ws0">W*</div>
				<div class="t m34 x4f h15 yd2 ff5 fsa fc1 sc0 ls0 ws0">1.* <span class="_ _7"> </span> <span class="ff6"> Розмір визначити по місцю при зварювані рами воріт. </span></div>
			</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[0.000000,1.000000,-1.000000,0.000000,842.000000,0.000000]}"></div>
	</div>
	<div id="pf5" class="pf w0 h0" data-page-no="5">
		<div class="watermark">novi-vorota.com.ua</div>
		<div class="pc pc5 w0 h0">
      <?php echo $image5; ?>
			<div class="t m6 x8d h7 ydf ffd fs0 fc0 sc0 ls0 ws0">(**)</div>
			<div class="t m46 x9f h7 ye0 ffd fs0 fc0 sc0 ls0 ws0"><?php echo $b5; ?> (висота розміщеня уловлювача верхнього</div>
			<div class="t m47 xa0 h7 ye1 ffd fs0 fc0 sc0 ls0 ws0">по висоті воріт)</div>
			<div class="t m1 xa1 h7 ye2 ffd fs0 fc0 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m48 xa2 h7 ye3 ffd fs0 fc0 sc0 ls0 ws0"><?php echo $b4; ?> Висота розміщеня верхнього роліка</div>
			<div class="t m46 xa3 h7 ye4 ffd fs0 fc0 sc0 ls0 ws0">по нащільнику задньому</div>
			<div class="t m3 xa4 h7 ye5 ffd fs0 fc0 sc0 ls0 ws0">95 <span class="_ _8"> </span> 95</div>
			<div class="t m7 x52 h7 ye6 ffd fs0 fc1 sc0 ls0 ws0">Відстань від фундаменту до верху воріт</div>
			<div class="t m12 xa5 h7 ye7 ffd fs0 fc1 sc0 ls0 ws0">R</div>
			<div class="t m12 xa6 h7 ye8 ffd fs0 fc1 sc0 ls0 ws0">S</div>
			<div class="t m2 xa7 h7 ye9 ffd fs0 fc1 sc0 ls0 ws0">Кріпленя нащільника переднього та заднього провести на закладні зварюваням.</div>
			<div class="t ma xa8 h7 ye9 ffd fs0 fc1 sc0 ls0 ws0">1.</div>
			<div class="t mb xa9 h7 yea ffd fs0 fc1 sc0 ls0 ws0">** Уловлювач нижній розмістити в складальному вигляді з стулкою воріт та роліками</div>
			<div class="t m2a xa8 h7 yea ffd fs0 fc1 sc0 ls0 ws0">2.</div>
			<div class="t m49 xa8 h7 yeb ffd fs0 fc1 sc0 ls0 ws0">опорними в горізонтальній поверхні на 3мм-4мм вище роліка кінцевого.</div>
			<div class="t m3e xa8 h7 yec ffd fs0 fc1 sc0 ls0 ws0">3. Ролік верхній розмістити по висоті нащільника заднього.</div>
			<div class="t m21 xaa h7 yed ffd fs0 fc1 sc0 ls0 ws0">10</div>
			<div class="t m2a xa5 h7 yee ffd fs0 fc1 sc0 ls0 ws0">11</div>
			<div class="t m1f x70 h7 yef ffd fs0 fc1 sc0 ls0 ws0">W</div>
			<div class="t m2e xa5 h7 yf0 ffd fs0 fc1 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m4a xab h7 yf1 ffd fs0 fc1 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m4b xac h7 yf1 ffd fs0 fc1 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m1f xad h8 yf2 ffd fs1 fc1 sc0 ls0 ws0">W</div>
			<div class="t m12 xae h8 yf3 ffd fs1 fc1 sc0 ls0 ws0">R</div>
			<div class="t m12 x50 h8 yf4 ffd fs1 fc1 sc0 ls0 ws0">S</div>
			<div class="t m4c xaf h8 yf5 ffd fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ W</div>
			<div class="t m11 xb0 h8 yf6 ffd fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m4b x56 h7 yf7 ffd fs0 fc1 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m2c xb1 h7 yf8 ffd fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m30 xb2 h7 yf9 ffd fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m32 xc h8 yfa ffd fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ R</div>
			<div class="t m11 xb3 h8 yfb ffd fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m2c xb4 h7 yfc ffd fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m4d x3e h7 yfd ffd fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m4e xb5 h7 yfe ffd fs0 fc1 sc0 ls0 ws0">Уловитель верхній</div>
			<div class="t m32 xb6 h8 yff ffd fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ S</div>
			<div class="t m11 xb7 h8 y100 ffd fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m24 xb8 h7 y101 ffd fs0 fc1 sc0 ls0 ws0">Уловитель нижній</div>
			<div class="t m2c xb9 h7 y102 ffd fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m4d xba h7 y103 ffd fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m4f x1d h7 y104 ffd fs0 fc0 sc0 ls0 ws0"><?php echo $r1; ?></div>
			<div class="t m22 xbb h7 y105 ffd fs0 fc0 sc0 ls0 ws0"><?php echo $r2; ?></div>
			<div class="t m50 xbc h22 y106 ffd fs11 fc0 sc0 ls0 ws0">Встановити в міжцегляному</div>
			<div class="t m51 xbd h22 y107 ffd fs11 fc0 sc0 ls0 ws0">шву на відстані півцегли</div>
			<div class="t m52 xbe h22 y108 ffd fs11 fc0 sc0 ls0 ws0">відносно внутнішньої</div>
			<div class="t m53 x76 h22 y109 ffd fs11 fc0 sc0 ls0 ws0">поверхні стовпа.</div>
			<div class="t m54 xbf h8 y10a ffd fs1 fc0 sc0 ls0 ws0">Встановити в міжцегляному</div>
			<div class="t m55 x14 h8 y10b ffd fs1 fc0 sc0 ls0 ws0">шву на відстані півцегли</div>
			<div class="t m56 xc0 h8 y10c ffd fs1 fc0 sc0 ls0 ws0">відносно внутрішньої</div>
			<div class="t m57 x53 h8 y10d ffd fs1 fc0 sc0 ls0 ws0">поверхні стовпа.</div>
			<div class="t m14 x2e h8 y10e ffd fs1 fc1 sc0 ls0 ws0">АА <span class="_ _9"> </span> АА</div>
			<div class="t m58 xc1 h7 y10f ffd fs0 fc1 sc0 ls0 ws0">СЕЧЕНИЕ АА-АА</div>
			<div class="t m11 xc2 h7 y110 ffd fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m59 x76 h7 y111 ffd fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m11 x14 h7 y112 ffd fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m59 xc3 h7 y113 ffd fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m11 x75 h7 y114 ffd fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m59 xc4 h7 y115 ffd fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m11 x75 h7 y116 ffd fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m59 xc4 h7 y117 ffd fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m5a xc5 h7 y118 ffd fs0 fc1 sc0 ls0 ws0">(4 місця)</div>
			<div class="t m17 xc6 h8 y119 ffd fs1 fc1 sc0 ls0 ws0">АА-АА</div>
			<div class="t m29 xc7 h8 y11a ffd fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m14 xc8 h8 y11b ffd fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕАА <span class="_ _a"> </span> СЕЧЕНИЕАА</div>
			<div class="t m5 xc9 h8 y11c ffd fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 10</div>
			<div class="t m2c xca h7 y11d ffd fs0 fc1 sc0 ls0 ws0">Закладна нащільника</div>
			<div class="t m33 xcb h7 y11e ffd fs0 fc0 sc0 ls0 ws0">Лист_5</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
	<div id="pf6" class="pf w0 h0" data-page-no="6">
		<div class="watermark">novi-vorota.com.ua</div>
		<div class="pc pc6 w0 h0">
      <?php echo $image6; ?>
			<div class="t m5c x5b h8 y125 fff fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ J</div>
			<div class="t m29 xc h8 y126 fff fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m4a x38 h7 y127 fff fs0 fc1 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m5d x81 h7 y128 fff fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5e xcf h7 y129 fff fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m2e xd0 h7 y12a fff fs0 fc1 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m5d xd1 h7 y12b fff fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5e xd2 h7 y12c fff fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m5d xd3 h7 y12d fff fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5e xd4 h7 y12e fff fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m5f x16 h8 y12f fff fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ L</div>
			<div class="t m29 x87 h8 y130 fff fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m5d xb9 h7 y131 fff fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5e xd5 h7 y132 fff fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m32 xd6 h8 y133 fff fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ Z</div>
			<div class="t m29 xd7 h8 y134 fff fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m24 xd8 h7 y135 fff fs0 fc1 sc0 ls0 ws0">Ролік</div>
			<div class="t m60 xd1 h7 y136 fff fs0 fc1 sc0 ls0 ws0">верхній</div>
			<div class="t m3 xd9 h7 y137 fff fs0 fc0 sc0 ls0 ws0">300</div>
			<div class="t m9 xda h7 y137 fff fs0 fc1 sc0 ls0 ws0">450</div>
			<div class="t m1d xdb h8 y138 fff fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ I</div>
			<div class="t m29 x59 h8 y139 fff fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m61 xdc h7 y13a fff fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m30 x3e h7 y13b fff fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m2e xb4 h7 y13c fff fs0 fc1 sc0 ls0 ws0">Стовп</div>
			<div class="t m26 xdd h7 y13d fff fs0 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m62 xde h7 y13e fff fs0 fc1 sc0 ls0 ws0">Рейка зубчата</div>
			<div class="t m4e xdf h7 y13f fff fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m63 xe0 h7 y140 fff fs0 fc1 sc0 ls0 ws0">Кронштейн привода</div>
			<div class="t m2d x5f h7 y141 fff fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m1f x28 h7 y142 fff fs0 fc1 sc0 ls0 ws0">армований</div>
			<div class="t m64 xe1 h7 y143 fff fs0 fc1 sc0 ls0 ws0">Арматура</div>
			<div class="t m65 xe2 h7 y143 fff fs0 fc1 sc0 ls0 ws0">Ролік опорний</div>
			<div class="t m4e xe3 h7 y144 fff fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m26 xe4 h7 y145 fff fs0 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m66 xe5 h7 y146 fff fs0 fc1 sc0 ls0 ws0">Кронштейн</div>
			<div class="t m28 xe6 h7 y140 fff fs0 fc1 sc0 ls0 ws0">привода</div>
			<div class="t m18 xe7 h8 y147 fff fs1 fc1 sc0 ls0 ws0">AE</div>
			<div class="t m18 xe8 h8 y148 fff fs1 fc1 sc0 ls0 ws0">AF</div>
			<div class="t m67 xe9 h8 y149 fff fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ AD-AD</div>
			<div class="t m5 xe9 h8 y14a fff fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 10</div>
			<div class="t m1d xea h8 y14b fff fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ AE</div>
			<div class="t m29 xeb h8 y14c fff fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 2</div>
			<div class="t m68 x49 h7 y14d fff fs0 fc1 sc0 ls0 ws0">Кінцевик магнітний</div>
			<div class="t m3 xd7 h7 y14e fff fs0 fc1 sc0 ls0 ws0">положеня-відкрито</div>
			<div class="t m69 xec h7 y14f fff fs0 fc1 sc0 ls0 ws0">Рейка</div>
			<div class="t m6a xdb h7 y150 fff fs0 fc1 sc0 ls0 ws0">зубчата</div>
			<div class="t m6b xed h7 y151 fff fs0 fc1 sc0 ls0 ws0">Клепальна гайка</div>
			<div class="t m63 x5e h7 y152 fff fs0 fc1 sc0 ls0 ws0">(кріпленя зубчатої рейки)</div>
			<div class="t m1d xee h8 y153 fff fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ AF</div>
			<div class="t m29 xef h8 y154 fff fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 2</div>
			<div class="t m6c xf0 h7 y155 fff fs0 fc1 sc0 ls0 ws0">Кінцевий ролік</div>
			<div class="t m24 xf1 h7 y156 fff fs0 fc1 sc0 ls0 ws0">Профіль</div>
			<div class="t m6d xf2 h7 y157 fff fs0 fc1 sc0 ls0 ws0">Прижимна планка</div>
			<div class="t m2 xf3 h7 y158 fff fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5e x6f h7 y159 fff fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m6e xf4 h7 y15a fff fs0 fc1 sc0 ls0 ws0">Уловлювач</div>
			<div class="t m6f xf5 h7 y15b fff fs0 fc1 sc0 ls0 ws0">нижній</div>
			<div class="t m61 xe6 h7 y15c fff fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m4d xf6 h7 y15d fff fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m70 xf7 h8 y15e fff fs1 fc1 sc0 ls0 ws0">AB</div>
			<div class="t m3f xb h8 y15f fff fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ Z1</div>
			<div class="t m29 xf8 h8 y160 fff fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m2d x57 h7 y161 fff fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m1f xf9 h7 y162 fff fs0 fc1 sc0 ls0 ws0">армований</div>
			<div class="t m65 xfa h7 y163 fff fs0 fc1 sc0 ls0 ws0">Ролік опорний</div>
			<div class="t m5d xfb h7 y164 fff fs0 fc1 sc0 ls0 ws0">Заглушка задня</div>
			<div class="t m2e xfc h7 y165 fff fs0 fc1 sc0 ls0 ws0">Стовп</div>
			<div class="t m61 xfd h7 y166 fff fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m30 xfe h7 y167 fff fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m71 x18 h8 y168 fff fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ AB</div>
			<div class="t m72 xff h8 y169 fff fs1 fc1 sc0 ls0 ws0">МАСШТАБ 2 : 5</div>
			<div class="t m68 x1e h7 y16a fff fs0 fc1 sc0 ls0 ws0">Кінцевик магнітний</div>
			<div class="t m24 x100 h7 y16b fff fs0 fc1 sc0 ls0 ws0">положеня-закрито</div>
			<div class="t m69 x101 h7 y16c fff fs0 fc1 sc0 ls0 ws0">Рейка</div>
			<div class="t m6a x100 h7 y16d fff fs0 fc1 sc0 ls0 ws0">зубчата</div>
			<div class="t m4e x102 h7 y16e fff fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m73 x103 h7 y16f fff fs0 fc1 sc0 ls0 ws0">Шестерня</div>
			<div class="t m74 x8c h7 y170 fff fs0 fc1 sc0 ls0 ws0">Кронштейн</div>
			<div class="t m28 x100 h7 y171 fff fs0 fc1 sc0 ls0 ws0">привода</div>
			<div class="t m6b x104 h7 y16a fff fs0 fc1 sc0 ls0 ws0">Клепальна гайка</div>
			<div class="t m63 x105 h7 y16b fff fs0 fc1 sc0 ls0 ws0">(кріпленя зубчатої рейки)</div>
			<div class="t m2 x106 h7 y172 fff fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5e x107 h7 y173 fff fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m24 x97 h7 y174 fff fs0 fc1 sc0 ls0 ws0">Ролік</div>
			<div class="t m3 x108 h7 y175 fff fs0 fc1 sc0 ls0 ws0">опорний</div>
			<div class="t m75 x57 h8 y176 fff fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ Q-Q</div>
			<div class="t m29 x109 h8 y177 fff fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m11 x10a h7 y178 fff fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m76 x10b h7 y179 fff fs0 fc1 sc0 ls0 ws0">нащельника</div>
			<div class="t m77 x10c h7 y17a fff fs0 fc1 sc0 ls0 ws0">Уловлювач</div>
			<div class="t m60 x10d h7 y17b fff fs0 fc1 sc0 ls0 ws0">верхній</div>
			<div class="t m61 x72 h7 y17c fff fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m4d x10e h7 y17d fff fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m61 x10f h7 y17c fff fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m4d x110 h7 y17d fff fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m77 xc2 h7 y17a fff fs0 fc1 sc0 ls0 ws0">Уловлювач</div>
			<div class="t m6f x111 h7 y17b fff fs0 fc1 sc0 ls0 ws0">нижній</div>
			<div class="t m58 x112 h8 y17e fff fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ F-F</div>
			<div class="t m29 x113 h8 y17f fff fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m11 x114 h7 y180 fff fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m76 x115 h7 y181 fff fs0 fc1 sc0 ls0 ws0">нащельника</div>
			<div class="t m5d x12 h7 y182 fff fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5e xbb h7 y183 fff fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m33 x116 h7 y184 fff fs0 fc0 sc0 ls0 ws0">Лист_6</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif; ?>
</div>

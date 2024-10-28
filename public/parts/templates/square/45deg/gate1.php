<?php
  $image1 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/45deg/gate_images1/image1.svg");
  $image2 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/45deg/gate_images1/image2.svg");
  $image3 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/45deg/gate_images1/image3.svg");
  $image4 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/45deg/gate_images1/image4.svg");
  $image5 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/45deg/gate_images1/image5.svg");
  $image6 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/45deg/gate_images1/image6.svg");
  $css    = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/styles/square/45deg/gate1.css");

  if($wicket == 'on') {
  $start_gate1 = 135;
  $pillar1 = 155;
  $image_width1 = 864.29;
  $result_left1 = $image_width1/$manual_a*$wicket_left+$start_gate1;

  $start_gate2 = 238;
  $pillar2 = 155;
  $image_width2 = 1152.39;
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
  $c1 = round(($a - 140 - 2 * 30) / 3);
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
    top: 15.71%;
    left: <?=$result_left1?>px;
    width: 150.9px!important;
    height: 303px!important;
    z-index: 2;
}

.svg-line1 {
	position: absolute;
	background-color: gray;
    top: 15.71%;
    left: <?=($result_left1+22)?>px;
    width: 107.0px!important;
    height: 1px!important;
    z-index: 3;
}

.svg-line2 {
	position: absolute;
	background-color: gray;
    top: 12.71%;
    left: <?=($result_left1+22)?>px;
    width: 1px!important;
    height: 50px!important;
    z-index: 3;
}

.svg-line3 {
	position: absolute;
	background-color: gray;
    top: 12.71%;
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
    top: 13.71%;
    left: <?=($result_left1+10)?>px;
    width: 133.0px!important;
    z-index: 3;
    text-align: center;
}

.svg-line4 {
	position: absolute;
	background-color: gray;
    top: 63.71%;
    left: <?=($start_gate1)?>px;
    width: <?=(($result_left1)-118)?>px!important;
    height: 1px!important;
    z-index: 3;
}

.svg-line5 {
	position: absolute;
	background-color: gray;
    top: 50.71%;
    left: <?=($start_gate1)?>px;
    width: 1px!important;
    height: 120px!important;
    z-index: 3;
}

.svg-line6 {
	position: absolute;
	background-color: gray;
    top: 50.71%;
    left: <?=($result_left1+17)?>px;
    width: 1px!important;
    height: 120px!important;
    z-index: 3;
}

.svg-text2 {
	position: absolute;
	background-color: transparent;
	color: red;
	font-weight: 700;
    top: 61.71%;
    left: <?=($start_gate1)?>px;
    width: <?=(($result_left1)-118)?>px!important;
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
    top: 18%;
    left: <?=($result_left2-5)?>px;
    width: 140.9px !important;
    height: 348px !important;
    z-index: 2;
}

.svg-line2_1 {
	position: absolute;
	background-color: gray;
    top: 15.71%;
    left: <?=($result_left2+17)?>px;
    width: 97.0px!important;
    height: 1px!important;
    z-index: 3;
}

.svg-line2_2 {
	position: absolute;
	background-color: gray;
    top: 14.01%;
    left: <?=($result_left2+17)?>px;
    width: 1px!important;
    height: 50px!important;
    z-index: 3;
}

.svg-line2_3 {
	position: absolute;
	background-color: gray;
    top: 14.01%;
    left: <?=($result_left2+5+108)?>px;
    width: 1px!important;
    height: 50px!important;
    z-index: 3;
}

.svg-text2_1 {
	position: absolute;
	background-color: transparent;
	color: red;
	font-weight: 700;
    top: 14.31%;
    left: <?=($result_left2+10)?>px;
    width: 120.0px!important;
    z-index: 3;
    text-align: center;
}

.svg-line2_4 {
	position: absolute;
	background-color: gray;
    top: 53.71%;
    left: <?=($start_gate2)?>px;
    width: <?=(($result_left2)-225)?>px!important;
    height: 1px!important;
    z-index: 3;
}

.svg-line2_5 {
	position: absolute;
	background-color: gray;
    top: 45.71%;
    left: <?=($start_gate2)?>px;
    width: 1px!important;
    height: 120px!important;
    z-index: 3;
}

.svg-line2_6 {
	position: absolute;
	background-color: gray;
    top: 45.71%;
    left: <?=($result_left2+13)?>px;
    width: 1px!important;
    height: 120px!important;
    z-index: 3;
}

.svg-text2_2 {
	position: absolute;
	background-color: transparent;
	color: red;
	font-weight: 700;
    top: 51.71%;
    left: <?=($start_gate2)?>px;
    width: <?=(($result_left2)-225)?>px!important;
    z-index: 3;
    text-align: center;
}

.svg-line2_7 {
	position: absolute;
    background-color: gray;
    top: 47.1%;
    left: 188px;
    width: 300px !important;
    height: 1px !important;
    z-index: 3;
}

.svg-line2_8 {
	position: absolute;
    background-color: gray;
    top: 18.6%;
    left: 210px;
    width: 1px !important;
    height: 340px !important;
    z-index: 3;
}

.svg-line2_9 {
  position: absolute;
  background-color: gray;
  top: 18.6%;
  left: 188px;
  width: 300px !important;
  height: 1px !important;
  z-index: 3;
}

.svg-text2_3 {
	position: absolute;
    background-color: transparent;
    text-align: center;
    top: 18.6%;
    left: 210px;
    width: 1px !important;
    height: 340px !important;
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
<!--<link rel='stylesheet' id='pdf-stylesheet-css' href='--><?php //=$_SERVER['APP_URL']?><!--/parts/styles/square/45deg/gate1.css' type='text/css' media='all' />-->
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
			<div class="t ma xd h3 ya ff1 fs1 fc1 sc0 ls0 ws0">1.</div>
			<div class="t mb xd h3 yb ff1 fs1 fc1 sc0 ls0 ws0">2. Уловитель нижній встановити в складальному вигляді воріт та роліків верхніх в горізонтальній поверхні на 3-4мм</div>
			<div class="t m9 xd h3 yc ff1 fs1 fc1 sc0 ls0 ws0">вище кінцевого роліка, місцевий Вид L, Вид S, розріз F-F (Лист_1, Лист_5).</div>
			<div class="t mc xd h3 yd ff1 fs1 fc1 sc0 ls0 ws0">2. *** Уловлювач верхній та верхній ролік встановити після встановленя уловлювача нижнього, місцевий Вид R, Вид Z,</div>
			<div class="t md xd h3 ye ff1 fs1 fc1 sc0 ls0 ws0">Вид W, Вид J (Лист_1, Лист_5, Лист_6).</div>
			<div class="t mb xd h3 yf ff1 fs1 fc1 sc0 ls0 ws0">3. Умова розміщеня привода воріт (зацепленя шестерні в зубчатій рейці) без натягу.</div>
			<div class="t me xd h3 y10 ff1 fs1 fc1 sc0 ls0 ws0">4. Розмістити привід таким чином, щоб шестерня привода була розміщена по середині зубчатої рейки, місцевий вид АВ</div>
			<div class="t m4 xd h3 y11 ff1 fs1 fc1 sc0 ls0 ws0">(Лист_6). Бокова поверхня шестерні повиннна бути паралельна боковій поверхні рейки зубчатої.</div>
			<div class="t mf xd h3 y12 ff1 fs1 fc1 sc0 ls0 ws0">5. Магнітні кінцевики (положеня-відкрито. закрито) встановити на зубчатій рейці по факту умови повного закривання та</div>
			<div class="t m10 xd h3 y13 ff1 fs1 fc1 sc0 ls0 ws0">відкривання воріт (Лист_1).</div>
			<div class="t m11 xd h3 y14 ff1 fs1 fc1 sc0 ls0 ws0">6. Кріпленя магнітного кінцевика вказано на розрізі AD-AD, Вид АЕ (Лист_6)</div>
			<div class="t m12 xe h3 y15 ff1 fs1 fc1 sc0 ls0 ws0">J</div>
			<div class="t m3 xf h3 y16 ff1 fs1 fc1 sc0 ls0 ws0">L</div>
			<div class="t m12 x10 h3 y17 ff1 fs1 fc1 sc0 ls0 ws0">Z</div>
			<div class="t m13 x11 h3 y18 ff1 fs1 fc1 sc0 ls0 ws0">I</div>
			<div class="t m14 x0 h3 y19 ff1 fs1 fc1 sc0 ls0 ws0">Q<span class="_ _0"> </span>Q</div>
			<div class="t m14 x12 h3 y1a ff1 fs1 fc1 sc0 ls0 ws0">F<span class="_ _1"> </span>F</div>
			<div class="t m14 x13 h3 y1b ff1 fs1 fc1 sc0 ls0 ws0">AD</div>
			<div class="t m14 x13 h3 y1c ff1 fs1 fc1 sc0 ls0 ws0">AD</div>
			<div class="t m15 x14 h4 y1d ff1 fs2 fc1 sc0 ls0 ws0">Заглушка</div>
			<div class="t m16 x15 h4 y1e ff1 fs2 fc1 sc0 ls0 ws0">задня</div>
			<div class="t m17 x16 h4 y1f ff1 fs2 fc1 sc0 ls0 ws0">Магнітний кінцевик</div>
			<div class="t m18 x17 h4 y20 ff1 fs2 fc1 sc0 ls0 ws0">положення-закрито</div>
			<div class="t m19 x18 h4 y21 ff1 fs2 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m17 x19 h4 y22 ff1 fs2 fc1 sc0 ls0 ws0">Магнітний кінцевик</div>
			<div class="t m1a x1a h4 y23 ff1 fs2 fc1 sc0 ls0 ws0">положення-відкрито</div>
			<div class="t m1b x1b h4 y24 ff1 fs2 fc2 sc0 ls0 ws0">Z1</div>
			<div class="t m1c x1c h3 y25 ff1 fs1 fc1 sc0 ls0 ws0">Z1</div>
			<div class="t m1d x1d h3 y26 ff1 fs1 fc1 sc0 ls0 ws0">ВИД</div>
			<div class="t mf x1e h3 y27 ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 20</div>
			<div class="t m14 x1f h3 y28 ff1 fs1 fc1 sc0 ls0 ws0">A<span class="_ _2"> </span>A</div>
			<div class="t m1e x20 h3 y29 ff1 fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ A-A</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "2")) : ?>
	<div id="pf2" class="pf w0 h0" data-page-no="2">
		<div class="watermark">novi-vorota.com.ua</div>
		<div class="pc pc2 w0 h0">
      <?php echo $image2; ?>
			<div class="t m3 x22 h6 y2b ff2 fs0 fc0 sc0 ls0 ws0">95</div>
			<div class="t m0 x23 h6 y2c ff2 fs0 fc0 sc0 ls0 ws0">100<span class="_ _3"> </span>100</div>
			<div class="t m9 x24 h6 y2d ff2 fs0 fc0 sc0 ls0 ws0">240</div>
			<div class="t m1f x25 h6 y2e ff2 fs0 fc0 sc0 ls0 ws0">500</div>
			<div class="t m1 x26 h6 y2f ff2 fs0 fc0 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m20 x27 h6 y30 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $l1; ?></div>
			<div class="t m21 xc h6 y31 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $b5; ?></div>
			<div class="t m6 x28 h6 y32 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $b4; ?></div>
			<div class="t m3 x29 h6 y33 ff2 fs0 fc0 sc0 ls0 ws0">95</div>
			<div class="t m22 x2a h6 y34 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a7; ?></div>
			<div class="t m23 x2b h6 y35 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a6; ?></div>
			<div class="t m14 x2c h7 y36 ff2 fs1 fc1 sc0 ls0 ws0">A<span class="_ _4"> </span>A</div>
			<div class="t m14 x2d h7 y37 ff2 fs1 fc1 sc0 ls0 ws0">N</div>
			<div class="t m23 x17 h6 y38 ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m24 x2e h6 y39 ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m25 x27 h6 y3a ff2 fs0 fc1 sc0 ls0 ws0">для роліка опорного</div>
			<div class="t m3 x2f h6 y3b ff2 fs0 fc1 sc0 ls0 ws0">переднього</div>
			<div class="t m23 x17 h6 y3c ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m24 x2e h6 y3d ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m25 x27 h6 y3e ff2 fs0 fc1 sc0 ls0 ws0">для роліка опорного</div>
			<div class="t m26 x30 h6 y3f ff2 fs0 fc1 sc0 ls0 ws0">заднього</div>
			<div class="t m23 x31 h6 y40 ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m24 x32 h6 y41 ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m2 x33 h6 y42 ff2 fs0 fc1 sc0 ls0 ws0">для кронштейна</div>
			<div class="t m27 x34 h6 y43 ff2 fs0 fc1 sc0 ls0 ws0">привода</div>
			<div class="t m28 x35 h6 y44 ff2 fs0 fc1 sc0 ls0 ws0">Ролік задній розмістити в складальному вигляді з рамою воріт</div>
			<div class="t mf x35 h6 y45 ff2 fs0 fc1 sc0 ls0 ws0">максимально віддаленим по довжині хвостовика воріт.</div>
			<div class="t m29 x36 h6 y46 ff2 fs0 fc1 sc0 ls0 ws0">11</div>
			<div class="t m20 x37 h6 y47 ff2 fs0 fc1 sc0 ls0 ws0">10</div>
			<div class="t m23 x38 h6 y48 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a5; ?></div>
			<div class="t m3 xf h6 y49 ff2 fs0 fc0 sc0 ls0 ws0">95</div>
			<div class="t m2a x12 h6 y4a ff2 fs0 fc0 sc0 ls0 ws0">160</div>
			<div class="t m9 x39 h6 y4b ff2 fs0 fc0 sc0 ls0 ws0">250</div>
			<div class="t m3 x3a h6 y4c ff2 fs0 fc0 sc0 ls0 ws0">60</div>
			<div class="t m21 x3b h6 y4d ff2 fs0 fc0 sc0 ls0 ws0">40</div>
			<div class="t m2b x3c h7 y4e ff2 fs1 fc1 sc0 ls0 ws0">A-A МАСШТАБ1 : 16</div>
			<div class="t m2c x3d h6 y4f ff2 fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m2d x3e h6 y50 ff2 fs0 fc1 sc0 ls0 ws0">Стовп</div>
			<div class="t m2e x3f h6 y51 ff2 fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m2f x40 h6 y52 ff2 fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m24 xd h6 y53 ff2 fs0 fc1 sc0 ls0 ws0">(Розміщення швелера відносно стовпа)</div>
			<div class="t m23 x41 h6 y54 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a8; ?></div>
			<div class="t m1f x42 h6 y55 ff2 fs0 fc0 sc0 ls0 ws0">500</div>
			<div class="t m12 x43 h7 y56 ff2 fs1 fc1 sc0 ls0 ws0">O</div>
			<div class="t m30 x44 h7 y57 ff2 fs1 fc1 sc0 ls0 ws0">ВИД N</div>
			<div class="t m5 x45 h7 y58 ff2 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 16</div>
			<div class="t m0 x46 h6 y59 ff2 fs0 fc0 sc0 ls0 ws0">160</div>
			<div class="t m31 x47 h7 y5a ff2 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ O</div>
			<div class="t m28 x46 h7 y5b ff2 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m2c x48 h6 y5c ff2 fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m2e x49 h6 y5d ff2 fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m2f x4a h6 y5e ff2 fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m32 x4b h6 y5f ff2 fs0 fc0 sc0 ls0 ws0">Лист_2</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "3")) : ?>
	<div id="pf3" class="pf w4 ha" data-page-no="3" style="transform: scale(0.70); transform-origin: 18% 1%;">
		<div class="watermark">novi-vorota.com.ua</div>
		<div class="pc pc3 w4 ha">
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
			<div class="t m34 x33 hc y63 ff4 fs4 fc0 sc0 ls0 ws0"><?php echo $c1; ?><span class="_ _5"> </span><?php echo $c1; ?></div>
			<div class="t m35 x30 hc y64 ff4 fs4 fc0 sc0 ls0 ws0"><?php echo $d; ?><span class="_ _6"></span><?php echo $d; ?></div>
			<div class="t m36 x4f hc y65 ff4 fs4 fc0 sc0 ls0 ws0"><?php echo $b1; ?></div>
			<div class="t m3 x50 hc y66 ff4 fs4 fc0 sc0 ls0 ws0"><?php echo $c; ?></div>
			<div class="t m1f x51 hc y67 ff4 fs4 fc0 sc0 ls0 ws0">60</div>
			<div class="t m35 x4e hc y68 ff4 fs4 fc0 sc0 ls0 ws0"><?php echo $b; ?></div>
			<div class="t m2 x52 hc y69 ff4 fs4 fc0 sc0 ls0 ws0"><?php echo $a; ?></div>
			<div class="t m34 x53 hc y6a ff4 fs4 fc0 sc0 ls0 ws0"><?php echo $c1; ?></div>
			<div class="t m37 x54 hd y6b ff4 fs5 fc1 sc0 ls0 ws0"><?php echo $g; ?></div>
			<div class="t m2b x55 he y6c ff4 fs6 fc1 sc0 ls0 ws0">A</div>
			<div class="t m12 x3a he y6d ff4 fs6 fc1 sc0 ls0 ws0">B</div>
			<div class="t m38 x56 he y6e ff4 fs6 fc1 sc0 ls0 ws0">A1</div>
			<div class="t m1c x57 he y6f ff4 fs6 fc1 sc0 ls0 ws0">В1</div>
			<div class="t m39 x58 h6 y70 ff4 fs0 fc1 sc0 ls0 ws0">1</div>
			<div class="t m3 x59 h6 y71 ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3 x5a h6 y72 ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3 x5b h6 y73 ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3 x5c h6 y74 ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t m12 x5d h6 y75 ff4 fs0 fc1 sc0 ls0 ws0">4</div>
			<div class="t m3 x5e h6 y76 ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m3 x5f h6 y77 ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m3 x60 h6 y78 ff4 fs0 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3 x60 h6 y79 ff4 fs0 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3 x1b h6 y7a ff4 fs0 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3 x1b h6 y79 ff4 fs0 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3 x61 h6 y7b ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m3 x62 h6 y7c ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m3a x51 he y7d ff4 fs6 fc1 sc0 ls0 ws0">МЕСТНЫЙ A</div>
			<div class="t m11 x63 he y7e ff4 fs6 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m3 x2 h6 y7f ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3 x51 h6 y80 ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3 x64 h6 y81 ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m3b x65 he y82 ff4 fs6 fc1 sc0 ls0 ws0">МЕСТНЫЙ B</div>
			<div class="t m11 x66 he y83 ff4 fs6 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m39 x67 h6 y84 ff4 fs0 fc1 sc0 ls0 ws0">1</div>
			<div class="t m3 x68 h6 y85 ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3 x69 h6 y86 ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3 x6a h6 y87 ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m3c x6b he y88 ff4 fs6 fc1 sc0 ls0 ws0">МЕСТНЫЙ A1</div>
			<div class="t m11 x25 he y89 ff4 fs6 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m3d x6c he y8a ff4 fs6 fc1 sc0 ls0 ws0">дзеркальне відображеня ВидА</div>
			<div class="t m3 x6d h6 y8b ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3 x6e h6 y8c ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3 x6f h6 y8d ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m3e x70 he y8e ff4 fs6 fc1 sc0 ls0 ws0">МЕСТНЫЙ В1</div>
			<div class="t m11 x71 he y8f ff4 fs6 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m5 x72 he y90 ff4 fs6 fc1 sc0 ls0 ws0">дзеркальне відображеня ВидВ</div>
			<div class="t m39 x73 h6 y91 ff4 fs0 fc1 sc0 ls0 ws0">1</div>
			<div class="t m3 x74 h6 y92 ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3 x75 h6 y93 ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3 x1c h6 y94 ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m32 x76 hc y95 ff4 fs4 fc0 sc0 ls0 ws0">Лист_3</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "4")) : ?>
	<div id="pf4" class="pf w6 hf" data-page-no="4" style="margin-top: -350px;">
		<div class="watermark">novi-vorota.com.ua</div>
		<div class="pc pc4 w6 hf">
      <?php echo $image4; ?>
			<div class="c x77 y97 w8 h11">
				<div class="t m33 x78 h12 y98 ff5 fs7 fc1 sc0 ls0 ws0"><?php echo $g1; ?></div>
				<div class="t m33 x79 h12 y99 ff5 fs7 fc1 sc0 ls0 ws0"><?php echo $c; ?></div>
				<div class="t m33 x7a h12 y9a ff5 fs7 fc1 sc0 ls0 ws0"><?php echo $d; ?></div>
				<div class="t m33 x5a h12 y9b ff5 fs7 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3f x7b h12 y9c ff5 fs7 fc1 sc0 ls0 ws0">30</div>
				<div class="t m33 x5a h12 y9d ff5 fs7 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3f x7c h12 y9e ff5 fs7 fc1 sc0 ls0 ws0">30</div>
				<div class="t m33 x35 h12 y9f ff5 fs7 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3f x7c h12 ya0 ff5 fs7 fc1 sc0 ls0 ws0">30</div>
				<div class="t m33 x7d h12 ya1 ff5 fs7 fc1 sc0 ls0 ws0"><?php echo $a; ?></div>
				<div class="t m33 x7e h12 ya2 ff6 fs7 fc1 sc0 ls0 ws0">а(Ш)</div>
				<div class="t m3f x7f h12 ya3 ff6 fs7 fc1 sc0 ls0 ws0">в(В)</div>
				<div class="t m33 x2a h12 ya4 ff5 fs7 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3f x80 h12 ya5 ff5 fs7 fc1 sc0 ls0 ws0">40</div>
				<div class="t m33 x81 h12 ya6 ff5 fs7 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3f x5a h12 ya7 ff5 fs7 fc1 sc0 ls0 ws0">30</div>
				<div class="t m33 x82 h12 ya8 ff5 fs7 fc1 sc0 ls0 ws0"><?php echo $a3; ?></div>
				<div class="t m33 x3f h13 ya9 ff5 fs8 fc1 sc0 ls0 ws0">1.</div>
				<div class="t m33 x83 h13 yaa ff5 fs8 fc1 sc0 ls0 ws0">2.</div>
				<div class="t m33 x84 h13 yab ff5 fs8 fc1 sc0 ls0 ws0">3.</div>
				<div class="t m33 x83 h13 yac ff5 fs8 fc1 sc0 ls0 ws0">4.</div>
				<div class="t m33 x84 h13 yad ff5 fs8 fc1 sc0 ls0 ws0">5.</div>
				<div class="t m33 x83 h13 yae ff5 fs8 fc1 sc0 ls0 ws0">6.</div>
				<div class="t m33 x3f h13 yaf ff5 fs8 fc1 sc0 ls0 ws0">7.</div>
				<div class="t m33 x3f h13 yb0 ff5 fs8 fc1 sc0 ls0 ws0">8.</div>
				<div class="t m33 x85 h12 yb1 ff6 fs7 fc1 sc0 ls0 ws0"><?php echo $b5; ?></div>
				<div class="t m33 x86 h12 yb2 ff5 fs7 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3f x87 h12 yb3 ff5 fs7 fc1 sc0 ls0 ws0">40</div>
				<div class="t m3f x80 h12 yb4 ff5 fs7 fc1 sc0 ls0 ws0">60</div>
				<div class="t m33 x88 h12 yb5 ff5 fs7 fc1 sc0 ls0 ws0">40</div>
				<div class="t m33 x89 h12 yb6 ff6 fs7 fc1 sc0 ls0 ws0"><?php echo $b4; ?></div>
				<div class="t m33 x8a h14 yb7 ff6 fs9 fc1 sc0 ls0 ws0">Порізка профілей на заготовки</div>
				<div class="t m33 x8a h14 yb8 ff6 fs9 fc1 sc0 ls0 ws0">Порізка нащільника заднього</div>
				<div class="t m33 x8a h14 yb9 ff6 fs9 fc1 sc0 ls0 ws0">Порізка нащільника переднього</div>
				<div class="t m33 x52 h13 ya9 ff6 fs8 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m33 x8b h13 yba ff6 fs8 fc1 sc0 ls0 ws0">2шт.</div>
				<div class="t m33 x8b h13 ybb ff6 fs8 fc1 sc0 ls0 ws0">2шт.</div>
				<div class="t m33 x52 h13 ybc ff6 fs8 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m33 x8b h13 ybd ff6 fs8 fc1 sc0 ls0 ws0">4шт.</div>
				<div class="t m33 x8b h13 ybe ff6 fs8 fc1 sc0 ls0 ws0">4шт.</div>
				<div class="t m33 x52 h13 ybf ff6 fs8 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m33 x52 h13 yc0 ff6 fs8 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m33 x8c h12 yc1 ff5 fs7 fc1 sc0 ls0 ws0">80</div>
				<div class="t m3f x8d h12 yc2 ff5 fs7 fc1 sc0 ls0 ws0">48</div>
				<div class="t m33 x8e h15 yc3 ff6 fsa fc4 sc0 ls0 ws0">Лист_4</div>
				<div class="t m33 x19 h12 yc4 ff6 fs7 fc1 sc0 ls0 ws0"><?php echo $b1; ?></div>
				<div class="t m33 x2a h12 yc5 ff5 fs7 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3f x80 h12 yc6 ff5 fs7 fc1 sc0 ls0 ws0">40</div>
				<div class="t m33 x81 h12 yc7 ff5 fs7 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3f x5a h12 yc8 ff5 fs7 fc1 sc0 ls0 ws0">30</div>
				<div class="t m40 x8f h16 yc9 ff5 fsb fc1 sc0 ls0 ws0">45</div>
				<div class="t m41 x90 h16 yca ff5 fsb fc1 sc0 ls0 ws0">45</div>
				<div class="t m42 x91 h17 ycb ff5 fsc fc1 sc0 ls0 ws0">45</div>
				<div class="t m40 x3b h16 ycc ff5 fsb fc1 sc0 ls0 ws0">45</div>
				<div class="t m43 x92 h18 ycd ff5 fsd fc1 sc0 ls0 ws0">W*</div>
				<div class="t m44 x93 h19 yce ff5 fse fc1 sc0 ls0 ws0">W*</div>
				<div class="t m33 x94 h14 ycf ff5 fs9 fc1 sc0 ls0 ws0">1.*<span class="_ _7"> </span><span class="ff6">Розмір визначити по місцю при зварювані рами воріт.</span></div>
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
			<div class="t m6 x84 h6 yd3 ff8 fs0 fc0 sc0 ls0 ws0">(**)</div>
			<div class="t m46 x95 h6 yd4 ff8 fs0 fc0 sc0 ls0 ws0"><?php echo $b5; ?> (висота розміщеня уловлювача верхнього</div>
			<div class="t m47 x96 h6 yd5 ff8 fs0 fc0 sc0 ls0 ws0">по висоті воріт)</div>
			<div class="t m1 x97 h6 yd6 ff8 fs0 fc0 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m48 x98 h6 yd7 ff8 fs0 fc0 sc0 ls0 ws0"><?php echo $b4; ?> Висота розміщеня верхнього роліка</div>
			<div class="t m46 x99 h6 yd8 ff8 fs0 fc0 sc0 ls0 ws0">по нащільнику задньому</div>
			<div class="t m3 x9a h6 yd9 ff8 fs0 fc0 sc0 ls0 ws0">95<span class="_ _8"> </span>95</div>
			<div class="t m7 x7c h6 yda ff8 fs0 fc1 sc0 ls0 ws0">Відстань від фундаменту до верху воріт</div>
			<div class="t m12 x9b h6 ydb ff8 fs0 fc1 sc0 ls0 ws0">R</div>
			<div class="t m12 x9c h6 ydc ff8 fs0 fc1 sc0 ls0 ws0">S</div>
			<div class="t m2 x9d h6 ydd ff8 fs0 fc1 sc0 ls0 ws0">Кріпленя нащільника переднього та заднього провести на закладні зварюваням.</div>
			<div class="t ma x9e h6 ydd ff8 fs0 fc1 sc0 ls0 ws0">1.</div>
			<div class="t mb x9f h6 yde ff8 fs0 fc1 sc0 ls0 ws0">** Уловлювач нижній розмістити в складальному вигляді з стулкою воріт та роліками</div>
			<div class="t m29 x9e h6 yde ff8 fs0 fc1 sc0 ls0 ws0">2.</div>
			<div class="t m49 x9e h6 ydf ff8 fs0 fc1 sc0 ls0 ws0">опорними в горізонтальній поверхні на 3мм-4мм вище роліка кінцевого.</div>
			<div class="t m3d x9e h6 ye0 ff8 fs0 fc1 sc0 ls0 ws0">3. Ролік верхній розмістити по висоті нащільника заднього.</div>
			<div class="t m20 xa0 h6 ye1 ff8 fs0 fc1 sc0 ls0 ws0">10</div>
			<div class="t m29 x9b h6 ye2 ff8 fs0 fc1 sc0 ls0 ws0">11</div>
			<div class="t m4a xa1 h6 ye3 ff8 fs0 fc1 sc0 ls0 ws0">W</div>
			<div class="t m2d x9b h6 ye4 ff8 fs0 fc1 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m4b xa2 h6 ye5 ff8 fs0 fc1 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m4c xa3 h6 ye5 ff8 fs0 fc1 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m4a xa4 h7 ye6 ff8 fs1 fc1 sc0 ls0 ws0">W</div>
			<div class="t m12 xa5 h7 ye7 ff8 fs1 fc1 sc0 ls0 ws0">R</div>
			<div class="t m12 xa6 h7 ye8 ff8 fs1 fc1 sc0 ls0 ws0">S</div>
			<div class="t m4d x6f h7 ye9 ff8 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ W</div>
			<div class="t m11 xa7 h7 yea ff8 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m4c xa8 h6 yeb ff8 fs0 fc1 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m2b xa9 h6 yec ff8 fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m2f xaa h6 yed ff8 fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m31 xf h7 yee ff8 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ R</div>
			<div class="t m11 xab h7 yef ff8 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m2b xac h6 yf0 ff8 fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m4e x3e h6 yf1 ff8 fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m4f xad h6 yf2 ff8 fs0 fc1 sc0 ls0 ws0">Уловитель верхній</div>
			<div class="t m31 xae h7 yf3 ff8 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ S</div>
			<div class="t m11 xaf h7 yf4 ff8 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m23 xb0 h6 yf5 ff8 fs0 fc1 sc0 ls0 ws0">Уловитель нижній</div>
			<div class="t m2b xb1 h6 yf6 ff8 fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m4e xb2 h6 yf7 ff8 fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m50 x8 h6 yf8 ff8 fs0 fc0 sc0 ls0 ws0"><?php echo $r1; ?></div>
			<div class="t m21 xb3 h6 yf9 ff8 fs0 fc0 sc0 ls0 ws0"><?php echo $r2; ?></div>
			<div class="t m51 xb4 h1d yfa ff8 fs10 fc0 sc0 ls0 ws0">Встановити в міжцегляному</div>
			<div class="t m52 xb5 h1d yfb ff8 fs10 fc0 sc0 ls0 ws0">шву на відстані півцегли</div>
			<div class="t m53 xb6 h1d yfc ff8 fs10 fc0 sc0 ls0 ws0">відносно внутнішньої</div>
			<div class="t m54 x5d h1d yfd ff8 fs10 fc0 sc0 ls0 ws0">поверхні стовпа.</div>
			<div class="t m55 xb7 h7 yfe ff8 fs1 fc0 sc0 ls0 ws0">Встановити в міжцегляному</div>
			<div class="t m56 xb8 h7 yff ff8 fs1 fc0 sc0 ls0 ws0">шву на відстані півцегли</div>
			<div class="t m57 xb9 h7 y100 ff8 fs1 fc0 sc0 ls0 ws0">відносно внутрішньої</div>
			<div class="t m58 xba h7 y101 ff8 fs1 fc0 sc0 ls0 ws0">поверхні стовпа.</div>
			<div class="t m14 x2f h7 y102 ff8 fs1 fc1 sc0 ls0 ws0">АА<span class="_ _9"> </span>АА</div>
			<div class="t m59 xbb h6 y103 ff8 fs0 fc1 sc0 ls0 ws0">СЕЧЕНИЕ АА-АА</div>
			<div class="t m11 xbc h6 y104 ff8 fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m5a x5d h6 y105 ff8 fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m11 xb8 h6 y106 ff8 fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m5a xbd h6 y107 ff8 fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m11 x6c h6 y108 ff8 fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m5a x1b h6 y109 ff8 fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m11 x6c h6 y10a ff8 fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m5a x1b h6 y10b ff8 fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m5b xbe h6 y10c ff8 fs0 fc1 sc0 ls0 ws0">(4 місця)</div>
			<div class="t m5c xbf h7 y10d ff8 fs1 fc1 sc0 ls0 ws0">АА-АА</div>
			<div class="t m28 xc0 h7 y10e ff8 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m14 xc1 h7 y10f ff8 fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕАА<span class="_ _a"> </span>СЕЧЕНИЕАА</div>
			<div class="t m5 xc2 h7 y110 ff8 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 10</div>
			<div class="t m2b xc3 h6 y111 ff8 fs0 fc1 sc0 ls0 ws0">Закладна нащільника</div>
			<div class="t m32 x54 h6 y112 ff8 fs0 fc0 sc0 ls0 ws0">Лист_5</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "6")) : ?>
	<div id="pf6" class="pf w0 h0" data-page-no="6">
		<div class="watermark">novi-vorota.com.ua</div>
		<div class="pc pc6 w0 h0">
      <?php echo $image6; ?>
			<div class="t m5e xc7 h7 y11a ffa fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ J</div>
			<div class="t m28 xf h7 y11b ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m4b x12 h6 y11c ffa fs0 fc1 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m5f x3c h6 y11d ffa fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m60 xc8 h6 y11e ffa fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m2d x64 h6 y11f ffa fs0 fc1 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m5f xc9 h6 y120 ffa fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m60 xca h6 y121 ffa fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m5f xcb h6 y122 ffa fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m60 xcc h6 y123 ffa fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m61 xcd h7 y124 ffa fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ L</div>
			<div class="t m28 x7d h7 y125 ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m5f xce h6 y126 ffa fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m60 xcf h6 y127 ffa fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m31 x53 h7 y128 ffa fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ Z</div>
			<div class="t m28 xd0 h7 y129 ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m23 xd1 h6 y12a ffa fs0 fc1 sc0 ls0 ws0">Ролік</div>
			<div class="t m62 xc9 h6 y12b ffa fs0 fc1 sc0 ls0 ws0">верхній</div>
			<div class="t m3 xd2 h6 y12c ffa fs0 fc0 sc0 ls0 ws0">300</div>
			<div class="t m9 xd3 h6 y12c ffa fs0 fc1 sc0 ls0 ws0">450</div>
			<div class="t m1c xd4 h7 y12d ffa fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ I</div>
			<div class="t m28 xd5 h7 y12e ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m63 x3b h6 y12f ffa fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m2f xd6 h6 y130 ffa fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m2d xd7 h6 y131 ffa fs0 fc1 sc0 ls0 ws0">Стовп</div>
			<div class="t m25 x21 h6 y132 ffa fs0 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m64 xd8 h6 y133 ffa fs0 fc1 sc0 ls0 ws0">Рейка зубчата</div>
			<div class="t m4f x98 h6 y131 ffa fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m65 xd9 h6 y134 ffa fs0 fc1 sc0 ls0 ws0">Кронштейн привода</div>
			<div class="t m2c xda h6 y135 ffa fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m4a xdb h6 y136 ffa fs0 fc1 sc0 ls0 ws0">армований</div>
			<div class="t m66 xdc h6 y137 ffa fs0 fc1 sc0 ls0 ws0">Арматура</div>
			<div class="t m67 xdd h6 y138 ffa fs0 fc1 sc0 ls0 ws0">Ролік опорний</div>
			<div class="t m4f xde h6 y139 ffa fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m25 xdf h6 y13a ffa fs0 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m68 xe0 h6 y13b ffa fs0 fc1 sc0 ls0 ws0">Кронштейн</div>
			<div class="t m27 x86 h6 y13c ffa fs0 fc1 sc0 ls0 ws0">привода</div>
			<div class="t m69 xe1 h7 y13d ffa fs1 fc1 sc0 ls0 ws0">AE</div>
			<div class="t m69 xe2 h7 y13e ffa fs1 fc1 sc0 ls0 ws0">AF</div>
			<div class="t m6a xe3 h7 y13f ffa fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ AD-AD</div>
			<div class="t m5 xe3 h7 y140 ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 10</div>
			<div class="t m1c x5f h7 y141 ffa fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ AE</div>
			<div class="t m28 xe4 h7 y142 ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 2</div>
			<div class="t m6b x48 h6 y143 ffa fs0 fc1 sc0 ls0 ws0">Кінцевик магнітний</div>
			<div class="t m3 xd0 h6 y144 ffa fs0 fc1 sc0 ls0 ws0">положеня-відкрито</div>
			<div class="t m6c xe5 h6 y145 ffa fs0 fc1 sc0 ls0 ws0">Рейка</div>
			<div class="t m6d xd4 h6 y146 ffa fs0 fc1 sc0 ls0 ws0">зубчата</div>
			<div class="t m6e xe6 h6 y147 ffa fs0 fc1 sc0 ls0 ws0">Клепальна гайка</div>
			<div class="t m65 xe7 h6 y148 ffa fs0 fc1 sc0 ls0 ws0">(кріпленя зубчатої рейки)</div>
			<div class="t m1c xe8 h7 y149 ffa fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ AF</div>
			<div class="t m28 xe9 h7 y14a ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 2</div>
			<div class="t m6f xea h6 y14b ffa fs0 fc1 sc0 ls0 ws0">Кінцевий ролік</div>
			<div class="t m23 x10 h6 y14c ffa fs0 fc1 sc0 ls0 ws0">Профіль</div>
			<div class="t m70 xeb h6 y14d ffa fs0 fc1 sc0 ls0 ws0">Прижимна планка</div>
			<div class="t m2 xec h6 y14e ffa fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m60 x66 h6 y14f ffa fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m71 xd8 h6 y150 ffa fs0 fc1 sc0 ls0 ws0">Уловлювач</div>
			<div class="t m72 xed h6 y151 ffa fs0 fc1 sc0 ls0 ws0">нижній</div>
			<div class="t m63 xee h6 y152 ffa fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m4e xef h6 y153 ffa fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m73 xf0 h7 y154 ffa fs1 fc1 sc0 ls0 ws0">AB</div>
			<div class="t m3e xf1 h7 y155 ffa fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ Z1</div>
			<div class="t m28 xf2 h7 y156 ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m2c xf3 h6 y157 ffa fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m4a xf4 h6 y158 ffa fs0 fc1 sc0 ls0 ws0">армований</div>
			<div class="t m67 xf5 h6 y159 ffa fs0 fc1 sc0 ls0 ws0">Ролік опорний</div>
			<div class="t m5f xf6 h6 y15a ffa fs0 fc1 sc0 ls0 ws0">Заглушка задня</div>
			<div class="t m2d x9 h6 y15b ffa fs0 fc1 sc0 ls0 ws0">Стовп</div>
			<div class="t m63 xf7 h6 y15c ffa fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m2f xf8 h6 y15d ffa fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m74 xf9 h7 y15e ffa fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ AB</div>
			<div class="t m75 xfa h7 y15f ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 2 : 5</div>
			<div class="t m6b x21 h6 y160 ffa fs0 fc1 sc0 ls0 ws0">Кінцевик магнітний</div>
			<div class="t m23 xfb h6 y161 ffa fs0 fc1 sc0 ls0 ws0">положеня-закрито</div>
			<div class="t m6c xfc h6 y162 ffa fs0 fc1 sc0 ls0 ws0">Рейка</div>
			<div class="t m6d xfb h6 y163 ffa fs0 fc1 sc0 ls0 ws0">зубчата</div>
			<div class="t m4f xfd h6 y164 ffa fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m76 xfe h6 y165 ffa fs0 fc1 sc0 ls0 ws0">Шестерня</div>
			<div class="t m77 x83 h6 y166 ffa fs0 fc1 sc0 ls0 ws0">Кронштейн</div>
			<div class="t m27 xfb h6 y167 ffa fs0 fc1 sc0 ls0 ws0">привода</div>
			<div class="t m6e xff h6 y168 ffa fs0 fc1 sc0 ls0 ws0">Клепальна гайка</div>
			<div class="t m65 x100 h6 y169 ffa fs0 fc1 sc0 ls0 ws0">(кріпленя зубчатої рейки)</div>
			<div class="t m2 x101 h6 y16a ffa fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m60 x102 h6 y16b ffa fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m23 x19 h6 y16c ffa fs0 fc1 sc0 ls0 ws0">Ролік</div>
			<div class="t m3 x103 h6 y16d ffa fs0 fc1 sc0 ls0 ws0">опорний</div>
			<div class="t m78 xf3 h7 y16e ffa fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ Q-Q</div>
			<div class="t m28 x104 h7 y16f ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m11 x105 h6 y170 ffa fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m79 x106 h6 y171 ffa fs0 fc1 sc0 ls0 ws0">нащельника</div>
			<div class="t m7a x107 h6 y172 ffa fs0 fc1 sc0 ls0 ws0">Уловлювач</div>
			<div class="t m62 x108 h6 y173 ffa fs0 fc1 sc0 ls0 ws0">верхній</div>
			<div class="t m63 x109 h6 y174 ffa fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m4e x10a h6 y175 ffa fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m63 x10b h6 y174 ffa fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m4e x10c h6 y175 ffa fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m7a xbc h6 y172 ffa fs0 fc1 sc0 ls0 ws0">Уловлювач</div>
			<div class="t m72 x10d h6 y173 ffa fs0 fc1 sc0 ls0 ws0">нижній</div>
			<div class="t m59 x10e h7 y176 ffa fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ F-F</div>
			<div class="t m28 x10f h7 y177 ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m11 x110 h6 y178 ffa fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m79 x111 h6 y179 ffa fs0 fc1 sc0 ls0 ws0">нащельника</div>
			<div class="t m5f x112 h6 y17a ffa fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m60 xb3 h6 y17b ffa fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m32 x113 h6 y17c ffa fs0 fc0 sc0 ls0 ws0">Лист_6</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif; ?>
</div>

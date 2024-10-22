
<?php
  $image1 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/45deg/gate_images3/image1.svg");
  $image2 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/45deg/gate_images3/image2.svg");
  $image3 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/45deg/gate_images3/image3.svg");
  $image4 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/45deg/gate_images3/image4.svg");
  $image5 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/45deg/gate_images3/image5.svg");
  $image6 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/45deg/gate_images3/image6.svg");
  $a1 = '';
  $a2 = '';
  $b2 = '';

  if($wicket == 'on') {
  $start_gate1 = 67;
  $pillar1 = 155;
  $image_width1 = 1048.08;
  $result_left1 = $image_width1/$manual_a*$wicket_left+$start_gate1;

  $start_gate2 = 102;
  $pillar2 = 155;
  $image_width2 = 990.18;
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
  $a4 = $a - $a3 + 60;
  $b = $gate_height - $clearance_under_gate;
  if ( $guide == "60x70" ) {
    $b1 = $b - 60;
  } else if ( $guide == "85x95" ) {
    $b1 = $b - 85;
  } else if ( $guide == "72x80" ) {
    $b1 = $b - 72;
  }

  $b1_1 = $b1;

  $b4 = $gate_height + 20;
  $b5 = $gate_height;
  $c = $a3 - 140;
  $c1 = round(($a3 - 230) / 4);
  $d = ($b1 - 170) / 2;
  $g = round(100 + (sqrt($b1 * $b1 + ($a4 - 60) * ($a4 - 60))));
  $g1 = round(100 + (sqrt(($a3 - 230) / 4 * ($a3 - 230) / 4 + (($b1 - 140) * ($b1 - 140)))) / 2);
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
    top: 17.1%;
    left: <?=$result_left1?>px;
    width: 158.5px!important;
    height: 290px!important;
    z-index: 2;
}

.svg-line1 {
	position: absolute;
	background-color: gray;
    top: 14.5641%;
    left: <?=($result_left1+24)?>px;
    width: 112.0px!important;
    height: 1px!important;
    z-index: 3;
}

.svg-line2 {
	position: absolute;
	background-color: gray;
    top: 13.01%;
    left: <?=($result_left1+24)?>px;
    width: 1px!important;
    height: 50px!important;
    z-index: 3;
}

.svg-line3 {
	position: absolute;
	background-color: gray;
    top: 13.01%;
    left: <?=($result_left1+8+127)?>px;
    width: 1px!important;
    height: 50px!important;
    z-index: 3;
}

.svg-text1 {
	position: absolute;
	background-color: transparent;
	color: red;
	font-weight: 700;
    top: 12.71%;
    left: <?=($result_left1+24)?>px;
    width: 112.0px!important;
    z-index: 3;
    text-align: center;
}

.svg-line4 {
	position: absolute;
	background-color: gray;
    top: 65.71%;
    left: <?=($start_gate1)?>px;
    width: <?=(($result_left1)-50)?>px!important;
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
    left: <?=($result_left1+18)?>px;
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
    width: <?=(($result_left1)-50)?>px!important;
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
    top: 13.5%;
    left: <?=$result_left2?>px;
    width: 150.99px!important;
    height: 261px!important;
    z-index: 2;
}

.svg-line2_1 {
	position: absolute;
	background-color: gray;
    top: 11.71%;
    left: <?=($result_left2+22)?>px;
    width: 107.0px!important;
    height: 1px!important;
    z-index: 3;
}

.svg-line2_2 {
	position: absolute;
	background-color: gray;
    top: 10.01%;
    left: <?=($result_left2+22)?>px;
    width: 1px!important;
    height: 50px!important;
    z-index: 3;
}

.svg-line2_3 {
	position: absolute;
	background-color: gray;
    top: 10.01%;
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
    top: 9.81%;
    left: <?=($result_left2+22)?>px;
    width: 107.0px!important;
    z-index: 3;
    text-align: center;
}

.svg-line2_4 {
	position: absolute;
	background-color: gray;
    top: 58.71%;
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
    top: 56.31%;
    left: <?=($start_gate2)?>px;
    width: <?=(($result_left2)-85)?>px!important;
    z-index: 3;
    text-align: center;
}

.svg-line2_7 {
	position: absolute;
    background-color: gray;
    top: 44.2%;
    left: 85px;
    width: 100px !important;
    height: 1px !important;
    z-index: 3;
}

.svg-line2_8 {
	position: absolute;
    background-color: gray;
    top: 14.1%;
    left: 90px;
    width: 1px !important;
    height: 254px !important;
    z-index: 3;
}

.svg-line2_9 {
  position: absolute;
    background-color: gray;
    top: 14.1%;
    left: 85px;
    width: 100px !important;
    height: 1px !important;
    z-index: 3;
}

.svg-text2_3 {
	position: absolute;
    background-color: transparent;
    text-align: center;
    top: 14.1%;
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

<link rel='stylesheet' id='pdf-stylesheet-css' href='<?=$_SERVER['APP_URL']?>/parts/styles/triangular/45deg/gate3.css' type='text/css' media='all' />
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
			<div class="t m1 x2 h2 y2 ff1 fs0 fc0 sc0 ls0 ws0">Відстан6ь між стовпами</div>
			<div class="t m2 x3 h2 y3 ff1 fs0 fc0 sc0 ls0 ws0"><?php echo $b; ?></div>
			<div class="t m3 x4 h2 y4 ff1 fs0 fc0 sc0 ls0 ws0">Відстань від фундаменту до верху воріт</div>
			<div class="t m4 x5 h2 y5 ff1 fs0 fc0 sc0 ls0 ws0"><?php echo $clearance_under_gate; ?>-відстань від низу воріт</div>
			<div class="t m5 x6 h2 y6 ff1 fs0 fc0 sc0 ls0 ws0">до фундаменту</div>
			<div class="t m6 x7 h2 y7 ff1 fs0 fc0 sc0 ls0 ws0"><?php echo $l1; ?>-відстань між роліковими опорами.</div>
			<div class="t m7 x8 h2 y8 ff1 fs0 fc0 sc0 ls0 ws0">300</div>
			<div class="t m7 x9 h2 y9 ff1 fs0 fc0 sc0 ls0 ws0">250</div>
			<div class="t m8 xa h2 ya ff1 fs0 fc0 sc0 ls0 ws0"><?php echo $l2; ?>-довжина зубчатої рейки</div>
			<div class="t m9 xb h2 yb ff1 fs0 fc0 sc0 ls0 ws0"><?php echo $a; ?></div>
			<div class="t m7 x8 h2 yc ff1 fs0 fc0 sc0 ls0 ws0">250</div>
			<div class="t m0 xc h2 yd ff1 fs0 fc0 sc0 ls0 ws0">150</div>
			<div class="t ma xd h2 y8 ff1 fs0 fc0 sc0 ls0 ws0">450</div>
			<div class="t mb xe h3 ye ff1 fs1 fc1 sc0 ls0 ws0">Встановлення та кріаленя кінцевого роліка показано на розрізі AD-AD, та Вид АF (Лист_6)</div>
			<div class="t mc xf h3 ye ff1 fs1 fc1 sc0 ls0 ws0">1.</div>
			<div class="t md xf h3 yf ff1 fs1 fc1 sc0 ls0 ws0">2. Уловитель нижній встановити в складальному вигляді воріт та роліків верхніх в горізонтальній поверхні на 3-4мм вище</div>
			<div class="t me xf h3 y10 ff1 fs1 fc1 sc0 ls0 ws0">кінцевого роліка, місцевий Вид L, Вид S, розріз F-F (Лист_1, Лист_5).</div>
			<div class="t mf xf h3 y11 ff1 fs1 fc1 sc0 ls0 ws0">2. *** Уловлювач верхній та верхній ролік встановити після встановленя уловлювача нижнього, місцевий Вид R, Вид Z,Вид W, Вид J</div>
			<div class="t m10 xf h3 y12 ff1 fs1 fc1 sc0 ls0 ws0">(Лист_1, Лист_5, Лист_6).</div>
			<div class="t m11 xf h3 y13 ff1 fs1 fc1 sc0 ls0 ws0">3. Умова розміщеня привода воріт (зацепленя шестерні в зубчатій рейці) без натягу.</div>
			<div class="t m12 xf h3 y14 ff1 fs1 fc1 sc0 ls0 ws0">4. Розмістити привід таким чином, щоб шестерня привода була розміщена по середині зубчатої рейки, місцевий вид АВ (Лист_6).</div>
			<div class="t m13 xf h3 y15 ff1 fs1 fc1 sc0 ls0 ws0">Бокова поверхня шестерні повиннна бути паралельна боковій поверхні рейки зубчатої.</div>
			<div class="t md xf h3 y16 ff1 fs1 fc1 sc0 ls0 ws0">5. Магнітні кінцевики (положеня-відкрито. закрито) встановити на зубчатій рейці по факту умови повного закривання та</div>
			<div class="t m14 xf h3 y17 ff1 fs1 fc1 sc0 ls0 ws0">відкривання воріт (Лист_1).</div>
			<div class="t m15 xf h3 y18 ff1 fs1 fc1 sc0 ls0 ws0">6. Кріпленя магнітного кінцевика вказано на розрізі AD-AD, Вид АЕ (Лист_6)</div>
			<div class="t m16 x0 h4 y19 ff1 fs2 fc1 sc0 ls0 ws0">Q <span class="_ _0"> </span> Q</div>
			<div class="t m16 x10 h4 y1a ff1 fs2 fc1 sc0 ls0 ws0">F <span class="_ _1"> </span> F</div>
			<div class="t m16 x11 h4 y1b ff1 fs2 fc1 sc0 ls0 ws0">AD</div>
			<div class="t m16 x11 h4 y1c ff1 fs2 fc1 sc0 ls0 ws0">AD</div>
			<div class="t m17 x12 h4 y1d ff1 fs2 fc1 sc0 ls0 ws0">J</div>
			<div class="t m7 x13 h4 y1e ff1 fs2 fc1 sc0 ls0 ws0">L</div>
			<div class="t m17 x14 h4 y1f ff1 fs2 fc1 sc0 ls0 ws0">Z</div>
			<div class="t m18 x15 h4 y20 ff1 fs2 fc1 sc0 ls0 ws0">I</div>
			<div class="t m19 x16 h5 y21 ff1 fs3 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m1a x17 h5 y22 ff1 fs3 fc1 sc0 ls0 ws0">Заглушка</div>
			<div class="t m1b x18 h5 y23 ff1 fs3 fc1 sc0 ls0 ws0">задня</div>
			<div class="t m1c x19 h5 y24 ff1 fs3 fc1 sc0 ls0 ws0">Магнітний кінцевик-положеня відкрито</div>
			<div class="t m1d x1a h5 y25 ff1 fs3 fc1 sc0 ls0 ws0">Магнітний кінцевик</div>
			<div class="t m1d x1a h5 y26 ff1 fs3 fc1 sc0 ls0 ws0">-положеня закрито</div>
			<div class="t m1e x1b h2 y27 ff1 fs0 fc0 sc0 ls0 ws0">Лист_1</div>
			<div class="t m1f x1c h4 y28 ff1 fs2 fc1 sc0 ls0 ws0">СЕЧЕНИЕ Q-Q</div>
			<div class="t m20 x13 h4 y29 ff1 fs2 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 19</div>
			<div class="t m21 x1c h4 y2a ff1 fs2 fc1 sc0 ls0 ws0">СЕЧЕНИЕ F-F</div>
			<div class="t m20 x1d h4 y2b ff1 fs2 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 19</div>
			<div class="t m22 x1e h4 y2c ff1 fs2 fc1 sc0 ls0 ws0">СЕЧЕНИЕ AD-AD</div>
			<div class="t m20 x1e h4 y2d ff1 fs2 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 19</div>
			<div class="t m23 x1f h4 y2e ff1 fs2 fc1 sc0 ls0 ws0">МЕСТНЫЙ J</div>
			<div class="t m24 x20 h4 y2f ff1 fs2 fc1 sc0 ls0 ws0">МАСШТАБ 2 : 17</div>
			<div class="t m25 x21 h4 y30 ff1 fs2 fc1 sc0 ls0 ws0">МЕСТНЫЙ L</div>
			<div class="t m24 x22 h4 y31 ff1 fs2 fc1 sc0 ls0 ws0">МАСШТАБ 2 : 17</div>
			<div class="t m26 x23 h4 y32 ff1 fs2 fc1 sc0 ls0 ws0">МЕСТНЫЙ I</div>
			<div class="t m24 x24 h4 y33 ff1 fs2 fc1 sc0 ls0 ws0">МАСШТАБ 2 : 17</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "2")) : ?>
	<div id="pf2" class="pf w0 h0" data-page-no="2">
		<div class="watermark">novi-vorota.com.ua</div>
		<div class="pc pc2 w0 h0">
      <?php echo $image2; ?>
			<div class="t m7 x26 h2 y35 ff2 fs0 fc0 sc0 ls0 ws0">95</div>
			<div class="t m0 x27 h2 y36 ff2 fs0 fc0 sc0 ls0 ws0">100 <span class="_ _2"> </span> 100</div>
			<div class="t ma x28 h2 y37 ff2 fs0 fc0 sc0 ls0 ws0">240</div>
			<div class="t m27 x29 h2 y38 ff2 fs0 fc0 sc0 ls0 ws0">500</div>
			<div class="t m28 x2a h2 y39 ff2 fs0 fc0 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m29 x2b h2 y3a ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $l1; ?></div>
			<div class="t m2a x2c h2 y3b ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $b5; ?></div>
			<div class="t m2 x2d h2 y3c ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $b4; ?></div>
			<div class="t m7 x2e h2 y3d ff2 fs0 fc0 sc0 ls0 ws0">95</div>
			<div class="t m2b x2f h2 y3e ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a7; ?></div>
			<div class="t m2c x30 h2 y3f ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a6; ?></div>
			<div class="t m16 x31 h4 y40 ff2 fs2 fc1 sc0 ls0 ws0">A <span class="_ _3"> </span> A</div>
			<div class="t m16 x32 h4 y41 ff2 fs2 fc1 sc0 ls0 ws0">N</div>
			<div class="t m2c x33 h2 y42 ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m2d x34 h2 y43 ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m2e x2b h2 y44 ff2 fs0 fc1 sc0 ls0 ws0">для роліка опорного</div>
			<div class="t m7 x35 h2 y45 ff2 fs0 fc1 sc0 ls0 ws0">переднього</div>
			<div class="t m2c x33 h2 y46 ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m2d x34 h2 y47 ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m2e x2b h2 y48 ff2 fs0 fc1 sc0 ls0 ws0">для роліка опорного</div>
			<div class="t m2f x36 h2 y49 ff2 fs0 fc1 sc0 ls0 ws0">заднього</div>
			<div class="t m2c x37 h2 y4a ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m2d x38 h2 y4b ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m9 x39 h2 y4c ff2 fs0 fc1 sc0 ls0 ws0">для кронштейна</div>
			<div class="t m30 x3a h2 y4d ff2 fs0 fc1 sc0 ls0 ws0">привода</div>
			<div class="t m31 x3b h2 y4e ff2 fs0 fc1 sc0 ls0 ws0">Ролік задній розмістити в складальному вигляді з рамою воріт</div>
			<div class="t m24 x3b h2 y4f ff2 fs0 fc1 sc0 ls0 ws0">максимально віддаленим по довжині хвостовика воріт.</div>
			<div class="t m32 x3c h2 y50 ff2 fs0 fc1 sc0 ls0 ws0">11</div>
			<div class="t m29 x3d h2 y51 ff2 fs0 fc1 sc0 ls0 ws0">10</div>
			<div class="t m2c x16 h2 y52 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a5; ?></div>
			<div class="t m7 x3e h2 y53 ff2 fs0 fc0 sc0 ls0 ws0">95</div>
			<div class="t m33 x3f h2 y54 ff2 fs0 fc0 sc0 ls0 ws0">160</div>
			<div class="t ma x40 h2 y55 ff2 fs0 fc0 sc0 ls0 ws0">250</div>
			<div class="t m7 x41 h2 y56 ff2 fs0 fc0 sc0 ls0 ws0">60</div>
			<div class="t m2a x42 h2 y57 ff2 fs0 fc0 sc0 ls0 ws0">40</div>
			<div class="t m34 x43 h4 y58 ff2 fs2 fc1 sc0 ls0 ws0">A-A МАСШТАБ1 : 16</div>
			<div class="t m35 x44 h2 y59 ff2 fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m36 x45 h2 y5a ff2 fs0 fc1 sc0 ls0 ws0">Стовп</div>
			<div class="t m37 x46 h2 y5b ff2 fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m38 x47 h2 y5c ff2 fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m39 x48 h2 y5d ff2 fs0 fc1 sc0 ls0 ws0">(Розміщення швелера відносно стовпа)</div>
			<div class="t m2c x49 h2 y5e ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a8; ?></div>
			<div class="t m27 x4a h2 y5f ff2 fs0 fc0 sc0 ls0 ws0">500</div>
			<div class="t m17 x4b h4 y60 ff2 fs2 fc1 sc0 ls0 ws0">O</div>
			<div class="t m3a x4c h4 y61 ff2 fs2 fc1 sc0 ls0 ws0">ВИД N</div>
			<div class="t m20 x4d h4 y62 ff2 fs2 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 16</div>
			<div class="t m0 x4e h2 y63 ff2 fs0 fc0 sc0 ls0 ws0">160</div>
			<div class="t m3b x4f h4 y64 ff2 fs2 fc1 sc0 ls0 ws0">МЕСТНЫЙ O</div>
			<div class="t m31 x4e h4 y65 ff2 fs2 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m35 x50 h2 y66 ff2 fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m37 x51 h2 y67 ff2 fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m38 x52 h2 y68 ff2 fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m3c x1b h2 y69 ff2 fs0 fc0 sc0 ls0 ws0">Лист_2</div>
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
			<div class="t m2c x56 h2 y6d ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $a3; ?></div>
			<div class="t m2 x57 h2 y6e ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $b; ?></div>
			<div class="t m29 x58 h2 y6f ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $c1; ?> <span class="_ _4"> </span> <?php echo $c1; ?> <span class="_ _5"> </span> <?php echo $c1; ?></div>
			<div class="t m29 x59 h2 y70 ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $c1; ?></div>
			<div class="t m2 x2a h2 y71 ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $d; ?> <span class="_ _6"> </span> <?php echo $d; ?></div>
			<div class="t m7 x5a h2 y72 ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $c; ?></div>
			<div class="t m3e x5b h2 y73 ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $b1; ?></div>
			<div class="t m7 x5c h2 y74 ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $a; ?></div>
			<div class="t m3f x5d ha y75 ff4 fs5 fc0 sc0 ls0 ws0"><?php echo $g; ?></div>
			<div class="t m40 x5e hb y76 ff4 fs6 fc1 sc0 ls0 ws0"><?php echo $g1; ?></div>
			<div class="t m40 x27 hb y77 ff4 fs6 fc1 sc0 ls0 ws0"><?php echo $g1; ?></div>
			<div class="t m41 x5f h2 y78 ff4 fs0 fc1 sc0 ls0 ws0">A4</div>
			<div class="t m9 x60 h4 y79 ff4 fs2 fc1 sc0 ls0 ws0">A</div>
			<div class="t m17 x61 h4 y7a ff4 fs2 fc1 sc0 ls0 ws0">B</div>
			<div class="t m7 x62 h4 y7b ff4 fs2 fc1 sc0 ls0 ws0">C</div>
			<div class="t m17 x36 h4 y7c ff4 fs2 fc1 sc0 ls0 ws0">D</div>
			<div class="t m17 x5 h4 y7d ff4 fs2 fc1 sc0 ls0 ws0">R</div>
			<div class="t m3c xc h2 y7e ff4 fs0 fc0 sc0 ls0 ws0">Лист_3</div>
			<div class="t m42 x63 h5 y7f ff4 fs3 fc1 sc0 ls0 ws0">1</div>
			<div class="t m43 x64 h5 y80 ff4 fs3 fc1 sc0 ls0 ws0">2</div>
			<div class="t m43 x20 h5 y81 ff4 fs3 fc1 sc0 ls0 ws0">2</div>
			<div class="t m43 x65 h5 y82 ff4 fs3 fc1 sc0 ls0 ws0">3</div>
			<div class="t m43 x66 h5 y83 ff4 fs3 fc1 sc0 ls0 ws0">3</div>
			<div class="t m44 x67 h5 y84 ff4 fs3 fc1 sc0 ls0 ws0">4</div>
			<div class="t m43 x68 h5 y85 ff4 fs3 fc1 sc0 ls0 ws0">5</div>
			<div class="t m43 x68 h5 y86 ff4 fs3 fc1 sc0 ls0 ws0">5</div>
			<div class="t m43 x69 h5 y87 ff4 fs3 fc1 sc0 ls0 ws0">5</div>
			<div class="t m43 x6a h5 y88 ff4 fs3 fc1 sc0 ls0 ws0">5</div>
			<div class="t m43 x6b h5 y89 ff4 fs3 fc1 sc0 ls0 ws0">5</div>
			<div class="t m43 x6c h5 y8a ff4 fs3 fc1 sc0 ls0 ws0">5</div>
			<div class="t m43 x6d h5 y8b ff4 fs3 fc1 sc0 ls0 ws0">6</div>
			<div class="t m43 x6e h5 y8c ff4 fs3 fc1 sc0 ls0 ws0">6</div>
			<div class="t m43 x6f h5 y8d ff4 fs3 fc1 sc0 ls0 ws0">7</div>
			<div class="t m43 x70 h5 y8e ff4 fs3 fc1 sc0 ls0 ws0">8</div>
			<div class="t m22 xf h4 y8f ff4 fs2 fc1 sc0 ls0 ws0">МЕСТНЫЙ A</div>
			<div class="t m31 x71 h4 y90 ff4 fs2 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m43 x55 h5 y91 ff4 fs3 fc1 sc0 ls0 ws0">3</div>
			<div class="t m43 x72 h5 y92 ff4 fs3 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3b x73 h4 y93 ff4 fs2 fc1 sc0 ls0 ws0">МЕСТНЫЙ B</div>
			<div class="t m31 x16 h4 y94 ff4 fs2 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m43 x74 h5 y95 ff4 fs3 fc1 sc0 ls0 ws0">3</div>
			<div class="t m43 x75 h5 y96 ff4 fs3 fc1 sc0 ls0 ws0">2</div>
			<div class="t m42 x76 h5 y97 ff4 fs3 fc1 sc0 ls0 ws0">1</div>
			<div class="t m25 x77 h4 y98 ff4 fs2 fc1 sc0 ls0 ws0">МЕСТНЫЙ C</div>
			<div class="t m31 x78 h4 y99 ff4 fs2 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m43 x79 h5 y9a ff4 fs3 fc1 sc0 ls0 ws0">2</div>
			<div class="t m43 x7a h5 y9b ff4 fs3 fc1 sc0 ls0 ws0">3</div>
			<div class="t m43 x7b h5 y9c ff4 fs3 fc1 sc0 ls0 ws0">8</div>
			<div class="t m43 x7c h5 y9d ff4 fs3 fc1 sc0 ls0 ws0">6</div>
			<div class="t m3b x7d h4 y9e ff4 fs2 fc1 sc0 ls0 ws0">МЕСТНЫЙ D</div>
			<div class="t m31 x32 h4 y9f ff4 fs2 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m43 x7e h5 ya0 ff4 fs3 fc1 sc0 ls0 ws0">3</div>
			<div class="t m43 x7f h5 ya1 ff4 fs3 fc1 sc0 ls0 ws0">2</div>
			<div class="t m43 x80 h5 ya2 ff4 fs3 fc1 sc0 ls0 ws0">7</div>
			<div class="t m42 x81 h5 ya3 ff4 fs3 fc1 sc0 ls0 ws0">1</div>
			<div class="t m3b x82 h4 ya4 ff4 fs2 fc1 sc0 ls0 ws0">МЕСТНЫЙ R</div>
			<div class="t m31 x83 h4 ya5 ff4 fs2 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m43 x83 h5 ya6 ff4 fs3 fc1 sc0 ls0 ws0">7</div>
			<div class="t m43 x84 h5 ya7 ff4 fs3 fc1 sc0 ls0 ws0">8</div>
			<div class="t m42 x85 h5 ya8 ff4 fs3 fc1 sc0 ls0 ws0">1</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "4")) : ?>
	<div id="pf4" class="pf w5 hc" data-page-no="4">
		<div class="watermark">novi-vorota.com.ua</div>
		<div class="pc pc4 w5 hc">
      <?php echo $image4; ?>
			<div class="c x86 yaa w7 he">
				<div class="t m3d x19 hf yab ff5 fs7 fc1 sc0 ls0 ws0"><?php echo $g1; ?></div>
				<div class="t m3d x87 hf yac ff5 fs7 fc1 sc0 ls0 ws0"><?php echo $c; ?></div>
				<div class="t m3d x88 hf yad ff5 fs7 fc1 sc0 ls0 ws0"><?php echo $d; ?></div>
				<div class="t m3d x89 hf yae ff5 fs7 fc1 sc0 ls0 ws0">20</div>
				<div class="t m45 x8a hf yaf ff5 fs7 fc1 sc0 ls0 ws0">30</div>
				<div class="t m3d x89 hf yb0 ff5 fs7 fc1 sc0 ls0 ws0">20</div>
				<div class="t m45 x8b hf yb1 ff5 fs7 fc1 sc0 ls0 ws0">30</div>
				<div class="t m3d x3b hf yb2 ff5 fs7 fc1 sc0 ls0 ws0">20</div>
				<div class="t m45 x8b hf yb3 ff5 fs7 fc1 sc0 ls0 ws0">30</div>
				<div class="t m3d x8c hf yb4 ff5 fs7 fc1 sc0 ls0 ws0"><?php echo $a; ?></div>
				<div class="t m3d x2f hf yb5 ff5 fs7 fc1 sc0 ls0 ws0">70</div>
				<div class="t m45 x8d hf yb6 ff5 fs7 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3d x8e hf yb7 ff5 fs7 fc1 sc0 ls0 ws0"><?php echo $g; ?></div>
				<div class="t m3d x8f hf yb8 ff5 fs7 fc1 sc0 ls0 ws0">60</div>
				<div class="t m45 x6d hf yb9 ff5 fs7 fc1 sc0 ls0 ws0">40</div>
				<div class="t m3d x2f hf yba ff5 fs7 fc1 sc0 ls0 ws0">60</div>
				<div class="t m45 x90 hf ybb ff5 fs7 fc1 sc0 ls0 ws0">40</div>
				<div class="t m3d x91 hf ybc ff5 fs7 fc1 sc0 ls0 ws0">20</div>
				<div class="t m45 x89 hf ybd ff5 fs7 fc1 sc0 ls0 ws0">30</div>
				<div class="t m3d x1f hf ybe ff5 fs7 fc1 sc0 ls0 ws0"><?php echo $a3; ?></div>
				<div class="t m3d x46 h10 ybf ff5 fs8 fc1 sc0 ls0 ws0">1.</div>
				<div class="t m3d x1d h10 yc0 ff5 fs8 fc1 sc0 ls0 ws0">2.</div>
				<div class="t m3d x1d h10 yc1 ff5 fs8 fc1 sc0 ls0 ws0">3.</div>
				<div class="t m3d x1d h10 yc2 ff5 fs8 fc1 sc0 ls0 ws0">4.</div>
				<div class="t m3d x1d h10 yc3 ff5 fs8 fc1 sc0 ls0 ws0">5.</div>
				<div class="t m3d x1d h10 yc4 ff5 fs8 fc1 sc0 ls0 ws0">6.</div>
				<div class="t m3d x46 h10 yc5 ff5 fs8 fc1 sc0 ls0 ws0">7.</div>
				<div class="t m3d x46 h10 yc6 ff5 fs8 fc1 sc0 ls0 ws0">8.</div>
				<div class="t m3d x46 h10 yc7 ff5 fs8 fc1 sc0 ls0 ws0">9.</div>
				<div class="t m3d x92 hf yc8 ff6 fs7 fc1 sc0 ls0 ws0"><?php echo $b5; ?></div>
				<div class="t m3d x93 hf yc9 ff5 fs7 fc1 sc0 ls0 ws0">60</div>
				<div class="t m45 x94 hf yca ff5 fs7 fc1 sc0 ls0 ws0">40</div>
				<div class="t m3d x95 h10 ycb ff5 fs8 fc1 sc0 ls0 ws0">10.</div>
				<div class="t m45 x90 hf ycc ff5 fs7 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3d x96 hf ycd ff5 fs7 fc1 sc0 ls0 ws0">40</div>
				<div class="t m3d x8e hf yce ff6 fs7 fc1 sc0 ls0 ws0"><?php echo $b4; ?></div>
				<div class="t m3d x97 h11 ycf ff6 fs9 fc1 sc0 ls0 ws0">Порізка профілей на заготовки</div>
				<div class="t m3d x97 h11 yd0 ff6 fs9 fc1 sc0 ls0 ws0">Порізка нащільника заднього</div>
				<div class="t m3d x97 h11 yd1 ff6 fs9 fc1 sc0 ls0 ws0">Порізка нащільника переднього</div>
				<div class="t m3d x7d h10 ybf ff6 fs8 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m3d x98 h10 yd2 ff6 fs8 fc1 sc0 ls0 ws0">2шт.</div>
				<div class="t m3d x98 h10 yd3 ff6 fs8 fc1 sc0 ls0 ws0">2шт.</div>
				<div class="t m3d x7d h10 yd4 ff6 fs8 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m3d x98 h10 yd5 ff6 fs8 fc1 sc0 ls0 ws0">6шт.</div>
				<div class="t m3d x98 h10 yd6 ff6 fs8 fc1 sc0 ls0 ws0">2шт.</div>
				<div class="t m3d x7d h10 yd7 ff6 fs8 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m3d x7d h10 yd8 ff6 fs8 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m3d x7d h10 yd9 ff6 fs8 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m3d x99 hf yda ff5 fs7 fc1 sc0 ls0 ws0">80</div>
				<div class="t m45 x9a hf ydb ff5 fs7 fc1 sc0 ls0 ws0">48</div>
				<div class="t m3d x9b h12 ydc ff6 fsa fc3 sc0 ls0 ws0">Лист_4</div>
				<div class="t m3d x9c hf ydd ff6 fs7 fc1 sc0 ls0 ws0"><?php echo $b1; ?></div>
				<div class="t m3d x2f hf yde ff5 fs7 fc1 sc0 ls0 ws0">60</div>
				<div class="t m45 x90 hf ydf ff5 fs7 fc1 sc0 ls0 ws0">40</div>
				<div class="t m3d x91 hf ye0 ff5 fs7 fc1 sc0 ls0 ws0">20</div>
				<div class="t m45 x89 hf ye1 ff5 fs7 fc1 sc0 ls0 ws0">30</div>
				<div class="t m3d x9d hf ye2 ff6 fs7 fc1 sc0 ls0 ws0"><?php echo $a4; ?></div>
				<div class="t m3d x8f hf ye3 ff5 fs7 fc1 sc0 ls0 ws0">60</div>
				<div class="t m45 x90 hf ye4 ff5 fs7 fc1 sc0 ls0 ws0">40</div>
				<div class="t m3d x7d h10 ye5 ff6 fs8 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m46 x9e h13 ye6 ff5 fsb fc1 sc0 ls0 ws0">45</div>
				<div class="t m47 x7b h14 ye7 ff5 fsc fc1 sc0 ls0 ws0">45</div>
				<div class="t m48 x9f h15 ye8 ff5 fsd fc1 sc0 ls0 ws0">45</div>
				<div class="t m49 x42 h14 ye9 ff5 fsc fc1 sc0 ls0 ws0">45</div>
				<div class="t m4a xf h16 yea ff5 fse fc1 sc0 ls0 ws0">W*</div>
				<div class="t m4b xa0 h17 yeb ff5 fsf fc1 sc0 ls0 ws0">W*</div>
				<div class="t m4c xa1 h18 yec ff5 fs10 fc1 sc0 ls0 ws0">W*</div>
				<div class="t m3d x65 h11 yed ff5 fs9 fc1 sc0 ls0 ws0">1.* <span class="_ _7"> </span> <span class="ff6"> Розмір визначити по місцю при зварювані рами воріт. </span></div>
				<div class="t m4d xf h19 yee ff5 fs11 fc1 sc0 ls0 ws0">W*</div>
				<div class="t m4e xa2 h1a yef ff5 fs12 fc1 sc0 ls0 ws0">W*</div>
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
			<div class="t m2 x1d h2 yf3 ff8 fs0 fc0 sc0 ls0 ws0">(**)</div>
			<div class="t m4f xa3 h2 yf4 ff8 fs0 fc0 sc0 ls0 ws0"><?php echo $b5; ?> (висота розміщеня уловлювача верхнього</div>
			<div class="t m50 xa4 h2 yf5 ff8 fs0 fc0 sc0 ls0 ws0">по висоті воріт)</div>
			<div class="t m28 xa5 h2 yf6 ff8 fs0 fc0 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m51 x79 h2 yf7 ff8 fs0 fc0 sc0 ls0 ws0"><?php echo $b4; ?> Висота розміщеня верхнього роліка</div>
			<div class="t m4f xa6 h2 yf8 ff8 fs0 fc0 sc0 ls0 ws0">по нащільнику задньому</div>
			<div class="t m7 xa7 h2 yf9 ff8 fs0 fc0 sc0 ls0 ws0">95 <span class="_ _8"> </span> 95</div>
			<div class="t m3 x8b h2 yfa ff8 fs0 fc1 sc0 ls0 ws0">Відстань від фундаменту до верху воріт</div>
			<div class="t m17 xa8 h2 yfb ff8 fs0 fc1 sc0 ls0 ws0">R</div>
			<div class="t m17 xa9 h2 yfc ff8 fs0 fc1 sc0 ls0 ws0">S</div>
			<div class="t m9 xaa h2 yfd ff8 fs0 fc1 sc0 ls0 ws0">Кріпленя нащільника переднього та заднього провести на закладні зварюваням.</div>
			<div class="t m52 xab h2 yfd ff8 fs0 fc1 sc0 ls0 ws0">1.</div>
			<div class="t m53 xac h2 yfe ff8 fs0 fc1 sc0 ls0 ws0">** Уловлювач нижній розмістити в складальному вигляді з стулкою воріт та роліками</div>
			<div class="t m32 xab h2 yfe ff8 fs0 fc1 sc0 ls0 ws0">2.</div>
			<div class="t m54 xab h2 yff ff8 fs0 fc1 sc0 ls0 ws0">опорними в горізонтальній поверхні на 3мм-4мм вище роліка кінцевого.</div>
			<div class="t m55 xab h2 y100 ff8 fs0 fc1 sc0 ls0 ws0">3. Ролік верхній розмістити по висоті нащільника заднього.</div>
			<div class="t m29 xad h2 y101 ff8 fs0 fc1 sc0 ls0 ws0">10</div>
			<div class="t m32 xa8 h2 y102 ff8 fs0 fc1 sc0 ls0 ws0">11</div>
			<div class="t m1e xae h2 y103 ff8 fs0 fc1 sc0 ls0 ws0">W</div>
			<div class="t m36 xa8 h2 y104 ff8 fs0 fc1 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m56 xaf h2 y105 ff8 fs0 fc1 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m57 xb0 h2 y105 ff8 fs0 fc1 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m1e xb1 h4 y106 ff8 fs2 fc1 sc0 ls0 ws0">W</div>
			<div class="t m17 xb2 h4 y107 ff8 fs2 fc1 sc0 ls0 ws0">R</div>
			<div class="t m17 xb3 h4 y108 ff8 fs2 fc1 sc0 ls0 ws0">S</div>
			<div class="t m58 x82 h4 y109 ff8 fs2 fc1 sc0 ls0 ws0">МЕСТНЫЙ W</div>
			<div class="t m59 xb4 h4 y10a ff8 fs2 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m57 x1a h2 y10b ff8 fs0 fc1 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m34 xd h2 y10c ff8 fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m38 xb5 h2 y10d ff8 fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m3b x3e h4 y10e ff8 fs2 fc1 sc0 ls0 ws0">МЕСТНЫЙ R</div>
			<div class="t m59 xb6 h4 y10f ff8 fs2 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m34 x72 h2 y110 ff8 fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m5a x45 h2 y111 ff8 fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m5b xb7 h2 y112 ff8 fs0 fc1 sc0 ls0 ws0">Уловитель верхній</div>
			<div class="t m3b xb8 h4 y113 ff8 fs2 fc1 sc0 ls0 ws0">МЕСТНЫЙ S</div>
			<div class="t m59 xb9 h4 y114 ff8 fs2 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m2c x68 h2 y115 ff8 fs0 fc1 sc0 ls0 ws0">Уловитель нижній</div>
			<div class="t m34 xba h2 y116 ff8 fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m5a x56 h2 y117 ff8 fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m3e x3 h2 y118 ff8 fs0 fc0 sc0 ls0 ws0"><?php echo $r1; ?></div>
			<div class="t m2a x6 h2 y119 ff8 fs0 fc0 sc0 ls0 ws0"><?php echo $r2; ?></div>
			<div class="t m5c xbb h1e y11a ff8 fs14 fc0 sc0 ls0 ws0">Встановити в міжцегляному</div>
			<div class="t m5d xbc h1e y11b ff8 fs14 fc0 sc0 ls0 ws0">шву на відстані півцегли</div>
			<div class="t m5e xbd h1e y11c ff8 fs14 fc0 sc0 ls0 ws0">відносно внутнішньої</div>
			<div class="t m5f xbe h1e y11d ff8 fs14 fc0 sc0 ls0 ws0">поверхні стовпа.</div>
			<div class="t m60 x5f h4 y11e ff8 fs2 fc0 sc0 ls0 ws0">Встановити в міжцегляному</div>
			<div class="t m61 xbf h4 y11f ff8 fs2 fc0 sc0 ls0 ws0">шву на відстані півцегли</div>
			<div class="t m62 xc0 h4 y120 ff8 fs2 fc0 sc0 ls0 ws0">відносно внутрішньої</div>
			<div class="t m63 xc1 h4 y121 ff8 fs2 fc0 sc0 ls0 ws0">поверхні стовпа.</div>
			<div class="t m16 x35 h4 y122 ff8 fs2 fc1 sc0 ls0 ws0">АА <span class="_ _9"> </span> АА</div>
			<div class="t m64 xc2 h2 y123 ff8 fs0 fc1 sc0 ls0 ws0">СЕЧЕНИЕ АА-АА</div>
			<div class="t m65 x70 h2 y124 ff8 fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m66 xbe h2 y125 ff8 fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m65 xbf h2 y126 ff8 fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m66 x15 h2 y127 ff8 fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m65 xc3 h2 y128 ff8 fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m66 xc4 h2 y129 ff8 fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m65 xc3 h2 y12a ff8 fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m66 xc4 h2 y12b ff8 fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m67 xc5 h2 y12c ff8 fs0 fc1 sc0 ls0 ws0">(4 місця)</div>
			<div class="t m68 xc6 h4 y12d ff8 fs2 fc1 sc0 ls0 ws0">АА-АА</div>
			<div class="t m31 xc7 h4 y12e ff8 fs2 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m16 xc8 h4 y12f ff8 fs2 fc1 sc0 ls0 ws0">СЕЧЕНИЕАА <span class="_ _a"> </span> СЕЧЕНИЕАА</div>
			<div class="t m20 xc9 h4 y130 ff8 fs2 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 10</div>
			<div class="t m34 xca h2 y131 ff8 fs0 fc1 sc0 ls0 ws0">Закладна нащільника</div>
			<div class="t m3c xcb h2 y132 ff8 fs0 fc0 sc0 ls0 ws0">Лист_5</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "6")) : ?>
	<div id="pf6" class="pf w0 h0" data-page-no="6">
		<div class="watermark">novi-vorota.com.ua</div>
		<div class="pc pc6 w0 h0">
      <?php echo $image6; ?>
			<div class="t m23 xcf h4 y13a ffa fs2 fc1 sc0 ls0 ws0">МЕСТНЫЙ J</div>
			<div class="t m31 xd0 h4 y13b ffa fs2 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m56 x53 h2 y13c ffa fs0 fc1 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m6a xd1 h2 y13d ffa fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m6b xd2 h2 y13e ffa fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m25 xd3 h4 y13f ffa fs2 fc1 sc0 ls0 ws0">МЕСТНЫЙ L</div>
			<div class="t m31 xd4 h4 y140 ffa fs2 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m36 xd1 h2 y141 ffa fs0 fc1 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m6a x1f h2 y142 ffa fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m6b xd5 h2 y143 ffa fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m3b xd6 h4 y144 ffa fs2 fc1 sc0 ls0 ws0">МЕСТНЫЙ Z</div>
			<div class="t m31 xd7 h4 y145 ffa fs2 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m57 xd8 h2 y146 ffa fs0 fc1 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m6a xd9 h2 y147 ffa fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m6b x56 h2 y148 ffa fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t ma xda h2 y149 ffa fs0 fc0 sc0 ls0 ws0">450</div>
			<div class="t m7 xdb h2 y14a ffa fs0 fc0 sc0 ls0 ws0">300</div>
			<div class="t m26 xb8 h24 y14b ffa fs17 fc1 sc0 ls0 ws0">МЕСТНЫЙ I</div>
			<div class="t m54 x67 h24 y14c ffa fs17 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m2e xdc h2 y14d ffa fs0 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m53 x2c h2 y14e ffa fs0 fc1 sc0 ls0 ws0">Ролік</div>
			<div class="t m7 x45 h2 y14f ffa fs0 fc1 sc0 ls0 ws0">опорний</div>
			<div class="t m5a xd1 h2 y150 ffa fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m6c xdd h2 y151 ffa fs0 fc1 sc0 ls0 ws0">Нащільник задній</div>
			<div class="t m6d xde h2 y152 ffa fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m1e xdf h2 y153 ffa fs0 fc1 sc0 ls0 ws0">армований</div>
			<div class="t m6e xe0 h2 y14e ffa fs0 fc1 sc0 ls0 ws0">Кронштейн</div>
			<div class="t m30 xac h2 y14f ffa fs0 fc1 sc0 ls0 ws0">привода</div>
			<div class="t m5b xb0 h2 y154 ffa fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m6f xe1 h2 y155 ffa fs0 fc1 sc0 ls0 ws0">Рейка зубчата</div>
			<div class="t m41 xe2 h24 y156 ffa fs17 fc1 sc0 ls0 ws0">AB</div>
			<div class="t m70 xe3 h24 y157 ffa fs17 fc1 sc0 ls0 ws0">МЕСТНЫЙ Z1</div>
			<div class="t m54 xbd h24 y158 ffa fs17 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m5b xe4 h2 y159 ffa fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m71 xe5 h2 y15a ffa fs0 fc1 sc0 ls0 ws0">Кінцевик</div>
			<div class="t m72 xe6 h2 y15b ffa fs0 fc1 sc0 ls0 ws0">магнітний_закрито</div>
			<div class="t m73 x2c h24 y15c ffa fs17 fc1 sc0 ls0 ws0">МЕСТНЫЙ AB</div>
			<div class="t m54 xe7 h24 y15d ffa fs17 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 3</div>
			<div class="t m5b xe8 h2 y15e ffa fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m74 xe9 h2 y15f ffa fs0 fc1 sc0 ls0 ws0">Кінцевик магнітний</div>
			<div class="t m75 xea h2 y160 ffa fs0 fc1 sc0 ls0 ws0">(положення-закрито)</div>
			<div class="t m76 x60 h2 y161 ffa fs0 fc1 sc0 ls0 ws0">Рейка</div>
			<div class="t m77 xeb h2 y162 ffa fs0 fc1 sc0 ls0 ws0">зубчата</div>
			<div class="t m78 xec h2 y163 ffa fs0 fc1 sc0 ls0 ws0">Шестерня</div>
			<div class="t m79 xed h2 y164 ffa fs0 fc1 sc0 ls0 ws0">Клепальна гайка</div>
			<div class="t m7a xee h2 y165 ffa fs0 fc1 sc0 ls0 ws0">(кріпленя зубчатої рейки)</div>
			<div class="t m2e x64 h2 y166 ffa fs0 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m53 xef h2 y167 ffa fs0 fc1 sc0 ls0 ws0">Ролік</div>
			<div class="t m7 xf0 h2 y168 ffa fs0 fc1 sc0 ls0 ws0">опорний</div>
			<div class="t m38 xef h2 y169 ffa fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m7b xce h2 y169 ffa fs0 fc1 sc0 ls0 ws0">Кронштейн привода</div>
			<div class="t m7c xf1 h24 y16a ffa fs17 fc1 sc0 ls0 ws0">AE</div>
			<div class="t m7c xf2 h24 y16b ffa fs17 fc1 sc0 ls0 ws0">AF</div>
			<div class="t m7d x17 h24 y16c ffa fs17 fc1 sc0 ls0 ws0">СЕЧЕНИЕ AD-AD</div>
			<div class="t m54 xf3 h24 y16d ffa fs17 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m27 xf4 h2 y16e ffa fs0 fc0 sc0 ls0 ws0">20</div>
			<div class="t m2a xf5 h2 y16f ffa fs0 fc0 sc0 ls0 ws0">40</div>
			<div class="t m7e xc5 h24 y170 ffa fs17 fc1 sc0 ls0 ws0">МЕСТНЫЙ AE</div>
			<div class="t m68 xac h24 y171 ffa fs17 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 1.5</div>
			<div class="t m71 xf6 h2 y172 ffa fs0 fc1 sc0 ls0 ws0">Кінцевик</div>
			<div class="t m9 xd7 h2 y173 ffa fs0 fc1 sc0 ls0 ws0">магнітний</div>
			<div class="t m7f xa1 h2 y174 ffa fs0 fc1 sc0 ls0 ws0">відкрито</div>
			<div class="t m6f xf7 h2 y175 ffa fs0 fc1 sc0 ls0 ws0">Рейка зубчата</div>
			<div class="t m6f xf8 h2 y176 ffa fs0 fc1 sc0 ls0 ws0">Клепальна гайка</div>
			<div class="t m80 xf9 h2 y177 ffa fs0 fc1 sc0 ls0 ws0">кріпленя рейки зубчатої</div>
			<div class="t m7e xfa h24 y178 ffa fs17 fc1 sc0 ls0 ws0">МЕСТНЫЙ AF</div>
			<div class="t m54 x94 h24 y179 ffa fs17 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 2</div>
			<div class="t m81 xe5 h2 y17a ffa fs0 fc1 sc0 ls0 ws0">Кінцевий ролік</div>
			<div class="t m2c xfb h2 y17b ffa fs0 fc1 sc0 ls0 ws0">Профіль</div>
			<div class="t m82 xfc h2 y17c ffa fs0 fc1 sc0 ls0 ws0">Прижимна</div>
			<div class="t m1e xae h2 y17d ffa fs0 fc1 sc0 ls0 ws0">планка</div>
			<div class="t m2e xfd h2 y17e ffa fs0 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m83 xfe h24 y17f ffa fs17 fc1 sc0 ls0 ws0">Q <span class="_ _b"> </span> Q</div>
			<div class="t m83 xff h24 y180 ffa fs17 fc1 sc0 ls0 ws0">F <span class="_ _c"> </span> F</div>
			<div class="t m70 x100 h24 y181 ffa fs17 fc1 sc0 ls0 ws0">СЕЧЕНИЕQ-Q</div>
			<div class="t m54 xf4 h24 y182 ffa fs17 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m37 x101 h2 y183 ffa fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m5a x7b h2 y184 ffa fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m56 x102 h2 y185 ffa fs0 fc1 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m6a x103 h2 y186 ffa fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m6b x81 h2 y187 ffa fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m84 x104 h4 y188 ffa fs2 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m66 x104 h4 y189 ffa fs2 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m64 xc1 h24 y18a ffa fs17 fc1 sc0 ls0 ws0">СЕЧЕНИЕ F-F</div>
			<div class="t m54 x5d h24 y18b ffa fs17 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m6a x85 h2 y18c ffa fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m6b x105 h2 y18d ffa fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m36 x106 h2 y18e ffa fs0 fc1 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m37 x107 h2 y18f ffa fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m5a x108 h2 y190 ffa fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m3c x109 h4 y191 ffa fs2 fc0 sc0 ls0 ws0">Лист_6</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif; ?>
</div>

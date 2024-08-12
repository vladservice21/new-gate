<?php
  $image1 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/90deg/gate_images1/image1.svg");
  $image2 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/90deg/gate_images1/image2.svg");
  $image3 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/90deg/gate_images1/image3.svg");
  $image4 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/90deg/gate_images1/image4.svg");
  $image5 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/90deg/gate_images1/image5.svg");
  $image6 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/90deg/gate_images1/image6.svg");
  if ($material == "brick") {
    $a3 = $gate_opening + 380;
  } else {
    $a3 = $gate_opening + 290;
  }
  if ( $manual_a ) {
    $a = $manual_a;
  } else {
    $a = round(($a3 + ($a3 / 2) / 1.1) / 10) * 10;
  }
  $a1 = $a3 - 111;
  $a2 = $a + 60;
  $a4 = $a - $a3 + 60;
  $b = $gate_height - $clearance_under_gate;
  if ( $guide == "60x70" ) {
    $b1 = $b - 102;
  } else if ( $guide == "85x95" ) {
    $b1 = $b - 127;
  }
  $b2 = $b1 + 40;
  $b4 = $gate_height + 20;
  $b5 = $gate_height;
  $c = $a3 - 140;
  $c1 = ($a3 - 170) / 2;
  $d = ($b1 - 128) / 2;
  $g = round(100 + (sqrt((($b1 + 42) * ($b1 + 42)) + ($a - $a3) * ($a - $a3))));
  $g1 = round(100 + (sqrt($c1 / 2 * $c1 / 2 + $d * $d)));
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
<link rel='stylesheet' id='pdf-stylesheet-css' href='<?=$_SERVER['APP_URL']?>/parts/styles/triangular/90deg/gate1.css' type='text/css' media='all' />
<div id="page-container">
  <?php if (strrpos($pages, "1")) : ?>
	<div id="pf1" class="pf w0 h0" data-page-no="1">
		<div class="pc pc1 w0 h0">
      <?php echo $image1; ?>
			<div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m1 x2 h2 y2 ff1 fs0 fc0 sc0 ls0 ws0">250</div>
			<div class="t m2 x3 h2 y3 ff1 fs0 fc0 sc0 ls0 ws0"><?php echo $l2; ?>-Довжина зубчатої рейки</div>
			<div class="t m1 x4 h2 y4 ff1 fs0 fc0 sc0 ls0 ws0">300</div>
			<div class="t m3 x5 h2 y4 ff1 fs0 fc0 sc0 ls0 ws0"><?php echo $l1; ?>-Відстань між роліковими опорами</div>
			<div class="t m4 x6 h2 y5 ff1 fs0 fc0 sc0 ls0 ws0"><?php echo $a; ?></div>
			<div class="t m5 x7 h2 y6 ff1 fs0 fc0 sc0 ls0 ws0"><?php echo $b2; ?></div>
			<div class="t m6 x8 h2 y7 ff1 fs0 fc0 sc0 ls0 ws0">Відстань від фундаменту до верху воріт</div>
			<div class="t m7 x9 h2 y8 ff1 fs0 fc0 sc0 ls0 ws0"><?php echo $b; ?></div>
			<div class="t m8 xa h2 y9 ff1 fs0 fc0 sc0 ls0 ws0"><?php echo $clearance_under_gate; ?>-відстань від низу воріт</div>
			<div class="t m9 x9 h2 ya ff1 fs0 fc0 sc0 ls0 ws0">до фундаменту</div>
			<div class="t ma xb h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">130</div>
			<div class="t m1 xc h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">250</div>
			<div class="t mb xd h3 yb ff1 fs1 fc1 sc0 ls0 ws0">J</div>
			<div class="t mc xe h3 yc ff1 fs1 fc1 sc0 ls0 ws0">L</div>
			<div class="t mb xf h3 yd ff1 fs1 fc1 sc0 ls0 ws0">Z</div>
			<div class="t md x10 h3 ye ff1 fs1 fc1 sc0 ls0 ws0">I</div>
			<div class="t me x11 h3 yf ff1 fs1 fc1 sc0 ls0 ws0">Q<span class="_ _0"> </span>Q</div>
			<div class="t me x0 h3 y10 ff1 fs1 fc1 sc0 ls0 ws0">F<span class="_ _1"> </span>F</div>
			<div class="t me x12 h3 y11 ff1 fs1 fc1 sc0 ls0 ws0">Y</div>
			<div class="t me x13 h3 y12 ff1 fs1 fc1 sc0 ls0 ws0">Z</div>
			<div class="t me x14 h3 y13 ff1 fs1 fc1 sc0 ls0 ws0">AD</div>
			<div class="t me x14 h3 y14 ff1 fs1 fc1 sc0 ls0 ws0">AD</div>
			<div class="t mf x15 h2 y15 ff1 fs0 fc1 sc0 ls0 ws0">Магнітний кінцевик</div>
			<div class="t m1 x16 h2 y16 ff1 fs0 fc1 sc0 ls0 ws0">положеня-відкрито</div>
			<div class="t mf x17 h2 y17 ff1 fs0 fc1 sc0 ls0 ws0">Магнітний кінцевик</div>
			<div class="t m10 x18 h2 y18 ff1 fs0 fc1 sc0 ls0 ws0">положення-закрито</div>
			<div class="t m9 xa h2 y19 ff1 fs0 fc1 sc0 ls0 ws0">Заглушка задня</div>
			<div class="t m11 x19 h4 y1a ff1 fs2 fc1 sc0 ls0 ws0">Встановлення та кріаленя кінцевого роліка показано на розрізі AD-AD, та Вид АF (Лист_6)</div>
			<div class="t m12 x1a h4 y1a ff1 fs2 fc1 sc0 ls0 ws0">1.</div>
			<div class="t m13 x1a h4 y1b ff1 fs2 fc1 sc0 ls0 ws0">2. Уловитель нижній встановити в складальному вигляді воріт та роліків верхніх в горізонтальній поверхні на 3-4мм</div>
			<div class="t m11 x1a h4 y1c ff1 fs2 fc1 sc0 ls0 ws0">вище кінцевого роліка, місцевий Вид L, Вид S, розріз F-F (Лист_1, Лист_5).</div>
			<div class="t m14 x1a h4 y1d ff1 fs2 fc1 sc0 ls0 ws0">2. *** Уловлювач верхній та верхній ролік встановити після встановленя уловлювача нижнього, місцевий Вид R, Вид Z,</div>
			<div class="t m15 x1a h4 y1e ff1 fs2 fc1 sc0 ls0 ws0">Вид W, Вид J (Лист_1, Лист_5, Лист_6).</div>
			<div class="t m13 x1a h4 y1f ff1 fs2 fc1 sc0 ls0 ws0">3. Умова розміщеня привода воріт (зацепленя шестерні в зубчатій рейці) без натягу.</div>
			<div class="t m16 x1a h4 y20 ff1 fs2 fc1 sc0 ls0 ws0">4. Розмістити привід таким чином, щоб шестерня привода була розміщена по середині зубчатої рейки, місцевий вид АВ</div>
			<div class="t m17 x1a h4 y21 ff1 fs2 fc1 sc0 ls0 ws0">(Лист_6). Бокова поверхня шестерні повиннна бути паралельна боковій поверхні рейки зубчатої.</div>
			<div class="t m18 x1a h4 y22 ff1 fs2 fc1 sc0 ls0 ws0">5. Магнітні кінцевики (положеня-відкрито. закрито) встановити на зубчатій рейці по факту умови повного закривання та</div>
			<div class="t m19 x1a h4 y23 ff1 fs2 fc1 sc0 ls0 ws0">відкривання воріт (Лист_1).</div>
			<div class="t m1a x1a h4 y24 ff1 fs2 fc1 sc0 ls0 ws0">6. Кріпленя магнітного кінцевика вказано на розрізі AD-AD, Вид АЕ (Лист_6)</div>
			<div class="t m1b x1b h4 y25 ff1 fs2 fc1 sc0 ls0 ws0">Z1</div>
			<div class="t m11 x1c h4 y26 ff1 fs2 fc0 sc0 ls0 ws0">Лист_1</div>
			<div class="t m1c x1d h3 y27 ff1 fs1 fc1 sc0 ls0 ws0">ВИД Y</div>
			<div class="t m1d x1e h3 y28 ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 14</div>
			<div class="t m1b x1f h3 y29 ff1 fs1 fc1 sc0 ls0 ws0">Z1</div>
			<div class="t m1e x20 h3 y2a ff1 fs1 fc1 sc0 ls0 ws0">ВИД Z</div>
			<div class="t m1d x21 h3 y2b ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 14</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "2")) : ?>
	<div id="pf2" class="pf w0 h0" data-page-no="2">
		<div class="pc pc2 w0 h0">
      <?php echo $image2; ?>
			<div class="t m1 x23 h6 y2d ff2 fs0 fc0 sc0 ls0 ws0">95</div>
			<div class="t ma x24 h6 y2e ff2 fs0 fc0 sc0 ls0 ws0">100<span class="_ _2"> </span>100</div>
			<div class="t m11 x25 h6 y2f ff2 fs0 fc0 sc0 ls0 ws0">240</div>
			<div class="t m1f x26 h6 y30 ff2 fs0 fc0 sc0 ls0 ws0">500</div>
			<div class="t m0 x27 h6 y31 ff2 fs0 fc0 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m20 x28 h6 y32 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $l1; ?></div>
			<div class="t m5 x29 h6 y33 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $b5; ?></div>
			<div class="t m7 x2a h6 y34 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $b4; ?></div>
			<div class="t m1 x2b h6 y35 ff2 fs0 fc0 sc0 ls0 ws0">95</div>
			<div class="t m21 x2c h6 y36 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a7; ?></div>
			<div class="t m10 x2d h6 y37 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a6; ?></div>
			<div class="t me x2e h7 y38 ff2 fs2 fc1 sc0 ls0 ws0">A<span class="_ _3"> </span>A</div>
			<div class="t me x2f h7 y39 ff2 fs2 fc1 sc0 ls0 ws0">N</div>
			<div class="t m10 x30 h6 y3a ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m22 x31 h6 y3b ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m23 x28 h6 y3c ff2 fs0 fc1 sc0 ls0 ws0">для роліка опорного</div>
			<div class="t m1 x32 h6 y3d ff2 fs0 fc1 sc0 ls0 ws0">переднього</div>
			<div class="t m10 x30 h6 y3e ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m22 x31 h6 y3f ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m23 x28 h6 y40 ff2 fs0 fc1 sc0 ls0 ws0">для роліка опорного</div>
			<div class="t m24 x33 h6 y41 ff2 fs0 fc1 sc0 ls0 ws0">заднього</div>
			<div class="t m10 x34 h6 y42 ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m22 x35 h6 y43 ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m4 x36 h6 y44 ff2 fs0 fc1 sc0 ls0 ws0">для кронштейна</div>
			<div class="t m25 x37 h6 y45 ff2 fs0 fc1 sc0 ls0 ws0">привода</div>
			<div class="t m3 x38 h6 y46 ff2 fs0 fc1 sc0 ls0 ws0">Ролік задній розмістити в складальному вигляді з рамою воріт</div>
			<div class="t m18 x38 h6 y47 ff2 fs0 fc1 sc0 ls0 ws0">максимально віддаленим по довжині хвостовика воріт.</div>
			<div class="t m26 x39 h6 y48 ff2 fs0 fc1 sc0 ls0 ws0">11</div>
			<div class="t m20 x3a h6 y49 ff2 fs0 fc1 sc0 ls0 ws0">10</div>
			<div class="t m10 x3b h6 y4a ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a5; ?></div>
			<div class="t m1 x3c h6 y4b ff2 fs0 fc0 sc0 ls0 ws0">95</div>
			<div class="t m27 x3d h6 y4c ff2 fs0 fc0 sc0 ls0 ws0">160</div>
			<div class="t m11 x3e h6 y4d ff2 fs0 fc0 sc0 ls0 ws0">250</div>
			<div class="t m1 x3f h6 y4e ff2 fs0 fc0 sc0 ls0 ws0">60</div>
			<div class="t m5 x40 h6 y4f ff2 fs0 fc0 sc0 ls0 ws0">40</div>
			<div class="t m28 x41 h7 y50 ff2 fs2 fc1 sc0 ls0 ws0">A-A МАСШТАБ1 : 16</div>
			<div class="t m29 x42 h6 y51 ff2 fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m2a x43 h6 y52 ff2 fs0 fc1 sc0 ls0 ws0">Стовп</div>
			<div class="t m2b x44 h6 y53 ff2 fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m2c x45 h6 y54 ff2 fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m22 x46 h6 y55 ff2 fs0 fc1 sc0 ls0 ws0">(Розміщення швелера відносно стовпа)</div>
			<div class="t m10 x47 h6 y56 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a8; ?></div>
			<div class="t m1f x48 h6 y57 ff2 fs0 fc0 sc0 ls0 ws0">500</div>
			<div class="t mb x49 h7 y58 ff2 fs2 fc1 sc0 ls0 ws0">O</div>
			<div class="t m2d x4a h7 y59 ff2 fs2 fc1 sc0 ls0 ws0">ВИД N</div>
			<div class="t m2e x4b h7 y5a ff2 fs2 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 16</div>
			<div class="t ma x4c h6 y5b ff2 fs0 fc0 sc0 ls0 ws0">160</div>
			<div class="t m2f x4d h7 y5c ff2 fs2 fc1 sc0 ls0 ws0">МЕСТНЫЙ O</div>
			<div class="t m3 x4c h7 y5d ff2 fs2 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m29 x4e h6 y5e ff2 fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m2b x4f h6 y5f ff2 fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m2c x50 h6 y60 ff2 fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m30 x51 h6 y61 ff2 fs0 fc0 sc0 ls0 ws0">Лист_2</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "3")) : ?>
	<div id="pf3" class="pf w0 h0" data-page-no="3">
		<div class="pc pc3 w0 h0">
      <?php echo $image3; ?>
			<div class="t m10 x54 h6 y65 ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $a3; ?></div>
			<div class="t m1 x55 h6 y66 ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $a1; ?></div>
			<div class="t m10 x56 h6 y67 ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $a2; ?></div>
			<div class="t m4 x57 h6 y68 ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $a; ?></div>
			<div class="t m5 x42 h6 y69 ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $b2; ?></div>
			<div class="t m32 x37 h6 y6a ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $b1; ?></div>
			<div class="t m7 x58 h6 y6b ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $d; ?></div>
			<div class="t m7 x58 h6 y6c ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $d; ?></div>
			<div class="t m1 x59 h6 y6d ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $c; ?></div>
			<div class="t m20 x3b h6 y6e ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $c1; ?></div>
			<div class="t m20 x5a h6 y6f ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $c1; ?></div>
			<div class="t m33 x5b hb y70 ff4 fs4 fc0 sc0 ls0 ws0"><?php echo $g; ?></div>
			<div class="t m34 x5c hc y71 ff4 fs5 fc1 sc0 ls0 ws0"><?php echo $g1; ?></div>
			<div class="t m34 x55 hc y72 ff4 fs5 fc1 sc0 ls0 ws0"><?php echo $g1; ?></div>
			<div class="t m28 x5d hd y73 ff4 fs1 fc1 sc0 ls0 ws0">А</div>
			<div class="t mb x2b hd y74 ff4 fs1 fc1 sc0 ls0 ws0">В</div>
			<div class="t mc x31 hd y75 ff4 fs1 fc1 sc0 ls0 ws0">С</div>
			<div class="t mb xf hd y76 ff4 fs1 fc1 sc0 ls0 ws0">D</div>
			<div class="t mc x5e hd y77 ff4 fs1 fc1 sc0 ls0 ws0">E</div>
			<div class="t m35 x5f h6 y78 ff4 fs0 fc1 sc0 ls0 ws0">1</div>
			<div class="t m1 x60 h6 y79 ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m1 x61 h6 y7a ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t mb x62 h6 y7b ff4 fs0 fc1 sc0 ls0 ws0">4</div>
			<div class="t m1 x63 h6 y7c ff4 fs0 fc1 sc0 ls0 ws0">5</div>
			<div class="t m1 x64 h6 y7d ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m1 x5c h6 y7c ff4 fs0 fc1 sc0 ls0 ws0">7</div>
			<div class="t m1 x65 h6 y7e ff4 fs0 fc1 sc0 ls0 ws0">7</div>
			<div class="t m1 x66 h6 y7f ff4 fs0 fc1 sc0 ls0 ws0">8</div>
			<div class="t m1 x67 h6 y80 ff4 fs0 fc1 sc0 ls0 ws0">8</div>
			<div class="t m1 x68 h6 y81 ff4 fs0 fc1 sc0 ls0 ws0">9</div>
			<div class="t m36 x69 h7 y82 ff4 fs2 fc1 sc0 ls0 ws0">МЕСТНЫЙ А</div>
			<div class="t m3 x3d h7 y83 ff4 fs2 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 9</div>
			<div class="t m1 x6a h6 y84 ff4 fs0 fc1 sc0 ls0 ws0">5</div>
			<div class="t m1 x6b h6 y85 ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t m2f x6c h7 y86 ff4 fs2 fc1 sc0 ls0 ws0">МЕСТНЫЙ В</div>
			<div class="t m3 x6d h7 y87 ff4 fs2 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 9</div>
			<div class="t m1 x6e h6 y88 ff4 fs0 fc1 sc0 ls0 ws0">5</div>
			<div class="t m1 x6f h6 y89 ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m35 x70 h6 y8a ff4 fs0 fc1 sc0 ls0 ws0">1</div>
			<div class="t m37 x71 h7 y8b ff4 fs2 fc1 sc0 ls0 ws0">МЕСТНЫЙ С</div>
			<div class="t m3 x72 h7 y8c ff4 fs2 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 9</div>
			<div class="t m1 x73 h6 y8d ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t mb x74 h6 y8e ff4 fs0 fc1 sc0 ls0 ws0">4</div>
			<div class="t m1 x66 h6 y8f ff4 fs0 fc1 sc0 ls0 ws0">9</div>
			<div class="t m1 x75 h6 y90 ff4 fs0 fc1 sc0 ls0 ws0">8</div>
			<div class="t m2f x76 h7 y91 ff4 fs2 fc1 sc0 ls0 ws0">МЕСТНЫЙ D</div>
			<div class="t m3 x77 h7 y92 ff4 fs2 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 9</div>
			<div class="t mb x78 h6 y93 ff4 fs0 fc1 sc0 ls0 ws0">4</div>
			<div class="t m1 x79 h6 y94 ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m35 x79 h6 y95 ff4 fs0 fc1 sc0 ls0 ws0">1</div>
			<div class="t m37 x7a h7 y96 ff4 fs2 fc1 sc0 ls0 ws0">МЕСТНЫЙ E</div>
			<div class="t m3 x7b h7 y97 ff4 fs2 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 9</div>
			<div class="t m1 x7c h6 y98 ff4 fs0 fc1 sc0 ls0 ws0">9</div>
			<div class="t m35 x7d h6 y99 ff4 fs0 fc1 sc0 ls0 ws0">1</div>
			<div class="t m1 x49 h6 y98 ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m30 x7e h7 y9a ff4 fs2 fc0 sc0 ls0 ws0">Лист_3</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "4")) : ?>
	<div id="pf4" class="pf w5 he" data-page-no="4">
		<div class="pc pc4 w5 he">
      <?php echo $image4; ?>
			<div class="c x7f y9c w7 h10">
				<div class="t m31 x69 h11 y9d ff5 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m31 x80 h11 y9e ff5 fs6 fc1 sc0 ls0 ws0"><?php echo $g1; ?></div>
				<div class="t m31 x81 h11 y9f ff5 fs6 fc1 sc0 ls0 ws0"><?php echo $c; ?></div>
				<div class="t m31 x82 h11 ya0 ff5 fs6 fc1 sc0 ls0 ws0"><?php echo $d; ?></div>
				<div class="t m31 x2c h11 ya1 ff5 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m38 x83 h11 ya2 ff5 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m31 x84 h11 ya3 ff5 fs6 fc1 sc0 ls0 ws0">20</div>
				<div class="t m38 x85 h11 ya4 ff5 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m31 x86 h11 ya5 ff5 fs6 fc1 sc0 ls0 ws0">20</div>
				<div class="t m38 x87 h11 ya6 ff5 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m31 x86 h11 ya7 ff5 fs6 fc1 sc0 ls0 ws0">20</div>
				<div class="t m38 x88 h11 ya8 ff5 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m31 x38 h11 ya9 ff5 fs6 fc1 sc0 ls0 ws0">20</div>
				<div class="t m38 x88 h11 yaa ff5 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m31 x89 h11 yab ff5 fs6 fc1 sc0 ls0 ws0"><?php echo $a; ?></div>
				<div class="t m31 x2c h11 yac ff5 fs6 fc1 sc0 ls0 ws0">70</div>
				<div class="t m38 x8a h11 yad ff5 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m31 x3 h11 yae ff5 fs6 fc1 sc0 ls0 ws0"><?php echo $g; ?></div>
				<div class="t m31 x8b h11 yaf ff5 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m38 x8c h11 yb0 ff5 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m31 x2c h11 yb1 ff5 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m38 x8c h11 yb2 ff5 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m31 x79 h11 yb3 ff5 fs6 fc1 sc0 ls0 ws0">20</div>
				<div class="t m38 x86 h11 yb4 ff5 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m31 x61 h11 yb5 ff5 fs6 fc1 sc0 ls0 ws0"><?php echo $a2; ?></div>
				<div class="t m31 x8d h11 yb6 ff5 fs6 fc1 sc0 ls0 ws0">71</div>
				<div class="t m31 x5d h11 yb7 ff6 fs6 fc1 sc0 ls0 ws0"><?php echo $a1; ?></div>
				<div class="t m31 x8e h11 yb8 ff5 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m38 x8f h11 yb9 ff5 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m31 x85 h11 yba ff5 fs6 fc1 sc0 ls0 ws0">20</div>
				<div class="t m38 x90 h11 ybb ff5 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m31 x2c h11 ybc ff5 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m38 x83 h11 ybd ff5 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m31 x84 h11 ybe ff5 fs6 fc1 sc0 ls0 ws0">20</div>
				<div class="t m38 x85 h11 ybf ff5 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m31 x91 h11 yc0 ff6 fs6 fc1 sc0 ls0 ws0"><?php echo $b1; ?></div>
				<div class="t m31 x92 h11 yc1 ff5 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m31 x44 h12 yc2 ff5 fs7 fc1 sc0 ls0 ws0">1.</div>
				<div class="t m31 x93 h12 yc3 ff5 fs7 fc1 sc0 ls0 ws0">2.</div>
				<div class="t m31 x94 h12 yc4 ff5 fs7 fc1 sc0 ls0 ws0">3.</div>
				<div class="t m31 x93 h12 yc5 ff5 fs7 fc1 sc0 ls0 ws0">4.</div>
				<div class="t m31 x94 h12 yc6 ff5 fs7 fc1 sc0 ls0 ws0">5.</div>
				<div class="t m31 x93 h12 yc7 ff5 fs7 fc1 sc0 ls0 ws0">6.</div>
				<div class="t m31 x44 h12 yc8 ff5 fs7 fc1 sc0 ls0 ws0">7.</div>
				<div class="t m31 x44 h12 yc9 ff5 fs7 fc1 sc0 ls0 ws0">8.</div>
				<div class="t m31 x44 h12 yca ff5 fs7 fc1 sc0 ls0 ws0">9.</div>
				<div class="t m38 x95 h11 yb4 ff5 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m31 x96 h11 ycb ff6 fs6 fc1 sc0 ls0 ws0"><?php echo $a3; ?></div>
				<div class="t m31 x97 h11 ycc ff5 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m38 x98 h11 ycd ff5 fs6 fc1 sc0 ls0 ws0">38</div>
				<div class="t m38 x99 h11 yce ff5 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m38 x9a h11 ycd ff5 fs6 fc1 sc0 ls0 ws0">38</div>
				<div class="t m38 x9b h11 yce ff5 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m31 x9c h11 ycf ff5 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m31 x9d h11 yd0 ff5 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m31 x9e h11 yd1 ff6 fs6 fc1 sc0 ls0 ws0"><?php echo $b2; ?></div>
				<div class="t m31 x15 h11 yd2 ff6 fs6 fc1 sc0 ls0 ws0"><?php echo $b5; ?></div>
				<div class="t m31 x9f h11 yd3 ff5 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m38 x87 h11 yd4 ff5 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m31 x7 h12 yd5 ff5 fs7 fc1 sc0 ls0 ws0">11.</div>
				<div class="t m31 x7 h12 yd6 ff5 fs7 fc1 sc0 ls0 ws0">10.</div>
				<div class="t m38 x8c h11 yd7 ff5 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m31 xa0 h11 yd8 ff5 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m31 x3 h11 yd9 ff6 fs6 fc1 sc0 ls0 ws0"><?php echo $b4; ?></div>
				<div class="t m31 xa1 h13 yda ff6 fs8 fc1 sc0 ls0 ws0">Порізка профілей на заготовки</div>
				<div class="t m31 xa1 h13 ydb ff6 fs8 fc1 sc0 ls0 ws0">Порізка нащільника заднього</div>
				<div class="t m31 xa1 h13 ydc ff6 fs8 fc1 sc0 ls0 ws0">Порізка нащільника переднього</div>
				<div class="t m31 xa2 h12 yc2 ff6 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m31 xa2 h12 ydd ff6 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m31 xa2 h12 yde ff6 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m31 xa2 h12 ydf ff6 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m31 xa2 h12 ye0 ff6 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m31 xa2 h12 ye1 ff6 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m31 xa3 h12 ye2 ff6 fs7 fc1 sc0 ls0 ws0">2шт.</div>
				<div class="t m31 xa3 h12 ye3 ff6 fs7 fc1 sc0 ls0 ws0">2шт.</div>
				<div class="t m31 xa2 h12 ye4 ff6 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m31 xa2 h12 ye5 ff6 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m31 xa2 h12 ye6 ff6 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m31 xa4 h11 ye7 ff5 fs6 fc1 sc0 ls0 ws0">80</div>
				<div class="t m38 x57 h11 ye8 ff5 fs6 fc1 sc0 ls0 ws0">48</div>
				<div class="t m31 xa5 h14 ye9 ff6 fs9 fc3 sc0 ls0 ws0">Лист_4</div>
			</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[0.000000,1.000000,-1.000000,0.000000,842.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "5")) : ?>
	<div id="pf5" class="pf w0 h0" data-page-no="5">
		<div class="pc pc5 w0 h0">
      <?php echo $image5; ?>
			<div class="t m7 x94 h6 yf0 ffb fs0 fc0 sc0 ls0 ws0">(**)</div>
			<div class="t m3b xa7 h6 yf1 ffb fs0 fc0 sc0 ls0 ws0"><?php echo $b5; ?> (висота розміщеня уловлювача верхнього</div>
			<div class="t m3c xa8 h6 yf2 ffb fs0 fc0 sc0 ls0 ws0">по висоті воріт)</div>
			<div class="t m0 xa9 h6 yf3 ffb fs0 fc0 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m3d xaa h6 yf4 ffb fs0 fc0 sc0 ls0 ws0"><?php echo $b4; ?> Висота розміщеня верхнього роліка</div>
			<div class="t m3b xab h6 yf5 ffb fs0 fc0 sc0 ls0 ws0">по нащільнику задньому</div>
			<div class="t m1 xe h6 yf6 ffb fs0 fc0 sc0 ls0 ws0">95<span class="_ _4"> </span>95</div>
			<div class="t m6 x88 h6 yf7 ffb fs0 fc1 sc0 ls0 ws0">Відстань від фундаменту до верху воріт</div>
			<div class="t mb x2 h6 yf8 ffb fs0 fc1 sc0 ls0 ws0">R</div>
			<div class="t mb xac h6 yf9 ffb fs0 fc1 sc0 ls0 ws0">S</div>
			<div class="t m4 xad h6 yfa ffb fs0 fc1 sc0 ls0 ws0">Кріпленя нащільника переднього та заднього провести на закладні зварюваням.</div>
			<div class="t m12 xae h6 yfa ffb fs0 fc1 sc0 ls0 ws0">1.</div>
			<div class="t m13 x72 h6 yfb ffb fs0 fc1 sc0 ls0 ws0">** Уловлювач нижній розмістити в складальному вигляді з стулкою воріт та роліками</div>
			<div class="t m26 xae h6 yfb ffb fs0 fc1 sc0 ls0 ws0">2.</div>
			<div class="t m3e xae h6 yfc ffb fs0 fc1 sc0 ls0 ws0">опорними в горізонтальній поверхні на 3мм-4мм вище роліка кінцевого.</div>
			<div class="t m3f xae h6 yfd ffb fs0 fc1 sc0 ls0 ws0">3. Ролік верхній розмістити по висоті нащільника заднього.</div>
			<div class="t m20 x12 h6 yfe ffb fs0 fc1 sc0 ls0 ws0">10</div>
			<div class="t m26 x2 h6 yff ffb fs0 fc1 sc0 ls0 ws0">11</div>
			<div class="t m40 xaf h6 y100 ffb fs0 fc1 sc0 ls0 ws0">W</div>
			<div class="t m2a x2 h6 y101 ffb fs0 fc1 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m41 xb0 h6 y102 ffb fs0 fc1 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m42 xb1 h6 y102 ffb fs0 fc1 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m11 xb2 h7 y103 ffb fs2 fc1 sc0 ls0 ws0">W</div>
			<div class="t mb xb3 h7 y104 ffb fs2 fc1 sc0 ls0 ws0">R</div>
			<div class="t mb xb4 h7 y105 ffb fs2 fc1 sc0 ls0 ws0">S</div>
			<div class="t m43 xb5 h7 y106 ffb fs2 fc1 sc0 ls0 ws0">МЕСТНЫЙ W</div>
			<div class="t m1a xb6 h7 y107 ffb fs2 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m42 xb7 h6 y108 ffb fs0 fc1 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m28 xb8 h6 y109 ffb fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m2c xb9 h6 y10a ffb fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m2f x3c h7 y10b ffb fs2 fc1 sc0 ls0 ws0">МЕСТНЫЙ R</div>
			<div class="t m1a xba h7 y10c ffb fs2 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m28 xbb h6 y10d ffb fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m44 x43 h6 y10e ffb fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m45 xbc h6 y10f ffb fs0 fc1 sc0 ls0 ws0">Уловитель верхній</div>
			<div class="t m2f x58 h7 y110 ffb fs2 fc1 sc0 ls0 ws0">МЕСТНЫЙ S</div>
			<div class="t m1a x96 h7 y111 ffb fs2 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m10 xbd h6 y112 ffb fs0 fc1 sc0 ls0 ws0">Уловитель нижній</div>
			<div class="t m28 xbe h6 y113 ffb fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m44 xbf h6 y114 ffb fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m32 xc0 h6 y115 ffb fs0 fc0 sc0 ls0 ws0"><?php echo $r1; ?></div>
			<div class="t m5 xc1 h6 y116 ffb fs0 fc0 sc0 ls0 ws0"><?php echo $r2; ?></div>
			<div class="t m46 xc2 h1b y117 ffb fsc fc0 sc0 ls0 ws0">Встановити в міжцегляному</div>
			<div class="t m47 xc3 h1b y118 ffb fsc fc0 sc0 ls0 ws0">шву на відстані півцегли</div>
			<div class="t m48 xc4 h1b y119 ffb fsc fc0 sc0 ls0 ws0">відносно внутнішньої</div>
			<div class="t m49 xc5 h1b y11a ffb fsc fc0 sc0 ls0 ws0">поверхні стовпа.</div>
			<div class="t m4a xc6 h7 y11b ffb fs2 fc0 sc0 ls0 ws0">Встановити в міжцегляному</div>
			<div class="t m4b xc7 h7 y11c ffb fs2 fc0 sc0 ls0 ws0">шву на відстані півцегли</div>
			<div class="t m4c xc8 h7 y11d ffb fs2 fc0 sc0 ls0 ws0">відносно внутрішньої</div>
			<div class="t m4d xc9 h7 y11e ffb fs2 fc0 sc0 ls0 ws0">поверхні стовпа.</div>
			<div class="t me x32 h7 y11f ffb fs2 fc1 sc0 ls0 ws0">АА<span class="_ _5"> </span>АА</div>
			<div class="t m4e xca h6 y120 ffb fs0 fc1 sc0 ls0 ws0">СЕЧЕНИЕ АА-АА</div>
			<div class="t m1a xcb h6 y121 ffb fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m4f xc5 h6 y122 ffb fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m1a xc7 h6 y123 ffb fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m4f xcc h6 y124 ffb fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m1a xcd h6 y125 ffb fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m4f xce h6 y126 ffb fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m1a xcd h6 y127 ffb fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m4f xce h6 y128 ffb fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m50 x71 h6 y129 ffb fs0 fc1 sc0 ls0 ws0">(4 місця)</div>
			<div class="t mf xcf h7 y12a ffb fs2 fc1 sc0 ls0 ws0">АА-АА</div>
			<div class="t m3 xd0 h7 y12b ffb fs2 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t me xd1 h7 y12c ffb fs2 fc1 sc0 ls0 ws0">СЕЧЕНИЕАА<span class="_ _6"> </span>СЕЧЕНИЕАА</div>
			<div class="t m2e x72 h7 y12d ffb fs2 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 10</div>
			<div class="t m28 x74 h6 y12e ffb fs0 fc1 sc0 ls0 ws0">Закладна нащільника</div>
			<div class="t m30 x7e h6 y12f ffb fs0 fc0 sc0 ls0 ws0">Лист_5</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "6")) : ?>
	<div id="pf6" class="pf w0 h0" data-page-no="6">
		<div class="pc pc6 w0 h0">
      <?php echo $image6; ?>
			<div class="t m51 xd3 h7 y131 ffc fs2 fc1 sc0 ls0 ws0">МЕСТНЫЙ J</div>
			<div class="t m3 xd4 h7 y132 ffc fs2 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m41 x52 h6 y133 ffc fs0 fc1 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m52 xd5 h6 y134 ffc fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m53 xd6 h6 y135 ffc fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m37 xd7 h7 y136 ffc fs2 fc1 sc0 ls0 ws0">МЕСТНЫЙ L</div>
			<div class="t m3 x59 h7 y137 ffc fs2 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m2a xd5 h6 y138 ffc fs0 fc1 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m52 x61 h6 y139 ffc fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m53 x70 h6 y13a ffc fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m2f xd8 h7 y13b ffc fs2 fc1 sc0 ls0 ws0">МЕСТНЫЙ Z</div>
			<div class="t m3 xd9 h7 y13c ffc fs2 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m42 xda h6 y13d ffc fs0 fc1 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m52 xdb h6 y13e ffc fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m53 xbf h6 y13f ffc fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m11 xdc h6 y140 ffc fs0 fc0 sc0 ls0 ws0">450</div>
			<div class="t m1 xdd h6 y141 ffc fs0 fc0 sc0 ls0 ws0">300</div>
			<div class="t m1b x58 hd y142 ffc fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ I</div>
			<div class="t m3 x6c hd y143 ffc fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m23 xde h6 y144 ffc fs0 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m13 x29 h6 y145 ffc fs0 fc1 sc0 ls0 ws0">Ролік</div>
			<div class="t m1 x43 h6 y146 ffc fs0 fc1 sc0 ls0 ws0">опорний</div>
			<div class="t m44 xd5 h6 y147 ffc fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m54 xdf h6 y148 ffc fs0 fc1 sc0 ls0 ws0">Нащільник задній</div>
			<div class="t m55 xe0 h6 y149 ffc fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m40 x1 h6 y14a ffc fs0 fc1 sc0 ls0 ws0">армований</div>
			<div class="t m2 xe1 h6 y145 ffc fs0 fc1 sc0 ls0 ws0">Кронштейн</div>
			<div class="t m25 xe2 h6 y146 ffc fs0 fc1 sc0 ls0 ws0">привода</div>
			<div class="t m45 xb1 h6 y14b ffc fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m56 x9d h6 y14c ffc fs0 fc1 sc0 ls0 ws0">Рейка зубчата</div>
			<div class="t m57 x8e hd y14d ffc fs1 fc1 sc0 ls0 ws0">AB</div>
			<div class="t m58 xe3 hd y14e ffc fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ Z1</div>
			<div class="t m3 xc4 hd y14f ffc fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m45 xe4 h6 y150 ffc fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m59 xf h6 y151 ffc fs0 fc1 sc0 ls0 ws0">Кінцевик</div>
			<div class="t m17 xe5 h6 y152 ffc fs0 fc1 sc0 ls0 ws0">магнітний_закрито</div>
			<div class="t m5a x29 hd y153 ffc fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ AB</div>
			<div class="t m3 xe6 hd y154 ffc fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 3</div>
			<div class="t m45 x63 h6 y155 ffc fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m5b xe7 h6 y156 ffc fs0 fc1 sc0 ls0 ws0">Кінцевик магнітний</div>
			<div class="t m5c xe8 h6 y157 ffc fs0 fc1 sc0 ls0 ws0">(положення-закрито)</div>
			<div class="t m5d xe9 h6 y158 ffc fs0 fc1 sc0 ls0 ws0">Рейка</div>
			<div class="t m5e x1a h6 y159 ffc fs0 fc1 sc0 ls0 ws0">зубчата</div>
			<div class="t m5f xea h6 y15a ffc fs0 fc1 sc0 ls0 ws0">Шестерня</div>
			<div class="t m60 xeb h6 y15b ffc fs0 fc1 sc0 ls0 ws0">Клепальна гайка</div>
			<div class="t m61 xec h6 y15c ffc fs0 fc1 sc0 ls0 ws0">(кріпленя зубчатої рейки)</div>
			<div class="t m23 xed h6 y15d ffc fs0 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m13 xee h6 y15e ffc fs0 fc1 sc0 ls0 ws0">Ролік</div>
			<div class="t m1 xef h6 y15f ffc fs0 fc1 sc0 ls0 ws0">опорний</div>
			<div class="t m2c xed h6 y160 ffc fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m3f xd2 h6 y160 ffc fs0 fc1 sc0 ls0 ws0">Кронштейн привода</div>
			<div class="t m10 xf0 hd y161 ffc fs1 fc1 sc0 ls0 ws0">AE</div>
			<div class="t m10 xf1 hd y162 ffc fs1 fc1 sc0 ls0 ws0">AF</div>
			<div class="t m62 xf2 hd y163 ffc fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ AD-AD</div>
			<div class="t m3 xf3 hd y164 ffc fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m1f xf4 h6 y165 ffc fs0 fc0 sc0 ls0 ws0">20</div>
			<div class="t m5 xf5 h6 y166 ffc fs0 fc0 sc0 ls0 ws0">40</div>
			<div class="t m63 x71 hd y167 ffc fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ AE</div>
			<div class="t mf xe2 hd y168 ffc fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 1.5</div>
			<div class="t m59 xf6 h6 y169 ffc fs0 fc1 sc0 ls0 ws0">Кінцевик</div>
			<div class="t m4 xd9 h6 y16a ffc fs0 fc1 sc0 ls0 ws0">магнітний</div>
			<div class="t m64 xf7 h6 y16b ffc fs0 fc1 sc0 ls0 ws0">відкрито</div>
			<div class="t m56 xf8 h6 y16c ffc fs0 fc1 sc0 ls0 ws0">Рейка зубчата</div>
			<div class="t m56 xf9 h6 y16d ffc fs0 fc1 sc0 ls0 ws0">Клепальна гайка</div>
			<div class="t m65 xfa h6 y16e ffc fs0 fc1 sc0 ls0 ws0">кріпленя рейки зубчатої</div>
			<div class="t m63 x62 hd y16f ffc fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ AF</div>
			<div class="t m3 xfb hd y170 ffc fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 2</div>
			<div class="t m66 x6 h6 y171 ffc fs0 fc1 sc0 ls0 ws0">Кінцевий ролік</div>
			<div class="t m10 x9f h6 y172 ffc fs0 fc1 sc0 ls0 ws0">Профіль</div>
			<div class="t m67 xfc h6 y173 ffc fs0 fc1 sc0 ls0 ws0">Прижимна</div>
			<div class="t m40 xaf h6 y174 ffc fs0 fc1 sc0 ls0 ws0">планка</div>
			<div class="t m23 xfd h6 y175 ffc fs0 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t me xfe hd y176 ffc fs1 fc1 sc0 ls0 ws0">Q<span class="_ _7"> </span>Q</div>
			<div class="t me xff hd y177 ffc fs1 fc1 sc0 ls0 ws0">F<span class="_ _8"> </span>F</div>
			<div class="t m58 x1d hd y178 ffc fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕQ-Q</div>
			<div class="t m3 xf4 hd y179 ffc fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m2b x100 h6 y17a ffc fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m44 x101 h6 y17b ffc fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m41 x102 h6 y17c ffc fs0 fc1 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m52 x103 h6 y17d ffc fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m53 x104 h6 y17e ffc fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m68 x105 h7 y17f ffc fs2 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m4f x105 h7 y180 ffc fs2 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m4e xc9 hd y181 ffc fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ F-F</div>
			<div class="t m3 x106 hd y182 ffc fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m52 x107 h6 y183 ffc fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m53 x108 h6 y184 ffc fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m2a x18 h6 y185 ffc fs0 fc1 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m2b x109 h6 y186 ffc fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m44 x10a h6 y187 ffc fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m30 x10b h7 y188 ffc fs2 fc0 sc0 ls0 ws0">Лист_6</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif; ?>
</div>

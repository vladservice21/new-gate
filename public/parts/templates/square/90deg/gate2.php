
<?php
  $image1 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/90deg/gate_images2/image1.svg");
  $image2 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/90deg/gate_images2/image2.svg");
  $image3 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/90deg/gate_images2/image3.svg");
  $image4 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/90deg/gate_images2/image4.svg");
  $image5 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/90deg/gate_images2/image5.svg");
  $image6 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/90deg/gate_images2/image6.svg");
  if ( $manual_a ) {
    $a = $manual_a;
  } else {
    if ($material == "brick") {
      $a = round((130 + $gate_opening + (130 + $gate_opening / 2 * 0.8)) / 10) * 10;
    } else {
      $a = round((80 + $gate_opening + (80 + $gate_opening / 2 * 0.8)) / 10) * 10;
    }
  }
  $a3 = $a - 80;
  $b = $gate_height - $clearance_under_gate;
  if ( $guide == "60x70" ) {
    $b1 = $b - 62;
    $d2 = 160;
    $d3 = 29;
  } else if ( $guide == "85x95" ) {
    $b1 = $b - 87;
    $d2 = 185;
    $d3 = 24;
  }
  $b4 = $gate_height + 20;
  $b5 = $gate_height;
  $c = $a - 140;
  $c1 = round(($a - 140 - $count_vertical_pillar * 30) / ($count_vertical_pillar + 1));
  $d = ($b1 - 168) / 2;
  $g1 = round(100 + (sqrt($c1 * $c1 + $d * $d)));
  if ($material == "brick") {
    $l1 = $a - 580 - $gate_opening;
    $l2 = $gate_opening + 780;
  } else {
    $l1 = $a - 530 - $gate_opening;
    $l2 = $gate_opening + 730;
  }
  $a5 = $l1 + 450;
  $a6 = $l1 + 150;
  $a7 = 900;
  $a8 = 80;
  $r1 = 300;
  $r2 = $gate_height - 300;

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
<link rel='stylesheet' id='pdf-stylesheet-css' href='<?=$_SERVER['APP_URL']?>/parts/styles/square/90deg/gate2.css' type='text/css' media='all' />
<div id="page-container">
<?php if (strrpos($pages, "1")) : ?>
	<div id="pf1" class="pf w0 h0" data-page-no="1">
		<div class="pc pc1 w0 h0">
      <?php echo $image1; ?>
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
			<div class="t m13 xa h3 y18 ff1 fs1 fc1 sc0 ls0 ws0">I</div>
			<div class="t m14 x0 h3 y19 ff1 fs1 fc1 sc0 ls0 ws0">Q <span class="_ _0"> </span> Q</div>
			<div class="t m14 x11 h3 y1a ff1 fs1 fc1 sc0 ls0 ws0">F <span class="_ _1"> </span> F</div>
			<div class="t m14 x12 h3 y1b ff1 fs1 fc1 sc0 ls0 ws0">AD</div>
			<div class="t m14 x12 h3 y1c ff1 fs1 fc1 sc0 ls0 ws0">AD</div>
			<div class="t m15 x13 h4 y1d ff1 fs2 fc1 sc0 ls0 ws0">Заглушка</div>
			<div class="t m16 x14 h4 y1e ff1 fs2 fc1 sc0 ls0 ws0">задня</div>
			<div class="t m17 x15 h4 y1f ff1 fs2 fc1 sc0 ls0 ws0">Магнітний кінцевик</div>
			<div class="t m18 x16 h4 y20 ff1 fs2 fc1 sc0 ls0 ws0">положення-закрито</div>
			<div class="t m19 x17 h4 y21 ff1 fs2 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m17 x18 h4 y22 ff1 fs2 fc1 sc0 ls0 ws0">Магнітний кінцевик</div>
			<div class="t m1a x19 h4 y23 ff1 fs2 fc1 sc0 ls0 ws0">положення-відкрито</div>
			<div class="t m1b x1a h4 y24 ff1 fs2 fc2 sc0 ls0 ws0">Z1</div>
			<div class="t m1c x1b h3 y25 ff1 fs1 fc1 sc0 ls0 ws0">Z1</div>
			<div class="t m1d x1c h3 y26 ff1 fs1 fc1 sc0 ls0 ws0">ВИД</div>
			<div class="t mf x1d h3 y27 ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 23</div>
			<div class="t m1e x1e h2 y28 ff1 fs0 fc0 sc0 ls0 ws0">Лист_1</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "2")) : ?>
	<div id="pf2" class="pf w0 h0" data-page-no="2">
		<div class="pc pc2 w0 h0">
      <?php echo $image2; ?>
			<div class="t m3 x20 h2 y2a ff2 fs0 fc0 sc0 ls0 ws0">95</div>
			<div class="t m0 x21 h2 y2b ff2 fs0 fc0 sc0 ls0 ws0">100 <span class="_ _2"> </span> 100</div>
			<div class="t m9 x22 h2 y2c ff2 fs0 fc0 sc0 ls0 ws0">240</div>
			<div class="t m1f x8 h2 y2d ff2 fs0 fc0 sc0 ls0 ws0">500</div>
			<div class="t m1 x23 h2 y2e ff2 fs0 fc0 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m20 x24 h2 y2f ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $l1; ?></div>
			<div class="t m21 x25 h2 y30 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $b5; ?></div>
			<div class="t m6 x26 h2 y31 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $b4; ?></div>
			<div class="t m3 x11 h2 y32 ff2 fs0 fc0 sc0 ls0 ws0">95</div>
			<div class="t m22 x27 h2 y33 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a7; ?></div>
			<div class="t m23 x28 h2 y34 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a6; ?></div>
			<div class="t m14 x29 h3 y35 ff2 fs1 fc1 sc0 ls0 ws0">A <span class="_ _3"> </span> A</div>
			<div class="t m14 x2a h3 y36 ff2 fs1 fc1 sc0 ls0 ws0">N</div>
			<div class="t m23 x2b h2 y37 ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m24 x2c h2 y38 ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m25 x24 h2 y39 ff2 fs0 fc1 sc0 ls0 ws0">для роліка опорного</div>
			<div class="t m3 x2d h2 y3a ff2 fs0 fc1 sc0 ls0 ws0">переднього</div>
			<div class="t m23 x2b h2 y3b ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m24 x2c h2 y3c ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m25 x24 h2 y3d ff2 fs0 fc1 sc0 ls0 ws0">для роліка опорного</div>
			<div class="t m26 x2e h2 y3e ff2 fs0 fc1 sc0 ls0 ws0">заднього</div>
			<div class="t m23 x2f h2 y3f ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m24 x30 h2 y40 ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m2 x31 h2 y41 ff2 fs0 fc1 sc0 ls0 ws0">для кронштейна</div>
			<div class="t m27 x32 h2 y42 ff2 fs0 fc1 sc0 ls0 ws0">привода</div>
			<div class="t m28 x33 h2 y43 ff2 fs0 fc1 sc0 ls0 ws0">Ролік задній розмістити в складальному вигляді з рамою воріт</div>
			<div class="t mf x33 h2 y44 ff2 fs0 fc1 sc0 ls0 ws0">максимально віддаленим по довжині хвостовика воріт.</div>
			<div class="t m29 x34 h2 y45 ff2 fs0 fc1 sc0 ls0 ws0">11</div>
			<div class="t m20 x35 h2 y46 ff2 fs0 fc1 sc0 ls0 ws0">10</div>
			<div class="t m23 x36 h2 y47 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a5; ?></div>
			<div class="t m3 x37 h2 y48 ff2 fs0 fc0 sc0 ls0 ws0">95</div>
			<div class="t m2a x38 h2 y49 ff2 fs0 fc0 sc0 ls0 ws0">160</div>
			<div class="t m9 x1 h2 y4a ff2 fs0 fc0 sc0 ls0 ws0">250</div>
			<div class="t m3 x39 h2 y4b ff2 fs0 fc0 sc0 ls0 ws0">60</div>
			<div class="t m21 x3a h2 y4c ff2 fs0 fc0 sc0 ls0 ws0">40</div>
			<div class="t m2b x3b h3 y4d ff2 fs1 fc1 sc0 ls0 ws0">A-A МАСШТАБ1 : 16</div>
			<div class="t m2c x3c h2 y4e ff2 fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m2d x3d h2 y4f ff2 fs0 fc1 sc0 ls0 ws0">Стовп</div>
			<div class="t m2e x3e h2 y50 ff2 fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m2f x3f h2 y51 ff2 fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m24 x40 h2 y52 ff2 fs0 fc1 sc0 ls0 ws0">(Розміщення швелера відносно стовпа)</div>
			<div class="t m23 x41 h2 y53 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a8; ?></div>
			<div class="t m1f x42 h2 y54 ff2 fs0 fc0 sc0 ls0 ws0">500</div>
			<div class="t m12 x43 h3 y55 ff2 fs1 fc1 sc0 ls0 ws0">O</div>
			<div class="t m30 x44 h3 y56 ff2 fs1 fc1 sc0 ls0 ws0">ВИД N</div>
			<div class="t m5 x45 h3 y57 ff2 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 16</div>
			<div class="t m0 x46 h2 y58 ff2 fs0 fc0 sc0 ls0 ws0">160</div>
			<div class="t m31 x47 h3 y59 ff2 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ O</div>
			<div class="t m28 x46 h3 y5a ff2 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m2c x48 h2 y5b ff2 fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m2e x49 h2 y5c ff2 fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m2f x4a h2 y5d ff2 fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m32 x4b h2 y5e ff2 fs0 fc0 sc0 ls0 ws0">Лист_2</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "3")) : ?>
	<div id="pf3" class="pf w0 h0" data-page-no="3">
		<div class="pc pc3 w0 h0">
      <?php echo $image3; ?>
			<div class="t m2 x4f h2 y62 ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $a; ?></div>
			<div class="t m34 x50 h2 y63 ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $b1; ?></div>
			<div class="t m6 x51 h2 y64 ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $b; ?></div>
			<div class="t m35 x50 h2 y65 ff4 fs0 fc0 sc0 ls0 ws0">в(B)</div>
			<div class="t m3 x52 h2 y66 ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $c; ?></div>
			<div class="t m20 x53 h2 y67 ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $c1; ?> <span class="_ _4"> </span> <?php echo $c1; ?> <span class="_ _5"> </span> <?php echo $c1; ?></div>
			<div class="t m6 x54 h2 y68 ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $d; ?> <span class="_ _6"> </span> <?php echo $d; ?></div>
			<div class="t m20 x55 h2 y69 ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $c1; ?></div>
			<div class="t m36 x56 h9 y6a ff4 fs4 fc0 sc0 ls0 ws0"><?php echo $g1; ?></div>
			<div class="t m2 x57 h3 y6b ff4 fs1 fc1 sc0 ls0 ws0">А</div>
			<div class="t m12 x58 h3 y6c ff4 fs1 fc1 sc0 ls0 ws0">В</div>
			<div class="t m3 x59 h3 y6d ff4 fs1 fc1 sc0 ls0 ws0">А1</div>
			<div class="t m1c x5a h3 y6e ff4 fs1 fc1 sc0 ls0 ws0">В1</div>
			<div class="t m37 x5b h4 y6f ff4 fs2 fc1 sc0 ls0 ws0">1</div>
			<div class="t m38 x5c h4 y70 ff4 fs2 fc1 sc0 ls0 ws0">2</div>
			<div class="t m38 x5d h4 y71 ff4 fs2 fc1 sc0 ls0 ws0">3</div>
			<div class="t m39 x5e h4 y72 ff4 fs2 fc1 sc0 ls0 ws0">4</div>
			<div class="t m39 x5f h4 y73 ff4 fs2 fc1 sc0 ls0 ws0">4</div>
			<div class="t m38 x60 h4 y74 ff4 fs2 fc1 sc0 ls0 ws0">5</div>
			<div class="t m38 x2 h4 y75 ff4 fs2 fc1 sc0 ls0 ws0">6</div>
			<div class="t m38 x61 h4 y76 ff4 fs2 fc1 sc0 ls0 ws0">6</div>
			<div class="t m38 x62 h4 y77 ff4 fs2 fc1 sc0 ls0 ws0">6</div>
			<div class="t m38 x63 h4 y76 ff4 fs2 fc1 sc0 ls0 ws0">6</div>
			<div class="t m38 x64 h4 y77 ff4 fs2 fc1 sc0 ls0 ws0">6</div>
			<div class="t m38 x65 h4 y78 ff4 fs2 fc1 sc0 ls0 ws0">6</div>
			<div class="t m38 x66 h4 y79 ff4 fs2 fc1 sc0 ls0 ws0">7</div>
			<div class="t m38 x67 h4 y7a ff4 fs2 fc1 sc0 ls0 ws0">7</div>
			<div class="t m38 x68 h4 y7b ff4 fs2 fc1 sc0 ls0 ws0">7</div>
			<div class="t m38 x69 h4 y7c ff4 fs2 fc1 sc0 ls0 ws0">7</div>
			<div class="t m3a x6a ha y7d ff4 fs5 fc1 sc0 ls0 ws0">Вісь_К</div>
			<div class="t m3b x6b h3 y7e ff4 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ А</div>
			<div class="t m28 x11 h3 y7f ff4 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m39 x4e h4 y80 ff4 fs2 fc1 sc0 ls0 ws0">4</div>
			<div class="t m38 x6c h4 y81 ff4 fs2 fc1 sc0 ls0 ws0">7</div>
			<div class="t m31 x6d h3 y82 ff4 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ В</div>
			<div class="t m28 x6e h3 y83 ff4 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m37 x6f h4 y84 ff4 fs2 fc1 sc0 ls0 ws0">1</div>
			<div class="t m38 x70 h4 y85 ff4 fs2 fc1 sc0 ls0 ws0">3</div>
			<div class="t m39 x71 h4 y86 ff4 fs2 fc1 sc0 ls0 ws0">4</div>
			<div class="t m38 x72 h4 y87 ff4 fs2 fc1 sc0 ls0 ws0">7</div>
			<div class="t m3c x33 h3 y88 ff4 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ А1</div>
			<div class="t m28 x73 h3 y89 ff4 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m38 x27 h4 y8a ff4 fs2 fc1 sc0 ls0 ws0">2</div>
			<div class="t m39 x74 h4 y8b ff4 fs2 fc1 sc0 ls0 ws0">4</div>
			<div class="t m38 x75 h4 y8c ff4 fs2 fc1 sc0 ls0 ws0">7</div>
			<div class="t m3d x76 h3 y8d ff4 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ В1</div>
			<div class="t m28 x77 h3 y8e ff4 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m37 x78 h4 y8f ff4 fs2 fc1 sc0 ls0 ws0">1</div>
			<div class="t m38 x79 h4 y90 ff4 fs2 fc1 sc0 ls0 ws0">3</div>
			<div class="t m39 x7a h4 y91 ff4 fs2 fc1 sc0 ls0 ws0">4</div>
			<div class="t m38 x7b h4 y91 ff4 fs2 fc1 sc0 ls0 ws0">7</div>
			<div class="t m3e x4c ha y92 ff4 fs5 fc1 sc0 ls0 ws0">1. Вид А1,Вид В1- дзеркальне відображення Вид А, Вид В відносно умовної осі К.</div>
			<div class="t m32 x7c ha y93 ff4 fs5 fc0 sc0 ls0 ws0">Лист_3</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "4")) : ?>
	<div id="pf4" class="pf w5 hb" data-page-no="4">
		<div class="pc pc4 w5 hb">
      <?php echo $image4; ?>
			<div class="c x7d y95 w7 hd">
				<div class="t m33 x7e he y96 ff5 fs6 fc1 sc0 ls0 ws0"><?php echo $g1; ?></div>
				<div class="t m33 x7f he y97 ff5 fs6 fc1 sc0 ls0 ws0"><?php echo $c; ?></div>
				<div class="t m33 x80 he y98 ff5 fs6 fc1 sc0 ls0 ws0"><?php echo $d; ?></div>
				<div class="t m33 x81 he y99 ff5 fs6 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3f x82 he y9a ff5 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m33 x81 he y9b ff5 fs6 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3f x83 he y9c ff5 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m33 x33 he y9d ff5 fs6 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3f x83 he y9e ff5 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m33 x84 he y9f ff5 fs6 fc1 sc0 ls0 ws0"><?php echo $a; ?></div>
				<div class="t m33 x85 he ya0 ff6 fs6 fc1 sc0 ls0 ws0">а(Ш)</div>
				<div class="t m3f x86 he ya1 ff6 fs6 fc1 sc0 ls0 ws0">в(В)</div>
				<div class="t m33 x27 he ya2 ff5 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3f x87 he ya3 ff5 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m33 x88 he ya4 ff5 fs6 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3f x81 he ya5 ff5 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m33 x3e hf ya6 ff5 fs7 fc1 sc0 ls0 ws0">1.</div>
				<div class="t m33 x89 hf ya7 ff5 fs7 fc1 sc0 ls0 ws0">2.</div>
				<div class="t m33 x3e hf ya8 ff5 fs7 fc1 sc0 ls0 ws0">3.</div>
				<div class="t m33 x3e hf ya9 ff5 fs7 fc1 sc0 ls0 ws0">4.</div>
				<div class="t m33 x89 hf yaa ff5 fs7 fc1 sc0 ls0 ws0">5.</div>
				<div class="t m33 x89 hf yab ff5 fs7 fc1 sc0 ls0 ws0">6.</div>
				<div class="t m33 x3e hf yac ff5 fs7 fc1 sc0 ls0 ws0">7.</div>
				<div class="t m33 x8a hf yad ff5 fs7 fc1 sc0 ls0 ws0">8.</div>
				<div class="t m33 x8b he yae ff6 fs6 fc1 sc0 ls0 ws0"><?php echo $b5; ?></div>
				<div class="t m33 x8c he yaf ff5 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3f x87 he yb0 ff5 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m3f x8d he yb1 ff5 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m33 x85 he yb2 ff5 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m33 x17 he yb3 ff6 fs6 fc1 sc0 ls0 ws0"><?php echo $b4; ?></div>
				<div class="t m33 x8e h10 yb4 ff6 fs8 fc1 sc0 ls0 ws0">Порізка профілей на заготовки</div>
				<div class="t m33 x8e h10 yb5 ff6 fs8 fc1 sc0 ls0 ws0">Порізка нащільника заднього</div>
				<div class="t m33 x8e h10 yb6 ff6 fs8 fc1 sc0 ls0 ws0">Порізка нащільника переднього</div>
				<div class="t m33 x8f hf ya6 ff6 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m33 x8f hf yb7 ff6 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m33 x90 hf yb8 ff6 fs7 fc1 sc0 ls0 ws0">2шт.</div>
				<div class="t m33 x8f hf yb9 ff6 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m33 x90 hf yba ff6 fs7 fc1 sc0 ls0 ws0">6шт.</div>
				<div class="t m33 x90 hf ybb ff6 fs7 fc1 sc0 ls0 ws0"><?php echo $variable = ($set_count_seven) ? $set_count_seven : '4'; ?>шт.</div>
				<div class="t m33 x8f hf ybc ff6 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m33 x8f hf ybd ff6 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m33 x91 he ybe ff5 fs6 fc1 sc0 ls0 ws0">80</div>
				<div class="t m3f x92 he ybf ff5 fs6 fc1 sc0 ls0 ws0">48</div>
				<div class="t m33 x93 h11 yc0 ff6 fs9 fc4 sc0 ls0 ws0">Лист_4</div>
				<div class="t m33 x18 he yc1 ff6 fs6 fc1 sc0 ls0 ws0"><?php echo $b1; ?></div>
				<div class="t m33 x27 he yc2 ff5 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3f x87 he yc3 ff5 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m33 x88 he yc4 ff5 fs6 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3f x81 he yc5 ff5 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m40 x94 h12 yc6 ff5 fsa fc1 sc0 ls0 ws0">W*</div>
				<div class="t m41 x95 h13 yc7 ff5 fsb fc1 sc0 ls0 ws0">W*</div>
				<div class="t m33 x96 h10 yc8 ff5 fs8 fc1 sc0 ls0 ws0">1.* <span class="_ _7"> </span> <span class="ff6"> Розмір визначити по місцю при зварювані рами воріт. </span></div>
				<div class="t m33 x71 he yc9 ff5 fs6 fc1 sc0 ls0 ws0"><?php echo $a; ?></div>
				<div class="t m33 x97 h14 yca ff5 fsc fc1 sc0 ls0 ws0">40</div>
				<div class="t m33 x98 h14 ycb ff5 fsc fc1 sc0 ls0 ws0">30</div>
				<div class="t m3f x99 h14 ycc ff5 fsc fc1 sc0 ls0 ws0">30 <span class="_ _8"> </span> 38</div>
				<div class="t m33 x9a h14 ycb ff5 fsc fc1 sc0 ls0 ws0">30</div>
				<div class="t m33 x9b h14 ycd ff5 fsc fc1 sc0 ls0 ws0">40</div>
				<div class="t m3f x9c h14 ycc ff5 fsc fc1 sc0 ls0 ws0">30 <span class="_ _8"> </span> 38</div>
				<div class="t m33 x71 he yc9 ff5 fs6 fc1 sc0 ls0 ws0"><?php echo $a; ?></div>
				<div class="t m33 x97 h14 yca ff5 fsc fc1 sc0 ls0 ws0">40</div>
				<div class="t m33 x98 h14 ycb ff5 fsc fc1 sc0 ls0 ws0">30</div>
				<div class="t m3f x99 h14 ycc ff5 fsc fc1 sc0 ls0 ws0">30 <span class="_ _8"> </span> 38</div>
				<div class="t m33 x9a h14 ycb ff5 fsc fc1 sc0 ls0 ws0">30</div>
				<div class="t m33 x9b h14 ycd ff5 fsc fc1 sc0 ls0 ws0">40</div>
				<div class="t m3f x9c h14 ycc ff5 fsc fc1 sc0 ls0 ws0">30 <span class="_ _8"> </span> 38</div>
				<div class="t m33 x9d he yce ff5 fs6 fc1 sc0 ls0 ws0"><?php echo $a3; ?></div>
				<div class="t m33 x98 h14 ycf ff5 fsc fc1 sc0 ls0 ws0">30</div>
				<div class="t m3f x9e h14 yd0 ff5 fsc fc1 sc0 ls0 ws0">30</div>
				<div class="t m33 x4a h14 yd1 ff5 fsc fc1 sc0 ls0 ws0">30</div>
				<div class="t m3f x9f h14 yd0 ff5 fsc fc1 sc0 ls0 ws0">30</div>
				<div class="t m33 x27 he yd2 ff5 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3f x87 he yd3 ff5 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m33 x88 he yd4 ff5 fs6 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3f x81 he yd5 ff5 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m33 x8f hf yd6 ff6 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m33 x3e hf yd7 ff5 fs7 fc1 sc0 ls0 ws0">9.</div>
			</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[0.000000,1.000000,-1.000000,0.000000,842.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "5")) : ?>
	<div id="pf5" class="pf w0 h0" data-page-no="5">
		<div class="pc pc5 w0 h0">
      <?php echo $image5; ?>
			<div class="t m6 xa1 h2 ye1 ffa fs0 fc0 sc0 ls0 ws0">(**)</div>
			<div class="t m43 xa5 h2 ye2 ffa fs0 fc0 sc0 ls0 ws0"><?php echo $b5; ?> (висота розміщеня уловлювача верхнього</div>
			<div class="t m44 xa6 h2 ye3 ffa fs0 fc0 sc0 ls0 ws0">по висоті воріт)</div>
			<div class="t m1 xa7 h2 ye4 ffa fs0 fc0 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m45 xa8 h2 ye5 ffa fs0 fc0 sc0 ls0 ws0"><?php echo $b4; ?> Висота розміщеня верхнього роліка</div>
			<div class="t m43 x9a h2 ye6 ffa fs0 fc0 sc0 ls0 ws0">по нащільнику задньому</div>
			<div class="t m3 xa9 h2 ye7 ffa fs0 fc0 sc0 ls0 ws0">95 <span class="_ _9"> </span> 95</div>
			<div class="t m7 x83 h2 ye8 ffa fs0 fc1 sc0 ls0 ws0">Відстань від фундаменту до верху воріт</div>
			<div class="t m12 xaa h2 ye9 ffa fs0 fc1 sc0 ls0 ws0">R</div>
			<div class="t m12 xab h2 yea ffa fs0 fc1 sc0 ls0 ws0">S</div>
			<div class="t m2 xac h2 yeb ffa fs0 fc1 sc0 ls0 ws0">Кріпленя нащільника переднього та заднього провести на закладні зварюваням.</div>
			<div class="t ma xad h2 yeb ffa fs0 fc1 sc0 ls0 ws0">1.</div>
			<div class="t mb xae h2 yec ffa fs0 fc1 sc0 ls0 ws0">** Уловлювач нижній розмістити в складальному вигляді з стулкою воріт та роліками</div>
			<div class="t m29 xad h2 yec ffa fs0 fc1 sc0 ls0 ws0">2.</div>
			<div class="t m46 xad h2 yed ffa fs0 fc1 sc0 ls0 ws0">опорними в горізонтальній поверхні на 3мм-4мм вище роліка кінцевого.</div>
			<div class="t m47 xad h2 yee ffa fs0 fc1 sc0 ls0 ws0">3. Ролік верхній розмістити по висоті нащільника заднього.</div>
			<div class="t m20 xaf h2 yef ffa fs0 fc1 sc0 ls0 ws0">10</div>
			<div class="t m29 xaa h2 yf0 ffa fs0 fc1 sc0 ls0 ws0">11</div>
			<div class="t m1e xb0 h2 yf1 ffa fs0 fc1 sc0 ls0 ws0">W</div>
			<div class="t m2d xaa h2 yf2 ffa fs0 fc1 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m48 xb1 h2 yf3 ffa fs0 fc1 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m49 x70 h2 yf3 ffa fs0 fc1 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m1e xb2 h3 yf4 ffa fs1 fc1 sc0 ls0 ws0">W</div>
			<div class="t m12 xb3 h3 yf5 ffa fs1 fc1 sc0 ls0 ws0">R</div>
			<div class="t m12 xb4 h3 yf6 ffa fs1 fc1 sc0 ls0 ws0">S</div>
			<div class="t m4a xb5 h3 yf7 ffa fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ W</div>
			<div class="t m11 x8 h3 yf8 ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m49 xb6 h2 yf9 ffa fs0 fc1 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m2b x1a h2 yfa ffa fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m2f xb7 h2 yfb ffa fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m31 x37 h3 yfc ffa fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ R</div>
			<div class="t m11 xb8 h3 yfd ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m2b xb9 h2 yfe ffa fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m4b x3d h2 yff ffa fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m4c xba h2 y100 ffa fs0 fc1 sc0 ls0 ws0">Уловитель верхній</div>
			<div class="t m31 xbb h3 y101 ffa fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ S</div>
			<div class="t m11 xbc h3 y102 ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m23 xbd h2 y103 ffa fs0 fc1 sc0 ls0 ws0">Уловитель нижній</div>
			<div class="t m2b xbe h2 y104 ffa fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m4b xbf h2 y105 ffa fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m34 x1e h2 y106 ffa fs0 fc0 sc0 ls0 ws0"><?php echo $r1; ?></div>
			<div class="t m21 xc0 h2 y107 ffa fs0 fc0 sc0 ls0 ws0"><?php echo $r2; ?></div>
			<div class="t m4d xc1 h1b y108 ffa fsf fc0 sc0 ls0 ws0">Встановити в міжцегляному</div>
			<div class="t m4e xc2 h1b y109 ffa fsf fc0 sc0 ls0 ws0">шву на відстані півцегли</div>
			<div class="t m4f xc3 h1b y10a ffa fsf fc0 sc0 ls0 ws0">відносно внутнішньої</div>
			<div class="t m50 xc4 h1b y10b ffa fsf fc0 sc0 ls0 ws0">поверхні стовпа.</div>
			<div class="t m51 xc5 h3 y10c ffa fs1 fc0 sc0 ls0 ws0">Встановити в міжцегляному</div>
			<div class="t m52 xc6 h3 y10d ffa fs1 fc0 sc0 ls0 ws0">шву на відстані півцегли</div>
			<div class="t m53 xc7 h3 y10e ffa fs1 fc0 sc0 ls0 ws0">відносно внутрішньої</div>
			<div class="t m54 xc8 h3 y10f ffa fs1 fc0 sc0 ls0 ws0">поверхні стовпа.</div>
			<div class="t m14 x2d h3 y110 ffa fs1 fc1 sc0 ls0 ws0">АА <span class="_ _a"> </span> АА</div>
			<div class="t m55 xc9 h2 y111 ffa fs0 fc1 sc0 ls0 ws0">СЕЧЕНИЕ АА-АА</div>
			<div class="t m11 xca h2 y112 ffa fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m56 xc4 h2 y113 ffa fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m11 xc6 h2 y114 ffa fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m56 x13 h2 y115 ffa fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m11 xcb h2 y116 ffa fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m56 xcc h2 y117 ffa fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m11 xcb h2 y118 ffa fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m56 xcc h2 y119 ffa fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m57 xcd h2 y11a ffa fs0 fc1 sc0 ls0 ws0">(4 місця)</div>
			<div class="t m58 xce h3 y11b ffa fs1 fc1 sc0 ls0 ws0">АА-АА</div>
			<div class="t m28 xcf h3 y11c ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m14 xd0 h3 y11d ffa fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕАА <span class="_ _b"> </span> СЕЧЕНИЕАА</div>
			<div class="t m5 xd1 h3 y11e ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 10</div>
			<div class="t m2b xd2 h2 y11f ffa fs0 fc1 sc0 ls0 ws0">Закладна нащільника</div>
			<div class="t m32 xd3 h2 y120 ffa fs0 fc0 sc0 ls0 ws0">Лист_5</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "6")) : ?>
	<div id="pf6" class="pf w0 h0" data-page-no="6">
		<div class="pc pc6 w0 h0">
      <?php echo $image6; ?>
			<div class="t m5a xd8 h3 y12e ffe fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ J</div>
			<div class="t m28 x57 h3 y12f ffe fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m48 x38 h2 y130 ffe fs0 fc1 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m5b xd9 h2 y131 ffe fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5c xda h2 y132 ffe fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m5b xdb h2 y133 ffe fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5c xdc h2 y134 ffe fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m5b xdd h2 y135 ffe fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5c xde h2 y136 ffe fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m5d xdf h3 y137 ffe fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ L</div>
			<div class="t m28 x84 h3 y138 ffe fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m5b xe0 h2 y139 ffe fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5c x63 h2 y13a ffe fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m2d xe1 h2 y13b ffe fs0 fc1 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m31 xe2 h3 y13c ffe fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ Z</div>
			<div class="t m28 xe3 h3 y13d ffe fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m23 xd5 h2 y13e ffe fs0 fc1 sc0 ls0 ws0">Ролік</div>
			<div class="t m5e xdb h2 y13f ffe fs0 fc1 sc0 ls0 ws0">верхній</div>
			<div class="t m3 xe4 h2 y140 ffe fs0 fc0 sc0 ls0 ws0">300</div>
			<div class="t m9 x6d h2 y140 ffe fs0 fc1 sc0 ls0 ws0">450</div>
			<div class="t m1c xe5 h3 y141 ffe fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ I</div>
			<div class="t m28 xe6 h3 y142 ffe fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m5f xa9 h2 y143 ffe fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m2f xf h2 y144 ffe fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m2d xe7 h2 y145 ffe fs0 fc1 sc0 ls0 ws0">Стовп</div>
			<div class="t m25 xe8 h2 y146 ffe fs0 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m3c xdc h2 y147 ffe fs0 fc1 sc0 ls0 ws0">Рейка зубчата</div>
			<div class="t m4c xcd h2 y148 ffe fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m47 xcd h2 y149 ffe fs0 fc1 sc0 ls0 ws0">Кронштейн привода</div>
			<div class="t m60 xa9 h2 y14a ffe fs0 fc1 sc0 ls0 ws0">Арматура</div>
			<div class="t m61 xe9 h2 y14b ffe fs0 fc1 sc0 ls0 ws0">Ролік опорний</div>
			<div class="t m4c x16 h2 y14c ffe fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m25 xea h2 y14d ffe fs0 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m62 x9 h3 y14e ffe fs1 fc1 sc0 ls0 ws0">AE</div>
			<div class="t m62 xeb h3 y14f ffe fs1 fc1 sc0 ls0 ws0">AF</div>
			<div class="t m63 xec h3 y150 ffe fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ AD-AD</div>
			<div class="t m5 xec h3 y151 ffe fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 10</div>
			<div class="t m1c xed h3 y152 ffe fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ AE</div>
			<div class="t m28 xee h3 y153 ffe fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 2</div>
			<div class="t m64 x48 h2 y154 ffe fs0 fc1 sc0 ls0 ws0">Кінцевик магнітний</div>
			<div class="t m3 xe3 h2 y155 ffe fs0 fc1 sc0 ls0 ws0">положеня-відкрито</div>
			<div class="t m65 xef h2 y156 ffe fs0 fc1 sc0 ls0 ws0">Рейка</div>
			<div class="t m66 xe5 h2 y157 ffe fs0 fc1 sc0 ls0 ws0">зубчата</div>
			<div class="t m67 xf0 h2 y158 ffe fs0 fc1 sc0 ls0 ws0">Клепальна гайка</div>
			<div class="t m68 xf1 h2 y159 ffe fs0 fc1 sc0 ls0 ws0">(кріпленя зубчатої рейки)</div>
			<div class="t m1c xf2 h3 y15a ffe fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ AF</div>
			<div class="t m28 xf3 h3 y15b ffe fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 2</div>
			<div class="t m69 xf4 h2 y15c ffe fs0 fc1 sc0 ls0 ws0">Кінцевий ролік</div>
			<div class="t m23 xf5 h2 y15d ffe fs0 fc1 sc0 ls0 ws0">Профіль</div>
			<div class="t m6a xf6 h2 y15e ffe fs0 fc1 sc0 ls0 ws0">Прижимна планка</div>
			<div class="t m6b xd5 h2 y15f ffe fs0 fc1 sc0 ls0 ws0">роліка кінцевого</div>
			<div class="t m2 xf7 h2 y160 ffe fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5c xf8 h2 y161 ffe fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m6c xf9 h2 y162 ffe fs0 fc1 sc0 ls0 ws0">Уловлювач</div>
			<div class="t m6d xfa h2 y163 ffe fs0 fc1 sc0 ls0 ws0">нижній</div>
			<div class="t m5f xfb h2 y164 ffe fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m4b x5a h2 y165 ffe fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m6e xfc h3 y166 ffe fs1 fc1 sc0 ls0 ws0">AB</div>
			<div class="t m3d xfd h3 y167 ffe fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ Z1</div>
			<div class="t m28 xfe h3 y168 ffe fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m2c xfc h2 y169 ffe fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m1e xf2 h2 y16a ffe fs0 fc1 sc0 ls0 ws0">армований</div>
			<div class="t m61 xff h2 y16b ffe fs0 fc1 sc0 ls0 ws0">Ролік опорний</div>
			<div class="t m5b x100 h2 y16c ffe fs0 fc1 sc0 ls0 ws0">Заглушка задня</div>
			<div class="t m2d x101 h2 y16d ffe fs0 fc1 sc0 ls0 ws0">Стовп</div>
			<div class="t m5f x102 h2 y16e ffe fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m2f x66 h2 y16f ffe fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m6f x103 h2 y170 ffe fs0 fc1 sc0 ls0 ws0">Кронштейн</div>
			<div class="t m27 xa h2 y171 ffe fs0 fc1 sc0 ls0 ws0">привода</div>
			<div class="t m2c x65 h2 y172 ffe fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m1e x104 h2 y173 ffe fs0 fc1 sc0 ls0 ws0">армований</div>
			<div class="t m70 xd h3 y174 ffe fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ AB</div>
			<div class="t m71 x105 h3 y175 ffe fs1 fc1 sc0 ls0 ws0">МАСШТАБ 2 : 5</div>
			<div class="t m64 x1f h2 y176 ffe fs0 fc1 sc0 ls0 ws0">Кінцевик магнітний</div>
			<div class="t m23 x106 h2 y177 ffe fs0 fc1 sc0 ls0 ws0">положеня-закрито</div>
			<div class="t m65 x107 h2 y178 ffe fs0 fc1 sc0 ls0 ws0">Рейка</div>
			<div class="t m66 x106 h2 y179 ffe fs0 fc1 sc0 ls0 ws0">зубчата</div>
			<div class="t m4c xa4 h2 y17a ffe fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m72 x108 h2 y17b ffe fs0 fc1 sc0 ls0 ws0">Шестерня</div>
			<div class="t m73 x89 h2 y17c ffe fs0 fc1 sc0 ls0 ws0">Кронштейн</div>
			<div class="t m27 x106 h2 y17d ffe fs0 fc1 sc0 ls0 ws0">привода</div>
			<div class="t m67 x109 h2 y176 ffe fs0 fc1 sc0 ls0 ws0">Клепальна гайка</div>
			<div class="t m68 x10a h2 y177 ffe fs0 fc1 sc0 ls0 ws0">(кріпленя зубчатої рейки)</div>
			<div class="t m2 x10b h2 y17e ffe fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5c x10c h2 y17f ffe fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m23 x10d h2 y180 ffe fs0 fc1 sc0 ls0 ws0">Ролік</div>
			<div class="t m3 x10e h2 y181 ffe fs0 fc1 sc0 ls0 ws0">опорний</div>
			<div class="t m74 x10f h3 y182 ffe fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ Q-Q</div>
			<div class="t m28 x110 h3 y183 ffe fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m11 x111 h2 y184 ffe fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m75 x1a h2 y185 ffe fs0 fc1 sc0 ls0 ws0">нащельника</div>
			<div class="t m76 xa h2 y186 ffe fs0 fc1 sc0 ls0 ws0">Уловлювач</div>
			<div class="t m5e x112 h2 y187 ffe fs0 fc1 sc0 ls0 ws0">верхній</div>
			<div class="t m5f x113 h2 y188 ffe fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m4b x114 h2 y189 ffe fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m5f x115 h2 y188 ffe fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m4b x116 h2 y189 ffe fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m76 xca h2 y186 ffe fs0 fc1 sc0 ls0 ws0">Уловлювач</div>
			<div class="t m6d x117 h2 y187 ffe fs0 fc1 sc0 ls0 ws0">нижній</div>
			<div class="t m55 x118 h3 y18a ffe fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ F-F</div>
			<div class="t m28 x119 h3 y18b ffe fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m11 x11a h2 y18c ffe fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m75 x11b h2 y18d ffe fs0 fc1 sc0 ls0 ws0">нащельника</div>
			<div class="t m5b x11c h2 y18e ffe fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5c xc0 h2 y18f ffe fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m32 x11d h2 y190 ffe fs0 fc0 sc0 ls0 ws0">Лист_6</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif; ?>
</div>

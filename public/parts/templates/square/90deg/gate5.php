
<?php
  $image1 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/90deg/gate_images5/image1.svg");
  $image2 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/90deg/gate_images5/image2.svg");
  $image3 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/90deg/gate_images5/image3.svg");
  $image4 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/90deg/gate_images5/image4.svg");
  $image5 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/90deg/gate_images5/image5.svg");
  $image6 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/90deg/gate_images5/image6.svg");
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
<link rel='stylesheet' id='pdf-stylesheet-css' href='<?=$_SERVER['APP_URL']?>/parts/styles/square/90deg/gate5.css' type='text/css' media='all' />
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
			<div class="t m13 x11 h3 y18 ff1 fs1 fc1 sc0 ls0 ws0">I</div>
			<div class="t m14 x0 h3 y19 ff1 fs1 fc1 sc0 ls0 ws0">Q <span class="_ _0"> </span> Q</div>
			<div class="t m14 x12 h3 y1a ff1 fs1 fc1 sc0 ls0 ws0">F <span class="_ _1"> </span> F</div>
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
			<div class="t mf x1e h3 y27 ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 23</div>
			<div class="t m1e x15 h2 y28 ff1 fs0 fc0 sc0 ls0 ws0">Лист_1</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "2")) : ?>
	<div id="pf2" class="pf w0 h0" data-page-no="2">
		<div class="pc pc2 w0 h0">
      <?php echo $image2; ?>
			<div class="t m3 x20 h6 y2a ff2 fs0 fc0 sc0 ls0 ws0">95</div>
			<div class="t m0 x21 h6 y2b ff2 fs0 fc0 sc0 ls0 ws0">100 <span class="_ _2"> </span> 100</div>
			<div class="t m9 x22 h6 y2c ff2 fs0 fc0 sc0 ls0 ws0">240</div>
			<div class="t m1f x23 h6 y2d ff2 fs0 fc0 sc0 ls0 ws0">500</div>
			<div class="t m1 x24 h6 y2e ff2 fs0 fc0 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m20 x25 h6 y2f ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $l1; ?></div>
			<div class="t m21 x26 h6 y30 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $b5; ?></div>
			<div class="t m6 x27 h6 y31 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $b4; ?></div>
			<div class="t m3 x28 h6 y32 ff2 fs0 fc0 sc0 ls0 ws0">95</div>
			<div class="t m22 x29 h6 y33 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a7; ?></div>
			<div class="t m23 x2a h6 y34 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a6; ?></div>
			<div class="t m14 x2b h7 y35 ff2 fs1 fc1 sc0 ls0 ws0">A <span class="_ _3"> </span> A</div>
			<div class="t m14 x2c h7 y36 ff2 fs1 fc1 sc0 ls0 ws0">N</div>
			<div class="t m23 xb h6 y37 ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m24 x2d h6 y38 ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m25 x25 h6 y39 ff2 fs0 fc1 sc0 ls0 ws0">для роліка опорного</div>
			<div class="t m3 x2e h6 y3a ff2 fs0 fc1 sc0 ls0 ws0">переднього</div>
			<div class="t m23 xb h6 y3b ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m24 x2d h6 y3c ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m25 x25 h6 y3d ff2 fs0 fc1 sc0 ls0 ws0">для роліка опорного</div>
			<div class="t m26 x2f h6 y3e ff2 fs0 fc1 sc0 ls0 ws0">заднього</div>
			<div class="t m23 x30 h6 y3f ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m24 x31 h6 y40 ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m2 x32 h6 y41 ff2 fs0 fc1 sc0 ls0 ws0">для кронштейна</div>
			<div class="t m27 x33 h6 y42 ff2 fs0 fc1 sc0 ls0 ws0">привода</div>
			<div class="t m28 x34 h6 y43 ff2 fs0 fc1 sc0 ls0 ws0">Ролік задній розмістити в складальному вигляді з рамою воріт</div>
			<div class="t mf x34 h6 y44 ff2 fs0 fc1 sc0 ls0 ws0">максимально віддаленим по довжині хвостовика воріт.</div>
			<div class="t m29 x35 h6 y45 ff2 fs0 fc1 sc0 ls0 ws0">11</div>
			<div class="t m20 x36 h6 y46 ff2 fs0 fc1 sc0 ls0 ws0">10</div>
			<div class="t m23 x37 h6 y47 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a5; ?></div>
			<div class="t m3 xc h6 y48 ff2 fs0 fc0 sc0 ls0 ws0">95</div>
			<div class="t m2a x38 h6 y49 ff2 fs0 fc0 sc0 ls0 ws0">160</div>
			<div class="t m9 x39 h6 y4a ff2 fs0 fc0 sc0 ls0 ws0">250</div>
			<div class="t m3 x3a h6 y4b ff2 fs0 fc0 sc0 ls0 ws0">60</div>
			<div class="t m21 x3b h6 y4c ff2 fs0 fc0 sc0 ls0 ws0">40</div>
			<div class="t m2b x3c h7 y4d ff2 fs1 fc1 sc0 ls0 ws0">A-A МАСШТАБ1 : 16</div>
			<div class="t m2c xf h6 y4e ff2 fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m2d x3d h6 y4f ff2 fs0 fc1 sc0 ls0 ws0">Стовп</div>
			<div class="t m2e x3e h6 y50 ff2 fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m2f x3f h6 y51 ff2 fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m24 x40 h6 y52 ff2 fs0 fc1 sc0 ls0 ws0">(Розміщення швелера відносно стовпа)</div>
			<div class="t m23 x41 h6 y53 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a8; ?></div>
			<div class="t m1f x42 h6 y54 ff2 fs0 fc0 sc0 ls0 ws0">500</div>
			<div class="t m12 x43 h7 y55 ff2 fs1 fc1 sc0 ls0 ws0">O</div>
			<div class="t m30 x44 h7 y56 ff2 fs1 fc1 sc0 ls0 ws0">ВИД N</div>
			<div class="t m5 x45 h7 y57 ff2 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 16</div>
			<div class="t m0 x46 h6 y58 ff2 fs0 fc0 sc0 ls0 ws0">160</div>
			<div class="t m31 x47 h7 y59 ff2 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ O</div>
			<div class="t m28 x46 h7 y5a ff2 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m2c x48 h6 y5b ff2 fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m2e x49 h6 y5c ff2 fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m2f x4a h6 y5d ff2 fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m32 x4b h6 y5e ff2 fs0 fc0 sc0 ls0 ws0">Лист_2</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "3")) : ?>
	<div id="pf3" class="pf w0 h0" data-page-no="3">
		<div class="pc pc3 w0 h0">
      <?php echo $image3; ?>
			<div class="t m2 x4f h6 y62 ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $a; ?></div>
			<div class="t m34 x50 h6 y63 ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $b1; ?></div>
			<div class="t m6 x51 h6 y64 ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $b; ?></div>
			<div class="t m35 x50 h6 y65 ff4 fs0 fc0 sc0 ls0 ws0">в(B)</div>
			<div class="t m3 x52 h6 y66 ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $c; ?></div>
			<div class="t m20 x53 h6 y67 ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $c1; ?></div>
			<div class="t m20 x54 h6 y68 ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $c1; ?> <span class="_ _4"> </span> <?php echo $c1; ?> <span class="_ _5"> </span> <?php echo $c1; ?> <span class="_ _6"> </span> <?php echo $c1; ?> <span class="_ _7"> </span> <?php echo $c1; ?> <span class="_ _6"> </span> <?php echo $c1; ?></div>
			<div class="t m6 x55 h6 y69 ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $d; ?> <span class="_ _8"> </span> <?php echo $d; ?></div>
			<div class="t m36 x56 hb y6a ff4 fs4 fc1 sc0 ls0 ws0"><?php echo $g1; ?></div>
			<div class="t m2 x57 h7 y6b ff4 fs1 fc1 sc0 ls0 ws0">А</div>
			<div class="t m12 x58 h7 y6c ff4 fs1 fc1 sc0 ls0 ws0">В</div>
			<div class="t m3 x14 h7 y6d ff4 fs1 fc1 sc0 ls0 ws0">А1</div>
			<div class="t m1c x59 h7 y6e ff4 fs1 fc1 sc0 ls0 ws0">В1</div>
			<div class="t m37 x5a hc y6f ff4 fs2 fc1 sc0 ls0 ws0">1</div>
			<div class="t m38 x5b hc y70 ff4 fs2 fc1 sc0 ls0 ws0">2</div>
			<div class="t m38 x5c hc y71 ff4 fs2 fc1 sc0 ls0 ws0">3</div>
			<div class="t m39 x4 hc y72 ff4 fs2 fc1 sc0 ls0 ws0">4</div>
			<div class="t m39 x5d hc y73 ff4 fs2 fc1 sc0 ls0 ws0">4</div>
			<div class="t m38 x5e hc y74 ff4 fs2 fc1 sc0 ls0 ws0">5</div>
			<div class="t m38 x5f hc y75 ff4 fs2 fc1 sc0 ls0 ws0">6</div>
			<div class="t m38 x5f hc y76 ff4 fs2 fc1 sc0 ls0 ws0">6</div>
			<div class="t m38 x60 hc y75 ff4 fs2 fc1 sc0 ls0 ws0">6</div>
			<div class="t m38 x61 hc y76 ff4 fs2 fc1 sc0 ls0 ws0">6</div>
			<div class="t m38 x62 hc y75 ff4 fs2 fc1 sc0 ls0 ws0">6</div>
			<div class="t m38 x63 hc y76 ff4 fs2 fc1 sc0 ls0 ws0">6</div>
			<div class="t m38 x64 hc y75 ff4 fs2 fc1 sc0 ls0 ws0">6</div>
			<div class="t m38 x65 hc y76 ff4 fs2 fc1 sc0 ls0 ws0">6</div>
			<div class="t m38 x66 hc y77 ff4 fs2 fc1 sc0 ls0 ws0">6</div>
			<div class="t m38 x67 hc y78 ff4 fs2 fc1 sc0 ls0 ws0">6</div>
			<div class="t m38 x68 hc y79 ff4 fs2 fc1 sc0 ls0 ws0">6</div>
			<div class="t m38 x69 hc y7a ff4 fs2 fc1 sc0 ls0 ws0">6</div>
			<div class="t m38 x6a hc y7b ff4 fs2 fc1 sc0 ls0 ws0">7</div>
			<div class="t m38 x6b hc y7c ff4 fs2 fc1 sc0 ls0 ws0">7</div>
			<div class="t m38 x6c hc y7d ff4 fs2 fc1 sc0 ls0 ws0">7</div>
			<div class="t m38 x6d hc y7e ff4 fs2 fc1 sc0 ls0 ws0">7</div>
			<div class="t m3a x6e hd y7f ff4 fs5 fc1 sc0 ls0 ws0">Вісь_К</div>
			<div class="t m3b x6f h7 y80 ff4 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ А</div>
			<div class="t m28 x28 h7 y81 ff4 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m39 x4e hc y82 ff4 fs2 fc1 sc0 ls0 ws0">4</div>
			<div class="t m38 x70 hc y83 ff4 fs2 fc1 sc0 ls0 ws0">7</div>
			<div class="t m31 x71 h7 y84 ff4 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ В</div>
			<div class="t m28 x72 h7 y85 ff4 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m37 x73 hc y86 ff4 fs2 fc1 sc0 ls0 ws0">1</div>
			<div class="t m38 x74 hc y87 ff4 fs2 fc1 sc0 ls0 ws0">3</div>
			<div class="t m39 x75 hc y88 ff4 fs2 fc1 sc0 ls0 ws0">4</div>
			<div class="t m38 x76 hc y89 ff4 fs2 fc1 sc0 ls0 ws0">7</div>
			<div class="t m3c x34 h7 y8a ff4 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ А1</div>
			<div class="t m28 x77 h7 y8b ff4 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m38 x78 hc y8c ff4 fs2 fc1 sc0 ls0 ws0">2</div>
			<div class="t m39 x79 hc y8d ff4 fs2 fc1 sc0 ls0 ws0">4</div>
			<div class="t m38 x7a hc y8e ff4 fs2 fc1 sc0 ls0 ws0">7</div>
			<div class="t m3d x7b h7 y8f ff4 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ В1</div>
			<div class="t m28 x7c h7 y90 ff4 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m37 x7d hc y91 ff4 fs2 fc1 sc0 ls0 ws0">1</div>
			<div class="t m38 x7e hc y92 ff4 fs2 fc1 sc0 ls0 ws0">3</div>
			<div class="t m39 x59 hc y93 ff4 fs2 fc1 sc0 ls0 ws0">4</div>
			<div class="t m38 x7f hc y94 ff4 fs2 fc1 sc0 ls0 ws0">7</div>
			<div class="t m3e x40 hd y95 ff4 fs5 fc1 sc0 ls0 ws0">1. Вид А1,Вид В1- дзеркальне відображення Вид А, Вид В відносно умовної осі К.</div>
			<div class="t m32 x9 hd y96 ff4 fs5 fc0 sc0 ls0 ws0">Лист_3</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "4")) : ?>
	<div id="pf4" class="pf w5 he" data-page-no="4">
		<div class="pc pc4 w5 he">
      <?php echo $image4; ?>
			<div class="c x80 y98 w7 h10">
				<div class="t m33 x5a h11 y99 ff5 fs6 fc1 sc0 ls0 ws0"><?php echo $g1; ?></div>
				<div class="t m33 x81 h11 y9a ff5 fs6 fc1 sc0 ls0 ws0"><?php echo $c; ?></div>
				<div class="t m33 x82 h11 y9b ff5 fs6 fc1 sc0 ls0 ws0"><?php echo $d; ?></div>
				<div class="t m33 x83 h11 y9c ff5 fs6 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3f x84 h11 y9d ff5 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m33 x83 h11 y9e ff5 fs6 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3f x85 h11 y9f ff5 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m33 x34 h11 ya0 ff5 fs6 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3f x85 h11 ya1 ff5 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m33 x2 h11 ya2 ff5 fs6 fc1 sc0 ls0 ws0"><?php echo $a; ?></div>
				<div class="t m33 x86 h11 ya3 ff6 fs6 fc1 sc0 ls0 ws0">а(Ш)</div>
				<div class="t m3f x87 h11 ya4 ff6 fs6 fc1 sc0 ls0 ws0">в(В)</div>
				<div class="t m33 x29 h11 ya5 ff5 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3f x88 h11 ya6 ff5 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m33 x89 h11 ya7 ff5 fs6 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3f x83 h11 ya8 ff5 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m33 x3e h12 ya9 ff5 fs7 fc1 sc0 ls0 ws0">1.</div>
				<div class="t m33 x8a h12 yaa ff5 fs7 fc1 sc0 ls0 ws0">2.</div>
				<div class="t m33 x3e h12 yab ff5 fs7 fc1 sc0 ls0 ws0">3.</div>
				<div class="t m33 x3e h12 yac ff5 fs7 fc1 sc0 ls0 ws0">4.</div>
				<div class="t m33 x8a h12 yad ff5 fs7 fc1 sc0 ls0 ws0">5.</div>
				<div class="t m33 x8a h12 yae ff5 fs7 fc1 sc0 ls0 ws0">6.</div>
				<div class="t m33 x3e h12 yaf ff5 fs7 fc1 sc0 ls0 ws0">7.</div>
				<div class="t m33 x12 h12 yb0 ff5 fs7 fc1 sc0 ls0 ws0">8.</div>
				<div class="t m33 x8b h11 yb1 ff6 fs6 fc1 sc0 ls0 ws0"><?php echo $b5; ?></div>
				<div class="t m33 x7a h11 yb2 ff5 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3f x88 h11 yb3 ff5 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m3f x8c h11 yb4 ff5 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m33 x86 h11 yb5 ff5 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m33 x8d h11 yb6 ff6 fs6 fc1 sc0 ls0 ws0"><?php echo $b4; ?></div>
				<div class="t m33 x8e h13 yb7 ff6 fs8 fc1 sc0 ls0 ws0">Порізка профілей на заготовки</div>
				<div class="t m33 x8e h13 yb8 ff6 fs8 fc1 sc0 ls0 ws0">Порізка нащільника заднього</div>
				<div class="t m33 x8e h13 yb9 ff6 fs8 fc1 sc0 ls0 ws0">Порізка нащільника переднього</div>
				<div class="t m33 x8f h12 ya9 ff6 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m33 x8f h12 yba ff6 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m33 x90 h12 ybb ff6 fs7 fc1 sc0 ls0 ws0">2шт.</div>
				<div class="t m33 x8f h12 ybc ff6 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m33 x90 h12 ybd ff6 fs7 fc1 sc0 ls0 ws0">12шт.</div>
				<div class="t m33 x90 h12 ybe ff6 fs7 fc1 sc0 ls0 ws0"><?php echo $variable = ($set_count_seven) ? $set_count_seven : '4'; ?>шт.</div>
				<div class="t m33 x8f h12 ybf ff6 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m33 x8f h12 yc0 ff6 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m33 x91 h11 yc1 ff5 fs6 fc1 sc0 ls0 ws0">80</div>
				<div class="t m3f x92 h11 yc2 ff5 fs6 fc1 sc0 ls0 ws0">48</div>
				<div class="t m33 x93 h14 yc3 ff6 fs9 fc4 sc0 ls0 ws0">Лист_4</div>
				<div class="t m33 x94 h11 yc4 ff6 fs6 fc1 sc0 ls0 ws0"><?php echo $b1; ?></div>
				<div class="t m33 x29 h11 yc5 ff5 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3f x88 h11 yc6 ff5 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m33 x89 h11 yc7 ff5 fs6 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3f x83 h11 yc8 ff5 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m40 x95 h15 yc9 ff5 fsa fc1 sc0 ls0 ws0">W*</div>
				<div class="t m41 x96 h16 yca ff5 fsb fc1 sc0 ls0 ws0">W*</div>
				<div class="t m33 x97 h13 ycb ff5 fs8 fc1 sc0 ls0 ws0">1.* <span class="_ _9"> </span> <span class="ff6"> Розмір визначити по місцю при зварювані рами воріт. </span></div>
				<div class="t m33 x98 h11 ycc ff5 fs6 fc1 sc0 ls0 ws0"><?php echo $a; ?></div>
				<div class="t m33 xd h17 ycd ff5 fsc fc1 sc0 ls0 ws0">40</div>
				<div class="t m33 x99 h17 yce ff5 fsc fc1 sc0 ls0 ws0">30</div>
				<div class="t m3f x9a h17 ycf ff5 fsc fc1 sc0 ls0 ws0">30 <span class="_ _a"> </span> 38</div>
				<div class="t m33 x9b h17 yce ff5 fsc fc1 sc0 ls0 ws0">30</div>
				<div class="t m33 x9c h17 yd0 ff5 fsc fc1 sc0 ls0 ws0">40</div>
				<div class="t m3f x9d h17 ycf ff5 fsc fc1 sc0 ls0 ws0">30 <span class="_ _a"> </span> 38</div>
				<div class="t m33 x98 h11 ycc ff5 fs6 fc1 sc0 ls0 ws0"><?php echo $a; ?></div>
				<div class="t m33 xd h17 ycd ff5 fsc fc1 sc0 ls0 ws0">40</div>
				<div class="t m33 x99 h17 yce ff5 fsc fc1 sc0 ls0 ws0">30</div>
				<div class="t m3f x9a h17 ycf ff5 fsc fc1 sc0 ls0 ws0">30 <span class="_ _a"> </span> 38</div>
				<div class="t m33 x9b h17 yce ff5 fsc fc1 sc0 ls0 ws0">30</div>
				<div class="t m33 x9c h17 yd0 ff5 fsc fc1 sc0 ls0 ws0">40</div>
				<div class="t m3f x9d h17 ycf ff5 fsc fc1 sc0 ls0 ws0">30 <span class="_ _a"> </span> 38</div>
				<div class="t m33 x9e h11 yd1 ff5 fs6 fc1 sc0 ls0 ws0"><?php echo $a3; ?></div>
				<div class="t m33 x99 h17 yd2 ff5 fsc fc1 sc0 ls0 ws0">30</div>
				<div class="t m3f x9f h17 yd3 ff5 fsc fc1 sc0 ls0 ws0">30</div>
				<div class="t m33 x4a h17 yd4 ff5 fsc fc1 sc0 ls0 ws0">30</div>
				<div class="t m3f xa0 h17 yd3 ff5 fsc fc1 sc0 ls0 ws0">30</div>
				<div class="t m33 x29 h11 yd5 ff5 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3f x88 h11 yd6 ff5 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m33 x89 h11 yd7 ff5 fs6 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3f x83 h11 yd8 ff5 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m33 x8f h12 yd9 ff6 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m33 x3e h12 yda ff5 fs7 fc1 sc0 ls0 ws0">9.</div>
			</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[0.000000,1.000000,-1.000000,0.000000,842.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "5")) : ?>
	<div id="pf5" class="pf w0 h0" data-page-no="5">
		<div class="pc pc5 w0 h0">
      <?php echo $image5; ?>
			<div class="t m6 x1 h6 ye1 ff9 fs0 fc0 sc0 ls0 ws0">(**)</div>
			<div class="t m42 xa3 h6 ye2 ff9 fs0 fc0 sc0 ls0 ws0"><?php echo $b5; ?> (висота розміщеня уловлювача верхнього</div>
			<div class="t m43 xa4 h6 ye3 ff9 fs0 fc0 sc0 ls0 ws0">по висоті воріт)</div>
			<div class="t m1 xa5 h6 ye4 ff9 fs0 fc0 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m44 xa6 h6 ye5 ff9 fs0 fc0 sc0 ls0 ws0"><?php echo $b4; ?> Висота розміщеня верхнього роліка</div>
			<div class="t m42 x9b h6 ye6 ff9 fs0 fc0 sc0 ls0 ws0">по нащільнику задньому</div>
			<div class="t m3 xa7 h6 ye7 ff9 fs0 fc0 sc0 ls0 ws0">95 <span class="_ _b"> </span> 95</div>
			<div class="t m7 x85 h6 ye8 ff9 fs0 fc1 sc0 ls0 ws0">Відстань від фундаменту до верху воріт</div>
			<div class="t m12 xa8 h6 ye9 ff9 fs0 fc1 sc0 ls0 ws0">R</div>
			<div class="t m12 xa9 h6 yea ff9 fs0 fc1 sc0 ls0 ws0">S</div>
			<div class="t m2 xaa h6 yeb ff9 fs0 fc1 sc0 ls0 ws0">Кріпленя нащільника переднього та заднього провести на закладні зварюваням.</div>
			<div class="t ma xab h6 yeb ff9 fs0 fc1 sc0 ls0 ws0">1.</div>
			<div class="t mb xac h6 yec ff9 fs0 fc1 sc0 ls0 ws0">** Уловлювач нижній розмістити в складальному вигляді з стулкою воріт та роліками</div>
			<div class="t m29 xab h6 yec ff9 fs0 fc1 sc0 ls0 ws0">2.</div>
			<div class="t m45 xab h6 yed ff9 fs0 fc1 sc0 ls0 ws0">опорними в горізонтальній поверхні на 3мм-4мм вище роліка кінцевого.</div>
			<div class="t m46 xab h6 yee ff9 fs0 fc1 sc0 ls0 ws0">3. Ролік верхній розмістити по висоті нащільника заднього.</div>
			<div class="t m20 xad h6 yef ff9 fs0 fc1 sc0 ls0 ws0">10</div>
			<div class="t m29 xa8 h6 yf0 ff9 fs0 fc1 sc0 ls0 ws0">11</div>
			<div class="t m1e xae h6 yf1 ff9 fs0 fc1 sc0 ls0 ws0">W</div>
			<div class="t m2d xa8 h6 yf2 ff9 fs0 fc1 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m47 xaf h6 yf3 ff9 fs0 fc1 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m48 xb0 h6 yf3 ff9 fs0 fc1 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m1e xb1 h7 yf4 ff9 fs1 fc1 sc0 ls0 ws0">W</div>
			<div class="t m12 xb2 h7 yf5 ff9 fs1 fc1 sc0 ls0 ws0">R</div>
			<div class="t m12 xb3 h7 yf6 ff9 fs1 fc1 sc0 ls0 ws0">S</div>
			<div class="t m49 xb4 h7 yf7 ff9 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ W</div>
			<div class="t m11 xb5 h7 yf8 ff9 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m48 xb6 h6 yf9 ff9 fs0 fc1 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m2b xb7 h6 yfa ff9 fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m2f xb8 h6 yfb ff9 fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m31 xc h7 yfc ff9 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ R</div>
			<div class="t m11 xb9 h7 yfd ff9 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m2b xba h6 yfe ff9 fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m4a x3d h6 yff ff9 fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m4b xbb h6 y100 ff9 fs0 fc1 sc0 ls0 ws0">Уловитель верхній</div>
			<div class="t m31 xbc h7 y101 ff9 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ S</div>
			<div class="t m11 x18 h7 y102 ff9 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m23 xbd h6 y103 ff9 fs0 fc1 sc0 ls0 ws0">Уловитель нижній</div>
			<div class="t m2b xbe h6 y104 ff9 fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m4a xbf h6 y105 ff9 fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m34 xc0 h6 y106 ff9 fs0 fc0 sc0 ls0 ws0"><?php echo $r1; ?></div>
			<div class="t m21 xc1 h6 y107 ff9 fs0 fc0 sc0 ls0 ws0"><?php echo $r2; ?></div>
			<div class="t m4c xc2 h1d y108 ff9 fsf fc0 sc0 ls0 ws0">Встановити в міжцегляному</div>
			<div class="t m4d xc3 h1d y109 ff9 fsf fc0 sc0 ls0 ws0">шву на відстані півцегли</div>
			<div class="t m4e xc4 h1d y10a ff9 fsf fc0 sc0 ls0 ws0">відносно внутнішньої</div>
			<div class="t m4f xc5 h1d y10b ff9 fsf fc0 sc0 ls0 ws0">поверхні стовпа.</div>
			<div class="t m50 xc6 h7 y10c ff9 fs1 fc0 sc0 ls0 ws0">Встановити в міжцегляному</div>
			<div class="t m51 xc7 h7 y10d ff9 fs1 fc0 sc0 ls0 ws0">шву на відстані півцегли</div>
			<div class="t m52 xc8 h7 y10e ff9 fs1 fc0 sc0 ls0 ws0">відносно внутрішньої</div>
			<div class="t m53 xc9 h7 y10f ff9 fs1 fc0 sc0 ls0 ws0">поверхні стовпа.</div>
			<div class="t m14 x2e h7 y110 ff9 fs1 fc1 sc0 ls0 ws0">АА <span class="_ _c"> </span> АА</div>
			<div class="t m54 xca h6 y111 ff9 fs0 fc1 sc0 ls0 ws0">СЕЧЕНИЕ АА-АА</div>
			<div class="t m11 x17 h6 y112 ff9 fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m55 xc5 h6 y113 ff9 fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m11 xc7 h6 y114 ff9 fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m55 xcb h6 y115 ff9 fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m11 xcc h6 y116 ff9 fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m55 xcd h6 y117 ff9 fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m11 xcc h6 y118 ff9 fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m55 xcd h6 y119 ff9 fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m56 xce h6 y11a ff9 fs0 fc1 sc0 ls0 ws0">(4 місця)</div>
			<div class="t m57 xcf h7 y11b ff9 fs1 fc1 sc0 ls0 ws0">АА-АА</div>
			<div class="t m28 xd0 h7 y11c ff9 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m14 xd1 h7 y11d ff9 fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕАА <span class="_ _d"> </span> СЕЧЕНИЕАА</div>
			<div class="t m5 xd2 h7 y11e ff9 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 10</div>
			<div class="t m2b xd3 h6 y11f ff9 fs0 fc1 sc0 ls0 ws0">Закладна нащільника</div>
			<div class="t m32 xd4 h6 y120 ff9 fs0 fc0 sc0 ls0 ws0">Лист_5</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "6")) : ?>
	<div id="pf6" class="pf w0 h0" data-page-no="6">
		<div class="pc pc6 w0 h0">
      <?php echo $image6; ?>
			<div class="t m59 xda h7 y12e ffd fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ J</div>
			<div class="t m28 xc h7 y12f ffd fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m47 x38 h6 y130 ffd fs0 fc1 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m5a xdb h6 y131 ffd fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5b xdc h6 y132 ffd fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m5a xdd h6 y133 ffd fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5b xde h6 y134 ffd fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m5a xdf h6 y135 ffd fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5b xe0 h6 y136 ffd fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m5c xe1 h7 y137 ffd fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ L</div>
			<div class="t m28 x2 h7 y138 ffd fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m5a xe2 h6 y139 ffd fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5b xe3 h6 y13a ffd fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m2d xe4 h6 y13b ffd fs0 fc1 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m31 xe5 h7 y13c ffd fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ Z</div>
			<div class="t m28 xe6 h7 y13d ffd fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m23 xd7 h6 y13e ffd fs0 fc1 sc0 ls0 ws0">Ролік</div>
			<div class="t m5d xdd h6 y13f ffd fs0 fc1 sc0 ls0 ws0">верхній</div>
			<div class="t m3 xe7 h6 y140 ffd fs0 fc0 sc0 ls0 ws0">300</div>
			<div class="t m9 x71 h6 y140 ffd fs0 fc1 sc0 ls0 ws0">450</div>
			<div class="t m1c xe8 h7 y141 ffd fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ I</div>
			<div class="t m28 x98 h7 y142 ffd fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m5e xa7 h6 y143 ffd fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m2f xe9 h6 y144 ffd fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m2d xea h6 y145 ffd fs0 fc1 sc0 ls0 ws0">Стовп</div>
			<div class="t m25 xeb h6 y146 ffd fs0 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m3c xde h6 y147 ffd fs0 fc1 sc0 ls0 ws0">Рейка зубчата</div>
			<div class="t m4b xce h6 y148 ffd fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m46 xce h6 y149 ffd fs0 fc1 sc0 ls0 ws0">Кронштейн привода</div>
			<div class="t m5f xa7 h6 y14a ffd fs0 fc1 sc0 ls0 ws0">Арматура</div>
			<div class="t m60 xec h6 y14b ffd fs0 fc1 sc0 ls0 ws0">Ролік опорний</div>
			<div class="t m4b x65 h6 y14c ffd fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m25 xed h6 y14d ffd fs0 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m61 xee h7 y14e ffd fs1 fc1 sc0 ls0 ws0">AE</div>
			<div class="t m61 xef h7 y14f ffd fs1 fc1 sc0 ls0 ws0">AF</div>
			<div class="t m62 xf0 h7 y150 ffd fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ AD-AD</div>
			<div class="t m5 xf0 h7 y151 ffd fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 10</div>
			<div class="t m1c x76 h7 y152 ffd fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ AE</div>
			<div class="t m28 xf1 h7 y153 ffd fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 2</div>
			<div class="t m63 x48 h6 y154 ffd fs0 fc1 sc0 ls0 ws0">Кінцевик магнітний</div>
			<div class="t m3 xe6 h6 y155 ffd fs0 fc1 sc0 ls0 ws0">положеня-відкрито</div>
			<div class="t m64 xf2 h6 y156 ffd fs0 fc1 sc0 ls0 ws0">Рейка</div>
			<div class="t m65 xe8 h6 y157 ffd fs0 fc1 sc0 ls0 ws0">зубчата</div>
			<div class="t m66 x61 h6 y158 ffd fs0 fc1 sc0 ls0 ws0">Клепальна гайка</div>
			<div class="t m67 xf3 h6 y159 ffd fs0 fc1 sc0 ls0 ws0">(кріпленя зубчатої рейки)</div>
			<div class="t m1c xf4 h7 y15a ffd fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ AF</div>
			<div class="t m28 xf5 h7 y15b ffd fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 2</div>
			<div class="t m68 xf6 h6 y15c ffd fs0 fc1 sc0 ls0 ws0">Кінцевий ролік</div>
			<div class="t m23 xf7 h6 y15d ffd fs0 fc1 sc0 ls0 ws0">Профіль</div>
			<div class="t m69 x6 h6 y15e ffd fs0 fc1 sc0 ls0 ws0">Прижимна планка</div>
			<div class="t m6a xd7 h6 y15f ffd fs0 fc1 sc0 ls0 ws0">роліка кінцевого</div>
			<div class="t m2 xf8 h6 y160 ffd fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5b xf9 h6 y161 ffd fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m6b xfa h6 y162 ffd fs0 fc1 sc0 ls0 ws0">Уловлювач</div>
			<div class="t m6c xfb h6 y163 ffd fs0 fc1 sc0 ls0 ws0">нижній</div>
			<div class="t m5e xfc h6 y164 ffd fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m4a xfd h6 y165 ffd fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m6d xfe h7 y166 ffd fs1 fc1 sc0 ls0 ws0">AB</div>
			<div class="t m3d xff h7 y167 ffd fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ Z1</div>
			<div class="t m28 x100 h7 y168 ffd fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m2c xfe h6 y169 ffd fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m1e xf4 h6 y16a ffd fs0 fc1 sc0 ls0 ws0">армований</div>
			<div class="t m60 x101 h6 y16b ffd fs0 fc1 sc0 ls0 ws0">Ролік опорний</div>
			<div class="t m5a x102 h6 y16c ffd fs0 fc1 sc0 ls0 ws0">Заглушка задня</div>
			<div class="t m2d x103 h6 y16d ffd fs0 fc1 sc0 ls0 ws0">Стовп</div>
			<div class="t m5e x104 h6 y16e ffd fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m2f x105 h6 y16f ffd fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m6e x106 h6 y170 ffd fs0 fc1 sc0 ls0 ws0">Кронштейн</div>
			<div class="t m27 x107 h6 y171 ffd fs0 fc1 sc0 ls0 ws0">привода</div>
			<div class="t m2c x108 h6 y172 ffd fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m1e x52 h6 y173 ffd fs0 fc1 sc0 ls0 ws0">армований</div>
			<div class="t m6f x109 h7 y174 ffd fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ AB</div>
			<div class="t m70 x10a h7 y175 ffd fs1 fc1 sc0 ls0 ws0">МАСШТАБ 2 : 5</div>
			<div class="t m63 x1f h6 y176 ffd fs0 fc1 sc0 ls0 ws0">Кінцевик магнітний</div>
			<div class="t m23 x10b h6 y177 ffd fs0 fc1 sc0 ls0 ws0">положеня-закрито</div>
			<div class="t m64 x10c h6 y178 ffd fs0 fc1 sc0 ls0 ws0">Рейка</div>
			<div class="t m65 x10b h6 y179 ffd fs0 fc1 sc0 ls0 ws0">зубчата</div>
			<div class="t m4b xa2 h6 y17a ffd fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m71 x10d h6 y17b ffd fs0 fc1 sc0 ls0 ws0">Шестерня</div>
			<div class="t m72 x8a h6 y17c ffd fs0 fc1 sc0 ls0 ws0">Кронштейн</div>
			<div class="t m27 x10b h6 y17d ffd fs0 fc1 sc0 ls0 ws0">привода</div>
			<div class="t m66 x10e h6 y176 ffd fs0 fc1 sc0 ls0 ws0">Клепальна гайка</div>
			<div class="t m67 x10f h6 y177 ffd fs0 fc1 sc0 ls0 ws0">(кріпленя зубчатої рейки)</div>
			<div class="t m2 x110 h6 y17e ffd fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5b x111 h6 y17f ffd fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m23 x112 h6 y180 ffd fs0 fc1 sc0 ls0 ws0">Ролік</div>
			<div class="t m3 x113 h6 y181 ffd fs0 fc1 sc0 ls0 ws0">опорний</div>
			<div class="t m73 x114 h7 y182 ffd fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ Q-Q</div>
			<div class="t m28 x115 h7 y183 ffd fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m11 x116 h6 y184 ffd fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m74 x117 h6 y185 ffd fs0 fc1 sc0 ls0 ws0">нащельника</div>
			<div class="t m75 x107 h6 y186 ffd fs0 fc1 sc0 ls0 ws0">Уловлювач</div>
			<div class="t m5d x118 h6 y187 ffd fs0 fc1 sc0 ls0 ws0">верхній</div>
			<div class="t m5e x119 h6 y188 ffd fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m4a x11a h6 y189 ffd fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m5e x11b h6 y188 ffd fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m4a x11c h6 y189 ffd fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m75 x17 h6 y186 ffd fs0 fc1 sc0 ls0 ws0">Уловлювач</div>
			<div class="t m6c x11d h6 y187 ffd fs0 fc1 sc0 ls0 ws0">нижній</div>
			<div class="t m54 x11e h7 y18a ffd fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ F-F</div>
			<div class="t m28 x11f h7 y18b ffd fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m11 x9 h6 y18c ffd fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m74 x14 h6 y18d ffd fs0 fc1 sc0 ls0 ws0">нащельника</div>
			<div class="t m5a x120 h6 y18e ffd fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5b xc1 h6 y18f ffd fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m32 x121 h6 y190 ffd fs0 fc0 sc0 ls0 ws0">Лист_6</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif; ?>
</div>

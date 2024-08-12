
<?php
  $image1 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/45deg/gate_images5/image1.svg");
  $image2 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/45deg/gate_images5/image2.svg");
  $image3 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/45deg/gate_images5/image3.svg");
  $image4 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/45deg/gate_images5/image4.svg");
  $image5 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/45deg/gate_images5/image5.svg");
  $image6 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/45deg/gate_images5/image6.svg");
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
  }
  $b4 = $gate_height + 20;
  $b5 = $gate_height;
  $c = $a - 140;
  $c1 = round(($a - 140 - 6 * 30) / 7);
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

<link rel='stylesheet' id='pdf-stylesheet-css' href='/parts/styles/square/45deg/gate5.css' type='text/css' media='all' />
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
			<div class="t m9 x16 h6 y2c ff2 fs0 fc0 sc0 ls0 ws0">240</div>
			<div class="t m1f x22 h6 y2d ff2 fs0 fc0 sc0 ls0 ws0">500</div>
			<div class="t m1 x23 h6 y2e ff2 fs0 fc0 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m20 x24 h6 y2f ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $l1; ?></div>
			<div class="t m21 x25 h6 y30 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $b5; ?></div>
			<div class="t m6 x26 h6 y31 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $b4; ?></div>
			<div class="t m3 x27 h6 y32 ff2 fs0 fc0 sc0 ls0 ws0">95</div>
			<div class="t m22 x28 h6 y33 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a7; ?></div>
			<div class="t m23 x29 h6 y34 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a6; ?></div>
			<div class="t m14 x2a h7 y35 ff2 fs1 fc1 sc0 ls0 ws0">A <span class="_ _3"> </span> A</div>
			<div class="t m14 x2b h7 y36 ff2 fs1 fc1 sc0 ls0 ws0">N</div>
			<div class="t m23 xb h6 y37 ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m24 x2c h6 y38 ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m25 x24 h6 y39 ff2 fs0 fc1 sc0 ls0 ws0">для роліка опорного</div>
			<div class="t m3 x2d h6 y3a ff2 fs0 fc1 sc0 ls0 ws0">переднього</div>
			<div class="t m23 xb h6 y3b ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m24 x2c h6 y3c ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m25 x24 h6 y3d ff2 fs0 fc1 sc0 ls0 ws0">для роліка опорного</div>
			<div class="t m26 x2e h6 y3e ff2 fs0 fc1 sc0 ls0 ws0">заднього</div>
			<div class="t m23 x2f h6 y3f ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m24 x30 h6 y40 ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m2 x31 h6 y41 ff2 fs0 fc1 sc0 ls0 ws0">для кронштейна</div>
			<div class="t m27 x32 h6 y42 ff2 fs0 fc1 sc0 ls0 ws0">привода</div>
			<div class="t m28 x33 h6 y43 ff2 fs0 fc1 sc0 ls0 ws0">Ролік задній розмістити в складальному вигляді з рамою воріт</div>
			<div class="t mf x33 h6 y44 ff2 fs0 fc1 sc0 ls0 ws0">максимально віддаленим по довжині хвостовика воріт.</div>
			<div class="t m29 x34 h6 y45 ff2 fs0 fc1 sc0 ls0 ws0">11</div>
			<div class="t m20 x35 h6 y46 ff2 fs0 fc1 sc0 ls0 ws0">10</div>
			<div class="t m23 x36 h6 y47 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a5; ?></div>
			<div class="t m3 xc h6 y48 ff2 fs0 fc0 sc0 ls0 ws0">95</div>
			<div class="t m2a x37 h6 y49 ff2 fs0 fc0 sc0 ls0 ws0">160</div>
			<div class="t m9 x38 h6 y4a ff2 fs0 fc0 sc0 ls0 ws0">250</div>
			<div class="t m3 x39 h6 y4b ff2 fs0 fc0 sc0 ls0 ws0">60</div>
			<div class="t m21 x3a h6 y4c ff2 fs0 fc0 sc0 ls0 ws0">40</div>
			<div class="t m2b x3b h7 y4d ff2 fs1 fc1 sc0 ls0 ws0">A-A МАСШТАБ1 : 16</div>
			<div class="t m2c xf h6 y4e ff2 fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m2d x3c h6 y4f ff2 fs0 fc1 sc0 ls0 ws0">Стовп</div>
			<div class="t m2e x3d h6 y50 ff2 fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m2f x3e h6 y51 ff2 fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m24 x3f h6 y52 ff2 fs0 fc1 sc0 ls0 ws0">(Розміщення швелера відносно стовпа)</div>
			<div class="t m23 x40 h6 y53 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a8; ?></div>
			<div class="t m1f x41 h6 y54 ff2 fs0 fc0 sc0 ls0 ws0">500</div>
			<div class="t m12 x42 h7 y55 ff2 fs1 fc1 sc0 ls0 ws0">O</div>
			<div class="t m30 x43 h7 y56 ff2 fs1 fc1 sc0 ls0 ws0">ВИД N</div>
			<div class="t m5 x44 h7 y57 ff2 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 16</div>
			<div class="t m0 x45 h6 y58 ff2 fs0 fc0 sc0 ls0 ws0">160</div>
			<div class="t m31 x46 h7 y59 ff2 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ O</div>
			<div class="t m28 x45 h7 y5a ff2 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m2c x47 h6 y5b ff2 fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m2e x48 h6 y5c ff2 fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m2f x49 h6 y5d ff2 fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m32 x4a h6 y5e ff2 fs0 fc0 sc0 ls0 ws0">Лист_2</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "3")) : ?>
	<div id="pf3" class="pf w4 ha" data-page-no="3">
		<div class="pc pc3 w4 ha">
      <?php echo $image3; ?>
			<div class="t m34 x4e hc y62 ff4 fs4 fc0 sc0 ls0 ws0"><?php echo $c1; ?></div>
			<div class="t m34 x4f hc y63 ff4 fs4 fc0 sc0 ls0 ws0"><?php echo $c1; ?></div>
			<div class="t m35 x50 hc y64 ff4 fs4 fc0 sc0 ls0 ws0"><?php echo $d; ?> <span class="_ _4"> </span> <?php echo $d; ?></div>
			<div class="t m36 x51 hc y65 ff4 fs4 fc0 sc0 ls0 ws0"><?php echo $b1; ?></div>
			<div class="t m3 x42 hc y66 ff4 fs4 fc0 sc0 ls0 ws0"><?php echo $c; ?></div>
			<div class="t m34 x52 hc y67 ff4 fs4 fc0 sc0 ls0 ws0"><?php echo $c1; ?></div>
			<div class="t m1f x53 hc y68 ff4 fs4 fc0 sc0 ls0 ws0">60</div>
			<div class="t m35 x4d hc y69 ff4 fs4 fc0 sc0 ls0 ws0"><?php echo $b; ?></div>
			<div class="t m2 x54 hc y6a ff4 fs4 fc0 sc0 ls0 ws0"><?php echo $a; ?></div>
			<div class="t m34 x55 hc y6b ff4 fs4 fc0 sc0 ls0 ws0"><?php echo $c1; ?></div>
			<div class="t m34 x56 hc y6c ff4 fs4 fc0 sc0 ls0 ws0"><?php echo $c1; ?> <span class="_ _5"> </span> <?php echo $c1; ?> <span class="_ _6"> </span> <?php echo $c1; ?></div>
			<div class="t m37 x57 hd y6d ff4 fs5 fc0 sc0 ls0 ws0"><?php echo $g1; ?></div>
			<div class="t m2b x58 he y6e ff4 fs6 fc1 sc0 ls0 ws0">A</div>
			<div class="t m12 x59 he y6f ff4 fs6 fc1 sc0 ls0 ws0">B</div>
			<div class="t m38 x5a he y70 ff4 fs6 fc1 sc0 ls0 ws0">A1</div>
			<div class="t m1c x5b he y71 ff4 fs6 fc1 sc0 ls0 ws0">В1</div>
			<div class="t m39 x5c h6 y72 ff4 fs0 fc1 sc0 ls0 ws0">1</div>
			<div class="t m3 x5d h6 y73 ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3 x5e h6 y74 ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3 x4 h6 y75 ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3 x5f h6 y76 ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t m12 x60 h6 y77 ff4 fs0 fc1 sc0 ls0 ws0">4</div>
			<div class="t m3 x61 h6 y78 ff4 fs0 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3 x62 h6 y79 ff4 fs0 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3 x63 h6 y7a ff4 fs0 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3 x63 h6 y7b ff4 fs0 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3 x64 h6 y7c ff4 fs0 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3 x64 h6 y7d ff4 fs0 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3 x65 h6 y7e ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m3 x66 h6 y7f ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m3a x67 he y80 ff4 fs6 fc1 sc0 ls0 ws0">МЕСТНЫЙ A</div>
			<div class="t m11 x68 he y81 ff4 fs6 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m3 x69 h6 y82 ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3 x1a h6 y83 ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3 x6a h6 y84 ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m3b x6b he y85 ff4 fs6 fc1 sc0 ls0 ws0">МЕСТНЫЙ B</div>
			<div class="t m11 x6c he y86 ff4 fs6 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m39 x50 h6 y87 ff4 fs0 fc1 sc0 ls0 ws0">1</div>
			<div class="t m3 x6d h6 y88 ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3 x6e h6 y89 ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3 x6f h6 y8a ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m3c x70 he y8b ff4 fs6 fc1 sc0 ls0 ws0">МЕСТНЫЙ A1</div>
			<div class="t m11 x22 he y8c ff4 fs6 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m3d x71 he y8d ff4 fs6 fc1 sc0 ls0 ws0">дзеркальне відображеня ВидА</div>
			<div class="t m3 x71 h6 y8e ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3 x72 h6 y8f ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3 x73 h6 y90 ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m3e x74 he y91 ff4 fs6 fc1 sc0 ls0 ws0">МЕСТНЫЙ В1</div>
			<div class="t m11 x75 he y92 ff4 fs6 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m5 x76 he y93 ff4 fs6 fc1 sc0 ls0 ws0">дзеркальне відображеня ВидВ</div>
			<div class="t m39 x77 h6 y94 ff4 fs0 fc1 sc0 ls0 ws0">1</div>
			<div class="t m3 x78 h6 y95 ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3 x79 h6 y96 ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3 x7a h6 y97 ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m32 x7b hc y98 ff4 fs4 fc0 sc0 ls0 ws0">Лист_3</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "4")) : ?>
	<div id="pf4" class="pf w6 hf" data-page-no="4">
		<div class="pc pc4 w6 hf">
      <?php echo $image4; ?>
			<div class="c x7c y9a w8 h11">
				<div class="t m33 x7d h12 y9b ff5 fs7 fc1 sc0 ls0 ws0"><?php echo $g1; ?></div>
				<div class="t m33 x7e h12 y9c ff5 fs7 fc1 sc0 ls0 ws0"><?php echo $c; ?></div>
				<div class="t m33 x7f h12 y9d ff5 fs7 fc1 sc0 ls0 ws0"><?php echo $d; ?></div>
				<div class="t m33 x80 h12 y9e ff5 fs7 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3f x81 h12 y9f ff5 fs7 fc1 sc0 ls0 ws0">30</div>
				<div class="t m33 x80 h12 ya0 ff5 fs7 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3f x82 h12 ya1 ff5 fs7 fc1 sc0 ls0 ws0">30</div>
				<div class="t m33 x33 h12 ya2 ff5 fs7 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3f x82 h12 ya3 ff5 fs7 fc1 sc0 ls0 ws0">30</div>
				<div class="t m33 x2 h12 ya4 ff5 fs7 fc1 sc0 ls0 ws0"><?php echo $a; ?></div>
				<div class="t m33 x83 h12 ya5 ff6 fs7 fc1 sc0 ls0 ws0">а(Ш)</div>
				<div class="t m3f x84 h12 ya6 ff6 fs7 fc1 sc0 ls0 ws0">в(В)</div>
				<div class="t m33 x28 h12 ya7 ff5 fs7 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3f x85 h12 ya8 ff5 fs7 fc1 sc0 ls0 ws0">40</div>
				<div class="t m33 x86 h12 ya9 ff5 fs7 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3f x80 h12 yaa ff5 fs7 fc1 sc0 ls0 ws0">30</div>
				<div class="t m33 x87 h12 yab ff5 fs7 fc1 sc0 ls0 ws0"><?php echo $a3; ?></div>
				<div class="t m33 x3d h13 yac ff5 fs8 fc1 sc0 ls0 ws0">1.</div>
				<div class="t m33 x88 h13 yad ff5 fs8 fc1 sc0 ls0 ws0">2.</div>
				<div class="t m33 x1 h13 yae ff5 fs8 fc1 sc0 ls0 ws0">3.</div>
				<div class="t m33 x88 h13 yaf ff5 fs8 fc1 sc0 ls0 ws0">4.</div>
				<div class="t m33 x1 h13 yb0 ff5 fs8 fc1 sc0 ls0 ws0">5.</div>
				<div class="t m33 x88 h13 yb1 ff5 fs8 fc1 sc0 ls0 ws0">6.</div>
				<div class="t m33 x3d h13 yb2 ff5 fs8 fc1 sc0 ls0 ws0">7.</div>
				<div class="t m33 x3d h13 yb3 ff5 fs8 fc1 sc0 ls0 ws0">8.</div>
				<div class="t m33 x89 h12 yb4 ff6 fs7 fc1 sc0 ls0 ws0"><?php echo $b5; ?></div>
				<div class="t m33 x5e h12 yb5 ff5 fs7 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3f x8a h12 yb6 ff5 fs7 fc1 sc0 ls0 ws0">40</div>
				<div class="t m3f x85 h12 yb7 ff5 fs7 fc1 sc0 ls0 ws0">60</div>
				<div class="t m33 x8b h12 yb8 ff5 fs7 fc1 sc0 ls0 ws0">40</div>
				<div class="t m33 x8c h12 yb9 ff6 fs7 fc1 sc0 ls0 ws0"><?php echo $b4; ?></div>
				<div class="t m33 x8d h14 yba ff6 fs9 fc1 sc0 ls0 ws0">Порізка профілей на заготовки</div>
				<div class="t m33 x8d h14 ybb ff6 fs9 fc1 sc0 ls0 ws0">Порізка нащільника заднього</div>
				<div class="t m33 x8d h14 ybc ff6 fs9 fc1 sc0 ls0 ws0">Порізка нащільника переднього</div>
				<div class="t m33 x8e h13 yac ff6 fs8 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m33 x8f h13 ybd ff6 fs8 fc1 sc0 ls0 ws0">2шт.</div>
				<div class="t m33 x8f h13 ybe ff6 fs8 fc1 sc0 ls0 ws0">2шт.</div>
				<div class="t m33 x8e h13 ybf ff6 fs8 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m33 x8f h13 yc0 ff6 fs8 fc1 sc0 ls0 ws0">12шт.</div>
				<div class="t m33 x8f h13 yc1 ff6 fs8 fc1 sc0 ls0 ws0">4шт.</div>
				<div class="t m33 x8e h13 yc2 ff6 fs8 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m33 x8e h13 yc3 ff6 fs8 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m33 x90 h12 yc4 ff5 fs7 fc1 sc0 ls0 ws0">80</div>
				<div class="t m3f x91 h12 yc5 ff5 fs7 fc1 sc0 ls0 ws0">48</div>
				<div class="t m33 x92 h15 yc6 ff6 fsa fc4 sc0 ls0 ws0">Лист_4</div>
				<div class="t m33 x69 h12 yc7 ff6 fs7 fc1 sc0 ls0 ws0"><?php echo $b1; ?></div>
				<div class="t m33 x28 h12 yc8 ff5 fs7 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3f x85 h12 yc9 ff5 fs7 fc1 sc0 ls0 ws0">40</div>
				<div class="t m33 x86 h12 yca ff5 fs7 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3f x80 h12 ycb ff5 fs7 fc1 sc0 ls0 ws0">30</div>
				<div class="t m40 x93 h16 ycc ff5 fsb fc1 sc0 ls0 ws0">45</div>
				<div class="t m41 x94 h16 ycd ff5 fsb fc1 sc0 ls0 ws0">45</div>
				<div class="t m42 x95 h17 yce ff5 fsc fc1 sc0 ls0 ws0">45</div>
				<div class="t m40 x3a h16 ycf ff5 fsb fc1 sc0 ls0 ws0">45</div>
				<div class="t m43 x96 h18 yd0 ff5 fsd fc1 sc0 ls0 ws0">W*</div>
				<div class="t m44 x97 h19 yd1 ff5 fse fc1 sc0 ls0 ws0">W*</div>
				<div class="t m33 x98 h14 yd2 ff5 fs9 fc1 sc0 ls0 ws0">1.* <span class="_ _7"> </span> <span class="ff6"> Розмір визначити по місцю при зварювані рами воріт. </span></div>
			</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[0.000000,1.000000,-1.000000,0.000000,842.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "5")) : ?>
	<div id="pf5" class="pf w0 h0" data-page-no="5">
		<div class="pc pc5 w0 h0">
      <?php echo $image5; ?>
			<div class="t m6 x1 h6 yda ffa fs0 fc0 sc0 ls0 ws0">(**)</div>
			<div class="t m45 x9a h6 ydb ffa fs0 fc0 sc0 ls0 ws0"><?php echo $b5; ?> (висота розміщеня уловлювача верхнього</div>
			<div class="t m46 x9b h6 ydc ffa fs0 fc0 sc0 ls0 ws0">по висоті воріт)</div>
			<div class="t m1 x9c h6 ydd ffa fs0 fc0 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m47 x9d h6 yde ffa fs0 fc0 sc0 ls0 ws0"><?php echo $b4; ?> Висота розміщеня верхнього роліка</div>
			<div class="t m45 x9e h6 ydf ffa fs0 fc0 sc0 ls0 ws0">по нащільнику задньому</div>
			<div class="t m3 x9f h6 ye0 ffa fs0 fc0 sc0 ls0 ws0">95 <span class="_ _8"> </span> 95</div>
			<div class="t m7 x82 h6 ye1 ffa fs0 fc1 sc0 ls0 ws0">Відстань від фундаменту до верху воріт</div>
			<div class="t m12 xa0 h6 ye2 ffa fs0 fc1 sc0 ls0 ws0">R</div>
			<div class="t m12 xa1 h6 ye3 ffa fs0 fc1 sc0 ls0 ws0">S</div>
			<div class="t m2 xa2 h6 ye4 ffa fs0 fc1 sc0 ls0 ws0">Кріпленя нащільника переднього та заднього провести на закладні зварюваням.</div>
			<div class="t ma xa3 h6 ye4 ffa fs0 fc1 sc0 ls0 ws0">1.</div>
			<div class="t mb xa4 h6 ye5 ffa fs0 fc1 sc0 ls0 ws0">** Уловлювач нижній розмістити в складальному вигляді з стулкою воріт та роліками</div>
			<div class="t m29 xa3 h6 ye5 ffa fs0 fc1 sc0 ls0 ws0">2.</div>
			<div class="t m48 xa3 h6 ye6 ffa fs0 fc1 sc0 ls0 ws0">опорними в горізонтальній поверхні на 3мм-4мм вище роліка кінцевого.</div>
			<div class="t m3d xa3 h6 ye7 ffa fs0 fc1 sc0 ls0 ws0">3. Ролік верхній розмістити по висоті нащільника заднього.</div>
			<div class="t m20 xa5 h6 ye8 ffa fs0 fc1 sc0 ls0 ws0">10</div>
			<div class="t m29 xa0 h6 ye9 ffa fs0 fc1 sc0 ls0 ws0">11</div>
			<div class="t m1e xa6 h6 yea ffa fs0 fc1 sc0 ls0 ws0">W</div>
			<div class="t m2d xa0 h6 yeb ffa fs0 fc1 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m49 xa7 h6 yec ffa fs0 fc1 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m4a xa8 h6 yec ffa fs0 fc1 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m1e xa9 h7 yed ffa fs1 fc1 sc0 ls0 ws0">W</div>
			<div class="t m12 xaa h7 yee ffa fs1 fc1 sc0 ls0 ws0">R</div>
			<div class="t m12 xab h7 yef ffa fs1 fc1 sc0 ls0 ws0">S</div>
			<div class="t m4b xac h7 yf0 ffa fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ W</div>
			<div class="t m11 xad h7 yf1 ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m4a xae h6 yf2 ffa fs0 fc1 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m2b xaf h6 yf3 ffa fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m2f xb0 h6 yf4 ffa fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m31 xc h7 yf5 ffa fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ R</div>
			<div class="t m11 xb1 h7 yf6 ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m2b xb2 h6 yf7 ffa fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m4c x3c h6 yf8 ffa fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m4d xb3 h6 yf9 ffa fs0 fc1 sc0 ls0 ws0">Уловитель верхній</div>
			<div class="t m31 xb4 h7 yfa ffa fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ S</div>
			<div class="t m11 xb5 h7 yfb ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m23 xb6 h6 yfc ffa fs0 fc1 sc0 ls0 ws0">Уловитель нижній</div>
			<div class="t m2b xb7 h6 yfd ffa fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m4c xb8 h6 yfe ffa fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m4e xb9 h6 yff ffa fs0 fc0 sc0 ls0 ws0"><?php echo $r1; ?></div>
			<div class="t m21 xba h6 y100 ffa fs0 fc0 sc0 ls0 ws0"><?php echo $r2; ?></div>
			<div class="t m4f xbb h1f y101 ffa fs10 fc0 sc0 ls0 ws0">Встановити в міжцегляному</div>
			<div class="t m50 xbc h1f y102 ffa fs10 fc0 sc0 ls0 ws0">шву на відстані півцегли</div>
			<div class="t m51 xbd h1f y103 ffa fs10 fc0 sc0 ls0 ws0">відносно внутнішньої</div>
			<div class="t m52 xbe h1f y104 ffa fs10 fc0 sc0 ls0 ws0">поверхні стовпа.</div>
			<div class="t m53 xbf h7 y105 ffa fs1 fc0 sc0 ls0 ws0">Встановити в міжцегляному</div>
			<div class="t m54 xc0 h7 y106 ffa fs1 fc0 sc0 ls0 ws0">шву на відстані півцегли</div>
			<div class="t m55 xc1 h7 y107 ffa fs1 fc0 sc0 ls0 ws0">відносно внутрішньої</div>
			<div class="t m56 xc2 h7 y108 ffa fs1 fc0 sc0 ls0 ws0">поверхні стовпа.</div>
			<div class="t m14 x2d h7 y109 ffa fs1 fc1 sc0 ls0 ws0">АА <span class="_ _9"> </span> АА</div>
			<div class="t m57 xc3 h6 y10a ffa fs0 fc1 sc0 ls0 ws0">СЕЧЕНИЕ АА-АА</div>
			<div class="t m11 xc4 h6 y10b ffa fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m58 xbe h6 y10c ffa fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m11 xc0 h6 y10d ffa fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m58 xc5 h6 y10e ffa fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m11 x71 h6 y10f ffa fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m58 xc6 h6 y110 ffa fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m11 x71 h6 y111 ffa fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m58 xc6 h6 y112 ffa fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m59 xc7 h6 y113 ffa fs0 fc1 sc0 ls0 ws0">(4 місця)</div>
			<div class="t m5a xc8 h7 y114 ffa fs1 fc1 sc0 ls0 ws0">АА-АА</div>
			<div class="t m28 xc9 h7 y115 ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m14 xca h7 y116 ffa fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕАА <span class="_ _a"> </span> СЕЧЕНИЕАА</div>
			<div class="t m5 xcb h7 y117 ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 10</div>
			<div class="t m2b xcc h6 y118 ffa fs0 fc1 sc0 ls0 ws0">Закладна нащільника</div>
			<div class="t m32 xcd h6 y119 ffa fs0 fc0 sc0 ls0 ws0">Лист_5</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "6")) : ?>
	<div id="pf6" class="pf w0 h0" data-page-no="6">
		<div class="pc pc6 w0 h0">
      <?php echo $image6; ?>
			<div class="t m5c xd1 h7 y120 ffc fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ J</div>
			<div class="t m28 xc h7 y121 ffc fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m49 x37 h6 y122 ffc fs0 fc1 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m5d x7d h6 y123 ffc fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5e xd2 h6 y124 ffc fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m2d xd3 h6 y125 ffc fs0 fc1 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m5d xd4 h6 y126 ffc fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5e xd5 h6 y127 ffc fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m5d xd6 h6 y128 ffc fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5e xd7 h6 y129 ffc fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m5f xd8 h7 y12a ffc fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ L</div>
			<div class="t m28 x2 h7 y12b ffc fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m5d xb7 h6 y12c ffc fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5e xd9 h6 y12d ffc fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m31 xda h7 y12e ffc fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ Z</div>
			<div class="t m28 xdb h7 y12f ffc fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m23 xdc h6 y130 ffc fs0 fc1 sc0 ls0 ws0">Ролік</div>
			<div class="t m60 xd4 h6 y131 ffc fs0 fc1 sc0 ls0 ws0">верхній</div>
			<div class="t m3 xdd h6 y132 ffc fs0 fc0 sc0 ls0 ws0">300</div>
			<div class="t m9 xde h6 y132 ffc fs0 fc1 sc0 ls0 ws0">450</div>
			<div class="t m1c xdf h7 y133 ffc fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ I</div>
			<div class="t m28 xe0 h7 y134 ffc fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m61 xe1 h6 y135 ffc fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m2f x3c h6 y136 ffc fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m2d xb2 h6 y137 ffc fs0 fc1 sc0 ls0 ws0">Стовп</div>
			<div class="t m25 xe2 h6 y138 ffc fs0 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m62 xe3 h6 y139 ffc fs0 fc1 sc0 ls0 ws0">Рейка зубчата</div>
			<div class="t m4d xe4 h6 y13a ffc fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m63 xe5 h6 y13b ffc fs0 fc1 sc0 ls0 ws0">Кронштейн привода</div>
			<div class="t m2c x8b h6 y13c ffc fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m1e x28 h6 y13d ffc fs0 fc1 sc0 ls0 ws0">армований</div>
			<div class="t m64 xe6 h6 y13e ffc fs0 fc1 sc0 ls0 ws0">Арматура</div>
			<div class="t m65 xe7 h6 y13e ffc fs0 fc1 sc0 ls0 ws0">Ролік опорний</div>
			<div class="t m4d x6f h6 y13f ffc fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m25 x50 h6 y140 ffc fs0 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m66 xe8 h6 y141 ffc fs0 fc1 sc0 ls0 ws0">Кронштейн</div>
			<div class="t m27 xe9 h6 y13b ffc fs0 fc1 sc0 ls0 ws0">привода</div>
			<div class="t m67 xea h7 y142 ffc fs1 fc1 sc0 ls0 ws0">AE</div>
			<div class="t m67 xeb h7 y143 ffc fs1 fc1 sc0 ls0 ws0">AF</div>
			<div class="t m68 xec h7 y144 ffc fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ AD-AD</div>
			<div class="t m5 xec h7 y145 ffc fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 10</div>
			<div class="t m1c xed h7 y146 ffc fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ AE</div>
			<div class="t m28 xee h7 y147 ffc fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 2</div>
			<div class="t m69 x47 h6 y148 ffc fs0 fc1 sc0 ls0 ws0">Кінцевик магнітний</div>
			<div class="t m3 xdb h6 y149 ffc fs0 fc1 sc0 ls0 ws0">положеня-відкрито</div>
			<div class="t m6a xef h6 y14a ffc fs0 fc1 sc0 ls0 ws0">Рейка</div>
			<div class="t m6b xdf h6 y14b ffc fs0 fc1 sc0 ls0 ws0">зубчата</div>
			<div class="t m6c xf0 h6 y14c ffc fs0 fc1 sc0 ls0 ws0">Клепальна гайка</div>
			<div class="t m63 xf1 h6 y14d ffc fs0 fc1 sc0 ls0 ws0">(кріпленя зубчатої рейки)</div>
			<div class="t m1c xf2 h7 y14e ffc fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ AF</div>
			<div class="t m28 xf3 h7 y14f ffc fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 2</div>
			<div class="t m6d xf4 h6 y150 ffc fs0 fc1 sc0 ls0 ws0">Кінцевий ролік</div>
			<div class="t m23 xf5 h6 y151 ffc fs0 fc1 sc0 ls0 ws0">Профіль</div>
			<div class="t m6e xf6 h6 y152 ffc fs0 fc1 sc0 ls0 ws0">Прижимна планка</div>
			<div class="t m2 xf7 h6 y153 ffc fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5e x6c h6 y154 ffc fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m6f xf8 h6 y155 ffc fs0 fc1 sc0 ls0 ws0">Уловлювач</div>
			<div class="t m70 xf9 h6 y156 ffc fs0 fc1 sc0 ls0 ws0">нижній</div>
			<div class="t m61 xe9 h6 y157 ffc fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m4c xfa h6 y158 ffc fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m71 xfb h7 y159 ffc fs1 fc1 sc0 ls0 ws0">AB</div>
			<div class="t m3e x54 h7 y15a ffc fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ Z1</div>
			<div class="t m28 xfc h7 y15b ffc fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m2c xfd h6 y15c ffc fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m1e xfe h6 y15d ffc fs0 fc1 sc0 ls0 ws0">армований</div>
			<div class="t m65 xff h6 y15e ffc fs0 fc1 sc0 ls0 ws0">Ролік опорний</div>
			<div class="t m5d x100 h6 y15f ffc fs0 fc1 sc0 ls0 ws0">Заглушка задня</div>
			<div class="t m2d x101 h6 y160 ffc fs0 fc1 sc0 ls0 ws0">Стовп</div>
			<div class="t m61 x102 h6 y161 ffc fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m2f x103 h6 y162 ffc fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m72 x104 h7 y163 ffc fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ AB</div>
			<div class="t m73 x105 h7 y164 ffc fs1 fc1 sc0 ls0 ws0">МАСШТАБ 2 : 5</div>
			<div class="t m69 x1f h6 y165 ffc fs0 fc1 sc0 ls0 ws0">Кінцевик магнітний</div>
			<div class="t m23 x106 h6 y166 ffc fs0 fc1 sc0 ls0 ws0">положеня-закрито</div>
			<div class="t m6a x107 h6 y167 ffc fs0 fc1 sc0 ls0 ws0">Рейка</div>
			<div class="t m6b x106 h6 y168 ffc fs0 fc1 sc0 ls0 ws0">зубчата</div>
			<div class="t m4d x108 h6 y169 ffc fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m74 x109 h6 y16a ffc fs0 fc1 sc0 ls0 ws0">Шестерня</div>
			<div class="t m75 x88 h6 y16b ffc fs0 fc1 sc0 ls0 ws0">Кронштейн</div>
			<div class="t m27 x106 h6 y16c ffc fs0 fc1 sc0 ls0 ws0">привода</div>
			<div class="t m6c x10a h6 y165 ffc fs0 fc1 sc0 ls0 ws0">Клепальна гайка</div>
			<div class="t m63 x10b h6 y166 ffc fs0 fc1 sc0 ls0 ws0">(кріпленя зубчатої рейки)</div>
			<div class="t m2 x10c h6 y16d ffc fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5e x10d h6 y16e ffc fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m23 x10e h6 y16f ffc fs0 fc1 sc0 ls0 ws0">Ролік</div>
			<div class="t m3 x10f h6 y170 ffc fs0 fc1 sc0 ls0 ws0">опорний</div>
			<div class="t m76 xfd h7 y171 ffc fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ Q-Q</div>
			<div class="t m28 x110 h7 y172 ffc fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m11 x111 h6 y173 ffc fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m77 x112 h6 y174 ffc fs0 fc1 sc0 ls0 ws0">нащельника</div>
			<div class="t m78 x113 h6 y175 ffc fs0 fc1 sc0 ls0 ws0">Уловлювач</div>
			<div class="t m60 x114 h6 y176 ffc fs0 fc1 sc0 ls0 ws0">верхній</div>
			<div class="t m61 x6e h6 y177 ffc fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m4c x17 h6 y178 ffc fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m61 x115 h6 y177 ffc fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m4c x116 h6 y178 ffc fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m78 xc4 h6 y175 ffc fs0 fc1 sc0 ls0 ws0">Уловлювач</div>
			<div class="t m70 x117 h6 y176 ffc fs0 fc1 sc0 ls0 ws0">нижній</div>
			<div class="t m57 x118 h7 y179 ffc fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ F-F</div>
			<div class="t m28 x119 h7 y17a ffc fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m11 x9 h6 y17b ffc fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m77 x14 h6 y17c ffc fs0 fc1 sc0 ls0 ws0">нащельника</div>
			<div class="t m5d x11a h6 y17d ffc fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5e xba h6 y17e ffc fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m32 x11b h6 y17f ffc fs0 fc0 sc0 ls0 ws0">Лист_6</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif; ?>
</div>

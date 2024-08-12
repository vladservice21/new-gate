
<?php
  $image1 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/45deg/gate_images8/image1.svg");
  $image2 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/45deg/gate_images8/image2.svg");
  $image3 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/45deg/gate_images8/image3.svg");
  $image4 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/45deg/gate_images8/image4.svg");
  $image5 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/45deg/gate_images8/image5.svg");
  $image6 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/45deg/gate_images8/image6.svg");
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
  $c1 = round(($a - 140 - 9 * 30) / 10);
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

<link rel='stylesheet' id='pdf-stylesheet-css' href='/parts/styles/square/45deg/gate8.css' type='text/css' media='all' />
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
			<div class="t m14 x12 h3 y1b ff1 fs1 fc1 sc0 ls0 ws0">AD</div>
			<div class="t m14 x12 h3 y1c ff1 fs1 fc1 sc0 ls0 ws0">AD</div>
			<div class="t m15 x13 h4 y1d ff1 fs2 fc1 sc0 ls0 ws0">Заглушка</div>
			<div class="t m16 x14 h4 y1e ff1 fs2 fc1 sc0 ls0 ws0">задня</div>
			<div class="t m17 x15 h5 y1f ff1 fs3 fc1 sc0 ls0 ws0">Магнітний кінцевик</div>
			<div class="t m18 x16 h5 y20 ff1 fs3 fc1 sc0 ls0 ws0">положення-закрито</div>
			<div class="t m19 x17 h4 y21 ff1 fs2 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m1a x18 h4 y22 ff1 fs2 fc1 sc0 ls0 ws0">Магнітний кінцевик</div>
			<div class="t m1b x19 h4 y23 ff1 fs2 fc1 sc0 ls0 ws0">положення-відкрито</div>
			<div class="t m1c x1a h4 y24 ff1 fs2 fc2 sc0 ls0 ws0">Z1</div>
			<div class="t m1d x1b h3 y25 ff1 fs1 fc1 sc0 ls0 ws0">Z1</div>
			<div class="t m1e x1c h3 y26 ff1 fs1 fc1 sc0 ls0 ws0">ВИД</div>
			<div class="t mf x1d h3 y27 ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 29</div>
			<div class="t m1f x1e h2 y28 ff1 fs0 fc0 sc0 ls0 ws0">Лист_1</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "2")) : ?>
	<div id="pf2" class="pf w0 h0" data-page-no="2">
		<div class="pc pc2 w0 h0">
      <?php echo $image2; ?>
			<div class="t m3 x20 h7 y2a ff2 fs0 fc0 sc0 ls0 ws0">95</div>
			<div class="t m0 x21 h7 y2b ff2 fs0 fc0 sc0 ls0 ws0">100 <span class="_ _2"> </span> 100</div>
			<div class="t m9 x22 h7 y2c ff2 fs0 fc0 sc0 ls0 ws0">240</div>
			<div class="t m20 x23 h7 y2d ff2 fs0 fc0 sc0 ls0 ws0">500</div>
			<div class="t m1 x24 h7 y2e ff2 fs0 fc0 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m21 x25 h7 y2f ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $l1; ?></div>
			<div class="t m22 x26 h7 y30 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $b5; ?></div>
			<div class="t m6 x27 h7 y31 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $b4; ?></div>
			<div class="t m3 x28 h7 y32 ff2 fs0 fc0 sc0 ls0 ws0">95</div>
			<div class="t m23 x29 h7 y33 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a7; ?></div>
			<div class="t m24 x2a h7 y34 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a6; ?></div>
			<div class="t m14 x2b h8 y35 ff2 fs1 fc1 sc0 ls0 ws0">A <span class="_ _3"> </span> A</div>
			<div class="t m14 x2c h8 y36 ff2 fs1 fc1 sc0 ls0 ws0">N</div>
			<div class="t m24 x2d h7 y37 ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m25 x2e h7 y38 ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m26 x25 h7 y39 ff2 fs0 fc1 sc0 ls0 ws0">для роліка опорного</div>
			<div class="t m3 x2f h7 y3a ff2 fs0 fc1 sc0 ls0 ws0">переднього</div>
			<div class="t m24 x2d h7 y3b ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m25 x2e h7 y3c ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m26 x25 h7 y3d ff2 fs0 fc1 sc0 ls0 ws0">для роліка опорного</div>
			<div class="t m27 x30 h7 y3e ff2 fs0 fc1 sc0 ls0 ws0">заднього</div>
			<div class="t m24 x31 h7 y3f ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m25 x32 h7 y40 ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m2 x33 h7 y41 ff2 fs0 fc1 sc0 ls0 ws0">для кронштейна</div>
			<div class="t m28 x34 h7 y42 ff2 fs0 fc1 sc0 ls0 ws0">привода</div>
			<div class="t m29 x35 h7 y43 ff2 fs0 fc1 sc0 ls0 ws0">Ролік задній розмістити в складальному вигляді з рамою воріт</div>
			<div class="t mf x35 h7 y44 ff2 fs0 fc1 sc0 ls0 ws0">максимально віддаленим по довжині хвостовика воріт.</div>
			<div class="t m2a x36 h7 y45 ff2 fs0 fc1 sc0 ls0 ws0">11</div>
			<div class="t m21 x6 h7 y46 ff2 fs0 fc1 sc0 ls0 ws0">10</div>
			<div class="t m24 x37 h7 y47 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a5; ?></div>
			<div class="t m3 x38 h7 y48 ff2 fs0 fc0 sc0 ls0 ws0">95</div>
			<div class="t m2b x4 h7 y49 ff2 fs0 fc0 sc0 ls0 ws0">160</div>
			<div class="t m9 x39 h7 y4a ff2 fs0 fc0 sc0 ls0 ws0">250</div>
			<div class="t m3 x3a h7 y4b ff2 fs0 fc0 sc0 ls0 ws0">60</div>
			<div class="t m22 x3b h7 y4c ff2 fs0 fc0 sc0 ls0 ws0">40</div>
			<div class="t m2c x3c h8 y4d ff2 fs1 fc1 sc0 ls0 ws0">A-A МАСШТАБ1 : 16</div>
			<div class="t m2d x3d h7 y4e ff2 fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m2e x3e h7 y4f ff2 fs0 fc1 sc0 ls0 ws0">Стовп</div>
			<div class="t m2f xe h7 y50 ff2 fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m30 x3f h7 y51 ff2 fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m25 x40 h7 y52 ff2 fs0 fc1 sc0 ls0 ws0">(Розміщення швелера відносно стовпа)</div>
			<div class="t m24 x41 h7 y53 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a8; ?></div>
			<div class="t m20 x42 h7 y54 ff2 fs0 fc0 sc0 ls0 ws0">500</div>
			<div class="t m12 x43 h8 y55 ff2 fs1 fc1 sc0 ls0 ws0">O</div>
			<div class="t m31 x44 h8 y56 ff2 fs1 fc1 sc0 ls0 ws0">ВИД N</div>
			<div class="t m5 x45 h8 y57 ff2 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 16</div>
			<div class="t m0 x46 h7 y58 ff2 fs0 fc0 sc0 ls0 ws0">160</div>
			<div class="t m32 x47 h8 y59 ff2 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ O</div>
			<div class="t m29 x46 h8 y5a ff2 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m2d x48 h7 y5b ff2 fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m2f x49 h7 y5c ff2 fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m30 x4a h7 y5d ff2 fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m33 x4b h7 y5e ff2 fs0 fc0 sc0 ls0 ws0">Лист_2</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "3")) : ?>
	<div id="pf3" class="pf w4 hb" data-page-no="3">
		<div class="pc pc3 w4 hb">
      <?php echo $image3; ?>
			<div class="t m35 x4f hd y62 ff4 fs5 fc0 sc0 ls0 ws0"><?php echo $c1; ?> <span class="_ _4"> </span> <?php echo $c1; ?></div>
			<div class="t m36 x50 hd y63 ff4 fs5 fc0 sc0 ls0 ws0"><?php echo $d; ?> <span class="_ _5"> </span> <?php echo $d; ?></div>
			<div class="t m37 x51 hd y64 ff4 fs5 fc0 sc0 ls0 ws0"><?php echo $b1; ?></div>
			<div class="t m3 x52 hd y65 ff4 fs5 fc0 sc0 ls0 ws0"><?php echo $c; ?></div>
			<div class="t m35 x53 hd y66 ff4 fs5 fc0 sc0 ls0 ws0"><?php echo $c1; ?></div>
			<div class="t m20 x54 hd y67 ff4 fs5 fc0 sc0 ls0 ws0">60</div>
			<div class="t m36 x4e hd y68 ff4 fs5 fc0 sc0 ls0 ws0"><?php echo $b; ?></div>
			<div class="t m2 x55 hd y69 ff4 fs5 fc0 sc0 ls0 ws0"><?php echo $a; ?></div>
			<div class="t m35 x56 hd y6a ff4 fs5 fc0 sc0 ls0 ws0"><?php echo $c1; ?> <span class="_ _6"> </span> <?php echo $c1; ?></div>
			<div class="t m35 x57 hd y6b ff4 fs5 fc0 sc0 ls0 ws0"><?php echo $c1; ?></div>
			<div class="t m35 x58 hd y6c ff4 fs5 fc0 sc0 ls0 ws0"><?php echo $c1; ?></div>
			<div class="t m35 x59 hd y6d ff4 fs5 fc0 sc0 ls0 ws0"><?php echo $c1; ?> <span class="_ _7"> </span> <?php echo $c1; ?></div>
			<div class="t m35 x24 hd y6a ff4 fs5 fc0 sc0 ls0 ws0"><?php echo $c1; ?></div>
			<div class="t m38 x5a he y6e ff4 fs6 fc0 sc0 ls0 ws0"><?php echo $g1; ?></div>
			<div class="t m2c x5b hf y6f ff4 fs7 fc1 sc0 ls0 ws0">A</div>
			<div class="t m12 x5c hf y70 ff4 fs7 fc1 sc0 ls0 ws0">B</div>
			<div class="t m39 x5d hf y71 ff4 fs7 fc1 sc0 ls0 ws0">A1</div>
			<div class="t m1d x5e hf y72 ff4 fs7 fc1 sc0 ls0 ws0">В1</div>
			<div class="t m3a x5f h7 y73 ff4 fs0 fc1 sc0 ls0 ws0">1</div>
			<div class="t m3 x2e h7 y74 ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3 x60 h7 y75 ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3 x3b h7 y76 ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3 x5d h7 y77 ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t m12 x61 h7 y78 ff4 fs0 fc1 sc0 ls0 ws0">4</div>
			<div class="t m3 x62 h7 y79 ff4 fs0 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3 x62 h7 y7a ff4 fs0 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3 x63 h7 y7b ff4 fs0 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3 x63 h7 y7a ff4 fs0 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3 x64 h7 y7c ff4 fs0 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3 x64 h7 y7d ff4 fs0 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3 x65 h7 y7b ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m3 x66 h7 y7e ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m3b x67 hf y7f ff4 fs7 fc1 sc0 ls0 ws0">МЕСТНЫЙ A</div>
			<div class="t m11 x68 hf y80 ff4 fs7 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m3 x69 h7 y81 ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3 x6a h7 y82 ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3 x6b h7 y83 ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m3c x6c hf y84 ff4 fs7 fc1 sc0 ls0 ws0">МЕСТНЫЙ B</div>
			<div class="t m11 x6d hf y85 ff4 fs7 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m3a x6e h7 y86 ff4 fs0 fc1 sc0 ls0 ws0">1</div>
			<div class="t m3 x6f h7 y87 ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3 x70 h7 y88 ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3 x71 h7 y89 ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m3d x72 hf y8a ff4 fs7 fc1 sc0 ls0 ws0">МЕСТНЫЙ A1</div>
			<div class="t m11 x23 hf y8b ff4 fs7 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m3e x73 hf y8c ff4 fs7 fc1 sc0 ls0 ws0">дзеркальне відображеня ВидА</div>
			<div class="t m3 x74 h7 y8d ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3 x75 h7 y8e ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3 x76 h7 y8f ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m3f x77 hf y90 ff4 fs7 fc1 sc0 ls0 ws0">МЕСТНЫЙ В1</div>
			<div class="t m11 x78 hf y91 ff4 fs7 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m5 x79 hf y92 ff4 fs7 fc1 sc0 ls0 ws0">дзеркальне відображеня ВидВ</div>
			<div class="t m3a x1b h7 y93 ff4 fs0 fc1 sc0 ls0 ws0">1</div>
			<div class="t m3 x7a h7 y94 ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3 x7b h7 y95 ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3 x7c h7 y96 ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m33 x7d hd y97 ff4 fs5 fc0 sc0 ls0 ws0">Лист_3</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "4")) : ?>
	<div id="pf4" class="pf w6 h10" data-page-no="4">
		<div class="pc pc4 w6 h10">
      <?php echo $image4; ?>
			<div class="c x7e y99 w8 h12">
				<div class="t m34 x7f h13 y9a ff5 fs8 fc1 sc0 ls0 ws0"><?php echo $g1; ?></div>
				<div class="t m34 x80 h13 y9b ff5 fs8 fc1 sc0 ls0 ws0"><?php echo $c; ?></div>
				<div class="t m34 x81 h13 y9c ff5 fs8 fc1 sc0 ls0 ws0"><?php echo $d; ?></div>
				<div class="t m34 x82 h13 y9d ff5 fs8 fc1 sc0 ls0 ws0">20</div>
				<div class="t m40 x83 h13 y9e ff5 fs8 fc1 sc0 ls0 ws0">30</div>
				<div class="t m34 x82 h13 y9f ff5 fs8 fc1 sc0 ls0 ws0">20</div>
				<div class="t m40 x84 h13 ya0 ff5 fs8 fc1 sc0 ls0 ws0">30</div>
				<div class="t m34 x35 h13 ya1 ff5 fs8 fc1 sc0 ls0 ws0">20</div>
				<div class="t m40 x84 h13 ya2 ff5 fs8 fc1 sc0 ls0 ws0">30</div>
				<div class="t m34 x85 h13 ya3 ff5 fs8 fc1 sc0 ls0 ws0"><?php echo $a; ?></div>
				<div class="t m34 x6e h13 ya4 ff6 fs8 fc1 sc0 ls0 ws0">а(Ш)</div>
				<div class="t m40 x86 h13 ya5 ff6 fs8 fc1 sc0 ls0 ws0">в(В)</div>
				<div class="t m34 x29 h13 ya6 ff5 fs8 fc1 sc0 ls0 ws0">60</div>
				<div class="t m40 x87 h13 ya7 ff5 fs8 fc1 sc0 ls0 ws0">40</div>
				<div class="t m34 x88 h13 ya8 ff5 fs8 fc1 sc0 ls0 ws0">20</div>
				<div class="t m40 x82 h13 ya9 ff5 fs8 fc1 sc0 ls0 ws0">30</div>
				<div class="t m34 x89 h13 yaa ff5 fs8 fc1 sc0 ls0 ws0"><?php echo $a3; ?></div>
				<div class="t m34 xe h14 yab ff5 fs9 fc1 sc0 ls0 ws0">1.</div>
				<div class="t m34 x8a h14 yac ff5 fs9 fc1 sc0 ls0 ws0">2.</div>
				<div class="t m34 x8b h14 yad ff5 fs9 fc1 sc0 ls0 ws0">3.</div>
				<div class="t m34 x8a h14 yae ff5 fs9 fc1 sc0 ls0 ws0">4.</div>
				<div class="t m34 x8b h14 yaf ff5 fs9 fc1 sc0 ls0 ws0">5.</div>
				<div class="t m34 x8a h14 yb0 ff5 fs9 fc1 sc0 ls0 ws0">6.</div>
				<div class="t m34 xe h14 yb1 ff5 fs9 fc1 sc0 ls0 ws0">7.</div>
				<div class="t m34 xe h14 yb2 ff5 fs9 fc1 sc0 ls0 ws0">8.</div>
				<div class="t m34 x8c h13 yb3 ff6 fs8 fc1 sc0 ls0 ws0"><?php echo $b5; ?></div>
				<div class="t m34 x8d h13 yb4 ff5 fs8 fc1 sc0 ls0 ws0">60</div>
				<div class="t m40 x8e h13 yb5 ff5 fs8 fc1 sc0 ls0 ws0">40</div>
				<div class="t m40 x87 h13 yb6 ff5 fs8 fc1 sc0 ls0 ws0">60</div>
				<div class="t m34 x8f h13 yb7 ff5 fs8 fc1 sc0 ls0 ws0">40</div>
				<div class="t m34 x90 h13 yb8 ff6 fs8 fc1 sc0 ls0 ws0"><?php echo $b4; ?></div>
				<div class="t m34 x91 h15 yb9 ff6 fsa fc1 sc0 ls0 ws0">Порізка профілей на заготовки</div>
				<div class="t m34 x91 h15 yba ff6 fsa fc1 sc0 ls0 ws0">Порізка нащільника заднього</div>
				<div class="t m34 x91 h15 ybb ff6 fsa fc1 sc0 ls0 ws0">Порізка нащільника переднього</div>
				<div class="t m34 x57 h14 yab ff6 fs9 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m34 x92 h14 ybc ff6 fs9 fc1 sc0 ls0 ws0">2шт.</div>
				<div class="t m34 x92 h14 ybd ff6 fs9 fc1 sc0 ls0 ws0">2шт.</div>
				<div class="t m34 x57 h14 ybe ff6 fs9 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m34 x57 h14 ybf ff6 fs9 fc1 sc0 ls0 ws0">18шт.</div>
				<div class="t m34 x57 h14 yc0 ff6 fs9 fc1 sc0 ls0 ws0">4шт.</div>
				<div class="t m34 x57 h14 yc1 ff6 fs9 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m34 x57 h14 yc2 ff6 fs9 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m34 x93 h13 yc3 ff5 fs8 fc1 sc0 ls0 ws0">80</div>
				<div class="t m40 x94 h13 yc4 ff5 fs8 fc1 sc0 ls0 ws0">48</div>
				<div class="t m34 x95 h16 yc5 ff6 fsb fc4 sc0 ls0 ws0">Лист_4</div>
				<div class="t m34 x96 h13 yc6 ff6 fs8 fc1 sc0 ls0 ws0"><?php echo $b1; ?></div>
				<div class="t m34 x29 h13 yc7 ff5 fs8 fc1 sc0 ls0 ws0">60</div>
				<div class="t m40 x87 h13 yc8 ff5 fs8 fc1 sc0 ls0 ws0">40</div>
				<div class="t m34 x88 h13 yc9 ff5 fs8 fc1 sc0 ls0 ws0">20</div>
				<div class="t m40 x82 h13 yca ff5 fs8 fc1 sc0 ls0 ws0">30</div>
				<div class="t m41 x97 h17 ycb ff5 fsc fc1 sc0 ls0 ws0">45</div>
				<div class="t m42 x98 h17 ycc ff5 fsc fc1 sc0 ls0 ws0">45</div>
				<div class="t m43 x99 h18 ycd ff5 fsd fc1 sc0 ls0 ws0">45</div>
				<div class="t m41 x3b h17 yce ff5 fsc fc1 sc0 ls0 ws0">45</div>
				<div class="t m44 x9a h19 ycf ff5 fse fc1 sc0 ls0 ws0">W*</div>
				<div class="t m45 x9b h1a yd0 ff5 fsf fc1 sc0 ls0 ws0">W*</div>
				<div class="t m34 x51 h15 yd1 ff5 fsa fc1 sc0 ls0 ws0">1.* <span class="_ _8"> </span> <span class="ff6"> Розмір визначити по місцю при зварювані рами воріт. </span></div>
			</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[0.000000,1.000000,-1.000000,0.000000,842.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "5")) : ?>
	<div id="pf5" class="pf w0 h0" data-page-no="5">
		<div class="pc pc5 w0 h0">
      <?php echo $image5; ?>
			<div class="t m6 x8b h7 ydc ffc fs0 fc0 sc0 ls0 ws0">(**)</div>
			<div class="t m46 x9d h7 ydd ffc fs0 fc0 sc0 ls0 ws0"><?php echo $b5; ?> (висота розміщеня уловлювача верхнього</div>
			<div class="t m47 x9e h7 yde ffc fs0 fc0 sc0 ls0 ws0">по висоті воріт)</div>
			<div class="t m1 x9f h7 ydf ffc fs0 fc0 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m48 xa0 h7 ye0 ffc fs0 fc0 sc0 ls0 ws0"><?php echo $b4; ?> Висота розміщеня верхнього роліка</div>
			<div class="t m46 xa1 h7 ye1 ffc fs0 fc0 sc0 ls0 ws0">по нащільнику задньому</div>
			<div class="t m3 xa2 h7 ye2 ffc fs0 fc0 sc0 ls0 ws0">95 <span class="_ _9"> </span> 95</div>
			<div class="t m7 x84 h7 ye3 ffc fs0 fc1 sc0 ls0 ws0">Відстань від фундаменту до верху воріт</div>
			<div class="t m12 xa3 h7 ye4 ffc fs0 fc1 sc0 ls0 ws0">R</div>
			<div class="t m12 xa4 h7 ye5 ffc fs0 fc1 sc0 ls0 ws0">S</div>
			<div class="t m2 xa5 h7 ye6 ffc fs0 fc1 sc0 ls0 ws0">Кріпленя нащільника переднього та заднього провести на закладні зварюваням.</div>
			<div class="t ma xa6 h7 ye6 ffc fs0 fc1 sc0 ls0 ws0">1.</div>
			<div class="t mb xa7 h7 ye7 ffc fs0 fc1 sc0 ls0 ws0">** Уловлювач нижній розмістити в складальному вигляді з стулкою воріт та роліками</div>
			<div class="t m2a xa6 h7 ye7 ffc fs0 fc1 sc0 ls0 ws0">2.</div>
			<div class="t m49 xa6 h7 ye8 ffc fs0 fc1 sc0 ls0 ws0">опорними в горізонтальній поверхні на 3мм-4мм вище роліка кінцевого.</div>
			<div class="t m3e xa6 h7 ye9 ffc fs0 fc1 sc0 ls0 ws0">3. Ролік верхній розмістити по висоті нащільника заднього.</div>
			<div class="t m21 xa8 h7 yea ffc fs0 fc1 sc0 ls0 ws0">10</div>
			<div class="t m2a xa3 h7 yeb ffc fs0 fc1 sc0 ls0 ws0">11</div>
			<div class="t m1f x60 h7 yec ffc fs0 fc1 sc0 ls0 ws0">W</div>
			<div class="t m2e xa3 h7 yed ffc fs0 fc1 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m4a xa9 h7 yee ffc fs0 fc1 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m4b xaa h7 yee ffc fs0 fc1 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m1f xab h8 yef ffc fs1 fc1 sc0 ls0 ws0">W</div>
			<div class="t m12 xac h8 yf0 ffc fs1 fc1 sc0 ls0 ws0">R</div>
			<div class="t m12 xad h8 yf1 ffc fs1 fc1 sc0 ls0 ws0">S</div>
			<div class="t m4c xae h8 yf2 ffc fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ W</div>
			<div class="t m11 xaf h8 yf3 ffc fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m4b xb0 h7 yf4 ffc fs0 fc1 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m2c xb h7 yf5 ffc fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m30 xb1 h7 yf6 ffc fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m32 x38 h8 yf7 ffc fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ R</div>
			<div class="t m11 xb2 h8 yf8 ffc fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m2c xb3 h7 yf9 ffc fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m4d x3e h7 yfa ffc fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m4e xb4 h7 yfb ffc fs0 fc1 sc0 ls0 ws0">Уловитель верхній</div>
			<div class="t m32 xb5 h8 yfc ffc fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ S</div>
			<div class="t m11 xb6 h8 yfd ffc fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m24 xb7 h7 yfe ffc fs0 fc1 sc0 ls0 ws0">Уловитель нижній</div>
			<div class="t m2c xb8 h7 yff ffc fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m4d xb9 h7 y100 ffc fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m4f x1e h7 y101 ffc fs0 fc0 sc0 ls0 ws0"><?php echo $r1; ?></div>
			<div class="t m22 xba h7 y102 ffc fs0 fc0 sc0 ls0 ws0"><?php echo $r2; ?></div>
			<div class="t m50 xbb h21 y103 ffc fs11 fc0 sc0 ls0 ws0">Встановити в міжцегляному</div>
			<div class="t m51 xbc h21 y104 ffc fs11 fc0 sc0 ls0 ws0">шву на відстані півцегли</div>
			<div class="t m52 xbd h21 y105 ffc fs11 fc0 sc0 ls0 ws0">відносно внутнішньої</div>
			<div class="t m53 xbe h21 y106 ffc fs11 fc0 sc0 ls0 ws0">поверхні стовпа.</div>
			<div class="t m54 x74 h8 y107 ffc fs1 fc0 sc0 ls0 ws0">Встановити в міжцегляному</div>
			<div class="t m55 xbf h8 y108 ffc fs1 fc0 sc0 ls0 ws0">шву на відстані півцегли</div>
			<div class="t m56 xc0 h8 y109 ffc fs1 fc0 sc0 ls0 ws0">відносно внутрішньої</div>
			<div class="t m57 x52 h8 y10a ffc fs1 fc0 sc0 ls0 ws0">поверхні стовпа.</div>
			<div class="t m14 x2f h8 y10b ffc fs1 fc1 sc0 ls0 ws0">АА <span class="_ _a"> </span> АА</div>
			<div class="t m58 xc1 h7 y10c ffc fs0 fc1 sc0 ls0 ws0">СЕЧЕНИЕ АА-АА</div>
			<div class="t m11 xc2 h7 y10d ffc fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m59 xbe h7 y10e ffc fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m11 xbf h7 y10f ffc fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m59 xc3 h7 y110 ffc fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m11 x73 h7 y111 ffc fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m59 xc4 h7 y112 ffc fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m11 x73 h7 y113 ffc fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m59 xc4 h7 y114 ffc fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m5a xc5 h7 y115 ffc fs0 fc1 sc0 ls0 ws0">(4 місця)</div>
			<div class="t m17 xc6 h8 y116 ffc fs1 fc1 sc0 ls0 ws0">АА-АА</div>
			<div class="t m29 xc7 h8 y117 ffc fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m14 xc8 h8 y118 ffc fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕАА <span class="_ _b"> </span> СЕЧЕНИЕАА</div>
			<div class="t m5 xc9 h8 y119 ffc fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 10</div>
			<div class="t m2c xca h7 y11a ffc fs0 fc1 sc0 ls0 ws0">Закладна нащільника</div>
			<div class="t m33 xcb h7 y11b ffc fs0 fc0 sc0 ls0 ws0">Лист_5</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "6")) : ?>
	<div id="pf6" class="pf w0 h0" data-page-no="6">
		<div class="pc pc6 w0 h0">
      <?php echo $image6; ?>
			<div class="t m5c xcf h8 y122 ffe fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ J</div>
			<div class="t m29 xd0 h8 y123 ffe fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m4a x4 h7 y124 ffe fs0 fc1 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m5d x7f h7 y125 ffe fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5e xd1 h7 y126 ffe fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m2e xd2 h7 y127 ffe fs0 fc1 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m5d xd3 h7 y128 ffe fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5e xd4 h7 y129 ffe fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m5d xd5 h7 y12a ffe fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5e xd6 h7 y12b ffe fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m5f xd7 h8 y12c ffe fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ L</div>
			<div class="t m29 x85 h8 y12d ffe fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m5d xb8 h7 y12e ffe fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5e xd8 h7 y12f ffe fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m32 xd9 h8 y130 ffe fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ Z</div>
			<div class="t m29 xda h8 y131 ffe fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m24 xdb h7 y132 ffe fs0 fc1 sc0 ls0 ws0">Ролік</div>
			<div class="t m60 xd3 h7 y133 ffe fs0 fc1 sc0 ls0 ws0">верхній</div>
			<div class="t m3 xdc h7 y134 ffe fs0 fc0 sc0 ls0 ws0">300</div>
			<div class="t m9 xdd h7 y134 ffe fs0 fc1 sc0 ls0 ws0">450</div>
			<div class="t m1d xde h8 y135 ffe fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ I</div>
			<div class="t m29 xdf h8 y136 ffe fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m61 xe0 h7 y137 ffe fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m30 x3e h7 y138 ffe fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m2e xb3 h7 y139 ffe fs0 fc1 sc0 ls0 ws0">Стовп</div>
			<div class="t m26 xe1 h7 y13a ffe fs0 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m62 xe2 h7 y13b ffe fs0 fc1 sc0 ls0 ws0">Рейка зубчата</div>
			<div class="t m4e xe3 h7 y13c ffe fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m63 xe4 h7 y13d ffe fs0 fc1 sc0 ls0 ws0">Кронштейн привода</div>
			<div class="t m2d x8f h7 y13e ffe fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m1f x29 h7 y13f ffe fs0 fc1 sc0 ls0 ws0">армований</div>
			<div class="t m64 xe5 h7 y140 ffe fs0 fc1 sc0 ls0 ws0">Арматура</div>
			<div class="t m65 xe6 h7 y140 ffe fs0 fc1 sc0 ls0 ws0">Ролік опорний</div>
			<div class="t m4e xe7 h7 y141 ffe fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m26 xe8 h7 y142 ffe fs0 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m66 xe9 h7 y143 ffe fs0 fc1 sc0 ls0 ws0">Кронштейн</div>
			<div class="t m28 xea h7 y13d ffe fs0 fc1 sc0 ls0 ws0">привода</div>
			<div class="t m18 xeb h8 y144 ffe fs1 fc1 sc0 ls0 ws0">AE</div>
			<div class="t m18 xec h8 y145 ffe fs1 fc1 sc0 ls0 ws0">AF</div>
			<div class="t m67 xed h8 y146 ffe fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ AD-AD</div>
			<div class="t m5 xed h8 y147 ffe fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 10</div>
			<div class="t m1d xee h8 y148 ffe fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ AE</div>
			<div class="t m29 xef h8 y149 ffe fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 2</div>
			<div class="t m68 x48 h7 y14a ffe fs0 fc1 sc0 ls0 ws0">Кінцевик магнітний</div>
			<div class="t m3 xda h7 y14b ffe fs0 fc1 sc0 ls0 ws0">положеня-відкрито</div>
			<div class="t m69 xf0 h7 y14c ffe fs0 fc1 sc0 ls0 ws0">Рейка</div>
			<div class="t m6a xde h7 y14d ffe fs0 fc1 sc0 ls0 ws0">зубчата</div>
			<div class="t m6b xf1 h7 y14e ffe fs0 fc1 sc0 ls0 ws0">Клепальна гайка</div>
			<div class="t m63 xf2 h7 y14f ffe fs0 fc1 sc0 ls0 ws0">(кріпленя зубчатої рейки)</div>
			<div class="t m1d x71 h8 y150 ffe fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ AF</div>
			<div class="t m29 xf3 h8 y151 ffe fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 2</div>
			<div class="t m6c xf4 h7 y152 ffe fs0 fc1 sc0 ls0 ws0">Кінцевий ролік</div>
			<div class="t m24 xf5 h7 y153 ffe fs0 fc1 sc0 ls0 ws0">Профіль</div>
			<div class="t m6d xf6 h7 y154 ffe fs0 fc1 sc0 ls0 ws0">Прижимна планка</div>
			<div class="t m2 xf7 h7 y155 ffe fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5e x6d h7 y156 ffe fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m6e xf8 h7 y157 ffe fs0 fc1 sc0 ls0 ws0">Уловлювач</div>
			<div class="t m6f xf9 h7 y158 ffe fs0 fc1 sc0 ls0 ws0">нижній</div>
			<div class="t m61 xea h7 y159 ffe fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m4d xfa h7 y15a ffe fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m70 xfb h8 y15b ffe fs1 fc1 sc0 ls0 ws0">AB</div>
			<div class="t m3f xfc h8 y15c ffe fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ Z1</div>
			<div class="t m29 xfd h8 y15d ffe fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m2d xfe h7 y15e ffe fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m1f xff h7 y15f ffe fs0 fc1 sc0 ls0 ws0">армований</div>
			<div class="t m65 x100 h7 y160 ffe fs0 fc1 sc0 ls0 ws0">Ролік опорний</div>
			<div class="t m5d x101 h7 y161 ffe fs0 fc1 sc0 ls0 ws0">Заглушка задня</div>
			<div class="t m2e x102 h7 y162 ffe fs0 fc1 sc0 ls0 ws0">Стовп</div>
			<div class="t m61 x103 h7 y163 ffe fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m30 x104 h7 y164 ffe fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m71 x105 h8 y165 ffe fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ AB</div>
			<div class="t m72 x106 h8 y166 ffe fs1 fc1 sc0 ls0 ws0">МАСШТАБ 2 : 5</div>
			<div class="t m68 x1f h7 y167 ffe fs0 fc1 sc0 ls0 ws0">Кінцевик магнітний</div>
			<div class="t m24 x107 h7 y168 ffe fs0 fc1 sc0 ls0 ws0">положеня-закрито</div>
			<div class="t m69 x108 h7 y169 ffe fs0 fc1 sc0 ls0 ws0">Рейка</div>
			<div class="t m6a x107 h7 y16a ffe fs0 fc1 sc0 ls0 ws0">зубчата</div>
			<div class="t m4e x109 h7 y16b ffe fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m73 x10a h7 y16c ffe fs0 fc1 sc0 ls0 ws0">Шестерня</div>
			<div class="t m74 x8a h7 y16d ffe fs0 fc1 sc0 ls0 ws0">Кронштейн</div>
			<div class="t m28 x107 h7 y16e ffe fs0 fc1 sc0 ls0 ws0">привода</div>
			<div class="t m6b x10b h7 y167 ffe fs0 fc1 sc0 ls0 ws0">Клепальна гайка</div>
			<div class="t m63 x10c h7 y168 ffe fs0 fc1 sc0 ls0 ws0">(кріпленя зубчатої рейки)</div>
			<div class="t m2 x10d h7 y16f ffe fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5e x69 h7 y170 ffe fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m24 x96 h7 y171 ffe fs0 fc1 sc0 ls0 ws0">Ролік</div>
			<div class="t m3 x10e h7 y172 ffe fs0 fc1 sc0 ls0 ws0">опорний</div>
			<div class="t m75 xfe h8 y173 ffe fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ Q-Q</div>
			<div class="t m29 x10f h8 y174 ffe fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m11 x110 h7 y175 ffe fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m76 xb h7 y176 ffe fs0 fc1 sc0 ls0 ws0">нащельника</div>
			<div class="t m77 x111 h7 y177 ffe fs0 fc1 sc0 ls0 ws0">Уловлювач</div>
			<div class="t m60 x112 h7 y178 ffe fs0 fc1 sc0 ls0 ws0">верхній</div>
			<div class="t m61 x70 h7 y179 ffe fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m4d x113 h7 y17a ffe fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m61 x114 h7 y179 ffe fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m4d x115 h7 y17a ffe fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m77 xc2 h7 y177 ffe fs0 fc1 sc0 ls0 ws0">Уловлювач</div>
			<div class="t m6f x16 h7 y178 ffe fs0 fc1 sc0 ls0 ws0">нижній</div>
			<div class="t m58 x116 h8 y17b ffe fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ F-F</div>
			<div class="t m29 x117 h8 y17c ffe fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m11 x118 h7 y17d ffe fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m76 x119 h7 y17e ffe fs0 fc1 sc0 ls0 ws0">нащельника</div>
			<div class="t m5d x11a h7 y17f ffe fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5e xba h7 y180 ffe fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m33 x11b h7 y181 ffe fs0 fc0 sc0 ls0 ws0">Лист_6</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif; ?>
</div>

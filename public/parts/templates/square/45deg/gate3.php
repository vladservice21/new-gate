
<?php
  $image1 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/45deg/gate_images3/image1.svg");
  $image2 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/45deg/gate_images3/image2.svg");
  $image3 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/45deg/gate_images3/image3.svg");
  $image4 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/45deg/gate_images3/image4.svg");
  $image5 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/45deg/gate_images3/image5.svg");
  $image6 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/45deg/gate_images3/image6.svg");
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
  $c1 = round(($a - 140 - 4 * 30) / 5);
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

<link rel='stylesheet' id='pdf-stylesheet-css' href='/parts/styles/square/45deg/gate3.css' type='text/css' media='all' />
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
			<div class="t mf x1e h3 y27 ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 20</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "2")) : ?>
	<div id="pf2" class="pf w0 h0" data-page-no="2">
		<div class="pc pc2 w0 h0">
      <?php echo $image2; ?>
			<div class="t m3 x20 h6 y29 ff2 fs0 fc0 sc0 ls0 ws0">95</div>
			<div class="t m0 x21 h6 y2a ff2 fs0 fc0 sc0 ls0 ws0">100 <span class="_ _2"> </span> 100</div>
			<div class="t m9 x22 h6 y2b ff2 fs0 fc0 sc0 ls0 ws0">240</div>
			<div class="t m1e x23 h6 y2c ff2 fs0 fc0 sc0 ls0 ws0">500</div>
			<div class="t m1 x24 h6 y2d ff2 fs0 fc0 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m1f x25 h6 y2e ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $l1; ?></div>
			<div class="t m20 x26 h6 y2f ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $b5; ?></div>
			<div class="t m6 x27 h6 y30 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $b4; ?></div>
			<div class="t m3 x28 h6 y31 ff2 fs0 fc0 sc0 ls0 ws0">95</div>
			<div class="t m21 x29 h6 y32 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a7; ?></div>
			<div class="t m22 x2a h6 y33 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a6; ?></div>
			<div class="t m14 x2b h7 y34 ff2 fs1 fc1 sc0 ls0 ws0">A <span class="_ _3"> </span> A</div>
			<div class="t m14 x2c h7 y35 ff2 fs1 fc1 sc0 ls0 ws0">N</div>
			<div class="t m22 x2d h6 y36 ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m23 x2e h6 y37 ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m24 x25 h6 y38 ff2 fs0 fc1 sc0 ls0 ws0">для роліка опорного</div>
			<div class="t m3 x2f h6 y39 ff2 fs0 fc1 sc0 ls0 ws0">переднього</div>
			<div class="t m22 x2d h6 y3a ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m23 x2e h6 y3b ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m24 x25 h6 y3c ff2 fs0 fc1 sc0 ls0 ws0">для роліка опорного</div>
			<div class="t m25 x30 h6 y3d ff2 fs0 fc1 sc0 ls0 ws0">заднього</div>
			<div class="t m22 x31 h6 y3e ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m23 x32 h6 y3f ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m2 x33 h6 y40 ff2 fs0 fc1 sc0 ls0 ws0">для кронштейна</div>
			<div class="t m26 x34 h6 y41 ff2 fs0 fc1 sc0 ls0 ws0">привода</div>
			<div class="t m27 x35 h6 y42 ff2 fs0 fc1 sc0 ls0 ws0">Ролік задній розмістити в складальному вигляді з рамою воріт</div>
			<div class="t mf x35 h6 y43 ff2 fs0 fc1 sc0 ls0 ws0">максимально віддаленим по довжині хвостовика воріт.</div>
			<div class="t m28 x36 h6 y44 ff2 fs0 fc1 sc0 ls0 ws0">11</div>
			<div class="t m1f x37 h6 y45 ff2 fs0 fc1 sc0 ls0 ws0">10</div>
			<div class="t m22 x38 h6 y46 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a5; ?></div>
			<div class="t m3 x39 h6 y47 ff2 fs0 fc0 sc0 ls0 ws0">95</div>
			<div class="t m29 x3a h6 y48 ff2 fs0 fc0 sc0 ls0 ws0">160</div>
			<div class="t m9 x3b h6 y49 ff2 fs0 fc0 sc0 ls0 ws0">250</div>
			<div class="t m3 x3c h6 y4a ff2 fs0 fc0 sc0 ls0 ws0">60</div>
			<div class="t m20 x3d h6 y4b ff2 fs0 fc0 sc0 ls0 ws0">40</div>
			<div class="t m2a x3e h7 y4c ff2 fs1 fc1 sc0 ls0 ws0">A-A МАСШТАБ1 : 16</div>
			<div class="t m2b x3f h6 y4d ff2 fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m2c x40 h6 y4e ff2 fs0 fc1 sc0 ls0 ws0">Стовп</div>
			<div class="t m2d x41 h6 y4f ff2 fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m2e x42 h6 y50 ff2 fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m23 x43 h6 y51 ff2 fs0 fc1 sc0 ls0 ws0">(Розміщення швелера відносно стовпа)</div>
			<div class="t m22 x44 h6 y52 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a8; ?></div>
			<div class="t m1e x45 h6 y53 ff2 fs0 fc0 sc0 ls0 ws0">500</div>
			<div class="t m12 x46 h7 y54 ff2 fs1 fc1 sc0 ls0 ws0">O</div>
			<div class="t m2f x47 h7 y55 ff2 fs1 fc1 sc0 ls0 ws0">ВИД N</div>
			<div class="t m5 x48 h7 y56 ff2 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 16</div>
			<div class="t m0 x49 h6 y57 ff2 fs0 fc0 sc0 ls0 ws0">160</div>
			<div class="t m30 x4a h7 y58 ff2 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ O</div>
			<div class="t m27 x49 h7 y59 ff2 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m2b x4b h6 y5a ff2 fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m2d x4c h6 y5b ff2 fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m2e x4d h6 y5c ff2 fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m31 x4e h6 y5d ff2 fs0 fc0 sc0 ls0 ws0">Лист_2</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "3")) : ?>
	<div id="pf3" class="pf w4 ha" data-page-no="3">
		<div class="pc pc3 w4 ha">
      <?php echo $image3; ?>
			<div class="t m33 x52 hc y61 ff4 fs4 fc0 sc0 ls0 ws0"><?php echo $c1; ?></div>
			<div class="t m33 x53 hc y62 ff4 fs4 fc0 sc0 ls0 ws0"><?php echo $c1; ?></div>
			<div class="t m34 x54 hc y63 ff4 fs4 fc0 sc0 ls0 ws0"><?php echo $d; ?> <span class="_ _4"> </span> <?php echo $d; ?></div>
			<div class="t m35 xe hc y64 ff4 fs4 fc0 sc0 ls0 ws0"><?php echo $b1; ?></div>
			<div class="t m3 x55 hc y65 ff4 fs4 fc0 sc0 ls0 ws0"><?php echo $c; ?></div>
			<div class="t m33 x56 hc y66 ff4 fs4 fc0 sc0 ls0 ws0"><?php echo $c1; ?></div>
			<div class="t m1e x57 hc y67 ff4 fs4 fc0 sc0 ls0 ws0">60</div>
			<div class="t m34 x51 hc y68 ff4 fs4 fc0 sc0 ls0 ws0"><?php echo $b; ?></div>
			<div class="t m2 x58 hc y69 ff4 fs4 fc0 sc0 ls0 ws0"><?php echo $a; ?></div>
			<div class="t m33 x59 hc y6a ff4 fs4 fc0 sc0 ls0 ws0"><?php echo $c1; ?></div>
			<div class="t m33 x5a hc y6b ff4 fs4 fc0 sc0 ls0 ws0"><?php echo $c1; ?></div>
			<div class="t m36 x5b hd y6c ff4 fs5 fc0 sc0 ls0 ws0"><?php echo $g1; ?></div>
			<div class="t m2a x36 he y6d ff4 fs6 fc1 sc0 ls0 ws0">A</div>
			<div class="t m12 x5c he y6e ff4 fs6 fc1 sc0 ls0 ws0">B</div>
			<div class="t m37 x5d he y6f ff4 fs6 fc1 sc0 ls0 ws0">A1</div>
			<div class="t m1c x5e he y70 ff4 fs6 fc1 sc0 ls0 ws0">В1</div>
			<div class="t m38 x5f h6 y71 ff4 fs0 fc1 sc0 ls0 ws0">1</div>
			<div class="t m3 x60 h6 y72 ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3 x61 h6 y73 ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3 x62 h6 y74 ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3 x63 h6 y75 ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t m12 x64 h6 y76 ff4 fs0 fc1 sc0 ls0 ws0">4</div>
			<div class="t m3 x65 h6 y77 ff4 fs0 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3 x66 h6 y78 ff4 fs0 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3 x67 h6 y79 ff4 fs0 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3 x67 h6 y7a ff4 fs0 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3 x68 h6 y7b ff4 fs0 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3 x68 h6 y7a ff4 fs0 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3 x69 h6 y7c ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m3 x53 h6 y7d ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m39 x6a he y7e ff4 fs6 fc1 sc0 ls0 ws0">МЕСТНЫЙ A</div>
			<div class="t m11 x6b he y7f ff4 fs6 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m3 x6c h6 y80 ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3 x6a h6 y81 ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3 x6d h6 y82 ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m3a x6e he y83 ff4 fs6 fc1 sc0 ls0 ws0">МЕСТНЫЙ B</div>
			<div class="t m11 x6f he y84 ff4 fs6 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m38 x70 h6 y85 ff4 fs0 fc1 sc0 ls0 ws0">1</div>
			<div class="t m3 x2e h6 y86 ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3 x71 h6 y87 ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3 x72 h6 y88 ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m3b x73 he y89 ff4 fs6 fc1 sc0 ls0 ws0">МЕСТНЫЙ A1</div>
			<div class="t m11 x23 he y8a ff4 fs6 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m3c x74 he y8b ff4 fs6 fc1 sc0 ls0 ws0">дзеркальне відображеня ВидА</div>
			<div class="t m3 x75 h6 y8c ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3 x76 h6 y8d ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3 x77 h6 y8e ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m3d x78 he y8f ff4 fs6 fc1 sc0 ls0 ws0">МЕСТНЫЙ В1</div>
			<div class="t m11 x79 he y90 ff4 fs6 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m5 x7a he y91 ff4 fs6 fc1 sc0 ls0 ws0">дзеркальне відображеня ВидВ</div>
			<div class="t m38 x7b h6 y92 ff4 fs0 fc1 sc0 ls0 ws0">1</div>
			<div class="t m3 x7c h6 y93 ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3 x7d h6 y94 ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3 x7e h6 y95 ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m31 x7f hc y96 ff4 fs4 fc0 sc0 ls0 ws0">Лист_3</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "4")) : ?>
	<div id="pf4" class="pf w6 hf" data-page-no="4">
		<div class="pc pc4 w6 hf">
      <?php echo $image4; ?>
			<div class="c x80 y98 w8 h11">
				<div class="t m32 x81 h12 y99 ff5 fs7 fc1 sc0 ls0 ws0"><?php echo $g1; ?></div>
				<div class="t m32 x82 h12 y9a ff5 fs7 fc1 sc0 ls0 ws0"><?php echo $c; ?></div>
				<div class="t m32 x83 h12 y9b ff5 fs7 fc1 sc0 ls0 ws0"><?php echo $d; ?></div>
				<div class="t m32 x84 h12 y9c ff5 fs7 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3e x85 h12 y9d ff5 fs7 fc1 sc0 ls0 ws0">30</div>
				<div class="t m32 x84 h12 y9e ff5 fs7 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3e x86 h12 y9f ff5 fs7 fc1 sc0 ls0 ws0">30</div>
				<div class="t m32 x35 h12 ya0 ff5 fs7 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3e x86 h12 ya1 ff5 fs7 fc1 sc0 ls0 ws0">30</div>
				<div class="t m32 x87 h12 ya2 ff5 fs7 fc1 sc0 ls0 ws0"><?php echo $a; ?></div>
				<div class="t m32 x88 h12 ya3 ff6 fs7 fc1 sc0 ls0 ws0">а(Ш)</div>
				<div class="t m3e x89 h12 ya4 ff6 fs7 fc1 sc0 ls0 ws0">в(В)</div>
				<div class="t m32 x29 h12 ya5 ff5 fs7 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3e x8a h12 ya6 ff5 fs7 fc1 sc0 ls0 ws0">40</div>
				<div class="t m32 x8b h12 ya7 ff5 fs7 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3e x84 h12 ya8 ff5 fs7 fc1 sc0 ls0 ws0">30</div>
				<div class="t m32 x8c h12 ya9 ff5 fs7 fc1 sc0 ls0 ws0"><?php echo $a3; ?></div>
				<div class="t m32 x41 h13 yaa ff5 fs8 fc1 sc0 ls0 ws0">1.</div>
				<div class="t m32 x8d h13 yab ff5 fs8 fc1 sc0 ls0 ws0">2.</div>
				<div class="t m32 x8e h13 yac ff5 fs8 fc1 sc0 ls0 ws0">3.</div>
				<div class="t m32 x8d h13 yad ff5 fs8 fc1 sc0 ls0 ws0">4.</div>
				<div class="t m32 x8e h13 yae ff5 fs8 fc1 sc0 ls0 ws0">5.</div>
				<div class="t m32 x8d h13 yaf ff5 fs8 fc1 sc0 ls0 ws0">6.</div>
				<div class="t m32 x41 h13 yb0 ff5 fs8 fc1 sc0 ls0 ws0">7.</div>
				<div class="t m32 x41 h13 yb1 ff5 fs8 fc1 sc0 ls0 ws0">8.</div>
				<div class="t m32 x8f h12 yb2 ff6 fs7 fc1 sc0 ls0 ws0"><?php echo $b5; ?></div>
				<div class="t m32 x90 h12 yb3 ff5 fs7 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3e x91 h12 yb4 ff5 fs7 fc1 sc0 ls0 ws0">40</div>
				<div class="t m3e x8a h12 yb5 ff5 fs7 fc1 sc0 ls0 ws0">60</div>
				<div class="t m32 x92 h12 yb6 ff5 fs7 fc1 sc0 ls0 ws0">40</div>
				<div class="t m32 x93 h12 yb7 ff6 fs7 fc1 sc0 ls0 ws0"><?php echo $b4; ?></div>
				<div class="t m32 x6d h14 yb8 ff6 fs9 fc1 sc0 ls0 ws0">Порізка профілей на заготовки</div>
				<div class="t m32 x6d h14 yb9 ff6 fs9 fc1 sc0 ls0 ws0">Порізка нащільника заднього</div>
				<div class="t m32 x6d h14 yba ff6 fs9 fc1 sc0 ls0 ws0">Порізка нащільника переднього</div>
				<div class="t m32 x94 h13 yaa ff6 fs8 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m32 x95 h13 ybb ff6 fs8 fc1 sc0 ls0 ws0">2шт.</div>
				<div class="t m32 x95 h13 ybc ff6 fs8 fc1 sc0 ls0 ws0">2шт.</div>
				<div class="t m32 x94 h13 ybd ff6 fs8 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m32 x95 h13 ybe ff6 fs8 fc1 sc0 ls0 ws0">8шт.</div>
				<div class="t m32 x95 h13 ybf ff6 fs8 fc1 sc0 ls0 ws0">4шт.</div>
				<div class="t m32 x94 h13 yc0 ff6 fs8 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m32 x94 h13 yc1 ff6 fs8 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m32 x59 h12 yc2 ff5 fs7 fc1 sc0 ls0 ws0">80</div>
				<div class="t m3e x96 h12 yc3 ff5 fs7 fc1 sc0 ls0 ws0">48</div>
				<div class="t m32 x97 h15 yc4 ff6 fsa fc4 sc0 ls0 ws0">Лист_4</div>
				<div class="t m32 x98 h12 yc5 ff6 fs7 fc1 sc0 ls0 ws0"><?php echo $b1; ?></div>
				<div class="t m32 x29 h12 yc6 ff5 fs7 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3e x8a h12 yc7 ff5 fs7 fc1 sc0 ls0 ws0">40</div>
				<div class="t m32 x8b h12 yc8 ff5 fs7 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3e x84 h12 yc9 ff5 fs7 fc1 sc0 ls0 ws0">30</div>
				<div class="t m3f x99 h16 yca ff5 fsb fc1 sc0 ls0 ws0">45</div>
				<div class="t m40 x9a h16 ycb ff5 fsb fc1 sc0 ls0 ws0">45</div>
				<div class="t m41 x9b h17 ycc ff5 fsc fc1 sc0 ls0 ws0">45</div>
				<div class="t m3f x3d h16 ycd ff5 fsb fc1 sc0 ls0 ws0">45</div>
				<div class="t m42 x9c h18 yce ff5 fsd fc1 sc0 ls0 ws0">W*</div>
				<div class="t m43 x9d h19 ycf ff5 fse fc1 sc0 ls0 ws0">W*</div>
				<div class="t m32 x9e h14 yd0 ff5 fs9 fc1 sc0 ls0 ws0">1.* <span class="_ _5"> </span> <span class="ff6"> Розмір визначити по місцю при зварювані рами воріт. </span></div>
			</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[0.000000,1.000000,-1.000000,0.000000,842.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "5")) : ?>
	<div id="pf5" class="pf w0 h0" data-page-no="5">
		<div class="pc pc5 w0 h0">
      <?php echo $image5; ?>
			<div class="t m6 x8e h6 yd4 ff8 fs0 fc0 sc0 ls0 ws0">(**)</div>
			<div class="t m44 x9f h6 yd5 ff8 fs0 fc0 sc0 ls0 ws0"><?php echo $b5; ?> (висота розміщеня уловлювача верхнього</div>
			<div class="t m45 xa0 h6 yd6 ff8 fs0 fc0 sc0 ls0 ws0">по висоті воріт)</div>
			<div class="t m1 xa1 h6 yd7 ff8 fs0 fc0 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m46 xa2 h6 yd8 ff8 fs0 fc0 sc0 ls0 ws0"><?php echo $b4; ?> Висота розміщеня верхнього роліка</div>
			<div class="t m44 xa3 h6 yd9 ff8 fs0 fc0 sc0 ls0 ws0">по нащільнику задньому</div>
			<div class="t m3 x5c h6 yda ff8 fs0 fc0 sc0 ls0 ws0">95 <span class="_ _6"> </span> 95</div>
			<div class="t m7 x86 h6 ydb ff8 fs0 fc1 sc0 ls0 ws0">Відстань від фундаменту до верху воріт</div>
			<div class="t m12 xa4 h6 ydc ff8 fs0 fc1 sc0 ls0 ws0">R</div>
			<div class="t m12 xa5 h6 ydd ff8 fs0 fc1 sc0 ls0 ws0">S</div>
			<div class="t m2 xa6 h6 yde ff8 fs0 fc1 sc0 ls0 ws0">Кріпленя нащільника переднього та заднього провести на закладні зварюваням.</div>
			<div class="t ma xa7 h6 yde ff8 fs0 fc1 sc0 ls0 ws0">1.</div>
			<div class="t mb xa8 h6 ydf ff8 fs0 fc1 sc0 ls0 ws0">** Уловлювач нижній розмістити в складальному вигляді з стулкою воріт та роліками</div>
			<div class="t m28 xa7 h6 ydf ff8 fs0 fc1 sc0 ls0 ws0">2.</div>
			<div class="t m47 xa7 h6 ye0 ff8 fs0 fc1 sc0 ls0 ws0">опорними в горізонтальній поверхні на 3мм-4мм вище роліка кінцевого.</div>
			<div class="t m3c xa7 h6 ye1 ff8 fs0 fc1 sc0 ls0 ws0">3. Ролік верхній розмістити по висоті нащільника заднього.</div>
			<div class="t m1f xa9 h6 ye2 ff8 fs0 fc1 sc0 ls0 ws0">10</div>
			<div class="t m28 xa4 h6 ye3 ff8 fs0 fc1 sc0 ls0 ws0">11</div>
			<div class="t m48 xaa h6 ye4 ff8 fs0 fc1 sc0 ls0 ws0">W</div>
			<div class="t m2c xa4 h6 ye5 ff8 fs0 fc1 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m49 xab h6 ye6 ff8 fs0 fc1 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m4a xac h6 ye6 ff8 fs0 fc1 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m48 xad h7 ye7 ff8 fs1 fc1 sc0 ls0 ws0">W</div>
			<div class="t m12 xae h7 ye8 ff8 fs1 fc1 sc0 ls0 ws0">R</div>
			<div class="t m12 xaf h7 ye9 ff8 fs1 fc1 sc0 ls0 ws0">S</div>
			<div class="t m4b xb0 h7 yea ff8 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ W</div>
			<div class="t m11 xb1 h7 yeb ff8 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m4a xb2 h6 yec ff8 fs0 fc1 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m2a xb3 h6 yed ff8 fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m2e xb4 h6 yee ff8 fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m30 x39 h7 yef ff8 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ R</div>
			<div class="t m11 xb5 h7 yf0 ff8 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m2a xb6 h6 yf1 ff8 fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m4c x40 h6 yf2 ff8 fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m4d x57 h6 yf3 ff8 fs0 fc1 sc0 ls0 ws0">Уловитель верхній</div>
			<div class="t m30 xb7 h7 yf4 ff8 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ S</div>
			<div class="t m11 x18 h7 yf5 ff8 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m22 xb8 h6 yf6 ff8 fs0 fc1 sc0 ls0 ws0">Уловитель нижній</div>
			<div class="t m2a xb9 h6 yf7 ff8 fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m4c xba h6 yf8 ff8 fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m4e xbb h6 yf9 ff8 fs0 fc0 sc0 ls0 ws0"><?php echo $r1; ?></div>
			<div class="t m20 xbc h6 yfa ff8 fs0 fc0 sc0 ls0 ws0"><?php echo $r2; ?></div>
			<div class="t m4f xbd h1d yfb ff8 fs10 fc0 sc0 ls0 ws0">Встановити в міжцегляному</div>
			<div class="t m50 xbe h1d yfc ff8 fs10 fc0 sc0 ls0 ws0">шву на відстані півцегли</div>
			<div class="t m51 xbf h1d yfd ff8 fs10 fc0 sc0 ls0 ws0">відносно внутнішньої</div>
			<div class="t m52 xc0 h1d yfe ff8 fs10 fc0 sc0 ls0 ws0">поверхні стовпа.</div>
			<div class="t m53 x17 h7 yff ff8 fs1 fc0 sc0 ls0 ws0">Встановити в міжцегляному</div>
			<div class="t m54 xc1 h7 y100 ff8 fs1 fc0 sc0 ls0 ws0">шву на відстані півцегли</div>
			<div class="t m55 xc2 h7 y101 ff8 fs1 fc0 sc0 ls0 ws0">відносно внутрішньої</div>
			<div class="t m56 xc3 h7 y102 ff8 fs1 fc0 sc0 ls0 ws0">поверхні стовпа.</div>
			<div class="t m14 x2f h7 y103 ff8 fs1 fc1 sc0 ls0 ws0">АА <span class="_ _7"> </span> АА</div>
			<div class="t m57 xc4 h6 y104 ff8 fs0 fc1 sc0 ls0 ws0">СЕЧЕНИЕ АА-АА</div>
			<div class="t m11 xc5 h6 y105 ff8 fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m58 xc0 h6 y106 ff8 fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m11 xc1 h6 y107 ff8 fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m58 x16 h6 y108 ff8 fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m11 x74 h6 y109 ff8 fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m58 xc6 h6 y10a ff8 fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m11 x74 h6 y10b ff8 fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m58 xc6 h6 y10c ff8 fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m59 xc7 h6 y10d ff8 fs0 fc1 sc0 ls0 ws0">(4 місця)</div>
			<div class="t m5a xc8 h7 y10e ff8 fs1 fc1 sc0 ls0 ws0">АА-АА</div>
			<div class="t m27 xc9 h7 y10f ff8 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m14 xca h7 y110 ff8 fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕАА <span class="_ _8"> </span> СЕЧЕНИЕАА</div>
			<div class="t m5 xcb h7 y111 ff8 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 10</div>
			<div class="t m2a xcc h6 y112 ff8 fs0 fc1 sc0 ls0 ws0">Закладна нащільника</div>
			<div class="t m31 xcd h6 y113 ff8 fs0 fc0 sc0 ls0 ws0">Лист_5</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "6")) : ?>
	<div id="pf6" class="pf w0 h0" data-page-no="6">
		<div class="pc pc6 w0 h0">
      <?php echo $image6; ?>
			<div class="t m5c xd1 h7 y11a ffa fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ J</div>
			<div class="t m27 xd2 h7 y11b ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m49 x3a h6 y11c ffa fs0 fc1 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m5d x81 h6 y11d ffa fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5e xd3 h6 y11e ffa fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m2c xd4 h6 y11f ffa fs0 fc1 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m5d xd5 h6 y120 ffa fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5e xd6 h6 y121 ffa fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m5d xd7 h6 y122 ffa fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5e xd8 h6 y123 ffa fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m5f x2 h7 y124 ffa fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ L</div>
			<div class="t m27 x87 h7 y125 ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m5d xb9 h6 y126 ffa fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5e xd9 h6 y127 ffa fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m30 xda h7 y128 ffa fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ Z</div>
			<div class="t m27 xdb h7 y129 ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m22 xdc h6 y12a ffa fs0 fc1 sc0 ls0 ws0">Ролік</div>
			<div class="t m60 xd5 h6 y12b ffa fs0 fc1 sc0 ls0 ws0">верхній</div>
			<div class="t m3 xdd h6 y12c ffa fs0 fc0 sc0 ls0 ws0">300</div>
			<div class="t m9 xde h6 y12c ffa fs0 fc1 sc0 ls0 ws0">450</div>
			<div class="t m1c xdf h7 y12d ffa fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ I</div>
			<div class="t m27 xe0 h7 y12e ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m61 xe1 h6 y12f ffa fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m2e x40 h6 y130 ffa fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m2c xb6 h6 y131 ffa fs0 fc1 sc0 ls0 ws0">Стовп</div>
			<div class="t m24 xe2 h6 y132 ffa fs0 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m62 xe3 h6 y133 ffa fs0 fc1 sc0 ls0 ws0">Рейка зубчата</div>
			<div class="t m4d xe4 h6 y134 ffa fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m63 xe5 h6 y135 ffa fs0 fc1 sc0 ls0 ws0">Кронштейн привода</div>
			<div class="t m2b x92 h6 y136 ffa fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m48 x29 h6 y137 ffa fs0 fc1 sc0 ls0 ws0">армований</div>
			<div class="t m64 xe6 h6 y138 ffa fs0 fc1 sc0 ls0 ws0">Арматура</div>
			<div class="t m65 xe7 h6 y138 ffa fs0 fc1 sc0 ls0 ws0">Ролік опорний</div>
			<div class="t m4d xe8 h6 y139 ffa fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m24 xe9 h6 y13a ffa fs0 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m66 xea h6 y13b ffa fs0 fc1 sc0 ls0 ws0">Кронштейн</div>
			<div class="t m26 xeb h6 y135 ffa fs0 fc1 sc0 ls0 ws0">привода</div>
			<div class="t m67 xec h7 y13c ffa fs1 fc1 sc0 ls0 ws0">AE</div>
			<div class="t m67 xed h7 y13d ffa fs1 fc1 sc0 ls0 ws0">AF</div>
			<div class="t m68 xee h7 y13e ffa fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ AD-AD</div>
			<div class="t m5 xee h7 y13f ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 10</div>
			<div class="t m1c xef h7 y140 ffa fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ AE</div>
			<div class="t m27 xf0 h7 y141 ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 2</div>
			<div class="t m69 x4b h6 y142 ffa fs0 fc1 sc0 ls0 ws0">Кінцевик магнітний</div>
			<div class="t m3 xdb h6 y143 ffa fs0 fc1 sc0 ls0 ws0">положеня-відкрито</div>
			<div class="t m6a x5a h6 y144 ffa fs0 fc1 sc0 ls0 ws0">Рейка</div>
			<div class="t m6b xdf h6 y145 ffa fs0 fc1 sc0 ls0 ws0">зубчата</div>
			<div class="t m6c x5f h6 y146 ffa fs0 fc1 sc0 ls0 ws0">Клепальна гайка</div>
			<div class="t m63 xf1 h6 y147 ffa fs0 fc1 sc0 ls0 ws0">(кріпленя зубчатої рейки)</div>
			<div class="t m1c xf2 h7 y148 ffa fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ AF</div>
			<div class="t m27 xf3 h7 y149 ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 2</div>
			<div class="t m6d xf4 h6 y14a ffa fs0 fc1 sc0 ls0 ws0">Кінцевий ролік</div>
			<div class="t m22 xf5 h6 y14b ffa fs0 fc1 sc0 ls0 ws0">Профіль</div>
			<div class="t m6e xf6 h6 y14c ffa fs0 fc1 sc0 ls0 ws0">Прижимна планка</div>
			<div class="t m2 xf7 h6 y14d ffa fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5e x6f h6 y14e ffa fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m6f xf8 h6 y14f ffa fs0 fc1 sc0 ls0 ws0">Уловлювач</div>
			<div class="t m70 xf9 h6 y150 ffa fs0 fc1 sc0 ls0 ws0">нижній</div>
			<div class="t m61 xeb h6 y151 ffa fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m4c xfa h6 y152 ffa fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m71 xfb h7 y153 ffa fs1 fc1 sc0 ls0 ws0">AB</div>
			<div class="t m3d xfc h7 y154 ffa fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ Z1</div>
			<div class="t m27 xfd h7 y155 ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m2b xfe h6 y156 ffa fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m48 xff h6 y157 ffa fs0 fc1 sc0 ls0 ws0">армований</div>
			<div class="t m65 x100 h6 y158 ffa fs0 fc1 sc0 ls0 ws0">Ролік опорний</div>
			<div class="t m5d x101 h6 y159 ffa fs0 fc1 sc0 ls0 ws0">Заглушка задня</div>
			<div class="t m2c x102 h6 y15a ffa fs0 fc1 sc0 ls0 ws0">Стовп</div>
			<div class="t m61 x65 h6 y15b ffa fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m2e x103 h6 y15c ffa fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m72 x104 h7 y15d ffa fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ AB</div>
			<div class="t m73 x105 h7 y15e ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 2 : 5</div>
			<div class="t m69 x1f h6 y15f ffa fs0 fc1 sc0 ls0 ws0">Кінцевик магнітний</div>
			<div class="t m22 x106 h6 y160 ffa fs0 fc1 sc0 ls0 ws0">положеня-закрито</div>
			<div class="t m6a x107 h6 y161 ffa fs0 fc1 sc0 ls0 ws0">Рейка</div>
			<div class="t m6b x106 h6 y162 ffa fs0 fc1 sc0 ls0 ws0">зубчата</div>
			<div class="t m4d x108 h6 y163 ffa fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m74 x1 h6 y164 ffa fs0 fc1 sc0 ls0 ws0">Шестерня</div>
			<div class="t m75 x8d h6 y165 ffa fs0 fc1 sc0 ls0 ws0">Кронштейн</div>
			<div class="t m26 x106 h6 y166 ffa fs0 fc1 sc0 ls0 ws0">привода</div>
			<div class="t m6c x109 h6 y15f ffa fs0 fc1 sc0 ls0 ws0">Клепальна гайка</div>
			<div class="t m63 x10a h6 y160 ffa fs0 fc1 sc0 ls0 ws0">(кріпленя зубчатої рейки)</div>
			<div class="t m2 x10b h6 y167 ffa fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5e x10c h6 y168 ffa fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m22 x98 h6 y169 ffa fs0 fc1 sc0 ls0 ws0">Ролік</div>
			<div class="t m3 x10d h6 y16a ffa fs0 fc1 sc0 ls0 ws0">опорний</div>
			<div class="t m76 xfe h7 y16b ffa fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ Q-Q</div>
			<div class="t m27 x10e h7 y16c ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m11 x10f h6 y16d ffa fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m77 x110 h6 y16e ffa fs0 fc1 sc0 ls0 ws0">нащельника</div>
			<div class="t m78 x111 h6 y16f ffa fs0 fc1 sc0 ls0 ws0">Уловлювач</div>
			<div class="t m60 x112 h6 y170 ffa fs0 fc1 sc0 ls0 ws0">верхній</div>
			<div class="t m61 x113 h6 y171 ffa fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m4c x114 h6 y172 ffa fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m61 x16 h6 y171 ffa fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m4c x115 h6 y172 ffa fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m78 xc5 h6 y16f ffa fs0 fc1 sc0 ls0 ws0">Уловлювач</div>
			<div class="t m70 x116 h6 y170 ffa fs0 fc1 sc0 ls0 ws0">нижній</div>
			<div class="t m57 x117 h7 y173 ffa fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ F-F</div>
			<div class="t m27 x118 h7 y174 ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m11 x14 h6 y175 ffa fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m77 x119 h6 y176 ffa fs0 fc1 sc0 ls0 ws0">нащельника</div>
			<div class="t m5d x15 h6 y177 ffa fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5e xbc h6 y178 ffa fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m31 x11a h6 y179 ffa fs0 fc0 sc0 ls0 ws0">Лист_6</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif; ?>
</div>


<?php
  $image1 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/45deg/gate_images2/image1.svg");
  $image2 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/45deg/gate_images2/image2.svg");
  $image3 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/45deg/gate_images2/image3.svg");
  $image4 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/45deg/gate_images2/image4.svg");
  $image5 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/45deg/gate_images2/image5.svg");
  $image6 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/square/45deg/gate_images2/image6.svg");
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
  $c1 = round(($a - 140 - 3 * 30) / 4);
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

<link rel='stylesheet' id='pdf-stylesheet-css' href='<?=$_SERVER['APP_URL']?>/parts/styles/square/45deg/gate2.css' type='text/css' media='all' />
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
			<div class="t m1c x1c h3 y25 ff1 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ J</div>
			<div class="t m5 x1d h3 y26 ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 10</div>
			<div class="t m1d x1e h3 y27 ff1 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ L</div>
			<div class="t m5 x1f h3 y28 ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 10</div>
			<div class="t m1e x20 h3 y29 ff1 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ Z</div>
			<div class="t m5 x21 h3 y2a ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 10</div>
			<div class="t m1f x22 h3 y2b ff1 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ I</div>
			<div class="t m5 x23 h3 y2c ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 10</div>
			<div class="t m20 x24 h3 y2d ff1 fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ Q-Q</div>
			<div class="t mf x25 h3 y2e ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 20</div>
			<div class="t m21 xf h3 y2f ff1 fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ F-F</div>
			<div class="t mf x26 h3 y30 ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 20</div>
			<div class="t m22 x1d h3 y31 ff1 fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ AD-AD</div>
			<div class="t mf x27 h3 y32 ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 20</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "2")) : ?>
	<div id="pf2" class="pf w0 h0" data-page-no="2">
		<div class="pc pc2 w0 h0">
      <?php echo $image2; ?>
			<div class="t m3 x29 h2 y34 ff2 fs0 fc0 sc0 ls0 ws0">95</div>
			<div class="t m0 x2a h2 y35 ff2 fs0 fc0 sc0 ls0 ws0">100 <span class="_ _2"> </span> 100</div>
			<div class="t m9 x2b h2 y36 ff2 fs0 fc0 sc0 ls0 ws0">240</div>
			<div class="t m23 x2c h2 y37 ff2 fs0 fc0 sc0 ls0 ws0">500</div>
			<div class="t m1 x2d h2 y38 ff2 fs0 fc0 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m24 x2e h2 y39 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $l1; ?></div>
			<div class="t m25 xc h2 y3a ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $b5; ?></div>
			<div class="t m6 x2f h2 y3b ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $b4; ?></div>
			<div class="t m3 x30 h2 y3c ff2 fs0 fc0 sc0 ls0 ws0">95</div>
			<div class="t m26 x31 h2 y3d ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a7; ?></div>
			<div class="t m27 x32 h2 y3e ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a6; ?></div>
			<div class="t m14 x33 h3 y3f ff2 fs1 fc1 sc0 ls0 ws0">A <span class="_ _3"> </span> A</div>
			<div class="t m14 x34 h3 y40 ff2 fs1 fc1 sc0 ls0 ws0">N</div>
			<div class="t m27 x35 h2 y41 ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m28 x36 h2 y42 ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m29 x2e h2 y43 ff2 fs0 fc1 sc0 ls0 ws0">для роліка опорного</div>
			<div class="t m3 x37 h2 y44 ff2 fs0 fc1 sc0 ls0 ws0">переднього</div>
			<div class="t m27 x35 h2 y45 ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m28 x36 h2 y46 ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m29 x2e h2 y47 ff2 fs0 fc1 sc0 ls0 ws0">для роліка опорного</div>
			<div class="t m2a x38 h2 y48 ff2 fs0 fc1 sc0 ls0 ws0">заднього</div>
			<div class="t m27 x39 h2 y49 ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m28 x3a h2 y4a ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m2 x3b h2 y4b ff2 fs0 fc1 sc0 ls0 ws0">для кронштейна</div>
			<div class="t m2b x3c h2 y4c ff2 fs0 fc1 sc0 ls0 ws0">привода</div>
			<div class="t m2c x3d h2 y4d ff2 fs0 fc1 sc0 ls0 ws0">Ролік задній розмістити в складальному вигляді з рамою воріт</div>
			<div class="t mf x3d h2 y4e ff2 fs0 fc1 sc0 ls0 ws0">максимально віддаленим по довжині хвостовика воріт.</div>
			<div class="t m2d x3e h2 y4f ff2 fs0 fc1 sc0 ls0 ws0">11</div>
			<div class="t m24 x3f h2 y50 ff2 fs0 fc1 sc0 ls0 ws0">10</div>
			<div class="t m27 x40 h2 y51 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a5; ?></div>
			<div class="t m3 xf h2 y52 ff2 fs0 fc0 sc0 ls0 ws0">95</div>
			<div class="t m2e x12 h2 y53 ff2 fs0 fc0 sc0 ls0 ws0">160</div>
			<div class="t m9 x41 h2 y54 ff2 fs0 fc0 sc0 ls0 ws0">250</div>
			<div class="t m3 x42 h2 y55 ff2 fs0 fc0 sc0 ls0 ws0">60</div>
			<div class="t m25 x43 h2 y56 ff2 fs0 fc0 sc0 ls0 ws0">40</div>
			<div class="t m2f x44 h3 y57 ff2 fs1 fc1 sc0 ls0 ws0">A-A МАСШТАБ1 : 16</div>
			<div class="t m30 x45 h2 y58 ff2 fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m31 x46 h2 y59 ff2 fs0 fc1 sc0 ls0 ws0">Стовп</div>
			<div class="t m32 x47 h2 y5a ff2 fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m33 x48 h2 y5b ff2 fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m28 xd h2 y5c ff2 fs0 fc1 sc0 ls0 ws0">(Розміщення швелера відносно стовпа)</div>
			<div class="t m27 x49 h2 y5d ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a8; ?></div>
			<div class="t m23 x4a h2 y5e ff2 fs0 fc0 sc0 ls0 ws0">500</div>
			<div class="t m12 x4b h3 y5f ff2 fs1 fc1 sc0 ls0 ws0">O</div>
			<div class="t m34 x4c h3 y60 ff2 fs1 fc1 sc0 ls0 ws0">ВИД N</div>
			<div class="t m5 x4d h3 y61 ff2 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 16</div>
			<div class="t m0 x4e h2 y62 ff2 fs0 fc0 sc0 ls0 ws0">160</div>
			<div class="t m1e x4f h3 y63 ff2 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ O</div>
			<div class="t m2c x4e h3 y64 ff2 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m30 x50 h2 y65 ff2 fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m32 x51 h2 y66 ff2 fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m33 x52 h2 y67 ff2 fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m35 x53 h2 y68 ff2 fs0 fc0 sc0 ls0 ws0">Лист_2</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "3")) : ?>
	<div id="pf3" class="pf w4 h8" data-page-no="3">
		<div class="pc pc3 w4 h8">
      <?php echo $image3; ?>
			<div class="t m37 x57 ha y6c ff4 fs4 fc0 sc0 ls0 ws0"><?php echo $c1; ?> <span class="_ _4"> </span> <?php echo $c1; ?></div>
			<div class="t m38 x58 ha y6d ff4 fs4 fc0 sc0 ls0 ws0"><?php echo $d; ?> <span class="_ _5"> </span> <?php echo $d; ?></div>
			<div class="t m39 x59 ha y6e ff4 fs4 fc0 sc0 ls0 ws0"><?php echo $b1; ?></div>
			<div class="t m3 x5a ha y6f ff4 fs4 fc0 sc0 ls0 ws0"><?php echo $c; ?></div>
			<div class="t m37 x31 ha y70 ff4 fs4 fc0 sc0 ls0 ws0"><?php echo $c1; ?></div>
			<div class="t m23 x5b ha y71 ff4 fs4 fc0 sc0 ls0 ws0">60</div>
			<div class="t m38 x56 ha y72 ff4 fs4 fc0 sc0 ls0 ws0"><?php echo $b; ?></div>
			<div class="t m2 x10 ha y73 ff4 fs4 fc0 sc0 ls0 ws0"><?php echo $a; ?></div>
			<div class="t m37 x5c ha y74 ff4 fs4 fc0 sc0 ls0 ws0"><?php echo $c1; ?></div>
			<div class="t m3a x5d hb y75 ff4 fs5 fc1 sc0 ls0 ws0"><?php echo $g1; ?></div>
			<div class="t m2f x5e hc y76 ff4 fs6 fc1 sc0 ls0 ws0">A</div>
			<div class="t m12 x42 hc y77 ff4 fs6 fc1 sc0 ls0 ws0">B</div>
			<div class="t m3b x5f hc y78 ff4 fs6 fc1 sc0 ls0 ws0">A1</div>
			<div class="t m1f x60 hc y79 ff4 fs6 fc1 sc0 ls0 ws0">В1</div>
			<div class="t m3c x61 h2 y7a ff4 fs0 fc1 sc0 ls0 ws0">1</div>
			<div class="t m3 x62 h2 y7b ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3 x63 h2 y7c ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3 x64 h2 y7d ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3 x65 h2 y7e ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t m12 x66 h2 y7f ff4 fs0 fc1 sc0 ls0 ws0">4</div>
			<div class="t m3 x67 h2 y80 ff4 fs0 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3 x68 h2 y81 ff4 fs0 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3 x69 h2 y82 ff4 fs0 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3 x69 h2 y83 ff4 fs0 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3 x6a h2 y84 ff4 fs0 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3 x6a h2 y83 ff4 fs0 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3 x6b h2 y85 ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m3 x6c h2 y86 ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m22 x5b hc y87 ff4 fs6 fc1 sc0 ls0 ws0">МЕСТНЫЙ A</div>
			<div class="t m11 x6d hc y88 ff4 fs6 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m3 x6e h2 y89 ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3 x5b h2 y8a ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3 x6f h2 y8b ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m3d x70 hc y8c ff4 fs6 fc1 sc0 ls0 ws0">МЕСТНЫЙ B</div>
			<div class="t m11 x71 hc y8d ff4 fs6 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m3c x72 h2 y8e ff4 fs0 fc1 sc0 ls0 ws0">1</div>
			<div class="t m3 x3a h2 y8f ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3 x73 h2 y90 ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3 x2a h2 y91 ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m3e x74 hc y92 ff4 fs6 fc1 sc0 ls0 ws0">МЕСТНЫЙ A1</div>
			<div class="t m11 x2c hc y93 ff4 fs6 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m3f x57 hc y94 ff4 fs6 fc1 sc0 ls0 ws0">дзеркальне відображеня ВидА</div>
			<div class="t m3 x75 h2 y95 ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3 x76 h2 y96 ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3 x77 h2 y97 ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m40 x78 hc y98 ff4 fs6 fc1 sc0 ls0 ws0">МЕСТНЫЙ В1</div>
			<div class="t m11 x79 hc y99 ff4 fs6 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m5 x7a hc y9a ff4 fs6 fc1 sc0 ls0 ws0">дзеркальне відображеня ВидВ</div>
			<div class="t m3c x7b h2 y9b ff4 fs0 fc1 sc0 ls0 ws0">1</div>
			<div class="t m3 x7c h2 y9c ff4 fs0 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3 x60 h2 y9d ff4 fs0 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3 x7d h2 y9e ff4 fs0 fc1 sc0 ls0 ws0">6</div>
			<div class="t m35 x7e ha y9f ff4 fs4 fc0 sc0 ls0 ws0">Лист_3</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "4")) : ?>
	<div id="pf4" class="pf w6 hd" data-page-no="4">
		<div class="pc pc4 w6 hd">
      <?php echo $image4; ?>
			<div class="c x7f ya1 w8 hf">
				<div class="t m36 x80 h10 ya2 ff5 fs7 fc1 sc0 ls0 ws0"><?php echo $g1; ?></div>
				<div class="t m36 x81 h10 ya3 ff5 fs7 fc1 sc0 ls0 ws0"><?php echo $c; ?></div>
				<div class="t m36 x82 h10 ya4 ff5 fs7 fc1 sc0 ls0 ws0"><?php echo $d; ?></div>
				<div class="t m36 x83 h10 ya5 ff5 fs7 fc1 sc0 ls0 ws0">20</div>
				<div class="t m41 x84 h10 ya6 ff5 fs7 fc1 sc0 ls0 ws0">30</div>
				<div class="t m36 x83 h10 ya7 ff5 fs7 fc1 sc0 ls0 ws0">20</div>
				<div class="t m41 x85 h10 ya8 ff5 fs7 fc1 sc0 ls0 ws0">30</div>
				<div class="t m36 x3d h10 ya9 ff5 fs7 fc1 sc0 ls0 ws0">20</div>
				<div class="t m41 x85 h10 yaa ff5 fs7 fc1 sc0 ls0 ws0">30</div>
				<div class="t m36 x86 h10 yab ff5 fs7 fc1 sc0 ls0 ws0"><?php echo $a; ?></div>
				<div class="t m36 x63 h10 yac ff6 fs7 fc1 sc0 ls0 ws0">а(Ш)</div>
				<div class="t m41 x87 h10 yad ff6 fs7 fc1 sc0 ls0 ws0">в(В)</div>
				<div class="t m36 x31 h10 yae ff5 fs7 fc1 sc0 ls0 ws0">60</div>
				<div class="t m41 x88 h10 yaf ff5 fs7 fc1 sc0 ls0 ws0">40</div>
				<div class="t m36 x89 h10 yb0 ff5 fs7 fc1 sc0 ls0 ws0">20</div>
				<div class="t m41 x83 h10 yb1 ff5 fs7 fc1 sc0 ls0 ws0">30</div>
				<div class="t m36 x8a h10 yb2 ff5 fs7 fc1 sc0 ls0 ws0"><?php echo $a3; ?></div>
				<div class="t m36 x47 h11 yb3 ff5 fs8 fc1 sc0 ls0 ws0">1.</div>
				<div class="t m36 x8b h11 yb4 ff5 fs8 fc1 sc0 ls0 ws0">2.</div>
				<div class="t m36 x8c h11 yb5 ff5 fs8 fc1 sc0 ls0 ws0">3.</div>
				<div class="t m36 x8b h11 yb6 ff5 fs8 fc1 sc0 ls0 ws0">4.</div>
				<div class="t m36 x8c h11 yb7 ff5 fs8 fc1 sc0 ls0 ws0">5.</div>
				<div class="t m36 x8b h11 yb8 ff5 fs8 fc1 sc0 ls0 ws0">6.</div>
				<div class="t m36 x47 h11 yb9 ff5 fs8 fc1 sc0 ls0 ws0">7.</div>
				<div class="t m36 x47 h11 yba ff5 fs8 fc1 sc0 ls0 ws0">8.</div>
				<div class="t m36 x8d h10 ybb ff6 fs7 fc1 sc0 ls0 ws0"><?php echo $b5; ?></div>
				<div class="t m36 x8e h10 ybc ff5 fs7 fc1 sc0 ls0 ws0">60</div>
				<div class="t m41 x8f h10 ybd ff5 fs7 fc1 sc0 ls0 ws0">40</div>
				<div class="t m41 x88 h10 ybe ff5 fs7 fc1 sc0 ls0 ws0">60</div>
				<div class="t m36 x90 h10 ybf ff5 fs7 fc1 sc0 ls0 ws0">40</div>
				<div class="t m36 x91 h10 yc0 ff6 fs7 fc1 sc0 ls0 ws0"><?php echo $b4; ?></div>
				<div class="t m36 x92 h12 yc1 ff6 fs9 fc1 sc0 ls0 ws0">Порізка профілей на заготовки</div>
				<div class="t m36 x92 h12 yc2 ff6 fs9 fc1 sc0 ls0 ws0">Порізка нащільника заднього</div>
				<div class="t m36 x92 h12 yc3 ff6 fs9 fc1 sc0 ls0 ws0">Порізка нащільника переднього</div>
				<div class="t m36 x93 h11 yb3 ff6 fs8 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m36 x94 h11 yc4 ff6 fs8 fc1 sc0 ls0 ws0">2шт.</div>
				<div class="t m36 x94 h11 yc5 ff6 fs8 fc1 sc0 ls0 ws0">2шт.</div>
				<div class="t m36 x93 h11 yc6 ff6 fs8 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m36 x94 h11 yc7 ff6 fs8 fc1 sc0 ls0 ws0">6шт.</div>
				<div class="t m36 x94 h11 yc8 ff6 fs8 fc1 sc0 ls0 ws0">4шт.</div>
				<div class="t m36 x93 h11 yc9 ff6 fs8 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m36 x93 h11 yca ff6 fs8 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m36 x95 h10 ycb ff5 fs7 fc1 sc0 ls0 ws0">80</div>
				<div class="t m41 x96 h10 ycc ff5 fs7 fc1 sc0 ls0 ws0">48</div>
				<div class="t m36 x97 h13 ycd ff6 fsa fc4 sc0 ls0 ws0">Лист_4</div>
				<div class="t m36 x19 h10 yce ff6 fs7 fc1 sc0 ls0 ws0"><?php echo $b1; ?></div>
				<div class="t m36 x31 h10 ycf ff5 fs7 fc1 sc0 ls0 ws0">60</div>
				<div class="t m41 x88 h10 yd0 ff5 fs7 fc1 sc0 ls0 ws0">40</div>
				<div class="t m36 x89 h10 yd1 ff5 fs7 fc1 sc0 ls0 ws0">20</div>
				<div class="t m41 x83 h10 yd2 ff5 fs7 fc1 sc0 ls0 ws0">30</div>
				<div class="t m42 x98 h14 yd3 ff5 fsb fc1 sc0 ls0 ws0">45</div>
				<div class="t m43 x99 h14 yd4 ff5 fsb fc1 sc0 ls0 ws0">45</div>
				<div class="t m44 x9a h15 yd5 ff5 fsc fc1 sc0 ls0 ws0">45</div>
				<div class="t m42 x43 h14 yd6 ff5 fsb fc1 sc0 ls0 ws0">45</div>
				<div class="t m45 x9b h16 yd7 ff5 fsd fc1 sc0 ls0 ws0">W*</div>
				<div class="t m46 x9c h17 yd8 ff5 fse fc1 sc0 ls0 ws0">W*</div>
				<div class="t m36 x9d h12 yd9 ff5 fs9 fc1 sc0 ls0 ws0">1.* <span class="_ _6"> </span> <span class="ff6"> Розмір визначити по місцю при зварювані рами воріт. </span></div>
			</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[0.000000,1.000000,-1.000000,0.000000,842.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "5")) : ?>
	<div id="pf5" class="pf w0 h0" data-page-no="5">
		<div class="pc pc5 w0 h0">
      <?php echo $image5; ?>
			<div class="t m6 x8c h2 ydb ff7 fs0 fc0 sc0 ls0 ws0">(**)</div>
			<div class="t m47 x9e h2 ydc ff7 fs0 fc0 sc0 ls0 ws0"><?php echo $b5; ?> (висота розміщеня уловлювача верхнього</div>
			<div class="t m48 x9f h2 ydd ff7 fs0 fc0 sc0 ls0 ws0">по висоті воріт)</div>
			<div class="t m1 xa0 h2 yde ff7 fs0 fc0 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m49 xa1 h2 ydf ff7 fs0 fc0 sc0 ls0 ws0"><?php echo $b4; ?> Висота розміщеня верхнього роліка</div>
			<div class="t m47 xa2 h2 ye0 ff7 fs0 fc0 sc0 ls0 ws0">по нащільнику задньому</div>
			<div class="t m3 xa3 h2 ye1 ff7 fs0 fc0 sc0 ls0 ws0">95 <span class="_ _7"> </span> 95</div>
			<div class="t m7 x85 h2 ye2 ff7 fs0 fc1 sc0 ls0 ws0">Відстань від фундаменту до верху воріт</div>
			<div class="t m12 xa4 h2 ye3 ff7 fs0 fc1 sc0 ls0 ws0">R</div>
			<div class="t m12 xa5 h2 ye4 ff7 fs0 fc1 sc0 ls0 ws0">S</div>
			<div class="t m2 xa6 h2 ye5 ff7 fs0 fc1 sc0 ls0 ws0">Кріпленя нащільника переднього та заднього провести на закладні зварюваням.</div>
			<div class="t ma xa7 h2 ye5 ff7 fs0 fc1 sc0 ls0 ws0">1.</div>
			<div class="t mb xa8 h2 ye6 ff7 fs0 fc1 sc0 ls0 ws0">** Уловлювач нижній розмістити в складальному вигляді з стулкою воріт та роліками</div>
			<div class="t m2d xa7 h2 ye6 ff7 fs0 fc1 sc0 ls0 ws0">2.</div>
			<div class="t m4a xa7 h2 ye7 ff7 fs0 fc1 sc0 ls0 ws0">опорними в горізонтальній поверхні на 3мм-4мм вище роліка кінцевого.</div>
			<div class="t m3f xa7 h2 ye8 ff7 fs0 fc1 sc0 ls0 ws0">3. Ролік верхній розмістити по висоті нащільника заднього.</div>
			<div class="t m24 xa9 h2 ye9 ff7 fs0 fc1 sc0 ls0 ws0">10</div>
			<div class="t m2d xa4 h2 yea ff7 fs0 fc1 sc0 ls0 ws0">11</div>
			<div class="t m4b xaa h2 yeb ff7 fs0 fc1 sc0 ls0 ws0">W</div>
			<div class="t m31 xa4 h2 yec ff7 fs0 fc1 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m4c xab h2 yed ff7 fs0 fc1 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m4d xac h2 yed ff7 fs0 fc1 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m4b xad h3 yee ff7 fs1 fc1 sc0 ls0 ws0">W</div>
			<div class="t m12 xae h3 yef ff7 fs1 fc1 sc0 ls0 ws0">R</div>
			<div class="t m12 xaf h3 yf0 ff7 fs1 fc1 sc0 ls0 ws0">S</div>
			<div class="t m4e xb0 h3 yf1 ff7 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ W</div>
			<div class="t m11 xb1 h3 yf2 ff7 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m4d xb2 h2 yf3 ff7 fs0 fc1 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m2f xb3 h2 yf4 ff7 fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m33 xb4 h2 yf5 ff7 fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m1e xf h3 yf6 ff7 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ R</div>
			<div class="t m11 xb5 h3 yf7 ff7 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m2f xb6 h2 yf8 ff7 fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m4f x46 h2 yf9 ff7 fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m50 xb7 h2 yfa ff7 fs0 fc1 sc0 ls0 ws0">Уловитель верхній</div>
			<div class="t m1e xb8 h3 yfb ff7 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ S</div>
			<div class="t m11 xb9 h3 yfc ff7 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m27 xba h2 yfd ff7 fs0 fc1 sc0 ls0 ws0">Уловитель нижній</div>
			<div class="t m2f xbb h2 yfe ff7 fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m4f xbc h2 yff ff7 fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m51 xbd h2 y100 ff7 fs0 fc0 sc0 ls0 ws0"><?php echo $r1; ?></div>
			<div class="t m25 xbe h2 y101 ff7 fs0 fc0 sc0 ls0 ws0"><?php echo $r2; ?></div>
			<div class="t m52 xbf h19 y102 ff7 fsf fc0 sc0 ls0 ws0">Встановити в міжцегляному</div>
			<div class="t m53 xc0 h19 y103 ff7 fsf fc0 sc0 ls0 ws0">шву на відстані півцегли</div>
			<div class="t m54 xc1 h19 y104 ff7 fsf fc0 sc0 ls0 ws0">відносно внутнішньої</div>
			<div class="t m55 xc2 h19 y105 ff7 fsf fc0 sc0 ls0 ws0">поверхні стовпа.</div>
			<div class="t m56 xc3 h3 y106 ff7 fs1 fc0 sc0 ls0 ws0">Встановити в міжцегляному</div>
			<div class="t m57 xc4 h3 y107 ff7 fs1 fc0 sc0 ls0 ws0">шву на відстані півцегли</div>
			<div class="t m58 xc5 h3 y108 ff7 fs1 fc0 sc0 ls0 ws0">відносно внутрішньої</div>
			<div class="t m59 xc6 h3 y109 ff7 fs1 fc0 sc0 ls0 ws0">поверхні стовпа.</div>
			<div class="t m14 x37 h3 y10a ff7 fs1 fc1 sc0 ls0 ws0">АА <span class="_ _8"> </span> АА</div>
			<div class="t m5a xc7 h2 y10b ff7 fs0 fc1 sc0 ls0 ws0">СЕЧЕНИЕ АА-АА</div>
			<div class="t m11 x5a h2 y10c ff7 fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m5b xc2 h2 y10d ff7 fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m11 xc4 h2 y10e ff7 fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m5b xc8 h2 y10f ff7 fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m11 xc9 h2 y110 ff7 fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m5b x1b h2 y111 ff7 fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m11 xc9 h2 y112 ff7 fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m5b x1b h2 y113 ff7 fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m5c x68 h2 y114 ff7 fs0 fc1 sc0 ls0 ws0">(4 місця)</div>
			<div class="t m5d xca h3 y115 ff7 fs1 fc1 sc0 ls0 ws0">АА-АА</div>
			<div class="t m2c xcb h3 y116 ff7 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m14 xcc h3 y117 ff7 fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕАА <span class="_ _9"> </span> СЕЧЕНИЕАА</div>
			<div class="t m5 xcd h3 y118 ff7 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 10</div>
			<div class="t m2f xce h2 y119 ff7 fs0 fc1 sc0 ls0 ws0">Закладна нащільника</div>
			<div class="t m35 xcf h2 y11a ff7 fs0 fc0 sc0 ls0 ws0">Лист_5</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "6")) : ?>
	<div id="pf6" class="pf w0 h0" data-page-no="6">
		<div class="pc pc6 w0 h0">
      <?php echo $image6; ?>
			<div class="t m1c xd3 h3 y122 ff9 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ J</div>
			<div class="t m2c xf h3 y123 ff9 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m4c x12 h2 y124 ff9 fs0 fc1 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m5f x44 h2 y125 ff9 fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m60 xd4 h2 y126 ff9 fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m31 xd5 h2 y127 ff9 fs0 fc1 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m5f xd6 h2 y128 ff9 fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m60 xd7 h2 y129 ff9 fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m5f xd8 h2 y12a ff9 fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m60 x16 h2 y12b ff9 fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m1d xd9 h3 y12c ff9 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ L</div>
			<div class="t m2c x86 h3 y12d ff9 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m5f xda h2 y12e ff9 fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m60 xdb h2 y12f ff9 fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m1e xdc h3 y130 ff9 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ Z</div>
			<div class="t m2c xdd h3 y131 ff9 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m27 xde h2 y132 ff9 fs0 fc1 sc0 ls0 ws0">Ролік</div>
			<div class="t m61 xd6 h2 y133 ff9 fs0 fc1 sc0 ls0 ws0">верхній</div>
			<div class="t m3 xdf h2 y134 ff9 fs0 fc0 sc0 ls0 ws0">300</div>
			<div class="t m9 xe0 h2 y134 ff9 fs0 fc1 sc0 ls0 ws0">450</div>
			<div class="t m1f xe1 h3 y135 ff9 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ I</div>
			<div class="t m2c xe2 h3 y136 ff9 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m62 x43 h2 y137 ff9 fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m33 xe3 h2 y138 ff9 fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m31 xe4 h2 y139 ff9 fs0 fc1 sc0 ls0 ws0">Стовп</div>
			<div class="t m29 x28 h2 y13a ff9 fs0 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m63 x6 h2 y13b ff9 fs0 fc1 sc0 ls0 ws0">Рейка зубчата</div>
			<div class="t m50 xa1 h2 y139 ff9 fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m64 x18 h2 y13c ff9 fs0 fc1 sc0 ls0 ws0">Кронштейн привода</div>
			<div class="t m30 xe5 h2 y13d ff9 fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m4b xe6 h2 y13e ff9 fs0 fc1 sc0 ls0 ws0">армований</div>
			<div class="t m65 xe7 h2 y13f ff9 fs0 fc1 sc0 ls0 ws0">Арматура</div>
			<div class="t m66 xe8 h2 y140 ff9 fs0 fc1 sc0 ls0 ws0">Ролік опорний</div>
			<div class="t m50 xe9 h2 y141 ff9 fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m29 xea h2 y142 ff9 fs0 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m67 xeb h2 y143 ff9 fs0 fc1 sc0 ls0 ws0">Кронштейн</div>
			<div class="t m2b x8e h2 y144 ff9 fs0 fc1 sc0 ls0 ws0">привода</div>
			<div class="t m68 x75 h3 y145 ff9 fs1 fc1 sc0 ls0 ws0">AE</div>
			<div class="t m68 xec h3 y146 ff9 fs1 fc1 sc0 ls0 ws0">AF</div>
			<div class="t m22 xed h3 y147 ff9 fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ AD-AD</div>
			<div class="t m5 xed h3 y148 ff9 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 10</div>
			<div class="t m1f xee h3 y149 ff9 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ AE</div>
			<div class="t m2c xef h3 y14a ff9 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 2</div>
			<div class="t m69 x50 h2 y14b ff9 fs0 fc1 sc0 ls0 ws0">Кінцевик магнітний</div>
			<div class="t m3 xdd h2 y14c ff9 fs0 fc1 sc0 ls0 ws0">положеня-відкрито</div>
			<div class="t m6a xf0 h2 y14d ff9 fs0 fc1 sc0 ls0 ws0">Рейка</div>
			<div class="t m6b xe1 h2 y14e ff9 fs0 fc1 sc0 ls0 ws0">зубчата</div>
			<div class="t m6c xf1 h2 y14f ff9 fs0 fc1 sc0 ls0 ws0">Клепальна гайка</div>
			<div class="t m64 xf2 h2 y150 ff9 fs0 fc1 sc0 ls0 ws0">(кріпленя зубчатої рейки)</div>
			<div class="t m1f xf3 h3 y151 ff9 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ AF</div>
			<div class="t m2c x72 h3 y152 ff9 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 2</div>
			<div class="t m6d xf4 h2 y153 ff9 fs0 fc1 sc0 ls0 ws0">Кінцевий ролік</div>
			<div class="t m27 x10 h2 y154 ff9 fs0 fc1 sc0 ls0 ws0">Профіль</div>
			<div class="t m6e xf5 h2 y155 ff9 fs0 fc1 sc0 ls0 ws0">Прижимна планка</div>
			<div class="t m2 xf6 h2 y156 ff9 fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m60 x71 h2 y157 ff9 fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m6f xf7 h2 y158 ff9 fs0 fc1 sc0 ls0 ws0">Уловлювач</div>
			<div class="t m70 xf8 h2 y159 ff9 fs0 fc1 sc0 ls0 ws0">нижній</div>
			<div class="t m62 xf9 h2 y15a ff9 fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m4f xfa h2 y15b ff9 fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m71 xfb h3 y15c ff9 fs1 fc1 sc0 ls0 ws0">AB</div>
			<div class="t m40 xfc h3 y15d ff9 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ Z1</div>
			<div class="t m2c xfd h3 y15e ff9 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m30 xfe h2 y15f ff9 fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m4b xff h2 y160 ff9 fs0 fc1 sc0 ls0 ws0">армований</div>
			<div class="t m66 x100 h2 y161 ff9 fs0 fc1 sc0 ls0 ws0">Ролік опорний</div>
			<div class="t m5f x101 h2 y162 ff9 fs0 fc1 sc0 ls0 ws0">Заглушка задня</div>
			<div class="t m31 x102 h2 y163 ff9 fs0 fc1 sc0 ls0 ws0">Стовп</div>
			<div class="t m62 x103 h2 y164 ff9 fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m33 x104 h2 y165 ff9 fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m72 x105 h3 y166 ff9 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ AB</div>
			<div class="t m73 x106 h3 y167 ff9 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 2 : 5</div>
			<div class="t m69 x28 h2 y168 ff9 fs0 fc1 sc0 ls0 ws0">Кінцевик магнітний</div>
			<div class="t m27 x107 h2 y169 ff9 fs0 fc1 sc0 ls0 ws0">положеня-закрито</div>
			<div class="t m6a x108 h2 y16a ff9 fs0 fc1 sc0 ls0 ws0">Рейка</div>
			<div class="t m6b x107 h2 y16b ff9 fs0 fc1 sc0 ls0 ws0">зубчата</div>
			<div class="t m50 x109 h2 y16c ff9 fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m74 x10a h2 y16d ff9 fs0 fc1 sc0 ls0 ws0">Шестерня</div>
			<div class="t m75 x8b h2 y16e ff9 fs0 fc1 sc0 ls0 ws0">Кронштейн</div>
			<div class="t m2b x107 h2 y16f ff9 fs0 fc1 sc0 ls0 ws0">привода</div>
			<div class="t m6c x10b h2 y170 ff9 fs0 fc1 sc0 ls0 ws0">Клепальна гайка</div>
			<div class="t m64 x6f h2 y171 ff9 fs0 fc1 sc0 ls0 ws0">(кріпленя зубчатої рейки)</div>
			<div class="t m2 x6e h2 y172 ff9 fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m60 x10c h2 y173 ff9 fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m27 x19 h2 y174 ff9 fs0 fc1 sc0 ls0 ws0">Ролік</div>
			<div class="t m3 x10d h2 y175 ff9 fs0 fc1 sc0 ls0 ws0">опорний</div>
			<div class="t m20 xfe h3 y176 ff9 fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ Q-Q</div>
			<div class="t m2c x10e h3 y177 ff9 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m11 x69 h2 y178 ff9 fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m76 x10f h2 y179 ff9 fs0 fc1 sc0 ls0 ws0">нащельника</div>
			<div class="t m77 x110 h2 y17a ff9 fs0 fc1 sc0 ls0 ws0">Уловлювач</div>
			<div class="t m61 x111 h2 y17b ff9 fs0 fc1 sc0 ls0 ws0">верхній</div>
			<div class="t m62 x112 h2 y17c ff9 fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m4f x113 h2 y17d ff9 fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m62 x114 h2 y17c ff9 fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m4f x115 h2 y17d ff9 fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m77 x116 h2 y17a ff9 fs0 fc1 sc0 ls0 ws0">Уловлювач</div>
			<div class="t m70 x66 h2 y17b ff9 fs0 fc1 sc0 ls0 ws0">нижній</div>
			<div class="t m21 x117 h3 y17e ff9 fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ F-F</div>
			<div class="t m2c x118 h3 y17f ff9 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m11 x119 h2 y180 ff9 fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m76 x11a h2 y181 ff9 fs0 fc1 sc0 ls0 ws0">нащельника</div>
			<div class="t m5f x11b h2 y182 ff9 fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m60 xbe h2 y183 ff9 fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m35 x11c h2 y184 ff9 fs0 fc0 sc0 ls0 ws0">Лист_6</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif; ?>
</div>

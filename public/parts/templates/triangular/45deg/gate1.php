
<?php
  $image1 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/45deg/gate_images1/image1.svg");
  $image2 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/45deg/gate_images1/image2.svg");
  $image3 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/45deg/gate_images1/image3.svg");
  $image4 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/45deg/gate_images1/image4.svg");
  $image5 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/45deg/gate_images1/image5.svg");
  $image6 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/45deg/gate_images1/image6.svg");
  if ($material == "brick") {
    $a3 = $gate_opening + 380;
  } else {
    $a3 = $gate_opening + 290;
  }
  if ( $manual_a ) {
    $a = $manual_a;
  } else {
    $a = round(($a3 + ($a3 / 2) / 1.1) / 100) * 100;
  }
  $a4 = $a - $a3 + 60;
  $b = $gate_height - $clearance_under_gate;
  if ( $guide == "60x70" ) {
    $b1 = $b - 60;
  } else if ( $guide == "85x95" ) {
    $b1 = $b - 85;
  }
  $b4 = $gate_height + 20;
  $b5 = $gate_height;
  $c = $a3 - 140;
  $c1 = ($a3 - 170) / 2;
  $d = ($b1 - 170) / 2;
  $g = round(100 + (sqrt($b1 * $b1 + $a4 * $a4)));
  $g1 = round(100 + (sqrt(($a3 - 170) / 2 * ($a3 - 170) / 2 + (($b1 - 140) * ($b1 - 140)))) / 2);
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
<link rel='stylesheet' id='pdf-stylesheet-css' href='<?=$_SERVER['APP_URL']?>/parts/styles/triangular/45deg/gate1.css' type='text/css' media='all' />
<div id="page-container">
  <?php if (strrpos($pages, "1")) : ?>
	<div id="pf1" class="pf w0 h0" data-page-no="1">
		<div class="pc pc1 w0 h0">
      <?php echo $image1; ?>
			<div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">130</div>
			<div class="t m1 x2 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">250</div>
			<div class="t m2 x3 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m1 x4 h2 y2 ff1 fs0 fc0 sc0 ls0 ws0">250</div>
			<div class="t m3 x5 h2 y3 ff1 fs0 fc0 sc0 ls0 ws0"><?php echo $l2; ?>-довжина зубчатої рейки</div>
			<div class="t m4 x6 h2 y4 ff1 fs0 fc0 sc0 ls0 ws0"><?php echo $l1; ?>-відстань між роліковими опорами</div>
			<div class="t m1 x7 h2 y5 ff1 fs0 fc0 sc0 ls0 ws0">300</div>
			<div class="t m5 x8 h2 y6 ff1 fs0 fc0 sc0 ls0 ws0"><?php echo $clearance_under_gate; ?>-відстань від низу</div>
			<div class="t m6 x9 h2 y7 ff1 fs0 fc0 sc0 ls0 ws0">воріт до фундаменту</div>
			<div class="t m7 x8 h2 y8 ff1 fs0 fc0 sc0 ls0 ws0"><?php echo $b; ?></div>
			<div class="t m8 xa h2 y9 ff1 fs0 fc0 sc0 ls0 ws0">Відстань від фундаменту до верху воріт</div>
			<div class="t m1 xb h2 ya ff1 fs0 fc0 sc0 ls0 ws0"><?php echo $a; ?></div>
			<div class="t m9 xc h2 yb ff1 fs0 fc0 sc0 ls0 ws0">450</div>
			<div class="t m9 xd h3 yc ff1 fs1 fc1 sc0 ls0 ws0">Встановлення та кріаленя кінцевого роліка показано на розрізі AD-AD, та Вид АF (Лист_6)</div>
			<div class="t ma xe h3 yc ff1 fs1 fc1 sc0 ls0 ws0">1.</div>
			<div class="t mb xe h3 yd ff1 fs1 fc1 sc0 ls0 ws0">2. Уловитель нижній встановити в складальному вигляді воріт та роліків верхніх в горізонтальній поверхні на 3-4мм</div>
			<div class="t m9 xe h3 ye ff1 fs1 fc1 sc0 ls0 ws0">вище кінцевого роліка, місцевий Вид L, Вид S, розріз F-F (Лист_1, Лист_5).</div>
			<div class="t mc xe h3 yf ff1 fs1 fc1 sc0 ls0 ws0">2. *** Уловлювач верхній та верхній ролік встановити після встановленя уловлювача нижнього, місцевий Вид R, Вид Z,</div>
			<div class="t md xe h3 y10 ff1 fs1 fc1 sc0 ls0 ws0">Вид W, Вид J (Лист_1, Лист_5, Лист_6).</div>
			<div class="t mb xe h3 y11 ff1 fs1 fc1 sc0 ls0 ws0">3. Умова розміщеня привода воріт (зацепленя шестерні в зубчатій рейці) без натягу.</div>
			<div class="t me xe h3 y12 ff1 fs1 fc1 sc0 ls0 ws0">4. Розмістити привід таким чином, щоб шестерня привода була розміщена по середині зубчатої рейки, місцевий вид АВ</div>
			<div class="t m3 xe h3 y13 ff1 fs1 fc1 sc0 ls0 ws0">(Лист_6). Бокова поверхня шестерні повиннна бути паралельна боковій поверхні рейки зубчатої.</div>
			<div class="t mf xe h3 y14 ff1 fs1 fc1 sc0 ls0 ws0">5. Магнітні кінцевики (положеня-відкрито. закрито) встановити на зубчатій рейці по факту умови повного закривання та</div>
			<div class="t m10 xe h3 y15 ff1 fs1 fc1 sc0 ls0 ws0">відкривання воріт (Лист_1).</div>
			<div class="t m11 xe h3 y16 ff1 fs1 fc1 sc0 ls0 ws0">6. Кріпленя магнітного кінцевика вказано на розрізі AD-AD, Вид АЕ (Лист_6)</div>
			<div class="t m12 xf h3 y17 ff1 fs1 fc1 sc0 ls0 ws0">Q <span class="_ _0"> </span> Q</div>
			<div class="t m12 xf h3 y18 ff1 fs1 fc1 sc0 ls0 ws0">F <span class="_ _1"> </span> F</div>
			<div class="t m12 x10 h3 y19 ff1 fs1 fc1 sc0 ls0 ws0">AD</div>
			<div class="t m12 x10 h3 y1a ff1 fs1 fc1 sc0 ls0 ws0">AD</div>
			<div class="t m13 x11 h3 y1b ff1 fs1 fc1 sc0 ls0 ws0">J</div>
			<div class="t m1 x0 h3 y1c ff1 fs1 fc1 sc0 ls0 ws0">L</div>
			<div class="t m13 x12 h3 y1d ff1 fs1 fc1 sc0 ls0 ws0">Z</div>
			<div class="t m14 x13 h3 y1e ff1 fs1 fc1 sc0 ls0 ws0">I</div>
			<div class="t m12 x14 h3 y1f ff1 fs1 fc1 sc0 ls0 ws0">Z1</div>
			<div class="t m15 x15 h2 y20 ff1 fs0 fc1 sc0 ls0 ws0">Магнітний кінцевик</div>
			<div class="t m1 x16 h2 y21 ff1 fs0 fc1 sc0 ls0 ws0">положеня-відкрито</div>
			<div class="t m15 x17 h2 y22 ff1 fs0 fc1 sc0 ls0 ws0">Магнітний кінцевик</div>
			<div class="t m16 x18 h2 y23 ff1 fs0 fc1 sc0 ls0 ws0">положеня-закрито</div>
			<div class="t m17 x19 h2 y24 ff1 fs0 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m18 x1a h2 y23 ff1 fs0 fc1 sc0 ls0 ws0">Заглушка задня</div>
			<div class="t m19 x1b h2 y25 ff1 fs0 fc0 sc0 ls0 ws0">Лист_1</div>
			<div class="t m1a x1c h3 y26 ff1 fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ Q-Q</div>
			<div class="t m4 x1d h3 y27 ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 16</div>
			<div class="t m1b x1e h3 y28 ff1 fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ F-F</div>
			<div class="t m4 x1f h3 y29 ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 16</div>
			<div class="t m1c x20 h3 y2a ff1 fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ AD-AD</div>
			<div class="t m4 x20 h3 y2b ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 16</div>
			<div class="t m1d x21 h3 y2c ff1 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ J</div>
			<div class="t m1e x22 h3 y2d ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m1f x23 h3 y2e ff1 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ L</div>
			<div class="t m1e x24 h3 y2f ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m20 x25 h3 y30 ff1 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ Z</div>
			<div class="t m1e x26 h3 y31 ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m21 x27 h3 y32 ff1 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ I</div>
			<div class="t m1e x28 h3 y33 ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m22 x29 h3 y34 ff1 fs1 fc1 sc0 ls0 ws0">ВИД Z1</div>
			<div class="t m4 x2a h3 y35 ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 16</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "2")) : ?>
	<div id="pf2" class="pf w0 h0" data-page-no="2">
		<div class="pc pc2 w0 h0">
      <?php echo $image2; ?>
			<div class="t m1 x2c h2 y37 ff2 fs0 fc0 sc0 ls0 ws0">95</div>
			<div class="t m0 x2d h2 y38 ff2 fs0 fc0 sc0 ls0 ws0">100 <span class="_ _2"> </span> 100</div>
			<div class="t m9 x13 h2 y39 ff2 fs0 fc0 sc0 ls0 ws0">240</div>
			<div class="t m23 x2e h2 y3a ff2 fs0 fc0 sc0 ls0 ws0">500</div>
			<div class="t m2 x2f h2 y3b ff2 fs0 fc0 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m24 x30 h2 y3c ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $l1; ?></div>
			<div class="t m25 x31 h2 y3d ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $b5; ?></div>
			<div class="t m7 x32 h2 y3e ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $b4; ?></div>
			<div class="t m1 x33 h2 y3f ff2 fs0 fc0 sc0 ls0 ws0">95</div>
			<div class="t m26 x34 h2 y40 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a7; ?></div>
			<div class="t m27 x35 h2 y41 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a6; ?></div>
			<div class="t m12 x36 h3 y42 ff2 fs1 fc1 sc0 ls0 ws0">A <span class="_ _3"> </span> A</div>
			<div class="t m12 x37 h3 y43 ff2 fs1 fc1 sc0 ls0 ws0">N</div>
			<div class="t m27 x38 h2 y44 ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m28 x39 h2 y45 ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m29 x30 h2 y46 ff2 fs0 fc1 sc0 ls0 ws0">для роліка опорного</div>
			<div class="t m1 x3a h2 y47 ff2 fs0 fc1 sc0 ls0 ws0">переднього</div>
			<div class="t m27 x38 h2 y48 ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m28 x39 h2 y49 ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m29 x30 h2 y4a ff2 fs0 fc1 sc0 ls0 ws0">для роліка опорного</div>
			<div class="t m2a x3b h2 y4b ff2 fs0 fc1 sc0 ls0 ws0">заднього</div>
			<div class="t m27 x3c h2 y4c ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m28 x3d h2 y4d ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m2b xc h2 y4e ff2 fs0 fc1 sc0 ls0 ws0">для кронштейна</div>
			<div class="t m2c x3e h2 y4f ff2 fs0 fc1 sc0 ls0 ws0">привода</div>
			<div class="t m2d x3f h2 y50 ff2 fs0 fc1 sc0 ls0 ws0">Ролік задній розмістити в складальному вигляді з рамою воріт</div>
			<div class="t mf x3f h2 y51 ff2 fs0 fc1 sc0 ls0 ws0">максимально віддаленим по довжині хвостовика воріт.</div>
			<div class="t m2e x40 h2 y52 ff2 fs0 fc1 sc0 ls0 ws0">11</div>
			<div class="t m24 x41 h2 y53 ff2 fs0 fc1 sc0 ls0 ws0">10</div>
			<div class="t m27 x42 h2 y54 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a5; ?></div>
			<div class="t m1 x43 h2 y55 ff2 fs0 fc0 sc0 ls0 ws0">95</div>
			<div class="t m2f x44 h2 y56 ff2 fs0 fc0 sc0 ls0 ws0">160</div>
			<div class="t m9 x1c h2 y57 ff2 fs0 fc0 sc0 ls0 ws0">250</div>
			<div class="t m1 x45 h2 y58 ff2 fs0 fc0 sc0 ls0 ws0">60</div>
			<div class="t m25 x46 h2 y59 ff2 fs0 fc0 sc0 ls0 ws0">40</div>
			<div class="t m30 x47 h3 y5a ff2 fs1 fc1 sc0 ls0 ws0">A-A МАСШТАБ1 : 16</div>
			<div class="t m31 x48 h2 y5b ff2 fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m32 x49 h2 y5c ff2 fs0 fc1 sc0 ls0 ws0">Стовп</div>
			<div class="t m16 x4a h2 y5d ff2 fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m33 x4b h2 y5e ff2 fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m28 x4c h2 y5f ff2 fs0 fc1 sc0 ls0 ws0">(Розміщення швелера відносно стовпа)</div>
			<div class="t m27 x4d h2 y60 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a8; ?></div>
			<div class="t m23 x4e h2 y61 ff2 fs0 fc0 sc0 ls0 ws0">500</div>
			<div class="t m13 x4f h3 y62 ff2 fs1 fc1 sc0 ls0 ws0">O</div>
			<div class="t m34 x50 h3 y63 ff2 fs1 fc1 sc0 ls0 ws0">ВИД N</div>
			<div class="t m4 x51 h3 y64 ff2 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 16</div>
			<div class="t m0 x52 h2 y65 ff2 fs0 fc0 sc0 ls0 ws0">160</div>
			<div class="t m20 x53 h3 y66 ff2 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ O</div>
			<div class="t m1e x52 h3 y67 ff2 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m31 x54 h2 y68 ff2 fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m16 x55 h2 y69 ff2 fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m33 x56 h2 y6a ff2 fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m35 x9 h2 y6b ff2 fs0 fc0 sc0 ls0 ws0">Лист_2</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "3")) : ?>
	<div id="pf3" class="pf w0 h0" data-page-no="3">
		<div class="pc pc3 w0 h0">
      <?php echo $image3; ?>
			<div class="t m27 x59 h2 y6f ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $a3; ?></div>
			<div class="t m2b x5a h2 y70 ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $a; ?></div>
			<div class="t m37 x5b h8 y71 ff4 fs3 fc0 sc0 ls0 ws0"><?php echo $g; ?></div>
			<div class="t m38 x5c h2 y72 ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $b1; ?></div>
			<div class="t m7 x5d h2 y73 ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $d; ?> <span class="_ _4"> </span> <?php echo $d; ?></div>
			<div class="t m1 x5e h2 y74 ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $c; ?></div>
			<div class="t m24 x5f h2 y75 ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $c1; ?> <span class="_ _5"> </span> <?php echo $c1; ?></div>
			<div class="t m39 x60 h2 y76 ff4 fs0 fc1 sc0 ls0 ws0">A4</div>
			<div class="t m3a x61 h9 y77 ff4 fs4 fc1 sc0 ls0 ws0"><?php echo $g1; ?></div>
			<div class="t m3a x62 h9 y78 ff4 fs4 fc1 sc0 ls0 ws0"><?php echo $g1; ?></div>
			<div class="t m2b xf h3 y79 ff4 fs1 fc1 sc0 ls0 ws0">A</div>
			<div class="t m13 x63 h3 y7a ff4 fs1 fc1 sc0 ls0 ws0">B</div>
			<div class="t m1 x64 h3 y7b ff4 fs1 fc1 sc0 ls0 ws0">C</div>
			<div class="t m13 xc h3 y7c ff4 fs1 fc1 sc0 ls0 ws0">D</div>
			<div class="t m13 x65 h3 y7d ff4 fs1 fc1 sc0 ls0 ws0">R</div>
			<div class="t m3b x66 ha y7e ff4 fs5 fc1 sc0 ls0 ws0">1</div>
			<div class="t m3c x5f ha y7f ff4 fs5 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3c x67 ha y80 ff4 fs5 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3c xe ha y81 ff4 fs5 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3c x68 ha y82 ff4 fs5 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3d x67 ha y83 ff4 fs5 fc1 sc0 ls0 ws0">4</div>
			<div class="t m3c x69 ha y84 ff4 fs5 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3c x6a ha y85 ff4 fs5 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3c x6b ha y86 ff4 fs5 fc1 sc0 ls0 ws0">6</div>
			<div class="t m3c x6c ha y87 ff4 fs5 fc1 sc0 ls0 ws0">6</div>
			<div class="t m3c x6d ha y88 ff4 fs5 fc1 sc0 ls0 ws0">8</div>
			<div class="t m3c x6e ha y89 ff4 fs5 fc1 sc0 ls0 ws0">7</div>
			<div class="t m35 x6f h2 y8a ff4 fs0 fc3 sc0 ls0 ws0">Лист_3</div>
			<div class="t m1c x0 h3 y8b ff4 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ A</div>
			<div class="t m1e x44 h3 y8c ff4 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m3c x70 ha y8d ff4 fs5 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3c x4b ha y8e ff4 fs5 fc1 sc0 ls0 ws0">3</div>
			<div class="t m20 x71 h3 y8f ff4 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ B</div>
			<div class="t m1e x72 h3 y90 ff4 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m3c x73 ha y91 ff4 fs5 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3c x74 ha y92 ff4 fs5 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3b x75 ha y93 ff4 fs5 fc1 sc0 ls0 ws0">1</div>
			<div class="t m1f x55 h3 y94 ff4 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ C</div>
			<div class="t m1e x76 h3 y95 ff4 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m3c x77 ha y96 ff4 fs5 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3c x78 ha y97 ff4 fs5 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3c xb ha y98 ff4 fs5 fc1 sc0 ls0 ws0">6</div>
			<div class="t m3c x2c ha y99 ff4 fs5 fc1 sc0 ls0 ws0">8</div>
			<div class="t m20 x79 h3 y9a ff4 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ D</div>
			<div class="t m1e x7a h3 y9b ff4 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m3c x7b ha y9c ff4 fs5 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3c x7c ha y9d ff4 fs5 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3b x7d ha y9e ff4 fs5 fc1 sc0 ls0 ws0">1</div>
			<div class="t m3c x7e ha y9f ff4 fs5 fc1 sc0 ls0 ws0">7</div>
			<div class="t m20 x7f h3 ya0 ff4 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ R</div>
			<div class="t m1e x80 h3 ya1 ff4 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m3c x81 ha ya2 ff4 fs5 fc1 sc0 ls0 ws0">8</div>
			<div class="t m3c x6d ha ya3 ff4 fs5 fc1 sc0 ls0 ws0">7</div>
			<div class="t m3b x82 ha ya4 ff4 fs5 fc1 sc0 ls0 ws0">1</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "4")) : ?>
	<div id="pf4" class="pf w5 hb" data-page-no="4">
		<div class="pc pc4 w5 hb">
      <?php echo $image4; ?>
			<div class="c x83 ya6 w7 hd">
				<div class="t m36 x84 he ya7 ff5 fs6 fc1 sc0 ls0 ws0"><?php echo $g1; ?></div>
				<div class="t m36 x85 he ya8 ff5 fs6 fc1 sc0 ls0 ws0"><?php echo $c; ?></div>
				<div class="t m36 x86 he ya9 ff5 fs6 fc1 sc0 ls0 ws0"><?php echo $d; ?></div>
				<div class="t m36 x87 he yaa ff5 fs6 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3e x88 he yab ff5 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m36 x87 he yac ff5 fs6 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3e x89 he yad ff5 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m36 x3f he yae ff5 fs6 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3e x89 he yaf ff5 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m36 x8a he yb0 ff5 fs6 fc1 sc0 ls0 ws0"><?php echo $a; ?></div>
				<div class="t m36 x34 he yb1 ff5 fs6 fc1 sc0 ls0 ws0">70</div>
				<div class="t m3e x8b he yb2 ff5 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m36 x8c he yb3 ff5 fs6 fc1 sc0 ls0 ws0"><?php echo $g; ?></div>
				<div class="t m36 x8d he yb4 ff5 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3e x8e he yb5 ff5 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m36 x34 he yb6 ff5 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3e x8e he yb7 ff5 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m36 x8f he yb8 ff5 fs6 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3e x87 he yb9 ff5 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m36 x90 he yba ff5 fs6 fc1 sc0 ls0 ws0"><?php echo $a3; ?></div>
				<div class="t m36 x4a hf ybb ff5 fs7 fc1 sc0 ls0 ws0">1.</div>
				<div class="t m36 x91 hf ybc ff5 fs7 fc1 sc0 ls0 ws0">2.</div>
				<div class="t m36 x92 hf ybd ff5 fs7 fc1 sc0 ls0 ws0">3.</div>
				<div class="t m36 x91 hf ybe ff5 fs7 fc1 sc0 ls0 ws0">4.</div>
				<div class="t m36 x92 hf ybf ff5 fs7 fc1 sc0 ls0 ws0">5.</div>
				<div class="t m36 x91 hf yc0 ff5 fs7 fc1 sc0 ls0 ws0">6.</div>
				<div class="t m36 x4a hf yc1 ff5 fs7 fc1 sc0 ls0 ws0">7.</div>
				<div class="t m36 x4a hf yc2 ff5 fs7 fc1 sc0 ls0 ws0">8.</div>
				<div class="t m36 x4a hf yc3 ff5 fs7 fc1 sc0 ls0 ws0">9.</div>
				<div class="t m36 x93 he yc4 ff6 fs6 fc1 sc0 ls0 ws0"><?php echo $b5; ?></div>
				<div class="t m36 x94 he yc5 ff5 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3e x7d he yc6 ff5 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m36 x95 hf yc7 ff5 fs7 fc1 sc0 ls0 ws0">10.</div>
				<div class="t m3e x8e he yc8 ff5 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m36 x96 he yc9 ff5 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m36 x8c he yca ff6 fs6 fc1 sc0 ls0 ws0"><?php echo $b4; ?></div>
				<div class="t m36 x97 h10 ycb ff6 fs8 fc1 sc0 ls0 ws0">Порізка профілей на заготовки</div>
				<div class="t m36 x97 h10 ycc ff6 fs8 fc1 sc0 ls0 ws0">Порізка нащільника заднього</div>
				<div class="t m36 x97 h10 ycd ff6 fs8 fc1 sc0 ls0 ws0">Порізка нащільника переднього</div>
				<div class="t m36 x98 hf ybb ff6 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m36 x99 hf yce ff6 fs7 fc1 sc0 ls0 ws0">2шт.</div>
				<div class="t m36 x99 hf ycf ff6 fs7 fc1 sc0 ls0 ws0">2шт.</div>
				<div class="t m36 x98 hf yd0 ff6 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m36 x99 hf yd1 ff6 fs7 fc1 sc0 ls0 ws0">4шт.</div>
				<div class="t m36 x99 hf yd2 ff6 fs7 fc1 sc0 ls0 ws0">2шт.</div>
				<div class="t m36 x98 hf yd3 ff6 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m36 x98 hf yd4 ff6 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m36 x98 hf yd5 ff6 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m36 x9a he yd6 ff5 fs6 fc1 sc0 ls0 ws0">80</div>
				<div class="t m3e x9b he yd7 ff5 fs6 fc1 sc0 ls0 ws0">48</div>
				<div class="t m36 x9c h11 yd8 ff6 fs9 fc4 sc0 ls0 ws0">Лист_4</div>
				<div class="t m36 x9d he yd9 ff6 fs6 fc1 sc0 ls0 ws0"><?php echo $b1; ?></div>
				<div class="t m36 x34 he yda ff5 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3e x8e he ydb ff5 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m36 x8f he ydc ff5 fs6 fc1 sc0 ls0 ws0">20</div>
				<div class="t m3e x87 he ydd ff5 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m36 x9e he yde ff6 fs6 fc1 sc0 ls0 ws0"><?php echo $a4; ?></div>
				<div class="t m36 x8d he ydf ff5 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m3e x8e he ye0 ff5 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m36 x98 hf ye1 ff6 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m3f x9f h12 ye2 ff5 fsa fc1 sc0 ls0 ws0">45</div>
				<div class="t m40 xa0 h13 ye3 ff5 fsb fc1 sc0 ls0 ws0">45</div>
				<div class="t m41 xa1 h14 ye4 ff5 fsc fc1 sc0 ls0 ws0">45</div>
				<div class="t m42 x46 h13 ye5 ff5 fsb fc1 sc0 ls0 ws0">45</div>
				<div class="t m43 xa2 h15 ye6 ff5 fsd fc1 sc0 ls0 ws0">W*</div>
				<div class="t m44 xa3 h16 ye7 ff5 fse fc1 sc0 ls0 ws0">W*</div>
				<div class="t m45 xa4 h17 ye8 ff5 fsf fc1 sc0 ls0 ws0">W*</div>
				<div class="t m36 xa5 h10 ye9 ff5 fs8 fc1 sc0 ls0 ws0">1.* <span class="_ _6"> </span> <span class="ff6"> Розмір визначити по місцю при зварювані рами воріт. </span></div>
				<div class="t m46 xa2 h18 yea ff5 fs10 fc1 sc0 ls0 ws0">W*</div>
				<div class="t m47 x61 h19 yeb ff5 fs11 fc1 sc0 ls0 ws0">W*</div>
			</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[0.000000,1.000000,-1.000000,0.000000,842.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "5")) : ?>
	<div id="pf5" class="pf w0 h0" data-page-no="5">
		<div class="pc pc5 w0 h0">
      <?php echo $image5; ?>
			<div class="t m7 x92 h2 yed ff7 fs0 fc0 sc0 ls0 ws0">(**)</div>
			<div class="t m48 xa6 h2 yee ff7 fs0 fc0 sc0 ls0 ws0"><?php echo $b5; ?> (висота розміщеня уловлювача верхнього</div>
			<div class="t m49 xa7 h2 yef ff7 fs0 fc0 sc0 ls0 ws0">по висоті воріт)</div>
			<div class="t m2 xa8 h2 yf0 ff7 fs0 fc0 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m4a xa9 h2 yf1 ff7 fs0 fc0 sc0 ls0 ws0"><?php echo $b4; ?> Висота розміщеня верхнього роліка</div>
			<div class="t m48 x5a h2 yf2 ff7 fs0 fc0 sc0 ls0 ws0">по нащільнику задньому</div>
			<div class="t m1 xaa h2 yf3 ff7 fs0 fc0 sc0 ls0 ws0">95 <span class="_ _7"> </span> 95</div>
			<div class="t m8 x89 h2 yf4 ff7 fs0 fc1 sc0 ls0 ws0">Відстань від фундаменту до верху воріт</div>
			<div class="t m13 xab h2 yf5 ff7 fs0 fc1 sc0 ls0 ws0">R</div>
			<div class="t m13 xac h2 yf6 ff7 fs0 fc1 sc0 ls0 ws0">S</div>
			<div class="t m2b xad h2 yf7 ff7 fs0 fc1 sc0 ls0 ws0">Кріпленя нащільника переднього та заднього провести на закладні зварюваням.</div>
			<div class="t ma xae h2 yf7 ff7 fs0 fc1 sc0 ls0 ws0">1.</div>
			<div class="t mb xaf h2 yf8 ff7 fs0 fc1 sc0 ls0 ws0">** Уловлювач нижній розмістити в складальному вигляді з стулкою воріт та роліками</div>
			<div class="t m2e xae h2 yf8 ff7 fs0 fc1 sc0 ls0 ws0">2.</div>
			<div class="t m4b xae h2 yf9 ff7 fs0 fc1 sc0 ls0 ws0">опорними в горізонтальній поверхні на 3мм-4мм вище роліка кінцевого.</div>
			<div class="t m4c xae h2 yfa ff7 fs0 fc1 sc0 ls0 ws0">3. Ролік верхній розмістити по висоті нащільника заднього.</div>
			<div class="t m24 xb0 h2 yfb ff7 fs0 fc1 sc0 ls0 ws0">10</div>
			<div class="t m2e xab h2 yfc ff7 fs0 fc1 sc0 ls0 ws0">11</div>
			<div class="t m19 xb1 h2 yfd ff7 fs0 fc1 sc0 ls0 ws0">W</div>
			<div class="t m32 xab h2 yfe ff7 fs0 fc1 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m4d xb2 h2 yff ff7 fs0 fc1 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m4e x76 h2 yff ff7 fs0 fc1 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m19 xb3 h3 y100 ff7 fs1 fc1 sc0 ls0 ws0">W</div>
			<div class="t m13 xb4 h3 y101 ff7 fs1 fc1 sc0 ls0 ws0">R</div>
			<div class="t m13 xb5 h3 y102 ff7 fs1 fc1 sc0 ls0 ws0">S</div>
			<div class="t m4f xb6 h3 y103 ff7 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ W</div>
			<div class="t m11 xb7 h3 y104 ff7 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m4e xb8 h2 y105 ff7 fs0 fc1 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m30 xb9 h2 y106 ff7 fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m33 xba h2 y107 ff7 fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m20 x43 h3 y108 ff7 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ R</div>
			<div class="t m11 xf h3 y109 ff7 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m30 xd h2 y10a ff7 fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m50 x49 h2 y10b ff7 fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m51 xbb h2 y10c ff7 fs0 fc1 sc0 ls0 ws0">Уловитель верхній</div>
			<div class="t m20 xbc h3 y10d ff7 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ S</div>
			<div class="t m11 xbd h3 y10e ff7 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m27 xbe h2 y10f ff7 fs0 fc1 sc0 ls0 ws0">Уловитель нижній</div>
			<div class="t m30 xbf h2 y110 ff7 fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m50 xc0 h2 y111 ff7 fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m38 xc1 h2 y112 ff7 fs0 fc0 sc0 ls0 ws0"><?php echo $r1; ?></div>
			<div class="t m25 xc2 h2 y113 ff7 fs0 fc0 sc0 ls0 ws0"><?php echo $r2; ?></div>
			<div class="t m52 xc3 h1b y114 ff7 fs12 fc0 sc0 ls0 ws0">Встановити в міжцегляному</div>
			<div class="t m53 x60 h1b y115 ff7 fs12 fc0 sc0 ls0 ws0">шву на відстані півцегли</div>
			<div class="t m54 xc4 h1b y116 ff7 fs12 fc0 sc0 ls0 ws0">відносно внутнішньої</div>
			<div class="t m55 xc5 h1b y117 ff7 fs12 fc0 sc0 ls0 ws0">поверхні стовпа.</div>
			<div class="t m56 xc6 h3 y118 ff7 fs1 fc0 sc0 ls0 ws0">Встановити в міжцегляному</div>
			<div class="t m57 xc7 h3 y119 ff7 fs1 fc0 sc0 ls0 ws0">шву на відстані півцегли</div>
			<div class="t m58 xc8 h3 y11a ff7 fs1 fc0 sc0 ls0 ws0">відносно внутрішньої</div>
			<div class="t m59 xc9 h3 y11b ff7 fs1 fc0 sc0 ls0 ws0">поверхні стовпа.</div>
			<div class="t m12 x3a h3 y11c ff7 fs1 fc1 sc0 ls0 ws0">АА <span class="_ _8"> </span> АА</div>
			<div class="t m5a xca h2 y11d ff7 fs0 fc1 sc0 ls0 ws0">СЕЧЕНИЕ АА-АА</div>
			<div class="t m11 xcb h2 y11e ff7 fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m5b xc5 h2 y11f ff7 fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m11 xc7 h2 y120 ff7 fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m5b x5b h2 y121 ff7 fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m11 xcc h2 y122 ff7 fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m5b xcd h2 y123 ff7 fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m11 xcc h2 y124 ff7 fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m5b xcd h2 y125 ff7 fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m5c xce h2 y126 ff7 fs0 fc1 sc0 ls0 ws0">(4 місця)</div>
			<div class="t m15 xcf h3 y127 ff7 fs1 fc1 sc0 ls0 ws0">АА-АА</div>
			<div class="t m1e xd0 h3 y128 ff7 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m12 xd1 h3 y129 ff7 fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕАА <span class="_ _9"> </span> СЕЧЕНИЕАА</div>
			<div class="t m4 xd2 h3 y12a ff7 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 10</div>
			<div class="t m30 xd3 h2 y12b ff7 fs0 fc1 sc0 ls0 ws0">Закладна нащільника</div>
			<div class="t m35 x1b h2 y12c ff7 fs0 fc0 sc0 ls0 ws0">Лист_5</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "6")) : ?>
	<div id="pf6" class="pf w0 h0" data-page-no="6">
		<div class="pc pc6 w0 h0">
      <?php echo $image6; ?>
			<div class="t m1d x63 h3 y134 ff9 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ J</div>
			<div class="t m1e xd7 h3 y135 ff9 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m4d x57 h2 y136 ff9 fs0 fc1 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m18 xd8 h2 y137 ff9 fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5e xd9 h2 y138 ff9 fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m1f xda h3 y139 ff9 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ L</div>
			<div class="t m1e xdb h3 y13a ff9 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m32 xd8 h2 y13b ff9 fs0 fc1 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m18 x90 h2 y13c ff9 fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5e xdc h2 y13d ff9 fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m20 xdd h3 y13e ff9 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ Z</div>
			<div class="t m1e xde h3 y13f ff9 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m4e x67 h2 y140 ff9 fs0 fc1 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m18 xdf h2 y141 ff9 fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5e xc0 h2 y142 ff9 fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m9 x16 h2 y143 ff9 fs0 fc0 sc0 ls0 ws0">450</div>
			<div class="t m1 xe0 h2 y144 ff9 fs0 fc0 sc0 ls0 ws0">300</div>
			<div class="t m21 xbc h21 y145 ff9 fs15 fc1 sc0 ls0 ws0">МЕСТНЫЙ I</div>
			<div class="t m4b xe1 h21 y146 ff9 fs15 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m17 xe2 h2 y147 ff9 fs0 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t mb x31 h2 y148 ff9 fs0 fc1 sc0 ls0 ws0">Ролік</div>
			<div class="t m1 x49 h2 y149 ff9 fs0 fc1 sc0 ls0 ws0">опорний</div>
			<div class="t m50 xd8 h2 y14a ff9 fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m5f xe3 h2 y14b ff9 fs0 fc1 sc0 ls0 ws0">Нащільник задній</div>
			<div class="t m60 xe4 h2 y14c ff9 fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m19 x15 h2 y14d ff9 fs0 fc1 sc0 ls0 ws0">армований</div>
			<div class="t m61 xe5 h2 y148 ff9 fs0 fc1 sc0 ls0 ws0">Кронштейн</div>
			<div class="t m2c xaf h2 y149 ff9 fs0 fc1 sc0 ls0 ws0">привода</div>
			<div class="t m51 x76 h2 y14e ff9 fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m62 x6c h2 y14f ff9 fs0 fc1 sc0 ls0 ws0">Рейка зубчата</div>
			<div class="t m39 xe6 h21 y150 ff9 fs15 fc1 sc0 ls0 ws0">AB</div>
			<div class="t m63 xe7 h21 y151 ff9 fs15 fc1 sc0 ls0 ws0">МЕСТНЫЙ Z1</div>
			<div class="t m4b xc4 h21 y152 ff9 fs15 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m51 xe8 h2 y153 ff9 fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m64 xe9 h2 y154 ff9 fs0 fc1 sc0 ls0 ws0">Кінцевик</div>
			<div class="t m65 xea h2 y155 ff9 fs0 fc1 sc0 ls0 ws0">магнітний_закрито</div>
			<div class="t m66 x31 h21 y156 ff9 fs15 fc1 sc0 ls0 ws0">МЕСТНЫЙ AB</div>
			<div class="t m4b x1 h21 y157 ff9 fs15 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 3</div>
			<div class="t m51 xeb h2 y158 ff9 fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m67 xec h2 y159 ff9 fs0 fc1 sc0 ls0 ws0">Кінцевик магнітний</div>
			<div class="t m68 xed h2 y15a ff9 fs0 fc1 sc0 ls0 ws0">(положення-закрито)</div>
			<div class="t m69 xee h2 y15b ff9 fs0 fc1 sc0 ls0 ws0">Рейка</div>
			<div class="t m6a xef h2 y15c ff9 fs0 fc1 sc0 ls0 ws0">зубчата</div>
			<div class="t m6b xf0 h2 y15d ff9 fs0 fc1 sc0 ls0 ws0">Шестерня</div>
			<div class="t m6c xf1 h2 y15e ff9 fs0 fc1 sc0 ls0 ws0">Клепальна гайка</div>
			<div class="t m6d xf2 h2 y15f ff9 fs0 fc1 sc0 ls0 ws0">(кріпленя зубчатої рейки)</div>
			<div class="t m17 xf3 h2 y160 ff9 fs0 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t mb xf4 h2 y161 ff9 fs0 fc1 sc0 ls0 ws0">Ролік</div>
			<div class="t m1 xf5 h2 y162 ff9 fs0 fc1 sc0 ls0 ws0">опорний</div>
			<div class="t m33 xf3 h2 y163 ff9 fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m4c xd6 h2 y163 ff9 fs0 fc1 sc0 ls0 ws0">Кронштейн привода</div>
			<div class="t m6e xf6 h21 y164 ff9 fs15 fc1 sc0 ls0 ws0">AE</div>
			<div class="t m6e xf7 h21 y165 ff9 fs15 fc1 sc0 ls0 ws0">AF</div>
			<div class="t m6f xf8 h21 y166 ff9 fs15 fc1 sc0 ls0 ws0">СЕЧЕНИЕ AD-AD</div>
			<div class="t m4b xf9 h21 y167 ff9 fs15 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m23 xfa h2 y168 ff9 fs0 fc0 sc0 ls0 ws0">20</div>
			<div class="t m25 xfb h2 y169 ff9 fs0 fc0 sc0 ls0 ws0">40</div>
			<div class="t m70 xce h21 y16a ff9 fs15 fc1 sc0 ls0 ws0">МЕСТНЫЙ AE</div>
			<div class="t m15 xaf h21 y16b ff9 fs15 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 1.5</div>
			<div class="t m64 xfc h2 y16c ff9 fs0 fc1 sc0 ls0 ws0">Кінцевик</div>
			<div class="t m2b xde h2 y16d ff9 fs0 fc1 sc0 ls0 ws0">магнітний</div>
			<div class="t m71 xa4 h2 y16e ff9 fs0 fc1 sc0 ls0 ws0">відкрито</div>
			<div class="t m62 xfd h2 y16f ff9 fs0 fc1 sc0 ls0 ws0">Рейка зубчата</div>
			<div class="t m62 xfe h2 y170 ff9 fs0 fc1 sc0 ls0 ws0">Клепальна гайка</div>
			<div class="t m72 xff h2 y171 ff9 fs0 fc1 sc0 ls0 ws0">кріпленя рейки зубчатої</div>
			<div class="t m70 x6 h21 y172 ff9 fs15 fc1 sc0 ls0 ws0">МЕСТНЫЙ AF</div>
			<div class="t m4b x7d h21 y173 ff9 fs15 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 2</div>
			<div class="t m73 xe9 h2 y174 ff9 fs0 fc1 sc0 ls0 ws0">Кінцевий ролік</div>
			<div class="t m27 x100 h2 y175 ff9 fs0 fc1 sc0 ls0 ws0">Профіль</div>
			<div class="t m74 x101 h2 y176 ff9 fs0 fc1 sc0 ls0 ws0">Прижимна</div>
			<div class="t m19 xb1 h2 y177 ff9 fs0 fc1 sc0 ls0 ws0">планка</div>
			<div class="t m17 x102 h2 y178 ff9 fs0 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m75 x103 h21 y179 ff9 fs15 fc1 sc0 ls0 ws0">Q <span class="_ _a"> </span> Q</div>
			<div class="t m75 x104 h21 y17a ff9 fs15 fc1 sc0 ls0 ws0">F <span class="_ _b"> </span> F</div>
			<div class="t m63 x105 h21 y17b ff9 fs15 fc1 sc0 ls0 ws0">СЕЧЕНИЕQ-Q</div>
			<div class="t m4b xfa h21 y17c ff9 fs15 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m16 x106 h2 y17d ff9 fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m50 xa0 h2 y17e ff9 fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m4d x107 h2 y17f ff9 fs0 fc1 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m18 x108 h2 y180 ff9 fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5e x109 h2 y181 ff9 fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m76 x10a h3 y182 ff9 fs1 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m5b x10a h3 y183 ff9 fs1 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m5a xc9 h21 y184 ff9 fs15 fc1 sc0 ls0 ws0">СЕЧЕНИЕ F-F</div>
			<div class="t m4b x10b h21 y185 ff9 fs15 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m18 x10c h2 y186 ff9 fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m5e x10d h2 y187 ff9 fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m32 x10e h2 y188 ff9 fs0 fc1 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m16 x10f h2 y189 ff9 fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m50 x110 h2 y18a ff9 fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m35 x111 h3 y18b ff9 fs1 fc0 sc0 ls0 ws0">Лист_6</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
  <?php endif; ?>
</div>

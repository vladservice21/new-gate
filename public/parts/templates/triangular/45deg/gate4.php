
<?php
  $image1 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/45deg/gate_images4/image1.svg");
  $image2 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/45deg/gate_images4/image2.svg");
  $image3 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/45deg/gate_images4/image3.svg");
  $image4 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/45deg/gate_images4/image4.svg");
  $image5 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/45deg/gate_images4/image5.svg");
  $image6 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/45deg/gate_images4/image6.svg");
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
  }
  $b4 = $gate_height + 20;
  $b5 = $gate_height;
  $c = $a3 - 140;
  $c1 = round(($a3 - 260) / 5);
  $d = ($b1 - 170) / 2;
  $g = round(100 + (sqrt($b1 * $b1 + ($a4 - 60) * ($a4 - 60))));
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
<link rel='stylesheet' id='pdf-stylesheet-css' href='<?=$_SERVER['APP_URL']?>/parts/styles/triangular/45deg/gate4.css' type='text/css' media='all' />
<div id="page-container">
  <?php if (strrpos($pages, "1")) : ?>
	<div id="pf1" class="pf w0 h0" data-page-no="1">
		<div class="pc pc1 w0 h0">
      <?php echo $image1; ?>
			<div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m1 x2 h2 y2 ff1 fs0 fc1 sc0 ls0 ws0">130</div>
			<div class="t m2 x3 h2 y2 ff1 fs0 fc1 sc0 ls0 ws0">250</div>
			<div class="t m2 x4 h2 y3 ff1 fs0 fc1 sc0 ls0 ws0">300</div>
			<div class="t m3 x5 h2 y4 ff1 fs0 fc1 sc0 ls0 ws0"><?php echo $l1; ?>-відстань між роліковими опорами</div>
			<div class="t m2 x6 h2 y5 ff1 fs0 fc1 sc0 ls0 ws0">250</div>
			<div class="t m4 x7 h2 y6 ff1 fs0 fc1 sc0 ls0 ws0"><?php echo $l2; ?>-довжина зубчатої рейки</div>
			<div class="t m5 x8 h2 y7 ff1 fs0 fc1 sc0 ls0 ws0"><?php echo $a; ?></div>
			<div class="t m6 x9 h2 y8 ff1 fs0 fc1 sc0 ls0 ws0"><?php echo $clearance_under_gate; ?>-відстань від низу воріт</div>
			<div class="t m7 xa h2 y9 ff1 fs0 fc1 sc0 ls0 ws0">до фундаменту</div>
			<div class="t m1 xb h2 ya ff1 fs0 fc1 sc0 ls0 ws0">150</div>
			<div class="t m8 xa h2 yb ff1 fs0 fc1 sc0 ls0 ws0"><?php echo $b; ?></div>
			<div class="t m9 xc h2 yc ff1 fs0 fc1 sc0 ls0 ws0">Відстань від фундаменту до верху воріт</div>
			<div class="t ma xd h2 yd ff1 fs0 fc0 sc0 ls0 ws0">450</div>
			<div class="t mb x0 h3 ye ff1 fs1 fc0 sc0 ls0 ws0">Q <span class="_ _0"> </span> Q</div>
			<div class="t mc xe h3 yf ff1 fs1 fc0 sc0 ls0 ws0">J</div>
			<div class="t mb x0 h3 y10 ff1 fs1 fc0 sc0 ls0 ws0">F <span class="_ _1"> </span> F</div>
			<div class="t md xf h3 y11 ff1 fs1 fc0 sc0 ls0 ws0">L</div>
			<div class="t mb x10 h3 y12 ff1 fs1 fc2 sc0 ls0 ws0">AD</div>
			<div class="t mb x10 h3 y13 ff1 fs1 fc2 sc0 ls0 ws0">AD</div>
			<div class="t me x11 h3 y14 ff1 fs1 fc0 sc0 ls0 ws0">I</div>
			<div class="t mc x12 h3 y15 ff1 fs1 fc0 sc0 ls0 ws0">Z</div>
			<div class="t mf x13 h4 y16 ff1 fs2 fc0 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m10 x14 h4 y17 ff1 fs2 fc0 sc0 ls0 ws0">Магнітний кінцевик-положення відкрито</div>
			<div class="t m11 x15 h4 y18 ff1 fs2 fc0 sc0 ls0 ws0">Магнітний кінцевик-положення</div>
			<div class="t m12 x15 h4 y19 ff1 fs2 fc0 sc0 ls0 ws0">закрито</div>
			<div class="t m13 x16 h3 y1a ff1 fs1 fc0 sc0 ls0 ws0">СЕЧЕНИЕQ-Q</div>
			<div class="t m14 x17 h3 y1b ff1 fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 23</div>
			<div class="t m15 x18 h3 y1c ff1 fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ J</div>
			<div class="t m16 x19 h3 y1d ff1 fs1 fc0 sc0 ls0 ws0">МАСШТАБ 2 : 23</div>
			<div class="t m17 x1a h3 y1e ff1 fs1 fc0 sc0 ls0 ws0">СЕЧЕНИЕ F-F</div>
			<div class="t m14 x1b h3 y1f ff1 fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 23</div>
			<div class="t m18 x1c h3 y20 ff1 fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ L</div>
			<div class="t m16 x1b h3 y21 ff1 fs1 fc0 sc0 ls0 ws0">МАСШТАБ 2 : 23</div>
			<div class="t m19 x1d h3 y22 ff1 fs1 fc0 sc0 ls0 ws0">СЕЧЕНИЕAD-AD</div>
			<div class="t m14 x1e h3 y23 ff1 fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 23</div>
			<div class="t m1a x1f h3 y24 ff1 fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ I</div>
			<div class="t m16 x20 h3 y25 ff1 fs1 fc0 sc0 ls0 ws0">МАСШТАБ 2 : 23</div>
			<div class="t m1b x21 h4 y26 ff1 fs2 fc0 sc0 ls0 ws0">Встановлення та кріаленя кінцевого роліка показано на розрізі AD-AD, та Вид АF (Лист_6)</div>
			<div class="t m1c x22 h4 y26 ff1 fs2 fc0 sc0 ls0 ws0">1.</div>
			<div class="t m1d x22 h4 y27 ff1 fs2 fc0 sc0 ls0 ws0">2. Уловитель нижній встановити в складальному вигляді воріт та роліків верхніх в горізонтальній поверхні на 3-4мм</div>
			<div class="t ma x22 h4 y28 ff1 fs2 fc0 sc0 ls0 ws0">вище кінцевого роліка, місцевий Вид L, Вид S, розріз F-F (Лист_1, Лист_5).</div>
			<div class="t m1e x22 h4 y29 ff1 fs2 fc0 sc0 ls0 ws0">2. *** Уловлювач верхній та верхній ролік встановити після встановленя уловлювача нижнього, місцевий Вид R, Вид Z,</div>
			<div class="t m1f x22 h4 y2a ff1 fs2 fc0 sc0 ls0 ws0">Вид W, Вид J (Лист_1, Лист_5, Лист_6).</div>
			<div class="t m1d x22 h4 y2b ff1 fs2 fc0 sc0 ls0 ws0">3. Умова розміщеня привода воріт (зацепленя шестерні в зубчатій рейці) без натягу.</div>
			<div class="t m20 x22 h4 y2c ff1 fs2 fc0 sc0 ls0 ws0">4. Розмістити привід таким чином, щоб шестерня привода була розміщена по середині зубчатої рейки, місцевий вид АВ</div>
			<div class="t m4 x22 h4 y2d ff1 fs2 fc0 sc0 ls0 ws0">(Лист_6). Бокова поверхня шестерні повиннна бути паралельна боковій поверхні рейки зубчатої.</div>
			<div class="t m21 x22 h4 y2e ff1 fs2 fc0 sc0 ls0 ws0">5. Магнітні кінцевики (положеня-відкрито. закрито) встановити на зубчатій рейці по факту умови повного закривання та</div>
			<div class="t m22 x22 h4 y2f ff1 fs2 fc0 sc0 ls0 ws0">відкривання воріт (Лист_1).</div>
			<div class="t m23 x22 h4 y30 ff1 fs2 fc0 sc0 ls0 ws0">6. Кріпленя магнітного кінцевика вказано на розрізі AD-AD, Вид АЕ (Лист_6)</div>
			<div class="t m24 x23 h3 y31 ff1 fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ Z</div>
			<div class="t m16 x24 h3 y32 ff1 fs1 fc0 sc0 ls0 ws0">МАСШТАБ 2 : 23</div>
			<div class="t m25 x25 h5 y33 ff1 fs3 fc1 sc0 ls0 ws0">Лист_1</div>
			<div class="t m25 x26 h5 y34 ff1 fs3 fc0 sc0 ls0 ws0">Лист_1</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "2")) : ?>
	<div id="pf2" class="pf w0 h0" data-page-no="2">
		<div class="pc pc2 w0 h0">
      <?php echo $image2; ?>
			<div class="t m2 x28 h2 y36 ff2 fs0 fc1 sc0 ls0 ws0">95</div>
			<div class="t m1 x29 h2 y37 ff2 fs0 fc1 sc0 ls0 ws0">100 <span class="_ _2"> </span> 100</div>
			<div class="t ma x2a h2 y38 ff2 fs0 fc1 sc0 ls0 ws0">240</div>
			<div class="t m26 x2b h2 y39 ff2 fs0 fc1 sc0 ls0 ws0">500</div>
			<div class="t m0 x2c h2 y3a ff2 fs0 fc1 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m27 x2d h2 y3b ff2 fs0 fc1 sc0 ls0 ws0"><?php echo $l1; ?></div>
			<div class="t m28 x2e h2 y3c ff2 fs0 fc1 sc0 ls0 ws0"><?php echo $b5; ?></div>
			<div class="t m8 x2f h2 y3d ff2 fs0 fc1 sc0 ls0 ws0"><?php echo $b4; ?></div>
			<div class="t m2 x30 h2 y3e ff2 fs0 fc1 sc0 ls0 ws0">95</div>
			<div class="t m29 x31 h2 y3f ff2 fs0 fc1 sc0 ls0 ws0"><?php echo $a7; ?></div>
			<div class="t m2a x32 h2 y40 ff2 fs0 fc1 sc0 ls0 ws0"><?php echo $a6; ?></div>
			<div class="t mb x33 h4 y41 ff2 fs2 fc0 sc0 ls0 ws0">A <span class="_ _3"> </span> A</div>
			<div class="t mb x34 h4 y42 ff2 fs2 fc0 sc0 ls0 ws0">N</div>
			<div class="t m2a x35 h2 y43 ff2 fs0 fc0 sc0 ls0 ws0">Вихід</div>
			<div class="t m2b xd h2 y44 ff2 fs0 fc0 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m2c x2d h2 y45 ff2 fs0 fc0 sc0 ls0 ws0">для роліка опорного</div>
			<div class="t m2 x36 h2 y46 ff2 fs0 fc0 sc0 ls0 ws0">переднього</div>
			<div class="t m2a x35 h2 y47 ff2 fs0 fc0 sc0 ls0 ws0">Вихід</div>
			<div class="t m2b xd h2 y48 ff2 fs0 fc0 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m2c x2d h2 y49 ff2 fs0 fc0 sc0 ls0 ws0">для роліка опорного</div>
			<div class="t m2d x37 h2 y4a ff2 fs0 fc0 sc0 ls0 ws0">заднього</div>
			<div class="t m2a x38 h2 y4b ff2 fs0 fc0 sc0 ls0 ws0">Вихід</div>
			<div class="t m2b x39 h2 y4c ff2 fs0 fc0 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m5 x3a h2 y4d ff2 fs0 fc0 sc0 ls0 ws0">для кронштейна</div>
			<div class="t m2e x3b h2 y4e ff2 fs0 fc0 sc0 ls0 ws0">привода</div>
			<div class="t m2f x3c h2 y4f ff2 fs0 fc0 sc0 ls0 ws0">Ролік задній розмістити в складальному вигляді з рамою воріт</div>
			<div class="t m14 x3c h2 y50 ff2 fs0 fc0 sc0 ls0 ws0">максимально віддаленим по довжині хвостовика воріт.</div>
			<div class="t m30 x3d h2 y51 ff2 fs0 fc0 sc0 ls0 ws0">11</div>
			<div class="t m27 x3e h2 y52 ff2 fs0 fc0 sc0 ls0 ws0">10</div>
			<div class="t m2a x3f h2 y53 ff2 fs0 fc1 sc0 ls0 ws0"><?php echo $a5; ?></div>
			<div class="t m2 x40 h2 y54 ff2 fs0 fc1 sc0 ls0 ws0">95</div>
			<div class="t m31 x41 h2 y55 ff2 fs0 fc1 sc0 ls0 ws0">160</div>
			<div class="t ma x42 h2 y56 ff2 fs0 fc1 sc0 ls0 ws0">250</div>
			<div class="t m2 x43 h2 y57 ff2 fs0 fc1 sc0 ls0 ws0">60</div>
			<div class="t m28 x44 h2 y58 ff2 fs0 fc1 sc0 ls0 ws0">40</div>
			<div class="t m32 x45 h4 y59 ff2 fs2 fc0 sc0 ls0 ws0">A-A МАСШТАБ1 : 16</div>
			<div class="t m33 xf h2 y5a ff2 fs0 fc0 sc0 ls0 ws0">Швелер</div>
			<div class="t m34 x46 h2 y5b ff2 fs0 fc0 sc0 ls0 ws0">Стовп</div>
			<div class="t m11 x47 h2 y5c ff2 fs0 fc0 sc0 ls0 ws0">Нащільник</div>
			<div class="t m35 x48 h2 y5d ff2 fs0 fc0 sc0 ls0 ws0">задній</div>
			<div class="t m2b x49 h2 y5e ff2 fs0 fc0 sc0 ls0 ws0">(Розміщення швелера відносно стовпа)</div>
			<div class="t m2a x4a h2 y5f ff2 fs0 fc1 sc0 ls0 ws0"><?php echo $a8; ?></div>
			<div class="t m26 x4b h2 y60 ff2 fs0 fc1 sc0 ls0 ws0">500</div>
			<div class="t mc x4c h4 y61 ff2 fs2 fc0 sc0 ls0 ws0">O</div>
			<div class="t m36 x4d h4 y62 ff2 fs2 fc0 sc0 ls0 ws0">ВИД N</div>
			<div class="t m3 x4e h4 y63 ff2 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 16</div>
			<div class="t m1 x4f h2 y64 ff2 fs0 fc1 sc0 ls0 ws0">160</div>
			<div class="t m24 x50 h4 y65 ff2 fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ O</div>
			<div class="t m2f x4f h4 y66 ff2 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m33 x51 h2 y67 ff2 fs0 fc0 sc0 ls0 ws0">Швелер</div>
			<div class="t m11 x52 h2 y68 ff2 fs0 fc0 sc0 ls0 ws0">Нащільник</div>
			<div class="t m35 x53 h2 y69 ff2 fs0 fc0 sc0 ls0 ws0">задній</div>
			<div class="t m37 x54 h2 y6a ff2 fs0 fc1 sc0 ls0 ws0">Лист_2</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "3")) : ?>
	<div id="pf3" class="pf w4 h9" data-page-no="3">
		<div class="pc pc3 w4 h9">
      <?php echo $image3; ?>
			<div class="t m2a x57 h2 y6e ff4 fs0 fc1 sc0 ls0 ws0"><?php echo $a3; ?></div>
			<div class="t m27 x58 h2 y6f ff4 fs0 fc1 sc0 ls0 ws0"><?php echo $c1; ?> <span class="_ _4"> </span> <?php echo $c1; ?> <span class="_ _5"> </span> <?php echo $c1; ?></div>
			<div class="t m8 x59 h2 y70 ff4 fs0 fc1 sc0 ls0 ws0"><?php echo $d; ?> <span class="_ _6"> </span> <?php echo $d; ?></div>
			<div class="t m39 x30 h2 y71 ff4 fs0 fc1 sc0 ls0 ws0"><?php echo $b1; ?></div>
			<div class="t m8 x44 h2 y72 ff4 fs0 fc1 sc0 ls0 ws0"><?php echo $b; ?></div>
			<div class="t m5 x5a h2 y73 ff4 fs0 fc1 sc0 ls0 ws0"><?php echo $a; ?></div>
			<div class="t m2 x4 h2 y74 ff4 fs0 fc1 sc0 ls0 ws0"><?php echo $c; ?></div>
			<div class="t m27 x5b h2 y75 ff4 fs0 fc1 sc0 ls0 ws0"><?php echo $c1; ?> <span class="_ _7"> </span> <?php echo $c1; ?></div>
			<div class="t m3a x5c hb y76 ff4 fs5 fc1 sc0 ls0 ws0"><?php echo $g; ?></div>
			<div class="t m3b x5d hc y77 ff4 fs6 fc0 sc0 ls0 ws0"><?php echo $g1; ?></div>
			<div class="t m3b x4e hc y78 ff4 fs6 fc0 sc0 ls0 ws0"><?php echo $g1; ?></div>
			<div class="t m3c x5e h2 y79 ff4 fs0 fc0 sc0 ls0 ws0">A4</div>
			<div class="t m5 x5f h4 y7a ff4 fs2 fc0 sc0 ls0 ws0">A</div>
			<div class="t mc x60 h4 y7b ff4 fs2 fc0 sc0 ls0 ws0">B</div>
			<div class="t m2 x61 h4 y7c ff4 fs2 fc0 sc0 ls0 ws0">C</div>
			<div class="t mc x62 h4 y7d ff4 fs2 fc0 sc0 ls0 ws0">D</div>
			<div class="t mc x63 h4 y7e ff4 fs2 fc0 sc0 ls0 ws0">R</div>
			<div class="t m3d x64 h5 y7f ff4 fs3 fc0 sc0 ls0 ws0">1</div>
			<div class="t m2 x65 h5 y80 ff4 fs3 fc0 sc0 ls0 ws0">2</div>
			<div class="t m2 x66 h5 y81 ff4 fs3 fc0 sc0 ls0 ws0">2</div>
			<div class="t m2 x67 h5 y82 ff4 fs3 fc0 sc0 ls0 ws0">3</div>
			<div class="t m2 x68 h5 y83 ff4 fs3 fc0 sc0 ls0 ws0">3</div>
			<div class="t m3e x51 hd y84 ff5 fs7 fc0 sc0 ls0 ws0">4</div>
			<div class="t m2 x69 h5 y85 ff4 fs3 fc0 sc0 ls0 ws0">5</div>
			<div class="t m2 x69 h5 y86 ff4 fs3 fc0 sc0 ls0 ws0">5</div>
			<div class="t m2 x6a h5 y87 ff4 fs3 fc0 sc0 ls0 ws0">5</div>
			<div class="t m2 x6a h5 y88 ff4 fs3 fc0 sc0 ls0 ws0">5</div>
			<div class="t m2 x6b h5 y89 ff4 fs3 fc0 sc0 ls0 ws0">5</div>
			<div class="t m2 x6b h5 y8a ff4 fs3 fc0 sc0 ls0 ws0">5</div>
			<div class="t m3f x6c hd y8b ff5 fs7 fc0 sc0 ls0 ws0">5</div>
			<div class="t m2 x6c h5 y8c ff4 fs3 fc0 sc0 ls0 ws0">5</div>
			<div class="t m3f x6d hd y8d ff5 fs7 fc0 sc0 ls0 ws0">6</div>
			<div class="t m3f x6e hd y8e ff5 fs7 fc0 sc0 ls0 ws0">6</div>
			<div class="t m2 x6f h5 y8f ff4 fs3 fc0 sc0 ls0 ws0">7</div>
			<div class="t m3f x70 hd y90 ff5 fs7 fc0 sc0 ls0 ws0">8</div>
			<div class="t m40 x71 h4 y91 ff4 fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ A</div>
			<div class="t m23 x72 h4 y92 ff4 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m2 x73 h5 y93 ff4 fs3 fc0 sc0 ls0 ws0">2</div>
			<div class="t m2 x30 h5 y94 ff4 fs3 fc0 sc0 ls0 ws0">3</div>
			<div class="t m24 x74 h4 y95 ff4 fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ B</div>
			<div class="t m23 x64 h4 y96 ff4 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m3d x75 h5 y97 ff4 fs3 fc0 sc0 ls0 ws0">1</div>
			<div class="t m2 x76 h5 y98 ff4 fs3 fc0 sc0 ls0 ws0">3</div>
			<div class="t m2 x77 h5 y99 ff4 fs3 fc0 sc0 ls0 ws0">2</div>
			<div class="t m18 x34 h4 y9a ff4 fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ C</div>
			<div class="t m23 x78 h4 y9b ff4 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m2 x79 h5 y9c ff4 fs3 fc0 sc0 ls0 ws0">2</div>
			<div class="t m3f x7a hd y9d ff5 fs7 fc0 sc0 ls0 ws0">6</div>
			<div class="t m2 x7b h5 y9e ff4 fs3 fc0 sc0 ls0 ws0">3</div>
			<div class="t m2 x7c h5 y9f ff4 fs3 fc0 sc0 ls0 ws0">8</div>
			<div class="t m24 x7d h4 ya0 ff4 fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ D</div>
			<div class="t m23 x7e h4 ya1 ff4 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m2 x7f h5 ya2 ff4 fs3 fc0 sc0 ls0 ws0">3</div>
			<div class="t m2 x4a h5 ya3 ff4 fs3 fc0 sc0 ls0 ws0">2</div>
			<div class="t m3d x80 h5 ya4 ff4 fs3 fc0 sc0 ls0 ws0">1</div>
			<div class="t m2 x81 h5 ya5 ff4 fs3 fc0 sc0 ls0 ws0">7</div>
			<div class="t m24 x82 h4 ya6 ff4 fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ R</div>
			<div class="t m23 x83 h4 ya7 ff4 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m2 x84 h5 ya8 ff4 fs3 fc0 sc0 ls0 ws0">8</div>
			<div class="t m2 x85 h5 ya9 ff4 fs3 fc0 sc0 ls0 ws0">7</div>
			<div class="t m3d x86 h5 yaa ff4 fs3 fc0 sc0 ls0 ws0">1</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "4")) : ?>
	<div id="pf4" class="pf w6 he" data-page-no="4">
		<div class="pc pc4 w6 he">
      <?php echo $image4; ?>
			<div class="c x87 yac w8 h10">
				<div class="t m38 x88 h11 yad ff6 fs8 fc0 sc0 ls0 ws0"><?php echo $g1; ?></div>
				<div class="t m38 x89 h11 yae ff6 fs8 fc0 sc0 ls0 ws0"><?php echo $c; ?></div>
				<div class="t m38 x8a h11 yaf ff6 fs8 fc0 sc0 ls0 ws0"><?php echo $d; ?></div>
				<div class="t m38 x4 h11 yb0 ff6 fs8 fc0 sc0 ls0 ws0">20</div>
				<div class="t m41 x8b h11 yb1 ff6 fs8 fc0 sc0 ls0 ws0">30</div>
				<div class="t m38 x4 h11 yb2 ff6 fs8 fc0 sc0 ls0 ws0">20</div>
				<div class="t m41 x8c h11 yb3 ff6 fs8 fc0 sc0 ls0 ws0">30</div>
				<div class="t m38 x3c h11 yb4 ff6 fs8 fc0 sc0 ls0 ws0">20</div>
				<div class="t m41 x8c h11 yb5 ff6 fs8 fc0 sc0 ls0 ws0">30</div>
				<div class="t m38 x8d h11 yb6 ff6 fs8 fc0 sc0 ls0 ws0"><?php echo $a; ?></div>
				<div class="t m38 x31 h11 yb7 ff6 fs8 fc0 sc0 ls0 ws0">70</div>
				<div class="t m41 x8e h11 yb8 ff6 fs8 fc0 sc0 ls0 ws0">60</div>
				<div class="t m38 x8f h11 yb9 ff6 fs8 fc0 sc0 ls0 ws0"><?php echo $g; ?></div>
				<div class="t m38 x90 h11 yba ff6 fs8 fc0 sc0 ls0 ws0">60</div>
				<div class="t m41 x79 h11 ybb ff6 fs8 fc0 sc0 ls0 ws0">40</div>
				<div class="t m38 x31 h11 ybc ff6 fs8 fc0 sc0 ls0 ws0">60</div>
				<div class="t m41 x79 h11 ybd ff6 fs8 fc0 sc0 ls0 ws0">40</div>
				<div class="t m38 x91 h11 ybe ff6 fs8 fc0 sc0 ls0 ws0">20</div>
				<div class="t m41 x4 h11 ybf ff6 fs8 fc0 sc0 ls0 ws0">30</div>
				<div class="t m38 x92 h11 yc0 ff6 fs8 fc0 sc0 ls0 ws0"><?php echo $a3; ?></div>
				<div class="t m38 x47 h12 yc1 ff6 fs9 fc0 sc0 ls0 ws0">1.</div>
				<div class="t m38 x93 h12 yc2 ff6 fs9 fc0 sc0 ls0 ws0">2.</div>
				<div class="t m38 x94 h12 yc3 ff6 fs9 fc0 sc0 ls0 ws0">3.</div>
				<div class="t m38 x93 h12 yc4 ff6 fs9 fc0 sc0 ls0 ws0">4.</div>
				<div class="t m38 x94 h12 yc5 ff6 fs9 fc0 sc0 ls0 ws0">5.</div>
				<div class="t m38 x93 h12 yc6 ff6 fs9 fc0 sc0 ls0 ws0">6.</div>
				<div class="t m38 x47 h12 yc7 ff6 fs9 fc0 sc0 ls0 ws0">7.</div>
				<div class="t m38 x47 h12 yc8 ff6 fs9 fc0 sc0 ls0 ws0">8.</div>
				<div class="t m38 x47 h12 yc9 ff6 fs9 fc0 sc0 ls0 ws0">9.</div>
				<div class="t m38 x95 h11 yca ff7 fs8 fc0 sc0 ls0 ws0"><?php echo $b5; ?></div>
				<div class="t m38 x96 h11 ycb ff6 fs8 fc0 sc0 ls0 ws0">60</div>
				<div class="t m41 x97 h11 ycc ff6 fs8 fc0 sc0 ls0 ws0">40</div>
				<div class="t m38 x0 h12 ycd ff6 fs9 fc0 sc0 ls0 ws0">10.</div>
				<div class="t m41 x79 h11 yce ff6 fs8 fc0 sc0 ls0 ws0">60</div>
				<div class="t m38 x98 h11 ycf ff6 fs8 fc0 sc0 ls0 ws0">40</div>
				<div class="t m38 x8f h11 yd0 ff7 fs8 fc0 sc0 ls0 ws0"><?php echo $b4; ?></div>
				<div class="t m38 x99 h13 yd1 ff7 fsa fc0 sc0 ls0 ws0">Порізка профілей на заготовки</div>
				<div class="t m38 x99 h13 yd2 ff7 fsa fc0 sc0 ls0 ws0">Порізка нащільника заднього</div>
				<div class="t m38 x99 h13 yd3 ff7 fsa fc0 sc0 ls0 ws0">Порізка нащільника переднього</div>
				<div class="t m38 x9a h12 yc1 ff7 fs9 fc0 sc0 ls0 ws0">1шт.</div>
				<div class="t m38 x9b h12 yd4 ff7 fs9 fc0 sc0 ls0 ws0">2шт.</div>
				<div class="t m38 x9b h12 yd5 ff7 fs9 fc0 sc0 ls0 ws0">2шт.</div>
				<div class="t m38 x9a h12 yd6 ff7 fs9 fc0 sc0 ls0 ws0">1шт.</div>
				<div class="t m38 x9b h12 yd7 ff7 fs9 fc0 sc0 ls0 ws0">8шт.</div>
				<div class="t m38 x9b h12 yd8 ff7 fs9 fc0 sc0 ls0 ws0">2шт.</div>
				<div class="t m38 x9a h12 yd9 ff7 fs9 fc0 sc0 ls0 ws0">1шт.</div>
				<div class="t m38 x9a h12 yda ff7 fs9 fc0 sc0 ls0 ws0">1шт.</div>
				<div class="t m38 x9a h12 ydb ff7 fs9 fc0 sc0 ls0 ws0">1шт.</div>
				<div class="t m38 x9c h11 ydc ff6 fs8 fc0 sc0 ls0 ws0">80</div>
				<div class="t m41 x9d h11 ydd ff6 fs8 fc0 sc0 ls0 ws0">48</div>
				<div class="t m38 x9e h14 yde ff7 fsb fc4 sc0 ls0 ws0">Лист_4</div>
				<div class="t m38 x9f h11 ydf ff7 fs8 fc0 sc0 ls0 ws0"><?php echo $b1; ?></div>
				<div class="t m38 x31 h11 ye0 ff6 fs8 fc0 sc0 ls0 ws0">60</div>
				<div class="t m41 x79 h11 ye1 ff6 fs8 fc0 sc0 ls0 ws0">40</div>
				<div class="t m38 x91 h11 ye2 ff6 fs8 fc0 sc0 ls0 ws0">20</div>
				<div class="t m41 x4 h11 ye3 ff6 fs8 fc0 sc0 ls0 ws0">30</div>
				<div class="t m38 xa0 h11 ye4 ff7 fs8 fc0 sc0 ls0 ws0"><?php echo $a4; ?></div>
				<div class="t m38 x90 h11 ye5 ff6 fs8 fc0 sc0 ls0 ws0">60</div>
				<div class="t m41 x79 h11 ye6 ff6 fs8 fc0 sc0 ls0 ws0">40</div>
				<div class="t m38 x9a h12 ye7 ff7 fs9 fc0 sc0 ls0 ws0">1шт.</div>
				<div class="t m42 xa1 h15 ye8 ff6 fsc fc0 sc0 ls0 ws0">45</div>
				<div class="t m43 xa2 h16 ye9 ff6 fsd fc0 sc0 ls0 ws0">45</div>
				<div class="t m44 xa3 h17 yea ff6 fse fc0 sc0 ls0 ws0">45</div>
				<div class="t m45 x44 h16 yeb ff6 fsd fc0 sc0 ls0 ws0">45</div>
				<div class="t m46 xa4 h18 yec ff6 fsf fc0 sc0 ls0 ws0">W*</div>
				<div class="t m47 xa5 h19 yed ff6 fs10 fc0 sc0 ls0 ws0">W*</div>
				<div class="t m48 xa6 h1a yee ff6 fs11 fc0 sc0 ls0 ws0">W*</div>
				<div class="t m38 xa7 h13 yef ff6 fsa fc0 sc0 ls0 ws0">1.* <span class="_ _8"> </span> <span class="ff7"> Розмір визначити по місцю при зварювані рами воріт. </span></div>
				<div class="t m49 xa4 h1b yf0 ff6 fs12 fc0 sc0 ls0 ws0">W*</div>
				<div class="t m4a xa8 h1c yf1 ff6 fs13 fc0 sc0 ls0 ws0">W*</div>
			</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[0.000000,1.000000,-1.000000,0.000000,842.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "5")) : ?>
	<div id="pf5" class="pf w0 h0" data-page-no="5">
		<div class="pc pc5 w0 h0">
      <?php echo $image5; ?>
			<div class="t m8 x94 h2 yf5 ff9 fs0 fc1 sc0 ls0 ws0">(**)</div>
			<div class="t m4b xa9 h2 yf6 ff9 fs0 fc1 sc0 ls0 ws0"><?php echo $b5; ?> (висота розміщеня уловлювача верхнього</div>
			<div class="t m4c xaa h2 yf7 ff9 fs0 fc1 sc0 ls0 ws0">по висоті воріт)</div>
			<div class="t m0 xab h2 yf8 ff9 fs0 fc1 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m4d xac h2 yf9 ff9 fs0 fc1 sc0 ls0 ws0"><?php echo $b4; ?> Висота розміщеня верхнього роліка</div>
			<div class="t m4b xad h2 yfa ff9 fs0 fc1 sc0 ls0 ws0">по нащільнику задньому</div>
			<div class="t m2 xae h2 yfb ff9 fs0 fc1 sc0 ls0 ws0">95 <span class="_ _9"> </span> 95</div>
			<div class="t m9 x8c h2 yfc ff9 fs0 fc0 sc0 ls0 ws0">Відстань від фундаменту до верху воріт</div>
			<div class="t mc xaf h2 yfd ff9 fs0 fc0 sc0 ls0 ws0">R</div>
			<div class="t mc xb0 h2 yfe ff9 fs0 fc0 sc0 ls0 ws0">S</div>
			<div class="t m5 xb1 h2 yff ff9 fs0 fc0 sc0 ls0 ws0">Кріпленя нащільника переднього та заднього провести на закладні зварюваням.</div>
			<div class="t m1c xb2 h2 yff ff9 fs0 fc0 sc0 ls0 ws0">1.</div>
			<div class="t m1d x77 h2 y100 ff9 fs0 fc0 sc0 ls0 ws0">** Уловлювач нижній розмістити в складальному вигляді з стулкою воріт та роліками</div>
			<div class="t m30 xb2 h2 y100 ff9 fs0 fc0 sc0 ls0 ws0">2.</div>
			<div class="t m16 xb2 h2 y101 ff9 fs0 fc0 sc0 ls0 ws0">опорними в горізонтальній поверхні на 3мм-4мм вище роліка кінцевого.</div>
			<div class="t m4e xb2 h2 y102 ff9 fs0 fc0 sc0 ls0 ws0">3. Ролік верхній розмістити по висоті нащільника заднього.</div>
			<div class="t m27 xb3 h2 y103 ff9 fs0 fc0 sc0 ls0 ws0">10</div>
			<div class="t m30 xaf h2 y104 ff9 fs0 fc0 sc0 ls0 ws0">11</div>
			<div class="t m25 xb4 h2 y105 ff9 fs0 fc0 sc0 ls0 ws0">W</div>
			<div class="t m34 xaf h2 y106 ff9 fs0 fc0 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m4f xb5 h2 y107 ff9 fs0 fc0 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m50 xb6 h2 y107 ff9 fs0 fc0 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m1b xb7 h4 y108 ff9 fs2 fc0 sc0 ls0 ws0">W</div>
			<div class="t mc x23 h4 y109 ff9 fs2 fc0 sc0 ls0 ws0">R</div>
			<div class="t mc xb8 h4 y10a ff9 fs2 fc0 sc0 ls0 ws0">S</div>
			<div class="t m51 xb9 h4 y10b ff9 fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ W</div>
			<div class="t m23 xba h4 y10c ff9 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m50 x6d h2 y10d ff9 fs0 fc0 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m32 xbb h2 y10e ff9 fs0 fc0 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m35 xbc h2 y10f ff9 fs0 fc0 sc0 ls0 ws0">задній</div>
			<div class="t m24 x40 h4 y110 ff9 fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ R</div>
			<div class="t m23 xbd h4 y111 ff9 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m32 x67 h2 y112 ff9 fs0 fc0 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m52 x46 h2 y113 ff9 fs0 fc0 sc0 ls0 ws0">передній</div>
			<div class="t m53 xbe h2 y114 ff9 fs0 fc0 sc0 ls0 ws0">Уловитель верхній</div>
			<div class="t m24 xbf h4 y115 ff9 fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ S</div>
			<div class="t m23 xc0 h4 y116 ff9 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m2a xc1 h2 y117 ff9 fs0 fc0 sc0 ls0 ws0">Уловитель нижній</div>
			<div class="t m32 xc2 h2 y118 ff9 fs0 fc0 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m52 xc3 h2 y119 ff9 fs0 fc0 sc0 ls0 ws0">передній</div>
			<div class="t m39 x7e h2 y11a ff9 fs0 fc1 sc0 ls0 ws0"><?php echo $r1; ?></div>
			<div class="t m28 xc4 h2 y11b ff9 fs0 fc1 sc0 ls0 ws0"><?php echo $r2; ?></div>
			<div class="t m54 xc5 h20 y11c ff9 fs15 fc1 sc0 ls0 ws0">Встановити в міжцегляному</div>
			<div class="t m55 xc6 h20 y11d ff9 fs15 fc1 sc0 ls0 ws0">шву на відстані півцегли</div>
			<div class="t m56 xc7 h20 y11e ff9 fs15 fc1 sc0 ls0 ws0">відносно внутнішньої</div>
			<div class="t m57 xc8 h20 y11f ff9 fs15 fc1 sc0 ls0 ws0">поверхні стовпа.</div>
			<div class="t m58 xc9 h4 y120 ff9 fs2 fc1 sc0 ls0 ws0">Встановити в міжцегляному</div>
			<div class="t m59 xca h4 y121 ff9 fs2 fc1 sc0 ls0 ws0">шву на відстані півцегли</div>
			<div class="t m5a xcb h4 y122 ff9 fs2 fc1 sc0 ls0 ws0">відносно внутрішньої</div>
			<div class="t m5b xcc h4 y123 ff9 fs2 fc1 sc0 ls0 ws0">поверхні стовпа.</div>
			<div class="t mb x36 h4 y124 ff9 fs2 fc0 sc0 ls0 ws0">АА <span class="_ _a"> </span> АА</div>
			<div class="t m5c x66 h2 y125 ff9 fs0 fc0 sc0 ls0 ws0">СЕЧЕНИЕ АА-АА</div>
			<div class="t m23 xcd h2 y126 ff9 fs0 fc0 sc0 ls0 ws0">Закладна</div>
			<div class="t m5d xc8 h2 y127 ff9 fs0 fc0 sc0 ls0 ws0">нащільника</div>
			<div class="t m23 xca h2 y128 ff9 fs0 fc0 sc0 ls0 ws0">Закладна</div>
			<div class="t m5d xce h2 y129 ff9 fs0 fc0 sc0 ls0 ws0">нащільника</div>
			<div class="t m23 xcf h2 y12a ff9 fs0 fc0 sc0 ls0 ws0">Закладна</div>
			<div class="t m5d xd0 h2 y12b ff9 fs0 fc0 sc0 ls0 ws0">нащільника</div>
			<div class="t m23 xcf h2 y12c ff9 fs0 fc0 sc0 ls0 ws0">Закладна</div>
			<div class="t m5d xd0 h2 y12d ff9 fs0 fc0 sc0 ls0 ws0">нащільника</div>
			<div class="t m5e xd1 h2 y12e ff9 fs0 fc0 sc0 ls0 ws0">(4 місця)</div>
			<div class="t m5f xd2 h4 y12f ff9 fs2 fc0 sc0 ls0 ws0">АА-АА</div>
			<div class="t m2f xd3 h4 y130 ff9 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t mb xd4 h4 y131 ff9 fs2 fc0 sc0 ls0 ws0">СЕЧЕНИЕАА <span class="_ _b"> </span> СЕЧЕНИЕАА</div>
			<div class="t m3 xd5 h4 y132 ff9 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 10</div>
			<div class="t m32 xd6 h2 y133 ff9 fs0 fc0 sc0 ls0 ws0">Закладна нащільника</div>
			<div class="t m37 xd7 h2 y134 ff9 fs0 fc1 sc0 ls0 ws0">Лист_5</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "6")) : ?>
	<div id="pf6" class="pf w0 h0" data-page-no="6">
		<div class="pc pc6 w0 h0">
      <?php echo $image6; ?>
			<div class="t m15 xdc h4 y13c ffb fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ J</div>
			<div class="t m2f xdd h4 y13d ffb fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m4f x55 h2 y13e ffb fs0 fc0 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m61 xde h2 y13f ffb fs0 fc0 sc0 ls0 ws0">Стулка</div>
			<div class="t m62 xdf h2 y140 ffb fs0 fc0 sc0 ls0 ws0">воріт</div>
			<div class="t m18 xe0 h4 y141 ffb fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ L</div>
			<div class="t m2f x13 h4 y142 ffb fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m34 xde h2 y143 ffb fs0 fc0 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m61 x92 h2 y144 ffb fs0 fc0 sc0 ls0 ws0">Стулка</div>
			<div class="t m62 x69 h2 y145 ffb fs0 fc0 sc0 ls0 ws0">воріт</div>
			<div class="t m24 x65 h4 y146 ffb fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ Z</div>
			<div class="t m2f xe1 h4 y147 ffb fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m50 xe2 h2 y148 ffb fs0 fc0 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m61 xe3 h2 y149 ffb fs0 fc0 sc0 ls0 ws0">Стулка</div>
			<div class="t m62 xc3 h2 y14a ffb fs0 fc0 sc0 ls0 ws0">воріт</div>
			<div class="t ma xe4 h2 y14b ffb fs0 fc1 sc0 ls0 ws0">450</div>
			<div class="t m2 xe5 h2 y14c ffb fs0 fc1 sc0 ls0 ws0">300</div>
			<div class="t m1a xbf h3 y14d ffb fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ I</div>
			<div class="t m63 xe6 h3 y14e ffb fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m2c xe7 h2 y14f ffb fs0 fc0 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m1d x2e h2 y150 ffb fs0 fc0 sc0 ls0 ws0">Ролік</div>
			<div class="t m2 x46 h2 y151 ffb fs0 fc0 sc0 ls0 ws0">опорний</div>
			<div class="t m52 xde h2 y152 ffb fs0 fc0 sc0 ls0 ws0">передній</div>
			<div class="t m64 xe8 h2 y153 ffb fs0 fc0 sc0 ls0 ws0">Нащільник задній</div>
			<div class="t m65 xe9 h2 y154 ffb fs0 fc0 sc0 ls0 ws0">Швелер</div>
			<div class="t m25 xea h2 y155 ffb fs0 fc0 sc0 ls0 ws0">армований</div>
			<div class="t m66 xeb h2 y150 ffb fs0 fc0 sc0 ls0 ws0">Кронштейн</div>
			<div class="t m2e x77 h2 y151 ffb fs0 fc0 sc0 ls0 ws0">привода</div>
			<div class="t m53 xb6 h2 y156 ffb fs0 fc0 sc0 ls0 ws0">Привід</div>
			<div class="t m67 xec h2 y157 ffb fs0 fc0 sc0 ls0 ws0">Рейка зубчата</div>
			<div class="t m15 xed h3 y158 ffb fs1 fc0 sc0 ls0 ws0">AB</div>
			<div class="t m13 xee h3 y159 ffb fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ Z1</div>
			<div class="t m63 xc7 h3 y15a ffb fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m53 xef h2 y15b ffb fs0 fc0 sc0 ls0 ws0">Привід</div>
			<div class="t m68 xf0 h2 y15c ffb fs0 fc0 sc0 ls0 ws0">Кінцевик</div>
			<div class="t m69 xf1 h2 y15d ffb fs0 fc0 sc0 ls0 ws0">магнітний_закрито</div>
			<div class="t m6a x2e h3 y15e ffb fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ AB</div>
			<div class="t m63 xf2 h3 y15f ffb fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 3</div>
			<div class="t m53 xf3 h2 y160 ffb fs0 fc0 sc0 ls0 ws0">Привід</div>
			<div class="t m6b xf4 h2 y161 ffb fs0 fc0 sc0 ls0 ws0">Кінцевик магнітний</div>
			<div class="t m6c xf5 h2 y162 ffb fs0 fc0 sc0 ls0 ws0">(положення-закрито)</div>
			<div class="t m6d xf6 h2 y163 ffb fs0 fc0 sc0 ls0 ws0">Рейка</div>
			<div class="t m6e xf7 h2 y164 ffb fs0 fc0 sc0 ls0 ws0">зубчата</div>
			<div class="t m6f x2 h2 y165 ffb fs0 fc0 sc0 ls0 ws0">Шестерня</div>
			<div class="t m70 xf8 h2 y166 ffb fs0 fc0 sc0 ls0 ws0">Клепальна гайка</div>
			<div class="t m71 xf9 h2 y167 ffb fs0 fc0 sc0 ls0 ws0">(кріпленя зубчатої рейки)</div>
			<div class="t m2c xfa h2 y168 ffb fs0 fc0 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m1d xfb h2 y169 ffb fs0 fc0 sc0 ls0 ws0">Ролік</div>
			<div class="t m2 xfc h2 y16a ffb fs0 fc0 sc0 ls0 ws0">опорний</div>
			<div class="t m35 xfa h2 y16b ffb fs0 fc0 sc0 ls0 ws0">задній</div>
			<div class="t m4e xdb h2 y16b ffb fs0 fc0 sc0 ls0 ws0">Кронштейн привода</div>
			<div class="t m72 xfd h3 y16c ffb fs1 fc0 sc0 ls0 ws0">AE</div>
			<div class="t m72 xfe h3 y16d ffb fs1 fc0 sc0 ls0 ws0">AF</div>
			<div class="t m73 xff h3 y16e ffb fs1 fc0 sc0 ls0 ws0">СЕЧЕНИЕ AD-AD</div>
			<div class="t m63 x100 h3 y16f ffb fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m26 x101 h2 y170 ffb fs0 fc1 sc0 ls0 ws0">20</div>
			<div class="t m28 x58 h2 y171 ffb fs0 fc1 sc0 ls0 ws0">40</div>
			<div class="t m74 xd1 h3 y172 ffb fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ AE</div>
			<div class="t m5f x77 h3 y173 ffb fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 1.5</div>
			<div class="t m68 x102 h2 y174 ffb fs0 fc0 sc0 ls0 ws0">Кінцевик</div>
			<div class="t m5 xe1 h2 y175 ffb fs0 fc0 sc0 ls0 ws0">магнітний</div>
			<div class="t m75 xa6 h2 y176 ffb fs0 fc0 sc0 ls0 ws0">відкрито</div>
			<div class="t m67 x103 h2 y177 ffb fs0 fc0 sc0 ls0 ws0">Рейка зубчата</div>
			<div class="t m67 x104 h2 y178 ffb fs0 fc0 sc0 ls0 ws0">Клепальна гайка</div>
			<div class="t m76 x105 h2 y179 ffb fs0 fc0 sc0 ls0 ws0">кріпленя рейки зубчатої</div>
			<div class="t m74 x106 h3 y17a ffb fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ AF</div>
			<div class="t m63 x97 h3 y17b ffb fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 2</div>
			<div class="t m77 xf0 h2 y17c ffb fs0 fc0 sc0 ls0 ws0">Кінцевий ролік</div>
			<div class="t m2a x107 h2 y17d ffb fs0 fc0 sc0 ls0 ws0">Профіль</div>
			<div class="t m78 x108 h2 y17e ffb fs0 fc0 sc0 ls0 ws0">Прижимна</div>
			<div class="t m25 xb4 h2 y17f ffb fs0 fc0 sc0 ls0 ws0">планка</div>
			<div class="t m2c x11 h2 y180 ffb fs0 fc0 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t mb x109 h3 y181 ffb fs1 fc0 sc0 ls0 ws0">Q <span class="_ _c"> </span> Q</div>
			<div class="t mb x10a h3 y182 ffb fs1 fc0 sc0 ls0 ws0">F <span class="_ _d"> </span> F</div>
			<div class="t m13 x10b h3 y183 ffb fs1 fc0 sc0 ls0 ws0">СЕЧЕНИЕQ-Q</div>
			<div class="t m63 x101 h3 y184 ffb fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m11 x10c h2 y185 ffb fs0 fc0 sc0 ls0 ws0">Нащільник</div>
			<div class="t m52 xa2 h2 y186 ffb fs0 fc0 sc0 ls0 ws0">передній</div>
			<div class="t m4f x10d h2 y187 ffb fs0 fc0 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m61 x12 h2 y188 ffb fs0 fc0 sc0 ls0 ws0">Стулка</div>
			<div class="t m62 x10e h2 y189 ffb fs0 fc0 sc0 ls0 ws0">воріт</div>
			<div class="t m79 x5a h4 y18a ffb fs2 fc0 sc0 ls0 ws0">Закладна</div>
			<div class="t m5d x5a h4 y18b ffb fs2 fc0 sc0 ls0 ws0">нащільника</div>
			<div class="t m17 xcc h3 y18c ffb fs1 fc0 sc0 ls0 ws0">СЕЧЕНИЕ F-F</div>
			<div class="t m63 x10f h3 y18d ffb fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m61 x110 h2 y18e ffb fs0 fc0 sc0 ls0 ws0">Стулка</div>
			<div class="t m62 x111 h2 y18f ffb fs0 fc0 sc0 ls0 ws0">воріт</div>
			<div class="t m34 x112 h2 y190 ffb fs0 fc0 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m11 x113 h2 y191 ffb fs0 fc0 sc0 ls0 ws0">Нащільник</div>
			<div class="t m52 x114 h2 y192 ffb fs0 fc0 sc0 ls0 ws0">передній</div>
			<div class="t m37 x115 h4 y193 ffb fs2 fc1 sc0 ls0 ws0">Лист_6</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
  <?php endif; ?>
</div>

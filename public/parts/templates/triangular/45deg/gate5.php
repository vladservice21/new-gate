
<?php
  $image1 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/45deg/gate_images5/image1.svg");
  $image2 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/45deg/gate_images5/image2.svg");
  $image3 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/45deg/gate_images5/image3.svg");
  $image4 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/45deg/gate_images5/image4.svg");
  $image5 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/45deg/gate_images5/image5.svg");
  $image6 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/45deg/gate_images5/image6.svg");
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
  $c1 = round(($a3 - 290) / 6);
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
<link rel='stylesheet' id='pdf-stylesheet-css' href='<?=$_SERVER['APP_URL']?>/parts/styles/triangular/45deg/gate5.css' type='text/css' media='all' />
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
			<div class="t mb x0 h3 ye ff1 fs1 fc0 sc0 ls0 ws0">Q<span class="_ _0"> </span>Q</div>
			<div class="t mc xe h3 yf ff1 fs1 fc0 sc0 ls0 ws0">J</div>
			<div class="t mb x0 h3 y10 ff1 fs1 fc0 sc0 ls0 ws0">F<span class="_ _1"> </span>F</div>
			<div class="t md xf h3 y11 ff1 fs1 fc0 sc0 ls0 ws0">L</div>
			<div class="t mb x10 h3 y12 ff1 fs1 fc2 sc0 ls0 ws0">AD</div>
			<div class="t mb x10 h3 y13 ff1 fs1 fc2 sc0 ls0 ws0">AD</div>
			<div class="t mc x11 h3 y14 ff1 fs1 fc0 sc0 ls0 ws0">Z</div>
			<div class="t me x12 h3 y15 ff1 fs1 fc0 sc0 ls0 ws0">I</div>
			<div class="t mf x13 h4 y16 ff1 fs2 fc0 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m10 x14 h4 y17 ff1 fs2 fc0 sc0 ls0 ws0">Магнітний кінцевик-положення відкрито</div>
			<div class="t m11 x15 h4 y18 ff1 fs2 fc0 sc0 ls0 ws0">Магнітний кінцевик-положення</div>
			<div class="t m12 x15 h4 y19 ff1 fs2 fc0 sc0 ls0 ws0">закрито</div>
			<div class="t m13 x16 h3 y1a ff1 fs1 fc0 sc0 ls0 ws0">СЕЧЕНИЕQ-Q</div>
			<div class="t m14 x17 h3 y1b ff1 fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 23</div>
			<div class="t m15 x18 h3 y1c ff1 fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ J</div>
			<div class="t m16 x19 h3 y1d ff1 fs1 fc0 sc0 ls0 ws0">МАСШТАБ 2 : 23</div>
			<div class="t m17 x1a h3 y1e ff1 fs1 fc0 sc0 ls0 ws0">СЕЧЕНИЕ F-F</div>
			<div class="t m14 x1b h3 y1f ff1 fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 25</div>
			<div class="t m18 x1c h3 y20 ff1 fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ L</div>
			<div class="t m16 x1b h3 y21 ff1 fs1 fc0 sc0 ls0 ws0">МАСШТАБ 2 : 23</div>
			<div class="t m19 x1d h3 y22 ff1 fs1 fc0 sc0 ls0 ws0">СЕЧЕНИЕAD-AD</div>
			<div class="t m14 x1e h3 y23 ff1 fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 23</div>
			<div class="t m1a x1f h4 y24 ff1 fs2 fc0 sc0 ls0 ws0">Встановлення та кріаленя кінцевого роліка показано на розрізі AD-AD, та Вид АF (Лист_6)</div>
			<div class="t m1b x20 h4 y24 ff1 fs2 fc0 sc0 ls0 ws0">1.</div>
			<div class="t m1c x20 h4 y25 ff1 fs2 fc0 sc0 ls0 ws0">2. Уловитель нижній встановити в складальному вигляді воріт та роліків верхніх в горізонтальній поверхні на 3-4мм</div>
			<div class="t ma x20 h4 y26 ff1 fs2 fc0 sc0 ls0 ws0">вище кінцевого роліка, місцевий Вид L, Вид S, розріз F-F (Лист_1, Лист_5).</div>
			<div class="t m1d x20 h4 y27 ff1 fs2 fc0 sc0 ls0 ws0">2. *** Уловлювач верхній та верхній ролік встановити після встановленя уловлювача нижнього, місцевий Вид R, Вид Z,</div>
			<div class="t m1e x20 h4 y28 ff1 fs2 fc0 sc0 ls0 ws0">Вид W, Вид J (Лист_1, Лист_5, Лист_6).</div>
			<div class="t m1c x20 h4 y29 ff1 fs2 fc0 sc0 ls0 ws0">3. Умова розміщеня привода воріт (зацепленя шестерні в зубчатій рейці) без натягу.</div>
			<div class="t m1f x20 h4 y2a ff1 fs2 fc0 sc0 ls0 ws0">4. Розмістити привід таким чином, щоб шестерня привода була розміщена по середині зубчатої рейки, місцевий вид АВ</div>
			<div class="t m4 x20 h4 y2b ff1 fs2 fc0 sc0 ls0 ws0">(Лист_6). Бокова поверхня шестерні повиннна бути паралельна боковій поверхні рейки зубчатої.</div>
			<div class="t m20 x20 h4 y2c ff1 fs2 fc0 sc0 ls0 ws0">5. Магнітні кінцевики (положеня-відкрито. закрито) встановити на зубчатій рейці по факту умови повного закривання та</div>
			<div class="t m21 x20 h4 y2d ff1 fs2 fc0 sc0 ls0 ws0">відкривання воріт (Лист_1).</div>
			<div class="t m22 x20 h4 y2e ff1 fs2 fc0 sc0 ls0 ws0">6. Кріпленя магнітного кінцевика вказано на розрізі AD-AD, Вид АЕ (Лист_6)</div>
			<div class="t m23 x21 h3 y2f ff1 fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ Z</div>
			<div class="t m16 x22 h3 y30 ff1 fs1 fc0 sc0 ls0 ws0">МАСШТАБ 2 : 23</div>
			<div class="t m24 x23 h5 y31 ff1 fs3 fc1 sc0 ls0 ws0">Лист_1</div>
			<div class="t m24 x24 h5 y32 ff1 fs3 fc0 sc0 ls0 ws0">Лист_1</div>
			<div class="t m25 x25 h3 y33 ff1 fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ I</div>
			<div class="t m16 x26 h3 y34 ff1 fs1 fc0 sc0 ls0 ws0">МАСШТАБ 2 : 25</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "2")) : ?>
	<div id="pf2" class="pf w0 h0" data-page-no="2">
		<div class="pc pc2 w0 h0">
      <?php echo $image2; ?>
			<div class="t m2 x28 h2 y36 ff2 fs0 fc1 sc0 ls0 ws0">95</div>
			<div class="t m1 x29 h2 y37 ff2 fs0 fc1 sc0 ls0 ws0">100<span class="_ _2"> </span>100</div>
			<div class="t ma x2a h2 y38 ff2 fs0 fc1 sc0 ls0 ws0">240</div>
			<div class="t m26 x2b h2 y39 ff2 fs0 fc1 sc0 ls0 ws0">500</div>
			<div class="t m0 x2c h2 y3a ff2 fs0 fc1 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m27 x2d h2 y3b ff2 fs0 fc1 sc0 ls0 ws0"><?php echo $l1; ?></div>
			<div class="t m28 x2e h2 y3c ff2 fs0 fc1 sc0 ls0 ws0"><?php echo $b5; ?></div>
			<div class="t m8 x2f h2 y3d ff2 fs0 fc1 sc0 ls0 ws0"><?php echo $b4; ?></div>
			<div class="t m2 x30 h2 y3e ff2 fs0 fc1 sc0 ls0 ws0">95</div>
			<div class="t m29 x31 h2 y3f ff2 fs0 fc1 sc0 ls0 ws0"><?php echo $a7; ?></div>
			<div class="t m2a x32 h2 y40 ff2 fs0 fc1 sc0 ls0 ws0"><?php echo $a6; ?></div>
			<div class="t mb x33 h4 y41 ff2 fs2 fc0 sc0 ls0 ws0">A<span class="_ _3"> </span>A</div>
			<div class="t mb x34 h4 y42 ff2 fs2 fc0 sc0 ls0 ws0">N</div>
			<div class="t m2a x35 h2 y43 ff2 fs0 fc0 sc0 ls0 ws0">Вихід</div>
			<div class="t m2b x36 h2 y44 ff2 fs0 fc0 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m2c x2d h2 y45 ff2 fs0 fc0 sc0 ls0 ws0">для роліка опорного</div>
			<div class="t m2 x37 h2 y46 ff2 fs0 fc0 sc0 ls0 ws0">переднього</div>
			<div class="t m2a x35 h2 y47 ff2 fs0 fc0 sc0 ls0 ws0">Вихід</div>
			<div class="t m2b x36 h2 y48 ff2 fs0 fc0 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m2c x2d h2 y49 ff2 fs0 fc0 sc0 ls0 ws0">для роліка опорного</div>
			<div class="t m2d x38 h2 y4a ff2 fs0 fc0 sc0 ls0 ws0">заднього</div>
			<div class="t m2a x39 h2 y4b ff2 fs0 fc0 sc0 ls0 ws0">Вихід</div>
			<div class="t m2b x3a h2 y4c ff2 fs0 fc0 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m5 x3b h2 y4d ff2 fs0 fc0 sc0 ls0 ws0">для кронштейна</div>
			<div class="t m2e x3c h2 y4e ff2 fs0 fc0 sc0 ls0 ws0">привода</div>
			<div class="t m2f x3d h2 y4f ff2 fs0 fc0 sc0 ls0 ws0">Ролік задній розмістити в складальному вигляді з рамою воріт</div>
			<div class="t m14 x3d h2 y50 ff2 fs0 fc0 sc0 ls0 ws0">максимально віддаленим по довжині хвостовика воріт.</div>
			<div class="t m30 x3e h2 y51 ff2 fs0 fc0 sc0 ls0 ws0">11</div>
			<div class="t m27 x3f h2 y52 ff2 fs0 fc0 sc0 ls0 ws0">10</div>
			<div class="t m2a x40 h2 y53 ff2 fs0 fc1 sc0 ls0 ws0"><?php echo $a5; ?></div>
			<div class="t m2 x41 h2 y54 ff2 fs0 fc1 sc0 ls0 ws0">95</div>
			<div class="t m31 x42 h2 y55 ff2 fs0 fc1 sc0 ls0 ws0">160</div>
			<div class="t ma x43 h2 y56 ff2 fs0 fc1 sc0 ls0 ws0">250</div>
			<div class="t m2 x44 h2 y57 ff2 fs0 fc1 sc0 ls0 ws0">60</div>
			<div class="t m28 x6 h2 y58 ff2 fs0 fc1 sc0 ls0 ws0">40</div>
			<div class="t m32 x45 h4 y59 ff2 fs2 fc0 sc0 ls0 ws0">A-A МАСШТАБ1 : 16</div>
			<div class="t m33 x46 h2 y5a ff2 fs0 fc0 sc0 ls0 ws0">Швелер</div>
			<div class="t m34 x47 h2 y5b ff2 fs0 fc0 sc0 ls0 ws0">Стовп</div>
			<div class="t m11 x48 h2 y5c ff2 fs0 fc0 sc0 ls0 ws0">Нащільник</div>
			<div class="t m35 x49 h2 y5d ff2 fs0 fc0 sc0 ls0 ws0">задній</div>
			<div class="t m2b x4a h2 y5e ff2 fs0 fc0 sc0 ls0 ws0">(Розміщення швелера відносно стовпа)</div>
			<div class="t m2a x4b h2 y5f ff2 fs0 fc1 sc0 ls0 ws0"><?php echo $a8; ?></div>
			<div class="t m26 x4c h2 y60 ff2 fs0 fc1 sc0 ls0 ws0">500</div>
			<div class="t mc x4d h4 y61 ff2 fs2 fc0 sc0 ls0 ws0">O</div>
			<div class="t m36 x4e h4 y62 ff2 fs2 fc0 sc0 ls0 ws0">ВИД N</div>
			<div class="t m3 x4f h4 y63 ff2 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 16</div>
			<div class="t m1 x50 h2 y64 ff2 fs0 fc1 sc0 ls0 ws0">160</div>
			<div class="t m23 x51 h4 y65 ff2 fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ O</div>
			<div class="t m2f x50 h4 y66 ff2 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m33 x52 h2 y67 ff2 fs0 fc0 sc0 ls0 ws0">Швелер</div>
			<div class="t m11 x53 h2 y68 ff2 fs0 fc0 sc0 ls0 ws0">Нащільник</div>
			<div class="t m35 x54 h2 y69 ff2 fs0 fc0 sc0 ls0 ws0">задній</div>
			<div class="t m37 x55 h2 y6a ff2 fs0 fc1 sc0 ls0 ws0">Лист_2</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "3")) : ?>
	<div id="pf3" class="pf w0 h0" data-page-no="3">
		<div class="pc pc3 w0 h0">
      <?php echo $image3; ?>
			<div class="t m39 x58 h2 y6e ff4 fs0 fc1 sc0 ls0 ws0"><?php echo $b1; ?></div>
			<div class="t m8 x59 h2 y6f ff4 fs0 fc1 sc0 ls0 ws0"><?php echo $b; ?></div>
			<div class="t m2a x5a h2 y70 ff4 fs0 fc1 sc0 ls0 ws0"><?php echo $a3; ?></div>
			<div class="t m2 x5b h2 y71 ff4 fs0 fc1 sc0 ls0 ws0"><?php echo $c; ?></div>
			<div class="t m27 x5c h2 y72 ff4 fs0 fc1 sc0 ls0 ws0"><?php echo $c1; ?><span class="_ _4"> </span><?php echo $c1; ?><span class="_ _5"> </span><?php echo $c1; ?><span class="_ _6"> </span><?php echo $c1; ?><span class="_ _7"> </span><?php echo $c1; ?></div>
			<div class="t m27 x5d h2 y73 ff4 fs0 fc1 sc0 ls0 ws0"><?php echo $c1; ?></div>
			<div class="t m8 x5e h2 y74 ff4 fs0 fc1 sc0 ls0 ws0"><?php echo $d; ?></div>
			<div class="t m8 x5e h2 y75 ff4 fs0 fc1 sc0 ls0 ws0"><?php echo $d; ?></div>
			<div class="t m5 x5f h2 y76 ff4 fs0 fc1 sc0 ls0 ws0"><?php echo $a; ?></div>
			<div class="t m3a x60 ha y77 ff4 fs5 fc1 sc0 ls0 ws0"><?php echo $g; ?></div>
			<div class="t m3b x61 h2 y78 ff4 fs0 fc0 sc0 ls0 ws0">A4</div>
			<div class="t m3c x62 hb y79 ff4 fs6 fc0 sc0 ls0 ws0"><?php echo $g1; ?></div>
			<div class="t m3c x63 hb y7a ff4 fs6 fc0 sc0 ls0 ws0"><?php echo $g1; ?></div>
			<div class="t m5 x64 h4 y7b ff4 fs2 fc0 sc0 ls0 ws0">A</div>
			<div class="t mc x2 h4 y7c ff4 fs2 fc0 sc0 ls0 ws0">B</div>
			<div class="t m2 x65 h4 y7d ff4 fs2 fc0 sc0 ls0 ws0">C</div>
			<div class="t mc x66 h4 y7e ff4 fs2 fc0 sc0 ls0 ws0">D</div>
			<div class="t mc xa h4 y7f ff4 fs2 fc0 sc0 ls0 ws0">R</div>
			<div class="t m3d x67 hc y80 ff4 fs7 fc0 sc0 ls0 ws0">1</div>
			<div class="t m3e x13 hc y81 ff4 fs7 fc0 sc0 ls0 ws0">2</div>
			<div class="t m3e x68 hc y82 ff4 fs7 fc0 sc0 ls0 ws0">2</div>
			<div class="t m3e x69 hc y83 ff4 fs7 fc0 sc0 ls0 ws0">3</div>
			<div class="t m3e x6a hc y84 ff4 fs7 fc0 sc0 ls0 ws0">3</div>
			<div class="t m3f x6b hc y85 ff4 fs7 fc0 sc0 ls0 ws0">4</div>
			<div class="t m3e x6c hc y86 ff4 fs7 fc0 sc0 ls0 ws0">5</div>
			<div class="t m3e x6c hc y87 ff4 fs7 fc0 sc0 ls0 ws0">5</div>
			<div class="t m3e x6d hc y86 ff4 fs7 fc0 sc0 ls0 ws0">5</div>
			<div class="t m3e x6e hc y87 ff4 fs7 fc0 sc0 ls0 ws0">5<span class="_ _6"> </span>5</div>
			<div class="t m3e x6f hc y86 ff4 fs7 fc0 sc0 ls0 ws0">5<span class="_ _8"> </span>5</div>
			<div class="t m3e x70 hc y88 ff4 fs7 fc0 sc0 ls0 ws0">5</div>
			<div class="t m3e x2a hc y89 ff4 fs7 fc0 sc0 ls0 ws0">5</div>
			<div class="t m3e x71 hc y87 ff4 fs7 fc0 sc0 ls0 ws0">5</div>
			<div class="t m3e x72 hc y8a ff4 fs7 fc0 sc0 ls0 ws0">6</div>
			<div class="t m3e x73 hc y8b ff4 fs7 fc0 sc0 ls0 ws0">6<span class="_ _9"> </span>7</div>
			<div class="t m3e x74 hc y8c ff4 fs7 fc0 sc0 ls0 ws0">8</div>
			<div class="t m40 x42 h4 y8d ff4 fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ A</div>
			<div class="t m2f x69 h4 y8e ff4 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m3e x75 hc y8f ff4 fs7 fc0 sc0 ls0 ws0">2</div>
			<div class="t m3e x49 hc y90 ff4 fs7 fc0 sc0 ls0 ws0">3</div>
			<div class="t m23 x76 h4 y91 ff4 fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ B</div>
			<div class="t m2f x77 h4 y92 ff4 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m3e x78 hc y93 ff4 fs7 fc0 sc0 ls0 ws0">2</div>
			<div class="t m3e x79 hc y94 ff4 fs7 fc0 sc0 ls0 ws0">3</div>
			<div class="t m3d x79 hc y95 ff4 fs7 fc0 sc0 ls0 ws0">1</div>
			<div class="t m18 x7a h4 y96 ff4 fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ C</div>
			<div class="t m2f x52 h4 y97 ff4 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m3e x6f hc y98 ff4 fs7 fc0 sc0 ls0 ws0">2</div>
			<div class="t m3e x7b hc y99 ff4 fs7 fc0 sc0 ls0 ws0">3</div>
			<div class="t m3e x6f hc y9a ff4 fs7 fc0 sc0 ls0 ws0">6</div>
			<div class="t m3e x7c hc y9b ff4 fs7 fc0 sc0 ls0 ws0">8</div>
			<div class="t m23 x7d h4 y9c ff4 fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ D</div>
			<div class="t m2f x5d h4 y9d ff4 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m3e x7e hc y9e ff4 fs7 fc0 sc0 ls0 ws0">2</div>
			<div class="t m3e x7f hc y9f ff4 fs7 fc0 sc0 ls0 ws0">3</div>
			<div class="t m3d x80 hc ya0 ff4 fs7 fc0 sc0 ls0 ws0">1</div>
			<div class="t m23 x81 h4 ya1 ff4 fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ R</div>
			<div class="t m2f x4d h4 ya2 ff4 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m3e x82 hc ya3 ff4 fs7 fc0 sc0 ls0 ws0">7</div>
			<div class="t m3e x83 hc ya4 ff4 fs7 fc0 sc0 ls0 ws0">8</div>
			<div class="t m3d x84 hc ya5 ff4 fs7 fc0 sc0 ls0 ws0">1</div>
			<div class="t m37 x85 h2 ya6 ff4 fs0 fc1 sc0 ls0 ws0">Лист_3</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "4")) : ?>
	<div id="pf4" class="pf w5 hd" data-page-no="4">
		<div class="pc pc4 w5 hd">
      <?php echo $image4; ?>
			<div class="c x86 ya8 w7 hf">
				<div class="t m38 x87 h10 ya9 ff5 fs8 fc0 sc0 ls0 ws0"><?php echo $g1; ?></div>
				<div class="t m38 x88 h10 yaa ff5 fs8 fc0 sc0 ls0 ws0"><?php echo $c; ?></div>
				<div class="t m38 x89 h10 yab ff5 fs8 fc0 sc0 ls0 ws0"><?php echo $d; ?></div>
				<div class="t m38 x8a h10 yac ff5 fs8 fc0 sc0 ls0 ws0">20</div>
				<div class="t m41 x8b h10 yad ff5 fs8 fc0 sc0 ls0 ws0">30</div>
				<div class="t m38 x8a h10 yae ff5 fs8 fc0 sc0 ls0 ws0">20</div>
				<div class="t m41 x8c h10 yaf ff5 fs8 fc0 sc0 ls0 ws0">30</div>
				<div class="t m38 x3d h10 yb0 ff5 fs8 fc0 sc0 ls0 ws0">20</div>
				<div class="t m41 x8c h10 yb1 ff5 fs8 fc0 sc0 ls0 ws0">30</div>
				<div class="t m38 x8d h10 yb2 ff5 fs8 fc0 sc0 ls0 ws0"><?php echo $a; ?></div>
				<div class="t m38 x31 h10 yb3 ff5 fs8 fc0 sc0 ls0 ws0">70</div>
				<div class="t m41 x8e h10 yb4 ff5 fs8 fc0 sc0 ls0 ws0">60</div>
				<div class="t m38 x8f h10 yb5 ff5 fs8 fc0 sc0 ls0 ws0"><?php echo $g; ?></div>
				<div class="t m38 x7f h10 yb6 ff5 fs8 fc0 sc0 ls0 ws0">60</div>
				<div class="t m41 x90 h10 yb7 ff5 fs8 fc0 sc0 ls0 ws0">40</div>
				<div class="t m38 x31 h10 yb8 ff5 fs8 fc0 sc0 ls0 ws0">60</div>
				<div class="t m41 x90 h10 yb9 ff5 fs8 fc0 sc0 ls0 ws0">40</div>
				<div class="t m38 x91 h10 yba ff5 fs8 fc0 sc0 ls0 ws0">20</div>
				<div class="t m41 x8a h10 ybb ff5 fs8 fc0 sc0 ls0 ws0">30</div>
				<div class="t m38 x92 h10 ybc ff5 fs8 fc0 sc0 ls0 ws0"><?php echo $a3; ?></div>
				<div class="t m38 x48 h11 ybd ff5 fs9 fc0 sc0 ls0 ws0">1.</div>
				<div class="t m38 x93 h11 ybe ff5 fs9 fc0 sc0 ls0 ws0">2.</div>
				<div class="t m38 x94 h11 ybf ff5 fs9 fc0 sc0 ls0 ws0">3.</div>
				<div class="t m38 x93 h11 yc0 ff5 fs9 fc0 sc0 ls0 ws0">4.</div>
				<div class="t m38 x94 h11 yc1 ff5 fs9 fc0 sc0 ls0 ws0">5.</div>
				<div class="t m38 x93 h11 yc2 ff5 fs9 fc0 sc0 ls0 ws0">6.</div>
				<div class="t m38 x48 h11 yc3 ff5 fs9 fc0 sc0 ls0 ws0">7.</div>
				<div class="t m38 x48 h11 yc4 ff5 fs9 fc0 sc0 ls0 ws0">8.</div>
				<div class="t m38 x48 h11 yc5 ff5 fs9 fc0 sc0 ls0 ws0">9.</div>
				<div class="t m38 x95 h10 yc6 ff6 fs8 fc0 sc0 ls0 ws0"><?php echo $b5; ?></div>
				<div class="t m38 x96 h10 yc7 ff5 fs8 fc0 sc0 ls0 ws0">60</div>
				<div class="t m41 x97 h10 yc8 ff5 fs8 fc0 sc0 ls0 ws0">40</div>
				<div class="t m38 x0 h11 yc9 ff5 fs9 fc0 sc0 ls0 ws0">10.</div>
				<div class="t m41 x90 h10 yca ff5 fs8 fc0 sc0 ls0 ws0">60</div>
				<div class="t m38 x98 h10 ycb ff5 fs8 fc0 sc0 ls0 ws0">40</div>
				<div class="t m38 x8f h10 ycc ff6 fs8 fc0 sc0 ls0 ws0"><?php echo $b4; ?></div>
				<div class="t m38 x6b h12 ycd ff6 fsa fc0 sc0 ls0 ws0">Порізка профілей на заготовки</div>
				<div class="t m38 x6b h12 yce ff6 fsa fc0 sc0 ls0 ws0">Порізка нащільника заднього</div>
				<div class="t m38 x6b h12 ycf ff6 fsa fc0 sc0 ls0 ws0">Порізка нащільника переднього</div>
				<div class="t m38 x99 h11 ybd ff6 fs9 fc0 sc0 ls0 ws0">1шт.</div>
				<div class="t m38 x3 h11 yd0 ff6 fs9 fc0 sc0 ls0 ws0">2шт.</div>
				<div class="t m38 x3 h11 yd1 ff6 fs9 fc0 sc0 ls0 ws0">2шт.</div>
				<div class="t m38 x99 h11 yd2 ff6 fs9 fc0 sc0 ls0 ws0">1шт.</div>
				<div class="t m38 x3 h11 yd3 ff6 fs9 fc0 sc0 ls0 ws0">10шт.</div>
				<div class="t m38 x3 h11 yd4 ff6 fs9 fc0 sc0 ls0 ws0">2шт.</div>
				<div class="t m38 x99 h11 yd5 ff6 fs9 fc0 sc0 ls0 ws0">1шт.</div>
				<div class="t m38 x99 h11 yd6 ff6 fs9 fc0 sc0 ls0 ws0">1шт.</div>
				<div class="t m38 x99 h11 yd7 ff6 fs9 fc0 sc0 ls0 ws0">1шт.</div>
				<div class="t m38 x9a h10 yd8 ff5 fs8 fc0 sc0 ls0 ws0">80</div>
				<div class="t m41 x9b h10 yd9 ff5 fs8 fc0 sc0 ls0 ws0">48</div>
				<div class="t m38 x9c h13 yda ff6 fsb fc4 sc0 ls0 ws0">Лист_4</div>
				<div class="t m38 x9d h10 ydb ff6 fs8 fc0 sc0 ls0 ws0"><?php echo $b1; ?></div>
				<div class="t m38 x31 h10 ydc ff5 fs8 fc0 sc0 ls0 ws0">60</div>
				<div class="t m41 x90 h10 ydd ff5 fs8 fc0 sc0 ls0 ws0">40</div>
				<div class="t m38 x91 h10 yde ff5 fs8 fc0 sc0 ls0 ws0">20</div>
				<div class="t m41 x8a h10 ydf ff5 fs8 fc0 sc0 ls0 ws0">30</div>
				<div class="t m38 x9e h10 ye0 ff6 fs8 fc0 sc0 ls0 ws0"><?php echo $a4; ?></div>
				<div class="t m38 x7f h10 ye1 ff5 fs8 fc0 sc0 ls0 ws0">60</div>
				<div class="t m41 x90 h10 ye2 ff5 fs8 fc0 sc0 ls0 ws0">40</div>
				<div class="t m38 x99 h11 ye3 ff6 fs9 fc0 sc0 ls0 ws0">1шт.</div>
				<div class="t m42 x9f h14 ye4 ff5 fsc fc0 sc0 ls0 ws0">45</div>
				<div class="t m43 xa0 h15 ye5 ff5 fsd fc0 sc0 ls0 ws0">45</div>
				<div class="t m44 xa1 h16 ye6 ff5 fse fc0 sc0 ls0 ws0">45</div>
				<div class="t m45 x6 h15 ye7 ff5 fsd fc0 sc0 ls0 ws0">45</div>
				<div class="t m46 xa2 h17 ye8 ff5 fsf fc0 sc0 ls0 ws0">W*</div>
				<div class="t m47 xa3 h18 ye9 ff5 fs10 fc0 sc0 ls0 ws0">W*</div>
				<div class="t m48 xa4 h19 yea ff5 fs11 fc0 sc0 ls0 ws0">W*</div>
				<div class="t m38 x20 h12 yeb ff5 fsa fc0 sc0 ls0 ws0">1.*<span class="_ _a"> </span><span class="ff6">Розмір визначити по місцю при зварювані рами воріт.</span></div>
				<div class="t m49 xa2 h1a yec ff5 fs12 fc0 sc0 ls0 ws0">W*</div>
				<div class="t m4a xa5 h1b yed ff5 fs13 fc0 sc0 ls0 ws0">W*</div>
			</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[0.000000,1.000000,-1.000000,0.000000,842.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "5")) : ?>
	<div id="pf5" class="pf w0 h0" data-page-no="5">
		<div class="pc pc5 w0 h0">
      <?php echo $image5; ?>
			<div class="t m8 x94 h2 yf1 ff8 fs0 fc1 sc0 ls0 ws0">(**)</div>
			<div class="t m4c x67 h2 yf2 ff8 fs0 fc1 sc0 ls0 ws0"><?php echo $b5; ?> (висота розміщеня уловлювача верхнього</div>
			<div class="t m4d xa6 h2 yf3 ff8 fs0 fc1 sc0 ls0 ws0">по висоті воріт)</div>
			<div class="t m0 xa7 h2 yf4 ff8 fs0 fc1 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m4e xa8 h2 yf5 ff8 fs0 fc1 sc0 ls0 ws0"><?php echo $b4; ?> Висота розміщеня верхнього роліка</div>
			<div class="t m4c xa9 h2 yf6 ff8 fs0 fc1 sc0 ls0 ws0">по нащільнику задньому</div>
			<div class="t m2 xaa h2 yf7 ff8 fs0 fc1 sc0 ls0 ws0">95<span class="_ _b"> </span>95</div>
			<div class="t m9 x8c h2 yf8 ff8 fs0 fc0 sc0 ls0 ws0">Відстань від фундаменту до верху воріт</div>
			<div class="t mc xab h2 yf9 ff8 fs0 fc0 sc0 ls0 ws0">R</div>
			<div class="t mc xac h2 yfa ff8 fs0 fc0 sc0 ls0 ws0">S</div>
			<div class="t m5 xad h2 yfb ff8 fs0 fc0 sc0 ls0 ws0">Кріпленя нащільника переднього та заднього провести на закладні зварюваням.</div>
			<div class="t m1b xae h2 yfb ff8 fs0 fc0 sc0 ls0 ws0">1.</div>
			<div class="t m1c xaf h2 yfc ff8 fs0 fc0 sc0 ls0 ws0">** Уловлювач нижній розмістити в складальному вигляді з стулкою воріт та роліками</div>
			<div class="t m30 xae h2 yfc ff8 fs0 fc0 sc0 ls0 ws0">2.</div>
			<div class="t m16 xae h2 yfd ff8 fs0 fc0 sc0 ls0 ws0">опорними в горізонтальній поверхні на 3мм-4мм вище роліка кінцевого.</div>
			<div class="t m4f xae h2 yfe ff8 fs0 fc0 sc0 ls0 ws0">3. Ролік верхній розмістити по висоті нащільника заднього.</div>
			<div class="t m27 xb0 h2 yff ff8 fs0 fc0 sc0 ls0 ws0">10</div>
			<div class="t m30 xab h2 y100 ff8 fs0 fc0 sc0 ls0 ws0">11</div>
			<div class="t m24 x4 h2 y101 ff8 fs0 fc0 sc0 ls0 ws0">W</div>
			<div class="t m34 xab h2 y102 ff8 fs0 fc0 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m50 x5c h2 y103 ff8 fs0 fc0 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m51 xb1 h2 y103 ff8 fs0 fc0 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m1a xb2 h4 y104 ff8 fs2 fc0 sc0 ls0 ws0">W</div>
			<div class="t mc xb3 h4 y105 ff8 fs2 fc0 sc0 ls0 ws0">R</div>
			<div class="t mc xb4 h4 y106 ff8 fs2 fc0 sc0 ls0 ws0">S</div>
			<div class="t m52 xb5 h4 y107 ff8 fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ W</div>
			<div class="t m22 xb6 h4 y108 ff8 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m51 xb7 h2 y109 ff8 fs0 fc0 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m32 xb8 h2 y10a ff8 fs0 fc0 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m35 xb9 h2 y10b ff8 fs0 fc0 sc0 ls0 ws0">задній</div>
			<div class="t m23 x41 h4 y10c ff8 fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ R</div>
			<div class="t m22 xba h4 y10d ff8 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m32 xbb h2 y10e ff8 fs0 fc0 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m53 x47 h2 y10f ff8 fs0 fc0 sc0 ls0 ws0">передній</div>
			<div class="t m54 xbc h2 y110 ff8 fs0 fc0 sc0 ls0 ws0">Уловитель верхній</div>
			<div class="t m23 xbd h4 y111 ff8 fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ S</div>
			<div class="t m22 xbe h4 y112 ff8 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m2a xbf h2 y113 ff8 fs0 fc0 sc0 ls0 ws0">Уловитель нижній</div>
			<div class="t m32 xc0 h2 y114 ff8 fs0 fc0 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m53 xc1 h2 y115 ff8 fs0 fc0 sc0 ls0 ws0">передній</div>
			<div class="t m39 xc2 h2 y116 ff8 fs0 fc1 sc0 ls0 ws0"><?php echo $r1; ?></div>
			<div class="t m28 xc3 h2 y117 ff8 fs0 fc1 sc0 ls0 ws0"><?php echo $r2; ?></div>
			<div class="t m55 xc4 h1f y118 ff8 fs15 fc1 sc0 ls0 ws0">Встановити в міжцегляному</div>
			<div class="t m56 xc5 h1f y119 ff8 fs15 fc1 sc0 ls0 ws0">шву на відстані півцегли</div>
			<div class="t m57 xc6 h1f y11a ff8 fs15 fc1 sc0 ls0 ws0">відносно внутнішньої</div>
			<div class="t m58 xc7 h1f y11b ff8 fs15 fc1 sc0 ls0 ws0">поверхні стовпа.</div>
			<div class="t m59 xc8 h4 y11c ff8 fs2 fc1 sc0 ls0 ws0">Встановити в міжцегляному</div>
			<div class="t m5a xc9 h4 y11d ff8 fs2 fc1 sc0 ls0 ws0">шву на відстані півцегли</div>
			<div class="t m5b xca h4 y11e ff8 fs2 fc1 sc0 ls0 ws0">відносно внутрішньої</div>
			<div class="t m5c xcb h4 y11f ff8 fs2 fc1 sc0 ls0 ws0">поверхні стовпа.</div>
			<div class="t mb x37 h4 y120 ff8 fs2 fc0 sc0 ls0 ws0">АА<span class="_ _c"> </span>АА</div>
			<div class="t m5d xcc h2 y121 ff8 fs0 fc0 sc0 ls0 ws0">СЕЧЕНИЕ АА-АА</div>
			<div class="t m22 xcd h2 y122 ff8 fs0 fc0 sc0 ls0 ws0">Закладна</div>
			<div class="t m5e xc7 h2 y123 ff8 fs0 fc0 sc0 ls0 ws0">нащільника</div>
			<div class="t m22 xc9 h2 y124 ff8 fs0 fc0 sc0 ls0 ws0">Закладна</div>
			<div class="t m5e xce h2 y125 ff8 fs0 fc0 sc0 ls0 ws0">нащільника</div>
			<div class="t m22 xcf h2 y126 ff8 fs0 fc0 sc0 ls0 ws0">Закладна</div>
			<div class="t m5e xd0 h2 y127 ff8 fs0 fc0 sc0 ls0 ws0">нащільника</div>
			<div class="t m22 xcf h2 y128 ff8 fs0 fc0 sc0 ls0 ws0">Закладна</div>
			<div class="t m5e xd0 h2 y129 ff8 fs0 fc0 sc0 ls0 ws0">нащільника</div>
			<div class="t m5f xd1 h2 y12a ff8 fs0 fc0 sc0 ls0 ws0">(4 місця)</div>
			<div class="t m60 xd2 h4 y12b ff8 fs2 fc0 sc0 ls0 ws0">АА-АА</div>
			<div class="t m2f xd3 h4 y12c ff8 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t mb xd4 h4 y12d ff8 fs2 fc0 sc0 ls0 ws0">СЕЧЕНИЕАА<span class="_ _d"> </span>СЕЧЕНИЕАА</div>
			<div class="t m3 xd5 h4 y12e ff8 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 10</div>
			<div class="t m32 xd6 h2 y12f ff8 fs0 fc0 sc0 ls0 ws0">Закладна нащільника</div>
			<div class="t m37 xd7 h2 y130 ff8 fs0 fc1 sc0 ls0 ws0">Лист_5</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "6")) : ?>
	<div id="pf6" class="pf w0 h0" data-page-no="6">
		<div class="pc pc6 w0 h0">
      <?php echo $image6; ?>
			<div class="t m15 xdb h4 y138 ffa fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ J</div>
			<div class="t m2f xdc h4 y139 ffa fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m50 x56 h2 y13a ffa fs0 fc0 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m62 xdd h2 y13b ffa fs0 fc0 sc0 ls0 ws0">Стулка</div>
			<div class="t m63 xde h2 y13c ffa fs0 fc0 sc0 ls0 ws0">воріт</div>
			<div class="t m18 xdf h4 y13d ffa fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ L</div>
			<div class="t m2f x13 h4 y13e ffa fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m34 xdd h2 y13f ffa fs0 fc0 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m62 x92 h2 y140 ffa fs0 fc0 sc0 ls0 ws0">Стулка</div>
			<div class="t m63 xe0 h2 y141 ffa fs0 fc0 sc0 ls0 ws0">воріт</div>
			<div class="t m23 xe1 h4 y142 ffa fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ Z</div>
			<div class="t m2f xe2 h4 y143 ffa fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m51 xe3 h2 y144 ffa fs0 fc0 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m62 xe4 h2 y145 ffa fs0 fc0 sc0 ls0 ws0">Стулка</div>
			<div class="t m63 xc1 h2 y146 ffa fs0 fc0 sc0 ls0 ws0">воріт</div>
			<div class="t ma xe5 h2 y147 ffa fs0 fc1 sc0 ls0 ws0">450</div>
			<div class="t m2 xe6 h2 y148 ffa fs0 fc1 sc0 ls0 ws0">300</div>
			<div class="t m25 xbd h3 y149 ffa fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ I</div>
			<div class="t m64 xe7 h3 y14a ffa fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m2c xe8 h2 y14b ffa fs0 fc0 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m1c x2e h2 y14c ffa fs0 fc0 sc0 ls0 ws0">Ролік</div>
			<div class="t m2 x47 h2 y14d ffa fs0 fc0 sc0 ls0 ws0">опорний</div>
			<div class="t m53 xdd h2 y14e ffa fs0 fc0 sc0 ls0 ws0">передній</div>
			<div class="t m65 xe9 h2 y14f ffa fs0 fc0 sc0 ls0 ws0">Нащільник задній</div>
			<div class="t m66 x6e h2 y150 ffa fs0 fc0 sc0 ls0 ws0">Швелер</div>
			<div class="t m24 xea h2 y151 ffa fs0 fc0 sc0 ls0 ws0">армований</div>
			<div class="t m67 x70 h2 y14c ffa fs0 fc0 sc0 ls0 ws0">Кронштейн</div>
			<div class="t m2e xaf h2 y14d ffa fs0 fc0 sc0 ls0 ws0">привода</div>
			<div class="t m54 xb1 h2 y152 ffa fs0 fc0 sc0 ls0 ws0">Привід</div>
			<div class="t m68 xeb h2 y153 ffa fs0 fc0 sc0 ls0 ws0">Рейка зубчата</div>
			<div class="t m15 xec h3 y154 ffa fs1 fc0 sc0 ls0 ws0">AB</div>
			<div class="t m13 xed h3 y155 ffa fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ Z1</div>
			<div class="t m64 xc6 h3 y156 ffa fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m54 xee h2 y157 ffa fs0 fc0 sc0 ls0 ws0">Привід</div>
			<div class="t m69 xef h2 y158 ffa fs0 fc0 sc0 ls0 ws0">Кінцевик</div>
			<div class="t m6a xf0 h2 y159 ffa fs0 fc0 sc0 ls0 ws0">магнітний_закрито</div>
			<div class="t m6b x2e h3 y15a ffa fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ AB</div>
			<div class="t m64 xf1 h3 y15b ffa fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 3</div>
			<div class="t m54 x58 h2 y15c ffa fs0 fc0 sc0 ls0 ws0">Привід</div>
			<div class="t m6c xf2 h2 y15d ffa fs0 fc0 sc0 ls0 ws0">Кінцевик магнітний</div>
			<div class="t m6d xf3 h2 y15e ffa fs0 fc0 sc0 ls0 ws0">(положення-закрито)</div>
			<div class="t m6e xf4 h2 y15f ffa fs0 fc0 sc0 ls0 ws0">Рейка</div>
			<div class="t m6f xf5 h2 y160 ffa fs0 fc0 sc0 ls0 ws0">зубчата</div>
			<div class="t m70 xf6 h2 y161 ffa fs0 fc0 sc0 ls0 ws0">Шестерня</div>
			<div class="t m71 xf7 h2 y162 ffa fs0 fc0 sc0 ls0 ws0">Клепальна гайка</div>
			<div class="t m72 xf8 h2 y163 ffa fs0 fc0 sc0 ls0 ws0">(кріпленя зубчатої рейки)</div>
			<div class="t m2c xf9 h2 y164 ffa fs0 fc0 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m1c xfa h2 y165 ffa fs0 fc0 sc0 ls0 ws0">Ролік</div>
			<div class="t m2 xfb h2 y166 ffa fs0 fc0 sc0 ls0 ws0">опорний</div>
			<div class="t m35 xf9 h2 y167 ffa fs0 fc0 sc0 ls0 ws0">задній</div>
			<div class="t m4f xda h2 y167 ffa fs0 fc0 sc0 ls0 ws0">Кронштейн привода</div>
			<div class="t m73 xfc h3 y168 ffa fs1 fc0 sc0 ls0 ws0">AE</div>
			<div class="t m73 xfd h3 y169 ffa fs1 fc0 sc0 ls0 ws0">AF</div>
			<div class="t m74 xfe h3 y16a ffa fs1 fc0 sc0 ls0 ws0">СЕЧЕНИЕ AD-AD</div>
			<div class="t m64 xff h3 y16b ffa fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m26 x100 h2 y16c ffa fs0 fc1 sc0 ls0 ws0">20</div>
			<div class="t m28 x101 h2 y16d ffa fs0 fc1 sc0 ls0 ws0">40</div>
			<div class="t m75 xd1 h3 y16e ffa fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ AE</div>
			<div class="t m60 xaf h3 y16f ffa fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 1.5</div>
			<div class="t m69 x102 h2 y170 ffa fs0 fc0 sc0 ls0 ws0">Кінцевик</div>
			<div class="t m5 xe2 h2 y171 ffa fs0 fc0 sc0 ls0 ws0">магнітний</div>
			<div class="t m76 xa4 h2 y172 ffa fs0 fc0 sc0 ls0 ws0">відкрито</div>
			<div class="t m68 x103 h2 y173 ffa fs0 fc0 sc0 ls0 ws0">Рейка зубчата</div>
			<div class="t m68 x104 h2 y174 ffa fs0 fc0 sc0 ls0 ws0">Клепальна гайка</div>
			<div class="t m77 x105 h2 y175 ffa fs0 fc0 sc0 ls0 ws0">кріпленя рейки зубчатої</div>
			<div class="t m75 x106 h3 y176 ffa fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ AF</div>
			<div class="t m64 x97 h3 y177 ffa fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 2</div>
			<div class="t m78 xef h2 y178 ffa fs0 fc0 sc0 ls0 ws0">Кінцевий ролік</div>
			<div class="t m2a x107 h2 y179 ffa fs0 fc0 sc0 ls0 ws0">Профіль</div>
			<div class="t m79 x108 h2 y17a ffa fs0 fc0 sc0 ls0 ws0">Прижимна</div>
			<div class="t m24 x4 h2 y17b ffa fs0 fc0 sc0 ls0 ws0">планка</div>
			<div class="t m2c x109 h2 y17c ffa fs0 fc0 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t mb x10a h3 y17d ffa fs1 fc0 sc0 ls0 ws0">Q<span class="_ _e"> </span>Q</div>
			<div class="t mb x10b h3 y17e ffa fs1 fc0 sc0 ls0 ws0">F<span class="_ _f"> </span>F</div>
			<div class="t m13 x10c h3 y17f ffa fs1 fc0 sc0 ls0 ws0">СЕЧЕНИЕQ-Q</div>
			<div class="t m64 x100 h3 y180 ffa fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m11 x7c h2 y181 ffa fs0 fc0 sc0 ls0 ws0">Нащільник</div>
			<div class="t m53 xa0 h2 y182 ffa fs0 fc0 sc0 ls0 ws0">передній</div>
			<div class="t m50 x10d h2 y183 ffa fs0 fc0 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m62 x10e h2 y184 ffa fs0 fc0 sc0 ls0 ws0">Стулка</div>
			<div class="t m63 x65 h2 y185 ffa fs0 fc0 sc0 ls0 ws0">воріт</div>
			<div class="t m7a x10f h4 y186 ffa fs2 fc0 sc0 ls0 ws0">Закладна</div>
			<div class="t m5e x10f h4 y187 ffa fs2 fc0 sc0 ls0 ws0">нащільника</div>
			<div class="t m17 xcb h3 y188 ffa fs1 fc0 sc0 ls0 ws0">СЕЧЕНИЕ F-F</div>
			<div class="t m64 x110 h3 y189 ffa fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m62 x111 h2 y18a ffa fs0 fc0 sc0 ls0 ws0">Стулка</div>
			<div class="t m63 x112 h2 y18b ffa fs0 fc0 sc0 ls0 ws0">воріт</div>
			<div class="t m34 x113 h2 y18c ffa fs0 fc0 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m11 x114 h2 y18d ffa fs0 fc0 sc0 ls0 ws0">Нащільник</div>
			<div class="t m53 x115 h2 y18e ffa fs0 fc0 sc0 ls0 ws0">передній</div>
			<div class="t m37 x116 h4 y18f ffa fs2 fc1 sc0 ls0 ws0">Лист_6</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
  <?php endif; ?>
</div>

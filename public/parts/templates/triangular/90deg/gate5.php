<?php
  $image1 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/90deg/gate_images5/image1.svg");
  $image2 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/90deg/gate_images5/image2.svg");
  $image3 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/90deg/gate_images5/image3.svg");
  $image4 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/90deg/gate_images5/image4.svg");
  $image5 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/90deg/gate_images5/image5.svg");
  $image6 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/90deg/gate_images5/image6.svg");
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
  $a1 = $a3 - 111;
  $a2 = $a;
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
  $c1 = round(($a3 - 290) / 6);
  $d = ($b1 - 128) / 2;
  $g = round(100 + (sqrt((($b1 + 42) * ($b1 + 42)) + ($a - $a3) * ($a - $a3))));
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
<link rel='stylesheet' id='pdf-stylesheet-css' href='<?=$_SERVER['APP_URL']?>/parts/styles/triangular/90deg/gate5.css' type='text/css' media='all' />
<div id="page-container">
  <?php if (strrpos($pages, "1")) : ?>
	<div id="pf1" class="pf w0 h0" data-page-no="1">
		<div class="pc pc1 w0 h0">
      <?php echo $image1; ?>
			<div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m1 x2 h2 y2 ff1 fs0 fc1 sc0 ls0 ws0">300</div>
			<div class="t m2 x3 h2 y3 ff1 fs0 fc1 sc0 ls0 ws0"><?php echo $l1; ?>-відстань між роліковими опорами</div>
			<div class="t m3 x4 h2 y4 ff1 fs0 fc1 sc0 ls0 ws0"><?php echo $l2; ?>-довжина зубчатої рейки</div>
			<div class="t m4 x5 h2 y5 ff1 fs0 fc2 sc0 ls0 ws0"><?php echo $clearance_under_gate; ?>-відстань від низу воріт</div>
			<div class="t m5 x6 h2 y6 ff1 fs0 fc2 sc0 ls0 ws0">до фундаменту</div>
			<div class="t m6 x7 h2 y7 ff1 fs0 fc1 sc0 ls0 ws0">150</div>
			<div class="t m7 x8 h2 y8 ff1 fs0 fc2 sc0 ls0 ws0"><?php echo $b; ?></div>
			<div class="t m8 x9 h2 y9 ff1 fs0 fc2 sc0 ls0 ws0">Відстань від фундаменту до верху воріт</div>
			<div class="t m9 xa h2 ya ff1 fs0 fc2 sc0 ls0 ws0"><?php echo $a; ?></div>
			<div class="t m1 xb h2 yb ff1 fs0 fc1 sc0 ls0 ws0">250</div>
			<div class="t m1 xc h2 yc ff1 fs0 fc1 sc0 ls0 ws0">250</div>
			<div class="t m6 xd h2 yb ff1 fs0 fc1 sc0 ls0 ws0">130</div>
			<div class="t ma xe h2 yd ff1 fs0 fc0 sc0 ls0 ws0">450</div>
			<div class="t ma xf h3 ye ff1 fs1 fc0 sc0 ls0 ws0">Встановлення та кріаленя кінцевого роліка показано на розрізі AD-AD, та Вид АF (Лист_6)</div>
			<div class="t mb x10 h3 ye ff1 fs1 fc0 sc0 ls0 ws0">1.</div>
			<div class="t mc x10 h3 yf ff1 fs1 fc0 sc0 ls0 ws0">2. Уловитель нижній встановити в складальному вигляді воріт та роліків верхніх в горізонтальній поверхні на 3-4мм</div>
			<div class="t ma x10 h3 y10 ff1 fs1 fc0 sc0 ls0 ws0">вище кінцевого роліка, місцевий Вид L, Вид S, розріз F-F (Лист_1, Лист_5).</div>
			<div class="t md x10 h3 y11 ff1 fs1 fc0 sc0 ls0 ws0">2. *** Уловлювач верхній та верхній ролік встановити після встановленя уловлювача нижнього, місцевий Вид R, Вид Z,</div>
			<div class="t me x10 h3 y12 ff1 fs1 fc0 sc0 ls0 ws0">Вид W, Вид J (Лист_1, Лист_5, Лист_6).</div>
			<div class="t mc x10 h3 y13 ff1 fs1 fc0 sc0 ls0 ws0">3. Умова розміщеня привода воріт (зацепленя шестерні в зубчатій рейці) без натягу.</div>
			<div class="t mf x10 h3 y14 ff1 fs1 fc0 sc0 ls0 ws0">4. Розмістити привід таким чином, щоб шестерня привода була розміщена по середині зубчатої рейки, місцевий вид АВ</div>
			<div class="t m3 x10 h3 y15 ff1 fs1 fc0 sc0 ls0 ws0">(Лист_6). Бокова поверхня шестерні повиннна бути паралельна боковій поверхні рейки зубчатої.</div>
			<div class="t m10 x10 h3 y16 ff1 fs1 fc0 sc0 ls0 ws0">5. Магнітні кінцевики (положеня-відкрито. закрито) встановити на зубчатій рейці по факту умови повного закривання та</div>
			<div class="t m11 x10 h3 y17 ff1 fs1 fc0 sc0 ls0 ws0">відкривання воріт (Лист_1).</div>
			<div class="t m12 x10 h3 y18 ff1 fs1 fc0 sc0 ls0 ws0">6. Кріпленя магнітного кінцевика вказано на розрізі AD-AD, Вид АЕ (Лист_6)</div>
			<div class="t m13 x0 h4 y19 ff1 fs2 fc0 sc0 ls0 ws0">Q <span class="_ _0"> </span> Q</div>
			<div class="t m14 x11 h4 y1a ff1 fs2 fc0 sc0 ls0 ws0">J</div>
			<div class="t m13 x0 h4 y1b ff1 fs2 fc0 sc0 ls0 ws0">F <span class="_ _1"> </span> F</div>
			<div class="t m15 x12 h4 y1c ff1 fs2 fc0 sc0 ls0 ws0">L</div>
			<div class="t m13 x13 h4 y1d ff1 fs2 fc0 sc0 ls0 ws0">AD</div>
			<div class="t m13 x13 h4 y1e ff1 fs2 fc0 sc0 ls0 ws0">AD</div>
			<div class="t m14 x3 h4 y1f ff1 fs2 fc0 sc0 ls0 ws0">Z</div>
			<div class="t m16 x14 h4 y20 ff1 fs2 fc0 sc0 ls0 ws0">I</div>
			<div class="t m17 x15 h3 y21 ff1 fs1 fc0 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m18 x16 h3 y22 ff1 fs1 fc0 sc0 ls0 ws0">Магнітний кінцевик-положення відкрито</div>
			<div class="t m19 x17 h3 y23 ff1 fs1 fc0 sc0 ls0 ws0">Магнітний кінцевик-положення</div>
			<div class="t m1a x17 h3 y24 ff1 fs1 fc0 sc0 ls0 ws0">закрито</div>
			<div class="t m1b x18 h4 y25 ff1 fs2 fc0 sc0 ls0 ws0">СЕЧЕНИЕQ-Q</div>
			<div class="t m10 x19 h4 y26 ff1 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 23</div>
			<div class="t m1c x1a h4 y27 ff1 fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ J</div>
			<div class="t m1d x1b h4 y28 ff1 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 2 : 23</div>
			<div class="t m1e x1c h4 y29 ff1 fs2 fc0 sc0 ls0 ws0">СЕЧЕНИЕ F-F</div>
			<div class="t m1f x1d h4 y2a ff1 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 24</div>
			<div class="t m20 x1e h4 y2b ff1 fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ L</div>
			<div class="t m1d x1f h4 y2c ff1 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 2 : 23</div>
			<div class="t m21 x20 h4 y2d ff1 fs2 fc0 sc0 ls0 ws0">СЕЧЕНИЕAD-AD</div>
			<div class="t m10 x21 h4 y2e ff1 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 23</div>
			<div class="t m22 x22 h4 y2f ff1 fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ Z</div>
			<div class="t m1d x23 h4 y30 ff1 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 2 : 23</div>
			<div class="t m23 x24 h4 y31 ff1 fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ I</div>
			<div class="t m1d x25 h4 y32 ff1 fs2 fc0 sc0 ls0 ws0">МАСШТАБ 2 : 23</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "2")) : ?>
	<div id="pf2" class="pf w0 h0" data-page-no="2">
		<div class="pc pc2 w0 h0">
      <?php echo $image2; ?>
			<div class="t m1 x26 h2 y34 ff2 fs0 fc1 sc0 ls0 ws0">95</div>
			<div class="t m6 x27 h2 y35 ff2 fs0 fc1 sc0 ls0 ws0">100 <span class="_ _2"> </span> 100</div>
			<div class="t ma x28 h2 y36 ff2 fs0 fc1 sc0 ls0 ws0">240</div>
			<div class="t m24 x29 h2 y37 ff2 fs0 fc1 sc0 ls0 ws0">500</div>
			<div class="t m0 x2a h2 y38 ff2 fs0 fc1 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m25 x2b h2 y39 ff2 fs0 fc1 sc0 ls0 ws0"><?php echo $l1; ?></div>
			<div class="t m26 x2c h2 y3a ff2 fs0 fc1 sc0 ls0 ws0"><?php echo $b5; ?></div>
			<div class="t m7 x2d h2 y3b ff2 fs0 fc1 sc0 ls0 ws0"><?php echo $b4; ?></div>
			<div class="t m1 x10 h2 y3c ff2 fs0 fc1 sc0 ls0 ws0">95</div>
			<div class="t m27 x2e h2 y3d ff2 fs0 fc1 sc0 ls0 ws0"><?php echo $a7; ?></div>
			<div class="t m28 x2f h2 y3e ff2 fs0 fc1 sc0 ls0 ws0"><?php echo $a6; ?></div>
			<div class="t m13 x30 h3 y3f ff2 fs1 fc0 sc0 ls0 ws0">A <span class="_ _3"> </span> A</div>
			<div class="t m13 x31 h3 y40 ff2 fs1 fc0 sc0 ls0 ws0">N</div>
			<div class="t m28 x17 h2 y41 ff2 fs0 fc0 sc0 ls0 ws0">Вихід</div>
			<div class="t m29 x32 h2 y42 ff2 fs0 fc0 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m2a x2b h2 y43 ff2 fs0 fc0 sc0 ls0 ws0">для роліка опорного</div>
			<div class="t m1 x33 h2 y44 ff2 fs0 fc0 sc0 ls0 ws0">переднього</div>
			<div class="t m28 x17 h2 y45 ff2 fs0 fc0 sc0 ls0 ws0">Вихід</div>
			<div class="t m29 x32 h2 y46 ff2 fs0 fc0 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m2a x2b h2 y47 ff2 fs0 fc0 sc0 ls0 ws0">для роліка опорного</div>
			<div class="t m2b x34 h2 y48 ff2 fs0 fc0 sc0 ls0 ws0">заднього</div>
			<div class="t m28 x35 h2 y49 ff2 fs0 fc0 sc0 ls0 ws0">Вихід</div>
			<div class="t m29 x36 h2 y4a ff2 fs0 fc0 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m9 x37 h2 y4b ff2 fs0 fc0 sc0 ls0 ws0">для кронштейна</div>
			<div class="t m2c x38 h2 y4c ff2 fs0 fc0 sc0 ls0 ws0">привода</div>
			<div class="t m2d x39 h2 y4d ff2 fs0 fc0 sc0 ls0 ws0">Ролік задній розмістити в складальному вигляді з рамою воріт</div>
			<div class="t m10 x39 h2 y4e ff2 fs0 fc0 sc0 ls0 ws0">максимально віддаленим по довжині хвостовика воріт.</div>
			<div class="t m2e x3a h2 y4f ff2 fs0 fc0 sc0 ls0 ws0">11</div>
			<div class="t m25 x3b h2 y50 ff2 fs0 fc0 sc0 ls0 ws0">10</div>
			<div class="t m28 x3c h2 y51 ff2 fs0 fc1 sc0 ls0 ws0"><?php echo $a5; ?></div>
			<div class="t m1 x3d h2 y52 ff2 fs0 fc1 sc0 ls0 ws0">95</div>
			<div class="t m2f x3e h2 y53 ff2 fs0 fc1 sc0 ls0 ws0">160</div>
			<div class="t ma x3f h2 y54 ff2 fs0 fc1 sc0 ls0 ws0">240</div>
			<div class="t m1 x40 h2 y55 ff2 fs0 fc1 sc0 ls0 ws0">60</div>
			<div class="t m26 x41 h2 y56 ff2 fs0 fc1 sc0 ls0 ws0">40</div>
			<div class="t m30 x42 h3 y57 ff2 fs1 fc0 sc0 ls0 ws0">A-A МАСШТАБ1 : 16</div>
			<div class="t m31 x43 h2 y58 ff2 fs0 fc0 sc0 ls0 ws0">Швелер</div>
			<div class="t m32 x44 h2 y59 ff2 fs0 fc0 sc0 ls0 ws0">Стовп</div>
			<div class="t m19 x45 h2 y5a ff2 fs0 fc0 sc0 ls0 ws0">Нащільник</div>
			<div class="t m33 x46 h2 y5b ff2 fs0 fc0 sc0 ls0 ws0">задній</div>
			<div class="t m29 x47 h2 y5c ff2 fs0 fc0 sc0 ls0 ws0">(Розміщення швелера відносно стовпа)</div>
			<div class="t m28 x48 h2 y5d ff2 fs0 fc1 sc0 ls0 ws0"><?php echo $a8; ?></div>
			<div class="t m24 x49 h2 y5e ff2 fs0 fc1 sc0 ls0 ws0">500</div>
			<div class="t m14 x4a h3 y5f ff2 fs1 fc0 sc0 ls0 ws0">O</div>
			<div class="t m34 x4b h3 y60 ff2 fs1 fc0 sc0 ls0 ws0">ВИД N</div>
			<div class="t m2 x7 h3 y61 ff2 fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 16</div>
			<div class="t m6 x4c h2 y62 ff2 fs0 fc1 sc0 ls0 ws0">160</div>
			<div class="t m22 x4d h3 y63 ff2 fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ O</div>
			<div class="t m2d x4c h3 y64 ff2 fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m31 x4e h2 y65 ff2 fs0 fc0 sc0 ls0 ws0">Швелер</div>
			<div class="t m19 x4f h2 y66 ff2 fs0 fc0 sc0 ls0 ws0">Нащільник</div>
			<div class="t m33 x50 h2 y67 ff2 fs0 fc0 sc0 ls0 ws0">задній</div>
			<div class="t m35 x51 h2 y68 ff2 fs0 fc1 sc0 ls0 ws0">Лист_2</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "3")) : ?>
	<div id="pf3" class="pf w0 h0" data-page-no="3">
		<div class="pc pc3 w0 h0">
      <?php echo $image3; ?>
			<div class="t m9 x52 h2 y6a ff3 fs0 fc1 sc0 ls0 ws0"><?php echo $a; ?></div>
			<div class="t m28 x53 h2 y6b ff3 fs0 fc1 sc0 ls0 ws0"><?php echo $a3; ?></div>
			<div class="t m26 x54 h2 y6c ff3 fs0 fc1 sc0 ls0 ws0"><?php echo $b2; ?></div>
			<div class="t m36 x55 h2 y6d ff3 fs0 fc1 sc0 ls0 ws0"><?php echo $b1; ?></div>
			<div class="t m1 x56 h2 y6e ff3 fs0 fc1 sc0 ls0 ws0"><?php echo $c; ?></div>
			<div class="t m25 x57 h2 y6f ff3 fs0 fc1 sc0 ls0 ws0"><?php echo $c1; ?></div>
			<div class="t m25 x58 h2 y70 ff3 fs0 fc1 sc0 ls0 ws0"><?php echo $c1; ?> <span class="_ _4"> </span> <?php echo $c1; ?></div>
			<div class="t m25 x59 h2 y71 ff3 fs0 fc1 sc0 ls0 ws0"><?php echo $c1; ?></div>
			<div class="t m7 x15 h2 y72 ff3 fs0 fc1 sc0 ls0 ws0"><?php echo $d; ?> <span class="_ _5"> </span> <?php echo $d; ?></div>
			<div class="t m37 x5a h7 y73 ff3 fs3 fc1 sc0 ls0 ws0"><?php echo $g; ?></div>
			<div class="t m7 x5b h2 y74 ff3 fs0 fc1 sc0 ls0 ws0"><?php echo $b; ?></div>
			<div class="t m25 x5c h2 y75 ff3 fs0 fc1 sc0 ls0 ws0"><?php echo $c1; ?> <span class="_ _6"> </span> <?php echo $c1; ?></div>
			<div class="t m28 x5d h2 y76 ff3 fs0 fc1 sc0 ls0 ws0"><?php echo $a2; ?></div>
			<div class="t m38 x5e h8 y77 ff3 fs4 fc0 sc0 ls0 ws0"><?php echo $g1; ?></div>
			<div class="t m38 x5f h8 y78 ff3 fs4 fc0 sc0 ls0 ws0"><?php echo $g1; ?></div>
			<div class="t m9 x54 h3 y79 ff3 fs1 fc0 sc0 ls0 ws0">A</div>
			<div class="t m14 x46 h3 y7a ff3 fs1 fc0 sc0 ls0 ws0">B</div>
			<div class="t m1 x34 h3 y7b ff3 fs1 fc0 sc0 ls0 ws0">C</div>
			<div class="t m14 xe h3 y7c ff3 fs1 fc0 sc0 ls0 ws0">D</div>
			<div class="t m1 x60 h3 y7d ff3 fs1 fc0 sc0 ls0 ws0">E</div>
			<div class="t m39 x61 h9 y7e ff3 fs5 fc0 sc0 ls0 ws0">1</div>
			<div class="t m3a x62 h9 y7f ff3 fs5 fc0 sc0 ls0 ws0">2</div>
			<div class="t m3a x63 h9 y80 ff3 fs5 fc0 sc0 ls0 ws0">3</div>
			<div class="t m3b x34 h9 y81 ff3 fs5 fc0 sc0 ls0 ws0">4</div>
			<div class="t m3a x64 h9 y82 ff3 fs5 fc0 sc0 ls0 ws0">5</div>
			<div class="t m3a x65 h9 y83 ff3 fs5 fc0 sc0 ls0 ws0">6</div>
			<div class="t m3a x56 h9 y84 ff3 fs5 fc0 sc0 ls0 ws0">7</div>
			<div class="t m3a x56 h9 y85 ff3 fs5 fc0 sc0 ls0 ws0">7</div>
			<div class="t m3a x66 h9 y86 ff3 fs5 fc0 sc0 ls0 ws0">7</div>
			<div class="t m3a x66 h9 y87 ff3 fs5 fc0 sc0 ls0 ws0">7</div>
			<div class="t m3a x67 h9 y88 ff3 fs5 fc0 sc0 ls0 ws0">7</div>
			<div class="t m3a x68 h9 y89 ff3 fs5 fc0 sc0 ls0 ws0">7</div>
			<div class="t m3a x69 h9 y8a ff3 fs5 fc0 sc0 ls0 ws0">7</div>
			<div class="t m3a x6a h9 y8b ff3 fs5 fc0 sc0 ls0 ws0">7</div>
			<div class="t m3a x6b h9 y8c ff3 fs5 fc0 sc0 ls0 ws0">8</div>
			<div class="t m3a x6c h9 y8d ff3 fs5 fc0 sc0 ls0 ws0">8</div>
			<div class="t m3a x6d h9 y8e ff3 fs5 fc0 sc0 ls0 ws0">9</div>
			<div class="t m3c x6e h3 y8f ff3 fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ A</div>
			<div class="t m2d x6f h3 y90 ff3 fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m3a xf h9 y91 ff3 fs5 fc0 sc0 ls0 ws0">3</div>
			<div class="t m3a x70 h9 y92 ff3 fs5 fc0 sc0 ls0 ws0">5</div>
			<div class="t m22 x71 h3 y93 ff3 fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ B</div>
			<div class="t m2d x72 h3 y94 ff3 fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m39 x73 h9 y95 ff3 fs5 fc0 sc0 ls0 ws0">1</div>
			<div class="t m3a x74 h9 y96 ff3 fs5 fc0 sc0 ls0 ws0">5</div>
			<div class="t m3a x75 h9 y97 ff3 fs5 fc0 sc0 ls0 ws0">2</div>
			<div class="t m20 x76 h3 y98 ff3 fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ C</div>
			<div class="t m2d x77 h3 y99 ff3 fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m3a x78 h9 y9a ff3 fs5 fc0 sc0 ls0 ws0">3</div>
			<div class="t m3b x79 h9 y9b ff3 fs5 fc0 sc0 ls0 ws0">4</div>
			<div class="t m3a x7a h9 y9c ff3 fs5 fc0 sc0 ls0 ws0">9</div>
			<div class="t m3a x7b h9 y9d ff3 fs5 fc0 sc0 ls0 ws0">8</div>
			<div class="t m22 x7c h3 y9e ff3 fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ D</div>
			<div class="t m2d x7d h3 y9f ff3 fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m39 x7d h9 ya0 ff3 fs5 fc0 sc0 ls0 ws0">1</div>
			<div class="t m3a x7e h9 ya1 ff3 fs5 fc0 sc0 ls0 ws0">2</div>
			<div class="t m3b x7f h9 ya2 ff3 fs5 fc0 sc0 ls0 ws0">4</div>
			<div class="t m20 x29 h3 ya3 ff3 fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ E</div>
			<div class="t m2d x80 h3 ya4 ff3 fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m39 x48 h9 ya5 ff3 fs5 fc0 sc0 ls0 ws0">1</div>
			<div class="t m3a x81 h9 ya6 ff3 fs5 fc0 sc0 ls0 ws0">9</div>
			<div class="t m3a x82 h9 ya7 ff3 fs5 fc0 sc0 ls0 ws0">2</div>
			<div class="t m35 x83 ha ya8 ff3 fs6 fc1 sc0 ls0 ws0">Лист_3</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "4")) : ?>
	<div id="pf4" class="pf w4 hb" data-page-no="4">
		<div class="pc pc4 w4 hb">
      <?php echo $image4; ?>
			<div class="c x84 yaa w6 hd">
				<div class="t m3d x85 he yab ff4 fs7 fc0 sc0 ls0 ws0">40</div>
				<div class="t m3d x86 he yac ff4 fs7 fc0 sc0 ls0 ws0"><?php echo $g1; ?></div>
				<div class="t m3d x87 he yad ff4 fs7 fc0 sc0 ls0 ws0"><?php echo $c; ?></div>
				<div class="t m3d x88 he yae ff4 fs7 fc0 sc0 ls0 ws0"><?php echo $d; ?></div>
				<div class="t m3d x2e he yaf ff4 fs7 fc0 sc0 ls0 ws0">60</div>
				<div class="t m3e x89 he yb0 ff4 fs7 fc0 sc0 ls0 ws0">40</div>
				<div class="t m3d x55 he yb1 ff4 fs7 fc0 sc0 ls0 ws0">20</div>
				<div class="t m3e x8a he yb2 ff4 fs7 fc0 sc0 ls0 ws0">30</div>
				<div class="t m3d x8b he yb3 ff4 fs7 fc0 sc0 ls0 ws0">20</div>
				<div class="t m3e x8c he yb4 ff4 fs7 fc0 sc0 ls0 ws0">30</div>
				<div class="t m3d x8b he yb5 ff4 fs7 fc0 sc0 ls0 ws0">20</div>
				<div class="t m3e x8d he yb6 ff4 fs7 fc0 sc0 ls0 ws0">30</div>
				<div class="t m3d x39 he yb7 ff4 fs7 fc0 sc0 ls0 ws0">20</div>
				<div class="t m3e x8d he yb8 ff4 fs7 fc0 sc0 ls0 ws0">30</div>
				<div class="t m3d x8e he yb9 ff4 fs7 fc0 sc0 ls0 ws0"><?php echo $a; ?></div>
				<div class="t m3d x2e he yba ff4 fs7 fc0 sc0 ls0 ws0">70</div>
				<div class="t m3e x8f he ybb ff4 fs7 fc0 sc0 ls0 ws0">60</div>
				<div class="t m3d x90 he ybc ff4 fs7 fc0 sc0 ls0 ws0"><?php echo $g; ?></div>
				<div class="t m3d x91 he ybd ff4 fs7 fc0 sc0 ls0 ws0">60</div>
				<div class="t m3e x92 he ybe ff4 fs7 fc0 sc0 ls0 ws0">40</div>
				<div class="t m3d x2e he ybf ff4 fs7 fc0 sc0 ls0 ws0">60</div>
				<div class="t m3e x92 he yc0 ff4 fs7 fc0 sc0 ls0 ws0">40</div>
				<div class="t m3d x93 he yc1 ff4 fs7 fc0 sc0 ls0 ws0">20</div>
				<div class="t m3e x8b he yc2 ff4 fs7 fc0 sc0 ls0 ws0">30</div>
				<div class="t m3d x94 he yc3 ff4 fs7 fc0 sc0 ls0 ws0"><?php echo $a2; ?></div>
				<div class="t m3d x95 he yc4 ff4 fs7 fc0 sc0 ls0 ws0">71</div>
				<div class="t m3d x96 he yc5 ff5 fs7 fc0 sc0 ls0 ws0"><?php echo $a1; ?></div>
				<div class="t m3d x97 he yc6 ff4 fs7 fc0 sc0 ls0 ws0">60</div>
				<div class="t m3e x98 he yc7 ff4 fs7 fc0 sc0 ls0 ws0">40</div>
				<div class="t m3d x8a he yc8 ff4 fs7 fc0 sc0 ls0 ws0">20</div>
				<div class="t m3e x99 he yc9 ff4 fs7 fc0 sc0 ls0 ws0">30</div>
				<div class="t m3d x2e he yca ff4 fs7 fc0 sc0 ls0 ws0">60</div>
				<div class="t m3e x89 he ycb ff4 fs7 fc0 sc0 ls0 ws0">40</div>
				<div class="t m3d x55 he ycc ff4 fs7 fc0 sc0 ls0 ws0">20</div>
				<div class="t m3e x8a he ycd ff4 fs7 fc0 sc0 ls0 ws0">30</div>
				<div class="t m3d x9a he yce ff5 fs7 fc0 sc0 ls0 ws0"><?php echo $b1; ?></div>
				<div class="t m3d x9b he ycf ff4 fs7 fc0 sc0 ls0 ws0">30</div>
				<div class="t m3d x45 hf yd0 ff4 fs8 fc0 sc0 ls0 ws0">1.</div>
				<div class="t m3d x9c hf yd1 ff4 fs8 fc0 sc0 ls0 ws0">2.</div>
				<div class="t m3d x9d hf yd2 ff4 fs8 fc0 sc0 ls0 ws0">3.</div>
				<div class="t m3d x9c hf yd3 ff4 fs8 fc0 sc0 ls0 ws0">4.</div>
				<div class="t m3d x9d hf yd4 ff4 fs8 fc0 sc0 ls0 ws0">5.</div>
				<div class="t m3d x9c hf yd5 ff4 fs8 fc0 sc0 ls0 ws0">6.</div>
				<div class="t m3d x45 hf yd6 ff4 fs8 fc0 sc0 ls0 ws0">7.</div>
				<div class="t m3d x45 hf yd7 ff4 fs8 fc0 sc0 ls0 ws0">8.</div>
				<div class="t m3d x45 hf yd8 ff4 fs8 fc0 sc0 ls0 ws0">9.</div>
				<div class="t m3e x6f he yc2 ff4 fs7 fc0 sc0 ls0 ws0">30</div>
				<div class="t m3d x9e he yd9 ff5 fs7 fc0 sc0 ls0 ws0"><?php echo $a3; ?></div>
				<div class="t m3d x9f he yda ff4 fs7 fc0 sc0 ls0 ws0">30</div>
				<div class="t m3e xa0 he ydb ff4 fs7 fc0 sc0 ls0 ws0">38</div>
				<div class="t m3e xa1 he ydc ff4 fs7 fc0 sc0 ls0 ws0">30</div>
				<div class="t m3e xa2 he ydb ff4 fs7 fc0 sc0 ls0 ws0">38</div>
				<div class="t m3e xa3 he ydc ff4 fs7 fc0 sc0 ls0 ws0">30</div>
				<div class="t m3d xa4 he ydd ff4 fs7 fc0 sc0 ls0 ws0">40</div>
				<div class="t m3d xa5 he yde ff4 fs7 fc0 sc0 ls0 ws0">30</div>
				<div class="t m3d xa6 he ydf ff5 fs7 fc0 sc0 ls0 ws0"><?php echo $b2; ?></div>
				<div class="t m3d xa7 he ye0 ff5 fs7 fc0 sc0 ls0 ws0"><?php echo $b5; ?></div>
				<div class="t m3d x5e he ye1 ff4 fs7 fc0 sc0 ls0 ws0">60</div>
				<div class="t m3e x8c he ye2 ff4 fs7 fc0 sc0 ls0 ws0">40</div>
				<div class="t m3d xa8 hf ye3 ff4 fs8 fc0 sc0 ls0 ws0">11.</div>
				<div class="t m3d xa8 hf ye4 ff4 fs8 fc0 sc0 ls0 ws0">10.</div>
				<div class="t m3e x92 he ye5 ff4 fs7 fc0 sc0 ls0 ws0">60</div>
				<div class="t m3d xa9 he ye6 ff4 fs7 fc0 sc0 ls0 ws0">40</div>
				<div class="t m3d x90 he ye7 ff5 fs7 fc0 sc0 ls0 ws0"><?php echo $b4; ?></div>
				<div class="t m3d xaa h10 ye8 ff5 fs9 fc0 sc0 ls0 ws0">Порізка профілей на заготовки</div>
				<div class="t m3d xaa h10 ye9 ff5 fs9 fc0 sc0 ls0 ws0">Порізка нащільника заднього</div>
				<div class="t m3d xaa h10 yea ff5 fs9 fc0 sc0 ls0 ws0">Порізка нащільника переднього</div>
				<div class="t m3d xab hf yd0 ff5 fs8 fc0 sc0 ls0 ws0">1шт.</div>
				<div class="t m3d xab hf yeb ff5 fs8 fc0 sc0 ls0 ws0">1шт.</div>
				<div class="t m3d xab hf yec ff5 fs8 fc0 sc0 ls0 ws0">1шт.</div>
				<div class="t m3d xab hf yed ff5 fs8 fc0 sc0 ls0 ws0">1шт.</div>
				<div class="t m3d xab hf yee ff5 fs8 fc0 sc0 ls0 ws0">1шт.</div>
				<div class="t m3d xab hf yef ff5 fs8 fc0 sc0 ls0 ws0">1шт.</div>
				<div class="t m3d xac hf yf0 ff5 fs8 fc0 sc0 ls0 ws0">10шт.</div>
				<div class="t m3d xac hf yf1 ff5 fs8 fc0 sc0 ls0 ws0">2шт.</div>
				<div class="t m3d xab hf yf2 ff5 fs8 fc0 sc0 ls0 ws0">1шт.</div>
				<div class="t m3d xab hf yf3 ff5 fs8 fc0 sc0 ls0 ws0">1шт.</div>
				<div class="t m3d xab hf yf4 ff5 fs8 fc0 sc0 ls0 ws0">1шт.</div>
				<div class="t m3d xad he yf5 ff4 fs7 fc0 sc0 ls0 ws0">80</div>
				<div class="t m3e xae he yf6 ff4 fs7 fc0 sc0 ls0 ws0">48</div>
				<div class="t m3d xaf h11 yf7 ff5 fsa fc3 sc0 ls0 ws0">Лист_4</div>
			</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[0.000000,1.000000,-1.000000,0.000000,842.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "5")) : ?>
	<div id="pf5" class="pf w0 h0" data-page-no="5">
		<div class="pc pc5 w0 h0">
      <?php echo $image5; ?>
			<div class="t m7 x9d h2 yfd ff9 fs0 fc1 sc0 ls0 ws0">(**)</div>
			<div class="t m41 xb2 h2 yfe ff9 fs0 fc1 sc0 ls0 ws0"><?php echo $b5; ?> (висота розміщеня уловлювача верхнього</div>
			<div class="t m42 x71 h2 yff ff9 fs0 fc1 sc0 ls0 ws0">по висоті воріт)</div>
			<div class="t m0 xb3 h2 y100 ff9 fs0 fc1 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m43 xb4 h2 y101 ff9 fs0 fc1 sc0 ls0 ws0"><?php echo $b4; ?> Висота розміщеня верхнього роліка</div>
			<div class="t m41 xb5 h2 y102 ff9 fs0 fc1 sc0 ls0 ws0">по нащільнику задньому</div>
			<div class="t m1 xb6 h2 y103 ff9 fs0 fc1 sc0 ls0 ws0">95 <span class="_ _7"> </span> 95</div>
			<div class="t m8 x8d h2 y104 ff9 fs0 fc0 sc0 ls0 ws0">Відстань від фундаменту до верху воріт</div>
			<div class="t m14 x13 h2 y105 ff9 fs0 fc0 sc0 ls0 ws0">R</div>
			<div class="t m14 xb7 h2 y106 ff9 fs0 fc0 sc0 ls0 ws0">S</div>
			<div class="t m9 xb8 h2 y107 ff9 fs0 fc0 sc0 ls0 ws0">Кріпленя нащільника переднього та заднього провести на закладні зварюваням.</div>
			<div class="t mb xb9 h2 y107 ff9 fs0 fc0 sc0 ls0 ws0">1.</div>
			<div class="t mc x67 h2 y108 ff9 fs0 fc0 sc0 ls0 ws0">** Уловлювач нижній розмістити в складальному вигляді з стулкою воріт та роліками</div>
			<div class="t m2e xb9 h2 y108 ff9 fs0 fc0 sc0 ls0 ws0">2.</div>
			<div class="t m1d xb9 h2 y109 ff9 fs0 fc0 sc0 ls0 ws0">опорними в горізонтальній поверхні на 3мм-4мм вище роліка кінцевого.</div>
			<div class="t m44 xb9 h2 y10a ff9 fs0 fc0 sc0 ls0 ws0">3. Ролік верхній розмістити по висоті нащільника заднього.</div>
			<div class="t m25 xba h2 y10b ff9 fs0 fc0 sc0 ls0 ws0">10</div>
			<div class="t m2e x13 h2 y10c ff9 fs0 fc0 sc0 ls0 ws0">11</div>
			<div class="t m45 x7d h2 y10d ff9 fs0 fc0 sc0 ls0 ws0">W</div>
			<div class="t m32 x13 h2 y10e ff9 fs0 fc0 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m46 xbb h2 y10f ff9 fs0 fc0 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m47 xbc h2 y10f ff9 fs0 fc0 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m45 xbd h3 y110 ff9 fs1 fc0 sc0 ls0 ws0">W</div>
			<div class="t m14 xbe h3 y111 ff9 fs1 fc0 sc0 ls0 ws0">R</div>
			<div class="t m14 xbf h3 y112 ff9 fs1 fc0 sc0 ls0 ws0">S</div>
			<div class="t m48 xc0 h3 y113 ff9 fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ W</div>
			<div class="t m12 xc1 h3 y114 ff9 fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m47 xc2 h2 y115 ff9 fs0 fc0 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m30 xe h2 y116 ff9 fs0 fc0 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m33 xc3 h2 y117 ff9 fs0 fc0 sc0 ls0 ws0">задній</div>
			<div class="t m22 x3d h3 y118 ff9 fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ R</div>
			<div class="t m12 x70 h3 y119 ff9 fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m30 xc4 h2 y11a ff9 fs0 fc0 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m49 x44 h2 y11b ff9 fs0 fc0 sc0 ls0 ws0">передній</div>
			<div class="t m4a xc5 h2 y11c ff9 fs0 fc0 sc0 ls0 ws0">Уловитель верхній</div>
			<div class="t m22 xc6 h3 y11d ff9 fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ S</div>
			<div class="t m12 x9e h3 y11e ff9 fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m28 x56 h2 y11f ff9 fs0 fc0 sc0 ls0 ws0">Уловитель нижній</div>
			<div class="t m30 xc7 h2 y120 ff9 fs0 fc0 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m49 x63 h2 y121 ff9 fs0 fc0 sc0 ls0 ws0">передній</div>
			<div class="t m36 x5 h2 y122 ff9 fs0 fc1 sc0 ls0 ws0"><?php echo $r1; ?></div>
			<div class="t m26 x6 h2 y123 ff9 fs0 fc1 sc0 ls0 ws0"><?php echo $r2; ?></div>
			<div class="t m4b xc8 h17 y124 ff9 fsd fc1 sc0 ls0 ws0">Встановити в міжцегляному</div>
			<div class="t m4c xc9 h17 y125 ff9 fsd fc1 sc0 ls0 ws0">шву на відстані півцегли</div>
			<div class="t m4d xca h17 y126 ff9 fsd fc1 sc0 ls0 ws0">відносно внутнішньої</div>
			<div class="t m4e xcb h17 y127 ff9 fsd fc1 sc0 ls0 ws0">поверхні стовпа.</div>
			<div class="t m4f xcc h3 y128 ff9 fs1 fc1 sc0 ls0 ws0">Встановити в міжцегляному</div>
			<div class="t m50 xcd h3 y129 ff9 fs1 fc1 sc0 ls0 ws0">шву на відстані півцегли</div>
			<div class="t m51 xce h3 y12a ff9 fs1 fc1 sc0 ls0 ws0">відносно внутрішньої</div>
			<div class="t m52 xcf h3 y12b ff9 fs1 fc1 sc0 ls0 ws0">поверхні стовпа.</div>
			<div class="t m13 x33 h3 y12c ff9 fs1 fc0 sc0 ls0 ws0">АА <span class="_ _8"> </span> АА</div>
			<div class="t m53 xd0 h2 y12d ff9 fs0 fc0 sc0 ls0 ws0">СЕЧЕНИЕ АА-АА</div>
			<div class="t m12 xd1 h2 y12e ff9 fs0 fc0 sc0 ls0 ws0">Закладна</div>
			<div class="t m54 xcb h2 y12f ff9 fs0 fc0 sc0 ls0 ws0">нащільника</div>
			<div class="t m12 xcd h2 y130 ff9 fs0 fc0 sc0 ls0 ws0">Закладна</div>
			<div class="t m54 xd2 h2 y131 ff9 fs0 fc0 sc0 ls0 ws0">нащільника</div>
			<div class="t m12 xd3 h2 y132 ff9 fs0 fc0 sc0 ls0 ws0">Закладна</div>
			<div class="t m54 xd4 h2 y133 ff9 fs0 fc0 sc0 ls0 ws0">нащільника</div>
			<div class="t m12 xd3 h2 y134 ff9 fs0 fc0 sc0 ls0 ws0">Закладна</div>
			<div class="t m54 xd4 h2 y135 ff9 fs0 fc0 sc0 ls0 ws0">нащільника</div>
			<div class="t m55 xd5 h2 y136 ff9 fs0 fc0 sc0 ls0 ws0">(4 місця)</div>
			<div class="t m56 xd6 h3 y137 ff9 fs1 fc0 sc0 ls0 ws0">АА-АА</div>
			<div class="t m2d xd7 h3 y138 ff9 fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m13 xd8 h3 y139 ff9 fs1 fc0 sc0 ls0 ws0">СЕЧЕНИЕАА <span class="_ _9"> </span> СЕЧЕНИЕАА</div>
			<div class="t m2 xd9 h3 y13a ff9 fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 10</div>
			<div class="t m30 xda h2 y13b ff9 fs0 fc0 sc0 ls0 ws0">Закладна нащільника</div>
			<div class="t m35 xdb h2 y13c ff9 fs0 fc1 sc0 ls0 ws0">Лист_5</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "6")) : ?>
	<div id="pf6" class="pf w0 h0" data-page-no="6">
		<div class="pc pc6 w0 h0">
      <?php echo $image6; ?>
			<div class="t m1c xdd h3 y13e ffa fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ J</div>
			<div class="t m2d xde h3 y13f ffa fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m46 xdf h2 y140 ffa fs0 fc0 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m57 xe0 h2 y141 ffa fs0 fc0 sc0 ls0 ws0">Стулка</div>
			<div class="t m58 xe1 h2 y142 ffa fs0 fc0 sc0 ls0 ws0">воріт</div>
			<div class="t m20 xe2 h3 y143 ffa fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ L</div>
			<div class="t m2d xe3 h3 y144 ffa fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m32 xe0 h2 y145 ffa fs0 fc0 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m57 x94 h2 y146 ffa fs0 fc0 sc0 ls0 ws0">Стулка</div>
			<div class="t m58 xe4 h2 y147 ffa fs0 fc0 sc0 ls0 ws0">воріт</div>
			<div class="t m22 x52 h3 y148 ffa fs1 fc0 sc0 ls0 ws0">МЕСТНЫЙ Z</div>
			<div class="t m2d x7b h3 y149 ffa fs1 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m47 xe5 h2 y14a ffa fs0 fc0 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m57 x65 h2 y14b ffa fs0 fc0 sc0 ls0 ws0">Стулка</div>
			<div class="t m58 x63 h2 y14c ffa fs0 fc0 sc0 ls0 ws0">воріт</div>
			<div class="t ma xe6 h2 y14d ffa fs0 fc1 sc0 ls0 ws0">450</div>
			<div class="t m1 xe7 h2 y14e ffa fs0 fc1 sc0 ls0 ws0">300</div>
			<div class="t m23 xc6 h4 y14f ffa fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ I</div>
			<div class="t m59 xe8 h4 y150 ffa fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m2a x54 h2 y151 ffa fs0 fc0 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t mc x2c h2 y152 ffa fs0 fc0 sc0 ls0 ws0">Ролік</div>
			<div class="t m1 x44 h2 y153 ffa fs0 fc0 sc0 ls0 ws0">опорний</div>
			<div class="t m49 xe0 h2 y154 ffa fs0 fc0 sc0 ls0 ws0">передній</div>
			<div class="t m5a x6e h2 y155 ffa fs0 fc0 sc0 ls0 ws0">Нащільник задній</div>
			<div class="t m5b xe9 h2 y156 ffa fs0 fc0 sc0 ls0 ws0">Швелер</div>
			<div class="t m45 xea h2 y157 ffa fs0 fc0 sc0 ls0 ws0">армований</div>
			<div class="t m5c xeb h2 y152 ffa fs0 fc0 sc0 ls0 ws0">Кронштейн</div>
			<div class="t m2c xec h2 y153 ffa fs0 fc0 sc0 ls0 ws0">привода</div>
			<div class="t m4a xbc h2 y158 ffa fs0 fc0 sc0 ls0 ws0">Привід</div>
			<div class="t m5d xa5 h2 y159 ffa fs0 fc0 sc0 ls0 ws0">Рейка зубчата</div>
			<div class="t m1c x97 h4 y15a ffa fs2 fc0 sc0 ls0 ws0">AB</div>
			<div class="t m1b xed h4 y15b ffa fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ Z1</div>
			<div class="t m59 xca h4 y15c ffa fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m4a xee h2 y15d ffa fs0 fc0 sc0 ls0 ws0">Привід</div>
			<div class="t m5e xef h2 y15e ffa fs0 fc0 sc0 ls0 ws0">Кінцевик</div>
			<div class="t m5f x6a h2 y15f ffa fs0 fc0 sc0 ls0 ws0">магнітний_закрито</div>
			<div class="t m60 x2c h4 y160 ffa fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ AB</div>
			<div class="t m59 xf0 h4 y161 ffa fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 3</div>
			<div class="t m4a xf1 h2 y162 ffa fs0 fc0 sc0 ls0 ws0">Привід</div>
			<div class="t m61 xf2 h2 y163 ffa fs0 fc0 sc0 ls0 ws0">Кінцевик магнітний</div>
			<div class="t m62 xf3 h2 y164 ffa fs0 fc0 sc0 ls0 ws0">(положення-закрито)</div>
			<div class="t m63 xf4 h2 y165 ffa fs0 fc0 sc0 ls0 ws0">Рейка</div>
			<div class="t m64 xf5 h2 y166 ffa fs0 fc0 sc0 ls0 ws0">зубчата</div>
			<div class="t m65 xf6 h2 y167 ffa fs0 fc0 sc0 ls0 ws0">Шестерня</div>
			<div class="t m66 xf7 h2 y168 ffa fs0 fc0 sc0 ls0 ws0">Клепальна гайка</div>
			<div class="t m67 xf8 h2 y169 ffa fs0 fc0 sc0 ls0 ws0">(кріпленя зубчатої рейки)</div>
			<div class="t m2a xf9 h2 y16a ffa fs0 fc0 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t mc xfa h2 y16b ffa fs0 fc0 sc0 ls0 ws0">Ролік</div>
			<div class="t m1 x73 h2 y16c ffa fs0 fc0 sc0 ls0 ws0">опорний</div>
			<div class="t m33 xf9 h2 y16d ffa fs0 fc0 sc0 ls0 ws0">задній</div>
			<div class="t m44 xdc h2 y16d ffa fs0 fc0 sc0 ls0 ws0">Кронштейн привода</div>
			<div class="t m68 xfb h4 y16e ffa fs2 fc0 sc0 ls0 ws0">AE</div>
			<div class="t m68 xfc h4 y16f ffa fs2 fc0 sc0 ls0 ws0">AF</div>
			<div class="t m69 xfd h4 y170 ffa fs2 fc0 sc0 ls0 ws0">СЕЧЕНИЕ AD-AD</div>
			<div class="t m59 xfe h4 y171 ffa fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m24 xff h2 y172 ffa fs0 fc1 sc0 ls0 ws0">20</div>
			<div class="t m26 x100 h2 y173 ffa fs0 fc1 sc0 ls0 ws0">40</div>
			<div class="t m6a xd5 h4 y174 ffa fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ AE</div>
			<div class="t m56 xec h4 y175 ffa fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 1.5</div>
			<div class="t m5e x101 h2 y176 ffa fs0 fc0 sc0 ls0 ws0">Кінцевик</div>
			<div class="t m9 x7b h2 y177 ffa fs0 fc0 sc0 ls0 ws0">магнітний</div>
			<div class="t m6b x102 h2 y178 ffa fs0 fc0 sc0 ls0 ws0">відкрито</div>
			<div class="t m5d x103 h2 y179 ffa fs0 fc0 sc0 ls0 ws0">Рейка зубчата</div>
			<div class="t m5d x104 h2 y17a ffa fs0 fc0 sc0 ls0 ws0">Клепальна гайка</div>
			<div class="t m6c x105 h2 y17b ffa fs0 fc0 sc0 ls0 ws0">кріпленя рейки зубчатої</div>
			<div class="t m6a xb h4 y17c ffa fs2 fc0 sc0 ls0 ws0">МЕСТНЫЙ AF</div>
			<div class="t m59 x106 h4 y17d ffa fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 2</div>
			<div class="t m6d xef h2 y17e ffa fs0 fc0 sc0 ls0 ws0">Кінцевий ролік</div>
			<div class="t m28 x5e h2 y17f ffa fs0 fc0 sc0 ls0 ws0">Профіль</div>
			<div class="t m6e x107 h2 y180 ffa fs0 fc0 sc0 ls0 ws0">Прижимна</div>
			<div class="t m45 x7d h2 y181 ffa fs0 fc0 sc0 ls0 ws0">планка</div>
			<div class="t m2a x108 h2 y182 ffa fs0 fc0 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m13 x109 h4 y183 ffa fs2 fc0 sc0 ls0 ws0">Q <span class="_ _a"> </span> Q</div>
			<div class="t m13 x10a h4 y184 ffa fs2 fc0 sc0 ls0 ws0">F <span class="_ _b"> </span> F</div>
			<div class="t m1b x10b h4 y185 ffa fs2 fc0 sc0 ls0 ws0">СЕЧЕНИЕQ-Q</div>
			<div class="t m59 xff h4 y186 ffa fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m19 x10c h2 y187 ffa fs0 fc0 sc0 ls0 ws0">Нащільник</div>
			<div class="t m49 x6c h2 y188 ffa fs0 fc0 sc0 ls0 ws0">передній</div>
			<div class="t m46 x10d h2 y189 ffa fs0 fc0 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m57 x10e h2 y18a ffa fs0 fc0 sc0 ls0 ws0">Стулка</div>
			<div class="t m58 x7f h2 y18b ffa fs0 fc0 sc0 ls0 ws0">воріт</div>
			<div class="t m6f x10f h3 y18c ffa fs1 fc0 sc0 ls0 ws0">Закладна</div>
			<div class="t m54 x10f h3 y18d ffa fs1 fc0 sc0 ls0 ws0">нащільника</div>
			<div class="t m1e xcf h4 y18e ffa fs2 fc0 sc0 ls0 ws0">СЕЧЕНИЕ F-F</div>
			<div class="t m59 x110 h4 y18f ffa fs2 fc0 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m57 x111 h2 y190 ffa fs0 fc0 sc0 ls0 ws0">Стулка</div>
			<div class="t m58 x83 h2 y191 ffa fs0 fc0 sc0 ls0 ws0">воріт</div>
			<div class="t m32 x112 h2 y192 ffa fs0 fc0 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m19 x113 h2 y193 ffa fs0 fc0 sc0 ls0 ws0">Нащільник</div>
			<div class="t m49 x114 h2 y194 ffa fs0 fc0 sc0 ls0 ws0">передній</div>
			<div class="t m35 x115 h3 y195 ffa fs1 fc1 sc0 ls0 ws0">Лист_6</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif; ?>
</div>

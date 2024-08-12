
<?php
  $image1 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/45deg/gate_images2/image1.svg");
  $image2 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/45deg/gate_images2/image2.svg");
  $image3 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/45deg/gate_images2/image3.svg");
  $image4 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/45deg/gate_images2/image4.svg");
  $image5 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/45deg/gate_images2/image5.svg");
  $image6 = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/parts/images/triangular/45deg/gate_images2/image6.svg");
  if ($material == "brick") {
    $a3 = $gate_opening + 380;
  } else {
    $a3 = $gate_opening + 290;
  }
  if ( $manual_a ) {
    $a = $manual_a;
  } else {
    $a = round(($a3 + ($a3 / 2) / 1.27) / 100) * 100;
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
  $c1 = round(($a3 - 200) / 3);
  $d = ($b1 - 170) / 2;
  $g = round(100 + (sqrt($b1 * $b1 + ($a4 - 60) * ($a4 - 60))));
  $g1 = round(100 + (sqrt(($a3 - 200) / 3 * ($a3 - 200) / 3 + (($b1 - 140) * ($b1 - 140)))) / 2);
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
<link rel='stylesheet' id='pdf-stylesheet-css' href='<?=$_SERVER['APP_URL']?>/parts/styles/triangular/45deg/gate2.css' type='text/css' media='all' />
<div id="page-container">
  <?php if (strrpos($pages, "1")) : ?>
	<div id="pf1" class="pf w0 h0" data-page-no="1">
		<div class="pc pc1 w0 h0">
      <?php echo $image1; ?>
			<div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">130</div>
			<div class="t m1 x2 h2 y2 ff1 fs0 fc0 sc0 ls0 ws0">250</div>
			<div class="t m2 x3 h2 y2 ff1 fs0 fc0 sc0 ls0 ws0">Відстан6ь між стовпами</div>
			<div class="t m3 x4 h2 y3 ff1 fs0 fc0 sc0 ls0 ws0"><?php echo $b; ?></div>
			<div class="t m4 x5 h2 y4 ff1 fs0 fc0 sc0 ls0 ws0">Відстань від фундаменту до верху воріт</div>
			<div class="t m5 x6 h2 y5 ff1 fs0 fc0 sc0 ls0 ws0"><?php echo $clearance_under_gate; ?>-відстань від низу воріт</div>
			<div class="t m6 x7 h2 y6 ff1 fs0 fc0 sc0 ls0 ws0">до фундаменту</div>
			<div class="t m7 x8 h2 y7 ff1 fs0 fc0 sc0 ls0 ws0"><?php echo $l1; ?>-відстань між роліковими опорами.</div>
			<div class="t m1 x2 h2 y8 ff1 fs0 fc0 sc0 ls0 ws0">300</div>
			<div class="t m1 x9 h2 y9 ff1 fs0 fc0 sc0 ls0 ws0">250</div>
			<div class="t m8 xa h2 ya ff1 fs0 fc0 sc0 ls0 ws0"><?php echo $l2; ?>-довжина зубчатої рейки</div>
			<div class="t m9 xb h2 yb ff1 fs0 fc0 sc0 ls0 ws0"><?php echo $a; ?></div>
			<div class="t ma xc h2 y8 ff1 fs0 fc0 sc0 ls0 ws0">450</div>
			<div class="t ma xd h3 yc ff1 fs1 fc1 sc0 ls0 ws0">Встановлення та кріаленя кінцевого роліка показано на розрізі AD-AD, та Вид АF (Лист_6)</div>
			<div class="t mb xe h3 yc ff1 fs1 fc1 sc0 ls0 ws0">1.</div>
			<div class="t mc xe h3 yd ff1 fs1 fc1 sc0 ls0 ws0">2. Уловитель нижній встановити в складальному вигляді воріт та роліків верхніх в горізонтальній поверхні на 3-4мм</div>
			<div class="t ma xe h3 ye ff1 fs1 fc1 sc0 ls0 ws0">вище кінцевого роліка, місцевий Вид L, Вид S, розріз F-F (Лист_1, Лист_5).</div>
			<div class="t md xe h3 yf ff1 fs1 fc1 sc0 ls0 ws0">2. *** Уловлювач верхній та верхній ролік встановити після встановленя уловлювача нижнього, місцевий Вид R, Вид Z,</div>
			<div class="t me xe h3 y10 ff1 fs1 fc1 sc0 ls0 ws0">Вид W, Вид J (Лист_1, Лист_5, Лист_6).</div>
			<div class="t mc xe h3 y11 ff1 fs1 fc1 sc0 ls0 ws0">3. Умова розміщеня привода воріт (зацепленя шестерні в зубчатій рейці) без натягу.</div>
			<div class="t mf xe h3 y12 ff1 fs1 fc1 sc0 ls0 ws0">4. Розмістити привід таким чином, щоб шестерня привода була розміщена по середині зубчатої рейки, місцевий вид АВ</div>
			<div class="t m8 xe h3 y13 ff1 fs1 fc1 sc0 ls0 ws0">(Лист_6). Бокова поверхня шестерні повиннна бути паралельна боковій поверхні рейки зубчатої.</div>
			<div class="t m10 xe h3 y14 ff1 fs1 fc1 sc0 ls0 ws0">5. Магнітні кінцевики (положеня-відкрито. закрито) встановити на зубчатій рейці по факту умови повного закривання та</div>
			<div class="t m11 xe h3 y15 ff1 fs1 fc1 sc0 ls0 ws0">відкривання воріт (Лист_1).</div>
			<div class="t m12 xe h3 y16 ff1 fs1 fc1 sc0 ls0 ws0">6. Кріпленя магнітного кінцевика вказано на розрізі AD-AD, Вид АЕ (Лист_6)</div>
			<div class="t m13 x0 h3 y17 ff1 fs1 fc1 sc0 ls0 ws0">Q <span class="_ _0"> </span> Q</div>
			<div class="t m13 xf h3 y18 ff1 fs1 fc1 sc0 ls0 ws0">F <span class="_ _1"> </span> F</div>
			<div class="t m13 x10 h3 y19 ff1 fs1 fc1 sc0 ls0 ws0">AD</div>
			<div class="t m13 x10 h3 y1a ff1 fs1 fc1 sc0 ls0 ws0">AD</div>
			<div class="t m14 x11 h3 y1b ff1 fs1 fc1 sc0 ls0 ws0">J</div>
			<div class="t m1 x12 h3 y1c ff1 fs1 fc1 sc0 ls0 ws0">L</div>
			<div class="t m14 x13 h3 y1d ff1 fs1 fc1 sc0 ls0 ws0">Z</div>
			<div class="t m15 x14 h3 y1e ff1 fs1 fc1 sc0 ls0 ws0">I</div>
			<div class="t m16 x15 h4 y1f ff1 fs2 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m17 x16 h4 y20 ff1 fs2 fc1 sc0 ls0 ws0">Заглушка</div>
			<div class="t m18 x17 h4 y21 ff1 fs2 fc1 sc0 ls0 ws0">задня</div>
			<div class="t m19 x18 h4 y22 ff1 fs2 fc1 sc0 ls0 ws0">Магнітний кінцевик-положеня відкрито</div>
			<div class="t m1a x19 h4 y23 ff1 fs2 fc1 sc0 ls0 ws0">Магнітний кінцевик</div>
			<div class="t m1a x19 h4 y24 ff1 fs2 fc1 sc0 ls0 ws0">-положеня закрито</div>
			<div class="t m1b x1a h2 y25 ff1 fs0 fc0 sc0 ls0 ws0">Лист_1</div>
			<div class="t m1c x1b h3 y26 ff1 fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ Q-Q</div>
			<div class="t m1d x12 h3 y27 ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 17</div>
			<div class="t m1e x1b h3 y28 ff1 fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ F-F</div>
			<div class="t m1d x12 h3 y29 ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 17</div>
			<div class="t m1f x1c h3 y2a ff1 fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕ AD-AD</div>
			<div class="t m1d x1c h3 y2b ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 17</div>
			<div class="t m20 x1d h3 y2c ff1 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ J</div>
			<div class="t m10 x1e h3 y2d ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 2 : 17</div>
			<div class="t m21 x1f h3 y2e ff1 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ L</div>
			<div class="t m10 x20 h3 y2f ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 2 : 17</div>
			<div class="t m22 x21 h3 y30 ff1 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ I</div>
			<div class="t m10 x22 h3 y31 ff1 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 2 : 17</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "2")) : ?>
	<div id="pf2" class="pf w0 h0" data-page-no="2">
		<div class="pc pc2 w0 h0">
      <?php echo $image2; ?>
			<div class="t m1 x24 h2 y33 ff2 fs0 fc0 sc0 ls0 ws0">95</div>
			<div class="t m0 x25 h2 y34 ff2 fs0 fc0 sc0 ls0 ws0">100 <span class="_ _2"> </span> 100</div>
			<div class="t ma x26 h2 y35 ff2 fs0 fc0 sc0 ls0 ws0">240</div>
			<div class="t m23 x27 h2 y36 ff2 fs0 fc0 sc0 ls0 ws0">500</div>
			<div class="t m24 x28 h2 y37 ff2 fs0 fc0 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m25 x29 h2 y38 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $l1; ?></div>
			<div class="t m26 x2a h2 y39 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $b5; ?></div>
			<div class="t m3 xb h2 y3a ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $b4; ?></div>
			<div class="t m1 x2b h2 y3b ff2 fs0 fc0 sc0 ls0 ws0">95</div>
			<div class="t m27 x2c h2 y3c ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a7; ?></div>
			<div class="t m28 x2d h2 y3d ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a6; ?></div>
			<div class="t m13 x2e h3 y3e ff2 fs1 fc1 sc0 ls0 ws0">A <span class="_ _3"> </span> A</div>
			<div class="t m13 x2f h3 y3f ff2 fs1 fc1 sc0 ls0 ws0">N</div>
			<div class="t m28 x30 h2 y40 ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m29 x31 h2 y41 ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m2a x29 h2 y42 ff2 fs0 fc1 sc0 ls0 ws0">для роліка опорного</div>
			<div class="t m1 x32 h2 y43 ff2 fs0 fc1 sc0 ls0 ws0">переднього</div>
			<div class="t m28 x30 h2 y44 ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m29 x31 h2 y45 ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m2a x29 h2 y46 ff2 fs0 fc1 sc0 ls0 ws0">для роліка опорного</div>
			<div class="t m2b x33 h2 y47 ff2 fs0 fc1 sc0 ls0 ws0">заднього</div>
			<div class="t m28 x34 h2 y48 ff2 fs0 fc1 sc0 ls0 ws0">Вихід</div>
			<div class="t m29 x35 h2 y49 ff2 fs0 fc1 sc0 ls0 ws0">різьбового з'єднання</div>
			<div class="t m9 x36 h2 y4a ff2 fs0 fc1 sc0 ls0 ws0">для кронштейна</div>
			<div class="t m2c x37 h2 y4b ff2 fs0 fc1 sc0 ls0 ws0">привода</div>
			<div class="t m2d x38 h2 y4c ff2 fs0 fc1 sc0 ls0 ws0">Ролік задній розмістити в складальному вигляді з рамою воріт</div>
			<div class="t m10 x38 h2 y4d ff2 fs0 fc1 sc0 ls0 ws0">максимально віддаленим по довжині хвостовика воріт.</div>
			<div class="t m2e x39 h2 y4e ff2 fs0 fc1 sc0 ls0 ws0">11</div>
			<div class="t m25 x3a h2 y4f ff2 fs0 fc1 sc0 ls0 ws0">10</div>
			<div class="t m28 x3b h2 y50 ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a5; ?></div>
			<div class="t m1 x3c h2 y51 ff2 fs0 fc0 sc0 ls0 ws0">95</div>
			<div class="t m2f x3d h2 y52 ff2 fs0 fc0 sc0 ls0 ws0">160</div>
			<div class="t ma x3e h2 y53 ff2 fs0 fc0 sc0 ls0 ws0">250</div>
			<div class="t m1 x3f h2 y54 ff2 fs0 fc0 sc0 ls0 ws0">60</div>
			<div class="t m26 x40 h2 y55 ff2 fs0 fc0 sc0 ls0 ws0">40</div>
			<div class="t m30 x41 h3 y56 ff2 fs1 fc1 sc0 ls0 ws0">A-A МАСШТАБ1 : 16</div>
			<div class="t m31 x0 h2 y57 ff2 fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m32 x42 h2 y58 ff2 fs0 fc1 sc0 ls0 ws0">Стовп</div>
			<div class="t m33 x43 h2 y59 ff2 fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m34 x44 h2 y5a ff2 fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m29 x9 h2 y5b ff2 fs0 fc1 sc0 ls0 ws0">(Розміщення швелера відносно стовпа)</div>
			<div class="t m28 x45 h2 y5c ff2 fs0 fc0 sc0 ls0 ws0"><?php echo $a8; ?></div>
			<div class="t m23 x46 h2 y5d ff2 fs0 fc0 sc0 ls0 ws0">500</div>
			<div class="t m14 x47 h3 y5e ff2 fs1 fc1 sc0 ls0 ws0">O</div>
			<div class="t m35 x48 h3 y5f ff2 fs1 fc1 sc0 ls0 ws0">ВИД N</div>
			<div class="t m1d x49 h3 y60 ff2 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 16</div>
			<div class="t m0 x4a h2 y61 ff2 fs0 fc0 sc0 ls0 ws0">160</div>
			<div class="t m36 x4b h3 y62 ff2 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ O</div>
			<div class="t m2d x4a h3 y63 ff2 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m31 x4c h2 y64 ff2 fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m33 x4d h2 y65 ff2 fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m34 x4e h2 y66 ff2 fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m37 x4f h2 y67 ff2 fs0 fc0 sc0 ls0 ws0">Лист_2</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "3")) : ?>
	<div id="pf3" class="pf w0 h0" data-page-no="3">
		<div class="pc pc3 w0 h0">
      <?php echo $image3; ?>
			<div class="t m28 x52 h2 y6b ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $a3; ?></div>
			<div class="t m39 x53 h2 y6c ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $b1; ?></div>
			<div class="t m1 x54 h2 y6d ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $c; ?></div>
			<div class="t m25 x55 h2 y6e ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $c1; ?> <span class="_ _4"> </span> <?php echo $c1; ?> <span class="_ _5"> </span> <?php echo $c1; ?></div>
			<div class="t m3 x56 h2 y6f ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $d; ?> <span class="_ _6"> </span> <?php echo $d; ?></div>
			<div class="t m3 x12 h2 y70 ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $b; ?></div>
			<div class="t m3a x57 h9 y71 ff4 fs4 fc0 sc0 ls0 ws0"><?php echo $g; ?></div>
			<div class="t m3b x58 h2 y72 ff4 fs0 fc0 sc0 ls0 ws0">A4</div>
			<div class="t m9 x59 h2 y73 ff4 fs0 fc0 sc0 ls0 ws0"><?php echo $a; ?></div>
			<div class="t m3c x5a ha y74 ff4 fs5 fc1 sc0 ls0 ws0"><?php echo $g1; ?></div>
			<div class="t m3c x5b ha y75 ff4 fs5 fc1 sc0 ls0 ws0"><?php echo $g1; ?></div>
			<div class="t m9 x5c h3 y76 ff4 fs1 fc1 sc0 ls0 ws0">A</div>
			<div class="t m14 x5d h3 y77 ff4 fs1 fc1 sc0 ls0 ws0">B</div>
			<div class="t m1 x34 h3 y78 ff4 fs1 fc1 sc0 ls0 ws0">C</div>
			<div class="t m14 x13 h3 y79 ff4 fs1 fc1 sc0 ls0 ws0">D</div>
			<div class="t m1 x5e h3 y7a ff4 fs1 fc1 sc0 ls0 ws0">E</div>
			<div class="t m3d x5f h4 y7b ff4 fs2 fc1 sc0 ls0 ws0">1</div>
			<div class="t m3e x60 h4 y7c ff4 fs2 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3e x61 h4 y7d ff4 fs2 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3e x62 h4 y7e ff4 fs2 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3e x33 h4 y7f ff4 fs2 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3f x63 h4 y80 ff4 fs2 fc1 sc0 ls0 ws0">4</div>
			<div class="t m3e x64 h4 y81 ff4 fs2 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3e x64 h4 y82 ff4 fs2 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3e x65 h4 y83 ff4 fs2 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3e x66 h4 y84 ff4 fs2 fc1 sc0 ls0 ws0">5</div>
			<div class="t m3e x67 h4 y85 ff4 fs2 fc1 sc0 ls0 ws0">6</div>
			<div class="t m3e x68 h4 y86 ff4 fs2 fc1 sc0 ls0 ws0">6</div>
			<div class="t m3e x69 h4 y87 ff4 fs2 fc1 sc0 ls0 ws0">7</div>
			<div class="t m3e x6a h4 y88 ff4 fs2 fc1 sc0 ls0 ws0">8</div>
			<div class="t m1f x6b h3 y89 ff4 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ A</div>
			<div class="t m1d x6c h3 y8a ff4 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 2 : 11</div>
			<div class="t m3e x39 h4 y8b ff4 fs2 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3e x12 h4 y8c ff4 fs2 fc1 sc0 ls0 ws0">3</div>
			<div class="t m36 x6d h3 y8d ff4 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ B</div>
			<div class="t m1d x6e h3 y8e ff4 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 2 : 11</div>
			<div class="t m3d x6f h4 y8f ff4 fs2 fc1 sc0 ls0 ws0">1</div>
			<div class="t m3e x28 h4 y90 ff4 fs2 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3e x70 h4 y91 ff4 fs2 fc1 sc0 ls0 ws0">2</div>
			<div class="t m21 x71 h3 y92 ff4 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ C</div>
			<div class="t m1d x72 h3 y93 ff4 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 2 : 11</div>
			<div class="t m3e x73 h4 y94 ff4 fs2 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3e x74 h4 y95 ff4 fs2 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3e x75 h4 y96 ff4 fs2 fc1 sc0 ls0 ws0">6</div>
			<div class="t m3e x76 h4 y97 ff4 fs2 fc1 sc0 ls0 ws0">8</div>
			<div class="t m36 x77 h3 y98 ff4 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ D</div>
			<div class="t m1d x78 h3 y99 ff4 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 2 : 11</div>
			<div class="t m3e x79 h4 y9a ff4 fs2 fc1 sc0 ls0 ws0">3</div>
			<div class="t m3e x7a h4 y9b ff4 fs2 fc1 sc0 ls0 ws0">2</div>
			<div class="t m3d x7b h4 y9c ff4 fs2 fc1 sc0 ls0 ws0">1</div>
			<div class="t m3e x19 h4 y9d ff4 fs2 fc1 sc0 ls0 ws0">7</div>
			<div class="t m21 x7c h3 y9e ff4 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ E</div>
			<div class="t m1d x7d h3 y9f ff4 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 2 : 11</div>
			<div class="t m3e x7e h4 ya0 ff4 fs2 fc1 sc0 ls0 ws0">8</div>
			<div class="t m3e x7f h4 ya1 ff4 fs2 fc1 sc0 ls0 ws0">7</div>
			<div class="t m3d x80 h4 ya2 ff4 fs2 fc1 sc0 ls0 ws0">1</div>
			<div class="t m37 x81 h2 ya3 ff4 fs0 fc0 sc0 ls0 ws0">Лист_3</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "4")) : ?>
	<div id="pf4" class="pf w5 hb" data-page-no="4">
		<div class="pc pc4 w5 hb">
      <?php echo $image4; ?>
			<div class="c x82 ya5 w7 hd">
				<div class="t m38 x83 he ya6 ff5 fs6 fc1 sc0 ls0 ws0"><?php echo $g1; ?></div>
				<div class="t m38 x18 he ya7 ff5 fs6 fc1 sc0 ls0 ws0"><?php echo $c; ?></div>
				<div class="t m38 x84 he ya8 ff5 fs6 fc1 sc0 ls0 ws0"><?php echo $d; ?></div>
				<div class="t m38 x85 he ya9 ff5 fs6 fc1 sc0 ls0 ws0">20</div>
				<div class="t m40 x77 he yaa ff5 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m38 x85 he yab ff5 fs6 fc1 sc0 ls0 ws0">20</div>
				<div class="t m40 x86 he yac ff5 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m38 x38 he yad ff5 fs6 fc1 sc0 ls0 ws0">20</div>
				<div class="t m40 x86 he yae ff5 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m38 x6d he yaf ff5 fs6 fc1 sc0 ls0 ws0"><?php echo $a; ?></div>
				<div class="t m38 x2c he yb0 ff5 fs6 fc1 sc0 ls0 ws0">70</div>
				<div class="t m40 x67 he yb1 ff5 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m38 x87 he yb2 ff5 fs6 fc1 sc0 ls0 ws0"><?php echo $g; ?></div>
				<div class="t m38 x88 he yb3 ff5 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m40 x89 he yb4 ff5 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m38 x2c he yb5 ff5 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m40 x89 he yb6 ff5 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m38 x8a he yb7 ff5 fs6 fc1 sc0 ls0 ws0">20</div>
				<div class="t m40 x85 he yb8 ff5 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m38 x1d he yb9 ff5 fs6 fc1 sc0 ls0 ws0"><?php echo $a3; ?></div>
				<div class="t m38 x43 hf yba ff5 fs7 fc1 sc0 ls0 ws0">1.</div>
				<div class="t m38 x8b hf ybb ff5 fs7 fc1 sc0 ls0 ws0">2.</div>
				<div class="t m38 x8c hf ybc ff5 fs7 fc1 sc0 ls0 ws0">3.</div>
				<div class="t m38 x8b hf ybd ff5 fs7 fc1 sc0 ls0 ws0">4.</div>
				<div class="t m38 x8c hf ybe ff5 fs7 fc1 sc0 ls0 ws0">5.</div>
				<div class="t m38 x8b hf ybf ff5 fs7 fc1 sc0 ls0 ws0">6.</div>
				<div class="t m38 x43 hf yc0 ff5 fs7 fc1 sc0 ls0 ws0">7.</div>
				<div class="t m38 x43 hf yc1 ff5 fs7 fc1 sc0 ls0 ws0">8.</div>
				<div class="t m38 x43 hf yc2 ff5 fs7 fc1 sc0 ls0 ws0">9.</div>
				<div class="t m38 x8d he yc3 ff6 fs6 fc1 sc0 ls0 ws0"><?php echo $b5; ?></div>
				<div class="t m38 x8e he yc4 ff5 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m40 x8f he yc5 ff5 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m38 x90 hf yc6 ff5 fs7 fc1 sc0 ls0 ws0">10.</div>
				<div class="t m40 x89 he yc7 ff5 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m38 x91 he yc8 ff5 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m38 x87 he yc9 ff6 fs6 fc1 sc0 ls0 ws0"><?php echo $b4; ?></div>
				<div class="t m38 x92 h10 yca ff6 fs8 fc1 sc0 ls0 ws0">Порізка профілей на заготовки</div>
				<div class="t m38 x92 h10 ycb ff6 fs8 fc1 sc0 ls0 ws0">Порізка нащільника заднього</div>
				<div class="t m38 x92 h10 ycc ff6 fs8 fc1 sc0 ls0 ws0">Порізка нащільника переднього</div>
				<div class="t m38 x93 hf yba ff6 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m38 x94 hf ycd ff6 fs7 fc1 sc0 ls0 ws0">2шт.</div>
				<div class="t m38 x94 hf yce ff6 fs7 fc1 sc0 ls0 ws0">2шт.</div>
				<div class="t m38 x93 hf ycf ff6 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m38 x94 hf yd0 ff6 fs7 fc1 sc0 ls0 ws0">2шт.</div>
				<div class="t m38 x94 hf yd1 ff6 fs7 fc1 sc0 ls0 ws0">2шт.</div>
				<div class="t m38 x93 hf yd2 ff6 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m38 x93 hf yd3 ff6 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m38 x93 hf yd4 ff6 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m38 x59 he yd5 ff5 fs6 fc1 sc0 ls0 ws0">80</div>
				<div class="t m40 x95 he yd6 ff5 fs6 fc1 sc0 ls0 ws0">48</div>
				<div class="t m38 x96 h11 yd7 ff6 fs9 fc3 sc0 ls0 ws0">Лист_4</div>
				<div class="t m38 x97 he yd8 ff6 fs6 fc1 sc0 ls0 ws0"><?php echo $b1; ?></div>
				<div class="t m38 x2c he yd9 ff5 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m40 x89 he yda ff5 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m38 x8a he ydb ff5 fs6 fc1 sc0 ls0 ws0">20</div>
				<div class="t m40 x85 he ydc ff5 fs6 fc1 sc0 ls0 ws0">30</div>
				<div class="t m38 x98 he ydd ff6 fs6 fc1 sc0 ls0 ws0"><?php echo $a4; ?></div>
				<div class="t m38 x88 he yde ff5 fs6 fc1 sc0 ls0 ws0">60</div>
				<div class="t m40 x89 he ydf ff5 fs6 fc1 sc0 ls0 ws0">40</div>
				<div class="t m38 x93 hf ye0 ff6 fs7 fc1 sc0 ls0 ws0">1шт.</div>
				<div class="t m41 x99 h12 ye1 ff5 fsa fc1 sc0 ls0 ws0">45</div>
				<div class="t m42 x9a h13 ye2 ff5 fsb fc1 sc0 ls0 ws0">45</div>
				<div class="t m43 x9b h14 ye3 ff5 fsc fc1 sc0 ls0 ws0">45</div>
				<div class="t m44 x40 h13 ye4 ff5 fsb fc1 sc0 ls0 ws0">45</div>
				<div class="t m45 x6b h15 ye5 ff5 fsd fc1 sc0 ls0 ws0">W*</div>
				<div class="t m46 x9c h16 ye6 ff5 fse fc1 sc0 ls0 ws0">W*</div>
				<div class="t m47 x52 h17 ye7 ff5 fsf fc1 sc0 ls0 ws0">W*</div>
				<div class="t m38 x6c h10 ye8 ff5 fs8 fc1 sc0 ls0 ws0">1.* <span class="_ _7"> </span> <span class="ff6"> Розмір визначити по місцю при зварювані рами воріт. </span></div>
				<div class="t m48 x6b h18 ye9 ff5 fs10 fc1 sc0 ls0 ws0">W*</div>
				<div class="t m49 x9d h19 yea ff5 fs11 fc1 sc0 ls0 ws0">W*</div>
			</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[0.000000,1.000000,-1.000000,0.000000,842.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "5")) : ?>
	<div id="pf5" class="pf w0 h0" data-page-no="5">
		<div class="pc pc5 w0 h0">
      <?php echo $image5; ?>
			<div class="t m3 x8c h2 yee ff8 fs0 fc0 sc0 ls0 ws0">(**)</div>
			<div class="t m4b x9e h2 yef ff8 fs0 fc0 sc0 ls0 ws0"><?php echo $b5; ?> (висота розміщеня уловлювача верхнього</div>
			<div class="t m4c x9f h2 yf0 ff8 fs0 fc0 sc0 ls0 ws0">по висоті воріт)</div>
			<div class="t m24 x5f h2 yf1 ff8 fs0 fc0 sc0 ls0 ws0">Відстань між стовпами</div>
			<div class="t m4d xa0 h2 yf2 ff8 fs0 fc0 sc0 ls0 ws0"><?php echo $b4; ?> Висота розміщеня верхнього роліка</div>
			<div class="t m4b xa1 h2 yf3 ff8 fs0 fc0 sc0 ls0 ws0">по нащільнику задньому</div>
			<div class="t m1 xe h2 yf4 ff8 fs0 fc0 sc0 ls0 ws0">95 <span class="_ _8"> </span> 95</div>
			<div class="t m4 x86 h2 yf5 ff8 fs0 fc1 sc0 ls0 ws0">Відстань від фундаменту до верху воріт</div>
			<div class="t m14 xa2 h2 yf6 ff8 fs0 fc1 sc0 ls0 ws0">R</div>
			<div class="t m14 xd h2 yf7 ff8 fs0 fc1 sc0 ls0 ws0">S</div>
			<div class="t m9 xa3 h2 yf8 ff8 fs0 fc1 sc0 ls0 ws0">Кріпленя нащільника переднього та заднього провести на закладні зварюваням.</div>
			<div class="t mb xa4 h2 yf8 ff8 fs0 fc1 sc0 ls0 ws0">1.</div>
			<div class="t mc xa5 h2 yf9 ff8 fs0 fc1 sc0 ls0 ws0">** Уловлювач нижній розмістити в складальному вигляді з стулкою воріт та роліками</div>
			<div class="t m2e xa4 h2 yf9 ff8 fs0 fc1 sc0 ls0 ws0">2.</div>
			<div class="t m4e xa4 h2 yfa ff8 fs0 fc1 sc0 ls0 ws0">опорними в горізонтальній поверхні на 3мм-4мм вище роліка кінцевого.</div>
			<div class="t m4f xa4 h2 yfb ff8 fs0 fc1 sc0 ls0 ws0">3. Ролік верхній розмістити по висоті нащільника заднього.</div>
			<div class="t m25 xa6 h2 yfc ff8 fs0 fc1 sc0 ls0 ws0">10</div>
			<div class="t m2e xa2 h2 yfd ff8 fs0 fc1 sc0 ls0 ws0">11</div>
			<div class="t m1b xa7 h2 yfe ff8 fs0 fc1 sc0 ls0 ws0">W</div>
			<div class="t m32 xa2 h2 yff ff8 fs0 fc1 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m50 x11 h2 y100 ff8 fs0 fc1 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m51 xa8 h2 y100 ff8 fs0 fc1 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m1b xa9 h3 y101 ff8 fs1 fc1 sc0 ls0 ws0">W</div>
			<div class="t m14 xaa h3 y102 ff8 fs1 fc1 sc0 ls0 ws0">R</div>
			<div class="t m14 xab h3 y103 ff8 fs1 fc1 sc0 ls0 ws0">S</div>
			<div class="t m52 xac h3 y104 ff8 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ W</div>
			<div class="t m12 xad h3 y105 ff8 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m51 xae h2 y106 ff8 fs0 fc1 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m30 xc h2 y107 ff8 fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m34 xaf h2 y108 ff8 fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m36 x3c h3 y109 ff8 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ R</div>
			<div class="t m12 xb0 h3 y10a ff8 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m30 xb1 h2 y10b ff8 fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m53 x42 h2 y10c ff8 fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m54 xb2 h2 y10d ff8 fs0 fc1 sc0 ls0 ws0">Уловитель верхній</div>
			<div class="t m36 x64 h3 y10e ff8 fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ S</div>
			<div class="t m12 xb3 h3 y10f ff8 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 4</div>
			<div class="t m28 xb4 h2 y110 ff8 fs0 fc1 sc0 ls0 ws0">Уловитель нижній</div>
			<div class="t m30 xb5 h2 y111 ff8 fs0 fc1 sc0 ls0 ws0">Поз_10 Нащільник</div>
			<div class="t m53 xb6 h2 y112 ff8 fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m39 xb7 h2 y113 ff8 fs0 fc0 sc0 ls0 ws0"><?php echo $r1; ?></div>
			<div class="t m26 xb8 h2 y114 ff8 fs0 fc0 sc0 ls0 ws0"><?php echo $r2; ?></div>
			<div class="t m55 xb9 h1d y115 ff8 fs13 fc0 sc0 ls0 ws0">Встановити в міжцегляному</div>
			<div class="t m56 xba h1d y116 ff8 fs13 fc0 sc0 ls0 ws0">шву на відстані півцегли</div>
			<div class="t m57 xbb h1d y117 ff8 fs13 fc0 sc0 ls0 ws0">відносно внутнішньої</div>
			<div class="t m58 xbc h1d y118 ff8 fs13 fc0 sc0 ls0 ws0">поверхні стовпа.</div>
			<div class="t m59 xbd h3 y119 ff8 fs1 fc0 sc0 ls0 ws0">Встановити в міжцегляному</div>
			<div class="t m5a xbe h3 y11a ff8 fs1 fc0 sc0 ls0 ws0">шву на відстані півцегли</div>
			<div class="t m5b xbf h3 y11b ff8 fs1 fc0 sc0 ls0 ws0">відносно внутрішньої</div>
			<div class="t m5c xc0 h3 y11c ff8 fs1 fc0 sc0 ls0 ws0">поверхні стовпа.</div>
			<div class="t m13 x32 h3 y11d ff8 fs1 fc1 sc0 ls0 ws0">АА <span class="_ _9"> </span> АА</div>
			<div class="t m5d xc1 h2 y11e ff8 fs0 fc1 sc0 ls0 ws0">СЕЧЕНИЕ АА-АА</div>
			<div class="t m12 xc2 h2 y11f ff8 fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m5e xbc h2 y120 ff8 fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m12 xbe h2 y121 ff8 fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m5e xc3 h2 y122 ff8 fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m12 xc4 h2 y123 ff8 fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m5e xc5 h2 y124 ff8 fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m12 xc4 h2 y125 ff8 fs0 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m5e xc5 h2 y126 ff8 fs0 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m5f x66 h2 y127 ff8 fs0 fc1 sc0 ls0 ws0">(4 місця)</div>
			<div class="t m60 xc6 h3 y128 ff8 fs1 fc1 sc0 ls0 ws0">АА-АА</div>
			<div class="t m2d xc7 h3 y129 ff8 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m13 xc8 h3 y12a ff8 fs1 fc1 sc0 ls0 ws0">СЕЧЕНИЕАА <span class="_ _a"> </span> СЕЧЕНИЕАА</div>
			<div class="t m1d xc9 h3 y12b ff8 fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 10</div>
			<div class="t m30 xca h2 y12c ff8 fs0 fc1 sc0 ls0 ws0">Закладна нащільника</div>
			<div class="t m37 x7 h2 y12d ff8 fs0 fc0 sc0 ls0 ws0">Лист_5</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
<?php endif;
if (strrpos($pages, "6")) : ?>
	<div id="pf6" class="pf w0 h0" data-page-no="6">
		<div class="pc pc6 w0 h0">
      <?php echo $image6; ?>
			<div class="t m20 x53 h3 y135 ffa fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ J</div>
			<div class="t m2d xce h3 y136 ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m50 x50 h2 y137 ffa fs0 fc1 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m62 xcf h2 y138 ffa fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m63 xd0 h2 y139 ffa fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m21 x6e h3 y13a ffa fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ L</div>
			<div class="t m2d xd1 h3 y13b ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m32 xcf h2 y13c ffa fs0 fc1 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m62 x1d h2 y13d ffa fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m63 x3 h2 y13e ffa fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m36 xd2 h3 y13f ffa fs1 fc1 sc0 ls0 ws0">МЕСТНЫЙ Z</div>
			<div class="t m2d xd3 h3 y140 ffa fs1 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m51 xd4 h2 y141 ffa fs0 fc1 sc0 ls0 ws0">Ролік верхній</div>
			<div class="t m62 xd5 h2 y142 ffa fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m63 xb6 h2 y143 ffa fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t ma xd6 h2 y144 ffa fs0 fc0 sc0 ls0 ws0">450</div>
			<div class="t m1 xd7 h2 y145 ffa fs0 fc0 sc0 ls0 ws0">300</div>
			<div class="t m22 x64 h23 y146 ffa fs16 fc1 sc0 ls0 ws0">МЕСТНЫЙ I</div>
			<div class="t m4e xd8 h23 y147 ffa fs16 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m2a xd9 h2 y148 ffa fs0 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t mc x2a h2 y149 ffa fs0 fc1 sc0 ls0 ws0">Ролік</div>
			<div class="t m1 x42 h2 y14a ffa fs0 fc1 sc0 ls0 ws0">опорний</div>
			<div class="t m53 xcf h2 y14b ffa fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m64 xda h2 y14c ffa fs0 fc1 sc0 ls0 ws0">Нащільник задній</div>
			<div class="t m65 xdb h2 y14d ffa fs0 fc1 sc0 ls0 ws0">Швелер</div>
			<div class="t m1b xdc h2 y14e ffa fs0 fc1 sc0 ls0 ws0">армований</div>
			<div class="t m66 xdd h2 y149 ffa fs0 fc1 sc0 ls0 ws0">Кронштейн</div>
			<div class="t m2c xa5 h2 y14a ffa fs0 fc1 sc0 ls0 ws0">привода</div>
			<div class="t m54 xa8 h2 y14f ffa fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m67 xde h2 y150 ffa fs0 fc1 sc0 ls0 ws0">Рейка зубчата</div>
			<div class="t m3b xdf h23 y151 ffa fs16 fc1 sc0 ls0 ws0">AB</div>
			<div class="t m68 xe0 h23 y152 ffa fs16 fc1 sc0 ls0 ws0">МЕСТНЫЙ Z1</div>
			<div class="t m4e xbb h23 y153 ffa fs16 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 5</div>
			<div class="t m54 xe1 h2 y154 ffa fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m69 xe2 h2 y155 ffa fs0 fc1 sc0 ls0 ws0">Кінцевик</div>
			<div class="t m6a xe3 h2 y156 ffa fs0 fc1 sc0 ls0 ws0">магнітний_закрито</div>
			<div class="t m6b x2a h23 y157 ffa fs16 fc1 sc0 ls0 ws0">МЕСТНЫЙ AB</div>
			<div class="t m4e xe4 h23 y158 ffa fs16 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 3</div>
			<div class="t m54 xe5 h2 y159 ffa fs0 fc1 sc0 ls0 ws0">Привід</div>
			<div class="t m6c xe6 h2 y15a ffa fs0 fc1 sc0 ls0 ws0">Кінцевик магнітний</div>
			<div class="t m6d xe7 h2 y15b ffa fs0 fc1 sc0 ls0 ws0">(положення-закрито)</div>
			<div class="t m6e xe8 h2 y15c ffa fs0 fc1 sc0 ls0 ws0">Рейка</div>
			<div class="t m6f xe9 h2 y15d ffa fs0 fc1 sc0 ls0 ws0">зубчата</div>
			<div class="t m70 xea h2 y15e ffa fs0 fc1 sc0 ls0 ws0">Шестерня</div>
			<div class="t m71 xeb h2 y15f ffa fs0 fc1 sc0 ls0 ws0">Клепальна гайка</div>
			<div class="t m72 xec h2 y160 ffa fs0 fc1 sc0 ls0 ws0">(кріпленя зубчатої рейки)</div>
			<div class="t m2a xed h2 y161 ffa fs0 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t mc x61 h2 y162 ffa fs0 fc1 sc0 ls0 ws0">Ролік</div>
			<div class="t m1 x60 h2 y163 ffa fs0 fc1 sc0 ls0 ws0">опорний</div>
			<div class="t m34 xed h2 y164 ffa fs0 fc1 sc0 ls0 ws0">задній</div>
			<div class="t m4f xcd h2 y164 ffa fs0 fc1 sc0 ls0 ws0">Кронштейн привода</div>
			<div class="t m73 xee h23 y165 ffa fs16 fc1 sc0 ls0 ws0">AE</div>
			<div class="t m73 xef h23 y166 ffa fs16 fc1 sc0 ls0 ws0">AF</div>
			<div class="t m74 xf0 h23 y167 ffa fs16 fc1 sc0 ls0 ws0">СЕЧЕНИЕ AD-AD</div>
			<div class="t m4e xf1 h23 y168 ffa fs16 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 8</div>
			<div class="t m23 xf2 h2 y169 ffa fs0 fc0 sc0 ls0 ws0">20</div>
			<div class="t m26 xf3 h2 y16a ffa fs0 fc0 sc0 ls0 ws0">40</div>
			<div class="t m75 x66 h23 y16b ffa fs16 fc1 sc0 ls0 ws0">МЕСТНЫЙ AE</div>
			<div class="t m60 xa5 h23 y16c ffa fs16 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 1.5</div>
			<div class="t m69 xf4 h2 y16d ffa fs0 fc1 sc0 ls0 ws0">Кінцевик</div>
			<div class="t m9 xd3 h2 y16e ffa fs0 fc1 sc0 ls0 ws0">магнітний</div>
			<div class="t m76 x52 h2 y16f ffa fs0 fc1 sc0 ls0 ws0">відкрито</div>
			<div class="t m67 xf5 h2 y170 ffa fs0 fc1 sc0 ls0 ws0">Рейка зубчата</div>
			<div class="t m67 x54 h2 y171 ffa fs0 fc1 sc0 ls0 ws0">Клепальна гайка</div>
			<div class="t m77 xf6 h2 y172 ffa fs0 fc1 sc0 ls0 ws0">кріпленя рейки зубчатої</div>
			<div class="t m75 xf7 h23 y173 ffa fs16 fc1 sc0 ls0 ws0">МЕСТНЫЙ AF</div>
			<div class="t m4e x8f h23 y174 ffa fs16 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 2</div>
			<div class="t m78 xe2 h2 y175 ffa fs0 fc1 sc0 ls0 ws0">Кінцевий ролік</div>
			<div class="t m28 x7a h2 y176 ffa fs0 fc1 sc0 ls0 ws0">Профіль</div>
			<div class="t m79 xf8 h2 y177 ffa fs0 fc1 sc0 ls0 ws0">Прижимна</div>
			<div class="t m1b xa7 h2 y178 ffa fs0 fc1 sc0 ls0 ws0">планка</div>
			<div class="t m2a xf9 h2 y179 ffa fs0 fc1 sc0 ls0 ws0">Стулка воріт</div>
			<div class="t m7a xfa h23 y17a ffa fs16 fc1 sc0 ls0 ws0">Q <span class="_ _b"> </span> Q</div>
			<div class="t m7a xfb h23 y17b ffa fs16 fc1 sc0 ls0 ws0">F <span class="_ _c"> </span> F</div>
			<div class="t m68 xfc h23 y17c ffa fs16 fc1 sc0 ls0 ws0">СЕЧЕНИЕQ-Q</div>
			<div class="t m4e xf2 h23 y17d ffa fs16 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m33 xfd h2 y17e ffa fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m53 x9a h2 y17f ffa fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m50 xfe h2 y180 ffa fs0 fc1 sc0 ls0 ws0">Уловлювач верхній</div>
			<div class="t m62 xff h2 y181 ffa fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m63 x100 h2 y182 ffa fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m7b x101 h3 y183 ffa fs1 fc1 sc0 ls0 ws0">Закладна</div>
			<div class="t m5e x101 h3 y184 ffa fs1 fc1 sc0 ls0 ws0">нащільника</div>
			<div class="t m5d xc0 h23 y185 ffa fs16 fc1 sc0 ls0 ws0">СЕЧЕНИЕ F-F</div>
			<div class="t m4e x102 h23 y186 ffa fs16 fc1 sc0 ls0 ws0">МАСШТАБ 1 : 7</div>
			<div class="t m62 x103 h2 y187 ffa fs0 fc1 sc0 ls0 ws0">Стулка</div>
			<div class="t m63 x104 h2 y188 ffa fs0 fc1 sc0 ls0 ws0">воріт</div>
			<div class="t m32 x105 h2 y189 ffa fs0 fc1 sc0 ls0 ws0">Уловлювач нижній</div>
			<div class="t m33 x106 h2 y18a ffa fs0 fc1 sc0 ls0 ws0">Нащільник</div>
			<div class="t m53 x69 h2 y18b ffa fs0 fc1 sc0 ls0 ws0">передній</div>
			<div class="t m37 x4 h3 y18c ffa fs1 fc0 sc0 ls0 ws0">Лист_6</div>
		</div>
		<div class="pi" data-data="{&quot;ctm&quot;:[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}"></div>
	</div>
  <?php endif; ?>
</div>

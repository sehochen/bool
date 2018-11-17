<?php
$menu = include 'nav.inc.php';
?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>蓝色电子科技</title>
<link href="style/css/kj1.css" rel="stylesheet" type="text/css" />
<link href="style/css/all.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="style/js/jq.js"></script>
<script type="text/javascript" src="style/js/kj1.js"></script>
<script type="text/javascript" src="style/js/jQuery.blockUI.js"></script>
<script type="text/javascript" src="style/js/jquery.SuperSlide.js"></script>

</head>
<body>
<div class="w950 c">
  <div class="w l">
      <div class="logo l">
          <a href="index.php"><img src="style/images/kj1/logo.jpg"></a>
        </div>
        <div class="nav r">
          <ul class="w l lili lile">

<?php foreach ($menu as $k => $v): ?> 
              <li>
                <a href="<?php echo $v['url']; ?>" class=""> <?php echo $v['name']; ?> </a>
                <label class="qq"><img src="style/images/kj1/hovernav.png"></label>
              </li>
<?php endforeach; ?>

         </div>
  </div>
</div>
<div class="w950 c">
  <div class="ads w l">
      <div id="focusAd" class="tv-slideBox">
          <a class="prev"></a><a class="next"></a>
          <div class="bd">
              <ul>
              <li class="li1">
                <img src="style/images/kj1/banner2.jpg">
              </li>
              <li class="li2">
                <img src="style/images/kj1/banner1.jpg">
              </li>
              <li class="li3">
                <img src="style/images/kj1/banner.jpg">
              </li>
              </ul>
            </div>
            <div class="hd">
              <ul>
              <li class="li1"><span>1</span></li>
              <li class="li2"><span>2</span></li>
              <li class="li3"><span>3</span></li>
              </ul>
            </div>
        </div>
    </div>
</div>

<script language="javascript"> 
  jQuery("#focusAd").slide({ mainCell:".bd ul",effect: "leftLoop",autoPlay:true});
</script>

<!--[if IE 6]>
<script type="text/javascript" src="style/js/DD_belatedPNG.js"></script>
<script>DD_belatedPNG.fix('#focusAd .prev,#focusAd .next');</script>
<![endif]--> 
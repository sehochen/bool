<?php
include 'common/header.php';
include 'vendor/conn.inc.php';

// 产品中心
$product = mysql_query("select * from product");

// 新闻中心
$newsList = mysql_query("select * from news");

// 关于我们
$res = mysql_query("select a_content from aboutus limit 0,1");
$aboutUs = mysql_fetch_assoc($res);

?>

<div class="block10 w l"></div>
<div class="w l content">
<div class="w950 c">
      <div class="w l">
            <div class="l c_l">
              <h3 class="w l f12"><span>公司新闻</span></h3>
                <ul class="w l lili lile">

<!-- 新闻列表 -->
<?php while($row = mysql_fetch_assoc($newsList)): ?>                
                  <li>
                    <a href="newsite.php?id=<?php echo $row['n_id']; ?>"><?php echo mb_substr($row['n_title'],0,20,'utf-8'); ?></a>
                    <label style="float:right;">[<?php echo $row['n_time']; ?>]</label>
                  </li>
<?php endwhile; ?>                  
            <!--      
             <li><em>公司动态</em><a href="">长沙婚纱摄影公司新闻</a><label>[2013/08/12]</label></li>
            -->
                </ul>    
            </div>
            <div class="c_c l">
              <h3 class="w l"><span>产品展示</span></h3>
              <div class="w l cpzs">
                  <div id="focuscp" class="cp-slideBox">
          <a class="prev"></a><a class="next"></a>
          <div class="bd">
              <ul>

<!-- 产品列表 -->
<?php while($row = mysql_fetch_assoc($product)): ?>

              <li class="li<?php echo $row['p_id']; ?>">
                <a href="" class="cptu"><img src="upload/<?php echo $row['p_img']; ?>"></a>
                <h4><a href=""><?php echo $row['p_title']; ?></a></h4>
                <p>
                <?php echo mb_substr($row['p_content'],0,200,'utf-8'); ?>
                </p>
              </li>
<?php endwhile; ?>


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
            
            <script language="javascript"> jQuery("#focuscp").slide({ mainCell:".bd ul",effect: "leftLoop",autoPlay:true});</script>
<!--[if IE 6]>
<script type="text/javascript" src="style/js/DD_belatedPNG.js"></script>
<script>DD_belatedPNG.fix('#focuscp .prev,#focuscp .next');</script>
<![endif]--> 
                  </div>
            </div>
            <div class="c_r l">
              <h3 class="w l"><span>联系方式</span></h3>
                <p class=" l">
                  联系地址：湖南长沙市火车站附近<br>联系电话：0731-8888888<br>邮件地址：1341510526@qq.com<br>来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a>
                </p>
            </div> 
        </div>
  </div>   
</div>


<?php include 'common/footer.php';?>

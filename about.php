<?php
  include 'common/header.php';
  include 'vendor/conn.inc.php';


  // 关于我们
  $res = mysql_query("select a_content from aboutus where a_id=1");
  $about = mysql_fetch_assoc($res);
?>


<div class="block10 w l"></div>
<div class="w l content_in">
<div class="w950 c">
      <div class="w l">
          <div class="ci_l l">
              <div class=" w cil_p l">
                  <ul class="w l lili lile">
                      <li class="focus"><a href="style/">公司新闻</a></li>
                        <li><a href="style/">公司动态</a></li>
                        <li><a href="style/">新闻分类</a></li>
                        <li><a href="style/">行业资讯</a></li>
                  </ul>
                </div>
                <div class="block10 w l"></div>
                <div class=" w cil_p l ">
                  <div class="tel l">
                      <div class="dhs l">
                        <p>
                            <span class="dhhm">0731-8888888</span><br>时间:9:00-18:00<br>联系人:迷失
                            </p>
                      </div>
                        <div class="indz l">
                          联系地址：湖南长沙市火车站附近湖南长沙市火车站附近湖南长沙市火车站附近湖南长沙市火车站附近
                        </div> 
                    </div>
                </div>
          </div>
          <div class="ci_r l">
              <div class="pos w l"><h3 class="l">关于我们</h3><div class="nsm l"><span>About Us</span><span>关于我们</span></div><div class="r f14 wzb"><a href="style/">首页</a> &gt; <a href="style/">关于我们</a></div></div>
                <div class="block10 w l"></div>
                <div class="w l incons newscon">
             <h1 class="w l zjuz">关于我们</h1>
            <div class="wzpcon l c_83">
              <?php echo $about['a_content']; ?>
            </div>
                   
                    
              </div>
                
          </div> 
        </div>
  </div>   
</div>
<div class="block15 w l"></div>

<?php include 'common/footer.php';?>
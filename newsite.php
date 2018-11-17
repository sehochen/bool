<!-- 引入头部 -->
<?php 
  include 'common/header.php';
  include 'vendor/conn.inc.php';

  $id = $_GET['id'];

  // 新闻
  $sql ="select * from news where n_id=".$id; 
  $result = mysql_query($sql);
  $info = mysql_fetch_assoc($result);
?>


<div class="block10 w l"></div>
<div class="w l content_in">
<div class="w950 c">
      <div class="w l">
          <div class="ci_l l">
              <div class=" w cil_p l">
                  <ul class="w l lili lile">
                      <li class="focus"><a href="">公司新闻</a></li>
                        <li><a href="">公司动态</a></li>
                        <li><a href="">新闻分类</a></li>
                        <li><a href="">行业资讯</a></li>
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
              <div class="pos w l"><h3 class="l">新闻列表</h3><div class="nsm l"><span>News List</span><span>分享最新的新闻列表</span></div><div class="r f14 wzb"><a href="">首页</a> &gt; <a href="">新闻列表</a> &gt; <a href="">文章详细</a></div></div>
                <div class="block10 w l"></div>
                <div class="w l incons newscon">
             <h1 class="w l zjuz"><?php echo $info['n_title']; ?></h1>
             <p class="sly w l f12 zjuz"><span>作者：佚名</span><span>来源：来自互联网</span> <span>浏览次数：<label id="hits" class="red">0</label></span>  <span>编辑：免费模板网</span>  </p>
                   
                    <div class="wzpcon l c_83">
                      <?php echo $info['n_content']; ?>
                    </div>
                   
                    
              </div>
                
          </div> 
        </div>
  </div>   
</div>
<div class="block15 w l"></div>


<?php include 'common/footer.php';?>
<?php
  include 'common/header.php';
  include 'vendor/conn.inc.php';


  // 新闻
  $news = mysql_query("select * from news");

  $total=Mysql_num_rows($news); 
  $pagesize=10;    //每页的条数
  $pagenum=ceil($total/$pagesize); //取整数
  $page = isset($_GET['p']) ? $_GET['p'] : 1 ;
  $pagefrom=($page-1)*$pagesize;
  $prev = $page-1 > 0 ? $page-1 : 1;
  $next = $page+1 < $pagenum ? $page+1 : $pagenum;

  $news=mysql_query("select * from news limit $pagefrom,$pagesize");

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
              <div class="pos w l"><h3 class="l">新闻列表</h3><div class="nsm l"><span>News List</span><span>分享最新的新闻列表</span></div><div class="r f14 wzb"><a href="">首页</a> &gt; <a href="">新闻列表</a></div></div>
                <div class="block10 w l"></div>
                <div class="w l incons">
                  <ul class="w l lili lile wzlist">
                    <li class="wzltt w">
                          <span class="ids lan">序号</span>
                            <span class="wzbt lan">文章标题</span>
                            <span class="fbr lan">发布人</span>
                            <span class="fbsj lan">发布时间</span>
                            <span class="djl lan">点击量</span>
                        </li>


<!-- 新闻列表 -->
<?php while($row = mysql_fetch_assoc($news)): ?>
                        <li class="l w hui">
                          <span class="ids"><?php echo $row['n_id']; ?></span>
                            <span class="wzbt"><a href="newsite.php?id=<?php echo $row['n_id']; ?>"><?php echo $row['n_title']; ?></a></span>
                            <span class="fbr">佚名</span>
                            <span class="fbsj"><?php echo $row['n_time']; ?></span>
                            <span class="djl">0</span>
                        </li>
<?php endwhile; ?>

                </ul>
              </div>

               <!-- 分页 -->
              <div class="w l listpage zjuz f12">
               <a href="?p=1"><img src="style/images/kj1/prepage.gif" align="middle" /></a>
               <a href="?p=<?php echo $prev;?>"><img src="style/images/kj1/prepages.gif" align="middle" /></a>

              <!-- 分页 -->
              <?php for ($i=1; $i <= $pagenum; $i++): ?>

               <a href="?p=<?php echo $i;?>"><?php echo $i; ?></a>|

              <?php endfor; ?>   

               <a href="?p=<?php echo $next;?>"><img src="style/images/kj1/nextpage.gif" align="middle" /></a>
               <a href="?p=<?php echo $pagenum;?>"><img src="style/images/kj1/nextpages.gif" align="middle" /></a>
              </div>


          </div> 
        </div>
  </div>   
</div>
<div class="block15 w l"></div>


<?php include 'common/footer.php';?>

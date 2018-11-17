<?php
  include 'common/header.php';
  include 'vendor/conn.inc.php';

  // 新闻
  $product = mysql_query("select * from product");

  $total=Mysql_num_rows($product); 
  $pagesize=10;    //每页的条数
  $pagenum=ceil($total/$pagesize); //取整数
  $page = isset($_GET['p']) ? $_GET['p'] : 1 ;
  $pagefrom=($page-1)*$pagesize;
  $prev = $page-1 > 0 ? $page-1 : 1;
  $next = $page+1 < $pagenum ? $page+1 : $pagenum;

  $product=mysql_query("select * from product limit $pagefrom,$pagesize");

?>


<div class="block10 w l"></div>
<div class="w l content_in">
<div class="w950 c">
      <div class="w l">
          <div class="ci_l l">
              <div class=" w cil_p l">
                  <ul class="w l lili lile">
                      <li class="focus"><a href="">产品列表</a></li>
                        <li><a href="">产品分类</a></li>
                        <li><a href="">产品分类</a></li>
                        <li><a href="">产品分类</a></li>
                        <li><a href="">产品分类</a></li>
                        <li><a href="">产品分类</a></li>
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
              <div class="pos w l"><h3 class="l">产品列表</h3><div class="nsm l"><span>Product List</span><span>分享最新的产品列表</span></div><div class="r f14 wzb"><a href="">首页</a> &gt; <a href="">产品列表</a></div></div>
                <div class="block10 w l"></div>
                <div class="w l incons">
                  <ul class="w l lili lile cplist">

<!-- 产品列表 -->
<?php while($row = mysql_fetch_assoc($product)): ?>
                    <li>
                        <div class="cpimg l">
                            <a href="" target="_blank">
                              <img src="upload/<?php echo $row['p_img']; ?>" width="146" height="146">
                            </a>
                          </div>
                          <div class="cpwz l">
                            <h4 class="w l"><a href="product_show.html"> <?php echo $row['p_title']; ?> </a></h4>
                              <p class="w l f12 lh22">
                                <?php echo $row['p_content']; ?>
                              </p>
                        </div>
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
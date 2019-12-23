<?=$head?>
  <body id="qas">
    <div class="index-page" id="wrapper">
      <header>
        <div class="header-box">
          <div class="logo"> <a href="<?= _Base_Url ?>">五十甲建築團隊</a></div>
          <div class="menu-wrapper">
            <div class="hamburger-menu"></div>
          </div>
          <?=$menu?>
        </div>
      </header>
      <main role="main">
        <div class="main-banner">
          <ul>
          <?php
          if($IndexAd_1){
              foreach($IndexAd_1 as $key => $row) {
                $path = _Base_Url.'/upload/adList/' . $row['fileName'];
                echo '<li><img src="'.$path.'"></li>';
              }
         }
         ?>
          </ul>
        </div>
        <div class="featured-case">
          <div class="in-title"><img class="in-icon" src="<?= _Base_Url ?>/files/img/index/featured-icon.png">
            <h3>精選建案</h3>
            <h2>Featured cases</h2>
          </div>
          <div class="featured-content">
            <ul>
            <?php
              if($IndexAd_3){
                foreach($IndexAd_3 as $row) {
                    $path = _Base_Url.'/upload/adList/' . $row['fileName'];
                    echo '<li><a href="'.$row['links'].'"><img src="'.$path.'"></a></li>';
                }
              }          
            ?>
            </ul>
          </div>
        </div>
        <div class="in-hot-case">
          <div class="in-title"><img class="in-icon" src="<?= _Base_Url ?>/files/img/index/hot-case.png">
            <h3>熱銷建案</h3>
            <h2>HOT case</h2>
          </div>
          <ul>
            <?php
              if($ListData)
                foreach($ListData as $row){ 
            ?>
            <li>
              <a href="<?= _Base_Url ?>/web/Products_i/<?=$row['id']?>">
                <div class="case-list-box">
                  <div class="case-list-img"><img src="<?= _Base_Url ?>/upload/<?=$row['pic']?>"></div>
                  <div class="case-list-title"> 
                    <h3><?=$row['title']?></h3>
                  </div>
                  <div class="case-list-content">
                    <div class="case-list-text"><?=$row['contents']?></div>
                    <div class="case-list-view">VIEW </div>
                  </div>
                </div>
              </a>
            </li>
            <?php
              }
            ?>
          </ul>
        </div>
        <div class="brand-case">
          <div class="in-title"><img class="in-icon" src="<?= _Base_Url ?>/files/img/index/brand-case.png">
            <h3>品牌建案</h3>
            <h2>Brand caseS</h2>
          </div>
          <div class="brand-list-box">
          <?php
            if($IndexAd_4){
                foreach($IndexAd_4 as $key => $row) {
                  $path = _Base_Url.'/upload/adList/' . $row['fileName'];
          ?>
                  <div class="brand-list">
                    <div class="brand-list-img"><img src="<?=$path?>"></div>
                    <div class="brand-list-text"><a href="<?=$row['links']?>">
                        <div class="brand-list-content">
                          <?=$row['contents']?>
                          <div class="btn-brand">了解詳情</div>
                        </div></a></div>
                  </div>
          <?php
                }
            }
          ?>

<!--             <div class="brand-list">
              <div class="brand-list-img"><img src="<?= _Base_Url ?>/files/img/index/835x660_2.jpg"></div>
              <div class="brand-list-text"><a href="#">
                  <div class="brand-list-content">
                    <h2>城峰</h2>
                    <h3>美術館與住宅建築的結合</h3>
                    <div class="brand-contenter">桃園新站特區，『城峰』站在樹海大景第一排，<br>坐看七萬五千坪樹海景觀，當代帝景誰與爭鋒。 <br>建築雙塔式的壯闊尺度，雙校園前後環抱無邊際棟距，<br>天然的極景棟距，視野完全無人可擋，<br>開闊視野穩居桃園豪宅之首。</div>
                    <div class="btn-brand">了解詳情</div>
                  </div></a></div>
            </div>
            <div class="brand-list">
              <div class="brand-list-img"><img src="<?= _Base_Url ?>/files/img/index/835x660_3.jpg"></div>
              <div class="brand-list-text"><a href="#">
                  <div class="brand-list-content">
                    <h2>城峰</h2>
                    <h3>美術館與住宅建築的結合</h3>
                    <div class="brand-contenter">桃園新站特區，『城峰』站在樹海大景第一排，<br>坐看七萬五千坪樹海景觀，當代帝景誰與爭鋒。 <br>建築雙塔式的壯闊尺度，雙校園前後環抱無邊際棟距，<br>天然的極景棟距，視野完全無人可擋，<br>開闊視野穩居桃園豪宅之首。</div>
                    <div class="btn-brand">了解詳情</div>
                  </div></a></div>
            </div> -->
          </div>
        </div>
        <div class="in-history-case">
          <div class="in-title"><img class="in-icon" src="<?= _Base_Url ?>/files/img/index/histort-case.png">
            <h3>歷年建案</h3>
            <h2>history cases</h2>
          </div>
          <div class="in-history-content">
            <ul>
              <li><a href="history-case-detail.html">
                  <div class="in-history-img">
                    <div class="in-history-mark"><img src="<?= _Base_Url ?>/files/img/index/hi-icon.png"></div>
                    <div class="in-history-mark-photo"><img src="<?= _Base_Url ?>/files/img/index/359x407.png"></div>
                  </div>
                  <div class="in-history-title">竹城真鶴</div></a></li>
              <li><a href="history-case-detail.html">
                  <div class="in-history-img">
                    <div class="in-history-mark"><img src="<?= _Base_Url ?>/files/img/index/hi-icon.png"></div>
                    <div class="in-history-mark-photo"><img src="<?= _Base_Url ?>/files/img/index/359x407.png"></div>
                  </div>
                  <div class="in-history-title">竹城真鶴</div></a></li>
              <li><a href="history-case-detail.html">
                  <div class="in-history-img">
                    <div class="in-history-mark"><img src="<?= _Base_Url ?>/files/img/index/hi-icon.png"></div>
                    <div class="in-history-mark-photo"><img src="<?= _Base_Url ?>/files/img/index/359x407.png"></div>
                  </div>
                  <div class="in-history-title">竹城真鶴</div></a></li>
              <li><a href="history-case-detail.html">
                  <div class="in-history-img">
                    <div class="in-history-mark"><img src="<?= _Base_Url ?>/files/img/index/hi-icon.png"></div>
                    <div class="in-history-mark-photo"><img src="<?= _Base_Url ?>/files/img/index/359x407.png"></div>
                  </div>
                  <div class="in-history-title">竹城真鶴</div></a></li>
              <li><a href="history-case-detail.html">
                  <div class="in-history-img">
                    <div class="in-history-mark"><img src="<?= _Base_Url ?>/files/img/index/hi-icon.png"></div>
                    <div class="in-history-mark-photo"><img src="<?= _Base_Url ?>/files/img/index/359x407.png"></div>
                  </div>
                  <div class="in-history-title">竹城真鶴</div></a></li>
              <li><a href="history-case-detail.html">
                  <div class="in-history-img">
                    <div class="in-history-mark"><img src="<?= _Base_Url ?>/files/img/index/hi-icon.png"></div>
                    <div class="in-history-mark-photo"><img src="<?= _Base_Url ?>/files/img/index/359x407.png"></div>
                  </div>
                  <div class="in-history-title">竹城真鶴</div></a></li>
            </ul>
          </div>
        </div>
        <div class="in-about">
          <div class="in-title">
            <h3>關於五十甲</h3>
            <h2>About Us</h2>
          </div>
          <div class="in-about-content">
          <?=$IndexAbout['varA']?>
          </div>
        </div>
        <div class="in-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3615.014946057798!2d121.29871261546324!3d25.03356684446182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34681fce40cd3255%3A0x2e100ae4f84c5883!2zMzM45qGD5ZyS5biC6JiG56u55Y2A57aT5ZyL6LevODk26JmfNg!5e0!3m2!1szh-TW!2stw!4v1575903788317!5m2!1szh-TW!2stw"  frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          <div class="map-content">
            <div class="map-content-box"><img class="map-img" src="<?= _Base_Url ?>/files/img/index/map-icon.png">
              <h3>五十甲建築行銷團隊</h3>
              <div class="con-box">
                <ul>
                  <li class="tel-icon"><a href="tel:03-3566-101">03-3566-101</a></li>
                  <li class="mail-icon"><a href="mailto:service@50c.com.tw" target="_blank">service@50c.com.tw</a></li>
                  <li class="add-icon"><a href="https://goo.gl/maps/irT4mwvzuAhzesEc7" target="_blank">338桃園市蘆竹區經國路896號6樓</a></li>
                </ul>
              </div><a class="btn-contact" href="contact.html">聯絡我們</a>
            </div>
          </div>
        </div>
      </main>
      <?=$footer?>
    </div>
    <script src="<?= _Base_Url ?>/files/js/vendors.js"></script>
    <script src="<?= _Base_Url ?>/files/js/index.js?v=1575905316692"></script>
  </body>
</html>
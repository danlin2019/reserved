<?=$head?>
  <body id="qas">
    <div class="about-page" id="wrapper">
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
        <div class="main-banner"><img src="<?= _Base_Url ?>/files/img/case/2000x670.jpg"></div>
        <div class="path">
          <div class="path-box"><a href="<?= _Base_Url ?>">首頁 </a>關於我們</div>
        </div>
        <?php
            $flag = true;
            if($ArticleData)
                foreach($ArticleData as $row){
                    if($flag==false){
                        $flag=true;
                        $contentStyle = 'about-content-2';
                    }else{
                        $flag=false;
                        $contentStyle = 'about-content-1';
                    }
                    echo '<div class="'.$contentStyle.'">';
                    echo $row['contents'];
                    echo '</div>';
                }
        ?>
        </div>
      </main>
      <?=$footer?>
    </div>
    <script src="files/js/vendors.js"></script>
    <script src="files/js/index.js?v=1575904669209"></script>
  </body>
</html>
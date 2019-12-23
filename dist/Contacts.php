<?=$head?>
  <body>
    <div class="contact-page" id="wrapper">
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
        <div class="main-banner"><img src="<?= _Base_Url ?>/files/img/contact/2000x670.jpg"></div>
        <div class="path">
          <div class="path-box"><a href="<?= _Base_Url ?>">首頁 </a>聯絡我們</div>
        </div>
        <div class="main-content">
          <div class="contact-box">
            <div class="form-box">
              <h2>留下您的意見</h2>
              <form id="sendForm" method="post" class="form">
                <h3>您的姓名（需填寫）</h3>
                <input type="text" class="sendInput" id="name">
                <h3>您的電子郵件信箱（需填寫）</h3>
                <input type="email" class="sendInput" id="email">
                <h3>您的連絡電話（可不填）</h3>
                <input type="tel" class="sendInput" id="phone">
                <h3>主旨</h3>
                <input type="text" class="sendInput" id="title">
                <h3>您的信件內容</h3>
                <textarea class="sendInput" id="contents"></textarea>
              </form>
              <button class="btn-send" id="sendBtn">傳送</button>
            </div>
            <div class="con-box">
              <h2>聯繫我們</h2>
              <p>我們相當重視客戶的需求，如有任何問題想詢問我們，歡迎隨時與我們聯繫。</p>
              <ul>
                <li class="tel-icon"><a href="tel:03-3566-101">03-3566-101</a></li>
                <li class="mail-icon"><a href="mailto:service@50c.com.tw" target="_blank">service@50c.com.tw</a></li>
                <li class="add-icon"><a href="https://goo.gl/maps/irT4mwvzuAhzesEc7" target="_blank">338桃園市蘆竹區經國路896號6樓</a></li>
              </ul>
            </div>
          </div>
        </div>
      </main>
      <div class="map-box"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3615.014946057798!2d121.29871261546324!3d25.03356684446182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34681fce40cd3255%3A0x2e100ae4f84c5883!2zMzM45qGD5ZyS5biC6JiG56u55Y2A57aT5ZyL6LevODk26JmfNg!5e0!3m2!1szh-TW!2stw!4v1575903788317!5m2!1szh-TW!2stw"  frameborder="0" style="border:0;" allowfullscreen=""></iframe>  </div>
      <?=$footer?>
    </div>
    <script src="files/js/vendors.js"></script>
    <script src="files/js/index.js?v=1575905308806"></script>
  </body>
</html>
<script>
$(document).ready(function(){
	$('#sendBtn').click(function(event){
		showTips('資料處理中，請稍候！');
		
		var haveError = false;
		var sendData = {};
		$('.sendInput').each(function(){
			if($(this).val() != ''){
				var inputID = $(this).attr('id');
				if(inputID == 'email'){
					var filter = /^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,10}){1,2})$/;
					if(filter.test($(this).val())){
						sendData[inputID] = $(this).val();
					}else{
						haveError = 'Email格式錯誤！';
						return false;
					}
				}else{
					sendData[inputID] = $(this).val();
				}
			}else{
				haveError = '所有欄位皆為必填！';
				return false;
			}
		});
		
		if(haveError != false){
			showTips(haveError, true);
		}else{
			sendData['type'] = 'contact';
			
			$.ajax({
				url: "<?= _Base_Url ?>/web/sendMessage",
				data: sendData,
				type:"POST",
				dataType:'text',
				success: function(msg){
					// alert(msg);
					// if(msg == 'OK'){
						$('#sendForm')[0].reset();
						showTips('發送成功！感謝您的留言！', function() {
							location.reload();
						});
					// }else{
					// 	showTips(msg, true);
					// }
				}
			});
		}
		
	});
});
</script>
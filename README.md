# 五十甲資料夾結構
- google map api key  用在首頁跟聯絡我們  
  AIzaSyDG32nqAMbYOXTHP6EAbkRHGF3mJd2PyMo

- google map Markers   
https://developers.google.com/maps/documentation/javascript/markers

- 參考  
https://www.oxxostudio.tw/articles/201801/google-maps-3-marker.html  
view-source:http://www.oxxostudio.tw/demo/201801/google-maps-3-marker-demo-05.html


- 地圖JS

```js

      <div id="map"></div>
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDG32nqAMbYOXTHP6EAbkRHGF3mJd2PyMo&callback=initMap"
  type="text/javascript"></script>
      <script>
      var map;

      function initMap() {
        var position = {
          lat: 25.0339031,
          lng: 121.5623212
        };
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: position
        });
        var marker = new google.maps.Marker({
          position: position,
          map: map,
          icon:'http://www.oxxostudio.tw/img/articles/201801/google-maps-3-marker-icon.png'
        });
      }
      </script>
```     



# 五十甲開發結構部屬

## pug

    components
      components/footer.pug
      components/head.pug
      components/header.pug

    page
      index.pug
      aobut.pug
      media.pug
      media-detail.pug
      hot-case.pug
      hot-case-detail.pug
      history-case.pug
      history-case-detail.pug
      contact.pug

    section
      -index
        featured-case.pug
        hot-case.pug
        brand-case.pug
        history-case.pug
        about.pug

## scss

    vendors
      vendors/bootstrap/_functions.scss
      vendors/bootstrap/_variables.scss
      vendors/bootstrap/_mixins.scss
      vendors/bootstrap/_forms.scss
      vendors/bootstrap/_reboot.scss

    Grid mixins
      vendors/bootstrap/_grid.scss
      vendors/bootstrap/utilities/_flex.scss
      vendors/bootstrap/utilities/_align.scss
      vendors/bootstrap/utilities/_borders.scss

    slick
      vendors/slick/_slick.scss
      vendors/slick/_slick-theme.scss

    abstracts
      abstracts/_mixin.scss
      abstracts/_variable.scss

    base
      base/_normalize.min.scss

    components
      components/_buttom.scss
      components/_content_bg.scss

    layout
      layout/_share.scss
      layout/_footer.scss
      layout/_header.scss
      layout/_menu.scss

    pages
      pages/_index.scss
      pages/_aobut.scss
      pages/_media.scss
      pages/_media-detail.scss
      pages/_hot-case.scss
      pages/_hot-case-detail.scss
      pages/_history-case.scss
      pages/_pages/_history-case-detail.scss
      contact 

    section
      - index
        section/index/_featured-case.scss
        section/index/_hot-case.scss
        section/index/_brand-case.scss
        section/index/_history-case.scss
        section/index/_about.scss

## js

    components
      header.js
      menu.js

    pages
      index.js
      aobut.js
      media.js
      media-detail.js
      hot-case.js
      hot-case-detail.js
      history-case.js
      history-case-detail.js
      contact.js

    section
      index
        featured-case.js
        hot-case.js
        brand-case.js
        history-case.js
        about.js

    vendor
      slick.js
  


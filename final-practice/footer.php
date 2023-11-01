
<!-- アクセス **********************************************************--> 
<section id="access"> 
  <div id="access-title-box">
    <h3 id="access-title">
      <img src="<?php echo get_template_directory_uri(); ?>/images/Frame 2122.png">
      <span>お気軽にご来院ください</span>
      <img src="<?php echo get_template_directory_uri(); ?>/images/Frame 2564.png">
    </h3>
  </div>
  <table id="access-table">
    <tr>
      <th id="access-left">
        <h3 class="access-left-info">JR「秋葉原駅」より徒歩1分</h3>
        <p class="access-left-info">
          〒101-0022
          <br>東京都千代田区神田練塀町300番地
          <br>住友不動産秋葉原駅前ビル 5F
        </p>
        <h3 class="access-left-info">tel: 03-1234-5678</h3>
        <table id="access-schedule" class="access-left-info">
          <tr>
            <th>営業時間</th>
            <th>月</th>
            <th>火</th>
            <th>水</th>
            <th>木</th>
            <th>金</th>
            <th>土</th>
            <th>日</th>
          </tr>
          <tr>
            <td class="access-time">9:00〜12:30</td>
            <td>●</td>
            <td>●</td>
            <td>-</td>
            <td>●</td>
            <td>●</td>
            <td>●</td>
            <td>●</td>
          </tr>
          <tr>
            <td class="access-time">9:00〜12:30</td>
            <td>●</td>
            <td>●</td>
            <td>-</td>
            <td>●</td>
            <td>●</td>
            <td>●</td>
            <td>●</td>
          </tr>
        </table>
        <div id="access-link">
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">ご予約・お問合せはこちらから</a> 
        </div>
      </th>
      <th id="access-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.06039488223!2d139.77214334089803!3d35.70013137269525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ea7ba1a054d%3A0x81605e8b12064e47!2z44CSMTAxLTAwMjIg5p2x5Lqs6YO95Y2D5Luj55Sw5Yy656We55Sw57e05aGA55S6MzAw55Wq5Zyw!5e0!3m2!1sja!2sjp!4v1696363755519!5m2!1sja!2sjp" width="510" height="420" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </th>  
      </tr>
    </table>
</section>
</article>

</main>

<footer>
  <div id="footer-nav">
    <img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/Frame 2259.png" alt="logo">
    <nav id="footer-nav-pc">

      <?php wp_nav_menu(); ?>

    </nav>
  </div>
  <p id="footer-bottom">©︎2023 SAMURAI整体院</p>
</footer>

<!-- jQuery設定 -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- slickの読み込み -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

<?php wp_footer(); ?>

</body>
</html>
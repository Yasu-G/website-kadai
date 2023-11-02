<!-- ***************************** -->
<!--
Template Name: ご予約・お問い合わせ (Contact)
-->
<!-- ***************************** -->


<?php get_header();?>

<!-- CONTACT-THANCKS CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-main-conract-thanks.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-unit-home.css">

<?php include ('unit-header-nav.php'); ?>

<main>
  <article>
    
<!--ホーム**********************************************************-->
  <section id="home">
    <div id="home-message" >
      <h1>Contact</h1>
      <h2>ご予約・お問い合わせ</h2>
    </div>

    <div id="top-img-div">
      <div id="back-img"></div>
      <div id="top-img-pct">
      <!-- SP時画像 -->
      <img id="top-img-sp" src="<?php echo get_template_directory_uri(); ?>/images/SP-Reserve.jpg" alt="Reserve-img">
      <!-- PC時画像 -->
      <img id="top-img-pc" src="<?php echo get_template_directory_uri(); ?>/images/Reserve.jpg" alt="Reserve-img">
      </div>
    </div>

    <img id="back-green02" src="<?php echo get_template_directory_uri(); ?>/images/x32_1.png" alt="back-green02">
  </section>

<!--パンくずリスト**********************************************************-->
<?php include ('unit-pan-list.php'); ?>


<!-- 電話でのご予約・お問合せ **********************************************************--> 
  <section id="tel-question">
    <p id="tel-question-title">お電話でのご予約・お問い合わせ</p>
    <p>〒101-0022 東京都千代田区神田練塀町300番地
      <br>住友不動産秋葉原駅前ビル 5F</p>
    <p id="tel">tel:<span id="tel-number"> 03-1234-5678</span></p>
  </section>

<!-- ご予約・お問合せフォーム **********************************************************--> 
  <section id="form-question">
    <p id="form-question-title">ご予約・お問い合わせフォーム</p>
    <p>※ 2営業日以内にご返信いたします。</p>

    <?php echo do_shortcode('[wpforms id="87" title="false"]'); ?>


  </section>

<?php include ('unit-wave-parts.php'); ?>
<?php include ('unit-top.php'); ?>

<?php get_footer();?>

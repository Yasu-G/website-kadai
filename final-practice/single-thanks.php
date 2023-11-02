<!-- ***************************** -->
<!--
Template Name: 確認画面 (Thanks)
-->
<!-- ***************************** -->


<?php get_header();?>

<!-- CONTACT-THANCKS CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-main-thanks.css">
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


<!-- お礼 **********************************************************--> 
  <section id="thanks">
  <div id="thanks-box">
    <h3>お問い合わせ内容を送信しました</h3>
    <p>ありがとうございます。２営業日以内にご返信いたします。</p>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">戻る</=>
  </div>
  </section>

<?php include ('unit-wave-parts.php'); ?>
<?php include ('unit-top.php'); ?>

<?php get_footer();?>

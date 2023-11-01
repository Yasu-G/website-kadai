<!-- ***************************** -->
<!--
Template Name: ホーム (HOME)
-->
<!-- ***************************** -->

<?php get_header();?>

<!-- HOME CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-unit-navi-index.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-sp.css">

<?php include ('unit-header-nav.php'); ?>



<main>
  <article>

<!--ホーム**********************************************************-->
  <section id="home">
    <!-- カーセル：TOP-CarouselGroup1-4、SP-TOP-CarouselGroup1-4 -->
    <div id="top-img-pc" class="carousel">
          <img class="top-img" src="<?php echo get_template_directory_uri(); ?>/images/TOP-Carouselgroup1.jpg" alt="TOP-Carouselgroup">
          <img class="top-img" src="<?php echo get_template_directory_uri(); ?>/images/TOP_Carouselgroup2.jpg" alt="TOP-Carouselgroup">
          <img class="top-img" src="<?php echo get_template_directory_uri(); ?>/images/TOP_Carouselgroup3.jpg" alt="TOP-Carouselgroup">
          <img class="top-img" src="<?php echo get_template_directory_uri(); ?>/images/TOP-Carouselgroup4.jpg" alt="TOP-Carouselgroup">
    </div>
    <!-- スマホ時カーセル画像 -->
    <div id="top-img-sp" class="carousel">
          <img class="top-img" src="<?php echo get_template_directory_uri(); ?>/images/SP-TOP-Carouselgroup1.jpg" alt="TOP-Carouselgroup">
          <img class="top-img" src="<?php echo get_template_directory_uri(); ?>/images/SP-TOP-Carouselgroup2.jpg" alt="TOP-Carouselgroup">
          <img class="top-img" src="<?php echo get_template_directory_uri(); ?>/images/SP-TOP-Carouselgroup3.jpg" alt="TOP-Carouselgroup">
          <img class="top-img" src="<?php echo get_template_directory_uri(); ?>/images/SP-TOP-Carouselgroup4.jpg" alt="TOP-Carouselgroup">
    </div>

    <h1 id="tate-message" >根本的な症状改善を<br>サポートします</h1>
    <div id="back-img"></div>
    <img id="back-green01" src="<?php echo get_template_directory_uri(); ?>/images/x31_7.png" alt="back-green01">
    <img id="back-green02" src="<?php echo get_template_directory_uri(); ?>/images/x32_1.png" alt="back-green02">
  </section>

<!--ニュースの設定**********************************************************-->
  <section id="news">
    <div id="news-sec01">
      <span id="news01">News</span>
      <span id="news02">お知らせ</span>
      </div>
    <div id="news-sec02">


    <?php
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $args = array(
        'posts_per_page'   => 1, // 読み込みたい記事数（全件取得時は-1）
        'category'         => '4', // 読み込みたいカテゴリID（複数の場合は '1,2'）
        'orderby'          => 'ID', // 何順で記事を読み込むか（省略時は日付順）
        'order'            => 'ASC', // 昇順(ASC)か降順か(DESC）
        'paged' => $paged
      );
      $posts = get_posts($args);
    ?>


    <?php foreach($posts as $post): ?>
    <?php setup_postdata($post); ?>

    <?php
      $cat = get_the_category();
      $catname = $cat[0]->cat_name;
    ?>
        
        <div>
          <div id="news03">
            <?php echo get_the_date('Y/m/d'); ?>
          </div>
          <div id="news04">
            <?php echo $catname; ?> 
          </div>
        </div>

        <div id="news05">
            <?php echo the_title(); ?>
        </div> 

    <?php endforeach; ?>
    <!-- 使用した投稿データをリセット -->
    <?php wp_reset_postdata(); ?>

    </div>
    <div id="news-link">
      <a href="<?php echo esc_url( home_url( '/information/' ) ); ?>">-> お知らせ一覧へ</a>
    </div>
  </section>

<!-- コンセプト・特徴 **********************************************************-->
  <section id="about">
    <h1 id="about-h1back">Concept</h1>
    <img id="about-bigicon" src="<?php echo get_template_directory_uri(); ?>/images/BGicon_Light.png" alt="BGicon_Light">
      <div id="about-table">

          <div id="about-img" >
            <img class="about-img" src="<?php echo get_template_directory_uri(); ?>/images/Group 2126.png">
          </div>
          <div id="about-left">
          <div>
            <p id="about-title">
              <img src="<?php echo get_template_directory_uri(); ?>/images/BGicon.png" alt="about-title-img">
              <span>Concept<br>特徴</span>
            </p>
            <h2 id="about-message">日々変化するカラダと心を癒すパーソナルトレーナーとして</h2>
            <p id="about-comment" >
              当院では、問診にてお客様の症状や生活スタイル、ご希望を丁寧にお伺いした上で施術方針を立てていきます。<br><br>
              また、根本的に症状を改善するために、お客様ご自身で行えるケアやストレッチもお伝えします。<br><br>
              ご不安な点や疑問点などお気軽にご相談くださいませ。</p>
            <div id="about-link" class="links" >
              <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">-> 当院について</a>
            </div>
          </div> 
        </div>

      </div>
  </section>

<!-- wave 1**********************************************************--> 
<?php include ('unit-wave-parts.php'); ?>

<!-- コース・料金 **********************************************************--> 
  <section id="course">
    <div id="course-background"></div>
    <img class="course-bigicon" src="<?php echo get_template_directory_uri(); ?>/images/BGicon_Green.png" alt="BGicon_Green">
    <h1 id="h1-back">course</h1>
    <h3>
      <img src="<?php echo get_template_directory_uri(); ?>/images/Frame 2122.png">
      <span> コース・料金</span>
      <img src="<?php echo get_template_directory_uri(); ?>/images/Frame 2564.png">
    </h3>
    <h3><br>当院では保険診療、自費診療<br>ともにご対応しております</h3>
    <table id="course-table">
      <tr>
        <td id="course-table-inner">
          <img class="course-img" src="<?php echo get_template_directory_uri(); ?>/images/TOP-insurance1.jpg" alt="保険診療写真">
          <div class="course-list">
            <h3 class="dark-green list-name">保険診療</h3>
            <ul>
              <li>骨折・打撲・捻挫・脱臼</li>
              <li>スポーツ診療</li>
              <li>交通事故</li>
            </ul>
          </div>
        </td>
        <td id="course-table-inner">
          <img class="course-img" src="<?php echo get_template_directory_uri(); ?>/images/TOP-self1.jpg" alt="自賠責診療写真">
          <div class="course-list">
            <h3 class="dark-green list-name">自賠責診療</h3>
            <ul>
              <li>腰痛・肩こり</li>
              <li>冷え性・だるさ</li>
              <li>骨盤・背骨矯正</li>
            </ul>
          </div>
        </td>
      </tr>
    </table>

    <div id="course-link" class="links">
      <a href="<?php echo esc_url( home_url( '/course/' ) ); ?>">-> コース・料金詳細へ</a>
    </div>
  </section>

<!-- お客様の声  **********************************************************-->
  <section id="voice">
    <!-- カーセル-->
    <div id="bottom-img-pc" class="carousel2">
      <img class="bottom-img" src="<?php echo get_template_directory_uri(); ?>/images/Bottom-Carouselgroup1.jpg" alt="Bottom-Carouselgroup">
      <img class="bottom-img" src="<?php echo get_template_directory_uri(); ?>/images/Bottom-Carouselgroup2.jpg" alt="Bottom-Carouselgroup">
      <img class="bottom-img" src="<?php echo get_template_directory_uri(); ?>/images/Bottom-Carouselgroup3.jpg" alt="Bottom-Carouselgroup">
    </div>

    <!-- スマホ時カーセル画像 -->
    <div id="bottom-img-sp" class="carousel2">
      <img class="bottom-img" src="<?php echo get_template_directory_uri(); ?>/images/SP-Bottom-Carouselgroup1.jpg" alt="Bottom-Carouselgroup">
      <img class="bottom-img" src="<?php echo get_template_directory_uri(); ?>/images/SP-Bottom-Carouselgroup2.jpg" alt="Bottom-Carouselgroup">
      <img class="bottom-img" src="<?php echo get_template_directory_uri(); ?>/images/SP-Bottom-Carouselgroup3.jpg" alt="Bottom-Carouselgroup">
    </div>

    <div id="voice-title-box">
      <div id="voice-title">
        <h3>
          <img src="<?php echo get_template_directory_uri(); ?>/images/Frame 2122.png">
          <span>お客様の声</span>
          <img src="<?php echo get_template_directory_uri(); ?>/images/Frame 2564.png">
        </h3>
        <h3><br>痛みの改善に加えて自分で予防<br>もできるようになりました</h3>
      </div>
    </div>
    <table id="voice-table">
      <tr>
        <td class="voice-table-items">
          <img class="voice_img" src="<?php echo get_template_directory_uri(); ?>/images/TOP-user1.jpg" alt="S・K様写真">
          <h3 class="dark-green">S・K様 30代女性</h3>
          <p>1ヶ月で腰の痛みが軽減しました。
            自分で自宅でできるケアも教えていただき、お任せしてよかったです。</p>
        </td>
        <td class="voice-table-items">
        <img class="voice_img" src="<?php echo get_template_directory_uri(); ?>/images/TOP-user2.jpg" alt="T・M様写真">
          <h3 class="dark-green">T・M様 40代男性</h3>
          <p>マラソンで右膝が痛むので、施術を受けています。
              なぜ痛みが生じるのかを身体の仕組みから教えていただき、
              普段の練習メニューも工夫できています。</p>
        </td>
        <td class="voice-table-items">
          <img class="voice_img" src="<?php echo get_template_directory_uri(); ?>/images/TOP-user3.jpg" alt="S・T様写真">
          <h3 class="dark-green"> S・T様 60代女性</h3>
          <p>転倒して足を骨折したのをきっかけに、
            痛みの軽減と筋肉の衰えを防ぐための方針を立てていただいています。
            今は毎日元気に近所を散歩できています。</p>
        </td>
      </tr>
    </table>
    <div id="voice-link" class="links">
      <a href="<?php echo esc_url( home_url( '/voice/' ) ); ?>">-> お客様の声一覧へ </a> 
    </div>


  </section>

<?php include ('unit-wave-parts.php'); ?>
<?php include ('unit-top.php'); ?>

<?php get_footer();?>


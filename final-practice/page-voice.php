
<!-- ***************************** -->
<!--
Template Name: お客様の声 (voice)
-->
<!-- ***************************** -->

<?php get_header();?>

<!-- VOICE CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-main-voice.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-unit-home.css">

<?php include ('unit-header-nav.php'); ?>

<main>
  <article>
    
<!--ホーム**********************************************************-->
  <section id="home">
    <div id="home-message" >
      <h1>voice</h1>
      <h2>お客様の声</h2>
    </div>

    <div id="top-img-div">
      <div id="back-img"></div>
      <picture id="top-img-pct">
      <!-- SP時画像 -->
      <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/SP_Voice1.jpg" alt="Voice-img">
      <!-- PC時画像 -->
      <img src="<?php echo get_template_directory_uri(); ?>/images/Voice1.jpg" alt="Voice-img">
      </picture>
    </div>

    <img id="back-green02" src="<?php echo get_template_directory_uri(); ?>/images/x32_1.png" alt="back-green02">
  </section>

<!--パンくずリスト**********************************************************-->
<?php include ('unit-pan-list.php'); ?>


<!-- お客様の声一覧 **********************************************************--> 
  <section id="voice-list">

     <!-- ********************************************************** -->
     <div class="pagination">
          <div class="list-box">
              <ul>
              <?php
              $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
              $the_query = new WP_Query( array(
                  'post_status'    => 'publish',
                  'post_type'      => 'post', // ページの種類（例、page、post、カスタム投稿タイプ）
                  'paged'          => $paged,
                  'category_name'  => 'voice', // 読み込みたいカテゴリID（複数の場合は '1,2'）
                  'posts_per_page' => 2, // 表示件数
                  'orderby'          => 'ID', // 何順で記事を読み込むか（省略時は日付順）
                  'order'            => 'ASC', // 昇順(ASC)か降順か(DESC）
              ) );

              if ($the_query->have_posts()) :
                  while ($the_query->have_posts()) : $the_query->the_post();
                  ?>

                  <!-- ここにループさせるコンテンツを入れます-->

                  <!-- voice -->
                  <div class="voice-item">
                    <div class="voice-img">
                      <?php the_post_thumbnail(); ?> 
                    </div>
                    <div class="voice-comment">
                      <h3 class="dark-green"><?php echo the_title(); ?> </h3>
                      <p> <?php the_content(); ?></p>
                    </div>
                  </div>
                  
                  <?php
                  endwhile;
              else:
                  echo '<div><p>ありません。</p></div>';
              endif;
              ?>
              </ul>
          </div>
          <?php wp_pagenavi(array('query' => $the_query)); ?>
      </div>

      <!-- ********************************************************** -->


  </section>


<?php include ('unit-wave-parts.php'); ?>
<?php include ('unit-top.php'); ?>

<?php get_footer();?>

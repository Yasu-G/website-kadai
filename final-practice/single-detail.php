<!-- ***************************** -->
<!--
Template Name: お知らせ詳細 (Details)
Template Post Type: post
-->
<!-- ***************************** -->

<?php get_header();?>

<!-- DETAILS CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-main-details.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-unit-home.css">

<?php include ('unit-header-nav.php'); ?>

<main>
  <article>
    
<!--ホーム**********************************************************-->
  <section id="home">
    <div id="home-message" >
      <h1>Information</h1>
      <h2>お知らせ</h2>
    </div>

    <div id="top-img-div">
      <div id="back-img"></div>
      <div id="top-img-pct">
      <!-- SP時画像 -->
      <img id="top-img-sp" src="<?php echo get_template_directory_uri(); ?>/images/SP-News.jpg" alt="News-img">
      <!-- PC時画像 -->
      <img id="top-img-pc" src="<?php echo get_template_directory_uri(); ?>/images/News.jpg" alt="News-img">
      </div>
    </div>
    
    <img id="back-green02" src="<?php echo get_template_directory_uri(); ?>/images/x32_1.png" alt="back-green02">
  </section>

<!--パンくずリスト**********************************************************-->

  <?php include ('unit-pan-list.php'); ?>

<!-- 投稿 **********************************************************--> 
  <section id="details-list">
    <div id="details-frame">

      <div id="detail-left">

        <?php if(have_posts()) :?>
          <?php while (have_posts()) : the_post() ; ?>

        <?php
          $cat = get_the_category();
          $catname = $cat[0]->cat_name;
        ?>

        <div id="category-title">
          <h3><?php echo the_title(); ?></h3>
        </div>
        
        <div id="category-box">
          <div id="detail-date">
            <?php echo get_the_date(); ?>
          </div>
          <div id="detail-category">
            <?php echo $catname; ?> 
          </div>
        </div>

        <div id="detail-thumbnail">
          <?php the_post_thumbnail(); ?> 
        </div>

        <div id="detail-content">
          <?php the_content(); ?>
        </div>

          <?php endwhile; ?>
        <?php endif; ?>

        <!-- ページネーション **********************************************************--> 
        <div class="detail-pagination">
          <div>
            <div class="before-info">
              <?php previous_post_link('< %link', '前の記事へ'); ?>
            </div>
            <div class="to-info">
              <a href="<?php echo esc_url( home_url( '/information/' ) ); ?>">お知らせ一覧</a>
            </div>
            <div class="next-info">
              <?php next_post_link('%link >', '次の記事へ'); ?>
            </div>
          </div>
        </div>
      </div>

      <div id="detail-side">
        <!-- サイドばー -->
        <?php get_sidebar(); ?>
      </div>

    </div>
  </section>




<?php include ('unit-wave-parts.php'); ?>
<?php include ('unit-top.php'); ?>

<?php get_footer();?>

<!-- ***************************** -->
<!--
Template Name: お知らせ (information)
-->
<!-- ***************************** -->

<?php get_header();?>

<!-- INFORMATION CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-main-information.css">
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
      <picture id="top-img-pct">
      <!-- SP時画像 -->
      <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/SP-News.jpg" alt="News-img">
      <!-- PC時画像 -->
      <img src="<?php echo get_template_directory_uri(); ?>/images/News.jpg" alt="News-img">
      </picture>
    </div>
    
    <img id="back-green02" src="<?php echo get_template_directory_uri(); ?>/images/x32_1.png" alt="back-green02">
  </section>

<!--パンくずリスト**********************************************************-->

  <?php include ('unit-pan-list.php'); ?>

<!-- 投稿一覧 **********************************************************--> 
  <section id="information-list">
    <div id="information-frame">
      <!-- 左側 -->
      <div id="posting-items">

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
                  'category_name'  => 'information', // 読み込みたいカテゴリID（複数の場合は '1,2'）
                  'posts_per_page' => 2, // 表示件数
                  'orderby'          => 'ID', // 何順で記事を読み込むか（省略時は日付順）
                  'order'            => 'ASC', // 昇順(ASC)か降順か(DESC）
              ) );

              if ($the_query->have_posts()) :
                  while ($the_query->have_posts()) : $the_query->the_post();
                  ?>

                  <!-- ここにループさせるコンテンツを入れます-->

                  <?php
                    $cat = get_the_category();
                    $catname = $cat[0]->cat_name;
                  ?>

                  <div class="posting-item">
                    <div class="posting-img">
                      <?php the_post_thumbnail(); ?> 
                    </div>

                    <div id="posting-right">
                      <p class="posting-title">
                        <a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a>
                      </p>
                      <p class="posting-date">
                        <?php echo get_the_date(); ?>
                        <span class="category-name">
                          <?php echo $catname; ?> 
                        </span>
                      </p>
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

      </div>
      <!-- サイドばー -->
      <?php get_sidebar(); ?>

    </div>
  </section>


<?php include ('unit-wave-parts.php'); ?>
<?php include ('unit-top.php'); ?>

<?php get_footer();?>

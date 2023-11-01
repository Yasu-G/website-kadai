<!--パンくずリスト**********************************************************-->
<section id="pan-list">
    <!-- <span>ホーム ＞</span>
    <span id="pan-here">お知らせ</span> -->

    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
    </div>
    
  </section>
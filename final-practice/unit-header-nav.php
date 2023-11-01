
</head>

<body>
  <!--header nav**********************************************************-->
  <header>

    <!-- ロゴ -->
      <img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/Frame 2259.png" alt="logo">
    
    <!-- PC用ナビゲーション -->
      <nav id="nav-pc">

        <?php wp_nav_menu(); ?>

      </nav>
    <!-- スマホ用メニューボタン -->
      <div id="menu-sp" >
        <img src="<?php echo get_template_directory_uri(); ?>/images/Frame 1699.png" alt="ナビゲーションを開く"
            onclick="document.getElementById('nav-sp').style.display = 'block'">
      </div>
    <!-- スマホ用ナビゲーション -->

    <nav id="nav-sp">
      <div>
      <img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/Frame 2259.png" alt="logo">
      <img id="close" src="<?php echo get_template_directory_uri(); ?>/images/Frame 1699-2.png" alt="ナビゲーションを閉じる"
            onclick="document.getElementById('nav-sp').style.display = 'none'">
      </div>
      <h3>メニュー</h3>
      
      <?php wp_nav_menu(); ?>

    </nav>
    </header>
    
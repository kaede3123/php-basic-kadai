<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
	<meta content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/logo1.png" />
    <?php wp_title('1', true, 'right'); bloginfo('name'); ?>
<?php wp_head(); ?>
</head>
<body>
    <header>
        <a href="<?php echo home_url(); ?>" id="logo">
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo2.svg" alt="ロゴ">
        </a>

        <nav id="nav-pc">
            <ul>
                <li><a href="<?php echo home_url(); ?>">トップ</a></li>
                <li><a href="<?php echo home_url(); ?>/staff">スタッフ紹介</a></li>
                <li><a href="<?php echo home_url(); ?>/medical">診療内容</a></li>
                <li><a href="<?php echo esc_url(home_url('#access')); ?>">アクセス</a></li>
                <li><a href="<?php echo home_url(); ?>/reservation">予約</a></li>
                <li><a href="<?php echo home_url(); ?>/contact">お問い合わせ</a></li>
                <li><a href="<?php echo home_url(); ?>/blog">ブログ</a></li>
            </ul>   
        </nav>
        <!-- スマホ用メニューボタン -->
       <button id="menu-sp" onclick="document.getElementById('nav-sp').style.display = 'block'">
         <img class="menu-icon" src="<?php echo get_template_directory_uri(); ?>/img/menu.png" alt="ナビゲーションを開く">
       </button>
       <!-- スマホ用ナビゲーション -->
       <div id="nav-sp">
         <button id="close" onclick="document.getElementById('nav-sp').style.display = 'none'">
           <img class="close-icon" src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="ナビゲーションを閉じる">
         </button>
 
         <nav>
           <ul>
             <li>
               <a id="logo-sp" href="index.html" onclick="document.getElementById('nav-sp').style.display = 'none'"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo2.svg" alt="トップページに戻る"></a>
             </li>
             <li><a class="menu" href="<?php echo home_url(); ?>" onclick="document.getElementById('nav-sp').style.display = 'none'">トップ</a></li>
             <li><a class="menu" href="<?php echo home_url(); ?>/staff" onclick="document.getElementById('nav-sp').style.display = 'none'">スタッフ紹介</a></li>
             <li><a class="menu" href="<?php echo home_url(); ?>/medical" onclick="document.getElementById('nav-sp').style.display = 'none'">診療内容</a></li>
             <li><a class="menu" href="<?php echo esc_url(home_url('#access')); ?>" onclick="document.getElementById('nav-sp').style.display = 'none'">アクセス</a></li>
             <li><a class="menu" href="<?php echo home_url(); ?>/reservation" onclick="document.getElementById('nav-sp').style.display = 'none'">予約</a></li>
             <li><a class="menu" href="<?php echo home_url(); ?>/contact" onclick="document.getElementById('nav-sp').style.display = 'none'">お問い合わせ</a></li>
             <li><a class="menu" href="<?php echo home_url(); ?>/blog" onclick="document.getElementById('nav-sp').style.display = 'none'">ブログ</a></li>
           </ul>
         </nav>
       </div>
    </header>
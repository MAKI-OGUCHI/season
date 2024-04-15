   <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Antique+Soft&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Klee+One&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    
    <header>
      <h1><?php bloginfo('name'); ?></h1>
      <p class="tag-line"><?php bloginfo('description'); ?></p>
   </header>

    <nav class="g-nav">
       <ul>
        <li <?php if( is_front_page() ) echo ' class="current"'; ?>><a href="<?php echo esc_url( home_url() ); ?>">トップ</a></li>
        <li <?php if( is_page('spring')) echo ' class="current"'; ?>><a href="<?php echo esc_url( home_url() ); ?>/spring/">日本の春</a></li>
        <li <?php if( is_page('summer')) echo ' class="current"'; ?>><a href="<?php echo esc_url( home_url() ); ?>/summer/">日本の夏</a></li>
        <li <?php if( is_page('fall')) echo ' class="current"'; ?>><a href="<?php echo esc_url( home_url() ); ?>/fall/">日本の秋</a></li>
        <li <?php if( is_page('winter')) echo ' class="current"'; ?>><a href="<?php echo esc_url( home_url() ); ?>/winter/">日本の冬</a></li>
       </ul>
    </nav><!-- g-nav -->
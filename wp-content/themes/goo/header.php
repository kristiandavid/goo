<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php wp_head(); ?>

  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Restaurant",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Brantford",
        "addressRegion": "ON",
        "postalCode": "N3T 0B9",
        "streetAddress": "230 Shellard Ln"
      },
      "name": "Goo's Take Out",
      "openingHours": [
        "Mo-We 11:00-20:00",
        "Th-Fr 11:00-21:00",
        "Sa 12:00-20:00"
      ],
      "priceRange": "$$",
      "telephone": "(519) 752-1111",
      "url": "http://www.goostakeout.com"
    }
  </script>

	<!-- Google Tag Manager -->
	<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-529DGN"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-529DGN');</script>
	<!-- End Google Tag Manager -->
</head>
<body <?php body_class(); ?>>

  <header>
    <div class="header__wrap">
      <div class="header__logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logoNew.png" alt="Goo's Take Out logo" class="header__logo-img">
        </a>
      </div>
      <div class="header__menu">
        <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
      </div>
    </div>
  </header>

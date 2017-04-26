<?php 
global $post;
setup_postdata( $post ); 
?> // this is a workaround on some themes
	<?php wp_head(); ?> // this is where the datalayer goes, always before the GTM script!
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-XXXXXXX');</script> //replace GTM-XXXXXXX with your own code
<!-- End Google Tag Manager -->


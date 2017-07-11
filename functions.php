<?php
// Set our GTM container ID
global $gtm_id = 'GTM-T2FC5S4';
// Output iframe noscript GTM include
function wpc_include_gtm_body() {
  echo '<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=' . $gtm_id . '"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->';
}
// Output script GTM include
function wpc_include_gtm_head() {
  echo "<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','" . $gtm_id . "');</script>
<!-- End Google Tag Manager -->";
}
// Enqueue GTM header include
add_action('wp_head', 'wpc_include_gtm_head');

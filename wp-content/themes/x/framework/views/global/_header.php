<?php

// =============================================================================
// VIEWS/GLOBAL/_HEADER.PHP
// -----------------------------------------------------------------------------
// Declares the DOCTYPE for the site and includes the <head>.
// =============================================================================

?>

<!DOCTYPE html>
<!--[if IE 9]><html class="no-js ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->

<head>
  <?php wp_head(); ?>
  <meta name="description" content="This website provides information to members of the plaintiff class in the lawsuit Holzheid v. Comptroller of the Treasury of Maryland. The Holzheid lawsuit challenges the interest rate being applied to certain income tax refunds due to Maryland taxpayers as a result of the Supreme Court’s decision in Comptroller of the Treasury of Maryland v. Wynne, __ U.S. __, 135 S.Ct. 1787 (2015)." />
  <meta name="keyword" content="Holzheid, maryland class action"/>
</head>

<body <?php body_class(); ?>>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-73318503-1', 'auto');
  ga('send', 'pageview');

</script>

  <?php do_action( 'x_before_site_begin' ); ?>

  <div id="top" class="site">

  <?php do_action( 'x_after_site_begin' ); ?>
<?php

// =============================================================================
// TEMPLATE NAME: Blank - No Container | No Header, Footer
// -----------------------------------------------------------------------------
// A blank page for creating unique layouts.
//
// Content is output based on which Stack has been selected in the Customizer.
// To view and/or edit the markup of your Stack's index, first go to "views"
// inside the "framework" subdirectory. Once inside, find your Stack's folder
// and look for a file called "template-blank-8.php," where you'll be able to
// find the appropriate output.
// =============================================================================

?>

<?php //x_get_view( x_get_stack(), 'template', 'blank-8' ); ?>

<?php
  $filename = "submit_info.csv";
  header("Content-type:text/csv");
  header("Content-Disposition:attachment;filename=".$filename);
  header('Cache-Control:must-revalidate,post-check=0,pre-check=0');
  header('Expires:0');
  header('Pragma:public');
  echo $data;
?>
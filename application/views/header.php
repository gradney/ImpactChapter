<!doctype html>
  <html lang="en-US">
    <head>
      <meta charset="utf-16">
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <title><?php if(isset($title)) echo "Impact | ".$title; else echo "Impact | Welcome"; ?></title>
      <link rel="icon" type="image/ico" href="<?php echo base_url('img/favicon.ico');?>"/>
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
      <!--link rel="stylesheet" href="http://getbootstrap.com.vn/examples/equal-height-columns/equal-height-columns.css" /-->
      <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"/>
      <link rel="stylesheet" href="<?php echo base_url();?>css/style.css"/>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora"/>
      <?php /*<!--[if IE 8]>...some HTML here...<![endif]-->*/ ?>
      <?php /* Why is CSS outside of the Views folder? See 
        http://stackoverflow.com/questions/19820314/codeigniter-assets-folder-best-practice */
      ?>
    </head>
    <body>
    <div id="wrapper">

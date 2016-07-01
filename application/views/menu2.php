<!--Text over Image: Works, but Image doesn't resize based on browser size-->
<div id="" class="container-fluid text-center" style="padding:0px;">
  <div class="row" style="padding:0px;">
    <div class="col-xs-12" style="padding:0px;">
      <div id="bible-study" style="background-image: url(<?php echo base_url().'img/20151220_DeepStudy.jpg';?>);border: 2px solid black;">
        <div id="textbox-on-image" style="margin:30px;background-color:#fff;border:1px solid blue;opacity:0.6;">
          <p style="margin:5%;font-weight:bold;color:#000">This is where my text will go on top of an image.</p>
        </div>
      </div>
    </div>
  </div>
</div>

  <?php /*Testing - using Background Image in a Jumbotron*/ ?>
  <div id="" class="jumbotron" style="background-image: url(<?php echo base_url().'img/20151220_DeepStudy.jpg';?>);background-size:cover;">
  </div>


<?php/*

<div id="banner" class="container-fluid" style="background-color:yellow">
  <div class="row row-eq-height" style="margin-top:1em; margin-bottom:1em; border:2px dashed red">
    <div class="col-md-2" style="padding:0px 10px 0px 0px; border: 1px solid blue">
      <a class="national-logo" href="http://www.impactmovement.org">
        <img id="impact-chapter-logo" src="<?php echo base_url().'img/impact_howard_logo.png';?>"></img>
      </a>
    </div>
    <div class="col-md-7" style="text-align:center;padding: 5px; border: 1px solid blue">
      <ul class="nav navbar-nav" style="width:100%;position:absolute;top:40%;left:10%;font-size:1.75em;">
          <li id="mnu-chapter" class="mnu-option">
            <a href="#" data-toggle="modal" data-target="#modal-in-progress"><i class="fa fa-home"></i></a>
          </li>
          <li class="menu-break" style=""><span style="font-family:'Courier New', monospace">|<span></li>
          <li id="mnu-about" class="mnu-option">
            <a href="#" data-toggle="modal" data-target="#modal-in-progress"><i class="fa fa-users"></i>&nbsp;Meet Us</a>
          </li>
          <li class="menu-break" style=""><span style="font-family:'Courier New', monospace">|<span></li>
          <li id="mnu-connect" class="mnu-option">
            <a href="#" data-toggle="modal" data-target="#modal-in-progress"><i class="fa fa-trophy"></i>&nbsp;Team Up</a>
          </li>
          <li class="menu-break" style=""><span style="font-family:'Courier New', monospace">|<span></li>
          <li id="mnu-services" class="mnu-option dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-heartbeat"></i>&nbsp;Thrive</a>
          </li>
      </ul>
    </div>
    <div class="col-md-3"  style="min-width:250px; padding:2px 20px; border: 1px solid blue;">
      <ul class="nav nav-pills navbar-right">
        <li style="padding:0px 5px; font-size:1.25em; color:gray; font-family:Arial, Helvetica, sans-serif; font-style:italic;">Follow us&nbsp;<i class="fa fa-hand-o-right fa-lg"></i></li>
        <li><a href="https://www.facebook.com/impactbison" style="padding: 0px 5px 0px 5px"><i class="fa fa-facebook-square fa-2x"></i></a></li>
        <!-- Our Facebook group is @ https://www.facebook.com/groups/186878238011489/ -->
        <li><a href="https://twitter.com/impactbison" style="padding: 0px 5px 0px 5px; color: #4099FF"><i class="fa fa-twitter-square fa-2x"></i></a></li>
        <li><a href="mailto:impactbison@gmail.com?Subject=Send%20Me%20Updates" style="padding: 0px 5px 0px 5px; color: #000099"><i class="fa fa-envelope-square fa-2x"></i></a></li>
      </ul>
    </div>
  </div><!--end:row-->
</div><!--end:container-->

<!--nav class="navbar" style="margin-bottom:0px">
      </div>
      <div class="col-md-3 text-center">
        <div id="menu-about" class="menu-option">
          <a href="#" data-toggle="modal" data-target="#modal-in-progress"><i class="fa fa-users"></i>&nbsp;Meet Us</a>
        </div>
      </div>
      <div class="col-md-3 text-center">
        <div id="menu-connect" class="menu-option">
          <a href="#" data-toggle="modal" data-target="#modal-in-progress"><i class="fa fa-trophy"></i>&nbsp;Team Up</a>
        </div>
      </div>


  <div id="navigation-bar" class="container collapse navbar-collapse">
      <ul class="nav navbar-nav" style="margin:auto; float:none; width:70%">
        <li id="menu-chapter" class="menu-option">
          <a href="#" data-toggle="modal" data-target="#modal-in-progress"><i class="fa fa-home"></i><?php/*"fa fa-university" navbar-default*/?>&nbsp;Home</a>
        </li>
        <li class="menu-break" style="padding-top:8px"><span style="font-size:2em; font-family:'Courier New', monospace">|<span></li>
        <li id="menu-about" class="menu-option">
          <a href="#" data-toggle="modal" data-target="#modal-in-progress"><i class="fa fa-users"></i>&nbsp;Meet Us</a>
        </li>
        <li class="menu-break" style="padding-top:8px"><span style="font-size:2em; font-family:'Courier New', monospace">|<span></li>
        <li id="menu-connect" class="menu-option">
          <a href="#" data-toggle="modal" data-target="#modal-in-progress"><i class="fa fa-trophy"></i>&nbsp;Team Up</a>
        </li>
        <li class="menu-break" style="padding-top:8px"><span style="font-size:2em; font-family:'Courier New', monospace">|<span></li>
        <li  id="menu-services" class="menu-option dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-heartbeat"></i>&nbsp;Thrive</a>
          <ul class="dropdown-menu">
            <li><a href="studies">Our Studies</a></li>
            <li><a href="services">Our Services</a></li>
          </ul>
        </li>
      </ul>
  </div>
</nav-->

<div class="container" style="border-top: 1px solid black">
  <nav class="navbar navbar-default" role="navigation">
    <!--Brand and mobile display-->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" style="text-align:center; font-size:1.75em;">
      <ul class="nav navbar-nav" style="display: inline-block;float:none;vertical-align:top">
          <li id="mnu-chapter" class="mnu-option">
            <a href="#" data-toggle="modal" data-target="#modal-in-progress"><i class="fa fa-home"></i></a>
          </li>
          <li class="menu-break" style="padding-top:5px"><span style="font-family:'Courier New', monospace">|<span></li>
          <li id="mnu-about" class="mnu-option">
            <a href="#" data-toggle="modal" data-target="#modal-in-progress"><i class="fa fa-users"></i>&nbsp;Meet Us</a>
          </li>
          <li class="menu-break" style="padding-top:5px"><span style="font-family:'Courier New', monospace">|<span></li>
          <li id="mnu-connect" class="mnu-option">
            <a href="#" data-toggle="modal" data-target="#modal-in-progress"><i class="fa fa-trophy"></i>&nbsp;Team Up</a>
          </li>
          <li class="menu-break" style="padding-top:5px"><span style="font-family:'Courier New', monospace">|<span></li>
          <li id="mnu-services" class="mnu-option dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-heartbeat"></i>&nbsp;Thrive</a>
            <ul class="dropdown-menu">
              <li><a href="studies">Our Studies</a></li>
              <li><a href="services">Our Services</a></li>
            </ul>
          </li>
          <li class="menu-break" style="padding-top:5px"><span style="font-family:'Courier New', monospace">|<span></li>
          <li id="mnu-follow" class="mnu-option">
            <ul class="nav nav-pills">
              <li><a href="https://www.facebook.com/impactbison" style="padding: 0px 5px 0px 5px; color: #4099FF"><i class="fa fa-facebook-square fa-2x"></i></a></li>
              <!-- Our Facebook group is @ https://www.facebook.com/groups/186878238011489/ -->
              <li><a href="https://twitter.com/impactbison" style="padding: 0px 5px 0px 5px; color: #4099FF"><i class="fa fa-twitter-square fa-2x"></i></a></li>
              <li><a href="mailto:impactbison@gmail.com?Subject=Send%20Me%20Updates" style="padding: 0px 5px 0px 5px; color: #000099"><i class="fa fa-envelope-square fa-2x"></i></a></li>
            </ul>
          </li>
      </ul>
    </div>
  </nav>
</div>


 
nav style="display: inline-block;float:none;vertical-align:top"

    <div class="col-md-3 pull-right" style="border: 1px solid blue">
      <div class="row">
        <div class="col-xs-12">
            <ul class="nav nav-pills navbar-right">
              <li style="padding:0px 5px; font-size:1.25em; color:gray; font-family:Arial, Helvetica, sans-serif; font-style:italic;">Follow us&nbsp;<i class="fa fa-hand-o-right fa-lg"></i></li>
              <li><a href="https://www.facebook.com/impactbison" style="padding: 0px 5px 0px 5px"><i class="fa fa-facebook-square fa-2x"></i></a></li>
              <!-- Our Facebook group is @ https://www.facebook.com/groups/186878238011489/ -->
              <li><a href="https://twitter.com/impactbison" style="padding: 0px 5px 0px 5px; color: #4099FF"><i class="fa fa-twitter-square fa-2x"></i></a></li>
              <li><a href="mailto:impactbison@gmail.com?Subject=Send%20Me%20Updates" style="padding: 0px 5px 0px 5px; color: #000099"><i class="fa fa-envelope-square fa-2x"></i></a></li>
            </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
            <ul class="nav nav-pills navbar-right">
              <li style="padding:0px 5px; font-size:1.25em; color:gray; font-family:Arial, Helvetica, sans-serif; font-style:italic;">Follow us&nbsp;<i class="fa fa-hand-o-right fa-lg"></i></li>
              <li><a href="https://www.facebook.com/impactbison" style="padding: 0px 5px 0px 5px"><i class="fa fa-facebook-square fa-2x"></i></a></li>
              <!-- Our Facebook group is @ https://www.facebook.com/groups/186878238011489/ -->
              <li><a href="https://twitter.com/impactbison" style="padding: 0px 5px 0px 5px; color: #4099FF"><i class="fa fa-twitter-square fa-2x"></i></a></li>
              <li><a href="mailto:impactbison@gmail.com?Subject=Send%20Me%20Updates" style="padding: 0px 5px 0px 5px; color: #000099"><i class="fa fa-envelope-square fa-2x"></i></a></li>
            </ul>
        </div>
      </div>

      <li class="menu-break" style="padding-top:5px"><span style="font-family:'Courier New', monospace">|<span></li>


            <ul class="nav nav-pills navbar-right">
              <li style="padding:0px 5px; font-size:1.25em; color:gray; font-family:Arial, Helvetica, sans-serif; font-style:italic;">Follow us&nbsp;<i class="fa fa-hand-o-right fa-lg"></i></li>
              <li><a href="https://www.facebook.com/impactbison" style="padding: 0px 5px 0px 5px;"><i class="fa fa-facebook-square fa-2x"></i></a></li>
              <!-- Our Facebook group is @ https://www.facebook.com/groups/186878238011489/ -->
              <li><a href="https://twitter.com/impactbison" style="padding: 0px 5px 0px 5px; color: #4099FF"><i class="fa fa-twitter-square fa-2x"></i></a></li>
              <li><a href="mailto:impactbison@gmail.com?Subject=Send%20Me%20Updates" style="padding: 0px 5px 0px 5px; color: #000099"><i class="fa fa-envelope-square fa-2x"></i></a></li>
            </ul>

*/?>
<script>
  var breaking_news = '<div id="breaking-news" class="alert alert-danger alert-dismissible" role="alert" style="margin:10px 20px 0px 20px;text-align:center;"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Ready to Grow!</strong> Join us at <a href="studies" class="alert-link">Bible Study,</a> <a href="studies" class="alert-link">Leadership Development (training),</a> or both. <a href="studies" class="alert-link">Click here for info...</a></div>';
  var path = window.location.pathname;
  var page = path.split("/").pop();
  if (page == 'home' || page == 'index' || page == '')
    document.write(breaking_news);
</script>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a id="national-logo" class="navbar-brand" href="http://www.impactmovement.org" target="_blank" style="height:100px">
        <img id="impact-chapter-logo" src="<?php echo base_url().'img/impact_howard_logo.png';?>" style="max-height:100px"></img>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" style="padding:15px;position:absolute;top:45%;left:20%;font-size:2em;">
        <li id="mnu-chapter" class="mnu-option">
          <a href="home"><i class="fa fa-home"></i></a>
        </li>
        <li class="menu-break" style="font-size:35px"><span style="font-family:'Courier New', monospace">|<span></li>
      <li class="divider"></li>

        <li id="menu-identify" class="mnu-option-dropdown">
          <a href="<?php echo base_url().'about';?>"><i class="fa fa-users"></i>&nbsp;Meet Us</a>
          <div class="mnu-option-dropdown-content">
            <a href="<?php echo base_url().'about';?>">Organization</a>
            <a href="leaders">Team</a>
            <a href="graduates">Graduates</a>
          </div>
        </li>

        <li class="menu-break" style="font-size:35px"><span style="font-family:'Courier New', monospace">|<span></li>
      <li class="nav-divider"></li>
        <li id="menu-connect" class="mnu-option">
          <a href="be-a-leader"><i class="fa fa-trophy"></i>&nbsp;Team Up</a>
        </li>
        <li class="menu-break" style="font-size:35px"><span style="font-family:'Courier New', monospace">|<span></li>

        <?php /* TODO: Create following pages and update links.
              Thrive -> page: grow
              Individual Development Plan -> Reading Plan -> page: bible-reading-plan
        */ ?>
        <li id="menu-grow" class="mnu-option-dropdown">
          <a href="sorry"><i class="fa fa-heartbeat"></i>&nbsp;Thrive</a>
          <div class="mnu-option-dropdown-content">
            <a href="http://impactmovement.org/national-conference/" target="_blank">Conference '16</a>
            <a href="sorry" alt="Individual Development Plan">Ind'l Dev Plan</a> <?php /*leaving as a reminder to update*/ ?>
            <?php /*<a href="bible-practices">Green Resources</a>*/ ?>
            <a href="videos">Videos</a>
          </div>
        </li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right" style="margin-top:20px;">
        <li style="padding:0px 5px; font-size:1.25em; color:gray; font-family:Arial, Helvetica, sans-serif; font-style:italic;">Follow us&nbsp;<i class="fa fa-hand-o-right fa-lg"></i></li>
        <li><a href="https://www.facebook.com/impactbison" target="_blank" style="padding: 0px 5px 0px 5px; color: #3b5999"><i class="fa fa-facebook-square fa-2x"></i></a></li>
        <!-- Our Facebook group is @ https://www.facebook.com/groups/186878238011489/ -->
        <li><a href="https://twitter.com/impactbison" target="_blank" style="padding: 0px 5px 0px 5px; color: #4099FF"><i class="fa fa-twitter-square fa-2x"></i></a></li>
        <!--Need custom URL @ https://www.youtube.com/impactbison-->
        <li><a href="https://www.youtube.com/channel/UCzh0AUtdYAkc_WT7IXO3cEA" target="_blank" style="padding: 0px 5px 0px 5px; color: #cc181e"><i id="youtube-icon" class="fa fa-youtube-square fa-2x"></i></a></li>
        <li><a href="mailto:impactbison@gmail.com?Subject=Send%20Me%20Updates" target="_blank" style="padding: 0px 5px 0px 5px; color: #000099"><i class="fa fa-envelope-square fa-2x"></i></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

  <?php /*separater between menu and page.*/ ?>
  <div id="navbar-border-bottom" class="container-fluid" style="margin-bottom:10px;"></div>

  <!-- Modal-411 -->
  <div class="modal fade" id="modal-411" tabindex="-1" role="dialog" aria-labelledby="modal-411-label">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h1 class="modal-title">The 411 with Impact @ Howard!</h1>
        </div>
        <div class="modal-body">
          <h3>This week, we will be studying together at 7pm in Douglass Hall rm. 238 on the topic of LOVE&hellip;</h3>
          <h3>Come get some "food" and hugs, fam!</h3>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          <!--a href="studies" target="_parent"><button type="button" class="btn btn-default" data-dismiss="modal">Open 'Studies' Page</button></a-->
          <!--button type="button" class="btn btn-primary">Save changes</button-->
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <!-- Modal-In-Progress -->
  <div class="modal fade" id="modal-in-progress" tabindex="-1" role="dialog" aria-labelledby="modal-in-progress-label">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h1 class="modal-title">Coming Soon!</h1>
        </div>
        <div class="modal-body">
          <h3>We are still working on this website and implementing certain webpages. 
            Although it doesn't take long to put up a webpage, we have day jobs and go to school. 
            We welcome any help to rebuild our movement on campus. If you're interested in helping, then please 
            <a href="mailto:impactbison@gmail.com?Subject=Will%20help%20Impact" target="_blank">email us </a>
            (<a href="mailto:impactbison@gmail.com" target="_blank">impactbison@gmail.com</a>). Thanks for understanding, fam.
          </h3>
          <h4>Meanwhile, check out some of <a href="videos">our online videos</a>!
          </h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          <!--a href="studies" target="_parent"><button type="button" class="btn btn-default" data-dismiss="modal">Open 'Studies' Page</button></a-->
          <!--button type="button" class="btn btn-primary">Save changes</button-->
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

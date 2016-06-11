  <div id="banner" class="container">
    <div class="row" style="margin-top:1em; margin-bottom:1em">
      <div class="col-xs-10" style="width:180px">
        <a class="national-logo" href="http://www.impactmovement.org">
          <img id="impact-chapter-logo" src="<?php echo base_url().'img/impact_logo_white.jpg';?>"></img>
        </a>
      </div>
      <div class="col-xs-3 pull-right">
        <ul class="nav nav-pills navbar-right">
          <li style="padding:0px 5px; font-size:1.25em; color:blue; font-family:Arial, Helvetica, sans-serif; font-style:italic;">Follow us&nbsp;<i class="fa fa-hand-o-right fa-lg"></i></li>
          <li><a href="https://www.facebook.com/groups/186878238011489/" style="padding: 0px 5px 0px 5px"><i class="fa fa-facebook-square fa-3x"></i></a></li>
          <li><a href="https://twitter.com/impactbison" style="padding: 0px 5px 0px 5px"><i class="fa fa-twitter-square fa-3x"></i></a></li>
          <li><a href="mailto:impactbison@gmail.com?Subject=Interested%20In%20The%20Chapter" style="padding: 0px 5px 0px 5px"><i class="fa fa-envelope-square fa-3x"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-default">
    <div id="navigation-bar" class="container">
      <div id="im-navigation-bar">
        <ul class="nav navbar-nav">
          <li id="menu-about" class="menu-option">
            <a href="#" data-toggle="modal" data-target="#modal-in-progress">
              <i class="fa fa-users"></i>
              &nbsp;Meet Us
            </a>
          </li>
          <li id="menu-connect" class="menu-option">
            <a href="#" data-toggle="modal" data-target="#modal-in-progress">
              <i id="trophy-icon" class="fa fa-trophy"></i>
              &nbsp;Team Up
            </a>
          </li>
          <li  id="menu-services" class="menu-option dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              <span class="glyphicon glyphicon-heart"></span> Take Action
            </a>
            <ul class="dropdown-menu">
              <li><a href="studies">Our Studies</a></li>
              <!--li><a href="#" data-toggle="modal" data-target="#modal-in-progress">Our Services</a></li-->
            </ul>
          </li>
          <!--li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Sign In</a></li-->
        </ul>
      </div>
    </div>
  </nav>

  <?php /*separater between menu and page.*/ ?>
  <div id="navbar-border-bottom" class="container-fluid"></div>

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

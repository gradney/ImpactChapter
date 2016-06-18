
  <div id="topofsite" class="container-fluid">
    <div class="row" style="margin-top:20px; margin-bottom:20px">
      <div class="col-xs-8">
        <a class="navbar-brand" href="home">
          <img id="impact-chapter-logo" src="<?php echo base_url().'img/impact_logo_white.jpg';?>" height="70" width="155"></img>
        </a>
      </div>
    </div>
  </div>
  <!--/*Navigation Bar*/-->
  <nav class="navbar navbar-default">
    <div id="navigation-bar" class="container-fluid">
      <!--/*Navigation Header : logo or brand, x-small screen menu*/-->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#im-navigation-bar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="im-navigation-bar">
        <!--/*Navigation Menu : Left*/-->
        <!--ul class="nav navbar-nav">
        </ul-->
        <!--/*Navigation Menu : Right*/-->
        <ul class="nav navbar-nav navbar-right">
          <li id="menu-about" class="menu-option"><?php /*This will point to the About page with a lot more insight into our Chapter.*/ ?>
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

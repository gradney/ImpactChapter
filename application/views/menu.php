
  <!--/*Navigation Bar*/-->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!--/*Navigation Header : logo or brand, x-small screen menu*/-->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#im-navigation-bar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span> 
        </button>
        <a class="navbar-brand" href="home">
          <img id="impact-chapter-logo" src="<?php echo base_url().'img/impact_logo_white.jpg';?>" height="35" width="70"></img>
        </a>
      </div>
      <div class="collapse navbar-collapse" id="im-navigation-bar">
        <!--/*Navigation Menu : Left*/-->
        <ul class="nav navbar-nav">
          <!--li><a href="#"><i class="fa fa-home"></i></a></li-->
          <li class="menu-411">
            <a href="#" data-toggle="modal" data-target="#modal-411"><i class="glyphicon glyphicon-exclamation-sign"></i> 411</a>
          </li>
          <li><a href="#"><i class="fa fa-user"></i> Connect</a></li>
          <li>
            <a href="https://www.facebook.com/impactbison" target="_blank" class="social-media-icons">
              <i id="facebook-icon" class="fa fa-facebook-square"></i>
            </a>
          </li>
          <li>
            <a href="https://twitter.com/impactbison" target="_blank" class="social-media-icons">
              <i id="twitter-icon" class="fa fa-twitter-square"></i>
            </a>
          </li>
          <li>
            <a href="https://www.youtube.com/impactbison" target="_blank" class="social-media-icons">
              <i id="youtube-icon" class="fa fa-youtube-square"></i>
            </a>
          </li>
          <li>
            <a href="mailto:impactbison@gmail.com?Subject=Interested%20in%20Impact" target="_blank" class="social-media-icons">
              <i id="email-icon" class="fa fa-envelope-square"></i>
            </a>
          </li>
        </ul>
        <!--/*Navigation Menu : Right*/-->
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-barcode"></span> Identify</a>
            <ul class="dropdown-menu">
              <li><a href="#">Our Purpose</a></li>
              <li><a href="#">Our Mission</a></li>
              <li><a href="#">Our Vision</a></li>
              <li><a href="#">Our Values</a></li> 
            </ul>
          </li>
          <li>
            <a href="#">
              <!--span class="glyphicon glyphicon-star"></span-->
              <i id="trophy-icon" class="fa fa-trophy"></i>
               Team Up
            </a>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              <span class="glyphicon glyphicon-heart"></span> Take Action
            </a>
            <ul class="dropdown-menu">
              <li><a href="studies">Our Studies</a></li>
              <li><a href="#">Our Services</a></li>
            </ul>
          </li>
          <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Sign In</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Modal -->
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

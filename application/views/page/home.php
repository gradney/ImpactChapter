<?php 
/** Excellent!
  * Website Examples: 
  * 1) http://www.desitin.com/
  * 2) http://www.google.org/
  *
  * Video Examples:
  * 1) https://www.youtube.com/watch?v=4U5Eh_xTx0A (AVON Walk promotional)
  *
  * Verses:
  * Food - John 6:25-29
  * Love - John 15:9-17
  */
?>

  <div id="focus" class="container text-center" >
    <div class="row">
      <div class="col-xs-12">
        <div id="focus-jumbotron" class="jumbotron" style="background-color:transparent; padding:0px">
          <p style="text-align:justify; font-size:1.75em; padding: 20px 0px 0px 0px">We focus on the understanding and practice of four basic principles with respect to one's God-given purpose: 
          </p>
          <div class="row" style="font-size:2em; font-weight:bold; margin-bottom:10px">
            <div class="col-md-3">Faith</div>
            <div class="col-md-3">Leadership</div>
            <div class="col-md-3"><a href="https://www.aspiration.com/how-aspiration-works/" target="_blank">Aspiration</a></div>
            <div class="col-md-3">Stewardship</div>
          </div>
          <a target="_blank" href="https://www.ted.com/talks/rick_warren_on_a_life_of_purpose">
            <img id="teaching" class="img-responsive" src="<?php echo base_url().'img/impact-day/20160326_AsaTeaches.jpg';?>" style="margin: auto; border-radius:50px"><img>
          </a>
        </div>
      </div>
    </div>
  </div>





  <?php /*Section: Purposeful Thought - Splash*/ ?>
  <div id="purposeful-thought" class="container-fluid text-center" style="background-color:black">
    <div class="row top-buffer-20">
      <div class="col-xs-12" style="padding-left: 50px">
        <div id="purpose-jumbotron" class="jumbotron">
          <a target="_blank" href="https://www.ted.com/talks/rick_warren_on_a_life_of_purpose">
            <img src="<?php echo base_url().'img/web/purpose-defined.jpg';?>" class="img-responsive"></img><!--wid:625, height:250, max-width="625" height="auto"-->
          </a>
        </div>
      </div>
    </div>
  </div>

  <?php /*Section: Howard University - Purpose*/ ?>    
  <div id="purpose-ministry" class="container">
    <div class="row top-buffer-20" style="padding-bottom: 30px">
      <div class="col-xs-12">
        <h2>Do you know your - <span class="italic">purpose?</span></h2>
        <hr style="border-color: black; height:10px"/>
        <h1 id="purpose-headline">Bottom Line</h1>
        <h2>We are a <em><span class="bold">biblical leadership development</span></em> ministry.</h2>
        <h2>Our <em><span class="bold">purpose</span></em> is to develop the next leaders 
          with an unshakeable integrity and a humble character that loves to serve.</h2>
      </div>
    </div>
  </div>

  <?php /*Section: Howard University - Vision*/ ?>
  <div id="vision" class="container-fluid">
    <div class="row">
      <div class="col-xs-12">
        <h1 id="vision-headline"><span class="underline">Vision</span></h1>
        <h3 id="vision-statement">Our vision is best explained through a collage based on our collective actions.</h3>
        <!--
        - unshakable prayer
        - unity in worship
        - family-oriented community
        - church partnerships with like-mindedness
        - serving neighbors with humility
        - sharing the Gospel with gentleness
        - encouraging each other's hearts
        - strengthening each other's gifts
        - loving each other's spirits
        -->
        <div>
          <!--Replace this image (of various images) with a table rendering each each and allowing users to click on an each to enlarge for actually seeing the photo-->
          <img src="<?php echo base_url().'img/vision/impact_howard_vision.png';?>" class="img-responsive" id="vision-picture"></img><!--height="auto" max-width="600"-->
        </div>
      </div>
    </div>
  </div>

  <?php /*Section: Carousel of Advertisements*/ ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12">
        <div id="caption-for-slides" style="margin: 0 auto;">
          <h1 class="text-center">This is where the carousel image captions will display.</h1>
        </div><!--caption-->
      </div><!--col-->
    </div><!--row-->
    <div class="row">
      <div class="col-xs-12">
          <!-- Carousel -->
          <div id="im-carousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#im-carousel" data-slide-to="0" class="active"></li>
              <li data-target="#im-carousel" data-slide-to="1"></li>
              <li data-target="#im-carousel" data-slide-to="2"></li>
              <li data-target="#im-carousel" data-slide-to="3"></li>
            </ol>
            <!-- Slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="<?php echo base_url().'img/pic/20150221_GilmerCelebrationDC.jpg';?>" alt="Worldwide Leaders"></img>
                <div class="carousel-caption">
                  <h1 class="text-center">Ready to Lead?</h1>
                </div>
              </div>
              <div class="item">
                <div class="carousel-caption" style="top:0;bottom: auto;">
                  <h1  class="text-center" style="color:navy">Join Us @ <a href="http://reset2016.com/" target="_blank">RESET!</a></h1>
                </div>
                <img src="<?php echo base_url().'img/pic/20150611_ResetLeadership.jpg';?>" alt="Reset Prayer"></img>
              </div>
              <div class="item">
                <div class="carousel-caption" style="top:0;bottom: auto;">
                  <h1 class="text-center">Do You Retreat, Reflect, Recharge?</h1>
                </div>
                <img src="<?php echo base_url().'img/pic/20151107_RetreatTogether.jpg';?>" alt="Retreat to Recharge"></img>
              </div>
              <div class="item">
                <div class="carousel-caption" style="top:0;bottom: auto;">
                  <h1 class="text-center">Got Fam?</h1>
                </div>
                <img src="<?php echo base_url().'img/pic/20150810_AlumFun.jpg';?>" alt="Alumni Family"></img>
              </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#im-carousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#im-carousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
      </div><!--col-->
    </div><!--row-->
  </div><!--container-->

  <?php /*Section: Howard University - Pride*/ ?>
  <div class="container" align="center">
    <div class="row top-buffer-20">
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <img src="<?php echo base_url().'img/cross_navy_blue.png';?>" height="120" width="100"></img>
              <h1 class="firebrick">Veritas</h1>
          </div>
          <div class="panel-body">
            <h4>
              <span class="bold">Truth.</span> It is by which our character stands and our words represent.
              This truth is in Jesus Christ 
              <a href="https://www.biblegateway.com/passage/?search=romans+8%3A1-11&version=NIV" target="_blank">
                (i.e. the Spirit of truth) 
              </a>
              and is Jesus Christ
              <a href="https://www.biblegateway.com/passage/?search=john+14%3A1-27&version=NIV" target="_blank">
                (i.e. the Truth)
              </a>. 
              Through this truth, we no longer live as slaves.
            </h4>
          </div>
          <div class="panel-footer">
            <h3 class="point-of-message">- We live free. -</h3>
            <!--a href="#" target="_blank" alt="Biblical verse for being set free in Christ Jesus"-->
          </div>
        </div>
      </div>
      <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <img src="<?php echo base_url().'img/howard_university_logo.jpg';?>" height="120" width="115"></img>
              <h1 class="firebrick">Alma Mater</h1>
            </div>
            <div class="panel-footer">
              <h4>
                <div class="alma-mater" >
                  <div class="alma-mater-stanza" >
                    Reared against the eastern sky<br/>
                    Proudly there on hilltop high,<br/>
                    Far above the lake so blue<br/>
                    Stands old Howard firm and true.<br/>
                  </div>  
                  <div class="alma-mater-stanza" >
                    There she stands for truth and right,<br/>
                    Sending forth her rays of light,<br/>
                    Clad in robes of majesty;<br/>
                    O Howard, we sing of thee
                    <a href="https://www2.howard.edu/about/alma-mater" target="_blank">
                      <button type="button" class="btn btn-muted">&hellip;</button>
                    </a>
                  </div>
                </div>
              </h4>
            </div>
          </div>
      </div>
      <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <img src="<?php echo base_url().'img/gardening-tool-hoe-with-fork.png';?>" height="120" width="100"></img>
              <h1 class="firebrick">Utilitas</h1>
            </div>
            <div class="panel-body">
              <h4>
                <span class="bold">Service.</span>
                <!--It is by which our reputation signifies and our actions exemplify.-->
                <!--Actions speak louder than words while the intent behind the action must be explained through words.-->
                There is none greater than the one through Jesus Christ.
                We are thankful. We act in kindness and with a sense of responsiblity. We work prudently and tirelessly. 
                All out of the overflow of His love.
              </h4>
            </div>
            <div class="panel-footer">
              <h3><div class="point-of-message">- We serve humbly. -</div></h3>
              <!--a href="#" target="_blank" alt="Biblical verse for being set free in Christ Jesus"-->
            </div>
          </div>
      </div>
    </div><!--row-->
  </div><!--container-->


  <?php /*Section: Howard University - Purpose*/ ?>
  <div id="purpose-uniqueness" class="container">
    <div class="row top-buffer-20">
      <div class="col-xs-12">
        <div id="purpose-content" class="well">
          <h2>What makes us different from other campus ministries?</h2>
          <h4 id="purpose-description">We focus on becoming a full expression of Jesus Christ through 
            the unique purpose he’s given to each of us including our identity, culture, history, and direction.
            With this focus, we become the next leaders that the world is waiting for. And then we help the world
            refocus on Him.
          </h4>
          <h4><span class="bold">Gospel</span> - one's showing (practice) of living with Jesus Christ.</h4>
          <h4><span class="bold">History</span> - one's understanding of his/her past and how it contributes to his/her present moment and future impact.</h4>
          <h4><span class="bold">Culture</span> - one's way of life with community.</h4>
          <h4><span class="bold">Identity</span> - one's uniqueness including his/her personality, gifts, talents, and skills.</h4>
          <h4><span class="bold">Direction</span> - one's path into the future and effect on the future of others.</h4>
        </div>
      </div>
    </div>
  </div>

  <?php /*Section: Howard University Pride*/ ?>
  <div class="container" align="center">
    <div class="row top-buffer-20">
      <div class="col-xs-12">

      </div>
    </div><!--row-->
  </div><!--container-->

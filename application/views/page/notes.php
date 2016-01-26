  <!--/*Page Header*/-->
  <div class="container">
    <h1>Random Notes</h1>
    <h3>CSS Transition</h3>
      <p>Cool to go from a Bible page to another page. Even for a photo gallery.</p>
    <h3>CSS Animation</h3>
      <p>This would be cool for having a globe or flying flag.</p>
    <h3>CSS Media</h3>
      <p>For certain display adjustments on specific devices or screen size.</p>
    <h3>HTML5: data-* attribute</h3>
      <p>This attribute is very useful with leveraging data and triggers with JS.</p>
    <h3>File Naming Conventions</h3>
      <p>Learn correct file naming conventions @ https://library.stanford.edu/research/data-management-services/data-best-practices/best-practices-file-naming</p>
  </div>
  <hr/>

  <!--/*Page Content*/-->
  <div class="container"><h1>Containers: No Container, Container-Fluid and Container (only)</h1></div>
  <div>
  	<h2>no container (simple &lt;div&gt; tag)</h2>
  	<p>This is what the html looks like with just the simple DIV tag and no container. As you can see, there is no padding or margin.</p>
  </div>
  <div class="container-fluid">
 	<h2>container-fluid</h2>
 	<p>This is in a container that is fluid. The purpose of this container is to show that content can flow from one side of the browser to the other side.</p>
  </div>
  <div class="container">
 	<h2>container</h2>
 	<p>This is in a container that is NOT fluid. The purpose of this container is to show that content can be padded between the sides of the webpage in the browser. This gives more of a portrait look to the page.</p>
  </div>

  <div><h1>Jumbotron</h1></div>
  <div class="container-fluid">
    <div id="eg-jumbotron" class="jumbotron">
      <h1 id="eg-jumbotron-title">
        <span style="color:#DAA520;">Study </span>
      </h1>
      <a target="_blank" href="<?php echo base_url().'img/20151220_DeepStudy.jpg';?>">
        <img id="eg-jumbotron-poster-image" src="<?php echo base_url().'img/20151220_DeepStudy.jpg';?>" height="350" width="625"></img>
      </a>
      <p id="eg-jumbotron-message">We dig deep into the Word of God, improving our inductive study approach per passage, within context while breaking down each verse to gain a greater understanding of His teachings.
      </p>
    </div>
  </div>

  <div class="container-fluid">
    <h1>Table Responsive w/Striped and Hover - Example</h1>
    <div class="table-responsive">          
      <table class="table table-striped table-hover">
        <thead>
          <tr><th>#</th><th>Month</th><th>Subject Matter</th></tr>
        </thead>
        <tbody>
          <tr><td>1</td><td>January</td><td>Strategic Planning &amp; Proper Preparation</td></tr>
          <tr><td>2</td><td>February</td><td>Love (God's vs. the World's), Maximizing Spring Break</td></tr>
          <tr><td>3</td><td>March</td><td>Financial Freedom</td></tr>
          <tr><td>4</td><td>April</td><td>Styles of Communication, of Leadership</td></tr>
        </tbody>
      </table>
    </div>

    <!--/*Page Header : Extension*/-->
  </div>

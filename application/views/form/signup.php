
  <!--/*Page Content*/-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12">
        <h1>Sign-Up Form</h1>
        <label for="firstname">First Name</label>
        <input type="text" name="firstname" id="firstname" placeholder="Martin"/><br/>
        <label for="lastname">Last Name</label>
        <input type="text" name="lastname" id="lastname" placeholder="Luther"/><br/>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="mluther"/><br />
        <button type="submit" name="register" onClick="javascript:ajax_post();">Sign Up!</button><br/>
        <br/>
        <div id="status"></div>
      </div>
    </div>
  </div>

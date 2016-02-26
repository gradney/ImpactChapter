
  <!--/*Page Content*/-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12">
        <h1>Registration Form</h1>
        <label for="firstname">First Name</label>
        <input type="text" name="firstname" id="firstname" placeholder="Martin" required/><br/>
        <label for="lastname">Last Name</label>
        <input type="text" name="lastname" id="lastname" placeholder="Luther" required/><br/>
        <label for="event">Experience</label>
        <select name="event" required>
          <option value="none"></option>
          <option value="retreat">Fall Retreat</option>
          <option value="institute">Impact Leadership Institute</option>
          <option value="conference">National Conference</option>
          <option value="mission">Summer Mission Actperience</option>
        </select>
        <br/>
        <button type="submit" name="register" onClick="javascript:ajax_post();">Register!</button><br/>
        <br/>
        <div id="status"></div>
      </div>
    </div>
  </div>

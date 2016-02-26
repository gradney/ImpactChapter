
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
<?php
/*
<!-- Modal (Add Organization Admin) -->
<div class="modal fade" id="addOrganizationAdminModal" tabindex="-1" role="dialog" aria-labelledby="addOrgAdminModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header" style="padding-bottom: 0px">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add Organization Admin</h4>
        <p class="text-danger"><small>&ast; Required fields</small></p>
      </div>

      <div class="modal-body">
        <!--Organization Information-->
        <form id="form-add-organization-admin" role="form">
          <!--Organization-->
          <div class="row">
            <fieldset class="col-md-8 form-group has-danger has-feedback">
                <label for="organizationname">Name of Organization&ast;</label>
                <input type="text" class="form-control form-control-danger" name="organizationname" id="organizationname" placeholder="e.g. Courage Services"/>
            </fieldset>
            <div class="col-md-4">
            <fieldset class="form-group form-control-warning">
              <label for="numberofusers">Number of Users</label>
              <input type="number" class="form-control form-control-warning" name="numberofusers" id="numberofusers" placeholder="e.g. 5 (default)"/>
              <div class="input-group-addon" style="border: 0px"><small class="text-muted">incl. Analysts, Admins, etc.</small></div>
            </fieldset>
            </div>
          </div>
          <!--Name-->
          <div class="row">
            <div class="col-md-2">
              <fieldset class="form-group">
                <label for="titlename">Title</label>
                <select class="form-control" name="titlename" id="titlename" style="padding-left: 1px">
                  <option></option>
                  <option>Mr.</option>
                  <option>Ms.</option>
                  <option>Dr.</option>
                </select>
              </fieldset>
            </div>
            <div class="col-md-5">
              <fieldset class="form-group form-control-danger">
                <label for="firstname">First Name&ast;</label>
                <input type="text" class="form-control form-control-danger" name="firstname" id="firstname" placeholder="e.g. Tom"/>
              </fieldset>
            </div>
            <div class="col-md-5">
              <fieldset class="form-group form-control-danger">
                <label for="lastname">Last Name&ast;</label>
                <input type="text" class="form-control form-control-danger" name="lastname" id="lastname" placeholder="e.g. Flint"/>
              </fieldset>
            </div>
          </div>
          <!--Email/Phone-->
          <div class="row">
            <div class="col-md-8">
              <fieldset class="form-group">
                <label for="email">Email&ast;</label>
                <input type="email" class="form-control form-control-danger" name="email" id="email" placeholder="e.g. tom.flint@courageservices.com"/>
              </fieldset>
            </div>
            <div class="col-md-4">
              <fieldset class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" class="form-control" name="phone" id="phone" placeholder="e.g. (703) 276-7702"/>
              </fieldset>
            </div>
          </div>
          <!--Address-->
          <div class="row">
            <div class="col-md-12">
              <fieldset class="form-group">
                <label for="address">Street Address</label>
                <input type="text" class="form-control" name="address" id="address" placeholder="e.g. 4121 Wilson Blvd."/>
                <label class="sr-only" for="address2">Street Address</label>
                <input type="text" class="form-control" name="address2" id="address2" placeholder="e.g. Suite 301"/>
              </fieldset>
            </div>
          </div>
          <div class="row">
            <div class="col-md-7">
              <fieldset class="form-group">
                <label for="city">City</label>
                <input type="text" class="form-control" name="city" id="city" placeholder="e.g. Arlington"/>
              </fieldset>
            </div>
            <div class="col-md-5">
              <fieldset class="form-group">
                <label for="territory" id="territory">State/Province</label>
                <select class="form-control" name="territory" id="territory">
                  <option></option>
                </select>
              </fieldset>
            </div>
          </div>
          <div class="row">
            <div class="col-md-7">
              <fieldset class="form-group">
                <label for="country">Country</label>
                <select class="form-control" name="country" id="country">
                  <option></option>
                </select>
              </fieldset>
            </div>
            <div class="col-md-5">
              <fieldset class="form-group">
                <label for="postalcode">Zip Code</label>
                <input type="text" class="form-control" name="postalcode" id="postalcode" placeholder="e.g. 22203"/>
              </fieldset>
            </div>
          </div>
          <!--Additional Options-->
          <div class="row">
            <div class="col-md-12">
              <fieldset class="checkbox">
                <label>
                  <input type="checkbox" name="couragesubscription" checked/> Subscribe to Courage Updates
                </label>
              </fieldset>
            </div>
          </div>
          <!--Form Controls-->
          <div class="row">
            <div class="col-md-12 text-right">
              <button type="submit" class="btn btn-primary" id="add-organization-admin">Add</button>
              <!--button type="submit" class="btn btn-primary">Add Another</button-->
              <button type="button" class="btn btn-default" id="reset">Clear</button>
              <button type="button" class="cancel btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
          </div>
        </form>

      </div><!--end:modal-body-->
    </div><!--end:modal-content -->
  </div><!--end:modal-dialog -->
</div><!--end:modal -->
*/
?>

<div class="site-section">
      <div class="container">
          <div class="row justify-content-center">
          <div class="col-md-5 mb-5">
            <h3 class="mb-5">Login</h3>
            <form action="<?php echo base_url().'index.php/login/auth'?>" method="post" class="bg-white">
              
              <div class="">
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_uname" class="text-black">Username <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="username" name="username">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_password" class="text-black">Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="password" name="password">
                  </div>
                </div>
                
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg" value="Login">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
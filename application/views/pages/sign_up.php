
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content col-md-10">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sign Up</h4>
        </div>
        <div class="modal-body">
          <a class="btn btn-block btn-social btn-google" href="<?php echo $loginURL; ?>" onclick="_gaq.push(['_trackEvent', 'btn-social', 'click', 'btn-google']);">
            <span class="fa fa-google" style="color:white;"></span> Sign in with Google
          </a>
          <a class="btn btn-block btn-social btn-facebook" href="<?php echo $authURL; ?>" onclick="_gaq.push(['_trackEvent', 'btn-social', 'click', 'btn-facebook']);">
            <span class="fa fa-facebook" style="color:white;"></span> Sign in with Facebook
          </a>

          <div class="container col-md-10">
              <div class="row" style="margin-top:30px;">
              <h5 class="text-secondary" class="color: #6c757d!important;">Or You can always..</h5>
              </div>
              <form class="text-center border border-light p-5" method="post" action="<?= base_url('Register'); ?>">
                <div class="form-group row">
                  <input type="text" class="form-control mb-4" placeholder="First Name" name="first_name"/>
                </div>
                <div class="form-group row">
                  <input type="text" class="form-control mb-4" id="exampleInputUsername1" aria-describedby="emailHelp" placeholder="Last Name" name="last_name"/>
                </div>
                <div class="form-group row">
                  <input type="email" class="form-control mb-4" id="UserEmail" aria-describedby="emailHelp" placeholder="Email" name="email" onkeyup="checkemail();"/>
                  <span id="email_status"></span>
                </div>
                <div class="form-group row">
                  <input type="password" class="form-control mb-4" id="exampleInputPassword1"placeholder="Password" name="password" />
                </div>

                <input type="submit" class="btn btn-block text-white" value="Sign up" style="background-color:#FF214F;" />
              </form>
              <div class="text-secondary mt-3 text-center">
                By signing up you agree to our<a href="#">&nbsp;terms of service</a>
              </div>
          </div>
        </div>
        <div class="modal-footer">
         
        </div>
      </div>
      
    </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content col-md-10">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sign Up</h4>
        </div>
        <div class="modal-body">
          <a class="btn btn-block btn-social btn-google" href="<?php echo $loginURL; ?>" onclick="_gaq.push(['_trackEvent', 'btn-social', 'click', 'btn-google']);">
            <span class="fa fa-google" style="color:white;"></span> Sign in with Google
          </a>
          <a class="btn btn-block btn-social btn-facebook" href="<?php echo $authURL; ?>" onclick="_gaq.push(['_trackEvent', 'btn-social', 'click', 'btn-facebook']);">
            <span class="fa fa-facebook" style="color:white;"></span> Sign in with Facebook
          </a>

          <div class="container col-md-10">
              <div class="row" style="margin-top:30px;">
              <h5 class="text-secondary" class="color: #6c757d!important;">Or You can always..</h5>
              </div>
              <form class="text-center border border-light p-5" method="post" action="Login">
                <div class="form-group">
                  <input
                    type="email"
                    class="form-control"
                    aria-describedby="emailHelp"
                    placeholder="Email"
                    id="email"
                    name="email"
                  />
                </div>
                <div class="form-group">
                  <input
                    type="password"
                    class="form-control"
                    
                    placeholder="Password"
                    id="password"
                    name="password"
                  />
                </div>

                <button type="submit" class="btn btn-lg btn-primary btn-block">Login</button>
              </form>
              <div class="text-secondary mt-3 text-center">
                By signing up you agree to our<a href="#">&nbsp;terms of service</a>
              </div>
          </div>
        </div>
        <div class="modal-footer">
         
        </div>
      </div>
      
    </div>
  </div>

<?php echo validation_errors(); ?>

  <div class="imgbg">
    <div class="dark-overlay">

      <div class="col-lg-12 d-lg-block">
        <div class="mx-5">
          <h1 class="title">BAKWATA PORTAL</h1>
        </div>
      </div>
        <div id="first">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 mx-auto mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4 class= "text-center">
                         Login Panel 
                        </h4>
                        <hr style = "border-color:white; border-style:solid;">
                        <div class="card-body">
                              <form action="<?php echo base_url().'home/login' ?>" method="post">
                               
                                 <div class="form-group"> 
                                    
                                     <input type="email" class="form-control" name="log_email" placeholder ="Email" required >
                                </div>

                                                          
                                 <div class="form-group">
                                     
                                        <input type="password" class="form-control" name = "log_password" placeholder = "Password">
                                    </div>
                                   
                                        
                                
                                  <input type="submit" class="btn btn-success btn-block mt-1" value="Login" name = "login_button">

                                    <br>                                                
                                     <a href="#" id="signup" class="signup" style="text-decoration:none">Need an account? Register here!</a>
                                                                                    
                             </form>
                        </div>
                    </div>
                </div>
              </div>
          </div>
        </div>   
    </div>

      <div id="second">
      <div class="container">
        <div class="row">
            <div class=" card col-lg-auto mx-auto border-dark">
                <div class="card-body text-center">
                    <h3 class="display-5"> Sign Up Today </h3>
                    <p class="lead">Please fill out this form to Register</p>
                    <hr style = "border-color:white; border-style:solid;">
                      <form action="<?php echo base_url().'home_controller/register' ?>" method="post"  autocomplete="off">
                        
                      <div class="row">
                      <div class="form-group col-6">
                            <input type="text" name="reg_full_name" placeholder="Full Name" required class="form-control">   
                        </div>
                        <div class="form-group col-6">
                            <input type="text" name="reg_phone" placeholder="Phone" required class="form-control">
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-6">
                         <input type="email" name="reg_email" placeholder="Email" required class="form-control">
                         </div>
                        <div class="form-group col-6">
                         <input type="email" name="reg_email2" placeholder="Confirm Email" required class="form-control">
                        </div>
                      </div>
                        
                      <div class="row" >
                        <div class="form-group col-6">
                         <input type="password" name="reg_password" placeholder="Password" required class="form-control"> 
                        </div>                    
                        <div class="form-group col-6">
                         <input type="password" name="reg_password2" placeholder=" Confirm Password" required class="form-control" >
                        </div>
                      </div>
                        
                        <div class="form-group">Register As
                        <select class="form-control" required autofocus name="user_type">
                        <option value="Student">Applicant</option>
                        <option value="Employer">Employer</option>
                        <option value="Member">Bsmart Club Member</option>
                        </select>
                        </div>
                        <input type="submit" value="Register" class="btn btn-block btn-danger" name="reg_button" id="reg_button">
                    </form>
                       <br>
                        <a href="#" id="signin" class="signin">Already have an account? Sign in here!</a>
                </div>
            </div>
        </div>
      </div>         
</div>
</body>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script>
  	
  	$(document).ready(function() {

	//On click signup, hide login and show registration form
	$("#signup").click(function() {
		$("#first").slideUp("slow", function(){
			$("#second").slideDown("slow");
		});
	});

	//On click signup, hide registration and show login form
	$("#signin").click(function() {
		$("#second").slideUp("slow", function(){
			$("#first").slideDown("slow");
		});
	});

});
  	
  </script>



</html>


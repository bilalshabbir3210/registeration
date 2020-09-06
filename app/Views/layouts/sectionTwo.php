<div class="signUpSection">
	<div class="signUpHeading">
		<h1> GET REGISTERED </h1>
		<p>Let's have a cup of coffe after registeration</p>
	</div>
	<div class="signUpForm">

		<div class="display_msg"></div>
		<?php ?>
		<?= form_open( '', ['Method'=>'POST' ,'class'=>'form needs-validation' ,'id'=>'signUp','novalidate'=>'novalidate'])?>

			<div class="form-group ">
				<?= form_input(['type'=>'text','class'=>'form-control', 'name'=>'firstname','placeholder'=>'First Name *' ,'required'=>'required','minlength'=>3,'id'=>'firstname'])?>
				<div class="invalid-feedback">First name should be minimum of 3 Characters </div>
			</div>
			<div class="form-group ">
				<?= form_input(['type'=>'text','class'=>'form-control', 'name'=>'lastname','placeholder'=>'Last Name ','id'=>'lastname'])?>
				
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 col-3">
						<?php 
							$options = [
									'050'=>'050',
									'055'=>'055',
									'056'=>'056',
									'058'=>'058',
		     							];
		     				$class= ['name'=>'codes','class'=>'form-control','id'=>'code'];
		     							
		     				echo form_dropdown($class,$options );			

						?>
					</div>			
					<div class="col-lg-9 col-md-9 col-sm-9 col-9">
						<?= form_input(['type'=>'text','class'=>'form-control', 'name'=>'number','placeholder'=>'Contact Number *','required'=>'required','minlength'=>7,'id'=>'number'])?>
					<div class="invalid-feedback">Number Should be correct, min char 7</div>
					</div>			
				</div>
				
			</div>

			<div class="form-group ">
				<?= form_input(['type'=>'email','class'=>'form-control', 'name'=>'email','placeholder'=>'Email *','required'=>'required','id'=>'email' ,'pattern'=>'[/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/i$]'])?>
				<div class="invalid-feedback">Email should be valid </div>
				
			</div>
			<div class="form-group input-group">
				<?= form_input(['type'=>'password','class'=>'form-control', 'name'=>'password','placeholder'=>'Password *','id'=>'password','required'=>'required','pattern'=>'(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}'])?>
				<div class="input-group-append">
			      <span class="input-group-text"><i class="fa fa-eye-slash"></i></span>
			    </div>
				<div class="invalid-feedback">Password at least one  number and one uppercase and lowercase letter, and at least 8 or more characters</div>
			</div>
			<div class="form-group input-group">
				<?= form_input(['type'=>'password','class'=>'form-control', 'name'=>'cpassowrd','placeholder'=>'Confirm Password *','id'=>'cpassword','required'=>'required','minlength'=>8])?>
				<div class="input-group-append">
			      <span class="input-group-text"><i class="fa fa-eye-slash"></i></span>
			    </div>
				<div id="cPwdInvalid" class="invalid-feedback">Password does not match</div>
			</div>



			<div class="form-group text-center">
				<button type="submit" class="btn btn-primary singbtn mt-2"> Sign Up</button>
			</div>
			<div class="lowerContent">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<a href="#"> Already Have Account ?</a>
				</div>
				<div class="col-md-6 col-sm-12 text-right">
				<a href="#">Forgot Password</a>

				</div>
			</div>
			</div>
		<?= form_close();?>
	</div>		
</div>
  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <!-- <h1 class="modal-title">Alert</h1> -->

          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/></svg>
          <P class="modal_body_msg text-center"> You are registered successfully ! </P>
        </div>
        
        </div>
        
      </div>
    </div>
  </div>

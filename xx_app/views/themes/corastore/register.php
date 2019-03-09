



	<!-- Related Products -->
	<section class="sec-relate-product bg0 p-t-45 p-b-105">
		<div class="container">
			<div class="p-b-45">
				<h3 class="ltext-106 cl5 txt-center">
					Registration
				</h3>
			</div>

<div class="container">
 
				<?php 
	            $attributes = array('name' => 'form-add-customer', 'id' => 'form-add-customer', 'role' => 'form', 'class' => 'form-horizontal');
                echo form_open($this->uri->uri_string(), $attributes);
				if (isset($success)) {
                    echo 'Register successfully.';
                } else {
                    // echo validation_errors();
                } 			
				
				?>
	      
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="add_firstname">Firstname Name <span class="required">*</span>
							</label>
							<div class="col-xs-12">
					
							   <?php echo form_input('add_firstname', '', array('class' => 'form-control ', 'placeholder' => 'Enter Firstname Name', 'id' => 'add_firstname'));?>

							   <div class="custom-error"> <?php echo form_error('add_firstname');?></div>
							</div>
						  </div>
						  
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="add_lastname">Lastname <span class="required">*</span>
							</label>
							<div class="col-xs-12">
					
							   <?php echo form_input('add_lastname', '', array('class' => 'form-control ', 'placeholder' => 'Enter Firstname', 'id' => 'add_lastname'));?>

							   <div class="custom-error"> <?php echo form_error('add_lastname');?></div>
							</div>
							
							
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="add_email">Email <span class="required">*</span>
							</label>
							<div class="col-xs-12">
					
							   <?php echo form_input('add_email', '', array('class' => 'form-control ', 'placeholder' => 'Enter Email', 'id' => 'add_email'));?>

							   <div class="custom-error"> <?php echo form_error('add_email');?></div>
							</div>
							
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="add_phonenumber">Phone <span class="required">*</span>
							</label>
							<div class="col-xs-12">
					
							   <?php echo form_input('add_phonenumber', '', array('class' => 'form-control ', 'placeholder' => 'Enter Phone', 'id' => 'add_phonenumber'));?>

							   <div class="custom-error"> <?php echo form_error('add_phonenumber');?></div>
							</div>
							
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="add_address">Address <span class="required">*</span>
							</label>
							<div class="col-xs-12">
					
							   <?php echo form_input('add_address', '', array('class' => 'form-control ', 'placeholder' => 'Enter Address', 'id' => 'add_address'));?>

							   <div class="custom-error"> <?php echo form_error('add_address');?></div>
							</div>
	<input type="submit" id="submit_customer_post" name="submit_customer_post" class="btn btn-default" value="Submit"/>
 	 <?php echo form_close();?>
</div>	

	</section>
		
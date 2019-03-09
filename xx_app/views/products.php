<?php echo '<h2>Welcome - '.$this->session->userdata('username').'</h2>';  
echo '<label><a href="'.base_url().'mainadmin/logout">Logout</a></label>';
?>

        <!-- page content -->
        <div id="container" class="container" role="main">


            <div class="row">
			
		

					
					<table id="datatable-responsive" class="table table-striped table-bordered table-hover dt-responsive nowrap" cellspacing="0" width="100%">
					  <thead>
						<tr>
						  <th>Products Name</th>
						  <th>Products Description</th>
						  <th>Products Description</th>
						  <th class="no-print">Action</th>
						</tr>
					  </thead>
					  <tbody id="output-data">
						   <tr>
								<td>1</td>
								<td>John</td>
								<td>Carter</td>
								<td>johncarter@mail.com</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Peter</td>
								<td>Parker</td>
								<td>peterparker@mail.com</td>
							</tr>
							<tr>
								<td>3</td>
								<td>John</td>
								<td>Rambo</td>
								<td>johnrambo@mail.com</td>
							</tr>
					  </tbody>
					</table>
					


						<div class="row no-print bottom-margin">
						<div class="col-xs-12">
						  <!--button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button-->
									   
						 <a href="#modal-add-products" class="btn btn-success pull-right" data-toggle="modal"><i class="fa fa-plus-square" data-toggle="tooltip" data-target="#modal-add-products" title="Add"></i> Add </a>


						  </div>
						</div>
					 
			</div>
         
			
		  
          
        </div>
        <!-- /page content -->

	<!-- Add Modal HTML -->
<div class="modal fade" id="modal-add-products" tabindex="-1" role="dialog" aria-labelledby="addproductsmodallabel" aria-hidden="true"  tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addproductsmodallabel">Add Product</h5>
		  <button type="button" id="form-button-add-products-close" class="close" data-dismiss="modal"  data-keyboard="true" aria-hidden="true"  aria-label="Close">&times;</button>
        </button>
      </div>
	  <?php echo form_open_multipart('products/products_post', array('id' => 'form-add-products', 'role' => 'form', 'class' => 'form-horizontal form-label-left'));?>
      <div class="modal-body">
			

	
		

		  <div class="form-group">
			<label for="recipient-name" class="form-control-label">Recipient:</label>
			<input type="text" class="form-control" id="recipient-name">
		  </div>

		  <div class="form-group">
			<label for="recipient-name" class="form-control-label">Recipient:</label>
			<input type="text" class="form-control" id="recipient-name">
		  </div>				


		
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
	  	 <?php echo form_close();?>
    </div>
  </div>
</div>

	<div id="modal-add-productasfafs" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			
				<?php echo form_open('products/products_post', array('id' => 'form-add-products', 'role' => 'form', 'class' => 'form-horizontal form-label-left'));?>
					<div class="modal-header">						
						<h4 class="modal-title">Add Records</h4>
						<button type="button" id="form-button-add-products-close" class="close" data-dismiss="modal"  data-keyboard="true" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<div class="row">
						

						  <div class="form-group">
							<label class="control-label col-xs-12" for="input-addproductsname">PRODUCTS Name <span class="required">*</span>
							</label>
							<div class="col-xs-12">
					
							   <?php echo form_input('addproductsname', '', array('class' => 'form-control', 'placeholder' => 'Enter PRODUCTS Name', 'id' => 'input-addproductsname', 'required' => 'required', 'data-parsley-minlength' => '2','data-parsley-trigger' => 'keyup'));?>

							   <div class="custom-error"></div>
							</div>
						  </div>

						  <div class="form-group">
							<label class="control-label col-xs-12" for="addproductsdescription">PRODUCTS Description
							</label>
							<div class="col-xs-12">
							 <?php echo form_textarea('addproductsdescription', '', array('class' => 'form-control', 'placeholder' => 'Enter PRODUCTS Description', 'id' => 'input-addproductsdescription', 'data-parsley-trigger' => 'keyup','data-parsley-maxlength' => '150','data-parsley-minlength-message' => 'Come on! You need to enter at least a 5 caracters long comment..','data-parsley-validation-threshold' => '2'));?>
							  <div class="custom-error"></div>
							</div>
						  </div>				


						
						</div>
					</div>
					<div class="modal-footer">
						
							<div class="col-xs-12 col-md-offset-3">
							  <button class="btn btn-danger" type="button" id="form-button-add-products-cancel">Cancel</button>
							  <button class="btn btn-warning" id="form-button-add-products-reset" type="reset">Reset</button>
							  <button type="button" class="btn btn-success" id="form-button-add-products">Submit</button>
							</div>
						
					</div>
				 <?php echo form_close();?>
				
				
				
			</div>
		</div>
	</div>
							
		<!-- Edit Modal HTML -->
	<div id="modal-edit-products" class="modal fade" tabindex="-2" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			
				<?php echo form_open('products/products_put', array('id' => 'form-edit-products', 'role' => 'form', 'class' => 'form-horizontal form-label-left'));
				//echo form_hidden('input-editproductsid', '');
				?>
				 <input type="hidden" id="input-editproductsid" name="editproductsid" value=""/>
					<div class="modal-header">						
						<h4 class="modal-title">Edit Records</h4>
						<button type="button" class="close" id="form-button-edit-products-close" data-dismiss="modal"  data-keyboard="true" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<div class="row">
						

						  <div class="form-group">
							<label class="control-label col-xs-12" for="input-editproductsname">PRODUCTS Name <span class="required">*</span>
							</label>
							<div class="col-xs-12">
					
							   <?php echo form_input('editproductsname', '', array('class' => 'form-control', 'placeholder' => 'Enter PRODUCTS Name', 'id' => 'input-editproductsname', 'required' => 'required', 'data-parsley-minlength' => '2','data-parsley-trigger' => 'keyup'));?>

							   <div class="custom-error"></div>
							</div>
						  </div>

						  <div class="form-group">
							<label class="control-label col-xs-12" for="input-editproductsdescription">PRODUCTS Description
							</label>
							<div class="col-xs-12">
							 <?php echo form_textarea('editproductsdescription', '', array('class' => 'form-control', 'placeholder' => 'Enter PRODUCTS Description', 'id' => 'input-editproductsdescription', 'data-parsley-trigger' => 'keyup','data-parsley-maxlength' => '150','data-parsley-minlength-message' => 'Come on! You need to enter at least a 5 caracters long comment..','data-parsley-validation-threshold' => '2'));?>
							  <div class="custom-error"></div>
							</div>
						  </div>				


						
						</div>
					</div>
					<div class="modal-footer">
						
							<div class="col-xs-12 col-md-offset-3">
							  <button class="btn btn-danger" type="button" id="form-button-edit-products-cancel">Cancel</button>
							  <button class="btn btn-warning" id="form-button-edit-products-reset" type="reset">Reset</button>
							  <button type="submit" class="btn btn-success" id="form-button-edit-products">Submit</button>
							</div>
						
					</div>
				 <?php echo form_close();?>
				
				
				
			</div>
		</div>
	</div>
	
	
	<!-- Delete Modal HTML -->
	<div id="modal-delete-products" class="modal fade" tabindex="-3" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			
				<?php echo form_open('products/products_delete', array('id' => 'form-delete-products', 'role' => 'form', 'class' => 'form-horizontal form-label-left'));?>
				 <input type="hidden" id="input-deleteproductsid" name="deleteproductsid" value=""/>
					<div class="modal-header">						
						<h4 class="modal-title">Delete Records</h4>
						<button type="button" id="form-button-delete-products-close" class="close" data-dismiss="modal"  data-keyboard="true" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<div class="row">		
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning">This action cannot be undone.</p>
						</div>
					</div>
					<div class="modal-footer">
						
							<div class="col-xs-12 col-md-offset-3">
							  <button class="btn btn-danger" type="button" id="form-button-delete-products-cancel">Cancel</button>
							  <button class="btn btn-warning" id="form-button-delete-products-reset" type="reset">Reset</button>
							  <button type="button" class="btn btn-success" id="form-button-delete-products">Submit</button>
							</div>
						
					</div>
				 <?php echo form_close();?>
				
				
				
			</div>
		</div>
	</div>
<script>
$( document ).ready(function() {
var isloaded = false;
var PRODUCTS = {
		Init: function(config){
			this.config = config;
			this.BindEvents();
		},
		
		//Object data binding here
		BindEvents: function(){
			var $this = this.config;
			PRODUCTS.Get('paramLoadDropdown', null);			// New Dropdown data from add and edit modal
			//binding all searching
			// $this.input_addproductsname.on('click', {param: 'paramSearchAllData'}, this.get);
			// $this.button_filter_clear.on('click', {param: 'paramClearAllData'}, this.Clear);
			
			//Binding for POST
			$this.form_button_add_products_close.on('click', {param: 'paramactvititypostclose'}, this.Post);
			$this.form_button_add_products_cancel.on('click', {param: 'paramactvititypostcancel'}, this.Post);
			$this.form_button_add_products.on('click', {param: 'paramactvititypost'}, this.Post);
			$this.input_addproductsname.on('keypress', {param: 'parammodalactivitypost'}, this.KeyPressBtn);
			
			//Binding for Put
			$this.form_button_edit_products_close.on('click', {param: 'paramactvitityputclose'}, this.Put);
			$this.form_button_edit_products_cancel.on('click', {param: 'paramactvitityputcancel'}, this.Put);
			$this.form_button_edit_products.on('click', {param: 'paramactvitityput'}, this.Put);
			$this.input_editproductsname.on('keypress', {param: 'parammodalactivityput'}, this.KeyPressBtn);
			$this.output_data.on('click', '.btnEdit', {param:'RowModify'},this.Put); 

			//Binding for Delete
			$this.form_button_delete_products_close.on('click', {param: 'paramactvititydeleteclose'}, this.Delete);
			$this.form_button_delete_products_cancel.on('click', {param: 'paramactvititydeletecancel'}, this.Delete);
			$this.form_button_delete_products.on('click', {param: 'paramactvititydelete'}, this.Delete);
			$this.output_data.on('click', '.btnDelete', {param:'RowRemove'},this.Delete); 
						
			//binding keyup button
			$this.input_addproductsname.on('keyup', {param: 'parammodalactivityposterror'}, this.KeyUp);
			$this.input_editproductsname.on('keyup', {param: 'parammodalactivityputerror'}, this.KeyUp);


			//binding all editing 
			// $this.output_data.on('click', '.btnEdit', {param:'RowModify'},this.Edit);  
			// $this.button_editproducts.on('click',{param: 'paramUpdateData'}, this.Edit);
			// $this.button_closeproducts.on('click', {param:'paramClearSelected'},this.Clear);
		
/* 			// Binding flash inline editing on table
		    $this.output_data.on('click', '.isactive',{param: 1}, this.ActiveList);  
		    $this.output_data.on('blur', '.isactive select',{param: 3}, this.ActiveList);        			
		    $this.output_data.on('click', 'td',{param: 4}, this.ActiveList);   */
		},
		KeyUp: function(e, data){
                
			var $route = ( typeof e == 'object' ) ? e.data.param : e,
				$self  = PRODUCTS.config;

				switch($route){
					
					// KeyUp for adding data modal
					case 'parammodalactivityposterror':
						$self.input_form_add_products.removeClass('is-invalid').addClass('is-valid');
						$self.input_form_add_products.parents('.form-group').find('.custom-error').html(" ");
					break;
					
					// KeyUp for adding data modal
					case 'parammodalactivityputerror':
						$self.input_form_edit_products.removeClass('is-invalid').addClass('is-valid');
						$self.input_form_edit_products.parents('.form-group').find('.custom-error').html(" ");
					break;
					
					default:
					break;
				}
         },
		 
		 NotificationModal: function( txtTitle, txtMsg, txtType, opacity){
          // new PNotify({
                // title: txtTitle, text: txtMsg, type: txtType, styling: 'bootstrap3',opacity: opacity
            // });
        },
		
		//Keypress binding function
		KeyPressBtn: function(e, data){
                
			var $route = ( typeof e == 'object' ) ? e.data.param : e,
				$self  = PRODUCTS.config;

				switch($route){
					
					// Keypress for adding data modal
					case 'parammodalactivitypost':
						if( e.keyCode == '13'){
						  e.preventDefault();
						  $self.form_button_add_products.click();
						}
					break;
					
					// Keypress for editing data modal
					case 'parammodalactivityput':
						if( e.keyCode == '13'){
						  e.preventDefault();
						  $self.form_button_edit_products.click();
						}
					break;
					
					default:
					break;
				}
         },
		
		Clear: function(e, data){	
			var $route = ( typeof e == 'object' ) ? e.data.param : e,
				$self  = PRODUCTS.config;
				
				switch($route){
					//clear table list output and function
					case 'paramClearAllData': 
						$self.output_data.empty();
							PRODUCTS.NotificationModal( "PRODUCTS Data", 
								"Clear All data in the table."
								, "success", 0.9);
							
					break;
					
					// Clear selected data on edited
					case 'paramclearselected':
						$("#txt-edit-Brand-Status option:selected").removeAttr("selected");
					break;
				}
		}, 

		
		Post: function(e, data){	
			var $route = ( typeof e == 'object' ) ? e.data.param : e,
				$self  = PRODUCTS.config;


				switch($route){
					
					case 'paramactvititypost':
						e.preventDefault();
						
						// Error trapping input txt input_addproductsname
						if( $self.input_addproductsname.val() == '' ){
							$self.input_addproductsname.focus();
							return;
						}							
						PRODUCTS.CallAjax('products/products_post',  $self.form_add_products.serializeArray(), 'ajaxactvititypost'); 
					break;
					
					case 'paramactvititypostcancel':
					case 'paramactvititypostclose':
						$self.form_button_add_products_reset.click();
						$self.modal_add_products.modal('hide');
					break;
					
					default:
					break;
				}
		},

		Put: function(e, data){	
			var $route = ( typeof e == 'object' ) ? e.data.param : e,
				$self  = PRODUCTS.config;


				switch($route){
					
					case 'paramactvitityput':
						e.preventDefault();
						
						// Error trapping input txt input_addproductsname
						if( $self.input_editproductsname.val() == '' ){
							$self.input_editproductsname.focus();
							return;
						}			
						
						PRODUCTS.CallAjax('products/products_put',  $self.form_edit_products.serializeArray(), 'ajaxactvitityput'); 
					break;
					
					case 'paramactvitityputcancel':
					case 'paramactvitityputclose':
						$self.form_button_edit_products_reset.click();
						$self.modal_edit_products.modal('hide');
					break;

					case 'RowModify':
						$rowID        = $(this).attr('data-rowedit'), 
						$tdValues     = [], 
						$ctr          = 0; 	
						
						//on click of modify button get cell value on td
						$('#row_' + $rowID + ' td:not(:last-child)').each(function () {
							var $temp = [];

							if ( $ctr == 0 ){		// First column
								$temp[10] = $(this).attr('data-productsName');
	
							}else if ( $ctr == 1){	// secon coumn column
								$temp[11] = $(this).attr('data-productsDescription');
							} else {				// fallback column
								var $temp = $(this).text();
							}
							
							$tdValues.push($temp);
							$ctr++;
						});               
						// $self.editbrand_modal.modal('show');  //Display data to modal
						
						//Clear selected attrbute to select option
						PRODUCTS.Clear('paramclearselected', null);
						$self.input_editproductsid.val( $rowID);														
						$self.input_editproductsname.val( $tdValues[0][10]);													
						$self.input_editproductsdescription.val( $tdValues[1][11]);														
						// Brand.LoadActiveStatus('paramDisplayStatusDropdown', null, $tdValues[1][11]);  					// Is active dropdown select
					break;
					
					default:
					break;
				}
		},
		
		Delete: function(e, data){	
			var $route = ( typeof e == 'object' ) ? e.data.param : e,
				$self  = PRODUCTS.config;


				switch($route){
					
					case 'paramactvititydelete':
					// console.log($self.form_delete_products.serializeArray());
						PRODUCTS.CallAjax('products/products_delete',  $self.form_delete_products.serializeArray(), 'ajaxactvititydelete'); 
					break;
					
					case 'paramactvititydeletecancel':
					case 'paramactvititydeleteclose':
						$self.form_button_delete_products_reset.click();
						$self.modal_delete_products.modal('hide');
					break;

					case 'RowRemove':
						$rowID        = $(this).attr('data-rowdelete'), 
						$tdValues     = [], 
						$ctr          = 0; 	
						
						//on click of modify button get cell value on td
/* 						$('#row_' + $rowID + ' td:not(:last-child)').each(function () {
							var $temp = [];

							
							$tdValues.push($temp);
							$ctr++;
						});  */      
console.log($rowID);						
						// $self.editbrand_modal.modal('show');  //Display data to modal
						
						//Clear selected attrbute to select option
						PRODUCTS.Clear('paramclearselected', null);
						$self.input_deleteproductsid.val( $rowID);														
						// Brand.LoadActiveStatus('paramDisplayStatusDropdown', null, $tdValues[1][11]);  					// Is active dropdown select
					break;
					
					default:
					break;
				}
		},
		
		//Retrieve functionality
		Get: function(e, data){	
			var $route = ( typeof e == 'object' ) ? e.data.param : e,
				$self  = PRODUCTS.config;
				
				switch($route){

					//search all data output
					case 'paramLoadDropdown': 
						$self.custom_error.html(" ");

						PRODUCTS.CallAjax('<?php echo site_url();?>products/products_getall', null, 'ajaxactivitygetall');
						
					
					break;
					
					case 'return_actvititygetall': 
						/*return sa gi exceute nga query */
						var len = data.length, txt = "",$self = PRODUCTS.config; 
						$self.output_data.empty();
						if(len > 0){
							for(var i=0;i<len;i++){
								 if( data[i].productid ){
									txt += "<tr data-id='"+data[i].productid+"' id='row_"+data[i].productid+"'>"+                                                       
										"<td data-productname='"+data[i].productname+"'>"+data[i].productname+"</td>"+             										
										"<td data-productdescription='"+data[i].productdescription+"'>"+data[i].productdescription+"</td>"+
										"<td data-currentprice='"+data[i].currentprice+"'>"+data[i].currentprice+"</td>"+
										"<td data-currentquantity='"+data[i].currentquantity+"'>"+data[i].currentquantity+"</td>"+
										"<td data-currentprice='"+data[i].currentprice+"'>"+data[i].currentprice+"</td>"+
										"<td data-picture='"+data[i].picture+"'><image src='<?php echo site_url();?>xx_public/uploads/"+data[i].picture+"'></td>"+
										"<td class='no-print'><a href='#modal-edit-products' class='btn btn-warning btn-xs btnEdit' data-toggle='modal' data-rowedit='"+data[i].productid+"' ><i class='fa fa-cog' data-toggle='tooltip' title='Edit'></i> Edit </a><a href='#modal-delete-products' class='btn btn-danger btn-xs btnDelete' data-toggle='modal' data-rowdelete='"+data[i].productid+"'><i class='fa fa-trash' data-toggle='tooltip' title='Delete'></i> Delete </a>"+                             
										"</tr>";				
								}
							  } /*end of looping data*/  

							if(txt != ""){ 
								$self.output_data.prepend(txt); 
								PRODUCTS.NotificationModal( "PRODUCTS Loaded", 
								(len > 1 ? "Results: "+len.toString()+" results found." : "Result:"+len.toString()+" result found.")
								, "success", 0.9);
								if(isloaded == false){
								
									isloaded = true;
								}
								
							} else /*end if no result found*/{  
							$self.output_data.append('<tr><td id="no-record" colspan="3">No Record found</td></tr>');
							PRODUCTS.NotificationModal( "PRODUCTS Search"
								,"No Record founds"
								, "warning", 0.9);
							}
						}else /*end if no result found*/{  
							$self.output_data.append('<tr><td id="no-record" colspan="3">No Record Found</td></tr>');
							PRODUCTS.NotificationModal( "PRODUCTS Search"
								,"No Record founds"
								, "error", 0.9);
							
						}
					break;
					
					case 'return_actvititypost': 
						/*return sa gi exceute nga query */
						var len = data.length, txt = "",$self = PRODUCTS.config; 
						if(len > 0){	
							for(var i=0;i<len;i++){
								 if( data[i].productsId ){
									txt += "<tr data-id='"+data[i].productid+"' id='row_"+data[i].productid+"'>"+                                                       
										"<td data-productname='"+data[i].productname+"'>"+data[i].productname+"</td>"+             										
										"<td data-productdescription='"+data[i].productdescription+"'>"+data[i].productdescription+"</td>"+
										"<td data-currentprice='"+data[i].currentprice+"'>"+data[i].currentprice+"</td>"+
										"<td data-currentquantity='"+data[i].currentquantity+"'>"+data[i].currentquantity+"</td>"+
										"<td data-currentprice='"+data[i].currentprice+"'>"+data[i].currentprice+"</td>"+
										"<td data-picture='"+data[i].picture+"'><image src='<?php echo site_url();?>xx_public/uploads/"+data[i].picture+"'></td>"+
										"<td class='no-print'><a href='#modal-edit-products' class='btn btn-warning btn-xs btnEdit' data-toggle='modal' data-rowedit='"+data[i].productid+"' ><i class='fa fa-cog' data-toggle='tooltip' title='Edit'></i> Edit </a><a href='#modal-delete-products' class='btn btn-danger btn-xs btnDelete' data-toggle='modal' data-rowdelete='"+data[i].productid+"'><i class='fa fa-trash' data-toggle='tooltip' title='Delete'></i> Delete </a>"+                             
										"</tr>";			
								}
							  } /*end of looping data*/  

							if(txt != ""){ 
								$self.datatable_responsive.DataTable().destroy();
								$self.output_data.prepend(txt); 
								$self.datatable_responsive.DataTable().draw();
								$self.form_button_add_products_close.click()
								PRODUCTS.NotificationModal( "PRODUCTS Added", 
								(len > 1 ? "Results: "+len.toString()+" results found." : "Result:"+len.toString()+" result found.")
								, "success", 0.9);
	
								
							} else /*end if no result found*/{  
							$self.output_data.append('<tr><td id="no-record" colspan="3">No Record found</td></tr>');
							PRODUCTS.NotificationModal( "PRODUCTS Search", 
								"No Record founds"
								, "warning", 0.9);
							}
					}else /*end if no result found*/{  
							$self.output_data.append('<tr><td id="no-record" colspan="3">No Record Found</td></tr>');
							PRODUCTS.NotificationModal( "PRODUCTS Search", 
								"No Record founds"
								, "error", 0.9);
					}					
					break;
					
					case 'return_actvitityput': 
						/*return sa gi exceute nga query */
						var len = data.length, txt = "",$self = PRODUCTS.config; 
						if(len > 0){
							$('#row_' +data[0].productsId).remove();
						
							for(var i=0;i<len;i++){
								 if( data[i].productsId ){
									txt += "<tr data-id='"+data[i].productsId+"' id='row_"+data[i].productsId+"'>"+                                                       
										"<td data-productsName='"+data[i].productsName+"'>"+data[i].productsName+"</td>"+             										
										"<td data-productsDescription='"+data[i].productsDescription+"'>"+data[i].productsDescription+"</td>"+
										"<td class='no-print'><a href='#modal-edit-products' class='btn btn-warning btn-xs btnEdit' data-toggle='modal' data-rowedit='"+data[i].productsId+"' ><i class='fa fa-cog' data-toggle='tooltip' title='Edit'></i> Edit </a><a href='#modal-delete-products' class='btn btn-danger btn-xs btnDelete' data-toggle='modal' data-rowdelete='"+data[i].productsId+"'><i class='fa fa-trash' data-toggle='tooltip' title='Delete'></i> Delete </a>"+                             
										"</tr>";				
								}
							  } /*end of looping data*/  

							if(txt != ""){ 
				
								// $self.output_data.empty();
								$self.output_data.prepend(txt); 
								// $self.datatable_responsive.DataTable().destroy();
								// $self.datatable_responsive.DataTable().draw();
								$self.form_button_edit_products_close.click()
								PRODUCTS.NotificationModal( "PRODUCTS Edited", 
								(len > 1 ? "Results: "+len.toString()+" results found." : "Result:"+len.toString()+" result found.")
								, "success", 0.9);
								
							} else /*end if no result found*/{  
							$self.output_data.append('<tr><td id="no-record" colspan="3">No Record found</td></tr>');
							PRODUCTS.NotificationModal( "PRODUCTS Search"
								,"No Record founds"
								, "warning", 0.9);
							}
					}else /*end if no result found*/{  
							$self.output_data.append('<tr><td id="no-record" colspan="3">No Record Found</td></tr>');
							PRODUCTS.NotificationModal( "PRODUCTS Search" 
								,"No Record founds"
								, "error", 0.9);
					}			
					break;

					
					case 'return_actvititydelete': 
						$self.output_data.empty();
						/*return sa gi exceute nga query */
						var len = data.length, txt = "",$self = PRODUCTS.config; 
						if(len > 0){
					//								$self.datatable_responsive.DataTable().clear().destroy();
			
						//		PRODUCTS.Get('paramLoadDropdown', null);	
								$self.datatable_responsive.DataTable().destroy();
			console.log(data);
								$('#row_' +data[0].productsId).remove();
								// $self.output_data.prepend(txt); 

								$self.datatable_responsive.DataTable().draw();
								$self.form_button_delete_products_close.click()
								PRODUCTS.NotificationModal( "PRODUCTS Deleted", 
								"1 data is removed."
								, "danger", 0.9);
								
						
						}else /*end if no result found*/{  
								$self.output_data.append('<tr><td id="no-record" colspan="3">No Record Found</td></tr>');
								PRODUCTS.NotificationModal( "PRODUCTS Search" 
									,"No Record founds"
									, "error", 0.9);
						}			
					break;
				}
		}, //end of get function


	
		//Ajax Functionality here
		CallAjax: function( url, data, type){

			var timer;
			$.ajax({
				type: 'POST',
				url: url,
				data: data,
				dataType:'json',
				
				// async: false,
				// timeout: 500,
				contentType: "application/json",
				beforeSend: function(xhr){
					timer && clearTimeout(timer);
					timer = setTimeout(function()
					{
						$("body").addClass("loading"); 
					},
					3000);      
					xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded")					
				},
				complete: function(){
					clearTimeout(timer);
					$("body").removeClass("loading"); 
				},							
				success: function(result){ 
						$.each(result, function(key, value) {
							$('#input-' + key).addClass('is-invalid');

							$('#input-' + key).parents('.form-group').find('.custom-error').html(value);
						});
					// if(dataFromDatabase){
						switch(type){

							//Save data all being inserted
							case 'ajaxactivitygetall':
								PRODUCTS.Get('return_actvititygetall', result); 
							break;	
							
							case 'ajaxactvititypost':
								PRODUCTS.Get('return_actvititypost', result);
							break					

							case 'ajaxactvitityput':
								PRODUCTS.Get('return_actvitityput', result);
							break	
							
							case 'ajaxactvititydelete':
								PRODUCTS.Get('return_actvititydelete', result);
							break	
							// Generic data all being edited
							default:
								PRODUCTS.NotificationModal( "Default" 
								,"default notification appears in the ajax."
								, "warning", 0.9);
							break;							
						}    
					// }
				},
				error: function(dataFromDatabase, textStatus, errorThrown){
					// PRODUCTS.NotificationModal("exclamation-sign","Something Went Off:",textStatus + ': ' + errorThrown,"top","center","animated bounceInDown","animated bounceOutDown");
					PRODUCTS.NotificationModal( textStatus 
								,dataFromDatabase +':'+ errorThrown
								, "error", 0.9);
				}
			}); 
		},//End of CallAjax function		
	}// End of Object binding
	
	PRODUCTS.Init({
		//initializes element id and class here.
		output_data 					: $('#output-data'),						
		datatable_responsive 			: $('#datatable-responsive'),			
		custom_error 					: $('.custom-error'),					

		//Adding binding			
		modal_add_products   				: $('#modal-add-products'), 					
		form_add_products   					: $('#form-add-products'), 					
		form_button_add_products_close 		: $('#form-button-add-products-close'), 					
		form_button_add_products_cancel 		: $('#form-button-add-products-cancel'), 					
		form_button_add_products_reset 		: $('#form-button-add-products-reset'), 					
		form_button_add_products 			: $('#form-button-add-products'),  		
		input_addproductsname   				: $('#input-addproductsname'), 					
		input_addproductsdescription   		: $('#input-addproductsdescription'), 				
		input_form_add_products   			: $('#form-add-products input'), 				


	
		//Edit binding	
		modal_edit_products   				: $('#modal-edit-products'), 					
		form_edit_products   				: $('#form-edit-products'), 					
		form_button_edit_products_close 		: $('#form-button-edit-products-close'), 					
		form_button_edit_products_cancel 	: $('#form-button-edit-products-cancel'), 					
		form_button_edit_products_reset 		: $('#form-button-edit-products-reset'), 	
		form_button_edit_products 			: $('#form-button-edit-products'),  		
		input_editproductsid		   			: $('#input-editproductsid'), 					
		input_editproductsname   			: $('#input-editproductsname'), 					
		input_editproductsdescription   		: $('#input-editproductsdescription'), 	
		input_form_edit_products   			: $('#form-edit-products input'), 

		//Delete	
		modal_delete_products   				: $('#modal-delete-products'), 					
		form_delete_products   				: $('#form-delete-products'), 					
		form_button_delete_products_close 	: $('#form-button-delete-products-close'), 					
		form_button_delete_products_cancel 	: $('#form-button-delete-products-cancel'), 					
		form_button_delete_products_reset 	: $('#form-button-delete-products-reset'), 	
		form_button_delete_products 			: $('#form-button-delete-products'),  		
		input_deleteproductsid		   		: $('#input-deleteproductsid') 		
	})	

		
});
</script>
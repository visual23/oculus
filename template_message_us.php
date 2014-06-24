<?php
/*
Template name: Contact Message Us
*/

?>

<?php get_header() ?>

<section id="formSection" class="">
    <div class="container">
    <div class="row">
      <div class="col-md-9 center-block">
        <form id="demo-form" class="" role="form">
              <input type="hidden" name="form_type" value="demo_request" >
            
                <div class="form-group col-md-6">
					<label for="first_name">First Name <i class="required">*</i></label>
					<input type="text" id="first_name" name="first_name" class="form-control">
				</div>

				<div class="form-group col-md-6">
					<label for="last_name">Last Name <i class="required">*</i></label>
					<input type="text" id="last_name" name="last_name" class="form-control">
				</div> 
                
                <div class="form-group col-md-6">
					<label for="company">Phone Number <i class="required">*</i></label>
					<input type="text" id="phone" name="phone" class="form-control">
				</div>
            
                <div class="form-group col-md-6">
					<label for="email">Email <i class="required">*</i></label>
					<input type="email" id="email" name="email" class="form-control">
				</div>

				<div class="form-group col-md-6">
					<label for="title">Subject</label>
					<input type="text" id="subject" name="subject" class="form-control">
				</div>
            
               <div class="form-group col-md-6" id="selectMenu">
					<label for="title">Topic <i class="required">*</i></label>
                    <select name="topic" id="topic" class="form-control" data-size="15">
                        <option value="Make an appointment (cosmetic surgery)">Make an appointment (cosmetic surgery)</option>
                        <option value="Make an appointment (functional surgery)">Make an appointment (functional surgery)</option>
                        <option value="Make an appointment (skin care)">Make an appointment (skin care)</option>
                        <option value="Surgery information">Surgery information</option>
                        <option value="Billing / Insurance">Billing / Insurance</option>
                        <option value="Other">Other</option>
                    </select>
				</div>
                

				<div class="form-group col-md-12">
					<label for="name">Message</label>
					<textarea id="message" name="message" rows="6" class="form-control"></textarea>
				</div>
                
				
                <div class="col-md-6 formMessageWrap">
                    <div id="messages"></div>
                    <img src="<?php echo get_template_directory_uri(); ?>/includes/images/loader.gif" id="loader" alt="Loading..." width="32" height="32"/>
                </div>
            
                <div class="button-group col-md-6 text-right">
					<button type="submit" class="submitBtn">send message</button>					
				</div>
		</form>
      </div><!-- col -->
    </div><!-- row -->
                 </div>
             </section>
        
        

<?php get_footer() ?>

<!-- add page specific js here --> 
<script src="<?php echo get_template_directory_uri(); ?>/includes/resources/bootstrap/js/bootstrapValidator.min.js"></script>
<link href="<?php echo get_template_directory_uri(); ?>/includes/js-plugin/icheck/skins/minimal/minimal.css" rel="stylesheet">
<script src="<?php echo get_template_directory_uri(); ?>/includes/js-plugin/icheck/icheck.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/includes/js-plugin/jquery-selectboxit/javascripts/jquery.selectBoxIt.min.js"></script>
<link href="<?php echo get_template_directory_uri(); ?>/includes/js-plugin/jquery-selectboxit/stylesheets/jquery.selectBoxIt.css" rel="stylesheet">


<script>
    
jQuery(document).ready(function() {
    
     jQuery('input').iCheck({
    checkboxClass: 'icheckbox_minimal',
    radioClass: 'iradio_minimal',
    increaseArea: '20%' // optional
  });
    
    jQuery('#demo-form').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            first_name: {
                validators: {
                    notEmpty: {
                        message: 'The first name is required and cannot be empty'
                    }
                }
            },
            last_name: {
                validators: {
                    notEmpty: {
                        message: 'The last name is required and cannot be empty'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Please enter a valid phone number'
                    }
                }
            },
            topic: {
                validators: {
                    notEmpty: {
                        message: 'Please select a topic from the list'
                    }
                }
            }
        },
        submitHandler: function(validator, form, submitButton) {
            // Show loading image
			jQuery('#loader').show();

			// Submit data via AJAX
			jQuery.ajax({
				type: 'POST',
				url: '<?php echo get_template_directory_uri(); ?>/includes/contact_form.php',
				data: jQuery('#demo-form').serialize(),
				dataType: 'json',
				success: function( message ) {
					//createCaptcha();

					jQuery('#messages').append('<div class="alert alert-dissmisable alert-'+ message.type +'"><button type="button" id="formMessageClose" class="close">&times;</button> '+ message.content +'</div>').hide().fadeToggle('slow');
                    jQuery( "#formMessageClose" ).click(function() {
                       jQuery("#messages").hide();     // dismiss the dialog
                    });
				},
				error: function( data ) {
					//createCaptcha();

					jQuery('#messages').append('<div class="alert alert-danger"><button type="button" class="close" id="formMessageClose">&times;</button><strong>Error:</strong> There has been an unknown error, please let us know immediately. Thank you.</div>').hide().fadeToggle('slow');
                    jQuery( "#formMessageClose" ).click(function() {
                       jQuery("#messages").hide();     // dismiss the dialog
                    });
				}
			});

			// Hide loading image
			jQuery('#loader').hide();
        }
    });
});

 
</script>

</body>
</html>
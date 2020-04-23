
$(function() {

	$("#name_error_message").hide();
	$("#cname_error_message").hide();
	$("#license_error_message").hide();
	$("#password_error_message").hide();
	$("#cpassword_error_message").hide();
	$("#email_error_message").hide();
	$("#phone_error_message").hide();
	$("#picc_error_message").hide();
	$("#picc1_error_message").hide();
	$("#url_error_message").hide();
	$("#drop_error_message").hide();

	var error_name = false;
	var error_cname = false;
	var error_license = false;
	var error_password = false;
	var error_retype_password = false;
	var error_email = false;
	var error_phone = false;
	var error_picc = false;
	var error_picc1 = false;
	var error_drop = false;
	var error_url = false;
	//var error_address = false;
	var pattern =/^[a-zA-Z\s]*$/;
		
//first name
$("#name").focusout(function() {

		check_name();
		//alert("error");
		
	});

	$("#cname").focusout(function() {

		check_username();
		//alert("error");
		
	});
	
	//last name
	$("#clno").focusout(function() {

		check_lname();
		//alert("error");
		
	});
	//phone
	$("#contactno").focusout(function() {

		check_phone();
		//alert("err");
		
	});
	
	
	//email
	$("#email").focusout(function() {

		check_email();
		
	});
	
	//pass
	$("#password").focusout(function() {

		check_password();
		//alert("err");
	});
	
	//conf pass

	$("#cpassword").focusout(function() {

		check_retype_password();
		
	});
	//picture
	$("#picc").focusout(function() {

		check_picc();
		//alert("err");
		
	});
	$("#picc1").focusout(function() {

		check_picc1();
		//alert("err");
		
	});
	//firstname
	$("#taluk").focusout(function() {

		check_drop();
		//alert("err");
		
	});
	$("#url").focusout(function() {

		check_drop();
		//alert("err");
		
	});

	function check_name() {
		var name = $("#name").val();
		if(pattern.test(name) && name != '' )
		{
			
			$("#name_error_message").hide();
			//$("#name_error_message").html("Should be between 5-20 characters");
			//$("#name").css("border-bottum","2px solid #34f458");

		}
		else
		{
			$("#name_error_message").html("Enter valid name");
			$("#name_error_message").show();
			error_name = true;
			//$( "#FirstName" ).focus();
		}
}
	
	
	function check_username() {
		var namee = $("#cname").val();
		if(pattern.test(namee) && namee != '' )
		{
			
			$("#name_error_message").hide();
			//$("#name_error_message").html("Should be between 5-20 characters");
			//$("#name").css("border-bottum","2px solid #34f458");

		}
		else
		{
			$("#name_error_message").html("Enter valid  Agency name");
			$("#name_error_message").show();
			error_name = true;
			//$( "#FirstName" ).focus();
		}
}
	
		function check_lname() {
		var LastName = $("#clno").val();
		var patt = /^([L|U]{1})([0-9]{5})([A-Za-z]{2})([0-9]{4})([A-Za-z]{3})([0-9]{6})*$/;
		if(patt.test(LastName) && LastName != '')
		{
			
			$("#license_error_message").hide();
			//$("#name_error_message").html("Should be between 5-20 characters");
			//$("#name").css("border-bottum","2px solid #34f458");

		}
		else
		{
			$("#license_error_message").html("Enter valid ALN");
			$("#license_error_message").show();
			error_license = true;
			//$( "#LastName" ).focus();
		}
	}
	
	//phone
	
	function check_phone() {
		//var pattern = /([0-9]{10})|(\([0-9]{3}\)\s+[0-9]{3}\-[0-9]{4})/;
		//var patter = /^\(?(\d{3})\)?[-\. ]?(\d{3})[-\. ]?(\d{4})$/;
		var patter =/^(?!(\d)\1{9})(?!0123456789|1234567890|9000000000|800000000|700000000|600000000|500000000)\d{10}$/ ;
		var phone = $("#contactno").val();
		if(patter.test(phone) && phone != '')
		{
			
			$("#phone_error_message").hide();
			//$("#name_error_message").html("Should be between 5-20 characters");
			//$("#name").css("border-bottum","2px solid #34f458");

		}
		else
		{
			$("#phone_error_message").html("Enter valid phone number");
			$("#phone_error_message").show();
			error_phone = true;
			//$( "#Phone" ).focus();
		}
	}
	
	//last name
	
	
function check_email() {

			var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
		
			if(pattern.test($("#email").val())) 
			{
				//$("#email_error_message").hide();
			
			 $('#email').on('blur', function(){
	 	var email = $('#email').val();
	 	if (email == '') {
	 		error_email = true;
	 		return;
	 	}
	 	$.ajax({
	      url: 'checkemail.php',
	      type: 'post',
	      data: {
	      	'email_check' : 1,
	      	'email' : email,
	      },
	      success: function(response){
	      	if (response == 'taken' ) {
	          error_email = true;
	          $("#email_error_message").html("Email already exists");
				$("#email_error_message").show();
	          //$('#Email').parent().removeClass();
	          //$('#Email').parent().addClass("form_error");
	          //$('#Email').siblings("span").text('Sorry... Email already taken');
	      	}
	      	else if (response == 'not_taken') {
	      	  error_email = false;
	      	  $("#email_error_message").hide();
	      	}
	      }
	 	});
	 });
		} else {
				$("#email_error_message").html("Enter valid email ");
				$("#email_error_message").show();
				error_email = true;
				//$( "#Email" ).focus();
			}
}
function check_password() {
	
		var password_length = $("#password").val().length;
		
		if(password_length < 6) {
			$("#password_error_message").html("At least 6 characters");
			$("#password_error_message").show();
			error_password = true;
			//$( "#CreatePassword" ).focus();
		} else {
			$("#password_error_message").hide();
		}
	
	}

function check_retype_password() {
	
		var password = $("#password").val();
		var cpassword = $("#cpassword").val();
		
		if(password !=  cpassword) {
			$("#cpassword_error_message").html("Password don't match the above");
			$("#cpassword_error_message").show();
			error_retype_password = true;
			//$( "#CPassword" ).focus();
		} else {
			$("#cpassword_error_message").hide();
		}
	
}
function check_url() {
		var urll = $("#url").val();
		var patt = /[-a-zA-Z0-9@:%._\+~#=]{1,3}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()@:%_\+.~#?&//=]*)/;
		if(patt.test(urll) && urll != '')
		{
			
			$("#url_error_message").hide();
			//$("#name_error_message").html("Should be between 5-20 characters");
			//$("#name").css("border-bottum","2px solid #34f458");

		}
		else
		{
			$("#url_error_message").html("Enter valid URL");
			$("#url_error_message").show();
			error_url = true;
			//$( "#LastName" ).focus();
		}
	}


function check_picc() {
		(function($) {
$.fn.checkFileType = function(options) {  
        var defaults = {
            allowedExtensions: [],
            success: function() {},
            error: function() {}
        };
        options = $.extend(defaults, options);

        return this.each(function() {

            $(this).on('change', function() {
                var value = $(this).val(),
                    file = value.toLowerCase(),
                    extension = file.substring(file.lastIndexOf('.') + 1);

                if ($.inArray(extension, options.allowedExtensions) == -1) {
                    options.error();
                    $(this).focus();
                } else {
                    options.success();

                }

            });

        });
    };

})(jQuery);

$(function() {
    $('#picc').checkFileType({
        allowedExtensions: ['jpg', 'jpeg', 'png'],
        success: function() {
            //alert('Success');
            $("#picc_error_message").hide();
        },
        error: function() {
            //alert('Error');
            $("#picc_error_message").html("Enter picture with .jpg .jpeg .png format");
			$("#picc_error_message").show();
			error_picc = true;
        }
    });
		
	});
	}

	function check_picc1() {
		(function($) {
$.fn.checkFileType = function(options) {  
        var defaults = {
            allowedExtensions: [],
            success: function() {},
            error: function() {}
        };
        options = $.extend(defaults, options);

        return this.each(function() {

            $(this).on('change', function() {
                var value = $(this).val(),
                    file = value.toLowerCase(),
                    extension = file.substring(file.lastIndexOf('.') + 1);

                if ($.inArray(extension, options.allowedExtensions) == -1) {
                    options.error();
                    $(this).focus();
                } else {
                    options.success();

                }

            });

        });
    };

})(jQuery);

$(function() {
    $('#picc1').checkFileType({
        allowedExtensions: ['jpg', 'jpeg', 'png'],
        success: function() {
            //alert('Success');
            $("#picc1_error_message").hide();
        },
        error: function() {
            //alert('Error');
            $("#picc1_error_message").html("Enter picture with .jpg .jpeg .png format");
			$("#picc1_error_message").show();
			error_picc = true;
        }
    });
		
	});
	}
	function check_drop() {
		var name = $("#taluk").val();
		if(name != 'select')
		{
			
			$("#drop_error_message").hide();
			//$("#name_error_message").html("Should be between 5-20 characters");
			//$("#name").css("border-bottum","2px solid #34f458");

		}
		else
		{
			$("#drop_error_message").html("Enter valid option");
			$("#drop_error_message").show();
			error_drop = true;
			//$( "#FirstName" ).focus();
		}
}
	
$("#create_company").submit(function() {
		error_name = false;
		
		error_email = false;
		error_password =  false;
		error_retype_password = false;
		error_phone = false;
		error_picc = false;
		error_url = false;
		error_drop = false;
		check_username();
		check_picc();
		check_email();
		check_password();
		check_retype_password();
		check_phone();
		check_url();
		check_drop();
		if (error_name === false && error_password === false && error_retype_password === false && error_phone === false && error_email === false && error_picc === false && error_drop === false && error_url === false) 
		{
			alert("Registration successful");
			return true;

		}
		else
		{
			alert("Please fill the form correctly");
			return false;
		}	
	});
});

$(function() {

	$("#fullname_error_message").hide();
	$("#aadharname_error_message").hide();
	$("#password_error_message").hide();
	$("#cpassword_error_message").hide();
	$("#email_error_message").hide();
	$("#aadhar_error_message").hide();
	$("#picture_error_message").hide();
	$("#phone_error_message").hide();

	var error_fullname = false;
	var error_aadharname = false;
	var error_password = false;
	var error_retype_password = false;
	var error_email = false;
	var error_Aadhar = false;
	var error_picture = false;
	var error_phone = false;
	//var error_address = false;
	var pattern = /^[a-zA-Z]*$/;
		
//first name
	$("#cname").focusout(function() {

		check_fullname();
		//alert("error");
		
	});
	//last name
	$("#aadharname").focusout(function() {

		check_aadharname();
		//alert("error");
		
	});
		//aadhar
	$("#aadharno").focusout(function() {

		check_aadharno();
		//alert("err");
		
	});
	//picture
	$("#picture").focusout(function() {

		check_picture();
		//alert("err");
		
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
		
	});
	//conf pass

	$("#cpassword").focusout(function() {

		check_retype_password();
		
	});
	
	//firstname
function check_fullname() {
var name = $("#cname").val();
var pattern = new RegExp(/^(?=^.{0,40}$)^[a-zA-Z-]+\s[a-zA-Z-]+$/i);
if(name != '' && pattern.test(name))
{

$("#fullname_error_message").hide();
//$("#name_error_message").html("Should be between 5-20 characters");
//$("#name").css("border-bottum","2px solid #34f458");

}
else
{
$("#fullname_error_message").html("Enter valid name ");
$("#fullname_error_message").show();
error_fullname = true;
//$( "#FirstName" ).focus();
}
}

	//aadharname
function check_aadharname() {
var name = $("#aadharname").val();
var pattern = new RegExp(/^(?=^.{0,40}$)^[a-zA-Z-]+\s[a-zA-Z-]+$/i);
if(name != '' && pattern.test(name))
{

$("#aadharname_error_message").hide();
//$("#name_error_message").html("Should be between 5-20 characters");
//$("#name").css("border-bottum","2px solid #34f458");

}
else
{
$("#aadharname_error_message").html("Enter valid Aadhar Name ");
$("#aadharname_error_message").show();
error_aadharname = true;
//$( "#FirstName" ).focus();
}
}



	function check_email() {

		/*var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
	
		if(pattern.test($("#Email").val())) {
			$("#email_error_message").hide();
		} else {
			$("#email_error_message").html("Enter valid email ");
			$("#email_error_message").show();
			error_email = true;
			//$( "#Email" ).focus();
		}*/
		var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@(gmail)+\.[a-zA-Z]{2,4}$/i); 
	
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
			$("#email_error_message").html("Enter valid email without space");
			$("#email_error_message").show();
			error_email = true;
			//$( "#Email" ).focus();
		}
	
	
	}

		//last name
	function check_aadharno() {
		
		var patter = /^\d{4}\s\d{4}\s\d{4}$/;
		//var phone = $("#Phone").val();
		
		//var patter = /^(?!(\d)\1{9})(?!0123456789|1234567890|9000000000|9000000009|800000000|700000000|600000000|500000000)\d{10}$/ ;
		var Aadhar= $("#aadharno").val();

		if(patter.test(Aadhar) && Aadhar != '')
		{
			
			$("#aadhar_error_message").hide();
			//$("#name_error_message").html("Should be between 5-20 characters");
			//$("#name").css("border-bottum","2px solid #34f458");

		}
		else
		{
			$("#aadhar_error_message").html("Enter valid Aadhar number");
			$("#aadhar_error_message").show();
			error_Aadhar = true;
			//$( "#Phone" ).focus();
		}
	}
function check_picture() {
		

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
    $('#picture').checkFileType({
        allowedExtensions: ['pdf'],
        success: function() {
            //alert('Success');
            $("#picture_error_message").hide();
        },
        error: function() {
            //alert('Error');
            $("#picture_error_message").html("Enter valid picture");
			$("#picture_error_message").show();
			error_picture = true;
        }
    });
		
	});
}
	//last name
	function check_phone() {
		var patter = /^([789]\1{9})(?!0123456789|1234567890|9000000000|9000000009|800000000|700000000|600000000|500000000)\d{9}$/;
		//var patter = /^\(?(\d{3})\)?[-\. ]?(\d{3})[-\. ]?(\d{4})$/;
		//var phone = $("#Phone").val();
		
		//var patter = /^(?!(\d)\1{9})(?!0123456789|1234567890|9000000000|9000000009|800000000|700000000|600000000|500000000)\d{10}$/ ;
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
	$("#submit").submit(function() {
		error_fullname = false;
		error_aadharname = false;
		error_email = false;
		error_Aadhar = false;
		error_picture = false;
		error_password =  false;
		error_retype_password = false;
		error_phone = false;
		check_username();
		check_lname();
		check_email();
		check_aadhar();
		check_picture();
		check_password();
		check_retype_password();
		check_phone();
		if (error_fullname === false && error_aadharname === false && error_phone === false && error_Aadhar === false && error_picture === false && error_email === false && error_password === false && error_retype_password === false) {
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
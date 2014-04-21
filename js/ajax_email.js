// new method from http://stackoverflow.com/questions/5004233/jquery-ajax-post-example

var ajaxurl_defined = "../pages/email.php";
var request;

$(document).ready(function(){
	// bind to the submit event of our form
	$("#emailform").submit(function(event){
	
		// prevent default posting of form, if you want to
		 event.preventDefault();
	
		// abort any pending request
		if (request) {
			request.abort();
		}
		// setup some local variables
		var $form = $(this);
		// lets select and cache all the fields
		var $inputs = $form.find("input, select, button, textarea");
		// serialize the data in the form
		var serializedData = $form.serialize();

		// let's disable the inputs for the duration of the ajax request
		$inputs.prop("disabled", true);
	
		var valid = '';
		var isr = ' is required. ';
		var mail = $("#email").val();
		var name123 = $("#name").val();
		var subject = $("#subject").val();
		var text123 = $("#text").val();
		
		if (!mail.match(/^([a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,4}$)/i)) {
			valid += '<br />A valid Email'+isr;
		}
		if(name123 == "") {
			valid += '<br />Your name'+isr;
		}
		if(subject=="") {
			valid += '<br />A message subject'+isr;
		}
		if(text123=="") {
			valid += '<br />Please enter a message.';
		}
		if (valid!='') {
			event.preventDefault();
			$("#response").html("Error:"+valid);
			$("#response").css("background-color","#F88")
			$("#response").slideDown("slow");
			$inputs.prop("disabled", false);
			setTimeout('$("#response").slideUp("slow")',4000);
			$("#email").focus();
		} else {
			// fire off the request to /form.php
			var request = $.ajax({
				url: ajaxurl_defined,
				type: "post",
				data: serializedData,
				success: function(html_src){
					$("#response").css("background-color","#AFA");
					$("#response").slideDown("slow");
					$("#response").html(html_src);
					
				}
			});

				// callback handler that will be called on success
				request.done(function (response, textStatus, jqXHR){
					// log a message to the console and user feedback.
					console.log("Email successfully sent");
					$("#response").html("Email successfully sent! Thank you for writing to me :)");
					// setTimeout('$("#response").slideUp("slow");',4000);
				});

				// callback handler that will be called on failure
				request.fail(function (jqXHR, textStatus, errorThrown){
					// log the error to the console
					console.error(
						"The following error occured: "+
						textStatus, errorThrown
					);
					$("#response").html("An error occurred. Sorry! Please try again.");
					setTimeout('$("#response").slideUp("slow");',4000);
				});

				// callback handler that will be called regardless
				// if the request failed or succeeded
				request.always(function () {
					$("#response").html("Email successfully sent! Thank you for writing to Bake and Play!");
					$("#response").slideDown("slow");
					setTimeout('$("#response").slideUp("slow");',4000);
					
					// reenable the inputs
					$inputs.prop("disabled", false);
					
					// re-enable inputs after submit :)
					$inputs.prop("disabled", false);
					$("#email").val("");
					$("#name").val("");
					$("#subject").val("");
					$("#text").val("");
					$("#email").attr('placeholder',"Email Address: " + mail);
					$("#name").attr('placeholder',"Name: " + name123);
					$("#text").attr('placeholder',"Write to me again? :) Enter your message here.");
					$("#subject").attr('placeholder',"Subject: " + subject);
				});
			}
	});
});
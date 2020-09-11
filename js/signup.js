

// $("#Confirm_password").focus(function(){
//   $(".spang").show();
// });

// $("#Confirm_password").blur(function(){
// 	$(".spang").hide();
// });

// returns true if the form was valid; false otherwise.

// function validateForm() {

//     var allLetters = /^[a-zA-Z]+$/;
//     var letter = /[a-zA-Z]/;
//     var number = /[0-9]/;

//     var firstName = document.order_form.first_name.value;
//     var surname = document.order_form.surname.value;
//     var email = document.order_form.user_email.value;
//     var password = document.order_form.password.value;

//     var invalid = [];

//     if (!allLetters.test(firstName)) {
//         invalid.push("*First Name");
//     }

//     if (!allLetters.test(surname)) {
//         invalid.push("*Surname Name");
//     }

//     if (email.indexOf("@") < 1 || email.lastIndexOf(".") < email.indexOf("@") + 2 || email.lastIndexOf(".") + 2 >= email.length) {
//         invalid.push("*Email");
//     }

//     if (password.length < 4 || !letter.test(password) || !number.test(password)) {
//         invalid.push("*Password");
//     }

//     if (invalid.length != 0) {
//         alert("Please provide response: \n" + invalid.join("\n"));
//         return false;
//     }

//     return true;
// }


// var $password = $("#password");
// var $confirmPassword = $("#confirm_password");

//Hiding hints
// $("form span").hide();

// function passwordEvent(){
	// find out if password is valid
	// if ($password.val().length > 8) {
		//hinde hint if valid
		// $password.next().hide();
	// }else{
		//show hint
// 		$password.next().show();
// 	}
// };

// function confirmPasswordEvent() {
	// find out if password and confirm password match
	// if ($password.val() === $confirmPassword.val()) {
		// Hide hint if they match
	// 	$confirmPassword.next().hide();
	// }
	// else{
		// else show hint
// 		$confirmPassword.next().show();
// 	}
// }

//when event happens on password input
// $password.focus(passwordEvent).keyup(passwordEvent).focus(confirmPasswordEvent).keyup(confirmPasswordEvent);

//when event happens on confirmation password input
// $confirmPassword.focus(confirmPasswordEvent).keyup(confirmPasswordEvent);

//if with condition
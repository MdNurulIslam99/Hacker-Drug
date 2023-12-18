const username1 = document.querySelector('#username')
const email1 = document.querySelector('#email')
const phone1 = document.querySelector('#phone')
const password1 = document.querySelector('#password')
const confirmPassword1 = document.querySelector('#confirmpassword')

const form = document.querySelector('#signup')
console.log(form)
const checkusername=()=>
{
	let valid = false;
	const min = 5;
	const max = 20;

	const username = username1.value.trim();
	if (!isRequired(username))
	{
		showError(username1, 'Username cannot be blank.');
	}
	else if (!isBetween(username.length, min, max ))
	{
		showError(username1, `Username must be between ${min} and ${max} characters.`);
	}
	else
	{
		showSuccess(username1);
		valid= true;
	}
	return valid;

}

const checkemail=()=>
{
	let valid = false;


	const email = email1.value.trim();
	if (!isRequired(email))
	{
		showError(email1, 'Email cannot be blank.');
	}
	else if (!isEmailValid(email ))
	{
		showError(email1, 'Email is not valid.');
	}
	else
	{
		showSuccess(email1);
		valid= true;
	}
	return valid;

}

const checkpassword=()=>
{
	let valid = false;
	const password = password1.value.trim();
	if (!isRequired(password))
	{
		showError(password1, 'Password cannot be blank.');
	}
	else if (!isPasswordSecure(password))
	{
		showError(password1, 'Password must has at least 8 characters that includes at least 1 small letter, 1 capital letter, 1 special character.');
	}
	else
	{
		showSuccess(password1);
		valid= true;
	}
	return valid;

}

const checkconfirmpassword=()=>
{
	let valid = false;
	const password = password1.value.trim();
	const confirmpassword = confirmPassword1.value.trim();
	if (!isRequired(confirmpassword))
	{
		showError(confirmPassword1, 'Confirm password cannot be blank.');
	}
	else if (password !== confirmpassword)
	{
		showError(confirmPassword1, 'The password doesnot match.');
	}
	else
	{
		showSuccess(confirmPassword1);
		valid= true;
	}
	return valid;
}

const isRequired = value => value === ''? false:true;
const isBetween = (length, min, max) =>length < min || length > max ? false: true; 

const isEmailValid = (email) => {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
};

const isPasswordSecure = (password) => {
    const re = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
    return re.test(password);
};

const showError = (input, message) => {

	const formField = input.parentElement;
	formField.classList.remove('success')
	formField.classList.add('error')

	const error = formField.querySelector('small');
	error.textContent = message;

}

const showSuccess = (input) => {

	const formField = input.parentElement;
	formField.classList.remove('error')
	formField.classList.add('success')

	const error = formField.querySelector('small');
	error.textContent = '';
	
}

console.log(checkusername())

form.addEventListener('submit', function (e) {
	e.preventDefault();

	let isUsernameValid = checkusername();
	let isEmailValid = checkemail();

	let isPasswordValid = checkpassword();
	let isConfirmPasswordValid = checkconfirmpassword();

	let isFormValid = isUsernameValid && isEmailValid && isPasswordValid && isConfirmPasswordValid;

	if(isFormValid)
	{
		showSuccess(username1)
		showSuccess(email1)
		showSuccess(phone1)
		showSuccess(password1)
		showSuccess(confirmPassword1)

		document.querySelector('.first').innerHTML = username1.value;
		document.querySelector('.second').innerHTML = email1.value;
		alert("Successfully Registered. Welcome " + username1.value + " to our website.")
	}

})
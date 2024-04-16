function employeeReg(){

	if (ermReg.profile.value == "") 
	{
		Swal.fire({
               background: '#A70101',  
               color: '#fff', 
               icon: 'error',
               title: 'ERROR...',
               allowOutsideClick: false,
               allowEscapeKey:false,
               text: 'Required to Upload Your Profile Picture'       
             })
		ermReg.profile.focus();
		return false;
	}

   //end of profile picture

   if (ermReg.lname.value == "") 
	{
		Swal.fire({
               background: '#A70101',  
               color: '#fff', 
               icon: 'error',
               title: 'ERROR...',
               allowOutsideClick: false,
               allowEscapeKey:false,
               text: 'Sorry Required to write your Last Name'       
             })
		ermReg.lname.focus();
		return false;
	}

   //end of lastname

   if (ermReg.fname.value == "") 
	{
		Swal.fire({
               background: '#A70101',  
               color: '#fff', 
               icon: 'error',
               title: 'ERROR...',
               allowOutsideClick: false,
               allowEscapeKey:false,
               text: 'Sorry Required to write your First Name'       
             })
		ermReg.fname.focus();
		return false;
	}

   //end of first name

if (ermReg.userLog.value == "") 
	{
		Swal.fire({
               background: '#A70101',  
               color: '#fff', 
               icon: 'error',
               title: 'ERROR...',
               allowOutsideClick: false,
               allowEscapeKey:false,
               text: 'Sorry Required to write your Employee Number'       
             })
		ermReg.userLog.focus();
		return false;
	}

   //end of employee Number

   if (ermReg.email.value == "") 
	{
		Swal.fire({
               background: '#A70101',  
               color: '#fff', 
               icon: 'error',
               title: 'ERROR...',
               allowOutsideClick: false,
               allowEscapeKey:false,
               text: 'Sorry Required to write your Email Address'       
             })
		ermReg.email.focus();
		return false;
	}

   //end of employee email
   

	if (ermReg.password.value == "") 
	{
		Swal.fire({
               background: '#A70101',  
               color: '#fff', 
               icon: 'error',
               title: 'ERROR...',
               allowOutsideClick: false,
               allowEscapeKey:false,
               text: 'Sorry Required to insert your password'       
             })
		ermReg.password.focus();
		return false;
	}

   /*end of password*/


	if (ermReg.conpass.value == "")
	 {
		Swal.fire({
               background: '#A70101',  
               color: '#fff', 
               icon: 'error',
               title: 'ERROR...',
               allowOutsideClick: false,
               allowEscapeKey:false,
               text: 'Sorry Required to Confirm your Password'       
             })
		ermReg.conpass.focus();
		return false;
	}

	/*end of confirm password*/

	if ((ermReg.password.value).length < 8)
	 {
		Swal.fire({
               background: '#A70101',  
               color: '#fff', 
               icon: 'error',
               title: 'ERROR...',
               allowOutsideClick: false,
               allowEscapeKey:false,
               text: 'The Password Must be 8 and up Long'     
             })
		ermReg.password.focus();
		return false;
	}

	

	if (frmReg.password.value != frmReg.conpass.value)
	 {
		Swal.fire({
              background: '#A70101',  
               color: '#fff', 
               icon: 'error',
               title: 'ERROR...',
               allowOutsideClick: false,
               allowEscapeKey:false,
              text: 'Your Password Mismatched!'     
             })
		frmReg.password.value="";
		frmReg.conpass.value="";
		frmReg.password.focus();
		return false;
	}

	return true;

}
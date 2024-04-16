function valReg(){

	if (frmReg.lasname.value == "") 
	{
		Swal.fire({
               icon: 'error',
               title: 'error...',
               text: 'Required to insert your Last Name'       
             })
		frmReg.lasname.focus();
		return false;
	}

   //end of lastname

   if (frmReg.firstname.value == "") 
	{
		Swal.fire({
               icon: 'error',
               title: 'error...',
               text: 'Required to insert your First Name'       
             })
		frmReg.firstname.focus();
		return false;
	}

   //end of firstname


      if (frmReg.userLog.value == "") 
	{
		Swal.fire({
               icon: 'error',
               title: 'error...',
               text: 'Required to insert your Username'       
             })
		frmReg.userLog.focus();
		return false;
	}

   //end of username


      if (frmReg.contact.value == "") 
	{
		Swal.fire({
               icon: 'error',
               title: 'error...',
               text: 'Required to insert your Contact Number'       
             })
		frmReg.contact.focus();
		return false;
	}

   //end of contact


    if (frmReg.email.value == "") 
	{
		Swal.fire({
               icon: 'error',
               title: 'error...',
               text: 'Required to insert your Contact Number'       
             })
		frmReg.email.focus();
		return false;
	}

   //end of email
   
    if (frmReg.address.value == "") 
	{
		Swal.fire({
               icon: 'error',
               title: 'error...',
               text: 'Required to insert your Contact Number'       
             })
		frmReg.address.focus();
		return false;
	}

   //end of address


	if (frmReg.password.value == "") 
	{
		Swal.fire({
               icon: 'error',
               title: 'error...',
               text: 'Required to insert your password'       
             })
		frmReg.password.focus();
		return false;
	}

   /*end of password*/


	if (frmReg.conpass.value == "")
	 {
		Swal.fire({
               icon: 'error',
               title: 'error...',
               text: 'Required to Confirm your Password'       
             })
		frmReg.conpass.focus();
		return false;
	}

	/*end of confirm password*/

	if ((frmReg.password.value).length < 8)
	 {
		Swal.fire({
               icon: 'error',
               title: 'error...',
               text: 'The Password Must be 8 and up Long'     
             })
		frmReg.password.focus();
		return false;
	}

	

	if (frmReg.password.value != frmReg.conpass.value)
	 {
		Swal.fire({
              icon: 'error',
              title: 'error...',
              text: 'Your Password Mismatched!'     
             })
		frmReg.password.value="";
		frmReg.conpass.value="";
		frmReg.password.focus();
		return false;
	}

	return true;

}
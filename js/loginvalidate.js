	function valLog(){
		if (frmLog.userLog.value == "") {
			Swal.fire({
                background: '#A70101',  
               color: '#fff', 
               icon: 'error',
               title: 'ERROR...',
               allowOutsideClick: false,
               allowEscapeKey:false,
               text: 'Required to write Username'
                    
             })
			frmLog.userLog.focus();
			return false;
		}	
		

		if (frmLog.passLog.value == "") {
			Swal.fire({
               background: '#A70101',  
               color: '#fff', 
               icon: 'error',
               title: 'ERROR...',
               allowOutsideClick: false,
               allowEscapeKey:false,
               text: 'Required to write a the correct Password',       
             })
			frmLog.passLog.focus();
			return false;
		}

		return true;
	}
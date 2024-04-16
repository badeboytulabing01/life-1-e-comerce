	function ceoLog(){
		if (ceolog.userLog.value == "") {
			Swal.fire({
                background: '#A70101',  
               color: '#fff', 
               icon: 'error',
               title: 'ERROR...',
               allowOutsideClick: false,
               allowEscapeKey:false,
               text: 'Required to write Id number'
                    
             })
			ceolog.userLog.focus();
			return false;
		}	
		

		if (ceolog.password.value == "") {
			Swal.fire({
               background: '#A70101',  
               color: '#fff', 
               icon: 'error',
               title: 'ERROR...',
               allowOutsideClick: false,
               allowEscapeKey:false,
               text: 'Required to write a the correct Password',       
             })
			ceolog.password.focus();
			return false;
		}

		return true;
	}
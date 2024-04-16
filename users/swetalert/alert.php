<script>

	$(function() {
    $('#buy').click(function(e) {
      
            var valid = this.form.checkValidity();

            if (valid){
           var product_id    = $('#product_id').val();   
           var customer_id   = $('#customer_id').val();
           var customer_name = $('#customer_name').val();    
           var image         = $('#image').val(); 
           var price         = $('#price').val(); 
           var discount      = $('#discount').val();   
           var shipping      = $('#shipping').val();    
           var color         = $('#color').val();    
           var Size          = $('#Size').val();
           var address       = $('#address').val();  
           var contact_number= $('#contact_number').val();   
           var qty           = $('#qty').val(); 
           var product_name  = $('#product_name').val(); 
           var employee_id   = $('#employee_id').val(); 
           

           //sending data
              e.preventDefault();
              $.ajax({
                  type: 'POST',
                  url : 'buy_process.php',
                  data: {
                    product_id      :product_id,
                    customer_id     :customer_id,
                    customer_name   :customer_name,
                    image           :image,
                    price           :price,
                    discount        :discount,
                    shipping        :shipping,
                    color           :color,
                    Size            :Size,
                    address         :address,
                    contact_number  :contact_number,
                    qty             :qty,
                    product_name    :product_name,
                    employee_id     :employee_id
                    

                  },
                  success: function(data){
                      swal.fire({
                   icon : 'success',
                   title: "Succesfull", 
                   text : data, 
                   confirmButtonText: "Okay"
                   
                   })//end of sweetalert success
                   .then((result) => {
                     if (result.value) {
                     window.location = 'buy_now.php';
                     } 
                   })//nd of result
                  },//end of succes 
                  error: function(data){
                  Swal.fire({
                  icon  : 'error',
                  title : 'Oops...',
                  text  : 'Something went wrong!',
               })//end of swal fire
              }//end of error

             });//end of a.jax           
            }//end of if 
            else{        
           }//end of else  

        }); // $('#submitform').click(function(e) {    
  });//end of function script



    $(function() {
    $('#add_tocart').click(function(e) {
      
            var valid = this.form.checkValidity();

            if (valid){
           var product_id    = $('#product_id').val();   
           var customer_id   = $('#customer_id').val();
           var customer_name = $('#customer_name').val();    
           var image         = $('#image').val(); 
           var price         = $('#price').val(); 
           var discount      = $('#discount').val();   
           var shipping      = $('#shipping').val();    
           var color         = $('#color').val();    
           var Size          = $('#Size').val();
           var address       = $('#address').val();  
           var contact_number= $('#contact_number').val();   
           var qty           = $('#qty').val(); 
           var status           = $('#status').val(); 
           var product_name  = $('#product_name').val(); 
           var employee_id   = $('#employee_id').val(); 
           

           //sending data
              e.preventDefault();
              $.ajax({
                  type: 'POST',
                  url : 'addd_process.php',
                  data: {
                    product_id      :product_id,
                    customer_id     :customer_id,
                    customer_name   :customer_name,
                    image           :image,
                    price           :price,
                    discount        :discount,
                    shipping        :shipping,
                    color           :color,
                    Size            :Size,
                    address         :address,
                    contact_number  :contact_number,
                    qty             :qty,
                    product_name    :product_name,
                    employee_id     :employee_id,
                    status          :status

                    

                  },
                  success: function(data){
                      swal.fire({
                   icon : 'success',
                   title: "Succesfully Add to Cart", 
                   text : data, 
                   confirmButtonText: "Okay"
                   
                   })//end of sweetalert success
                   .then((result) => {
                     if (result.value) {
                     window.location = 'dashboard.php';
                     } 
                   })//nd of result
                  },//end of succes 
                  error: function(data){
                  Swal.fire({
                  icon  : 'error',
                  title : 'Oops...',
                  text  : 'Something went wrong!',
               })//end of swal fire
              }//end of error

             });//end of a.jax           
            }//end of if 
            else{        
           }//end of else  

        }); // $('#submitform').click(function(e) {    
  });//end of function script
</script>
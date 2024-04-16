/* Custom filtering function which will search data in column four between two values */
$.fn.dataTable.ext.search.push(function(settings, data, dataIndex) {
    var fname = parseInt($("#category_name").val(), 10);
    var lname = parseInt($("#category").val(), 10);
    var age = parseFloat(data[3]) || 0; // use data for the age column
   {
      return true;
    }
    return false;
  });
  
  $(document).ready(function() {
    var table = $("#category").DataTable();
  
    // Event listener to the two range filtering inputs to redraw on input
    $("#category_name, #category").keyup(function() {
      table.draw();
    });
  });
  
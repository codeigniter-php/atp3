$(document).ready(function(){
    //$('#configform')[0].reset();
    $('#configform').trigger("reset");
    $(function() {
                    $('#time').timepicker({
                    	'minTime': '8:00am',
                        'maxTime': '8:00pm',
                    });
                    $('#time1').timepicker({
                    	'minTime': '8:00am',
                        'maxTime': '11:00pm',
                    });
                });
    $('#myTable').dataTable({
        scrollX: 300,
        scrollY: 300,
        
    });
    $('#myTable1').dataTable({
        scrollX: 270,
        scrollY: 270,
        
    });

    $("#datepicker").datepicker({
      //dateFormat: "DD, MM d, yy"
       dateFormat:"yy-mm-dd"
     });
   

});


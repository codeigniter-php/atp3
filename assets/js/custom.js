$(document).ready(function(){
    //$('#configform')[0].reset();
    $('html,body').css('cursor','pointer');
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
        
        scrollY: 300,
        
    });

    $("#datepicker").datepicker({
      //dateFormat: "DD, MM d, yy"
       dateFormat:"yy-mm-dd"
     });
//Get data of table
$day="";
$room="";
var table = $('#myTable').DataTable();
 



$(".clickable").click(function(){
    $(this).css('color','red');
    $day=$(this).data("cell");
    $("[name='day_of_week']").val($day); 
});
$('#myTable tbody').on( 'click', 'tr', function () {
      $(this).unbind();
      var rowData = table.row( this ).data();
        
        
        $room=rowData[1];
        $("[name='room']").val($room);
        
});

$count=0;  
$(".clickableandDraggable").click(function(){
    
    $count += 1;
    

    $time1="";
    $(this).effect( "bounce", "slow" );
    $(this).css("color","blue");
    $value1=$(this).data("cell");
    
    if(typeof $value1 === 'number')
    {
       if($value1 % 1 === 0)
       { 

          $time1=$value1+8;
          $time1=$time1.toFixed(2);     

          
       } 
       else
       {
           $trim1=parseInt($value1);

           $time1=$trim1+8.30;
           $time1=$time1.toFixed(2);    
           
       }
    }
        
     if($time1<12)
     {  
        $time1=$time1.toString();
        $startTime=$time1.replace(".",":");
        if($count%2===0)
        {
          $("#time1").val($startTime.concat("am"));
        }
        else
        {
        $("#time").val($startTime.concat("am"));
       }
     }
     else
     {
        if($time1 % 1 === 0)
        {
            $time1=$time1-12;
            $time1=$time1.toFixed(2);
            if($time1==0)
            {
                $time1=12.00;
                $time1=$time1.toFixed(2);
            } 

        }
        else
        {
            $time1=parseInt($time1)-12;

            if($time1==0)
            {
                $time1=12.30;
                $time1=$time1.toFixed(2);
            } 
            else
            {
                $time1+=.30;
                $time1=$time1.toFixed(2);
            }
            
            
        }
        
        $time1=$time1.toString();
        $startTime=$time1.replace(".",":");
        if($count%2===0)
        {
          $("#time1").val($startTime.concat("pm"));
        }
        else
        {
        $("#time").val($startTime.concat("pm"));
       }

     }
    
   
    

});


});


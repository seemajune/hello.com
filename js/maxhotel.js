// $(".select").on('blur change click', function(){
//     function check($this){
//         if ($this.val() == 'something') return true;
//         return false;
//     }
//     $(this).toggleClass('error', check($(this)));
// })

$(function() {
/*
  $("#FORM").submit(function(e){
      e.preventDefault();

      if (valid) return;


      $.ajax({

      })

  })*/

  $(".booking-form").on('submit', function(e){
    e.preventDefault();
    
    var error = false;
    $("#datefrom, #dateto, #adults").each(function(i,v){
         if ( $(v).val() == 'Check In' || $(v).val() == 'Check Out' || isNaN(parseInt($(v).val())) ) error = true;
    });
    if (error) return $('.error-modal').addClass('open-modal');
      
      alert("SUCCESS!");
    // success, submit the form

    //http://api.jquery.com/jquery.post/
  });
    // close the modal, re-enable book button
    $('.error-button').on('click', function() {
      $('.error-modal').removeClass('open-modal');
    });
});


// $(function() {
//   $('.bookbutton').on('click', function(e){
//       var checkin = $('#datefrom').val();
//       // gets checkin date as string
//       var checkout = $('#dateto').val();
//       // gets checkout date as string
//       var adults = parseInt($('#adults').val());
//       // gets total number of adult guests as numeric value

//       if(checkin ==  "Check In" || checkout == "Check Out"){
//         //alert the user that they cannot proceed/submit form without filling out checkin or checkout dates. 
//         e.preventDefault();
//         alert("you must select valid checkin and checkout dates");
//       } 
//       if(isNaN(adults)){
//         // alert the user that they cannot proceed/submit form without filling # adults. 
//         e.preventDefault();
//        alert("please select # of adult guests");
//       }
//       //formulate date obj out of checkin and checkout strings:
//       var checkInDateAsDateObject = new Date(checkin);
//       var checkOutDateAsDateObject = new Date(checkout);
//       // get difference in numeric value (total nights)

//       var today = new Date();
//       //ensure the checkin date is before the checkout date

//       //ensure the checkin date is in the future as compared to current date
//       if(today > checkInDateAsDateObject || checkOutDateAsDateObject < checkInDateAsDateObject){
//         e.preventDefault();
//       alert("please select a valid checkin/checkout date");
//       }
//       else {
//         var nights = Math.floor((checkOutDateAsDateObject - checkInDateAsDateObject)/(1000*60*60*24));
//       }
      
//   });

// });
 

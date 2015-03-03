
$(function() {
  $(".booking-form").on('submit', function(e){
    e.preventDefault();

    var error = false;
    $("#datefrom, #dateto, #adults").each(function(i,v){
    // check if user selected dates and # adult guests
      if ( $(v).val() == 'Check In' || $(v).val() == 'Check Out' || isNaN(parseInt($(v).val())) ) error = true;
    });

    // get total nights when dates are valid
    var checkInDateAsDateObj = new Date($('#datefrom').val());
    var checkOutDateAsDateObj = new Date($('#dateto').val());
    var today = new Date();
    var nights = Math.floor((checkOutDateAsDateObj - checkInDateAsDateObj)/(1000*60*60*24));
    //check if dates are valid
    if( today > checkInDateAsDateObj || checkOutDateAsDateObj < checkInDateAsDateObj ) error = true;

    // show error modal if any above cases result in true error(s)
    if (error) {
      $('.error-modal').addClass('open-modal');
    
      // close the modal, re-enable booking button
      $('.error-button').on('click', function() {
        $('.error-modal').removeClass('open-modal');
       });

      return;
    }

    // on success, redirect to booking page, post data
    $.ajax({  
      type: $('.booking-form').attr('method'),  
      url: $('.booking-form').attr('action'),  
      data: $('.booking-form').serialize(),       
      success: function(){  
        window.location.href = '/booking2.html';
        alert();
          // $('#dates').text(results.book_date_from.data());
      }  
    });
  });
});



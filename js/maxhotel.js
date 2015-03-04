
$(function() {
  $("form").on('submit', function(e){
    var error = false;
    $("#datefrom, #dateto, #adults").each(function(i,v){
    // check if user selected dates and # adult guests
      if ( $(v).val() == 'Check In' || $(v).val() == 'Check Out' || isNaN(parseInt($(v).val())) ) error = true;
    });

    // get total nights when dates are valid
    var checkInDateAsDateObj = new Date($('#datefrom').val());
    var checkOutDateAsDateObj = new Date($('#dateto').val());
    var today = new Date();
    //check if dates are valid
    if( today > checkInDateAsDateObj || checkOutDateAsDateObj < checkInDateAsDateObj ) error = true;

    // show error modal if any above cases result in true error(s)
    if (error) {
      $('.error-modal').addClass('open-modal');
    
      // close the modal, re-enable booking button
      $('.error-button').on('click', function() {
        $('.error-modal').removeClass('open-modal');
      });
      e.preventDefault();
      return false;
    }
  });
  
  var checkInDate = new Date($('#from').text());
  var checkOutDate = new Date($('#to').text());
  var nights = Math.floor((checkOutDate - checkInDate)/(1000*60*60*24));

  if( $("#nights").length ) {
    $("#nights").text(nights);
  }
});



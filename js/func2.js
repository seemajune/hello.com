var nights = mmcore.GetCookie('staynights');
var from = mmcore.GetCookie('checkIn');
var to = mmcore.GetCookie('checkOut');
var guests = mmcore.GetCookie('guests');
var rtype = mmcore.GetCookie('roomtype');
var pricecost = mmcore.GetCookie('roomprice');
var total = pricecost * nights;
var dep = total * .15;




mmcore.AddDocLoadHandler(function() {
    $("#dates").html(from + ' - ' + to);
    $("#ppl").html(guests);
    $("#room").html(rtype);
    $("#cst").html('$' + pricecost);
    if(!isNaN(dep)) {
      $("#dep").html('$' + dep);
    } else {
      $("#dep").html('$0');
    }
    
    if(!isNaN(total)) {
      $("#tots").html('$' + total);
    } else {
      $("#tots").html('$0');
    }
    
    $("#nights").html(nights);
});
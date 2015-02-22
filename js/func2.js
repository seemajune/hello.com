var nights = mmcore.GetCookie('staynights');
var from = mmcore.GetCookie('checkIn');
var to = mmcore.GetCookie('checkOut');
var guests = mmcore.GetCookie('guests');
var rtype = mmcore.GetCookie('roomtype');
var pricecost = mmcore.GetCookie('roomprice');
var total = (pricecost * nights).toFixed(2);
var dep = (total * .15).toFixed(2);


// disable booking button if either check-in or checkout date has no input:



mmcore.AddDocLoadHandler(function() {
    $("#dates").html(from + ' - ' + to);
    $("#ppl").html(guests);
    $("#room").html(rtype);
    $("#cst").html('$' + pricecost);
    if(!isNaN(dep)) {
      if (dep > 999) {
        dep = Number(dep).toLocaleString('en');
      }
      $("#dep").html('$' + dep);
    } else {
      $("#dep").html('$0');
    }
    if(!isNaN(total)) {
      if (total > 999) {
        total = Number(total).toLocaleString('en');
      }
      $("#tots").html('$' + total);
    } else {
      $("#tots").html('$0');
    }
    $("#nights").html(nights);
});


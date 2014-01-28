var nights = mmcore.GetCookie('staynights');
var from = mmcore.GetCookie('checkIn');
var to = mmcore.GetCookie('checkOut');
var guests = mmcore.GetCookie('guests');


mmcore.AddDocLoadHandler(function() {
    $("#dates").html(from + ' - ' + to);
    $("#ppl").html(guests);
});

mmcore.AddDocLoadHandler(function() {
    $("#singleroom").on('submit', function(e) {
        var rmtype = 'SingleRoom';
        mmcore.SetCookie('roomtype', rmtype);
        var rmcost = "299";
        mmcore.SetCookie('roomprice', rmcost);
    });
    $("#doubleroom").on('submit', function(e) {
        var rmtype = "DoubleRoom";
        mmcore.SetCookie('roomtype', rmtype);
        var rmcost = "399";
        mmcore.SetCookie('roomprice', rmcost);
    });
    $("#delsuite").on('submit', function(e) {
        var rmtype = "DeluxeSuite";
        mmcore.SetCookie('roomtype', rmtype);
        var rmcost = "699";
        mmcore.SetCookie('roomprice', rmcost);
    });
    $("#supsuite").on('submit', function(e) {
        var rmtype = "SuperiorSuite";
        mmcore.SetCookie('roomtype', rmtype);
        var rmcost = '899';
        mmcore.SetCookie('roomprice', rmcost);
    });
});
var nights = mmcore.GetCookie('staynights');
var from = mmcore.GetCookie('checkIn');
var to = mmcore.GetCookie('checkOut');
var guests = mmcore.GetCookie('guests');

mmcore.AddDocLoadHandler(function() {
    $("#dates").html(from + ' - ' + to);
    $("#ppl").html(guests);
});

$("form").on('submit', function(e) {
    function createDate(d) {
        var year = parseInt(d.substring(6, 10), 10);
        var month = parseInt(d.substring(0, 2), 10);
        var day = parseInt(d.substring(3, 5), 10);
        var date = new Date(year, month - 1, day);

        return date;
    }

    function getDiff() {
        var d1 = $("#open_date_from").val();
        var d2 = $("#open_date_to").val();
        var date1 = createDate(d1);
        var date2 = createDate(d2);
        var aDay = 24 * 60 * 60 * 1000;
        var diff = Math.abs((date1.getTime() - date2.getTime()) / aDay);
        mmcore.SetCookie('staynights', diff);
    }
    $(function() {
        getDiff();
    });
    var datefrom = $('#open_date_from').val();
    mmcore.SetCookie('checkIn', datefrom);
    var dateto = $('#open_date_to').val();
    mmcore.SetCookie('checkOut', dateto);
    var dateto = $('#open_date_to').val();

    var rooms = $('#book_room').val();
    mmcore.SetCookie('rooms', rooms);
    var guestnumb = $('#book_room_adults').val();
    mmcore.SetCookie('guests', guestnumb);
});

$("form").on('submit', function(e) {
    var rmtype = $('#room').val();
    mmcore.SetCookie('roomtype', rmtype);
    var rmcost = $('#roomcost').val();
    mmcore.SetCookie('roomprice', rmcost);
});
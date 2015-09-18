var curr;
if (lang=="en") {curr = '$';} else {curr = 'RUB';}

$(function () {
    $('#dtm1').datetimepicker({
        locale: lang,
        viewMode: 'days',
        format: 'DD/MM/YYYY',
        minDate: moment(),
        useCurrent: false,
        icons: {
                    time: "fa fa-clock-o",
                    date: "fa fa-calendar",
                    up: "fa fa-arrow-up",
                    down: "fa fa-arrow-down",
                    previous: 'fa fa-arrow-left',
                    next: 'fa fa-arrow-right',
                    today: 'fa fa-calendar-o',
                    clear: 'fa fa-arrow-trash',
                    close: 'fa fa-arrow-remove'
                }
    });
    $('#dtm2').datetimepicker({
        locale: lang,
        viewMode: 'days',
        format: 'DD/MM/YYYY',
        minDate: moment(),
        useCurrent: false,
        icons: {
                    time: "fa fa-clock-o",
                    date: "fa fa-calendar",
                    up: "fa fa-arrow-up",
                    down: "fa fa-arrow-down",
                    previous: 'fa fa-arrow-left',
                    next: 'fa fa-arrow-right',
                    today: 'fa fa-calendar-o',
                    clear: 'fa fa-arrow-trash',
                    close: 'fa fa-arrow-remove'
                }
    });
    $("#dtm1").on("dp.change", function (e) {
        $('#dtm2').data("DateTimePicker").minDate(e.date);
    });
    $("#dtm2").on("dp.change", function (e) {
        $('#dtm1').data("DateTimePicker").maxDate(e.date);
    });

    $('#bron-href').click(function(){
        $('#bron').hide(200);
        $('#otmena').show(200);
    });
    $('#otmena-href').click(function(){
        $('#otmena').hide(200);
        $('#bron').show(200);
    });

    $('#bron-btn').click(function(){
        $.post(
          "/bron.php",
          {
            key: 'asdfagfh54w3rtg54tsert4s4s',
            startD: $("#bron-dfrom").val(),
            endD: $("#bron-dto").val(),
            adults: $("#bron-adults").val(),
            children: $("#bron-children").val(),
            curr: curr
          })
        .done(function(data) {
            window.open(data,'_blank');
        })
        .fail(function() {
            alert('Ошибка подключения.');
        });
    });
    $('#otmena-btn').click(function(){
        $.post(
          "/cancel_bron.php",
          {
            key: 'asdfagfh54w3rtg54tsert4s4s',
            code: $("#otmena-code").val(),
            email: $("#otmena-email").val()
          })
        .done(function(data) {
            alert(data);
        })
        .fail(function() {
            alert('Ошибка подключения.');
        });
    });
});

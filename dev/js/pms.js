$(function () {
    $('#dtm1').datetimepicker({
        locale: 'ru',
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
        locale: 'ru',
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
});


var __lcode__ = '705486';
var _openparams_ = '';
var _wbhostname_ = 'https://pmscloud.com' || false;
var __lang__ = 'ru';
var height = '0';

function WbDel() {
    $('#__wbor_reservation__').fadeOut(400, function () {
        $('#__wbor_cancel__').fadeIn(100);
        set_height();
    });
}

function WbRes() {
    $('#__wbor_cancel__').fadeOut(400, function () {
        $('#__wbor_reservation__').fadeIn(100);
        set_height();
    });
}

function WbMail() {
    $('#__wbor_reservation__').fadeOut(400, function () {
        $('#__wbor_mail__').fadeIn(100);
        set_height();
    });
}

function WbResFromMail() {
    $('#__wbor_mail__').fadeOut(400, function () {
        $('#__wbor_reservation__').fadeIn(100);
        set_height();
    });
}

function IsEmail(email) {
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

function WbCheckMessage() {
    var name = $('#sendmail-wbrname').val();
    var email = $('#sendmail-wbrmail').val();
    var subject = $('#sendmail-wbrsubject').val();
    var text = $('#sendmail-wbrrequest').val();
    var status = true;

    $('#sendmail-wbrname').removeClass('werror');
    $('#sendmail-wbrmail').removeClass('werror');
    $('#sendmail-wbrsubject').removeClass('werror');
    $('#sendmail-wbrrequest').removeClass('werror');

    if (name == '') {
        $('#sendmail-wbrname').addClass('werror');
        status = false;
    }

    if (email == '' || !IsEmail(email)) {
        $('#sendmail-wbrmail').addClass('werror');
        status = false;
    }

    if (subject == '') {
        $('#sendmail-wbrsubject').addClass('werror');
        status = false;
    }

    if (text == '') {
        $('#sendmail-wbrrequest').addClass('werror');
        status = false;
    }

    return status;
}

function WbSendMessage() {
    if (WbCheckMessage()) {
        $('#send-image-row').show();
        $('#send-button-row').hide();

        var par = {
            'cname': $('#sendmail-wbrname').val(),
            'email': $('#sendmail-wbrmail').val(),
            'subject': $('#sendmail-wbrsubject').val(),
            'text': $('#sendmail-wbrrequest').val()
        };

        function myCallback(error) {
            if (!error) {
                $('#send-image-row').hide();
                $('#sent-message-row').show();
                $('#send-button-row').hide();
            }
            else {
                $('#send-image-row').hide();
                $('#send-button-row').show();
                alert('An error occurred: ' + error);
            }
        }

        Pms.sendmail(par, myCallback);
    }
}

function WbCheckCancel() {
    var code = $('#cancel-wbrcode').val();
    var email = $('#cancel-wbrmail').val();
    var status = true;

    $('#cancel-wbrcode').removeClass('werror');
    $('#cancel-wbrmail').removeClass('werror');

    if (code == '') {
        $('#cancel-wbrcode').addClass('werror');
        status = false;
    }

    if (email == '' || !IsEmail(email)) {
        $('#cancel-wbrmail').addClass('werror');
        status = false;
    }

    return status;
}

function WbDelReservation() {
//    if (WbCheckCancel()) {
//        $('#cancel-image-row').show();
//        $('#cancel-button-row').hide();

    var par = {
        'rcode': $('#cancel-wbrcode').val(),
        'email': $('#cancel-wbrmail').val()
    };

    function myCallback(status) {
        if (status === 'success') {
            $('#cancel-image-row').hide();
            $('#cancel-message-row').show();
            $('#cancel-button-row').hide();
            alert("Your reservation has been cancelled successfully!")
        }
        else {
            $('#cancel-image-row').hide();
            $('#cancel-button-row').show();
            alert('An error occurred: ' + error);
        }
    }

    Pms.cancel(par, myCallback);
//    }
}

function lc() {
    Pms = new _Pms(__lcode__, true, _wbhostname_, false, false, _openparams_);
    $ = $ = Pms.$;
    var lang = Pms.$('#lang').val();
}

function wbopen(form) {
    try {
        var params = {
            'startD': Pms.$('#dfrom').val(),
            'endD': Pms.$('#dto').val(),
            'adults': Pms.$('#adults').val(),
            'children': Pms.$('#children').val(),
//            'nights': Pms.$('#nights').val(),
            'button': Pms.$('#button').val()
//            'layout': Pms.$('#layout').val()
        };

        var diff,
                sDate,
                eDate,
                currentDate = new Date();

        currentDate.setHours(0, 0, 0, 0);

        sDate = params.startD.split("/");
        sDate = new Date(sDate[2] + "/" + sDate[1] + "/" + sDate[0]);
        eDate = params.endD.split("/");
        eDate = new Date(eDate[2] + "/" + eDate[1] + "/" + eDate[0]);
        diff = Math.round((eDate.getTime() - sDate.getTime()) / 86400000);

//        currentDate = currentDate.getTime();

//        console.log(sDate);
//        console.log(currentDate);

        if (diff > 0 && sDate.getTime() >= currentDate) {
            Pms.open(params);
        } else {
            alert('Ошибка');
        }


        return false;
    }
    catch (e) {
        var fwind = window.open('https://pmscloud.com', 'fwind', 'height=600,width=1100,scrollbars=yes,toolbar=yes,location=1,resizable=1');
        fwind.focus();
        form.submit();
    }
}
function onlyNumbers(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    return  !(charCode > 31 && (charCode < 48 || charCode > 57))
            && evt.target.value != "0"
            && evt.target.value + String.fromCharCode(charCode) <= 99;
}
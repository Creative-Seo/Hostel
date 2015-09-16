<style>
    .ui-widget {
        font-family: 'Open Sans', sans-serif !important;
    }

    .formWrapper {
        padding: 30px;
        text-align: center;
        background-color: null;
    }

    .title {
        text-transform: uppercase;
        font-size: 16px;
        margin-top: 0;
    }

    .formWrapper input[type="text"].date-picker {
        padding: 10px;
        margin-top: 9px;
        width: 98%;
        color: #333333;
        font-size: 13px;
        border: 1px solid #163347;
        background: url(/img/calendar.jpg) no-repeat 96% #fff;
        cursor: pointer;
    }

    .formWrapper input[type="text"] {
        padding: 10px;
        margin-top: 9px;
        width: 98%;
        color: #333333;
        font-size: 13px;
        border: 1px solid #163347;
    }

    .formWrapper hr {
        background: url(/img/border2_03.png) no-repeat 50% 0;
        height: 2px;
        margin: 15px 0 10px;
        border: none;
    }

    button.submit, .submit {
        display: block;
        text-transform: uppercase;
        font-weight: 500;
        margin: 10px 0 10px;
        border: 1px solid #8DC961;
        outline: none;
        cursor: pointer;
        width: 100%;
        padding: 9px 0;
        color: #fff;
        font-size: 15px;
        background: rgb(160, 221, 115); /* Old browsers */
        background: -moz-linear-gradient(top, rgba(160, 221, 115, 1) 0%, rgba(119, 178, 77, 1) 100%); /* FF3.6+ */
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(160, 221, 115, 1)), color-stop(100%, rgba(119, 178, 77, 1))); /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(top, rgba(160, 221, 115, 1) 0%, rgba(119, 178, 77, 1) 100%); /* Chrome10+,Safari5.1+ */
        background: -o-linear-gradient(top, rgba(160, 221, 115, 1) 0%, rgba(119, 178, 77, 1) 100%); /* Opera 11.10+ */
        background: -ms-linear-gradient(top, rgba(160, 221, 115, 1) 0%, rgba(119, 178, 77, 1) 100%); /* IE10+ */
        background: linear-gradient(to bottom, rgba(160, 221, 115, 1) 0%, rgba(119, 178, 77, 1) 100%); /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#a0dd73', endColorstr='#77b24d', GradientType=0); /* IE6-9 */
    }

    .submit:hover, .submit:active, .submit:focus {
        border: 1px solid #8eca62;
        background: rgb(143, 202, 100); /* Old browsers */
        background: -moz-linear-gradient(top, rgba(143, 202, 100, 1) 0%, rgba(119, 178, 77, 1) 100%); /* FF3.6+ */
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(143, 202, 100, 1)), color-stop(100%, rgba(119, 178, 77, 1))); /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(top, rgba(143, 202, 100, 1) 0%, rgba(119, 178, 77, 1) 100%); /* Chrome10+,Safari5.1+ */
        background: -o-linear-gradient(top, rgba(143, 202, 100, 1) 0%, rgba(119, 178, 77, 1) 100%); /* Opera 11.10+ */
        background: -ms-linear-gradient(top, rgba(143, 202, 100, 1) 0%, rgba(119, 178, 77, 1) 100%); /* IE10+ */
        background: linear-gradient(to bottom, rgba(143, 202, 100, 1) 0%, rgba(119, 178, 77, 1) 100%); /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#8fca64', endColorstr='#77b24d', GradientType=0); /* IE6-9 */
    }

    #ui-datepicker-div {
        box-shadow: 0 0 9px rgba(204, 204, 204, 0.93);
        padding: 10px 25px 15px 25px;
        width: 320px;
    }

    .ui-datepicker-calendar thead tr {
        border-bottom: 1px solid #dfdfdf;
        border-top: 1px solid #dfdfdf;
        color: #d2ad68;
    }

    .ui-state-default {
        width: 32px;
        padding: 4px !important;
        border: 1px solid #ffffff;
        text-align: center !important;
    }

    .ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active {
        background: #d2ad68;
        border: 1px solid #d2ad68;
        text-align: center;
        width: 32px;
        padding: 4px;
    }

    .ui-widget-header {
        font-weight: 600;
    }

    .ui-state-hover, .ui-widget-content .ui-state-hover {
        border: 1px solid #d2ad68;
        width: 32px;
        padding: 4px;
    }

    .ui-datepicker th {
        padding: 0.4em 0.3em;
        font-weight: 600;
    }

    .ui-state-hover .ui-icon-circle-triangle-e {
        background: url(/img/design/right-circle-arrow.png) center no-repeat !important;
    }

    .ui-icon-circle-triangle-e {
        background: url(/img/design/right-arrow.gif) center no-repeat !important;
        margin-top: -20px !important;
        height: 31px;
        width: 31px;
    }

    .ui-state-hover .ui-icon-circle-triangle-w {
        background: url(/img/design/left-circle-arrow.png) center no-repeat !important;
    }

    .ui-icon-circle-triangle-w {
        background: url(/img/design/left-arrow.gif) center no-repeat !important;
        margin-top: -20px !important;
        height: 31px;
        width: 31px;
    }

    .ui-widget-header .ui-state-hover {
        border: none !important;
        background: #fff;
    }

    .ui-datepicker .ui-datepicker-next-hover {
        right: 2px !important;
        top: 2px !important;
    }

    .ui-datepicker .ui-datepicker-prev-hover {
        left: 2px !important;
        top: 3px !important;
    }

    .ui-widget-header .ui-state-disabled {
        background: #fff;
    }

    .bb-numberfield {
        width: 3em;
        color: #333333;
        padding-left: 5px;
    }
</style>


<script>

var __lcode__ = '705486';
var _openparams_ = '';
var _wbhostname_ = '' || false;
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

function set_width(w) {
    /*
     if ( window.parent ) {
     var frame_id = window.frameElement.attributes.id.value;
     parent.document.getElementById(frame_id).style.width = (parseInt(w.replace('px', ''))+12).toString()+'px';
     }
     */
    if (window.parent) {
        set_iframe_width(w);
    }
}

function set_height(h) {
    if (window.parent) {
        if (h || height == 0) {
//             set_iframe_height(h);
        }
    }
}

// var Pms, $, $ = null;

function lc() {
    Pms = new _Pms(__lcode__, true, _wbhostname_, false, false, _openparams_);
    $ = $ = Pms.$;
    var lang = Pms.$('#lang').val();

    if (lang == 'ru') {

        $(".date-picker").datepicker({
            inline: true,
            dateFormat: "dd/mm/yy",
            minDate: new Date(),
            firstDay: 1,
            dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
            monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
            onSelect: function (selectedDate, el) {
                if (el.id == 'dfrom') {
                    var minDate = selectedDate.split("/"),
                            maxDate = selectedDate.split("/");
                    minDate = new Date(minDate[2] * 1, minDate[1] * 1 - 1, minDate[0] * 1 + 1);
                    maxDate = new Date(maxDate[2] * 1, maxDate[1] * 1 - 1, maxDate[0] * 1 + 30);
                    Pms.$("#dto").datepicker("option", "minDate", minDate);
                    Pms.$("#dto").datepicker("option", "maxDate", maxDate);
                }
            },
            beforeShow: function (e, o) {
                try {
                    var w = WuBook.$('body').width();
                    //<![CDATA[
                    if (w < 350) {
                        set_width('350px');
                    }
                    if (height > 0 && height < 300) {
                        set_height(300);
                    }
                    //]]>
                }
                catch (e) {
                }
            },
            onClose: function (e, o) {
                try {
                    set_width('250px');
                    //<![CDATA[
                    if (height > 0) {
                        //]]>
                        set_height('0');
                        //<![CDATA[
                    }
                    //]]>
                }
                catch (e) {

                }
            }
        });
    } else {
        $(".date-picker").datepicker({
            inline: true,
            dateFormat: "dd/mm/yy",
            firstDay: 1,
            minDate: new Date(),
            dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
            monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
            onSelect: function (selectedDate, el) {
                if (el.id == 'dfrom') {
                    var minDate = selectedDate.split("/"),
                            maxDate = selectedDate.split("/");
                    minDate = new Date(minDate[2] * 1, minDate[1] * 1 - 1, minDate[0] * 1 + 1);
                    maxDate = new Date(maxDate[2] * 1, maxDate[1] * 1 - 1, maxDate[0] * 1 + 30);
                    Pms.$("#dto").datepicker("option", "minDate", minDate);
                    Pms.$("#dto").datepicker("option", "maxDate", maxDate);
                }
            },
            beforeShow: function (e, o) {
                try {
                    var w = Pms.$('body').width();
                    //<![CDATA[
                    if (w < 350) {
                        set_width('350px');
                    }
                    if (height > 0 && height < 300) {
                        set_height(300);
                    }
                    //]]>
                }
                catch (e) {
                    console.log('____ before show error ___ ' + e)
                }
            },
            onClose: function (e, o) {
                try {
                    set_width('250px');
                    //<![CDATA[
                    if (height > 0) {
                        //]]>
                        set_height('0');
                        //<![CDATA[
                    }
                    //]]>
                }
                catch (e) {
                }
            }
        });
    }

    if (height == 0) {
        set_height();
    }
}
;

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
        var fwind = window.open('', 'fwind', 'height=600,width=1100,scrollbars=yes,toolbar=yes,location=1,resizable=1');
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
</script>

<div class="formWrapper" onload="lc()">
    <div id="__wbor_reservation__">
        <form action="" onsubmit="wbopen(this);return false;" method="GET">
            <p class="title">Онлайн бронирование</p>
            <hr>
            <input type="hidden" name="hotelId" id="hotelId" value="705486">
            <input type="hidden" id="button" name="button" value="2195456">
            
            <input type="text" class="field date-picker" id="dfrom" value="" required name="startD" placeholder="Дата заезда">
            <input type="text" class="field date-picker" id="dto" value="" required name="endD" placeholder="Дата отъезда">

            <div style="padding-top: 10px">
                <label for="adults">Взрослые:&nbsp</label>
                <input type="number" min="1" max="99" class="field bb-numberfield" id="adults" value="2" required name="adults"
                       onkeypress="return onlyNumbers(event, 1)">
                <label for="children">Дети:&nbsp</label>
                <input type="number" min="0" max="99" class="field bb-numberfield" id="children" value="0" required name="children"
                       onkeyup="return onlyNumbers(event, 0)">
            </div>
            <hr>
            <input class="submit" type="submit" value=Забронировать>
        </form>
        <a href="javascript:void(0)" class="wb-link" onclick="WbDel()" id="cancel-link">Отменить бронирование</a>
    </div>
    <div style="display: none;" class="wb-content_block" id="__wbor_cancel__">
        <div class="wb-header" id="cancel-header">
            Отмена бронирования
        </div>

        <div class="wb-row" id="code-row">
            <input type="text" required placeholder="Код" id="cancel-wbrcode">
        </div>
        <div class="wb-row" id="mail-row">
            <input type="text" required placeholder="E-mail" id="cancel-wbrmail">
        </div>
        <div class="wb-button" id="cancel-button-row">
            <button type="submit" class="wb-submit submit" onclick="WbDelReservation()" id="cancel-button">Отменить бронирование</button>
        </div>
        <div style="display: none" class="wb-row" id="cancel-image-row">
            
        </div>
        <div style="display: none" class="wb-row" id="cancel-message-row">
            Ваше бронирование было отменено
        </div>
        <div class="wb-row" id="check-link-row">
            <a href="javascript:void(0)" class="wb-link" onclick="WbRes()" id="check-link">Цены и наличие</a>
        </div>

    </div>
</div>

<style>
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v13/DXI1ORHCpsQm3Vp6mXoaTa-j2U0lmluP9RWlSytm3ho.woff2) format('woff2');
  unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v13/DXI1ORHCpsQm3Vp6mXoaTZX5f-9o1vgP2EXwfjgl7AY.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v13/DXI1ORHCpsQm3Vp6mXoaTRWV49_lSm1NYrwo-zkhivY.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v13/DXI1ORHCpsQm3Vp6mXoaTaaRobkAwv3vxw3jMhVENGA.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v13/DXI1ORHCpsQm3Vp6mXoaTf8zf_FOSsgRmwsS7Aa9k2w.woff2) format('woff2');
  unicode-range: U+0102-0103, U+1EA0-1EF1, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v13/DXI1ORHCpsQm3Vp6mXoaTT0LW-43aMEzIO6XUTLjad8.woff2) format('woff2');
  unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v13/DXI1ORHCpsQm3Vp6mXoaTegdm0LZdjqr5-oayXSOefg.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans'), local('OpenSans'), url(https://fonts.gstatic.com/s/opensans/v13/K88pR3goAWT7BTt32Z01mxJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
  unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans'), local('OpenSans'), url(https://fonts.gstatic.com/s/opensans/v13/RjgO7rYTmqiVp7vzi-Q5URJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans'), local('OpenSans'), url(https://fonts.gstatic.com/s/opensans/v13/LWCjsQkB6EMdfHrEVqA1KRJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans'), local('OpenSans'), url(https://fonts.gstatic.com/s/opensans/v13/xozscpT2726on7jbcb_pAhJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans'), local('OpenSans'), url(https://fonts.gstatic.com/s/opensans/v13/59ZRklaO5bWGqF5A9baEERJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
  unicode-range: U+0102-0103, U+1EA0-1EF1, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans'), local('OpenSans'), url(https://fonts.gstatic.com/s/opensans/v13/u-WUoqrET9fUeobQW7jkRRJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
  unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans'), local('OpenSans'), url(https://fonts.gstatic.com/s/opensans/v13/cJZKeOuBrn4kERxqtaUH3VtXRa8TVwTICgirnJhmVJw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  src: local('Open Sans Semibold'), local('OpenSans-Semibold'), url(https://fonts.gstatic.com/s/opensans/v13/MTP_ySUJH_bn48VBG8sNSq-j2U0lmluP9RWlSytm3ho.woff2) format('woff2');
  unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  src: local('Open Sans Semibold'), local('OpenSans-Semibold'), url(https://fonts.gstatic.com/s/opensans/v13/MTP_ySUJH_bn48VBG8sNSpX5f-9o1vgP2EXwfjgl7AY.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  src: local('Open Sans Semibold'), local('OpenSans-Semibold'), url(https://fonts.gstatic.com/s/opensans/v13/MTP_ySUJH_bn48VBG8sNShWV49_lSm1NYrwo-zkhivY.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  src: local('Open Sans Semibold'), local('OpenSans-Semibold'), url(https://fonts.gstatic.com/s/opensans/v13/MTP_ySUJH_bn48VBG8sNSqaRobkAwv3vxw3jMhVENGA.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  src: local('Open Sans Semibold'), local('OpenSans-Semibold'), url(https://fonts.gstatic.com/s/opensans/v13/MTP_ySUJH_bn48VBG8sNSv8zf_FOSsgRmwsS7Aa9k2w.woff2) format('woff2');
  unicode-range: U+0102-0103, U+1EA0-1EF1, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  src: local('Open Sans Semibold'), local('OpenSans-Semibold'), url(https://fonts.gstatic.com/s/opensans/v13/MTP_ySUJH_bn48VBG8sNSj0LW-43aMEzIO6XUTLjad8.woff2) format('woff2');
  unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  src: local('Open Sans Semibold'), local('OpenSans-Semibold'), url(https://fonts.gstatic.com/s/opensans/v13/MTP_ySUJH_bn48VBG8sNSugdm0LZdjqr5-oayXSOefg.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v13/k3k702ZOKiLJc3WVjuplzK-j2U0lmluP9RWlSytm3ho.woff2) format('woff2');
  unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v13/k3k702ZOKiLJc3WVjuplzJX5f-9o1vgP2EXwfjgl7AY.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v13/k3k702ZOKiLJc3WVjuplzBWV49_lSm1NYrwo-zkhivY.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v13/k3k702ZOKiLJc3WVjuplzKaRobkAwv3vxw3jMhVENGA.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v13/k3k702ZOKiLJc3WVjuplzP8zf_FOSsgRmwsS7Aa9k2w.woff2) format('woff2');
  unicode-range: U+0102-0103, U+1EA0-1EF1, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v13/k3k702ZOKiLJc3WVjuplzD0LW-43aMEzIO6XUTLjad8.woff2) format('woff2');
  unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v13/k3k702ZOKiLJc3WVjuplzOgdm0LZdjqr5-oayXSOefg.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  src: local('Open Sans Light Italic'), local('OpenSansLight-Italic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxhgVThLs8Y7ETJzDCYFCSLE.woff2) format('woff2');
  unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  src: local('Open Sans Light Italic'), local('OpenSansLight-Italic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxpiMaisvaUVUsYyVzOmndek.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  src: local('Open Sans Light Italic'), local('OpenSansLight-Italic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxrBAWGjcah5Ky0jbCgIwDB8.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  src: local('Open Sans Light Italic'), local('OpenSansLight-Italic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxv14vlcfyPYlAcQy2UfDRm4.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  src: local('Open Sans Light Italic'), local('OpenSansLight-Italic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxqfJul7RR1X4poJgi27uS4w.woff2) format('woff2');
  unicode-range: U+0102-0103, U+1EA0-1EF1, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  src: local('Open Sans Light Italic'), local('OpenSansLight-Italic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxqvyPXdneeGd26m9EmFSSWg.woff2) format('woff2');
  unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  src: local('Open Sans Light Italic'), local('OpenSansLight-Italic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxko2lTMeWA_kmIyWrkNCwPc.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v13/xjAJXh38I15wypJXxuGMBjTOQ_MqJVwkKsUn0wKzc2I.woff2) format('woff2');
  unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v13/xjAJXh38I15wypJXxuGMBjUj_cnvWIuuBMVgbX098Mw.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v13/xjAJXh38I15wypJXxuGMBkbcKLIaa1LC45dFaAfauRA.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v13/xjAJXh38I15wypJXxuGMBmo_sUJ8uO4YLWRInS22T3Y.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v13/xjAJXh38I15wypJXxuGMBr6up8jxqWt8HVA3mDhkV_0.woff2) format('woff2');
  unicode-range: U+0102-0103, U+1EA0-1EF1, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v13/xjAJXh38I15wypJXxuGMBiYE0-AqJ3nfInTTiDXDjU4.woff2) format('woff2');
  unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://fonts.gstatic.com/s/opensans/v13/xjAJXh38I15wypJXxuGMBo4P5ICox8Kq3LLUNMylGO4.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 600;
  src: local('Open Sans Semibold Italic'), local('OpenSans-SemiboldItalic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxmgpAmOCqD37_tyH_8Ri5MM.woff2) format('woff2');
  unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 600;
  src: local('Open Sans Semibold Italic'), local('OpenSans-SemiboldItalic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxsPNMTLbnS9uQzHQlYieHUU.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 600;
  src: local('Open Sans Semibold Italic'), local('OpenSans-SemiboldItalic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxgyhumQnPMBCoGYhRaNxyyY.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 600;
  src: local('Open Sans Semibold Italic'), local('OpenSans-SemiboldItalic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxhUVAXEdVvYDDqrz3aeR0Yc.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 600;
  src: local('Open Sans Semibold Italic'), local('OpenSans-SemiboldItalic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxlf4y_3s5bcYyyLIFUSWYUU.woff2) format('woff2');
  unicode-range: U+0102-0103, U+1EA0-1EF1, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 600;
  src: local('Open Sans Semibold Italic'), local('OpenSans-SemiboldItalic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxnywqdtBbUHn3VPgzuFrCy8.woff2) format('woff2');
  unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 600;
  src: local('Open Sans Semibold Italic'), local('OpenSans-SemiboldItalic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxl2umOyRU7PgRiv8DXcgJjk.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxp6iIh_FvlUHQwED9Yt5Kbw.woff2) format('woff2');
  unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxi_vZmeiCMnoWNN9rHBYaTc.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxiFaMxiho_5XQnyRZzQsrZs.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxgalQocB-__pDVGhF3uS2Ks.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxmhQUTDJGru-0vvUpABgH8I.woff2) format('woff2');
  unicode-range: U+0102-0103, U+1EA0-1EF1, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxujkDdvhIIFj_YMdgqpnSB0.woff2) format('woff2');
  unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://fonts.gstatic.com/s/opensans/v13/PRmiXeptR36kaC0GEAetxolIZu-HDpmDIZMigmsroc4.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;
}

</style>
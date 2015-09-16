var _Pms = (function (lcode, noIsolation, hostname, currency, origin, openParams) {

    (function (e, t) {

    })(window);

//    if (noIsolation) $ = $ = window.$;
//    else $ = $ = window.$.noConflict(true);


    function pms_height() {
        var _wbheight = screen.height - 120;
        return _wbheight;
    }


    function imInsideIframe() {
        if (window.self === window.top) return false;
        return true;
    }

    function pms_url(lcode, params, hostname, segs) {

        var segs = segs && segs + '?hotelId=' || '/button#/?hotelId=';

        var protocol = window.location.host.indexOf('localhost') > -1 ? 'http://' : window.location.host.indexOf('88.198.41.177') > -1 ? 'http://' : 'https://',
            _wburl = protocol + window.location.host + '/app' + segs + (lcode || 1213394817);

//        if (window.location.host == 'localhost:8443') {
//            var _wburl = (hostname || 'https://localhost:8443/app/') + segs + (lcode || 1213394817);
//        } else if (window.location.host == 'localhost:8080') {
//            var _wburl = (hostname || 'https://localhost:8080/app/') + segs + (lcode || 1213394817);
//        }
//        else if (window.location.host == 'pmscloud.com') {
//            var _wburl = (hostname || 'https://pmscloud.com/app') + segs + (lcode || 1213394817);
//        }else if (window.location.host == 'lodgewarecloud.com') {
//            var _wburl = (hostname || 'https://lodgewarecloud.com/app') + segs + (lcode || 1213394817);
//        } else if (window.location.host == '88.198.41.177:8081') {
//            var _wburl = (hostname || 'http://88.198.41.177:8081/app') + segs + (lcode || 1213394817);
//        }


        function _pms_add_param(pname, check) {
            if (!check || params[pname]) _wburl += '&' + pname + '=' + params[pname];
        }

//        console.log(params);

        var _ifparams = ['startD', 'endD', 'adults', 'children', 'layout', 'sessionSeed', 'dcode', 'eurota', 'lang', 'button', 'onlyrooms', 'nights', 'pid'];
        for (var k in _ifparams) {
            _pms_add_param(_ifparams[k], true);
        }
        try {
            if (imInsideIframe()) var refer = document.referrer;
            else var refer = document.URL;
            _wburl += '&creferrer=' + refer;
        } catch (e) {
            try {
                console.log(e);
            } catch (e) {
            }
            ;
        }

//        console.log(_wburl);
        return _wburl;
    }

    function pms_opts(h) {
        var _opts = 'height=' + h + ',width=1100,scrollbars=yes,toolbar=yes,location=1,resizable=1';
        return _opts;
    }

    function parseQueryString() {
        var str = window.location.search;
        var objURL = {};
        str.replace(new RegExp("([^?=&]+)(=([^&]*))?", "g"), function ($0, $1, $2, $3) {
            objURL[$1] = $3;
        });
        return objURL;
    }

    function wubook_put_google(url) {
        return "";
        // try {
        //     try {
        //         var _wbgat = _gat;
        //     } catch (e) {
        //         var _wbgat = parent._gat;
        //     }
        //     var pt = _wbgat._getTrackerByName();
        //     pt._setDomainName('none');
        //     pt._setAllowLinker(true);
        //     var url = pt._getLinkerUrl(url);
        // } catch (e) {
        //     try {
        //         console.log('Unable to wubook_put_google: ' + e);
        //     } catch (ee) {}
        // };
        // return url;
    }

    function getCookie(c_name) {
        var c_value = document.cookie;
        var c_start = c_value.indexOf(" " + c_name + "=");
        if (c_start == -1) c_start = c_value.indexOf(c_name + "=");
        if (c_start == -1) c_value = null;
        else {
            c_start = c_value.indexOf("=", c_start) + 1;
            var c_end = c_value.indexOf(";", c_start);
            if (c_end == -1) c_end = c_value.length;
            c_value = unescape(c_value.substring(c_start, c_end));
        }
        return c_value;
    }

    function pms_window(url, name, opts) {
        var wbwin = window.open(url, name, opts);
        if (window.focus) try {
            wbwin.focus();
        } catch (e) {
        }
    }

    function pmscloud(lcode, params, hostname, segs) {
        var jparams = params || {};
//        console.log(jparams)
        var wburl = pms_url(lcode, jparams, hostname, segs);
        var height = pms_height();
        var opts = pms_opts(height);
        var _opener = function (u) {
            pms_window(u, 'OnlineReception', opts);
        };
//         console.log(wburl);
//        return;
        return _opener(wburl);
//        return _opener(wubook_put_google(wburl));
    }

    function setCookie(c_name, value, exdays) {
        var exdate = new Date();
        exdate.setDate(exdate.getDate() + exdays);
        var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString());
        document.cookie = c_name + "=" + c_value;
    }

    function loadAnalytics() {

    }

    "use strict";
    $.base64 = (function ($) {
        var _PADCHAR = "=",
            _ALPHA = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/",
            _VERSION = "1.0";

        function _getbyte64(s, i) {
            var idx = _ALPHA.indexOf(s.charAt(i));
            if (idx === -1) throw "Cannot decode base64";
            return idx;
        }

        function _decode(s) {
            var pads = 0,
                i, b10, imax = s.length,
                x = [];
            s = String(s);
            if (imax === 0) return s;
            if (imax % 4 !== 0) throw "Cannot decode base64";
            if (s.charAt(imax - 1) === _PADCHAR) {
                pads = 1;
                if (s.charAt(imax - 2) === _PADCHAR) pads = 2;
                imax -= 4;
            }
            for (i = 0; i < imax; i += 4) {
                b10 = (_getbyte64(s, i) << 18) | (_getbyte64(s, i + 1) << 12) | (_getbyte64(s, i + 2) << 6) | _getbyte64(s, i + 3);
                x.push(String.fromCharCode(b10 >> 16, (b10 >> 8) & 0xff, b10 & 0xff));
            }
            switch (pads) {
                case 1:
                    b10 = (_getbyte64(s, i) << 18) | (_getbyte64(s, i + 1) << 12) | (_getbyte64(s, i + 2) << 6);
                    x.push(String.fromCharCode(b10 >> 16, (b10 >> 8) & 0xff));
                    break;
                case 2:
                    b10 = (_getbyte64(s, i) << 18) | (_getbyte64(s, i + 1) << 12);
                    x.push(String.fromCharCode(b10 >> 16));
                    break;
            }
            return x.join("");
        }

//        var self = this;
//        function _getbyte(s, i) {
//            var x = s.charCodeAt(i);
//            if (x > 255) throw "INVALID_CHARACTER_ERR: DOM Exception 5";
//            return x;
//        }
//
        function _encode(s) {
//            if (arguments.length !== 1) throw "SyntaxError: exactly one argument required";
//            s = String(s);
//            var i, b10, x = [],
//                imax = s.length - s.length % 3;
//            if (s.length === 0) return s;
//            for (i = 0; i < imax; i += 3) {
//                b10 = (_getbyte(s, i) << 16) | (_getbyte(s, i + 1) << 8) | _getbyte(s, i + 2);
//                x.push(_ALPHA.charAt(b10 >> 18));
//                x.push(_ALPHA.charAt((b10 >> 12) & 0x3F));
//                x.push(_ALPHA.charAt((b10 >> 6) & 0x3f));
//                x.push(_ALPHA.charAt(b10 & 0x3f));
//            }
//            switch (s.length - imax) { 7172

//                case 1:
//                    b10 = _getbyte(s, i) << 16;
//                    x.push(_ALPHA.charAt(b10 >> 18) + _ALPHA.charAt((b10 >> 12) & 0x3F) + _PADCHAR + _PADCHAR);
//                    break;
//                case 2:
//                    b10 = (_getbyte(s, i) << 16) | (_getbyte(s, i + 1) << 8);
//                    x.push(_ALPHA.charAt(b10 >> 18) + _ALPHA.charAt((b10 >> 12) & 0x3F) + _ALPHA.charAt((b10 >> 6) & 0x3f) + _PADCHAR);
//                    break;
//            }
//            return x.join("");
        }

        return {
            decode: _decode,
            encode: _encode,
            VERSION: _VERSION
        };
    }($));


    function initCalendar() {

    }

    function wbdelreservation(params, cback) {
        var o = {
            'lcode': params.lcode,
            'email': params.email,
            'rcode': params.rcode,
            'lang': params.lang || 'en'
        };
        var odump = JSON.stringify(o);
//        console.log(odump);

        $.ajax({
            url: 'api/bookings/' + params.rcode + '/refused?email=' + params.email + '&hotelId=' + params.lcode,
//            params: odump,
            contentType: "application/json; charset=utf-8",
            type: 'POST',
            error: function () {
//                alert('error');
                cback('error');
            },
            success: function () {
                cback('success')
            }
        })
//        var buf = $.base64.encode(odump);
//        var buf = (Math.floor(Math.random() * 9999) + 1000) + buf + (Math.floor(Math.random() * 9999) + 1000);
//        var h = (params.hostname || 'https://wubook.net') + '/wbkd/delres?buf=' + buf + '&l=' + (Math.floor(Math.random() * 9999) + 1000);
//
//        $.getScript(h, function (data, textStatus, jqxhr) {
//            try {
//                cback(wb_deletion_error);
//            } catch (e) {
//                alert('Cancellation: ' + (wb_deletion_error || 'Operation Done!'));
//            };
//        });
    }

    function decode_utf8(s) {
        return decodeURIComponent(escape(s));
    }

    function pmsDesignWidget(id, params, plain, callback) {
        var plain = plain || false;
//        console.log(params);
        params.height = (params.height && params.height == 'auto') ? 0 : params.height;
        var element = window.document.getElementById(id);
        if (element == null) return false;

        var winDocument = window.document;

        var divFrame = winDocument.createElement('div'),
            options = {
                style: "clear:both; overflow: visible; position: relative; z-index: 1"
            }, item;

        for (item in options) divFrame.setAttribute(item, options[item]);

        element.setAttribute('style', 'text-align: center; width: ' + parseInt(params.width) + 'px');

        $(element).prepend(divFrame);

        var frame = winDocument.createElement("iframe"),
            options = {
                id: "__pmsframe__" + id,
                name: "__pmsframe__" + id,
                style: "z-index: 1; height: " + params.height + "px;",
                frameBorder: 0,
                border: 0,
                allowTransparency: "yes",
                width: parseInt(params.width) + 12,
                height: params.height,
                scrolling: "no"
            }, item;

        for (item in options) frame.setAttribute(item, options[item]);

        divFrame.appendChild(frame);

        var url_string = $.param(params);

        var hostname = params.hostname || 'https://localhost:8443/app/form';

        var extension = 'js';
        var src = hostname + '?' + url_string;

        var i = frame.document;
        frame.contentDocument ? i = frame.contentDocument : frame.contentWindow && (i = frame.contentWindow.document);

        frame.src = src;
    }

    var PmsObject = function (lcode) {
        var self = this;


        self.$ = $;
        self.lcode = lcode ? lcode : 'test1';

        self.open = function (params, segs) {
            if (self.openParams) try {
                var addparams = JSON.parse(self.openParams);
                for (var k in addparams) params[k] = addparams[k];
            } catch (e) {
                try {
                    console.log('openParams: ' + e);
                } catch (ee) {
                }
//                ;
            }
            var segs = segs || '';
//            console.log(params);
            pmscloud(self.lcode, params || {}, self.hostname, segs);
        };

        self._design_widget = function (element, params, callback) {
            pmsDesignWidget(element, params, false, callback);
        };

        self.cancel = function (params, cback) {
            params.hostname = self.hostname;
            params.lcode = self.lcode;
            wbdelreservation(params, cback);
        };

        self.try_and_alert = function (func) {
            try {
                func();
            } catch (error) {
                try {
                    console.log(error);
                } catch (ee) {
                    console.log(ee);
                }
                ;
                console.info('Sorry, some error occurred. Please, make sure to correctly use the Pms Library. Contact us if you need support at http://pmscloud.com/');
            }
        };

        self.widget = function (element, params, callback) {
            return self.try_and_alert(function () {
                self._design_widget(element, params, callback);
            });
        };
    };

    var Pms = new PmsObject(lcode);
    return Pms;
});
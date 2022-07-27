(function ($) {
    "use strict"; $('.input100').each(function () {
        $(this).on('blur', function () {
            if ($(this).val().trim() != "") { $(this).addClass('has-val'); }
            else { $(this).removeClass('has-val'); }
        })
    })
    var input = $('.validate-input .input100'); $('.validate-form').on('submit', function () {
        var check = true; for (var i = 0; i < input.length; i++) { if (validate(input[i]) == false) { showValidate(input[i]); check = false; } }
        return check;
    }); $('.validate-form .input100').each(function () { $(this).focus(function () { hideValidate(this); }); }); function validate(input) {
        if ($(input).attr('type') == 'email' || $(input).attr('name') == 'email') { if ($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) { return false; } }
        else { if ($(input).val().trim() == '') { return false; } }
    }
    function showValidate(input) { var thisAlert = $(input).parent(); $(thisAlert).addClass('alert-validate'); }
    function hideValidate(input) { var thisAlert = $(input).parent(); $(thisAlert).removeClass('alert-validate'); }
    var showPass = 0; $('.btn-show-pass').on('click', function () {
        if (showPass == 0) { $(this).next('input').attr('type', 'text'); $(this).addClass('active'); showPass = 1; }
        else { $(this).next('input').attr('type', 'password'); $(this).removeClass('active'); showPass = 0; }
    });
})

$(function () {
    var menu_width = 290;
    var menu = $(".menu");
    var menu_open = $(".menu-open");
    var menu_close = $(".menu-close");
    var overlay = $(".overlay");
   
    menu_open.click(function (e) {
      e.preventDefault();
      menu.css({"left": "0px"});
      overlay.css({"opacity": "1", "width": "100%"});
    });
    
    menu_close.click(function (e) {
      e.preventDefault();
      menu.css({"left": "-" + menu_width + "px"});
      overlay.css({"opacity": "0", "width": "0"});
    });
   });

$(function () {
    var show_row = $(".show-category");
    var no_show_row = $(".no-show-row");

    show_row.click(function (e) {
        e.preventDefault();
        $(this).children(".show-row").css({"display": "block"});
        $(this).children(".nova_categoria").css({"display": "none"});
        $(this).children(".zmdi.zmdi-notifications-add").css({"display": "none"});
      });      
    /*no_show_row.click(function (e) {
        e.preventDefault();
        menu.css({"display": "none"});
      });*/
      
   });
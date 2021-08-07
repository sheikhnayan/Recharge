(function($){

    // menu handling
    $(document).on('click', '.nav-item', function() {
        $('body .nav-item').removeClass('menu-is-opening').removeClass('menu-open');  
        $('body .nav-item .nav-treeview').hide();  
        $(this).addClass('menu-is-opening').addClass('menu-open');  
        $(this).find('.nav-treeview').show();
    });


    // retailer.html profile active/deactive
    $("body #activeBtn").click(function () {
        $(this).hide();
        $(this).parent().find('#deactiveBtn').show();
    });
    $("body #deactiveBtn").click(function () {
        $(this).hide();
        $(this).parent().find('#activeBtn').show();
    });


    // retailer Action active/deactive
    $("body #retailerActiveBtn").click(function () {
        $(this).hide();
        $(this).parent().find('#retailerDeactiveBtn').show();
    });
    $("body #retailerDeactiveBtn").click(function () {
        $(this).hide();
        $(this).parent().find('#retailerActiveBtn').show();
    });

    // phone_order.html
    $('input[name="phone_order_price"]').on('change.bootstrapSwitch', function(e) {
        let isChecked = e.target.checked;
        if ( isChecked ) {
            $('body').addClass('show-retailer-price');
        } else {
            $('body').removeClass('show-retailer-price');
        }
    });


    // sim_activation.html
    $('input[name="sim-activation-additional"]').on('change.form-check-input', function(e) {
        let isChecked = e.target.checked;
        if ( isChecked ) {
            $('body').addClass('show-additional-info');
        } else {
            $('body').removeClass('show-additional-info');
        }
    });



    $("body .offer_select_option").ready(function () {
        $("select").change(function () {
            $(this).find("option:selected").each(function () {
                var optionValue = $(this).attr("value");
                if (optionValue) {
                    $(".box").not("." + optionValue).hide();
                    $("." + optionValue).show();
                } else {
                    $(".box").hide();
                }
            });
        }).change();
    });


    // recharge_international.html
    $('.internet_package_offer').hide();
    $('#package').change(function () {
        if ($('#package').val() == 'internet') {
            $('.internet_package_offer').show();
        } else {
            $('.internet_package_offer').hide();
        }
    });

    $('.minute_package_offer').hide();
    $('#package').change(function () {
        if ($('#package').val() == 'minute') {
            $('.minute_package_offer').show();
        } else {
            $('.minute_package_offer').hide();
        }
    });



    // cargo_order_tracking.html
    $('.update_status_btn').click(function () {
        $('.update_submit_mail').toggle();
    });

    $(document).on('click', '.tracking-btn', function () {
        if ( $('#inputTrackingNumber').val().length >= 10 ) {
            $(".tracking_report").show();
        }
        else {
            $(".tracking_report").hide();
        }
    });


    //Edit Profile
    $("body #profile_edit_btn").click(function () {
        $(this).hide();
        $(this).parent().find(".profile_info_input").show();
        $(this).parent().find(".input_text").hide();
        $(this).parent().find("#profile_check_btn").show();
    });
    $("body #profile_check_btn").click(function () {
        $(this).hide();
        $(this).parent().find(".profile_info_input").hide();
        $(this).parent().find(".input_text").show();
        $(this).parent().find("#profile_edit_btn").show();
    });


})(jQuery);
   


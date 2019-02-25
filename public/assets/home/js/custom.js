(function($){ 
  "use strict";

$('.blog-header').parent().addClass('bg-blog');
$('.slicknav_nav, .top').find('ul.dropdown-menu').removeClass('dropdown-menu');
$('.vps-order-steps').parents('.wpb_column').addClass('ot-vps-order');
$('.shared').parents('.col-sm-12').removeClass('col-sm-12');
$('.about-us-links').parents('.vc_column_container').addClass('padd-0');

var l = $('.left-box').height();
var r = $('.right-box').height();
if(l > r){
  r = l;
}else{
  l = r;
}
$('.center-box').css('height',l);

    $('form.ajax').on('submit',function(e){
        e.preventDefault();
        $.ajax({
            url: $(this).attr('action'),
            data: $(this).serialize(),
            type: 'POST',
            success: function(data){
                $('#errors').empty();
                if(data['error'])
                {
                    $('#errors').prepend('   <div class="alert alert-sm alert-border-left alert-danger alert-dismissable">\n' +
                        '                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                        '                                        <i class="fa fa-info pr10"></i>' + data['error'] + ' </div>');
                }
                else if(data['success']) {
                    $('#errors').prepend('   <div class="alert alert-sm alert-border-left alert-success alert-dismissable">\n' +
                        '                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                        '                                    <i class="fa fa-check pr10"></i> ' + data['success'] + ' </div>');
                }
                else{
                    $('#errors').prepend('   <div class="alert alert-sm alert-border-left alert-success alert-dismissable">\n' +
                        '                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                        '                                    <i class="fa fa-check pr10"></i> Pomyślnie utworzono konto </div>');
                    setTimeout(function() {
                        location.reload();
                    }, 5000);
                }
            },
            error: function (data) {
                $('#errors').empty();
                var l = JSON.parse(data.responseText);
                var i = 0;
                $.each(l['errors'], function (heading, text) {
                    i++;
                    $('#errors').prepend('   <div class="alert alert-sm alert-border-left alert-danger alert-dismissable">\n' +
                        '                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                        '                                        <i class="fa fa-info pr10"></i>' +text + ' </div>');

                });

            },
        });
    });
    $('form.edit_email').on('submit',function(e){
        e.preventDefault();
        $.ajax({
            url: $('form.edit_email').attr('action'),
            data: $('form.edit_email').serialize(),
            type: 'POST',
            success: function(data){
                $('#errors').empty();
                if(data['error'])
                {
                    $('#errors').prepend('   <div class="alert alert-sm alert-border-left alert-danger alert-dismissable">\n' +
                        '                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                        '                                        <i class="fa fa-info pr10"></i>' + data['error'] + ' </div>');
                }
                if(data['success']) {
                    $('#errors').prepend('   <div class="alert alert-sm alert-border-left alert-success alert-dismissable">\n' +
                        '                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                        '                                    <i class="fa fa-check pr10"></i> ' + data['success'] + ' </div>');
                }
            },
            error: function (data) {
                $('#errors').empty();
                var l = JSON.parse(data.responseText);
                var i = 0;
                $.each(l['errors'], function (heading, text) {
                    i++;
                    $('#errors').prepend('   <div class="alert alert-sm alert-border-left alert-danger alert-dismissable">\n' +
                        '                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                        '                                        <i class="fa fa-info pr10"></i>' +text + ' </div>');

                });
            },
        });
    });
    $('form.edit_password').on('submit',function(e){
        e.preventDefault();
        $.ajax({
            url: $('form.edit_password').attr('action'),
            data: $('form.edit_password').serialize(),
            type: 'POST',
            success: function(data){
                $('#errors').empty();
                if(data['error'])
                {
                    $('#errors').prepend('   <div class="alert alert-sm alert-border-left alert-danger alert-dismissable">\n' +
                        '                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                        '                                        <i class="fa fa-info pr10"></i>' + data['error'] + ' </div>');
                }
                if(data['success']) {
                    $('#errors').prepend('   <div class="alert alert-sm alert-border-left alert-success alert-dismissable">\n' +
                        '                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                        '                                    <i class="fa fa-check pr10"></i> ' + data['success'] + ' </div>');
                }
            },
            error: function (data) {
                $('#errors').empty();
                var l = JSON.parse(data.responseText);
                var i = 0;
                $.each(l['errors'], function (heading, text) {
                    i++;
                    $('#errors').prepend('   <div class="alert alert-sm alert-border-left alert-danger alert-dismissable">\n' +
                        '                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                        '                                        <i class="fa fa-info pr10"></i>' +text + ' </div>');

                });
            },
        });
    });
    $('form.remote').on('submit',function(e){
        e.preventDefault();
        $.ajax({
            url: $('form.remote').attr('action'),
            data: $('form.remote').serialize(),
            type: 'POST',
            success: function(data){
                $('#errors').empty();
                if(data['error'])
                {
                    $('#errors').prepend('   <div class="alert alert-sm alert-border-left alert-danger alert-dismissable">\n' +
                        '                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                        '                                        <i class="fa fa-info pr10"></i> ' + data['error'] + ' </div>');
                }
                if(data['success']) {
                    $('#errors').prepend('   <div class="alert alert-sm alert-border-left alert-success alert-dismissable">\n' +
                        '                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                        '                                    <i class="fa fa-check pr10"></i> ' + data['success'] + ' </div>');
                }
            },
            error: function (data) {
                $('#errors').empty();
                var l = JSON.parse(data.responseText);
                var i = 0;
                $.each(l['errors'], function (heading, text) {
                    i++;
                    $('#errors').prepend('   <div class="alert alert-sm alert-border-left alert-danger alert-dismissable">\n' +
                        '                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                        '                                        <i class="fa fa-info pr10"></i> ' +text + ' </div>');

                });
            },
        });
    });
    if ($('form.edit').attr('action')) {
        var loc = $('form.edit').attr('action') + '/';
    } else {
        var loc = location.href + '/';
    }

    $('#datatable').on('click', 'button#edit', function () {
        $('div.edit').show();
        $('form.edit').attr({'id': $(this).parents('tr').attr('id'), 'action': loc + $(this).parents('tr').attr('id')});
        var tr = $(this).parents('tr');
        $('form.edit').find(':input.form-control').each(function () {
            var text =  tr.find('td.' + $(this).attr('id')).text();
            if (text.indexOf('[') > -1) {
                $('.select2[name="genrs[]"').val(JSON.parse(text)).trigger('change');
                //   $('.select2#'+$(this).attr('name')).val(text).trigger('change');
            } else {
                if ($(this).attr('route')) {
                    var name = $(this).attr('name');
                    $(this).val(tr.find('td.' + name).text());
                    $.ajax({
                        url: $(this).attr('route'),
                        type: 'GET',
                        data: "query=" + tr.find('td.' + name).text(),
                        success: function (data) {
                            $.each(data, function (index, element) {
                                $("input:hidden[name=" + name + "]").val(element.data);
                            });
                        },
                        error: function (data) {
                        }
                    });

                } else {
                    $(this).val(tr.find('td.' + $(this).attr('name')).text());
                }


            }
        });
    });

    $('#datatable').on('click', 'button#remove', function () {
        var id = $(this).parents('tr').attr('id');
        $.ajax({
            url: loc + id,
            type: 'GET',
            success: function (data) {
                $('#errors').empty();
                if(data['error'])
                {
                    $('#errors').prepend('   <div class="alert alert-sm alert-border-left alert-danger alert-dismissable">\n' +
                        '                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                        '                                        <i class="fa fa-info pr10"></i> ' + data['error'] + ' </div>');
                }
                if(data['success']) {
                    $('#errors').prepend('   <div class="alert alert-sm alert-border-left alert-success alert-dismissable">\n' +
                        '                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                        '                                    <i class="fa fa-check pr10"></i> ' + data['success'] + ' </div>');
                }
                window.datatable.ajax.reload();
            },
            error: function (data) {
                $('#errors').empty();
                var l = JSON.parse(data.responseText);
                var i = 0;
                $.each(l['errors'], function (heading, text) {
                    i++;
                    $('#errors').prepend('   <div class="alert alert-sm alert-border-left alert-danger alert-dismissable">\n' +
                        '                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                        '                                        <i class="fa fa-info pr10"></i> ' +text + ' </div>');

                });
            }
        });

    });
    var EDIT = $("form.edit");
    EDIT.submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: EDIT.attr('action'),
            type: 'POST',
            data: EDIT.serialize(),
            success: function (data) {
                $('#errors').empty();
                if(data['error'])
                {
                    $('#errors').prepend('   <div class="alert alert-sm alert-border-left alert-danger alert-dismissable">\n' +
                        '                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                        '                                        <i class="fa fa-info pr10"></i> ' + data['error'] + ' </div>');
                }
                if(data['success']) {
                    $('#errors').prepend('   <div class="alert alert-sm alert-border-left alert-success alert-dismissable">\n' +
                        '                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                        '                                    <i class="fa fa-check pr10"></i> ' + data['success'] + ' </div>');
                }
                window.datatable.ajax.reload();
            },
            error: function (data) {
                $('#errors').empty();
                var l = JSON.parse(data.responseText);
                var i = 0;
                $.each(l['errors'], function (heading, text) {
                    i++;
                    $('#errors').prepend('   <div class="alert alert-sm alert-border-left alert-danger alert-dismissable">\n' +
                        '                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                        '                                        <i class="fa fa-info pr10"></i> ' +text + ' </div>');

                });
            }
        });
    });
// ______________ SUPERFISH
jQuery('ul.sf-menu').superfish({
      speed : 1,
      animation: false,
      animationOut: false
});

// ______________ MOBILE MENU

 $(function(){
       $('nav.mobile-menu').slicknav({
          closedSymbol: "&#8594;",
          openedSymbol: "&#8595;"
});
});  

// ______________ HOME PAGE WORDS ROTATOR
$("#js-rotating").Morphext({
    animation: "bounceInLeft",
    separator: ",",
    speed: 6000
}); 
$('#js-rotating').show();



// ______________ ANIMATE EFFECTS
var wow = new WOW(
  {
    boxClass:     'wow',
    animateClass: 'animated',
    offset:       0,
    mobile:       false 
  }
);
wow.init();

// ______________ DISCOUNT NUMBER - CALL TO ACTION ON HOME PAGE
jQuery(document).ready(function() {
$('.calltoactioninfo').waypoint(function() {

$('#discount')
  .prop('number', 0)
  .animateNumber(
    {
      number: 45
    },
    3000
  );

}, { offset: 800, triggerOnce: true });
});

// ______________ LOVED BY DEVELOPERS NUMBER - CALL TO ACTION ON HOME PAGE
jQuery(document).ready(function() {
$('.testimonials .circle').waypoint(function() {

$('#lovedby')
  .prop('number', 0)
  .animateNumber(
    {
      number: 41169
    },
    3500
  );

}, { offset: 800, triggerOnce: true });
});

// TESTIMONIALS CAROUSEL_________________________ //   

$(document).ready(function() {
$("#testimonials-carousel").owlCarousel({ 
items : 1,
autoPlay: 7500,
transitionStyle : "backSlide",
itemsDesktop : [1199,1],
itemsDesktopSmall : [979,1],
itemsTablet: [768,1]});
});

// BLOG SLIDER_________________________ //   

$(document).ready(function() {
$(".owl-post").owlCarousel({
navigation : false,
slideSpeed : 300,
paginationSpeed : 400,
singleItem:true
});
});

// HOME PAGE SLIDER_________________________ //  

$(document).ready(function() {
$("#home-slider").owlCarousel({
navigation : false,
pagination: true,
autoPlay: 5000,
slideSpeed : 300,
paginationSpeed : 400,
singleItem:true
});
});




// SMOOTH SCROLL________________________//
$('.sf-menu a[href^="#"], a.scroll[href^="#"]').on('click', function (e) {
	if (!$(this).hasClass('quick-nav')) {
		e.preventDefault();

		var target = this.hash,
			$target = jQuery(target);

		$('html, body').stop().animate({
			'scrollTop': $target.offset().top - 100// - 200px (nav-height)
		}, 800, 'easeInOutExpo', function () {
			//window.location.hash = '1' + target;
		});
	}
});
// ______________ BACK TO TOP BUTTON

$(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $('#back-to-top').fadeIn('slow');
    } else {
      $('#back-to-top').fadeOut('slow');
    }
  });
$('#back-to-top').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
});

jQuery("img").load(function() {
    jQuery(".testimonialsContainer").masonry(); //this tweak is a fix on chrome and safari browser
  });

  jQuery('.testimonialsContainer').masonry({
    // options
    itemSelector : '.testimonial-item',
    isResizable : 'true'
});

$( '.ot-tabs .vc_tta-tab' ).on( 'click', 'a', function( e ) {

    $( '.ot-tabs .vc_tta-tabs-list' ).find( '.vc_tta-tab' ).removeClass( 'vc_active' );
    $( this ).parent().addClass( 'vc_active' );
    var id = $( this ).attr( 'href' ).replace( '#', '' );
    $( '.ot-tabs .vc_tta-panels' ).find( '.vc_tta-panel' ).removeClass( 'vc_active').hide();
    $( '.ot-tabs .vc_tta-panels' ).find( '#' + id ).addClass( 'vc_active' ).show();

    return false;
} );

$('.domainsearch').on('click','.btn-wide', function(e){
    e.preventDefault();

    var domain = $('.domainsearch').find('input.form-control').val();
    var ext = $('.domainsearch').find('select.form-control').val();
    var action = $('.domainsearch').attr('action');
    if(domain == ''){
        $('.domainsearch').find('input.form-control').focus();
        return false;
    }
    $('#message .mess').html('');
    $('#message img').show();
    $('#message a.ot-btn').hide();
  
    var data = {
            'action': 'wdc_display',
            'domain': domain + ext,
            'security' : wdc_ajax.wdc_nonce
          };
    $.post(wdc_ajax.ajaxurl, data, function(response) {
        var x = JSON.parse(response);
        var display = '';
          if(x.status == 1){
            display = x.text;
            $('#message a.ot-btn').css('display','inline-block');
            $('.otdomain1').val(domain+ext);
            $('.otdomain2').attr('name','domainsregperiod['+domain+ext+']');
          }else if(x.status == 0) {
            display = x.text;
          }else{
            display = "Error occured.";
          }
          $('#message img').hide();
          $('#message .mess').html(display);
    } );

});

$('#message a.ot-btn').on('click', function (e) {
    document.whmcs_com.submit();
});

var planval = $( '.vps-prices-container' ).find( '.planval' ).val();
if( planval ) {
    planval = planval.split( '|' );
}

var cpuval = $( '.vps-prices-container' ).find( '.cpuval' ).val();
if( cpuval ) {
    cpuval = cpuval.split( '|' );
}

var memoryval = $( '.vps-prices-container' ).find( '.memoryval' ).val();
if( memoryval ) {
    memoryval = memoryval.split( '|' );
}

var diskspaceval = $( '.vps-prices-container' ).find( '.diskspaceval' ).val();
if( diskspaceval ) {
    diskspaceval = diskspaceval.split( '|' );
}
 var bandwidthval = $( '.vps-prices-container' ).find( '.bandwidthval' ).val();
if( bandwidthval ) {
    bandwidthval = bandwidthval.split( '|' );
}
 var priceval = $( '.vps-prices-container' ).find( '.priceval' ).val();
if( priceval ) {
    priceval = priceval.split( '|' );
}

var urlval = $( '.vps-prices-container' ).find( '.urlval' ).val();
if( urlval ) {
    urlval = urlval.split( '|' );
}

var starting_point = $( '.vps-prices-container' ).find( '.point' ).val();

$(document).ready(function() {

        $("#vps-slider").slider({
            range: 'min',
            animate: true,
            min: 1,
            max: $("#vps-slider").attr( 'data-number' ) , //Update this if you less or more plans
            paddingMin: 0,
            paddingMax: 0,
            slide: function(event, ui) {
                $('.vps-prices-container #disk_space_option span.how_much').html(diskspaceval[ui.value - 1]);
                $('.vps-prices-container #cpu_option span.how_much').html(cpuval[ui.value - 1]);
                $('.vps-prices-container #vps_name_option span.how_much').html(planval[ui.value - 1]);
                $('.vps-prices-container #memory_option span.how_much').html(memoryval[ui.value - 1]);
                $('.vps-prices-container #bandwidth_option span.how_much').html(bandwidthval[ui.value - 1]);
                $('.vps-prices-container #price_amount').html(priceval[ui.value - 1]);
                $('.vps-prices-container a.order-vps').attr('href', urlval[ui.value - 1]);


            },
            change: function(event, ui) {
                $('.vps-prices-container #disk_space_option span.how_much').html(diskspaceval[ui.value - 1]);
                $('.vps-prices-container #cpu_option span.how_much').html(cpuval[ui.value - 1]);
                $('.vps-prices-container #vps_name_option span.how_much').html(planval[ui.value - 1]);
                $('.vps-prices-container #memory_option span.how_much').html(memoryval[ui.value - 1]);
                $('.vps-prices-container #bandwidth_option span.how_much').html(bandwidthval[ui.value - 1]);
                $('.vps-prices-container #price_amount').html(priceval[ui.value - 1]);
                $('.vps-prices-container a.order-vps').attr('href', urlval[ui.value - 1]);
            }
        });


        $("#amount").val("$" + $("#vps-slider").slider("value"));
        $('#vps-slider').slider('value', starting_point);
        $('.vps-plan').click(function() {
            tt_amount = parseInt(this.id.slice(5)) + 1;
            $('#vps-slider').slider('how_much', tt_amount);
        });
    });

  $(window).scroll(function () {

    var $h1 = $('.top.sticky');

    if ($h1.length > 0) {

      if ($(this).scrollTop() > 40) {

        $('.top.sticky').addClass('sticked');

      } else {

        $('.top.sticky').removeClass('sticked');

      }

    }

  });


})(jQuery);
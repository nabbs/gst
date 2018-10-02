$(document).ready(function($) {
    // scroll

    var scrollWindow = function() {
        var lastScrollTop = 0;
        $(window).scroll(function(){
            var $w = $(this),
                    st = $w.scrollTop(),
                    navbar = $('.probootstrap_navbar'),
                    sd = $('.js-scroll-wrap');



            if (st > 100) {
                if ( !navbar.hasClass('scrolled') ) {
                    navbar.addClass('scrolled');    
                }
            } 
            if (st < 100) {
                if ( navbar.hasClass('scrolled') ) {
                    navbar.removeClass('scrolled sleep');
                }
            } 
            if ( st > 150 ) {
                if ( !navbar.hasClass('awake') ) {
                    navbar.addClass('awake');   
                }
            }
            if ( st < 150 ) {
                if ( navbar.hasClass('awake') ) {
                    navbar.removeClass('awake');
                    navbar.addClass('sleep');
                }
            }

        });
    };
    scrollWindow();

	// newsletter signup form submission and validation
	$(document).on('click', '#su-submit', function (e) {
        e.preventDefault();
        var email = $('#signup').val();
        if(email != '' && validateEmail(email)) {
        		$.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
          }
        });
            $.ajax({

                url: '/subscribe',
                type: 'post',
                contentType: "application/json",
                dataType: 'json',
                data: JSON.stringify({
                    'email': email
                }),
                success: function (result) {
                    if (result.status === 'ok') {
                        $('#signup').val('Thank you for your subscription');
                        window.setTimeout(function () {
                            $('#signup').val('');
                            
                        }, 2000);
                    } else if(result.status === 'exists'){
                        $('#signup').val('Email already subscribed');
                        window.setTimeout(function () {
                            $('#signup').val('');
                        }, 2000);
                    }
                },
                error: function (xhr, status, error) {

                }
            });
        } else {
            $('#signup').val('Please enter correct email');
            window.setTimeout(function () {
                $('#signup').val('');
            }, 2000);
        }
    });

    function validateEmail(email)
    {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }


$('.nav-tabs a').click(function() {
    $('#tab-heading').text($(this).attr('data-tabname'))
})

//isotope data filter

var myTheme = window.myTheme || {},
        $win = $(window);
    myTheme.Isotope = function() {
        var isotopeContainer = $('.isotopeContainer');
        if (!isotopeContainer.length || !$().isotope) return;
        $(window).on('load', function() {
            isotopeContainer.isotope({
                itemSelector: '.isotopeSelector'
            });
            $('.isotopeFilters').on('click', 'a', function(e) {
                $('.isotopeFilters').find('.active').removeClass('active');
                $(this).addClass('active');
                var filterValue = $(this).attr('data-filter');
                isotopeContainer.isotope({
                    filter: filterValue
                });
                e.preventDefault();
            });
        });
        
    };
    
    myTheme.Isotope();


    $('[data-toggle="tooltip"]').tooltip();


    //auto-close alert message
    window.setTimeout(function() {
        $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
           $(this).remove(); 
        });
    }, 5000);

        var close = function(id, inputID){
        window.setTimeout(function() {
        $(id).fadeTo(1000, 0).slideUp(1000, function(){
            $(this).text('');
            $(inputID).val('');
        });
        }, 2000);

    }


   });
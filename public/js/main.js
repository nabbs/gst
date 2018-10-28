$(document).ready(function($) {
 // Start of use strict
  "use strict";

  //Initiate MasterSlider
    var promoSlider = new MasterSlider();
    promoSlider.setup('masterslider', {
     width:1400,    // slider standard width
     height:800,   // slider standard height
     // fullwidth:true,
     // autoHeight:true,
     space:5,
     speed: 70,
     layout: 'fullwidth',
     loop: true,
     preload: 0,
     autoplay: true,
     overPause: true,
     // fillMode: 'fill'
    });
    // promoSlider.control('thumblist', {
    //  autohide: false,
    //  dir: 'h',
    //  align: 'bottom',
    //  width: 200,
    //  height: 120,
    //  margin: 0,
    //  space: 0,
    //  hideUnder: 767
    // });

    // $('.ms-slide').click(function(){
    //   var url = $(this).attr('data-url');
    //   window.open(url,'_blank');
    //   // console.log(url);
    // });
  
  // var getPath = window.getPathName;

  // if (getPath == "/") {
  //   var winHeight=$(window).height()-210;
  //   $("html, body").delay(2000).animate({
  //     scrollTop:$('#searchBox').offset().top-winHeight
  //   },1000);
  //   console.log(getPath);
  // }
  


  var isMobile = false; //initiate as false
// device detection
if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) isMobile = true;  

  var contentWayPoint = function() {
    var i = 0;
    if ($('.probootstrap-animate').length > 0 ) {
      $('.probootstrap-animate').waypoint( function( direction ) {

        if( direction === 'down' && !$(this.element).hasClass('probootstrap-animated') ) {
          
          i++;

          $(this.element).addClass('item-animate');
          setTimeout(function(){

            $('body .probootstrap-animate.item-animate').each(function(k){
              var el = $(this);
              setTimeout( function () {
                var effect = el.data('animate-effect');
                if ( effect === 'fadeIn') {
                  el.addClass('fadeIn probootstrap-animated');
                } else if ( effect === 'fadeInLeft') {
                  el.addClass('fadeInLeft probootstrap-animated');
                } else if ( effect === 'fadeInRight') {
                  el.addClass('fadeInRight probootstrap-animated');
                } else {
                  el.addClass('fadeInUp probootstrap-animated');
                }
                el.removeClass('item-animate');
              },  k * 30, 'easeInOutExpo' );
            });
            
          }, 90);
          
        }

      } , { offset: '95%' } );
    }
  };
  contentWayPoint();
  


  var owlCarouselFunc = function() {
    $('.js-owl-carousel').owlCarousel({
      loop : false,
      margin : 20,
      nav : true,
      stagePadding : 50,
      navText : ["<span class='ion-chevron-left'></span>","<span class='ion-chevron-right'></span>"],
      responsive : {
          0 : {
              items:1
          },
          600 : {
              items:2
          },
          1000 : {
              items:3
          }
      }
    });

    $('.js-owl-carousel-2').owlCarousel({
      autoPlay: 5000,
      lazyLoad: true,
      loop : false,
      margin : 20,
      nav : false,
      dots:false,
      navText : ["<span class='ion-chevron-left'></span>","<span class='ion-chevron-right'></span>"],
      responsive : {
          0 : {
              items:1
          },
          600 : {
              items:1
          },
          800 : {
              items:2
          },
          1000 : {
              items:3
          }
      }
    });

    $('.blog-slider').owlCarousel({
      autoplay: false,
      loop : false,
      rewind:true,
      margin : 20,
      nav : true,
      dots:false,
      navText : ["<span class='ion-chevron-left'></span>","<span class='ion-chevron-right'></span>"],
      responsive : {
          0 : {
              items:1
          },
          600 : {
              items:3
          },
          800 : {
              items:3
          },
          1000 : {
              items:3
          }
      }
    });

    $('.search-slider').owlCarousel({
      autoplay:false,
      loop : false,
      margin : 0,
      dots : false,
      nav : true,
      stagePadding : 0,
      navText : ["<span class='ion-chevron-left'></span>","<span class='ion-chevron-right text-small'></span>"],
      responsive : {
          0 : {
              items:1
          }
      }
    });
  };

  owlCarouselFunc();

  var ThumbnailOpacity = function() {
    var t = $('.probootstrap-thumbnail');
    t.hover(function(){
      var $this = $(this);
      t.addClass('sleep');
      $this.removeClass('sleep');
    }, function(){
      var $this = $(this);
      t.removeClass('sleep');
    });
  }
  ThumbnailOpacity();

  var datePicker = function() {
    $('#probootstrap-date-departure, #probootstrap-date-arrival').datepicker({
      'format': 'm/d/yyyy',
      'autoclose': true
    });
  };
  datePicker();

  //hot deals show

  $('div.card').hover(function() {
    $(this).children('.card-img-overlay').fadeIn();
    }, function() {
    $(this).children('.card-img-overlay').fadeOut();
  });

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


//contact us form submission and validation

$('#contact').on('submit', function (e) {
    var data = {
      name: $('#name').val(),
      email: $('#email').val(),
      message:$('#message').val(),
    };
    if(validateEmail(data.email)) {
    $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    },
    beforeSend: function() {
      $('#submit').text('sending...');
    },
    complete: function(){
       $('#submit').text('message received - thanks!');
       window.setTimeout(function () {
          $('#submit').text('send');
          
      }, 3000);
    }
    });
    $.ajax({
        method: 'POST',
        url: '/contact',
        data: data,
        success: function () {
            $('#contact')[0].reset();
        }
    });

  }

  else {
    $('#email').css('color','red');
    $('#email').val('Please enter correct email');
            window.setTimeout(function () {
                $('#email').val('');
                $('#email').css('color','black');
            }, 2000);
  }

    return false;
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
    var myTheme = window.myTheme || {}
      myTheme.Isotope = function() {
          var isotopeContainer = $('.isotopeContainer');
          
          if (!isotopeContainer.length || !$().isotope) return;
          $(window).on('load', function() {
            
            isotopeContainer.on( 'arrangeComplete', function(event, filteredItems){
              $('#totalItems').text(filteredItems.length);
            });

      isotopeContainer.isotope({
          itemSelector: '.isotopeSelector'
      });
            $('.isotopeFilters').on('click', 'a', function(e) {
                  $('.isotopeFilters').find('.active').removeClass('active');
                  $(this).addClass('active');
                  // $(this).parents(".btn-group").find('.selection').text($(this).text());
                  // $(this).parents(".btn-group").find('.selection').val($(this).text());

                  var filterValue = $(this).attr('data-filter');
                  isotopeContainer.isotope({
                      filter: filterValue
                  });
                   isotopeContainer.on( 'arrangeComplete', function(event, filteredItems){
                    $('#totalItems').text(filteredItems.length);
            });
                  e.preventDefault();                
              });

              $('.filter-select').change( function() {
                  isotopeContainer.isotope({
                    filter: this.value
                  });
                });
            
          });
      };
      
      myTheme.Isotope();

      $("a.reset").click(function(){
        // $('.selection').text('');
        // $('.selection').val('');
        $(".filter-select").val("");

        //console.log('a clicked')
      });

  //end isotope data filter


    //Initiate Tooltip
    $('[data-toggle="tooltip"]').tooltip();
    //end tooltip


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
    //end auto-close


    //back to top:

    $('body').append('<div id="toTop" class="btn btn-top"><span class="fa fa-chevron-up"></span></div>');
    $(window).scroll(function () {
        if ($(this).scrollTop() !== 0) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });
    $('#toTop').on("click", function () {
        $("html, body").animate({scrollTop: 0}, 600);
        return false;
    });
    //end back to top.

    // $('h1.hotel__name').addClass('truncated');


    $(".transHeading")["delay"](2000)["fadeIn"](1000);
    var variable_0 = window["location"]["pathname"];
    $("a.showTrans")["click"](function() {
        //ga("send", "event", "Transfers", "Search for pick-up and drop-off", variable_0);

        //gtag('event', 'Search for pick-up and drop-off', {'event_category' : 'Transfers'});

        gtag('event', 'clicked', {'event_category': 'Transfers','event_label': 'transfers clicked', 'value': '1' });


        $("#trans")["slideToggle"](function() {
            $("html, body")["animate"]({
                scrollTop: $("#transBlock")["offset"]()["top"]
            }, 500);
            return false
        })
    });


    $('#search-results .card-deck a').on("click", function () {
      var url = $(this).attr('href');
      var agent = $(this).attr('data-agent');
      gtag('event', 'click', {
        'event_category': agent,
        'event_label': url,
        'transport_type': 'beacon'
        // 'event_callback': function(){document.location = url}
      });
      //console.log('clicked on link '+agent);
    });


  //   $(document).mouseleave(function(e) {
  //   $('#exitpopup').css('left', (window.innerWidth/2 - $('#exitpopup').width()/2));
  //   $('#exitpopup').css('top', (window.innerHeight/2 - $('#exitpopup').height()/2));
    
  //   if('1'!=Cookies.get('promo_popup')) {
  //   if(e.pageY <= 5)
  //   {
  //     $('#exitpopup_bg').fadeIn();
  //     $('#exitpopup').fadeIn();
  //     var in2mins = new Date(new Date().getTime() + 2 * 60 * 1000);
  //     Cookies.set('promo_popup', '1', {expires: in2mins});
  //   }
  //  }
  // });
  // $('#exitpopup_bg').on("click", function () {
  //   $('#exitpopup_bg').fadeOut();
  //   $('#exitpopup').slideUp();
  //   console.log('popup clicked');
  // });


  $('#list-view').hide();
  $('#list').click(function(event){
      event.preventDefault();
      $('#grid-view').hide();
      $('#list-view').show();
      $(this).addClass('active');
      $('#grid').removeClass('active');
      $(".isotopeContainer").isotope('layout');
    });

    $('#grid').click(function(event){
      event.preventDefault();
      $('#grid-view').show();
      $('#list-view').hide();
      $(this).addClass('active');
      $('#list').removeClass('active');
      $(".isotopeContainer").isotope('layout');
    });
});


// var trackOutboundLink = function(url) {
//       gtag('event', 'click', {
//         'event_category': 'outbound',
//         'event_label': url,
//         'transport_type': 'beacon',
//         'event_callback': function(){document.location = url;}
//       });
//     }

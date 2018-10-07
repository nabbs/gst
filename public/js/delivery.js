$(document).ready(function () {
	var getURLPath = window.location.pathname;
	var adURL = "//ads.gosearchtravel.com/www/delivery/afr.php?zoneid=";
	var getClientWidth = document.body.clientWidth;
	var interval = 60000;
	var setPath = "";


	//sub-domain ad delivery
	var getURLHost = window.location.host.split('.')[0];
	switch (getURLHost) {
		case "flights":
			setPath = adURL + "5";
			break;             
		case "hotels":
			setPath = adURL + "6";
			break;
				default:
			setPath = "";
	}
	//end sub-domain ad delivery



	if (getURLPath == "/flights"){
		setPath = adURL + "5";
	}

	if (getURLPath == "/hotels"){
		setPath = adURL + "6";
	}

	if (getURLPath == "/carhire"){
		setPath = adURL + "7";
	}

	// if (getURLPath == "/holidays"){
	// 	setPath = adURL + "";
	// }

	// if (getURLPath == "/hajj"){
	// 	setPath = adURL + "";
	// }

	// if (getURLPath == "/umrah"){
	// 	setPath = adURL + "";
	// }

	// if (getURLPath == "/cruise"){
	// 	setPath = adURL + "";
	// }


	if (getURLPath == "/blog"){
		setPath = adURL + "4";
	}

	if (getURLPath == "/public/blog"){
		setPath = adURL + "4";
	}



	if (getURLPath.indexOf("/blog/") === 0) {
        setPath = adURL + "4";
    }

    if (getURLPath.indexOf("/public/blog/") === 0) {
        setPath = adURL + "4";
    }


	var TopRefresh = function () {
		if (getClientWidth >= 468) {
			$.ajax({
				url: adURL + "9",
				cache: false,
				success: function (html) {
					$('#topBanner').html(html);
					setTimeout(function () {
						TopRefresh();
					}, interval);
				}
			});
		}
		if (getClientWidth < 468) {
			if (getClientWidth < 420) {
				$.ajax({
					url: adURL + "10",
					cache: false,
					success: function (html) {
						$('#topBanner').html(html);
						setTimeout(function () {
							TopRefresh();
						}, interval);
					}
				});
			} 
		}
	};
	TopRefresh();

	var RightRefresh = function () {
		if (getClientWidth >= 468) {
			$.ajax({
				url: setPath,
				cache: false,
				success: function (html) {
					$('#rightBanner').html(html);
					setTimeout(function () {
						RightRefresh();
					}, interval);
				}
			});
		}

		if (getClientWidth < 468) {
				$.ajax({
					url: adURL + "4",
					cache: false,
					success: function (html) {
						$('#rightBanner').html(html);
						setTimeout(function () {
							RightRefresh();aw3
						}, interval);
					}
				});
			}

	};
	RightRefresh();

	// $(window).scroll(function () {
	// 	if ($(this).scrollTop() >= 380) {
	// 		// $('.ad-container').addClass("sticky");
	// 		$('.page #rightBanner').addClass("sticky");
	// 	}
	// 	else {
	// 		// $('.ad-container').removeClass("sticky");
	// 		$('.page #rightBanner').removeClass("sticky");

	// 	}

	// });

	if (getClientWidth >= 768) {
		$(".ad-container").stick_in_parent( {	
			offset_top: 100
			}
		);

		$(".page #rightBanner").stick_in_parent( {	
			offset_top: 240
			}
		);
	}



	var ins = '<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-6930499180490669" data-ad-slot="5439710635" data-ad-format="auto"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script>'

	$('.ad-block').each(function() {
  	$(this).append(ins);
	});


  $('.tickets-container').append(ins);

  // if(!$("#ablockercheck").is(":visible"))
  //  {
  //    $('#abMessage').modal('show');
  //  }

});

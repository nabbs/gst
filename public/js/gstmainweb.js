$(document).ready(function () {
	var getURLPath = window.location.pathname;
	var adURL = "//ads.gosearchtravel.com/www/delivery/afr.php?zoneid=";
	var getClientWidth = document.body.clientWidth;
	var interval = 60000;
	switch (getURLPath) {
		case "/flights":
			setPath = adURL + "7";
			break;
		case "/hotels":
			setPath = adURL + "8";
			break;
		case "/carhire":
			setPath = adURL + "10";
			break;
		case "/holidays":
			setPath = adURL + "12";
			break;
		case "/hajj":
			setPath = adURL + "13";
			break;
		case "/umrah":
			setPath = adURL + "14";
			break;
		case "/travel-insurance":
			setPath = adURL + "15";
			break;
		case "/cruises":
			setPath = adURL + "16";
			break;
		default:
			setPath = "/";
	}
	var TopRefresh = function () {
		if (getClientWidth >= 468) {
			$.ajax({
				url: adURL + "3",
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
					url: adURL + "5",
					cache: false,
					success: function (html) {
						$('.isDesktop').hide();
						$('#topBanner').html(html);
						setTimeout(function () {
							TopRefresh();
						}, interval);
					}
				});
			} else {
				$.ajax({
					url: adURL + "6",
					cache: false,
					success: function (html) {
						$('.isDesktop').hide();
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
	var LeftRefresh = function () {
		if (getClientWidth >= 468) {
			$.ajax({
				url: setPath,
				cache: false,
				success: function (html) {
					$('#leftBanner').html(html);
					setTimeout(function () {
						LeftRefresh();
					}, interval);
				}
			});
		}
	};
	LeftRefresh();
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
	};
	RightRefresh();
	$(window).scroll(function () {
		if ($(this).scrollTop() > 280) {
			$('.leftBanner').addClass("sticky");
			$('.rightBanner').addClass("sticky");
		} else {
			$('.leftBanner').removeClass("sticky");
			$('.rightBanner').removeClass("sticky");
		}
		if ($(this).scrollTop() > 100) {
			$('.navbar-default').addClass("fixed");
		} else {
			$('.navbar-default').removeClass("fixed");
		}
	});
});

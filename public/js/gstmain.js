$(document).ready(function () {
	var getURLHost = window.location.host.split('.')[0];
	var adURL = "//ads.gosearchtravel.com/www/delivery/afr.php?zoneid=";
	var getClientWidth = document.body.clientWidth;
	var interval = 60000;
	console.log(getURLHost);
	switch (getURLHost) {
		case "flights":
			setPath = adURL + "7";
			break;             
		case "hotels":
			setPath = adURL + "8";
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

$(function () {

	$('.homeLink').on('click', function (e) {
		e.preventDefault();
		window.location.href = "#";
	});

	$('.servicesLink').on('click', function (e) {
		e.preventDefault();
		window.location.href = "../index.php#our-services";
	});

});
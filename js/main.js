$(document).ready(function () {
    $("a.navtgn").click(function () {
        $(".menu").fadeIn()
    .css({ top: 1000, position: 'absolute' })
    .animate({ top: 0 }, 800, function () {
    });
        $('.menu')
    .animate(
    { top: 0 }, {
        duration: 'slow',
        easing: 'easeOutQuad'
    })
        var status_id = $(this).attr('id');
        setTimeout("window.location.href='" + status_id + ".php';", 900);
    });

    $(".navtgn").click(function () {
        $("#myCarousel").fadeOut();
    });

    $(".item").eq(0).addClass("active");

    $(".carousel-indicators li").eq(0).addClass("active");

    $(".btn-info").click(function () {
        $("#video").show();

        $("#video iframe").attr("src", "https://www.youtube.com/embed/" + $(this).attr("videoId") + "");
    });

    $(".close").click(function () {
        $("#video iframe").attr("src", "");
        $("#video").hide();
    })


    $('#youtube_video').css({ width: $(window).innerWidth() + 'px', height: $(window).innerHeight() + 'px' });
    $(window).resize(function () {
        $('#youtube_video').css({ width: $(window).innerWidth() + 'px', height: $(window).innerHeight() + 'px' });
    });

    $("#myCarousel").swiperight(function () {
        $(this).carousel('prev');
    });
    $("#myCarousel").swipeleft(function () {
        $(this).carousel('next');
    });

    $(function () {
        $('#myCarousel').carousel({
            interval: 4000
        });
    });


    $(window).scroll(function(){
        let position = $(this).scrollTop();
        if (position >= 200) {
            $('.menu1').addClass('menu1_p');
            $('.social_box_f').addClass('social_box_f_show');
        } else {
            $('.menu1').removeClass('menu1_p');
            $('.social_box_f').removeClass('social_box_f_show');
        }
    });


    $('.our_client_slider').slick({
        slidesToShow: 4,
        autoplay: true,
        autoplaySpeed: 1000,
        swipeToSlide: true,
        draggable: true,
        arrows: true,
        useCSS: true,
        centerMode: true,
        centerPadding: '60px',
        pauseOnHover: true,
        variableWidth: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                arrows: true,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3
                }
            },
            {

                breakpoint: 994,
                settings: {
                    arrows: true,
                    centerMode: true,
                    centerPadding: '10px',
                    slidesToShow: 2 
                }

            },
            {
                breakpoint: 480,
                settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
                }
            }
        ]
    });
    
    $('.navbar-brand').click(function(){
        window.location.href='index.php';
    });


// Gallery
    // $(function(){
	// 	var $gallery = $('.gallery a').simpleLightbox();

	// 	$gallery.on('show.simplelightbox', function(){
	// 		console.log('Requested for showing');
	// 	})
	// 	.on('shown.simplelightbox', function(){
	// 		console.log('Shown');
	// 	})
	// 	.on('close.simplelightbox', function(){
	// 		console.log('Requested for closing');
	// 	})
	// 	.on('closed.simplelightbox', function(){
	// 		console.log('Closed');
	// 	})
	// 	.on('change.simplelightbox', function(){
	// 		console.log('Requested for change');
	// 	})
	// 	.on('next.simplelightbox', function(){
	// 		console.log('Requested for next');
	// 	})
	// 	.on('prev.simplelightbox', function(){
	// 		console.log('Requested for prev');
	// 	})
	// 	.on('nextImageLoaded.simplelightbox', function(){
	// 		console.log('Next image loaded');
	// 	})
	// 	.on('prevImageLoaded.simplelightbox', function(){
	// 		console.log('Prev image loaded');
	// 	})
	// 	.on('changed.simplelightbox', function(){
	// 		console.log('Image changed');
	// 	})
	// 	.on('nextDone.simplelightbox', function(){
	// 		console.log('Image changed to next');
	// 	})
	// 	.on('prevDone.simplelightbox', function(){
	// 		console.log('Image changed to prev');
	// 	})
	// 	.on('error.simplelightbox', function(e){
	// 		console.log('No image found, go to the next/prev');
	// 		console.log(e);
	// 	});
	// }); 

});


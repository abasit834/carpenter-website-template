(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').addClass('shadow-sm').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Header carousel
    $(".header-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        items: 1,
        dots: true,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ]
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            }
        }
    });


    // Portfolio isotope and filter
    var portfolioIsotope = $('.portfolio-container').isotope({
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
    });
    $('#portfolio-flters li').on('click', function () {
        $("#portfolio-flters li").removeClass('active');
        $(this).addClass('active');
        console.log("inside nav bar active function");

        portfolioIsotope.isotope({filter: $(this).data('filter')});
    });


    // About us navigation

    const aboutUs = $('#about-us');
    aboutUs.on('click',()=>window.location.href = 'about.php');

    const services = $("#services");
    services.on('click',()=>window.location.href = 'service.php');

    // form values 
    
    var forms = document.querySelectorAll('.needs-validation');
    Array.prototype.slice.call(forms).forEach(function (form) {
        form.addEventListener('submit', function (event) {
            event.preventDefault();
            if (!form.checkValidity()) {
                event.stopPropagation();
            }
    
            const name = $('#name').val();
            const email = $('#email').val();
            const sub = $("#subject").val();
            const message = $('#message').val();
    
            const captchaResponse = grecaptcha.getResponse();
    
            if (captchaResponse.length === 0) {
                alert('Please complete the captcha');
                return;
            } else {
                console.log('Name: ', name);
                console.log('Email: ', email);
                console.log('Subject: ', sub);
                console.log('Message: ', message);
                form.classList.add('was-validated');
            }
        }, false);
    });  

       // Get all the gallery links
       var galleryLinks = document.querySelectorAll('.gallery-item a');

       // Add click event to each link
       galleryLinks.forEach(function(link) {
           link.addEventListener('click', function() {
               var slideTo = this.getAttribute('data-bs-slide-to');
               var carousel = new bootstrap.Carousel(document.querySelector('#carouselExampleIndicators'));
               carousel.to(slideTo); // Move to the selected slide
           });
       });

   
})(jQuery);


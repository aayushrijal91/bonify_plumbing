// AOS.init({ duration: 1500 });

document.querySelectorAll('a[href="#form"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

$(window).on('scroll', () => {
    if ($(this).scrollTop() >= 600) {
        $('#return-to-top').fadeIn(300);
    } else {
        $('#return-to-top').fadeOut(300);
    }
});

$('#return-to-top').on('click', () => {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});

if ($(window).width() < 900) {
    $('.logo_slider').slick({
        slidesToShow: 3,
        centerMode: true,
        centerPadding: "120px",
        arrows: false,
        autoplay: true,
        responsive: [
            {
                breakpoint: 540,
                settings: {
                    slidesToShow: 1,
                    centerMode: true,
                    arrows: false,
                    centerPadding: "100px"
                }
            }
        ]
    });
}

$('.gallery').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    centerMode: true,
    arrows: false,
    centerPadding: "220px",
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                centerPadding: "60px",
                arrows: false,
            }
        },
        {
            breakpoint: 900,
            settings: {
                slidesToShow: 2,
                centerPadding: "60px",
                arrows: false,
            }
        },
        {
            breakpoint: 540,
            settings: {
                slidesToShow: 1,
                centerPadding: "60px",
                arrows: false,
            }
        }
    ]
});

$('.form-control input, .form-control select').on('focus', function () {
    $(this).parents('.form-control').css('border-color', '#555656');
    $(this).parents('.form-control').find('.icon').css('color', '#C62026');
})

$('.form-control input, .form-control select').on('blur', function () {
    $(this).parents('.form-control').css('border-color', '#e5e7eb');
    $(this).parents('.form-control').find('.icon').css('color', '#555656');
});

function validateForm() {
    let phoneInput = $('#phoneInput').val();
    let re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;

    if(!re.test(phoneInput)) {
        $('#phoneError').fadeIn();

        return false;
    }

    return true;
}

$("#heroForm").on('submit', function () {
    return validateForm();
});
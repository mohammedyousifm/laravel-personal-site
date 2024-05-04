$(document).ready(function() {
    $('.navbar-toggler').click(function(event) {
        $('.collapse').stop().slideToggle(300);
        event.stopPropagation();
    });

    $(document).click(function(event) {
        if (!$(event.target).closest('.collapse').length && $('.collapse').is(":visible")) {
            $('.collapse').slideUp(300);
        }
    });

    // Handling clicks on links within the `.collapse`
    $('.collapse a').click(function() {
        $('.collapse').slideUp(300);
    });
});


// $(document).ready(function() {
//     var projectComplete = 17; // Assuming $info->project_complete holds the value

//     $('.counter').each(function () {
//         $(this).prop('Counter',0).animate({
//             Counter: $(this).text()
//         }, {
//             duration: 4000, // Adjust the duration as needed
//             easing: 'swing', // You can use other easing functions like 'linear' or 'easeOutCirc'
//             step: function (now) {
//                 $(this).text(Math.ceil(now));
//             }
//         });
//     });
// });

$(document).ready(function() {
    $(document).on('click', '.sent-email', function(event) {
        event.preventDefault(); // Prevent default form submission
        var formData = new FormData($('#sentemailform')[0]); // Serialize form data

        // Change button text and add loading icon
        $('#button-text').html('انتظر نحن نرسل الرسالة <i class="fa fa-spinner fa-spin"></i>');

        $.ajax({
            type: 'post',
            url: '/send-email',
            data: formData,
            contentType: false, // Prevent jQuery from automatically setting content type
            processData: false, // Prevent jQuery from automatically processing the data
            success: function(response) {
                // Handle success response
                if (response.success) {
                    Swal.fire(
                        'Added!',
                        response.message,
                        'success'
                    ).then(() => {
                        location.reload();
                    });
                } else {
                    Swal.fire(
                        'Error!',
                        response.message,
                        'error'
                    );
                }
                // Reset button text after response
                $('#button-text').text('أرسل رسالة');
            },
            error: function(xhr, status, error) {
                // Handle error response
                Swal.fire(
                    'Error!',
                    'فشل في إرسال رسالتك.',
                    'error'
                );
                // Reset button text after error
                $('#button-text').text('أرسل رسالة');
            }
        });
    });
});



$(document).ready(function() {

    var animated = false;

    $('#achiev').waypoint(function(direction) {

        if (!animated && direction === 'down') {
            animated = true;

            $('.counter').each(function() {
                var $this = $(this);
                var countTo = parseInt($this.text());

                $this.text('0'); // Reset counter to 0

                $({ countNum: $this.text() }).animate({
                    countNum: countTo
                }, {
                    duration: 3000,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(countTo);
                    }
                });
            });
        }
    }, {
        offset: '75%' // Adjust as needed for when the animation should trigger
    });
});


$(document).ready(function() {
    // Add 'loading' class to the body at the start
    $('body').addClass('loading');

    $(window).on('load', function() {
        // Set a timeout to delay the removal of the loader and the 'loading' class
        setTimeout(function() {
            $('body').removeClass('loading');
            $('.loader').fadeOut('slow', function() {
                $(this).remove(); // Removes the loader from the DOM after fading out
            });
        });
    });
});

$(window).on('load', function() {
    // Function to show and hide the message
    function showMessage() {
        $('.whatsapp-message').fadeIn(5000).delay(4000).fadeOut(10000);
    }

    // Initially show the message after the page is loaded
    showMessage();

    // Set interval to repeat showing the message every 15 seconds
    // (5 seconds visible, 10 seconds hidden)
    setInterval(showMessage, 15000);
});


$(document).ready(function(){
    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 1000);
            window.history.pushState(null, null, this.getAttribute('href'));
        }
    });
});






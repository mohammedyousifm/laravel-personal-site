// script for serach in table
$(document).ready(function() {
    $(".search").keyup(function() {
        var searchTerm = $(".search").val();
        var listItem = $('.results tbody').children('tr');
        var searchSplit = searchTerm.replace(/ /g, "'):containsi('")

        $.extend($.expr[':'], {
            'containsi': function(elem, i, match, array) {
                return (elem.textContent || elem.innerText || '').toLowerCase().indexOf(
                    (match[3] || "").toLowerCase()) >= 0;
            }
        });

        $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e) {
            $(this).attr('visible', 'false');
        });

        $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e) {
            $(this).attr('visible', 'true');
        });

        var jobCount = $('.results tbody tr[visible="true"]').length;
        $('.counter').text(jobCount + ' item');

        if (jobCount == '0') {
            $('.no-result').show();
        } else {
            $('.no-result').hide();
        }
    });
});

//  script for show image in full screen form table
$(document).ready(function() {
 $('.show_image').click(function() {
     // Get the source of the clicked image
     var src = $(this).attr('src');

     // Create a fullscreen container and append the clicked image inside it
     var fullscreenImage = $(
         '<div class="fullscreen"><span class="close-icon">&times;</span><img src="' + src +
         '"></div>');

     // Append the fullscreen container to the body
     $('body').append(fullscreenImage);

     // Add click event to close the fullscreen image
     $('.close-icon').click(function() {
         fullscreenImage.remove(); // Remove the fullscreen container
     });
 });
});

$(document).ready(function() {
    // Show elements when the toggle button is clicked
    $('.toggle').click(function(event) {
        $('.nav-sidebar').css('display', 'block');
        event.stopPropagation(); // Prevent the click from bubbling up to the document
    });

    // Hide elements when clicking anywhere outside the specified elements
    $(document).click(function() {
        $('.nav-sidebar').css('display', 'none');
    });

    // If you also want to hide when clicking a link inside the sidebar
    // $('.nav-sidebar a').click(function(event) {
    //     $('.nav-sidebar').css('display', 'none');
    //     event.stopPropagation();
    // });

    // Prevent the sidebar itself from hiding when it is clicked
    $('.nav-sidebar').click(function(event) {
        event.stopPropagation();
    });
});

$(document).ready(function() {
    $(".photos").hover(
        function() {
            // Mouse enter
            $(this).children('.dropdown-menu').stop(true, true).slideDown();
        },
        function() {
            // Mouse leave
            $(this).children('.dropdown-menu').stop(true, true).slideUp();
        }
    );
});


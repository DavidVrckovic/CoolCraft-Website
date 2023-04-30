// Get the button by Class name
var back_to_top_button = document.getElementsByClassName("back_to_top");

// When the user scrolls down 60px from the top of the page, show the button
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        for (var i = 0; i < back_to_top_button.length; i += 1) {
            back_to_top_button[i].style.display = 'block';
        }
    } else {
        for (var i = 0; i < back_to_top_button.length; i += 1) {
            back_to_top_button[i].style.display = 'none';
        }
    }
}

// When the user clicks on the button, scroll to the top of the page
function backToTop() {
    var body = $("html, body");
    body.stop().animate({ scrollTop: 0 }, 500, "swing", function () {
        console.log("Back to top animation has finished.");
    });
}
// Function to scroll to the top of the page
// * Works only if OS animations are enabled
// * Same effect can be achieved with HTML and CSS only: <a href="#"> with {scroll-behavior: smooth;}
function back_to_top() {

    // Scroll to the top of the page
    window.scrollTo(0, 0);

    // Log to console
    console.log("Clicked on back to top button.");
}



// Function to scroll to the top of the page
// * Works in all cases
// * Requires JQuery
function back_to_top_jquery() {

    // Get html and body elements and save them in a variable
    var body = $("html, body");

    // Scroll to the top of the page with animation
    body.stop().animate({ scrollTop: 0 }, 500, "swing", function () { });

    // Log to console
    console.log("Clicked on back to top button.");
}



// Function to set the display property of elements after the user scrolls
function display_on_scroll() {

    // Check if the user has scrolled more than 100 px from the top of the page
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {

        // Go through all elements
        for (var i = 0; i < back_to_top_button.length; i += 1) {

            // Set the display property of an element
            back_to_top_button[i].style.display = "block";
        }
    } else {

        // Go through all elements
        for (var i = 0; i < back_to_top_button.length; i += 1) {

            // Set the display property of an element
            back_to_top_button[i].style.display = "none";
        }
    }
}



// Get elements by Class Name
let back_to_top_button = document.getElementsByClassName("back_to_top");

// Check if an element exists
if (back_to_top_button) {

    // Execute the function when the user scrolls
    window.onscroll = function () { display_on_scroll() };
}
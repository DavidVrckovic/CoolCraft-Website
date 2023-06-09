// Function to scroll to the top of the page
// * Works only if OS animations are enabled
// * Same effect can be achieved with HTML and CSS only: <a href="#"> with {scroll-behavior: smooth;}
function scroll_to_top() {

    // Scroll to the top of the page
    window.scrollTo(0, 0);

    // Log to console
    console.log("Clicked on back to top button.");
}



// Function to scroll to the top of the page
// * Works in all cases
// * Requires JQuery
function scroll_to_top_jquery() {

    // Get html and body elements and save them in a variable
    var body = $("html, body");

    // Scroll to the top of the page with animation
    body.stop().animate({ scrollTop: 0 }, 500, "swing", function () { });

    // Log to console
    console.log("Clicked on back to top button.");
}



// Function to set properties of elements after the user scrolls
function display_on_scroll() {

    // Check if the user has scrolled more than x amount of px from the top of the page
    if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {

        // Check if an element does not have a class
        if (!back_to_top_button.classList.contains("button_entrance")) {

            // Apply properties to elements
            back_to_top_button.classList.remove("button_exit");
            back_to_top_button.classList.add("button_entrance");
            back_to_top_button.style.display = "block";
        }
    } else {

        // Check if an element does have a class
        if (back_to_top_button.classList.contains("button_entrance")) {

            // Apply properties to elements
            back_to_top_button.classList.remove("button_entrance");
            back_to_top_button.classList.add("button_exit");

            // Wait x amount of milliseconds
            setTimeout(() => {
                // Apply properties to elements
                back_to_top_button.style.display = "none";
            }, 300);
        }
    }
}



// Get elements and save them in a variable
let back_to_top_button = document.getElementById("back_to_top_button");

// Check if an element exists
if (back_to_top_button) {

    // Execute the function when the user scrolls
    window.onscroll = function () { display_on_scroll() };
}
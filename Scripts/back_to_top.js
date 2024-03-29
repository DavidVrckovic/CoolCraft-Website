// Get elements and save them in a variable
const back_to_top_button = document.getElementById("back_to_top_button");

const copy_button = document.querySelector("#copy_button");
const copy_text = document.querySelector("#copy_text");

const faq_questions = document.querySelectorAll("div.question");
const faq_answers = document.querySelectorAll("div.answer");






// Function to scroll to the top of the page
// * Works only if OS animations are enabled
// * Same effect can be achieved with HTML and CSS only: <a href="#"> with {scroll-behavior: smooth;}
function scroll_to_top() {

    // Scroll to the top of the page
    window.scrollTo(0, 0);

    // Log to console that backing to top was successful
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

    // Log to console that backing to top was successful
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

// Check if elements exist
if (back_to_top_button) {

    window.onscroll = () => {
        display_on_scroll()
    };

}



// Function to copy text to clipboard
function copy_text_to_clipboard() {

    // Set an element display to block so that it is visible and selectable
    copy_text.style.display = "block";

    // Select the text field
    copy_text.select();
    copy_text.setSelectionRange(0, 99999); // For mobile devices

    // Copy the selected value from the text field
    navigator.clipboard.writeText(copy_text.value);

    // Log to console that copying was successful
    console.log("Copied to clipboard: " + copy_text.value);

    // Set an element display back to none so that it is invisible
    copy_text.style.display = "none";

}

// Check if elements exist
if (copy_button && copy_text) {

    copy_button.onclick = () => {
        copy_text_to_clipboard();
    }

}



// Check if elements exist
if (faq_questions) {

    for (let i = 0; i < faq_questions.length; i++) {

        faq_questions[i].addEventListener("click", () => {

            faq_questions[i].classList.toggle("faq_active");

            if (faq_answers[i].style.display === "block") {

                faq_answers[i].style.display = "none";

            } else {

                faq_answers[i].style.display = "block";

            }

        });

    }

}
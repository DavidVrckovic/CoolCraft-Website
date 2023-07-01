const has_bg_img = document.querySelectorAll(".has_bg_img");

if (has_bg_img) {

    has_bg_img.forEach(e => {

        const img_bg = e.querySelector(".bg");

        function loaded() {
            e.classList.add("loaded");
        }

        if (img_bg.complete) {
            loaded();
        } else {
            img_bg.addEventListener("load", loaded);
        }

    })

}
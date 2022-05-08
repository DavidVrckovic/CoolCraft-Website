
function myFunction() {
    var copyText = "play.coolcraft.me";
    navigator.clipboard.writeText(copyText);

    var tooltip = document.getElementById("myTooltip");
    tooltip.innerHTML = "Copied: " + copyText;
}

function outFunc() {
    var tooltip = document.getElementById("myTooltip");
    tooltip.innerHTML = "Copy to clipboard";
}
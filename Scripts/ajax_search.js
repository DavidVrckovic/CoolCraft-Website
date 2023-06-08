function showResult(results) {

    if (results.length == 0 || results.length == 1) {
        document.getElementById("live_search").style.display = "none";
        document.getElementById("live_search").innerHTML = "";
        return;
    }

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("live_search").innerHTML = this.responseText;
            document.getElementById("live_search").style.backgroundColor = "var(--primary_color)";
            document.getElementById("live_search").style.minWidth = "300px";
            document.getElementById("live_search").style.position = "absolute";
            document.getElementById("live_search").style.zIndex = "1";
            document.getElementById("live_search").style.boxShadow = "var(--dropdown_box_shadow)";
            document.getElementById("live_search").style.display = "block";
        }
    }

    xmlhttp.open("GET", "../php/search.php?query=" + results, true);
    xmlhttp.send();
}

function hideResult(){
    document.getElementById("live_search").style.display = "none";
    document.getElementById("live_search").innerHTML = "";
}
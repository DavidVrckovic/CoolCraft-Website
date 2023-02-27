function copyToClipboard(text) {
    var copyElement = document.createElement("textarea");
    // to avoid breaking orgain page when copying more words
    // cant copy when adding below this code
    // copyElement.style.display = 'none'
    document.body.appendChild(copyElement);
    //Be careful if you use texarea. setAttribute('value', value), which works with "input" does not work with "textarea".
    copyElement.value = text;
    copyElement.select();
    document.execCommand("copy");
    document.body.removeChild(copyElement);
}

document.querySelector('#copy-text-btn').onclick = function(){
copyToClipboard('coolcraft.me');
}
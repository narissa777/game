document.addEventListener('keydown', function(event) {
    if (event.code === 'F1') {
        window.location = "musteriekleview";
        event.preventDefault();
    }
    if (event.code === 'F2') {
        window.location = "bakiyeyukle";
        event.preventDefault();
    }
    if (event.code === 'F3') {
        window.location = "kartiade";
        event.preventDefault();
    }
    if (event.code === 'F4') {
        window.location = "musterigoruntule";
        event.preventDefault();
    }
    if (event.code === 'F6') {
        document.getElementById("formyikama").submit();
        event.preventDefault();
    }
    if (event.code === 'F7') {
        document.getElementById("formkopuk").submit();
        event.preventDefault();
    }
    if (event.code === 'F8') {
        window.location = "barkodsorgu/";
        document.exitFullscreen();
        event.preventDefault();
    }
    if (event.code === 'F9') {
        document.getElementById("formsupurge").submit();
        event.preventDefault();
    }
    if (event.code === 'F10') {
        document.getElementById("formhava").submit();
        event.preventDefault();
    }
});
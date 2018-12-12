
document.getElementById('overlay-text').innerHTML = "Please enter how many Full and Partial Bushels you are buying for.";
document.getElementById('overlay').style.position = "fixed";
document.getElementById('overlay').style.top = 0;
document.getElementById('overlay').style.left = 0;
document.getElementById('overlay').style.width = "100%";
document.getElementById('overlay').style.height = "100%";
document.getElementById('overlay').style.backgroundColor = "rgba(153,186,60,.9)";
document.getElementById('overlay').style.textAlign = "center";
document.getElementById('overlay').style.padding = "10%";
document.getElementById('overlay-click').innerHTML = "Click when done.";

function dismissOverlay() {
    var fullCount = parseInt(document.getElementById('full-count').value);
    var halfCount = parseInt(document.getElementById('half-count').value);

    if (halfCount > 0 && fullCount > 0) {
        document.getElementById('overlay-text').innerHTML = "";
        document.getElementById('overlay').style.position = "static";
        document.getElementById('overlay').style.top = 0;
        document.getElementById('overlay').style.height = "auto";
        document.getElementById('overlay-click').innerHTML = "";
        document.getElementById('overlay').style.padding = 0;
    }
}



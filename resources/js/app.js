window.onload = function () {
  setTimeout(function () {
    var popup = document.getElementById("popup");
    if (popup) {
      popup.style.display = "flex"; // IMPORTANT
    }
  }, 5000);
};

function closePopup() {
  var popup = document.getElementById("popup");
  if (popup) {
    popup.style.display = "none";
  }
}
var removeBtn = document.getElementById('remove');


removeBtn.addEventListener("click", function () {
    removeBtn.parentNode.parentNode.removeChild(removeBtn.parentNode);
});




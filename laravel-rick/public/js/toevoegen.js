document.getElementById('add-image-field').addEventListener("click", function(){
var imageContainer = document.getElementById('imageContainer');
    var jouwNaam = document.getElementsByClassName("sideImage");



        var sideImage = document.createElement("DIV");
        sideImage.classList.add("sideImage");
        imageContainer.appendChild(sideImage);
        var x = document.createElement("INPUT");
        x.setAttribute("name", "photos[]");
        x.setAttribute("value", "photos[]");
        x.setAttribute("type", "file");
        x.setAttribute("accept", "images/*");
    for (var i = 1; i < jouwNaam.length; i++) {
        x.addEventListener('change', function () {
            openFile(event, "output" + i);
        });
        if(i == 5) {

        }
    }


        sideImage.appendChild(x);
        var imageField = document.createElement("IMG");
          imageField.setAttribute("src", "../images/default-image.jpg");
          imageField.setAttribute("width", "66");
          imageField.setAttribute("height", "66");
          imageField.setAttribute("alt", "side image");
    for (var o = 0; o < jouwNaam.length; o++) {
        var outputID= "output" + i;
        imageField.setAttribute("id", outputID);

    }
        sideImage.appendChild(imageField);

});

var openFile = function (event, output_id) {


     var input = event.target;

     var reader = new FileReader();
     reader.onload = function(){
         var dataURL = reader.result;
         var output = document.getElementById(output_id);
         output.src = dataURL;
     };
     reader.readAsDataURL(input.files[0]);
};




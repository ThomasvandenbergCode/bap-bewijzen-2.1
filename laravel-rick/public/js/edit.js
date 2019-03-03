window.onload = function() {
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
}
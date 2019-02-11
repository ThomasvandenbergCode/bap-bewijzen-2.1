@extends('layouts.app')
@section('content')

    <div class="wrapper">

        <form class="" action="yeet.html" method="post">



            <input class="product_title" type="text" name="product_title" value="" placeholder="title">



            <!-- opentag imageContainer -->
            <div class="imageContainer">


                <!--  alle kleine images aan de linkerkant van de main (grote) images -->
                <div class="sideImage sideImage1">
                    <input type='file' accept='image/*' onchange='openFile(event, "output1")'>
                    <label for="file"></label>
                    <img id="output1" src="img/default-image.jpg" alt="your image" />
                </div>


                <div class="sideImage sideImage2">
                    <input type='file' accept='image/*' onchange='openFile(event, "output2")'>
                    <label for="file"></label>
                    <img id="output2" src="img/default-image.jpg" alt="your image" />
                </div>

                <div class="sideImage sideImage3">
                    <input type='file' accept='image/*' onchange='openFile(event, "output3")'>
                    <label for="file"></label>
                    <img id="output3" src="img/default-image.jpg" alt="your image" />
                </div>

                <div class="sideImage sideImage4">
                    <input type='file' accept='image/*' onchange='openFile(event, "output4")'>
                    <label for="file"></label>
                    <img id="output4" src="img/default-image.jpg" alt="your image" />
                </div>

                <div class="sideImage sideImage5">
                    <input type='file' accept='image/*' onchange='openFile(event, "output5")'>
                    <label for="file"></label>
                    <img id="output5" src="img/default-image.jpg" alt="your image" />
                </div>

                <div class="sideImage sideImage6">
                    <input type='file' accept='image/*' onchange='openFile(event, "output6")'>
                    <label for="file"></label>
                    <img id="output6" src="img/default-image.jpg" alt="your image" />
                </div>

                <!-- closetag imageContainer -->
            </div>


            <div class="mainImage">
                <input type='file' accept='image/*' onchange='openFile(event, "output7")'>
                <label for="file"></label>
                <img id="output7" src="img/default-image.jpg" alt="your image" />
            </div>

            <!-- de prijs van het product -->
            <div class="geld">
                <span class="currencyinput">€<input type="number" min="1" step="any" placeholder="00,00" /></span>
            </div>

            <div class="sizeContainer">
                <section class="size small">
                    S
                </section>

                <section class="size medium">
                    M
                </section>

                <section class="size large">
                    L
                </section>

                <div class="size smallNumber">
                    <input class="number" type="number" name="small_input" value="" >
                </div>

                <div class="size mediumNumber">
                    <input class="number" type="number" name="large_input" value="">
                </div>

                <div class="size mediumNumber">
                    <input class="number" type="number" name="medium_input" value="">
                </div>
            </div>

            <button type="submit" name="button">voeg toe</button>

        </form>

        <!-- closetag wrapper -->
    </div>
@endsection
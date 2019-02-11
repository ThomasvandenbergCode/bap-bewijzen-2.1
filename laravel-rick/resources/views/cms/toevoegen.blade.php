@extends('layouts.master')

@section('title')
    <title>yeet</title>
@endsection

@section('styles')

    <link rel="stylesheet" href="{{ asset('css/cmstoevoegen.css') }}"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
@endsection

@section('header')
    <h2>product toevoegen</h2>

@endsection

@section('content')

    @if ($errors->any())
        <h4>Het formulier bevat fouten:</h4>
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <!-- opentag wrapper -->
    <div class="wrapper">



        <form class="" action="{{route ('toevoegenHandle')}}" method="post" enctype="multipart/form-data">
            @csrf
           

            <input class="product_title" type="text" name="product_title" value="{{ old('name')}}" placeholder="title">

            <div class="geld">
                <span class="currencyinput">€<input type="text" name="price" min="1" step="any" placeholder="00,00" value="{{ old('price')}}" /></span>
            </div>




            <!-- opentag imageContainer -->
            <div id="imageContainer">



                {{--BUTTON WAARMEE JE ONCLICK EEN IMAGEFIELD KAN TOEVOEGEN--}}
                <div id="add-image-field"><i class="fas fa-plus"></i></div>


                <div class="sideImage sideImage1">
                <input type='file' name="photos[]" value="photos[]" accept='image/*' onchange='openFile(event, "output1")'>
                <label for="file"></label>
                <img id="output1" src="../images/default-image.jpg" alt="your image" />
                </div>


               <div class="sideImage sideImage2">
               <input type='file' accept='image/*' onchange='openFile(event, "output2")'>
                <label for="file"></label>
                <img id="output2" src="../images/default-image.jpg" alt="your image" />
                </div>
            </div>



            <div class="mainImage">
                <input type='file' accept='image/*' onchange='openFile(event, "output7")' value="{{ old('large')}}">
                <label for="file"></label>
                <img id="output7" src="../images/default-image.jpg" alt="your image" />
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
                    <input class="number" type="number" name="small_input" value="{{ old('large')}}" >
                </div>

                <div class="size mediumNumber">
                    <input class="number" type="number" name="large_input" value="{{ old('medium')}}">
                </div>

                <div class="size mediumNumber">
                    <input class="number" type="number" name="medium_input" value="{{ old('small')}}">
                </div>
            </div>

            <div class="form-group form-group-infobox">

                <label for="">De info van het product:</label>
                <br>

                <textarea class="infobox" name="info" rows="10" cols="30" class="form-control">{{ old('info')}}</textarea>

            </div>
            <div class="col-2">


                <div class="form-group form-group-descriptionbox">

                    <label for="">De beschrijving van het product:</label>
                    <br>

                    <textarea class="descriptionbox"  name="description" rows="10" cols="30" class="form-control">{{ old('description')}}</textarea>

                </div>

            </div>

            <div class="col-2">




         </div>

            <p>

                <button type="submit" class="btn btn-primary">Opsturen</button>

            </p>


        </form>

        <!-- closetag wrapper -->
    </div>

    <script type="text/javascript" src="{{ URL::asset('js/toevoegen.js') }}"></script>

@endsection




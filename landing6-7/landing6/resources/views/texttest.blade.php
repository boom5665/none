@extends('layouts.app')

@section('content')

    <div class="index">
        <div class="container">


            <div class="button-box">
                <button class="btn"> Button 1 <img class="img-responsive" src="{{ url('/images/home-swith.png') }}" alt="Image" /> </button>
                <button class="btn2"> Button 2 <img class="img-responsive" src="{{ url('/images/home2-swith.png') }}" alt="Image" /> </button>
                <button class="btn3"> Button 3 <img class="img-responsive" src="{{ url('/images/home3-swith.png') }}" alt="Image" /> </button>
                <button class="btn4"> Button 4 <img class="img-responsive" src="{{ url('/images/home4-swith.png') }}" alt="Image" /> </button>
              </div>




        </div>

    </div>


    <style>


    </style>
    <script>
        $(document).ready(function() {
            $('.btn').click(function() {
                $('.btn').removeClass('activeBtn');
                $(this).addClass('activeBtn');
                $('.btn img').attr('src',
                    'http://127.0.0.1:8000/images/home-swith.png'
                    );

                $('.activeBtn img').attr('src',
                    'http://127.0.0.1:8000/images/home.png'
                    );

            })
            $('.btn2').click(function() {
                $('.btn2').removeClass('activeBtn2');
                $(this).addClass('activeBtn2');
                $('.btn2 img').attr('src',
                    'http://127.0.0.1:8000/images/home2-swith.png'
                    );
                $('.activeBtn2 img').attr('src',
                    'http://127.0.0.1:8000/images/home2.png'
                    );

            })
            $('.btn3').click(function() {
                $('.btn3').removeClass('activeBtn3');
                $(this).addClass('activeBtn3');
                $('.btn3 img').attr('src',
                    'http://127.0.0.1:8000/images/home3-swith.png'
                    );
                $('.activeBtn3 img').attr('src',
                    'http://127.0.0.1:8000/images/home3.png'
                    );

            })
            $('.btn4').click(function() {
                $('.btn4').removeClass('activeBtn4');
                $(this).addClass('activeBtn4');
                $('.btn4 img').attr('src',
                    'http://127.0.0.1:8000/images/home4-swith.png'
                    );
                $('.activeBtn4 img').attr('src',
                    'http://127.0.0.1:8000/images/home4.png'
                    );

            })
        })

    </script>
@endsection


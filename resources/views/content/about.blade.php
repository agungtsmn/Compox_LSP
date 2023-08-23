@extends('layout.main')

@push('css')
    <style>
        .mt{
            margin-top: 90px;
        }
        .about-img{
            width: 500px;
        }
        .about{
            margin-top: 200px;
            margin-bottom: 100px;
        }
        .about h1{
            font-size: 35px;
            font-weight: bold;
            color: #15484C;
        }
        .line{
            height: 2px;
            width: 50px;
            background-color: #98B702;
        }
        .sub-box-about{
            width: 300px;
            height: 150px;
        }
        .line-up{
            width: 1px;
            height: 150px;
            background-color: rgba(0, 0, 0, 0.5);
        }
        .sub-box-about b{
            font-size: 40px;
            color: #98B702;
            font-weight: bold;
        }
    </style>
@endpush

@section('content')
    <div class="mt"></div>
    <div class="container about">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <div class="line mb-2"></div>
                <h1>Bring Flavour to Everyday Life <br> Through the Creative Explorations <br> of Food and Drink</h1>
            </div>
            <img class="about-img" src="{{ asset('img/about.jpg') }}" alt="">
        </div>
        <br><br><br>
        <div class="d-flex">
            <div class="d-flex flex-column justify-content-center align-items-center sub-box-about">
                <b>3</b>
                <span>Brand</span>
            </div>
            <div class="line-up"></div>
            <div class="d-flex flex-column justify-content-center align-items-center sub-box-about">
                <b>900+</b>
                <span>Otlets</span>
            </div>
            <div class="line-up"></div>
            <div class="d-flex flex-column justify-content-center align-items-center sub-box-about">
                <b>50+</b>
                <span>Products</span>
            </div>
            <div class="line-up"></div>
            <div class="d-flex flex-column justify-content-center align-items-center sub-box-about">
                <b>100+</b>
                <span>Cities</span>
            </div>
        </div>
    </div>
@endsection
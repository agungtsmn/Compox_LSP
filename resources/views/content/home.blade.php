@extends('layout.main')

@push('css')
    <style>
        .mt{
            margin-top: 90px;
        }
        .bg-head{
            background-color: #15484C;
            height: 300px;
            background-size: cover;
            background-blend-mode: multiply;
            background-image: url({{ asset('img/wallpaper.jpg') }});
        }
        .custom-container{
            padding: 0 200px;
        }
        .carousel{
            margin-top: -230px;
        }
        .line{
            height: 2px;
            width: 80px;
            background-color: #98B702;
        }
        .sub-title{
            color: #15484C;
            font-weight: bolder;
            letter-spacing: -1px;
            font-size: 25px;
        }
        .box-brand{
            border: 1px solid rgba(225, 225, 225, 0.667);
        }
        .box-brand-img{
            padding: 40px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .box-brand-img img{
            height: 70px;
        }
        .box-brand-title{
            padding: 10px 20px;
        }
        .box-brand-title h3{
            font-size: 20px;
            font-weight: bold;
            letter-spacing: -1px;
            color: #15484C;
        }
        .box-brand-title p{
            font-size: 16px;
            color: #676767;
        }
        .box-product-img img{
            width: 100%;
            box-shadow: #15484C 8px 8px 0px;
        }
        .box-product-title{
            padding: 20px 0;
        }
        .box-product-title span{
            color: #676767;
            font-size: 14px;
        }
        .box-product-title h3{
            font-size: 16px;
            font-weight: bold;
            color: #15484C;
            letter-spacing: -1px;
            margin-top: 5px;
        }
        .box-product-title p{
            color: #676767;
            font-size: 15px;
        }
        .detail{
            text-decoration: none;
            color: #15484C;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 15px;
            transition: ease 0.3s;
        }
        .detail:hover{
            margin-left: 20px;
        }
        .box-follow{
            height: 250px;
            background-color: #15484C;
            margin-top: 100px;
            background-size: cover;
            background-blend-mode: multiply;
            background-image: url({{ asset('img/wallpaper.jpg') }});
        }
        .sub-title-2{
            color: #ffffff;
            font-weight: bolder;
            letter-spacing: -1px;
            font-size: 25px;
        }
        .memori{
            background-color: #15484C;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            position: fixed;
            bottom: 50px;
            left: 50px;
        }
    </style>
@endpush

@section('content')
    <div class="mt"></div>
    <div class="bg-head"></div>
    <div class="custom-container">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('img/banner1.jpg') }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('img/banner2.jpg') }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('img/banner3.jpg') }}" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="container">
        <div class="d-flex justify-content-center flex-column align-items-center mb-4" style="margin-top: 100px">
            <div class="line"></div>
            <h3 class="sub-title mt-3">Brand Kami</h3>
        </div>

        <div class="row">
            <div class="col-lg-3 p-2">
                <div class="box-brand">
                    <div class="box-brand-img">
                        <img src="{{ asset('img/brand1.png') }}" alt="">
                    </div>
                    <div class="box-brand-title">
                        <h3>Janji Jiwa</h3>
                        <p>Kopi Dari Hati Untuk Teman Sejiwa!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 p-2">
                <div class="box-brand">
                    <div class="box-brand-img">
                        <img src="{{ asset('img/brand2.png') }}" alt="">
                    </div>
                    <div class="box-brand-title">
                        <h3>Jiwa Toast</h3>
                        <p>Jiwa Toast, Juaranya Toast!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 p-2">
                <div class="box-brand">
                    <div class="box-brand-img">
                        <img src="{{ asset('img/brand3.png') }}" alt="">
                    </div>
                    <div class="box-brand-title">
                        <h3>Jiwa Tea</h3>
                        <p>Sip Well, Feel Well With Jiwa Tea!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 p-2">
                <div class="box-brand">
                    <div class="box-brand-img">
                        <img src="{{ asset('img/brand4.png') }}" alt="">
                    </div>
                    <div class="box-brand-title">
                        <h3>Burger Geber</h3>
                        <p>Geberin Aja!</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center flex-column align-items-center mb-5" style="margin-top: 100px">
            <div class="line"></div>
            <h3 class="sub-title mt-3">Terbaru Dari Janji Jiwa Group</h3>
        </div>

        <div class="row">
            @foreach ($data as $dataProduct)
                <div class="col-lg-4">
                    <div class="box-product">
                        <div class="box-product-img">
                            <img src="{{ Storage::url($dataProduct->image) }}" alt="">
                        </div>
                        <div class="box-product-title">
                            <span>{{ date('d/m/Y', strtotime($dataProduct->created_at)) }}</span>
                            <h3>{{ $dataProduct->title }}</h3>
                            <p>{{ $dataProduct->description }}</p>
                        </div>
                        {{-- <a href="" class="detail">See Detail <i class="ms-2 bi bi-arrow-right"></i></a> --}}
                    </div>
                </div>
            @endforeach
        </div>

        <div class="box-follow d-flex align-items-center justify-content-center">
            <div class="d-flex justify-content-center flex-column align-items-center">
                <div class="line"></div>
                <h3 class="sub-title-2 mt-3">Bergabunglah dengan kami!</h3>
                <p class="text-center" style="color: rgba(255, 255, 255, 0.8)">Jadilah bagian dari keluarga besar Jiwa Group. Bertumbuh bersama <br> memajukan industri F&B di Indonesia.</p>
            </div>
        </div>

        <div class="memori">{{ $memory }}</div>
    </div>

    <br><br><br><br>
@endsection
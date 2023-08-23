@extends('layout.main')

@push('css')
    <style>
        .mt{
            margin-top: 10px;
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
        /* .plus{ 
            background-color: #15484C;
            text-decoration: none;
            color: white;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 20px;
            position: fixed;
            bottom: 50px;
            right: 50px;
        } */
    </style>
@endpush

@section('content')
    <div class="mt"></div><br>
    <div class="container">
        <div class="d-flex justify-content-center flex-column align-items-center mb-5" style="margin-top: 100px">
            <div class="line"></div>
            <h3 class="sub-title mt-3">Terbaru Dari Janji Jiwa Group</h3>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="box-product">
                    <div class="box-product-img">
                        <img src="{{ asset('img/produk1.jpg') }}" alt="">
                    </div>
                    <div class="box-product-title">
                        <span>23/08/2023</span>
                        <h3>Bersama Rayakan Ramadan dengan Janji Jiwa</h3>
                        <p>Janji Jiwa dan Jiwa Toast kembali meluncurkan rangkaian menu spesial terbarunya edisi Ramadan, yaitu Crispy Chicken Spicy, Crispy Chicken Nugget, Berry Honey Tea dan Passion Peach Tea</p>
                    </div>
                    {{-- <a href="" class="detail">See Detail <i class="ms-2 bi bi-arrow-right"></i></a> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->
    {{-- <button type="button" class="plus" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="bi bi-plus-lg"></i>
    </button>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            ...
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        </div>
    </div> --}}
    <br><br>
@endsection
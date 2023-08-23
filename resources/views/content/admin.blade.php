@extends('layout.main')

@push('css')
    <style>
        .mt{
            margin-top: 250px;
        }
        .btn-jiwa{
            background-color: #15484C;
            color: white;
        }
        .btn-jiwa:hover{
            background-color: #15484C;
            color: white;
        }
        .product-img{
            width: 150px;
            height: 90px;
            object-fit: cover;
        }
    </style>
@endpush

@section('content')
    <div class="mt"></div>
    <div class="container">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-jiwa" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Create new 
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form class="modal-content" action="/admin/create" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Create New Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Gambar</label>
                            <input type="file" name="image" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Enter title">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Descripsion</label>
                            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" placeholder="Enter Description" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-jiwa">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <table class="table mt-4">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Gambar</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($data as $dataProduct)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $dataProduct->title }}</td>
                    <td>{{ $dataProduct->description }}</td>
                    <td><img src="{{ Storage::url( $dataProduct->image ) }}" alt="" class="product-img"></td>
                    <td>
                        <button type="button" class="badge bg-warning border-0" data-bs-toggle="modal" data-bs-target="#exampleModal2{{ $dataProduct->id }}">
                            Edit
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal2{{ $dataProduct->id }}" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                            <div class="modal-dialog">
                                <form class="modal-content" action="/admin/edit/{{ $dataProduct->id }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel2">Edit Data</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput2" class="form-label">Gambar</label>
                                            <input type="file" name="image" class="form-control" id="exampleFormControlInput2">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput2" class="form-label">Title</label>
                                            <input type="text" name="title" class="form-control" id="exampleFormControlInput2" placeholder="Enter title" value="{{ $dataProduct->title }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea2" class="form-label">Descripsion</label>
                                            <textarea class="form-control" name="description" id="exampleFormControlTextarea2" placeholder="Enter Description" rows="3">{{ $dataProduct->description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-jiwa">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <form action="/admin/delete/{{ $dataProduct->id }}" method="post">
                            @csrf
                            <button class="badge bg-danger border-0" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
          </table>
    </div>
    <br><br><br><br><br><br>
@endsection
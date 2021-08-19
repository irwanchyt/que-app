@extends('layouts.app2')
@section('title', 'Admin Loket')
@section('content')


<div class="container">
    <!-- Bordered table start -->
       <div class="row mt-3">
         <div class="col-12">
           <div class="card">
             <div class="card-header">
                <div class="col-md-2">
                      <button type="button" class="btn btn-outline-blue blue block" data-toggle="modal"
                         data-target="#rotateIn">
                           TAMBAH
                         </button>
                   </div>
             </div>
             <div class="card-content collapse show">
                   <div class="table-responsive">
                       <div class="table-responsive pr-1 pl-1 pb-1">
                           <table class="table table-bordered mb-0">
                           <thead>
                               <tr>
                                   <th>No</th>
                                   <th>Nama Loket</th>
                                   <th>Nama Pelayanan</th>
                                   <th class="text-center">aksi</th>
                               </tr>
                           </thead>
                           <tbody>
                               @forelse($counter as $item)

                                   <tr>
                                       <th>{{ $loop->iteration }}</th>
                                       <td>{{ $item->name }}</td>
                                       <td>{{ $item->category->name }}</td>
                                       <td class="text-center">
                                           <a href="{{ route('loket.edit',$item->id) }}" class="btn btn-warning"><i class="la la-pencil"></i></a>
                                           <a href="{{ route('loket.destroy',$item->id) }}" class="btn btn-danger"><i class="la la-trash"></i></a>
                                       </td>
                                   </tr>

                               @empty

                                   <tr>
                                       <h5> Kategori belum Tersedia </h5>
                                   </tr>

                               @endforelse

                           </tbody>
                       </table>
                       </div>
                   </div>
             </div>
           </div>
         </div>
       </div>
       <!-- Bordered table end -->

   </div>

   <div class="col-lg-4 col-md-6 col-sm-12">
    <div class="form-group">
      <div class="modal animated rotateIn text-left" id="rotateIn" tabindex="-1" role="dialog"
      aria-labelledby="myModalLabel64" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel64">FORM LOKET BARU</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('loket.store') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Nama Loket</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="phone" class="col-md-4 col-form-label text-md-right">Pelayanan</label>

                        <div class="col-md-6">

                            <select class="form-control" id="exampleFormControlSelect1" name="category_id">
                                <option></option>
                                @foreach ($category as $item )

                                    <option value="{{ $item->id }}">{{$item->name}}</option>

                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                               TAMBAH
                            </button>
                        </div>
                    </div>
                </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

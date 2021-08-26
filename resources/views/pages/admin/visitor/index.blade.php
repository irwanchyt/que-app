@extends('layouts.app2')
@section('title', 'input visitor')
@section('content')

    <div class="container">

        @if(session('success'))

            <div class="alert alert-success mt-1" role="alert">
                {{session('success')}}
            </div>

        @elseif(session('error-msg'))

            <div class="alert-arrow-left mt-1" role="alert">
                {{session('error-msg')}}
            </div>
        @endif
     <!-- Bordered table start -->

        <div class="row mt-3">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="row">

                </div>
              </div>
              <div class="card-content collapse show">
                    <div class="table-responsive">
                        <div class="table-responsive pr-1 pl-1 pb-1">
                            <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Age</th>
                                    <th>Kelamin</th>
                                    <th>Phone</th>
                                    <th>Alamat</th>
                                    <th class="text-center">aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse($visitor as $item)

                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->age}}</td>
                                    <td>{{ $item->gender }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('visitor.edit',$item->id) }}" class="btn btn-warning"><i class="la la-pencil"></i></a>
                                        <a href="{{ route('visitor.destroy',$item->id) }}" class="btn btn-danger"><i class="la la-trash"></i></a>
                                    </td>
                                </tr>

                            @empty
                                <tr class="text-center">
                                    <td colspan="7"><h5>Data Belum Ada</h5></td>
                                </tr>
                            @endforelse

                            </tbody>

                        </table>
                          {{ $visitor->links() }}
                        </div>
                    </div>
              </div>
            </div>
          </div>
        </div>

    </div>


@endsection

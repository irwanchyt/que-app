@extends('layouts.app2')
@section('title', 'akun admin')
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
                    <div class="col-md-2">
                        <button type="button" class="btn btn-outline-blue blue block" data-toggle="modal"data-target="#fadeInRight">
                            TAMBAH ADMIN
                        </button>
                    </div>
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
                                    <th>Email</th>
                                    <th>No Hp</th>
                                    <th class="text-center">aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse($users as $admin)

                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{$admin->name}}</td>
                                    <td>{{$admin->email}}</td>
                                    <td>{{ $admin->phone }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.edit',$admin->id) }}" class="btn btn-warning"><i class="la la-pencil"></i></a>
                                        <a href="{{ route('admin.destroy',$admin->id) }}" class="btn btn-danger"><i class="la la-trash"></i></a>
                                    </td>
                                </tr>
                                
                            @empty
                                <tr>
                                    <h5>Data Belum Ada</h5>
                                </tr>
                            @endforelse
                                
                            </tbody>
                          
                        </table>
                          {{ $users->links() }}
                        </div>
                    </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Bordered table end -->
            
                       
                        
        <!-- Modal -->
        <div class="modal animated fadeInRight text-left" id="fadeInRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel56" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel56">FORM ADMIN BARU</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('admin.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

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
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">No Hp</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                {{-- <div class="modal-footer">
                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-outline-primary">Save changes</button>
                </div> --}}
                        
                </div>
            </div>
        </div>

    </div>

       
@endsection
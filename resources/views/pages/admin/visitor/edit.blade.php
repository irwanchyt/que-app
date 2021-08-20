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
                <form method="POST" action="{{ route('visitor.update',$visitor->id) }}">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$visitor->name }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="age" class="col-md-4 col-form-label text-md-right">Umur</label>

                        <div class="col-md-6">
                            <input  type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ $visitor->age }}" required autocomplete="age">

                            @error('age')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="phone" class="col-md-4 col-form-label text-md-right">Kelamin</label>

                        <div class="col-md-6">
                            <select class="form-control @error('gender') is-invalid @enderror" name="gender" required autocomplete="gender" autofocus>
                                <option></option>
                                <option value="L">Pria</option>
                                <option value="P">Wanita</option>
                            </select>
                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone" class="col-md-4 col-form-label text-md-right">No Hp</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $visitor->phone }}" required autocomplete="phone" autofocus>

                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone" class="col-md-4 col-form-label text-md-right">Alamat</label>

                        <div class="col-md-6">
                            <textarea id="name"class="form-control @error('alamat') is-invalid @enderror" name="alamat" required autocomplete="alamat" autofocus>{{ $visitor->alamat }}</textarea>
                            @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>
                        </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>

    </div>


@endsection

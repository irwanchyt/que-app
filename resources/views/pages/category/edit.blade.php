@extends('layouts.app2')
@section('title', 'Edit Category')

@section('content')

   <div class="container"> 
        <div class="card mt-2" style="padding:10px">

                <form method="POST" action="{{ route('category.update',$category->id) }}">
                @csrf

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $category->name }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="intial" class="col-md-4 col-form-label text-md-right">Kategori</label>

                    <div class="col-md-6">
                        <input id="initial type="text" class="form-control @error('initial') is-invalid @enderror" name="initial" value="{{ $category->initial }}" required autocomplete="initial">

                        @error('initial')
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
  

@endsection
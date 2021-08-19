@extends('layouts.app2')
@section('title', 'Edit Loket')
@section('content')

    <div class="container">
        <div class="card mt-3 pt-3 pb-3">
            <form method="POST" action="{{ route('loket.update',$counter->id) }}">
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
                            <option value="{{ $counter->category->id }}">{{ $counter->category->name }}</option>
                            @foreach ($category as $item )

                                <option value="{{ $item->id }}">{{$item->name}}</option>

                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                           UPDATE
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>






@endsection

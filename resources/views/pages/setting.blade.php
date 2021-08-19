@extends('layouts.app2')
@section('title', 'profil admin')
@section('content')



<div class="container">
    <div id="user-profile">
        <div class="row mt-2">
          <div class="col-md-12">
                <div class="card profile-with-cover">
                    <div class="card-img-top img-fluid bg-cover height-300" style="background: url('{{ asset('images/back.jpg')}}') 50%;"></div>
                    <div class="media profil-cover-details w-100" style="position: relative;margin-top:-80px" >
                            <div class="media-left pl-2 pt-2">
                                <a href="#" class="profile-image">
                                    <img src="{{ asset('images/128-1280585_user-icon-fa-fa-user-circle.png') }}" class="rounded-circle img-border height-100"
                                    alt="Card image" style="width: 107">
                                </a>
                            </div>
                    </div>
                    <div class="media-body pt-3 px-2">
                        <div class="row">

                                <div class="col-md-12">
                                    <h3 class="card-title">{{ Auth::user()->name }}</h3>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

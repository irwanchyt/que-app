@extends('layouts.app2')
@section('title', 'dashboard admin')
@section('content')

    <div class="container">

        <div class="row">
            <div class="col-md-8 mt-2 ">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card">
                            <div class="card-content">
                            <div class="media align-items-stretch">
                                <div class="p-2 text-center bg-success rounded-left">
                                <i class="icon-user font-large-2 text-white"></i>
                                </div>
                                <div class="p-2 media-body">
                                    <h2>{{ $ticket }}</h2>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card">
                            <div class="card-content">
                            <div class="media align-items-stretch">
                                <div class="p-2 text-center bg-danger rounded-left">
                                <i class="icon-user font-large-2 text-white"></i>
                                </div>
                                <div class="p-2 media-body">
                                    <h2 id="t">{{ $t }}</h2>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12" >
                        <div class="card">
                           <button id="an" class="btn btn-warning">KLIK ANTRIAN</button>
                        </div>
                        <div class="card">
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                                NEXT
                            </button>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12" >
                        <div id="til" class="card" style="width: 45%;">
                           <a href="#" class="btn btn-outline-blue blue block" data-toggle="modal"data-target="#fadeInRight" style="height: 100px;padding-top:30px"><i class="icon-notebook font-large-2 text-black"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card ml-1" style="padding: 20px 20px">

                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <thead>
                                    <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>umur</th>
                                    <th>Hp</th>
                                    <th>Pelayanan</th>
                                    </tr>
                                </thead>
                                <tbody onmousedown='return false;'>
                                    @forelse ($visitor as $item )
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{$item->name}}</td>
                                            <td>{{ $item->age}}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td id="ty">{{$item->counter->name}}</td>
                                        </tr>
                                    @empty

                                    <tr>

                                        <td colspan="5">Data Belum Ada</td>

                                    </tr>

                                    @endforelse


                                </tbody>
                            </table>
                            {{ $visitor->links() }}
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center mt-2">
                <div class="card pl-3 pr-3 pb-2">
                    <div class="card-header">
                        <h3 id="tr">TANGGAL</h3>
                    </div>

                    <div class="dp-inline"></div>
                </div>
            </div>
        </div>

        <div class="modal animated fadeInRight text-left" id="fadeInRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel56" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel56">FORM VISITOR BARU</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('visitor.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">LOKET ID</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="counter_id" value="{{ Auth::user()->counter->id }}" required autocomplete="name"readonly>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
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
                            <label for="age" class="col-md-4 col-form-label text-md-right">Umur</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="age">

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
                                <input id="name" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

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
                                <textarea id="name"class="form-control @error('alamat') is-invalid @enderror" name="alamat" required autocomplete="alamat" autofocus>{{ old('alamat') }}</textarea>
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
    <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">skip</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('visitor.store') }}">
                @csrf

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">LOKET ID</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="counter_id" value="{{ Auth::user()->counter->id }}"  autocomplete="name"readonly>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="pending"  autocomplete="name" autofocus>

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
                        <input  type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="0"  autocomplete="age">

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
                        <select class="form-control @error('gender') is-invalid @enderror" name="gender"  autocomplete="gender" autofocus>
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
                        <input id="name" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="pending"  autocomplete="phone" autofocus>

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
                        <textarea id="name"class="form-control @error('alamat') is-invalid @enderror" name="alamat"  autocomplete="alamat" autofocus>{{ 'pending' }}</textarea>
                        @error('alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>



                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-warning">
                            SKIP
                        </button>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>

@endsection
@push('cus-js')
<script>
    $(document).ready(function(){

      $("#an").click(function(){
          //alert(i++)
        //   i++
          $('#t').html(`<h2 id="t">"antrian".{{ intval($t+1) }}."di".{{$loket}}</h2>`).hide()

         var bel = new Audio('https://www.meramukoding.com/wp-content/uploads/2020/05/doorbell.mp3').play();
         responsiveVoice.speak(document.getElementById("t").textContent,"Indonesian Female","{rate:-1}");
         $('#t').html(`<h2 id="t">{{ $t }}</h2></h2>`).show()
      });
        var i = [0]
    //   $("#ae").click(function(){
    //       //alert(i++)
    //       i++
    //       $('tr').html(`<p id="tr">antrian.${i}"di loket 1"</p>`)
    //      var bel = new Audio('https://www.meramukoding.com/wp-content/uploads/2020/05/doorbell.mp3').play();
    //      responsiveVoice.speak(document.getElementById("tr").textContent,"Indonesian Female","{rate:-1}");
    //   });

        if(typeof document.onselectstart!="undefined"){document.onselectstart=new Function("return false")}
        else{document.onmousedown= new Function ("return false");document.onmouseup= new Function("return true");}
    });
</script>
@endpush

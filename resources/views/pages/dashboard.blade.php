@extends('layouts.app2')
@section('title', 'dashboard admin')
@section('content')

    <div class="container">
        <section id="minimal-gradient-statistics-bg">
          <div class="row mt-2">
            <div class="col-xl-3 col-lg-6 col-12">
              <div class="card bg-gradient-directional-info">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="align-self-center">
                        <i class="icon-user text-white font-large-2 float-left"></i>
                      </div>
                      <div class="media-body text-white text-right">
                        <h3 class="text-white">{{$count}}</h3>
                        <span>Admin</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12">
              <div class="card bg-gradient-directional-danger">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="align-self-center">
                        <i class="icon-list text-white font-large-2 float-left"></i>
                      </div>
                      <div class="media-body text-white text-right">
                        <h3 class="text-white">4</h3>
                        <span>Pelayanan</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12">
              <div class="card bg-gradient-directional-success">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="align-self-center">
                        <i class="icon-users text-white font-large-2 float-left"></i>
                      </div>
                      <div class="media-body text-white text-right">
                        <h3 class="text-white">120</h3>
                        <span>Customer</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12">
              <div class="card bg-gradient-directional-warning">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="align-self-center">
                        <i class="icon-notebook text-white font-large-2 float-left"></i>
                      </div>
                      <div class="media-body text-white text-right">
                        <h3 class="text-white">423</h3>
                        <span>Total Visits</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


         <!-- Bordered table start -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">DATA CUSTOMER</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
              </div>
              <div class="card-content collapse show pl-2 pr-2 pb-2">
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
                        <tbody>
                            @forelse ($visitor as $item )
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{$item->name}}</td>
                                    <td>{{ $item->age}}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{$item->counter->name}}</td>
                                </tr>
                            @empty
                                
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
        <!-- Bordered table end -->

    </div>
@endsection

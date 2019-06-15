@extends('layouts.app')

@section('content')
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
       <a href="{!! route('home') !!}">Dashboard</a>
    </li>
  </ol>
  <div class="container-fluid">
        <div class="animated fadeIn">
             <div class="row">
                <div class="col-6 col-lg-3">
                  <div class="card">
                    <div class="card-body p-3 d-flex align-items-center">
                      <i class="fa fa-users bg-primary p-3 font-2xl mr-3"></i>
                      <div>
                        <div class="text-value-sm text-primary">
                          {{ $stats['users'] }}
                        </div>
                        <div class="text-muted text-uppercase font-weight-bold small">
                          Users
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-lg-3">
                  <div class="card">
                    <div class="card-body p-3 d-flex align-items-center">
                      <i class="fa fa-file bg-info p-3 font-2xl mr-3"></i>
                      <div>
                        <div class="text-value-sm text-info">
                          {{ $stats['pages'] }}
                        </div>
                        <div class="text-muted text-uppercase font-weight-bold small">
                          Pages
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection

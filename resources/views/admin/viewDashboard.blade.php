@extends('layouts.headerAdmin')
@section('tittle', 'Dashboard')
@section('page', 'Dashboard')
@section('name_user', Auth::user()->name )
@section('name_level', Auth::user()->level )
        
@section('content')
    
<div class="row clearfix">
    @if (Auth::user()->level == 'admin')
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card widget_2 big_icon zmdi zmdi-accounts-list-alt">
                <div class="body  bg-warning text-light">
                    <h5>Petugas</h5>
                    <h2 class="text-white">{{ $petugas }}</h2>
                    <small> </small>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card widget_2 big_icon zmdi zmdi-accounts">
                <div class="body  bg-success text-light">
                    <h5>Siswa</h5>
                    <h2 class="text-white">{{ $siswa }}</h2>
                    <small> </small>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card widget_2 big_icon zmdi zmdi-paypal">
                <div class="body  bg-primary text-light">
                    <h5>Pembayaran</h5>
                    <h2 class="text-white">{{ $pembayaran }}</h2>
                    <small> </small>
                </div>
            </div>
        </div>
    @else
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card widget_2 big_icon zmdi zmdi-accounts">
                <div class="body  bg-success text-light">
                    <h5>Siswa</h5>
                    <h2 class="text-white">{{ $siswa }}</h2>
                    <small> </small>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card widget_2 big_icon zmdi zmdi-paypal">
                <div class="body  bg-primary text-light">
                    <h5>Pembayaran</h5>
                    <h2 class="text-white">{{ $pembayaran }}</h2>
                    <small> </small>
                </div>
            </div>
        </div>
    @endif
    
</div>


<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <div class="row">
                    <div class="col-6">
                        <h2><strong>Data</strong> Aktivitas </h2>
                    </div>
                </div>
            </div>
            <div class="body">
@if (Auth::user()->level == 'admin')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr class="text-center">
                                <th width="5%">No</th>
                                <th>Petugas</th>
                                <th>Aksi</th>
                                <th>Log</th>
                                <th>Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no =1; ?>
                            @foreach ($log1 as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->person }}</td>
                                <td>{{ $item->aksi }}</td>
                                <td>{{ $item->log }}</td>
                                <td>{{ date('d F Y, H:i:s ', strtotime($item->created_at) ) }}</td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>  
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr class="text-center">
                                <th width="5%">No</th>
                                <th>Petugas</th>
                                <th>Aksi</th>
                                <th>Log</th>
                                <th>Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no =1; ?>
                            @foreach ($log2 as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->person }}</td>
                                <td>{{ $item->aksi }}</td>
                                <td>{{ $item->log }}</td>
                                <td>{{ date('d F Y, H:i:s ', strtotime($item->created_at) ) }}</td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>  
        </div>
    </div>
</div>
@elseif (Auth::user()->level == 'petugas')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr class="text-center">
                                <th width="5%">No</th>
                                <th>Petugas</th>
                                <th>Aksi</th>
                                <th>Log</th>
                                <th>Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no =1; ?>
                            @foreach ($log2 as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->person }}</td>
                                <td>{{ $item->aksi }}</td>
                                <td>{{ $item->log }}</td>
                                <td>{{ date('d F Y, H:i:s ', strtotime($item->created_at) ) }}</td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>  
        </div>
    </div>
</div>
  
</div>
</div>
</div>    
</div>
@endif
@endsection

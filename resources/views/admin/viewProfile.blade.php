@extends('layouts.headerAdmin')
@section('page', 'Profile Saya')


@section('tittle', 'Profile Saya')
@section('content')

@foreach ($profile as $item)

<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-4 col-md-12">
            <div class="card mcard_3">
                <div class="body">
                    <a href="#"><img src="{{ asset('/') }}images/profile.jpg" class="rounded-circle shadow "
                            alt="profile-image"></a>
                    <h4>{{ $item->name }}</h4>
                    <h5 class="m-t-10">{{ $item->level }}</h5>
                </div>
            </div>
            <div class="card">
                <div class="body">
                    <small class="text-muted">Email : </small>
                    <p>{{ $item->email }}</p>
                    <hr>
                    <small class="text-muted">Telepon : </small>
                    <p>{{ $item->telepon }}</p>
                    <hr>
                    <small class="text-muted">Alamat : </small>
                    <p>{{ $item->alamat }}</p>
                    <hr>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <div class="body pb-5">
                    <h3 class="text-center">Form Ubah Profile</h3>
                    <hr>
                    @if (Auth::user()->level == 'admin')
                        <form method="POST" action="/admin/ubahProfile/{{ $item->id }}">
                    @elseif(Auth::user()->level == 'petugas')
                        <form method="POST" action="/petugas/ubahProfile/{{ $item->id }}">
                    @endif
                            @csrf

                            <div class="form-group">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                                <div class="col-12">
                                    <input id="email" type="hidden"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        autocomplete="new-email" value="{{ $item->email }}">
    
                                    <input id="new_email" type="email"
                                        class="form-control @error('new_email') is-invalid @enderror" name="new_email"
                                        autocomplete="new_email">
                                    <span class="text-danger">*ubah email</span>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                {{-- <label for="level" class="col-md-4 col-form-label text-md-end">{{ __('Level') }}</label>
                                --}}

                                <div class="col-12">
                                    <input id="level" type="hidden" value="petugas"
                                        class="form-control @error('level') is-invalid @enderror" name="level" required
                                        autocomplete="new-level">

                                    @error('level')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-12">
                                    <input id="password" type="hidden"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        autocomplete="new-password" value="{{ $item->password }}">

                                    <input id="new_password" type="password"
                                        class="form-control @error('new_password') is-invalid @enderror"
                                        name="new_password" autocomplete="new-password">
                                    <span class="text-danger">*ubah password</span>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-success float-right">Simpan
                                Perubahan</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection

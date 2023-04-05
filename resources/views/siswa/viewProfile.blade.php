@extends('layouts.headerSiswa')
@section('content')
@foreach ($siswa as $item)
<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-12">
                <div class="card text-center py-2">
                    <a href="#"><img src="{{ asset('/') }}images/profile.jpg" class="rounded-circle shadow mb-3"
                            alt="profile-image" width="150px"></a>
                    <h4>{{ $item->name }}</h4>
                </div>
                <div class="card mt-3">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <label for="nisn">NISN</label>
                            <p>{{ $item->nisn }}</p>
                        </li>
                        <li class="list-group-item">
                            <label for="nis">NIS</label>
                            <p>{{ $item->nis }}</p>
                        </li>
                        <li class="list-group-item">
                            <label for="email">email</label>
                            <p>{{ $item->email }}</p>
                        </li>
                        <li class="list-group-item">
                            <label for="telepon">Telepon</label>
                            <p>{{ $item->telepon }}</p>
                        </li>
                        <li class="list-group-item">
                            <label for="alamat">Alamat</label>
                            <p>{{ $item->alamat }}</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="card p-3">
                    <h3 class="text-center">Form Ubah Password</h3>
                    <hr>

                    {{-- <form method="POST" action="/siswa/ubahProfile/{{ $item->id }}">
                        @csrf
                        <div class="form-group">
                            <div class="row justify-content-center mb-3">
                                <label for="password" class="col-md-10 col-form-label">{{ __('Password') }}</label>
                                <div class="col-10">
                                    <input id="password" type="hidden"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        autocomplete="new-password" value="{{ $item->password }}">

                                    <input id="new_password" type="password"
                                        class="form-control @error('new_password') is-invalid @enderror"
                                        name="new_password" autocomplete="new-password"
                                        placeholder="Masukkan password baru">
                                    <span class="text-danger">*password baru</span>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center mb-3">
                            <div class="col-10 text-end">
                                <a href="/siswa" name="submit" class="btn btn-danger">Kembali</a>
                                <button type="submit" name="submit" class="btn btn-success">Reset Password</button>
                            </div>
                        </div>
                    </form> --}}

                    <form method="POST" action="/siswa/ubahProfile/{{ $item->id }}">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="email" class="col-form-label text-md-end">{{ __('Email') }}</label>
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
                        <div class="form-group mb-3">
                            <div class="col-12">
                                <input id="level" type="hidden" value="siswa"
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
                                class="col-form-label text-md-end">{{ __('Password') }}</label>
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
                            <div class="row justify-content-center mb-3">
                                <div class="col-10 text-end">
                                    <a href="/siswa" name="submit" class="btn btn-danger">Kembali</a>
                                    <button type="submit" name="submit" class="btn btn-success">Reset Password</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection

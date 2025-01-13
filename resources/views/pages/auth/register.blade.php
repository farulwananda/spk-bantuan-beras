@extends('layouts.auth')
@section('content')
    <div class="container right-panel-active" id="container">
        <div class="form-container sign-up-container">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h1>Daftar Akun</h1>
                <div class="social-container"></div>
                <span>Daftarkan Data Diri Anda</span>
                <input type="text" name="name" placeholder="Name" />
                @error('name')
                    <small style="color: red; font-size: 12px">
                        {{ $message }}
                    </small>
                @enderror
                <input type="email" name="email" placeholder="Email" />
                @error('email')
                    <small style="color: red; font-size: 12px">
                        {{ $message }}
                    </small>
                @enderror
                <input type="password" name="password" placeholder="Password" />
                @error('password')
                    <small style="color: red; font-size: 12px">
                        {{ $message }}
                    </small>
                @enderror
                <input type="password" name="password_confirmation" placeholder="Confirm Password" />
                @error('password_confirmation')
                    <small style="color: red; font-size: 12px">
                        {{ $message }}
                    </small>
                @enderror
                <span style="margin-top: 16px; margin-bottom: 8px;">Sudah punya akun?
                    <a href="{{ route('login') }}" style="margin-bottom: 8px; font-size: 12px; color: blue;">Masuk</a>
                </span>
                <button type="submit">Daftar</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <img src="{{ asset('assets/img/logo/logologin.png') }}" width="200" height="200">
                </div>
            </div>
        </div>
    </div>
@endsection

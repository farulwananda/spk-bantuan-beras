@extends('layouts.auth')

@section('content')
    <div class="container" id="container">
        <div class="form-container sign-in-container">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h1>Selamat Datang</h1>
                <div class="social-container"></div>
                <span>Masukkan Akun Yang Sudah Terdaftar</span>
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
                <span style="margin-top: 16px; margin-bottom: 8px;">Belum punya akun? 
                    <a href="{{ route('register') }}" style="margin-bottom: 8px; font-size: 12px; color: blue;">Daftar</a>
                </span>
                <button type="submit">Masuk</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <img src="{{ asset('assets/img/logo/logologin.png') }}" width="200" height="200">
                </div>
            </div>
        </div>
    </div>
@endsection

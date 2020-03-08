@extends('layout')
@section('content')
<div class="main-content columns is-fullheight is-pad-top is-font is-centered">
  <div class="box">
    <form method="POST" action="{{ route('login') }}">
      @csrf
      <h3 align="center" class="title is-3">Login To Your MYKO Account</h3>
      <div class="form-group field">
        <label for="email" class="label">{{ __('E-Mail Address') }}</label>
        <div class="form-control control has-icons-left ">
          <input id="email" type="email" class="input form-control @error('email') is-invalid @enderror" name="email" type="text" placeholder="Your E-Mail Here" value="{{ old('email') }}" required  autofocus>
          @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
          <span class="icon is-small is-left">
            <i class="fas fa-user"></i>
          </span>
        </div>
      </div>

      <div class="form-group field">
        <label for="password" class="label">{{ __('Password') }}</label>
        <div class="form-control control has-icons-left ">
          <input id="password" type="password" class="input form-control @error('password') is-invalid @enderror " type="password" name="password" placeholder="Your Password Here" value="{{ old('password') }}">
          @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
          <span class="icon is-small is-left">
            <i class="fas fa-key"></i>
          </span>
        </div>
      </div>

      <div class="form-group is-button-box">
        <button type="submit" class="button is-selected is-font">  {{ __('Login') }}</button>
      </div>

    </form>
  </div>
</div>
<div>
    <div class="container is-fluid">
    <footer class="footer">
      <div class="container">
        <div class="columns">
          <div class="column is-4"></div>
          <div class="column is-4 has-text-centered"><a class="title is-5">MYKO Hotel & Convention Center Makassar</a></div>
          <div class="column is-4 has-text-right"></div>
        </div>
        <p class="subtitle has-text-centered is-6">&copy; <a>Information Technology Division (ITD) MYKO Hotel - </a><a>Bima Satria Yudha Mohammad</a></p>
      </div>
    </div>
    @endsection

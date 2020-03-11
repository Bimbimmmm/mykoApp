@extends('layout')
<link rel="stylesheet" type="text/css" href= "/css/bulma-theme.css">
@section('content')
<div class="main-content columns is-fullheight is-padding-top is-font">
    @if( Auth::user()->role_id  == '4')
    <aside class="column is-2 is-narrow-mobile is-fullheight-columns section is-hidden-mobile has-background-grey-dark">
      <ul class="menu-list">
        <li>
          <a href="{{ url('voucher') }}" class="is-active has-background-warning has-text-white">
            <span class="icon"><i class="fa fa-ticket-alt"></i></span> Voucher
          </a>
        </li>
        <li>
          <a href="{{ url('advertising') }}" class="has-text-white">
            <span class="icon"><i class="fa fa-bullhorn"></i></span> Advertising
          </a>
        </li>
      </ul>
    </aside>
    @else
  <aside class="column is-2 is-narrow-mobile is-fullheight-columns section is-hidden-mobile has-background-grey-dark">
    <ul class="menu-list">
      <li>
        <a href="{{ url('user') }}" class="has-text-white">
          <span class="icon"><i class="fa fa-users"></i></span> Users
        </a>
      </li>
      <li>
        <a href="{{ url('voucher') }}" class="is-active has-background-warning has-text-white">
          <span class="icon"><i class="fa fa-ticket-alt"></i></span> Voucher
        </a>
      </li>
      <li>
        <a href="{{ url('redeemed') }}" class="has-text-white">
          <span class="icon"><i class="fa fa-file-invoice-dollar"></i></span> Redeemed Voucher
        </a>
      </li>
      <li>
        <a href="{{ url('advertising') }}" class="has-text-white">
          <span class="icon"><i class="fa fa-bullhorn"></i></span> Advertising
        </a>
      </li>
    </ul>
  </aside>
  @endif

  <div class="box is-add-box">
    @foreach($datas as $dat)
    <div class="card">
      <div class="card-image has-text-centered">
        <img src="{{ url('/image/'.$dat->image) }}" width="500" height="600" >
      </div>
      <div class="card-content">
        <div class="media">

          <div class="media-content">
            <p class="has-text-centered  title is-4">{{ $dat->name }}</p>
            <p class="has-text-centered subtitle is-6">Point Required : {{ $dat->point_required }}</p>
          </div>
        </div>
        <div class="has-text-centered  content">
          {{ $dat->description }}
          @endforeach
        </div>
      </div>
    </div>
    <div class="is-button-box">
      <button onclick="window.location='{{ url('voucher') }}'" class="button is-selected is-font" >OK</button>
    </div>
  </div>
</div>
@endsection

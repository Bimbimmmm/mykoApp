@extends('layout')
<link rel="stylesheet" type="text/css" href= "/css/bulma-divider.min.css">
@section('content')
<div class="main-content columns is-fullheight is-padding-top is-font">
  <aside class="column is-2 is-narrow-mobile is-fullheight-columns section is-hidden-mobile has-background-grey-dark">
    <ul class="menu-list">
      <li>
        <a href="{{ url('user') }}" class="is-active has-background-warning has-text-white">
          <span class="icon"><i class="fa fa-users"></i></span> Users
        </a>
      </li>
      <li>
        <a href="{{ url('voucher') }}" class="has-text-white">
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

  <div class="box is-add-box">
    <h3 align="center" class="title is-3"><u>Add New Account</u></h3>
    @foreach($data as $dat)
    <div class="field">
      <form action="{{ route('admin.update',$dat->id) }}" method="POST">
    @csrf
     @method('PUT')
      <label class="label">Account Type</label>
      <div class="control has-icons-left ">
        <div class="select is-fullwidth" >
          <select id="role_id" name="role_id" required="required">
            <option value = '{{ $dat->role_id }}' >{{ $dat->role->role }}</option>
          </select>
        </div>
        <span class="icon is-small is-left">
          <i class="fas fa-tape"></i>
        </span>
      </div>
    </div>

    <label class="label">Personal Information</label>
    <div class="columns">
      <div class="column">
        <div class="field">
          <div class="control has-icons-left ">
            <input id="id_card_number" name="id_card_number" value = '{{ $dat->id_card_number }}' class="input " type="text" placeholder="Your ID Card Number Here" >
            <span class="icon is-small is-left">
              <i class="fas fa-address-card"></i>
            </span>
          </div>
        </div>
      </div>
      <div class="is-divider-vertical" data-content="AND"></div>
      <div class="column">
        <div class="field">
          <div class="control has-icons-left ">
            <input id="fullname" name="fullname" value = '{{ $dat->fullname}}' class="input " type="text" placeholder="Your Full Name Here" >
            <span class="icon is-small is-left">
              <i class="fas fa-user-tie"></i>
            </span>
          </div>
        </div>
      </div>
      <div class="is-divider-vertical" data-content="AND"></div>
      <div class="column">
        <div class="field">
          <div class="control has-icons-left ">
            <input  id="username" name="username" value = '{{ $dat->username }}'  class="input " type="text" placeholder="Your Userame Here" >
            <span class="icon is-small is-left">
              <i class="fas fa-user"></i>
            </span>
          </div>
        </div>
      </div>
    </div>

    <label class="label">Personal Contact</label>
    <div class="columns">
      <div class="column">
        <div class="field">
          <div class="control has-icons-left ">
            <input id="phone_number" name="phone_number" value = '{{ $dat->phone_number }}'  class="input " type="number" placeholder="Your Phone Number Here" >
            <span class="icon is-small is-left">
              <i class="fas fa-phone-alt"></i>
            </span>
          </div>
        </div>
      </div>
      <div class="is-divider-vertical" data-content="AND"></div>
      <div class="column">
        <div class="field">
          <div class="control has-icons-left ">
            <input id="email" name="email" value = '{{ $dat->email }}' class="input " type="text" placeholder="Your E-Mail Here" >
            <span class="icon is-small is-left">
              <i class="fas fa-at"></i>
            </span>
          </div>
        </div>
      </div>
    </div>

    <label class="label">Password</label>
    <div class="columns">
      <div class="column">
        <div class="field">
          <div class="control has-icons-left ">
            <input id="password" name="password" class="input" type="password" placeholder="Your Password Here" >
            <span class="icon is-small is-left">
              <i class="fas fa-key"></i>
            </span>
          </div>
        </div>
      </div>
      <div class="is-divider-vertical" data-content="AND"></div>
      <div class="column">
        <div class="field">
          <div class="control has-icons-left ">
            <input  id="password-confirm" class="input " type="password" placeholder="Confirm Your Password Here" name="password_confirmation"   autocomplete="new-password">
            <span class="icon is-small is-left">
              <i class="fas fa-lock"></i>
            </span>
          </div>
        </div>
      </div>
    </div>

    <label class="label">Personal Address</label>
    <div class="columns">
      <div class="column">
        <div class="field">
          <div class="control has-icons-left ">
            <input id="address" name="address" value = '{{ $dat->address }}'  class="input " type="text" placeholder="Your Address Here" >
            <span class="icon is-small is-left">
              <i class="fas fa-home"></i>
            </span>
          </div>
        </div>
      </div>
      <div class="is-divider-vertical" data-content="AND"></div>
      <div class="column">
        <div class="field">
          <div class="control has-icons-left ">
            <input id="city" name="city" value = '{{ $dat->city }}'  class="input " type="text" placeholder="Your City Here" >
            <span class="icon is-small is-left">
              <i class="fas fa-city"></i>
            </span>
          </div>
        </div>
      </div>
      <div class="is-divider-vertical" data-content="AND"></div>
      <div class="column">
        <div class="field">
          <div class="control has-icons-left ">
            <input id="region" name="region" value = '{{ $dat->region }}' class="input " type="text" placeholder="Your Region Here" >
            <span class="icon is-small is-left">
              <i class="fas fa-flag"></i>
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="field">
      <label class="label">Registration Number</label>
      <div class="control has-icons-left ">
        <input id="registration_number" name="registration_number" value = '{{ $dat->registration_number }}' class="input " type="text" placeholder="Your Registration Number Here" >
        <span class="icon is-small is-left">
          <i class="fas fa-registered"></i>
        </span>
      </div>
    </div>

    @endforeach
    <div class="is-button-box">
      <button type ="submit" class="button is-selected is-font">Submit</button>
      </form>
      <button onclick="window.location='{{ url('admin') }}'" class="button has-background-grey-light is-font" >Cancel</button>
    </div>

  </div>
</div>
@endsection

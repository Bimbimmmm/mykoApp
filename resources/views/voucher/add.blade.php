@extends('layout')
<link rel="stylesheet" type="text/css" href= "/css/bulma-divider.min.css">
<link rel="stylesheet" type="text/css" href= "/css/bulma-switch.min.css">
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
        <a href="{{ url('user') }}" class=" has-text-white">
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

  <div class="box is-box">
    <h3 align="center" class="title is-3"><u>Add New Voucher</u></h3>
    <div class="field">
      <form action="/voucher/store" method="POST" enctype="multipart/form-data">
          @csrf
      <label class="label">Voucher Type</label>
      <div class="control has-icons-left ">
        <div class="select is-fullwidth" >
          <select id="voucher_type_id" name="voucher_type_id" required="required">
            @foreach($datas as $data)
            <option value = '{{ $data->id }}' >{{ $data->name }}</option>
            @endforeach
          </select>
        </div>
        <span class="icon is-small is-left">
          <i class="fas fa-credit-card"></i>
        </span>
      </div>
    </div>

    <div class="field">
      <label class="label">Voucher Name</label>
      <div class="control has-icons-left ">
        <input id="name" name="name" required="required" class="input " type="text" placeholder="Input Voucher Name Here" >
        <span class="icon is-small is-left">
          <i class="fas fa-file-signature"></i>
        </span>
      </div>
    </div>

    <div class="field">
      <label class="label">Point Required</label>
      <div class="control has-icons-left ">
        <input id="point_required" name="point_required" required="required" class="input " type="number" placeholder="Input Point Required Here" >
        <span class="icon is-small is-left">
          <i class="fas fa-coins"></i>
        </span>
      </div>
    </div>

    <label class="label">Active Date</label>
    <div class="columns">
      <div class="column">
        <div class="field">
          <div class="control has-icons-left ">
            <input id="valid" name="valid" required="required" class="input " type="date" >
            <span class="icon is-small is-left">
              <i class="fas fa-calendar-plus"></i>
            </span>
          </div>
        </div>
      </div>
      <div class="is-divider-vertical" data-content="TO"></div>
      <div class="column">
        <div class="field">
          <div class="control has-icons-left ">
            <input id="expire" name="expire" required="required" class="input " type="date" >
            <span class="icon is-small is-left">
              <i class="fas fa-calendar-times"></i>
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="field">
      <label class="label">Voucher Description</label>
      <div class="control has-icons-left ">
        <input id="description" name="description" required="required" class="input " type="text" placeholder="Input Voucher Description Here" >
        <span class="icon is-small is-left">
          <i class="fas fa-paragraph"></i>
        </span>
      </div>
    </div>

    <div class="field">
      <label class="label">Voucher Status</label>
      <div class="control has-icons-left ">
        <div class="select is-fullwidth" >
          <select id="is_active" name="is_active" required="required">
            @foreach($datass as $dat)
            <option value = '{{ $dat->id }}' >{{ $dat->name }}</option>
            @endforeach
          </select>
        </div>
        <span class="icon is-small is-left">
          <i class="fas fa-credit-card"></i>
        </span>
      </div>
    </div>

    <div class="field">
      <div id="file-js-example" class="file is-centered is-boxed has-name">
        <label class="file-label">
          <input id="image" name="image" required="required" class="file-input" type="file">
          <span class="file-cta">
            <span class="file-icon">
              <i class="fas fa-upload"></i>
            </span>
            <span class="file-label">
              Upload Voucher Image
            </span>
          </span>
          <span class="file-name">
            No Image Selected
          </span>
        </label>
      </div>
    </div>

    <div class="is-button-box">
      <button type ="submit" class="button is-selected is-font">Submit</button>
    </form>
      <button onclick="window.location='{{ url('voucher') }}'" class="button has-background-grey-light is-font" >Cancel</button>
    </div>
  </div>
</div>

<script>
const fileInput = document.querySelector('#file-js-example input[type=file]');
fileInput.onchange = () => {
  if (fileInput.files.length > 0) {
    const fileName = document.querySelector('#file-js-example .file-name');
    fileName.textContent = fileInput.files[0].name;
  }
}
</script>
@endsection

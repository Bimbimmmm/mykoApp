@extends('layout')
<link rel="stylesheet" type="text/css" href= "/css/bulma-divider.min.css">
<link rel="stylesheet" type="text/css" href= "/css/bulma-switch.min.css">
@section('content')
<div class="main-content columns is-fullheight is-padding-top is-font">
  @if( Auth::user()->role_id  == '4')
  <aside class="column is-2 is-narrow-mobile is-fullheight-columns section is-hidden-mobile has-background-grey-dark">
    <ul class="menu-list">
      <li>
        <a href="{{ url('voucher') }}" class="has-text-white">
          <span class="icon"><i class="fa fa-ticket-alt"></i></span> Voucher
        </a>
      </li>
      <li>
        <a href="{{ url('advertising') }}" class="is-active has-background-warning has-text-white">
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
        <a href="{{ url('advertising') }}" class="is-active has-background-warning has-text-white">
          <span class="icon"><i class="fa fa-bullhorn"></i></span> Advertising
        </a>
      </li>
    </ul>
  </aside>
@endif
  <div class="box is-add-box">
    <h3 align="center" class="title is-3"><u>Edit Advertising</u></h3>
    <div class="field">
        @foreach($datas as $data)
      <form action="{{ route('advertising.update',$data->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
           @method('PUT')
      <label class="label">Advertising Type</label>
      <div class="control has-icons-left ">
        <div class="select is-fullwidth" >
          <select  id="advertising_type_id" name="advertising_type_id" required="required">
            <option value = '{{ $data->advertisingtype->id }}' >{{ $data->advertisingtype->name }}</option>
            @endforeach
          </select>
        </div>
        <span class="icon is-small is-left">
          <i class="fas fa-ad"></i>
        </span>
      </div>
    </div>

  <label class="label">Advertising Details</label>
    <div class="columns">
      <div class="column">
        <div class="field">
          <div class="control has-icons-left ">
            <input class="input" type="text"  id="name" name="name" value = '{{ $data->name }}' required="required" placeholder="Input Advertising Name Here" >
            <span class="icon is-small is-left">
              <i class="fas fa-signature"></i>
            </span>
          </div>
        </div>
      </div>
      <div class="is-divider-vertical" data-content="AND"></div>
      <div class="column">
        <div class="field">
          <div class="control has-icons-left ">
            <input class="input " type="text"  id="caption" name="caption" value = '{{ $data->caption }}' required="required" placeholder="Input Advertising Caption Here" >
            <span class="icon is-small is-left">
              <i class="fas fa-closed-captioning"></i>
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="field">
      <label class="label">Advertising Desciription</label>
      <div class="control has-icons-left ">
        <input class="input " type="text"  id="description" name="description" value = '{{ $data->description }}' required="required" placeholder="Input Advertising Desription Here" >
        <span class="icon is-small is-left">
          <i class="fas fa-info-circle"></i>
        </span>
      </div>
    </div>

    <div class="field">
      <input id="switchRoundedWarning" type="checkbox" name="switchRoundedWarning" class="switch is-rounded is-warning">
      <label for="switchRoundedWarning">Add Advertising URL?</label>
    </div>

    <div id ="url" class="field" style="display:none;">
      <label class="label">Advertising URL</label>
      <div class="control has-icons-left ">
        <input class="input " type="text"  id="url" name="url" value = '{{ $data->url }}'placeholder="Input Advertising URL Here" >
        <span class="icon is-small is-left">
          <i class="fas fa-location-arrow"></i>
        </span>
      </div>
    </div>

    <label class="label">Advertising Status</label>
    <div class="columns">
      <div class="column">
        <div class="control has-icons-left ">
          <div class="select is-fullwidth" >
            <select disabled>
            <option>{{ $data->status->name }}</option>
            </select>
          </div>
          <span class="icon is-small is-left">
            <i class="fas fa-credit-card"></i>
          </span>
        </div>
      </div>
      <div class="is-divider-vertical" data-content="CHANGE TO"></div>
      <div class="column">
        <div class="field">
          <div class="control has-icons-left ">
            <div class="select is-fullwidth" >
              <select id="is_active" name="is_active" required="required">
                @foreach($datass as $datas )
                <option value = '{{ $datas->id }}'>{{ $datas->name }}</option>
                @endforeach
              </select>
            </div>
            <span class="icon is-small is-left">
              <i class="fas fa-credit-card"></i>
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="field">
      <div id="file-js-example" class="file is-centered is-boxed has-name">
        <label class="file-label">
          <input  id="image" name="image" class="file-input" type="file">
          <span class="file-cta">
            <span class="file-icon">
              <i class="fas fa-upload"></i>
            </span>
            <span class="file-label">
              Upload Ads Image
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
      <button onclick="window.location='{{ url('advertising') }}'" class="button has-background-grey-light is-font" >Cancel</button>
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

<script>
$(document).ready(function(){
  $('#switchRoundedWarning').click(function(){
    $('#url').toggle();
  });
});
</script>
@endsection

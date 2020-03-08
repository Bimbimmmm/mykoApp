@extends('layout')
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

  <div class="box is-box">
    <div class="box is-button-box">
      <button onclick="window.location='{{ url('user') }}'" class="button has-background-grey-light is-font">Member</button>
      <button onclick="window.location='{{ url('editor') }}'" class="button is-selected is-font" >Editor </button>
      <button onclick="window.location='{{ url('fo') }}'" class="button has-background-grey-light is-font">Front Office</button>
      <button onclick="window.location='{{ url('admin') }}'" class="button has-background-grey-light is-font">Administrator</button>
    </div>

    <div class="field has-addons">
      <div class="control is-centered">
        <input class="input" type="text" placeholder="Find Editor">
      </div>
      <div class="control">
        <button class="button is-selected">
          <span class="icon"><i class="fa fa-search"></i></span>
        </button>
      </div>
    </div>

      <table class="table is-centered centered-font is-striped">
      <thead>
        <tr>
          <th align="center">Number</th>
          <th align="center">Full Name</th>
          <th align="center">Username</th>
          <th align="center">Phone Number</th>
          <th align="center">E-Mail</th>
          <th align="center">Employee Number</th>
          <th colspan="2" align="center">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($datas as $data)
        <tr>
          <th align="center"></th>
          <td align="center">{{ $data->fullname }}</td>
          <td align="center">{{ $data->username }}</td>
          <td align="center">{{ $data->phone_number }}</td>
          <td align="center">{{ $data->email }}</td>
          <td align="center">{{ $data->registration_number }}</td>
          <td align="center">
            <button onclick="window.location='{{ url('editor/edit', array("$data->id")) }}'" class="button is-selected">
              <span class="icon"><i class="fa fa-edit"></i></span>
            </button>
          </td>
          <td align="center">
            <form action="{{ route('editor.destroy', $data->id)}}" method="POST">
              @csrf
              @method('DELETE')
            <button class="button is-selected">
              <span class="icon"><i class="fa fa-trash"></i></span>
            </button>
          </form>
          </td>
        </tr>
        @endforeach
    </tbody>
    </table>
  {{ $datas->links('pagination.default') }}
  </div>
</div>
<script>
var table = document.getElementsByTagName('table')[0],
  rows = table.getElementsByTagName('tr'),
  text = 'textContent' in document ? 'textContent' : 'innerText';

for (var i = 1, len = rows.length; i < len; i++) {
  rows[i].children[0][text] = i + '' + rows[i].children[0][text];
}
</script>
@endsection

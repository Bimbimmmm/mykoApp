@extends('layout')
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

  <div class="box is-box">

    <div class="field has-addons">
      <div class="control is-centered">
        <input class="input" type="text" placeholder="Find Voucher">
      </div>
      <div class="control">
        <button class="button is-selected">
          <span class="icon"><i class="fa fa-search"></i></span>
        </button>
      </div>
    </div>
     @if( Auth::user()->role_id  == '3')
     @else
    <div class="control">
      <button onclick="window.location='{{ url('voucher/add') }}'" class="button is-selected">
        <span class="icon"><i class="fa fa-plus"></i></span>
        <span class="is-font">Add New Voucher</span>
      </button>
    </div>
    @endif
    <table class="table is-centered centered-font is-striped">
      <thead>
        <tr>
          <th align="center">Number</th>
          <th align="center">Voucher Type</th>
          <th align="center">Voucher Name</th>
          <th align="center">Point Required</th>
          <th align="center">Expired Date</th>
          <th align="center">Voucher Status</th>
          <th colspan="3" align="center">Action</th>
        </tr>
      </thead>
      <tbody>
        @if( Auth::user()->role_id  == '3')
        @foreach($datass as $datas)
        <tr>
          <th align="center"></th>
          <td align="center">{{ $datas->vouchertype->name }}</td>
          <td align="center">{{ $datas->name }}</td>
          <td align="center">{{ $datas->point_required }}</td>
          <td align="center">{{ $datas->expire }}</td>
          <td align="center">{{ $datas->voucherstatus->name }}</td>
          <td align="center">
            <button onclick="window.location='{{ url('voucher/view', array("$datas->id")) }}'" class="button is-selected">
              <span class="icon"><i class="fa fa-eye"></i></span>
            </button>
          </td>
        </tr>
        @endforeach
        @else
        @foreach($datas as $data)
        <tr>
          <th align="center"></th>
          <td align="center">{{ $data->vouchertype->name }}</td>
          <td align="center">{{ $data->name }}</td>
          <td align="center">{{ $data->point_required }}</td>
          <td align="center">{{ $data->expire }}</td>
          <td align="center">{{ $data->voucherstatus->name }}</td>
          @if( Auth::user()->role_id  == '3')
          <td align="center">
            <button onclick="window.location='{{ url('voucher/view', array("$data->id")) }}'" class="button is-selected">
              <span class="icon"><i class="fa fa-eye"></i></span>
            </button>
          </td>
          @else
          <td align="center">
            <button onclick="window.location='{{ url('voucher/view', array("$data->id")) }}'" class="button is-selected">
              <span class="icon"><i class="fa fa-eye"></i></span>
            </button>
          </td>
          <td align="center">
            <button onclick="window.location='{{ url('voucher/edit', array("$data->id")) }}'" class="button is-selected">
              <span class="icon"><i class="fa fa-edit"></i></span>
            </button>
          </td>
          <td align="center">
            <form action="{{ route('voucher.destroy', $data->id)}}" method="POST">
              @csrf
              @method('DELETE')
            <button class="button is-selected">
              <span class="icon"><i class="fa fa-trash"></i></span>
            </button>
          </form>
          </td>
          @endif
        </tr>
        @endforeach
      </tbody>
    </table>
  {{ $datas->links('pagination.default') }}
  @endif
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

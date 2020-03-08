@extends('layout')
@section('content')
<div class="main-content columns is-fullheight is-padding-top is-font">
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
    <div class="control">
      <button onclick="window.location='{{ url('voucher/add') }}'" class="button is-selected">
        <span class="icon"><i class="fa fa-plus"></i></span>
        <span class="is-font">Add New Voucher</span>
      </button>
    </div>

    <table class="table is-centered centered-font is-striped">
      <thead>
        <tr>
          <th align="center">Number</th>
          <th align="center">Voucher Type</th>
          <th align="center">Voucher Name</th>
          <th align="center">Voucher Code</th>
          <th align="center">Point Required</th>
          <th align="center">Expired Date</th>
          <th align="center">Voucher Status</th>
          <th align="center">Issued By</th>
          <th align="center">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th align="center">01</th>
          <td align="center">Room</td>
          <td align="center">Free Premiere King</td>
          <td align="center">MPDDMMYYAAAA</td>
          <td align="center">1500</td>
          <td align="center">05-Mar-20</td>
          <td align="center">Active</td>
          <td align="center">Editor A</td>
          <td align="center">
            <button class="button is-selected">
              <span class="icon"><i class="fa fa-eye"></i></span>
            </button>
            <button class="button is-selected">
              <span class="icon"><i class="fa fa-edit"></i></span>
            </button>
            <button class="button is-selected">
              <span class="icon"><i class="fa fa-trash"></i></span>
            </button>
          </td>
        </tr>
        <tr>
          <th align="center">02</th>
          <td align="center">Food&Beverages</td>
          <td align="center">Free Menu The Fig Tree</td>
          <td align="center">MPDDMMYYAAAA</td>
          <td align="center">150</td>
          <td align="center">05-Mar-20</td>
          <td align="center">Acitve</td>
          <td align="center">Editor B</td>
          <td align="center">
            <button class="button is-selected">
              <span class="icon"><i class="fa fa-eye"></i></span>
            </button>
            <button class="button is-selected">
              <span class="icon"><i class="fa fa-edit"></i></span>
            </button>
            <button class="button is-selected">
              <span class="icon"><i class="fa fa-trash"></i></span>
            </button>
          </td>
        </tr>
      </tbody>
    </table>
    <nav class="pagination is-centered" role="navigation" aria-label="pagination">
      <a class="pagination-previous">Previous</a>
      <a class="pagination-next">Next page</a>
      <ul class="pagination-list">
        <li><a class="pagination-link" aria-label="Goto page 1">1</a></li>
        <li><span class="pagination-ellipsis">&hellip;</span></li>
        <li><a class="pagination-link" aria-label="Goto page 45">45</a></li>
        <li><a class="pagination-link is-current" aria-label="Page 46" aria-current="page">46</a></li>
        <li><a class="pagination-link" aria-label="Goto page 47">47</a></li>
        <li><span class="pagination-ellipsis">&hellip;</span></li>
        <li><a class="pagination-link" aria-label="Goto page 86">86</a></li>
      </ul>
    </nav>
  </div>
</div>
@endsection

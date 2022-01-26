@extends('layouts.app', ['activePage' => 'funds', 'titlePage' => __('Add Funds')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header card-header-info">
        <h4 class="card-title">Pay Amount</h4>
      </div>
      <div class="card-body">
        <div>
          <div class="pay-div amount_input">
              <div class="mb-3 col-md-4 m-auto">
                  <label class="input-group-text">Enter Amount In (USD)</label>
                  <input class="form-group-control input-radius" type="number" name="amount" min="1" step="1" onkeypress="" title="Numbers only" placeholder="" aria-required="true" aria-invalid="false"> 
              </div>
          </div> 
          <div class="form-group mb-3 m-auto pay-div col-md-4">
              <label class="input-group-text">Payment Mode</label> 
              <select class="form-select">
                  <option disabled selected>Select Payment Method</option>
                  <option value="BTC">Bitcoin</option>
                  <option value="ETH">Ethereum</option>
                  <option value="DOGE">Dogecoin</option>
                  <option value="TRX">Tron</option>
                  <option value="USDT.TRC20">Tether USD (Tron/TRC20)</option>
                  <option value="LTC">Litecoin</option>
                  <option value="SHIB">SHIBA INU (ERC20)</option>
                  <option value="SOL">Solana</option>
              </select>
          </div> 
          <div class="text-center">
              <button type="button" class="btn btn-info w-md">Make Payment</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
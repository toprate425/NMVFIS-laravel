@extends('layouts.app', ['activePage' => 'balance', 'titlePage' => __('Withdrawal Wallet Balance')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="card">
         <div class="card-header card-header-info">
            <h4 class="card-title">Withdrawal Wallet Balance</h4>
            <span class="bg-soft-success text-primary">$0.00</span>
        </div>
        <div class="card-body">
            <div class="wallet-container">
                <div class="">
                    <label class="input-group-text wallet-label">Enter Amount In (USD)</label>
                    <input class="input-style input-radius" type="number" placeholder="Enter Amount" value="0" name="amount"> 
                </div>
                <div class="form-radio">
                    <label class="input-group-text wallet-label">Payment Mode</label>
                    <label class="wallet-label">
                        <input class="form-radio-input" type="radio" checked value="">
                        &nbspBitcoin
                    </label>
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-info w-md" style="width: 100%; margin: 20px 0px">Withdraw</button>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection
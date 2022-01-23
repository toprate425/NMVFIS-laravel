@extends('layouts.app', ['activePage' => 'withdrawal', 'titlePage' => __('Withdrawal Wallet to Cash Wallet transfer')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="card">
         <div class="card-header card-header-info">
            <h4 class="card-title">Cash Wallet Balance</h4>
            <span class="bg-soft-success text-primary">$0.00</span>
        </div>
        <div class="card-body">
            <div class="wallet-container">
                <div class="">
                    <label class="input-group-text wallet-label">Enter User Id</label>
                    <input class="input-style" type="text" placeholder="User Id" value="" name="userid" disabled> 
                </div>
                <div class="">
                    <label class="input-group-text wallet-label">Amount</label>
                    <input class="input-style" type="text" placeholder="Enter Amount" value="" name="amount"> 
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-info w-md" style="width: 100%; margin: 20px 0px">Submit</button>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection
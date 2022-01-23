@extends('layouts.app', ['activePage' => 'invest_others', 'titlePage' => __('Invest For Others')])

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
                <div class="wallet-body">
                    <div class="wallet-div">
                        <div class="">
                            <label class="input-group-text wallet-label">Enter User Id</label>
                            <input class="input-style" type="text" value="" name="userid"> 
                        </div>
                    </div> 
                    <div class="wallet-div">
                        <label class="input-group-text wallet-label">Select Package</label> 
                        <select class="wallet-select">
                            <option disabled selected>Select Package</option>
                            <option value="first">50 to 9999</option>
                            <option value="second">10000 to 29999</option>
                            <option value="third">30000 to 49999</option>
                            <option value="fourth">50000 to 29999</option>
                            <option value="fifth">10000 to 99999</option>
                            <option value="sixth">100000 to 200000</option>
                        </select>
                    </div> 
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
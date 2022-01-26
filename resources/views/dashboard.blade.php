@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3 card-h-100">
          <div class="card card-chart">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-8">
                  <span class="text-muted mb-3 lh-1 d-block text-truncate">ROI Income</span>
                  <h4 class="mb-3">$0</h4>
                </div>
                <div class="col-4">
                  <div class="ct-chart">chart1</div>
                </div>
              </div>
              <div class="text-nowrap">
                <span class="badge bg-soft-success text-success">$0.00</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 card-h-100">
          <div class="card card-chart">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-8">
                  <span class="text-muted mb-3 lh-1 d-block text-truncate">Direct Income</span>
                  <h4 class="mb-3">$0</h4>
                </div>
                <div class="col-4">
                  <div class="ct-chart">chart2</div>
                </div>
              </div>
              <div class="text-nowrap">
                <span class="badge bg-soft-success text-success">$0.00</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 card-h-100">
          <div class="card card-chart">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-8">
                  <span class="text-muted mb-3 lh-1 d-block text-truncate">Binary Income</span>
                  <h4 class="mb-3">$0</h4>
                </div>
                <div class="col-4">
                  <div class="ct-chart">chart3</div>
                </div>
              </div>
              <div class="text-nowrap">
                <span class="badge bg-soft-success text-success">$0.00</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 card-h-100">
          <div class="card card-chart">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-8">
                  <span class="text-muted mb-3 lh-1 d-block text-truncate">Binary Income</span>
                  <h4 class="mb-3">$0</h4>
                </div>
                <div class="col-4">
                  <div class="ct-chart">chart4</div>
                </div>
              </div>
              <div class="text-nowrap">
                <span class="badge bg-soft-success text-success">$0.00</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 card-h-100">
          <div class="card card-chart">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-8">
                  <span class="text-muted mb-3 lh-1 d-block text-truncate">Current Investment</span>
                  <h4 class="mb-3">$0</h4>
                </div>
                <div class="col-4">
                  <div class="ct-chart">chart5</div>
                </div>
              </div>
              <div class="text-nowrap">
                <span class="badge bg-soft-success text-success">$0.00</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 card-h-100">
          <div class="card card-chart">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-8">
                  <span class="text-muted mb-3 lh-1 d-block text-truncate">Coordinator Income</span>
                  <h4 class="mb-3">$0</h4>
                </div>
                <div class="col-4">
                  <div class="ct-chart">chart6</div>
                </div>
              </div>
              <div class="text-nowrap">
                <span class="badge bg-soft-success text-success">$0.00</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 card-h-100">
          <div class="card card-chart">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-8">
                  <span class="text-muted mb-3 lh-1 d-block text-truncate">Elite Income</span>
                  <h4 class="mb-3">$0</h4>
                </div>
                <div class="col-4">
                  <div class="ct-chart">chart7</div>
                </div>
              </div>
              <div class="text-nowrap">
                <span class="badge bg-soft-success text-success">$0.00</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 card-h-100">
          <div class="card card-chart">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-8">
                  <span class="text-muted mb-3 lh-1 d-block text-truncate">Withdrawal Wallet</span>
                  <h4 class="mb-3">$0</h4>
                </div>
                <div class="col-4">
                  <div class="ct-chart">chart8</div>
                </div>
              </div>
              <div class="text-nowrap">
                <span class="badge bg-soft-success text-success">$0.00</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-5">
          <div class="card card-h-100">
            <div class="card-body">
              <div class="d-flex flex-wrap align-items-center mb-4">
                <h5 class="u-card-title me-2">Total Income</h5> 
                <div class="ms-auto">
                  <div></div>
                </div>
              </div>
              <div class="row align-items-center">
                <div class="col-sm">
                  <div class="resize-triggers"><div class="expand-trigger"><div style="width: 205px; height: 137px;"></div></div><div class="contract-trigger"></div></div>
                </div>
                <div class="col-sm align-self-center">
                  <div class="mt-4 mt-sm-0">
                    <div class="mt-4 pt-2">ROI<p>$ 0</p></div>
                    <div class="mt-4 pt-2">Direct<p>$ 0</p></div>
                    <div class="mt-4 pt-2">Binary<p>$ 0</p></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-7">
          <div class="row">
            <div class="col-xl-8">
              <div class="card card-h-100 myc">
                <div class="card-body">
                  <div>
                    <div class="d-flex flex-wrap align-items-center mb-4">
                      <h5 class="u-card-title me-2">Investment Overview</h5>
                    </div>
                    <div class="row align-items-center">
                      <div class="col-sm">
                        <div style="min-height: 247.256px">chart</div>
                      </div>
                      <div class="col-sm align-self-center">
                        <div class="mt-4 mt-sm-0 mt-div">
                          <p class="mb-1">Total Investment </p>
                          <h4>$ 0</h4>
                          <div class="row g-0">
                            <div class="col-6">
                              <div><p class="mb-2 text-muted text-uppercase font-size-11">ROI Credited</p> 
                              <h5 class="fw-medium">$ 0</h5></div>
                            </div>
                            <div class="col-6">
                              <div><p class="mb-2 text-muted text-uppercase font-size-11 remaining">ROI Remaining</p> 
                              <h5 class="fw-medium">$ 0</h5></div>
                            </div>
                            <div class="mt-2">
                              <a href="#/topup-report" class="btn btn-info btn-sm">View more</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4">
              <div class="card bg-info text-white shadow-primary card-h-100">
                  <div class="card-body p-0">
                      <div class="carousel-inner">
                          <div class="carousel-item active">
                              <div class="text-center p-4 coin-block">
                                  <i class="material-icons widget-box-1-icon">currency_bitcoin</i> 
                                  <div class="avatar-md m-auto">
                                      <span class="avatar-title rounded-circle bg-soft-light text-white font-size-24 ">
                                      <a data-bs-toggle="modal" data-bs-target="#success" class="text-white" style="cursor: pointer;">
                                          <i class="fa fa-copy"></i>
                                      </a></span>
                                  </div> 
                                  <small>Click to Copy</small> 
                                  <input type="text" value="Your Left Link Copied" id="leftInput" style="height: 0px !important; display: none;"> 
                                  <a data-bs-toggle="modal" data-bs-target="#success" class="bb1">
                                  <h5 class="mt-1 lh-base fw-normal text-white">Left Referral Link</h5>
                                  </a> 
                                  <hr> 
                                  <i class="material-icons widget-box-1-icon">currency_bitcoin</i> 
                                  <div class="avatar-md m-auto">
                                      <span class="avatar-title rounded-circle bg-soft-light text-white font-size-24 ">
                                          <a data-bs-toggle="modal" data-bs-target="#success1" class="text-white" style="cursor: pointer;">
                                          <i class="fa fa-copy"></i>
                                      </a></span>
                                  </div> 
                                  <small>Click to Copy</small> 
                                  <input type="text" value="Your Right Link Copied" id="myInput1" style="height: 0px !important; display: none;"> 
                                  <a data-bs-toggle="modal" data-bs-target="#success1" class="bb1">
                                  <h5 class="mt-1 lh-base fw-normal text-white">Right Referral Link</h5>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-8">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-wrap align-items-center mb-4">
                <h5 class="u-card-title me-2">Rank Achievers</h5> 
                <div class="ms-auto"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="card">
              <div class="card-body">
                  <div class="d-flex flex-wrap align-items-center mb-4">
                      <h5 class="u-card-title me-2">Sales by Locations&nbsp</h5> 
                      <div class="ms-auto">
                          <div class="dropdown">
                              <a href="#" id="dropdownMenuButton" class="dropdown-toggle text-reset" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                                  <span class="fw-medium">World</span>
                              </a>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="#">aaaa</a>
                                  <a class="dropdown-item" href="#">bbbb</a>
                                  <a class="dropdown-item" href="#">cccc</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div> 
          </div>
        </div>
      </div>
      <div class="row dtw">
        <div class="col-xl-4">
          <div class="card">
            <div class="u-card-header align-items-center d-flex">
              <h4 class="u-card-title mb-0 flex-grow-1">Add Funds</h4>
            </div>
            <div class="card-body">
              <div class="tab-content">
                <div id="buy-tab" role="tabpanel" class="tab-pane active">
                  <div class="float-end ms-2">
                      <h5 class="font-size-14 abalance">
                          <i class="material-icons ab-wallet">account_balance_wallet</i>&nbsp
                          <a href="#!" class="text-reset text-decoration-underline" style="color: #000!important; font-weight: 500; text-decoration: underline!important;">$0</a>
                      </h5>
                  </div> 
                  <h5 class="font-size-14 mb-4">Available Balance</h5> 
                  <div>
                      <div class="amount_input">
                          <div class="input-group mb-3">
                              <label class="input-group-text">Amount</label> 
                              <input class="form-group-control" value="0" type="number" name="amount" min="1" step="1" onkeypress="" title="Numbers only" placeholder="" aria-required="true" aria-invalid="false"> 
                              <label class="input-group-text">$</label> 
                          </div>
                      </div> 
                      <div class="form-group mb-3">
                          <label>Payment method :</label> 
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
                          <button type="button" class="btn btn-success w-md">Deposit</button>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="card">
            <div class="u-card-header align-items-center d-flex">
              <h4 class="u-card-title mb-0 flex-grow-1">Income</h4>
              <div class="flex-shrink-0">
                <a data-bs-toggle="tab" href="#transactions-all-tab" role="tab" class="card-nav-link active">
                  All
                </a>
              </div>
            </div>
            <div class="card-body px-0">
              <div class="tab-content">
                <div id="transactions-all-tab" role="tabpanel" class="tab-pane active">
                  <div class="simplebar-content" style="padding: 0px 16px;">
                    <table class="table align-middle table-nowrap table-borderless">
                      <tbody>
                        <tr>
                          <td style="width: 50px;">
                            <div class="font-size-22 text-success">
                              <i class="bx bx-down-arrow-circle d-block"></i>
                            </div>
                          </td> 
                          <td>
                            <div>
                              <h5 class="font-size-14 mb-1">ROI Income</h5> 
                              <p class="text-muted mb-0 font-size-12">
                                Details
                              </p>
                            </div>
                          </td> 
                          <td>
                            <div class="text-end">
                              <h5 class="font-size-14 text-muted mb-0 text-right ">$0</h5>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="card">
            <div class="u-card-header align-items-center d-flex">
              <h4 class="u-card-title mb-0 flex-grow-1">Withdraw</h4>
            </div>
            <div class="card-body">
              <div class="tab-content">
                <div id="buy-tab" role="tabpanel" class="tab-pane active">
                  <div class="float-end ms-2">
                      <h5 class="font-size-14 abalance">
                          <i class="material-icons ab-wallet">account_balance_wallet</i>&nbsp
                          <a href="#!" class="text-reset text-decoration-underline" style="color: #000!important; font-weight: 500; text-decoration: underline!important;">$0</a>
                      </h5>
                  </div> 
                  <h5 class="font-size-14 mb-4">Withdraw Wallet Balance</h5> 
                  <div>
                      <div class="amount_input">
                          <div class="input-group mb-3">
                              <label class="input-group-text">Amount</label> 
                              <input class="form-group-control" value="0" type="number" name="amount" min="1" step="1" onkeypress="" title="Numbers only" placeholder="" aria-required="true" aria-invalid="false"> 
                              <label class="input-group-text">$</label> 
                          </div>
                      </div> 
                      <div class="form-group mb-3">
                          <label>Payment method :</label> 
                          <select class="form-select">
                              <option disabled selected>Select Payment Method</option>
                              <option value="BTC">Bitcoin</option>
                          </select>
                      </div> 
                      <div class="text-center">
                        <button type="button" disabled class="btn btn-info w-md">
                          Withdraw
                        </button>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush
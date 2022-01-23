@extends('layouts.app', ['activePage' => 'pending', 'titlePage' => __('Pending Transactions')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info table-header">
            <div class="tselect-form col-md-3">
                <label class="tlabel">Show&nbsp</label> 
                <select class="tselect">
                    <option value="showmode-ten">10</option>
                    <option value="showmode-fifty">50</option>
                    <option value="showmode-onehundred">100</option>
                </select>&nbsp
                <label class="tlabel">entries</label>
            </div> 
            <div class="tselect-form col-md-3">
                <input class="form-control t-search" type="text" placeholder="Search..." />
                <label class="tlabel"><i class="material-icons">search</i></label>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class="text-primary theader">
                    <th>Sr.No</th>
                    <th>Date</th>
                    <th>Deposit Id</th>
                    <th>Package</th>
                    <th>Amount</th> 
                    <th>Address</th>
                    <th>Action</th> 
                </thead>
                <tbody>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
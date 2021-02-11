@extends('layouts.app')

@section('content')
<style>
    .input-group-addon {
        padding: 6px 12px;
        font-size: 14px;
        font-weight: 400;
        /* line-height: 1; */
        color: #555;
        text-align: center;
        background-color: #eee;
        border: 1px solid #ccc;
        border-radius: 4px;
        /* width: 1%; */
        white-space: nowrap;
        vertical-align: middle;
        display: table-cell;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }
    @media only screen and (max-width: 760px),
    (min-device-width: 768px) and (max-device-width: 1024px)  {

        /* Force table to not be like tables anymore */
        .input-table table, .input-table thead, .input-table tbody, .input-table th, .input-table td, .input-table tr { 
            display: block; 
        }
        
        /* Hide table headers (but not display: none;, for accessibility) */
        .input-table thead tr { 
            position: absolute;
            top: -9999px;
            left: -9999px;
        }
        
        .input-table tr { border: 1px solid #ccc; }
        
        .input-table td { 
            /* Behave  like a "row" */
            border: none;
            border-bottom: 1px solid #eee; 
            position: relative;
            padding-left: 50%; 
        }
        
        .input-table td:before { 
            /* Now like a table header */
            position: absolute;
            /* Top/left values mimic padding */
            top: 6px;
            left: 6px;
            width: 45%; 
            padding-right: 10px; 
            white-space: nowrap;
        }
        
        /*
        Label the data
        */
        .input-table td:nth-of-type(1):before { content: "Item Cost"; }
        .input-table td:nth-of-type(2):before { content: "List Price"; }
        .input-table td:nth-of-type(3):before { content: "Shipping"; }
        .input-table td:nth-of-type(4):before { content: "Landed Price"; }
        .input-table td:nth-of-type(5):before { content: "Misc Fees"; }
        
    }
    .badge { color: #fff; font-size: 10px; vertical-align: middle;}
</style>
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">IP Address Hits		
        </h1>
        
    </div>
    <div class="row">
       
        <div class="col-md-12">
          
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>IP Address</th>
                                    <th>State</th>
                                    <th>Country </th>
                                </tr>
                            </thead>
                            <tbody>
                               @if($login_history)
                               
                                    @foreach ($login_history as $history)
                                        <tr>
                                            <td>{{$history->ip_address}}</td>
                                            <td>{{$history->state}}</td>
                                            <td>{{$history->country}}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        
                                        <td colspan="3">N0 Record Found!</td>
                                    </tr>
                                @endif
                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>

</div>
@endsection
@push('scripts')
  <script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
    
  </script>
@endpush
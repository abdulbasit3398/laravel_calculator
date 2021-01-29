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
        .input-table td:nth-of-type(1):before { content: "List Price"; }
        .input-table td:nth-of-type(2):before { content: "Shipping"; }
        .input-table td:nth-of-type(3):before { content: "Landed Price"; }
        .input-table td:nth-of-type(4):before { content: "Misc Fees"; }
        
    }
</style>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Calculator</h1>

    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="form-group">
                <label for="">Item Cost</label>
                <input type="text" name="item_cost" id="item_cost" class="form-control" placeholder="Item Cost" />
            </div>
        </div>
        <div class="col-md-12">
            
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>2021 Closing Cost
                                    </th>
                                    <th>Postage/Media Mail
                                    </th>
                                    <th>15% of Landed
                                    </th>
                                    <th>Misc Fees
                                    </th>
                                    <th>Total Fees
                                    </th>
                                    <th>Profit/Loss
                                    </th>
                                    <th>FBA Profit/Loss
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Under 1lbs</th>
                                    <td>$1.80</td>
                                    <td>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">$</span>
                                            <input type="text" name="postage" class="form-control" placeholder="Postage/Media Mail" value="5.60" aria-describedby="basic-addon1">
                                        </div>
                                    </td>
                                    <td>$150.00
                                    </td>
                                    <td>$0.10
                                    </td>
                                    <td>$147.50
                                    </td>
                                    <td>$832.40
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>1-2lbs</th>
                                    <td>$1.80</td>
                                    <td>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">$</span>
                                            <input type="text" name="postage" class="form-control" placeholder="Postage/Media Mail" value="5.60" aria-describedby="basic-addon1">
                                        </div>
                                    </td>
                                    <td>$150.00
                                    </td>
                                    <td>$0.10
                                    </td>
                                    <td>$147.50
                                    </td>
                                    <td>$832.40
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>2-3lbs</th>
                                    <td>$1.80</td>
                                    <td>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">$</span>
                                            <input type="text" name="postage" class="form-control" placeholder="Postage/Media Mail" value="5.60" aria-describedby="basic-addon1">
                                        </div>
                                    </td>
                                    <td>$150.00
                                    </td>
                                    <td>$0.10
                                    </td>
                                    <td>$147.50
                                    </td>
                                    <td>$832.40
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>3-4lbs</th>
                                    <td>$1.80</td>
                                    <td>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">$</span>
                                            <input type="text" name="postage" class="form-control" placeholder="Postage/Media Mail" value="5.60" aria-describedby="basic-addon1">
                                        </div>
                                    </td>
                                    <td>$150.00
                                    </td>
                                    <td>$0.10
                                    </td>
                                    <td>$147.50
                                    </td>
                                    <td>$832.40
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>4-5lbs</th>
                                    <td>$1.80</td>
                                    <td>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">$</span>
                                            <input type="text" name="postage" class="form-control" placeholder="Postage/Media Mail" value="5.60" aria-describedby="basic-addon1">
                                        </div>
                                    </td>
                                    <td>$150.00
                                    </td>
                                    <td>$0.10
                                    </td>
                                    <td>$147.50
                                    </td>
                                    <td>$832.40
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>5-6lbs</th>
                                    <td>$1.80</td>
                                    <td>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">$</span>
                                            <input type="text" name="postage" class="form-control" placeholder="Postage/Media Mail" value="5.60" aria-describedby="basic-addon1">
                                        </div>
                                    </td>
                                    <td>$150.00
                                    </td>
                                    <td>$0.10
                                    </td>
                                    <td>$147.50
                                    </td>
                                    <td>$832.40
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>6-7lbs</th>
                                    <td>$1.80</td>
                                    <td>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">$</span>
                                            <input type="text" name="postage" class="form-control" placeholder="Postage/Media Mail" value="5.60" aria-describedby="basic-addon1">
                                        </div>
                                    </td>
                                    <td>$150.00
                                    </td>
                                    <td>$0.10
                                    </td>
                                    <td>$147.50
                                    </td>
                                    <td>$832.40
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>7-8lbs</th>
                                    <td>$1.80</td>
                                    <td>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">$</span>
                                            <input type="text" name="postage" class="form-control" placeholder="Postage/Media Mail" value="5.60" aria-describedby="basic-addon1">
                                        </div>
                                    </td>
                                    <td>$150.00
                                    </td>
                                    <td>$0.10
                                    </td>
                                    <td>$147.50
                                    </td>
                                    <td>$832.40
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>8-9lbs</th>
                                    <td>$1.80</td>
                                    <td>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">$</span>
                                            <input type="text" name="postage" class="form-control" placeholder="Postage/Media Mail" value="5.60" aria-describedby="basic-addon1">
                                        </div>
                                    </td>
                                    <td>$150.00
                                    </td>
                                    <td>$0.10
                                    </td>
                                    <td>$147.50
                                    </td>
                                    <td>$832.40
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
            <table class="table input-table">
                <thead>
                    <tr>
                        <th>list price</th>
                        <th>shipping</th>
                        <th>landed price</th>
                        <th>Misc Fees</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">$</span>
                                <input type="text" name="postage" class="form-control" placeholder="enter base price here" value="1000" aria-describedby="basic-addon1">
                            </div>
                        </td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">$</span>
                                <input type="text" name="postage" class="form-control" placeholder="enter your shipping base add in here" value="" aria-describedby="basic-addon1">
                            </div>
                        </td>
                        <td>$1000.00</td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">$</span>
                                <input type="text" name="postage" class="form-control" placeholder="Misc Fees" value="0.10" aria-describedby="basic-addon1">
                            </div>
                        </td>
                        
                    </tr>
                </tbody>
            </table>
            </div>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>2021 Closing Cost
                                    </th>
                                    <th>Postage/Media Mail
                                    </th>
                                    <th>15% of Landed
                                    </th>
                                    <th>Misc Fees
                                    </th>
                                    <th>Total Fees
                                    </th>
                                    <th style="width: 150px;">
                                        Desired Profit:
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">$</span>
                                            <input type="text" name="desired_profit" class="form-control" placeholder="Desired Profit" value="5.55" aria-describedby="basic-addon1">
                                        </div>
                                    </th>
                                    <th>Landed
                                    </th>
                                    <th>Listed</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Under 1lbs</th>
                                    <td>$1.80</td>
                                    <td>$5.60
                                    </td>
                                    <td>$150.00
                                    </td>
                                    <td>$0.10
                                    </td>
                                    <td>$147.50
                                    </td>
                                    <td>$832.40
                                    </td>
                                    <td>$15.35</td>
                                    <td>$11.36</td>
                                </tr>
                                <tr>
                                    <th>1-2lbs</th>
                                    <td>$1.80</td>
                                    <td>$5.60
                                    </td>
                                    <td>$150.00
                                    </td>
                                    <td>$0.10
                                    </td>
                                    <td>$147.50
                                    </td>
                                    <td>$832.40
                                    </td>
                                    <td>$15.35</td>
                                    <td>$11.36</td>
                                </tr>
                                <tr>
                                    <th>2-3lbs</th>
                                    <td>$1.80</td>
                                    <td>$5.60
                                    </td>
                                    <td>$150.00
                                    </td>
                                    <td>$0.10
                                    </td>
                                    <td>$147.50
                                    </td>
                                    <td>$832.40
                                    </td>
                                    <td>$15.35</td>
                                    <td>$11.36</td>
                                </tr>
                                <tr>
                                    <th>3-4lbs</th>
                                    <td>$1.80</td>
                                    <td>$5.60
                                    </td>
                                    <td>$150.00
                                    </td>
                                    <td>$0.10
                                    </td>
                                    <td>$147.50
                                    </td>
                                    <td>$832.40
                                    </td>
                                    <td>$15.35</td>
                                    <td>$11.36</td>
                                </tr>
                                <tr>
                                    <th>4-5lbs</th>
                                    <td>$1.80</td>
                                    <td>$5.60
                                    </td>
                                    <td>$150.00
                                    </td>
                                    <td>$0.10
                                    </td>
                                    <td>$147.50
                                    </td>
                                    <td>$832.40
                                    </td>
                                    <td>$15.35</td>
                                    <td>$11.36</td>
                                </tr>
                                <tr>
                                    <th>5-6lbs</th>
                                    <td>$1.80</td>
                                    <td>$5.60
                                    </td>
                                    <td>$150.00
                                    </td>
                                    <td>$0.10
                                    </td>
                                    <td>$147.50
                                    </td>
                                    <td>$832.40
                                    </td>
                                    <td>$15.35</td>
                                    <td>$11.36</td>
                                </tr>
                                <tr>
                                    <th>6-7lbs</th>
                                    <td>$1.80</td>
                                    <td>$5.60
                                    </td>
                                    <td>$150.00
                                    </td>
                                    <td>$0.10
                                    </td>
                                    <td>$147.50
                                    </td>
                                    <td>$832.40
                                    </td>
                                    <td>$15.35</td>
                                    <td>$11.36</td>
                                </tr>
                                <tr>
                                    <th>7-8lbs</th>
                                    <td>$1.80</td>
                                    <td>$5.60
                                    </td>
                                    <td>$150.00
                                    </td>
                                    <td>$0.10
                                    </td>
                                    <td>$147.50
                                    </td>
                                    <td>$832.40
                                    </td>
                                    <td>$15.35</td>
                                    <td>$11.36</td>
                                </tr>
                                <tr>
                                    <th>8-9lbs</th>
                                    <td>$1.80</td>
                                    <td>$5.60
                                    </td>
                                    <td>$150.00
                                    </td>
                                    <td>$0.10
                                    </td>
                                    <td>$147.50
                                    </td>
                                    <td>$832.40
                                    </td>
                                    <td>$15.35</td>
                                    <td>$11.36</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

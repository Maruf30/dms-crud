@extends('layouts.app')

@section('datatable_css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css" />
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card" style="box-shadow:0 0 25px 0 lightgrey;">
            <div class="card-header">
                <h4>Purchage</h4>
            </div>
            <div class="card-body">
                <form action="{{route('purchage.create')}}" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-4">
                            <div class="form-group mb-0 row">
                                <label for="challan_no" class="col-sm-4 col-form-label">Challan No</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="challan_no" name="challan_no" placeholder="Challan No">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-0 row">
                                <label for="purchage_date" class="col-sm-4 col-form-label">Date</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="purchage_date" name="purchage_date" placeholder="Purchage Date">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-0 row">
                                <label for="vendor" class="col-sm-4 col-form-label">Vendor</label>
                                <div class="col-sm-8">
                                    <select name="vendor" class="browser-default custom-select">
                                        <option selected>Open this select menu</option>
                                        @foreach ($suppliers as $supplier)
                                        <option value="{{$supplier->supplier_name}}">{{$supplier->supplier_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-4">
                            <div class="form-group mb-0 row">
                                <label for="purchage_value" class="col-sm-4 col-form-label">Value</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="purchage_value" name="purchage_value" placeholder="Purchage Value">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-header"></div>
                    <table align="center" style="width:100%;" id="tbl">
                        <thead>
                            <tr>
                                <th style="text-align:center;">Sl</th>
                                <th style="text-align:center;">Model Name</th>
                                <th style="text-align:center;">Chassis No</th>
                                <th style="text-align:center;">Engine No</th>
                                <th style="text-align:center;">Unit Price</th>
                                <th style="text-align:center;">Unit Price VAT</th>
                                <th style="text-align:center;">VAT Pur MRP</th>
                                <th style="text-align:center;">VAT Year</th>
                                <th style="text-align:center;">Purchage Price</th>
                            </tr>
                        </thead>
                        <tbody class="add_more_model">
                            <tr>
                                <td>#</td>
                                <td>
                                    <!-- <select name="model_code[]" class="browser-default custom-select"> -->
                                    <select name="model_code[]" class="form-control form-control-sm all_model">
                                        <option selected>Open this select menu</option>
                                        @foreach ($mrps as $mrp)
                                        <option value="{{$mrp->model_code}}">{{$mrp->model}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" id="five_chassis" name="five_chassis[]" placeholder="Chassis">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" id="five_engine" name="five_engine[]" placeholder="Engine">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" id="unit_price" name="unit_price[]" placeholder="Unit Price">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" id="unit_price_vat" name="unit_price_vat[]" placeholder="UP Vat">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" id="vat_purchage_mrp" name="vat_purchage_mrp[]" placeholder="Vat Pur MRP">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" id="vat_year_purchage" name="vat_year_purchage[]" placeholder="Vat Year Purchage">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" id="purchage_price" name="purchage_price[]" placeholder="Purchage Price">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <center style="padding:10px;">
                        <button id="add" style="width:100px;" class="btn btn-success btn-sm">Add</button>
                        <button id="remove" style="width:100px;" class="btn btn-danger btn-sm">Remove</button>
                    </center>
                    <center style="padding:10px;">
                        <button class="btn btn-info btn-sm" type="submit">Submit</button>
                    </center>
                </form>

            </div>

        </div>

    </div>
</div>


@endsection

@section('datatable')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
@endsection

@section('script')
<script>
    $('#add').on('click', function(e) {
        e.preventDefault();
        var $tableBody = $('#tbl').find("tbody"),
            $trLast = $tableBody.find("tr:last"),
            $trNew = $trLast.clone();
        $trLast.after($trNew);
    })
    $('#remove').on('click', function(e) {
        e.preventDefault();
        $('#tbl tr:last').remove();
    })

    function calculator() {

    }
</script>
@endsection
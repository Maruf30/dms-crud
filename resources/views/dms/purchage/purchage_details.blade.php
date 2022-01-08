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
                <div class="row">
                    <div class="col-md-6">
                        <h4>Purchage Details</h4>
                    </div>
                    <div class="col-md-6">
                        <a href="#" class="m-r-15 text-muted edit float-right btn btn-primary text-white mb-1">Purchage Entry</i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-header">
                <div class="form-row">
                    <div class="col-md-3">
                        <div class="form-group mb-0 row">
                            <label for="challan_no" class="col-sm-4 col-form-label">Challan No</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="challan_no" name="challan_no" value="{{$purchages->challan_no}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-0 row">
                            <label for="purchage_date" class="col-sm-4 col-form-label">Date</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="purchage_date" name="purchage_date" value="{{$purchages->purchage_date}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-0 row">
                            <label for="vendor" class="col-sm-4 col-form-label">Vendor</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="challan_no" name="challan_no" value="{{$purchages->vendor}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-0 row">
                            <label for="vendor" class="col-sm-4 col-form-label">Dealer</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="challan_no" name="challan_no" value="{{$purchages->dealer_name}}">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-3">
                        <div class="form-group mb-0 row">
                            <label for="purchage_value" class="col-sm-4 col-form-label">Value</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="purchage_value" name="purchage_value" value="{{$purchages->purchage_value}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-0 row">
                            <label for="uml_mushak_no" class="col-sm-4 col-form-label">Mushak No</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="uml_mushak_no" name="uml_mushak_no" placeholder="UML Mushak">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-0 row">
                            <label for="uml_mushak_date" class="col-sm-4 col-form-label">Mushak Date</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="uml_mushak_date" name="uml_mushak_date" placeholder="Purchage Value">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">

                <div id="purchage_details_list">
                    <table id="example" class="table table-hover table-responsive table-striped table-sm text-sm table-light table-bordered" style="width:100%;">
                        <thead>
                            <tr>
                                <th class="align-middle">Name</th>
                                <th class="align-middle">Chassis</th>
                                <th class="align-middle">Engine</th>
                                <th class="align-middle">Unit Price</th>
                                <th class="align-middle">Unit Price VAT</th>
                                <th class="align-middle">VAT Purchage MRP</th>
                                <th class="align-middle">VAT Year Purchage</th>
                                <th class="align-middle">Purchage Price</th>
                                <th class="align-middle">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $purchage_details as $detail )
                            <tr>
                                <td>{{$detail->model}}</td>
                                <td>{{$detail->five_chassis}}</td>
                                <td>{{$detail->five_engine}}</td>
                                <td>{{$detail->unit_price}}</td>
                                <td>{{$detail->unit_price_vat}}</td>
                                <td>{{$detail->vat_purchage_mrp}}</td>
                                <td>{{$detail->vat_year_purchage}}</td>
                                <td class="purchage_price">{{$detail->purchage_price}}</td>
                                <td class="text-center">
                                    <a href="#" class="m-r-15 text-muted editIcon status" id="${data.id}" data-toggle="modal" data-idUpdate="${data.id}" data-target="#updateModal">
                                        <i class="fa fa-edit" style="color: #2196f3;font-size:16px;"></i>
                                    </a>
                                    <a href="#" class="deleteIcon" id="${data.id}">
                                        <i class="fa fa-trash" aria-hidden="true" style="color: red;font-size:16px;">
                                        </i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            <!-- <tr>
                                <td>Total</td>
                            </tr> -->
                        </tbody>
                    </table>
                    <table>

                        <tr>
                            <td><b class="h3">Purchage Value =</b></td>
                            <td><b class="h3" id="purchage_value"></b></td>
                        </tr>

                    </table>
                </div>
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
    $(document).ready(function() {
        function purchageValue() {
            var sum = 0;
            $(".purchage_price").each(function() {
                sum += +$(this).text();
                console.log($(this).val());
            });
            $('#purchage_value').text(sum);
        }
        purchageValue();
    });






    $("#example").DataTable({
        pageLength: 10,
        responsive: true,
        lengthChange: true,
        dom: '<"html5buttons"B>lTfgitp',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
</script>
@endsection
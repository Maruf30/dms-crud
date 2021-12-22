@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <h3 class="bg-primary text-center p-2 text-white mt-2 rounded">Product Price Details</h3>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <a class="m-r-15 text-muted edit float-right btn btn-primary text-white mb-1" id="add" data-toggle="modal" data-target="#addModal"><i class="fas fa-plus"></i>
                </a>
                <div id="show_all_mrp">
                    <h1 class="text-center text-secondary my-5">Loading...</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Update-->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" style="z-index: 1050; display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-write">
                <h4 class="modal-title p-1" id="title">Update</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa fa-close"></i></span>
                </button>
            </div>
            <form action="#" method="POST" class="form-horizontal" id="edit_mrp_form">
                @csrf
                <div class="modal-body">
                    <div class="form-group-sm row">
                        <label class="col-sm-3 col-form-label">Code</label>
                        <div class="col-sm-9">
                            <input type="text" id="e_Model_Code" name="model_code" class="form-control" value="" />
                        </div>
                    </div>
                    <div class="form-group-sm row">
                        <label class="col-sm-3 col-form-label">Model</label>
                        <div class="col-sm-9">
                            <input type="text" id="e_Model" name="Model" class="form-control" value="" />
                        </div>
                    </div>
                    <div class="form-group-sm row">
                        <label class="col-sm-3 col-form-label">VAT Pur MRP</label>
                        <div class="col-sm-9">
                            <input type="text" id="e_VATPurchageMRP" name="VATPurchageMRP" class="form-control" value="" />
                        </div>
                    </div>
                    <div class="form-group-sm row">
                        <label class="col-sm-3 col-form-label">MRP</label>
                        <div class="col-sm-9">
                            <input type="text" id="e_MRP" name="MRP" class="form-control" value="" />
                        </div>
                    </div>
                    <div class="form-group-sm row">
                        <label class="col-sm-3 col-form-label">VAT MRP</label>
                        <div class="col-sm-9">
                            <input type="text" id="e_VATMRP" name="VATMRP" class="form-control" value="" />
                        </div>
                    </div>
                    <div class="form-group-sm row">
                        <label class="col-sm-3 col-form-label">Basic (VAT)</label>
                        <div class="col-sm-9">
                            <input type="text" id="e_basic_vat" name="basic_vat" class="form-control" value="" />
                        </div>
                    </div>
                    <div class="form-group-sm row">
                        <label class="col-sm-3 col-form-label">Sale Vat</label>
                        <div class="col-sm-9">
                            <input type="text" id="e_SaleVat" name="SaleVat" class="form-control" value="" />
                        </div>
                    </div>
                    <div class="form-group-sm row">
                        <label class="col-sm-3 col-form-label">Commission</label>
                        <div class="col-sm-9">
                            <input type="text" id="e_Commission" name="Commission" class="form-control" value="" />
                        </div>
                    </div>
                    <div class="form-group-sm row">
                        <label class="col-sm-3 col-form-label">TR</label>
                        <div class="col-sm-9">
                            <input type="text" id="e_TR" name="TR" class="form-control" value="" />
                        </div>
                    </div>
                    <div class="form-group-sm row">
                        <label class="col-sm-3 col-form-label">Purchage Price</label>
                        <div class="col-sm-9">
                            <input type="text" id="e_PurchagePrice" name="PurchagePrice" class="form-control" value="" />
                        </div>
                    </div>
                    <div class="form-group-sm row">
                        <label class="col-sm-3 col-form-label">Reabate Basic</label>
                        <div class="col-sm-9">
                            <input type="text" id="e_ReabateBasic" name="ReabateBasic" class="form-control" value="" />
                        </div>
                    </div>
                    <div class="form-group-sm row">
                        <label class="col-sm-3 col-form-label">Reabate</label>
                        <div class="col-sm-9">
                            <input type="text" id="e_Reabate" name="Reabate" class="form-control" value="" />
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="icofont icofont-eye-alt"></i>Close</button>
                    <button type="submit" id="update_mrp" name="" class="btn btn-success btn-sm  waves-light">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Update End-->

<!-- Modal Add-->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" style="z-index: 1050; display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-write">
                <h4 class="modal-title p-1" id="title">Add</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa fa-close"></i></span>
                </button>
            </div>
            <form action="#" method="POST" class="form-horizontal" id="add_mrp_form">
                @csrf
                <div class="modal-body">
                    <div class="form-group-sm row">
                        <label class="col-sm-3 col-form-label">Code</label>
                        <div class="col-sm-9">
                            <input type="text" id="Model_Code" name="model_code" class="form-control" value="" />
                        </div>
                    </div>
                    <div class="form-group-sm row">
                        <label class="col-sm-3 col-form-label">Model</label>
                        <div class="col-sm-9">
                            <input type="text" id="Model" name="Model" class="form-control" value="" />
                        </div>
                    </div>
                    <div class="form-group-sm row">
                        <label class="col-sm-3 col-form-label">VAT Pur MRP</label>
                        <div class="col-sm-9">
                            <input type="text" id="VATPurchageMRP" name="VATPurchageMRP" class="form-control" value="" />
                        </div>
                    </div>
                    <div class="form-group-sm row">
                        <label class="col-sm-3 col-form-label">MRP</label>
                        <div class="col-sm-9">
                            <input type="text" id="MRP" name="MRP" class="form-control" value="" />
                        </div>
                    </div>
                    <div class="form-group-sm row">
                        <label class="col-sm-3 col-form-label">VAT MRP</label>
                        <div class="col-sm-9">
                            <input type="text" id="VATMRP" name="VATMRP" class="form-control" value="" />
                        </div>
                    </div>
                    <div class="form-group-sm row">
                        <label class="col-sm-3 col-form-label">Basic (VAT)</label>
                        <div class="col-sm-9">
                            <input type="text" id="basic_vat" name="basic_vat" class="form-control" value="" />
                        </div>
                    </div>
                    <div class="form-group-sm row">
                        <label class="col-sm-3 col-form-label">Sale Vat</label>
                        <div class="col-sm-9">
                            <input type="text" id="SaleVat" name="SaleVat" class="form-control" value="" />
                        </div>
                    </div>
                    <div class="form-group-sm row">
                        <label class="col-sm-3 col-form-label">Commission</label>
                        <div class="col-sm-9">
                            <input type="text" id="Commission" name="Commission" class="form-control" value="" />
                        </div>
                    </div>
                    <div class="form-group-sm row">
                        <label class="col-sm-3 col-form-label">TR</label>
                        <div class="col-sm-9">
                            <input type="text" id="TR" name="TR" class="form-control" value="" />
                        </div>
                    </div>
                    <div class="form-group-sm row">
                        <label class="col-sm-3 col-form-label">Purchage Price</label>
                        <div class="col-sm-9">
                            <input type="text" id="PurchagePrice" name="PurchagePrice" class="form-control" value="" />
                        </div>
                    </div>
                    <div class="form-group-sm row">
                        <label class="col-sm-3 col-form-label">Reabate Basic</label>
                        <div class="col-sm-9">
                            <input type="text" id="ReabateBasic" name="ReabateBasic" class="form-control" value="" />
                        </div>
                    </div>
                    <div class="form-group-sm row">
                        <label class="col-sm-3 col-form-label">Reabate</label>
                        <div class="col-sm-9">
                            <input type="text" id="Reabate" name="Reabate" class="form-control" value="" />
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="icofont icofont-eye-alt"></i>Close</button>
                    <button type="submit" id="update_mrp" name="" class="btn btn-success btn-sm  waves-light">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Add End-->
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
@endsection

@section('script')
<script>
    $(function() {
        $(document).on('click', '.editIcon', function() {
            $('#title').text('Update');
            $('#update_mrp').text('Update');
            // $('#edit_mrp_form').prop('id', "update_mrp_form");
            var _this = $(this).parents('tr');
            $('#e_Model_Code').val(_this.find('.ModelCode').text());
            $('#e_Model').val(_this.find('.Model').text());
            $('#e_VATPurchageMRP').val(_this.find('.VATPurchageMRP').text().replace(/,/g, ''));
            $('#e_MRP').val(_this.find('.MRP').text().replace(/,/g, ''));
            $('#e_VATMRP').val(_this.find('.VATMRP').text().replace(/,/g, ''));
            $('#e_basic_vat').val(_this.find('.basic_vat').text().replace(/,/g, ''));
            $('#e_SaleVat').val(_this.find('.SaleVat').text().replace(/,/g, ''));
            $('#e_Commission').val(_this.find('.Commission').text().replace(/,/g, ''));
            $('#e_TR').val(_this.find('.TR').text().replace(/,/g, ''));
            $('#e_PurchagePrice').val(_this.find('.PurchagePrice').text().replace(/,/g, ''));
            $('#e_ReabateBasic').val(_this.find('.ReabateBasic').text().replace(/,/g, ''));
            $('#e_Reabate').val(_this.find('.Reabate').text().replace(/,/g, ''));
        });

        function vat_calculate_add() {
            let mrp = $('#MRP').val();
            let commission = $('#Commission').val();
            let tr = $('#TR').val();
            let purchage_price_tr = mrp - commission
            let purchage_price = purchage_price_tr - (commission * 0.15);
            $('#basic_vat').val(Math.round((mrp * 100) / 115));
            $('#SaleVat').val(Math.round((mrp * 15) / 115));
            $('#TR').val(commission * 0.15);
            $('#PurchagePrice').val(purchage_price);
            $('#ReabateBasic').val(Math.round((purchage_price * 100) / 115));
            $('#Reabate').val(Math.round((purchage_price * 15) / 115));
        }

        function vat_calculate_edit() {
            let mrp = $('#e_MRP').val();
            let commission = $('#e_Commission').val();
            let tr = $('#e_TR').val();
            let purchage_price_tr = mrp - commission
            let purchage_price = purchage_price_tr - (commission * 0.15);
            $('#e_basic_vat').val(Math.round((mrp * 100) / 115));
            $('#e_SaleVat').val(Math.round((mrp * 15) / 115));
            $('#e_TR').val(commission * 0.15);
            $('#e_PurchagePrice').val(purchage_price);
            $('#e_ReabateBasic').val(Math.round((purchage_price * 100) / 115));
            $('#e_Reabate').val(Math.round((purchage_price * 15) / 115));
        }
        $("#add_mrp_form").on("input", function() {
            console.log('input vat calculate called.');
            vat_calculate_add();
        });
        $("#edit_mrp_form").on("input", function() {
            vat_calculate_edit();
        });

        // add new employee ajax request
        $("#add_mrp_form").submit(function(e) {
            e.preventDefault();
            console.log('add_mrp_form');
            const FD = new FormData(this);
            $.ajax({
                url: "{{ route('mrp.add_two') }}",
                method: "post",
                data: FD,
                cache: false,
                contentType: false,
                processData: false,
                dataType: "json",
                success: function(response) {
                    if (response.status == 200) {
                        Swal.fire({
                            position: "top-end",
                            icon: "success",
                            title: "Your work has been saved",
                            showConfirmButton: false,
                            timer: 1500,
                        });
                        fetchAllMrp();
                    }
                    $("#addModal").modal("hide");
                },
            });
        });

        // update employee ajax request
        $("#edit_mrp_form").submit(function(e) {
            console.log('edit_mrp_form');
            e.preventDefault();
            const FD = new FormData(this);
            $("#update_mrp").text('Updating...');
            $.ajax({
                url: "{{ route('mrp.update_two') }}",
                method: 'post',
                data: FD,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(response) {
                    if (response.status == 200) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Your work has been saved',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        fetchAllMrp();
                    }
                    $("#updateModal").modal('hide');
                }
            });
        });

        fetchAllMrp();

        // delete employee ajax request
        $(document).on('click', '.deleteIcon', function(e) {
            e.preventDefault();
            let model_code = $(this).attr('id');
            let csrf = '{{ csrf_token() }}';
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('mrp.delete') }}",
                        method: 'delete',
                        data: {
                            model_code: model_code,
                            _token: csrf
                        },
                        success: function(response) {
                            // console.log(response);
                            Swal.fire({
                                position: "top-end",
                                icon: "success",
                                title: "Data Deleted Successfully",
                                showConfirmButton: false,
                                timer: 1500,
                            })
                            fetchAllMrp();
                        }
                    });
                }
            })
        });

        function fetchAllMrp() {
            const BDFormat = new Intl.NumberFormat("en-IN", {
                maximumFractionDigits: 0
            });
            $.ajax({
                url: "{{ route('mrp.get_two') }}",
                method: 'get',
                success: function(response) {
                    if (response.length > 0) {
                        var html = `<table id="example" class="table table-hover table-responsive table-striped table-sm text-sm table-light table-bordered" style="width:100%;">
                        <thead>
                            <tr>
                                <th class="align-middle">Code</th>
                                <th class="align-middle">Model</th>
                                <th class="align-middle">VAT Pur</th>
                                <th class="align-middle">MRP</th>
                                <th class="align-middle">VMRP</th>
                                <th class="align-middle">Basic</th>
                                <th class="align-middle">VAT</th>
                                <th class="align-middle">Comm</th>
                                <th class="align-middle">TR</th>
                                <th class="align-middle">Buy</th>
                                <th class="align-middle">Basic</th>
                                <th class="align-middle">Reabate</th>
                                <th class="align-middle">Action</th>
                            </tr>
                        </thead>
                        <tbody>`;
                        response.forEach(function(data, index) {
                            html +=
                                `<tr>
                                
                                <td class="ModelCode">${data.model_code}</td>
                                <td class="Model">${data.Model}</td>
                                <td class="VATPurchageMRP text-right">${BDFormat.format(data.VATPurchageMRP)}</td>
                                <td class="MRP text-right">${BDFormat.format(data.MRP)}</td>
                                <td class="VATMRP text-right">${BDFormat.format(data.VATMRP)}</td>
                                <td class="basic_vat">${BDFormat.format(data.basic_vat)}</td>
                                <td class="SaleVat text-right">${BDFormat.format(data.SaleVat)}</td>
                                <td class="Commission text-right">${BDFormat.format(data.Commission)}</td>
                                <td class="TR text-right">${BDFormat.format(data.TR)}</td>
                                <td class="PurchagePrice text-right">${BDFormat.format(data.PurchagePrice)}</td>
                                <td class="ReabateBasic text-right">${BDFormat.format(data.ReabateBasic)}</td>
                                <td class="Reabate text-right">${BDFormat.format(data.Reabate)}</td>
                                <td class="text-center">
                                    <a href="#" class="m-r-15 text-muted editIcon" id="${data.model_code}" data-toggle="modal" data-idUpdate="${data.model_code}" data-target="#updateModal">
                                        <i class="fa fa-edit" style="color: #2196f3;font-size:16px;"></i>
                                    </a>
                                    <a href="#" class="deleteIcon" id="${data.model_code}">
                                        <i class="fa fa-trash" aria-hidden="true" style="color: red;font-size:16px;">
                                        </i>
                                    </a>
                                </td>
                            </tr>`;
                        });
                        html += `</tbody></table>`;
                    } else {
                        html = `<h3 class="text-center">No MRP Found</h3>`;
                    }
                    // console.log(html);
                    $("#show_all_mrp").html(html);
                    $("#example").DataTable({
                        pageLength: 10,
                        responsive: true,
                        lengthChange: true,
                        dom: '<"html5buttons"B>lTfgitp',
                        buttons: [
                            'copy', 'csv', 'excel', 'pdf', 'print'
                        ]
                    });
                }
            });
        };
    });
</script>
@endsection
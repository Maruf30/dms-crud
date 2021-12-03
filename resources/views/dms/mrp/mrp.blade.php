@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <h3 class="bg-primary text-center p-2 text-white mt-2 rounded">Product Price Details</h3>
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if(session()->has('success'))
                <div class="alert alert-success alert-dismissable">
                    {{ session()->get('success') }}
                </div>
                @endif

                @if (Auth::user()->role_id === 1)
                <a class="m-r-15 text-muted edit float-right btn btn-primary text-white mb-1" id="add"
                    data-toggle="modal" data-target="#"><i class="fas fa-plus"></i>
                </a>
                @endif

                <table id="example"
                    class="table table-hover table-responsive table-striped table-sm text-sm table-light table-bordered"
                    style="width:100%;">
                    <thead>
                        <tr>
                            {{-- <th class="align-middle">Sl</th> --}}
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
                            @if (Auth::user()->role_id === 1)
                            <th class="align-middle">Action</th>
                            @endif

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($MrpDatas as $MrpData)
                        <tr>
                            {{-- <td class="Sl">{{$loop->iteration}}</td> --}}
                            <td class="ModelCode">{{$MrpData->model_code}}</td>
                            <td class="Model">{{$MrpData->Model}}</td>
                            <td class="VATPurchageMRP text-right">{{ number_format($MrpData->VATPurchageMRP,0)}}
                            </td>
                            <td class="MRP text-right">{{number_format($MrpData->MRP,0)}}</td>
                            <td class="VATMRP text-right">{{number_format($MrpData->VATMRP,0)}}</td>
                            <td class="basic_vat">{{number_format($MrpData->basic_vat)}}</td>
                            <td class="SaleVat text-right">{{number_format($MrpData->SaleVat,0)}}</td>
                            <td class="Commission text-right">{{number_format($MrpData->Commission,0)}}</td>
                            <td class="TR text-right">{{number_format($MrpData->TR,0)}}</td>
                            <td class="PurchagePrice text-right">{{number_format($MrpData->PurchagePrice,0)}}</td>
                            <td class="ReabateBasic text-right">{{number_format($MrpData->ReabateBasic,0)}}</td>
                            <td class="Reabate text-right">{{number_format($MrpData->Reabate,0)}}</td>
                            @if (Auth::user()->role_id === 1)
                            <td class="text-center">
                                <a class="m-r-15 text-muted edit" data-toggle="modal"
                                    data-idUpdate="{{$MrpData->model_code}}" data-target="#exampleModal">
                                    <i class="fa fa-edit" id="edit" style="color: #2196f3;font-size:16px;"></i>
                                </a>
                                <a href="{{ route('mrp.delete', $MrpData->model_code) }}"
                                    onclick="return confirm('Are you sure to want to delete it?')">
                                    <i class="fa fa-trash" aria-hidden="true" style="color: red;font-size:16px;">
                                    </i>
                                </a>
                            </td>
                            @endif

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Update-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" style="z-index: 1050; display: none;"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-write">
                <h4 class="modal-title p-1" id="title">Update</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa fa-close"></i></span>
                </button>
            </div>
            <form action="{{ route('mrp.update') }}" method="post" class="form-horizontal" id="modal_form">
                <!-- form delete -->
                {{ csrf_field() }}

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
                            <input type="text" id="e_VATPurchageMRP" name="VATPurchageMRP" class="form-control"
                                value="" />
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
                            <input type="text" id="e_PurchagePrice" name="PurchagePrice" class="form-control"
                                value="" />
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
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i
                            class="icofont icofont-eye-alt"></i>Close</button>
                    <button type="submit" id="update" name=""
                        class="btn btn-success btn-sm  waves-light">Update</button>
                </div>
            </form><!-- form delete end -->
        </div>
    </div>
</div> <!-- End Modal Delete-->
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
@endsection

@section('script')
<script>
    $(document).ready(function () {
        $('#example').DataTable({
            pageLength: 10,
            responsive: true,
            lengthChange: true,
            // autoWidth: true,
            // dom: 'Bfrtip',
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                // 'copy', 'csv', 'excel', 'pdf', 'print'
                {
                    extend: 'copy'
                },
                {
                    extend: 'csv'
                },
                {
                    extend: 'excel',
                    title: 'ExampleFile'
                },
                {
                    extend: 'pdf',
                    title: 'ExampleFile'
                },
                {
                    extend: 'print',
                    customize: function (win) {
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');
                        $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                    }
                }
            ]
        });

        $(document).on('click', '#edit', function () {
            $('#title').text('Update');
            $('#update').text('Update');
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
        $(document).on('click', '#add', function () {
            $('#modal_form')[0].reset();
            $('#modal_form').attr('action', "{{ route('mrp.add') }}");
            $('#exampleModal').modal('show');
            $('#title').text('Add New');
            $('#update').text('Save');
        });

        function vat_calculate() {
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
        $("#modal_form").on("input", function () {
            vat_calculate();
        });

    })

</script>
@endsection

@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <h3 class="bg-primary text-center p-2 text-white mt-2 rounded">Product Price Details</h3>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form>
                    {{-- @foreach ($MrpDatas as $MrpData) --}}
                    {{-- <div class="form-group row">
                        <label
                            class="bg-dark text-white font-weight-bold col-md-3 form-control col-form-label">Model</label>
                        <label id="ChassisNo" class="col-md-9 form-control col-form-label">{{ $MrpData->Model
                            }}</label>
                    </div> --}}
                    {{-- @endforeach --}}
                    <table id="example"
                        class="table table-hover table-responsive table-striped table-sm text-sm table-light table-bordered"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th class="align-middle">Sl</th>
                                <th class="align-middle">Model</th>
                                <th class="align-middle">VAT Pur</th>
                                <th class="align-middle">MRP</th>
                                <th class="align-middle">VAT MRP</th>
                                {{-- <th>Basic (VAT)</th> --}}
                                <th class="align-middle">Sale VAT</th>
                                <th class="align-middle">Comm.</th>
                                <th class="align-middle">TR</th>
                                <th class="align-middle">Pur. Price</th>
                                <th class="align-middle">R. Basic</th>
                                <th class="align-middle">Reabate</th>
                                <th class="align-middle">Modefy</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($MrpDatas as $MrpData)
                            <tr>
                                <td class="Sl">{{$loop->iteration}}</td>
                                <td class="Model">{{$MrpData->Model}}</td>
                                <td class="VATPurchageMRP text-right">{{ number_format($MrpData->VATPurchageMRP,0)}}
                                </td>
                                <td class="MRP text-right">{{number_format($MrpData->MRP,0)}}</td>
                                <td class="VATMRP text-right">{{number_format($MrpData->VATMRP,0)}}</td>
                                {{-- <td class="Basic(VAT)">{{$MrpData->VATMRP)}}</td> --}}
                                <td class="SaleVat text-right">{{number_format($MrpData->SaleVat,0)}}</td>
                                <td class="Commission text-right">{{number_format($MrpData->Commission,0)}}</td>
                                <td class="TR text-right">{{number_format($MrpData->TR,0)}}</td>
                                <td class="PurchagePrice text-right">{{number_format($MrpData->PurchagePrice,0)}}</td>
                                <td class="ReabateBasic text-right">{{number_format($MrpData->ReabateBasic,0)}}</td>
                                <td class="Reabate text-right">{{number_format($MrpData->Reabate,0)}}</td>
                                <td class="text-center">
                                    <a class="m-r-15 text-muted edit" data-toggle="modal"
                                        data-idUpdate="{{$MrpData->ModelCode}}" data-target="#exampleModal">
                                        <i class="fa fa-edit" style="color: #2196f3;font-size:16px;"></i>
                                    </a>
                                    <a href="delete/{{$MrpData->ModelCode}}"
                                        onclick="return confirm('Are you sure to want to delete it?')"> <i
                                            class="fa fa-trash" aria-hidden="true"
                                            style="color: red;font-size:16px;"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>




                    {{-- <table class="table table-striped table-bordered" id="example">
                        <thead class="thead-dark">
                            <tr style="text-align:center;">
                                <th scope="col" style="vertical-align:middle;" class="align-items-center">#
                                </th>
                                <th scope="col" style="vertical-align:middle;">Model</th>
                                <th scope="col" style="vertical-align:middle;">MRP</th>
                                <th scope="col" style="vertical-align:middle;">Commission</th>
                                <th scope="col" style="vertical-align:middle;">TR</th>
                                <th scope="col" style="vertical-align:middle;">Purchage Price</th>
                                <th scope="col" style="vertical-align:middle;">Purchage Price</th>
                                <th style="width:10%; vertical-align:middle;">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($MrpDatas as $MrpData)
                            <tr>
                                <th style="text-align:center;" scope="row">{{ $loop->iteration}}</th>
                                <td class="Model">{{ $MrpData->Model }}</td>
                                <td class="MRP" style="text-align:right;">{{ number_format((float)$MrpData->MRP) }}</td>
                                <td class="Commission" style="text-align:right;">{{
                                    number_format((float)$MrpData->Commission) }}
                                </td>
                                <td class="TR" style="text-align:right;">{{ number_format((float)$MrpData->TR) }}</td>
                                <td class="PurchagePrice" style="text-align:right;">{{
                                    number_format((float)$MrpData->PurchagePrice)
                                    }}</td>
                                <td class="" style="text-align:right;">{{ number_format((float)$MrpData->PurchagePrice)
                                    }}</td>
                                <td class="" style="text-align:center;"><a
                                        href="{{ url('mrpedit/'.$MrpData->ModelCode) }}" class="btn btn-primary edit"
                                        data-toggle="modal" data-target="#exampleModal">Edit</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table> --}}
                </form>

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
                <h4 class="modal-title p-1">Update</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa fa-close"></i></span>
                </button>
            </div>
            <form action="" method="post" class="form-horizontal">
                <!-- form delete -->
                {{ csrf_field() }}
                <input type="text" hidden class="col-sm-9 form-control" id="id" name="id" value="" />
                <div class="modal-body">
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
                    <button type="submit" id="" name="" class="btn btn-success btn-sm  waves-light"><i
                            class="icofont icofont-check-circled"></i>Update</button>
                </div>
            </form><!-- form delete end -->
        </div>
    </div>
</div> <!-- End Modal Delete-->

{{--
<!-- Modal -->
<form action="" method="post">
    <form action="" method="post">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" type="text" name="email">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </form> --}}
    @endsection

    @section('script')
    <script>
        $(document).on('click', '.edit', function()
        {
            var _this = $(this).parents('tr');
            $('#e_Model').val(_this.find('.Model').text());
            $('#e_VATPurchageMRP').val(_this.find('.VATPurchageMRP').text());
            $('#e_MRP').val(_this.find('.MRP').text());
            $('#e_VATMRP').val(_this.find('.VATMRP').text());            
            $('#e_SaleVat').val(_this.find('.SaleVat').text());
            $('#e_Commission').val(_this.find('.Commission').text());
            $('#e_TR').val(_this.find('.TR').text());
            $('#e_PurchagePrice').val(_this.find('.PurchagePrice').text());
            $('#e_ReabateBasic').val(_this.find('.ReabateBasic').text());
            $('#e_Reabate').val(_this.find('.Reabate').text());
        });
    </script>
    @endsection
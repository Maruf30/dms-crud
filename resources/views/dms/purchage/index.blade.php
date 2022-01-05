@extends('layouts.app')

@section('datatable_css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css" />
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-md-11">
        <h3 class="bg-primary text-center p-2 text-white mt-2 rounded">Purchage</h3>
        <div class="row justify-content-center">
            <div class="col-md-12">
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
                    <div class="form-row mt-4">
                        <div class="col-md-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Sl</th>
                                        <th scope="col">Model</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                        <th scope="col">Handle</th>
                                        <th scope="col">Handle</th>
                                        <th scope="col">Handle</th>
                                        <th scope="col">Handle</th>
                                        <th scope="col">Handle</th>
                                        <th scope="col">Handle</th>
                                        <th scope="col">Handle</th>
                                        <th scope="col">Handle</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <select name="model_code[]" class="browser-default custom-select">
                                                <option selected>Open this select menu</option>
                                                @foreach ($mrps as $mrp)
                                                <option value="{{$mrp->model_code}}">{{$mrp->model}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit form</button>
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

</script>
@endsection
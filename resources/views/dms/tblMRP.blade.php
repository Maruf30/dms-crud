@extends('layouts.app')
@section('content')




=======
<div class="row justify-content-center">
    <div class="col-md-10">
        <h3 class="bg-primary text-center p-2 text-white mt-2 rounded">MRP Table</h3>
        <div class="row justify-content-center">
            <div class="col-md-11">
                <form>
                    {{-- @foreach ($MrpDatas as $MrpData) --}}
                    {{-- <div class="form-group row">
                        <label
                            class="bg-dark text-white font-weight-bold col-md-3 form-control col-form-label">Model</label>
                        <label id="ChassisNo" class="col-md-9 form-control col-form-label">{{ $MrpData->Model
                            }}</label>
                    </div> --}}
                    {{-- @endforeach --}}
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Model</th>
                                <th scope="col">MRP</th>
                                <th scope="col">Commission</th>
                                <th scope="col">TR</th>
                                <th scope="col">Purchage Price</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($MrpDatas as $MrpData)
                            <tr>
                                <th scope="row">{{ $loop->iteration}}</th>
                                <td>{{ $MrpData->Model }}</td>
                                <td>{{ number_format((float)$MrpData->MRP, 2,'.', ',') }}</td>
                                <td>{{ $MrpData->Commission }}</td>
                                <td>{{ $MrpData->TR }}</td>
                                <td>{{ $MrpData->PurchagePrice }}</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection
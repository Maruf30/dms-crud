@extends('layouts.app')
@section('content')
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
                    <table class="table table-striped table-bordered">
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
                                <td>{{ $MrpData->Model }}</td>
                                <td style="text-align:right;">{{ number_format((float)$MrpData->MRP) }}</td>
                                <td style="text-align:right;">{{ number_format((float)$MrpData->Commission) }}</td>
                                <td style="text-align:right;">{{ number_format((float)$MrpData->TR) }}</td>
                                <td style="text-align:right;">{{ number_format((float)$MrpData->PurchagePrice) }}</td>
                                <td style="text-align:right;">{{ number_format((float)$MrpData->PurchagePrice) }}</td>
                                <td style="text-align:center;"><a href="{{ url('mrpedit/'.$MrpData->ModelCode) }}"
                                        class="btn btn-primary">Edit</a></td>
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
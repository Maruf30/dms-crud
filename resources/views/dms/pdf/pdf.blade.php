<!DOCTYPE html>
<html>

<head>
    <title>Laravel 8 Generate PDF From View</title>
    <link rel="stylesheet" href="{{ asset('css/pdf.css') }}">
</head>

<body>
    <div class="print_certificate margin_right">
        @foreach ($print_data as $data)
        <div class="all_code">
            <span>{{$data->challan_no}}</span><span>{{$data->uml_mushak_no}}</span><span>{{$data->approval_no}}</span><span>{{$data->invoice_no}}</span><span>{{$data->sale_mushak_no}}</span><span>{{$data->dealer}}</span><span>{{$data->vat_process}}</span><span>{{$data->tr_number}}</span>
        </div>
        <div class="certificate">
            <span>Sale Date : {{$data->original_sale_date}}</span>
            <span>Mobile No: {{$data->mobile}}</span>
            <h1 class="concern">TO WHOM IT MAY CONCERN</h1>
            <table>
                <tr>
                    <td>
                        <p class="margin">Ref:</p>
                    </td>
                    <td>
                        <p class="margin">{{$data->print_ref}}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="margin">To:</p>
                    </td>
                    <td>
                        <p class="margin">The Registration Authority,</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="margin"></p>
                    </td>
                    <td>
                        <p class="margin">Bangladesh Road Transport Authority</p>
                    </td>
                </tr>
            </table>

            <h2 class="certify">This is to certify that we have sold new vehicle to:</h2>
            <span style="margin-right: 35px;">{{$data->customer_name}}</span><span>S/O. {{$data->father_name}}</span>
            <p>{{$data->address_one}}, {{$data->address_two}}</p>
            <h2 class="certify">On the following particulars</h2>
            <table class="table_first_page">
                <tbody>
                    <tr>
                        <td class="sl">1.</td>
                        <td>Model/Make of Vehicle</td>
                        <td class="colon">:</td>
                        <td>{{ $data->model_make_of_vehicle }}</td>
                    </tr>
                    <tr>
                        <td class="sl">2.</td>
                        <td>Class of Vehicle</td>
                        <td class="colon">:</td>
                        <td>Motorcycle</td>
                    </tr>
                    <tr>
                        <td class="sl">3.</td>
                        <td>Chassis No.</td>
                        <td class="colon">:</td>
                        <td>{{$data->chassis_no}}</td>
                    </tr>
                    <tr>
                        <td class="sl">4.</td>
                        <td>Engine No.</td>
                        <td class="colon">:</td>
                        <td>{{$data->engine_no}}</td>
                    </tr>
                    <tr>
                        <td class="sl">5.</td>
                        <td>Key No.</td>
                        <td class="colon">:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="sl">6.</td>
                        <td>No. of Cylinder with CC</td>
                        <td class="colon">:</td>
                        <td>{{$data->no_of_cylinder_with_cc}}</td>
                    </tr>
                    <tr>
                        <td class="sl">7.</td>
                        <td>Colour of Vehicle</td>
                        <td class="colon">:</td>
                        <td>{{$data->color}}</td>
                    </tr>
                    <tr>
                        <td class="sl">8.</td>
                        <td>Size of Tyre</td>
                        <td class="colon">:</td>
                        <td>{{$data->size_of_tyre}}</td>
                    </tr>
                    <tr>
                        <td class="sl">9.</td>
                        <td>Year of Manufacture/Assamble</td>
                        <td class="colon">:</td>
                        <td>2021</td>
                    </tr>
                    <tr>
                        <td class="sl">10.</td>
                        <td>Horse Power</td>
                        <td class="colon">:</td>
                        <td>{{$data->horse_power}}</td>
                    </tr>
                    <tr>
                        <td class="sl">11.</td>
                        <td>Ladan Weight</td>
                        <td class="colon">:</td>
                        <td>{{$data->ladan_weight}}</td>
                    </tr>
                    <tr>
                        <td class="sl">12.</td>
                        <td>Wheel Base</td>
                        <td class="colon">:</td>
                        <td>{{$data->wheel_base}}</td>
                    </tr>
                    <tr>
                        <td class="sl">13.</td>
                        <td>Seating Capacity</td>
                        <td class="colon">:</td>
                        <td>2 PERSON</td>
                    </tr>
                    <tr>
                        <td class="sl">14.</td>
                        <td>Maker's Name</td>
                        <td class="colon">:</td>
                        <td>BAJAJ AUTO LTD, INDIA</td>
                    </tr>
                    <tr>
                        <td class="sl">14.</td>
                        <td>Unit Price</td>
                        <td class="colon">:</td>
                        <td>{{$data->basic_price_vat}} + {{$data->sale_vat}} = {{$data->unit_price_vat}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    @endforeach
    <div style="break-after:page"></div>
    <div class="print_challan margin_right">
        <div class="delivery_challan">
            <h2>Delivery Challan</h2>
        </div>
        <div class="challan">
            <!-- <span>Sale Date</span> -->
            <table>
                <tr>
                    <td>
                        <p class="margin">No:</p>
                    </td>
                    <td>
                        <p class="margin">BAJAJ POINT/DHAKA/2021-2022</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="margin">M/s:</p>
                    </td>
                    <td>
                        <p class="margin">ALAMGIR HOSSAIN KAJAL</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="margin"></p>
                    </td>
                    <td>
                        <p class="margin">S/O. AFAZ UDDIN</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="margin"></p>
                    </td>
                    <td>
                        <p class="margin">DAG # 2515, 226/A, ASHKONA, DAKHIN KHAN, UTTARA, DHAKA-1230</p>
                    </td>
                </tr>
            </table>


            <p class="please">Please receive the undermentioned vehicles/with standart/Extra tools with spare wheel and accessories on the following particulars:</p>

            <table class="table_first_page">
                <tbody>
                    <tr>
                        <td class="sl">1.</td>
                        <td>Model/Make of Vehicle</td>
                        <td class="colon">:</td>
                        <td>Bajaj 4 Stroke Motorcycle, BAJAJ PULSAR 150 TWIN DISC</td>
                    </tr>
                    <tr>
                        <td class="sl">2.</td>
                        <td>Class of Vehicle</td>
                        <td class="colon">:</td>
                        <td>Motorcycle</td>
                    </tr>
                    <tr>
                        <td class="sl">3.</td>
                        <td>Chassis No.</td>
                        <td class="colon">:</td>
                        <td>MD2A11CY0MTH60606</td>
                    </tr>
                    <tr>
                        <td class="sl">4.</td>
                        <td>Engine No.</td>
                        <td class="colon">:</td>
                        <td>JBXWMG79165</td>
                    </tr>
                    <tr>
                        <td class="sl">5.</td>
                        <td>Key No.</td>
                        <td class="colon">:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="sl">6.</td>
                        <td>No. of Cylinder with CC</td>
                        <td class="colon">:</td>
                        <td>SINGLE CYLINDER 150 C.C</td>
                    </tr>
                    <tr>
                        <td class="sl">7.</td>
                        <td>Colour of Vehicle</td>
                        <td class="colon">:</td>
                        <td>Black/Red</td>
                    </tr>
                    <tr>
                        <td class="sl">8.</td>
                        <td>Size of Tyre</td>
                        <td class="colon">:</td>
                        <td>FRONT 90/90 X 17 & REAR 120/80 X 17</td>
                    </tr>
                    <tr>
                        <td class="sl">9.</td>
                        <td>Year of Manufacture/Assamble</td>
                        <td class="colon">:</td>
                        <td>2021</td>
                    </tr>
                    <tr>
                        <td class="sl">13.</td>
                        <td>Seating Capacity</td>
                        <td class="colon">:</td>
                        <td>2 PERSON</td>
                    </tr>
                </tbody>
                <div class="remarks">
                    <p>REMARKS:</p>
                    <div>
                        <p>Purchage Date <span></span></p>
                        <p>VAT Sale Date <span></span></p>
                    </div>
                </div>
            </table>
            <p class="foot_note">Received with thanks the above mentioned Vehicle's with perfect condition along with tools and accessories.</p>
        </div>
    </div>

</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>Laravel 8 Generate PDF From View</title>
    <!-- <link rel="stylesheet" href="{{ asset('css/pdf.css') }}"> -->
    <style>
        @font-face {
            font-family: "Helvetica";
            font-weight: normal;
            font-style: normal;
            font-variant: normal;
            src: url("http://fonts.cdnfonts.com/css/helvetica-neue-9");
        }

        body {
            font-family: Helvetica, sans-serif;
            font-size: 13px;
            font-weight: 500;
        }

        html {
            margin: 0px;
            padding: 0px;
        }

        .hform_page_one {
            display: block;
            margin-top: 380px;
            line-height: 80%;
        }

        .section_two,
        .section_three {
            width: 100%;
        }

        .left_content {
            width: 50%;
            float: left;
        }

        .right_content {
            width: 50%;
            float: right;
            margin-top: 97px;
        }

        .tyre_size {
            margin-top: 285px;
            margin-left: 100%;
            width: 100%;
            padding-left: 164px;
        }

        .class_of_vehicle {
            margin-top: 115px;
            padding-left: 182px;
        }

        .color {
            padding-top: 16px;
            padding-left: 210px;
        }

        .no_of_cylinders {
            padding-left: 210px;
            width: 100%;
            margin-top: -4px;
        }

        .unladen_weight {
            padding-top: 20px;
            padding-left: 200px;
        }

        .page-break {
            page-break-after: always;
        }
    </style>
</head>

<body>

    <div class="hform_page_one">
        <div class="section_two">
            <p class="name_of_owner" style="padding-left: 160px;">TARIKUL SARDER</p>
            <p class="father_name" style="padding-left: 168px;">MD. ANSER ALI</p>
            <p class="owner_address" style="padding-left: 255px; padding-top:15px;">64/1 BRAHMON CHIRON, SAYDABAD, JATRABARI, DHAKA-1204</p>
            <p class="phone_no" style="padding-left: 180px;">01713361636</p>
        </div>
        <div class="section_three">
            <div class="left_content">
                <p class="class_of_vehicle">MOTORCYCLE</p>
                <p class="color">Black/Red</p>
                <p class="no_of_cylinders">SINGLE CYLINDER 150 CC</p>
                <p class="engine_no" style="padding-left: 175px; margin-top:-2px;">DHXCME08251</p>
                <p class="horse_power" style="padding-left: 155px; margin-top:-5px">14 PS @ 8000 RPM</p>
                <p class="cubic_capacity" style="padding-left: 170px; margin-top:-2px">150 CC</p>
                <p class="unladen_weight">144 KG</p>
            </div>
            <div class="right_content">
                <p class="makers_name" style="padding-left: 192px;">BAJAJ AUTO LTD, INDIA</p>
                <p class="makers_country" style="padding-left: 199px;">INDIA</p>
                <p class="year_of_manufacture" style="padding-left: 220px;">2021</p>
                <p class="chassis_no" style="padding-left: 190px; margin-top:-5px;">PSUA11CY7MTH34712</p>
                <p class="fuel_used" style="padding-left:154px; margin-top:-5px;">PETROL</p>
                <p class="rpm" style="padding-left:125px;">8000</p>
                <p class="seats" style="padding-left:208px; margin-top:-2px;">2 PERSON</p>
                <p class="wheel_base" style="padding-left:164px;">1345 MM</p>
                <p class="laden_weight" style="padding-left:225px;">274 KG</p>
            </div>
        </div>
        <div class="section_four">
            <div class="right_content">
                <p class="tyre_size">FRONT 90/90X17 & REAR 120/80X17</p>
            </div>
        </div>
    </div>


    <div class="page-break"></div>
    <div class="hform_page_two" style="margin-top:110px; font-size:14px;">
        <div class="content" style="margin-left:192px;">
            <p class="name_of_owner">TARIKUL SARDER</p>
            <p class="father_name">MD. ANSER ALI</p>
            <p class="owner_address" style="margin-top:35px;">64/1 BRAHMON CHIRON, SAYDABAD, JATRABARI, DHAKA-1204</p>
            <p class="phone_no" style="margin-top:50px; padding-top:18px;">01713361636</p>
            <p class="chassis_no" style="margin-top:160px;">PSUA11CY7MTH34712</p>
            <p class="engine_no">DHXCME08251</p>
            <p class="year_of_manufacture">2021</p>
        </div>
    </div>

</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>Laravel 8 Generate PDF From View</title>
    <style>
        @font-face {
            font-family: 'Helvetica';
            font-weight: normal;
            font-style: normal;
            font-variant: normal;
            src: url("http://fonts.cdnfonts.com/css/helvetica-neue-9");
        }

        body {
            font-family: Helvetica, sans-serif;
        }

        html {
            margin: 0px
        }

        h1 {
            font-size: 20px;
            font-weight: bold;
            text-align: center;
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 0px;
        }

        .sl {
            padding-right: 30px;
            margin-right: 50px;


        }

        .model {
            width: 25px
        }

        .colon {
            width: 5px;
        }

        .description {
            width: 30px;
        }

        .certificate {
            margin-left: 30px;
            margin-top: 30px
        }
    </style>

</head>

<body>
    <div class="certificate">
        <!-- <span>Sale Date</span> -->
        <h1>TO WHOM IT MAY CONCERN</h1>
        <p>Ref: </p>
        <p>To: The Registration Authority,</p>
        <p>Bangladesh Road Transport Authority</p>
        <p>This is to certify that we have sold new vehicle to:</p>
        <span>Name: </span><span>Father Name: </span>
        <p>Address: </p>
        <p>On the following particulars</p>
        <table>
            <!-- <thead>
            <tr>
                <th class="sl"></th>
                <th class="model"></th>
                <th class="colon"></th>
                <th class="description"></th>
            </tr>
        </thead> -->
            <tbody>
                <tr>
                    <td class="sl">1.</td>
                    <td>Model/Make of Vehicle</td>
                    <td>:</td>
                    <td>Bajaj 4 Stroke Motorcycle, Bajaj</td>
                </tr>
                <tr>
                    <td class="sl">2.</td>
                    <td>Class of Vehicle</td>
                    <td>:</td>
                    <td>Motorcycle</td>
                </tr>
                <tr>
                    <td class="sl">3.</td>
                    <td>Chassis No.</td>
                    <td>:</td>
                    <td>MD2A11CY0MTH60606</td>
                </tr>
                <tr>
                    <td class="sl">4.</td>
                    <td>Engine No.</td>
                    <td>:</td>
                    <td>JBXWMG79165</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
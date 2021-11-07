window.jsPDF = window.jspdf.jsPDF;
window.html2canvas = html2canvas;

if (document.getElementById("button")) {
    var button = document.getElementById("button");
    var ChassisNo = document.getElementById("ChassisNo").textContent;
    var EngineNo = document.getElementById("EngineNo").textContent;
    var VendorName = document.getElementById("VendorName").textContent;
    button.onclick = (e) => {
        // console.log("button clicked");
        e.preventDefault();
        var doc = new jsPDF();
        doc.text(`Chassis No ${ChassisNo}`, 10, 10);
        doc.text(`Engine No ${EngineNo}`, 10, 50);
        doc.text(`From Challan ${VendorName}`, 10, 70);
        doc.save("Invoice.pdf");
    };
}

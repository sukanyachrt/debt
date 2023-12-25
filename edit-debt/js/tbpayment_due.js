function addRowDue() {
    var rowCount = $('#tbPayment_due tbody tr').length + 1
    var newRow = `<tr>
    <td>${rowCount}</td>
    <td><input type="text" autocomplete="yes" readOnly class="form-control datepicker" placeholder="กำหนดชำระ"></td>
    <td><input type="text" autocomplete="yes" class="form-control" placeholder="ยอดรวมที่ต้องชำระ"></td>
    <td><input type="text" autocomplete="yes" class="form-control" placeholder="ดอกเบี้ย"></td>
    <td><input type="text" autocomplete="yes" class="form-control" placeholder="เงินต้น"></td>
    <td><input type="text" autocomplete="yes" class="form-control" placeholder="สถานะ"></td>
    <td><input type="text" autocomplete="yes" readOnly class="form-control datepicker" placeholder="วันที่ชำระครั้งล่าสุด"></td>
    <td><input type="text" autocomplete="yes" class="form-control" placeholder="ยอดค้างชำระ"></td>
    <td class="text-right py-0 align-middle">
        <div class="btn-group btn-group-sm">
            <button href="#" class="btn btn-primary" onclick="addRowDue()"><i class="fas fa-plus"></i></button>
            <button href="#" class="btn btn-danger" onclick="deleteRowDue(this)"><i class="fas fa-trash"></i></button>
        </div>
    </td>
</tr>`;

    $('#tbPayment_due tbody').append(newRow);
    // เพิ่มการเรียกใช้ datepicker หลังจากที่เพิ่มแถวเสร็จ
    $('.datepicker').datepicker({
        format: 'dd/mm/yyyy',
        todayBtn: true,
        language: 'th', //เปลี่ยน label ต่างของ ปฏิทิน ให้เป็น ภาษาไทย   (ต้องใช้ไฟล์ bootstrap-datepicker.th.min.js นี้ด้วย)
        thaiyear: true //Set เป็นปี พ.ศ.
    });

}

function deleteRowDue(button) {
    if ($('#tbPayment_due tbody tr').length === 1) {
        return;
    }
    var row = $(button).closest("tr");
    row.remove();
    updateRowNumbers_due();
}

function updateRowNumbers_due() {
    $('#tbPayment_due tbody tr').each(function (index) {
        $(this).find('td:first').text(index + 1);
    });
}

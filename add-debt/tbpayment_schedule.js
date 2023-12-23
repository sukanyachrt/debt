function addRowSchedule() {
    var rowCount = $('#tbPayment_schedule tbody tr').length + 1
    var newRow = `<tr>
    <td>${rowCount}</td>
    <td><input type="text" autocomplete="yes" class="form-control" placeholder="กำหนดชำระ"></td>
    <td><input type="text" autocomplete="yes" class="form-control" placeholder="สัดสวนเงินต้น %"></td>
    <td><input type="text" autocomplete="yes" class="form-control" placeholder="เงินต้น"></td>
    <td><input type="text" autocomplete="yes" class="form-control" placeholder="ดอกเบี้ย"></td>
    <td><input type="text" autocomplete="yes" class="form-control" placeholder="ยอดรวมที่ต้องชำระ"></td>
    <td class="text-right py-0 align-middle">
        <div class="btn-group btn-group-sm">
            <a href="#" class="btn btn-primary" onclick="addRowSchedule()"><i class="fas fa-plus"></i></a>
            <a href="#" class="btn btn-danger" onclick="deleteRow(this)"><i class="fas fa-trash"></i></a>
        </div>
    </td>
</tr>`;

    $('#tbPayment_schedule tbody').append(newRow);


}

function deleteRow(button) {
    if ($('#tbPayment_schedule tbody tr').length === 1) {
        return;
    }
    var row = $(button).closest("tr");
    row.remove();
    updateRowNumbers();
}

function updateRowNumbers() {
    $('#tbPayment_schedule tbody tr').each(function(index) {
        $(this).find('td:first').text(index + 1);
    });
}

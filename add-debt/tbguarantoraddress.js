function addRowGuarantor() {
   
    var newRow = `<tr>
    <td><input type="text" autocomplete="yes" class="form-control"  placeholder="ประเภทที่อยู่ "></td>
    <td><input type="text" autocomplete="yes" class="form-control"  placeholder="ที่อยู่ "></td>
    <td><input type="text" autocomplete="yes" class="form-control" id="inputEmail3" placeholder="รหัสไปรษณีย์ "></td>
    <td><input type="text" autocomplete="yes" class="form-control" id="inputEmail3" placeholder="เบอร์โทรศัพท์ "></td>
    <td class="text-right py-0 align-middle">
        <div class="btn-group btn-group-sm">
            <a href="#" class="btn btn-primary" onclick="addRowGuarantor()"><i class="fas fa-plus"></i></a>
            <a href="#" class="btn btn-danger" onclick="deleteRowGuarantor(this)"><i class="fas fa-trash"></i></a>
        </div>
    </td>
</tr>`;

    $('#tbGuarantor_address tbody').append(newRow);
    
}

function deleteRowGuarantor(button) {
    if ($('#tbGuarantor_address tbody tr').length === 1) {
        return;
    }
    var row = $(button).closest("tr");
    row.remove();
   
}



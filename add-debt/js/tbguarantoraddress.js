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




function guarantor() {
    let dataGuarantor_address = [];
    $('#tbGuarantor_address tbody tr').each(function () {
        var type_address = $(this).find('td:eq(0) input[type="text"]').val();
        var address = $(this).find('td:eq(1) input[type="text"]').val();
        var zipcode = $(this).find('td:eq(2) input[type="text"]').val();
        var telephone = $(this).find('td:eq(3) input[type="text"]').val();
        dataGuarantor_address.push({
            'address_type': type_address,
            'address': address,
            'zipcode': zipcode,
            'telephone': telephone,
        });
    });




    dataGuarantor.push({
        'prefix': $('#guarantor-form [name="txtprefix"]').val(),
        'fname': $('#guarantor-form [name="txtfname"]').val(),
        'lname': $('#guarantor-form [name="txtlname"]').val(),
        'idcard': $('#guarantor-form [name="txtidcard"]').val(),
        'relationship': $('#guarantor-form [name="txtrelationship"]').val(),
        'guarantee_percentage': $('#guarantor-form [name="txtguarantee_percentage"]').val(),
        'guarantee_amount': $('#guarantor-form [name="txtguarantee_amount"]').val(),
        'birthday': $('#guarantor-form [name="txtbirthday"]').val(),
        'gender': $('#guarantor-form [name="txtgender"]').val(),
        'status_person': $('#guarantor-form [name="txtstatus_person"]').val(),
        'dataGuarantor_address': dataGuarantor_address
    });



    $('#error_Guarantor_address').text('');
    $('#modal-default').modal('hide');
    $('#guarantor-form').trigger('reset');
    $('#tbGuarantor_address tbody tr').html('');
    addRowGuarantor();

    $('#tbGuarantor tbody').html('')
    dataGuarantor.forEach(function (data, index) {
        $('#tbGuarantor tbody').append(` <tr data-index="${index}">
        <td class="text-center">${data.prefix} ${data.fname}${data.lname}</td>
        <td class="text-center">${data.relationship}</td>
        <td class="text-center">${data.idcard}</td>
        <td class="text-center">${data.guarantee_percentage}</td>
        <td class="text-center">${data.guarantee_amount}</td>
        <td class="text-right py-0 align-middle">
            <div class="btn-group btn-group-sm">
                <a href="#" class="btn btn-danger" onclick="deleteRowDataGuarantor(this)"><i class="fas fa-trash"></i></a>
            </div>
        </td>
        </tr>`)
    });
}

function deleteRowDataGuarantor(button) {
    var row = $(button).closest('tr');
    var index = row.data('index');

    dataGuarantor.splice(index, 1);
    row.remove();
}

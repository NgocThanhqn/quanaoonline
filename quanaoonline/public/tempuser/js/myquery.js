jQuery(document).ready(function () {
    jQuery('.qty').change(function () {
        var rowid = jQuery(this).attr('id');
        var qty = jQuery(this).parent().parent().find('.qty').val();
        var token = jQuery('input[name="token"]').val();
        // alert(rowid);
        jQuery.ajax({
            url: "cap-nhat-cart/" + rowid + "/" + qty,
            type: "GET",
            cache: false,
            data: {'token': token, 'id': rowid, 'qty': qty},
            success: function (data) {
                location.reload();
            }
        });
    });
});

jQuery(document).ready(function () {
    jQuery('.delete').click(function () {
        var rowid = jQuery(this).attr('id');
        var token = jQuery('input[name="token"]').val();
        // alert(rowid);
        jQuery.ajax({
            url: "xoa-gio-hang/" + rowid,
            type: "GET",
            cache: false,
            data: {'token': token, 'id': rowid},
            success: function (data) {
                location.reload();
            }
        });
    });
});
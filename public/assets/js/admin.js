
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.status').change(function() {
        var row = $(this).closest('tr');
        var id = row.data('id');
        var status = $(this).val();
        $.post('/admin/updateStatus', { id: id, status: status }, function(data) {
            if (!data.success) {
                alert('Failed to update status');
            }
        });
    });

    $('.delete').click(function() {
        var row = $(this).closest('tr');
        var id = row.data('id');
        $.ajax({
            url: '/admin/destroyOrder',
            type: 'DELETE',
            data: { id: id },
            success: function(data) {
                if (data.success) {
                    row.remove();
                } else {
                    alert('Failed to delete order');
                }
            }
        });
    });


});

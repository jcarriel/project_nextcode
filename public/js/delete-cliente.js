$(document).ready(function () {
    $(".delete").click(function () {
        var pid = $(this).attr("data-playgroup-id");
        bootbox.confirm("Are you sure?", function (result) {
            url = "{{path('playergroup_delete', { 'id': 0}) }}";
            url = $url.replace("0", pid);
            if (result) {
                $.ajax({
                    url: "_delete_",
                    type: 'delete',
                    success: function (result) {
                        console.log('Delete');
                    },
                    error: function (e) {
                        console.log(e.responseText);
                    }
                });
            }
        });
    });
});
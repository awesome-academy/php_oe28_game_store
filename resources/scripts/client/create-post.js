$(document).ready(function() {
    $('#summernote').summernote({
        placeholder: '...',
        height: 500
    });

    $('#create-post-form').on('submit', function(e) {
        e.preventDefault();

        var data = new FormData(this);
        data.append('content', $('#summernote').summernote('code'));
        
        $.ajax({
            url: "/store-post",
            type: "POST",
            data: data,
            contentType: false,
            cache: false,
            processData: false,
            success: function(result) {
                swal({
                    title: "Game Store",
                    text: result['message'],
                    icon: "success",
                    buttons: true,
                    dangerMode: true,
                })
                .then((isView) => {
                    if (isView) {
                        window.open('/blogs/' + result['id'], '_blank');
                    }
                });
            },
            error: function(result){
                swal("Oops!", "Something went wrong", "warning");
            }
        });
    });
});

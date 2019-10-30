$(function () {
    //отправка формы с файлом через ajax
    $("#requestForm").on('submit', function (e) {
        e.preventDefault();
        let data = new FormData(this);
        data.append('utm', window.location.href);
        $.ajax({
            type: 'POST',
            url: '/proposal',
            data: data,
            dataType: 'json',
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function () {
                $('#send_request_btn').hide();
            },
            success: function (response) {
                $('#serverResponseSuccess').toggle().text('Заявка отправлена успешно');
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                $('#serverResponseError').toggle().text('Ошибка: ' + errorThrown);
            },
        });
    });

    $('form .custom-file input').change(function(e){
        let file = e.target.files[0];
        $(this).closest('.custom-file').find('.custom-file-label').html(file.name);
        let self = $(this);
        let reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function (e) {
                let fileUrl = e.target.result;
                self.closest('.form-group').find('.content_img').attr("src", fileUrl);
            }
    });

});


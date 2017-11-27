$(function () {
    $('.up').on('click', function() {
        $('body,html').animate({scrollTop:0}, 500);
        return false;
    });

    $('.modal-call').on('click', function () {
        let modal = $('#modal');
        modal.find('input#post_id').val('');
        modal.find('input#title').val('').closest('.form-group').addClass('hide');
        modal.find('.modal-title').text('Заказать звонок');
        modal.find('button.btn').text('Позвоните мне');
        modal.modal('show');

        return false;
    });

    $('.modal-course').on('click', function () {
        let modal = $('#modal');
        let id = $(this).data('id');
        let title = $(this).data('title');
        if (id === undefined || title === undefined) {
            return;
        }
        modal.find('input#post_id').val(id);
        modal.find('input#title').val(title).closest('.form-group').removeClass('hide');
        modal.find('.modal-title').text('Записаться на курсы');
        modal.find('button.btn').text('Записаться');
        modal.modal('show');
        return false;
    });

    $('.numbers-only').mask('+375 (99) 999 99 99');
});

$(document).ready(function() {

    var notification = $('#notification-slider');

    $('body').on('click', '.delete', function(event) {
        event.stopPropagation();
        var that = this;
        $.ajax({
            url : $(that).data('target'),
            type: 'post',
            data: {_method: 'DELETE', _token : $(that).data('token')},

            success : function(response) {
                showNotification('success', response.message);
                $($(that).data('for')).parent().fadeOut('slow', function() {
                    $(this).remove();
                });
            },

            error : function(response) {
                if (response.responseJSON.message) {
                    showNotification('danger', response.responseJSON.message);
                } else {
                    showNotification('danger', 'There was an error whilst processing your request, please try again.');
                }
            }
        });
    });

    //$('[data-toggle="modal"][data-ajax="true"]').each(function(key, element) {
    //    element = $(element);
    //    var parent = $(element.data('for'));
    //    var modal = $($(element).data('target'));
    //    console.log(modal);
    //    modal.on('show.bs.modal', function() {
    //        modal.find('.modal-body').load(element.data('source'), function() {
    //            modal.find('modal-save').enable().on('click', function(event) {
    //
    //            });
    //        });
    //    });
    //});

    function showNotification(type, message) {
        if (notification) {
            notification.find('.alert').text(message).removeClass(function (index, css) {
                return css != 'alert-dismissible' && (css.match (/(^|\s)alert-\S+/g) || []).join(' ');
            }).addClass('alert-' + type);

            notification.animate({top : '0'}, 200, function() {
                setTimeout(function() {
                    notification.animate({top : '-52px'}, 200);
                }, 3000);
            });
        }

    }
});
var functionPublic = function () {
    var $this = $(this);
    ajaxJson({
        url: '/plugins/' + $(this).data('id') + '/public',
        success: function() {
            $this.removeClass('btn-public');
            $this.addClass('btn-uppublic');
            $this.html('снять с публикации');
            $this.one('click', functionUnPublic);
        }
    });
};
var functionUnPublic = function () {
    var $this = $(this);
    ajaxJson({
        url: '/plugins/' + $(this).data('id') + '/unpublic',
        success: function() {
            $this.removeClass('btn-unpublic');
            $this.addClass('btn-public');
            $this.html('опубликовать');
            $this.one('click', functionPublic);
        }
    });
};

$('#myModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var id = $(button).data('id');
    $(this).attr('data-id', id);
    ajaxJson({
        url: '/plugins/' + id + '/config/get',
        success: function(ret) {
            $('#myModal textarea').html(ret);
        }
    })
});

$(document).ready(function() {
    $('#myModal .btn-primary').on('click', function (event) {
        var id = $('#myModal').data('id');

        ajaxJson({
            url: '/plugins/' + id + '/config/set',
            type: 'post',
            data: {
                config: $('#myModal textarea').val()
            },
            success: function(ret) {
                $('#myModal').hide();
            }
        })
    });
    $('.btn-public').one('click', functionPublic);
    $('.btn-unpublic').one('click', functionUnPublic);
    $('.btn-update').on('click', function() {
        var id = $(this).data('id');
        $this = $(this);

        ajaxJson({
            url: '/plugins/' + id + '/upgrade',
            type: 'post',
            success: function(ret) {
                $this.hide();
                $($this.parent().parent().find('td')[5]).html(ret.version);
            }
        })
    });
    $('.btn-install').on('click', function() {
        var name = $(this).data('id');
        $this = $(this);

        ajaxJson({
            url: '/plugins/install',
            type: 'post',
            data: {
                name: name
            },
            success: function(ret) {
                showInfo('Успешно добавлено', function(){
                    window.location.reload();
                });
            }
        })
    });
});

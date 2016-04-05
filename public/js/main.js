'use strict';

function pollForPosts() {
    var afterTime = $($('.post')[0]).data('timestamp');
    var data = {
        after: afterTime
    };
    if ($('#tag').val()) {
        data.tag = $('#tag').val();
    }
    $.ajax({
        type: 'GET',
        data: data,
        url: '/feed',
        contentType: 'application/json'
    }).done(function (data) {
        $($('.post-container')[0]).prepend(data);
    });
}
function newPosts() {
    var data = {};
    if ($('#tag').val()) {
        data.tag = $('#tag').val();
    }
    $.ajax({
        type: 'GET',
        data: data,
        url: '/feed',
        contentType: 'application/json'
    }).done(function (data) {
        $('.post-container')[0].innerHTML = data;
    });
}
$('document').ready(function () {
    if ($('.post-container')[0]) {
        setInterval(pollForPosts, 1000);
        window.onkeydown = function (e) {
            var code = e.keyCode ? e.keyCode : e.which;
            if (code === 13) {
                //up key
                newPosts();
                $('#tag').blur();
            }
        };
    };
});
//# sourceMappingURL=main.js.map

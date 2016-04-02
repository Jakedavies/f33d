'use strict';

function pollForPosts() {
    var afterTime = $($('message')[0]).data('timestamp');

    $.ajax({
        type: 'GET',
        data: {
            after: afterTime
        },
        url: '/feed',
        contentType: 'application/json'
    }).done(function (data) {
        $('post-container').prepend(data);
    });
}
//# sourceMappingURL=main.js.map

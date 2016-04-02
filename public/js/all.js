'use strict';

function pollForPosts() {
    var afterTime = $('message')[0].data('timestamp');

    $.get('/feed', { 'after': afterTime }).done(function (data) {
        $('post-container').prepend(data);
    });
}
//# sourceMappingURL=all.js.map

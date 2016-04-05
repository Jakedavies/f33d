'use strict';

function pollForPosts() {
    var afterTime = $($('.post')[0]).data('timestamp');
    $.ajax({
        type: 'GET',
        data: {
            after: afterTime
        },
        url: '/feed',
        contentType: 'application/json'
    }).done(function (data) {
        $($('.post-container')[0]).prepend(data);
    });
}
$('document').ready(function () {
    if ($('.post-container')[0]) {
        setInterval(pollForPosts, 1000);
    }
});
//# sourceMappingURL=main.js.map

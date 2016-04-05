
function pollForPosts() {
    var afterTime = $($('.post')[0]).data('timestamp');
    console.log(afterTime);
    $.ajax({
        type: 'GET',
        data: {
            after: afterTime
        },
        url: '/feed',
        contentType: 'application/json'
    }).done(function(data) {
        $($('.post-container')[0]).prepend(data.addClass('animated bounceInLeft'));
    })
}
$('document').ready(function(){
    if($('.post-container')[0]){
        setInterval(pollForPosts, 1000);
    }
});


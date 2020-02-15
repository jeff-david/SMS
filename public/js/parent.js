$(document).ready(function() {
    var notificationsWrapper = $('.has-noti');
    var notificationsToggle = notificationsWrapper.find('a[data-toggle]');
    var notificationsCountElem = notificationsToggle.find('i[data-count]');
    var notificationsCount = parseInt(notificationsCountElem.data('count'));
    var notifications = notificationsWrapper.find('div.notifi__item');


    if (notificationsCount <=0) {
        notificationsWrapper.hide();
    }

    var pusher = new Pusher('3e73398f5efce442ea54',{
        cluster:'ap1',
        forceTLS: true
    });
    

    var channel = pusher.subscribe('post-annnouncement');
   

    channel.bind('SMS\\Events\\PostAnnouncement',function(data) {
        var existingNotifications = notifications.html();
        var newNotificationsHtml = `
            <div class="content">
                <p>`+data.message+`</p>
                <span class="timestamp">about a minute ago</span>
            </div>
        `;

        notifications.html(newNotificationsHtml + existingNotifications);
        notificationsCount +=1;
        notificationsCountElem.attr('data-count',notificationsCount);
        notificationsWrapper.find('.notif-count').text(notificationsCount);
        notificationsWrapper.show(); 
    });

    console.log(channel);
});
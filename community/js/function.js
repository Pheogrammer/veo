function append_aZlist(new_message_notification, image_url, sender_name, allapse_time, latest_message) {

    var myvar = '<div class="media new">' +
        '            <div class="az-img-user online">' +
        '                <img src="' + image_url + '" alt="">' +
        '                    <span>' + new_message_notification + '</span>' +
        '            </div>' +
        '            <div class="media-body">' +
        '                <div class="media-contact-name">' +
        '                    <span>' + sender_name + '</span>' +
        '                    <span>' + allapse_time + '</span>' +
        '                </div>' +
        '                <p>' + latest_message + '</p>' +
        '            </div>' +
        '            <!-- media-body -->' +
        '        </div>';

    $('#azChatList').append(myvar);
}

function append_message_body(senders_name, last_seen_elapsed_time, messages, user_image_url, sender_image_url) {

    var myvar = '<div class="az-chat-header">' +
        '                <div class="az-img-user"><img src="' + sender_image_url + '" alt=""></div>' +
        '                <div class="az-chat-msg-name">' +
        '                    <h6>' + senders_name + '</h6>' +
        '                    <small>Last seen: ' + last_seen_elapsed_time + '</small>' +
        '                </div>' +
        '                <nav class="nav">' +
        '                    <a href="#" class="nav-link"><i class="icon ion-md-more"></i></a>' +
        '                    <a href="#" class="nav-link" data-toggle="tooltip" title="Archive"><i' +
        '                            class="icon ion-ios-filing"></i></a>' +
        '                    <a href="#" class="nav-link" data-toggle="tooltip" title="Trash"><i' +
        '                            class="icon ion-md-trash"></i></a>' +
        '                    <a href="#" class="nav-link" data-toggle="tooltip" title="View Info"><i' +
        '                            class="icon ion-md-information-circle"></i></a>' +
        '                </nav>' +
        '            </div><!-- az-chat-header -->' +
        '            <div id="azChatBody" class="az-chat-body">' +
        '                <div class="content-inner" id="message_list_body">' +
        '                    <label class="az-chat-time"><span>3 days ago</span></label>'
    for (var x = 0; x > 10; x++) {
        if (messages[x].message_type === 'feedback') {

            '                    <div class="media flex-row-reverse">' +
            '                        <div class="az-img-user online"><img src="' + sender_image_url + '" alt=""></div>' +
            '                        <div class="media-body">' +
            '                            <div class="az-msg-wrapper">' + messages[x].body +
            '                            </div><!-- az-msg-wrapper -->' +
            '                        </div><!-- media-body -->' +
            '                    </div><!-- media -->'
        } else {
            '                    <div class="media">' +
            '                        <div class="az-img-user online"><img src="' + user_image_url + '" alt=""></div>' +
            '                        <div class="media-body">' +
            '                            <div class="az-msg-wrapper">' + messages[x].body +
            '                            </div><!-- az-msg-wrapper -->' +
            '                            <div><span>9:32 am</span> <a href="#"><i class="icon ion-android-more-horizontal"></i></a>' +
            '                            </div>' +
            '                        </div><!-- media-body -->' +
            '                    </div><!-- media -->'
        }
        '                </div><!-- content-inner -->' +
        '            </div>';
    }

    $('#').append(myvar)
}


function get_messages() {
    // $.ajax({
    //     type: 'GET',
    //     url: 'detailed_notifications',
    //     dataType: 'Json',
    //     success: function (data) {
    //         console.log(data);
    //         for (var x = 0; x < 10; x++) {
    //             append_aZlist('3', '../img/faces/face8.jpg', 'Adrian Mvungi', '2 hours', 'Hiii!! its schatz. How are you doing')
    //         }
    //     }
    // });

    for (var x = 0; x < 10; x++) {
        append_aZlist('3', '../img/faces/face8.jpg', 'Adrian Mvungi', '2 hours', 'Hiii!! its schatz. How are you doing')
    }
}

function append_sent_message(user_image_url, messages_body) {
    var html = '<div class="media">' +
        '<div class="az-img-user online"><img src="' + user_image_url + '" alt=""></div>' +
        '<div class="media-body"><div class="az-msg-wrapper">' + messages_body +
        '</div><div><span>9:32 am</span> <a href="#"><i class="icon ion-android-more-horizontal"></i></a>' +
        '</div> </div></div><!-- media -->'

    $('#message_list_body').append(html)
}

function append_received_message(sender_image_url, messages_body) {
    var html = ' <div class="media flex-row-reverse">' +
        '<div class="az-img-user online"><img src="' + sender_image_url + '" alt=""></div>' +
        '<div class="media-body">' +
        '<div class="az-msg-wrapper">' + messages_body + '</div></div></div>'
    $('#message_list_body').append(html)
}


$('html').on('click', '.sending_message', function (e) {
    let input = $('#messege_sent')
    let message_body = input.val()
    let receiver_id = input.data('receiver_id');
    let data = {
        'message_body': message_body,
        'receiver_id': receiver_id
    }
    $.ajax({
        type: 'POST',
        url: 'message_processor',
        data: data,
        dataType: 'Json',
        success: function (data) {
            console.log(data);

        }
    });
});
get_messages();
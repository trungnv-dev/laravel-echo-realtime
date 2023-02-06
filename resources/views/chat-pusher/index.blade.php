<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>

<head>
    <title>Chat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            background: #7F7FD5;
            background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
            background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
        }

        .chat {
            margin-top: auto;
            margin-bottom: auto;
        }

        .card {
            height: 500px;
            border-radius: 15px !important;
            background-color: rgba(0, 0, 0, 0.4) !important;
        }

        .contacts_body {
            padding: 0.75rem 0 !important;
            overflow-y: auto;
            white-space: nowrap;
        }

        .msg_card_body {
            overflow-y: auto;
            display: flex;
            flex-direction: column-reverse;
        }

        .card-header {
            border-radius: 15px 15px 0 0 !important;
            border-bottom: 0 !important;
        }

        .card-footer {
            border-radius: 0 0 15px 15px !important;
            border-top: 0 !important;
        }

        .container {
            align-content: center;
        }

        .search {
            border-radius: 15px 0 0 15px !important;
            background-color: rgba(0, 0, 0, 0.3) !important;
            border: 0 !important;
            color: white !important;
        }

        .search:focus {
            box-shadow: none !important;
            outline: 0px !important;
        }

        .type_msg {
            background-color: rgba(0, 0, 0, 0.3) !important;
            border: 0 !important;
            color: white !important;
            height: 60px !important;
            overflow-y: auto;
        }

        .type_msg:focus {
            box-shadow: none !important;
            outline: 0px !important;
        }

        .attach_btn {
            border-radius: 15px 0 0 15px !important;
            background-color: rgba(0, 0, 0, 0.3) !important;
            border: 0 !important;
            color: white !important;
            cursor: pointer;
        }

        .send_btn {
            border-radius: 0 15px 15px 0 !important;
            background-color: rgba(0, 0, 0, 0.3) !important;
            border: 0 !important;
            color: white !important;
            cursor: pointer;
        }

        .search_btn {
            border-radius: 0 15px 15px 0 !important;
            background-color: rgba(0, 0, 0, 0.3) !important;
            border: 0 !important;
            color: white !important;
            cursor: pointer;
        }

        .contacts {
            list-style: none;
            padding: 0;
        }

        .contacts li {
            width: 100% !important;
            padding: 5px 10px;
            margin-bottom: 15px !important;
        }

        .active {
            background-color: rgba(0, 0, 0, 0.3);
        }

        .user_img {
            height: 70px;
            width: 70px;
            border: 1.5px solid #f5f6fa;

        }

        .user_img_msg {
            height: 40px;
            width: 40px;
            border: 1.5px solid #f5f6fa;

        }

        .img_cont {
            position: relative;
            height: 70px;
            width: 70px;
        }

        .img_cont_msg {
            height: 40px;
            width: 40px;
        }

        .online_icon {
            position: absolute;
            height: 15px;
            width: 15px;
            background-color: #4cd137;
            border-radius: 50%;
            bottom: 0.2em;
            right: 0.4em;
            border: 1.5px solid white;
        }

        .offline {
            background-color: #c23616 !important;
        }

        .user_info {
            margin-top: auto;
            margin-bottom: auto;
            margin-left: 15px;
        }

        .user_noti {
            margin-top: auto;
            margin-bottom: auto;
            margin-left: 15px;
            width: 150px;
            text-align: center;
        }

        .user_noti span {
            font-size: 20px;
            color: red;
        }

        .user_info span {
            font-size: 20px;
            color: white;
        }

        .user_info p {
            font-size: 10px;
            color: rgba(255, 255, 255, 0.6);
        }

        .video_cam {
            margin-left: 50px;
            margin-top: 5px;
        }

        .video_cam span {
            color: white;
            font-size: 20px;
            cursor: pointer;
            margin-right: 20px;
        }

        .msg_cotainer {
            margin-top: auto;
            margin-bottom: auto;
            margin-left: 10px;
            border-radius: 25px;
            background-color: #82ccdd;
            padding: 10px;
            position: relative;
        }

        .msg_cotainer_send {
            margin-top: auto;
            margin-bottom: auto;
            margin-right: 10px;
            border-radius: 25px;
            background-color: #78e08f;
            padding: 10px;
            position: relative;
        }

        .msg_time {
            position: absolute;
            left: 0;
            bottom: -15px;
            color: rgba(255, 255, 255, 0.5);
            font-size: 10px;
        }

        .msg_time_send {
            position: absolute;
            right: 0;
            bottom: -15px;
            color: rgba(255, 255, 255, 0.5);
            font-size: 10px;
        }

        .msg_head {
            position: relative;
        }

        #action_menu_btn {
            position: absolute;
            right: 10px;
            top: 10px;
            color: white;
            cursor: pointer;
            font-size: 20px;
        }

        .action_menu {
            z-index: 1;
            position: absolute;
            padding: 15px 0;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border-radius: 15px;
            top: 30px;
            right: 15px;
            display: none;
        }

        .action_menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .action_menu ul li {
            width: 100%;
            padding: 10px 15px;
            margin-bottom: 5px;
        }

        .action_menu ul li i {
            padding-right: 10px;

        }

        .action_menu ul li:hover {
            cursor: pointer;
            background-color: rgba(0, 0, 0, 0.2);
        }

        @media(max-width: 576px) {
            .contacts_card {
                margin-bottom: 15px !important;
            }
        }
    </style>
</head>
<!--Coded With Love By Mutiullah Samim-->

<body>
    <div class="container-fluid h-100">
        <div class="row justify-content-center h-100">
            <div class="col-md-4 col-xl-3 chat">
                <div class="card mb-sm-3 mb-md-0 contacts_card">
                    <div class="card-header">
                        <div class="input-group">
                            <input type="text" placeholder="Search..." name="" class="form-control search">
                            <div class="input-group-prepend">
                                <span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body contacts_body">
                        <ui class="contacts" id="body-conversation">
                            @include('chat.conversations', ['conversations' => $conversations, 'isActive' => null])
                        </ui>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
            <div class="col-md-8 col-xl-6 chat">
                <div class="card">
                    <div class="card-header msg_head">
                        <div class="d-flex bd-highlight">
                            <div class="img_cont">
                                <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img">
                                <span class="online_icon"></span>
                            </div>
                            <div class="user_info">
                                <span>Chat with Khalid</span>
                                <p>1767 Messages</p>
                            </div>
                            <div class="video_cam">
                                <span><i class="fas fa-video"></i></span>
                                <span><i class="fas fa-phone"></i></span>
                            </div>
                        </div>
                        <span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
                        <div class="action_menu">
                            <ul>
                                <li><i class="fas fa-user-circle"></i> View profile</li>
                                <li><i class="fas fa-users"></i> Add to close friends</li>
                                <li><i class="fas fa-plus"></i> Add to group</li>
                                <li><i class="fas fa-ban"></i> Block</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body msg_card_body" id="content">
                        <!-- append data ajax -->
                    </div>
                    <div class="card-footer">
                        {!! Form::open(['method' => 'POST', 'route' => 'chat.create_message', 'id' => 'form-send-msg']) !!}
                        <div class="input-group">
                            <div class="input-group-append">
                                <span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
                            </div>
                            <textarea name="message" class="form-control type_msg" placeholder="Type your message..."></textarea>
                            <div class="input-group-append">
                                <span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
                            </div>
                        </div>
                        <input type="hidden" id="user_id" data-value="{{ auth()->id() }}">
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('/js/pusher.js') }}" type="text/javascript"></script>
<!-- <script src="//{{ Request::getHost() }}:{{env('LARAVEL_ECHO_PORT')}}/socket.io/socket.io.js"></script>
<script src="{{ asset('/js/laravel-echo-setup.js') }}" type="text/javascript"></script> -->
<script>
    $(function() {
        $(document)
        .ready(function() {
            // get list messages dựa vào cuộc trò chuyện đang được focus
            getMessages($('.active').data('id'), 1);

            Echo.private('messages').listen('.message.created', (e) => {
                console.log(e)
                // nếu user đang login không phải là người gửi tn thì vào case này (user khác gửi tới cho user này)
                // nếu cuộc trò chuyện đang focus = cuộc trò chuyện được user khác gửi tin nhắn tới thì vô case này
                // get messages từ echo server và append ra màn hình
                if ($("#user_id").data('value') != e.message.user_id && $('.active').data('id') == e.message.conversation_id) {
                    let html = "<div class='d-flex justify-content-start mb-4'><div class='img_cont_msg'><img src='/storage/" + e.message.user.avatar +"' class='rounded-circle user_img_msg'></div><div class='msg_cotainer'>" +e.message.message+ "</div></div>"
                    $("#content").prepend(html)
                    $('.active .user_noti').html('')
                }
                // nếu cuộc trò chuyện đang focus != cuộc trò chuyện được user khác gửi tin nhắn tới thì vô case này
                // load lại list conversations và giữ nguyên conversations đang focus
                // hiển thị thông báo có tn đến
                if ($('.active').data('id') != e.message.conversation_id) {
                    getConversations($('.active').data('id'))
                }
            });
        })

        // tiến hành send message và phát sóng sự kiện đến echo sever cho user khác lắng nghe
        // khi send message thành công, đối vs user đang login sẽ load lại list conversations và list messages của conversations đang focus
        .on('click', '.send_btn', function () {
            var formData = new FormData($('#form-send-msg').get(0));
            formData.append('conversation_id', $('.active').data('id'))

            $.ajax({
                url: $('#form-send-msg').attr('action'),
                type: $('#form-send-msg').attr('method'),
                data: formData,
                success: function(response) {
                    $('#form-send-msg').get(0).reset()
                    getConversations(0)
                    getMessages($('.active').data('id'), 0)
                },
                cache: false,
                contentType: false,
                processData: false
            });
        })

        // get list messages của conversations đang chọn
        .on('click', '.contacts li', function () {
            let conversation_id = $(this).data('id');
            if (!$(this).hasClass('active')) {
                $(".contacts li").removeClass('active');
                $(this).addClass('active');
                getMessages(conversation_id, 1)
            }
        })

        function getConversations(conversation_id)
        {
            $.ajax({
                url: '/chat/conversations?conversation_id=' + conversation_id,
                type: 'GET',
                success: function(response) {
                    $("#body-conversation").html(response.data)
                },
                cache: false,
                contentType: false,
                processData: false
            });
        }

        function getMessages(conversation_id, is_seen)
        {
            $.ajax({
                url: '/chat/messages?conversation_id=' + conversation_id + '&is_seen=' + is_seen,
                type: 'GET',
                success: function(response) {
                    $('#form-send-msg').get(0).reset()
                    $("#content").html(response.data)
                    if (is_seen != 0) {
                        $('.active .user_noti').html('')
                    }
                },
                cache: false,
                contentType: false,
                processData: false
            });
        }
    });
</script>
</html>
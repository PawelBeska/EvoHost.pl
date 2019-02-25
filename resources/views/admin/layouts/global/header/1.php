<div class="navbar-container container-fluid">
    <div>
        <ul class="nav-left">
            <li>
                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
            </li>
            <li>
                <a href="#!" onclick="javascript:toggleFullScreen()"><i class="ti-fullscreen"></i></a>
            </li>
        </ul>
        <ul class="nav-right">
            <li class="header-notification">
                <a href="#!"><i class="ti-bell"></i></a>
                <ul class="show-notification user-notification">
                    <li>
                        <h6>Powiadomienia</h6>
                        <label class="label label-danger">New</label>
                    </li>
                </ul>
            </li>
            <li class="user-profile header-notification">
                <a href="#!">
                        <span>{{auth()->user()->name}}</span>
                        <i class="ti-angle-down"></i>
                    </a>
                <ul class="show-notification profile-notification">
                    <li>
                        <a href="{{route('index')}}"><i class="fa fa-home"></i> Strona główna</a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}"><i class="fa fa-sign-out"></i> Wyloguj</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<script>
    $(document).ready(function(){function load_unseen_notification()
    {$.ajaxSetup({headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')}});$.ajax({url:"{{route('notifications')}}",method:"POST",dataType:"json",success:function(data)
        {$('.show-notification.user-notification').html(' <li>\n'+'                        <h6>Powiadomienia</h6>\n'+'                        <label class="label label-danger">Nowe</label>\n'+'                    </li>');$.each(data,function(index,element){$('.show-notification.user-notification').append(' <li>\n'+'                        <div class="media">\n'+'                            <div class="media-body">\n'+'                                <p class="notification-msg">'+element.text+'</p>\n'+'                                <span class="notification-time">'+element.created_at+'</span>\n'+'                                <i style="cursor:pointer" class="icofont icofont-close-circled notification_remove" id="{{route('notification_remove',['id'=>null])}}/'+element.id+'"></i>\n'+'                            </div>\n'+'                        </div>\n'+'                    </li>')});if(data===undefined||data.length==0){$('.ti-bell').html('')}else{$('.ti-bell').html('<span class="badge count">'+data.length+'</span>')}}})}
        load_unseen_notification();$('.show-notification.user-notification').on('click','.notification_remove',function(e){$.ajaxSetup({headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')}});console.log($(e).attr('id'))
            $.ajax({url:$(this).attr('id'),method:"POST",dataType:"json",success:function(data)
                {if(data>0)
                {$('.ti-bell').html('<span class="badge count">'+data+'</span>')}else{$('.ti-bell').html('')}
                    load_unseen_notification()}})});$(document).on('click','li.header-notification',function(){console.log(data);load_unseen_notification('yes')});setInterval(function(){load_unseen_notification()},5000)})
</script>
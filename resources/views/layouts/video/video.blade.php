<head>
    <link href="https://vjs.zencdn.net/7.4.1/video-js.css" rel="stylesheet">
    <title>eVohost.pl - Twój bezpłatny hosting filmów.</title>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-P23LM57');</script>
    <!-- End Google Tag Manager -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-129753787-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-129753787-1');
    </script>



    <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
    <script src="https://vjs.zencdn.net/ie8/ie8-version/videojs-ie8.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <style type="text/css">
        .vjs-default-skin { color: #ffffff; }
        .vjs-default-skin .vjs-play-progress,
        .vjs-default-skin .vjs-volume-level { background-color: #b80000 }
        .vjs-default-skin .vjs-control-bar,
        .vjs-default-skin .vjs-big-play-button { background: rgba(0,0,0,1) }
        .vjs-default-skin .vjs-slider { background: rgba(0,0,0,0.3333333333333333) }
        .video-js .vjs-big-play-button:focus {background-color: #ffffff;background-color: rgba(0, 0, 0, 0.63); }
    </style>
    <script type="text/javascript" src="https://bodelen.com/apu.php?zoneid=2165977"></script>
    <script type="text/javascript" src="https://bodelen.com/apu.php?zoneid=2165982"></script>

</head>
<body style="    margin: 0;height: 100%;
    display: flex;">

<div data-vjs-player>
    <video id="my-video" style="height: 100%; width: 100%;" class="video-js vjs-default-skin vjs-big-play-centered"  controls preload="auto" width="auto"
           @if($pass->poster())   poster=" {{$pass->poster()}}  "@endif data-setup=''>

        @if(strpos($pass->movie()->source,'.avi') !== false)
            <source src="{{$pass->url()}}" type='video/x-msvideo'>
        @elseif(strpos($pass->movie()->source,'.mp4') !== false)
            <source src="{{$pass->url()}}" type='video/mp4'>
            @endif
        <p class="vjs-no-js">
            To view this video please enable JavaScript, and consider upgrading to a web browser that
            <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
        </p>
    </video>

    </div>
</body>

<script src="https://vjs.zencdn.net/7.4.1/video.js"></script>
<!--<script async="async" data-cfasync="false" src="//tharbadir.com/2?z=2279690"></script> -->
<script>
    var myPlayer = videojs('my-video');
    myPlayer.on('playing', function() {
        $.ajax({
            url: location.href+'/{{$pass->pass}}',
            type: 'GET',
        });
    });
</script>


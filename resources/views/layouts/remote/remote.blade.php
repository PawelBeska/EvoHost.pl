<div class="page-top" style=' background-image:url("{{URL::asset('assets/home/images/header_bg_2.jpg')}}")'>
    <!--  MESSAGES ABOVE HEADER IMAGE -->
    <div class="message">
        <div class="container">
            <div class="row">
                <div class="col-md-12 columns">
                    <div class="message-intro">
                        <span class="message-line"></span>
                        <p>Upload Zdalny</p>
                        <span class="message-line"></span>
                    </div>
                    <h1 style="">ZDALNE PRZESYŁANIE PLIKÓW</h1>
                </div>
            </div>
        </div>
    </div>
    <!--  END OF MESSAGES ABOVE HEADER IMAGE -->
</div>


<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="bs-component">
                <div class="jumbotron ">
                    <div class="panel-body ">
                        {!! Form::open(['class'=>'form-horizontal remote','url'=>route('remote_post')]) !!}

                        <div class="form-group ">
                            {!! Form::label('title','Tytuł:',['class'=>'col-sm-1 col-md-1 control-label']) !!}
                            <div class="col-md-11 col-sm-11">
                                {!! Form::text('title',null,['class'=>'form-control title','route'=>route('remote_search',['id'=>null]),'id'=>'title','autocomplete'=>'off']) !!}
                                {!! Form::hidden('title') !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('sources','Źródło:',['class'=>'col-md-1 col-sm-1 control-label']) !!}
                            <div class="col-md-11 col-sm-11">
                                {!! Form::password('sources',['class'=>'form-control']) !!}
                            </div>
                        </div>


                        <div class="form-group">

                                {!! Form::submit('Dodaj',['class'=>'btn btn-primary col-md-12 col-sm-12']) !!}

                        </div>
                        {!! Form::close() !!}

                    </div>

                </div>

            </div>
        </div>
    </div>

<script>
    function autoComplete(name, second) {
        var element = $('.' + name);
        var url = element.attr('route');
        $('.' + name).autocomplete({
            selectFirst: true,
            lookup: function (query, done) {
                var result;
                var second_element = $('.' + second);
                var second_val = $("input:hidden[name=" + second_element.attr('name') + "]").val();

                if(second_val)
                {

                    $.ajax({
                        url: url,
                        type: 'GET',
                        data: "query=" + query + '&second=' + second_val,
                        success: function (data) {
                            done({suggestions: data});
                        },
                        error: function (data) {
                        }
                    });
                }else{
                    $.ajax({
                        url: url,
                        type: 'GET',
                        data: "query=" + query,
                        success: function (data) {
                            done({suggestions: data});
                        },
                        error: function (data) {
                        }
                    });
                }



            },
            onSelect: function (suggestion) {
                $("input:hidden[name=" + element.attr('name') + "]").val(suggestion.data);

            }

        });

    }
    autoComplete('title');

</script>
</div>

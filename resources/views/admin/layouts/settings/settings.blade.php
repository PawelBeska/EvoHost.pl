<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Ustawienia</h4>
                    </div>
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="">
                                    <i class="icofont icofont-home"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="page-body">
                    <div class="row">
                        <div class="col-md-12 col-xl-12">
                            {!! Form::open(['url'=>route('admin.settings.edit'),'class'=>'ajax']) !!}
                            <div class="card table-card">
                                <div class="">
                                    <div class="row-table">
                                        <div class="col-sm-12 card-block-big">
                                                <div class="form-group row col-md-12">
                                                    {!! Form::label('site_active','Strona główna:',['class'=>'col-form-label']) !!}
                                                    <div class="col-sm-3 col-lg-3">
                                                        {!! Form::select('site_active',['1'=>"Włączona",'0'=>'Wyłączona'],DBS::get('site_active'),['class'=>'form-control']) !!}
                                                    </div>
                                                    <div class="col-sm-6">
                                                        {!! Form::text('site_disabled_reason',DBS::get('site_disabled_reason'),['placeholder'=>'Wpisz powód zamknięcia strony', 'class'=>"form-control"]) !!}

                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="row-table">
                                        <div class="col-sm-12 card-block-big">
                                                <div class="form-group row col-md-12">
                                                    {!! Form::label('payments_active','Moduł płatności:',['class'=>'col-form-label']) !!}
                                                    <div class="col-sm-3 col-lg-2">
                                                        {!! Form::select('payments_active',['1'=>"Włączony",'0'=>'Wyłączony'],DBS::get('payments_active'),['class'=>'form-control']) !!}
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="row-table">
                                        <div class="col-sm-12 card-block-big">
                                            <div class="form-group row col-md-12">
                                                {!! Form::label('registration_active','Moduł rejestracji:',['class'=>'col-form-label']) !!}
                                                <div class="col-sm-3 col-lg-2">
                                                    {!! Form::select('registration_active',['1'=>"Włączony",'0'=>'Wyłączony'],DBS::get('registration_active'),['class'=>'form-control']) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="row-table">
                                        <div class="col-sm-12 card-block-big">
                                            <div class="form-group row col-md-12">
                                                {!! Form::label('login_active','Moduł logowania:',['class'=>'col-form-label']) !!}
                                                <div class="col-sm-3 col-lg-2">
                                                    {!! Form::select('login_active',['1'=>"Włączony",'0'=>'Wyłączony'],DBS::get('login_active'),['class'=>'form-control']) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="row-table">
                                        <div class="col-sm-12 card-block-big">
                                            <div class="form-group row col-md-12">
                                                {!! Form::label('partner_panel_active','Panel partnera:',['class'=>'col-form-label']) !!}
                                                <div class="col-sm-3 col-lg-2">
                                                    {!! Form::select('partner_panel_active',['1'=>"Włączony",'0'=>'Wyłączony'],DBS::get('partner_panel_active'),['class'=>'form-control']) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="row-table">
                                        <div class="col-sm-12 card-block-big">
                                            <div class="form-group row col-md-12">
                                                {!! Form::label('upload_files_active','Moduł uploadu plików:',['class'=>'col-form-label']) !!}
                                                <div class="col-sm-3 col-lg-2">
                                                    {!! Form::select('upload_files_active',['1'=>"Włączony",'0'=>'Wyłączony'],DBS::get('upload_files_active'),['class'=>'form-control']) !!}

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="row-table">
                                        <div class="col-sm-12 card-block-big">
                                            <div class="form-group row col-md-12">
                                                {!! Form::label('upload_files_remotely_active','Moduł zdalnego uploadu plików:',['class'=>'col-form-label']) !!}
                                                <div class="col-sm-3 col-lg-2">
                                                    {!! Form::select('upload_files_remotely_active',['1'=>"Włączony",'0'=>'Wyłączony'],DBS::get('upload_files_remotely_active'),['class'=>'form-control']) !!}

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="row-table">
                                        <div class="col-sm-12 card-block-big">
                                            <div class="form-group row col-md-12">
                                                {!! Form::label('max_file_size','Maksymalny rozmiar pliku:',['class'=>'col-form-label']) !!}
                                                <div class="col-sm-3 col-lg-2">
                                                    {!! Form::number('max_file_size',DBS::get('max_file_size'),['class'=>'form-control','required','step' => '0.001','placeholder'=>'1,500GB']) !!}
                                                  </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            {!! Form::submit('Zapisz ustawienia',['class'=>"btn btn-inverse float-right"]) !!}
                            {!! Form::close() !!}

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
</div>
<script>
    $('form.ajax').on('submit',function(e){
        e.preventDefault();
        $.ajax({
            url: $(this).attr('action'),
            data: $(this).serialize(),
            type: 'POST',
            success: function(data){
                $('#errors').empty();
                if(data['error'])
                {
                    $('#errors').prepend('   <div class="alert alert-sm alert-border-left alert-danger alert-dismissable">\n' +
                        '                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                        '                                        <i class="fa fa-info pr10"></i>' + data['error'] + ' </div>');
                }
                else if(data['success']) {
                    $('#errors').prepend('   <div class="alert alert-sm alert-border-left alert-success alert-dismissable">\n' +
                        '                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                        '                                    <i class="fa fa-check pr10"></i> ' + data['success'] + ' </div>');
                }
                else{
                    $('#errors').prepend('   <div class="alert alert-sm alert-border-left alert-success alert-dismissable">\n' +
                        '                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                        '                                    <i class="fa fa-check pr10"></i> Pomyślnie utworzono konto </div>');
                    setTimeout(function() {
                        location.reload();
                    }, 5000);
                }
            },
            error: function (data) {
                $('#errors').empty();
                var l = JSON.parse(data.responseText);
                var i = 0;
                $.each(l['errors'], function (heading, text) {
                    i++;
                    $('#errors').prepend('   <div class="alert alert-sm alert-border-left alert-danger alert-dismissable">\n' +
                        '                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                        '                                        <i class="fa fa-info pr10"></i>' +text + ' </div>');

                });

            },
        });
    });
</script>
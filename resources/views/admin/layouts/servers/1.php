<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Lista serwerów</h4>
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

                    <div class="card">
                        <div class="card-header">
                            <h5>Nowy serwer</h5>
                            <span>Tutaj wyświetly jest formularz dzięki któremu możesz łatwo i bezpiecznie edytować dany rekord.</span>
                            <div class="card-header-right">
                                <i class="icofont icofont-rounded-down"></i>
                                <i class="icofont icofont-refresh"></i>
                                <i class="icofont icofont-close-circled"></i>
                            </div>
                        </div>
                        <div class="card-block">
                            <div id="new_errors"></div>
                            {!! Form::open(['class'=>'new','url'=>route('admin.servers.create')]) !!}
                            <div class="form-group row col-md-12">
                                {!! Form::label('name','Nazwa:',['class'=>'col-form-label']) !!}
                                <div class="col-sm-10 col-lg-3">
                                    {!! Form::text('name',null,['class'=>'form-control']) !!}
                                </div>
                                {!! Form::label('ip','Adres:',['class'=>'col-form-label']) !!}
                                <div class="col-sm-10 col-lg-3">
                                    {!! Form::url('ip',null,['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group row col-md-12">
                                {!! Form::submit('Stwórz',['class'=>'btn btn-primary']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="card turn_on" style="display:none;">
                        <div class="card-header">
                            <h5>Włączanie serwera</h5>
                            <span>Tutaj wyświetlane są narzędzia do włączania serwera</span>
                            <div class="card-header-right">
                                <i class="icofont icofont-rounded-down"></i>
                                <i class="icofont icofont-refresh"></i>
                                <i class="icofont icofont-close-circled"></i>
                            </div>
                        </div>
                        <div class="card-block">
                            <div id="turn_on_errors"></div>
                            {!! Form::open(['class'=>'turn_on','url'=>route('admin.servers.turn_on',['id'=>null])]) !!}
                            <div class="form-group row col-md-12">
                                {!! Form::label('name','Login:',['class'=>'col-form-label']) !!}
                                <div class="col-sm-10 col-lg-3">
                                    {!! Form::text('name',null,['class'=>'form-control']) !!}
                                </div>
                                {!! Form::label('password','Hasło:',['class'=>'col-form-label']) !!}
                                <div class="col-sm-10 col-lg-3">
                                    {!! Form::password('password',['class'=>'form-control']) !!}
                                </div>
                            </div>


                            <div class="form-group row col-md-12">
                                {!! Form::submit('Włącz',['class'=>'btn btn-primary']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="card turn_off" style="display:none">
                        <div class="card-header">
                            <h5>Wyłączanie serwera</h5>
                            <span>Tutaj wyświetlane są narzędzia do wyłączania serwera</span>
                            <div class="card-header-right">
                                <i class="icofont icofont-rounded-down"></i>
                                <i class="icofont icofont-refresh"></i>
                                <i class="icofont icofont-close-circled"></i>
                            </div>
                        </div>
                        <div class="card-block">
                            <div id="turn_off_errors"></div>
                            {!! Form::open(['class'=>'turn_off','url'=>route('admin.servers.turn_off',['id'=>null])]) !!}
                            <div class="form-group row col-md-12">
                                {!! Form::label('name','Login:',['class'=>'col-form-label']) !!}
                                <div class="col-sm-10 col-lg-3">
                                    {!! Form::text('name',null,['class'=>'form-control']) !!}
                                </div>
                                {!! Form::label('password','Hasło:',['class'=>'col-form-label']) !!}
                                <div class="col-sm-10 col-lg-3">
                                    {!! Form::password('password',['class'=>'form-control']) !!}
                                </div>
                            </div>


                            <div class="form-group row col-md-12">
                                {!! Form::submit('Wyłącz',['class'=>'btn btn-primary']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="card edit" style="display: none;">
                        <div class="card-header">
                            <h5>Szybka edycja</h5>
                            <span>Tutaj wyświetlana jest szybka edycja możesz łatwo i bezpiecznie edytować dany rekord.</span>
                            <div class="card-header-right">
                                <i class="icofont icofont-rounded-down"></i>
                                <i class="icofont icofont-refresh"></i>
                                <i class="icofont icofont-close-circled"></i>
                            </div>
                        </div>
                        <div class="card-block">
                            <div id="edit_errors"></div>
                            {!! Form::open(['class'=>'edit','url'=>route('admin.servers.edit',['id'=>null])]) !!}
                            <div class="form-group row col-md-12">
                                {!! Form::label('name','Nazwa:',['class'=>'col-form-label']) !!}
                                <div class="col-sm-10 col-lg-3">
                                    {!! Form::text('name',null,['class'=>'form-control']) !!}
                                </div>
                                {!! Form::label('ip','Adres:',['class'=>'col-form-label']) !!}
                                <div class="col-sm-10 col-lg-3">
                                    {!! Form::url('ip',null,['class'=>'form-control']) !!}
                                </div>
                            </div>


                            <div class="form-group row col-md-12">
                                {!! Form::submit('Edytuj',['class'=>'btn btn-primary']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5>Lista Serwerów</h5>
                            <span>Tutaj wyświetlana jest lista serwerów za pomocą tego narzędzia możesz je edytować, usuwać lub dodawać.</span>
                            <p class="text-danger">
                               Jeśli nie jesteś pewien co robisz lepiej tego nie rób!
                            </p>
                            <div class="card-header-right">
                                <i class="icofont icofont-rounded-down"></i>
                                <i class="icofont icofont-refresh"></i>
                                <i class="icofont icofont-close-circled"></i>
                            </div>
                        </div>
                        <div class="card-block">
                            <div id="edit_errors"></div>
                            <div class="table-responsive dt-responsive">
                                <div class="col-xs-12 col-sm-12">
                                    <table id="datatable" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="dom-jqry_info">
                                        <thead>
                                        <td>ID</td>
                                        <td>Nazwa</td>
                                        <td>Adres</td>
                                        <td>Wolne miejsce</td>
                                        <td>Status</td>
                                        <td>Zarządzaj</td>
                                        </thead>
                                    </table>
                                    <script>
                                        $(document).ready(function () {
                                            window.datatable = $('#datatable').DataTable({
                                                columns: [
                                                    {data: 'id', "sClass": 'id'},
                                                    {data: 'name', "sClass": 'name'},
                                                    {data: 'ip', "sClass": 'ip'},
                                                    {data: 'free_space', "sClass": 'free_space'},
                                                    {data: "status", "sClass": 'status'},
                                                    {name: "buttons","data": "buttons"},
                                                ],
                                                "autoWidth": true,
                                                'responsive': true,
                                                "processing": true,
                                                "serverSide": true,
                                                rowId: 'id',
                                                ajax: "{{route('admin.datatable.servers')}}",

                                            });

                                        });
                                        $('#datatable').on('click', 'a#turn_on', function () {
                                            $('div.turn_on').show();
                                            $('form.turn_on').attr({'id': $(this).parents('tr').attr('id'), 'action': $('form.turn_on').attr('action') + '/' + $(this).parents('tr').attr('id')});

                                        });
                                        $('#datatable').on('click', 'a#turn_off', function () {
                                            $('div.turn_off').show();
                                            $('form.turn_off').attr({'id': $(this).parents('tr').attr('id'), 'action': $('form.turn_off').attr('action') + '/' + $(this).parents('tr').attr('id')});

                                        });
                                        if ($('form.edit').attr('action')) {
                                            var loc = $('form.edit').attr('action') + '/';
                                        } else {
                                            var loc = location.href + '/';
                                        }
                                        $('#datatable').on('click', 'button#edit', function () {
                                            $('div.edit').show();
                                            $('form.edit').attr({'id': $(this).parents('tr').attr('id'), 'action': loc + $(this).parents('tr').attr('id')});
                                            var tr = $(this).parents('tr');
                                            $('form.edit').find(':input.form-control').each(function () {
                                                var text =  tr.find('td.' + $(this).attr('id')).text();
                                                if (text.indexOf('[') > -1) {
                                                    $('.select2[name="genrs[]"').val(JSON.parse(text)).trigger('change');
                                                } else {
                                                    if ($(this).attr('route')) {
                                                        var name = $(this).attr('name');
                                                        $(this).val(tr.find('td.' + name).text());
                                                        $.ajax({
                                                            url: $(this).attr('route'),
                                                            type: 'GET',
                                                            data: "query=" + tr.find('td.' + name).text(),
                                                            success: function (data) {
                                                                $.each(data, function (index, element) {
                                                                    $("input:hidden[name=" + name + "]").val(element.data);
                                                                });
                                                            },
                                                            error: function (data) {
                                                            }
                                                        });

                                                    } else {
                                                        $(this).val(tr.find('td.' + $(this).attr('name')).text());
                                                    }


                                                }
                                            });
                                        });
                                        $('#datatable').on('click', 'button#remove', function () {
                                            var id = $(this).parents('tr').attr('id');
                                            $.ajax({
                                                url: loc + id,
                                                type: 'GET',
                                                success: function (data) {
                                                    $('#errors').empty();
                                                    if(data['error'])
                                                    {
                                                        $('#errors').prepend('   <div class="alert alert-sm alert-border-left alert-danger alert-dismissable">\n' +
                                                            '                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                                                            '                                        <i class="fa fa-info pr10"></i>' + data['error'] + ' </div>');
                                                    }
                                                    if(data['success']) {
                                                        $('#errors').prepend('   <div class="alert alert-sm alert-border-left alert-success alert-dismissable">\n' +
                                                            '                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                                                            '                                    <i class="fa fa-check pr10"></i> ' + data['success'] + ' </div>');
                                                    }
                                                    window.datatable.ajax.reload();
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
                                                }
                                            });

                                        });
                                        var TURN_ON = $("form.turn_on");
                                        TURN_ON.submit(function (e) {
                                            e.preventDefault();
                                            $.ajax({
                                                url: TURN_ON.attr('action'),
                                                type: 'POST',
                                                data: TURN_ON.serialize(),
                                                success: function (data) {
                                                    $('#turn_on_errors').empty();
                                                    if(data['error'])
                                                    {
                                                        $('#turn_on_errors').prepend('   <div class="alert alert-sm alert-border-left alert-danger alert-dismissable">\n' +
                                                            '                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                                                            '                                        <i class="fa fa-info pr10"></i>' + data['error'] + ' </div>');
                                                    }
                                                    if(data['success']) {
                                                        $('#turn_on_errors').prepend('   <div class="alert alert-sm alert-border-left alert-success alert-dismissable">\n' +
                                                            '                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                                                            '                                    <i class="fa fa-check pr10"></i> ' + data['success'] + ' </div>');
                                                    }
                                                    window.datatable.ajax.reload();
                                                },
                                                error: function (data) {
                                                    $('#turn_on_errors').empty();
                                                    var l = JSON.parse(data.responseText);
                                                    var i = 0;
                                                    $.each(l['errors'], function (heading, text) {
                                                        i++;
                                                        $('#turn_on_errors').prepend('   <div class="alert alert-sm alert-border-left alert-danger alert-dismissable">\n' +
                                                            '                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                                                            '                                        <i class="fa fa-info pr10"></i>' +text + ' </div>');

                                                    });
                                                }
                                            });
                                        });
                                        var TURN_OFF = $("form.turn_off");
                                        TURN_OFF.submit(function (e) {
                                            e.preventDefault();
                                            $.ajax({
                                                url: TURN_OFF.attr('action'),
                                                type: 'POST',
                                                data: TURN_OFF.serialize(),
                                                success: function (data) {
                                                    $('#turn_off_errors').empty();
                                                    if(data['error'])
                                                    {
                                                        $('#turn_off_errors').prepend('   <div class="alert alert-sm alert-border-left alert-danger alert-dismissable">\n' +
                                                            '                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                                                            '                                        <i class="fa fa-info pr10"></i>' + data['error'] + ' </div>');
                                                    }
                                                    if(data['success']) {
                                                        $('#turn_off_errors').prepend('   <div class="alert alert-sm alert-border-left alert-success alert-dismissable">\n' +
                                                            '                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                                                            '                                    <i class="fa fa-check pr10"></i> ' + data['success'] + ' </div>');
                                                    }
                                                    window.datatable.ajax.reload();
                                                },
                                                error: function (data) {
                                                    $('#turn_off_errors').empty();
                                                    var l = JSON.parse(data.responseText);
                                                    var i = 0;
                                                    $.each(l['errors'], function (heading, text) {
                                                        i++;
                                                        $('#turn_off_errors').prepend('   <div class="alert alert-sm alert-border-left alert-danger alert-dismissable">\n' +
                                                            '                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                                                            '                                        <i class="fa fa-info pr10"></i>' +text + ' </div>');

                                                    });
                                                }
                                            });
                                        });
                                        var EDIT = $("form.edit");
                                        EDIT.submit(function (e) {
                                            e.preventDefault();
                                            $.ajax({
                                                url: EDIT.attr('action'),
                                                type: 'POST',
                                                data: EDIT.serialize(),
                                                success: function (data) {
                                                    $('#edit_errors').empty();
                                                    if(data['error'])
                                                    {
                                                        $('#edit_errors').prepend('   <div class="alert alert-sm alert-border-left alert-danger alert-dismissable">\n' +
                                                            '                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                                                            '                                        <i class="fa fa-info pr10"></i>' + data['error'] + ' </div>');
                                                    }
                                                    if(data['success']) {
                                                        $('#edit_errors').prepend('   <div class="alert alert-sm alert-border-left alert-success alert-dismissable">\n' +
                                                            '                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                                                            '                                    <i class="fa fa-check pr10"></i> ' + data['success'] + ' </div>');
                                                    }
                                                    window.datatable.ajax.reload();
                                                },
                                                error: function (data) {
                                                    $('#edit_errors').empty();
                                                    var l = JSON.parse(data.responseText);
                                                    var i = 0;
                                                    $.each(l['errors'], function (heading, text) {
                                                        i++;
                                                        $('#edit_errors').prepend('   <div class="alert alert-sm alert-border-left alert-danger alert-dismissable">\n' +
                                                            '                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                                                            '                                        <i class="fa fa-info pr10"></i>' +text + ' </div>');

                                                    });
                                                }
                                            });
                                        });
                                        var NEW = $("form.new");
                                        NEW.submit(function (e) {
                                            e.preventDefault();
                                            $.ajax({
                                                url: NEW.attr('action'),
                                                type: 'POST',
                                                data: NEW.serialize(),
                                                success: function (data) {
                                                    $('#new_errors').empty();
                                                    if(data['error'])
                                                    {
                                                        $('#new_errors').prepend('   <div class="alert alert-sm alert-border-left alert-danger alert-dismissable">\n' +
                                                            '                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                                                            '                                        <i class="fa fa-info pr10"></i>' + data['error'] + ' </div>');
                                                    }
                                                    if(data['success']) {
                                                        $('#new_errors').prepend('   <div class="alert alert-sm alert-border-left alert-success alert-dismissable">\n' +
                                                            '                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                                                            '                                    <i class="fa fa-check pr10"></i> ' + data['success'] + ' </div>');
                                                    }
                                                    window.datatable.ajax.reload();
                                                },
                                                error: function (data) {
                                                    $('#new_errors').empty();
                                                    var l = JSON.parse(data.responseText);
                                                    var i = 0;
                                                    $.each(l['errors'], function (heading, text) {
                                                        i++;
                                                        $('#new_errors').prepend('   <div class="alert alert-sm alert-border-left alert-danger alert-dismissable">\n' +
                                                            '                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' +
                                                            '                                        <i class="fa fa-info pr10"></i>' +text + ' </div>');

                                                    });
                                                }
                                            });
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
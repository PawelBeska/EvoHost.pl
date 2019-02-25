<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Lista grup</h4>
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
                            <h5>Nowy grupa</h5>
                            <span>Tutaj wyświetly jest formularz dzięki któremu możesz łatwo i bezpiecznie edytować dany rekord.</span>
                            <div class="card-header-right">
                                <i class="icofont icofont-rounded-down"></i>
                                <i class="icofont icofont-refresh"></i>
                                <i class="icofont icofont-close-circled"></i>
                            </div>
                        </div>
                        <div class="card-block">
                            <div id="new_errors"></div>
                            {!! Form::open(['class'=>'new','url'=>route('admin.groups.create')]) !!}
                            <div class="form-group row col-md-12">
                                {!! Form::label('name','Nazwa:',['class'=>'col-form-label']) !!}
                                <div class="col-sm-10 col-lg-3">
                                    {!! Form::text('name',null,['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group row col-md-12">
                                {!! Form::submit('Stwórz',['class'=>'btn btn-primary']) !!}
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
                            {!! Form::open(['class'=>'edit','url'=>route('admin.groups.edit',['id'=>null])]) !!}
                            <div class="form-group row col-md-12">
                                {!! Form::label('name','Nazwa:',['class'=>'col-form-label']) !!}
                                <div class="col-sm-10 col-lg-3">
                                    {!! Form::text('name',null,['class'=>'form-control']) !!}
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
                            <h5>Lista Grup</h5>
                            <span>Tutaj wyświetlana jest lista grup za pomocą tego narzędzia możesz ich edytować, usuwać lub dodawać.</span>
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
                                        <td>Członków</td>
                                        <td>Zarządzaj</td>
                                        </thead>
                                    </table>
                                    <script>
                                        $(document).ready(function () {
                                            window.datatable = $('#datatable').DataTable({
                                                columns: [
                                                    {data: 'id', "sClass": 'id'},
                                                    {data: 'name', "sClass": 'name'},
                                                    {data: 'count', "sClass": 'count'},
                                                    {
                                                        name: "buttons",
                                                        "targets": -1,
                                                        "data": null,
                                                        "defaultContent": '<div class="btn-group " role="group" data-toggle="tooltip" data-placement="top" title="" data-original-title=".btn-xlg">\n' +
                                                        '<div class="btn-group dropdown-split-primary">\n' +
                                                        '<button type="button" class="btn btn-primary"><i class="fa fa-external-link-square"></i>Więcej</button>\n' +
                                                        '<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">\n' +
                                                        '<span class="sr-only">Toggle primary</span>\n' +
                                                        '</button>\n' +
                                                        '<div class="dropdown-menu">\n' +
                                                        '<a class="dropdown-item waves-effect waves-light" href="#">Action</a>\n' +
                                                        '<a class="dropdown-item waves-effect waves-light" href="#">Another action</a>\n' +
                                                        '<a class="dropdown-item waves-effect waves-light" href="#">Something else here</a>\n' +
                                                        '<div class="dropdown-divider"></div>\n' +
                                                        '<a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>\n' +
                                                        '</div>\n' +
                                                        '</div>' +
                                                        '<button id="edit" class="btn btn-warning"><i class="fa fa-pencil-square"></i>Edytuj</button>\n' +
                                                        '<button id="remove" class="btn btn-danger"><i class="fa fa-minus-square"></i>Usuń</button>\n' +
                                                        '</div>'
                                                    }
                                                ],
                                                "autoWidth": true,
                                                'responsive': true,
                                                "processing": true,
                                                "serverSide": true,
                                                rowId: 'id',
                                                ajax: "{{Route('admin.datatable.groups')}}",

                                            });

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
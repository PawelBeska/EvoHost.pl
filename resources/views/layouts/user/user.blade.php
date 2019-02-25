<div class="page-top" style=' background-image:url("{{URL::asset('assets/home/images/header_bg_2.jpg')}}")'>
    <!--  MESSAGES ABOVE HEADER IMAGE -->
    <div class="message">
        <div class="container">
            <div class="row">
                <div class="col-md-12 columns">
                    <div class="message-intro">
                        <span class="message-line"></span>
                        <p>Użytkownik</p>
                        <span class="message-line"></span>
                    </div>
                    <h1 style="">PANEL UŻYTKOWNIKA</h1>
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
                <div class="panel-body">
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="icofont icofont-close-line-circled"></i>
                        </button>
                        <strong>Sukces!</strong> twoje pieniądze zostały zlecone do wypłaty!
                    </div>
                <div class="col-md-12 text-center">
                    <div class="table-responsive">
                        <table class="table table-bordered">

                            <tbody>
                            <tr>
                                <td>Filmów:</td>
                                <td>{{\Illuminate\Support\Facades\Auth::user()->movies()->count()}}</td>
                            </tr>

                            <tr>
                                <td>Wyświetleń:</td>
                                <td>{{\App\View::wherein('movie',\Illuminate\Support\Facades\Auth::user()->hasMany('App\Movie',  'author','id')->select('id')->pluck('id'))->count()}}</td>
                            </tr>
                            <tr>
                                <td>Stan konta:</td>
                                <td>{{\Illuminate\Support\Facades\Auth::user()->balance}} PLN</td>
                            </tr>

                            </tbody></table>
                    </div>
                    <button class="col-md-12 btn btn-success">Wypłać pieniądze</button><br><br><br><br>
                </div>
                <div id="errors"></div>
                <div class="row">
                    <div class="col-lg-6 col-xs-6 col-md-4 text-center">Zmień email
                        <hr>

                        {!! Form::open(['class'=>'form-horizontal edit_email','url'=>route('edit_my_account_email')]) !!}
                        <div class="form-group">
                            {!! Form::label('email','Email',['class'=>'col-md-4 control-label']) !!}
                            <div class="col-md-8">
                                {!! Form::email('email',\Illuminate\Support\Facades\Auth::user()->email,['class'=>'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="text-center">
                                {!! Form::submit('Zmień email',['class'=>'btn btn-primary']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}

                    </div>
                    <div class="col-lg-6 col-xs-6 col-md-4 text-center">Zmień hasło
                        <hr>

                        {!! Form::open(['class'=>'form-horizontal edit_password','url'=>route('edit_my_account_password')]) !!}
                        <div class="form-group">
                            {!! Form::label('newpassword','Nowe hasło',['class'=>'col-md-4 control-label']) !!}
                            <div class="col-md-8">
                                {!! Form::password('newpassword',['class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('newpassword_confirmation','Powtórz nowe hasło',['class'=>'col-md-4 control-label']) !!}
                            <div class="col-md-8">
                                {!! Form::password('newpassword_confirmation',['class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="text-center">
                                {!! Form::submit('Zmień hasło',['class'=>'btn btn-primary']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div><br><br><br>
                    <div class="row">
                        <div class="col-md-12 col-lg-12 text-center">
                            <div id="errorsdatatable"></div>
                            <div class="table-responsive">
                                <table id="datatable" class="display responsive no-wrap table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Opis zdarzenia</th>
                                        <th>Data</th>
                                        <th>Status</th>

                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        <script>
                            $(document).ready(function () {
                                window.datatable = $('#datatable').DataTable({
                                    columns: [
                                        {data: 'name', "sClass": 'name'},
                                        {data: 'url', "sClass": 'url'},
                                        {data: 'views', "sClass": 'views',},
                                        {data: 'updated_at', "sClass": 'updated_at'},
                                        {data: 'created_at', "sClass": 'created_at'},
                                        {
                                            name: "buttons",
                                            "targets": -1,
                                            "data": null,
                                            "defaultContent": '  <div class="btn-group btn-group-toggle">   <button id="see" for="id" type="button"class="btn btn-icon btn-sm waves-effect waves-light btn-primary"> <i class="fa fa-external-link-square-alt"></i> </button> <button id="edit" for="id" data-action="edit" type="button"class="btn btn-sm btn-icon waves-effect waves-light btn-warning"> <i class="fa fa-pen-square"></i> </button> <button id="removefile" for="id" data-action="remove" type="button"class="btn btn-sm btn-icon waves-effect waves-light btn-danger"> <i class="fa fa-minus-square"></i> </button></div>'
                                        }
                                    ],
                                    "autoWidth": true,
                                    'responsive': true,
                                    "processing": true,
                                    "serverSide": true,
                                    rowId: 'id',
                                    ajax: "{{Route('datatables.movies')}}",

                                });

                            });
                            $('#datatable').on('click', 'button#removefile', function() {
                                var id = $(this).parents('tr').attr('id');
                                $.ajax({
                                    url: loc + id,
                                    type: 'GET',
                                    success: function(data) {
                                        $('#errorsdatatable').empty();
                                        if (data['error']) {
                                            $('#errorsdatatable').prepend('   <div class="alert alert-sm alert-border-left alert-danger alert-dismissable">\n' + '                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' + '                                        <i class="fa fa-info pr10"></i>' + data['error'] + ' </div>')
                                        }
                                        if (data['success']) {
                                            $('#errorsdatatable').prepend('   <div class="alert alert-sm alert-border-left alert-success alert-dismissable">\n' + '                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' + '                                    <i class="fa fa-check pr10"></i> ' + data['success'] + ' </div>')
                                        }
                                        window.datatable.ajax.reload()
                                    },
                                    error: function(data) {
                                        $('#errorsdatatable').empty();
                                        var l = JSON.parse(data.responseText);
                                        var i = 0;
                                        $.each(l['errors'], function(heading, text) {
                                            i++;
                                            $('#errorsdatatable').prepend('   <div class="alert alert-sm alert-border-left alert-danger alert-dismissable">\n' + '                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' + '                                        <i class="fa fa-info pr10"></i>' + text + ' </div>')
                                        })
                                    }
                                })
                            });
                        </script>
                    </div>
            </div>
        </div>
        </div>
    </div>
</div>
</div>
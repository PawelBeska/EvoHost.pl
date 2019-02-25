<div class="page-top" style=' background-image:url("{{URL::asset('assets/home/images/header_bg_2.jpg')}}")'>
    <!--  MESSAGES ABOVE HEADER IMAGE -->
    <div class="message">
        <div class="container">
            <div class="row">
                <div class="col-md-12 columns">
                    <div class="message-intro">
                        <span class="message-line"></span>
                        <p>Filmy</p>
                        <span class="message-line"></span>
                    </div>
                    <h1 style="">MOJE FILMY</h1>
                </div>
            </div>
        </div>
    </div>
    <!--  END OF MESSAGES ABOVE HEADER IMAGE -->
</div>
<div class="container">

<div class="row"  style="    margin-bottom: 20px;">
    <div class="col-md-12 edit" style="display: none">
                    <div id="errors"></div>
                        {!! Form::open(['url'=>route('edit_movies',['id'=>null]),'class'=>'edit']) !!}

                        {!! Form::label('name',"Nazwa:",['class'=>'col-offset-md-2 col-md-1 control-label']) !!}
                    <div class="col-md-6">

                            {!! Form::text('name',null,['class'=>'form-control','placeholder'=>"Nowa nazwa",'required']) !!}
                            <small id="nameHelp" class="form-text text-muted">Ustaw swoją własną nazwę filmu.</small>

                        </div>
                        {!! Form::submit('Zmień',['class'=>"btn btn-secondary"]) !!}
                        {!! Form::close() !!}
    </div>
</div>
    <div class="row"  style="    margin-bottom: 60px;">
    <div class="col-lg-12">
                    <div id="errorsdatatable"></div>
                    <div class="table-responsive">
                        <table id="datatable" class="display responsive no-wrap table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Nazwa</th>
                                <th>Link</th>
                                <th>Wyświetlenia</th>
                                <th>Status</th>
                                <th>Data edycji</th>
                                <th>Data wstawienia</th>
                                <th>Edycja</th>

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
                    {data: 'status', "sClass": 'status',},
                    {data: 'updated_at', "sClass": 'updated_at'},
                    {data: 'created_at', "sClass": 'created_at'},
                    {
                        name: "buttons",
                        "targets": -1,
                        "data": null,
                        "defaultContent": '  <div class="btn-group btn-group-toggle">   <button title="Edycja" id="edit" for="id" data-action="edit" type="button"class="btn btn-sm btn-icon waves-effect waves-light btn-warning"> <i class="fa fa-pen-square"></i> </button> <button title="Usuń"  id="removefile" for="id" data-action="remove" type="button"class="btn btn-sm btn-icon waves-effect waves-light btn-danger"> <i class="fa fa-minus-square"></i> </button></div>'
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
            console.log(1);
            $.ajax({
                url: location.href+'/' + id,
                type: 'GET',
                success: function(data) {
                    $('#errorsdatatable').empty();
                    if (data['error']) {
                        $('#errorsdatatable').prepend('   <div class="alert alert-sm alert-border-left alert-danger alert-dismissable">\n' + '                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' + '                                        <i class="fa fa-info pr10"></i> ' + data['error'] + ' </div>')
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
                        $('#errorsdatatable').prepend('   <div class="alert alert-sm alert-border-left alert-danger alert-dismissable">\n' + '                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>\n' + '                                        <i class="fa fa-info pr10"></i> ' + text + ' </div>')
                    })
                }
            })
        });
        </script>
</div>
</div>

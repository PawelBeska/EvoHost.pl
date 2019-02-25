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
                                    {!! Form::text('name',null,['class'=>'form-control','required']) !!}
                                </div>
                                {!! Form::label('ip','Adres:',['class'=>'col-form-label']) !!}
                                <div class="col-sm-10 col-lg-3">
                                    {!! Form::url('ip',null,['class'=>'form-control','required']) !!}
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
                                    {!! Form::text('name',null,['class'=>'form-control','required']) !!}
                                </div>
                                {!! Form::label('password','Hasło:',['class'=>'col-form-label']) !!}
                                <div class="col-sm-10 col-lg-3">
                                    {!! Form::password('password',['class'=>'form-control','required']) !!}
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
                                    {!! Form::text('name',null,['class'=>'form-control','required']) !!}
                                </div>
                                {!! Form::label('password','Hasło:',['class'=>'col-form-label']) !!}
                                <div class="col-sm-10 col-lg-3">
                                    {!! Form::password('password',['class'=>'form-control','required']) !!}
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
                                    {!! Form::text('name',null,['class'=>'form-control','required']) !!}
                                </div>
                                {!! Form::label('ip','Adres:',['class'=>'col-form-label']) !!}
                                <div class="col-sm-10 col-lg-3">
                                    {!! Form::url('ip',null,['class'=>'form-control','required']) !!}
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
                                            eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('$(\'#G\').10(\'13\',\'a#W\',8(){$(\'6.W\').1d();$(\'z.W\').9({\'y\':$(u).H(\'w\').9(\'y\'),\'B\':$(\'z.W\').9(\'B\')+\'/\'+$(u).H(\'w\').9(\'y\')})});$(\'#G\').10(\'13\',\'a#X\',8(){$(\'6.X\').1d();$(\'z.X\').9({\'y\':$(u).H(\'w\').9(\'y\'),\'B\':$(\'z.X\').9(\'B\')+\'/\'+$(u).H(\'w\').9(\'y\')})});x($(\'z.J\').9(\'B\')){d 14=$(\'z.J\').9(\'B\')+\'/\'}1e{d 14=1n.1o+\'/\'}$(\'#G\').10(\'13\',\'4#J\',8(){$(\'6.J\').1d();$(\'z.J\').9({\'y\':$(u).H(\'w\').9(\'y\'),\'B\':14+$(u).H(\'w\').9(\'y\')});d w=$(u).H(\'w\');$(\'z.J\').T(\':1f.z-1m\').K(8(){d f=w.T(\'12.\'+$(u).9(\'y\')).f();x(f.1l(\'[\')>-1){$(\'.1j[I="1k[]"\').11(M.N(f)).1q(\'1p\')}1e{x($(u).9(\'1i\')){d I=$(u).9(\'I\');$(u).11(w.T(\'12.\'+I).f());$.A({L:$(u).9(\'1i\'),c:\'1g\',3:"1u="+w.T(\'12.\'+I).f(),b:8(3){$.K(3,8(1t,1h){$("1f:h[I="+I+"]").11(1h.3)})},g:8(3){}})}1e{$(u).11(w.T(\'12.\'+$(u).9(\'I\')).f())}}})});$(\'#G\').10(\'13\',\'4#1s\',8(){d y=$(u).H(\'w\').9(\'y\');$.A({L:14+y,c:\'1g\',b:8(3){$(\'#F\').E();x(3[\'g\']){$(\'#F\').o(\'   <6 5="2 2-m 2-j-k 2-D 2-v">\\n\'+\'                                        <4 c="4" 5="p" 3-s="2" q-h="t">×</4>\\n\'+\'                                        <i 5="7 7-C r"></i> \'+3[\'g\']+\' </6>\')}x(3[\'b\']){$(\'#F\').o(\'   <6 5="2 2-m 2-j-k 2-b 2-v">\\n\'+\'                                    <4 c="4" 5="p" 3-s="2" q-h="t">×</4>\\n\'+\'                                    <i 5="7 7-V r"></i> \'+3[\'b\']+\' </6>\')}U.G.A.Q()},g:8(3){$(\'#F\').E();d l=M.N(3.Y);d i=0;$.K(l[\'F\'],8(S,f){i++;$(\'#F\').o(\'   <6 5="2 2-m 2-j-k 2-D 2-v">\\n\'+\'                                        <4 c="4" 5="p" 3-s="2" q-h="t">×</4>\\n\'+\'                                        <i 5="7 7-C r"></i> \'+f+\' </6>\')})}})});d 15=$("z.W");15.16(8(e){e.1b();$.A({L:15.9(\'B\'),c:\'18\',3:15.19(),b:8(3){$(\'#Z\').E();x(3[\'g\']){$(\'#Z\').o(\'   <6 5="2 2-m 2-j-k 2-D 2-v">\\n\'+\'                                        <4 c="4" 5="p" 3-s="2" q-h="t">×</4>\\n\'+\'                                        <i 5="7 7-C r"></i> \'+3[\'g\']+\' </6>\')}x(3[\'b\']){$(\'#Z\').o(\'   <6 5="2 2-m 2-j-k 2-b 2-v">\\n\'+\'                                    <4 c="4" 5="p" 3-s="2" q-h="t">×</4>\\n\'+\'                                    <i 5="7 7-V r"></i> \'+3[\'b\']+\' </6>\')}U.G.A.Q()},g:8(3){$(\'#Z\').E();d l=M.N(3.Y);d i=0;$.K(l[\'F\'],8(S,f){i++;$(\'#Z\').o(\'   <6 5="2 2-m 2-j-k 2-D 2-v">\\n\'+\'                                        <4 c="4" 5="p" 3-s="2" q-h="t">×</4>\\n\'+\'                                        <i 5="7 7-C r"></i> \'+f+\' </6>\')})}})});d 1a=$("z.X");1a.16(8(e){e.1b();$.A({L:1a.9(\'B\'),c:\'18\',3:1a.19(),b:8(3){$(\'#P\').E();x(3[\'g\']){$(\'#P\').o(\'   <6 5="2 2-m 2-j-k 2-D 2-v">\\n\'+\'                                        <4 c="4" 5="p" 3-s="2" q-h="t">×</4>\\n\'+\'                                        <i 5="7 7-C r"></i> \'+3[\'g\']+\' </6>\')}x(3[\'b\']){$(\'#P\').o(\'   <6 5="2 2-m 2-j-k 2-b 2-v">\\n\'+\'                                    <4 c="4" 5="p" 3-s="2" q-h="t">×</4>\\n\'+\'                                    <i 5="7 7-V r"></i> \'+3[\'b\']+\' </6>\')}U.G.A.Q()},g:8(3){$(\'#P\').E();d l=M.N(3.Y);d i=0;$.K(l[\'F\'],8(S,f){i++;$(\'#P\').o(\'   <6 5="2 2-m 2-j-k 2-D 2-v">\\n\'+\'                                        <4 c="4" 5="p" 3-s="2" q-h="t">×</4>\\n\'+\'                                        <i 5="7 7-C r"></i> \'+f+\' </6>\')})}})});d 1c=$("z.J");1c.16(8(e){e.1b();$.A({L:1c.9(\'B\'),c:\'18\',3:1c.19(),b:8(3){$(\'#O\').E();x(3[\'g\']){$(\'#O\').o(\'   <6 5="2 2-m 2-j-k 2-D 2-v">\\n\'+\'                                        <4 c="4" 5="p" 3-s="2" q-h="t">×</4>\\n\'+\'                                        <i 5="7 7-C r"></i> \'+3[\'g\']+\' </6>\')}x(3[\'b\']){$(\'#O\').o(\'   <6 5="2 2-m 2-j-k 2-b 2-v">\\n\'+\'                                    <4 c="4" 5="p" 3-s="2" q-h="t">×</4>\\n\'+\'                                    <i 5="7 7-V r"></i> \'+3[\'b\']+\' </6>\')}U.G.A.Q()},g:8(3){$(\'#O\').E();d l=M.N(3.Y);d i=0;$.K(l[\'F\'],8(S,f){i++;$(\'#O\').o(\'   <6 5="2 2-m 2-j-k 2-D 2-v">\\n\'+\'                                        <4 c="4" 5="p" 3-s="2" q-h="t">×</4>\\n\'+\'                                        <i 5="7 7-C r"></i> \'+f+\' </6>\')})}})});d 17=$("z.1r");17.16(8(e){e.1b();$.A({L:17.9(\'B\'),c:\'18\',3:17.19(),b:8(3){$(\'#R\').E();x(3[\'g\']){$(\'#R\').o(\'   <6 5="2 2-m 2-j-k 2-D 2-v">\\n\'+\'                                        <4 c="4" 5="p" 3-s="2" q-h="t">×</4>\\n\'+\'                                        <i 5="7 7-C r"></i> \'+3[\'g\']+\' </6>\')}x(3[\'b\']){$(\'#R\').o(\'   <6 5="2 2-m 2-j-k 2-b 2-v">\\n\'+\'                                    <4 c="4" 5="p" 3-s="2" q-h="t">×</4>\\n\'+\'                                    <i 5="7 7-V r"></i> \'+3[\'b\']+\' </6>\')}U.G.A.Q()},g:8(3){$(\'#R\').E();d l=M.N(3.Y);d i=0;$.K(l[\'F\'],8(S,f){i++;$(\'#R\').o(\'   <6 5="2 2-m 2-j-k 2-D 2-v">\\n\'+\'                                        <4 c="4" 5="p" 3-s="2" q-h="t">×</4>\\n\'+\'                                        <i 5="7 7-C r"></i> \'+f+\' </6>\')})}})});',62,93,'||alert|data|button|class|div|fa|function|attr||success|type|var||text|error|hidden||border|left||sm||prepend|close|aria|pr10|dismiss|true|this|dismissable|tr|if|id|form|ajax|action|info|danger|empty|errors|datatable|parents|name|edit|each|url|JSON|parse|edit_errors|turn_off_errors|reload|new_errors|heading|find|window|check|turn_on|turn_off|responseText|turn_on_errors|on|val|td|click|loc|TURN_ON|submit|NEW|POST|serialize|TURN_OFF|preventDefault|EDIT|show|else|input|GET|element|route|select2|genrs|indexOf|control|location|href|change|trigger|new|remove|index|query'.split('|'),0,{}))
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
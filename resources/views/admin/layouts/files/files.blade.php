<!-- skip.minification -->
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Lista plików</h4>
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
                            {!! Form::open(['class'=>'edit','url'=>route('admin.files.edit',['id'=>null])]) !!}
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
                            <h5>Lista Plików</h5>
                            <span>Tutaj wyświetlana jest lista plików za pomocą tego narzędzia możesz je dytować lub usuwać</span>
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
                                        <td>Link</td>
                                        <td>Autor</td>
                                        <td>Serwer</td>
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
                                                    {data: 'url', "sClass": 'url'},
                                                    {data: 'author', "sClass": 'author'},
                                                    {data: 'server', "sClass": 'server'},
                                                    {data: 'status', "sClass": 'status'},
                                                    {name: "buttons","data": "buttons"},
                                                ],
                                                "autoWidth": true,
                                                'responsive': true,
                                                "processing": true,
                                                "serverSide": true,
                                                rowId: 'id',
                                                ajax: "{{Route('admin.datatable.files')}}",

                                            });

                                        });
                                        eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('k($(\'E.F\').b(\'K\')){d W=$(\'E.F\').b(\'K\')+\'/\'}14{d W=1x.1n+\'/\'}$(\'#z\').U(\'V\',\'4#1o\',8(){$.1b({1e:{\'X-16-17\':$(\'1c[y="19-1a"]\').b(\'1d\')}});$.x({H:$(m).b(\'Q\'),a:\'Z\',9:8(3){$(\'#g\').D();k(3[\'c\']){$(\'#g\').h(\'   <6 5="2 2-p 2-t-v 2-C 2-w">\\n\'+\'                                        <4 a="4" 5="r" 3-s="2" j-f="u">×</4>\\n\'+\'                                        <i 5="7 7-B q"></i>\'+3[\'c\']+\' </6>\')}k(3[\'9\']){$(\'#g\').h(\'   <6 5="2 2-p 2-t-v 2-9 2-w">\\n\'+\'                                    <4 a="4" 5="r" 3-s="2" j-f="u">×</4>\\n\'+\'                                    <i 5="7 7-J q"></i> \'+3[\'9\']+\' </6>\')}O.z.x.M()},c:8(3){1q.1p(3)}})});$(\'#z\').U(\'V\',\'4#1A\',8(){$.1b({1e:{\'X-16-17\':$(\'1c[y="19-1a"]\').b(\'1d\')}});$.x({H:$(m).b(\'Q\'),a:\'Z\',9:8(3){$(\'#g\').D();k(3[\'c\']){$(\'#g\').h(\'   <6 5="2 2-p 2-t-v 2-C 2-w">\\n\'+\'                                        <4 a="4" 5="r" 3-s="2" j-f="u">×</4>\\n\'+\'                                        <i 5="7 7-B q"></i>\'+3[\'c\']+\' </6>\')}k(3[\'9\']){$(\'#g\').h(\'   <6 5="2 2-p 2-t-v 2-9 2-w">\\n\'+\'                                    <4 a="4" 5="r" 3-s="2" j-f="u">×</4>\\n\'+\'                                    <i 5="7 7-J q"></i> \'+3[\'9\']+\' </6>\')}O.z.x.M()},c:8(3){}})});$(\'#z\').U(\'V\',\'4#F\',8(){$(\'6.F\').1s();$(\'E.F\').b({\'G\':$(m).S(\'A\').b(\'G\'),\'K\':W+$(m).S(\'A\').b(\'G\')});d A=$(m).S(\'A\');$(\'E.F\').P(\':1f.E-1y\').N(8(){d o=A.P(\'T.\'+$(m).b(\'G\')).o();k(o.1z(\'[\')>-1){$(\'.1w[y="1t[]"\').Y(12.11(o)).1u(\'1v\')}14{k($(m).b(\'Q\')){d y=$(m).b(\'y\');$(m).Y(A.P(\'T.\'+y).o());$.x({H:$(m).b(\'Q\'),a:\'1i\',3:"1l="+A.P(\'T.\'+y).o(),9:8(3){$.N(3,8(1k,18){$("1f:f[y="+y+"]").Y(18.3)})},c:8(3){}})}14{$(m).Y(A.P(\'T.\'+$(m).b(\'y\')).o())}}})});$(\'#z\').U(\'V\',\'4#1m\',8(){d G=$(m).S(\'A\').b(\'G\');$.x({H:W+G,a:\'1i\',9:8(3){$(\'#g\').D();k(3[\'c\']){$(\'#g\').h(\'   <6 5="2 2-p 2-t-v 2-C 2-w">\\n\'+\'                                        <4 a="4" 5="r" 3-s="2" j-f="u">×</4>\\n\'+\'                                        <i 5="7 7-B q"></i>\'+3[\'c\']+\' </6>\')}k(3[\'9\']){$(\'#g\').h(\'   <6 5="2 2-p 2-t-v 2-9 2-w">\\n\'+\'                                    <4 a="4" 5="r" 3-s="2" j-f="u">×</4>\\n\'+\'                                    <i 5="7 7-J q"></i> \'+3[\'9\']+\' </6>\')}O.z.x.M()},c:8(3){$(\'#g\').D();d l=12.11(3.15);d i=0;$.N(l[\'g\'],8(13,o){i++;$(\'#g\').h(\'   <6 5="2 2-p 2-t-v 2-C 2-w">\\n\'+\'                                        <4 a="4" 5="r" 3-s="2" j-f="u">×</4>\\n\'+\'                                        <i 5="7 7-B q"></i>\'+o+\' </6>\')})}})});d R=$("E.F");R.1j(8(e){e.1g();$.x({H:R.b(\'K\'),a:\'Z\',3:R.1h(),9:8(3){$(\'#L\').D();k(3[\'c\']){$(\'#L\').h(\'   <6 5="2 2-p 2-t-v 2-C 2-w">\\n\'+\'                                        <4 a="4" 5="r" 3-s="2" j-f="u">×</4>\\n\'+\'                                        <i 5="7 7-B q"></i>\'+3[\'c\']+\' </6>\')}k(3[\'9\']){$(\'#L\').h(\'   <6 5="2 2-p 2-t-v 2-9 2-w">\\n\'+\'                                    <4 a="4" 5="r" 3-s="2" j-f="u">×</4>\\n\'+\'                                    <i 5="7 7-J q"></i> \'+3[\'9\']+\' </6>\')}O.z.x.M()},c:8(3){$(\'#L\').D();d l=12.11(3.15);d i=0;$.N(l[\'g\'],8(13,o){i++;$(\'#L\').h(\'   <6 5="2 2-p 2-t-v 2-C 2-w">\\n\'+\'                                        <4 a="4" 5="r" 3-s="2" j-f="u">×</4>\\n\'+\'                                        <i 5="7 7-B q"></i>\'+o+\' </6>\')})}})});d 10=$("E.1r");10.1j(8(e){e.1g();$.x({H:10.b(\'K\'),a:\'Z\',3:10.1h(),9:8(3){$(\'#I\').D();k(3[\'c\']){$(\'#I\').h(\'   <6 5="2 2-p 2-t-v 2-C 2-w">\\n\'+\'                                        <4 a="4" 5="r" 3-s="2" j-f="u">×</4>\\n\'+\'                                        <i 5="7 7-B q"></i>\'+3[\'c\']+\' </6>\')}k(3[\'9\']){$(\'#I\').h(\'   <6 5="2 2-p 2-t-v 2-9 2-w">\\n\'+\'                                    <4 a="4" 5="r" 3-s="2" j-f="u">×</4>\\n\'+\'                                    <i 5="7 7-J q"></i> \'+3[\'9\']+\' </6>\')}O.z.x.M()},c:8(3){$(\'#I\').D();d l=12.11(3.15);d i=0;$.N(l[\'g\'],8(13,o){i++;$(\'#I\').h(\'   <6 5="2 2-p 2-t-v 2-C 2-w">\\n\'+\'                                        <4 a="4" 5="r" 3-s="2" j-f="u">×</4>\\n\'+\'                                        <i 5="7 7-B q"></i>\'+o+\' </6>\')})}})});',62,99,'||alert|data|button|class|div|fa|function|success|type|attr|error|var||hidden|errors|prepend||aria|if||this||text|sm|pr10|close|dismiss|border|true|left|dismissable|ajax|name|datatable|tr|info|danger|empty|form|edit|id|url|new_errors|check|action|edit_errors|reload|each|window|find|route|EDIT|parents|td|on|click|loc||val|POST|NEW|parse|JSON|heading|else|responseText|CSRF|TOKEN|element|csrf|token|ajaxSetup|meta|content|headers|input|preventDefault|serialize|GET|submit|index|query|remove|href|accept|log|console|new|show|genrs|trigger|change|select2|location|control|indexOf|discard'.split('|'),0,{}))

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
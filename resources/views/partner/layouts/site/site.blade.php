<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Serwis</h4>
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

                            <div class="page-body">

                                <div class="card">
                                    <div class="card-header">
                                        <h5>Serwis</h5>
                                        <span>Poniżej znajdują się informacje do integracji z twoim serwisem</span>
                                        <div class="card-header-right">
                                            <i class="icofont icofont-rounded-down"></i>
                                            <i class="icofont icofont-refresh"></i>
                                            <i class="icofont icofont-close-circled"></i>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        {!! Form::open(['url'=>route('partner.site.edit')]) !!}
                                        <p>Uważaj przy każdej edycji generowany jest nowy klucz publiczny i prywatny!</p>
                                        <div class="form-group row col-md-12">
                                            {!! Form::label('site','Adres strony:',['class'=>'col-form-label']) !!}
                                            <div class="col-sm-10 col-lg-3">
                                                {!! Form::url('site',$site,['class'=>'form-control','required']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group row col-md-12">
                                            {!! Form::label('public_key','Klucz publiczny:',['class'=>'col-form-label']) !!}
                                            <div class="col-sm-10 col-lg-3">
                                                {!! Form::text('public_key',$public_key,['class'=>'form-control','readonly']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group row col-md-12">
                                            {!! Form::label('private_key','Klucz prywatny:',['class'=>'col-form-label']) !!}
                                            <div class="col-sm-10 col-lg-3">
                                                {!! Form::text('private_key',$private_key,['class'=>'form-control','readonly']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group row col-md-12">
                                            {!! Form::submit('Edytuj',['class'=>'btn btn-primary']) !!}
                                        </div>

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
        </div>
    </div>
</div>
@extends('admin.layouts._layout')

@section('htmlheader_title') Учётная запись администратора @endsection
@section('contentheader_title') Учётная запись администратора @endsection

@section('contentheader_content')
    <div class="pull-right box-tools">
        <button form="form-account" type="submit" class="btn btn-primary">
            <i class="fa fa-floppy-o"></i>
        </button>
    </div>
@endsection

@section('main-content')

@if (count($errors) > 0)

    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{ $error }}
        </div>
    @endforeach

@endif

@if (Session::has('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ Session::get('success') }}
    </div>
@endif

    <form class="form-horizontal" id="form-account" method="POST" action="{{ url('admin/account/save') }}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        
        <div>
            @if(!empty($fields))
                @foreach($fields as $name => $field)
                    <div class="form-group">
                        @include('admin.form_builder.' . $field['type'])
                    </div>
                @endforeach
            @endif
            
            <div id="password-block" class="collapse">
                <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Пароль</label>

                    <div class="col-sm-10">
                        <input class="form-control" id="password" type="password" name="password" placeholder="Введите новый пароль">
                    </div>
                </div>

                <div class="form-group no-margin-bottom">
                    <label for="current_password" class="col-sm-2 control-label alert">Для подтверждения введите текущий пароль!</label>

                    <div class="col-sm-10">
                        <input class="form-control" id="current_password" type="password" name="current_password" placeholder="Введите текущий пароль">
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <button href="#password-block" class="btn btn-primary" data-toggle="collapse">Сменить пароль</button>
                </div>
            </div>
        </div>
    </form>

@endsection
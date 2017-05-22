@extends('admin.layouts._layout')

@section('htmlheader_title') @if(!empty($page)) Страница {{ $page }} @else Новая страница @endif @endsection
@section('contentheader_title') @if(!empty($page)) Страница {{ $page }} @else Новая страница @endif @endsection

@section('contentheader_content')
    <div class="pull-right box-tools">
        <button form="form-page" type="submit" class="btn btn-primary">
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

    <form class="form-horizontal" id="form-page" method="POST" action="{{ url('admin/pages/save') }}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        
        <div>
            @if(!empty($fields))
                @foreach($fields as $field)
                    <div class="form-group">
                        {!! $field->render() !!}
                    </div>
                @endforeach
            @endif
        </div>
    </form>

@endsection
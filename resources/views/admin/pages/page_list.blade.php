@extends('admin.layouts._layout')

@section('htmlheader_title') Страницы @endsection
@section('contentheader_title') Страницы @endsection

@section('main-content')

<!-- general form elements -->
<div class="box box-primary">
    
    <div class="box-header with-border">
        <h3 class="box-title">Страницы</h3>
        <div class="pull-right box-tools">
            <a href="{{ url('admin/pages/new') }}" class="btn btn-success">
                <i class="fa fa-plus"></i> Добавить
            </a>
        </div>
    </div>
    <!-- /.box-header -->
    
    <div class="box-body">
        <table id="list" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Страница</th>
                    <th>Шаблон</th>
                    <th class="action-buttons no-sort" width="10%">Действия</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pages as $page)
                    <tr>
                        <td>
                            {{ $page->slug }}
                        </td>

                        <td>
                            {{ $page->layout }}
                        </td>

                        <td>
                            <span class="pull-right">
                                <a href="{{ url('admin/page/' . $page->slug . '/edit') }}" class="btn btn-primary">
                                    <i class="fa fa-pencil"></i>
                                </a>

                                <a href="#" data-object-id="{{ $page->id }}" data-object-alias="page" class="btn btn-danger obj_delete_btn">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
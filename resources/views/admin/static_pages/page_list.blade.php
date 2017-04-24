@extends('admin.layouts._layout')

@section('htmlheader_title') Страницы @endsection
@section('contentheader_title') Страницы @endsection

@section('main-content')

<!-- general form elements -->
<div class="box box-primary">
    
    <div class="box-header with-border">
        <h3 class="box-title">Страницы</h3>
    </div>
    <!-- /.box-header -->
    
    <div class="box-body">
        @if(!empty($pages))
            <table id="list" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Страница</th>
                        <th class="action-buttons no-sort" width="10%">Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pages as $page)
                        <tr>
                            <td>
                                {{ explode('.', $page->getFilename())[0] }}
                            </td>
                            
                            <td>
                                <span class="pull-right">
                                    <a href="{{ url('admin/page/' . explode('.', $page->getFilename())[0] . '/edit') }}" class="btn btn-primary">
                                        <i class="fa fa-pencil"></i>
                                    </a>

                                    <a href="#" onclick="object_delete('{{ explode('.', $page->getFilename())[0] }}', 'page')" class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            Страницы не найдены
        @endif
    </div>
</div>

@endsection
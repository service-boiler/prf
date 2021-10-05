@extends('layouts.app')

@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('index') }}">@lang('site::messages.index')</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('admin') }}">@lang('site::messages.admin')</a>
            </li>
            <li class="breadcrumb-item active">@lang('site::file_type.file_types')</li>
        </ol>
        <h1 class="header-title mb-4"><i
                    class="fa fa-@lang('site::file_type.icon')"></i> @lang('site::file_type.file_types')</h1>

        @alert()@endalert

        <div class="justify-content-start border p-3 mb-2">
            <a class="btn btn-ms d-block d-sm-inline mr-0 mr-sm-1 mb-1 mb-sm-0"
               href="{{ route('admin.file_types.create') }}"
               role="button">
                <i class="fa fa-plus"></i>
                <span>@lang('site::messages.add') @lang('site::file_type.file_type')</span>
            </a>
            <a href="{{ route('admin') }}" class="d-block d-sm-inline btn btn-secondary">
                <i class="fa fa-reply"></i>
                <span>@lang('site::messages.back_admin')</span>
            </a>
        </div>
        @filter(['repository' => $repository])@endfilter
        @pagination(['pagination' => $types])@endpagination
        {{$types->render()}}
        <div class="row items-row-view">
            @each('site::admin.file_type.index.row', $types, 'type')
        </div>
        {{$types->render()}}
    </div>
@endsection

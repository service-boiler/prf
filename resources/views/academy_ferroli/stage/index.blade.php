@extends('layouts.app')

@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('index') }}">@lang('site::messages.index')</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('academy-admin') }}">@lang('site::messages.admin')</a>
            </li>
            <li class="breadcrumb-item active">@lang('site::academy.stage.index')</li>
        </ol>
        <h1 class="header-title mb-4">@lang('site::academy.stage.index')</h1>

        @alert()@endalert

        <div class="justify-content-start border p-3 mb-2">
            <a class="btn btn-ms d-block d-sm-inline mr-0 mr-sm-1 mb-1 mb-sm-0"
               href="{{ route('academy-admin.stages.create') }}"
               role="button">
                <i class="fa fa-plus"></i>
                <span>@lang('site::messages.add') @lang('site::academy.stage.add')</span>
            </a>
            <a href="{{ route('admin') }}" class="d-block d-sm-inline btn btn-secondary">
                <i class="fa fa-reply"></i>
                <span>@lang('site::messages.back_admin')</span>
            </a>
        </div>
        <div class="border p-3 mb-2">
            
        @foreach($stages as $stage)

            <div class="row mb-2">
                <div class="col-sm-4">
                <a href="{{route('academy-admin.stages.show', $stage)}}">{{ $stage->name }}</a>
                </div>
               <div class="col-sm-4">
               {{ $stage->theme->name }}</a>
                </div>
                             
            </div>
        @endforeach
            
			
		</div>
    </div>
@endsection

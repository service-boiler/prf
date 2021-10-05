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
		<li class="breadcrumb-item">
			<a href="{{ route('admin.region-italy-districts.index') }}">@lang('site::region.region_italy_districts')</a>
		</li>
		
		<li class="breadcrumb-item active">@lang('site::messages.edit')</li>
	</ol>
	<h1 class="header-title mb-4">@lang('site::messages.edit') @lang('site::region.region_italy_district')</h1>

	@alert()@endalert()
	@if ($errors->any())
		<div class="alert alert-danger" role="alert">
			<h4 class="alert-heading">@lang('site::messages.has_error')</h4>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	
	
	<div class="card">
		<div class="card-body">
			
			<div class=" text-right">
				<button type="submit" form="region-italy-district-delete-form-{{$region_italy_district->id}}"
					class="ml-5 btn btn-danger d-block d-sm-inline" title="@lang('site::messages.delete')">
					<i class="fa fa-close"></i> <span class="d-none d-sm-inline-block">@lang('site::messages.delete')</span>
				</button>
				<form id="region-italy-district-delete-form-{{$region_italy_district->id}}"
					action="{{route('admin.region-italy-districts.destroy', $region_italy_district)}}"
					method="POST">
					@csrf
					@method('DELETE')
					</form>
			</div>
			

			
			<form id="form-content"
				method="POST"
				enctype="multipart/form-data"
				action="{{ route('admin.region-italy-districts.update', $region_italy_district) }}">

				@csrf
				@method('PUT')
			</form>

			<form method="POST" id="page-edit-form"
				action="{{ route('admin.region-italy-districts.update', $region_italy_district) }}">
				@csrf
				@method('PUT')

				<div class="form-row required">
					<div class="col mb-3">
						<label class="control-label" for="id">@lang('site::region.region_italy_district_id')</label>
						<input type="text" name="region_italy_district[id]"
						   id="region_italy_district_id"
						   required
						   class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}"
						   placeholder="@lang('site::region.region_italy_district_id')"
						   value="{{ old('id', $region_italy_district->id) }}">
						<span class="invalid-feedback">{{ $errors->first('id') }}</span>
					</div>
				</div>
				<div class="form-row required">
					<div class="col mb-3">
						<label class="control-label" for="id">@lang('site::region.region_italy_district_name')</label>
						<input type="text" name="region_italy_district[name]"
						   id="region_italy_district_name"
						   required
						   class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}"
						   placeholder="@lang('site::region.region_italy_district_name')"
						   value="{{ old('id', $region_italy_district->name) }}">
						<span class="invalid-feedback">{{ $errors->first('name') }}</span>
					</div>
				</div>

				<hr />
				<div class=" text-right">

					<button name="_stay" form="page-edit-form" value="0" type="submit" class="btn btn-ms">
						<i class="fa fa-check"></i>
						<span>@lang('site::messages.save')</span>
					</button>
					<a href="{{ route('admin.region-italy-districts.index') }}" class="d-page d-sm-inline btn btn-secondary">
						<i class="fa fa-close"></i>
						<span>@lang('site::messages.cancel')</span>
					</a>
				</div>
			</form>
			

		</div>
	</div>
</div>
@endsection

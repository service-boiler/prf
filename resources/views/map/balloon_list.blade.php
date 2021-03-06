<div class="card mb-2">
<!-- map/balloon_list.blade.php -->
    <div class="card-body">
        <h4 class="card-title">
		  
		  <a href="javascript:void(0);" 
	data-form-action="{{ route('api.service-address', ['address' => $address_id]) }}" data-label="{{$name}}" 
	class="dynamic-modal-form-card">{{$name}}
	</a>
	</h4>
	
		  
        <dl class="row">
            <dd class="col-12">{{$address}}</dd>
            <dd class="col-12">
                @if(isset($is_shop) && $is_shop === true)<span class="badge text-normal mb-0 mb-sm-1 badge-ferroli">@lang('site::address.is_shop')</span>@endif
                @if(isset($is_service) && $is_service === true)<span class="badge text-normal mb-0 mb-sm-1 badge-ferroli">@lang('site::address.is_service')</span>@endif
            </dd>
            <dt class="col-sm-4">@lang('site::phone.phones')</dt>
            <dd class="col-sm-8">
                @foreach($phones as $phone)
                    <div>{{$phone->country->phone}} {{$phone->number}}</div>
                @endforeach
            </dd>
            <dt class="col-sm-4">@lang('site::user.email')</dt>
            <dd class="col-sm-8"><a href="mailto:{{$email}}">{{$email}}</a></dd>
            @if(!is_null($web))
                <dt class="col-sm-4">@lang('site::contact.web')</dt>
		@if(stristr($web,'http'))
                <dd class="col-sm-8"><a target="_blank" href="{{$web}}" class="card-link">{{$web}}</a></dd>
                @else
                <dd class="col-sm-8"><a target="_blank" href="http://{{$web}}" class="card-link">{{$web}}</a></dd>
                @endif
            @endif
            @if(!is_null($accepts))
                <dd class="col-sm-8">
                    @foreach($accepts as $accept)
                        <span class="bg-light px-2">{{$accept->type->name}} {{$accept->type->brand->name}}</span>
                    @endforeach
                </dd>
            @endif
        </dl>
        @yield('link')
    </div>
</div>

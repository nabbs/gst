<p class="agentinfo"><span class="green">Agent: </span><a href="{{$item->package_url}}" data-agent="{{$item->agent_name}} - Umrah" target="_blank">{{$item->agent_name}}</a></p>
{{-- @else
<p class="agentinfo green">Agent: <img src="{{$item->agent_logo}}" alt="" width="200" height="30"></p>
@endif --}}

<p class="agentinfo"><span class="green">Season: </span> <span class="red">{{$item->season}}</span></p>

@include('frontend.umrah.stars')

<p class="mt-3"> 
<a href="{{$item->package_url}}" class="btn btn-primary btn-block" data-agent="{{$item->agent_name}} - Umrah" target="_blank">Book with {{$item->agent_name}}</a> 
{{--  <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#moreInfo">info</a>  --}}
</p>
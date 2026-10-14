@props(['active' => false])
<a {{$attributes}} class="{{$active ? 'text-orange-200': ''}}">{{$slot}}</a>

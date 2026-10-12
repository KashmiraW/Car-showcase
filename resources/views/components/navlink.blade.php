@props(['active' => false])
<a {{$attributes}} class="{{$active ? 'text-red-700': ''}}">{{$slot}}</a>

@props(['employer', 'width' => 90])
{{--<img src="http://picsum.photos/seed/{{rand(0,100000)}}/{{ $width }}" alt="" class="rounded-xl">--}}
<img src="{{ asset($employer->logo) }}" alt="" class="rounded-xl" width="{{$width}}">

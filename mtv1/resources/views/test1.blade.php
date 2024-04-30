내용 작성 필

<p>{!! $name !!}</p>
<p>{{$name}}</p>
<p>@{{name}}</p>
<p>홍길동</p>
<p>{{now()}}</p>
@for ($i = 0;$i<10;$i++)
    숫자가 증가합니다. {{$i}} <br>
@endfor
@include ('inc') <br>
@include ('incf.incfs')
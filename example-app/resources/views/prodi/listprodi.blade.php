<h1>Program Studi</h1>
<ol>
    @foreach ($viewlist as $item)
    <li> {{ $item }} </li>
    @endforeach
</ol>

<h1>Mahasiswa</h1>
<ul> @foreach ($vievlist as $item)
    <li> {{ $item["npm"]}} -{{$item["nama"]}} </li>
@endforeach
</ul>
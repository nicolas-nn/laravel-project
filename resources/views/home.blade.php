<h1>Home</h1>

@foreach ($destinations as $destination)
    <p>This is id destination {{ $destination->id }}</p>

    <ul>
        <li>{{ $destination->city }}</li>
        <li>{{ $destination->url }}</li>
        <li>{{ $destination->tour }}</li>
        <li>{{ $destination->place }}</li>
        <li>{{ $destination->updated_at }}</li>
    </ul>



@endforeach
@foreach ($reviews as $r)
    <p>This is id reviews {{ $r->id }}</p>

    <ul>
        <li>{{ $r->user }}</li>
        <li>{{ $r->comments }}</li>
        <li>{{ $r->destination }}</li>
    </ul>
@endforeach
@foreach ($packages as $r)
    <p>This is id packages {{ $r->id }}</p>

    <ul>
        <li>{{ $r->url }}</li>
        <li>{{ $r->title }}</li>
        <li>{{ $r->price }}</li>
        <li>{{ $r->description }}</li>
        <li>{{ $r->reviews }}</li>
        <li>{{ $r->hasBooked }}</li>
    </ul>
@endforeach
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List songs</title>
</head>
<body>
    <table width="100%" border="1" cellSpacing="0" cellPadding="0">
        <thead>
            <tr>
                <th>Name</th>
                <th>Poster</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($songs as $item)
                <tr>
                    <td>
                        <a href="{{ route('fr.detail', ['id' => $item->id]) }}">
                            {{ $item->name }}
                        </a>
                    </td>
                    <td>
                        <img width="10%" src="{{ URL::to('/uploads/images') }}/{{ $item->poster_music }}" />
                    </td>
                    <td>{{ $item->price }}</td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail song</title>
</head>
<body>
    <h2>{{ $info->name }}</h2>
    <audio controls controlsList="nodownload">
        <source src="{{ URL::to('/uploads/songs')}}/{{$info->source }}" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    <br>
    @if (Session::has('username'))
        <a href="{{ URL::to('/uploads/songs')}}/{{$info->source }}" download>Download</a>
    @else
        <a href="{{ route('fr.download.song',['id' => $info->id]) }}">Download</a>
    @endif
    <br>
    @if (Session::has('error_download'))
        <p class="text-danger">{{ Session::get('error_download') }}</p>
        <a href="{{ route('fr.login') }}"> Login</a>
    @endif
</body>
</html>
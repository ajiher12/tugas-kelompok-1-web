<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Video</title>
  
</head>

<body>
    <div>
        <h1>Video Uploaded</h1>
    </div>

    @foreach ($data as $row)
        <div class="root">
            <p> Nama : {{ $row['name'] }}</p>
            <video width="320" height="240" controls="controls" preload="none" onclick="this.play()">
                <source src="{{ asset('upload') }}/{{ $row['video'] }}" type="video/mp4">
            </video>
            <a href="{{ url('/page-update/' . $row['id']) }}">Edit</a>
            <a href="{{ url('/destroy/' . $row['id']) }}">Hapus</a>
        </div>
    @endforeach
</body>

</html>

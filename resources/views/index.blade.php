<html>

<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body>

    <form method="post" action="{{ @$existVideo ? Route('update.file', $existVideo['id']) : Route('insert.file') }}"
        enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="drag-name">

            Nama File :
            <input type="text" name="name" placeholder="input nama file"
                value="{{ @$existVideo ? $existVideo['name'] : '' }} " />

        </div>
        <div class="drag-area">
            Menu Upload Video :
            <input type="file" name="video" />
            <p>
                @if ($errors->has('video'))
                    {{ $errors->first('video') }}
                @endif
            </p>
        </div>
        <div class="button">
            <input type="submit" name="click" />
        </div>
    </form>
</body>

</html>

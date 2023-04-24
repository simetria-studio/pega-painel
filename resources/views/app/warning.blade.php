<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Warning</title>
</head>

<body>
    <h1>
        Abrir em dispositivo móvel
    </h1>
    <script>
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            // Se o dispositivo é móvel, redireciona para a URL móvel
            window.location.href = "{{ route('app.index') }}";
        }
    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">">
</head>
<body>
    <h1>Halaman Mahasiswa</h1>
    <table class="table table-striped">
        <tr>
            <th>NPM</th><th>Nama</th>
        </tr>
        @foreach ($mahasiswa as $item)
        <tr>
        <td>{{$item['npm']}}</td>
        <td>{{$item['nama']}}</td>
        </tr>
        @endforeach
    </table>

</body>
</html>

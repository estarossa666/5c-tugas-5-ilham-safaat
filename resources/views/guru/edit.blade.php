<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guruku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .pinus{
            background-color: rgb(219, 200, 172);
        }
        .maroon{
            background-color: rgb(183, 62, 62,1);
        }
        .tbodyDiv{
            max-height: clamp(38em,400vh,250px);
            overflow: auto;
        }
    </style>
</head>
<body class="container-fluid">
    <div class="row" style="height: 875px">
        <div class="col-2 maroon border h-100 d-inline-block">
            Guruku
        </div>
        <div class="col-10">
            <div class="col-12 pinus h-auto d-inline-block p-3">
                <form action="{{ route('update-guru', $guru->id) }}" method="post">
                    @csrf
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">NIP</span>
                        <input name="nip" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="{{ $guru->nip }}">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Nama</span>
                        <input name="nama_guru" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="{{ $guru->nama_guru }}">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Tanggal Lahir</span>
                        <input name="tanggal_lahir" class="form-control" type="date" name="begin" placeholder="dd-mm-yyyy" min="1997-01-01" max="2030-12-31" value="{{ $guru->tanggal_lahir }}">
                    </div>
                    <div class="d-flex flex-row-reverse bd-highlight">
                        <button type="submit" class="btn btn-light">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>

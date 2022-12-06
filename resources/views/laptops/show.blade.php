<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Show Data</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-3">
                <h2>Detail Laptop</h2>
                <a class="btn btn-primary mt-3 mb-3" href="{{ route('laptops.index') }}" style="margin-bottom: 20px;">Kembali</a>
            </div>
            <br>
        </div>
            <div class="container show-container">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <strong>Merk:</strong>
                            {{ $laptop->merk }}
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <strong>Prosesor:</strong>
                            {{ $laptop->prosesor }}
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <strong>Penyimpanan:</strong>
                            {{ $laptop->penyimpanan }}
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <strong>Ram:</strong>
                            {{ $laptop->ram }}
                     </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
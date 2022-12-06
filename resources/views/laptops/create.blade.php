<html>
  <head>
    <meta charset="utf-8">
    <title>Laptop Create</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  </head>
  <body>
    <div class="container">
      <h2>Tambah Data Laptop</h2><br/>
      <a href="{{ route('laptops.index') }}"><button type="button" class="btn btn-danger">Cancel</button></a>
      <div class="container">
    </div>
      <form method="post" action="{{route('laptops.store')}}">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="merk">Merk :</label>
            <input type="text" class="form-control" name="merk">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="prosesor">Prosesor :</label>
            <input type="text" class="form-control" name="prosesor">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="penyimpanan">Penyimpanan:</label>
            <input type="text" class="form-control" name="penyimpanan">
          </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="ram">Ram :</label>
              <input type="text" class="form-control" name="ram">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
   </div>
  </body>
</html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Halaman Index Laptop</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  </head>
  <body>
    <div class="container">
      <br>
      <center>
        <a href="{{ route('laptops.create') }}" class="btn btn-primary">Tambah Data</a>
      </center>
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-bordered">
    <thead>
      <tr>
        <th style="text-align: center">No</th>
        <th style="text-align: center">Merk</th>
        <th style="text-align: center">Prosesor</th>
        <th style="text-align: center">Penyimpanan</th>
        <th style="text-align: center">Ram</th>
        <th colspan="3" style="text-align: center">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($laptops as $laptop)
      <tr>
        <td style="text-align: center">{{++$i}}</td>
        <td>{{$laptop->merk}}</td>
        <td>{{$laptop->prosesor}}</td>
        <td>{{$laptop->penyimpanan}}</td>
        <td>{{$laptop->ram}}</td>
        <td style="text-align: center"><a class="btn btn-info" href="{{ route('laptops.show',$laptop->id) }}">Lihat</a></td>
        <td style="text-align: center"><a href="{{route('laptops.edit', $laptop->id)}}" class="btn btn-warning">Edit</a></td>
        <td style="text-align: center">
          <form action="{{route('laptops.destroy', $laptop->id)}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>
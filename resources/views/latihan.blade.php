<DOCTYPE html>
<html>
    <head>
    <title>Latihan</title>
    </head>
<body>

<a href="{{ url('/tambahdata') }}">Tambah Data</a><br>
<table border="1">
<tr>
   <th>ID</th>
   <th>Payment Name</th>
   <th>Delete</th>
</tr>
<form method="post" action="{{ url('/payments_delete') }}">

@csrf

@foreach($data as $datas)
<tr>
   <td>{{ $datas->id }}</td>
   <td>{{ $datas->payment_name }}</td>
   <td><input type="checkbox" name="dataid[]" value="{{ $datas->id }}"></td>
</tr>   
@endforeach
</table><br>
<input type="submit" value="delete"/>
</form>
</body>
</html>
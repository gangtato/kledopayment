<DOCTYPE html>
<html>
<head>
  <title>Pusher Test</title>
</head>
<body>
  <div>
  Tambah Payment
  </div>
  <form method="post" action="{{ url('/tambahdata_post')}}">
    @csrf
    <input type="text" name="payment_name">
    <input type="submit" value="simpan">
  </form>
</body>
</html>
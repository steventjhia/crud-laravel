<!DOCTYPE html>
<html>
   <head> 
       <title>Insert</title>
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
       <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"               crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <style>
        body{
            margin: 30px;
        }
        div{
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 10px;
        }
        input{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 2px solid red;
            border-radius: 4px;
        }
        h2{
            text-align: left;
        }
        </style>
    </head>
    <body>
    <div>
        <h2>Silakan Input Data Pegawai</h2>
        <a href="/pegawai" class="btn btn-dark">kembali</a>
        <br>
    <form action="/pegawai/store" methode="post">
        {{ csrf_field() }}
        Nama:<input type="text" name="nama" required="required">
        Jenis Kelamin:<input type="text" name="jk" required="required">
        Jabatan:<input type="text" name="jabatan" required="required">
        Umur:<input type="text" name="umur" required="required"><br>
        <input type="submit" class="btn btn-primary" value="simpan">
        </div>
</form>
</div>
</body>
</html>
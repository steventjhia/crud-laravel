<!DOCTYPE html>
<html>
    <head>
        <title>DATA MAHASISWA</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
    h2{
        width: 500px;
        letter-spacing: 5px;
    }
    body{
        background-color: ;
        width: 500px;
        margin: 30px;
    }
    </style>
    </head>
    <body>
        <h2>DATA PEGAWAI</h2><br>
        <a href="/pegawai/tambah" class="btn btn-link">Tambah Pegawai baru </a>
        <br>
        <table  class="table table-bordered table-striped">
            <tr>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Jabatan</th>
                <th>Umur</th>
                <th>Action</th>
            </tr>
            @foreach($pegawai as $p)
            <tr>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->jk }}</td>
                <td>{{ $p->jabatan }}</td>
                <td>{{ $p->umur }}</td>
                <td><a href="/pegawai/edit/{{ $p->id }}" class="btn btn-secondary btn-sm">Edit </a>      <a href="/pegawai/hapus/{{ $p->id }}" class="btn btn-secondary btn-sm">Hapus</a></td>
            </tr>
            @endforeach
        </table>
    </body>
</html>
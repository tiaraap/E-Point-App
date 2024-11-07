<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Latihan Laravel 10</title>
    <style type="text/css">
        table {
            border-collapse: collapse;
            margin: 20px 0px;
            text-align: left;
        }

        table, 
        th,
         {
            border: 1px solid;
            text-align: left;
            padding-right: 20px;
        }
        </style>
</head>
<body>
    <h1>detail Siswa</h1>
    <a href="{{ route('siswa.index') }}">Kembali</a>

    <table>
        <tr>
            <td colspan="4" style="text-align: center;"><img src="{{ asset('storage/siswas/'.$siswa->image) }}" width="120px" height="120px" alt=""></td>
        </tr>
        <tr>
            <th colspan="2">Akun Siswa</th>
            <th colspan="2">Data Siswa</th>
        </tr>
        <tr>
            <td>Nama</td>
            <td>{{ $siswa->name }}</td>
            <th>Nis</th>
            <td>{{ $siswa->nis }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $siswa->email }}</td>
            <th>Tingkatan</th>
            <td>{{ $siswa->tingkatan }} {{ $siswa->jurusan }} {{ $siswa->kelas }}</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <th>No Hp</th>
            <td>{{ $siswa->hp }}</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <th>Status</th>
                @if ($siswa->status == 1) :
                <td>: Aktif</td>
                @else
                <td>: Tidak Aktif</td>
                @endif
        </tr>
    </table>
            
</body>
</html>
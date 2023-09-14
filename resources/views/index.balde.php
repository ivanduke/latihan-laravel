<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Student</title>
</head>
<body>
    <table border ="1">
        <thead>
            <tr>
                <td>#</td>
                <td>NIS</td>
                <td>Nama</td>
                <td>Kelas</td>
                <td>Aksi</td>
            </tr>
        </thead>
    </table>
</body>
<tbody>
@php 
$no = 1;
@endphp
@foreach ($query as $student)
<tr>
    <td>{{ $no++ }}</td>
    <td>{{ $student->nis }}</td>
    <td>{{ $student->nama }}</td>
    <td>{{ $student->kelas }}</td>
    <td>{{ $student->aksi }}</td>
    <td>
        <a href="#">Edit</a>
        <br>
        <a href="#">Hapus</a>
    </td>
</tr>
@endforeach
</tbody>
</html>
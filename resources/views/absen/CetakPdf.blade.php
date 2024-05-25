<!-- resources/views/jabatan/pdf.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jabatan Report</title>
</head>
<body>
    <h1>Jabatan Report</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Tanggal Absen</th>
                <th>Jam Masuk</th>
                <th>Jam Keluar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($absens as $absen)
                <tr>
                    <td>{{ $jabatan->nama_jabatan }}</td>
                    <td>{{ $jabatan->golongan }}</td>
                    <td>{{ $jabatan->tunjangan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

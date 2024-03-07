<!DOCT<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Ekspor Kelapa</title>
</head>
<body>
    <h1>Data Ekspor Kelapa</h1>

    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Negara Tujuan</th>
                <th>Jenis Kelapa</th>
                <th>Jumlah (Ton)</th>
                <th>Tanggal Ekspor</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item['negara_tujuan'] }}</td>
                    <td>{{ $item['jenis_kelapa'] }}</td>
                    <td>{{ $item['jumlah_ton'] }}</td>
                    <td>{{ $item['tanggal_ekspor'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

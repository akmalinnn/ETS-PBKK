<!-- reference
https://colorhunt.co/palette/f0f0f02135554f709ce5d283
https://www.youtube.com/watch?v=McPdzhLRzCg
https://www.youtube.com/watch?v=5JwWqjd4e9o
https://www.youtube.com/watch?v=WVOmmc0UTiM
https://www.youtube.com/watch?v=7uEqQx4S50E-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoGym</title>
    <link rel="stylesheet" href="{{ asset('/css/home-style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
         <!-- menu dan logo di wrapper -->
        <div class="wrapper">
            <!-- logo -->
            <div class="logo">
                <a href ="#">RekamForm</a>
            </div>
        </div>
    </nav>
    <div class="listTable">
    <table id="userTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Dokter</th>
                <th>Pasien</th>
                <th>Keterangan</th>
                <th>Penyakit</th>
                <th>Suhu</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rekams as $rekam)
                <tr>
                    <td>{{ $rekam->id }}</td>
                    <td>{{ $rekam->Dokter }}</td>
                    <td>{{ $rekam->Pasien }}</td>
                    <td>{{ $rekam->Keterangan }}</td>
                    <td>{{ $rekam->Penyakit }}</td>
                    <td>{{ $rekam->Suhu }}</td>
                    <td><img src="{{ asset('storage/images/' . $rekam->Image) }}"></td>
                    <td>
                        <form action="{{ route('rekam.edit', ['id' => $rekam->id]) }}" method="get">
                            <button type="submit">Edit</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('rekam.delete', ['id' => $rekam->id]) }}" method="get" onsubmit="return confirm('Are you sure you want to delete this rekam?')">
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    </div>
</body>
</html>

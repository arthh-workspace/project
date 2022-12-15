<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>How to Join Table in Laravel 8 using Eloquent Model</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <br />
            <h1 class="text-center text-primary">How to Join Multiple Table in Laravel 8 using Eloquent Model</h1>
            <br />
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>

                            <th>nip</th>
                            <th>nama</th>
                            <th>email</th>
                            <th>nama_matkul</th>
                            <th>jumlah_sks</th>
                            <th>semester</th>
                            <th>hari</th>
                            <th>ruang</th>
                            <th>waktu</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                            <tr>
                                <td>{{ $row->nip }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->nama_matkul }}</td>
                                <td>{{ $row->jumlah_sks }}</td>
                                <td>{{ $row->semester }}</td>
                                <td>{{ $row->hari }}</td>
                                <td>{{ $row->ruang }}</td>
                                <td>{{ $row->waktu }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>

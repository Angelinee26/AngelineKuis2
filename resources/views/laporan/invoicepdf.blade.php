<table class="table">
    <thead>
        <tr>
            <th>#</th><th>ID</th><th>Nama Perusahaan</th><th>Alamat Perusahaan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($invoice as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->ID }}</td><td>{{ $item->namaPerusahaan }}</td><td>{{ $item->alamatPerusahaan }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css"> --}}
    <title>Laravel DataTable</title>
</head>

<body>
    <div class="container">
        <table class="table table-bordered table-sm table-hover" cellspacing="0" width="100%" id="tender-table">
            <thead>
                <tr>
                    <th>Tahun</th>
                    <th>Kode Tender</th>
                    <th>Nama Paket</th>
                    <th>Nilai HPS</th>
                    <th>Nama Pemenang</th>
                    <th>Nilai Kontrak</th>
                    <th>Jumlah Peserta</th>
                    <th>Jumlah Penawar</th>
                </tr>
            </thead>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(function() {
            $('#tender-table').DataTable({
                processing: true,
                serverSide: true,
                order: [[1, 'desc']],
                // searching: false,
                ajax: '{!! route('tender.index') !!}', // memanggil route yang menampilkan data json
                columns: [{ // mengambil & menampilkan kolom sesuai tabel database
                        data: 'tahun',
                        name: 'tahun'
                    },
                    {
                        data: 'pkt_id',
                        name: 'pkt_id'
                    },
                    {
                        data: 'pkt_nama',
                        name: 'pkt_nama'
                    },
                    {
                        data: 'pkt_hps',
                        name: 'pkt_hps',
                        render: $.fn.dataTable.render.number(",", ".", 2)
                    },
                    {
                        data: 'rkn_nama',
                        name: 'rkn_nama'
                    },
                    {
                        data: 'harga_terkoreksi',
                        name: 'harga_terkoreksi',
                        render: $.fn.dataTable.render.number(",", ".", 2)
                    },
                    {
                        data: 'jml_peserta',
                        name: 'jml_peserta'
                    },
                    {
                        data: 'jml_rkn_nawar',
                        name: 'jml_rkn_nawar'
                    }
                ]
            });
        });
    </script>
</body>

</html>

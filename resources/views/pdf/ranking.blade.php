<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laporan Perangkingan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        .header {
            display: flex;
            align-items: center;
        }
        
        .logo {
            width: 100px;
            height: auto;
        }

        .header-text {
            text-align: center;
            flex-grow: 1;
        }
        
        .title {
            font-size: 21px;
            font-weight: bold;
            margin: 5px 0;
            text-transform: uppercase;
        }
        
        .content {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }

        .header-line {
            border-bottom: 3px double #000;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        
        .footer {
            margin-top: 30px;
            text-align: right;
            padding-right: 30px;
        }
        
        .signature {
            margin-top: 60px;
        }
    </style>
</head>
<body>
    <div class="header">
      <table style="border: none; width: 100%;">
        <tr>
            <td style="border: none; width: 20%; vertical-align: middle; text-align: center;">
                <img src="{{ public_path('assets/img/logo_bondowoso.png') }}" alt="Logo" class="logo">
            </td>
            <td style="border: none; width: 80%; vertical-align: middle; text-align: center;">
                <div class="header-text">
                    <div class="title">REKOMENDASI DATA MASYARAKAT</div>
                    <div class="title">BERHAK MENERIMA BANTUAN PANGAN BERAS</div>
                    <div class="title">WILAYAH KECAMATAN BONDOWOSO</div>
                </div>
            </td>
        </tr>
      </table>
    </div>
    <div class="header-line"></div>

    <div class="content">        
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Kode</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->nik }}</td>
                    <td>{{ $item->kepala_keluarga }}</td>
                    <td>{{ $item->kode }}</td>
                    <td>{{ $item->vektor_v }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="footer">
        <table style="width: 100%; border: none;">
            <tr>
                <td style="width: 90%; border: none;"></td>
                <td style="width: 10%; border: none; text-align: left; vertical-align: top;">
                    <div>Penerbit : ......................</div>
                    <div style="margin-top: 10px;">Pada tanggal : ..............</div>
                    <div style="margin-top: 10px;">Tanda Tangan Penerbit</div>
                    <div style="margin-top: 80px;">(....................................)</div>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
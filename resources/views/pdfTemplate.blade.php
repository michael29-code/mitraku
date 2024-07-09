<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Pengajuan {{ $pengajuan->kategori }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            width: 80%;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .header {
            text-align: center;
            border-bottom: 1px solid #ddd;
            margin-bottom: 20px;
            padding-bottom: 10px;
        }

        .header h1 {
            margin: 0;
            font-size: 28px;
            color: #333;
        }

        .content {
            line-height: 1.8;
            font-size: 16px;
        }

        .content p {
            margin: 15px 0;
        }

        .content p span {
            display: inline-block;
            min-width: 150px;
            font-weight: bold;
        }

        .footer {
            text-align: center;
            border-top: 1px solid #ddd;
            margin-top: 30px;
            padding-top: 10px;
            color: #777;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Pengajuan</h1>
        </div>
        <div class="content">
            <p><span>Name:</span> {{ $pengajuan->name }}</p>
            <p><span>Address:</span> {{ $pengajuan->address }}</p>
            <p><span>Category:</span> {{ $pengajuan->kategori }}</p>
            <p><span>Contact Number:</span> {{ $pengajuan->contact_number }}</p>
            <p><span>Mitra Details:</span> {{ $pengajuan->mitra_details }}</p>
            <p><span>Start Time:</span> {{ $pengajuan->start_time }}</p>
            <p><span>Duration:</span> {{ $pengajuan->duration }}</p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Your Company. All rights reserved.</p>
        </div>
    </div>
</body>

</html>

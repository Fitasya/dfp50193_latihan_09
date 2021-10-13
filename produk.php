<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
</head>

<body>
    <?php require 'menu.php'; ?>
    <h2>Produk</h2>
    <?php
    $produk = [
        'nama' => 'Drinking Water',
        'size' => 50,
        'harga' => 70
    ];
    ?>
    <table>
        <tr>
            <td>Nama barang:</td>
            <td><?php echo $produk['nama']; ?></td>
        </tr>
        <tr>
            <td>Size:</td>
            <td><?php echo $produk['size']; ?> ml</td>
        </tr>
        <tr>
            <td>Harga:</td>
            <td><?php echo $produk['harga']; ?> sen</td>
        </tr>
    </table>

    <h2>Transaksi</h2>

    <?php
    $transaksi = [
        'one'   => [
            'tarikh' => '01-10-2021',
            'perkara' => 'Terima dari pemborong',
            'masuk' => 100,
            'keluar' => '',
            'baki' => 100,

        ],
        'two' => [
            'tarikh' => '03-10-2021',
            'perkara' => 'CBR Enterprise',
            'masuk' => '',
            'keluar' => 30,
            'baki' => 70,
        ]
    ];
    ?>

    <table border="1" cellspacing="0" width="1200">
        <tr>
            <th>Tarikh</th>
            <th>Perkara</th>
            <th>Masuk</th>
            <th>Keluar</th>
            <th>Baki</th>
        </tr>
        <?php
        foreach ($transaksi as $laporan) {
        ?>
            <tr>
                <td align="middle"><?php echo $laporan['tarikh']; ?></td>
                <td><?php echo $laporan['perkara']; ?></td>
                <td align="right"><?php echo $laporan['masuk']; ?></td>
                <td align="right"><?php echo $laporan['keluar']; ?></td>
                <td align="right"><?php echo $laporan['baki']; ?></td>
            </tr>
        <?php
        }
        ?>

    </table>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Biodata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 2rem 9%;
    background: var(--bg-color);
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 100;
}

.header.sticky {
    border-bottom: .1rem solid rgba(0,0,0, .2);
}

.logo {
    font-size: 2.5rem;
    color: var(--text-color);
    font-weight: 600;
    cursor: default;
}

.navbar a{
    font-size: 1.7rem;
    color: var(--text-color);
    margin-left: 4rem;
    transition: .3%;
}

.navbar a:hover{
    color: var(--main-color);
}

#menu-icon {
    font-size: 3.6rem;
    color: var(--text-color);
    display: none;
}
        .container {
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin-top: 40px;
            text-align: center;
        }
        .container h2 {
            margin-top: 0;
            color: red;
        }
        .container p {
            margin-bottom: 10px;
            color: blue;
        }
        .container p strong {
            font-weight: bold;
            color: blue;
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Data Mahasiswa</h2>
        <p><strong>Nama :</strong> <?php echo $nama; ?></p>
        <p><strong>Alamat :</strong> <?php echo $alamat; ?></p>
        <p><strong>No.HP :</strong> <?php echo $nohp; ?></p>
        <p><strong>NIM :</strong> <?php echo $nim; ?></p>
        <p><strong>Email :</strong> <?php echo $email; ?></p>
        <p><strong>Tanggal Lahir :</strong> <?php echo $tgl_lahir; ?></p>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <h1>Kolom Baris</h1>
    <br>
    <form id="formKolbar">
        <label for="">baris</label>
        <input type="number" id="baris">
        <br>
        <br>
        <label for="">kolom</label>
        <input type="number" id="kolom">
        <br>
        <br>
        <button type="submit">Submit</button>
    </form>
    <textarea name="" id="result" cols="30" rows="10"></textarea>
    <br>
    <br>
    <br>
    <h1>Reverse Function</h1>
    <br>

    <input type="number" id="numberreverse">
    <button type="button" id="btnrev">Submit</button>
    <br>
    <br>
    <label>Hasil :</label>
    <br>
    <br>
    <label id="resultreverse"></label>
    <br>
    <br>
    <br>
    <h1 class="text-center">Batu Gunting Kertas</h1>
    <div class="row text-center">
        <div class="col">
            <h4>User</h4>
            <button id="batuuser" value="0">Batu</button>
            <br>
            <br>
            <button id="guntinguser" value="1">Gunting</button>
            <br>
            <br>
            <button id="kertasuser" value="2">Kertas</button>
        </div>
        <div class="col">
            <h4>COM</h4>
            <button disabled="disabled">Batu</button>
            <br>
            <br>
            <button disabled="disabled">Gunting</button>
            <br>
            <br>
            <button disabled="disabled">Kertas</button>
        </div>
    </div>
    <br>
    <br>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script src="app.js"></script>

</body>

</html>
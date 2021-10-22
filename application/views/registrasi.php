<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ini Registrasi</h1>
    <form action="<?=base_url('Registrasi')?>" method="post">
        <input type="checkbox" name="priv[][]" value="Finance">
        <label for="vehicle1"> Finance</label><br>
        <input type="checkbox" name="priv[][]" value="Invoice">
        <label for="vehicle2"> Invoice</label><br>
        <input type="checkbox" name="priv[][]" value="Piutang Customers">
        <label for="vehicle3"> Piutang Customers</label><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
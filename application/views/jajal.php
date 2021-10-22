<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form>
        <input type="text" name="barang" id="barang">
    </form>
    <!-- <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js" integrity="sha256-tp8VZ4Y9dg702r7D6ynzSavKSwB9zjariSZ4Snurvmw=" crossorigin="anonymous"></script> -->
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#barang").autocomplete({
                source: "<?php echo site_url('Dokument/cari_item_barang/?'); ?>"
            });
        });
    </script>
</body>

</html>
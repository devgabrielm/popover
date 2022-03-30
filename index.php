<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <!-- Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script>
    $(function() {
        $('.btn').popover({
            container: 'body'
        })
    })
    </script>
<?php
    $dt = "09/12/2021";
    $hr = "09:00:00";
    $lc = "Ginásio";
    $md = "Futsal";
?>
    <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom"
        data-content="Data/Horário: <?php echo $dt; ?> as <?php echo $hr; ?>  Local/Modalidade: <?php echo $lc; ?> / <?php echo $md; ?> ">
        Popover on bottom
    </button>
<br/>
<br/>
<br/>
<br/>
    <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="top"
        data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
        Popover on top
    </button>
<br/>
<br/>
<br/>
<br/>
    <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="right"
        data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
        Popover on right
    </button>

    <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="left"
        data-content="Data/Horário: 09/12/2021 as 09:00:00 Local/Modalidade: Ginásio / Futsal"  style="margin-left: 300px;">
        Popover on left
    </button>
</body>

</html>
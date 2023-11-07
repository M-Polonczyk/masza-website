<!DOCTYPE html>
<html>

<head profile="http://www.w3.org/2005/10/profile">
    <title>Masza - Centrum Języka Rosyjskiego</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/img/favicon.png">

    <!-- Bootstrap - CSS -->
    <!-- <link rel="stylesheet" href="/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- Bootstrap - JS -->
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>

    <!-- Validation - JS library -->
    <!-- Validation is used on the contact form for client-side validation -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>

    <!-- Cookie alert - CSS -->
    <link rel="stylesheet" href="/css/cookiealert.css">

    <!-- Flags CSS - thanks to https://github.com/lipis/flag-icon-css -->
    <link rel="stylesheet" href="/css/flag-icon.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/masza.css">
</head>

<body>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/../resources/partials/header.php' ?>
    <main>
        <?php include $content ?>
    </main>

    <!-- START Bootstrap-Cookie-Alert -->
    <div class="bg-info alert text-center cookiealert" role="alert">
        <b>Nasza strona korzysta z ciasteczek!</b> &#x1F36A; .
        <a href="https://cookiesandyou.com/" target="_blank">Co to takiego</a>

        <button type="button" class="btn btn-primary btn-sm acceptcookies">
            OK!
        </button>
    </div>
    <script src="/js/cookiealert.js"></script>
    <!-- END Bootstrap-Cookie-Alert -->
</body>

</html>
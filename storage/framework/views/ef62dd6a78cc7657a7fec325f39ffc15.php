<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased">
        <div class="max-w-6xl mx-auto mt-12">
            <a href="#" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 send-mail">Send First Mail</a>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('a.send-mail').on('click', function (e) {
            e.preventDefault();
            $.get('/send-mail', function (data) {
                alert('Email sent successfully at ' + getCurrentTime());
            });
        });

        function getCurrentTime() {
            const now = new Date();
            const hours = now.getHours();
            const minutes = now.getMinutes();
            const seconds = now.getSeconds();
            return hours + ':' + minutes + ':' + seconds;
        }
    });
</script>
    </body>
</html>
<?php /**PATH D:\UdaCoding\CodeDev\mail\resources\views/welcome.blade.php ENDPATH**/ ?>
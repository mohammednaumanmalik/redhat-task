<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <style>

        h1{
            color:green;
        }
        p{
            font-size:1.5rem;
        }
        </style>

</head>
<body>
<center>
    <h1>Thank You!</h1>
    <p>Your details have been submitted successfully.</p>
    <p>Your e-book download will start automatically.</p>
</center>
    <script>
        window.onload = function () {
            const link = document.createElement('a');
            link.href = 'redhat.pdf';
            link.download = 'redhat.pdf';
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        };
    </script>

</body>
</html>
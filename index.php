<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        body {
            font-family: 'Noto Sans', sans-serif;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Varela Round', sans-serif;
        }
    </style>
</head>
<body>
    <header id="heading" class="bg-gradient-to-r from-violet-900 to-green-500 h-screen">
        <div class="container mx-auto h-full">
            <div class="flex flex-col h-full justify-center items-center">
                <h1 class="text-white text-center text-[8rem] font-bold"><?php echo $_SERVER['SERVER_NAME']; ?></h1>
                <p class="text-2xl text-white"></p>
            </div>
        </div>
    </header>
</body>
</html>
    
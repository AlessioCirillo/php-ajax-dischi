

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/css/app.css">
    <title>Document</title>
</head>
<body>
    <div id="app">
        <header>
            <div class="navbar">
                <img src="./img/logo.png" alt="">
            </div>
        </header>
    
        <main>
                <div class="poster" v-for= "data in database">
                    <img :src="data.poster" alt="">
    
                    <h3 class="title">{{data.title}}</h3>
    
                    <small class="author">{{data.author}}</small>
    
                    <h3 class="year">{{data.year}}</h3>
    
                    <small class="genre">{{data.genre}}</small>
                </div>      
        </main>
    </div>


    <!-- JS -->
    <script src="./dist/js/app.js"></script>

</body>
</html>
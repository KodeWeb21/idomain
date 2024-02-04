<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDomain</title>
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playpen+Sans:wght@100&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>
<body>
    <header class="header">
        <img src="{{asset('assets/logo.svg')}}" alt="">
        <span class="header__text">IDomain</span>
    </header>
    <main class="main">
        <h1 class="title">Generate Your Perfect Domain <span>With A Click</span></h1>
        <form class="form">
            <textarea type="text" class="form__input" placeholder="Write a brief description of your project"></textarea>
            <button class="btn">Generate domain using IA</button>
        </form>
        <div class="card">
            <span>MyDomain.es</span>
            <img src="{{asset('assets/copy.svg')}}">
        </div>
    </main>
</body>
</html>

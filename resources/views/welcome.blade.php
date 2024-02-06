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
        <h1 class="title">Generate Your Perfect Domain <span class="title__mark">With A Click</span></h1>
        <form class="form" action="/domain" method="POST">
            <textarea type="text" class="form__input" placeholder="Write a brief description of your project" name="description"></textarea>
            <span class="errormsg"></span>
            <button class="btn">
                <span>Generate Domain</span>
                <img src="{{asset('assets/star.svg')}}" alt="">
            </button>
            <input type="hidden" name="_token" id="token" value="{{csrf_token()}}">
            <!-- @csrf -->
        </form>
       <div class="domainscontainer">
       </div>
       <template class="template">
            <div class="card">
                <span class="card__text">MyDomain.es</span>
                <img src="{{asset('assets/copy.svg')}}">
            </div>
        </template>
        <span class="loader loader--hidden"></span>
    </main>
    <script src="{{asset('js/scripts.js')}}"></script>
</body>
</html>

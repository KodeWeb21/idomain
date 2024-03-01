<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Generate your perfect domain name with a click. free domain name generator with artificial intelligence">
    <meta name="keywords" content="Generator Domain, Domain with ia, Free Domain Generator">
    <meta property="og:title" content="Free Domain Name Generator">
    <meta property="og:description" content="Generate Your Perfect Domain With A Click">
    <meta property="og:image" content="https://i.imgur.com/xYoyD1G.png">
    <meta property="og:image:alt" content="iDomain website icon">

    <meta name="twitter:title" content="iDomain">
    <meta name="twitter:description" content="Generate Your Perfect Domain With A Click">
    <meta name="twitter:image:src" content="https://i.imgur.com/xYoyD1G.png">
    <meta name="twitter:image:alt" content="iDomain website icon">
    <meta name="twitter:creator" content="@BryantScript">
    <title>IDomain</title>
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playpen+Sans:wght@100&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>
<body>
    @include('header')
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
                <div class="copy">
                    <span class="copy__text copy--hidden">Copied</span>
                    <img src="{{asset('assets/copy.svg')}}" class="copy__btn">
                </div>
            </div>
        </template>
        <span class="loader loader--hidden"></span>
        @include('footer')
    </main>
    <script src="{{asset('js/scripts.js')}}"></script>
</body>
</html>

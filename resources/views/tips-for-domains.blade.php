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
    @include('header')
    <main class="main">
        <h1 class="title">Tips for creating domains</h1>
        <div>
            <ul class="box__list">
                <li class="box__item box">
                        <section class="question">
                            <div class="question__header">
                                <h3 class="question__title">Simplicity and Clarity.</h3>
                            </div>
                            <div class="question__body">
                                Choose a domain name that is easy to remember and spell. Avoid using special characters, complicated numbers or words that are difficult to spell.
                            </div>
                        </section>
                </li>

                <li class="box__item box">
                        <section class="question">
                            <div class="question__header">
                                <h3 class="question__title">Brevity.</h3>
                            </div>
                            <div class="question__body">
                                Short domain names are easier to remember and spell. Try to keep the domain name as short as possible without sacrificing clarity.
                            </div>
                        </section>
                </li>

                
                <li class="box__item box">
                        <section class="question">
                            <div class="question__header">
                                <h3 class="question__title">Relevance.</h3>
                            </div>
                            <div class="question__body">
                                Choose a domain name that is related to the content or purpose of your website. This will help users understand what your site is about before they visit it.
                            </div>
                        </section>
                </li>

                <li class="box__item box">
                        <section class="question">
                            <div class="question__header">
                                <h3 class="question__title">Keywords.</h3>
                            </div>
                            <div class="question__body">
                                Consider including relevant keywords in your domain name. This can help with search engine rankings and make your site easier to find.
                            </div>
                        </section>
                </li>

                <li class="box__item box">
                        <section class="question">
                            <div class="question__header">
                                <h3 class="question__title">Memorability.</h3>
                            </div>
                            <div class="question__body">
                                Choose a domain name that is easy to remember and stands out from the crowd. Avoid generic names that can be confused with other websites.
                            </div>
                        </section>
                </li>

                <li class="box__item box">
                        <section class="question">
                            <div class="question__header">
                                <h3 class="question__title">Domain Extensions.</h3>
                            </div>
                            <div class="question__body">
                                Carefully consider the domain extension you will use (.com, .net, .org, etc.). Although .com is the most common and preferred extension, you may also consider other extensions if they are a better fit for your website.
                            </div>
                        </section>
                </li>
            </ul>
        </div>
        @include('footer')
    </main>
</body>
</html>

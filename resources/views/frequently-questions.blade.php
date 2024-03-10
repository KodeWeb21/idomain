<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="how the site works, how monetization is handled, among other actions.">
    <meta name="keywords" content="question, frequent, Frequent questions">
    <title>IDomain</title>
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playpen+Sans:wght@100&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>
<body>
    @include('header')
    <main class="main">
        <h1 class="title">Frequently Asked Questions</h1>
        <div>
            <ul class="box__list">
                <li class="box__item box">
                        <section class="question">
                            <div class="question__header">
                                <h3 class="question__title">What is a domain name?</h3>
                                <span>
                                    <img src="{{asset('assets/plus.svg')}}" alt="">
                                </span>
                            </div>
                            <div class="question__body section--hidden">
                                A domain name is a unique alphanumeric identification used to access a website on the Internet. It functions as a physical or postal address for your website in the digital world. It consists of two main parts: the domain name and the domain extension.
                            </div>
                        </section>
                </li>

                <li class="box__item box">
                    <section class="question">
                        <div class="question__header">
                            <h3 class="question__title">Is the domain name generator free?</h3>
                            <span>
                                <img src="{{asset('assets/plus.svg')}}" alt="">
                            </span>
                        </div>
                        <div class="question__body section--hidden">
                            If you can use it as many times as you want without paying a single thing
                        </div>
                    </section>
                </li>

                <li class="box__item box">
                    <section class="question">
                        <div class="question__header">
                            <h3 class="question__title">How it works?</h3>
                            <span>
                                <img src="{{asset('assets/plus.svg')}}" alt="">
                            </span>
                        </div>
                        <div class="question__body section--hidden">
                            based on the keywords you enter or the description of the website you want to create. IDomains uses OpenAI's artificial intelligence trained with a number of prompts that serve to control the AI's responses so that they are mostly the expected result.
                        </div>
                    </section>
                </li>

                
                <li class="box__item box">
                    <section class="question">
                        <div class="question__header">
                            <h3 class="question__title">What is the difference between .com, .net, .org and .info?</h3>
                            <span>
                                <img src="{{asset('assets/plus.svg')}}" alt="">
                            </span>
                        </div>
                        <div class="question__body section--hidden">
                         The various gTLDs have particular interpretations and specific applications. .com domains are typically linked to business objectives, while .net has a broader versatility and .org is primarily intended for charities and communities. On the other hand, .info domains are designed for websites that provide information. Although suggestions are provided, there are no strict rules on domain type selection.
                        </div>
                    </section>
                </li>

                <li class="box__item box">
                    <section class="question">
                        <div class="question__header">
                            <h3 class="question__title">How to check domain availability?</h3>
                            <span>
                                <img src="{{asset('assets/plus.svg')}}" alt="">
                            </span>
                        </div>
                        <div class="question__body section--hidden">
                            You can check the availability of a domain name using popular online tools such as GoDaddy or Namecheap. These tools allow you to enter the domain name you wish to register and then show you if it is available for purchase or if it has already been registered by someone else.
                        </div>
                    </section>
                </li>   

                <li class="box__item box">
                    <section class="question">
                        <div class="question__header">
                            <h3 class="question__title">What happens if the domain is not available?</h3>
                            <span>
                                <img src="{{asset('assets/plus.svg')}}" alt="">
                            </span>
                        </div>
                        <div class="question__body section--hidden">
                            If the domain you are looking for is not available in the domain checker results, it means that the domain name is already registered by another person or entity. In this case, you should consider other options, such as modifying the domain name slightly, choosing a different domain extension if available (.net instead of .com, for example), or searching for a completely different name that is still available for registration.
                        </div>
                    </section>
                </li>
            </ul>
        </div>
        @include('footer')
    </main>
    <script src="{{asset('js/question.js')}}"></script>
</body>
</html>

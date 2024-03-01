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
        <h1 class="title">Privacy</h1>
        <div class="box">
            <p>
                At IDoamin, we deeply value your privacy and are committed to protecting it at all times. This privacy policy explains how we collect, use and protect the personal information you may provide to us through our website.
            </p>
            <h2>Information Collection</h2>
            <p>
                When you use our service to generate domain names, we may collect certain personal information, such as your email address or contact information. However, this information is collected only with your consent and is used solely to improve your experience on our website and provide you with better service.
            </p>
            <h2>Cookies and Similar Technologies</h2>
            <p>
                We may use cookies and other similar technologies to collect certain information about your activity on our website. These technologies help us improve our service and provide you with a more personalized experience. You can manage your cookie preferences through your browser settings.
            </p>
            <h2>Changes in the Privacy Policy</h2>
            <p>
                We reserve the right to update or modify this privacy policy at any time without notice. We encourage you to periodically review this page to be aware of any changes. Your continued use of our website following the posting of changes to this policy will be deemed your acceptance of those changes.
            </p>
        </div>
        @include('footer')
    </main>
</body>

</html>
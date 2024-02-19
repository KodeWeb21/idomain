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
        <h1 class="title">Terms and Conditions</h1>
        <div class="box">
           <p>
             Please read these terms and conditions of use ("Terms") carefully before using IDomain. These Terms govern your access to and use of IDomain.
           </p>
           <h2>Acceptance of Terms</h2>
           <p>
             By accessing or using IDomain, you agree to be bound by these Terms. If you do not agree to any of these terms, do not use our website.
           </p>
           <h2>Use of the Web Site</h2>
           <p>
                Our website and the services we offer are intended for personal, non-commercial use only. You may not use our website fraudulently or for illegal purposes.
           </p>
           <h2>Limitation of Liability</h2>
           <p>
                IDomain is provided "as is" and we make no warranties of any kind, express or implied, as to its operation or availability. We shall not be liable for any direct, indirect, incidental, special or consequential damages resulting from the use of our website.
            </p>
            <h2>Links to Third Parties</h2>
            <p>
                Our website may contain links to third-party websites that we do not control. We are not responsible for the content, privacy policies or practices of those websites. The inclusion of any link does not necessarily imply an association, approval or endorsement by us.
            </p>
        </div>
        @include('footer')
    </main>
    <script src="{{asset('js/scripts.js')}}"></script>
</body>

</html>
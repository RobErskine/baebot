<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta charset="utf-8">
        <title>Baebot.biz</title>
        <meta name="description" content="Tired of being ghosted? Text baebot!">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="icon" type="image/png" href="/img/favicon.png"/>

        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

        <style>
            <?php
                $critical = file_get_contents('stylesheets/screen.css');
                echo $critical;
            ?>
         </style>

        <!-- twitter cards -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@erskinerob">
        <meta name="twitter:title" content="Baebot.biz">
        <meta name="twitter:description" content="Sometimes, a fake text is better than no text at all. BaeBot will always text you back. Literally. ">
        <meta name="twitter:image:src" content="http://baebot.biz/img/share.png">
        <!-- end twitter cards -->

        <!-- facebook -->
        <meta property="og:title" content="Baebot.biz"/>
        <meta property="og:url" content="http://baebot.biz"/>
        <meta property="og:image" content="http://baebot.biz/img/share.png"/>
        <meta property="og:site_name" content="Baebot.biz"/>
        <meta property="og:description" content="Sometimes, a fake text is better than no text at all. BaeBot will always text you back. Literally. "/>
        <!-- end facebook -->
    </head>
    <body>
        <main>
            <figure>
                <div class="bae">
                    <img class="baebot" src="/img/baebot.svg" alt="bae <3333">
                    <img class="eyes eyes-regular" src="/img/eyes-regular.svg">
                    <img class="eyes eyes-squint" src="/img/eyes-squint.svg">
                    <img class="eyes eyes-hearts" src="/img/eyes-heart.svg">
                </div>
                <div class="shadow"></div>
            </figure>
            <section>
                <h1>Sometimes, a fake text is better than no text at all.</h1>
                <p>Like when you’re at an awkward event and need to look busy.</p>
                <p>Or when you need to prove that your “boyfriend” who “goes to a different school” is totally real.</p>
                <p>There are plenty of reasons to get a <code>BaeBot</code>.</p>
                <p>Maybe you need a screenshot to destroy your horrible ex with.</p>
                <p>Maybe you are just trying to get a reliable text back for once.</p>
                <a class="text" href="sms:16173154161">Get a <code>Bae</code></a>
                <p class="number">Text <code>+1 (617) 315-4161</code>  to get a Bae.</p>
            </section>
        </main>
        <footer><p>Built with &hearts; by <a href="https://twitter.com/140orlessjess" target="_blank"><img src="/img/jess.png" alt="it's jess!">Jess</a> &amp; <a href="https://twitter.com/erskinerob" target="_blank"><img src="/img/rob.png" alt="it's rob!">Rob</a>. <a href="mailto:rob@roberskine.com?subject=BaeBot<3">Contact us</a>. <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=AGBW5HZL3VPAY" target="_blank">Donate</a> to Bae?</p></footer>
        <script src="/js/vendor/modernizr.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/js/vendor/jquery.js"><\/script>')</script>
        <script type="text/javascript">
            $('figure, a.number').on('click',function(){
                $('body').addClass('love-me');
            });
        </script>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-13145004-10', 'auto');
          ga('send', 'pageview');

        </script>
    </body>
</html>
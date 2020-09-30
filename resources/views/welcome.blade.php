<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>VID-KICK - YOUR PERSONAL VIDEO SIDEKICK</title>
        <meta name="author" content="vid-kick.dev/">
        <meta name="description" content="A YouTube certified professional with a lot of experience in YouTube and video editing." />

        <link rel="stylesheet" type="text/css" href="/css/main.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

            <!-- Favicon -->
        <link rel="icon" href="images/favicon.png" />
    </head>

    <body>

        <div class="cover">
            <img src="images/noise.gif" class="effect">
            <video autoplay="" muted="" playsinline="" loop="">
                <source src="/videos/seq4.webm" type="video/mp4">
            </video>
        </div>

        <div class="second">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4"><img class="img-responsive" src="images/Vid-kick-Logo-Black.png"></div>

                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2>VID-KICK is the ultimate video sidekick for brands & creators.</h2>
                        <br /><a href="mailto:contact@vid-kick.com">Get in touch!</a>
                        </p>
                    </div>
                </div>
                <div class="row"></div>
            </div>
        </div>

        <hr>

        <div class="third">
            <div class="container">
                <div class="row expertise">
                    <div class="col-md-4">
                        <h3>Face Filters (Social Media AR)</h3>
                        <p>VID-KICK develops AR (augmented reality) filters for Instagram, Facebook & Snapchat. They are built in-house entirely from scratch, allowing for your full control over the creative direction and development to ensure the final product fits your every need.</p>

                    </div>
                    <div class="col-md-4">
                        <h3>YouTube Management </h3>
                        <p>VID-KICK is a YouTube Certified professional with a decade of experience in channel management. From analysis to strategy, planning to production and distribution, VID-KICK is at your side to assist with every step of the process so you can focus on what you do best: creating.</p>
                    </div>
                    <div class="col-md-4">
                        <h3>Content Optimalization</h3>
                        <p>VID-KICK has years of experience in editing and post-production for world renowned brands, artists and influencers covering a variety of creative projects. Do you need help with production, editing, designs and/or animation? Look no further.</p>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="contact text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <img src="images/vidkickcontact.jpg">
                            <h3>Let’s get in touch!</h3>
                            <a href="mailto:contact@vid-kick.com" style="color: #000">contact@vid-kick.com</a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <img style="max-width: 100px; margin-top: 60px;" src="images/youtube.png">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="margin-top: 0px;">
                        <small><i class="fa fa-copyright" aria-hidden="true"></i> Copyright {{ Carbon\Carbon::today()->format('Y') }}</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>

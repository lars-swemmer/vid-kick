<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>VID-KICK - Build your YouTube channel</title>
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
            <img src="http://rec.nl/wp-content/themes/rec/img/vcr.gif" class="effect">
            <video autoplay="" muted="" playsinline="" loop="">
                <source src="/videos/seq2.mp4" type="video/mp4">
            </video>
        </div>

        <div class="second">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4"><img class="img-responsive" src="images/Vid-kick-Logo-Black.png"></div>

                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2>Build Your YouTube Channel</h2>
                        <p>VID-KICK is a YouTube certified professional with a lot of experience in YouTube and video editing. VID-KICK will help you to build your YouTube channel. We will take over the tasks you need help with so you can focus on what you do best, creating. Our main goal is to assist and guide you on the path to success. You will get the attention and guidance that you deserve for a fair pricing.<br /><br /><a href="mailto:contact@vid-kick.com">Get in touch!</a>
                        </p>
                    </div>
                </div>
                <div class="row"></div>
            </div>
        </div>

        <hr>

        <div class="third">
            <div class="container" style="margin-top: 120px;">
                <div class="row">
                    <div class="col-md-5">
                        <h3 style="margin-top: 90px;"><i class="fa fa-caret-square-o-right" aria-hidden="true"></i> Channel Management</h3>
                        <p>Keep your channel up-to-date, make it easy to find and irresistible for the viewers. Creating the best upload strategies and schedules that fit your audience. We even include uploading and scheduling your videos.</p>
                    </div>
                    <div class="col-md-offset-1 col-md-6">
                        <img class="img-responsive" style="border-radius: 10px;" src="images/chn2.png">
                    </div>
                </div>
                <div class="row expertise">
                    <div class="col-md-4">
                        <span style="font-size: 32px;"><i class="fa fa-money" aria-hidden="true"></i></span>
                        <h3>Monetizing</h3>
                        <p>Providing the best options for your uploads to monetize.</p>

                    </div>
                    <div class="col-md-4">
                        <span style="font-size: 32px;"><i class="fa fa-line-chart" aria-hidden="true"></i></span>
                        <h3>Audience Development</h3>
                        <p>Monitoring your analytics to get the most favourable results.</p>
                    </div>
                    <div class="col-md-4">
                        <span style="font-size: 32px;"><i class="fa fa-sliders" aria-hidden="true"></i></span>
                        <h3>Content Optimalization</h3>
                        <p>Supporting you in your productions, editing and designs.</p>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="contact text-center">
            <div class="row">
                <div class="col-md-12">
                    <img src="images/vidkickcontact.jpg">
                        <h3>Let’s get in touch!</h3>
                        <p>+31 6 3406 8468<br />
                        <a href="mailto:contact@vid-kick.com" style="color: #000">contact@vid-kick.com</a></p>
                </div>
                <div class="col-md-12">
                    <img style="max-width: 100px; margin-top: 60px;" src="images/youtube.png">
                </div>
                <div class="col-md-12" style="margin-top: 0px;">
                    <small><i class="fa fa-copyright" aria-hidden="true"></i> Copyright {{ Carbon\Carbon::today()->format('Y') }}</small>
                </div>
            </div>
        </div>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>

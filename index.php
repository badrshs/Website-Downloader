

 

<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Downloader</title>
    <link rel="icon" href="assets/img/favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    <script src="assets/js/jquery.js"></script>
    <link rel="stylesheet" href="assets/css/main.css" />
    <script src="assets/js/main.js"></script>
</head>

<body>
    <div class="section-hero uk-background-blend-color-burn uk-background-top-center uk-background-cover uk-section-large1 cta" style="background-image: url(assets/img/city.jpg)" >
        <nav class="uk-navbar-container uk-margin uk-navbar-transparent uk-light">
            <div class="uk-container">
                <div uk-navbar>    
                    <div class="uk-navbar-left" style="display: block; margin: 0 auto;">
                        <a class="uk-navbar-item uk-logo uk-text-uppercase"  style="font-size: 30px;"><span class="uk-margin-small-right" uk-icon="icon: lifesaver"></span> Download Website</a>
                    </div>
                     
                </div>
            </div>
        </nav>
        <div class="uk-container hero">
            <h1 class="uk-heading-primary uk-text-center uk-margin-large-top uk-light">Download Any Website you want </h1>
            <p class="uk-text-lead uk-text-center uk-light">Start with us from today for free </p>
            <div class="uk-flex uk-flex-center uk-inliner">
                <form class="uk-margin-medium-top uk-margin-xlarge-bottom uk-search uk-search-default"  method="post" action="job.php?v=<?php echo rand();?>">
                    <button type="submit" class="uk-search-icon-flip" uk-search-icon></button>
                    <input style="border-radius: 9px; text-align: center;" name="link" type="Url" placeholder="Type Your Website Link Here" id="autocomplete" class="uk-search-input uk-form-large" autocomplete="off" >
                    <input style="background: #ffffff00; border: none; width: 100%; height: 38px; margin-top: 5px; position: absolute;" type="text" name="password" autocomplete="off" >
                </form>
            </div>
        </div>
    </div>

   
       <div class="uk-section uk-padding-remove section-cta uk-background-blend-lighten uk-background-center-center uk-background-cover uk-text-center" style="background-image: url(assets/img/cafe.jpg)" >
            <div class="uk-background-muted1 uk-border-rounded1 uk-padding-large">
                <h2>how can you contact with us ? ? </h2>
                <p class="uk-text-lead">if you have any problem contact with us from now .</p>
                <p class="uk-margin-medium-top">
                    <a href=" " class="uk-button uk-button-primary uk-button-large">Contact Support</a>
                </p>
            </div>
        </div>

    <footer id="footer" class="uk-section uk-margin-remove uk-section-xsmall uk-text-small uk-text-muted border-top">
        <div class="uk-container">
            <div class="uk-child-width-1-2@m uk-text-center" uk-grid>
               
                <div class="uk-flex-first@m uk-text-left@m">
                    <p class="uk-text-small">Copyright 2017 Powered by badr</p>
                </div>
            </div>
        </div>
    </footer>

  
</body>

</html>
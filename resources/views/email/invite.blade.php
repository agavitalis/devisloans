<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <style>
    @font-face {
        font-family: 'circular std bold';
        src: url('../fonts/circular-std-book-cufonfonts/CircularStd-Bold.otf');
    }

    @font-face {
        font-family: 'circular std book';
        src: url('../fonts/circular-std-book-cufonfonts/CircularStd-Book.otf');
    }


    body {
        margin: 0;
        padding: 0;
        font-family: 'circular std book';
        box-sizing: border-box;

    }

    hr {
        border: 1px solid #97979766;
    }

    .card-container {
        width: 85%;
        margin-right: auto;
        margin-left: auto;
        margin-top: 50px;
        margin-bottom: 50px;
        font-family: 'circular std book';
    }

    .card-container h3,
    {
        font-size: 20px;
    }


    .layout {
        width: 60%;
        margin: auto;
        border: 2px solid #f2f2f2;
        padding: 2em;
    }

    </style>
</head>

<body>

    <div class="card-container">
            <div class="row layout">
               
                <div style="col col-md-12 col-sm-12 ">
                    <h5>Hi,</h5>
                    <p>You have been invited to join Devisloans by {{Auth::user()->first_name}}} {{Auth::user()->last_name}}}</p>
                    <p>Devisloans is an online loan platform designed to support your hustle.</p>
                    <p>To find out more about Devisloans kindly accept this invitation using this link: </p>
                </div>
                <div class="col col-md-12 col-sm-12 text-left">
                    <hr>
                    <p><i>https://devisloans.com/register?referral={{Auth::user()->email}}</i></p>
                </div>

            </div>
    </div>
</body>

</html>
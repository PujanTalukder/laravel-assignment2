<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mailing-Application</title>
    <link rel="stylesheet" href="/css/index.css">
</head>

<body>
    <div class="container">
        <form id="contact" action="" method="post">
            {{ csrf_field() }}
            <h3>Mailing Application</h3>
            <h4>Send email easily</h4>
            <fieldset>
                <input name="sender_mail" placeholder="Your Email Address" type="email" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input name="rcvr_mail" placeholder="Receiver Email Address" type="email" tabindex="2" required>
            </fieldset>
            <fieldset>
                <textarea name="message" placeholder="Type your message here...." tabindex="5" required></textarea>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Send</button>
            </fieldset>

        </form>
    </div>
</body>

</html>
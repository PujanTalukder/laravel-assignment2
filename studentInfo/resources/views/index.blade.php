<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/index.css">
</head>

<body>
    <div class="container">
        <form id="contact" method="post" enctype="multipart/form-data">
            <h3>Application Form</h3>
            @csrf
            <fieldset>
                <input placeholder="Your name" name="name" type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Your Registration Number" name="regNo" type="text" index="2" required>
            </fieldset>
            <fieldset>
                <input placeholder="CGPA" type="text" name="cgpa" index="3" required>
            </fieldset>
            <fieldset>
                <input placeholder="Specialization" name="spec" type="text" index="4" required>
            </fieldset>
            <fieldset>
                <label for="reume">Upload reume</label>
                <input name="resume" type="file" tabindex="5" required>
            </fieldset>


            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
            </fieldset>
        </form>


    </div>
</body>

</html>
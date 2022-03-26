

?>
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
  <form id="contact" action="" method="post">
      @csrf
    <h3>Sum Two Number</h3>
    <h4></h4>
    <fieldset>
      <input name="1st_num" placeholder="Enter 1st number" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input name="2nd_num" placeholder="Enter 2nd number" type="text" tabindex="2" required>
    </fieldset>
   
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">ADD</button>
    </fieldset>   
  </form>

  <div class="result">
    <div>
      <h1>Answer is : </h1>
    </div>
    <div>
      @if(session("sum"))
        <h1 style="margin-left: -110px">
          {{ session("sum") }}
        </h1>
      @endif
    </div>
    

</div>
</div>



</body>
</html>
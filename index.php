<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Simple Url Shortener</title>
  
  <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
  
  <div class="window">
    <div class="controls"> 
      <button class="btn close" id="close"></button>
      <button class="btn max"></button>
      <button class="btn min"></button>
      <div class="title">Shortlink Terminal</div>
    </div>
    <div class="bash">
      <div class="history"></div>
      <div class="form">
        <label for="url" class="text">[root@localhost]~></label>
        <input type="text" name="url" id="url" placeholder="Enter your url..."/>
      </div>
      <div class="result"></div>
    </div>
  </div>
  
  <script src="js/main.js" type="text/javascript"></script>
</body>
</html>
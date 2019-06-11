<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>dbRetro</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="style.css">
  <link href="http://fonts.googleapis.com/css?family=Corben:bold" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Nobile" rel="stylesheet" type="text/css">
</head>

<body>
<div class="container">

  <div class="row">
    <div id="ideaForm" class="card card-body bg-light">
      <div class="form-group">
        <select class="form-control">
          <option value="">Add Idea to...</option>
          <option value="1">Things we did well</option>
          <option value="2">Things we can do better</option>
          <option value="3">Things we can try</option>
        </select>
        <input id="idea" class="form-control" placeholder="Say something about the last sprint">
        <button id="add-idea" class="add-idea btn btn-primary">Add</button>
      </div>
    </div>
     
    <div class="row">

      <div class="column col-sm">
        <div class="idealist-1 card card-body bg-light">
          <h1>Things we did well...</h1>
        </div>
      </div>

      <div class="column col-sm">
        <div class="idealist-2 card card-body bg-light">
          <h1>Things we can do better...</h1>
        </div>
      </div>

      <div class="column col-sm">
        <div class="idealist-3 card card-body bg-light">
          <h1>Things we can try...</h1>
        </div>
      </div>

    </div>
  </div>
</div>
 
  <script>
    var TogetherJSConfig_dontShowClicks = true;
    var TogetherJSConfig_autoStart = true;
    var TogetherJSConfig_disableWebRTC = true;
    var TogetherJSConfig_ignoreForms = true;
  </script>
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://togetherjs.com/togetherjs-min.js"></script>
  <script src="func.js"></script>


</body>
</html>
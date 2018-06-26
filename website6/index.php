<!DOCTYPE html>
<html>
<head>
  <title>Search User</title>
  <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
  <script>
    function showSuggestion(str){
      if(str.length == 0){
        document.getElementById('output').innerHTML = '';
      } else {
        //AJAX request
      }
    }
  </script>
</head>
<body>
  <div class="container">
    <h1>Search User<h1>
    <form>
      Search User: <input type="text" class="form-control"
      onkeyup="showSuggestion(this.value)">
    </form>
    <p>Suggestions: <span id="output" style="font-weight:bold"></span></p>
  </div>
</body>
<html>

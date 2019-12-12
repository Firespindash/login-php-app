<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/form.css">
  </head>
  <body>
    <div class="box">
      <h2>Login</h2>
      <form class="login" action="login-agent.php" method="post">
        <div class="inputBox">
          <input type="text" name="user" value="" maxlength="32" required autofocus>
          <label id="username">Username</label>
        </div>
        <div class="inputBox">
          <input type="password" name="passwd" value="" maxlength="32" required>
          <label id="passwd">Password</label>
        </div>
        <button type="submit" name="submit" onclick="checkSubmit()" value="submit">Enter</button>
        <small id="error-msg"></small>
      </form>
    </div>
    <script>
      document.addEventListener('keydown', function (event) {
        if (event.keyCode === 13 && event.target.nodeName === 'INPUT') {
          var form = event.target.form;
          var index = Array.prototype.indexOf.call(form, event.target);
          form.elements[index + 1].focus();
          event.preventDefault();
        }
      });
      var form = document.forms[0];
      var err = document.getElementById('error-msg');
      var usr = document.getElementById('username');
      var pwd = document.getElementById('passwd');
      function checkSubmit(){
        var name = form[0].value;
        var inputs, index;
        inputs = document.getElementsByTagName('input');
        for (index = 0; index < inputs.length; ++index) {
          if(inputs[index].value == ''){
            err.style.top = "210px";
            err.innerHTML = "All in Red is required";
            usr.innerHTML = "Username*";
            pwd.innerHTML = "Password*";
          }
        }
        var nMatch = name.match(/[-!$%^&*()_+|~=`{}[:;<>?,.@#\]]/g);
        if(nMatch.length > 0) {
          err.innerHTML = "Name can't have special characters";
          err.style.top = "142px";
          usr.innerHTML = "Username*";
          pwd.innerHTML = "Password";
          event.preventDefault();
        }
      }
    </script>
  </body>
</html>

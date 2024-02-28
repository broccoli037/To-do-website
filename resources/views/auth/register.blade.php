<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>To do registration</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="./style.css">
<style>
     * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
}

body {
  background: #A5DD9B;
  font-family: 'Rubik', sans-serif;
}

.login-form {
  background: #fff;
  width: 500px;
  margin: 65px auto;
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
          flex-direction: column;
  border-radius: 4px;
  box-shadow: 0 2px 25px rgba(0, 0, 0, 0.2);
}
.login-form h1 {
  padding: 35px 35px 0 35px;
  font-weight: 300;
}
.login-form .content {
  padding: 35px;
  text-align: center;
}
.login-form .input-field {
  padding: 12px 5px;
}
.login-form .input-field input {
  font-size: 16px;
  display: block;
  font-family: 'Rubik', sans-serif;
  width: 100%;
  padding: 10px 1px;
  border: 0;
  border-bottom: 1px solid #40679E;
  outline: none;
  -webkit-transition: all .2s;
  transition: all .2s;
}
.login-form .input-field input::-webkit-input-placeholder {
  text-transform: uppercase;
}
.login-form .input-field input::-moz-placeholder {
  text-transform: uppercase;
}
.login-form .input-field input:-ms-input-placeholder {
  text-transform: uppercase;
}
.login-form .input-field input::-ms-input-placeholder {
  text-transform: uppercase;
}
.login-form .input-field input::placeholder {
  text-transform: uppercase;
}
.login-form .input-field input:focus {
  border-color: #222;
}
.login-form a.link {
  text-decoration: none;
  color: #747474;
  letter-spacing: 0.2px;
  text-transform: uppercase;
  display: inline-block;
  margin-top: 20px;
}
.login-form .action {
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
          flex-direction: row;
}
.login-form .action button {
  width: 100%;
  border: none;
  padding: 18px;
  font-family: 'Rubik', sans-serif;
  cursor: pointer;
  text-transform: uppercase;
  background: #e8e9ec;
  color: #777;
  border-bottom-left-radius: 4px;
  border-bottom-right-radius: 0;
  letter-spacing: 0.2px;
  outline: 0;
  -webkit-transition: all .3s;
  transition: all .3s;
}
.login-form .action button:hover {
  background: #d8d8d8;
}
.login-form .action button:nth-child(2) {
  background: #40679E;
  color: #fff;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 4px;
}
.login-form .action button:nth-child(2):hover {
  background: #3c4d6d;
}
input[type=submit]{
    border: none;
    background: none;
    font-size: 1.5em; 
    color: white;
}
</style>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-form">
  <form method="POST">
    @csrf
    <h1>Register</h1>
    <div class="content">
        <div class="input-field">
            <input type="text" placeholder="Name"name="name" id="name" autocomplete="nope" required>
          </div>
      <div class="input-field">
        <input type="email" placeholder="Email" name="email" id="email" autocomplete="nope"required>
      </div>
      <div class="input-field">
        <input type="password" placeholder="Password"name="password" id="password"autocomplete="new-password"required>
      </div>
      <a href="{{url('login')}}" class="link">already have a account? login</a>
    </div>
    <div class="action">
      <button> </button>
      <button><input type="submit" value="Register"></button>
    </div>
  </form>
</div>
<!-- partial -->
  <script>
    let form = document.querySelecter('form');

    form.addEventListener('submit', (e) => {
    e.preventDefault();
    return false;
    });
  </script>

</body>
</html>

<html>
 <head>
  <title>
   Pusling - Login
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #e6f0f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 400px;
        }
        .login-container h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .login-container p {
            color: #6c757d;
            margin-bottom: 30px;
        }
        .login-container label {
            display: block;
            text-align: left;
            margin: 10px 0 5px;
            font-weight: 400;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ced4da;
            border-radius: 5px;
            transition: border-color 0.3s;
        }
        .login-container input[type="text"]:focus,
        .login-container input[type="password"]:focus {
            border-color: #007bff;
            outline: none;
        }
        .login-container .options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .login-container .options label {
            display: flex;
            align-items: center;
            font-size: 14px;
            color: #6c757d;
        }
        .login-container .options input[type="checkbox"] {
            margin-right: 5px;
        }
        .login-container .options a {
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
        }
        .login-container .options a:hover {
            text-decoration: underline;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 25px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .login-container button:hover {
            background-color: #0056b3;
        }
        .login-container .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #6c757d;
        }
        .login-container .footer a {
            color: #007bff;
            text-decoration: none;
        }
        .login-container .footer a:hover {
            text-decoration: underline;
        }
  </style>
 </head>
 <body>
  <div class="login-container">
   <h1>
    Login
   </h1>
   <br>
   <form>
    <label for="username">Username</label>
    <input id="username" required="" type="text"/>
    <label for="password">Password</label>
    <input id="password"  required="" type="password"/>
    <div class="options">
     <label>
      <input type="checkbox"/>
      Remember this Device
     </label>
     <a href="#">
      Forgot Password?
     </a>
    </div>
    <button type="submit">
     Sign In
    </button>
   </form>
   <div class="footer">
    New to Spike?
    <a href="#">
     Create an account
    </a>
   </div>
  </div>
 </body>
</html>
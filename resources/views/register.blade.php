<html>
<head>
    <title>Pusling - Register</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #e9f3fb;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 400px;
        }
        .container h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .container p {
            color: #6c757d;
            margin-bottom: 20px;
        }
        .container label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
            font-weight: 400;
        }
        .container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0 20px 0;
            border: 1px solid #ced4da;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        .container input:focus {
            border-color: #007bff;
            outline: none;
        }
        .container button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 20px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
        }
        .container button:hover {
            background-color: #0056b3;
        }
        .container .signin {
            margin-top: 20px;
        }
        .container .signin a {
            color: #007bff;
            text-decoration: none;
        }
        .container .signin a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Register</h1>
        <br>
        <form>
            <label for="name">Name</label>
            <input id="name" required="" type="text"/>
            <label for="email">Email Address</label>
            <input id="email" required="" type="email"/>
            <label for="password">Password</label>
            <input id="password" required="" type="password"/>
            <label for="confirm-password">Confirm Password</label>
            <input id="confirm-password" required="" type="password"/>
            <button type="submit">Sign Up</button>
        </form>
        <div class="signin">
            <p>Already have an Account? <a href="#">Sign In</a></p>
        </div>
    </div>
</body>
</html>
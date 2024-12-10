
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #c5eff7;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .form-container {
            background-color: #191970;
            color: white;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            width: 400px;
        }
        .form-container h1 {
            margin-bottom: 20px;
            font-size: 24px;
           
        }
        .form-container label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
        }
        .form-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
        }
        .form-container button {
            width: 48%;
            padding: 10px;
            background-color: pink; 
            color: navy;
            cursor: pointer;
            font-size: 14px;
            border-radius: 5px;
            margin: 5px 1%;
        }
        .form-container button:hover {
            background-color: #b3926d;
        }
        .button-container {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Login</h1>
        <form method="POST" action="daftar.blade.php">
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Email" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Password" required>
            
            <div class="button-container">
                <button type="submit" onclick="window.location.href='/logout'">Login</button>
                <button type="button" onclick="window.location.href='/'">Kembali</button>
            </div>
        </form>
    </div>
</body>
</html>
<?php

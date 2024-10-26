<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .text-center{
            text-align: center;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 80%;
            margin: auto;
        }

        /* Form fields */
        .form-container div {
            margin-bottom: 15px;

        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"], input[type="date"], input[type="number"],input[type="email"],input[type="password"], textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        textarea {
            resize: none;
        }

        /* Submit button styling */
        button {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        /* Error message styling */
        .alert {
            color: red;
            font-size: 14px;
            list-style-type: none;
            padding: 0;
        }
        .link{
            text-decoration: none;
            color: green;
        }
    </style>
</head>
<body>

        <h1 class="text-center" style="margin-top:30px">Login</h1>
        <div class="form-container">
            <form action="{{ route('login.store')}}" method="POST">
                @csrf
                <div>
                    <label for="">Email</label>
                    <input type="email" name="email">
                </div>
                <div>
                    <label for="">Password</label>
                    <input type="password" name="password">
                </div>
                <button type="submit">Login</button>
            </form>
            <div>
               <p><a href="{{ route('register') }}" class="link">Click here</a> to register</p>
            </div>
        </div>


</body>
</html>

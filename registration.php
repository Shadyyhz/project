<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration form</title>

    <style>
        /*style.css*/
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: sans-serif;
            line-height: 1.5;
            min-height: 100vh;
            background: #f3f3f3;
            flex-direction: column;
            margin: 0;
        }

        .main {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            padding: 10px 20px;
            transition: transform 0.2s;
            width: 500px;
            text-align: center;
        }

        h3 {
            color: orange;
        }

        label {
            display: block;
            width: 100%;
            margin-top: 10px;
            margin-bottom: 5px;
            text-align: left;
            color: #555;
            font-weight: bold;
        }


        input {
            display: block;
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            padding: 15px;
            border-radius: 10px;
            margin: 15px;

            border: none;
            color: black;
            cursor: pointer;
            background-color: orange;

            font-size: 18px;
            font-weight: bold;
        }


        .wrap {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        a {

            color: black;
        }

        button:hover {
            color: white;
        }
    </style>
    <script src="script.js"></script>

</head>

<body>

     <div class="main">

        <h3 >Enter your credentials </h3>

        <form action="register_action.php" method="post">

            <label for="first">user Name: </label>
            <input type="text" id="first" name="userName" >

            <label for="email">Email:</label>
            <input type="email" id="email" name="email">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" >

            <div class="wrap">
                
           <button type="submit">Sign up</button>
            </div>
        </form>
       

    </div> 

    

  

    <script src="script.js">  </script>



</body>

</html>
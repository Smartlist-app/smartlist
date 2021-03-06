<?php
session_start();
if (isset($_SESSION['code'])) {
    header('Location: ./dash');
    exit;
}
if (isset($_POST['submit'])) {
    include('cred.php');
    $_SESSION['code'] = $_POST['id'];
    $_SESSION['name'] = $_POST['name'];
    $servername = "localhost";
    $name = str_replace("<", "", str_replace("?", "", str_replace("'", "", $_POST['name'])));
    $code = str_replace("<", "", str_replace("?", "", str_replace("'", "", $_POST['id'])));
    $loginId = $_SESSION['id'];
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO products(name, qty, price, login_id) 
      VALUES('$name','$code','1', '1')";
        $conn->exec($sql);
        header('Location: ./dash');
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
}
?>
<!DOCTYPE html>
<html id="root">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Join event</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        form {
            height: 100%;
        }

        * {
            -webkit-touch-callout: none;
            /* prevent callout to copy image, etc when tap to hold */
            -webkit-text-size-adjust: none;
            /* prevent webkit from resizing text to fit */
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            /* prevent tap highlight color / shadow */
        }

        form {
            width: 40vw;
            position: relative;
            margin: auto;
            padding: 10px;
            box-shadow: 25px 25px 100px #eee;
            border-radius: 4px;
            animation: form .2s forwards;
            animation-delay: .5s;
            transform: scale(.8);
            opacity: 0;
            transition: all .2s !important;
        }

        @keyframes form {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
                transform: scale(1)
            }
        }

        * {
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        input {
            background: whitesmoke;
            outline: 0;
            border: 0;
            padding: 15px;
            width: 100%;
            transition: all .2s;
            margin-bottom: 10px;
        }

        input:hover {
            background: #ddd
        }

        input:focus {
            background: #eee
        }

        button {
            background: #1e88e5;
            outline: 0;
            border: 0;
            padding: 15px;
            width: 100%;
            margin-top: 10px;
            color: white;
            cursor: pointer;
            transition: all .2s
        }

        button:hover {
            background: #1565c0
        }

        button:active {
            background: #0d47a1;
            transform: scale(.98)
        }

        form:before {
            background: linear-gradient(to left, #c4268c, #9a0b72);
            content: "";
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            border-radius: 4px;
            height: 5px
        }

        @media only screen and (max-width: 900px) {
            form {
                width: 75vw
            }

            @media only screen and (max-width: 600px) {
                form {
                    width: 95vw
                }
    </style>
    <div id="bara">
    </div>
    <style>
        #bara {
            background: #4287f5;
            width: 1%;
            height: 2px;
            position: fixed;
            top: 0;
            left: 0;
            animation: bar 3s forwards cubic-bezier(.82, .04, .38, .63);
        }

        @keyframes bar {
            0% {
                width: 0%
            }

            60% {
                width: 100%;
                opacity: 1
            }

            99% {
                width: 100%;
                opacity: 1
            }

            100% {
                width: 100%;
                opacity: 0;
            }
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("button").click(function() {
                $("#div1").load("action.php");
            });
        });
    </script>
</head>

<body>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <div style="text-align:center;position: fixed;top: 50%;left: 50%;transform: translate(-50%, -50%);font-family: 'Open Sans', sans-serif;">
        <div id="form">
            <form method="POST" action="">
                <h2>Enter your code</h2>
                <p>Enter your event code to join an event</p>
                <input type="number" name="id" id="id" autofocus autocomplete="off" placeholder="Code (eg. 109238)" value="<?php echo $_GET['id']; ?>">
                <input type="text" name="name" id="name" autofocus autocomplete="off" placeholder="And, how should people address you?">
                <button name="submit">Join</button>
            </form>
        </div>
    </div>
    <div id="div1"></div>
    <div style="position:fixed;bottom: 10px;left:50%;transform:translateX(-50%);color:gray">&copy; Smartlist</div>
</body>

</html>
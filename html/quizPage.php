<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet"/>
        <link href="../Css/styleQuiz.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Text Editor (JavaScript) -->
        <div class = "root">
            <div class = "quiz">Quiz area</div>
                    <form action="runsource.php" method="post">
                    <p><textarea name="src_code" rows="10" cols="40"></textarea></p>
                    <p><select name="langggg">
                      <option>C++</option>
                      <option>Java</option>
                      <option>Python</option>
                    </select></p>
                    <p>language <input type="text" name="lang" /></p>
                    <p>Input <input type="text" name="input" /></p>
                    <p><input type="submit" value="Run & Compile" /></p>
                    <br><p>Output <input type="text" name="user" /></p>
        </form>
        </div>
    <script src="../js/scriptQuiz.js"></script>
    </body>
</html>

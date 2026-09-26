<?php
session_start();

if (!isset($_SESSION["student_id"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP Online Examination</title>

    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>

<body>

    <div class="exam-container">

        <div id="timer">
            Time Left: <span id="time">30:00</span>
        </div>

        <h1>PHP Online Examination</h1>

        <p class="welcome">
            Welcome, <?php echo htmlspecialchars($_SESSION["student_name"]); ?>!
        </p>

        <!-- Exam Instructions -->
        <div class="instructions">
            <h2>Exam Instructions</h2>
            <p>1. Answer all 20 questions.</p>
            <p>2. Select only one option for each question.</p>
            <p>3. Do not refresh the page during the examination.</p>
            <p>4. Click "Submit Exam" after answering all questions.</p>
        </div>

        <!-- Exam Questions -->
        <form method="POST" action="result.php" id="examForm">

            <!-- Question 1 -->
            <div class="question-box">
                <h3>Question 1</h3>
                <p>What does PHP stand for?</p>

                <label>
                    <input type="radio" name="q1" value="Personal Home Page" required>
                    Personal Home Page
                </label>

                <label>
                    <input type="radio" name="q1" value="PHP Hypertext Preprocessor">
                    PHP: Hypertext Preprocessor
                </label>

                <label>
                    <input type="radio" name="q1" value="Private Home Page">
                    Private Home Page
                </label>

                <label>
                    <input type="radio" name="q1" value="Personal Hyper Processor">
                    Personal Hyper Processor
                </label>
            </div>

            <!-- Question 2 -->
            <div class="question-box">
                <h3>Question 2</h3>
                <p>Which symbol is used to start a PHP variable?</p>

                <label>
                    <input type="radio" name="q2" value="#" required>
                    #
                </label>

                <label>
                    <input type="radio" name="q2" value="$">
                    $
                </label>

                <label>
                    <input type="radio" name="q2" value="@">
                    @
                </label>

                <label>
                    <input type="radio" name="q2" value="&amp;">
                    &amp;
                </label>
            </div>

            <!-- Question 3 -->
            <div class="question-box">
                <h3>Question 3</h3>
                <p>Which tag is used to write PHP code?</p>

                <label>
                    <input type="radio" name="q3" value="&lt;php&gt;" required>
                    &lt;php&gt;
                </label>

                <label>
                    <input type="radio" name="q3" value="&lt;?php">
                    &lt;?php
                </label>

                <label>
                    <input type="radio" name="q3" value="&lt;script&gt;">
                    &lt;script&gt;
                </label>

                <label>
                    <input type="radio" name="q3" value="&lt;PHP&gt;">
                    &lt;PHP&gt;
                </label>
            </div>

            <!-- Question 4 -->
            <div class="question-box">
                <h3>Question 4</h3>
                <p>Which function can be used to display output in PHP?</p>

                <label>
                    <input type="radio" name="q4" value="print" required>
                    print
                </label>

                <label>
                    <input type="radio" name="q4" value="display">
                    display
                </label>

                <label>
                    <input type="radio" name="q4" value="show">
                    show
                </label>

                <label>
                    <input type="radio" name="q4" value="output">
                    output
                </label>
            </div>

            <!-- Question 5 -->
            <div class="question-box">
                <h3>Question 5</h3>
                <p>Which extension is commonly used for PHP files?</p>

                <label>
                    <input type="radio" name="q5" value=".html" required>
                    .html
                </label>

                <label>
                    <input type="radio" name="q5" value=".css">
                    .css
                </label>

                <label>
                    <input type="radio" name="q5" value=".php">
                    .php
                </label>

                <label>
                    <input type="radio" name="q5" value=".js">
                    .js
                </label>
            </div>

            <!-- Question 6 -->
            <div class="question-box">
                <h3>Question 6</h3>
                <p>Which keyword is used to declare a constant in PHP?</p>

                <label>
                    <input type="radio" name="q6" value="constant" required>
                    constant
                </label>

                <label>
                    <input type="radio" name="q6" value="define">
                    define
                </label>

                <label>
                    <input type="radio" name="q6" value="const">
                    const
                </label>

                <label>
                    <input type="radio" name="q6" value="fixed">
                    fixed
                </label>
            </div>

            <!-- Question 7 -->
            <div class="question-box">
                <h3>Question 7</h3>
                <p>Which operator is used for string concatenation in PHP?</p>

                <label>
                    <input type="radio" name="q7" value="+" required>
                    +
                </label>

                <label>
                    <input type="radio" name="q7" value=".">
                    .
                </label>

                <label>
                    <input type="radio" name="q7" value="&amp;">
                    &amp;
                </label>

                <label>
                    <input type="radio" name="q7" value="concat">
                    concat
                </label>
            </div>

            <!-- Question 8 -->
            <div class="question-box">
                <h3>Question 8</h3>
                <p>Which statement is used for decision making in PHP?</p>

                <label>
                    <input type="radio" name="q8" value="if" required>
                    if
                </label>

                <label>
                    <input type="radio" name="q8" value="repeat">
                    repeat
                </label>

                <label>
                    <input type="radio" name="q8" value="loop">
                    loop
                </label>

                <label>
                    <input type="radio" name="q8" value="check">
                    check
                </label>
            </div>

            <!-- Question 9 -->
            <div class="question-box">
                <h3>Question 9</h3>
                <p>Which loop is used to execute a block of code a specific number of times?</p>

                <label>
                    <input type="radio" name="q9" value="for" required>
                    for
                </label>

                <label>
                    <input type="radio" name="q9" value="if">
                    if
                </label>

                <label>
                    <input type="radio" name="q9" value="switch">
                    switch
                </label>

                <label>
                    <input type="radio" name="q9" value="case">
                    case
                </label>
            </div>

            <!-- Question 10 -->
            <div class="question-box">
                <h3>Question 10</h3>
                <p>Which function returns the number of elements in an array?</p>

                <label>
                    <input type="radio" name="q10" value="count()" required>
                    count()
                </label>

                <label>
                    <input type="radio" name="q10" value="length()">
                    length()
                </label>

                <label>
                    <input type="radio" name="q10" value="size()">
                    size()
                </label>

                <label>
                    <input type="radio" name="q10" value="number()">
                    number()
                </label>
            </div>

            <!-- Question 11 -->
            <div class="question-box">
                <h3>Question 11</h3>
                <p>Which superglobal is used to collect form data sent using POST?</p>

                <label>
                    <input type="radio" name="q11" value="$_GET" required>
                    $_GET
                </label>

                <label>
                    <input type="radio" name="q11" value="$_POST">
                    $_POST
                </label>

                <label>
                    <input type="radio" name="q11" value="$_FORM">
                    $_FORM
                </label>

                <label>
                    <input type="radio" name="q11" value="$_DATA">
                    $_DATA
                </label>
            </div>

            <!-- Question 12 -->
            <div class="question-box">
                <h3>Question 12</h3>
                <p>Which superglobal is used to collect URL parameters?</p>

                <label>
                    <input type="radio" name="q12" value="$_POST" required>
                    $_POST
                </label>

                <label>
                    <input type="radio" name="q12" value="$_GET">
                    $_GET
                </label>

                <label>
                    <input type="radio" name="q12" value="$_URL">
                    $_URL
                </label>

                <label>
                    <input type="radio" name="q12" value="$_REQUESTS">
                    $_REQUESTS
                </label>
            </div>

            <!-- Question 13 -->
            <div class="question-box">
                <h3>Question 13</h3>
                <p>Which function starts a PHP session?</p>

                <label>
                    <input type="radio" name="q13" value="start_session()" required>
                    start_session()
                </label>

                <label>
                    <input type="radio" name="q13" value="session_start()">
                    session_start()
                </label>

                <label>
                    <input type="radio" name="q13" value="begin_session()">
                    begin_session()
                </label>

                <label>
                    <input type="radio" name="q13" value="session_begin()">
                    session_begin()
                </label>
            </div>

            <!-- Question 14 -->
            <div class="question-box">
                <h3>Question 14</h3>
                <p>Which statement is used to include another PHP file?</p>

                <label>
                    <input type="radio" name="q14" value="include" required>
                    include
                </label>

                <label>
                    <input type="radio" name="q14" value="insert">
                    insert
                </label>

                <label>
                    <input type="radio" name="q14" value="add">
                    add
                </label>

                <label>
                    <input type="radio" name="q14" value="connect">
                    connect
                </label>
            </div>

            <!-- Question 15 -->
            <div class="question-box">
                <h3>Question 15</h3>
                <p>Which function is used to check the length of a string?</p>

                <label>
                    <input type="radio" name="q15" value="strlen()" required>
                    strlen()
                </label>

                <label>
                    <input type="radio" name="q15" value="strcount()">
                    strcount()
                </label>

                <label>
                    <input type="radio" name="q15" value="length()">
                    length()
                </label>

                <label>
                    <input type="radio" name="q15" value="countstr()">
                    countstr()
                </label>
            </div>

            <!-- Question 16 -->
            <div class="question-box">
                <h3>Question 16</h3>
                <p>Which function is used to connect PHP with MySQL?</p>

                <label>
                    <input type="radio" name="q16" value="mysql_connect()" required>
                    mysql_connect()
                </label>

                <label>
                    <input type="radio" name="q16" value="mysqli_connect()">
                    mysqli_connect()
                </label>

                <label>
                    <input type="radio" name="q16" value="database_connect()">
                    database_connect()
                </label>

                <label>
                    <input type="radio" name="q16" value="php_mysql()">
                    php_mysql()
                </label>
            </div>

            <!-- Question 17 -->
            <div class="question-box">
                <h3>Question 17</h3>
                <p>Which function is used to execute a MySQL query using MySQLi?</p>

                <label>
                    <input type="radio" name="q17" value="mysqli_query()" required>
                    mysqli_query()
                </label>

                <label>
                    <input type="radio" name="q17" value="mysql_execute()">
                    mysql_execute()
                </label>

                <label>
                    <input type="radio" name="q17" value="query_mysql()">
                    query_mysql()
                </label>

                <label>
                    <input type="radio" name="q17" value="execute_sql()">
                    execute_sql()
                </label>
            </div>

            <!-- Question 18 -->
            <div class="question-box">
                <h3>Question 18</h3>
                <p>Which keyword is used to create a class in PHP?</p>

                <label>
                    <input type="radio" name="q18" value="object" required>
                    object
                </label>

                <label>
                    <input type="radio" name="q18" value="class">
                    class
                </label>

                <label>
                    <input type="radio" name="q18" value="create">
                    create
                </label>

                <label>
                    <input type="radio" name="q18" value="newclass">
                    newclass
                </label>
            </div>

            <!-- Question 19 -->
            <div class="question-box">
                <h3>Question 19</h3>
                <p>Which keyword is used to create an object from a class?</p>

                <label>
                    <input type="radio" name="q19" value="object" required>
                    object
                </label>

                <label>
                    <input type="radio" name="q19" value="new">
                    new
                </label>

                <label>
                    <input type="radio" name="q19" value="create">
                    create
                </label>

                <label>
                    <input type="radio" name="q19" value="make">
                    make
                </label>
            </div>

            <!-- Question 20 -->
            <div class="question-box">
                <h3>Question 20</h3>
                <p>Which function is used to hash a password securely in PHP?</p>

                <label>
                    <input type="radio" name="q20" value="password_hash()" required>
                    password_hash()
                </label>

                <label>
                    <input type="radio" name="q20" value="hash_password()">
                    hash_password()
                </label>

                <label>
                    <input type="radio" name="q20" value="secure_password()">
                    secure_password()
                </label>

                <label>
                    <input type="radio" name="q20" value="password_secure()">
                    password_secure()
                </label>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="submit-btn">
                Submit Exam
            </button>

        </form>

    </div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <div class="container">
        <div class="register">
            <form action="safe.php" method="post">
                <input type="text" name="fullname" placeholder="fullname" required  value="zaynab"/>
                <input type="text" name="username" placeholder="username" required value="zaynab" />
                <input type="password" name="pass" placeholder="pass" required value="zaynab"/>
                <input type="password" name="confirmpass" placeholder="confirmpass" value="zaynab" required />
                <input type="email" name="email" placeholder="email" value="zaynab@gmaol.com" required />
                <input type="tel" name="phone" placeholder="phone" value="1234567" required />
                <input type="date" name="birthDate" placeholder="birthDate" required />
                <input type="number" name="socialSecNum" placeholder="socialSecNum" required />
                <button type="submit" name="register" value="register">Submit</button>
            </form>
        </div>
        <div class="login">
            <form action="safe.php" method="get">
                <input type="text" name="username" placeholder="username" required />
                <input type="password" name="pass" placeholder="pass" required />
                <button type="submit" name="login" value="login">Submit</button>
            </form>
        </div>
    </div>

</body>

</html>
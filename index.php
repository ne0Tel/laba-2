<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Страница постов!</h1>

                <?php
                    if (!isset($_COOKIE['User'])) {
                        ?>
                            <a href="/registration.php">Зарегистрируйтесь</a> или <a href="/login.php">войдите</a>!
                        <?php
                    } else {
                        
                        $link = mysqli_connect('127.0.0.1', 'root', 'kali', 'first');

                        $sql = "SELECT * FROM posts";
                        $res = mysqli_query($link, $sql);

                        if (mysqli_num_rows($res) > 0) {
                            while ($post = mysqli_fetch_array($res)) {
                                echo "<a href='/posts.php?id=>" . $post["id"] . "'>" . $post['title'] . "</a><br>";
                            }
                        } else {
                            echo "Записей пока нет";
                        }

                    }
                ?>

            </div>
        </div>
    </div>
</body>
</html>


​

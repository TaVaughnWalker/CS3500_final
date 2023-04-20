<body>
    Leave a comment:<br>
    <form action="forms/comment_post.php" method="post">
        <input type="text" name="data"><br>
        <input type="submit">
    </form>
    <?php
        $servername = 'localhost';
        $username = "server";
        $password = "password";
        $dbname = "taylor_swift";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        $sql = "SELECT * FROM comments ORDER BY postDate DESC";
        if ($result = $conn->query($sql)) {
            while ($row = $result->fetch_assoc()) {
                $text = $row["commentText"];
                echo '<p>' . $text . '</p>';
                echo '<br>';
                
            }
            /* free result set */
            $result->free();
        }
    ?>
</body>
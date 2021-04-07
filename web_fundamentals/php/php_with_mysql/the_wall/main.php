<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="My Simple bootstrap design">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>simple-bootstrap</title>
    </head>
    <style>
        .color1 {
            background-color: #1C110A;
        }
        .color2 {
            background-color: #E4D6A7;
        }
        .color3 {
            background-color: #E9B44C;
        }
        .color4 {
            background-color: #9B2915;
        }
        .color5 {
            background-color: #50A2A7;
        }
        .center{
            margin-left: auto;
            margin-right: auto;
        }
    </style>
<body>
        <?php
        session_start();
        if(!isset($_SESSION['user_id'])){
            echo "not logged in";
            exit();
        }
        ?>
    
    <nav class="navbar navbar-expand-lg color1 text-uppercase navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><?= $_SESSION['fullname']; ?></a>
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-3"><a class="nav-link py-3" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <form action="process.php" method="POST">
        <div class="col-lg-8 center">
            <h1 class="mt-4">POST A MESSAGE !</h1>
            <input type="hidden" value="<?= $_SESSION['user_id']; ?>" name="user_id">
            <div class="form-group">
                    <textarea id="my-textarea" class="form-control" name="message" rows="3"></textarea>
            </div>
            <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="post_message" value="Post a Message">
            </div>
        </div>
    </form>
    
    <?php
    include_once "conn.php";
    $messages = display_all("SELECT * FROM `messages`LEFT JOIN users on messages.user_id = users.id ORDER BY messages.date DESC");
    foreach($messages as $messages_){
        $date = date_create($messages_['date']);
    ?>
    <div class="col-lg-8 center">
        <div class=" card text-white bg-info mb-3">
            <?php
            if($messages_['user_id'] == $_SESSION['user_id']){
            ?>
                <a class="btn btn-dark ml-auto" href="process.php?delete_msg_id=<?= $messages_['message_id']; ?>">delete</a>
            <?php
            }
            ?>
            <div class="card-header"><?= $messages_['fullname']; ?> - <?= date_format($date,"F m, Y"); ?> </div>
            <div class="card-body">
                <p><?= $messages_['message']; ?></p>
            </div>
        </div>
        <h3>Comments : </h3>
        <?php
        $comments = display_all(" SELECT users.fullname, comments.comment, comments.date , comments.comment_id, comments.user_id, users.id FROM `comments` LEFT JOIN users ON comments.user_id = users.id where comments.message_id = '{$messages_['message_id']}' ");
        foreach($comments as $comments_){
            $comment_date = date_create($comments_['date']);
        ?>
        <div class="col-lg-10 center card text-white bg-secondary mb-3">
            <?php
            if($comments_['user_id'] == $_SESSION['user_id']){
            ?>
                <a class="btn btn-dark ml-auto" href="process.php?delete_comment_id=<?= $comments_['comment_id']; ?>">delete</a>
            <?php
            }
            ?>
            <div class="card-header"><?= $comments_['fullname']; ?> - <?= date_format($comment_date,"F m, Y"); ?></div>
            <div class="card-body">
                <p><?= $comments_['comment']; ?></p>
            </div>
        </div>
        <?php
        }
        ?>

        <form action="process.php" method="POST">
            <div class="col-lg-10 center">
                <h4 class="mt-4">Post a Comment</h4>
                <input type="hidden" name="user_id" value="<?= $_SESSION['user_id']; ?>">
                <input type="hidden" name="message_id" value="<?= $messages_['message_id']; ?>">
                <div class="form-group">
                        <textarea id="my-textarea" class="form-control" name="comment" rows="1"></textarea>
                </div>
                <div class="form-group">
                        <input type="submit" name="submit_comment" class="btn btn-info" value="Post a comment">
                </div>
            </div>
        </form>
    </div>
    <?php
    }
    ?>
    
    
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
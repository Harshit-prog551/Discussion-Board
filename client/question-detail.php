<div class="container">
    <h1 class="heading">Question</h1>
    <div class="row">
    <div class="col-7 ">
    <?php
    include("./common/db.php");
    $result = $conn->prepare("select * from questions where id= $qid");
    $result->execute();
    $row = $result->fetchAll(PDO::FETCH_ASSOC);
    $cid = $row[0]['catagory_id'];
     echo "<h4 class='margin-bottom-15 question-title'>Question : " . $row[0]['title'] . "</h4>
    <p class='margin-bottom-15'>" . $row[0]['description'] . "</p>";
     include("answers.php");
    ?>
    <form action="./server/request.php" method="post">
        <input type="hidden" name="question_id" value="<?php echo $qid ?>">
        <textarea name="answer" class="form-control margin_bottom-15" placeholder="Your answer..."></textarea>
        <button class="btn btn-primary">Write your answer</button>
    </form>

    </div>
     <div class="col-5">

            <?php
            $categoryQuery = $conn->prepare("select name from catagory where id=$cid");
            $categoryQuery->execute();
            $categoryRow = $categoryQuery->fetchAll(PDO::FETCH_ASSOC);
            echo "<h1>" . ucfirst($categoryRow[0]['name']) . "</h1>";
            $result = $conn->prepare("select * from questions where catagory_id=$cid and id!=$qid");
           $result->execute();
           foreach ($result as $row) {
                $id = $row['id'];
                $title = $row['title'];

                echo "<div class='question-list'>
                <h4><a href=?q-id=$id>$title</a></h4>
                </div>";
            }
            ?>
        </div>
        </div>
</div>
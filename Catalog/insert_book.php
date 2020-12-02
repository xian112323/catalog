<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Entry Results</title>
</head>
<body>
    <h1>Book Entry Results</h1>
    <?php
    // TODO 1: Create short variable names.
    $isbn = $_POST['isbn'];
    $author = $_POST['author'];
    $title = $_POST['title'];
    $price = $_POST['price'];

    // TODO 2: Check and filter data coming from the user.
    if(!$isbn || !$author || !$title || !$price){
        echo "Enter data failed, Please re-insert again!";
    
    }
    if(!get_magic_quotes_gpc()) {
        $isbn = addslashes($isbn);
        $author = addslashes($author);
        $title = addslashes($title);
        $price = doubleval($price);
      }
    
    // TODO 3: Setup a connection to the appropriate database.
    require_once'test.php';
    
    // TODO 4: Query the database.
    $query = "INSERT into catalogs values
    ('".$isbn."', '".$author."', '".$title."', '".$price."')";
    $result = $conn->query($query);
    
    // TODO 5: Display the feedback back to user.
    if ($result) {
        echo  $conn->affected_rows." book complete insert into database.";
    } else {
        echo "Got Error.  The book was not added.";
    }


    // TODO 6: Disconnecting from the database.
    $conn->close();

    ?>
</body>
</html>
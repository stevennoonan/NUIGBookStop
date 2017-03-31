<head>
   <title>Process and store</title>
</head>
<body>
<?php

  if (isset($_request["name"]))  {
  
  $name=preg_replace("/[^a-zA-z0-9\ ]/","",$_REQUEST["name"]);
  
  $name=htmlspecialchars($name);
  
  $author=preg_replace("/[^a-zA-z0-9\ ]/","",$_REQUEST["author"]);
  
  $author=htmlspecialchars($author);
  
  $year=preg_replace("/[^a-zA-z0-9\ ]/","",$_REQUEST["year"]);
  
  $year=htmlspecialchars($year);
  
  $publisher=preg_replace("/[^a-zA-z0-9\ ]/","",$_REQUEST["publisher"]);
  
  $publisher=htmlspecialchars($publisher);
  
  $course=preg_replace("/[^a-zA-z0-9\ ]/","",$_REQUEST["course"]);
  
  $course=htmlspecialchars($course);
  
  $price=preg_replace("/[^a-zA-z0-9\ ]/","",$_REQUEST["price"]);
  
  $price=htmlspecialchars($price);
  
 $revision=preg_replace("/[^a-zA-z0-9\ ]/","",$_REQUEST["revision"]);
  
  $revision=htmlspecialchars($revision);
  
  $description=preg_replace("/[^a-zA-z0-9\ ]/","",$_REQUEST["description"]);
  
  $description=htmlspecialchars($description);
  
  } else {
  die("user did not send any data to be saved!");
  }
  
  $pdo_dsn="mysql:dbname=mongodb2702,host=danu7.it.nuigalway.ie:8717";
  $pdo_user="mongodb2702ns";
  $pdo_password="ma6cil";
  
  try {
  $conn = new PDO($pdo_dsn, $pdo_user, $pdo_password);
  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $qry=$conn->prepare("INSERT INTO Collections (Ads) name author year publisher course price revision description (:name :author :year :publisher :course :price :revision :description)");
  
  $qry->execute(Array(":name" => $name)(":author" => $author)(":year" => $year)(":publisher" => $publisher)(":course" => $course)(":price" => $price)(":revision" => $revision)(":description" => $description));
  
  } catch (PDOException $e) {
  echo "Error: " . $e->getMessage(). " file: " . $e->getFile() . " line: " . $e->getLine();
  exit;
  }
  ?>
  
 </body>
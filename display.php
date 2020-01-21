<html>

<head>
   <title>বই কথা ॥ বই এর জগতে স্বাগতম</title>
   <link rel="stylesheet" type="text/css" href="css/style.css" />
   <style>
      table {
         width: 1000px;
         margin: 20px auto;
         table-layout: auto;
         border-collapse: collapse;
      }

      th,
      td {
         padding: 10px;
         border: solid 1px;
         background-color: #f5f5f5;

      }
   </style>
</head>


<body>
   <?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "boikotha";

   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
   // Check connection
   if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
   }
   ?>
   
   <!--Banner-->
   <h1>বই কথা <br>
      <font size="3px" color="#E2DBD4" style="text-shadow: 0px 0px 0px #F1E3E0;">হুমায়ুন কিংবা সুনীল,বই এর সঙ্গেই হোক ভালোবাসা</font>
   </h1>
   <!--End Banner-->

   <!--Menu-->
   <center>
      <ul>
         <li><a href="index.php"> হোম</a></li>
         <li><a href="post.php">আপনার পাঠ প্রতিক্রিয়া লিখুন</a></li>
         <li><a href="display.php">পাঠ প্রতিক্রিয়া গুচ্ছ</a></li>
      </ul>
   </center>
   <!--End Menu-->

   <!--Review Forum-->
   <center>
      <h2>রিভিউ গুচ্ছ</h2>
   </center>

   <?php
   $sql = "select * from boikotha_post";
   $display = mysqli_query($conn, $sql);

   while ($row = mysqli_fetch_assoc($display)) {
      $name = $row['name'];
      $bname = $row['bname'];
      $rname = $row['rname'];
      $tname = $row['tname'];
      $comment = $row['comment'];

      echo "<table border=1>
               <tr>
               <td>  বইয়ের নাম:&nbsp $bname  <br>
                     লেখকের নাম:&nbsp $rname <br>
                     ঘরনা:&nbsp $tname <br>
                     রিভিওটি লিখেছেন&nbsp $name               
               </td>
               </tr>
               <tr>
               <td><b>পাঠ প্রতিক্রিয়া:</b><br>$comment</td>
               </tr>
               </table>
      ";
   }
   ?>
   <!--End Review Forum-->
</body>

</html>
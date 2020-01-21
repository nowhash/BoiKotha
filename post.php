<html>

<head>
      <title>বই কথা ॥ বই এর জগতে স্বাগতম</title>
      <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>


<body>
      <!-- Banner -->
      <h1>বই কথা <br>
            <font size="3px" color="#E2DBD4" style="text-shadow: 0px 0px 0px #F1E3E0;">হুমায়ুন কিংবা সুনীল,বই এর সঙ্গেই হোক ভালোবাসা</font>
      </h1>
      <!--End Banner -->

      <!--Menu-->
      <center>
            <ul>
                  <li><a href="index.php"> হোম</a></li>
                  <li><a href="post.php">আপনার পাঠ প্রতিক্রিয়া লিখুন</a></li>
                  <li><a href="display.php">পাঠ প্রতিক্রিয়া গুচ্ছ</a></li>
            </ul>
      </center>
      <!--End Menu-->

      <!--Contents-->
      <center>
            <h2>আপনার রিভিউ লিখুন</h2>
      </center>

      <center>
            <form action="submit.php" method="post">
                  <font size="4px">আপনার নাম:</font><br>
                  <input type="text" name="name" size="50" style="height: 30px" required /><br>

                  <font size="4px">বইয়ের নাম:</font><br>
                  <input type="text" name="bname" size="50" style="height: 30px" required /><br>

                  <font size="4px">লেখকের নাম:</font><br>
                  <input type="text" name="rname" size="50" style="height: 30px" required /><br>

                  <font size="4px">ঘরানা:</font><br>
                  <input type="text" name="tname" size="50" style="height: 30px" required /><br>

                  <font size="4px">পাঠ প্রতিক্রিয়া:</font><br>
                  <textarea name="comment" rows="10" cols="50" required></textarea><br><br>
                  <input type="submit" value="পোস্ট করুন" style="height:60; width:150; font-size:20px;">
            </form>
      </center>
      <!--End Contents-->
</body>

</html>
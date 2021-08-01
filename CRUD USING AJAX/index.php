<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <form action="/action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="name">User Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="User_Name" placeholder="Enter Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="gmail">Gmail</label>
      </div>
      <div class="col-75">
        <input type="text" id="gmail" name="gmail" placeholder="Enter Your gmail..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="phone">Phone</label>
      </div>
      <div class="col-75">
        <input type="text" id="phone" name="Phone" placeholder="Enter Your phone number..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Address">Address</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="Address" placeholder="Your Address.." style="height:100px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" name="Submit" value="Submit">
    </div>
  </form>
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Multi Step Form with Progress Bar using jQuery and CSS3</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="./style.css?v=0.1.1">
<?php
include "dbconnect.php";
?>
</head>
<body>
<!-- partial:index.partial.html -->
<!-- multistep form -->
<form id="msform">
  <!-- progressbar -->

  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Food</h2>
    <h2 class="fs-title">Meat</h2>
<table>
  <tr>
    <th>Name</th>
    <th>Type</th>
    <th>Price</th>
  </tr>
<?php
    $sql = "SELECT * FROM food WHERE type = 'meat'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "
            <tr>
              <td>".$row["name"]."</td>
              <td>".$row["type"]."</td>
              <td>".$row["price"]."</td>
            </tr>";
        }
    } else {
        echo "0 results";
    }
?>
</table>
<br/>
<h2 class="fs-title">Rice</h2>
<table>
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Price</th>
  </tr>
<?php
    $sql = "SELECT * FROM food WHERE type = 'rice'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "
            <tr>
              <td>".$row["name"]."</td>
              <td>".$row["type"]."</td>
              <td>".$row["price"]."</td>
            </tr>";
        }
    } else {
        echo "0 results";
    }
?>
</table>
<h2 class="fs-title">Kabab</h2>
<table>
  <tr>
    <th>Name</th>
    <th>Type</th>
    <th>Price</th>
  </tr>
<?php
    $sql = "SELECT * FROM food WHERE type = 'kabab'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "
            <tr>
              <td>".$row["name"]."</td>
              <td>".$row["type"]."</td>
              <td>".$row["price"]."</td>
            </tr>";
        }
    } else {
        echo "0 results";
    }
?>
</table>
<h2 class="fs-title">Food</h2>
<table>
  <tr>
    <th>Name</th>
    <th>Type</th>
    <th>Price</th>
  </tr>
<?php
    $sql = "SELECT * FROM food WHERE type = 'Salad'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "
            <tr>
              <td>".$row["name"]."</td>
              <td>".$row["type"]."</td>
              <td>".$row["price"]."</td>
            </tr>";
        }
    } else {
        echo "0 results";
    }
?>
</table>
<h2 class="fs-title">Dessert</h2>
<table>
  <tr>
    <th>Name</th>
    <th>Type</th>
    <th>Price</th>
  </tr>
<?php
    $sql = "SELECT * FROM food WHERE type = 'dessert'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "
            <tr>
              <td>".$row["name"]."</td>
              <td>".$row["type"]."</td>
              <td>".$row["price"]."</td>
            </tr>";
        }
    } else {
        echo "0 results";
    }
?>
</table>
<h2 class="fs-title">Others</h2>
<table>
  <tr>
    <th>Name</th>
    <th>Type</th>
    <th>Price</th>
  </tr>
<?php
    $sql = "SELECT * FROM food WHERE type = 'other'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "
            <tr>
              <td>".$row["name"]."</td>
              <td>".$row["type"]."</td>
              <td>".$row["price"]."</td>
            </tr>";
        }
    } else {
        echo "0 results";
    }
?>
</table>
<h2 class="fs-title">Vegetable</h2>
<table>
  <tr>
    <th>Name</th>
    <th>Type</th>
    <th>Price</th>
  </tr>
<?php
    $sql = "SELECT * FROM food WHERE type = 'vegetable'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "
            <tr>
              <td>".$row["name"]."</td>
              <td>".$row["type"]."</td>
              <td>".$row["price"]."</td>
            </tr>";
        }
    } else {
        echo "0 results";
    }
?>
</table>
  <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>

  <fieldset>
  <h2 class="fs-title">Photography!!</h2>
  <p>Junior Photographer </p>
  <div class="container">
    <div class="card"> 
      <p> FAISAL KARIM </p>
      <ul>
        <li>1.5 hours</li>
        <li>1.5 hours</li>
        <li>1.5 hours</li>
        <li>1.5 hours</li>
      </ul>
    </div>
    <div class="card"> 
      <div class="container">
        <img src="img/fk.jpg" alt="Avatar" style="width:100%">
        <img src="img/fk.jpg" alt="Avatar" style="width:100%">
        </div>
        <div class="container">
          <img src="img/fk.jpg" alt="Avatar" style="width:100%">
          <img src="img/fk.jpg" alt="Avatar" style="width:100%">
        </div>
    </div>
  </div>
  <div class="container">
    <div class="card"> 
      <p> Golden Package </p>
      <img src="https://5.imimg.com/data5/RN/FV/FP/SELLER-39609937/marriage-decoration-500x500.jpg" height="200px" width="200px"/>
      <p> Price: 3000-/ </p> </br>
      <input type="radio"> 
    </div>
    <div class="card"> 
      <p> Golden Package </p>
      <img src="https://5.imimg.com/data5/RN/FV/FP/SELLER-39609937/marriage-decoration-500x500.jpg" height="200px" width="200px"/>
      <p> Price: 3000-/ </p> </br>
      <input type="radio"> 
    </div>
  </div>


    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
<!-- fieldsets -->

<!-- decoration -->  
<fieldset>
  <h2 class="fs-title">Decoration</h2>
  <div class="container">
    <div class="card"> 
      <img src="https://5.imimg.com/data5/RN/FV/FP/SELLER-39609937/marriage-decoration-500x500.jpg" height="200px" width="200px"/>
    </div>
    <div class="card"> 
      <p> Stage Style </p>
      <ul>
        <li> option </li>
        <li> option </li>
        <li> option </li>
        <li> option </li>
      </ul>
      <p> Price: 3000-/ </p> </br>
      <input type="radio"> 
    </div>
  </div>
    <div class="container">
    <div class="card"> 
      <img src="https://5.imimg.com/data5/RN/FV/FP/SELLER-39609937/marriage-decoration-500x500.jpg" height="200px" width="200px"/>
    </div>
    <div class="card"> 
      <p> Stage Style </p>
      <ul>
        <li> option </li>
        <li> option </li>
        <li> option </li>
        <li> option </li>
      </ul>
      <p> Price: 3000-/ </p> </br>
      <input type="radio"> 
    </div>
  </div>
  <div class="container">
    <div class="card"> 
      <img src="https://5.imimg.com/data5/RN/FV/FP/SELLER-39609937/marriage-decoration-500x500.jpg" height="200px" width="200px"/>
    </div>
    <div class="card"> 
      <p> Stage Style </p>
      <ul>
        <li> option </li>
        <li> option </li>
        <li> option </li>
        <li> option </li>
      </ul>
      <p> Price: 3000-/ </p> </br>
      <input type="radio"> 
    </div>
  </div>
  <div class="container">
    <div class="card"> 
      <img src="https://5.imimg.com/data5/RN/FV/FP/SELLER-39609937/marriage-decoration-500x500.jpg" height="200px" width="200px"/>
    </div>
    <div class="card"> 
      <p> Gate Style </p>
      <ul>
        <li> option </li>
        <li> option </li>
        <li> option </li>
        <li> option </li>
      </ul>
      <p> Price: 3000-/ </p> </br>
      <input type="radio"> 
    </div>
  </div>
  <div class="container">
    <div class="card"> 
      <img src="https://5.imimg.com/data5/RN/FV/FP/SELLER-39609937/marriage-decoration-500x500.jpg" height="200px" width="200px"/>
    </div>
    <div class="card"> 
      <p> Gate Style </p>
      <ul>
        <li> option </li>
        <li> option </li>
        <li> option </li>
        <li> option </li>
      </ul>
      <p> Price: 3000-/ </p> </br>
      <input type="radio"> 
    </div>
  </div>
  <div class="container">
    <div class="card"> 
      <img src="https://5.imimg.com/data5/RN/FV/FP/SELLER-39609937/marriage-decoration-500x500.jpg" height="200px" width="200px"/>
    </div>
    <div class="card"> 
      <p> Others  </p>
      <ul>
        <li> option </li>
        <li> option </li>
        <li> option </li>
        <li> option </li>
      </ul>
      <p> Price: 3000-/ </p> </br>
      <input type="radio"> 
    </div>
  </div>
  <div class="container">
    <div class="card"> 
      <img src="https://5.imimg.com/data5/RN/FV/FP/SELLER-39609937/marriage-decoration-500x500.jpg" height="200px" width="200px"/>
    </div>
    <div class="card"> 
      <p> Others </p>
      <ul>
        <li> option </li>
        <li> option </li>
        <li> option </li>
        <li> option </li>
      </ul>
      <p> Price: 3000-/ </p> </br>
      <input type="radio"> 
    </div>
  </div>
  

    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="submit" name="submit" class="submit action-button" value="Submit" />
  </fieldset>
<!-- decoration -->  

<!-- fieldsets -->


</form>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script><script  src="./script.js"></script>

</body>
</html>

<?php
session_start();
if (!isset($_SESSION["Email"])) {
  header("location:../Sign in/Sign in.php");
} else {
  include("../Basics/loggedin.php");
  include("../Basics/Profile.php");
}
include_once '../Database/Config.php';
?>
<!DOCTYPE html>
<style>
  .drop-container {
    position: relative;
    display: flex;
    gap: 10px;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 200px;
    padding: 20px;
    border-radius: 10px;
    border: 2px dashed #555;
    color: #444;
    cursor: pointer;
    transition: background .2s ease-in-out, border .2s ease-in-out;
    margin: 0 100px;
  }

  .drop-container:hover {
    background: #eee;
    border-color: #111;
  }

  .drop-container:hover .drop-title {
    color: #222;
  }

  .drop-title {
    color: #444;
    font-size: 20px;
    font-weight: bold;
    text-align: center;
    transition: color .2s ease-in-out;
  }

  .platform {
    position: relative;
    right: 10px;
    top: 35px;
    color: #444;
    font-size: 20px;
    font-weight: bold;
    transition: color .2s ease-in-out;
  }

  input[type=file] {
    width: 350px;
    max-width: 100%;
    color: #444;
    padding: 5px;
    background: #fff;
    border-radius: 10px;
    border: 1px solid #555;
  }

  input[type=file]::file-selector-button {
    margin-right: 20px;
    border: none;
    background: #084cdf;
    padding: 10px 20px;
    border-radius: 10px;
    color: #fff;
    cursor: pointer;
    transition: background .2s ease-in-out;
  }

  input[type=file]::file-selector-button:hover {
    background: #0d45a5;
  }

  .inputs {
    height: 30px;
    width: 300px;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: 4px;
    margin: 6px 32%;
    padding: 14px;
  }

  .platforminputs {
    position: relative;
    right: 100px;
    height: 30px;
    width: 300px;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: 4px;
    margin: 6px 32%;
    padding: 14px;
  }

  .PH {
    margin: 0 40%;
  }

  .Pinfo {
    margin: 0 15% 20px;
    width: 1050px;
    border-radius: 10px;
    border: solid rgba(107, 107, 107, 0.35) 1px;
  }

  #savechanges {
    height: 50px;
    width: 150px;
    border: 1px solid #ced4da;
    border-radius: 10px;
    background-color: #05a1a8;
    font-weight: bold;
    color: white;
    letter-spacing: 2px;
    margin: 0 40%;
  }

  #savechanges:hover {
    transition: 0.5s;
    background-color: #037278;
    cursor: pointer;
  }

  .error {
    color: #FF0000;
  }
</style>

<body>
  <?php
  $imgErr = "";
  $codeErr = "";
  ?>
  <h1 class="drop-title" style="color:white;">Upload your product</h1>
  <form action="UploadProduct.php" enctype="multipart/form-data" method="post">
    <div class="Pinfo">
      <label for="AName" class="PH"><span class="drop-title">Author </span> <br><input type="name" class="inputs"
          name="AName" value="<?php echo $_SESSION["FName"];
          echo " ";
          echo $_SESSION["LName"]; ?>" required readonly>
      </label><br><br>
      <label for="Pname" class="PH"><span class="drop-title">Product Name</span> <br><input type="name" class="inputs"
          name="Pname" required> </label><br><br>
      <label for="Pname" class="PH"><span class="drop-title">Email</span> <br><input type="email" class="inputs"
          name="AEmail" required> </label><br><br>
      <label for="Pname" class="PH"><span class="drop-title">Phone Number</span> <br><input type="text" minlength="11"
          maxlength="11" class="inputs" name="APhone" required> </label><br><br>

      <label for="Pprice" class="PH"><span class="drop-title">Product Price</span> <br><input type="number" min="1"
          class="inputs" name="Pprice" required> </label><br><br>

      <span class="PH drop-title">Produce Image</span><br><br>
      <label for="img" class="drop-container">
        <span class="drop-title">Drop files here</span>
        or
        <input type="file" id="img" name="img" accept="image/*" required>
        <span class="error">*
          <?php echo $imgErr; ?>
        </span>
      </label><br><br>


      <label for="Pqty" class="PH"><span class="drop-title">Quantity</span> <br><input type="number" min="1"
          class="inputs" name="Pqty" required> </label><br><br>
      <label for="Pcode" class="PH"><span class="drop-title">Product Code</span><span class="error"> *
          <?php echo $codeErr; ?>
        </span> <br><input type="number" min="1" class="inputs" name="Pcode" required> </label><br><br>

      <label for="platform" class="PH"><span class="drop-title">PLATFORM</span></label>
      <label for="platform" class="PH"><span class="platform">Play Station 5</span><input type="radio"
          class="platforminputs" name="platform" value="PS5"></label>
      <label for="platform" class="PH"><span class="platform">Play Station 4</span><input type="radio"
          class="platforminputs" name="platform" value="PS4"></label>
      <label for="platform" class="PH"><span class="platform">XBox</span><input type="radio" class="platforminputs"
          name="platform" value="XBox"></label>
      <label for="platform" class="PH"><span class="platform">Nintendo</span><input type="radio" class="platforminputs"
          name="platform" value="Nintendo"></label><br><br>

      <label for="Pdescription" class="PH"><span class="drop-title">Product Description</span> <br><input type="text"
          class="inputs" name="Pdescription" required> </label><br><br>
      <button type="submit" name="savechanges" value="savechanges" id="savechanges">Save Changes</button>
    </div>
  </form>
</body>
<footer>
  <?php
  include("../Basics/Footer.php");
  ?>
</footer>
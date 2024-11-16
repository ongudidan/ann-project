  <?php
    include('components/head.php');
    include('components/navbar.php');

    ?>


  <?php
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        $result = $num1 + $num2;
    }
    ?>

  <div class="container mt-5">
      <h2 class="text-center mb-4">Addition Form</h2>

      <div class="card shadow-sm p-4">
          <form action="addition-form.php" method="POST">
              <div class="mb-3">
                  <label for="num1" class="form-label">Enter the first number</label>
                  <input type="number" name="num1" value="<?= $num1 ?? '' ?>" class="form-control" id="num1" placeholder="First number" required>
              </div>

              <div class="mb-3">
                  <label for="num2" class="form-label">Enter the second number</label>
                  <input type="number" name="num2" value="<?= $num2 ?? '' ?>" class="form-control" id="num2" placeholder="Second number" required>
              </div>

              <button type="submit" name="submit" class="btn btn-primary w-100">Add Numbers</button>
          </form>

          <div class="mt-3" id="result" class="text-center text-success"></div>
      </div>
  </div>


  <!-- Display the result after form submission -->
  <div id="result" class="mt-3 text-center text-success">
      <!-- Result will be shown here by PHP -->
      <h4>Result:
          <?php
            if ($result) {
                echo $result;
            } else {
                echo 'Not set';
            }

            ?>

      </h4>
  </div>

  <?php
    include('components/footer.php');
    ?>
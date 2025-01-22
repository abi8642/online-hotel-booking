<?php
$insert = false;
$update = false;
$delete = false;

include '../db_connect.php';

if (isset($_POST['cancel'])) {
  $book_id = $_POST['cancel'];

  $update = "UPDATE `booking` SET `confirmation`= 'cancelled' WHERE `book_id` = $book_id";
  $updateres = mysqli_query($conn, $update);
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">


  <title>ADMIN DASHBOARD</title>

</head>

<body>
  <nav class="text-center navbar navbar-expand-lg navbar-dark bg-dark">
    <a style="width: 100%;" class="navbar-brand" href="#">ADMIN DASHBOARD</a>
  </nav>

  <div class="container my-4">
    <h2 class="text-center my-5">All Booking Details</h2>
    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">S.No</th>
          <th scope="col">User Name</th>
          <th scope="col">Email ID</th>
          <th scope="col">Phone Number</th>
          <th scope="col">ID Proof</th>
          <th scope="col">Country</th>
          <th scope="col">State</th>
          <th scope="col">City</th>
          <th scope="col">Pincode</th>
          <th scope="col">Address</th>
          <th scope="col">Gender</th>
          <th scope="col">Confirmation</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `booking`";
        $result = mysqli_query($conn, $sql);
        $sno = 0;
        while ($row = mysqli_fetch_assoc($result)) {
          $sno = $sno + 1;
          echo "<tr>
                  <th scope='row'>" . $sno . "</th>
                  <td>" . $row['uname'] . "</td>
                  <td>" . $row['email'] . "</td>
                  <td>" . $row['ph_no'] . "</td>
                  <td>" . $row['id_proof'] . "</td>
                  <td>" . $row['cont'] . "</td>
                  <td>" . $row['state'] . "</td>
                  <td>" . $row['city'] . "</td>
                  <td>" . $row['pin'] . "</td>
                  <td>" . $row['address'] . "</td>
                  <td>" . $row['gender'] . "</td>";
          if ($row['confirmation'] == "confirmed") {
            echo " <td>
                    <form action='adminBookingInfo.php' method='post'>
                      <button name='cancel' class='btn btn-sm btn-primary' value=" . $row['book_id'] . ">Cencel</button>
                    </form>
                  </td>";
          } else {
            echo " <td>
                    <button disabled class='btn btn-sm btn-primary'>Cencel</button>
                  </td>";
          }
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>

  <script src=" https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
  </script>
</body>

</html>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link href="b.css" rel="stylesheet"> <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>sview</title>

</head>

<body>


<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="shome.php">SCM</a>
      <!--  -->
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="logout.php">Sign out</a>
        </li>
      </ul>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="shome.php">
              Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="sview.php">
                 Stocks
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="adds.php">
                  Add Stocks
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="buyer_s.php">
                  View Customer
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="sreport.php">
                  View Report
                </a>
              </li>
              
             
            </ul>          
          </div>
        </nav>
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">edit details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="sview.php " method="post">
            <input type="hidden" name="snoEdit" id="snoEdit">

                        <div class="form-group">
                            <label for="mat_name">material name</label>
                            <input type="text" class="form-control" id="mat_nameEdit" name="mat_nameEdit"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                                <select class='type form-control' name="type_edit" id="type_edit" placeholder="Type*">
                                    <option >kilo</option>
                                    <option >litre</option>
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="weight">weight</label>
                            <input type="text" class="form-control" id="weightEdit" name="weightEdit"  aria-describedby="emailHelp">
                            
                        </div>
                        <div class="form-group">
                            <label for="price">price</label>
                            <input type="float" class="form-control" id="priceEdit" name="priceEdit"  aria-describedby="emailHelp">
                            
                        </div>
                        <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
                </div>
                    </form>
                </div>
             
            </div>
        </div>
    </div>


    <div class="container my-5">

    <h2>Stock List</h2>

        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col">sl_no</th>
                    <th scope="col">material name</th>
                    <th scope="col">type</th>
                    <th scope="col">weight</th>
                    <th scope="col">price</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tr>
            <td>1</td>
            <td>naskjcn</td>
            <td>abscjh</td>
            <td>bbjhb</td>
            <td>bbjhb</td>
              <td><button class= 'edit btn btn-sm btn-primary'id=''>Edit</button>     <button class= 'delete btn btn-sm btn-primary'id=''>Delete</button></td>
            </tr>
            <tbody>
               </tbody>
              
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                    crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
                    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
                    crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
                    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
                    crossorigin="anonymous"></script>
                <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
                <script>
                    $(document).ready(function () {
                        $('#myTable').DataTable();
                    });
                </script>

                <script>
                    edits = document.getElementsByClassName('edit');
                    Array.from(edits).forEach((element) => {
                        element.addEventListener("click", (e) => {
                            console.log("edit");
                            tr = e.target.parentNode.parentNode;
                            mat_name = tr.getElementsByTagName("td")[0].innerText;
                            type = tr.getElementsByTagName("td")[1].innerText;
                            weight = tr.getElementsByTagName("td")[2].innerText;
                            price = tr.getElementsByTagName("td")[3].innerText;
                            console.log(mat_name,type,weight,price);
                            mat_nameEdit.value = mat_name;
                            type_edit.value = type;
                            weightEdit.value = weight;
                            priceEdit.value=price;
                            snoEdit.value = e.target.id;
                            $('#editModal').modal('toggle');
                        });
                    });

                    deletes = document.getElementsByClassName('delete');
                    Array.from(deletes).forEach((element) => {
                    element.addEventListener("click", (e) => {
                        console.log("edit ");
                        id= e.target.id.substr(1);

                        if (confirm("Are you sure you want to delete this record!")) {
                        console.log("yes");
                        window.location = `/project/sview.php?delete=${id}`;
                       
                        }
                        else {
                        console.log("no");
                        }
                    })
                    }) 
                </script>
</body>
</html>
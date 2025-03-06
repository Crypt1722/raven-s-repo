<?php
  include('partials\header.php');
  include('partials\sidebar.php');
?>

<!-- Your PHP BACK CODE HERE -->

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Student Information Management System</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">General</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <div>
                <h5 class="card-title">Student Table</h5>
              </div>
              <div>
                <button class="btn btn-primary btn-sm mt-4 mx-3">Add Student</button>
              </div>
            </div>

            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Student Name</th>
                  <th scope="col">Course</th>
                  <th scope="col">Age</th>
                  <th scope="col">Enrollment Date</th>
                  <th scope="col" class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>John Doe</td>
                  <td>Computer Science</td>
                  <td>20</td>
                  <td>2023-09-01</td>
                  <td class="d-flex justify-content-center">
                    <button class="btn btn-success btn-sm mx-1">Edit</button>
                    <button class="btn btn-primary btn-sm mx-1" title="View Student Information" data-bs-toggle="modal" data-bs-target="#editInfo">View</button>
                    <button class="btn btn-danger btn-sm mx-1">Delete</button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jane Smith</td>
                  <td>Mathematics</td>
                  <td>22</td>
                  <td>2021-03-10</td>
                  <td class="d-flex justify-content-center">
                    <button class="btn btn-success btn-sm mx-1">Edit</button>
                    <button class="btn btn-primary btn-sm mx-1" title="View Student Information" data-bs-toggle="modal" data-bs-target="#editInfo">View</button>
                    <button class="btn btn-danger btn-sm mx-1">Delete</button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Johnry Chris Belen</td>
                  <td>Physics</td>
                  <td>21</td>
                  <td>2022-05-18</td>
                  <td class="d-flex justify-content-center">
                    <button class="btn btn-success btn-sm mx-1">Edit</button>
                    <button class="btn btn-primary btn-sm mx-1" title="View Student Information" data-bs-toggle="modal" data-bs-target="#editInfo">View</button>
                    <button class="btn btn-danger btn-sm mx-1">Delete</button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Alexa Pareja</td>
                  <td>Chemistry</td>
                  <td>23</td>
                  <td>2020-08-21</td>
                  <td class="d-flex justify-content-center">
                    <button class="btn btn-success btn-sm mx-1">Edit</button>
                    <button class="btn btn-primary btn-sm mx-1" title="View Student Information" data-bs-toggle="modal" data-bs-target="#editInfo">View</button>
                    <button class="btn btn-danger btn-sm mx-1">Delete</button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Marryan Araojo</td>
                  <td>Biology</td>
                  <td>24</td>
                  <td>2019-02-15</td>
                  <td class="d-flex justify-content-center">
                    <button class="btn btn-success btn-sm mx-1">Edit</button>
                    <button class="btn btn-primary btn-sm mx-1" title="View Student Information" data-bs-toggle="modal" data-bs-target="#editInfo">View</button>
                    <button class="btn btn-danger btn-sm mx-1">Delete</button>
                  </td>
                </tr>
              </tbody>
            </table>
            <!-- End Default Table Example -->
          </div>
          <div class="mx-4">
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
              </ul>
            </nav>
          </div>
        </div>

      </div>

      
    </div>

    <!-- Modal -->
    <div class="modal fade" id="editInfo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editInfoLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="editInfoLabel">Student Information</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </section>

</main><!-- End #main -->

<?php
include('partials\footer.php');
?>

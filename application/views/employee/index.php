<div class="container-fluid" id="record-table">
  <div class="col-sm-10">
    <table class="table table-striped">
      <thead>
        <tr>
          <th></th>
          <th>Name</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($employees as $employee) : ?>
        <tr>
          <td><img id="thumbnail" src="assets/uploads/<?= $employee->images ?>"></td>
          <td><h4><?= $employee->first_name;?> <?= $employee->last_name;?></h4></td>

          <td>
            <button type="button" class="btn btn-info" data-name="button-view" data-id="<?= $employee->id; ?>">View</button>
            <a href="<?= base_url('employee/edit/'.$employee->id) ?>" type="button" class="btn btn-warning" data-id="<?= $employee->id;?>" >Edit</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</center>
</div>


<!-- View Modal -->
<div id="viewmodal" class="modal fade" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">View Employee</h4>
    </div>

    <div class="modal-body">
    <table class="table table-bordered table-responsive">
<thead>

</thead>
<tbody>
<tr>
  <td>
    <b><label class="group-label">First Name:</label></b>
  </td>
  <td>
    <div class="group-data" id="first-name"></div>
  </td>
</tr>
<tr>
  <td>
  <b><label class="group-label">Last Name: </label></b>
  </td>
  <td>
    <div class="group-data" id="last-name"></div>
  </td>
</tr>

<tr>
  <td>
    <b><label class="group-label">Middle Name:</label></b>
  </td>
  <td>
    <div class="group-data" id="middle-name"></div>
  </td>
</tr>

<tr>
  <td>
    <b><label class="group-label">Home Address:</label></b>
  </td>
  <td>
    <div class="group-data" id="home-address"></div>
  </td>
</tr>

<tr>
  <td>
    <b><label class="group-label">Phone Number:</label></b>
  </td>
  <td>
    <div class="group-data" id="phone_number"></div>
  </td>
</tr>

<tr>
  <td>
    <b><label class="group-label">Birthday:</label></b>
  </td>
  <td>
    <div class="group-data" id="birthday"></div>
  </td>
</tr>


<tr>
  <td>
    <b><label class="group-label">Date Hired:</label></b>
  </td>
  <td>
    <div class="group-data" id="date_hired"></div>
  </td>
</tr>

<tr>
  <td>
    <b><label class="group-label">Role:</label></b>
  </td>
  <td>
    <div class="group-data" id="role"></div>
  </td>
</tr>


<tr>
  <td>
    <b><label class="group-label">SSS:</label></b>
  </td>
  <td>
    <div class="group-data" id="sss"></div>
  </td>
</tr>


<tr>
  <td>
    <b><label class="group-label">TIN:</label></b>
  </td>
  <td>
    <div class="group-data" id="tin"></div>
  </td>
</tr>


<tr>
  <td>
    <b><label class="group-label">Philhealth:</label></b>
  </td>
  <td>
    <div class="group-data" id="philhealth"></div>
  </td>
</tr>


<tr>
  <td>
    <b><label class="group-label">Pagibig:</label></b>
  </td>
  <td>
    <div class="group-data" id="pagibig"></div>
  </td>
</tr>

<tr>
  <td>
    <b><label class="group-label">Comments:</label></b>
  </td>
  <td>
    <div class="group-data" id="comment"></div>
  </td>
</tr>
</tbody>
</table>


    </div>

    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>

  </div>
</div>
</div>


</body>
</html>

<script>

</script>

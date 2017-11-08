<?php $position = $this->Resume_model->fetch('position');
// print_r($position);die;
  ?>
<div class="container-fluid">
<h3>Add New Record</h3>
<hr>
  <form class="form-horizontal" id="add-record-form" enctype="multipart/form-data"  method="POST">

    <div class="form-group row">
      <label  class="col-sm-2 control-label">Position:</label>
      <div class="col-sm-8">
        <select id="pos-id" class="form-control" name="position">
          <option value="disabled selected">Select your option</option>
          <?php foreach($position as $row): ?>
          <option value="<?= $row->id ?>"><?= $row->name ?></option>
          <?php endforeach; ?>
        </select>
      </div>
    </div>

    <div class="form-group row">
      <label  class="col-sm-2 control-label">Role:</label>
      <div class="col-sm-8">
        <select id="role" name="role" class="form-control"></select>
      </div>
    </div>

    <div class="form-group row">
      <label  class="col-sm-2 control-label">Last Name:</label>
      <div class="col-sm-8">
        <input type="text" name="last_name" class="form-control" placeholder="Last Name"/>
      </div>
    </div>

    <div class="form-group row">
      <label  class="col-sm-2 control-label">First Name:</label>
      <div class="col-sm-8">
        <input type="text" name="first_name" class="form-control" placeholder="First Name"/>
      </div>
    </div>

    <div class="form-group row">
      <label  class="col-sm-2 control-label">Middle Name:</label>
      <div class="col-sm-8">
        <input type="text" name="middle_name" class="form-control" placeholder="Middle Name"/>
      </div>
    </div>

    <div class="form-group row">
      <label  class="col-sm-2 control-label">Email Address:</label>
      <div class="col-sm-8">
        <input type="email" name="email_address" class="form-control" placeholder="Email Address"/>
      </div>
    </div>

    <div class="form-group row">
      <label  class="col-sm-2 control-label">Phone Number:</label>
      <div class="col-sm-8">
        <input type="text" name="phone_number" class="form-control" placeholder="Phone Number"/>
      </div>
    </div>

    <div class="form-group row">
      <label  class="col-sm-2 control-label">Home Address:</label>
      <div class="col-sm-8">
        <input type="text" name="home_address" class="form-control" placeholder="Home Address"/>
      </div>
    </div>

    <div class="form-group row">
      <label  class="col-sm-2 control-label">Birth Date:</label>
      <div class="col-sm-8">
        <input type="date" name="birth_date" class="form-control"/>
      </div>
    </div>

    <div class="form-group row">
      <label  class="col-sm-2 control-label">Degree:</label>
      <div class="col-sm-8">
        <input type="text" name="degree" class="form-control" placeholder="Degree"/>
      </div>
    </div>

    <div class="form-group row">
      <label  class="col-sm-2 control-label">School:</label>
      <div class="col-sm-8">
        <input type="text" name="school" class="form-control" placeholder="School"/>
      </div>
    </div>

    <!--bawal to sa current pero pweds siya applicant -->


    <div id="application_date" class="form-group row" >
      <label  class="col-sm-2 control-label">Application Date:</label>
      <div class="col-sm-8">
        <input type="date" name="application_date" class="form-control"/>
      </div>
    </div>

  <!--bawal to sa current pero pweds siya applicant -->
    <div id="available_date" class="form-group row">
      <label  class="col-sm-2 control-label">Available Date:</label>
      <div class="col-sm-8">
        <input type="date" name="available_date" class="form-control"/>
      </div>
    </div>


  <!--bawal to sa current pero pweds siya applicant -->
    <div id="expected_salary" class="form-group row">
      <label  class="col-sm-2 control-label">Expected Salary:</label>
      <div class="col-sm-8">
        <input type="text" name="expected_salary" class="form-control" placeholder="Expected Salary"/>
      </div>
    </div>
  

    <!-- Ito yung pang employee na part :)  -->

    <!-- <div style='display:none;' id='emp_form' hidden>
      <div class="form-group"><br>
        <label  class="col-sm-2 control-label">Date Hired:</label>
        <div class="col-sm-8">
            <input type="date" name="date_hired" class="form-control" placeholder="Date Hired"/>
        </div>
      </div>

      <div class="form-group">
        <label  class="col-sm-2 control-label">SSS Number:</label>
        <div class="col-sm-8">
            <input type="text" name="sss" class="form-control" placeholder="SSS Number"/>
        </div>
      </div>

      <div class="form-group">
        <label  class="col-sm-2 control-label">TIN:</label>
        <div class="col-sm-8">
            <input type="text" name="tin" class="form-control" placeholder="TIN"/>
        </div>
      </div>

      <div class="form-group">
        <label  class="col-sm-2 control-label">PhilHealth:</label>
        <div class="col-sm-8">
            <input type="text" name="philhealth" class="form-control" placeholder="PHILHEALTH"/>
        </div>
      </div>

      <div class="form-group">
        <label  class="col-sm-2 control-label">Pagibig:</label>
        <div class="col-sm-8">
            <input type="text" name="pagibig" class="form-control" placeholder="PAGIBIG"/>
        </div>
      </div>

    </div> -->
    
    <!--Hanggang Dito pang employee yan -->   
    <div class="form-group row">
      <label class="col-sm-2 control-label">Comment:</label>
      <div class="col-sm-8">
        <textarea class="form-control" name="comment"></textarea>
      </div>
    </div>

    <!--Bawal siya sa current -->
    <div  class="form-group row" >
      <label class="col-sm-2 control-label">Resume:</label>
      <div class="col-sm-8">
        <input type="file" name="resume_file">
      </div>
    </div>

    <!-- <div class="form-group">
      <label class="col-sm-2 control-label">Image:</label>
      <div class="col-sm-8">
        <input type="file" name="image_file">
      </div>
    </div> -->

    <div class="form-group row">
      <div class="col-sm-8 offset-sm-2">
      `<input class="btn custom-button float-right" type="button" id="btn_aplcancel" value="Cancel"/>
        <input class="btn custom-button float-right" type="submit" value="Create"/>
      </div> 
    </div>

  </form>
</div>
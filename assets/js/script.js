$(document).ready(function(){
  $("div.tab-menu>div.list-group>a").click(function(e){
    e.preventDefault();
    $(this).siblings('a.active').removeClass("active");
    $(this).addClass("active");
    var index = $(this).index();
    $("div.tab>div.tab-content").removeClass("active");
    $("div.tab>div.tab-content").eq(index).addClass("active");
  });
});

$(document).ready(function(){
    $('#pos-id').on('change', function() {
      var status = document.getElementById("current_status")
      if(this.value == '1'){
        $("#emp_form").show();

      }
      else if( this.value == '2')
      {
        $("#emp_form").hide();
      }

    });
});

//add new record
$(document).ready(function(){
  $("#add-record-form").on('submit',function(e){
    var form = new FormData(document.getElementById("add-record-form"));
    $.ajax({
      url: base_url + 'applicant/addRecord',
      type: "POST",
      processData: false, // tell jQuery not to process the data
      contentType: false, // tell jQuery not to set contentType
      data:form,
      success: function(data){
        console.log(data);
        var result = JSON.parse(data);
        if(result==='success'){
          alert('pasok');
        }else{
          alert('hindi pasok');
        }
      }
    })
    e.preventDefault();
  })
})

$(document).ready(function(){
  $("#pos-id").on('change', function(){
    var posid = $("#pos-id").val();
    $.ajax({
      url: base_url + "applicant/get_pos_role/" +posid,
      type: "POST",
      data: $("#pos-id").serialize(),//for now
      success: function(data){
        // alert("Hello");
        var result = JSON.parse(data);
        var html = "",roles;
        for(var i = 0; i < result.length; i++) {
          roles = result[i];

          html += '<option value="'+roles.id+'"> '+roles.name+' </option> '
          // console.log(roles.id);
        }
        $("#role").html(html);

        // $("#role").val(result.name); //nosure
        // var id = data[]['id'];
        // var name = data[]['name'];
        // console.log(id);
        // console.log(data['','name']);
        // $("#role").html("<option value="+'id'+">asdadsad</option>"); //not best way (try)
        // "<option value='1'>NAME</option>"
      }
    });
  });
});

$(function() {
  $("#add-role-form").on('submit', function(e){
    e.preventDefault();

    $.ajax({
      url: base_url + "insert_role",
      type: 'POST',
      data: $('#add-role-form').serialize(),
      success: function(data){
        alert("Oks na!");
      }
    });
  });
});

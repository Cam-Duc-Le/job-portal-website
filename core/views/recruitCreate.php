<link rel="stylesheet" href="./Template/recruitCreate.css">

<div class="container">
  <h1 class="py-2" style="text-align: center;">Recruit</h2>
    <h2 style="text-align: center;">Enter your requirements</h2>
    <form class="form-horizontal jd-form shadow" action="recruit/create" method="post" onsubmit=transfer()>
      <label class="control-label col-sm-6">Your company's name</label></br>
      <input type="text" class="form-control" name="companyname" id="companyname"></br>

      <label class="control-label col-sm-6">Job title/position</label></br>
      <input type="text" class="form-control" placeholder="Engineer, tester..." name="title" id="title"></br>

      <label class="control-label col-sm-6">Years of experience</label></br>
      <input type="text" class="form-control" placeholder="Years of experience" name="expyear" id="expyear"></br>

      <label class="control-label col-sm-6">Salary offered</label></br>
      <input type="text" class="form-control" placeholder="Salary" name="salary" id='salary'></br>


      <label>Describe the job and benefits in details</label>
      <div class="form-group">
        <textarea id="editor"></textarea>
      </div>
      </br>

      <input type="text" class="form-control" name="jobdes" id='jobdes' hidden="true">
      </br>
      <div class="submit-btn">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
</div>

<script>
  function transfer() {
    document.getElementById("jobdes").value = tinymce.get('editor').getContent();
    return true;
  }
</script>
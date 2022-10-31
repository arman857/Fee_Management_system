
<html>
    <title>form</title>
    <head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">


    <body>
      
<form class="row g-3 needs-validation " novalidate>
  <div><h2 class="text-center text-warning"> Validation-form<h2></div>
    <div class="col-md-4 offset-4">
      <label for="validationCustom01" class="form-label text-primary">User Name</label>
      <input type="text" class="form-control" id="validationCustom01" required>
      <div class="valid-feedback">
        Done Complet User Name!
      </div>
      <div class="invalid-feedback">
        Please Fill the User Name.
      </div>
    </div>
    <div class="col-md-4 offset-4">
      <label for="validationCustom02" class="form-label text-primary">Password</label>
      <input type="text" class="form-control" id="validationCustom02" required>
      <div class="valid-feedback">
        Done Complet Password !
      </div>
      <div class="invalid-feedback">
        Please Fill the Password.
      </div>
    </div>
    <div class="col-md-4 offset-4">
      <label for="validationCustomUsername" class="form-label text-primary">ConfirmPasswod</label>
      <div class="input-group has-validation">
        <span class="input-group-text" id="inputGroupPrepend">@</span>
        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend"
         required>
        <div class="invalid-feedback">
          Please Fill the ConfirmPassword.
        </div>
      </div>
    </div>
    <div class="col-md-4 offset-4">
      <label for="validationCustom03" class="form-label text-primary">City</label>
      <input type="text" class="form-control" id="validationCustom03" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
        <label class="form-check-label" for="invalidCheck">
          Agree to terms and conditions
        </label>
        <div class="invalid-feedback">
          You must agree before submitting.
        </div>
      </div>
    </div>
    <div class="col-12">
      <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
</div>
  </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js">
 </script>
 <script>
(() => {
  'use strict'
  const forms = document.querySelectorAll('.needs-validation')
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()

  </script>
</body>
</html>
<h3>Đăng ký hệ thống</h3>
<?php if (isset($error)): ?>
<div class="alert alert-error">
    <?php echo $error; ?>
</div>
<?php endif; ?>
<form id='form' class="form-horizontal" method="post" action="" onsubmit="return checkForm(this);">
  <div class="control-group">
    <label class="control-label" for="inputName">Fullname</label>
    <div class="controls">
      <input type="text" id="inputName" placeholder="Fullname" name="name" value="<?php echo (isset($postData) ? $postData['name'] : ''); ?>" />
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Email</label>
    <div class="controls">
      <input type="text" id="inputEmail" placeholder="Email" name="email" value="<?php echo (isset($postData) ? $postData['email'] : ''); ?>" />
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Password</label>
    <div class="controls">
      <input type="password" id="inputPassword" placeholder="Password" name="pwd1" />
    </div>
  </div>
   <div class="control-group">
    <label class="control-label" for="inputPassword">Retype Password</label>
    <div class="controls">
      <input type="password" id="inputPassword" placeholder="Retype password" name="pwd2" />
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-primary">Register</button>
    </div>
  </div>
</form>

<script type="text/javascript">

  function checkForm(form)
  {
    if(form.inputEmail.value == "") {
      alert("Error: Email cannot be blank!");
      form.username.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.inputEmail.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.username.focus();
      return false;
    }

    if(form.pwd1.value != "" && form.pwd1.value == form.pwd2.value) {
      if(form.pwd1.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.pwd1.focus();
        return false;
      }
      if(form.pwd1.value == form.username.value) {
        alert("Error: Password must be different from Username!");
        form.pwd1.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.pwd1.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.pwd1.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.pwd1.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.pwd1.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.pwd1.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        form.pwd1.focus();
        return false;
      }
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.pwd1.focus();
      return false;
    }

    alert("You entered a valid password: " + form.pwd1.value);
    return true;
  }

</script>
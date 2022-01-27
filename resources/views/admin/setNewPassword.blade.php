@include('sharedHeader')

<section class="user" id="pageContent">
    <div class="user_options-container">
      <div class="user_options-text">
        <div class="user_options-unregistered">
          <h2 class="user_unregistered-title">Reset Password</h2>
          <br>
          <a href="/" class="user_unregistered-signup">Home</a>
        </div>
      </div>
      <div class="user_options-forms" id="user_options-forms">
        <div class="user_forms-login">
          <h1 class="forms_title">Reset Password</h1>
            {!! csrf_field() !!}
            <fieldset class="forms_fieldset">
              <div class="forms_field">
                <input type="password" placeholder="Password" class="forms_field-input" id="pass_forget" name="pass_forget" required autofocus />
              </div>
              <div class="forms_field">
                <input type="password" placeholder="re-password" class="forms_field-input" id="repass_forget" name="repass_forget" required />
              </div>
            </fieldset>
            <div class="forms_buttons">

              <input type="submit" value="Confirm" class="forms_buttons-action" id="btn_reset_password">
              <a href="/adminAuth" class="forms_buttons-forgot">Back To Login</a>
            </div>
        </div>
      </div>
    </div>
  </section>
@include('sharedFooter')

@include('sharedHeader')
<section class="user" id="pageContent">
    <div class="user_options-container">
      <div class="user_options-text">
        <div class="user_options-unregistered">
          <h2 class="user_unregistered-title">This is Admin Login</h2>
          <br>
          <a href="/" class="user_unregistered-signup">Home</a>
        </div>
      </div>
      <div class="user_options-forms" id="user_options-forms">
        <div class="user_forms-login">
          <h1 class="forms_title">Login</h1>
          <form id="login_form" action="adminAuth" method="POST">
            {!! csrf_field() !!}
            <fieldset class="forms_fieldset">
              <div class="forms_field">
                <input type="text" placeholder="Email" class="forms_field-input" id="email" name="email" required autofocus />
              </div>
              <div class="forms_field">
                <input type="password" placeholder="Password" class="forms_field-input" id="password" name="password" required />
              </div>
            </fieldset>
            <div class="forms_buttons">
              <input type="submit" value="Log In" class="forms_buttons-action" id="btn_login">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
@include('sharedFooter')

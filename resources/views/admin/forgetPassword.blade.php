@include('sharedHeader')

<section class="user" id="pageContent">
    <div class="user_options-container">
      <div class="user_options-text">
        <div class="user_options-unregistered">
          <h2 class="user_unregistered-title">{{ __('trans.thisForgetPass') }}</h2>
          <br>
          <a href="/" class="user_unregistered-signup">{{ __('trans.homeDir') }}</a>
        </div>
      </div>
      <div class="user_options-forms" id="user_options-forms">
        <div class="user_forms-login">
          <h1 class="forms_title">{{ __('trans.forgetPassTitle') }}</h1>
            {!! csrf_field() !!}
            <fieldset class="forms_fieldset">
              <div class="forms_field">
                <input type="text" placeholder="Email" class="forms_field-input" id="email_for_forget_pass" name="email_for_forget_pass" required autofocus />
              </div>
            </fieldset>
            <div class="forms_buttons">

              <input type="submit" value="Send" class="forms_buttons-action" id="btn_forget_password">
              <a href="/adminAuth" class="forms_buttons-forgot">{{ __('trans.backToLogin') }}</a>
            </div>
        </div>
      </div>
    </div>
  </section>
@include('sharedFooter')

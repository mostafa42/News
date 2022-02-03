@include('sharedHeader')
<section class="user" id="pageContent">
    <div class="user_options-container">
        <div class="user_options-text">
            <div class="user_options-unregistered">
                <h2 class="user_unregistered-title">{{ __('trans.thisIsAdminLogin') }}</h2>
                <br>
                <a href="/" class="user_unregistered-signup">{{ __('trans.homeDir') }}</a>
            </div>
        </div>
        <div class="user_options-forms" id="user_options-forms">
            <div class="user_forms-login">

                <ul id="errors"> <!-- The Errors Will Appear here --> </ul>
                <br>
                <h1 class="forms_title">{{ __('trans.loginTitle') }}</h1>
                <form id="login_form" action="adminAuth" method="POST">
                    {!! csrf_field() !!}
                    <fieldset class="forms_fieldset">
                        <div class="forms_field">
                            <input type="text" placeholder="{{ __('trans.emailPlaceholder') }}"
                                class="forms_field-input" id="email" name="email" required autofocus />
                        </div>
                        <div class="forms_field">
                            <input type="password" placeholder="{{ __('trans.passwordPlacholder') }}"
                                class="forms_field-input" id="password" name="password" required />
                        </div>
                    </fieldset>
                    <div class="forms_buttons">
                        <input type="submit" value="{{ __('trans.loginTitle') }}" class="forms_buttons-action"
                            id="btn_login">
                        <a href="/forget_password" class="forms_buttons-forgot">{{ __('trans.forgetPassQuestion') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@include('sharedFooter')

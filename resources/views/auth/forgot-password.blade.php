<x-auth-layout>
    <div class="loader-wrapper">
        <div class="theme-loader">
            <div class="loader-p"></div>
        </div>
    </div>
    <!-- Loader ends-->
    <!-- error page start //-->
    <section>
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-12 p-0">
                    <x-viho::login-card>
                        <form id="frm_forget_password" method="POST" class="theme-form login-form" action="{{ route('password.email') }}">

                            <h6>{{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}</h6>
                                   <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            @csrf
                            <x-viho::form-group>
                                <x-viho::form.input-email name="email" id="email" required placeholder="Email" />
                            </x-viho::form-group>
                            <x-viho::link-button class="btn-primary btn-block" onclick="document.getElementById('frm_forget_password').submit();">{{ __('Email Password Reset Link') }}</x-viho::link-button>

                        </form>
                    </x-viho::login-card>
                </div>
            </div>
        </div>
    </section>
</x-auth-layout>

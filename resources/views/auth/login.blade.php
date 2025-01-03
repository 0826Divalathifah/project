<x-guest-layout>
    <div class="login-container">
        <div class="login-card">
            <h3 class="login-title">Login</h3>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="form-group">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="input-field" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="error-message" />
                </div>

                <!-- Password -->
                <div class="form-group mt-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="input-field" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="error-message" />
                </div>

                <!-- Remember Me -->
                <div class="form-group mt-4 flex items-center">
                    <label for="remember_me" class="flex items-center">
                        <input id="remember_me" type="checkbox" class="checkbox" name="remember">
                        <span class="remember-text ms-2">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <!-- Action Buttons -->
                <div class="form-group flex items-center justify-end mt-4">
                    <x-primary-button class="btn-login ms-3">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>

    <!-- Custom CSS -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #ececec, #f8f8f8);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            max-width: 500px;
            padding: 2rem;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .login-card {
            width: 100%;
        }

        .login-title {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: #6A5ACD;
            text-align: center;
        }

        .form-group {
            text-align: left;
            margin-bottom: 1rem;
        }

        .input-field {
            width: 100%;
            padding: 0.5rem;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }

        .input-field:focus {
            border-color: #6A5ACD;
            outline: none;
        }

        .checkbox {
            border: 1px solid #ccc;
        }

        .remember-text {
            font-size: 14px;
            color: #666;
        }

        .btn-login {
            background-color: #6A5ACD;
            color: white;
            padding: 0.75rem 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-login:hover {
            background-color: #483D8B;
        }

        .error-message {
            color: red;
            font-size: 12px;
        }
    </style>
</x-guest-layout>
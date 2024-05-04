<! this is forgot password page, will generate js error !>
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Reset Password') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form id="passwordResetForm" method="POST">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" id="resetPasswordButton">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('passwordResetForm').addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent the default form submission

                // Show the notification
                showNotification("The service is currently unavailable. Please try again later.");
            });
        });

        // Function to show a notification
        function showNotification(message) {
            // Create a new div element
            var notification = document.createElement('div');
            notification.className = 'alert alert-danger'; // Add classes for styling
            notification.setAttribute('role', 'alert');
            notification.textContent = message;

            // Append the notification to the document body
            document.body.appendChild(notification);

            // Remove the notification after a certain duration (5 seconds)
            setTimeout(function() {
                document.body.removeChild(notification);
            }, 5000); // Adjust the duration (in milliseconds)
        }
    </script>
@endsection

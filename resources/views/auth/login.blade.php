<x-guest-layout>






	<section class="container-fluid">
		<style>
			.loginpage2 img { width: 600px; margin-top: 20px; opacity: 70%;} 
			.loginpage22 { max-width: 420px;}

			@media (max-width: 768px) {
			.loginpage2 img { width: 600px; }
			.loginpage22 { }
			}
			.center {
              position: absolute;
              top: 45%;;
              left: 50%;
              transform: translate(-50%, -50%);
            } @media only screen and (max-width: 600px) {
                  .center { top: 30%; left: 50%;}
            }
		</style>
		<div class="row center">
			
			<div class="col loginpage22 animated slideInLeft">
				<div class="card-header border-0 shadow-lg" >
				  	<div class="row text-center">
						<div class="col">
							<a href="https://digitalsolutions.ltd" target="_blank">
								<img src="" class="img-circle py-3 animated flash delay-2s" width="250">
							</a>
							<h3 class="text-center pb-3 text-danger"> <strong> Admin Login </strong></h3>
						</div>
					</div>

						
					<form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                required autocomplete="current-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Remember Me -->


                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                    href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif

                            <x-primary-button class="ms-3">
                                {{ __('Log in') }}
                            </x-primary-button>
                        </div>
                    </form>
					<div class="col">
						<div class="row pt-3">
				  			<div class="col">
				  				<a href="" class="btn btn-sm btn-block btn-outline-warning rounded-0 border-0">Forget Password </a>
				  			</div>
				  		</div>
					</div>
				  		<hr>
				  	<div class="text-center">
				  		<p> Develop by__  <a href="http://www.fb.com/itmunnabd" target="_blank" >Ibrahim Sharif Munna</a> </p>
				  	</div>
				</div>
			</div>		
		</div>
	</section>



</x-guest-layout>>

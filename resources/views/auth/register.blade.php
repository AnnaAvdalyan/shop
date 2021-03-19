@extends('layouts.user-app')

@section('content')
 <main class="register">
     <form method="POST" action="{{ route('register') }}" class="register__form">
         @csrf
         <h2 class="title"> {{ __('Register') }} </h2>
         <div class="group bg-grey group-py-5">
             <input class="@error('fname') error @enderror" type="text" name="fname" placeholder="{{ __('Name') }}" value="{{ old('fname') }}" required autocomplete="fname" autofocus>
         </div>
         <div class="group bg-grey group-py-5">
             <input class="@error('lname') error @enderror" type="text" name="lname" placeholder="{{ __('Surname') }}" value="{{ old('lname') }}" required autocomplete="lname" autofocus>
         </div>
         <div class="group bg-grey group-py-5">
             <input class="@error('email') error @enderror" type="email" name="email" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required autocomplete="email" autofocus>
         </div>
         <div class="group bg-grey group-py-5">
             <input class="@error('password') error @enderror" type="password" name="password" placeholder="{{ __('Password') }}" value="{{ old('password') }}" required autocomplete="password" autofocus>
         </div>
         <div class="group bg-grey group-py-5">
             <input class="@error('password') error @enderror" type="password" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" value="{{ old('password') }}" required autocomplete="new-password">
         </div>
         <div class="group bg-grey group-py-5">
             <button type="submit">   {{ __('Register') }} </button>
         </div>
         <div class="border-text">
             <p class="text">
                 OR
             </p>
             <div></div>
         </div>
         <a href="{{ route('login') }}"> Login</a>
     </form>
 </main>


@endsection

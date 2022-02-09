<x-main-layout>
   <div class="min-h-full flex flex-col justify-center py-12 sm:px-6 lg:px-8">
      <div class="sm:mx-auto sm:w-full sm:max-w-md">
         <h2 class="mt-6 text-center text-3xl font-extrabold text-sky-500">
            Sign in to your account
         </h2>
      </div>

      <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-md">

         @if($errors->first('email'))
         <div class="text-center bg-rose-300 rounded mb-4 py-2 ">
            {{ $errors->first('email') }}
         </div>
         @endif

         <div class="bg-white pb-6 pt-4 px-4 shadow sm:rounded-lg sm:px-10 border border-slate-100">
            <form class="space-y-4" action="{{ route('login') }}" method="POST">
               @csrf
               <x-form.input id='email' type='email' label='Email address'/>
               <x-form.input id='password' type='password' label='Password'/>
               <div class="flex items-center justify-end">
                  <a href="{{ route('register') }}" class="text-sky-600 hover:text-sky-500">
                     Need an account?
                  </a>
               </div>
               <x-form.button text="Sign in"/>
            </form>
         </div>
      </div>
   </div>
</x-main-layout>
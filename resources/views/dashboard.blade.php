<x-app-layout>
    <!-- component -->

<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>
<section class="pt-16 bg-blueGray-50">
<form method="POST" action="{{ route('update.avatar') }}" enctype="multipart/form-data">
    @csrf
   
<div class="w-full lg:w-4/12 px-4 mx-auto">
  <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg mt-16">
    <div class="px-6">
      <div class="flex flex-wrap justify-center">
        <div class="w-full px-4 flex justify-center">
          <div >
            <img alt="..." src="/avatars/{{ Auth::user()->avatar }}"  class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px">
            <input id="avatar" type="file" name="avatar" value="{{ old('avatar') }}" required autocomplete="avatar">
          </div>
          <button type="submit" class="btn btn-primary">
            {{ __('Upload Profile') }}
        </button>
        </div> 
        <div class="w-full px-4 text-center mt-20">
          <div class="flex justify-center py-4 lg:pt-4 pt-8">
            <div class="mr-4 p-3 text-center">
              <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">
                22
              </span>
              <span class="text-sm text-blueGray-400">Friends</span>
            </div>
            <div class="mr-4 p-3 text-center">
              <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">
                10
              </span>
              <span class="text-sm text-blueGray-400">Photos</span>
            </div>
            <div class="lg:mr-4 p-3 text-center">
              <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">
                89
              </span>
              <span class="text-sm text-blueGray-400">Comments</span>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-12">
        <h3 class="text-xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2">
            {{ Auth::user()->name }}
        </h3>
        <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
          <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>
          Los Angeles, California
        </div>
        <div class="mb-2 text-blueGray-600 mt-10">
          <i class="fas fa-briefcase mr-2 text-lg text-blueGray-400"></i>
          Solution Manager - Creative Tim Officer
        </div>
        <div class="mb-2 text-blueGray-600">
          <i class="fas fa-university mr-2 text-lg text-blueGray-400"></i>
          University of Computer Science
        </div>
   </form>
      </div>
      <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
        <div class="flex flex-wrap justify-center">
            <form method="POST" action="{{ route('update.bio') }}" >
                @csrf
            <div class="w-full lg:w-9/12 px-4">

            <input type="text" name="biography" required autocomplete="biography">
            <p class="mb-4 text-lg leading-relaxed text-blueGray-700"> {{ Auth::user()->biography }}</p>
            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
            <a href="javascript:void(0);" class="font-normal text-pink-500">
              Show more
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</form>
</section>

</x-app-layout>



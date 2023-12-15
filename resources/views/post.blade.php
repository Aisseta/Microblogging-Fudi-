
<x-app-layout>
    <div class="col-span-1 lg:col-span-2 mb-4">
        <!-- Infos de l'utilisateur connecté -->
        <div class="bg-white p-4 rounded-md shadow-md mb-4">
            <!-- Avatar et informations de l'utilisateur -->
            <div class="flex items-center space-x-4">
                <img src="https://placekitten.com/40/40" alt="User Avatar" class="w-8 h-8 rounded-full">
                <div>
                    <span class="text-lg font-semibold">{{ Auth::user()->name }}</span>
                    <p class="text-black-800 text-sm" class="font-size:20PX;">Explorateur culinaire 🍜 | Amateur de saveurs du monde 🌎 | Créateur de délices dans ma cuisine 🍳 | En quête perpétuelle du plat parfait | Partagez vos recettes préférées avec moi! 📸 #FoodieLife #GourmetAdventures"</p>
                </div>
            </div>
        </div>

        <!-- Bouton pour créer un post -->
        <a href="{{ route('create') }}" style="background-color: #4299e1; color: #ffffff; font-weight: bold; padding-top: 0.5rem; padding-bottom: 0.5rem; padding-left: 1rem; margin-left:1rem; padding-right: 1rem; border-radius: 9999px;" onmouseover="this.style.backgroundColor='#1a365d'" onmouseout="this.style.backgroundColor='#4299e1' ">
            Ajouter un Post
        </a>
    </div>



    <div style="display: flex;
    flex-wrap: wrap;
    flex-direction: row;">
        

        @foreach($post as $post)
            <div class="bg-white p-4 rounded-lg shadow-md mb-4"  style="width:380px;
            heigth:380px;
            margin:10px;
            margin-left: 50px;" >
                <div class="h-screen overflow-y-scroll">
                    <div >
                        <div class="bg-white p-4 rounded-lg shadow-md mx-auto"  >
                            <!-- User Info with Three-Dot Menu -->
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center space-x-2">
                                    <img src="https://placekitten.com/40/40" alt="User Avatar" class="w-8 h-8 rounded-full">
                                    <div>
                                        <p class="text-gray-800 font-semibold">{{ $post->user->name }}</p>
                                        <p class="text-gray-500 text-sm">{{ $post->created_at->format('F j, Y') }}</p>
                                    </div>
                                </div>
                                <div class="text-gray-500 cursor-pointer">
                                    <!-- Three-dot menu icon -->
                                    <button class="hover:bg-gray-50 rounded-full p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="7" r="1" />
                                            <circle cx="12" cy="12" r="1" />
                                            <circle cx="12" cy="17" r="1" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <!-- Message -->
                            <div class="mb-4" style="display:flex;
                            flex-wrap:wrap;
                            flex-direction:row;" >
                                <h1 class="text-gray-800 text-lg font-semibold"><a href="{{ route('post.show', ['post' => $post->id])}}">{{ $post->title }} </a></h1>
                                <p class="text-gray-500">{{ $post->caption }}<a href="" class="text-blue-600">#Fudies</a>
                                    <a href="" class="text-blue-600">#Yummy</a>
                                </p>
                            </div>
                            <!-- Image -->
                            <div class="mb-4">
                                <img src="{{ asset('storage/images/' . $post->image) }}"  alt="Post Image" class="w-full h-56 object-cover rounded-md">
                            </div>
                            <!-- Like and Comment Section -->
                            <div class="flex items-center justify-between text-gray-500">
                                <div class="flex items-center space-x-2">
                                    <button class="flex justify-center items-center gap-2 px-2 hover:bg-gray-50 rounded-full p-1">
                                        <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path d="M12 21.35l-1.45-1.32C6.11 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-4.11 6.86-8.55 11.54L12 21.35z" />
                                        </svg>
                                        {{ $post->likers()->count() }} 
                                    </button>
                                </div>
                                <button class="flex justify-center items-center gap-2 px-2 hover:bg-gray-50 rounded-full p-1">
                                    <svg width="22px" height="22px" viewBox="0 0 24 24" class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 13.5997 2.37562 15.1116 3.04346 16.4525C3.22094 16.8088 3.28001 17.2161 3.17712 17.6006L2.58151 19.8267C2.32295 20.793 3.20701 21.677 4.17335 21.4185L6

.39939 20.8229C6.78393 20.72 7.19121 20.7791 7.54753 20.9565C8.88837 21.6244 10.4003 22 12 22ZM8 13.25C7.58579 13.25 7.25 13.5858 7.25 14C7.25 14.4142 7.58579 14.75 8 14.75H13.5C13.9142 14.75 14.25 14.4142 14.25 14C14.25 13.5858 13.9142 13.25 13.5 13.25H8ZM7.25 10.5C7.25 10.0858 7.58579 9.75 8 9.75H16C16.4142 9.75 16.75 10.0858 16.75 10.5C16.75 10.9142 16.4142 11.25 16 11.25H8C7.58579 11.25 7.25 10.9142 7.25 10.5Z"></path>
                                        </g>
                                    </svg>
                                    <span>3 Comment</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>

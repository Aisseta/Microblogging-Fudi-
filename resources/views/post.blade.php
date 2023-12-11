<!-- component -->

<x-app-layout>

	<style>

        * {
            font-family: "Alegreya Sans", sans-serif;
        }

        .posts {
            position: relative;
            z-index: 99;
        }
        .posts .post .user {
            display: flex;
            align-items: center;
            padding: 10px 0px;
            margin: 0px 10px;
            border-bottom: 1px solid #eee;
        }
        .posts .post .user img {
            width: 12%;
            border-radius: 100%;
        }

        .posts .post .user h4 {
            margin: 0 0 0 10px;
            color: #777;
        }
        .posts .post .user .user-info p {
            margin: 0 0 0 10px;
            color: #ddd;
            font-size: 12px;
        }
        .posts .post {
        margin: 10px 10px;
        padding: 0px;
        background: white;
        }
        .posts .post.post-img .post-info {
        display: flex;
        }
        .posts .post .post-info p {
            font-size: 15px;
            color: #555;
            margin: 0px;
        }

        .posts .post .count ul {
            margin: 0 10px;
            padding: 5px 0 10px;
            list-style: none;
            display: flex;
        }
        .posts .post .count li {
        margin-right: 15px;
        }

        .posts .post .count a.liked {
        color: #ff676b;
        }

        .posts .post .count a {
            text-decoration: none;
            color: #ccc;
            font-size: 14px;
        }
        .posts .post .count a.likes::before {
        content: "\f004";
        }
        .posts .post .count a::before {
            content: "";
            font-family: FontAwesome;
            margin-right: 3px;
        }
        .posts .post .count a.comments::before {
            content: "\f075";
        }
        .posts .post .count a.shares::before {
            content: "\f064";
        }
        .posts .post .user-actions {
            margin: 0;
            padding: 0;
            list-style: none;
            display: flex;
            background: rgba(255, 255, 255, 1);
            border-top: 1px solid #eee;
        }

    </style>


@if (Route::has('create'))
		<form method="post" action="{{ route('post.create') }}">
		<a href="{{ route('post.create') }}" class="btn btn-primary btn-sm">Add Post</a>
		</form>
@endif

	@foreach($post as $post)

	<div class="iphone-6-container">
        <div class="header">
          <div class="search">
            <p>Search...</p>
          </div>
        </div>
        <div class="posts">
          <div class="post post-2 post-img">
            <div class="user">
              <img src="https://s3.amazonaws.com/uifaces/faces/twitter/adellecharles/128.jpg" alt="" />
              <div class="user-info">
                <h4>Sarah Liked 'Nature Productions' post</h4>
                <p>34 mins ago</p>
              </div>
            </div>
            <div class="post-info">
              <img src="https://unsplash.it/100/100?image=10" alt="Trees" />
              <h1><a href={{ $post->id }}>{{ $post->title }}</a></h1>
              <p>{{ $post->caption }}</p>
            </div>
            <div class="count">
              <ul>
                <li><a href="#" class="likes liked">108</a></li>
                <li><a href="#" class="comments">46</a></li>
                <li><a href="#" class="shares">10</a></li>
              </ul>
            </div>
            <div class="user-actions">
              <ul>
                <li><a href="#">Like</a></li>
                <li><a href="#">Comment</a></li>
                <li><a href="#">Share</a></li>
              </ul>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
	@endforeach
</x-app-layout> 

{{-- <x-app-layout>
	<div style="display flex; margin:0px; background-color:#FAFAFA;">
		<div style="height: 700px; width:430px;">
		</div>
		<div> 	
		</div>
	</div>
</x-app-layout> --}}


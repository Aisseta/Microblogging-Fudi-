<x-app-layout>
      
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap");
  
      body {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        font-family: "Roboto", sans-serif;
        background-color: #f0f0f0; /* Add your desired background color */
        margin: 0;
      }
  
      .wrapper {
        width: 100%;
        max-width: 800px; /* Set a maximum width as needed */
        background-color: #ffffff; /* Add your desired wrapper background color */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Add your desired box shadow */
        border-radius: 16px;
        margin: 20px;
        box-sizing: border-box;
      }
  
      .card {
        padding: 20px;
        border-radius: 16px;
        background-color: #ffffff; /* Add your desired background color */
        margin-bottom: 20px;
      }
  
      .card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 12px;
      }
  
      .user-info {
        display: flex;
        align-items: center;
      }
  
      .user-info a {
        margin-right: 12px;
      }
  
      .user-info img {
        border-radius: 50%;
        width: 48px;
        height: 48px;
        object-fit: cover;
      }
  
      .user-info .user-details {
        margin-left: 12px;
      }
  
      .user-details a {
        font-size: 18px;
        font-weight: bold;
        color: #333333; /* Add your desired text color */
        text-decoration: none;
      }
  
      .user-details p {
        color: #808080; /* Add your desired text color */
        margin: 0;
      }
  
      .post-title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 16px;
        color: #333333; /* Add your desired text color */
      }
  
      .single-image {
        border-radius: 8px;
        overflow: hidden;
        margin-bottom: 16px;
      }
  
      .single-image img {
        width: 100%;
        height: auto;
        border-radius: 8px;
      }
  
      .post-content {
        color: #666666; /* Add your desired text color */
        margin-bottom: 16px;
      }
  
      .likes-container {
        display: flex;
        align-items: center;
        margin-bottom: 16px;
      }
  
      .likes-container a {
        display: flex;
        align-items: center;
        text-decoration: none;
        color: #ff1493; /* Add your desired like icon color */
        font-weight: bold;
        font-size: 18px;
        margin-right: 8px;
      }
  
      .comment-input {
        display: flex;
        align-items: center;
        margin-bottom: 16px;
      }
  
      .comment-input input {
        flex: 1;
        padding: 10px;
        border-radius: 8px;
        border: 1px solid #dddddd; /* Add your desired input border color */
        background-color: #f5f5f5; /* Add your desired input background color */
        color: #333333; /* Add your desired input text color */
      }
  
      .comment-input button {
        padding: 10px;
        border-radius: 8px;
        border: none;
        background-color: #4caf50; /* Add your desired button background color */
        color: #ffffff; /* Add your desired button text color */
        cursor: pointer;
        margin-left: 8px;
      }
  
      .comments-section {
        padding-top: 16px;
        border-top: 1px solid #dddddd; /* Add your desired border color */
      }
  
      .comment {
        margin-bottom: 16px;
      }
  
      .comment-user-info {
        display: flex;
        align-items: center;
        margin-bottom: 8px;
      }
  
      .comment-user-info img {
        border-radius: 50%;
        width: 36px;
        height: 36px;
        object-fit: cover;
        margin-right: 8px;
      }
  
      .comment-user-info a {
        font-weight: bold;
        text-decoration: none;
        color: #333333; /* Add your desired comment user info color */
      }
  
      .comment-user-info span {
        color: #808080; /* Add your desired comment user info color */
      }
  
      .comment-text {
        color: #666666; /* Add your desired comment text color */
        margin-bottom: 8px;
      }
  
      .comment-actions {
        display: flex;
        align-items: center;
      }
  
      .comment-actions a {
        display: flex;
        align-items: center;
        text-decoration: none;
        color: #ff1493; /* Add your desired comment action color */
        font-weight: bold;
        font-size: 14px;
        margin-right: 8px;
      }
  
      .reply-button {
        padding: 8px;
        border-radius: 8px;
        border: none;
        background-color: #4caf50; /* Add your desired reply button color */
        color: #ffffff; /* Add your desired reply button text color */
        cursor: pointer;
      }
  
      .more-comments {
        text-align: center;
        margin-top: 16px;
      }
  
      .more-comments a {
        display: inline-block;
        padding: 10px 20px;
        border-radius: 8px;
        background-color: #4caf50; /* Add your desired more comments button color */
        color: #ffffff; /* Add your desired more comments button text color */
        text-decoration: none;
      }
  
      .footer {
        width: 100%;
        padding: 20px 0;
        background-color: #333333; /* Add your desired footer background color */
        color: #ffffff; /* Add your desired footer text color */
        text-align: center;
      }
  
      .footer p {
        margin: 0;
      }
    </style>
  </head>
  <body>
  
    <div class="wrapper">
  
      <div class="card">
        <div class="card-header">
          <div class="user-info">
            <a href="#">
              <img src="https://via.placeholder.com/50" alt="User Avatar">
            </a>
            <div class="user-details">
              <a href="#" class="username">{{ $onepost->user->name }}</a>
              <p class="timestamp">{{ $onepost->created_at->format('F j, Y') }}</p>
            </div>
          </div>
        </div>
        <h2 class="post-title">{{ $onepost->title }}</h2>
        <div class="single-image">
          <img src="{{ asset('storage/images/' . $onepost->image) }}" alt="Description">
        </div>
        <p class="post-content">
          {{ $onepost->caption }}
        </p>
        <div class="likes-container">
            <br/>
            <form method="post" action="{{ route('posts.like', ['post' => $onepost->id]) }}">
                @csrf
                
                <button type="submit" class="like-icon" > {{ $onepost->likers()->count() }}  Like</button>
            </form>
        </div>
        <form action="{{ route('post.delete', $onepost->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit">Supprimer le post</button>
      </form>

      <form method="post" action="{{ route('add.comment', ['post' => $onepost->id]) }}">
        @csrf
        <div class="comment-input">
          <input type="hidden" name="post_id" value="{{ $onepost->id }}">
          <input type="text" name="content" placeholder="Add a comment...">
          <button>Post</button>
        </div>
        <div class="comments-section">
          <div class="comment">
            <div class="comment-user-info">
              <a href="#">
                <img src="https://via.placeholder.com/36" alt="Commenter Avatar">
              </a>
              <div>
                <a href="#" class="comment-username">Commenter Name</a>
                <span class="comment-timestamp">1 hour ago</span>
              </div>
            </div>
            <p class="comment-text">The comment text goes here. You can add more comments as needed.</p>
            <div class="comment-actions">
              <a href="#" class="like-comment">Like</a>
              <a href="#" class="reply-button">Reply</a>
            </div>
          </div>
          <!-- More comments go here -->
        </div>
        </form>
      </div>
  
    </div>
  
  </body>
  
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Starten</title>  


      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


      <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- nav bar starts -->
    <nav >
        <div class="nav_logo-wrapper">
          <h4>Starten</h4>
        </div>

        <div class="Menu_options active">
        <i class='bx bx-home-alt-2'style="padding-right: 20px;"></i>
        <h2>Home</h2>
        </div>

        <div class="Menu_options">

        <i class='bx bx-search-alt-2'style="padding-right: 20px;" ></i>
        <h2>Explore</h2>
        </div>

        <div class="Menu_options">
        <i class='bx bx-chat' style="padding-right: 20px;"></i>
            <h2>Community</h2>
        </div>

        <div class="Menu_options">
        <i class='bx bx-bell' style="padding-right: 20px;"></i>
            <h2>Notification</h2>
        </div>

        <div class="Menu_options">
        <i class='bx bx-envelope'style="padding-right: 20px;" ></i>
            <h2>Messages</h2>
        </div>

        <div class="Menu_options">
        <i class='bx bx-face' style="padding-right: 20px;"></i>
            <h2>Bookmarks</h2>
        </div> 

        <div class="Menu_options">
        <i class='bx bx-happy-alt' style="padding-right: 20px;"></i>
            <h2>Profile</h2>
        </div> 

        <div class="Menu_options">
        <i class='bx bx-dots-vertical-rounded'></i>
            <h2>More</h2>
        </div> 

        <button class="tweet_btn">Tweet</button>


    </nav>
    <!-- nav bar end -->

  
    <!-- main section start -->
    <main>

        <div class="header">
            <h2>Home</h2>
        </div>

        <div class="tweet_box">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="tweet_box-input">
                    <textarea rows="9" cols="70" name="post-text" id="post-text" placeholder="What's happening?"></textarea>
                    <button type="submit">Tweet</button>
                </div>
            </form>

            <!-- Display posts -->
            <div id="posts-container">
            <?php
            // Process form submission
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $text = $_POST["post-text"];

                // Simple validation
                if (empty($text)) {
                    echo "<p>Please enter a message.</p>";
                } else {
                    // Simulate saving to a database (you would typically use a database here)
                    // For simplicity, we'll save to a text file
                    $file = 'posts.txt';
                    $currentPosts = file_get_contents($file);
                    $newPost = "<div class='post'><p>$text</p></div>\n";
                    file_put_contents($file, $newPost . $currentPosts);
                }
            }

            // Simulate retrieving posts from a database (you would typically use a database here)
            // For simplicity, we'll read from a text file
            $file = 'posts.txt';
            if (file_exists($file)) {
                $posts = file_get_contents($file);
                echo $posts;
            }
            ?>
               



            </div>
        </div>
    </main>

    
    <!-- main section end -->

    <!-- aside element start -->
    <aside>

        <div class="aside_input">
        <i class='bx bx-search-alt-2'style="padding-right: 20px;" ></i>
            <input type="text" placeholder="Search Starten">
 
        </div>

        <div class="aside_container">
            DSW Project

        </div>
        
    </aside>
    <!-- aside element ends -->

    
</body>
</html>

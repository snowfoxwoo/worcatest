# worcatest

<p>
This is a simple Blogging application built to run in Apache Server using PHP7.4.

It consists only of the index (index.php) which uses ajax to retrieve data from the get_posts (get_posts.php) script.

When the submit button is pressed, the posted data is updated to session in add_post (add_posts.php).

The software is written in a hurry, my apologies if there are unforgivable bugs or bad practices observed in this submission.

Update 3/6/2024: I was a little uncomfortable using sessions as the simulation for storing the blog posts, and I tried to incorporate postgres through docker-compose. However, the attempt turns out to be quite time consuming. The postgres.php is made as a test script for connecting to the docker database and is only available in this branch.

</p>
<p>
This PHP application is best deployed using Docker with PHP7.4.

Before reviewing the application, please install Docker for best results. It is also assumed that git is installed.
</p>

<p>
<b>Step 1: Navigate to a working folder on your machine and clone the public repository using git.</b>

<pre>
git clone https://github.com/snowfoxwoo/worcatest.git
</pre>
</p>

<p>
<b>Step 2: Build the docker image</b>

<pre>
docker-compose build --no-cache
</pre>
</p>

<p>
<b>Step 3: Start the docker image<b>

<pre>
docker-compose up -d
</pre>
</p>

<p>
<b>Step 4: Open a browser and access the application</b>

The application can be accessed via the following url:
http://127.0.0.1:8000/

</p>
<p>
<b>Step 5: Review the application</b>

</p>
<p>
<b>Step 6(Optional): Stop the Docker container</b>

<pre>
docker-compose down
</pre>
</p>
# worcatest

This PHP application is best deployed using Docker with PHP7.4.

Before reviewing the application, please install Docker for best results. It is also assumed that git is installed.

<b>Step 1: Navigate to a working folder on your machine and clone the public repository using git.</b>

<pre>
git clone https://github.com/snowfoxwoo/worcatest.git
</pre>

<b>Step 2: Build the docker image</b>

<pre>
docker-compose build --no-cache
</pre>

<b>Step 3: Start the docker image<b>

<pre>
docker-compose up -d
</pre>

<b>Step 4: Open a browser and access the application</b>

The application can be accessed via the following url:
http://127.0.0.1:8000/

<b>Step 5: Review the application</b>

<b>Step 6(Optional): Stop the Docker container</b>

<pre>
docker-compose down
</pre>
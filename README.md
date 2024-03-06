# worcatest

This PHP application is best deployed using Docker with PHP7.4.

Before reviewing the application, please install Docker for best results. It is also assumed that git is installed.

Step 1: Navigate to a working folder on your machine and clone the public repository using git. 

git clone https://github.com/snowfoxwoo/worcatest.git

Step 2: Build the docker image

docker-compose build --no-cache

Step 3: Start the docker image

docker-compose up -d

Step 4: Open a browser and access the application

The application can be accessed via the following url:
http://127.0.0.1:8000/

Step 5: Review the application

Step 6(Optional): Stop the Docker container

docker-compose down
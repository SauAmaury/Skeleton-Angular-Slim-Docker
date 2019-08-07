# Skeleton including Angular + Slim (PHP) with a functional Docker (Quick Setup)

This is a simple skeleton that I use to build new WEB app in my company

It's very easy to setup and you can start coding in less than 5 minutes

## How to make it work

Just initialize Angular in the /Frontend directory, to do so just read the little guide (setup_angular.txt) in this folder

After that you can launch your project with :

`docker-compose up`

And navigate to:

http://localhost (For Angular)

http://localhost:8080 (For Slim)
http://localhost:8080/info will show you the function phpinfo() output 

### Info About Slim

Slim is at 4.0 version, and was installed by composer.
In this project composer use the psr-4 autoload method.
So, if you add new classes to your Slim project mare sure to have composer installed on your device, so yo can run :

`composer dump-autoload -o`

### Issues which might appear

As we are running Slim on a different server from Angular, you can encounter CORS Error while making query from Angulaur to Slim

This article should help you  : 

https://medium.com/@dtkatz/3-ways-to-fix-the-cors-error-and-how-access-control-allow-origin-works-d97d55946d9

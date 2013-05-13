Cuckoo updates your Twitter avatar based on the time of day. 

# Getting Started
1. Edit _config.php_.
2. Replace _1.png_ up to _7.png_ with the avatars you want to use (1 being the earliest, 7 the latest).
3. Create a cron job to fetch index.php on an hourly basis.

 		0 * * * * curl http://yourdomain.com/cuckoo/ -s
    
 
This uses Codebird https://github.com/mynetx/codebird-php to update Twitter and the Weather Underground API.
# BiliPlus

*BiliPlus* is a Bilibili API Helper site based on PHP.

It can provide you with Bilibili video play&amp;download, hot list&amp;bangumi list, video&amp;special search and other functions based on Open API and some other interfaces of Bilibili.

## License

Copyright (c) 2014 TundraWork, under the 
[GNU General Public License, version 2 (GPL-2.0)](http://opensource.org/licenses/GPL-2.0).

## Support

We are now working on a new project and, our update on this project can be very slow.

However, please feel free to submit any BUGs.

## System Require

1. PHP 5.3 or higher
2. MySQL Server of any version
3. A Domain with SSL support(HTTPS protocol)

## Install&amp;Config

0. PLEASE NOTE : Duo to the data distribution problem of bilibili CDN server, servers in many areas CAN NOT get the correct API/Interface data, so you should choose servers in a good network environment, good luck!
1. We recommend you to use a empty MySQL database and run BiliPlus in a new web server.
2. Edit "/task/mysql.php" and add your MySQL server info so that we can connent to your database.
3. Copy all files to your web server's root document directory.
4. Run "/task/install.php" to set up databanse.
5. Run "/task/createlist.php" to create data cache for some video lists.
6. Run "/task/getlist.php" to update cache data of the video lists.
7. Create a Cron task for "/task/getlist.php", we recommend you to run it every one hour.
8. (optional) For security reasons, disable the visitor's access permission of "/task" directory.

## Wish you have a good time!
#!/bin/bash -e
##-------------------------------------------------------------------
## File : watermark.sh
## Author : filebat <filebat.mark@gmail.com>
## Description :
## --
## Created : <2014-06-11>
## Updated: Time-stamp: <2014-06-11 13:17:44>
##-------------------------------------------------------------------
source /etc/profile; (/var/www/html/wordpress2/tool/crontab_git_pull.sh 2>&1)
cd /var/www/html/wordpress2
git add wp-content/uploads/denny/
git commit -am "add picture"
git push
cd /var/www/html/wordpress
git pull
## File : watermark.sh ends

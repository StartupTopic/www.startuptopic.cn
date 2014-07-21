#!/bin/sh
##-------------------------------------------------------------------
## @copyright 2013 UnitedStack Co,.Ltd
## File : crontab_git_pull.sh
## Author : filebat <markfilebat@126.com>
## Description :
## --
## Created : <2013-09-05>
## Updated: Time-stamp: <2014-06-03 21:38:29>
##-------------------------------------------------------------------
# */10 * * * * source /etc/profile; (/var/www/html/wordpress2/tool/crontab_git_pull.sh 2>&1) 1>> /tmp/crontab_git_pull.log

function log()
{
    local msg=${1?}
    echo -ne `date +['%Y-%m-%d %H:%M:%S']`" $msg\n"
}

function update_git()
{
    dir=${1?}
    log "git pull $dir"
    cd $dir && git pull
}

basedir=$(dirname $0)
update_git $basedir

# Add watermark to pictures
cd $basedir/../wp-content/uploads/denny
for f in `ls origin/*`; do composite -dissolve 50% -gravity southeast -quality 100 watermark.png $f $(basename $f); done

## File : crontab_git_pull.sh ends

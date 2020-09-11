#!/bin/sh
# v1.0
datestamp=`date +'%Y-%m-%d'`
whatp='/home/hostXXXXX/'
whatf='project_1'
log="./log_c.txt"

echo `date '+%Y-%m-%d %H:%M:%S'`" start sync" >> $log
rsync --progress --delete -aogvze "ssh -p 1024" hostXXXXX@yy.yy.yy.yy:$whatp

##:$whatp$whatf ./

## echo `date '+%Y-%m-%d %H:%M:%S'`" start tgz" >> $log
## tar -czf ./$datestamp-$whatf.tgz ./$whatf
## echo `date '+%Y-%m-%d %H:%M:%S'`" end" >> $log
echo "===================================" >> $log

exit 0


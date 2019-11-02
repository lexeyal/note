http://www.ubnt.su/FAQ/unifi/unifi-udalit-starye-dannye-umenshit-razmer-bd.htm
Скрипт

   // keep N-day worth of data
   days=30;
   dryrun=true;

   use ace;
   collectionNames = db.getCollectionNames();
   for (i=0; i < collectionNames.length; i++) {
            name = collectionNames[i];
            query = null;
            if (name.indexOf('stat')==0 || name.indexOf('event')==0 || name.indexOf('alarm')==0) {
                query = {time: {$lt:new Date().getTime()-days*86400*1000}};
            }
            if (name.indexOf('session')==0) {
                query = {assoc_time: {$lt:new Date().getTime()/1000-days*86400}};
            }
            if (name.indexOf('user')==0) {
                query = {last_seen: {$lt:new Date().getTime()/1000-days*86400}};
            }
            if (query) {
                count = db.getCollection(name).find(query).count();
                print((dryrun ? "[dryrun] " : "") + "pruning " + count + " entries from " + name + "... ");
                if (!dryrun)
                 db.getCollection(name).remove(query);
            }
   }
   if (!dryrun) db.repairDatabase();

Убедитесь, что скрипт верный перед тем, как выполнить следующую команду:

   mongo --port=27117 < prune.js           

По умолчанию, MongoDB находится в режиме 'dryrun' и сообщит о том, что сделала. 
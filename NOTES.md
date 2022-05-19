

```
DROP SCHEMA public CASCADE;
CREATE SCHEMA public;
GRANT ALL ON SCHEMA public TO public;
```

aggiungere questo al file dynamic.php dopo il charset 

```
'schemaMap' => [
'pgsql' => [
'class' => 'yii\db\pgsql\Schema',
'defaultSchema' => 'public'
]
],
```



find /var/www/localhost/htdocs/ -type f -path '*/migrations/*' -name '*.php' -exec sed -i "s/INT(1)/integer/g" {} +
find /var/www/localhost/htdocs/ -type f -path '*/migrations/*' -name '*.php' -exec sed -i "s/int(1)/integer/g" {} +
find /var/www/localhost/htdocs/ -type f -path '*/migrations/*' -name '*.php' -exec sed -i "s/INT(11)/integer/g" {} +
find /var/www/localhost/htdocs/ -type f -path '*/migrations/*' -name '*.php' -exec sed -i "s/int(11)/integer/g" {} +
find /var/www/localhost/htdocs/ -type f -path '*/migrations/*' -name '*.php' -exec sed -i "s/int(10)/integer/g" {} +
find /var/www/localhost/htdocs/ -type f -path '*/migrations/*' -name '*.php' -exec sed -i "s/int(4)/integer/g" {} +
find /var/www/localhost/htdocs/ -type f -path '*/migrations/*' -name '*.php' -exec sed -i "s/tinyinteger/smallint/g" {} +
find /var/www/localhost/htdocs/ -type f -path '*/migrations/*' -name '*.php' -exec sed -i "s/tinytext/text/g" {} +
find /var/www/localhost/htdocs/ -type f -path '*/migrations/*' -name '*.php' -exec sed -i "s/DATETIME/timestamp/g" {} +
find /var/www/localhost/htdocs/ -type f -path '*/migrations/*' -name '*.php' -exec sed -i "s/longblob/bytea/g" {} +


sed -i 's/`url`/url/g' /var/www/localhost/htdocs/protected/humhub/migrations/m131203_110444_oembed.php

cp /var/www/localhost/htdocs/protected/config/patches/m131023_165755_initial.php /var/www/localhost/htdocs/protected/humhub/migrations/m131023_165755_initial.php
cp /var/www/localhost/htdocs/protected/config/patches/m131213_165552_user_optimize.php /var/www/localhost/htdocs/protected/humhub/modules/user/migrations/m131213_165552_user_optimize.php
cp /var/www/localhost/htdocs/protected/config/patches/m140512_141414_i18n_profilefields.php /var/www/localhost/htdocs/protected/humhub/modules/user/migrations/m140512_141414_i18n_profilefields.php
cp /var/www/localhost/htdocs/protected/config/patches/m140701_074404_protect_default_profilefields.php /var/www/localhost/htdocs/protected/humhub/modules/user/migrations/m140701_074404_protect_default_profilefields.php
cp /var/www/localhost/htdocs/protected/config/patches/m140901_080147_indizies.php /var/www/localhost/htdocs/protected/humhub/modules/like/migrations/m140901_080147_indizies.php
cp /var/www/localhost/htdocs/protected/config/patches/m140901_080432_indices.php /var/www/localhost/htdocs/protected/humhub/modules/file/migrations/m140901_080432_indices.php
cp /var/www/localhost/htdocs/protected/config/patches/m171025_200312_utf8mb4_fixes.php /var/www/localhost/htdocs/protected/humhub/modules/user/migrations/m171025_200312_utf8mb4_fixes.php
cp /var/www/localhost/htdocs/protected/config/patches/m131023_164513_initial.php /var/www/localhost/htdocs/protected/humhub/modules/user/migrations/m131023_164513_initial.php
cp /var/www/localhost/htdocs/protected/config/patches/m141015_173305_follow_notifications.php /var/www/localhost/htdocs/protected/humhub/migrations/m141015_173305_follow_notifications.php
cp /var/www/localhost/htdocs/protected/config/patches/m150429_223856_optimize.php /var/www/localhost/htdocs/protected/humhub/modules/notification/migrations/m150429_223856_optimize.php
cp /var/www/localhost/htdocs/protected/config/patches/m150910_223305_fix_user_follow.php /var/www/localhost/htdocs/protected/humhub/modules/user/migrations/m150910_223305_fix_user_follow.php
cp /var/www/localhost/htdocs/protected/config/patches/m151013_223814_include_dashboard.php /var/www/localhost/htdocs/protected/humhub/modules/space/migrations/m151013_223814_include_dashboard.php
cp /var/www/localhost/htdocs/protected/config/patches/m151223_171310_fix_notifications.php /var/www/localhost/htdocs/protected/humhub/modules/space/migrations/m151223_171310_fix_notifications.php
cp /var/www/localhost/htdocs/protected/config/patches/m160205_203840_foreign_keys.php /var/www/localhost/htdocs/protected/humhub/modules/user/migrations/m160205_203840_foreign_keys.php
cp /var/www/localhost/htdocs/protected/config/patches/m160205_203913_foreign_keys.php /var/www/localhost/htdocs/protected/humhub/modules/space/migrations/m160205_203913_foreign_keys.php
cp /var/www/localhost/htdocs/protected/config/patches/m160220_013525_contentcontainer_id.php /var/www/localhost/htdocs/protected/humhub/modules/content/migrations/m160220_013525_contentcontainer_id.php
cp /var/www/localhost/htdocs/protected/config/patches/m160229_162959_multiusergroups.php /var/www/localhost/htdocs/protected/humhub/modules/user/migrations/m160229_162959_multiusergroups.php
cp /var/www/localhost/htdocs/protected/config/patches/m160501_220850_activity_pk_int.php /var/www/localhost/htdocs/protected/humhub/modules/activity/migrations/m160501_220850_activity_pk_int.php
cp /var/www/localhost/htdocs/protected/config/patches/m170110_151419_membership_notifications.php /var/www/localhost/htdocs/protected/humhub/modules/space/migrations/m170110_151419_membership_notifications.php
cp /var/www/localhost/htdocs/protected/config/patches/m170111_190400_disable_web_notifications.php /var/www/localhost/htdocs/protected/humhub/modules/notification/migrations/m170111_190400_disable_web_notifications.php

cp /var/www/localhost/htdocs/protected/config/patches/m171025_142030_queue_update.php  /var/www/localhost/htdocs/protected/humhub/modules/queue/migrations/m171025_142030_queue_update.php
cp /var/www/localhost/htdocs/protected/config/patches/m171027_220519_exclusive_jobs.php  /var/www/localhost/htdocs/protected/humhub/modules/queue/migrations/m171027_220519_exclusive_jobs.php
cp /var/www/localhost/htdocs/protected/config/patches/m190211_133045_channel_length.php  /var/www/localhost/htdocs/protected/humhub/modules/queue/migrations/m190211_133045_channel_length.php

cp /var/www/localhost/htdocs/protected/config/patches/Migration.php /var/www/localhost/htdocs/protected/humhub/components/Migration.php
cp /var/www/localhost/htdocs/protected/config/patches/Birthday.php /var/www/localhost/htdocs/protected/humhub/modules/user/models/fieldtype/Birthday.php


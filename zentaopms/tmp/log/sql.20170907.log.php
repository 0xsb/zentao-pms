<?php
 die();
?>
20170907 15:59:38: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('admin','')

20170907 15:59:40: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 15:59:54: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('admin','')

20170907 15:59:57: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170907 16:00:01: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:00:06: /index.php?m=mail&f=edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:00:13: /index.php?m=mail&f=save
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'host',`value` = 'smtp.global-mail.cn'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'port',`value` = '25'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'auth',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'username',`value` = 'pms@chinanuoyi.cn'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'password',`value` = 'zt@36O1d!an#17'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'secure',`value` = ''
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'debug',`value` = '2'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'charset',`value` = 'utf-8'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'turnon',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'mta',`value` = 'smtp'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'async',`value` = '0'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromAddress',`value` = 'pms@chinanuoyi.cn'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromName',`value` = 'PMS'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'domain',`value` = 'https://pms.365edian.com'
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:00:14: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:00:17: /index.php?m=testcase&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('') AND  status  = 'active'
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `case` IN ('') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `case` IN ('') GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case` IN ('') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.`case`=t2.`id`  WHERE t1.`case` IN ('') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'qiuqingqiang'))  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:00:19: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('chenyang','')

20170907 16:00:19: /index.php?m=bug&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_bug` WHERE project IN ('3','2','1','0') AND  product  = '3' AND  status  != 'closed' AND  deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_bug` WHERE project IN ('3','2','1','0') AND  product  = '3' AND  status  != 'closed' AND  deleted  = '0' 
  SELECT * FROM `zt_bug` WHERE project IN ('3','2','1','0') AND  product  = '3' AND  status  != 'closed' AND  deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_bug` WHERE project IN ('3','2','1','0') AND  product  = '3' AND  status  != 'closed' AND  deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('') AND  status  = 'active'
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('3') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT id,CONCAT(title, " [", begin, " ~ ", end, "]") as title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','bug') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT t2.id, t2.name, t2.deleted FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.product  = '3' AND  t2.id IN ('3') ORDER BY t1.`project` desc 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('3') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('3') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','bug') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','bug') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:00:20: /index.php?m=branch&f=ajaxGetDropMenu&t=html&objectID=3&module=bug&method=browse&extra=
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 

20170907 16:00:22: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:00:23: /index.php?m=bug&f=view&bugID=6
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.*, t2.name AS projectName, t3.title AS storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion, t4.name AS taskName, t5.title AS planName FROM `zt_bug` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  LEFT JOIN `zt_task` AS t4  ON t1.task = t4.id  LEFT JOIN `zt_productplan` AS t5  ON t1.plan = t5.id  WHERE t1.id  = '6'
  SELECT id, title FROM `zt_case` WHERE `fromBug`  = '6'
  SELECT * FROM `zt_file` WHERE objectType  = 'bug' AND  objectID  = '6' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  UPDATE `zt_action` SET  `read` = '1' WHERE objectType  = 'bug' AND  objectID  = '6' AND  `read`  = '0'
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT path FROM `zt_module` WHERE id  = '15'
  SELECT * FROM `zt_module` WHERE id IN ('15') AND  deleted  = '0' ORDER BY `grade` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'bug' AND  objectID  = '6' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('187') ORDER BY `id` 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('3') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:00:26: /index.php?m=bug&f=confirmBug&bugID=6&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.*, t2.name AS projectName, t3.title AS storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion, t4.name AS taskName, t5.title AS planName FROM `zt_bug` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  LEFT JOIN `zt_task` AS t4  ON t1.task = t4.id  LEFT JOIN `zt_productplan` AS t5  ON t1.plan = t5.id  WHERE t1.id  = '6'
  SELECT id, title FROM `zt_case` WHERE `fromBug`  = '6'
  SELECT * FROM `zt_file` WHERE objectType  = 'bug' AND  objectID  = '6' AND  extra  != 'editor'
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, realname, deleted FROM `zt_user` WHERE account IN ('qiuqingqiang')
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'bug' AND  objectID  = '6' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('187') ORDER BY `id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:00:53: /index.php?m=bug&f=confirmBug&bugID=6&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.*, t2.name AS projectName, t3.title AS storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion, t4.name AS taskName, t5.title AS planName FROM `zt_bug` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  LEFT JOIN `zt_task` AS t4  ON t1.task = t4.id  LEFT JOIN `zt_productplan` AS t5  ON t1.plan = t5.id  WHERE t1.id  = '6'
  SELECT id, title FROM `zt_case` WHERE `fromBug`  = '6'
  SELECT * FROM `zt_file` WHERE objectType  = 'bug' AND  objectID  = '6' AND  extra  != 'editor'
  UPDATE `zt_bug` SET `assignedTo` = 'qiuqingqiang',`type` = 'codeerror',`pri` = '3',`mailto` = '',`confirmed` = '1',`lastEditedBy` = 'qiuqingqiang',`lastEditedDate` = '2017-09-07 16:00:53',`assignedDate` = '2017-09-07 16:00:53' WHERE id  = '6'
  SELECT product, project FROM `zt_bug` WHERE id  = '6'
  INSERT INTO `zt_action` SET `objectType` = 'bug',`objectID` = '6',`actor` = 'qiuqingqiang',`action` = 'bugconfirmed',`date` = '2017-09-07 16:00:53',`comment` = '已确认',`extra` = '',`product` = ',3,',`project` = '3'
  INSERT INTO `zt_history` SET `field` = 'pri',`old` = '0',`new` = '3',`diff` = '',`action` = '197'
  INSERT INTO `zt_history` SET `field` = 'confirmed',`old` = '0',`new` = '1',`diff` = '',`action` = '197'
  SELECT t1.*, t2.name AS projectName, t3.title AS storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion, t4.name AS taskName, t5.title AS planName FROM `zt_bug` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  LEFT JOIN `zt_task` AS t4  ON t1.task = t4.id  LEFT JOIN `zt_productplan` AS t5  ON t1.plan = t5.id  WHERE t1.id  = '6'
  SELECT id, title FROM `zt_case` WHERE `fromBug`  = '6'
  SELECT * FROM `zt_file` WHERE objectType  = 'bug' AND  objectID  = '6' AND  extra  != 'editor'
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_action` WHERE `id` = '197' 
  SELECT * FROM `zt_history` WHERE action IN ('197') ORDER BY `id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170907 16:00:53: /index.php?m=bug&f=view&bugID=6
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.*, t2.name AS projectName, t3.title AS storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion, t4.name AS taskName, t5.title AS planName FROM `zt_bug` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  LEFT JOIN `zt_task` AS t4  ON t1.task = t4.id  LEFT JOIN `zt_productplan` AS t5  ON t1.plan = t5.id  WHERE t1.id  = '6'
  SELECT id, title FROM `zt_case` WHERE `fromBug`  = '6'
  SELECT * FROM `zt_file` WHERE objectType  = 'bug' AND  objectID  = '6' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  UPDATE `zt_action` SET  `read` = '1' WHERE objectType  = 'bug' AND  objectID  = '6' AND  `read`  = '0'
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT path FROM `zt_module` WHERE id  = '15'
  SELECT * FROM `zt_module` WHERE id IN ('15') AND  deleted  = '0' ORDER BY `grade` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'bug' AND  objectID  = '6' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('187','197') ORDER BY `id` 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('3') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:01:07: /index.php?m=project&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT id, name FROM `zt_project` WHERE parent  = '3'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '3' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('153') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_block` WHERE account  = 'qiuqingqiang' AND  module  = 'project' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:01:07: /index.php?m=block&f=printBlock&id=112&module=project
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '112'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170907 16:01:07: /index.php?m=block&f=printBlock&id=113&module=project
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '113'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc  LIMIT 15 

20170907 16:01:08: /index.php?m=product&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_block` WHERE account  = 'qiuqingqiang' AND  module  = 'product' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:01:08: /index.php?m=block&f=printBlock&id=80&module=product
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '80'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-07 16:01:08' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170907 16:01:08: /index.php?m=block&f=printBlock&id=81&module=product
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '81'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170907 16:01:09: /index.php?m=my&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'qiuqingqiang' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:01:09: /index.php?m=block&f=printBlock&id=83&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '83'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' ORDER BY `order`,`id` desc 
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  lib IN ('6','5')
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-09-07' AND  date  < '2017-09-08' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), ((product =',0,' AND project = '0') OR project IN ('3') OR INSTR(',3,', product) > 0), '1=1')  AND  IF(objectType != 'doclib', '1=1', objectID IN ('6','5'))   ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, title AS name FROM `zt_bug` WHERE id IN ('6','5')
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('26','20','1','11','22','12','21','13','27')
  SELECT id, name AS name FROM `zt_task` WHERE id IN ('10','11','12')
  SELECT id, title AS name FROM `zt_story` WHERE id IN ('9','8')
  SELECT id, name AS name FROM `zt_project` WHERE id IN ('3')
  SELECT id, title AS name FROM `zt_productplan` WHERE id IN ('3','2')
  SELECT id, name AS name FROM `zt_product` WHERE id IN ('3')
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170907 16:01:09: /index.php?m=block&f=printBlock&id=82&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '82'

20170907 16:01:09: /index.php?m=block&f=printBlock&id=84&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '84'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170907 16:01:09: /index.php?m=block&f=printBlock&id=85&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '85'
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170907 16:01:09: /index.php?m=block&f=printBlock&id=86&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '86'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-07 16:01:09' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170907 16:01:09: /index.php?m=block&f=printBlock&id=87&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '87'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc  LIMIT 15 

20170907 16:01:09: /index.php?m=block&f=printBlock&id=88&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '88'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc  LIMIT 15 

20170907 16:01:10: /index.php?m=block&f=printBlock&id=89&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '89'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170907 16:01:10: /index.php?m=block&f=printBlock&id=90&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '90'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'qiuqingqiang' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170907 16:01:50: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('chenyang','')

20170907 16:02:08: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:02:19: /index.php?m=doc&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.* FROM `zt_doclib` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product=t2.id  WHERE t1.deleted  = '0' AND  t1.product  != '0' ORDER BY t2.`order` desc,t1.`order` asc,`id` desc 
  SELECT id,name,`order` FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc,`id` desc 
  SELECT t1.* FROM `zt_doclib` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project=t2.id  WHERE t1.deleted  = '0' AND  t1.project  != '0' ORDER BY t2.`order` desc,t1.`order` asc,`id` desc 
  SELECT id,name,`order` FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc,`id` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' AND  project  = '0' AND  product  = '0' ORDER BY `order`,`id` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' AND  product IN ('3') ORDER BY `order`,`id` 
  SELECT DISTINCT product FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project=t2.id  WHERE t1.product IN ('3') AND  t2.deleted  = '0'
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' AND  project IN ('3') ORDER BY `order`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:02:20: /index.php?m=report&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 16:02:20: /index.php?m=report&f=productSummary
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id, code, name, PO FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed'
  SELECT * FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-07'
  SELECT id,plan,product,status FROM `zt_story` WHERE deleted  = '0'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:02:22: /index.php?m=qa&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_block` WHERE account  = 'qiuqingqiang' AND  module  = 'qa' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:02:22: /index.php?m=block&f=printBlock&id=114&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '114'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc  LIMIT 15 

20170907 16:02:22: /index.php?m=block&f=printBlock&id=115&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '115'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'qiuqingqiang' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170907 16:02:22: /index.php?m=block&f=printBlock&id=116&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '116'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.*,t2.name as productName,t3.name as buildName,t4.name as projectName FROM `zt_testtask` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product=t2.id  LEFT JOIN `zt_build` AS t3  ON t1.build=t3.id  LEFT JOIN `zt_project` AS t4  ON t1.project=t4.id  LEFT JOIN `zt_projectproduct` AS t5  ON t1.project=t5.project  WHERE t1.deleted  = '0' AND  t1.product IN ('3') AND  t1.product = t5.product  AND  t1.status  = 'wait' ORDER BY t1.`id` desc  LIMIT 15 

20170907 16:02:23: /index.php?m=project&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT id, name FROM `zt_project` WHERE parent  = '3'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '3' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('153') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_block` WHERE account  = 'qiuqingqiang' AND  module  = 'project' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:02:23: /index.php?m=block&f=printBlock&id=113&module=project
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '113'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc  LIMIT 15 

20170907 16:02:23: /index.php?m=block&f=printBlock&id=112&module=project
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '112'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170907 16:02:23: /index.php?m=product&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_block` WHERE account  = 'qiuqingqiang' AND  module  = 'product' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:02:23: /index.php?m=block&f=printBlock&id=81&module=product
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '81'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170907 16:02:23: /index.php?m=block&f=printBlock&id=80&module=product
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '80'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-07 16:02:23' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170907 16:02:24: /index.php?m=my&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'qiuqingqiang' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:02:24: /index.php?m=block&f=printBlock&id=82&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '82'

20170907 16:02:24: /index.php?m=block&f=printBlock&id=83&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '83'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' ORDER BY `order`,`id` desc 
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  lib IN ('6','5')
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-09-07' AND  date  < '2017-09-08' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), ((product =',0,' AND project = '0') OR project IN ('3') OR INSTR(',3,', product) > 0), '1=1')  AND  IF(objectType != 'doclib', '1=1', objectID IN ('6','5'))   ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, title AS name FROM `zt_bug` WHERE id IN ('6','5')
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('26','20','1','11','22','12','21','13','27')
  SELECT id, name AS name FROM `zt_task` WHERE id IN ('10','11','12')
  SELECT id, title AS name FROM `zt_story` WHERE id IN ('9','8')
  SELECT id, name AS name FROM `zt_project` WHERE id IN ('3')
  SELECT id, title AS name FROM `zt_productplan` WHERE id IN ('3','2')
  SELECT id, name AS name FROM `zt_product` WHERE id IN ('3')
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170907 16:02:24: /index.php?m=block&f=printBlock&id=84&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '84'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170907 16:02:24: /index.php?m=block&f=printBlock&id=85&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '85'
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170907 16:02:24: /index.php?m=block&f=printBlock&id=86&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '86'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-07 16:02:24' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170907 16:02:24: /index.php?m=block&f=printBlock&id=87&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '87'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc  LIMIT 15 

20170907 16:02:24: /index.php?m=block&f=printBlock&id=89&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '89'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170907 16:02:24: /index.php?m=block&f=printBlock&id=88&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '88'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc  LIMIT 15 

20170907 16:02:24: /index.php?m=block&f=printBlock&id=90&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '90'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'qiuqingqiang' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170907 16:02:37: /index.php?m=block&f=delete&t=html&index=83&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  DELETE FROM `zt_block` WHERE `id`  = '83' AND  account  = 'qiuqingqiang' AND  module  = 'my'

20170907 16:02:39: /index.php?m=block&f=sort&t=html&orders=82,84,85,86,87,88,89,90&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'qiuqingqiang' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  REPLACE `zt_block` SET `id` = '82',`account` = 'qiuqingqiang',`module` = 'my',`title` = '流程图',`source` = '',`block` = 'flowchart',`params` = '',`order` = '0',`grid` = '8',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '84',`account` = 'qiuqingqiang',`module` = 'my',`title` = '进行中的项目',`source` = 'project',`block` = 'list',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}',`order` = '1',`grid` = '8',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '85',`account` = 'qiuqingqiang',`module` = 'my',`title` = '我的待办',`source` = 'todo',`block` = 'list',`params` = '{\"num\":\"20\"}',`order` = '2',`grid` = '4',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '86',`account` = 'qiuqingqiang',`module` = 'my',`title` = '未关闭的产品',`source` = 'product',`block` = 'list',`params` = '{\"num\":15,\"type\":\"noclosed\"}',`order` = '3',`grid` = '8',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '87',`account` = 'qiuqingqiang',`module` = 'my',`title` = '指派给我的任务',`source` = 'project',`block` = 'task',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}',`order` = '4',`grid` = '4',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '88',`account` = 'qiuqingqiang',`module` = 'my',`title` = '指派给我的Bug',`source` = 'qa',`block` = 'bug',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}',`order` = '5',`grid` = '4',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '89',`account` = 'qiuqingqiang',`module` = 'my',`title` = '指派给我的需求',`source` = 'product',`block` = 'story',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}',`order` = '6',`grid` = '4',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '90',`account` = 'qiuqingqiang',`module` = 'my',`title` = '指派给我的用例',`source` = 'qa',`block` = 'case',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assigntome\"}',`order` = '7',`grid` = '4',`height` = '0',`hidden` = '0'

20170907 16:02:51: /index.php?m=block&f=admin&id=0&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'qiuqingqiang' AND  module  = 'my' AND  hidden  = '1' ORDER BY `order` 
  SELECT * FROM `zt_block` WHERE id  = '0'

20170907 16:03:02: /index.php?m=block&f=sort&t=html&orders=84,82,85,86,87,88,89,90&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'qiuqingqiang' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  REPLACE `zt_block` SET `id` = '84',`account` = 'qiuqingqiang',`module` = 'my',`title` = '进行中的项目',`source` = 'project',`block` = 'list',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}',`order` = '0',`grid` = '8',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '82',`account` = 'qiuqingqiang',`module` = 'my',`title` = '流程图',`source` = '',`block` = 'flowchart',`params` = '',`order` = '1',`grid` = '8',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '85',`account` = 'qiuqingqiang',`module` = 'my',`title` = '我的待办',`source` = 'todo',`block` = 'list',`params` = '{\"num\":\"20\"}',`order` = '2',`grid` = '4',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '86',`account` = 'qiuqingqiang',`module` = 'my',`title` = '未关闭的产品',`source` = 'product',`block` = 'list',`params` = '{\"num\":15,\"type\":\"noclosed\"}',`order` = '3',`grid` = '8',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '87',`account` = 'qiuqingqiang',`module` = 'my',`title` = '指派给我的任务',`source` = 'project',`block` = 'task',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}',`order` = '4',`grid` = '4',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '88',`account` = 'qiuqingqiang',`module` = 'my',`title` = '指派给我的Bug',`source` = 'qa',`block` = 'bug',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}',`order` = '5',`grid` = '4',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '89',`account` = 'qiuqingqiang',`module` = 'my',`title` = '指派给我的需求',`source` = 'product',`block` = 'story',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}',`order` = '6',`grid` = '4',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '90',`account` = 'qiuqingqiang',`module` = 'my',`title` = '指派给我的用例',`source` = 'qa',`block` = 'case',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assigntome\"}',`order` = '7',`grid` = '4',`height` = '0',`hidden` = '0'

20170907 16:03:08: /index.php?m=block&f=sort&t=html&orders=84,85,82,86,87,88,89,90&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'qiuqingqiang' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  REPLACE `zt_block` SET `id` = '84',`account` = 'qiuqingqiang',`module` = 'my',`title` = '进行中的项目',`source` = 'project',`block` = 'list',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}',`order` = '0',`grid` = '8',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '85',`account` = 'qiuqingqiang',`module` = 'my',`title` = '我的待办',`source` = 'todo',`block` = 'list',`params` = '{\"num\":\"20\"}',`order` = '1',`grid` = '4',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '82',`account` = 'qiuqingqiang',`module` = 'my',`title` = '流程图',`source` = '',`block` = 'flowchart',`params` = '',`order` = '2',`grid` = '8',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '86',`account` = 'qiuqingqiang',`module` = 'my',`title` = '未关闭的产品',`source` = 'product',`block` = 'list',`params` = '{\"num\":15,\"type\":\"noclosed\"}',`order` = '3',`grid` = '8',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '87',`account` = 'qiuqingqiang',`module` = 'my',`title` = '指派给我的任务',`source` = 'project',`block` = 'task',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}',`order` = '4',`grid` = '4',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '88',`account` = 'qiuqingqiang',`module` = 'my',`title` = '指派给我的Bug',`source` = 'qa',`block` = 'bug',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}',`order` = '5',`grid` = '4',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '89',`account` = 'qiuqingqiang',`module` = 'my',`title` = '指派给我的需求',`source` = 'product',`block` = 'story',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}',`order` = '6',`grid` = '4',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '90',`account` = 'qiuqingqiang',`module` = 'my',`title` = '指派给我的用例',`source` = 'qa',`block` = 'case',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assigntome\"}',`order` = '7',`grid` = '4',`height` = '0',`hidden` = '0'

20170907 16:03:12: /index.php?m=block&f=sort&t=html&orders=85,82,84,86,87,88,89,90&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'qiuqingqiang' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  REPLACE `zt_block` SET `id` = '85',`account` = 'qiuqingqiang',`module` = 'my',`title` = '我的待办',`source` = 'todo',`block` = 'list',`params` = '{\"num\":\"20\"}',`order` = '0',`grid` = '4',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '82',`account` = 'qiuqingqiang',`module` = 'my',`title` = '流程图',`source` = '',`block` = 'flowchart',`params` = '',`order` = '1',`grid` = '8',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '84',`account` = 'qiuqingqiang',`module` = 'my',`title` = '进行中的项目',`source` = 'project',`block` = 'list',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}',`order` = '2',`grid` = '8',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '86',`account` = 'qiuqingqiang',`module` = 'my',`title` = '未关闭的产品',`source` = 'product',`block` = 'list',`params` = '{\"num\":15,\"type\":\"noclosed\"}',`order` = '3',`grid` = '8',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '87',`account` = 'qiuqingqiang',`module` = 'my',`title` = '指派给我的任务',`source` = 'project',`block` = 'task',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}',`order` = '4',`grid` = '4',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '88',`account` = 'qiuqingqiang',`module` = 'my',`title` = '指派给我的Bug',`source` = 'qa',`block` = 'bug',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}',`order` = '5',`grid` = '4',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '89',`account` = 'qiuqingqiang',`module` = 'my',`title` = '指派给我的需求',`source` = 'product',`block` = 'story',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}',`order` = '6',`grid` = '4',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '90',`account` = 'qiuqingqiang',`module` = 'my',`title` = '指派给我的用例',`source` = 'qa',`block` = 'case',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assigntome\"}',`order` = '7',`grid` = '4',`height` = '0',`hidden` = '0'

20170907 16:03:27: /index.php?m=block&f=sort&t=html&orders=85,82,84,87,86,88,89,90&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'qiuqingqiang' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  REPLACE `zt_block` SET `id` = '85',`account` = 'qiuqingqiang',`module` = 'my',`title` = '我的待办',`source` = 'todo',`block` = 'list',`params` = '{\"num\":\"20\"}',`order` = '0',`grid` = '4',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '82',`account` = 'qiuqingqiang',`module` = 'my',`title` = '流程图',`source` = '',`block` = 'flowchart',`params` = '',`order` = '1',`grid` = '8',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '84',`account` = 'qiuqingqiang',`module` = 'my',`title` = '进行中的项目',`source` = 'project',`block` = 'list',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}',`order` = '2',`grid` = '8',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '87',`account` = 'qiuqingqiang',`module` = 'my',`title` = '指派给我的任务',`source` = 'project',`block` = 'task',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}',`order` = '3',`grid` = '4',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '86',`account` = 'qiuqingqiang',`module` = 'my',`title` = '未关闭的产品',`source` = 'product',`block` = 'list',`params` = '{\"num\":15,\"type\":\"noclosed\"}',`order` = '4',`grid` = '8',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '88',`account` = 'qiuqingqiang',`module` = 'my',`title` = '指派给我的Bug',`source` = 'qa',`block` = 'bug',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}',`order` = '5',`grid` = '4',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '89',`account` = 'qiuqingqiang',`module` = 'my',`title` = '指派给我的需求',`source` = 'product',`block` = 'story',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}',`order` = '6',`grid` = '4',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '90',`account` = 'qiuqingqiang',`module` = 'my',`title` = '指派给我的用例',`source` = 'qa',`block` = 'case',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assigntome\"}',`order` = '7',`grid` = '4',`height` = '0',`hidden` = '0'

20170907 16:03:33: /index.php?m=mail&f=test
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 16:03:34: /index.php?m=user&f=login&referer=L2luZGV4LnBocD9tPW1haWwmZj10ZXN0
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:03:46: /index.php?m=my&f=todo
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '20170907' AND  date  <= '20170907' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '20170907' AND  date  <= '20170907' 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '20170907' AND  date  <= '20170907' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '20170907' AND  date  <= '20170907' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:03:46: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 16:03:46: /index.php?m=user&f=login&referer=L2luZGV4LnBocD9tPW1haWwmZj10ZXN0
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:03:47: /index.php?m=my&f=task
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'qiuqingqiang' 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:03:47: /index.php?m=my&f=todo
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '20170907' AND  date  <= '20170907' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '20170907' AND  date  <= '20170907' 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '20170907' AND  date  <= '20170907' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '20170907' AND  date  <= '20170907' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:03:48: /index.php?m=my&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'qiuqingqiang' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:03:48: /index.php?m=block&f=printBlock&id=85&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '85'
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170907 16:03:48: /index.php?m=block&f=printBlock&id=82&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '82'

20170907 16:03:48: /index.php?m=block&f=printBlock&id=84&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '84'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170907 16:03:48: /index.php?m=block&f=printBlock&id=86&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '86'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-07 16:03:48' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170907 16:03:48: /index.php?m=block&f=printBlock&id=87&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '87'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc  LIMIT 15 

20170907 16:03:48: /index.php?m=block&f=printBlock&id=88&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '88'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc  LIMIT 15 

20170907 16:03:48: /index.php?m=block&f=printBlock&id=89&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '89'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170907 16:03:48: /index.php?m=block&f=printBlock&id=90&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '90'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'qiuqingqiang' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170907 16:03:49: /index.php?m=my&f=todo
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '20170907' AND  date  <= '20170907' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '20170907' AND  date  <= '20170907' 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '20170907' AND  date  <= '20170907' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '20170907' AND  date  <= '20170907' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:03:50: /index.php?m=my&f=todo&date=lastWeek
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '2017-08-28 00:00:00' AND  date  <= '2017-09-03 23:59:59' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '2017-08-28 00:00:00' AND  date  <= '2017-09-03 23:59:59' 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '2017-08-28 00:00:00' AND  date  <= '2017-09-03 23:59:59' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '2017-08-28 00:00:00' AND  date  <= '2017-09-03 23:59:59' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:03:50: /index.php?m=my&f=todo&date=thisWeek
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '2017-09-04 00:00:00' AND  date  <= '2017-09-10 23:59:59' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '2017-09-04 00:00:00' AND  date  <= '2017-09-10 23:59:59' 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '2017-09-04 00:00:00' AND  date  <= '2017-09-10 23:59:59' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '2017-09-04 00:00:00' AND  date  <= '2017-09-10 23:59:59' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:03:51: /index.php?m=my&f=todo&date=thisMonth
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '2017-09-01 00:00:00' AND  date  <= '2017-10-00 23:59:59' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '2017-09-01 00:00:00' AND  date  <= '2017-10-00 23:59:59' 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '2017-09-01 00:00:00' AND  date  <= '2017-10-00 23:59:59' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '2017-09-01 00:00:00' AND  date  <= '2017-10-00 23:59:59' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:03:52: /index.php?m=my&f=todo&date=lastmonth
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '2017-08-01 00:00:00' AND  date  <= '2017-09-00 23:59:59' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '2017-08-01 00:00:00' AND  date  <= '2017-09-00 23:59:59' 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '2017-08-01 00:00:00' AND  date  <= '2017-09-00 23:59:59' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '2017-08-01 00:00:00' AND  date  <= '2017-09-00 23:59:59' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:03:52: /index.php?m=my&f=todo&date=thisSeason
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '2017-07-01 00:00:00' AND  date  <= '2017-09-30 23:59:59' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '2017-07-01 00:00:00' AND  date  <= '2017-09-30 23:59:59' 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '2017-07-01 00:00:00' AND  date  <= '2017-09-30 23:59:59' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '2017-07-01 00:00:00' AND  date  <= '2017-09-30 23:59:59' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:03:52: /index.php?m=my&f=todo&date=thisYear
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '2017-01-01 00:00:00' AND  date  <= '2017-12-31 23:59:59' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '2017-01-01 00:00:00' AND  date  <= '2017-12-31 23:59:59' 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '2017-01-01 00:00:00' AND  date  <= '2017-12-31 23:59:59' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '2017-01-01 00:00:00' AND  date  <= '2017-12-31 23:59:59' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:03:52: /index.php?m=user&f=login&referer=L2luZGV4LnBocD9tPW1haWwmZj10ZXN0
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'admin'
  SELECT * FROM `zt_user` WHERE account  = 'admin' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '125.70.29.117', `last` = '1504771432' WHERE account  = 'admin'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'admin'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'admin'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'admin'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'admin' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '1',`actor` = 'admin',`action` = 'login',`date` = '2017-09-07 16:03:52',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170907 16:03:52: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:03:54: /index.php?m=my&f=todo&date=future
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '2030-01-01' AND  date  <= '2030-01-01' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '2030-01-01' AND  date  <= '2030-01-01' 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '2030-01-01' AND  date  <= '2030-01-01' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '2030-01-01' AND  date  <= '2030-01-01' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:03:55: /index.php?m=my&f=todo&date=before&account=qiuqingqiang&status=undone
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2017-09-06' AND  status  != 'done' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2017-09-06' AND  status  != 'done' 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2017-09-06' AND  status  != 'done' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2017-09-06' AND  status  != 'done' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:03:55: /index.php?m=my&f=todo&date=before&account=qiuqingqiang&status=undone
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2017-09-06' AND  status  != 'done' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2017-09-06' AND  status  != 'done' 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2017-09-06' AND  status  != 'done' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2017-09-06' AND  status  != 'done' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:03:56: /index.php?m=my&f=todo&date=all
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:03:57: /index.php?m=mail&f=edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:04:07: /index.php?m=mail&f=save
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'host',`value` = 'smtp.global-mail.cn'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'port',`value` = '25'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'auth',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'username',`value` = 'pms@chinanuoyi.cn'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'password',`value` = 'zt@36O1d!an#17'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'secure',`value` = ''
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'debug',`value` = '2'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'charset',`value` = 'utf-8'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'turnon',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'mta',`value` = 'smtp'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'async',`value` = '0'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromAddress',`value` = 'pms@chinanuoyi.cn'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromName',`value` = 'PMS'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'domain',`value` = 'https://pms.365edian.com'
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:04:08: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:04:12: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('chenyang','')

20170907 16:04:13: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:04:15: /index.php?m=my&f=todo&date=all
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:04:18: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('MailTest','')

20170907 16:04:19: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:05:27: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:06:07: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170907 16:11:18: /index.php?m=mail&f=edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:11:20: /index.php?m=mail&f=reset
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  DELETE FROM `zt_config` WHERE module  = 'mail'

20170907 16:11:20: /index.php?m=mail&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:11:21: /index.php?m=mail&f=ztCloud
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:11:23: /index.php?m=mail&f=ztCloud
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 16:11:23: /index.php?m=admin&f=certifyZtEmail&email=Y2hlbnlhbmdAY2hpbmFudW95aS5jbg==
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:11:27: /index.php?m=admin&f=ajaxsendcode&type=email
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 16:12:13: /index.php?m=admin&f=ajaxsendcode&type=email
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 16:13:53: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 16:14:15: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 16:14:22: /index.php?m=admin&f=ajaxsendcode&type=email
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 16:16:08: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 16:17:22: /index.php?m=extension&f=browse
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_extension` WHERE status  = 'installed'
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:17:23: /index.php?m=mail&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:17:25: /index.php?m=mail&f=ztCloud
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 16:17:26: /index.php?m=admin&f=certifyZtEmail&email=Y2hlbnlhbmdAY2hpbmFudW95aS5jbg==
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:17:46: /index.php?m=admin&f=ajaxsendcode&type=email
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 16:18:11: /index.php?m=admin&f=ajaxsendcode&type=email
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 16:18:22: /index.php?m=admin&f=certifyZtEmail&email=Y2hlbnlhbmdAY2hpbmFudW95aS5jbg==
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 16:18:22: /index.php?m=mail&f=ztCloud
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 16:18:23: /index.php?m=admin&f=certifyZtMobile&mobile=
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:18:29: /index.php?m=admin&f=ajaxsendcode&type=mobile
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 16:19:26: /index.php?m=admin&f=certifyZtMobile&mobile=
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 16:19:27: /index.php?m=mail&f=ztCloud
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'ztcloud',`key` = 'secretKey',`value` = '0bXyqMf1HiegwlnRzA3rpG9WULkCSPtB'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromAddress',`value` = '501553705@qq.com'
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:20:06: /index.php?m=mail&f=ztCloud
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'turnon',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'mta',`value` = 'ztcloud'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'async',`value` = '0'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromAddress',`value` = '501553705@qq.com'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromName',`value` = 'EDianPMS'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'domain',`value` = 'https://pms.365edian.com'

20170907 16:20:06: /index.php?m=mail&f=ztCloud
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:20:08: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:20:12: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('chenyang','')

20170907 16:20:14: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:21:16: /index.php?m=mail&f=ztcloud
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:21:26: /index.php?m=mail&f=ztcloud
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'turnon',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'mta',`value` = 'ztcloud'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'async',`value` = '0'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromAddress',`value` = 'pms@chinanuoyi.cn'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromName',`value` = 'EDianPMS'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'domain',`value` = 'https://pms.365edian.com'

20170907 16:21:26: /index.php?m=mail&f=ztcloud
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:21:29: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:21:33: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('chenyang','')

20170907 16:21:34: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:22:32: /index.php?m=mail&f=ztcloud
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:22:35: /index.php?m=mail&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 16:22:35: /index.php?m=mail&f=ztcloud
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:22:59: /index.php?m=mail&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 16:22:59: /index.php?m=mail&f=ztcloud
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:23:19: /index.php?m=mail&f=reset
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  DELETE FROM `zt_config` WHERE module  = 'mail'

20170907 16:23:19: /index.php?m=mail&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:23:21: /index.php?m=mail&f=detect
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:23:24: /index.php?m=mail&f=detect
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 16:23:25: /index.php?m=mail&f=edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:23:53: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 16:24:16: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170907 16:24:20: /index.php?m=mail&f=save
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'host',`value` = 'smtp.global-mail.cn'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'port',`value` = '465'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'auth',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'username',`value` = 'pms@chinanuoyi.cn'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'password',`value` = 'zt@36O1d!an#17'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'secure',`value` = 'ssl'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'debug',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'charset',`value` = 'utf-8'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'turnon',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'mta',`value` = 'smtp'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'async',`value` = '0'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromAddress',`value` = 'pms@chinanuoyi.cn'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromName',`value` = 'EDianPMS'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'domain',`value` = 'https://pms.365edian.com'
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:24:22: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:24:26: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('chenyang','')

20170907 16:24:27: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:24:53: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('chenyang','')

20170907 16:24:54: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:24:57: /index.php?m=mail&f=edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:25:01: /index.php?m=user&f=login&referer=Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'shenguilin '
  SELECT * FROM `zt_user` WHERE account  = 'shenguilin ' AND  deleted  = '0'
  SELECT fails FROM `zt_user` WHERE account  = 'shenguilin '
  UPDATE `zt_user` SET  `fails` = '1', `locked` = '0000-00-00 00:00:00' WHERE account  = 'shenguilin '

20170907 16:25:28: /index.php?m=user&f=login&referer=Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'shenguilin '
  SELECT * FROM `zt_user` WHERE account  = 'shenguilin ' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '125.70.29.127', `last` = '1504772728' WHERE account  = 'shenguilin '
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'shenguilin '
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'shenguilin '
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'shenguilin '
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'shenguilin ' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '12',`actor` = 'shenguilin',`action` = 'login',`date` = '2017-09-07 16:25:28',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170907 16:25:28: /
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 16:25:28: /index.php?m=my&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'shenguilin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  REPLACE `zt_config` SET `owner` = 'shenguilin',`module` = 'my',`section` = 'common',`key` = 'blockInited',`value` = '1'
  REPLACE `zt_block` SET `title` = '流程图',`block` = 'flowchart',`grid` = '8',`source` = '',`order` = '1',`module` = 'my',`account` = 'shenguilin',`params` = ''
  REPLACE `zt_block` SET `title` = '最新动态',`block` = 'dynamic',`grid` = '4',`source` = '',`order` = '2',`module` = 'my',`account` = 'shenguilin',`params` = ''
  REPLACE `zt_block` SET `title` = '进行中的项目',`block` = 'list',`grid` = '8',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}',`source` = 'project',`order` = '3',`module` = 'my',`account` = 'shenguilin'
  REPLACE `zt_block` SET `title` = '我的待办',`block` = 'list',`grid` = '4',`source` = 'todo',`params` = '{\"num\":\"20\"}',`order` = '4',`module` = 'my',`account` = 'shenguilin'
  REPLACE `zt_block` SET `title` = '未关闭的产品',`block` = 'list',`grid` = '8',`params` = '{\"num\":15,\"type\":\"noclosed\"}',`source` = 'product',`order` = '5',`module` = 'my',`account` = 'shenguilin'
  REPLACE `zt_block` SET `title` = '指派给我的任务',`block` = 'task',`grid` = '4',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}',`source` = 'project',`order` = '6',`module` = 'my',`account` = 'shenguilin'
  REPLACE `zt_block` SET `title` = '指派给我的Bug',`block` = 'bug',`grid` = '4',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}',`source` = 'qa',`order` = '7',`module` = 'my',`account` = 'shenguilin'
  REPLACE `zt_block` SET `title` = '指派给我的需求',`block` = 'story',`grid` = '4',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}',`source` = 'product',`order` = '8',`module` = 'my',`account` = 'shenguilin'
  REPLACE `zt_block` SET `title` = '指派给我的用例',`block` = 'case',`grid` = '4',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assigntome\"}',`source` = 'qa',`order` = '9',`module` = 'my',`account` = 'shenguilin'

20170907 16:25:29: /index.php?m=my&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'shenguilin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:25:29: /index.php?m=block&f=printBlock&id=118&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '118'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' ORDER BY `order`,`id` desc 
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  lib IN ('6','5')
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-09-07' AND  date  < '2017-09-08' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), ((product =',0,' AND project = '0') OR project IN ('3') OR INSTR(',3,', product) > 0), '1=1')  AND  IF(objectType != 'doclib', '1=1', objectID IN ('6','5'))   ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('12','1','26','20','11','22','21','13','27')
  SELECT id, title AS name FROM `zt_bug` WHERE id IN ('6','5')
  SELECT id, name AS name FROM `zt_task` WHERE id IN ('10','11','12')
  SELECT id, title AS name FROM `zt_story` WHERE id IN ('9','8')
  SELECT id, name AS name FROM `zt_project` WHERE id IN ('3')
  SELECT id, title AS name FROM `zt_productplan` WHERE id IN ('3','2')
  SELECT id, name AS name FROM `zt_product` WHERE id IN ('3')
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170907 16:25:29: /index.php?m=block&f=printBlock&id=117&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '117'

20170907 16:25:29: /index.php?m=block&f=printBlock&id=119&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '119'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170907 16:25:29: /index.php?m=block&f=printBlock&id=120&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '120'
  SELECT * FROM `zt_todo` WHERE account  = 'shenguilin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'shenguilin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170907 16:25:29: /index.php?m=block&f=printBlock&id=121&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '121'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-07 16:25:29' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170907 16:25:29: /index.php?m=block&f=printBlock&id=123&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '123'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'shenguilin' ORDER BY `id` desc  LIMIT 15 

20170907 16:25:29: /index.php?m=block&f=printBlock&id=122&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '122'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'shenguilin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'shenguilin' ORDER BY `id` desc  LIMIT 15 

20170907 16:25:29: /index.php?m=block&f=printBlock&id=125&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '125'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'shenguilin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170907 16:25:29: /index.php?m=block&f=printBlock&id=124&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '124'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'shenguilin' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'shenguilin' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'shenguilin' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'shenguilin' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'shenguilin' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170907 16:25:41: /index.php?m=project&f=task&project=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT id, name FROM `zt_project` WHERE parent  = '3'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '3' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('153') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '3' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task' and parent != 0) OR (root = 3 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:25:56: /index.php?m=product&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:26:00: /index.php?m=custom&f=ajaxSetHomepage&t=html&module=product&page=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  REPLACE `zt_config` SET `owner` = 'shenguilin',`module` = 'product',`section` = '',`key` = 'homepage',`value` = 'index'

20170907 16:26:00: /index.php?m=product&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_block` WHERE account  = 'shenguilin' AND  module  = 'product' AND  hidden  = '0' ORDER BY `order` 
  REPLACE `zt_config` SET `owner` = 'shenguilin',`module` = 'product',`section` = 'common',`key` = 'blockInited',`value` = '1'
  REPLACE `zt_block` SET `title` = '未关闭的产品',`block` = 'list',`grid` = '8',`params` = '{\"num\":15,\"type\":\"noclosed\"}',`order` = '1',`module` = 'product',`account` = 'shenguilin',`source` = 'product'
  REPLACE `zt_block` SET `title` = '指派给我的需求',`block` = 'story',`grid` = '4',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}',`order` = '2',`module` = 'product',`account` = 'shenguilin',`source` = 'product'

20170907 16:26:00: /index.php?m=product&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_block` WHERE account  = 'shenguilin' AND  module  = 'product' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:26:00: /index.php?m=block&f=printBlock&id=126&module=product
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '126'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-07 16:26:00' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170907 16:26:00: /index.php?m=block&f=printBlock&id=127&module=product
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '127'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'shenguilin' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'shenguilin' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'shenguilin' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'shenguilin' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'shenguilin' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170907 16:26:02: /index.php?m=my&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'shenguilin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:26:03: /index.php?m=block&f=printBlock&id=117&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '117'

20170907 16:26:03: /index.php?m=block&f=printBlock&id=118&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '118'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' ORDER BY `order`,`id` desc 
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  lib IN ('6','5')
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-09-07' AND  date  < '2017-09-08' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), ((product =',0,' AND project = '0') OR project IN ('3') OR INSTR(',3,', product) > 0), '1=1')  AND  IF(objectType != 'doclib', '1=1', objectID IN ('6','5'))   ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('12','1','26','20','11','22','21','13','27')
  SELECT id, title AS name FROM `zt_bug` WHERE id IN ('6','5')
  SELECT id, name AS name FROM `zt_task` WHERE id IN ('10','11','12')
  SELECT id, title AS name FROM `zt_story` WHERE id IN ('9','8')
  SELECT id, name AS name FROM `zt_project` WHERE id IN ('3')
  SELECT id, title AS name FROM `zt_productplan` WHERE id IN ('3','2')
  SELECT id, name AS name FROM `zt_product` WHERE id IN ('3')
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170907 16:26:03: /index.php?m=block&f=printBlock&id=122&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '122'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'shenguilin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'shenguilin' ORDER BY `id` desc  LIMIT 15 

20170907 16:26:03: /index.php?m=block&f=printBlock&id=120&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '120'
  SELECT * FROM `zt_todo` WHERE account  = 'shenguilin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'shenguilin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170907 16:26:03: /index.php?m=block&f=printBlock&id=119&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '119'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170907 16:26:03: /index.php?m=block&f=printBlock&id=121&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '121'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-07 16:26:03' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170907 16:26:03: /index.php?m=block&f=printBlock&id=124&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '124'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'shenguilin' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'shenguilin' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'shenguilin' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'shenguilin' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'shenguilin' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170907 16:26:03: /index.php?m=block&f=printBlock&id=125&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '125'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'shenguilin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170907 16:26:03: /index.php?m=block&f=printBlock&id=123&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '123'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'shenguilin' ORDER BY `id` desc  LIMIT 15 

20170907 16:26:08: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 16:27:25: /index.php?m=tutorial&f=start
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:27:36: /index.php?m=misc&f=about
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:27:45: /index.php?m=misc&f=about
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:31:02: /index.php?m=mail&f=save
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'host',`value` = 'smtp.qq.cn'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'port',`value` = '465'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'auth',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'username',`value` = 'pms@360edian.com'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'password',`value` = 'qFkdVF3GBWFjGrbZ'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'secure',`value` = 'ssl'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'debug',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'charset',`value` = 'utf-8'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'turnon',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'mta',`value` = 'smtp'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'async',`value` = '0'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromAddress',`value` = 'pms@360edian.com'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromName',`value` = 'EDianPMS'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'domain',`value` = 'https://pms.365edian.com'
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:31:03: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:31:06: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('chenyang','')
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:31:16: /index.php?m=mail&f=edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:31:17: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:31:19: /index.php?m=mail&f=edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:31:20: /index.php?m=mail&f=reset
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  DELETE FROM `zt_config` WHERE module  = 'mail'

20170907 16:31:20: /index.php?m=mail&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:31:22: /index.php?m=mail&f=detect
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:31:25: /index.php?m=mail&f=detect
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 16:31:25: /index.php?m=mail&f=edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:31:53: /index.php?m=mail&f=save
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'host',`value` = 'smtp.360edian.com'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'port',`value` = '465'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'auth',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'username',`value` = 'pms@360edian.com'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'password',`value` = 'qFkdVF3GBWFjGrbZ'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'secure',`value` = 'ssl'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'debug',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'charset',`value` = 'utf-8'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'turnon',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'mta',`value` = 'smtp'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'async',`value` = '0'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromAddress',`value` = 'pms@360edian.com'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromName',`value` = 'EDianPMS'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'domain',`value` = 'https://pms.365edian.com'
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:31:54: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:31:56: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('chenyang','')
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:32:01: /index.php?m=mail&f=edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:32:29: /index.php?m=mail&f=save
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'host',`value` = 'smtp.exmail.qq.com'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'port',`value` = '465'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'auth',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'username',`value` = 'pms@360edian.com'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'password',`value` = 'qFkdVF3GBWFjGrbZ'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'secure',`value` = 'ssl'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'debug',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'charset',`value` = 'utf-8'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'turnon',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'mta',`value` = 'smtp'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'async',`value` = '0'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromAddress',`value` = 'pms@360edian.com'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromName',`value` = 'EDianPMS'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'domain',`value` = 'https://pms.365edian.com'
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:32:30: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:32:33: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('chenyang','')

20170907 16:32:34: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:32:59: /index.php?m=mail&f=edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:33:02: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:33:13: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('MailTest','')

20170907 16:33:14: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:33:53: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170907 16:34:10: /index.php?m=mail&f=edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:34:13: /index.php?m=company&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 16:34:14: /index.php?m=company&f=browse
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_dept` WHERE `id` = '0' 
  SELECT * FROM `zt_dept` ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_user` WHERE deleted  = '0' ORDER BY `id` 
  SELECT COUNT(*) AS recTotal FROM `zt_user` WHERE deleted  = '0' 
  SELECT * FROM `zt_user` WHERE deleted  = '0' ORDER BY `id` 
  SELECT id, title FROM `zt_userquery` WHERE account  = 'admin' AND  module  = 'user' ORDER BY `id` asc 
  SELECT * FROM `zt_dept` WHERE `id` = '0' 
  SELECT * FROM `zt_dept` ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:34:16: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 16:34:19: /index.php?m=user&f=edit&userID=29&from=company
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_user` WHERE `id`  = '29'
  SELECT t2.* FROM `zt_usergroup` AS t1  LEFT JOIN `zt_group` AS t2  ON t1.group = t2.id  WHERE t1.account  = 'MailTest'
  SELECT * FROM `zt_dept` WHERE `id` = '0' 
  SELECT * FROM `zt_dept` ORDER BY `grade` desc,`order` 
  SELECT id, name FROM `zt_group`
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:34:33: /index.php?m=user&f=edit&userID=29&from=company
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_user` WHERE `id`  = '29'
  UPDATE `zt_user` SET `realname` = 'MailTest',`dept` = '18',`role` = 'dev',`join` = '1970-01-15',`gender` = 'm',`account` = 'MailTest',`email` = '501553705@qq.com',`commiter` = '',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`mobile` = '',`phone` = '',`address` = '',`zipcode` = '' WHERE id  = '29'
  DELETE FROM `zt_usergroup` WHERE account  = 'MailTest'
  REPLACE `zt_usergroup` SET `account` = 'MailTest',`group` = '2'

20170907 16:34:34: /index.php?m=company&f=browse
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_dept` WHERE `id` = '0' 
  SELECT * FROM `zt_dept` ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_user` WHERE deleted  = '0' ORDER BY `id` 
  SELECT COUNT(*) AS recTotal FROM `zt_user` WHERE deleted  = '0' 
  SELECT * FROM `zt_user` WHERE deleted  = '0' ORDER BY `id` 
  SELECT id, title FROM `zt_userquery` WHERE account  = 'admin' AND  module  = 'user' ORDER BY `id` asc 
  SELECT * FROM `zt_dept` WHERE `id` = '0' 
  SELECT * FROM `zt_dept` ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:34:56: /index.php?m=admin&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:34:58: /index.php?m=mail&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 16:34:58: /index.php?m=mail&f=edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:35:03: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:35:07: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('MailTest','')

20170907 16:35:09: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:36:03: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170907 16:36:08: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170907 16:37:46: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170907 16:38:41: /index.php?m=mail&f=edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:39:06: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:39:10: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('chenyang','')

20170907 16:39:12: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:39:41: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('admin','')

20170907 16:39:42: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:39:46: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('chenyang','')

20170907 16:39:48: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:40:47: /index.php?m=mail&f=edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:40:52: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:41:02: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('MailTest','')

20170907 16:41:03: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:43:53: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 16:44:16: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 16:46:03: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 16:46:09: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 16:46:58: /index.php?m=mail&f=edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:47:27: /index.php?m=my&f=todo&date=all
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' ORDER BY `date` desc,`status`,`begin`,`id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:47:30: /index.php?m=todo&f=batchCreate&date=20170907
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:47:33: /index.php?m=product&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_block` WHERE account  = 'qiuqingqiang' AND  module  = 'product' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:47:34: /index.php?m=block&f=printBlock&id=80&module=product
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '80'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-07 16:47:34' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170907 16:47:34: /index.php?m=block&f=printBlock&id=81&module=product
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '81'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170907 16:47:35: /index.php?m=my&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'qiuqingqiang' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:47:35: /index.php?m=block&f=printBlock&id=82&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '82'

20170907 16:47:35: /index.php?m=block&f=printBlock&id=84&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '84'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170907 16:47:35: /index.php?m=block&f=printBlock&id=85&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '85'
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170907 16:47:35: /index.php?m=block&f=printBlock&id=87&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '87'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc  LIMIT 15 

20170907 16:47:35: /index.php?m=block&f=printBlock&id=88&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '88'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc  LIMIT 15 

20170907 16:47:35: /index.php?m=block&f=printBlock&id=86&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '86'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-07 16:47:35' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170907 16:47:35: /index.php?m=block&f=printBlock&id=89&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '89'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170907 16:47:35: /index.php?m=block&f=printBlock&id=90&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '90'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'qiuqingqiang' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170907 16:47:41: /index.php?m=block&f=delete&t=html&index=82&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  DELETE FROM `zt_block` WHERE `id`  = '82' AND  account  = 'qiuqingqiang' AND  module  = 'my'

20170907 16:47:45: /index.php?m=block&f=admin&id=0&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'qiuqingqiang' AND  module  = 'my' AND  hidden  = '1' ORDER BY `order` 
  SELECT * FROM `zt_block` WHERE id  = '0'

20170907 16:47:46: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 16:47:55: /index.php?m=mail&f=save
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'host',`value` = 'smtp.global-mail.cn'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'port',`value` = '465'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'auth',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'username',`value` = 'chenyang@chinanuoyi.cn'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'password',`value` = 'm4231@m1314'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'secure',`value` = 'ssl'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'debug',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'charset',`value` = 'utf-8'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'turnon',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'mta',`value` = 'smtp'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'async',`value` = '0'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromAddress',`value` = 'chenyang@chinanuoyi.cn'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromName',`value` = 'EDianPMS'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'domain',`value` = 'https://pms.365edian.com'
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:47:56: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:48:04: /index.php?m=block&f=sort&t=html&orders=85,84,87,88,89,90,86&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'qiuqingqiang' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  REPLACE `zt_block` SET `id` = '85',`account` = 'qiuqingqiang',`module` = 'my',`title` = '我的待办',`source` = 'todo',`block` = 'list',`params` = '{\"num\":\"20\"}',`order` = '0',`grid` = '4',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '84',`account` = 'qiuqingqiang',`module` = 'my',`title` = '进行中的项目',`source` = 'project',`block` = 'list',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"undone\"}',`order` = '1',`grid` = '8',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '87',`account` = 'qiuqingqiang',`module` = 'my',`title` = '指派给我的任务',`source` = 'project',`block` = 'task',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}',`order` = '2',`grid` = '4',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '88',`account` = 'qiuqingqiang',`module` = 'my',`title` = '指派给我的Bug',`source` = 'qa',`block` = 'bug',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}',`order` = '3',`grid` = '4',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '89',`account` = 'qiuqingqiang',`module` = 'my',`title` = '指派给我的需求',`source` = 'product',`block` = 'story',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assignedTo\"}',`order` = '4',`grid` = '4',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '90',`account` = 'qiuqingqiang',`module` = 'my',`title` = '指派给我的用例',`source` = 'qa',`block` = 'case',`params` = '{\"num\":15,\"orderBy\":\"id_desc\",\"type\":\"assigntome\"}',`order` = '5',`grid` = '4',`height` = '0',`hidden` = '0'
  REPLACE `zt_block` SET `id` = '86',`account` = 'qiuqingqiang',`module` = 'my',`title` = '未关闭的产品',`source` = 'product',`block` = 'list',`params` = '{\"num\":15,\"type\":\"noclosed\"}',`order` = '6',`grid` = '8',`height` = '0',`hidden` = '0'

20170907 16:48:05: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('MailTest','')

20170907 16:48:06: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:48:11: /index.php?m=project&f=task&project=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT id, name FROM `zt_project` WHERE parent  = '3'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '3' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('153') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_module` WHERE `id` = '15' 
  SELECT id FROM `zt_module` WHERE path  LIKE ',15,%' AND  deleted  = '0'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') AND  t1.module IN ('15') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') AND  t1.module IN ('15') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') AND  t1.module IN ('15') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') AND  t1.module IN ('15') ORDER BY `status`,`id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '3' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task' and parent != 0) OR (root = 3 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT * FROM `zt_module` WHERE `id` = '15' 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:48:12: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('chenyang','')

20170907 16:48:13: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:48:17: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('admin','')

20170907 16:48:19: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:48:22: /index.php?m=story&f=view&storyid=8
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_story` WHERE `id` = '8' 
  SELECT title,spec,verify FROM `zt_storyspec` WHERE story  = '8' AND  version  = '1'
  SELECT t1.project, t2.name, t2.status FROM `zt_projectstory` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.story  = '8' ORDER BY t1.`project` DESC 
  SELECT id, name, assignedTo, project, status, consumed, `left` FROM `zt_task` WHERE story  = '8' AND  deleted  = '0' ORDER BY `id` DESC 
  SELECT * FROM `zt_storystage` WHERE story  = '8'
  SELECT id,title,branch FROM `zt_productplan` WHERE id IN ('2')
  SELECT * FROM `zt_file` WHERE objectType  = 'story' AND  objectID  = '8' AND  extra  != 'editor'
  SELECT name, id, type FROM `zt_product` WHERE `id` = '3' 
  SELECT title FROM `zt_productplan` WHERE `id` = '2' 
  SELECT id,title FROM `zt_bug` WHERE story  = '8' AND  deleted  = '0'
  SELECT id,title FROM `zt_bug` WHERE toStory  = '8'
  SELECT id,title FROM `zt_case` WHERE story  = '8' AND  deleted  = '0'
  SELECT path FROM `zt_module` WHERE id  = '15'
  SELECT * FROM `zt_module` WHERE id IN ('15') AND  deleted  = '0' ORDER BY `grade` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'story' AND  objectID  = '8' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('147','149','155') ORDER BY `id` 
  SELECT name FROM `zt_project` WHERE id  = '3'
  SELECT * FROM `zt_story` WHERE id  = '8' OR deleted  = '0' AND  assignedTo  = 'qiuqingqiang'  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:48:38: /index.php?m=task&f=edit&taskID=10
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '10'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '10' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '8' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '10' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('156','184') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT t2.id, t2.title, t2.module, t2.pri, t2.estimate, t3.name AS product FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_product` AS t3  ON t1.product = t3.id  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, realname, deleted FROM `zt_user` WHERE account IN ('shenguilin','','')
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:48:42: /index.php?m=project&f=task&projectID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT id, name FROM `zt_project` WHERE parent  = '3'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '3' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('153') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '3' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task' and parent != 0) OR (root = 3 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:48:42: /index.php?m=project&f=ajaxGetDropMenu&t=html&objectID=3&module=project&method=task&extra=unclosed
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 

20170907 16:48:45: /index.php?m=project&f=task&root=3&type=byModule&param=15
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT id, name FROM `zt_project` WHERE parent  = '3'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '3' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('153') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_module` WHERE `id` = '15' 
  SELECT id FROM `zt_module` WHERE path  LIKE ',15,%' AND  deleted  = '0'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') AND  t1.module IN ('15') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') AND  t1.module IN ('15') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') AND  t1.module IN ('15') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') AND  t1.module IN ('15') ORDER BY `status`,`id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '3' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task' and parent != 0) OR (root = 3 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT * FROM `zt_module` WHERE `id` = '15' 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:48:46: /index.php?m=project&f=task&root=3&type=byModule&param=16
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT id, name FROM `zt_project` WHERE parent  = '3'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '3' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('153') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_module` WHERE `id` = '16' 
  SELECT id FROM `zt_module` WHERE path  LIKE ',16,%' AND  deleted  = '0'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') AND  t1.module IN ('16') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') AND  t1.module IN ('16') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') AND  t1.module IN ('16') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') AND  t1.module IN ('16') ORDER BY `status`,`id` desc 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '3' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task' and parent != 0) OR (root = 3 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT * FROM `zt_module` WHERE `id` = '16' 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:48:48: /index.php?m=project&f=task&root=3&type=byModule&param=16
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT id, name FROM `zt_project` WHERE parent  = '3'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '3' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('153') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_module` WHERE `id` = '16' 
  SELECT id FROM `zt_module` WHERE path  LIKE ',16,%' AND  deleted  = '0'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') AND  t1.module IN ('16') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') AND  t1.module IN ('16') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') AND  t1.module IN ('16') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') AND  t1.module IN ('16') ORDER BY `status`,`id` desc 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '3' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task' and parent != 0) OR (root = 3 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT * FROM `zt_module` WHERE `id` = '16' 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:48:50: /index.php?m=project&f=task&root=3&type=byModule&param=16
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT id, name FROM `zt_project` WHERE parent  = '3'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '3' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('153') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_module` WHERE `id` = '16' 
  SELECT id FROM `zt_module` WHERE path  LIKE ',16,%' AND  deleted  = '0'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') AND  t1.module IN ('16') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') AND  t1.module IN ('16') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') AND  t1.module IN ('16') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') AND  t1.module IN ('16') ORDER BY `status`,`id` desc 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '3'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '3'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '3' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '3' and type = 'task' and parent != 0) OR (root = 3 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '3' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT * FROM `zt_module` WHERE `id` = '16' 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:48:52: /index.php?m=product&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_block` WHERE account  = 'qiuqingqiang' AND  module  = 'product' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:48:52: /index.php?m=block&f=printBlock&id=80&module=product
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '80'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-07 16:48:52' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170907 16:48:52: /index.php?m=block&f=printBlock&id=81&module=product
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '81'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170907 16:48:53: /index.php?m=my&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'qiuqingqiang' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:48:53: /index.php?m=block&f=printBlock&id=87&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '87'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc  LIMIT 15 

20170907 16:48:53: /index.php?m=block&f=printBlock&id=84&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '84'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170907 16:48:53: /index.php?m=block&f=printBlock&id=85&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '85'
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170907 16:48:54: /index.php?m=block&f=printBlock&id=88&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '88'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc  LIMIT 15 

20170907 16:48:54: /index.php?m=block&f=printBlock&id=89&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '89'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170907 16:48:54: /index.php?m=block&f=printBlock&id=86&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '86'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-07 16:48:54' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170907 16:48:54: /index.php?m=block&f=printBlock&id=90&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '90'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'qiuqingqiang' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170907 16:48:55: /index.php?m=my&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'qiuqingqiang' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:48:55: /index.php?m=block&f=printBlock&id=84&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '84'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170907 16:48:55: /index.php?m=block&f=printBlock&id=85&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '85'
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170907 16:48:55: /index.php?m=block&f=printBlock&id=88&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '88'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc  LIMIT 15 

20170907 16:48:55: /index.php?m=block&f=printBlock&id=90&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '90'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'qiuqingqiang' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170907 16:48:55: /index.php?m=block&f=printBlock&id=87&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '87'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc  LIMIT 15 

20170907 16:48:55: /index.php?m=block&f=printBlock&id=86&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '86'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-07 16:48:55' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170907 16:48:55: /index.php?m=block&f=printBlock&id=89&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '89'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170907 16:48:58: /index.php?m=my&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'qiuqingqiang' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:48:58: /index.php?m=block&f=printBlock&id=85&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '85'
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170907 16:48:58: /index.php?m=block&f=printBlock&id=87&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '87'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc  LIMIT 15 

20170907 16:48:59: /index.php?m=block&f=printBlock&id=86&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '86'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-07 16:48:59' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170907 16:48:59: /index.php?m=block&f=printBlock&id=84&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '84'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170907 16:48:59: /index.php?m=block&f=printBlock&id=88&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '88'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc  LIMIT 15 

20170907 16:48:59: /index.php?m=block&f=printBlock&id=90&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '90'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'qiuqingqiang' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170907 16:48:59: /index.php?m=block&f=printBlock&id=89&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '89'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170907 16:48:59: /index.php?m=my&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'qiuqingqiang' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:48:59: /index.php?m=block&f=printBlock&id=85&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '85'
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170907 16:48:59: /index.php?m=block&f=printBlock&id=90&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '90'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'qiuqingqiang' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170907 16:48:59: /index.php?m=block&f=printBlock&id=87&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '87'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc  LIMIT 15 

20170907 16:48:59: /index.php?m=block&f=printBlock&id=86&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '86'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-07 16:48:59' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170907 16:48:59: /index.php?m=block&f=printBlock&id=88&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '88'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc  LIMIT 15 

20170907 16:48:59: /index.php?m=block&f=printBlock&id=89&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '89'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170907 16:48:59: /index.php?m=block&f=printBlock&id=84&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '84'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170907 16:49:11: /index.php?m=my&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'qiuqingqiang' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:49:11: /index.php?m=block&f=printBlock&id=84&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '84'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170907 16:49:11: /index.php?m=block&f=printBlock&id=85&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '85'
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170907 16:49:11: /index.php?m=block&f=printBlock&id=90&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '90'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'qiuqingqiang' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170907 16:49:11: /index.php?m=block&f=printBlock&id=87&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '87'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc  LIMIT 15 

20170907 16:49:11: /index.php?m=block&f=printBlock&id=88&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '88'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc  LIMIT 15 

20170907 16:49:11: /index.php?m=block&f=printBlock&id=86&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '86'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-07 16:49:11' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170907 16:49:11: /index.php?m=block&f=printBlock&id=89&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '89'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'qiuqingqiang' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170907 16:49:21: /index.php?m=block&f=printBlock&id=90&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '90'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'qiuqingqiang' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170907 16:53:30: /index.php?m=user&f=login&referer=Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 16:53:30: /
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 16:53:30: /index.php?m=my&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:53:30: /index.php?m=block&f=printBlock&id=1&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '1'

20170907 16:53:31: /index.php?m=block&f=printBlock&id=5&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-07 16:53:31' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170907 16:53:31: /index.php?m=block&f=printBlock&id=3&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170907 16:53:31: /index.php?m=block&f=printBlock&id=2&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '2'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' ORDER BY `order`,`id` desc 
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  lib IN ('6','5')
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-09-07' AND  date  < '2017-09-08' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), (1), '1=1')  AND  IF(objectType != 'doclib', '1=1', objectID IN ('6','5'))   ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('12','1','26','20','11','22','21','13','27')
  SELECT id, title AS name FROM `zt_bug` WHERE id IN ('6','5')
  SELECT id, name AS name FROM `zt_task` WHERE id IN ('10','11','12')
  SELECT id, title AS name FROM `zt_story` WHERE id IN ('9','8')
  SELECT id, name AS name FROM `zt_project` WHERE id IN ('3','2','1')
  SELECT id, title AS name FROM `zt_productplan` WHERE id IN ('3','2')
  SELECT id, name AS name FROM `zt_product` WHERE id IN ('3','2','1')
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170907 16:53:31: /index.php?m=block&f=printBlock&id=4&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170907 16:53:31: /index.php?m=block&f=printBlock&id=6&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170907 16:53:31: /index.php?m=block&f=printBlock&id=8&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '8'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170907 16:53:31: /index.php?m=block&f=printBlock&id=9&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'admin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170907 16:53:31: /index.php?m=block&f=printBlock&id=7&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170907 16:53:49: /index.php?m=product&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_story` WHERE product IN ('3') AND  status IN ('','draft','active','changed') AND  deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` WHERE product IN ('3') AND  status IN ('','draft','active','changed') AND  deleted  = '0' 
  SELECT * FROM `zt_story` WHERE product IN ('3') AND  status IN ('','draft','active','changed') AND  deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_story` WHERE product IN ('3') AND  status IN ('','draft','active','changed') AND  deleted  = '0' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')
  SELECT * FROM `zt_story` WHERE product IN ('3') AND  status IN ('','draft','active','changed') AND  deleted  = '0' ORDER BY `id` desc 
  SELECT story, COUNT(*) AS tasks FROM `zt_task` WHERE story IN ('9','8') AND  deleted  = '0' GROUP BY story
  SELECT story, COUNT(*) AS bugs FROM `zt_bug` WHERE story IN ('9','8') AND  deleted  = '0' GROUP BY story
  SELECT story, COUNT(*) AS cases FROM `zt_case` WHERE story IN ('9','8') AND  deleted  = '0' GROUP BY story
  SELECT id,CONCAT(title, " [", begin, " ~ ", end, "]") as title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type  = 'story' AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT id,CONCAT(title, " [", begin, " ~ ", end, "]") as title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT DISTINCT story FROM `zt_case` WHERE story IN ('9','8')
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type  = 'story' AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT account, realname, deleted, INSTR(',pd,po,', role) AS roleOrder FROM `zt_user` WHERE deleted  = '0' ORDER BY `roleOrder` DESC,`account` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type  = 'story' AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_storystage` WHERE story IN ('9','8')
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:53:54: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170907 16:54:01: /index.php?m=story&f=report&productID=3&browseType=unclosed&branchID=0&moduleID=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:54:03: /index.php?m=story&f=report&productID=3&browseType=unclosed&branchID=0&moduleID=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT product as name, count(product) as value FROM `zt_story` WHERE product IN ('3') AND  status IN ('','draft','active','changed') AND  deleted  = '0'  GROUP BY product ORDER BY `value` DESC 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT module as name, count(module) as value, product, branch FROM `zt_story` WHERE product IN ('3') AND  status IN ('','draft','active','changed') AND  deleted  = '0'  GROUP BY module ORDER BY `value` DESC 
  SELECT id, name FROM `zt_branch` WHERE id IN ('') AND  deleted  = '0'
  SELECT id, name, path, branch FROM `zt_module` WHERE id IN ('15','16') AND  deleted  = '0'
  SELECT id, name FROM `zt_module` WHERE id IN ('','15','','16','') AND  deleted  = '0'
  SELECT source as name, count(source) as value FROM `zt_story` WHERE product IN ('3') AND  status IN ('','draft','active','changed') AND  deleted  = '0'  GROUP BY source ORDER BY `value` DESC 
  SELECT plan as name, count(plan) as value FROM `zt_story` WHERE product IN ('3') AND  status IN ('','draft','active','changed') AND  deleted  = '0'  GROUP BY plan ORDER BY `value` DESC 
  SELECT id, title FROM `zt_productplan` WHERE id IN ('2')
  SELECT status as name, count(status) as value FROM `zt_story` WHERE product IN ('3') AND  status IN ('','draft','active','changed') AND  deleted  = '0'  GROUP BY status ORDER BY `value` DESC 
  SELECT stage as name, count(stage) as value FROM `zt_story` WHERE product IN ('3') AND  status IN ('','draft','active','changed') AND  deleted  = '0'  GROUP BY stage ORDER BY `value` DESC 
  SELECT pri as name, count(pri) as value FROM `zt_story` WHERE product IN ('3') AND  status IN ('','draft','active','changed') AND  deleted  = '0'  GROUP BY pri ORDER BY `value` DESC 
  SELECT estimate as name, count(estimate) as value FROM `zt_story` WHERE product IN ('3') AND  status IN ('','draft','active','changed') AND  deleted  = '0'  GROUP BY estimate ORDER BY `value` 
  SELECT openedBy as name, count(openedBy) as value FROM `zt_story` WHERE product IN ('3') AND  status IN ('','draft','active','changed') AND  deleted  = '0'  GROUP BY openedBy ORDER BY `value` DESC 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT assignedTo as name, count(assignedTo) as value FROM `zt_story` WHERE product IN ('3') AND  status IN ('','draft','active','changed') AND  deleted  = '0'  GROUP BY assignedTo ORDER BY `value` DESC 
  SELECT closedReason as name, count(closedReason) as value FROM `zt_story` WHERE product IN ('3') AND  status IN ('','draft','active','changed') AND  deleted  = '0'  GROUP BY closedReason ORDER BY `value` DESC 
  SELECT (version-1) as name, count(*) as value FROM `zt_story` WHERE product IN ('3') AND  status IN ('','draft','active','changed') AND  deleted  = '0'  GROUP BY version ORDER BY `value` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:56:03: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170907 16:56:09: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 16:56:11: /index.php?m=mail&f=edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:56:17: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:56:23: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('chenyang','')

20170907 16:56:25: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:56:30: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('MailTest','')

20170907 16:56:31: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:56:56: /index.php?m=mail&f=edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:57:08: /index.php?m=mail&f=save
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'host',`value` = 'smtp.global-mail.cn'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'port',`value` = '465'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'auth',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'username',`value` = 'pms@chinanuoyi.cn'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'password',`value` = 'zt@36O1d!an#17'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'secure',`value` = 'ssl'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'debug',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'charset',`value` = 'utf-8'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'turnon',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'mta',`value` = 'smtp'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'async',`value` = '0'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromAddress',`value` = 'pms@chinanuoyi.cn'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromName',`value` = 'EDianPMS'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'domain',`value` = 'https://pms.365edian.com'
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:57:09: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:57:18: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('chenyang','')

20170907 16:57:20: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 16:57:46: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 16:59:12: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170907 17:02:12: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('chenyang','')

20170907 17:02:14: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:02:16: /index.php?m=mail&f=edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:03:46: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:03:49: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('admin','')

20170907 17:03:50: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:03:54: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('chenyang','')

20170907 17:03:54: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 17:03:55: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:04:00: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('MailTest','')

20170907 17:04:02: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:04:04: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170907 17:04:42: /index.php?m=mail&f=edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:04:46: /index.php?m=mail&f=save
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 17:04:48: /index.php?m=mail&f=edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:04:54: /index.php?m=mail&f=save
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'host',`value` = 'smtp.global-mail.cn'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'port',`value` = '465'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'auth',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'username',`value` = 'pms@chinanuoyi.cn'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'password',`value` = 'zt@36O1d!an#17'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'secure',`value` = 'ssl'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'debug',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'charset',`value` = 'utf-8'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'turnon',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'mta',`value` = 'smtp'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'async',`value` = '0'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromAddress',`value` = 'pms@chinanuoyi.cn'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromName',`value` = 'pms@chinanuoyi.cn'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'domain',`value` = 'https://pms.365edian.com'
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:04:56: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:05:01: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('chenyang','')

20170907 17:05:03: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:05:12: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('MailTest','')

20170907 17:05:16: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:05:25: /index.php?m=mail&f=edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:05:49: /index.php?m=mail&f=save
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'host',`value` = 'smtp.global-mail.cn'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'port',`value` = '465'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'auth',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'username',`value` = 'pms@chinanuoyi.cn'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'password',`value` = 'zt@36O1d!an#17'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'secure',`value` = 'ssl'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'debug',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = 'smtp',`key` = 'charset',`value` = 'utf-8'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'turnon',`value` = '1'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'mta',`value` = 'smtp'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'async',`value` = '0'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromAddress',`value` = 'pms@chinanuoyi.cn'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'fromName',`value` = 'pms@chinanuoyi.cn'
  REPLACE `zt_config` SET `owner` = 'system',`module` = 'mail',`section` = '',`key` = 'domain',`value` = 'https://pms.365edian.com'
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:05:51: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:05:56: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('chenyang','')

20170907 17:05:57: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:06:04: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 17:06:49: /
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 17:06:49: /index.php?m=user&f=login&referer=Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:06:51: /index.php?m=user&f=login&referer=Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'tianliwei'
  SELECT * FROM `zt_user` WHERE account  = 'tianliwei' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '125.70.29.99', `last` = '1504775211' WHERE account  = 'tianliwei'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'tianliwei'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'tianliwei'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'tianliwei'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'tianliwei' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '22',`actor` = 'tianliwei',`action` = 'login',`date` = '2017-09-07 17:06:51',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170907 17:06:51: /
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 17:06:51: /index.php?m=my&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'tianliwei' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:06:52: /index.php?m=block&f=printBlock&id=96&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '96'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'tianliwei' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'tianliwei' ORDER BY `id` desc  LIMIT 15 

20170907 17:06:52: /index.php?m=block&f=printBlock&id=95&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '95'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-07 17:06:52' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170907 17:06:52: /index.php?m=block&f=printBlock&id=94&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '94'
  SELECT * FROM `zt_todo` WHERE account  = 'tianliwei' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'tianliwei' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170907 17:06:52: /index.php?m=block&f=printBlock&id=93&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '93'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170907 17:06:52: /index.php?m=block&f=printBlock&id=98&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '98'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'tianliwei' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'tianliwei' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'tianliwei' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'tianliwei' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'tianliwei' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170907 17:06:52: /index.php?m=block&f=printBlock&id=97&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '97'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'tianliwei' ORDER BY `id` desc  LIMIT 15 

20170907 17:06:52: /index.php?m=block&f=printBlock&id=99&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '99'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'tianliwei' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170907 17:06:55: /index.php?m=my&f=testtask
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.name AS projectName, t3.name AS buildName FROM `zt_testtask` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_build` AS t3  ON t1.build = t3.id  WHERE t1.deleted  = '0' AND  t1.owner  = 'tianliwei' AND  t1.status  != 'done' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_testtask` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_build` AS t3  ON t1.build = t3.id  WHERE t1.deleted  = '0' AND  t1.owner  = 'tianliwei' AND  t1.status  != 'done' 
  SELECT t1.*, t2.name AS projectName, t3.name AS buildName FROM `zt_testtask` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_build` AS t3  ON t1.build = t3.id  WHERE t1.deleted  = '0' AND  t1.owner  = 'tianliwei' AND  t1.status  != 'done' ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:06:56: /index.php?m=qa&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_block` WHERE account  = 'tianliwei' AND  module  = 'qa' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:06:56: /index.php?m=block&f=printBlock&id=77&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '77'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'tianliwei' ORDER BY `id` desc  LIMIT 15 

20170907 17:06:57: /index.php?m=block&f=printBlock&id=78&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '78'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'tianliwei' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170907 17:06:57: /index.php?m=block&f=printBlock&id=79&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '79'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.*,t2.name as productName,t3.name as buildName,t4.name as projectName FROM `zt_testtask` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product=t2.id  LEFT JOIN `zt_build` AS t3  ON t1.build=t3.id  LEFT JOIN `zt_project` AS t4  ON t1.project=t4.id  LEFT JOIN `zt_projectproduct` AS t5  ON t1.project=t5.project  WHERE t1.deleted  = '0' AND  t1.product IN ('3') AND  t1.product = t5.product  AND  t1.status  = 'wait' ORDER BY t1.`id` desc  LIMIT 15 

20170907 17:06:57: /index.php?m=testcase&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('') AND  status  = 'active'
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `case` IN ('') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `case` IN ('') GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case` IN ('') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.`case`=t2.`id`  WHERE t1.`case` IN ('') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'tianliwei'))  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:07:00: /index.php?m=testcase&f=create&productID=3&branch=0&moduleID=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('3') AND  t1.status IN ('','draft','active','closed','changed') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:07:12: /index.php?m=product&f=ajaxGetDropMenu&t=html&objectID=3&module=testcase&method=browse&extra=
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 

20170907 17:07:13: /index.php?m=product&f=all&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-07 17:07:13' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:07:16: /index.php?m=qa&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_block` WHERE account  = 'tianliwei' AND  module  = 'qa' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:07:17: /index.php?m=block&f=printBlock&id=79&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '79'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.*,t2.name as productName,t3.name as buildName,t4.name as projectName FROM `zt_testtask` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product=t2.id  LEFT JOIN `zt_build` AS t3  ON t1.build=t3.id  LEFT JOIN `zt_project` AS t4  ON t1.project=t4.id  LEFT JOIN `zt_projectproduct` AS t5  ON t1.project=t5.project  WHERE t1.deleted  = '0' AND  t1.product IN ('3') AND  t1.product = t5.product  AND  t1.status  = 'wait' ORDER BY t1.`id` desc  LIMIT 15 

20170907 17:07:17: /index.php?m=block&f=printBlock&id=77&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '77'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'tianliwei' ORDER BY `id` desc  LIMIT 15 

20170907 17:07:17: /index.php?m=block&f=printBlock&id=78&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '78'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'tianliwei' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170907 17:07:18: /index.php?m=product&f=ajaxGetDropMenu&t=html&objectID=3&module=qa&method=index&extra=
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 

20170907 17:07:20: /index.php?m=product&f=all&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-07 17:07:20' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:07:21: /index.php?m=my&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'tianliwei' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:07:22: /index.php?m=block&f=printBlock&id=93&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '93'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170907 17:07:22: /index.php?m=block&f=printBlock&id=96&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '96'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'tianliwei' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'tianliwei' ORDER BY `id` desc  LIMIT 15 

20170907 17:07:22: /index.php?m=block&f=printBlock&id=98&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '98'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'tianliwei' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'tianliwei' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'tianliwei' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'tianliwei' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'tianliwei' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170907 17:07:22: /index.php?m=block&f=printBlock&id=94&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '94'
  SELECT * FROM `zt_todo` WHERE account  = 'tianliwei' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'tianliwei' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170907 17:07:22: /index.php?m=block&f=printBlock&id=97&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '97'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'tianliwei' ORDER BY `id` desc  LIMIT 15 

20170907 17:07:22: /index.php?m=block&f=printBlock&id=99&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '99'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'tianliwei' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170907 17:07:22: /index.php?m=block&f=printBlock&id=95&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '95'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-07 17:07:22' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170907 17:07:23: /index.php?m=qa&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_block` WHERE account  = 'tianliwei' AND  module  = 'qa' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:07:23: /index.php?m=block&f=printBlock&id=79&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '79'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.*,t2.name as productName,t3.name as buildName,t4.name as projectName FROM `zt_testtask` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product=t2.id  LEFT JOIN `zt_build` AS t3  ON t1.build=t3.id  LEFT JOIN `zt_project` AS t4  ON t1.project=t4.id  LEFT JOIN `zt_projectproduct` AS t5  ON t1.project=t5.project  WHERE t1.deleted  = '0' AND  t1.product IN ('3') AND  t1.product = t5.product  AND  t1.status  = 'wait' ORDER BY t1.`id` desc  LIMIT 15 

20170907 17:07:23: /index.php?m=block&f=printBlock&id=78&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '78'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'tianliwei' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170907 17:07:23: /index.php?m=block&f=printBlock&id=77&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '77'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'tianliwei' ORDER BY `id` desc  LIMIT 15 

20170907 17:07:25: /index.php?m=testcase&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('') AND  status  = 'active'
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `case` IN ('') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `case` IN ('') GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case` IN ('') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.`case`=t2.`id`  WHERE t1.`case` IN ('') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'tianliwei'))  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:07:30: /index.php?m=testcase&f=create&productID=3&branch=0&moduleID=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('3') AND  t1.status IN ('','draft','active','closed','changed') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:07:33: /index.php?m=testcase&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('') AND  status  = 'active'
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `case` IN ('') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `case` IN ('') GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case` IN ('') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.`case`=t2.`id`  WHERE t1.`case` IN ('') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'tianliwei'))  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:07:35: /index.php?m=testcase&f=batchCreate&productID=3&branch=0&moduleID=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:07:39: /index.php?m=qa&f=index&locate=no&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_block` WHERE account  = 'tianliwei' AND  module  = 'qa' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:07:39: /index.php?m=block&f=printBlock&id=77&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '77'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'tianliwei' ORDER BY `id` desc  LIMIT 15 

20170907 17:07:39: /index.php?m=block&f=printBlock&id=78&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '78'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'tianliwei' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170907 17:07:39: /index.php?m=block&f=printBlock&id=79&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '79'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.*,t2.name as productName,t3.name as buildName,t4.name as projectName FROM `zt_testtask` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product=t2.id  LEFT JOIN `zt_build` AS t3  ON t1.build=t3.id  LEFT JOIN `zt_project` AS t4  ON t1.project=t4.id  LEFT JOIN `zt_projectproduct` AS t5  ON t1.project=t5.project  WHERE t1.deleted  = '0' AND  t1.product IN ('3') AND  t1.product = t5.product  AND  t1.status  = 'wait' ORDER BY t1.`id` desc  LIMIT 15 

20170907 17:07:41: /index.php?m=testcase&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('') AND  status  = 'active'
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `case` IN ('') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `case` IN ('') GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case` IN ('') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.`case`=t2.`id`  WHERE t1.`case` IN ('') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'tianliwei'))  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:07:41: /index.php?m=testcase&f=create&productID=3&branch=0&moduleID=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('3') AND  t1.status IN ('','draft','active','closed','changed') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:07:44: /index.php?m=story&f=ajaxGetProductStories&t=html&productID=3&branch=0&moduleID=15&storyID=0&onlyOption=false&status=&limit=50
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id,type,parent FROM `zt_module` WHERE id  = '15'
  SELECT * FROM `zt_module` WHERE `id` = '15' 
  SELECT id FROM `zt_module` WHERE path  LIKE ',15,%' AND  deleted  = '0'
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('3') AND  t1.module IN ('15') AND  t1.deleted  = '0' ORDER BY `id` desc 

20170907 17:07:46: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 17:08:48: /index.php?m=testcase&f=create&productID=3&branch=0&moduleID=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT version FROM `zt_story` WHERE id  = '8'
  SELECT id,title FROM `zt_case` WHERE deleted  = '0' AND  title IN ('单元测试用例一') AND  openedDate  >= '2017-09-07 17:07:48' AND  product=3 
  INSERT INTO `zt_case` SET `product` = '3',`branch` = '0',`module` = '15',`type` = 'feature',`stage` = ',unittest',`story` = '8',`color` = '',`title` = '单元测试用例一',`pri` = '3',`precondition` = '1.前置条件1\r\n2.前置条件2',`keywords` = '',`openedBy` = 'tianliwei',`openedDate` = '2017-09-07 17:08:48',`status` = 'normal',`version` = '1',`fromBug` = '0',`storyVersion` = '1'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '5',`version` = '1',`desc` = '测试步骤1',`expect` = '预期1'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '5',`version` = '1',`desc` = '测试步骤2',`expect` = '预期2'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '5',`version` = '1',`desc` = '测试步骤3',`expect` = '预期3'
  SELECT product FROM `zt_case` WHERE id  = '5'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '5',`actor` = 'tianliwei',`action` = 'opened',`date` = '2017-09-07 17:08:48',`comment` = '',`extra` = '',`product` = ',3,',`project` = '0'

20170907 17:08:48: /index.php?m=testcase&f=browse&productID=3&branch=0&browseType=byModule&args=15
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_module` WHERE `id` = '15' 
  SELECT id FROM `zt_module` WHERE path  LIKE ',15,%' AND  deleted  = '0'
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.module IN ('15') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.module IN ('15') AND  t1.deleted  = '0' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.module IN ('15') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.module IN ('15') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('8') AND  status  = 'active'
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `case` IN ('5') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `case` IN ('5') GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case` IN ('5') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.`case`=t2.`id`  WHERE t1.`case` IN ('5') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_module` WHERE `id` = '15' 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'tianliwei'))  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:08:51: /index.php?m=testcase&f=create&productID=3&branch=0&moduleID=15
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT id,type,parent FROM `zt_module` WHERE id  = '15'
  SELECT * FROM `zt_module` WHERE `id` = '15' 
  SELECT id FROM `zt_module` WHERE path  LIKE ',15,%' AND  deleted  = '0'
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('3') AND  t1.module IN ('15') AND  t1.status IN ('','draft','active','closed','changed') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:08:53: /index.php?m=story&f=ajaxGetProductStories&t=html&productID=3&branch=0&moduleID=16&storyID=0&onlyOption=false&status=&limit=50
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id,type,parent FROM `zt_module` WHERE id  = '16'
  SELECT * FROM `zt_module` WHERE `id` = '16' 
  SELECT id FROM `zt_module` WHERE path  LIKE ',16,%' AND  deleted  = '0'
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('3') AND  t1.module IN ('16') AND  t1.deleted  = '0' ORDER BY `id` desc 

20170907 17:09:10: /index.php?m=qa&f=index&locate=no&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_block` WHERE account  = 'tianliwei' AND  module  = 'qa' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:09:10: /index.php?m=block&f=printBlock&id=77&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '77'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'tianliwei' ORDER BY `id` desc  LIMIT 15 

20170907 17:09:10: /index.php?m=block&f=printBlock&id=78&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '78'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'tianliwei' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170907 17:09:11: /index.php?m=block&f=printBlock&id=79&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '79'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.*,t2.name as productName,t3.name as buildName,t4.name as projectName FROM `zt_testtask` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product=t2.id  LEFT JOIN `zt_build` AS t3  ON t1.build=t3.id  LEFT JOIN `zt_project` AS t4  ON t1.project=t4.id  LEFT JOIN `zt_projectproduct` AS t5  ON t1.project=t5.project  WHERE t1.deleted  = '0' AND  t1.product IN ('3') AND  t1.product = t5.product  AND  t1.status  = 'wait' ORDER BY t1.`id` desc  LIMIT 15 

20170907 17:09:12: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 17:09:12: /index.php?m=testcase&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('8') AND  status  = 'active'
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `case` IN ('5') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `case` IN ('5') GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case` IN ('5') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.`case`=t2.`id`  WHERE t1.`case` IN ('5') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'tianliwei'))  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:09:17: /index.php?m=testcase&f=export&productID=3&orderBy=id_desc
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT id,title,content,public FROM `zt_usertpl` WHERE type  = 'exporttestcase' AND ( account  = 'tianliwei' OR public  = '1') ORDER BY `id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:09:22: /index.php?m=testcase&f=export&productID=3&orderBy=id_desc
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT id,title,content,public FROM `zt_usertpl` WHERE type  = 'exporttestcase' AND ( account  = 'tianliwei' OR public  = '1') ORDER BY `id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:09:31: /index.php?m=testcase&f=export&productID=3&orderBy=id_desc
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT id, name FROM `zt_module` WHERE id IN ('15')
  SELECT id,title FROM `zt_story` WHERE id IN ('8')
  SELECT id, title FROM `zt_case` WHERE id IN ('')
  SELECT parent,`case`,version,type,`desc`,expect FROM `zt_casestep` WHERE `case` IN ('5') ORDER BY `version` desc,`id` 
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `case` IN ('5') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `case` IN ('5') GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case` IN ('5') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.`case`=t2.`id`  WHERE t1.`case` IN ('5') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`

20170907 17:10:45: /index.php?m=testcase&f=import&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:10:52: /index.php?m=testcase&f=import&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 

20170907 17:10:52: /index.php?m=testcase&f=showImport&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('3') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT id, module, story, stage, status, pri, type FROM `zt_case` WHERE product  = '3' AND  deleted  = '0'
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:11:06: /index.php?m=testcase&f=showImport&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t2.* FROM `zt_case` AS t1  LEFT JOIN `zt_casestep` AS t2  ON t1.id = t2.case  WHERE t1.id IN ('5') AND  t1.product  = '3' AND  t1.version=t2.version  ORDER BY t2.`id` 
  SELECT * FROM `zt_case` WHERE id IN ('5')
  SELECT id, version FROM `zt_story` WHERE id IN ('')
  INSERT INTO `zt_case` SET `product` = '3',`branch` = '0',`module` = '0',`story` = '0',`title` = '单元测试用例2',`pri` = '3',`type` = 'feature',`stage` = ',unittest',`keywords` = '',`frequency` = '1',`precondition` = '1.前置条件1\r\n2.前置条件2',`version` = '1',`openedBy` = 'tianliwei',`openedDate` = '2017-09-07 17:11:06',`status` = 'normal'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '6',`version` = '1',`desc` = '测试步骤1',`expect` = '预期1'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '6',`version` = '1',`desc` = '测试步骤2',`expect` = '预期2'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '6',`version` = '1',`desc` = '测试步骤3',`expect` = '预期3'
  SELECT product FROM `zt_case` WHERE id  = '6'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '6',`actor` = 'tianliwei',`action` = 'opened',`date` = '2017-09-07 17:11:06',`comment` = '',`extra` = '',`product` = ',3,',`project` = '0'

20170907 17:11:07: /index.php?m=testcase&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('8') AND  status  = 'active'
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `case` IN ('6','5') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `case` IN ('6','5') GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case` IN ('6','5') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.`case`=t2.`id`  WHERE t1.`case` IN ('6','5') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'tianliwei'))  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:11:14: /index.php?m=testcase&f=view&caseID=6&version=1
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_case` WHERE `id` = '6' 
  SELECT id, title FROM `zt_bug` WHERE `case`  = '6'
  SELECT * FROM `zt_casestep` WHERE `case`  = '6' AND  version  = '1' ORDER BY `id` 
  SELECT * FROM `zt_file` WHERE objectType  = 'testcase' AND  objectID  = '6' AND  extra  != 'editor'
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT `case` AS name, COUNT(*) AS value FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case`  = '6' GROUP BY name ORDER BY `value` DESC 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'case' AND  objectID  = '6' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('202') ORDER BY `id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:11:24: /index.php?m=testtask&f=results&runID=0&caseID=6&version=1
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_case` WHERE `id` = '6' 
  SELECT id, title FROM `zt_bug` WHERE `case`  = '6'
  SELECT * FROM `zt_casestep` WHERE `case`  = '6' AND  version  = '1' ORDER BY `id` 
  SELECT * FROM `zt_file` WHERE objectType  = 'testcase' AND  objectID  = '6' AND  extra  != 'editor'
  SELECT * FROM `zt_testresult` WHERE `case`  = '6' ORDER BY `id` desc 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('3') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:11:30: /index.php?m=testcase&f=delete&caseID=6
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 

20170907 17:11:31: /index.php?m=testcase&f=delete&caseID=6&confirm=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  UPDATE `zt_case` SET  `deleted` = '1' WHERE id  = '6'
  SELECT product FROM `zt_case` WHERE id  = '6'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '6',`actor` = 'tianliwei',`action` = 'deleted',`date` = '2017-09-07 17:11:31',`comment` = '',`extra` = '1',`product` = ',3,',`project` = '0'

20170907 17:11:31: /index.php?m=testcase&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('8') AND  status  = 'active'
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `case` IN ('5') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `case` IN ('5') GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case` IN ('5') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.`case`=t2.`id`  WHERE t1.`case` IN ('5') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'tianliwei'))  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:11:53: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('chenyang','')

20170907 17:11:53: /index.php?m=testcase&f=export&productID=3&orderBy=id_desc
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT id,title,content,public FROM `zt_usertpl` WHERE type  = 'exporttestcase' AND ( account  = 'tianliwei' OR public  = '1') ORDER BY `id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:11:55: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:12:31: /index.php?m=testcase&f=create&productID=3&branch=0&moduleID=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('3') AND  t1.status IN ('','draft','active','closed','changed') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:12:51: /index.php?m=testcase&f=import&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:13:13: /index.php?m=testcase&f=import&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 

20170907 17:13:13: /index.php?m=testcase&f=showImport&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('3') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT id, module, story, stage, status, pri, type FROM `zt_case` WHERE product  = '3' AND  deleted  = '0'
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:13:18: /index.php?m=testcase&f=showImport&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t2.* FROM `zt_case` AS t1  LEFT JOIN `zt_casestep` AS t2  ON t1.id = t2.case  WHERE t1.id IN ('cooperate.basic.2') AND  t1.product  = '3' AND  t1.version=t2.version  ORDER BY t2.`id` 
  SELECT * FROM `zt_case` WHERE id IN ('cooperate.basic.2')
  SELECT id, version FROM `zt_story` WHERE id IN ('')
  INSERT INTO `zt_case` SET `product` = '3',`branch` = '0',`module` = '0',`story` = '0',`title` = '单元测试用例2',`pri` = '3',`type` = 'feature',`stage` = '',`keywords` = '',`frequency` = '1',`precondition` = '1.前置条件1\r\n2.前置条件2',`version` = '1',`openedBy` = 'tianliwei',`openedDate` = '2017-09-07 17:13:18',`status` = 'normal'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '7',`version` = '1',`desc` = '测试步骤1',`expect` = '预期1'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '7',`version` = '1',`desc` = '测试步骤2',`expect` = '预期2'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '7',`version` = '1',`desc` = '测试步骤3',`expect` = '预期3'
  SELECT product FROM `zt_case` WHERE id  = '7'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '7',`actor` = 'tianliwei',`action` = 'opened',`date` = '2017-09-07 17:13:18',`comment` = '',`extra` = '',`product` = ',3,',`project` = '0'

20170907 17:13:18: /index.php?m=testcase&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('8') AND  status  = 'active'
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `case` IN ('7','5') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `case` IN ('7','5') GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case` IN ('7','5') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.`case`=t2.`id`  WHERE t1.`case` IN ('7','5') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'tianliwei'))  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:13:21: /index.php?m=testcase&f=view&caseID=7&version=1
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_case` WHERE `id` = '7' 
  SELECT id, title FROM `zt_bug` WHERE `case`  = '7'
  SELECT * FROM `zt_casestep` WHERE `case`  = '7' AND  version  = '1' ORDER BY `id` 
  SELECT * FROM `zt_file` WHERE objectType  = 'testcase' AND  objectID  = '7' AND  extra  != 'editor'
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT `case` AS name, COUNT(*) AS value FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case`  = '7' GROUP BY name ORDER BY `value` DESC 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'case' AND  objectID  = '7' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('204') ORDER BY `id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:13:36: /index.php?m=testcase&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('8') AND  status  = 'active'
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `case` IN ('7','5') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `case` IN ('7','5') GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case` IN ('7','5') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.`case`=t2.`id`  WHERE t1.`case` IN ('7','5') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'tianliwei'))  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:13:42: /index.php?m=testcase&f=browse&root=3&branch=&type=byModule&param=15
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_module` WHERE `id` = '15' 
  SELECT id FROM `zt_module` WHERE path  LIKE ',15,%' AND  deleted  = '0'
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.module IN ('15') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.module IN ('15') AND  t1.deleted  = '0' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.module IN ('15') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.module IN ('15') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('8') AND  status  = 'active'
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `case` IN ('5') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `case` IN ('5') GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case` IN ('5') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.`case`=t2.`id`  WHERE t1.`case` IN ('5') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_module` WHERE `id` = '15' 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'tianliwei'))  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:13:54: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 17:15:11: /index.php?m=testcase&f=import&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:15:17: /index.php?m=testcase&f=import&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 

20170907 17:15:17: /index.php?m=testcase&f=showImport&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('3') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT id, module, story, stage, status, pri, type FROM `zt_case` WHERE product  = '3' AND  deleted  = '0'
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:16:04: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 17:16:10: /index.php?m=testcase&f=import&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:16:17: /index.php?m=testcase&f=import&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 

20170907 17:16:17: /index.php?m=testcase&f=showImport&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('3') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT id, module, story, stage, status, pri, type FROM `zt_case` WHERE product  = '3' AND  deleted  = '0'
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:16:31: /index.php?m=testcase&f=import&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:16:37: /index.php?m=testcase&f=import&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 

20170907 17:16:38: /index.php?m=testcase&f=showImport&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('3') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT id, module, story, stage, status, pri, type FROM `zt_case` WHERE product  = '3' AND  deleted  = '0'
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:17:34: /index.php?m=qa&f=index&locate=no&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_block` WHERE account  = 'tianliwei' AND  module  = 'qa' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:17:34: /index.php?m=block&f=printBlock&id=77&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '77'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'tianliwei' ORDER BY `id` desc  LIMIT 15 

20170907 17:17:34: /index.php?m=block&f=printBlock&id=78&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '78'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'tianliwei' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170907 17:17:34: /index.php?m=block&f=printBlock&id=79&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '79'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.*,t2.name as productName,t3.name as buildName,t4.name as projectName FROM `zt_testtask` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product=t2.id  LEFT JOIN `zt_build` AS t3  ON t1.build=t3.id  LEFT JOIN `zt_project` AS t4  ON t1.project=t4.id  LEFT JOIN `zt_projectproduct` AS t5  ON t1.project=t5.project  WHERE t1.deleted  = '0' AND  t1.product IN ('3') AND  t1.product = t5.product  AND  t1.status  = 'wait' ORDER BY t1.`id` desc  LIMIT 15 

20170907 17:17:36: /index.php?m=testcase&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('8') AND  status  = 'active'
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `case` IN ('7','5') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `case` IN ('7','5') GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case` IN ('7','5') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.`case`=t2.`id`  WHERE t1.`case` IN ('7','5') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'tianliwei'))  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:17:38: /index.php?m=testcase&f=import&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:17:43: /index.php?m=testcase&f=import&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 

20170907 17:17:43: /index.php?m=testcase&f=showImport&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('3') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT id, module, story, stage, status, pri, type FROM `zt_case` WHERE product  = '3' AND  deleted  = '0'
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:17:46: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170907 17:19:02: /index.php?m=qa&f=index&locate=no&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_block` WHERE account  = 'tianliwei' AND  module  = 'qa' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:19:02: /index.php?m=block&f=printBlock&id=77&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '77'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'tianliwei' ORDER BY `id` desc  LIMIT 15 

20170907 17:19:02: /index.php?m=block&f=printBlock&id=78&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '78'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'tianliwei' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170907 17:19:02: /index.php?m=block&f=printBlock&id=79&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '79'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.*,t2.name as productName,t3.name as buildName,t4.name as projectName FROM `zt_testtask` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product=t2.id  LEFT JOIN `zt_build` AS t3  ON t1.build=t3.id  LEFT JOIN `zt_project` AS t4  ON t1.project=t4.id  LEFT JOIN `zt_projectproduct` AS t5  ON t1.project=t5.project  WHERE t1.deleted  = '0' AND  t1.product IN ('3') AND  t1.product = t5.product  AND  t1.status  = 'wait' ORDER BY t1.`id` desc  LIMIT 15 

20170907 17:19:04: /index.php?m=testcase&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('8') AND  status  = 'active'
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `case` IN ('7','5') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `case` IN ('7','5') GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case` IN ('7','5') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.`case`=t2.`id`  WHERE t1.`case` IN ('7','5') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'tianliwei'))  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:19:05: /index.php?m=testcase&f=create&productID=3&branch=0&moduleID=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('3') AND  t1.status IN ('','draft','active','closed','changed') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:19:06: /index.php?m=testcase&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('8') AND  status  = 'active'
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `case` IN ('7','5') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `case` IN ('7','5') GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case` IN ('7','5') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.`case`=t2.`id`  WHERE t1.`case` IN ('7','5') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'tianliwei'))  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:19:08: /index.php?m=testcase&f=import&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:19:12: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170907 17:19:14: /index.php?m=testcase&f=import&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 

20170907 17:19:15: /index.php?m=testcase&f=showImport&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('3') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT id, module, story, stage, status, pri, type FROM `zt_case` WHERE product  = '3' AND  deleted  = '0'
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:19:43: /index.php?m=testcase&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('8') AND  status  = 'active'
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `case` IN ('7','5') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `case` IN ('7','5') GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case` IN ('7','5') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.`case`=t2.`id`  WHERE t1.`case` IN ('7','5') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'tianliwei'))  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:19:45: /index.php?m=testcase&f=import&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:19:49: /index.php?m=testcase&f=import&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 

20170907 17:19:49: /index.php?m=testcase&f=showImport&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('3') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT id, module, story, stage, status, pri, type FROM `zt_case` WHERE product  = '3' AND  deleted  = '0'
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:21:00: /index.php?m=testcase&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('8') AND  status  = 'active'
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `case` IN ('7','5') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `case` IN ('7','5') GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case` IN ('7','5') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.`case`=t2.`id`  WHERE t1.`case` IN ('7','5') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'tianliwei'))  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:21:01: /index.php?m=testcase&f=import&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:21:06: /index.php?m=testcase&f=import&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 

20170907 17:21:06: /index.php?m=testcase&f=showImport&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('3') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT id, module, story, stage, status, pri, type FROM `zt_case` WHERE product  = '3' AND  deleted  = '0'
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:21:24: /index.php?m=user&f=login&referer=Lw==
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:21:28: /index.php?m=testcase&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('8') AND  status  = 'active'
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `case` IN ('7','5') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `case` IN ('7','5') GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case` IN ('7','5') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.`case`=t2.`id`  WHERE t1.`case` IN ('7','5') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'tianliwei'))  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:21:30: /index.php?m=testcase&f=import&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:21:34: /index.php?m=testcase&f=import&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 

20170907 17:21:34: /index.php?m=testcase&f=showImport&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('3') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT id, module, story, stage, status, pri, type FROM `zt_case` WHERE product  = '3' AND  deleted  = '0'
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:21:56: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 17:22:02: /index.php?m=testcase&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('8') AND  status  = 'active'
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `case` IN ('7','5') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `case` IN ('7','5') GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case` IN ('7','5') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.`case`=t2.`id`  WHERE t1.`case` IN ('7','5') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'tianliwei'))  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:22:04: /index.php?m=testcase&f=import&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:22:08: /index.php?m=testcase&f=import&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 

20170907 17:22:08: /index.php?m=testcase&f=showImport&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('3') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT id, module, story, stage, status, pri, type FROM `zt_case` WHERE product  = '3' AND  deleted  = '0'
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:22:39: /index.php?m=testcase&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('8') AND  status  = 'active'
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `case` IN ('7','5') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `case` IN ('7','5') GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case` IN ('7','5') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.`case`=t2.`id`  WHERE t1.`case` IN ('7','5') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'tianliwei'))  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:22:41: /index.php?m=testcase&f=import&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:22:45: /index.php?m=testcase&f=import&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 

20170907 17:22:46: /index.php?m=testcase&f=showImport&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('3') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT id, module, story, stage, status, pri, type FROM `zt_case` WHERE product  = '3' AND  deleted  = '0'
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:23:54: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170907 17:24:08: /index.php?m=mail&f=edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:26:04: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170907 17:27:47: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170907 17:28:26: /index.php?m=testcase&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('8') AND  status  = 'active'
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `case` IN ('7','5') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `case` IN ('7','5') GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case` IN ('7','5') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.`case`=t2.`id`  WHERE t1.`case` IN ('7','5') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'tianliwei'))  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:28:28: /index.php?m=testcase&f=import&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:28:34: /index.php?m=testcase&f=import&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 

20170907 17:28:34: /index.php?m=testcase&f=showImport&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('3') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT id, module, story, stage, status, pri, type FROM `zt_case` WHERE product  = '3' AND  deleted  = '0'
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:29:12: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170907 17:29:14: /index.php?m=testtask&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.*, t2.name AS productName, t3.name AS projectName, t4.name AS buildName, if(t4.name != '', t4.branch, t5.branch) AS branch FROM `zt_testtask` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  LEFT JOIN `zt_project` AS t3  ON t1.project = t3.id  LEFT JOIN `zt_build` AS t4  ON t1.build = t4.id  LEFT JOIN `zt_projectproduct` AS t5  ON t1.project = t5.project  WHERE t1.deleted  = '0' AND  t1.product  = '3' AND  t5.product = t1.product  AND  t1.status  = 'wait' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_testtask` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  LEFT JOIN `zt_project` AS t3  ON t1.project = t3.id  LEFT JOIN `zt_build` AS t4  ON t1.build = t4.id  LEFT JOIN `zt_projectproduct` AS t5  ON t1.project = t5.project  WHERE t1.deleted  = '0' AND  t1.product  = '3' AND  t5.product = t1.product  AND  t1.status  = 'wait' 
  SELECT t1.*, t2.name AS productName, t3.name AS projectName, t4.name AS buildName, if(t4.name != '', t4.branch, t5.branch) AS branch FROM `zt_testtask` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  LEFT JOIN `zt_project` AS t3  ON t1.project = t3.id  LEFT JOIN `zt_build` AS t4  ON t1.build = t4.id  LEFT JOIN `zt_projectproduct` AS t5  ON t1.project = t5.project  WHERE t1.deleted  = '0' AND  t1.product  = '3' AND  t5.product = t1.product  AND  t1.status  = 'wait' ORDER BY `id` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:29:15: /index.php?m=testcase&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('8') AND  status  = 'active'
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `case` IN ('7','5') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `case` IN ('7','5') GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case` IN ('7','5') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.`case`=t2.`id`  WHERE t1.`case` IN ('7','5') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'tianliwei'))  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:29:17: /index.php?m=testcase&f=import&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:29:22: /index.php?m=testcase&f=import&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 

20170907 17:29:22: /index.php?m=testcase&f=showImport&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('3') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT id, module, story, stage, status, pri, type FROM `zt_case` WHERE product  = '3' AND  deleted  = '0'
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:29:29: /index.php?m=testcase&f=showImport&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT id, version FROM `zt_story` WHERE id IN ('','','','','')
  INSERT INTO `zt_case` SET `product` = '3',`branch` = '0',`module` = '0',`story` = '0',`title` = '查看启动页',`pri` = '3',`type` = 'feature',`stage` = '',`keywords` = '',`frequency` = '1',`precondition` = '',`version` = '1',`openedBy` = 'tianliwei',`openedDate` = '2017-09-07 17:29:29',`status` = 'normal'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '8',`version` = '1',`desc` = '打开APP，加载启动页;',`expect` = '展现&quot;订阅宣传图&quot;;'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '8',`version` = '1',`desc` = '点击跳过',`expect` = '在5秒内可以点击跳过;'
  SELECT product FROM `zt_case` WHERE id  = '8'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '8',`actor` = 'tianliwei',`action` = 'opened',`date` = '2017-09-07 17:29:29',`comment` = '',`extra` = '',`product` = ',3,',`project` = '0'
  INSERT INTO `zt_case` SET `product` = '3',`branch` = '0',`module` = '0',`story` = '0',`title` = 'APP强制更新',`pri` = '3',`type` = 'feature',`stage` = '',`keywords` = '',`frequency` = '1',`precondition` = '1.app有版本更新',`version` = '1',`openedBy` = 'tianliwei',`openedDate` = '2017-09-07 17:29:29',`status` = 'normal'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '9',`version` = '1',`desc` = '成功登录',`expect` = '登录成功后,会有提示app更新【文案】并下载安装，无法点击其他地方，必须下载安装使用新版'
  SELECT product FROM `zt_case` WHERE id  = '9'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '9',`actor` = 'tianliwei',`action` = 'opened',`date` = '2017-09-07 17:29:29',`comment` = '',`extra` = '',`product` = ',3,',`project` = '0'
  INSERT INTO `zt_case` SET `product` = '3',`branch` = '0',`module` = '0',`story` = '0',`title` = '退出程序再次打开',`pri` = '3',`type` = 'feature',`stage` = '',`keywords` = '',`frequency` = '1',`precondition` = '',`version` = '1',`openedBy` = 'tianliwei',`openedDate` = '2017-09-07 17:29:29',`status` = 'normal'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '10',`version` = '1',`desc` = '登录程序过后,不退出账号关闭程序,下次打开程序',`expect` = '默认上次登录账号进入程序,无法再次输入登录信息'
  SELECT product FROM `zt_case` WHERE id  = '10'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '10',`actor` = 'tianliwei',`action` = 'opened',`date` = '2017-09-07 17:29:29',`comment` = '',`extra` = '',`product` = ',3,',`project` = '0'
  INSERT INTO `zt_case` SET `product` = '3',`branch` = '0',`module` = '0',`story` = '0',`title` = 'APP可选更新',`pri` = '3',`type` = 'feature',`stage` = '',`keywords` = '',`frequency` = '1',`precondition` = '1.app有版本更新',`version` = '1',`openedBy` = 'tianliwei',`openedDate` = '2017-09-07 17:29:29',`status` = 'normal'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '11',`version` = '1',`desc` = '成功登录;',`expect` = '登录成功后,会有提示app更新【文案】并下载安装，可以点击稍后设置或者其他区域不进行更新'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '11',`version` = '1',`desc` = '手动下载',`expect` = '关于有财,进行手动下载更新'
  SELECT product FROM `zt_case` WHERE id  = '11'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '11',`actor` = 'tianliwei',`action` = 'opened',`date` = '2017-09-07 17:29:29',`comment` = '',`extra` = '',`product` = ',3,',`project` = '0'
  INSERT INTO `zt_case` SET `product` = '3',`branch` = '0',`module` = '0',`story` = '0',`title` = 'APP不进行更新',`pri` = '3',`type` = 'feature',`stage` = '',`keywords` = '',`frequency` = '1',`precondition` = '1.app没有版本更新',`version` = '1',`openedBy` = 'tianliwei',`openedDate` = '2017-09-07 17:29:29',`status` = 'normal'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '12',`version` = '1',`desc` = '成功登录',`expect` = '登录成功后,没有提示app更新'
  SELECT product FROM `zt_case` WHERE id  = '12'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '12',`actor` = 'tianliwei',`action` = 'opened',`date` = '2017-09-07 17:29:29',`comment` = '',`extra` = '',`product` = ',3,',`project` = '0'

20170907 17:29:30: /index.php?m=testcase&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('8') AND  status  = 'active'
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `case` IN ('12','11','10','9','8','7','5') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `case` IN ('12','11','10','9','8','7','5') GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case` IN ('12','11','10','9','8','7','5') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.`case`=t2.`id`  WHERE t1.`case` IN ('12','11','10','9','8','7','5') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'tianliwei'))  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:29:34: /index.php?m=testcase&f=view&caseID=12&version=1
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_case` WHERE `id` = '12' 
  SELECT id, title FROM `zt_bug` WHERE `case`  = '12'
  SELECT * FROM `zt_casestep` WHERE `case`  = '12' AND  version  = '1' ORDER BY `id` 
  SELECT * FROM `zt_file` WHERE objectType  = 'testcase' AND  objectID  = '12' AND  extra  != 'editor'
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT `case` AS name, COUNT(*) AS value FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case`  = '12' GROUP BY name ORDER BY `value` DESC 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'case' AND  objectID  = '12' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('209') ORDER BY `id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:29:47: /index.php?m=testcase&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('8') AND  status  = 'active'
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `case` IN ('12','11','10','9','8','7','5') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `case` IN ('12','11','10','9','8','7','5') GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case` IN ('12','11','10','9','8','7','5') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.`case`=t2.`id`  WHERE t1.`case` IN ('12','11','10','9','8','7','5') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'tianliwei'))  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:29:48: /index.php?m=testcase&f=view&caseID=5&version=1
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_case` WHERE `id` = '5' 
  SELECT title, status, version FROM `zt_story` WHERE `id` = '8' 
  SELECT id, title FROM `zt_bug` WHERE `case`  = '5'
  SELECT * FROM `zt_casestep` WHERE `case`  = '5' AND  version  = '1' ORDER BY `id` 
  SELECT * FROM `zt_file` WHERE objectType  = 'testcase' AND  objectID  = '5' AND  extra  != 'editor'
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT `case` AS name, COUNT(*) AS value FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case`  = '5' GROUP BY name ORDER BY `value` DESC 
  SELECT path FROM `zt_module` WHERE id  = '15'
  SELECT * FROM `zt_module` WHERE id IN ('15') AND  deleted  = '0' ORDER BY `grade` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'case' AND  objectID  = '5' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('201') ORDER BY `id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:29:54: /index.php?m=testcase&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('8') AND  status  = 'active'
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `case` IN ('12','11','10','9','8','7','5') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `case` IN ('12','11','10','9','8','7','5') GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case` IN ('12','11','10','9','8','7','5') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.`case`=t2.`id`  WHERE t1.`case` IN ('12','11','10','9','8','7','5') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'tianliwei'))  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:29:56: /index.php?m=testcase&f=view&caseID=9&version=1
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_case` WHERE `id` = '9' 
  SELECT id, title FROM `zt_bug` WHERE `case`  = '9'
  SELECT * FROM `zt_casestep` WHERE `case`  = '9' AND  version  = '1' ORDER BY `id` 
  SELECT * FROM `zt_file` WHERE objectType  = 'testcase' AND  objectID  = '9' AND  extra  != 'editor'
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT `case` AS name, COUNT(*) AS value FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case`  = '9' GROUP BY name ORDER BY `value` DESC 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'case' AND  objectID  = '9' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('206') ORDER BY `id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:30:03: /index.php?m=testcase&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('8') AND  status  = 'active'
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `case` IN ('12','11','10','9','8','7','5') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `case` IN ('12','11','10','9','8','7','5') GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case` IN ('12','11','10','9','8','7','5') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.`case`=t2.`id`  WHERE t1.`case` IN ('12','11','10','9','8','7','5') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'tianliwei'))  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:30:07: /index.php?m=testcase&f=view&caseID=10&version=1
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_case` WHERE `id` = '10' 
  SELECT id, title FROM `zt_bug` WHERE `case`  = '10'
  SELECT * FROM `zt_casestep` WHERE `case`  = '10' AND  version  = '1' ORDER BY `id` 
  SELECT * FROM `zt_file` WHERE objectType  = 'testcase' AND  objectID  = '10' AND  extra  != 'editor'
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT `case` AS name, COUNT(*) AS value FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case`  = '10' GROUP BY name ORDER BY `value` DESC 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'case' AND  objectID  = '10' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('207') ORDER BY `id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:30:09: /index.php?m=testcase&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('8') AND  status  = 'active'
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `case` IN ('12','11','10','9','8','7','5') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `case` IN ('12','11','10','9','8','7','5') GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case` IN ('12','11','10','9','8','7','5') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.`case`=t2.`id`  WHERE t1.`case` IN ('12','11','10','9','8','7','5') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'tianliwei'))  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:30:14: /index.php?m=testcase&f=batchDelete&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  UPDATE `zt_case` SET  `deleted` = '1' WHERE id  = '12'
  SELECT product FROM `zt_case` WHERE id  = '12'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '12',`actor` = 'tianliwei',`action` = 'deleted',`date` = '2017-09-07 17:30:14',`comment` = '',`extra` = '1',`product` = ',3,',`project` = '0'
  UPDATE `zt_case` SET  `deleted` = '1' WHERE id  = '11'
  SELECT product FROM `zt_case` WHERE id  = '11'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '11',`actor` = 'tianliwei',`action` = 'deleted',`date` = '2017-09-07 17:30:14',`comment` = '',`extra` = '1',`product` = ',3,',`project` = '0'
  UPDATE `zt_case` SET  `deleted` = '1' WHERE id  = '10'
  SELECT product FROM `zt_case` WHERE id  = '10'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '10',`actor` = 'tianliwei',`action` = 'deleted',`date` = '2017-09-07 17:30:14',`comment` = '',`extra` = '1',`product` = ',3,',`project` = '0'
  UPDATE `zt_case` SET  `deleted` = '1' WHERE id  = '9'
  SELECT product FROM `zt_case` WHERE id  = '9'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '9',`actor` = 'tianliwei',`action` = 'deleted',`date` = '2017-09-07 17:30:14',`comment` = '',`extra` = '1',`product` = ',3,',`project` = '0'
  UPDATE `zt_case` SET  `deleted` = '1' WHERE id  = '8'
  SELECT product FROM `zt_case` WHERE id  = '8'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '8',`actor` = 'tianliwei',`action` = 'deleted',`date` = '2017-09-07 17:30:14',`comment` = '',`extra` = '1',`product` = ',3,',`project` = '0'
  UPDATE `zt_case` SET  `deleted` = '1' WHERE id  = '7'
  SELECT product FROM `zt_case` WHERE id  = '7'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '7',`actor` = 'tianliwei',`action` = 'deleted',`date` = '2017-09-07 17:30:14',`comment` = '',`extra` = '1',`product` = ',3,',`project` = '0'
  UPDATE `zt_case` SET  `deleted` = '1' WHERE id  = '5'
  SELECT product FROM `zt_case` WHERE id  = '5'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '5',`actor` = 'tianliwei',`action` = 'deleted',`date` = '2017-09-07 17:30:14',`comment` = '',`extra` = '1',`product` = ',3,',`project` = '0'
  UPDATE `zt_case` SET  `deleted` = '1' WHERE id  = '12'
  SELECT product FROM `zt_case` WHERE id  = '12'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '12',`actor` = 'tianliwei',`action` = 'deleted',`date` = '2017-09-07 17:30:14',`comment` = '',`extra` = '1',`product` = ',3,',`project` = '0'
  UPDATE `zt_case` SET  `deleted` = '1' WHERE id  = '11'
  SELECT product FROM `zt_case` WHERE id  = '11'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '11',`actor` = 'tianliwei',`action` = 'deleted',`date` = '2017-09-07 17:30:14',`comment` = '',`extra` = '1',`product` = ',3,',`project` = '0'
  UPDATE `zt_case` SET  `deleted` = '1' WHERE id  = '10'
  SELECT product FROM `zt_case` WHERE id  = '10'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '10',`actor` = 'tianliwei',`action` = 'deleted',`date` = '2017-09-07 17:30:14',`comment` = '',`extra` = '1',`product` = ',3,',`project` = '0'
  UPDATE `zt_case` SET  `deleted` = '1' WHERE id  = '9'
  SELECT product FROM `zt_case` WHERE id  = '9'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '9',`actor` = 'tianliwei',`action` = 'deleted',`date` = '2017-09-07 17:30:14',`comment` = '',`extra` = '1',`product` = ',3,',`project` = '0'
  UPDATE `zt_case` SET  `deleted` = '1' WHERE id  = '8'
  SELECT product FROM `zt_case` WHERE id  = '8'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '8',`actor` = 'tianliwei',`action` = 'deleted',`date` = '2017-09-07 17:30:14',`comment` = '',`extra` = '1',`product` = ',3,',`project` = '0'
  UPDATE `zt_case` SET  `deleted` = '1' WHERE id  = '7'
  SELECT product FROM `zt_case` WHERE id  = '7'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '7',`actor` = 'tianliwei',`action` = 'deleted',`date` = '2017-09-07 17:30:14',`comment` = '',`extra` = '1',`product` = ',3,',`project` = '0'
  UPDATE `zt_case` SET  `deleted` = '1' WHERE id  = '5'
  SELECT product FROM `zt_case` WHERE id  = '5'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '5',`actor` = 'tianliwei',`action` = 'deleted',`date` = '2017-09-07 17:30:14',`comment` = '',`extra` = '1',`product` = ',3,',`project` = '0'

20170907 17:30:14: /index.php?m=testcase&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('') AND  status  = 'active'
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `case` IN ('') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `case` IN ('') GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case` IN ('') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.`case`=t2.`id`  WHERE t1.`case` IN ('') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'tianliwei'))  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:30:59: /index.php?m=testcase&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT t1.*, t2.title as storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story=t2.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT id,version FROM `zt_story` WHERE id IN ('') AND  status  = 'active'
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `case` IN ('') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `case` IN ('') GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case` IN ('') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.`case`=t2.`id`  WHERE t1.`case` IN ('') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'tianliwei'))  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:31:00: /index.php?m=testcase&f=import&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:31:05: /index.php?m=testcase&f=import&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 

20170907 17:31:05: /index.php?m=testcase&f=showImport&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('3') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT id, module, story, stage, status, pri, type FROM `zt_case` WHERE product  = '3' AND  deleted  = '0'
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170907 17:33:55: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170907 17:34:09: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170907 17:36:05: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 17:37:47: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 17:41:06: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 17:44:10: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170907 17:46:05: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 17:47:47: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170907 17:51:07: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 17:54:10: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 17:56:05: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170907 18:04:11: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170907 18:14:11: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')


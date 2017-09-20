<?php
 die();
?>
20170914 09:05:29: /index.php?m=product&f=roadmap&productID=3
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170914 09:05:30: /index.php?m=user&f=login&referer=L2luZGV4LnBocD9tPXByb2R1Y3QmZj1yb2FkbWFwJnByb2R1Y3RJRD0z
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170914 09:05:31: /index.php?m=report&f=productSummary
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170914 09:05:31: /index.php?m=user&f=login&referer=L2luZGV4LnBocD9tPXJlcG9ydCZmPXByb2R1Y3RTdW1tYXJ5
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170914 09:05:33: /index.php?m=user&f=login&referer=Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170914 09:08:00: /index.php?m=my&f=index
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_user` WHERE account  = 'zhating' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '125.70.30.148', `last` = '1505351280' WHERE account  = 'zhating'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'zhating'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'zhating'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'zhating' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '26',`actor` = 'zhating',`action` = 'login',`date` = '2017-09-14 09:08:00',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'
  SELECT * FROM `zt_config` WHERE owner IN ('system','zhating') ORDER BY `id` 
  SELECT * FROM `zt_block` WHERE account  = 'zhating' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170914 09:08:01: /index.php?m=block&f=printBlock&id=103&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','zhating') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '103'

20170914 09:08:01: /index.php?m=block&f=printBlock&id=107&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','zhating') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '107'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-14 09:08:01' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170914 09:08:02: /index.php?m=block&f=printBlock&id=104&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','zhating') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '104'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' ORDER BY `order`,`id` desc 
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  lib IN ('8','7','6','5')
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' ORDER BY `order`,`id` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-09-14' AND  date  < '2017-09-15' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), ((product =',0,' AND project = '0') OR project IN ('4','3') OR INSTR(',3,', product) > 0), '1=1')  AND  IF(objectType != 'doc', '1=1', objectID IN ('1'))  AND  IF(objectType != 'doclib', '1=1', objectID IN ('8','7','6','5'))   ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('26')
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170914 09:08:02: /index.php?m=block&f=printBlock&id=106&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','zhating') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '106'
  SELECT * FROM `zt_todo` WHERE account  = 'zhating' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'zhating' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170914 09:08:02: /index.php?m=block&f=printBlock&id=108&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','zhating') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '108'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'zhating' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'zhating' ORDER BY `id` desc  LIMIT 15 

20170914 09:08:02: /index.php?m=block&f=printBlock&id=109&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','zhating') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '109'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'zhating' ORDER BY `id` desc  LIMIT 15 

20170914 09:08:02: /index.php?m=block&f=printBlock&id=110&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','zhating') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '110'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'zhating' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'zhating' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'zhating' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'zhating' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'zhating' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170914 09:08:02: /index.php?m=block&f=printBlock&id=105&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','zhating') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '105'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('4','3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('4','3') 
  SELECT * FROM `zt_project` WHERE id IN ('4','3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('4','3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('4','3') ORDER BY `date` desc 

20170914 09:08:02: /index.php?m=block&f=printBlock&id=111&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','zhating') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '111'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'zhating' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170914 09:15:31: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170914 09:15:31: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170914 09:15:34: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170914 09:25:32: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170914 09:25:32: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170914 09:25:34: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170914 09:35:32: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170914 09:35:33: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170914 09:35:34: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170914 09:45:33: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170914 09:45:33: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170914 09:45:34: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170914 09:55:33: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170914 09:55:33: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170914 09:55:34: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170914 10:05:34: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170914 10:05:34: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170914 10:05:34: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170914 10:15:34: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170914 10:15:34: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170914 10:15:34: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170914 10:25:34: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170914 10:25:35: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170914 10:25:35: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 


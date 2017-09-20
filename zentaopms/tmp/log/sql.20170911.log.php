<?php
 die();
?>
20170911 11:47:52: /index.php?m=user&f=login&referer=Lw==
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 14:20:23: /index.php?m=user&f=login&referer=Lw==
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 14:20:26: /index.php?m=user&f=login&referer=Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'shenguilin '
  SELECT * FROM `zt_user` WHERE account  = 'shenguilin ' AND  deleted  = '0'
  SELECT fails FROM `zt_user` WHERE account  = 'shenguilin '
  UPDATE `zt_user` SET  `fails` = '1', `locked` = '0000-00-00 00:00:00' WHERE account  = 'shenguilin '

20170911 14:20:43: /index.php?m=user&f=login&referer=Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'shenguilin '
  SELECT * FROM `zt_user` WHERE account  = 'shenguilin ' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '117.136.70.49', `last` = '1505110842' WHERE account  = 'shenguilin '
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'shenguilin '
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'shenguilin '
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'shenguilin '
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'shenguilin ' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '12',`actor` = 'shenguilin',`action` = 'login',`date` = '2017-09-11 14:20:42',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170911 14:20:43: /
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170911 14:20:43: /index.php?m=my&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'shenguilin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 14:20:44: /index.php?m=block&f=printBlock&id=117&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '117'

20170911 14:20:44: /index.php?m=block&f=printBlock&id=120&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '120'
  SELECT * FROM `zt_todo` WHERE account  = 'shenguilin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'shenguilin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170911 14:20:44: /index.php?m=block&f=printBlock&id=118&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '118'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' ORDER BY `order`,`id` desc 
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  lib IN ('6','5')
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-09-11' AND  date  < '2017-09-12' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), ((product =',0,' AND project = '0') OR project IN ('3') OR INSTR(',3,', product) > 0), '1=1')  AND  IF(objectType != 'doclib', '1=1', objectID IN ('6','5'))   ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('12')
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170911 14:20:44: /index.php?m=block&f=printBlock&id=119&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '119'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170911 14:20:44: /index.php?m=block&f=printBlock&id=122&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '122'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'shenguilin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'shenguilin' ORDER BY `id` desc  LIMIT 15 

20170911 14:20:44: /index.php?m=block&f=printBlock&id=123&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '123'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'shenguilin' ORDER BY `id` desc  LIMIT 15 

20170911 14:20:44: /index.php?m=block&f=printBlock&id=121&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '121'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-11 14:20:44' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170911 14:20:44: /index.php?m=block&f=printBlock&id=124&module=my
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

20170911 14:20:44: /index.php?m=block&f=printBlock&id=125&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '125'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'shenguilin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170911 14:21:00: /index.php?m=project&f=task&project=3
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

20170911 14:21:03: /index.php?m=task&f=view&task=12
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '12'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '12' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '8' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT * FROM `zt_story` WHERE `id` = '8' 
  SELECT title,spec,verify FROM `zt_storyspec` WHERE story  = '8' AND  version  = '1'
  SELECT t1.project, t2.name, t2.status FROM `zt_projectstory` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.story  = '8' ORDER BY t1.`project` DESC 
  SELECT id, name, assignedTo, project, status, consumed, `left` FROM `zt_task` WHERE story  = '8' AND  deleted  = '0' ORDER BY `id` DESC 
  SELECT * FROM `zt_storystage` WHERE story  = '8'
  SELECT id,title,branch FROM `zt_productplan` WHERE id IN ('2')
  SELECT * FROM `zt_file` WHERE objectType  = 'story' AND  objectID  = '8' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
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
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '12' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('158') ORDER BY `id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_task` WHERE id  = '12' OR project  = '3' AND  deleted  = '0' AND  status IN ('','wait','doing','done','pause','cancel')  ORDER BY `status`,`id` desc 
  SELECT path FROM `zt_module` WHERE id  = '15'
  SELECT * FROM `zt_module` WHERE id  = '15'
  SELECT name FROM `zt_product` WHERE id  = '3'
  SELECT path FROM `zt_module` WHERE id  = '15'
  SELECT * FROM `zt_module` WHERE id IN ('15') AND  deleted  = '0' ORDER BY `grade` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 14:21:56: /index.php?m=report&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170911 14:21:56: /index.php?m=report&f=productSummary
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id, code, name, PO FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed'
  SELECT * FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-11'
  SELECT id,plan,product,status FROM `zt_story` WHERE deleted  = '0'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 14:21:57: /index.php?m=product&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_block` WHERE account  = 'shenguilin' AND  module  = 'product' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 14:21:57: /index.php?m=block&f=printBlock&id=127&module=product
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

20170911 14:21:57: /index.php?m=block&f=printBlock&id=126&module=product
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '126'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-11 14:21:57' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170911 14:21:58: /index.php?m=my&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'shenguilin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 14:21:59: /index.php?m=block&f=printBlock&id=119&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '119'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170911 14:21:59: /index.php?m=block&f=printBlock&id=122&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '122'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'shenguilin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'shenguilin' ORDER BY `id` desc  LIMIT 15 

20170911 14:21:59: /index.php?m=block&f=printBlock&id=121&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '121'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-11 14:21:59' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170911 14:21:59: /index.php?m=block&f=printBlock&id=120&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '120'
  SELECT * FROM `zt_todo` WHERE account  = 'shenguilin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'shenguilin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170911 14:21:59: /index.php?m=block&f=printBlock&id=118&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '118'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' ORDER BY `order`,`id` desc 
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  lib IN ('6','5')
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-09-11' AND  date  < '2017-09-12' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), ((product =',0,' AND project = '0') OR project IN ('3') OR INSTR(',3,', product) > 0), '1=1')  AND  IF(objectType != 'doclib', '1=1', objectID IN ('6','5'))   ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('12')
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170911 14:21:59: /index.php?m=block&f=printBlock&id=123&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '123'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'shenguilin' ORDER BY `id` desc  LIMIT 15 

20170911 14:21:59: /index.php?m=block&f=printBlock&id=117&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '117'

20170911 14:21:59: /index.php?m=block&f=printBlock&id=124&module=my
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

20170911 14:21:59: /index.php?m=block&f=printBlock&id=125&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '125'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'shenguilin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170911 14:22:03: /index.php?m=my&f=managecontacts
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id, listName FROM `zt_usercontact` WHERE account  = 'shenguilin'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 14:22:06: /index.php?m=doc&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
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

20170911 14:22:08: /index.php?m=qa&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_block` WHERE account  = 'shenguilin' AND  module  = 'qa' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 14:22:08: /index.php?m=block&f=printBlock&id=100&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '100'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'shenguilin' ORDER BY `id` desc  LIMIT 15 

20170911 14:22:08: /index.php?m=block&f=printBlock&id=101&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '101'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'shenguilin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170911 14:22:08: /index.php?m=block&f=printBlock&id=102&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '102'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.*,t2.name as productName,t3.name as buildName,t4.name as projectName FROM `zt_testtask` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product=t2.id  LEFT JOIN `zt_build` AS t3  ON t1.build=t3.id  LEFT JOIN `zt_project` AS t4  ON t1.project=t4.id  LEFT JOIN `zt_projectproduct` AS t5  ON t1.project=t5.project  WHERE t1.deleted  = '0' AND  t1.product IN ('3') AND  t1.product = t5.product  AND  t1.status  = 'wait' ORDER BY t1.`id` desc  LIMIT 15 

20170911 14:22:09: /index.php?m=project&f=index
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
  SELECT * FROM `zt_block` WHERE account  = 'shenguilin' AND  module  = 'project' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 14:22:09: /index.php?m=block&f=printBlock&id=57&module=project
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '57'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170911 14:22:09: /index.php?m=block&f=printBlock&id=58&module=project
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '58'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'shenguilin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'shenguilin' ORDER BY `id` desc  LIMIT 15 

20170911 14:22:11: /index.php?m=report&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170911 14:22:11: /index.php?m=report&f=productSummary
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id, code, name, PO FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed'
  SELECT * FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-11'
  SELECT id,plan,product,status FROM `zt_story` WHERE deleted  = '0'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 14:22:13: /index.php?m=product&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_block` WHERE account  = 'shenguilin' AND  module  = 'product' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 14:22:13: /index.php?m=block&f=printBlock&id=127&module=product
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

20170911 14:22:13: /index.php?m=block&f=printBlock&id=126&module=product
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '126'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-11 14:22:13' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170911 14:22:17: /index.php?m=branch&f=ajaxGetDropMenu&t=html&objectID=3&module=product&method=index&extra=
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 

20170911 14:22:25: /index.php?m=my&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'shenguilin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 14:22:25: /index.php?m=block&f=printBlock&id=122&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '122'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'shenguilin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'shenguilin' ORDER BY `id` desc  LIMIT 15 

20170911 14:22:25: /index.php?m=block&f=printBlock&id=121&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '121'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-11 14:22:25' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170911 14:22:25: /index.php?m=block&f=printBlock&id=118&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '118'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' ORDER BY `order`,`id` desc 
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  lib IN ('6','5')
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-09-11' AND  date  < '2017-09-12' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), ((product =',0,' AND project = '0') OR project IN ('3') OR INSTR(',3,', product) > 0), '1=1')  AND  IF(objectType != 'doclib', '1=1', objectID IN ('6','5'))   ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('12')
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170911 14:22:25: /index.php?m=block&f=printBlock&id=120&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '120'
  SELECT * FROM `zt_todo` WHERE account  = 'shenguilin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'shenguilin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170911 14:22:25: /index.php?m=block&f=printBlock&id=119&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '119'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170911 14:22:25: /index.php?m=block&f=printBlock&id=123&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '123'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'shenguilin' ORDER BY `id` desc  LIMIT 15 

20170911 14:22:25: /index.php?m=block&f=printBlock&id=117&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '117'

20170911 14:22:25: /index.php?m=block&f=printBlock&id=124&module=my
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

20170911 14:22:25: /index.php?m=block&f=printBlock&id=125&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '125'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'shenguilin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170911 14:22:27: /index.php?m=my&f=managecontacts
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id, listName FROM `zt_usercontact` WHERE account  = 'shenguilin'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 14:22:30: /index.php?m=my&f=managecontacts
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id, listName FROM `zt_usercontact` WHERE account  = 'shenguilin'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 14:22:33: /index.php?m=my&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'shenguilin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 14:22:33: /index.php?m=block&f=printBlock&id=122&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '122'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'shenguilin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'shenguilin' ORDER BY `id` desc  LIMIT 15 

20170911 14:22:33: /index.php?m=block&f=printBlock&id=118&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '118'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' ORDER BY `order`,`id` desc 
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  lib IN ('6','5')
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-09-11' AND  date  < '2017-09-12' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), ((product =',0,' AND project = '0') OR project IN ('3') OR INSTR(',3,', product) > 0), '1=1')  AND  IF(objectType != 'doclib', '1=1', objectID IN ('6','5'))   ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('12')
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170911 14:22:33: /index.php?m=block&f=printBlock&id=121&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '121'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-11 14:22:33' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170911 14:22:34: /index.php?m=block&f=printBlock&id=117&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '117'

20170911 14:22:34: /index.php?m=block&f=printBlock&id=120&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '120'
  SELECT * FROM `zt_todo` WHERE account  = 'shenguilin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'shenguilin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170911 14:22:34: /index.php?m=block&f=printBlock&id=119&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '119'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170911 14:22:34: /index.php?m=block&f=printBlock&id=124&module=my
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

20170911 14:22:34: /index.php?m=block&f=printBlock&id=125&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '125'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'shenguilin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170911 14:22:34: /index.php?m=block&f=printBlock&id=123&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '123'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'shenguilin' ORDER BY `id` desc  LIMIT 15 

20170911 14:23:01: /index.php?m=project&f=task&project=3
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

20170911 14:23:05: /index.php?m=task&f=view&task=11
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '11'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '11' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '8' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT * FROM `zt_story` WHERE `id` = '8' 
  SELECT title,spec,verify FROM `zt_storyspec` WHERE story  = '8' AND  version  = '1'
  SELECT t1.project, t2.name, t2.status FROM `zt_projectstory` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.story  = '8' ORDER BY t1.`project` DESC 
  SELECT id, name, assignedTo, project, status, consumed, `left` FROM `zt_task` WHERE story  = '8' AND  deleted  = '0' ORDER BY `id` DESC 
  SELECT * FROM `zt_storystage` WHERE story  = '8'
  SELECT id,title,branch FROM `zt_productplan` WHERE id IN ('2')
  SELECT * FROM `zt_file` WHERE objectType  = 'story' AND  objectID  = '8' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
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
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '11' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('157') ORDER BY `id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_task` WHERE id  = '11' OR project  = '3' AND  deleted  = '0' AND  status IN ('','wait','doing','done','pause','cancel')  ORDER BY `status`,`id` desc 
  SELECT path FROM `zt_module` WHERE id  = '15'
  SELECT * FROM `zt_module` WHERE id  = '15'
  SELECT name FROM `zt_product` WHERE id  = '3'
  SELECT path FROM `zt_module` WHERE id  = '15'
  SELECT * FROM `zt_module` WHERE id IN ('15') AND  deleted  = '0' ORDER BY `grade` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 14:23:09: /index.php?m=task&f=assignTo&projectID=3&taskID=11&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '11'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '11' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '8' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '11' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('157') ORDER BY `id` 
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
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 14:23:38: /index.php?m=my&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'shenguilin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 14:23:38: /index.php?m=block&f=printBlock&id=119&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '119'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170911 14:23:38: /index.php?m=block&f=printBlock&id=117&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '117'

20170911 14:23:38: /index.php?m=block&f=printBlock&id=120&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '120'
  SELECT * FROM `zt_todo` WHERE account  = 'shenguilin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'shenguilin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170911 14:23:38: /index.php?m=block&f=printBlock&id=122&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '122'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'shenguilin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'shenguilin' ORDER BY `id` desc  LIMIT 15 

20170911 14:23:38: /index.php?m=block&f=printBlock&id=118&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '118'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' ORDER BY `order`,`id` desc 
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  lib IN ('6','5')
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-09-11' AND  date  < '2017-09-12' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), ((product =',0,' AND project = '0') OR project IN ('3') OR INSTR(',3,', product) > 0), '1=1')  AND  IF(objectType != 'doclib', '1=1', objectID IN ('6','5'))   ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('12')
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170911 14:23:38: /index.php?m=block&f=printBlock&id=121&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '121'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-11 14:23:38' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170911 14:23:38: /index.php?m=block&f=printBlock&id=123&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '123'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'shenguilin' ORDER BY `id` desc  LIMIT 15 

20170911 14:23:38: /index.php?m=block&f=printBlock&id=124&module=my
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

20170911 14:23:38: /index.php?m=block&f=printBlock&id=125&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '125'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'shenguilin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170911 14:33:39: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170911 14:46:27: /
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170911 14:46:27: /index.php?m=user&f=login&referer=Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 14:46:28: /index.php?m=user&f=login&referer=Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'admin'
  SELECT * FROM `zt_user` WHERE account  = 'admin' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '125.70.30.148', `last` = '1505112388' WHERE account  = 'admin'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'admin'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'admin'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'admin'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'admin' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '1',`actor` = 'admin',`action` = 'login',`date` = '2017-09-11 14:46:28',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170911 14:46:29: /
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170911 14:46:29: /index.php?m=my&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 14:46:30: /index.php?m=block&f=printBlock&id=4&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170911 14:46:30: /index.php?m=block&f=printBlock&id=3&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170911 14:46:30: /index.php?m=block&f=printBlock&id=1&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '1'

20170911 14:46:30: /index.php?m=block&f=printBlock&id=2&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '2'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' ORDER BY `order`,`id` desc 
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  lib IN ('6','5')
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-09-11' AND  date  < '2017-09-12' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), (1), '1=1')  AND  IF(objectType != 'doclib', '1=1', objectID IN ('6','5'))   ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('1','12')
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170911 14:46:30: /index.php?m=block&f=printBlock&id=6&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170911 14:46:30: /index.php?m=block&f=printBlock&id=5&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-11 14:46:30' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170911 14:46:30: /index.php?m=block&f=printBlock&id=8&module=my
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

20170911 14:46:30: /index.php?m=block&f=printBlock&id=9&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'admin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170911 14:46:30: /index.php?m=block&f=printBlock&id=7&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170911 14:46:31: /index.php?m=admin&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 14:46:35: /index.php?m=company&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170911 14:46:35: /index.php?m=company&f=browse
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

20170911 14:46:37: /index.php?m=qa&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'qa' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 14:46:38: /index.php?m=block&f=printBlock&id=10&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '10'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170911 14:46:38: /index.php?m=block&f=printBlock&id=11&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '11'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'admin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170911 14:46:38: /index.php?m=block&f=printBlock&id=12&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '12'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.*,t2.name as productName,t3.name as buildName,t4.name as projectName FROM `zt_testtask` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product=t2.id  LEFT JOIN `zt_build` AS t3  ON t1.build=t3.id  LEFT JOIN `zt_project` AS t4  ON t1.project=t4.id  LEFT JOIN `zt_projectproduct` AS t5  ON t1.project=t5.project  WHERE t1.deleted  = '0' AND  t1.product IN ('3') AND  t1.product = t5.product  AND  t1.status  = 'wait' ORDER BY t1.`id` desc  LIMIT 15 

20170911 14:46:40: /index.php?m=testsuite&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'admin'))  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'admin'))  
  SELECT * FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'admin'))  ORDER BY `id` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 14:46:43: /index.php?m=testsuite&f=create&product=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 14:46:46: /index.php?m=project&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
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
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'project' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 14:46:47: /index.php?m=block&f=printBlock&id=14&module=project
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '14'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170911 14:46:47: /index.php?m=block&f=printBlock&id=13&module=project
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '13'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170911 14:46:48: /index.php?m=admin&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 14:46:49: /index.php?m=admin&f=sso
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 14:46:51: /index.php?m=dev&f=api
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 14:46:52: /index.php?m=admin&f=safe
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 14:46:54: /index.php?m=dev&f=api
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 14:46:56: /index.php?m=custom&f=set
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_lang` WHERE 1 = 1  AND  lang IN ('zh-cn') AND  module IN ('story') AND  section IN ('priList') ORDER BY `lang`,`id` 
  SELECT * FROM `zt_lang` WHERE 1 = 1  AND  lang IN ('all') AND  module IN ('story') AND  section IN ('priList') ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 14:46:58: /index.php?m=extension&f=browse
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_extension` WHERE status  = 'installed'
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 14:47:02: /index.php?m=extension&f=obtain
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_extension` WHERE status  = 'installed'
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 16:36:19: /
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170911 16:36:20: /index.php?m=user&f=login&referer=Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 16:36:25: /index.php?m=user&f=login&referer=Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'admin'
  SELECT * FROM `zt_user` WHERE account  = 'admin' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '125.70.30.150', `last` = '1505118985' WHERE account  = 'admin'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'admin'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'admin'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'admin'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'admin' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '1',`actor` = 'admin',`action` = 'login',`date` = '2017-09-11 16:36:25',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170911 16:36:25: /
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170911 16:36:25: /index.php?m=my&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 16:36:25: /index.php?m=block&f=printBlock&id=1&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '1'

20170911 16:36:25: /index.php?m=block&f=printBlock&id=6&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170911 16:36:25: /index.php?m=block&f=printBlock&id=2&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '2'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' ORDER BY `order`,`id` desc 
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  lib IN ('6','5')
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-09-11' AND  date  < '2017-09-12' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), (1), '1=1')  AND  IF(objectType != 'doclib', '1=1', objectID IN ('6','5'))   ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('1','12')
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170911 16:36:25: /index.php?m=block&f=printBlock&id=3&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170911 16:36:25: /index.php?m=block&f=printBlock&id=5&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-11 16:36:25' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170911 16:36:26: /index.php?m=block&f=printBlock&id=4&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170911 16:36:26: /index.php?m=block&f=printBlock&id=7&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170911 16:36:26: /index.php?m=block&f=printBlock&id=8&module=my
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

20170911 16:36:26: /index.php?m=block&f=printBlock&id=9&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'admin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170911 16:36:29: /index.php?m=user&f=logout
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '1',`actor` = 'admin',`action` = 'logout',`date` = '2017-09-11 16:36:29',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170911 16:36:29: /index.php?m=user&f=login
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 16:37:00: /index.php?m=user&f=login
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 16:37:01: /index.php?m=user&f=login
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 16:37:02: /index.php?m=user&f=login
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 16:37:13: /index.php?m=user&f=login
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 16:37:22: /index.php?m=user&f=login
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 16:37:31: /index.php?m=user&f=login
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 16:37:40: /index.php?m=user&f=login
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 16:37:57: /index.php?m=user&f=login
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'qiuqingqiang'
  SELECT * FROM `zt_user` WHERE account  = 'qiuqingqiang' AND  deleted  = '0'
  SELECT fails FROM `zt_user` WHERE account  = 'qiuqingqiang'
  UPDATE `zt_user` SET  `fails` = '1', `locked` = '0000-00-00 00:00:00' WHERE account  = 'qiuqingqiang'

20170911 16:38:02: /index.php?m=user&f=login
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'qiuqingqiang'
  SELECT * FROM `zt_user` WHERE account  = 'qiuqingqiang' AND  deleted  = '0'
  SELECT fails FROM `zt_user` WHERE account  = 'qiuqingqiang'
  UPDATE `zt_user` SET  `fails` = '2', `locked` = '0000-00-00 00:00:00' WHERE account  = 'qiuqingqiang'

20170911 16:38:11: /index.php?m=user&f=login
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'qiuqingqiang'
  SELECT * FROM `zt_user` WHERE account  = 'qiuqingqiang' AND  deleted  = '0'
  SELECT fails FROM `zt_user` WHERE account  = 'qiuqingqiang'
  UPDATE `zt_user` SET  `fails` = '3', `locked` = '0000-00-00 00:00:00' WHERE account  = 'qiuqingqiang'

20170911 16:38:15: /index.php?m=user&f=login
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'qiuqingqiang'
  SELECT * FROM `zt_user` WHERE account  = 'qiuqingqiang' AND  deleted  = '0'
  SELECT fails FROM `zt_user` WHERE account  = 'qiuqingqiang'
  UPDATE `zt_user` SET  `fails` = '4', `locked` = '0000-00-00 00:00:00' WHERE account  = 'qiuqingqiang'

20170911 16:38:22: /index.php?m=user&f=login
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 16:38:25: /index.php?m=user&f=login
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'qiuqingqiang'
  SELECT * FROM `zt_user` WHERE account  = 'qiuqingqiang' AND  password  = '2d31c68a7d560a0576ba35ca5ca44f4d' AND  deleted  = '0'
  SELECT fails FROM `zt_user` WHERE account  = 'qiuqingqiang'
  UPDATE `zt_user` SET  `fails` = '5', `locked` = '0000-00-00 00:00:00' WHERE account  = 'qiuqingqiang'

20170911 16:38:54: /index.php?m=user&f=login
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'qiuqingqiang'
  SELECT * FROM `zt_user` WHERE account  = 'qiuqingqiang' AND  deleted  = '0'
  SELECT fails FROM `zt_user` WHERE account  = 'qiuqingqiang'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '2017-09-11 16:38:54' WHERE account  = 'qiuqingqiang'

20170911 16:38:56: /index.php?m=user&f=login
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'admin'
  SELECT * FROM `zt_user` WHERE account  = 'admin' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '125.70.30.150', `last` = '1505119136' WHERE account  = 'admin'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'admin'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'admin'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'admin'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'admin' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '1',`actor` = 'admin',`action` = 'login',`date` = '2017-09-11 16:38:56',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170911 16:38:56: /index.php?m=my&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 16:38:56: /index.php?m=block&f=printBlock&id=1&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '1'

20170911 16:38:56: /index.php?m=block&f=printBlock&id=2&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '2'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' ORDER BY `order`,`id` desc 
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  lib IN ('6','5')
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-09-11' AND  date  < '2017-09-12' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), (1), '1=1')  AND  IF(objectType != 'doclib', '1=1', objectID IN ('6','5'))   ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('1','12')
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170911 16:38:56: /index.php?m=block&f=printBlock&id=4&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170911 16:38:56: /index.php?m=block&f=printBlock&id=3&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170911 16:38:57: /index.php?m=block&f=printBlock&id=5&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-11 16:38:57' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170911 16:38:57: /index.php?m=block&f=printBlock&id=6&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170911 16:38:57: /index.php?m=block&f=printBlock&id=7&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170911 16:38:57: /index.php?m=block&f=printBlock&id=9&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'admin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170911 16:38:57: /index.php?m=block&f=printBlock&id=8&module=my
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

20170911 16:38:59: /index.php?m=project&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
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
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'project' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 16:38:59: /index.php?m=block&f=printBlock&id=14&module=project
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '14'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170911 16:38:59: /index.php?m=block&f=printBlock&id=13&module=project
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '13'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170911 16:39:02: /index.php?m=project&f=build&projectID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
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
  SELECT t1.*, t2.name as projectName, t3.name as productName, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_product` AS t3  ON t1.product = t3.id  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.project  = '3' AND  t1.deleted  = '0' ORDER BY t1.`date` DESC,t1.`id` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 16:39:03: /index.php?m=doc&f=objectLibs&type=project&objectID=3&from=project
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id,name FROM `zt_project` WHERE id  = '3'
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
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' AND  project  = '3' ORDER BY `order`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 16:39:05: /index.php?m=doc&f=browse&libID=6&browseType=all&param=0&orderBy=id_desc&from=project
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_doclib` WHERE `id` = '6' 
  SELECT t1.* FROM `zt_doclib` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project=t2.id  WHERE t1.project  != '0' AND  t1.deleted  = '0' ORDER BY t2.`order` desc,t1.`order`,t1.`id` 
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
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  lib IN ('6')
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  id IN ('') ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_doc` WHERE deleted  = '0' AND  id IN ('') 
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  id IN ('') ORDER BY `id` desc 
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  id IN ('') ORDER BY `id` desc 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_module` WHERE root  = '6' AND  type  = 'doc' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '6' 
  SELECT * FROM `zt_module` WHERE root  = '6' AND  type  = 'doc' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 16:39:12: /index.php?m=project&f=manageproducts&projectID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
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
  SELECT * FROM `zt_project` WHERE `id` = '3' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '3' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '3'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `isClosed`,`order` desc 
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 16:39:14: /index.php?m=admin&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 16:40:38: /index.php?m=user&f=login
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'qiuqingqiang'

20170911 16:41:10: /index.php?m=user&f=login
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 16:41:13: /index.php?m=user&f=login
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'tangfei'
  SELECT * FROM `zt_user` WHERE account  = 'tangfei' AND  deleted  = '0'
  SELECT fails FROM `zt_user` WHERE account  = 'tangfei'

20170911 16:41:21: /index.php?m=user&f=login
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 16:41:28: /index.php?m=user&f=login
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'tangfei'
  SELECT * FROM `zt_user` WHERE account  = 'tangfei' AND  deleted  = '0'
  SELECT fails FROM `zt_user` WHERE account  = 'tangfei'

20170911 16:41:58: /index.php?m=user&f=login
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'lidongdong'
  SELECT * FROM `zt_user` WHERE account  = 'lidongdong' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '125.70.30.148', `last` = '1505119318' WHERE account  = 'lidongdong'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'lidongdong'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'lidongdong'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'lidongdong'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'lidongdong' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '13',`actor` = 'lidongdong',`action` = 'login',`date` = '2017-09-11 16:41:58',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170911 16:41:58: /index.php?m=index&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170911 16:41:58: /index.php?m=my&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'lidongdong' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 16:41:59: /index.php?m=block&f=printBlock&id=47&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '47'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' ORDER BY `order`,`id` desc 
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  lib IN ('6','5')
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-09-11' AND  date  < '2017-09-12' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), ((product =',0,' AND project = '0') OR project IN ('3') OR INSTR(',3,', product) > 0), '1=1')  AND  IF(objectType != 'doclib', '1=1', objectID IN ('6','5'))   ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('13','1','12')
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170911 16:41:59: /index.php?m=block&f=printBlock&id=50&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '50'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-11 16:41:59' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170911 16:41:59: /index.php?m=block&f=printBlock&id=46&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '46'

20170911 16:41:59: /index.php?m=block&f=printBlock&id=49&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '49'
  SELECT * FROM `zt_todo` WHERE account  = 'lidongdong' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'lidongdong' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170911 16:41:59: /index.php?m=block&f=printBlock&id=48&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '48'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170911 16:41:59: /index.php?m=block&f=printBlock&id=52&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '52'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'lidongdong' ORDER BY `id` desc  LIMIT 15 

20170911 16:41:59: /index.php?m=block&f=printBlock&id=51&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '51'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'lidongdong' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'lidongdong' ORDER BY `id` desc  LIMIT 15 

20170911 16:41:59: /index.php?m=block&f=printBlock&id=54&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '54'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'lidongdong' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170911 16:41:59: /index.php?m=block&f=printBlock&id=53&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '53'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170911 16:42:08: /index.php?m=product&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_block` WHERE account  = 'lidongdong' AND  module  = 'product' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 16:42:08: /index.php?m=block&f=printBlock&id=44&module=product
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '44'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-11 16:42:08' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170911 16:42:08: /index.php?m=block&f=printBlock&id=45&module=product
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '45'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170911 16:42:10: /index.php?m=project&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
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
  SELECT * FROM `zt_block` WHERE account  = 'lidongdong' AND  module  = 'project' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 16:42:11: /index.php?m=block&f=printBlock&id=56&module=project
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '56'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'lidongdong' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'lidongdong' ORDER BY `id` desc  LIMIT 15 

20170911 16:42:11: /index.php?m=block&f=printBlock&id=55&module=project
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '55'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170911 16:42:12: /index.php?m=qa&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 16:42:18: /index.php?m=custom&f=ajaxSetHomepage&t=html&module=qa&page=browse
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  REPLACE `zt_config` SET `owner` = 'lidongdong',`module` = 'qa',`section` = '',`key` = 'homepage',`value` = 'browse'

20170911 16:42:18: /index.php?m=qa&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 

20170911 16:42:18: /index.php?m=bug&f=browse
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
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

20170911 16:42:20: /index.php?m=doc&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
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

20170911 16:42:24: /index.php?m=doc&f=browse&libID=5
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_doclib` WHERE `id` = '5' 
  SELECT t1.* FROM `zt_doclib` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product=t2.id  WHERE t1.product  != '0' AND  t1.deleted  = '0' ORDER BY t2.`order` desc,t1.`order`,t1.`id` 
  SELECT * FROM `zt_doclib` WHERE `id` = '5' 
  SELECT id,name FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  lib IN ('5')
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  id IN ('') ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_doc` WHERE deleted  = '0' AND  id IN ('') 
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  id IN ('') ORDER BY `id` desc 
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  id IN ('') ORDER BY `id` desc 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_module` WHERE root  = '5' AND  type  = 'doc' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '5' 
  SELECT * FROM `zt_module` WHERE root  = '5' AND  type  = 'doc' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 16:42:26: /index.php?m=report&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170911 16:42:26: /index.php?m=report&f=productSummary
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id, code, name, PO FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed'
  SELECT * FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-11'
  SELECT id,plan,product,status FROM `zt_story` WHERE deleted  = '0'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 16:42:29: /index.php?m=company&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170911 16:42:29: /index.php?m=company&f=browse
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_dept` WHERE `id` = '0' 
  SELECT * FROM `zt_dept` ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_user` WHERE deleted  = '0' ORDER BY `id` 
  SELECT COUNT(*) AS recTotal FROM `zt_user` WHERE deleted  = '0' 
  SELECT * FROM `zt_user` WHERE deleted  = '0' ORDER BY `id` 
  SELECT id, title FROM `zt_userquery` WHERE account  = 'lidongdong' AND  module  = 'user' ORDER BY `id` asc 
  SELECT * FROM `zt_dept` WHERE `id` = '0' 
  SELECT * FROM `zt_dept` ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 16:42:30: /index.php?m=my&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'lidongdong' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 16:42:30: /index.php?m=block&f=printBlock&id=46&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '46'

20170911 16:42:30: /index.php?m=block&f=printBlock&id=47&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '47'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' ORDER BY `order`,`id` desc 
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  lib IN ('6','5')
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-09-11' AND  date  < '2017-09-12' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), ((product =',0,' AND project = '0') OR project IN ('3') OR INSTR(',3,', product) > 0), '1=1')  AND  IF(objectType != 'doclib', '1=1', objectID IN ('6','5'))   ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('13','1','12')
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170911 16:42:30: /index.php?m=block&f=printBlock&id=50&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '50'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-11 16:42:30' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170911 16:42:30: /index.php?m=block&f=printBlock&id=48&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '48'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170911 16:42:30: /index.php?m=block&f=printBlock&id=51&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '51'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'lidongdong' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'lidongdong' ORDER BY `id` desc  LIMIT 15 

20170911 16:42:30: /index.php?m=block&f=printBlock&id=52&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '52'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'lidongdong' ORDER BY `id` desc  LIMIT 15 

20170911 16:42:30: /index.php?m=block&f=printBlock&id=53&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '53'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170911 16:42:30: /index.php?m=block&f=printBlock&id=49&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '49'
  SELECT * FROM `zt_todo` WHERE account  = 'lidongdong' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'lidongdong' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170911 16:42:31: /index.php?m=block&f=printBlock&id=54&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '54'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'lidongdong' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170911 16:42:32: /index.php?m=project&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
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
  SELECT * FROM `zt_block` WHERE account  = 'lidongdong' AND  module  = 'project' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 16:42:32: /index.php?m=block&f=printBlock&id=56&module=project
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '56'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'lidongdong' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'lidongdong' ORDER BY `id` desc  LIMIT 15 

20170911 16:42:32: /index.php?m=block&f=printBlock&id=55&module=project
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '55'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170911 16:42:34: /index.php?m=project&f=task&projectID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
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

20170911 16:43:10: /index.php?m=product&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_block` WHERE account  = 'lidongdong' AND  module  = 'product' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 16:43:10: /index.php?m=block&f=printBlock&id=44&module=product
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '44'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-11 16:43:10' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170911 16:43:10: /index.php?m=block&f=printBlock&id=45&module=product
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '45'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170911 16:43:12: /index.php?m=my&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'lidongdong' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 16:43:12: /index.php?m=block&f=printBlock&id=46&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '46'

20170911 16:43:12: /index.php?m=block&f=printBlock&id=48&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '48'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170911 16:43:12: /index.php?m=block&f=printBlock&id=47&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '47'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' ORDER BY `order`,`id` desc 
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  lib IN ('6','5')
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-09-11' AND  date  < '2017-09-12' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), ((product =',0,' AND project = '0') OR project IN ('3') OR INSTR(',3,', product) > 0), '1=1')  AND  IF(objectType != 'doclib', '1=1', objectID IN ('6','5'))   ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('13','1','12')
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170911 16:43:12: /index.php?m=block&f=printBlock&id=51&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '51'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'lidongdong' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'lidongdong' ORDER BY `id` desc  LIMIT 15 

20170911 16:43:12: /index.php?m=block&f=printBlock&id=50&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '50'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-11 16:43:12' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170911 16:43:12: /index.php?m=block&f=printBlock&id=49&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '49'
  SELECT * FROM `zt_todo` WHERE account  = 'lidongdong' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'lidongdong' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170911 16:43:12: /index.php?m=block&f=printBlock&id=53&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '53'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170911 16:43:12: /index.php?m=block&f=printBlock&id=52&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '52'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'lidongdong' ORDER BY `id` desc  LIMIT 15 

20170911 16:43:12: /index.php?m=block&f=printBlock&id=54&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '54'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'lidongdong' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170911 16:43:48: /index.php?m=user&f=login
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 16:44:05: /index.php?m=product&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_block` WHERE account  = 'lidongdong' AND  module  = 'product' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 16:44:05: /index.php?m=block&f=printBlock&id=44&module=product
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '44'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-11 16:44:05' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170911 16:44:05: /index.php?m=block&f=printBlock&id=45&module=product
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '45'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170911 16:44:14: /index.php?m=project&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
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
  SELECT * FROM `zt_block` WHERE account  = 'lidongdong' AND  module  = 'project' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 16:44:14: /index.php?m=block&f=printBlock&id=55&module=project
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '55'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170911 16:44:14: /index.php?m=block&f=printBlock&id=56&module=project
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '56'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'lidongdong' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'lidongdong' ORDER BY `id` desc  LIMIT 15 

20170911 16:44:20: /index.php?m=project&f=task&projectID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
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

20170911 16:44:21: /index.php?m=project&f=story&projectID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
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
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '3' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT COUNT(distinct t2.id) AS recTotal FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '3' AND  t2.deleted  = '0' 
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '3' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '3' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT * FROM `zt_storystage` WHERE story IN ('9','8') AND  branch  = '0'
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '3' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '3' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type  = 'story' AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT id,title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT story, COUNT(*) AS tasks FROM `zt_task` WHERE story IN ('9','8') AND  deleted  = '0' AND  project  = '3' GROUP BY story
  SELECT story, COUNT(*) AS bugs FROM `zt_bug` WHERE story IN ('9','8') AND  deleted  = '0' AND  project  = '3' GROUP BY story
  SELECT story, COUNT(*) AS cases FROM `zt_case` WHERE story IN ('9','8') AND  deleted  = '0' GROUP BY story
  SELECT DISTINCT story FROM `zt_case` WHERE story IN ('9','8')
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '3' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '3' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '3' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT * FROM `zt_module` WHERE (root = 3 and type = 'story')  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 16:44:22: /index.php?m=search&f=buildForm&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT id, title FROM `zt_userquery` WHERE account  = 'lidongdong' AND  module  = 'projectStory' ORDER BY `id` asc 

20170911 16:44:22: /index.php?m=project&f=bug&projectID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
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
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '3'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  project  = '3' ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_bug` WHERE deleted  = '0' AND  project  = '3' 
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  project  = '3' ORDER BY `status`,`id` desc 
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  project  = '3' ORDER BY `status`,`id` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type  = 'story' AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('3') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT id,title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT t1.*, t2.name as projectName, t3.name as productName, t3.type as productType FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_product` AS t3  ON t1.product = t3.id  WHERE t1.id  = '0'
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 16:44:23: /index.php?m=search&f=buildForm&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT id, title FROM `zt_userquery` WHERE account  = 'lidongdong' AND  module  = 'projectBug' ORDER BY `id` asc 

20170911 16:44:24: /index.php?m=qa&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 

20170911 16:44:24: /index.php?m=bug&f=browse
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
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

20170911 16:45:10: /index.php?m=user&f=login
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 16:45:24: /index.php?m=user&f=login
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'huxiangjie@chinanuoyi.cn'
  SELECT * FROM `zt_user` WHERE account  = 'huxiangjie@chinanuoyi.cn' AND  deleted  = '0'
  SELECT fails FROM `zt_user` WHERE account  = 'huxiangjie@chinanuoyi.cn'

20170911 16:46:07: /index.php?m=user&f=login
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'huxiangjie'
  SELECT * FROM `zt_user` WHERE account  = 'huxiangjie' AND  deleted  = '0'
  SELECT fails FROM `zt_user` WHERE account  = 'huxiangjie'
  UPDATE `zt_user` SET  `fails` = '1', `locked` = '0000-00-00 00:00:00' WHERE account  = 'huxiangjie'

20170911 16:46:17: /index.php?m=user&f=login
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'huxiangjie'
  SELECT * FROM `zt_user` WHERE account  = 'huxiangjie' AND  deleted  = '0'
  SELECT fails FROM `zt_user` WHERE account  = 'huxiangjie'
  UPDATE `zt_user` SET  `fails` = '2', `locked` = '0000-00-00 00:00:00' WHERE account  = 'huxiangjie'

20170911 16:47:35: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170911 16:48:29: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170911 16:49:15: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170911 16:54:24: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170911 16:55:19: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170911 16:57:35: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170911 16:58:29: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170911 16:59:15: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170911 17:04:25: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170911 17:05:19: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170911 17:07:36: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170911 17:08:29: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170911 17:09:16: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170911 17:14:25: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170911 17:15:04: /
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170911 17:15:04: /index.php?m=user&f=login&referer=Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:15:19: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170911 17:15:30: /index.php?m=user&f=login&referer=Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'lidongdong'
  SELECT * FROM `zt_user` WHERE account  = 'lidongdong' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '125.70.30.148', `last` = '1505121330' WHERE account  = 'lidongdong'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'lidongdong'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'lidongdong'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'lidongdong'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'lidongdong' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '13',`actor` = 'lidongdong',`action` = 'login',`date` = '2017-09-11 17:15:30',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170911 17:15:30: /
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170911 17:15:30: /index.php?m=my&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'lidongdong' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:15:31: /index.php?m=block&f=printBlock&id=46&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '46'

20170911 17:15:31: /index.php?m=block&f=printBlock&id=48&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '48'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170911 17:15:31: /index.php?m=block&f=printBlock&id=50&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '50'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-11 17:15:31' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170911 17:15:31: /index.php?m=block&f=printBlock&id=47&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '47'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' ORDER BY `order`,`id` desc 
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  lib IN ('6','5')
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-09-11' AND  date  < '2017-09-12' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), ((product =',0,' AND project = '0') OR project IN ('3') OR INSTR(',3,', product) > 0), '1=1')  AND  IF(objectType != 'doclib', '1=1', objectID IN ('6','5'))   ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('13','1','12')
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170911 17:15:31: /index.php?m=block&f=printBlock&id=49&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '49'
  SELECT * FROM `zt_todo` WHERE account  = 'lidongdong' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'lidongdong' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170911 17:15:31: /index.php?m=block&f=printBlock&id=51&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '51'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'lidongdong' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'lidongdong' ORDER BY `id` desc  LIMIT 15 

20170911 17:15:31: /index.php?m=block&f=printBlock&id=52&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '52'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'lidongdong' ORDER BY `id` desc  LIMIT 15 

20170911 17:15:31: /index.php?m=block&f=printBlock&id=54&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '54'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'lidongdong' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170911 17:15:31: /index.php?m=block&f=printBlock&id=53&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '53'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170911 17:15:42: /index.php?m=product&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_block` WHERE account  = 'lidongdong' AND  module  = 'product' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:15:42: /index.php?m=block&f=printBlock&id=44&module=product
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '44'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-11 17:15:42' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170911 17:15:42: /index.php?m=block&f=printBlock&id=45&module=product
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '45'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'lidongdong' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170911 17:15:55: /index.php?m=product&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
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

20170911 17:15:58: /index.php?m=story&f=create&productID=3&branch=0&moduleID=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT account, realname, deleted, INSTR(',po,pd,', role) AS roleOrder FROM `zt_user` WHERE deleted  = '0' ORDER BY `roleOrder` DESC,`account` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type  = 'story' AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT id,CONCAT(title, " [", begin, " ~ ", end, "]") as title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0' AND  end  > '2017-09-11' ORDER BY `begin` desc 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT id, listName FROM `zt_usercontact` WHERE account  = 'lidongdong'
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:17:36: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170911 17:18:02: /index.php?m=user&f=login
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:18:25: /index.php?m=story&f=create&productID=3&branch=0&moduleID=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id,title FROM `zt_story` WHERE deleted  = '0' AND  title IN ('xuqiu1') AND  openedDate  >= '2017-09-11 17:17:24' AND  product=3 
  INSERT INTO `zt_story` SET `product` = '3',`branch` = '0',`module` = '15',`plan` = '2',`source` = 'customer',`sourceNote` = '',`color` = '',`title` = 'xuqiu1',`pri` = '0',`estimate` = '',`mailto` = '',`keywords` = '',`openedBy` = 'lidongdong',`openedDate` = '2017-09-11 17:18:24',`assignedDate` = '0',`version` = '1',`status` = 'active',`stage` = 'planned'
  INSERT INTO `zt_storyspec` SET `story` = '10',`version` = '1',`title` = 'xuqiu1',`spec` = 'asdasda',`verify` = ''
  DELETE FROM `zt_storystage` WHERE story  = '10'
  SELECT * FROM `zt_story` WHERE `id` = '10' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.project,t3.branch FROM `zt_projectstory` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  WHERE t1.story  = '10' AND  t2.deleted  = '0'
  SELECT * FROM `zt_productplan` WHERE id IN ('2')
  UPDATE `zt_story` SET  `stage` = 'wait' WHERE id  = '10' AND  plan  = ''
  INSERT INTO `zt_storystage` SET  `story` = '10', `branch` = '0', `stage` = 'planned'
  UPDATE `zt_story` SET  `stage` = 'planned' WHERE id  = '10' AND  (plan != '' AND plan != '0') 
  SELECT type,project,status FROM `zt_task` WHERE project IN ('') AND  story  = '10' AND  type IN ('devel','test') AND  status  != 'cancel' AND  closedReason  != 'cancel' AND  deleted  = '0'
  SELECT * FROM `zt_release` WHERE CONCAT(',', stories, ',')  LIKE '%,10,%' AND  deleted  = '0'
  INSERT INTO `zt_storystage` SET  `story` = '10', `branch` = '0', `stage` = 'planned'
  UPDATE `zt_story` SET  `stage` = 'planned' WHERE id  = '10'
  SELECT product FROM `zt_story` WHERE id  = '10'
  SELECT project FROM `zt_projectstory` WHERE story  = '10'
  INSERT INTO `zt_action` SET `objectType` = 'story',`objectID` = '10',`actor` = 'lidongdong',`action` = 'opened',`date` = '2017-09-11 17:18:25',`comment` = '',`extra` = '',`product` = ',3,',`project` = '0'
  SELECT * FROM `zt_story` WHERE `id` = '10' 
  SELECT title,spec,verify FROM `zt_storyspec` WHERE story  = '10' AND  version  = '1'
  SELECT t1.project, t2.name, t2.status FROM `zt_projectstory` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.story  = '10' ORDER BY t1.`project` DESC 
  SELECT id, name, assignedTo, project, status, consumed, `left` FROM `zt_task` WHERE story  = '10' AND  deleted  = '0' ORDER BY `id` DESC 
  SELECT * FROM `zt_storystage` WHERE story  = '10'
  SELECT id,title,branch FROM `zt_productplan` WHERE id IN ('2')
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_action` WHERE `id` = '268' 
  SELECT * FROM `zt_history` WHERE action IN ('268') ORDER BY `id` 

20170911 17:18:25: /index.php?m=story&f=view&storyID=10
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_story` WHERE `id` = '10' 
  SELECT title,spec,verify FROM `zt_storyspec` WHERE story  = '10' AND  version  = '1'
  SELECT t1.project, t2.name, t2.status FROM `zt_projectstory` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.story  = '10' ORDER BY t1.`project` DESC 
  SELECT id, name, assignedTo, project, status, consumed, `left` FROM `zt_task` WHERE story  = '10' AND  deleted  = '0' ORDER BY `id` DESC 
  SELECT * FROM `zt_storystage` WHERE story  = '10'
  SELECT id,title,branch FROM `zt_productplan` WHERE id IN ('2')
  SELECT * FROM `zt_file` WHERE objectType  = 'story' AND  objectID  = '10' AND  extra  != 'editor'
  SELECT name, id, type FROM `zt_product` WHERE `id` = '3' 
  SELECT title FROM `zt_productplan` WHERE `id` = '2' 
  SELECT id,title FROM `zt_bug` WHERE story  = '10' AND  deleted  = '0'
  SELECT id,title FROM `zt_bug` WHERE toStory  = '10'
  SELECT id,title FROM `zt_case` WHERE story  = '10' AND  deleted  = '0'
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
  SELECT * FROM `zt_action` WHERE objectType  = 'story' AND  objectID  = '10' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('268') ORDER BY `id` 
  SELECT * FROM `zt_story` WHERE id  = '10' OR product IN ('3') AND  status IN ('','draft','active','changed') AND  deleted  = '0'  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:18:28: /index.php?m=product&f=ajaxGetDropMenu&t=html&objectID=3&module=product&method=browse&extra=
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 

20170911 17:18:29: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170911 17:18:31: /index.php?m=product&f=dynamic&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' ORDER BY `order`,`id` desc 
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  lib IN ('6','5')
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-09-11' AND  date  < '2017-09-12' AND  product  LIKE '%,3,%' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), ((product =',0,' AND project = '0') OR project IN ('3') OR product like'%,3,%' or product='3'), '1=1')  AND  IF(objectType != 'doclib', '1=1', objectID IN ('6','5'))   ORDER BY `date` desc,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_action` WHERE 1  AND  date  > '2017-09-11' AND  date  < '2017-09-12' AND  product  LIKE '%,3,%' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), ((product =',0,' AND project = '0') OR project IN ('3') OR product like'%,3,%' or product='3'), '1=1')  AND  IF(objectType != 'doclib', '1=1', objectID IN ('6','5'))   
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-09-11' AND  date  < '2017-09-12' AND  product  LIKE '%,3,%' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), ((product =',0,' AND project = '0') OR project IN ('3') OR product like'%,3,%' or product='3'), '1=1')  AND  IF(objectType != 'doclib', '1=1', objectID IN ('6','5'))   ORDER BY `date` desc,`id` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, title AS name FROM `zt_story` WHERE id IN ('10')
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:18:31: /index.php?m=user&f=login
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'xiaojian'
  SELECT * FROM `zt_user` WHERE account  = 'xiaojian' AND  deleted  = '0'
  SELECT fails FROM `zt_user` WHERE account  = 'xiaojian'
  UPDATE `zt_user` SET  `fails` = '1', `locked` = '0000-00-00 00:00:00' WHERE account  = 'xiaojian'

20170911 17:18:31: /index.php?m=product&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
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
  SELECT story, COUNT(*) AS tasks FROM `zt_task` WHERE story IN ('10','9','8') AND  deleted  = '0' GROUP BY story
  SELECT story, COUNT(*) AS bugs FROM `zt_bug` WHERE story IN ('10','9','8') AND  deleted  = '0' GROUP BY story
  SELECT story, COUNT(*) AS cases FROM `zt_case` WHERE story IN ('10','9','8') AND  deleted  = '0' GROUP BY story
  SELECT id,CONCAT(title, " [", begin, " ~ ", end, "]") as title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type  = 'story' AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT id,CONCAT(title, " [", begin, " ~ ", end, "]") as title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT DISTINCT story FROM `zt_case` WHERE story IN ('10','9','8')
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type  = 'story' AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT account, realname, deleted, INSTR(',pd,po,', role) AS roleOrder FROM `zt_user` WHERE deleted  = '0' ORDER BY `roleOrder` DESC,`account` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type  = 'story' AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_storystage` WHERE story IN ('10','9','8')
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:18:43: /index.php?m=user&f=login
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'xiaojian'
  SELECT * FROM `zt_user` WHERE account  = 'xiaojian' AND  deleted  = '0'
  SELECT fails FROM `zt_user` WHERE account  = 'xiaojian'
  UPDATE `zt_user` SET  `fails` = '2', `locked` = '0000-00-00 00:00:00' WHERE account  = 'xiaojian'

20170911 17:18:55: /index.php?m=user&f=login
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'xiaojian'
  SELECT * FROM `zt_user` WHERE account  = 'xiaojian' AND  deleted  = '0'
  SELECT fails FROM `zt_user` WHERE account  = 'xiaojian'
  UPDATE `zt_user` SET  `fails` = '3', `locked` = '0000-00-00 00:00:00' WHERE account  = 'xiaojian'

20170911 17:19:03: /index.php?m=user&f=logout
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '13',`actor` = 'lidongdong',`action` = 'logout',`date` = '2017-09-11 17:19:03',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170911 17:19:03: /index.php?m=user&f=login
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:19:10: /index.php?m=user&f=login
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'shenguilin'
  SELECT * FROM `zt_user` WHERE account  = 'shenguilin' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '125.70.30.150', `last` = '1505121550' WHERE account  = 'shenguilin'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'shenguilin'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'shenguilin'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'shenguilin'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'shenguilin' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '12',`actor` = 'shenguilin',`action` = 'login',`date` = '2017-09-11 17:19:10',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170911 17:19:10: /index.php?m=product&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
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
  SELECT story, COUNT(*) AS tasks FROM `zt_task` WHERE story IN ('10','9','8') AND  deleted  = '0' GROUP BY story
  SELECT story, COUNT(*) AS bugs FROM `zt_bug` WHERE story IN ('10','9','8') AND  deleted  = '0' GROUP BY story
  SELECT story, COUNT(*) AS cases FROM `zt_case` WHERE story IN ('10','9','8') AND  deleted  = '0' GROUP BY story
  SELECT id,CONCAT(title, " [", begin, " ~ ", end, "]") as title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type  = 'story' AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT id,CONCAT(title, " [", begin, " ~ ", end, "]") as title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT DISTINCT story FROM `zt_case` WHERE story IN ('10','9','8')
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type  = 'story' AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT account, realname, deleted, INSTR(',pd,po,', role) AS roleOrder FROM `zt_user` WHERE deleted  = '0' ORDER BY `roleOrder` DESC,`account` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type  = 'story' AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_storystage` WHERE story IN ('10','9','8')
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:19:26: /index.php?m=project&f=index
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
  SELECT * FROM `zt_block` WHERE account  = 'shenguilin' AND  module  = 'project' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:19:26: /index.php?m=block&f=printBlock&id=57&module=project
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '57'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170911 17:19:26: /index.php?m=block&f=printBlock&id=58&module=project
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '58'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'shenguilin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'shenguilin' ORDER BY `id` desc  LIMIT 15 

20170911 17:19:27: /index.php?m=user&f=login
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'admin'
  SELECT * FROM `zt_user` WHERE account  = 'admin' AND  deleted  = '0'
  SELECT fails FROM `zt_user` WHERE account  = 'admin'
  UPDATE `zt_user` SET  `fails` = '1', `locked` = '0000-00-00 00:00:00' WHERE account  = 'admin'

20170911 17:19:36: /index.php?m=project&f=create
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
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
  SELECT id, name FROM `zt_group`
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('')
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:19:59: /index.php?m=branch&f=ajaxGetBranches&t=html&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 

20170911 17:20:20: /index.php?m=project&f=create
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  INSERT INTO `zt_project` SET `name` = 'aaaaa',`code` = 'aaa',`begin` = '2017-09-11',`end` = '2017-09-30',`days` = '15',`team` = 'aaa',`type` = 'sprint',`desc` = 'aaa',`acl` = 'open',`status` = 'wait',`whitelist` = '',`openedVersion` = '9.5'
  UPDATE `zt_project` SET  `order` = '20' WHERE id  = '4'
  INSERT INTO `zt_team` SET `project` = '4',`account` = 'shenguilin',`role` = '项目经理',`join` = '2017-09-11',`days` = '15',`hours` = '7.0'
  INSERT INTO `zt_doclib` SET `project` = '4',`name` = '项目主库',`main` = '1',`acl` = 'open'
  SELECT product FROM `zt_projectproduct` WHERE project  = '4'
  DELETE FROM `zt_projectproduct` WHERE project  = '4'
  INSERT INTO `zt_projectproduct` SET `project` = '4',`product` = '3',`branch` = '0'
  SELECT product FROM `zt_projectproduct` WHERE project  = '4'
  INSERT INTO `zt_action` SET `objectType` = 'project',`objectID` = '4',`actor` = 'shenguilin',`action` = 'opened',`date` = '2017-09-11 17:20:20',`comment` = '',`extra` = '',`product` = ',3,',`project` = '4'

20170911 17:20:20: /index.php?m=project&f=create&projectID=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 

20170911 17:20:24: /index.php?m=project&f=team&projectID=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT id, name FROM `zt_project` WHERE parent  = '4'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '4' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('271') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:20:27: /index.php?m=project&f=managemembers&projectID=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT account, realname, deleted, INSTR(',td,pm,qd,qa,dev,', role) AS roleOrder FROM `zt_user` WHERE deleted  = '0' ORDER BY `roleOrder` DESC,`account` 
  SELECT account, role FROM `zt_user` WHERE account IN ('','fanxiaoqian','huxiangjie','liudongchuan','qiyouyun','xiangzhenhong','xiaojian','xumaohuai','zhangchao','zhating','lixingsheng','tianliwei','shenguilin','chenyang','lishiyao','qiuqingqiang','admin','lanmaoyun','lidongdong','xuqingqing')
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4'
  SELECT t1.project, t2.name as projectName FROM `zt_team` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.account  = 'shenguilin' AND  t1.project  != '4' GROUP BY t1.project ORDER BY t1.`project` DESC 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_dept` WHERE `id` = '0' 
  SELECT * FROM `zt_dept` ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:21:05: /index.php?m=project&f=managemembers&projectID=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  UPDATE `zt_team` SET `role` = '项目经理',`days` = '15',`hours` = '7.0' WHERE project  = '4' AND  account  = 'shenguilin'
  INSERT INTO `zt_team` SET `role` = '研发',`days` = '15',`hours` = '7.0',`project` = '4',`account` = 'xumaohuai',`join` = '2017-09-11'
  INSERT INTO `zt_team` SET `role` = '产品经理',`days` = '15',`hours` = '7.0',`project` = '4',`account` = 'lidongdong',`join` = '2017-09-11'
  INSERT INTO `zt_team` SET `role` = '测试主管',`days` = '15',`hours` = '7.0',`project` = '4',`account` = 'tianliwei',`join` = '2017-09-11'
  INSERT INTO `zt_team` SET `role` = '研发主管',`days` = '15',`hours` = '7.0',`project` = '4',`account` = 'qiuqingqiang',`join` = '2017-09-11'

20170911 17:21:06: /index.php?m=project&f=team&projectID=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT id, name FROM `zt_project` WHERE parent  = '4'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '4' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('271') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:21:11: /index.php?m=project&f=story&projectID=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT id, name FROM `zt_project` WHERE parent  = '4'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '4' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('271') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT COUNT(distinct t2.id) AS recTotal FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' 
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '4' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type  = 'story' AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT id,title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT story, COUNT(*) AS tasks FROM `zt_task` WHERE story IN ('') AND  deleted  = '0' AND  project  = '4' GROUP BY story
  SELECT story, COUNT(*) AS bugs FROM `zt_bug` WHERE story IN ('') AND  deleted  = '0' AND  project  = '4' GROUP BY story
  SELECT story, COUNT(*) AS cases FROM `zt_case` WHERE story IN ('') AND  deleted  = '0' GROUP BY story
  SELECT DISTINCT story FROM `zt_case` WHERE story IN ('')
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '4' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT * FROM `zt_module` WHERE (root = 3 and type = 'story')  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:21:11: /index.php?m=search&f=buildForm&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT id, title FROM `zt_userquery` WHERE account  = 'shenguilin' AND  module  = 'projectStory' ORDER BY `id` asc 

20170911 17:21:13: /index.php?m=project&f=linkStory&project=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type  = 'story' AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT id,title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT * FROM `zt_story` WHERE product IN ('3') AND  status IN ('active') AND  deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_story` WHERE product IN ('3') AND  status IN ('active') AND  deleted  = '0' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('')
  SELECT t2.id, t2.title, t2.module, t2.pri, t2.estimate, t3.name AS product FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_product` AS t3  ON t1.product = t3.id  WHERE t1.project  = '4' AND  t2.deleted  = '0'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:21:14: /index.php?m=search&f=buildForm&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT id, title FROM `zt_userquery` WHERE account  = 'shenguilin' AND  module  = 'story' ORDER BY `id` asc 

20170911 17:21:43: /index.php?m=project&f=linkStory&project=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT id, version FROM `zt_story` WHERE id IN ('10')
  INSERT INTO `zt_projectstory` SET `project` = '4',`product` = '3',`story` = '10',`version` = '1'
  DELETE FROM `zt_storystage` WHERE story  = '10'
  SELECT * FROM `zt_story` WHERE `id` = '10' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.project,t3.branch FROM `zt_projectstory` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  WHERE t1.story  = '10' AND  t2.deleted  = '0'
  SELECT * FROM `zt_productplan` WHERE id IN ('2')
  SELECT type,project,status FROM `zt_task` WHERE project IN ('4') AND  story  = '10' AND  type IN ('devel','test') AND  status  != 'cancel' AND  closedReason  != 'cancel' AND  deleted  = '0'
  INSERT INTO `zt_storystage` SET  `story` = '10', `branch` = '0', `stage` = 'projected'
  UPDATE `zt_story` SET  `stage` = 'projected' WHERE id  = '10'
  SELECT * FROM `zt_release` WHERE CONCAT(',', stories, ',')  LIKE '%,10,%' AND  deleted  = '0'
  INSERT INTO `zt_storystage` SET  `story` = '10', `branch` = '0', `stage` = 'projected'
  UPDATE `zt_story` SET  `stage` = 'projected' WHERE id  = '10'
  SELECT product FROM `zt_story` WHERE id  = '10'
  SELECT project FROM `zt_projectstory` WHERE story  = '10'
  INSERT INTO `zt_action` SET `objectType` = 'story',`objectID` = '10',`actor` = 'shenguilin',`action` = 'linked2project',`date` = '2017-09-11 17:21:43',`comment` = '',`extra` = '4',`product` = ',3,',`project` = '4'

20170911 17:21:43: /index.php?m=project&f=story&projectID=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT id, name FROM `zt_project` WHERE parent  = '4'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '4' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('271') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT COUNT(distinct t2.id) AS recTotal FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' 
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT * FROM `zt_storystage` WHERE story IN ('10') AND  branch  = '0'
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '4' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type  = 'story' AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT id,title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT story, COUNT(*) AS tasks FROM `zt_task` WHERE story IN ('10') AND  deleted  = '0' AND  project  = '4' GROUP BY story
  SELECT story, COUNT(*) AS bugs FROM `zt_bug` WHERE story IN ('10') AND  deleted  = '0' AND  project  = '4' GROUP BY story
  SELECT story, COUNT(*) AS cases FROM `zt_case` WHERE story IN ('10') AND  deleted  = '0' GROUP BY story
  SELECT DISTINCT story FROM `zt_case` WHERE story IN ('10')
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '4' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT * FROM `zt_module` WHERE (root = 3 and type = 'story')  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:21:44: /index.php?m=search&f=buildForm&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT id, title FROM `zt_userquery` WHERE account  = 'shenguilin' AND  module  = 'projectStory' ORDER BY `id` asc 

20170911 17:21:53: /index.php?m=task&f=create&projectID=4&story=10&moduleID=15
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_module` WHERE `id` = '15' 
  SELECT id FROM `zt_module` WHERE path  LIKE ',15,%' AND  deleted  = '0'
  SELECT t2.id, t2.title, t2.module, t2.pri, t2.estimate, t3.name AS product FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_product` AS t3  ON t1.product = t3.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' AND  t2.module IN ('15')
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4' AND  t2.deleted  = '0'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '4'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT id, listName FROM `zt_usercontact` WHERE account  = 'shenguilin'
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:21:56: /index.php?m=project&f=story&projectID=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT id, name FROM `zt_project` WHERE parent  = '4'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '4' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('271') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT COUNT(distinct t2.id) AS recTotal FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' 
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT * FROM `zt_storystage` WHERE story IN ('10') AND  branch  = '0'
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '4' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type  = 'story' AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT id,title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT story, COUNT(*) AS tasks FROM `zt_task` WHERE story IN ('10') AND  deleted  = '0' AND  project  = '4' GROUP BY story
  SELECT story, COUNT(*) AS bugs FROM `zt_bug` WHERE story IN ('10') AND  deleted  = '0' AND  project  = '4' GROUP BY story
  SELECT story, COUNT(*) AS cases FROM `zt_case` WHERE story IN ('10') AND  deleted  = '0' GROUP BY story
  SELECT DISTINCT story FROM `zt_case` WHERE story IN ('10')
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '4' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT * FROM `zt_module` WHERE (root = 3 and type = 'story')  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:21:57: /index.php?m=search&f=buildForm&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT id, title FROM `zt_userquery` WHERE account  = 'shenguilin' AND  module  = 'projectStory' ORDER BY `id` asc 

20170911 17:22:00: /index.php?m=task&f=batchCreate&projectID=4&story=10
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.title, t2.module, t2.pri, t2.estimate, t3.name AS product FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_product` AS t3  ON t1.product = t3.id  WHERE t1.project  = '4' AND  t2.deleted  = '0'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4' AND  t2.deleted  = '0'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '4'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT * FROM `zt_story` WHERE `id` = '10' 
  SELECT title,spec,verify FROM `zt_storyspec` WHERE story  = '10' AND  version  = '1'
  SELECT t1.project, t2.name, t2.status FROM `zt_projectstory` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.story  = '10' ORDER BY t1.`project` DESC 
  SELECT id, name, assignedTo, project, status, consumed, `left` FROM `zt_task` WHERE story  = '10' AND  deleted  = '0' ORDER BY `id` DESC 
  SELECT * FROM `zt_storystage` WHERE story  = '10'
  SELECT id,title,branch FROM `zt_productplan` WHERE id IN ('2')
  SELECT story, COUNT(*) AS tasks FROM `zt_task` WHERE story IN ('','10') AND  deleted  = '0' AND  project  = '4' GROUP BY story
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:22:25: /index.php?m=task&f=batchCreate&projectID=4&story=10
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT id,name FROM `zt_task` WHERE deleted  = '0' AND  name IN ('andr','ios','ces','ui','','','','','','') AND  openedDate  >= '2017-09-11 17:21:25' AND  project=4 
  SELECT version FROM `zt_story` WHERE id  = '10'
  INSERT INTO `zt_task` SET `story` = '10',`type` = 'devel',`module` = '15',`assignedTo` = '',`color` = '',`name` = 'andr',`desc` = '',`pri` = '3',`estimate` = '',`left` = '',`project` = '4',`estStarted` = '0000-00-00',`deadline` = '0000-00-00',`status` = 'wait',`openedBy` = 'shenguilin',`openedDate` = '2017-09-11 17:22:25',`storyVersion` = '1'
  DELETE FROM `zt_storystage` WHERE story  = '10'
  SELECT * FROM `zt_story` WHERE `id` = '10' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.project,t3.branch FROM `zt_projectstory` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  WHERE t1.story  = '10' AND  t2.deleted  = '0'
  SELECT * FROM `zt_productplan` WHERE id IN ('2')
  SELECT type,project,status FROM `zt_task` WHERE project IN ('4') AND  story  = '10' AND  type IN ('devel','test') AND  status  != 'cancel' AND  closedReason  != 'cancel' AND  deleted  = '0'
  SELECT * FROM `zt_release` WHERE CONCAT(',', stories, ',')  LIKE '%,10,%' AND  deleted  = '0'
  INSERT INTO `zt_storystage` SET  `story` = '10', `branch` = '0', `stage` = 'projected'
  UPDATE `zt_story` SET  `stage` = 'projected' WHERE id  = '10'
  SELECT project, story FROM `zt_task` WHERE id  = '13'
  SELECT product FROM `zt_story` WHERE id  = '10'
  INSERT INTO `zt_action` SET `objectType` = 'task',`objectID` = '13',`actor` = 'shenguilin',`action` = 'opened',`date` = '2017-09-11 17:22:25',`comment` = '',`extra` = '',`product` = ',3,',`project` = '4'
  SELECT version FROM `zt_story` WHERE id  = '10'
  INSERT INTO `zt_task` SET `story` = '10',`type` = 'devel',`module` = '15',`assignedTo` = '',`color` = '',`name` = 'ios',`desc` = '',`pri` = '3',`estimate` = '',`left` = '',`project` = '4',`estStarted` = '0000-00-00',`deadline` = '0000-00-00',`status` = 'wait',`openedBy` = 'shenguilin',`openedDate` = '2017-09-11 17:22:25',`storyVersion` = '1'
  DELETE FROM `zt_storystage` WHERE story  = '10'
  SELECT * FROM `zt_story` WHERE `id` = '10' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.project,t3.branch FROM `zt_projectstory` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  WHERE t1.story  = '10' AND  t2.deleted  = '0'
  SELECT * FROM `zt_productplan` WHERE id IN ('2')
  SELECT type,project,status FROM `zt_task` WHERE project IN ('4') AND  story  = '10' AND  type IN ('devel','test') AND  status  != 'cancel' AND  closedReason  != 'cancel' AND  deleted  = '0'
  SELECT * FROM `zt_release` WHERE CONCAT(',', stories, ',')  LIKE '%,10,%' AND  deleted  = '0'
  INSERT INTO `zt_storystage` SET  `story` = '10', `branch` = '0', `stage` = 'projected'
  UPDATE `zt_story` SET  `stage` = 'projected' WHERE id  = '10'
  SELECT project, story FROM `zt_task` WHERE id  = '14'
  SELECT product FROM `zt_story` WHERE id  = '10'
  INSERT INTO `zt_action` SET `objectType` = 'task',`objectID` = '14',`actor` = 'shenguilin',`action` = 'opened',`date` = '2017-09-11 17:22:25',`comment` = '',`extra` = '',`product` = ',3,',`project` = '4'
  SELECT version FROM `zt_story` WHERE id  = '10'
  INSERT INTO `zt_task` SET `story` = '10',`type` = 'test',`module` = '15',`assignedTo` = '',`color` = '',`name` = 'ces',`desc` = '',`pri` = '3',`estimate` = '',`left` = '',`project` = '4',`estStarted` = '0000-00-00',`deadline` = '0000-00-00',`status` = 'wait',`openedBy` = 'shenguilin',`openedDate` = '2017-09-11 17:22:25',`storyVersion` = '1'
  DELETE FROM `zt_storystage` WHERE story  = '10'
  SELECT * FROM `zt_story` WHERE `id` = '10' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.project,t3.branch FROM `zt_projectstory` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  WHERE t1.story  = '10' AND  t2.deleted  = '0'
  SELECT * FROM `zt_productplan` WHERE id IN ('2')
  SELECT type,project,status FROM `zt_task` WHERE project IN ('4') AND  story  = '10' AND  type IN ('devel','test') AND  status  != 'cancel' AND  closedReason  != 'cancel' AND  deleted  = '0'
  SELECT * FROM `zt_release` WHERE CONCAT(',', stories, ',')  LIKE '%,10,%' AND  deleted  = '0'
  INSERT INTO `zt_storystage` SET  `story` = '10', `branch` = '0', `stage` = 'projected'
  UPDATE `zt_story` SET  `stage` = 'projected' WHERE id  = '10'
  SELECT project, story FROM `zt_task` WHERE id  = '15'
  SELECT product FROM `zt_story` WHERE id  = '10'
  INSERT INTO `zt_action` SET `objectType` = 'task',`objectID` = '15',`actor` = 'shenguilin',`action` = 'opened',`date` = '2017-09-11 17:22:25',`comment` = '',`extra` = '',`product` = ',3,',`project` = '4'
  SELECT version FROM `zt_story` WHERE id  = '10'
  INSERT INTO `zt_task` SET `story` = '10',`type` = 'test',`module` = '15',`assignedTo` = '',`color` = '',`name` = 'ui',`desc` = '',`pri` = '3',`estimate` = '',`left` = '',`project` = '4',`estStarted` = '0000-00-00',`deadline` = '0000-00-00',`status` = 'wait',`openedBy` = 'shenguilin',`openedDate` = '2017-09-11 17:22:25',`storyVersion` = '1'
  DELETE FROM `zt_storystage` WHERE story  = '10'
  SELECT * FROM `zt_story` WHERE `id` = '10' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.project,t3.branch FROM `zt_projectstory` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  WHERE t1.story  = '10' AND  t2.deleted  = '0'
  SELECT * FROM `zt_productplan` WHERE id IN ('2')
  SELECT type,project,status FROM `zt_task` WHERE project IN ('4') AND  story  = '10' AND  type IN ('devel','test') AND  status  != 'cancel' AND  closedReason  != 'cancel' AND  deleted  = '0'
  SELECT * FROM `zt_release` WHERE CONCAT(',', stories, ',')  LIKE '%,10,%' AND  deleted  = '0'
  INSERT INTO `zt_storystage` SET  `story` = '10', `branch` = '0', `stage` = 'projected'
  UPDATE `zt_story` SET  `stage` = 'projected' WHERE id  = '10'
  SELECT project, story FROM `zt_task` WHERE id  = '16'
  SELECT product FROM `zt_story` WHERE id  = '10'
  INSERT INTO `zt_action` SET `objectType` = 'task',`objectID` = '16',`actor` = 'shenguilin',`action` = 'opened',`date` = '2017-09-11 17:22:25',`comment` = '',`extra` = '',`product` = ',3,',`project` = '4'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '13'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '13' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_action` WHERE `id` = '273' 
  SELECT * FROM `zt_history` WHERE action IN ('273') ORDER BY `id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '14'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '14' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_action` WHERE `id` = '274' 
  SELECT * FROM `zt_history` WHERE action IN ('274') ORDER BY `id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '15'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '15' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_action` WHERE `id` = '275' 
  SELECT * FROM `zt_history` WHERE action IN ('275') ORDER BY `id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '16'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '16' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_action` WHERE `id` = '276' 
  SELECT * FROM `zt_history` WHERE action IN ('276') ORDER BY `id` 

20170911 17:22:25: /index.php?m=project&f=story&projectID=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT id, name FROM `zt_project` WHERE parent  = '4'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '4' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('271') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT COUNT(distinct t2.id) AS recTotal FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' 
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT * FROM `zt_storystage` WHERE story IN ('10') AND  branch  = '0'
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '4' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type  = 'story' AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT id,title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT story, COUNT(*) AS tasks FROM `zt_task` WHERE story IN ('10') AND  deleted  = '0' AND  project  = '4' GROUP BY story
  SELECT story, COUNT(*) AS bugs FROM `zt_bug` WHERE story IN ('10') AND  deleted  = '0' AND  project  = '4' GROUP BY story
  SELECT story, COUNT(*) AS cases FROM `zt_case` WHERE story IN ('10') AND  deleted  = '0' GROUP BY story
  SELECT DISTINCT story FROM `zt_case` WHERE story IN ('10')
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '4' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT * FROM `zt_module` WHERE (root = 3 and type = 'story')  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:22:25: /index.php?m=search&f=buildForm&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT id, title FROM `zt_userquery` WHERE account  = 'shenguilin' AND  module  = 'projectStory' ORDER BY `id` asc 

20170911 17:22:29: /index.php?m=story&f=tasks&storyID=10&projectID=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id, name, assignedTo, pri, status, estimate, consumed, `left` FROM `zt_task` WHERE story  = '10' AND  deleted  = '0' AND  project  = '4'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:22:38: /index.php?m=task&f=batchCreate&projectID=4&story=10
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.title, t2.module, t2.pri, t2.estimate, t3.name AS product FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_product` AS t3  ON t1.product = t3.id  WHERE t1.project  = '4' AND  t2.deleted  = '0'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4' AND  t2.deleted  = '0'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '4'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT * FROM `zt_story` WHERE `id` = '10' 
  SELECT title,spec,verify FROM `zt_storyspec` WHERE story  = '10' AND  version  = '1'
  SELECT t1.project, t2.name, t2.status FROM `zt_projectstory` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.story  = '10' ORDER BY t1.`project` DESC 
  SELECT id, name, assignedTo, project, status, consumed, `left` FROM `zt_task` WHERE story  = '10' AND  deleted  = '0' ORDER BY `id` DESC 
  SELECT * FROM `zt_storystage` WHERE story  = '10'
  SELECT id,title,branch FROM `zt_productplan` WHERE id IN ('2')
  SELECT story, COUNT(*) AS tasks FROM `zt_task` WHERE story IN ('','10') AND  deleted  = '0' AND  project  = '4' GROUP BY story
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:22:58: /index.php?m=project&f=build&projectID=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT id, name FROM `zt_project` WHERE parent  = '4'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '4' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('271') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.*, t2.name as projectName, t3.name as productName, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_product` AS t3  ON t1.product = t3.id  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.project  = '4' AND  t1.deleted  = '0' ORDER BY t1.`date` DESC,t1.`id` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:23:00: /index.php?m=project&f=task&projectID=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT id, name FROM `zt_project` WHERE parent  = '4'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '4' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('271') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '4'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '4'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '4' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task' and parent != 0) OR (root = 3 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:23:07: /index.php?m=task&f=assignTo&projectID=4&taskID=16&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '16'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '16' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '16' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('276') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4' AND  t2.deleted  = '0'
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:23:13: /index.php?m=task&f=assignTo&projectID=4&taskID=15&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '15'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '15' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '15' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('275') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4' AND  t2.deleted  = '0'
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:23:18: /index.php?m=task&f=assignTo&projectID=4&taskID=15&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '15'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '15' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '15' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('275') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '15'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '15' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  UPDATE `zt_task` SET `assignedTo` = 'tianliwei',`left` = '0',`lastEditedBy` = 'shenguilin',`lastEditedDate` = '2017-09-11 17:23:17',`assignedDate` = '2017-09-11 17:23:17' WHERE id  = '15'
  SELECT project, story FROM `zt_task` WHERE id  = '15'
  SELECT product FROM `zt_story` WHERE id  = '10'
  INSERT INTO `zt_action` SET `objectType` = 'task',`objectID` = '15',`actor` = 'shenguilin',`action` = 'assigned',`date` = '2017-09-11 17:23:17',`comment` = '',`extra` = 'tianliwei',`product` = ',3,',`project` = '4'
  INSERT INTO `zt_history` SET `field` = 'assignedTo',`old` = '',`new` = 'tianliwei',`diff` = '',`action` = '277'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '15'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '15' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_action` WHERE `id` = '277' 
  SELECT * FROM `zt_history` WHERE action IN ('277') ORDER BY `id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('tianliwei','')

20170911 17:23:18: /index.php?m=project&f=task&projectID=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT id, name FROM `zt_project` WHERE parent  = '4'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '4' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('271') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '4'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '4'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '4' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task' and parent != 0) OR (root = 3 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:23:22: /index.php?m=task&f=assignTo&projectID=4&taskID=14&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '14'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '14' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '14' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('274') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4' AND  t2.deleted  = '0'
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:23:40: /index.php?m=task&f=assignTo&projectID=4&taskID=14&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '14'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '14' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '14' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('274') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '14'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '14' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  UPDATE `zt_task` SET `assignedTo` = 'xumaohuai',`left` = '0',`lastEditedBy` = 'shenguilin',`lastEditedDate` = '2017-09-11 17:23:25',`assignedDate` = '2017-09-11 17:23:25' WHERE id  = '14'
  SELECT project, story FROM `zt_task` WHERE id  = '14'
  SELECT product FROM `zt_story` WHERE id  = '10'
  INSERT INTO `zt_action` SET `objectType` = 'task',`objectID` = '14',`actor` = 'shenguilin',`action` = 'assigned',`date` = '2017-09-11 17:23:25',`comment` = '',`extra` = 'xumaohuai',`product` = ',3,',`project` = '4'
  INSERT INTO `zt_history` SET `field` = 'assignedTo',`old` = '',`new` = 'xumaohuai',`diff` = '',`action` = '278'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '14'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '14' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_action` WHERE `id` = '278' 
  SELECT * FROM `zt_history` WHERE action IN ('278') ORDER BY `id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('xumaohuai','')

20170911 17:23:40: /index.php?m=task&f=assignTo&projectID=4&taskID=13&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '13'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '13' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '13' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('273') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4' AND  t2.deleted  = '0'
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:23:43: /index.php?m=task&f=assignTo&projectID=4&taskID=14&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '14'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '14' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '14' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('274','278') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '14'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '14' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  UPDATE `zt_task` SET `assignedTo` = 'xumaohuai',`left` = '0',`lastEditedBy` = 'shenguilin',`lastEditedDate` = '2017-09-11 17:23:40',`assignedDate` = '2017-09-11 17:23:40' WHERE id  = '14'
  SELECT project, story FROM `zt_task` WHERE id  = '14'
  SELECT product FROM `zt_story` WHERE id  = '10'
  INSERT INTO `zt_action` SET `objectType` = 'task',`objectID` = '14',`actor` = 'shenguilin',`action` = 'assigned',`date` = '2017-09-11 17:23:40',`comment` = '',`extra` = 'xumaohuai',`product` = ',3,',`project` = '4'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '14'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '14' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_action` WHERE `id` = '279' 
  SELECT * FROM `zt_history` WHERE action IN ('279') ORDER BY `id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('xumaohuai','')

20170911 17:23:47: /index.php?m=task&f=assignTo&projectID=4&taskID=13&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '13'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '13' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '13' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('273') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '13'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '13' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  UPDATE `zt_task` SET `assignedTo` = 'qiuqingqiang',`left` = '0',`lastEditedBy` = 'shenguilin',`lastEditedDate` = '2017-09-11 17:23:45',`assignedDate` = '2017-09-11 17:23:45' WHERE id  = '13'
  SELECT project, story FROM `zt_task` WHERE id  = '13'
  SELECT product FROM `zt_story` WHERE id  = '10'
  INSERT INTO `zt_action` SET `objectType` = 'task',`objectID` = '13',`actor` = 'shenguilin',`action` = 'assigned',`date` = '2017-09-11 17:23:45',`comment` = '',`extra` = 'qiuqingqiang',`product` = ',3,',`project` = '4'
  INSERT INTO `zt_history` SET `field` = 'assignedTo',`old` = '',`new` = 'qiuqingqiang',`diff` = '',`action` = '280'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '13'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '13' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_action` WHERE `id` = '280' 
  SELECT * FROM `zt_history` WHERE action IN ('280') ORDER BY `id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('qiuqingqiang','')

20170911 17:23:48: /index.php?m=project&f=task&projectID=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT id, name FROM `zt_project` WHERE parent  = '4'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '4' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('271') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '4'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '4'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '4' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task' and parent != 0) OR (root = 3 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:23:53: /index.php?m=project&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT id, name FROM `zt_project` WHERE parent  = '4'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '4' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('271') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_block` WHERE account  = 'shenguilin' AND  module  = 'project' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:23:54: /index.php?m=block&f=printBlock&id=57&module=project
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '57'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('4','3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('4','3') 
  SELECT * FROM `zt_project` WHERE id IN ('4','3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('4','3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('4','3') ORDER BY `date` desc 

20170911 17:23:54: /index.php?m=block&f=printBlock&id=58&module=project
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '58'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'shenguilin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'shenguilin' ORDER BY `id` desc  LIMIT 15 

20170911 17:23:59: /index.php?m=user&f=logout
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '12',`actor` = 'shenguilin',`action` = 'logout',`date` = '2017-09-11 17:23:59',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170911 17:23:59: /index.php?m=user&f=login
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:24:06: /index.php?m=user&f=login
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'qiuqingqiang'
  SELECT * FROM `zt_user` WHERE account  = 'qiuqingqiang' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '125.70.30.150', `last` = '1505121846' WHERE account  = 'qiuqingqiang'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'qiuqingqiang'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'qiuqingqiang'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'qiuqingqiang'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'qiuqingqiang' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '20',`actor` = 'qiuqingqiang',`action` = 'login',`date` = '2017-09-11 17:24:06',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170911 17:24:06: /index.php?m=project&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT id, name FROM `zt_project` WHERE parent  = '4'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '4' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('271') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_block` WHERE account  = 'qiuqingqiang' AND  module  = 'project' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:24:07: /index.php?m=block&f=printBlock&id=112&module=project
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '112'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('4','3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('4','3') 
  SELECT * FROM `zt_project` WHERE id IN ('4','3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('4','3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('4','3') ORDER BY `date` desc 

20170911 17:24:07: /index.php?m=block&f=printBlock&id=113&module=project
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '113'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc  LIMIT 15 

20170911 17:24:10: /index.php?m=my&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'qiuqingqiang' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:24:11: /index.php?m=block&f=printBlock&id=85&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '85'
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'qiuqingqiang' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170911 17:24:11: /index.php?m=block&f=printBlock&id=84&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '84'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('4','3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('4','3') 
  SELECT * FROM `zt_project` WHERE id IN ('4','3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('4','3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('4','3') ORDER BY `date` desc 

20170911 17:24:11: /index.php?m=block&f=printBlock&id=87&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '87'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc  LIMIT 15 

20170911 17:24:11: /index.php?m=block&f=printBlock&id=89&module=my
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

20170911 17:24:11: /index.php?m=block&f=printBlock&id=90&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '90'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'qiuqingqiang' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170911 17:24:11: /index.php?m=block&f=printBlock&id=88&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '88'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc  LIMIT 15 

20170911 17:24:11: /index.php?m=block&f=printBlock&id=86&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '86'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-11 17:24:11' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170911 17:24:18: /index.php?m=task&f=view&taskID=13
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '13'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '13' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT * FROM `zt_story` WHERE `id` = '10' 
  SELECT title,spec,verify FROM `zt_storyspec` WHERE story  = '10' AND  version  = '1'
  SELECT t1.project, t2.name, t2.status FROM `zt_projectstory` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.story  = '10' ORDER BY t1.`project` DESC 
  SELECT id, name, assignedTo, project, status, consumed, `left` FROM `zt_task` WHERE story  = '10' AND  deleted  = '0' ORDER BY `id` DESC 
  SELECT * FROM `zt_storystage` WHERE story  = '10'
  SELECT id,title,branch FROM `zt_productplan` WHERE id IN ('2')
  SELECT * FROM `zt_file` WHERE objectType  = 'story' AND  objectID  = '10' AND  extra  != 'editor'
  UPDATE `zt_action` SET  `read` = '1' WHERE objectType  = 'task' AND  objectID  = '13' AND  `read`  = '0'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '13' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('273','280') ORDER BY `id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_task` WHERE id  = '13' OR deleted  = '0' AND  `assignedTo`  = 'qiuqingqiang'  ORDER BY `id` desc 
  SELECT path FROM `zt_module` WHERE id  = '15'
  SELECT * FROM `zt_module` WHERE id  = '15'
  SELECT name FROM `zt_product` WHERE id  = '3'
  SELECT path FROM `zt_module` WHERE id  = '15'
  SELECT * FROM `zt_module` WHERE id IN ('15') AND  deleted  = '0' ORDER BY `grade` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:24:26: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170911 17:24:37: /index.php?m=task&f=start&taskID=13&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '13'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '13' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '13' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('273','280') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:24:50: /index.php?m=task&f=start&taskID=13&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '13'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '13' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '13' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('273','280') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '13'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '13' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  INSERT INTO `zt_taskestimate` SET `consumed` = '0',`left` = '8',`account` = 'qiuqingqiang',`task` = '13',`date` = '2017-09-11'
  UPDATE `zt_task` SET `realStarted` = '2017-09-11',`consumed` = '0',`left` = '8',`assignedTo` = 'qiuqingqiang',`lastEditedBy` = 'qiuqingqiang',`lastEditedDate` = '2017-09-11 17:24:50',`status` = 'doing' WHERE id  = '13'
  DELETE FROM `zt_storystage` WHERE story  = '10'
  SELECT * FROM `zt_story` WHERE `id` = '10' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.project,t3.branch FROM `zt_projectstory` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  WHERE t1.story  = '10' AND  t2.deleted  = '0'
  SELECT * FROM `zt_productplan` WHERE id IN ('2')
  SELECT type,project,status FROM `zt_task` WHERE project IN ('4') AND  story  = '10' AND  type IN ('devel','test') AND  status  != 'cancel' AND  closedReason  != 'cancel' AND  deleted  = '0'
  SELECT * FROM `zt_release` WHERE CONCAT(',', stories, ',')  LIKE '%,10,%' AND  deleted  = '0'
  INSERT INTO `zt_storystage` SET  `story` = '10', `branch` = '0', `stage` = 'developing'
  UPDATE `zt_story` SET  `stage` = 'developing' WHERE id  = '10'
  SELECT project, story FROM `zt_task` WHERE id  = '13'
  SELECT product FROM `zt_story` WHERE id  = '10'
  INSERT INTO `zt_action` SET `objectType` = 'task',`objectID` = '13',`actor` = 'qiuqingqiang',`action` = 'started',`date` = '2017-09-11 17:24:50',`comment` = '',`extra` = '',`product` = ',3,',`project` = '4'
  INSERT INTO `zt_history` SET `field` = 'realStarted',`old` = '0000-00-00',`new` = '2017-09-11',`diff` = '',`action` = '283'
  INSERT INTO `zt_history` SET `field` = 'left',`old` = '0',`new` = '8',`diff` = '',`action` = '283'
  INSERT INTO `zt_history` SET `field` = 'status',`old` = 'wait',`new` = 'doing',`diff` = '',`action` = '283'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '13'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '13' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_action` WHERE `id` = '283' 
  SELECT * FROM `zt_history` WHERE action IN ('283') ORDER BY `id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '13'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '13' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'

20170911 17:24:50: /index.php?m=task&f=view&taskID=13
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '13'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '13' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT * FROM `zt_story` WHERE `id` = '10' 
  SELECT title,spec,verify FROM `zt_storyspec` WHERE story  = '10' AND  version  = '1'
  SELECT t1.project, t2.name, t2.status FROM `zt_projectstory` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.story  = '10' ORDER BY t1.`project` DESC 
  SELECT id, name, assignedTo, project, status, consumed, `left` FROM `zt_task` WHERE story  = '10' AND  deleted  = '0' ORDER BY `id` DESC 
  SELECT * FROM `zt_storystage` WHERE story  = '10'
  SELECT id,title,branch FROM `zt_productplan` WHERE id IN ('2')
  SELECT * FROM `zt_file` WHERE objectType  = 'story' AND  objectID  = '10' AND  extra  != 'editor'
  UPDATE `zt_action` SET  `read` = '1' WHERE objectType  = 'task' AND  objectID  = '13' AND  `read`  = '0'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '13' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('273','280','283') ORDER BY `id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT path FROM `zt_module` WHERE id  = '15'
  SELECT * FROM `zt_module` WHERE id  = '15'
  SELECT name FROM `zt_product` WHERE id  = '3'
  SELECT path FROM `zt_module` WHERE id  = '15'
  SELECT * FROM `zt_module` WHERE id IN ('15') AND  deleted  = '0' ORDER BY `grade` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:24:57: /index.php?m=project&f=task&projectID=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT id, name FROM `zt_project` WHERE parent  = '4'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '4' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('271') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '4'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '4'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '4' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task' and parent != 0) OR (root = 3 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:25:07: /index.php?m=task&f=assignTo&projectID=4&taskID=13&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '13'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '13' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '13' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('273','280','283') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4' AND  t2.deleted  = '0'
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:25:14: /index.php?m=project&f=task&projectID=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT id, name FROM `zt_project` WHERE parent  = '4'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '4' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('271') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '4'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '4'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '4' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task' and parent != 0) OR (root = 3 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:25:17: /index.php?m=task&f=finish&taskID=13&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '13'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '13' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '13' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('273','280','283') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:25:20: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170911 17:25:24: /index.php?m=task&f=finish&taskID=13&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '13'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '13' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '13' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('273','280','283') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '13'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '13' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'

20170911 17:25:31: /index.php?m=task&f=finish&taskID=13&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '13'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '13' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '13' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('273','280','283') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '13'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '13' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  INSERT INTO `zt_taskestimate` SET `account` = 'qiuqingqiang',`task` = '13',`date` = '2017-09-11',`left` = '0',`consumed` = '8'
  UPDATE `zt_task` SET `consumed` = '8',`assignedTo` = 'shenguilin',`finishedDate` = '2017-09-11 17:25:28',`left` = '0',`assignedDate` = '2017-09-11 17:25:28',`status` = 'done',`finishedBy` = 'qiuqingqiang',`lastEditedBy` = 'qiuqingqiang',`lastEditedDate` = '2017-09-11 17:25:28' WHERE id  = '13'
  DELETE FROM `zt_storystage` WHERE story  = '10'
  SELECT * FROM `zt_story` WHERE `id` = '10' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.project,t3.branch FROM `zt_projectstory` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  WHERE t1.story  = '10' AND  t2.deleted  = '0'
  SELECT * FROM `zt_productplan` WHERE id IN ('2')
  SELECT type,project,status FROM `zt_task` WHERE project IN ('4') AND  story  = '10' AND  type IN ('devel','test') AND  status  != 'cancel' AND  closedReason  != 'cancel' AND  deleted  = '0'
  SELECT * FROM `zt_release` WHERE CONCAT(',', stories, ',')  LIKE '%,10,%' AND  deleted  = '0'
  INSERT INTO `zt_storystage` SET  `story` = '10', `branch` = '0', `stage` = 'developing'
  UPDATE `zt_story` SET  `stage` = 'developing' WHERE id  = '10'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '13'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '13' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT project, story FROM `zt_task` WHERE id  = '13'
  SELECT product FROM `zt_story` WHERE id  = '10'
  INSERT INTO `zt_action` SET `objectType` = 'task',`objectID` = '13',`actor` = 'qiuqingqiang',`action` = 'finished',`date` = '2017-09-11 17:25:28',`comment` = '',`extra` = '',`product` = ',3,',`project` = '4'
  INSERT INTO `zt_history` SET `field` = 'consumed',`old` = '0',`new` = '8',`diff` = '',`action` = '284'
  INSERT INTO `zt_history` SET `field` = 'assignedTo',`old` = 'qiuqingqiang',`new` = 'shenguilin',`diff` = '',`action` = '284'
  INSERT INTO `zt_history` SET `field` = 'finishedDate',`old` = '',`new` = '2017-09-11 17:25:28',`diff` = '',`action` = '284'
  INSERT INTO `zt_history` SET `field` = 'left',`old` = '8',`new` = '0',`diff` = '',`action` = '284'
  INSERT INTO `zt_history` SET `field` = 'status',`old` = 'doing',`new` = 'done',`diff` = '',`action` = '284'
  INSERT INTO `zt_history` SET `field` = 'finishedBy',`old` = '',`new` = 'qiuqingqiang',`diff` = '',`action` = '284'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '13'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '13' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_action` WHERE `id` = '284' 
  SELECT * FROM `zt_history` WHERE action IN ('284') ORDER BY `id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('shenguilin','')

20170911 17:25:31: /index.php?m=project&f=task&projectID=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT id, name FROM `zt_project` WHERE parent  = '4'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '4' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('271') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '4'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '4'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '4' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task' and parent != 0) OR (root = 3 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:25:37: /index.php?m=user&f=logout
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '20',`actor` = 'qiuqingqiang',`action` = 'logout',`date` = '2017-09-11 17:25:37',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170911 17:25:37: /index.php?m=user&f=login
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:25:43: /index.php?m=user&f=login
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'shenguilin'
  SELECT * FROM `zt_user` WHERE account  = 'shenguilin' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '125.70.30.150', `last` = '1505121943' WHERE account  = 'shenguilin'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'shenguilin'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'shenguilin'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'shenguilin'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'shenguilin' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '12',`actor` = 'shenguilin',`action` = 'login',`date` = '2017-09-11 17:25:43',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170911 17:25:43: /index.php?m=project&f=task&projectID=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT id, name FROM `zt_project` WHERE parent  = '4'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '4' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('271') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '4'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '4'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '4' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task' and parent != 0) OR (root = 3 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:25:50: /index.php?m=project&f=story&projectID=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT id, name FROM `zt_project` WHERE parent  = '4'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '4' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('271') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT COUNT(distinct t2.id) AS recTotal FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' 
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT * FROM `zt_storystage` WHERE story IN ('10') AND  branch  = '0'
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '4' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type  = 'story' AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT id,title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT story, COUNT(*) AS tasks FROM `zt_task` WHERE story IN ('10') AND  deleted  = '0' AND  project  = '4' GROUP BY story
  SELECT story, COUNT(*) AS bugs FROM `zt_bug` WHERE story IN ('10') AND  deleted  = '0' AND  project  = '4' GROUP BY story
  SELECT story, COUNT(*) AS cases FROM `zt_case` WHERE story IN ('10') AND  deleted  = '0' GROUP BY story
  SELECT DISTINCT story FROM `zt_case` WHERE story IN ('10')
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '4' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT * FROM `zt_module` WHERE (root = 3 and type = 'story')  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:25:50: /index.php?m=search&f=buildForm&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT id, title FROM `zt_userquery` WHERE account  = 'shenguilin' AND  module  = 'projectStory' ORDER BY `id` asc 

20170911 17:25:58: /index.php?m=user&f=logout
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '12',`actor` = 'shenguilin',`action` = 'logout',`date` = '2017-09-11 17:25:58',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170911 17:25:58: /index.php?m=user&f=login
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:26:09: /index.php?m=user&f=login
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'xumaohuai'
  SELECT * FROM `zt_user` WHERE account  = 'xumaohuai' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '125.70.30.150', `last` = '1505121969' WHERE account  = 'xumaohuai'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'xumaohuai'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'xumaohuai'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'xumaohuai'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'xumaohuai' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '21',`actor` = 'xumaohuai',`action` = 'login',`date` = '2017-09-11 17:26:09',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170911 17:26:09: /index.php?m=project&f=story&projectID=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','xumaohuai') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT id, name FROM `zt_project` WHERE parent  = '4'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '4' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('271') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT COUNT(distinct t2.id) AS recTotal FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' 
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT * FROM `zt_storystage` WHERE story IN ('10') AND  branch  = '0'
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '4' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type  = 'story' AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT id,title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT story, COUNT(*) AS tasks FROM `zt_task` WHERE story IN ('10') AND  deleted  = '0' AND  project  = '4' GROUP BY story
  SELECT story, COUNT(*) AS bugs FROM `zt_bug` WHERE story IN ('10') AND  deleted  = '0' AND  project  = '4' GROUP BY story
  SELECT story, COUNT(*) AS cases FROM `zt_case` WHERE story IN ('10') AND  deleted  = '0' GROUP BY story
  SELECT DISTINCT story FROM `zt_case` WHERE story IN ('10')
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '4' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT * FROM `zt_module` WHERE (root = 3 and type = 'story')  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:26:10: /index.php?m=search&f=buildForm&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','xumaohuai') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT id, title FROM `zt_userquery` WHERE account  = 'xumaohuai' AND  module  = 'projectStory' ORDER BY `id` asc 

20170911 17:26:12: /index.php?m=story&f=view&storyID=10&version=1&from=project&param=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','xumaohuai') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'xumaohuai'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'xumaohuai'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'xumaohuai' 

20170911 17:26:12: /index.php?m=user&f=deny&module=story&method=view
  SELECT * FROM `zt_config` WHERE owner IN ('system','xumaohuai') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170911 17:26:14: /index.php?m=index&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','xumaohuai') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170911 17:26:14: /index.php?m=my&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','xumaohuai') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'xumaohuai' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:26:14: /index.php?m=block&f=printBlock&id=59&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','xumaohuai') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '59'

20170911 17:26:14: /index.php?m=block&f=printBlock&id=60&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','xumaohuai') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '60'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' ORDER BY `order`,`id` desc 
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  lib IN ('7','6','5')
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-09-11' AND  date  < '2017-09-12' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), ((product =',0,' AND project = '0') OR project IN ('4','3') OR INSTR(',3,', product) > 0), '1=1')  AND  IF(objectType != 'doclib', '1=1', objectID IN ('7','6','5'))   ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('21','12','20','13','1')
  SELECT id, name AS name FROM `zt_task` WHERE id IN ('13','14','15','16')
  SELECT id, title AS name FROM `zt_story` WHERE id IN ('10')
  SELECT id, name AS name FROM `zt_project` WHERE id IN ('4')
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170911 17:26:14: /index.php?m=block&f=printBlock&id=61&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','xumaohuai') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '61'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('4','3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('4','3') 
  SELECT * FROM `zt_project` WHERE id IN ('4','3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('4','3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('4','3') ORDER BY `date` desc 

20170911 17:26:14: /index.php?m=block&f=printBlock&id=62&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','xumaohuai') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '62'
  SELECT * FROM `zt_todo` WHERE account  = 'xumaohuai' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'xumaohuai' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170911 17:26:14: /index.php?m=block&f=printBlock&id=63&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','xumaohuai') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '63'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-11 17:26:14' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170911 17:26:14: /index.php?m=block&f=printBlock&id=64&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','xumaohuai') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '64'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'xumaohuai' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'xumaohuai' ORDER BY `id` desc  LIMIT 15 

20170911 17:26:14: /index.php?m=block&f=printBlock&id=66&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','xumaohuai') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '66'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'xumaohuai' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'xumaohuai' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'xumaohuai' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'xumaohuai' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'xumaohuai' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170911 17:26:14: /index.php?m=block&f=printBlock&id=65&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','xumaohuai') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '65'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'xumaohuai' ORDER BY `id` desc  LIMIT 15 

20170911 17:26:14: /index.php?m=block&f=printBlock&id=67&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','xumaohuai') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '67'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'xumaohuai' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170911 17:26:19: /index.php?m=qa&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','xumaohuai') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_block` WHERE account  = 'xumaohuai' AND  module  = 'qa' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:26:19: /index.php?m=block&f=printBlock&id=72&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','xumaohuai') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '72'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.*,t2.name as productName,t3.name as buildName,t4.name as projectName FROM `zt_testtask` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product=t2.id  LEFT JOIN `zt_build` AS t3  ON t1.build=t3.id  LEFT JOIN `zt_project` AS t4  ON t1.project=t4.id  LEFT JOIN `zt_projectproduct` AS t5  ON t1.project=t5.project  WHERE t1.deleted  = '0' AND  t1.product IN ('3') AND  t1.product = t5.product  AND  t1.status  = 'wait' ORDER BY t1.`id` desc  LIMIT 15 

20170911 17:26:19: /index.php?m=block&f=printBlock&id=71&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','xumaohuai') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '71'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'xumaohuai' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170911 17:26:19: /index.php?m=block&f=printBlock&id=70&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','xumaohuai') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '70'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'xumaohuai' ORDER BY `id` desc  LIMIT 15 

20170911 17:26:20: /index.php?m=project&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','xumaohuai') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT id, name FROM `zt_project` WHERE parent  = '4'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '4' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('271') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_block` WHERE account  = 'xumaohuai' AND  module  = 'project' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:26:20: /index.php?m=block&f=printBlock&id=69&module=project
  SELECT * FROM `zt_config` WHERE owner IN ('system','xumaohuai') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '69'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'xumaohuai' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'xumaohuai' ORDER BY `id` desc  LIMIT 15 

20170911 17:26:20: /index.php?m=block&f=printBlock&id=68&module=project
  SELECT * FROM `zt_config` WHERE owner IN ('system','xumaohuai') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '68'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('4','3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('4','3') 
  SELECT * FROM `zt_project` WHERE id IN ('4','3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('4','3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('4','3') ORDER BY `date` desc 

20170911 17:26:22: /index.php?m=project&f=task&projectID=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','xumaohuai') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT id, name FROM `zt_project` WHERE parent  = '4'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '4' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('271') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '4'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '4'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '4' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task' and parent != 0) OR (root = 3 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:26:26: /index.php?m=task&f=finish&taskID=14&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','xumaohuai') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '14'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '14' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '14' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('274','278','279') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:26:32: /index.php?m=task&f=finish&taskID=14&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','xumaohuai') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '14'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '14' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '14' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('274','278','279') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '14'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '14' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  INSERT INTO `zt_taskestimate` SET `account` = 'xumaohuai',`task` = '14',`date` = '2017-09-11',`left` = '0',`consumed` = '1'
  UPDATE `zt_task` SET `consumed` = '1',`assignedTo` = 'shenguilin',`finishedDate` = '2017-09-11 17:26:30',`left` = '0',`assignedDate` = '2017-09-11 17:26:30',`status` = 'done',`finishedBy` = 'xumaohuai',`lastEditedBy` = 'xumaohuai',`lastEditedDate` = '2017-09-11 17:26:30' WHERE id  = '14'
  DELETE FROM `zt_storystage` WHERE story  = '10'
  SELECT * FROM `zt_story` WHERE `id` = '10' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.project,t3.branch FROM `zt_projectstory` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  WHERE t1.story  = '10' AND  t2.deleted  = '0'
  SELECT * FROM `zt_productplan` WHERE id IN ('2')
  SELECT type,project,status FROM `zt_task` WHERE project IN ('4') AND  story  = '10' AND  type IN ('devel','test') AND  status  != 'cancel' AND  closedReason  != 'cancel' AND  deleted  = '0'
  SELECT * FROM `zt_release` WHERE CONCAT(',', stories, ',')  LIKE '%,10,%' AND  deleted  = '0'
  INSERT INTO `zt_storystage` SET  `story` = '10', `branch` = '0', `stage` = 'developed'
  UPDATE `zt_story` SET  `stage` = 'developed' WHERE id  = '10'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '14'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '14' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT project, story FROM `zt_task` WHERE id  = '14'
  SELECT product FROM `zt_story` WHERE id  = '10'
  INSERT INTO `zt_action` SET `objectType` = 'task',`objectID` = '14',`actor` = 'xumaohuai',`action` = 'finished',`date` = '2017-09-11 17:26:30',`comment` = '',`extra` = '',`product` = ',3,',`project` = '4'
  INSERT INTO `zt_history` SET `field` = 'consumed',`old` = '0',`new` = '1',`diff` = '',`action` = '289'
  INSERT INTO `zt_history` SET `field` = 'assignedTo',`old` = 'xumaohuai',`new` = 'shenguilin',`diff` = '',`action` = '289'
  INSERT INTO `zt_history` SET `field` = 'finishedDate',`old` = '',`new` = '2017-09-11 17:26:30',`diff` = '',`action` = '289'
  INSERT INTO `zt_history` SET `field` = 'status',`old` = 'wait',`new` = 'done',`diff` = '',`action` = '289'
  INSERT INTO `zt_history` SET `field` = 'finishedBy',`old` = '',`new` = 'xumaohuai',`diff` = '',`action` = '289'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '14'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '14' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_action` WHERE `id` = '289' 
  SELECT * FROM `zt_history` WHERE action IN ('289') ORDER BY `id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('shenguilin','')

20170911 17:26:33: /index.php?m=project&f=task&projectID=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','xumaohuai') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT id, name FROM `zt_project` WHERE parent  = '4'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '4' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('271') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '4'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '4'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '4' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task' and parent != 0) OR (root = 3 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:26:36: /index.php?m=project&f=story&projectID=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','xumaohuai') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT id, name FROM `zt_project` WHERE parent  = '4'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '4' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('271') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT COUNT(distinct t2.id) AS recTotal FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' 
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT * FROM `zt_storystage` WHERE story IN ('10') AND  branch  = '0'
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '4' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type  = 'story' AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT id,title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT story, COUNT(*) AS tasks FROM `zt_task` WHERE story IN ('10') AND  deleted  = '0' AND  project  = '4' GROUP BY story
  SELECT story, COUNT(*) AS bugs FROM `zt_bug` WHERE story IN ('10') AND  deleted  = '0' AND  project  = '4' GROUP BY story
  SELECT story, COUNT(*) AS cases FROM `zt_case` WHERE story IN ('10') AND  deleted  = '0' GROUP BY story
  SELECT DISTINCT story FROM `zt_case` WHERE story IN ('10')
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '4' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT * FROM `zt_module` WHERE (root = 3 and type = 'story')  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:26:37: /index.php?m=search&f=buildForm&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','xumaohuai') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT id, title FROM `zt_userquery` WHERE account  = 'xumaohuai' AND  module  = 'projectStory' ORDER BY `id` asc 

20170911 17:26:43: /index.php?m=user&f=logout
  SELECT * FROM `zt_config` WHERE owner IN ('system','xumaohuai') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '21',`actor` = 'xumaohuai',`action` = 'logout',`date` = '2017-09-11 17:26:43',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170911 17:26:43: /index.php?m=user&f=login
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:26:50: /index.php?m=user&f=login
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'tianliwei'
  SELECT * FROM `zt_user` WHERE account  = 'tianliwei' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '125.70.30.150', `last` = '1505122010' WHERE account  = 'tianliwei'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'tianliwei'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'tianliwei'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'tianliwei'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'tianliwei' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '22',`actor` = 'tianliwei',`action` = 'login',`date` = '2017-09-11 17:26:50',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170911 17:26:51: /index.php?m=project&f=story&projectID=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT id, name FROM `zt_project` WHERE parent  = '4'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '4' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('271') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT COUNT(distinct t2.id) AS recTotal FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' 
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT * FROM `zt_storystage` WHERE story IN ('10') AND  branch  = '0'
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '4' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type  = 'story' AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT id,title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT story, COUNT(*) AS tasks FROM `zt_task` WHERE story IN ('10') AND  deleted  = '0' AND  project  = '4' GROUP BY story
  SELECT story, COUNT(*) AS bugs FROM `zt_bug` WHERE story IN ('10') AND  deleted  = '0' AND  project  = '4' GROUP BY story
  SELECT story, COUNT(*) AS cases FROM `zt_case` WHERE story IN ('10') AND  deleted  = '0' GROUP BY story
  SELECT DISTINCT story FROM `zt_case` WHERE story IN ('10')
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '4' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT * FROM `zt_module` WHERE (root = 3 and type = 'story')  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:26:51: /index.php?m=search&f=buildForm&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT id, title FROM `zt_userquery` WHERE account  = 'tianliwei' AND  module  = 'projectStory' ORDER BY `id` asc 

20170911 17:26:54: /index.php?m=project&f=task&projectID=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT id, name FROM `zt_project` WHERE parent  = '4'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '4' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('271') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '4'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '4'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '4' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task' and parent != 0) OR (root = 3 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:26:57: /index.php?m=task&f=finish&taskID=15&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '15'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '15' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '15' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('275','277') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:27:03: /index.php?m=task&f=finish&taskID=15&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '15'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '15' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4' AND  t2.deleted  = '0'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'task' AND  objectID  = '15' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('275','277') ORDER BY `id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '15'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '15' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  INSERT INTO `zt_taskestimate` SET `account` = 'tianliwei',`task` = '15',`date` = '2017-09-11',`left` = '0',`consumed` = '1'
  UPDATE `zt_task` SET `consumed` = '1',`assignedTo` = 'shenguilin',`finishedDate` = '2017-09-11 17:27:01',`left` = '0',`assignedDate` = '2017-09-11 17:27:01',`status` = 'done',`finishedBy` = 'tianliwei',`lastEditedBy` = 'tianliwei',`lastEditedDate` = '2017-09-11 17:27:01' WHERE id  = '15'
  DELETE FROM `zt_storystage` WHERE story  = '10'
  SELECT * FROM `zt_story` WHERE `id` = '10' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.project,t3.branch FROM `zt_projectstory` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  WHERE t1.story  = '10' AND  t2.deleted  = '0'
  SELECT * FROM `zt_productplan` WHERE id IN ('2')
  SELECT type,project,status FROM `zt_task` WHERE project IN ('4') AND  story  = '10' AND  type IN ('devel','test') AND  status  != 'cancel' AND  closedReason  != 'cancel' AND  deleted  = '0'
  SELECT * FROM `zt_release` WHERE CONCAT(',', stories, ',')  LIKE '%,10,%' AND  deleted  = '0'
  INSERT INTO `zt_storystage` SET  `story` = '10', `branch` = '0', `stage` = 'developed'
  UPDATE `zt_story` SET  `stage` = 'developed' WHERE id  = '10'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '15'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '15' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT project, story FROM `zt_task` WHERE id  = '15'
  SELECT product FROM `zt_story` WHERE id  = '10'
  INSERT INTO `zt_action` SET `objectType` = 'task',`objectID` = '15',`actor` = 'tianliwei',`action` = 'finished',`date` = '2017-09-11 17:27:01',`comment` = '',`extra` = '',`product` = ',3,',`project` = '4'
  INSERT INTO `zt_history` SET `field` = 'consumed',`old` = '0',`new` = '1',`diff` = '',`action` = '292'
  INSERT INTO `zt_history` SET `field` = 'assignedTo',`old` = 'tianliwei',`new` = 'shenguilin',`diff` = '',`action` = '292'
  INSERT INTO `zt_history` SET `field` = 'finishedDate',`old` = '',`new` = '2017-09-11 17:27:01',`diff` = '',`action` = '292'
  INSERT INTO `zt_history` SET `field` = 'status',`old` = 'wait',`new` = 'done',`diff` = '',`action` = '292'
  INSERT INTO `zt_history` SET `field` = 'finishedBy',`old` = '',`new` = 'tianliwei',`diff` = '',`action` = '292'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.id  = '15'
  SELECT * FROM `zt_file` WHERE objectType  = 'task' AND  objectID  = '15' AND  extra  != 'editor'
  SELECT id, title FROM `zt_case` WHERE story  = '10' AND  storyVersion  = '1' AND  deleted  = '0'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_action` WHERE `id` = '292' 
  SELECT * FROM `zt_history` WHERE action IN ('292') ORDER BY `id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('shenguilin','')

20170911 17:27:04: /index.php?m=project&f=task&projectID=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT id, name FROM `zt_project` WHERE parent  = '4'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '4' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('271') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '4'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '4'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '4' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task' and parent != 0) OR (root = 3 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:27:24: /index.php?m=project&f=story&projectID=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT id, name FROM `zt_project` WHERE parent  = '4'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '4' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('271') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT COUNT(distinct t2.id) AS recTotal FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' 
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT * FROM `zt_storystage` WHERE story IN ('10') AND  branch  = '0'
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '4' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type  = 'story' AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT id,title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT story, COUNT(*) AS tasks FROM `zt_task` WHERE story IN ('10') AND  deleted  = '0' AND  project  = '4' GROUP BY story
  SELECT story, COUNT(*) AS bugs FROM `zt_bug` WHERE story IN ('10') AND  deleted  = '0' AND  project  = '4' GROUP BY story
  SELECT story, COUNT(*) AS cases FROM `zt_case` WHERE story IN ('10') AND  deleted  = '0' GROUP BY story
  SELECT DISTINCT story FROM `zt_case` WHERE story IN ('10')
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '4' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT * FROM `zt_module` WHERE (root = 3 and type = 'story')  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:27:24: /index.php?m=search&f=buildForm&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT id, title FROM `zt_userquery` WHERE account  = 'tianliwei' AND  module  = 'projectStory' ORDER BY `id` asc 

20170911 17:27:27: /index.php?m=project&f=task&projectID=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT id, name FROM `zt_project` WHERE parent  = '4'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '4' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('271') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT t1.*, t2.id AS storyID, t2.title AS storyTitle, t2.product, t2.branch, t2.version AS latestStoryVersion, t2.status AS storyStatus, t3.realname AS assignedToRealName FROM `zt_task` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_user` AS t3  ON t1.assignedTo = t3.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' AND  t1.status IN ('','wait','doing','done','pause','cancel') ORDER BY `status`,`id` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '4'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT product,branch FROM `zt_projectproduct` WHERE project  = '4'
  SELECT id,root,branch FROM `zt_module` WHERE root IN ('3') AND  type  = 'story' AND  deleted  = '0'
  SELECT id FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.id FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task' and parent = 0  AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task') OR (root = 3 and type = 'story'))  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT openedVersion FROM `zt_project` WHERE id  = '4'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '4' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT * FROM `zt_module` WHERE ((root = '4' and type = 'task' and parent != 0) OR (root = 3 and type = 'story' and branch ='0'))  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT * FROM `zt_module` WHERE root = '4' and type = 'task'  AND  deleted  = '0' ORDER BY `grade` desc,`type`,`order` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.id, t1.name,t1.status, t2.product FROM `zt_project` AS t1  LEFT JOIN `zt_projectproduct` AS t2  ON t1.id = t2.project  WHERE t1.deleted  = '0'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:27:33: /index.php?m=project&f=story&projectID=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT id, name FROM `zt_project` WHERE parent  = '4'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '4' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('271') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT COUNT(distinct t2.id) AS recTotal FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' 
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT * FROM `zt_storystage` WHERE story IN ('10') AND  branch  = '0'
  SELECT distinct t1.*, t2.*,t3.branch as productBranch,t4.type as productType,t2.version as version FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_projectproduct` AS t3  ON t1.project = t3.project  LEFT JOIN `zt_product` AS t4  ON t2.product = t4.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' ORDER BY `pri`,`id` asc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '4' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type  = 'story' AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT id,title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT story, COUNT(*) AS tasks FROM `zt_task` WHERE story IN ('10') AND  deleted  = '0' AND  project  = '4' GROUP BY story
  SELECT story, COUNT(*) AS bugs FROM `zt_bug` WHERE story IN ('10') AND  deleted  = '0' AND  project  = '4' GROUP BY story
  SELECT story, COUNT(*) AS cases FROM `zt_case` WHERE story IN ('10') AND  deleted  = '0' GROUP BY story
  SELECT DISTINCT story FROM `zt_case` WHERE story IN ('10')
  SELECT DISTINCT t3.path FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_module` AS t3  ON t2.module = t3.id  WHERE t1.project  = '4' AND  t3.deleted  = '0'
  SELECT path FROM `zt_module` WHERE root  = '4' AND  type  = 'task' AND  deleted  = '0'
  SELECT DISTINCT t1.path FROM `zt_module` AS t1  LEFT JOIN `zt_task` AS t2  ON t1.id=t2.module  WHERE t2.module  != '0' AND  t2.project  = '4' AND  t2.deleted  = '0' AND  t1.type  = 'story' AND  t1.deleted  = '0'
  SELECT t1.product, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT * FROM `zt_module` WHERE (root = 3 and type = 'story')  AND  deleted  = '0' ORDER BY `grade` desc,`branch`,`type`,`order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:27:33: /index.php?m=search&f=buildForm&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT id, title FROM `zt_userquery` WHERE account  = 'tianliwei' AND  module  = 'projectStory' ORDER BY `id` asc 

20170911 17:27:36: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170911 17:27:41: /index.php?m=project&f=bug&projectID=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT id, name FROM `zt_project` WHERE parent  = '4'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '4' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('271') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  project  = '4' ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_bug` WHERE deleted  = '0' AND  project  = '4' 
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  project  = '4' ORDER BY `status`,`id` desc 
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  project  = '4' ORDER BY `status`,`id` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type  = 'story' AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('3') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT id,title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT t1.*, t2.name as projectName, t3.name as productName, t3.type as productType FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_product` AS t3  ON t1.product = t3.id  WHERE t1.id  = '0'
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:27:41: /index.php?m=search&f=buildForm&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT id, title FROM `zt_userquery` WHERE account  = 'tianliwei' AND  module  = 'projectBug' ORDER BY `id` asc 

20170911 17:28:02: /index.php?m=bug&f=create&productID=3&branch=0&extra=projectID=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted, INSTR(',td,pm,qd,qa,dev,', role) AS roleOrder FROM `zt_user` WHERE deleted  = '0' ORDER BY `roleOrder` DESC,`account` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.project  = '4' AND  t1.product  = '3' AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT t2.id, t2.title, t2.module, t2.pri, t2.estimate, t3.name AS product FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_product` AS t3  ON t1.product = t3.id  WHERE t1.project  = '4' AND  t2.deleted  = '0'
  SELECT t2.id, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.product  = '3' AND  t2.status  != 'done' ORDER BY t2.`begin` desc  LIMIT 1 
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4' AND  t2.deleted  = '0'
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','bug') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT t2.id, t2.name, t2.deleted FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.product  = '3' AND  t2.id IN ('4','3') ORDER BY t1.`project` desc 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT id,account,title,content,public FROM `zt_usertpl` WHERE type  = 'bug' AND ( account  = 'tianliwei' OR public  = '1') ORDER BY `id` 
  SELECT id, listName FROM `zt_usercontact` WHERE account  = 'tianliwei'
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:28:02: /index.php?m=bug&f=ajaxGetModuleOwner&t=html&moduleID=0&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT QD FROM `zt_product` WHERE `id` = '3' 

20170911 17:28:02: /index.php?m=task&f=ajaxGetProjectTasks&t=html&projectID=4&taskID=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.id, t1.name, t2.realname AS finishedByRealName FROM `zt_task` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.finishedBy = t2.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' ORDER BY `finishedBy`,`id` desc 

20170911 17:28:02: /index.php?m=story&f=ajaxGetProjectStories&t=html&projectID=4&productID=3&branch=0&moduleID=0&storyID=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t2.id, t2.title, t2.module, t2.pri, t2.estimate, t3.name AS product FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_product` AS t3  ON t1.product = t3.id  WHERE t1.project  = '4' AND  t2.deleted  = '0' AND  t2.product  = '3'

20170911 17:28:02: /index.php?m=bug&f=ajaxLoadAssignedTo&t=html&projectID=4&selectedUser=
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4'

20170911 17:28:03: /index.php?m=build&f=ajaxGetProjectBuilds&t=html&projectID=4&productID=3&varName=openedBuild&build=0&branch=0&index=0&needCreate=true
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.project  = '4' AND  t1.product  = '3' AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 

20170911 17:28:17: /index.php?m=bug&f=ajaxGetModuleOwner&t=html&moduleID=15&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_module` WHERE `id` = '15' 
  SELECT * FROM `zt_module` WHERE id IN ('') AND  deleted  = '0'
  SELECT QD FROM `zt_product` WHERE `id` = '3' 

20170911 17:28:17: /index.php?m=story&f=ajaxGetProductStories&t=html&productID=3&branch=0&moduleID=15
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id,type,parent FROM `zt_module` WHERE id  = '15'
  SELECT * FROM `zt_module` WHERE `id` = '15' 
  SELECT id FROM `zt_module` WHERE path  LIKE ',15,%' AND  deleted  = '0'
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('3') AND  t1.module IN ('15') AND  t1.deleted  = '0' ORDER BY `id` desc 

20170911 17:28:30: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170911 17:29:17: /index.php?m=bug&f=create&productID=3&branch=0&extra=projectID=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted, INSTR(',td,pm,qd,qa,dev,', role) AS roleOrder FROM `zt_user` WHERE deleted  = '0' ORDER BY `roleOrder` DESC,`account` 
  SELECT version FROM `zt_story` WHERE id  = '0'
  SELECT id,title FROM `zt_bug` WHERE deleted  = '0' AND  title IN ('asdadasda') AND  openedDate  >= '2017-09-11 17:28:17' AND  product=3 
  INSERT INTO `zt_bug` SET `product` = '3',`branch` = '0',`module` = '15',`project` = '4',`openedBuild` = 'trunk',`assignedTo` = 'tianliwei',`deadline` = '0000-00-00',`type` = 'codeerror',`os` = '',`browser` = '',`color` = '',`title` = 'asdadasda',`severity` = '3',`pri` = '0',`steps` = '<p>[步骤]</p>\n<br /><p>[结果]</p>\n<br /><p>[期望]</p>',`story` = '0',`task` = '0',`mailto` = ',tianliwei',`keywords` = '',`case` = '0',`caseVersion` = '0',`result` = '0',`testtask` = '0',`openedBy` = 'tianliwei',`openedDate` = '2017-09-11 17:29:17',`assignedDate` = '2017-09-11 17:29:17'
  SELECT product, project FROM `zt_bug` WHERE id  = '9'
  INSERT INTO `zt_action` SET `objectType` = 'bug',`objectID` = '9',`actor` = 'tianliwei',`action` = 'opened',`date` = '2017-09-11 17:29:17',`comment` = '',`extra` = '',`product` = ',3,',`project` = '4'
  SELECT t1.*, t2.name AS projectName, t3.title AS storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion, t4.name AS taskName, t5.title AS planName FROM `zt_bug` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  LEFT JOIN `zt_task` AS t4  ON t1.task = t4.id  LEFT JOIN `zt_productplan` AS t5  ON t1.plan = t5.id  WHERE t1.id  = '9'
  SELECT id, title FROM `zt_case` WHERE `fromBug`  = '9'
  SELECT * FROM `zt_file` WHERE objectType  = 'bug' AND  objectID  = '9' AND  extra  != 'editor'
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_action` WHERE `id` = '293' 
  SELECT * FROM `zt_history` WHERE action IN ('293') ORDER BY `id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170911 17:29:17: /index.php?m=project&f=bug&projectID=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT id, name FROM `zt_project` WHERE parent  = '4'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '4' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('271') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  project  = '4' ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_bug` WHERE deleted  = '0' AND  project  = '4' 
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  project  = '4' ORDER BY `status`,`id` desc 
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  project  = '4' ORDER BY `status`,`id` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type  = 'story' AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('3') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT id,title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT t1.*, t2.name as projectName, t3.name as productName, t3.type as productType FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_product` AS t3  ON t1.product = t3.id  WHERE t1.id  = '0'
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:29:17: /index.php?m=search&f=buildForm&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT id, title FROM `zt_userquery` WHERE account  = 'tianliwei' AND  module  = 'projectBug' ORDER BY `id` asc 

20170911 17:29:23: /index.php?m=bug&f=view&bugID=9
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.*, t2.name AS projectName, t3.title AS storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion, t4.name AS taskName, t5.title AS planName FROM `zt_bug` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  LEFT JOIN `zt_task` AS t4  ON t1.task = t4.id  LEFT JOIN `zt_productplan` AS t5  ON t1.plan = t5.id  WHERE t1.id  = '9'
  SELECT id, title FROM `zt_case` WHERE `fromBug`  = '9'
  SELECT * FROM `zt_file` WHERE objectType  = 'bug' AND  objectID  = '9' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  UPDATE `zt_action` SET  `read` = '1' WHERE objectType  = 'bug' AND  objectID  = '9' AND  `read`  = '0'
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
  SELECT * FROM `zt_action` WHERE objectType  = 'bug' AND  objectID  = '9' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('293') ORDER BY `id` 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('3') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT * FROM `zt_bug` WHERE id  = '9' OR deleted  = '0' AND  project  = '4'  ORDER BY `status`,`id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:29:27: /index.php?m=bug&f=edit&bugID=9
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.*, t2.name AS projectName, t3.title AS storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion, t4.name AS taskName, t5.title AS planName FROM `zt_bug` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  LEFT JOIN `zt_task` AS t4  ON t1.task = t4.id  LEFT JOIN `zt_productplan` AS t5  ON t1.plan = t5.id  WHERE t1.id  = '9'
  SELECT id, title FROM `zt_case` WHERE `fromBug`  = '9'
  SELECT * FROM `zt_file` WHERE objectType  = 'bug' AND  objectID  = '9' AND  extra  != 'editor'
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('3') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.project  = '4' AND  t1.product  = '3' AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT id,CONCAT(title, " [", begin, " ~ ", end, "]") as title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','bug') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT t2.id, t2.name, t2.deleted FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.product  = '3' AND  t2.id IN ('4','3') ORDER BY t1.`project` desc 
  SELECT t2.id, t2.title, t2.module, t2.pri, t2.estimate, t3.name AS product FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_product` AS t3  ON t1.product = t3.id  WHERE t1.project  = '4' AND  t2.deleted  = '0'
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.id, t1.name, t2.realname AS finishedByRealName FROM `zt_task` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.finishedBy = t2.account  WHERE t1.project  = '4' AND  t1.deleted  = '0' ORDER BY `finishedBy`,`id` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, realname, deleted FROM `zt_user` WHERE account IN ('tianliwei','','','tianliwei')
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'bug' AND  objectID  = '9' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('293') ORDER BY `id` 
  SELECT id,account,title,content,public FROM `zt_usertpl` WHERE type  = 'bug' AND ( account  = 'tianliwei' OR public  = '1') ORDER BY `id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:29:38: /index.php?m=project&f=bug&projectID=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT id, name FROM `zt_project` WHERE parent  = '4'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '4' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('271') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  project  = '4' ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_bug` WHERE deleted  = '0' AND  project  = '4' 
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  project  = '4' ORDER BY `status`,`id` desc 
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  project  = '4' ORDER BY `status`,`id` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type  = 'story' AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('3') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT id,title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT t1.*, t2.name as projectName, t3.name as productName, t3.type as productType FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_product` AS t3  ON t1.product = t3.id  WHERE t1.id  = '0'
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:29:39: /index.php?m=search&f=buildForm&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT id, title FROM `zt_userquery` WHERE account  = 'tianliwei' AND  module  = 'projectBug' ORDER BY `id` asc 

20170911 17:29:41: /index.php?m=bug&f=assignTo&bugID=9&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.*, t2.name AS projectName, t3.title AS storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion, t4.name AS taskName, t5.title AS planName FROM `zt_bug` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  LEFT JOIN `zt_task` AS t4  ON t1.task = t4.id  LEFT JOIN `zt_productplan` AS t5  ON t1.plan = t5.id  WHERE t1.id  = '9'
  SELECT id, title FROM `zt_case` WHERE `fromBug`  = '9'
  SELECT * FROM `zt_file` WHERE objectType  = 'bug' AND  objectID  = '9' AND  extra  != 'editor'
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, realname, deleted FROM `zt_user` WHERE account IN ('tianliwei')
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'bug' AND  objectID  = '9' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('293') ORDER BY `id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:29:48: /index.php?m=bug&f=assignTo&bugID=9&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.*, t2.name AS projectName, t3.title AS storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion, t4.name AS taskName, t5.title AS planName FROM `zt_bug` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  LEFT JOIN `zt_task` AS t4  ON t1.task = t4.id  LEFT JOIN `zt_productplan` AS t5  ON t1.plan = t5.id  WHERE t1.id  = '9'
  SELECT id, title FROM `zt_case` WHERE `fromBug`  = '9'
  SELECT * FROM `zt_file` WHERE objectType  = 'bug' AND  objectID  = '9' AND  extra  != 'editor'
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.*, t2.name AS projectName, t3.title AS storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion, t4.name AS taskName, t5.title AS planName FROM `zt_bug` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  LEFT JOIN `zt_task` AS t4  ON t1.task = t4.id  LEFT JOIN `zt_productplan` AS t5  ON t1.plan = t5.id  WHERE t1.id  = '9'
  SELECT id, title FROM `zt_case` WHERE `fromBug`  = '9'
  SELECT * FROM `zt_file` WHERE objectType  = 'bug' AND  objectID  = '9' AND  extra  != 'editor'
  UPDATE `zt_bug` SET `assignedTo` = 'qiuqingqiang',`mailto` = ',tianliwei',`lastEditedBy` = 'tianliwei',`lastEditedDate` = '2017-09-11 17:29:46',`assignedDate` = '2017-09-11 17:29:46' WHERE id  = '9'
  SELECT product, project FROM `zt_bug` WHERE id  = '9'
  INSERT INTO `zt_action` SET `objectType` = 'bug',`objectID` = '9',`actor` = 'tianliwei',`action` = 'assigned',`date` = '2017-09-11 17:29:46',`comment` = '',`extra` = 'qiuqingqiang',`product` = ',3,',`project` = '4'
  INSERT INTO `zt_history` SET `field` = 'assignedTo',`old` = 'tianliwei',`new` = 'qiuqingqiang',`diff` = '',`action` = '294'
  SELECT t1.*, t2.name AS projectName, t3.title AS storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion, t4.name AS taskName, t5.title AS planName FROM `zt_bug` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  LEFT JOIN `zt_task` AS t4  ON t1.task = t4.id  LEFT JOIN `zt_productplan` AS t5  ON t1.plan = t5.id  WHERE t1.id  = '9'
  SELECT id, title FROM `zt_case` WHERE `fromBug`  = '9'
  SELECT * FROM `zt_file` WHERE objectType  = 'bug' AND  objectID  = '9' AND  extra  != 'editor'
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_action` WHERE `id` = '294' 
  SELECT * FROM `zt_history` WHERE action IN ('294') ORDER BY `id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('qiuqingqiang','')

20170911 17:29:49: /index.php?m=project&f=bug&projectID=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT id, name FROM `zt_project` WHERE parent  = '4'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '4' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('271') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  project  = '4' ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_bug` WHERE deleted  = '0' AND  project  = '4' 
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  project  = '4' ORDER BY `status`,`id` desc 
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  project  = '4' ORDER BY `status`,`id` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type  = 'story' AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('3') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT id,title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT t1.*, t2.name as projectName, t3.name as productName, t3.type as productType FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_product` AS t3  ON t1.product = t3.id  WHERE t1.id  = '0'
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:29:52: /index.php?m=user&f=logout
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '22',`actor` = 'tianliwei',`action` = 'logout',`date` = '2017-09-11 17:29:52',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170911 17:29:52: /index.php?m=user&f=login
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:29:58: /index.php?m=user&f=login
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'qiuqingqiang'
  SELECT * FROM `zt_user` WHERE account  = 'qiuqingqiang' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '125.70.30.150', `last` = '1505122198' WHERE account  = 'qiuqingqiang'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'qiuqingqiang'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'qiuqingqiang'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'qiuqingqiang'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'qiuqingqiang' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '20',`actor` = 'qiuqingqiang',`action` = 'login',`date` = '2017-09-11 17:29:58',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170911 17:29:58: /index.php?m=project&f=bug&projectID=4
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT id, name FROM `zt_project` WHERE parent  = '4'
  SELECT t1.*, t1.hours * t1.days AS totalHours, if(t2.deleted='0', t2.realname, t1.account) as realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '4'
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType IN('project', 'testtask', 'build')  AND  project  = '4' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('271') ORDER BY `id` 
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  SELECT t2.id, t2.name, t2.type, t1.branch FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.project  = '4'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  project  = '4' ORDER BY `status`,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_bug` WHERE deleted  = '0' AND  project  = '4' 
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  project  = '4' ORDER BY `status`,`id` desc 
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  project  = '4' ORDER BY `status`,`id` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type  = 'story' AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('3') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT * FROM `zt_branch` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE id IN ('3')
  SELECT id,title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT t1.*, t2.name as projectName, t3.name as productName, t3.type as productType FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_product` AS t3  ON t1.product = t3.id  WHERE t1.id  = '0'
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:29:58: /index.php?m=search&f=buildForm&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT id, title FROM `zt_userquery` WHERE account  = 'qiuqingqiang' AND  module  = 'projectBug' ORDER BY `id` asc 

20170911 17:30:04: /index.php?m=bug&f=view&bugID=9
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.*, t2.name AS projectName, t3.title AS storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion, t4.name AS taskName, t5.title AS planName FROM `zt_bug` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  LEFT JOIN `zt_task` AS t4  ON t1.task = t4.id  LEFT JOIN `zt_productplan` AS t5  ON t1.plan = t5.id  WHERE t1.id  = '9'
  SELECT id, title FROM `zt_case` WHERE `fromBug`  = '9'
  SELECT * FROM `zt_file` WHERE objectType  = 'bug' AND  objectID  = '9' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
  UPDATE `zt_action` SET  `read` = '1' WHERE objectType  = 'bug' AND  objectID  = '9' AND  `read`  = '0'
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
  SELECT * FROM `zt_action` WHERE objectType  = 'bug' AND  objectID  = '9' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('293','294') ORDER BY `id` 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('3') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT * FROM `zt_bug` WHERE id  = '9' OR deleted  = '0' AND  project  = '4'  ORDER BY `status`,`id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:30:15: /index.php?m=bug&f=resolve&bugID=9&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.*, t2.name AS projectName, t3.title AS storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion, t4.name AS taskName, t5.title AS planName FROM `zt_bug` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  LEFT JOIN `zt_task` AS t4  ON t1.task = t4.id  LEFT JOIN `zt_productplan` AS t5  ON t1.plan = t5.id  WHERE t1.id  = '9'
  SELECT id, title FROM `zt_case` WHERE `fromBug`  = '9'
  SELECT * FROM `zt_file` WHERE objectType  = 'bug' AND  objectID  = '9' AND  extra  != 'editor'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT t2.id, t2.name, t2.deleted FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.product  = '3' AND  t2.id IN ('4','3') ORDER BY t1.`project` desc 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('3') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'bug' AND  objectID  = '9' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('293','294') ORDER BY `id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:31:04: /index.php?m=bug&f=resolve&bugID=9&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.*, t2.name AS projectName, t3.title AS storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion, t4.name AS taskName, t5.title AS planName FROM `zt_bug` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  LEFT JOIN `zt_task` AS t4  ON t1.task = t4.id  LEFT JOIN `zt_productplan` AS t5  ON t1.plan = t5.id  WHERE t1.id  = '9'
  SELECT id, title FROM `zt_case` WHERE `fromBug`  = '9'
  SELECT * FROM `zt_file` WHERE objectType  = 'bug' AND  objectID  = '9' AND  extra  != 'editor'
  SELECT id FROM `zt_testtask` WHERE build  = '' ORDER BY `id` desc  LIMIT 1 

20170911 17:31:11: /index.php?m=bug&f=resolve&bugID=9&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.*, t2.name AS projectName, t3.title AS storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion, t4.name AS taskName, t5.title AS planName FROM `zt_bug` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  LEFT JOIN `zt_task` AS t4  ON t1.task = t4.id  LEFT JOIN `zt_productplan` AS t5  ON t1.plan = t5.id  WHERE t1.id  = '9'
  SELECT id, title FROM `zt_case` WHERE `fromBug`  = '9'
  SELECT * FROM `zt_file` WHERE objectType  = 'bug' AND  objectID  = '9' AND  extra  != 'editor'
  UPDATE `zt_bug` SET `resolution` = 'fixed',`duplicateBug` = '0',`resolvedBuild` = 'trunk',`resolvedDate` = '2017-09-11 17:30:15',`assignedTo` = 'tianliwei',`resolvedBy` = 'qiuqingqiang',`status` = 'resolved',`confirmed` = '1',`assignedDate` = '2017-09-11 17:31:07',`lastEditedBy` = 'qiuqingqiang',`lastEditedDate` = '2017-09-11 17:31:07' WHERE id  = '9'
  SELECT product, project FROM `zt_bug` WHERE id  = '9'
  INSERT INTO `zt_action` SET `objectType` = 'bug',`objectID` = '9',`actor` = 'qiuqingqiang',`action` = 'resolved',`date` = '2017-09-11 17:31:07',`comment` = '',`extra` = 'fixed',`product` = ',3,',`project` = '4'
  SELECT t1.*, t2.name AS projectName, t3.title AS storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion, t4.name AS taskName, t5.title AS planName FROM `zt_bug` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  LEFT JOIN `zt_task` AS t4  ON t1.task = t4.id  LEFT JOIN `zt_productplan` AS t5  ON t1.plan = t5.id  WHERE t1.id  = '9'
  SELECT id, title FROM `zt_case` WHERE `fromBug`  = '9'
  SELECT * FROM `zt_file` WHERE objectType  = 'bug' AND  objectID  = '9' AND  extra  != 'editor'
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_action` WHERE `id` = '297' 
  SELECT * FROM `zt_history` WHERE action IN ('297') ORDER BY `id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('tianliwei','tianliwei')
  SELECT t1.*, t2.name AS projectName, t3.title AS storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion, t4.name AS taskName, t5.title AS planName FROM `zt_bug` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  LEFT JOIN `zt_task` AS t4  ON t1.task = t4.id  LEFT JOIN `zt_productplan` AS t5  ON t1.plan = t5.id  WHERE t1.id  = '9'
  SELECT id, title FROM `zt_case` WHERE `fromBug`  = '9'
  SELECT * FROM `zt_file` WHERE objectType  = 'bug' AND  objectID  = '9' AND  extra  != 'editor'

20170911 17:31:11: /index.php?m=bug&f=view&bugID=9
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.*, t2.name AS projectName, t3.title AS storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion, t4.name AS taskName, t5.title AS planName FROM `zt_bug` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  LEFT JOIN `zt_task` AS t4  ON t1.task = t4.id  LEFT JOIN `zt_productplan` AS t5  ON t1.plan = t5.id  WHERE t1.id  = '9'
  SELECT id, title FROM `zt_case` WHERE `fromBug`  = '9'
  SELECT * FROM `zt_file` WHERE objectType  = 'bug' AND  objectID  = '9' AND  extra  != 'editor'
  SELECT * FROM `zt_project` WHERE `id` = '4' 
  SELECT 
            SUM(estimate) AS totalEstimate, 
            SUM(consumed) AS totalConsumed, 
            SUM(`left`) AS totalLeft FROM `zt_task` WHERE project  = '4' AND  status  != 'cancel' AND  deleted  = '0'
  SELECT sum(days * hours) AS totalHours FROM `zt_team` WHERE project  = '4'
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
  SELECT * FROM `zt_action` WHERE objectType  = 'bug' AND  objectID  = '9' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('293','294','297') ORDER BY `id` 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('3') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:31:17: /index.php?m=qa&f=index
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

20170911 17:31:17: /index.php?m=block&f=printBlock&id=114&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '114'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'qiuqingqiang' ORDER BY `id` desc  LIMIT 15 

20170911 17:31:17: /index.php?m=block&f=printBlock&id=115&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '115'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'qiuqingqiang' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170911 17:31:17: /index.php?m=block&f=printBlock&id=116&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '116'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.*,t2.name as productName,t3.name as buildName,t4.name as projectName FROM `zt_testtask` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product=t2.id  LEFT JOIN `zt_build` AS t3  ON t1.build=t3.id  LEFT JOIN `zt_project` AS t4  ON t1.project=t4.id  LEFT JOIN `zt_projectproduct` AS t5  ON t1.project=t5.project  WHERE t1.deleted  = '0' AND  t1.product IN ('3') AND  t1.product = t5.product  AND  t1.status  = 'wait' ORDER BY t1.`id` desc  LIMIT 15 

20170911 17:31:19: /index.php?m=doc&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.* FROM `zt_doclib` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product=t2.id  WHERE t1.deleted  = '0' AND  t1.product  != '0' ORDER BY t2.`order` desc,t1.`order` asc,`id` desc 
  SELECT id,name,`order` FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc,`id` desc 
  SELECT t1.* FROM `zt_doclib` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project=t2.id  WHERE t1.deleted  = '0' AND  t1.project  != '0' ORDER BY t2.`order` desc,t1.`order` asc,`id` desc 
  SELECT id,name,`order` FROM `zt_project` WHERE id IN ('4','3') ORDER BY `order` desc,`id` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' AND  project  = '0' AND  product  = '0' ORDER BY `order`,`id` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' AND  product IN ('3') ORDER BY `order`,`id` 
  SELECT DISTINCT product FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project=t2.id  WHERE t1.product IN ('3') AND  t2.deleted  = '0'
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' AND  project IN ('4','3') ORDER BY `order`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:31:23: /index.php?m=doc&f=browse&libID=5
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_doclib` WHERE `id` = '5' 
  SELECT t1.* FROM `zt_doclib` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product=t2.id  WHERE t1.product  != '0' AND  t1.deleted  = '0' ORDER BY t2.`order` desc,t1.`order`,t1.`id` 
  SELECT * FROM `zt_doclib` WHERE `id` = '5' 
  SELECT id,name FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  lib IN ('5')
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  id IN ('') ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_doc` WHERE deleted  = '0' AND  id IN ('') 
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  id IN ('') ORDER BY `id` desc 
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  id IN ('') ORDER BY `id` desc 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_module` WHERE root  = '5' AND  type  = 'doc' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '5' 
  SELECT * FROM `zt_module` WHERE root  = '5' AND  type  = 'doc' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:31:26: /index.php?m=doc&f=objectLibs&type=product&objectID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id,name FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' AND  product  = '3' ORDER BY `order`,`id` 
  SELECT DISTINCT product FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project=t2.id  WHERE t1.product  = '3' AND  t2.deleted  = '0'
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:31:28: /index.php?m=doc&f=allLibs&type=product
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.* FROM `zt_doclib` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product=t2.id  WHERE t1.product  != '0' AND  t1.deleted  = '0' ORDER BY t2.`order` desc,t1.`order`,t1.`id` 
  SELECT DISTINCT product FROM `zt_doclib` WHERE deleted  = '0' AND  product  != '0' AND  id IN ('5') ORDER BY `product` desc 
  SELECT COUNT(distinct product) AS recTotal FROM `zt_doclib` WHERE deleted  = '0' AND  product  != '0' AND  id IN ('5') 
  SELECT DISTINCT product FROM `zt_doclib` WHERE deleted  = '0' AND  product  != '0' AND  id IN ('5') ORDER BY `product` desc 
  SELECT id,name,`order` FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc,`id` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' AND  product IN ('3') ORDER BY `order`,`id` 
  SELECT DISTINCT product FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project=t2.id  WHERE t1.product IN ('3') AND  t2.deleted  = '0'
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:31:29: /index.php?m=doc&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.* FROM `zt_doclib` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product=t2.id  WHERE t1.deleted  = '0' AND  t1.product  != '0' ORDER BY t2.`order` desc,t1.`order` asc,`id` desc 
  SELECT id,name,`order` FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc,`id` desc 
  SELECT t1.* FROM `zt_doclib` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project=t2.id  WHERE t1.deleted  = '0' AND  t1.project  != '0' ORDER BY t2.`order` desc,t1.`order` asc,`id` desc 
  SELECT id,name,`order` FROM `zt_project` WHERE id IN ('4','3') ORDER BY `order` desc,`id` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' AND  project  = '0' AND  product  = '0' ORDER BY `order`,`id` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' AND  product IN ('3') ORDER BY `order`,`id` 
  SELECT DISTINCT product FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project=t2.id  WHERE t1.product IN ('3') AND  t2.deleted  = '0'
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' AND  project IN ('4','3') ORDER BY `order`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:31:31: /index.php?m=doc&f=allLibs&type=project&product=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id,name FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_projectproduct` WHERE product  = '3'
  SELECT t1.* FROM `zt_doclib` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project=t2.id  WHERE t1.project  != '0' AND  t1.deleted  = '0' ORDER BY t2.`order` desc,t1.`order`,t1.`id` 
  SELECT DISTINCT project FROM `zt_doclib` WHERE deleted  = '0' AND  project  != '0' AND  project IN ('3','4') AND  id IN ('7','6') ORDER BY `project` desc 
  SELECT COUNT(distinct project) AS recTotal FROM `zt_doclib` WHERE deleted  = '0' AND  project  != '0' AND  project IN ('3','4') AND  id IN ('7','6') 
  SELECT DISTINCT project FROM `zt_doclib` WHERE deleted  = '0' AND  project  != '0' AND  project IN ('3','4') AND  id IN ('7','6') ORDER BY `project` desc 
  SELECT id,name,`order` FROM `zt_project` WHERE id IN ('4','3') ORDER BY `order` desc,`id` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' AND  project IN ('4','3') ORDER BY `order`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:31:34: /index.php?m=doc&f=browse&libID=7
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_doclib` WHERE `id` = '7' 
  SELECT t1.* FROM `zt_doclib` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project=t2.id  WHERE t1.project  != '0' AND  t1.deleted  = '0' ORDER BY t2.`order` desc,t1.`order`,t1.`id` 
  SELECT * FROM `zt_doclib` WHERE `id` = '7' 
  SELECT * FROM `zt_projectproduct` WHERE product  = '3' AND  project  = '4'
  SELECT id,name FROM `zt_product` WHERE id  = '3'
  SELECT id,name FROM `zt_project` WHERE id  = '4'
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  lib IN ('7')
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  id IN ('') ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_doc` WHERE deleted  = '0' AND  id IN ('') 
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  id IN ('') ORDER BY `id` desc 
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  id IN ('') ORDER BY `id` desc 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_module` WHERE root  = '7' AND  type  = 'doc' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '7' 
  SELECT * FROM `zt_module` WHERE root  = '7' AND  type  = 'doc' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:31:40: /index.php?m=doc&f=objectLibs&type=product&objectID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id,name FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' AND  product  = '3' ORDER BY `order`,`id` 
  SELECT DISTINCT product FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project=t2.id  WHERE t1.product  = '3' AND  t2.deleted  = '0'
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:32:15: /index.php?m=user&f=logout
  SELECT * FROM `zt_config` WHERE owner IN ('system','qiuqingqiang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '20',`actor` = 'qiuqingqiang',`action` = 'logout',`date` = '2017-09-11 17:32:15',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170911 17:32:15: /index.php?m=user&f=login
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:32:20: /index.php?m=user&f=login
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'admin'
  SELECT * FROM `zt_user` WHERE account  = 'admin' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '125.70.30.150', `last` = '1505122340' WHERE account  = 'admin'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'admin'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'admin'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'admin'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'admin' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '1',`actor` = 'admin',`action` = 'login',`date` = '2017-09-11 17:32:20',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170911 17:32:20: /index.php?m=doc&f=objectLibs&type=product&objectID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id,name FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' AND  product  = '3' ORDER BY `order`,`id` 
  SELECT DISTINCT product FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project=t2.id  WHERE t1.product  = '3' AND  t2.deleted  = '0'
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:32:22: /index.php?m=product&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'product' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:32:23: /index.php?m=block&f=printBlock&id=15&module=product
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '15'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-11 17:32:23' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170911 17:32:23: /index.php?m=block&f=printBlock&id=16&module=product
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '16'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170911 17:32:28: /index.php?m=my&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:32:29: /index.php?m=block&f=printBlock&id=1&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '1'

20170911 17:32:29: /index.php?m=block&f=printBlock&id=2&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '2'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' ORDER BY `order`,`id` desc 
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  lib IN ('7','6','5')
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-09-11' AND  date  < '2017-09-12' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), (1), '1=1')  AND  IF(objectType != 'doclib', '1=1', objectID IN ('7','6','5'))   ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('1','20','22','21','12','13')
  SELECT id, title AS name FROM `zt_bug` WHERE id IN ('9')
  SELECT id, name AS name FROM `zt_task` WHERE id IN ('15','14','13','16')
  SELECT id, title AS name FROM `zt_story` WHERE id IN ('10')
  SELECT id, name AS name FROM `zt_project` WHERE id IN ('4')
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170911 17:32:29: /index.php?m=block&f=printBlock&id=3&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('4','3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('4','3') 
  SELECT * FROM `zt_project` WHERE id IN ('4','3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('4','3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('4','3') ORDER BY `date` desc 

20170911 17:32:29: /index.php?m=block&f=printBlock&id=4&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170911 17:32:29: /index.php?m=block&f=printBlock&id=6&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170911 17:32:29: /index.php?m=block&f=printBlock&id=7&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170911 17:32:29: /index.php?m=block&f=printBlock&id=5&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-11 17:32:29' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170911 17:32:29: /index.php?m=block&f=printBlock&id=8&module=my
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

20170911 17:32:29: /index.php?m=block&f=printBlock&id=9&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'admin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170911 17:34:09: /index.php?m=user&f=login
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:34:26: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170911 17:35:20: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170911 17:37:36: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170911 17:38:30: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170911 17:44:26: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170911 17:45:20: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170911 17:48:30: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170911 17:49:46: /index.php?m=product&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'product' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:49:46: /index.php?m=block&f=printBlock&id=15&module=product
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '15'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-11 17:49:46' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170911 17:49:46: /index.php?m=block&f=printBlock&id=16&module=product
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '16'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'admin' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170911 17:49:47: /index.php?m=product&f=browse&productID=3
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
  SELECT story, COUNT(*) AS tasks FROM `zt_task` WHERE story IN ('10','9','8') AND  deleted  = '0' GROUP BY story
  SELECT story, COUNT(*) AS bugs FROM `zt_bug` WHERE story IN ('10','9','8') AND  deleted  = '0' GROUP BY story
  SELECT story, COUNT(*) AS cases FROM `zt_case` WHERE story IN ('10','9','8') AND  deleted  = '0' GROUP BY story
  SELECT id,CONCAT(title, " [", begin, " ~ ", end, "]") as title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type  = 'story' AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT id,CONCAT(title, " [", begin, " ~ ", end, "]") as title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT DISTINCT story FROM `zt_case` WHERE story IN ('10','9','8')
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type  = 'story' AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT account, realname, deleted, INSTR(',pd,po,', role) AS roleOrder FROM `zt_user` WHERE deleted  = '0' ORDER BY `roleOrder` DESC,`account` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type  = 'story' AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_storystage` WHERE story IN ('10','9','8')
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170911 17:55:21: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170911 17:58:31: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170911 17:59:47: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170911 18:05:21: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170911 18:09:48: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170911 18:37:47: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170911 18:47:47: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170911 18:57:48: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170911 19:07:49: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170911 21:33:34: /index.php?m=user&f=login
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 


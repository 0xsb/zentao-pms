<?php
 die();
?>
20170908 09:21:57: /index.php?m=testcase&f=browse&productID=3
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

20170908 09:22:10: /index.php?m=tree&f=browse&productID=3&view=case
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
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
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  parent  = '0' AND  type IN ('case','story') AND  branch  = '0' AND  deleted  = '0' ORDER BY `type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:22:14: /index.php?m=user&f=logout
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '22',`actor` = 'tianliwei',`action` = 'logout',`date` = '2017-09-08 09:22:14',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170908 09:22:14: /index.php?m=user&f=login
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:22:17: /index.php?m=user&f=login
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'admin'
  SELECT * FROM `zt_user` WHERE account  = 'admin' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '125.70.29.127', `last` = '1504833737' WHERE account  = 'admin'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'admin'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'admin'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'admin'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'admin' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '1',`actor` = 'admin',`action` = 'login',`date` = '2017-09-08 09:22:17',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170908 09:22:17: /index.php?m=tree&f=browse&productID=3&view=case
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
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
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  parent  = '0' AND  type IN ('case','story') AND  branch  = '0' AND  deleted  = '0' ORDER BY `type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:22:26: /index.php?m=testcase&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
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
  SELECT * FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'admin'))  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:22:28: /index.php?m=tree&f=browse&productID=3&view=case
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
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
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  parent  = '0' AND  type IN ('case','story') AND  branch  = '0' AND  deleted  = '0' ORDER BY `type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:22:40: /index.php?m=admin&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:22:42: /index.php?m=qa&f=index
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

20170908 09:22:42: /index.php?m=block&f=printBlock&id=10&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '10'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170908 09:22:42: /index.php?m=block&f=printBlock&id=11&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '11'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'admin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170908 09:22:42: /index.php?m=block&f=printBlock&id=12&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '12'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.*,t2.name as productName,t3.name as buildName,t4.name as projectName FROM `zt_testtask` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product=t2.id  LEFT JOIN `zt_build` AS t3  ON t1.build=t3.id  LEFT JOIN `zt_project` AS t4  ON t1.project=t4.id  LEFT JOIN `zt_projectproduct` AS t5  ON t1.project=t5.project  WHERE t1.deleted  = '0' AND  t1.product IN ('3') AND  t1.product = t5.product  AND  t1.status  = 'wait' ORDER BY t1.`id` desc  LIMIT 15 

20170908 09:22:43: /index.php?m=project&f=index
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

20170908 09:22:43: /index.php?m=block&f=printBlock&id=14&module=project
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '14'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170908 09:22:43: /index.php?m=block&f=printBlock&id=13&module=project
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '13'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170908 09:22:48: /index.php?m=project&f=ajaxGetDropMenu&t=html&objectID=3&module=project&method=index&extra=
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 

20170908 09:22:49: /index.php?m=project&f=all&status=undone&projectID=3
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
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:22:51: /index.php?m=project&f=build&projectID=3
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

20170908 09:22:51: /index.php?m=project&f=testtask&projectID=3
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
  SELECT t1.*, t2.name AS buildName FROM `zt_testtask` AS t1  LEFT JOIN `zt_build` AS t2  ON t1.build = t2.id  WHERE t1.project  = '3' AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:22:55: /index.php?m=qa&f=index
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

20170908 09:22:55: /index.php?m=block&f=printBlock&id=10&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '10'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170908 09:22:55: /index.php?m=block&f=printBlock&id=11&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '11'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'admin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170908 09:22:55: /index.php?m=block&f=printBlock&id=12&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '12'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.*,t2.name as productName,t3.name as buildName,t4.name as projectName FROM `zt_testtask` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product=t2.id  LEFT JOIN `zt_build` AS t3  ON t1.build=t3.id  LEFT JOIN `zt_project` AS t4  ON t1.project=t4.id  LEFT JOIN `zt_projectproduct` AS t5  ON t1.project=t5.project  WHERE t1.deleted  = '0' AND  t1.product IN ('3') AND  t1.product = t5.product  AND  t1.status  = 'wait' ORDER BY t1.`id` desc  LIMIT 15 

20170908 09:22:56: /index.php?m=testcase&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
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
  SELECT * FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'admin'))  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:22:59: /index.php?m=tree&f=browse&productID=3&view=case
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
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
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  parent  = '0' AND  type IN ('case','story') AND  branch  = '0' AND  deleted  = '0' ORDER BY `type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:23:35: /index.php?m=tree&f=manageChild&root=3&viewType=case
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT id,branch,name FROM `zt_module` WHERE root  = '3' AND  type IN ('case','story') AND  parent  = '0' AND  branch IN ('0') AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE `id` = '0' 
  INSERT INTO `zt_module` SET `root` = '3',`name` = '升级',`parent` = '0',`branch` = '0',`short` = '',`grade` = '1',`type` = 'case',`order` = '80'
  UPDATE `zt_module` SET  `path` = ',22,' WHERE id  = '22' LIMIT 1 
  INSERT INTO `zt_module` SET `root` = '3',`name` = '权限',`parent` = '0',`branch` = '0',`short` = '',`grade` = '1',`type` = 'case',`order` = '90'
  UPDATE `zt_module` SET  `path` = ',23,' WHERE id  = '23' LIMIT 1 
  INSERT INTO `zt_module` SET `root` = '3',`name` = '兼容性',`parent` = '0',`branch` = '0',`short` = '',`grade` = '1',`type` = 'case',`order` = '100'
  UPDATE `zt_module` SET  `path` = ',24,' WHERE id  = '24' LIMIT 1 

20170908 09:23:35: /index.php?m=tree&f=browse&productID=3&view=case
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
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
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  parent  = '0' AND  type IN ('case','story') AND  branch  = '0' AND  deleted  = '0' ORDER BY `type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:23:43: /index.php?m=tree&f=browse&t=html&rootID=3&viewType=case&moduleID=21&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT path FROM `zt_module` WHERE id  = '21'
  SELECT * FROM `zt_module` WHERE id IN ('21') AND  deleted  = '0' ORDER BY `grade` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  parent  = '21' AND  type IN ('case','story') AND  branch  = '0' AND  deleted  = '0' ORDER BY `type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:23:48: /index.php?m=testcase&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
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
  SELECT * FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'admin'))  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:23:50: /index.php?m=tree&f=browse&productID=3&view=case
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
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
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  parent  = '0' AND  type IN ('case','story') AND  branch  = '0' AND  deleted  = '0' ORDER BY `type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:23:53: /index.php?m=user&f=logout
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '1',`actor` = 'admin',`action` = 'logout',`date` = '2017-09-08 09:23:53',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170908 09:23:53: /index.php?m=user&f=login
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:23:57: /index.php?m=user&f=login
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'tianliwei'
  SELECT * FROM `zt_user` WHERE account  = 'tianliwei' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '125.70.29.127', `last` = '1504833837' WHERE account  = 'tianliwei'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'tianliwei'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'tianliwei'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'tianliwei'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'tianliwei' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '22',`actor` = 'tianliwei',`action` = 'login',`date` = '2017-09-08 09:23:57',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170908 09:23:57: /index.php?m=tree&f=browse&productID=3&view=case
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
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
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  parent  = '0' AND  type IN ('case','story') AND  branch  = '0' AND  deleted  = '0' ORDER BY `type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:24:01: /index.php?m=testcase&f=browse&productID=3
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

20170908 09:24:14: /index.php?m=datatable&f=ajaxSave
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  REPLACE `zt_config` SET `owner` = 'tianliwei',`module` = 'datatable',`section` = 'testcaseBrowse',`key` = 'showModule',`value` = 'base'

20170908 09:24:14: /index.php?m=testcase&f=browse&productID=3
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
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT id,name,path,short FROM `zt_module` WHERE root  = '3' AND  type IN ('case','story') AND  deleted  = '0'
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

20170908 09:24:17: /index.php?m=tree&f=browse&productID=3&view=case
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
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
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  parent  = '0' AND  type IN ('case','story') AND  branch  = '0' AND  deleted  = '0' ORDER BY `type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:24:23: /index.php?m=user&f=logout
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '22',`actor` = 'tianliwei',`action` = 'logout',`date` = '2017-09-08 09:24:23',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170908 09:24:23: /index.php?m=user&f=login
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:24:27: /index.php?m=user&f=login
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'shenguilin'
  SELECT * FROM `zt_user` WHERE account  = 'shenguilin' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '125.70.29.127', `last` = '1504833867' WHERE account  = 'shenguilin'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'shenguilin'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'shenguilin'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'shenguilin'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'shenguilin' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '12',`actor` = 'shenguilin',`action` = 'login',`date` = '2017-09-08 09:24:27',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170908 09:24:27: /index.php?m=tree&f=browse&productID=3&view=case
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
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
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  parent  = '0' AND  type IN ('case','story') AND  branch  = '0' AND  deleted  = '0' ORDER BY `type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:24:30: /index.php?m=user&f=logout
  SELECT * FROM `zt_config` WHERE owner IN ('system','shenguilin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '12',`actor` = 'shenguilin',`action` = 'logout',`date` = '2017-09-08 09:24:30',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170908 09:24:30: /index.php?m=user&f=login
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:24:33: /index.php?m=user&f=login
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'lidongdong'
  SELECT * FROM `zt_user` WHERE account  = 'lidongdong' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '125.70.29.127', `last` = '1504833873' WHERE account  = 'lidongdong'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'lidongdong'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'lidongdong'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'lidongdong'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'lidongdong' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '13',`actor` = 'lidongdong',`action` = 'login',`date` = '2017-09-08 09:24:33',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170908 09:24:33: /index.php?m=tree&f=browse&productID=3&view=case
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
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
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  parent  = '0' AND  type IN ('case','story') AND  branch  = '0' AND  deleted  = '0' ORDER BY `type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:24:36: /index.php?m=user&f=logout
  SELECT * FROM `zt_config` WHERE owner IN ('system','lidongdong') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '13',`actor` = 'lidongdong',`action` = 'logout',`date` = '2017-09-08 09:24:36',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170908 09:24:36: /index.php?m=user&f=login
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:25:52: /index.php?m=user&f=login
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'tianliwei'
  SELECT * FROM `zt_user` WHERE account  = 'tianliwei' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '125.70.29.127', `last` = '1504833952' WHERE account  = 'tianliwei'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'tianliwei'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'tianliwei'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'tianliwei'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'tianliwei' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '22',`actor` = 'tianliwei',`action` = 'login',`date` = '2017-09-08 09:25:52',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170908 09:25:52: /index.php?m=tree&f=browse&productID=3&view=case
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
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
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  parent  = '0' AND  type IN ('case','story') AND  branch  = '0' AND  deleted  = '0' ORDER BY `type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:26:08: /index.php?m=testsuite&f=library
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id,name FROM `zt_testsuite` WHERE product  = '0' AND  deleted  = '0' AND  type  = 'library' ORDER BY `id` desc 

20170908 09:26:08: /index.php?m=testsuite&f=createLib
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id,name FROM `zt_testsuite` WHERE product  = '0' AND  deleted  = '0' AND  type  = 'library' ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:26:10: /index.php?m=testreport&f=browse
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
  SELECT * FROM `zt_testreport` WHERE deleted  = '0' AND  product  = '3' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_testreport` WHERE deleted  = '0' AND  product  = '3' 
  SELECT * FROM `zt_testreport` WHERE deleted  = '0' AND  product  = '3' ORDER BY `id` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:26:13: /index.php?m=bug&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
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

20170908 09:26:23: /index.php?m=testtask&f=browse&productID=3
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

20170908 09:26:24: /index.php?m=testcase&f=browse&productID=3
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
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT id,name,path,short FROM `zt_module` WHERE root  = '3' AND  type IN ('case','story') AND  deleted  = '0'
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

20170908 09:26:28: /index.php?m=tree&f=browse&productID=3&view=case
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
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
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  parent  = '0' AND  type IN ('case','story') AND  branch  = '0' AND  deleted  = '0' ORDER BY `type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:26:33: /index.php?m=tree&f=manageChild&root=3&viewType=case
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT id,branch,name FROM `zt_module` WHERE root  = '3' AND  type IN ('case','story') AND  parent  = '0' AND  branch IN ('0') AND  deleted  = '0'
  SELECT * FROM `zt_module` WHERE `id` = '0' 
  UPDATE `zt_module` SET  `name` = '升级', `short` = '', `order` = '80' WHERE id  = '22' LIMIT 1 
  UPDATE `zt_module` SET  `name` = '权限', `short` = '', `order` = '90' WHERE id  = '23' LIMIT 1 
  UPDATE `zt_module` SET  `name` = '兼容性', `short` = '', `order` = '100' WHERE id  = '24' LIMIT 1 
  INSERT INTO `zt_module` SET `root` = '3',`name` = '基础模块',`parent` = '0',`branch` = '0',`short` = '',`grade` = '1',`type` = 'case',`order` = '110'
  UPDATE `zt_module` SET  `path` = ',25,' WHERE id  = '25' LIMIT 1 

20170908 09:26:33: /index.php?m=tree&f=browse&productID=3&view=case
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
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
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  parent  = '0' AND  type IN ('case','story') AND  branch  = '0' AND  deleted  = '0' ORDER BY `type` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:27:45: /index.php?m=testcase&f=browse&productID=3
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
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT id,name,path,short FROM `zt_module` WHERE root  = '3' AND  type IN ('case','story') AND  deleted  = '0'
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

20170908 09:27:46: /index.php?m=testcase&f=create&productID=3&branch=0&moduleID=0
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

20170908 09:29:03: /index.php?m=testcase&f=browse&productID=3
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
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT id,name,path,short FROM `zt_module` WHERE root  = '3' AND  type IN ('case','story') AND  deleted  = '0'
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

20170908 09:29:06: /index.php?m=product&f=ajaxGetDropMenu&t=html&objectID=3&module=testcase&method=browse&extra=
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 

20170908 09:29:07: /index.php?m=product&f=all&productID=3
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
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-08 09:29:07' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:29:09: /index.php?m=qa&f=index
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

20170908 09:29:09: /index.php?m=block&f=printBlock&id=77&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '77'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'tianliwei' ORDER BY `id` desc  LIMIT 15 

20170908 09:29:09: /index.php?m=block&f=printBlock&id=78&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '78'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'tianliwei' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170908 09:29:09: /index.php?m=block&f=printBlock&id=79&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '79'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.*,t2.name as productName,t3.name as buildName,t4.name as projectName FROM `zt_testtask` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product=t2.id  LEFT JOIN `zt_build` AS t3  ON t1.build=t3.id  LEFT JOIN `zt_project` AS t4  ON t1.project=t4.id  LEFT JOIN `zt_projectproduct` AS t5  ON t1.project=t5.project  WHERE t1.deleted  = '0' AND  t1.product IN ('3') AND  t1.product = t5.product  AND  t1.status  = 'wait' ORDER BY t1.`id` desc  LIMIT 15 

20170908 09:29:12: /index.php?m=testcase&f=browse&productID=3
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
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT id,name,path,short FROM `zt_module` WHERE root  = '3' AND  type IN ('case','story') AND  deleted  = '0'
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

20170908 09:29:20: /index.php?m=story&f=zeroCase&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_story` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_story` WHERE product IN ('3') AND  deleted  = '0' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('3') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')
  SELECT DISTINCT story FROM `zt_case` WHERE product  = '3' AND  story  != '0' AND  deleted  = '0'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'tianliwei'))  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:29:47: /index.php?m=testsuite&f=library
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id,name FROM `zt_testsuite` WHERE product  = '0' AND  deleted  = '0' AND  type  = 'library' ORDER BY `id` desc 

20170908 09:29:47: /index.php?m=testsuite&f=createLib
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id,name FROM `zt_testsuite` WHERE product  = '0' AND  deleted  = '0' AND  type  = 'library' ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:29:55: /index.php?m=testsuite&f=createLib
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  INSERT INTO `zt_testsuite` SET `name` = '易电有财',`desc` = '',`type` = 'library',`addedBy` = 'tianliwei',`addedDate` = '2017-09-08 09:29:55'
  INSERT INTO `zt_action` SET `objectType` = 'caselib',`objectID` = '1',`actor` = 'tianliwei',`action` = 'opened',`date` = '2017-09-08 09:29:55',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170908 09:29:55: /index.php?m=testsuite&f=library&libID=1
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id,name FROM `zt_testsuite` WHERE product  = '0' AND  deleted  = '0' AND  type  = 'library' ORDER BY `id` desc 
  SELECT * FROM `zt_module` WHERE root  = '1' AND  type  = 'caselib' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_case` WHERE lib  = '1' AND  product  = '0' AND  deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_case` WHERE lib  = '1' AND  product  = '0' AND  deleted  = '0' 
  SELECT * FROM `zt_case` WHERE lib  = '1' AND  product  = '0' AND  deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_case` WHERE lib  = '1' AND  product  = '0' AND  deleted  = '0' ORDER BY `id` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_module` WHERE root  = '1' AND  type  = 'caselib' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_module` WHERE root  = '1' AND  type  = 'caselib' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:30:00: /index.php?m=testsuite&f=import&libID=1
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:30:12: /index.php?m=testsuite&f=import&libID=1
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_product` WHERE id 

20170908 09:30:16: /index.php?m=testsuite&f=import&libID=1
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_product` WHERE id 

20170908 09:30:25: /index.php?m=testtask&f=browse
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

20170908 09:30:26: /index.php?m=testcase&f=browse&productID=3
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
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT id,name,path,short FROM `zt_module` WHERE root  = '3' AND  type IN ('case','story') AND  deleted  = '0'
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

20170908 09:30:28: /index.php?m=testcase&f=import&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:30:32: /index.php?m=testcase&f=import&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 

20170908 09:30:32: /index.php?m=testcase&f=showImport&productID=3&branch=0
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

20170908 09:31:39: /index.php?m=testcase&f=showImport&productID=3&branch=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT id, version FROM `zt_story` WHERE id IN ('','','','','','','','','','','','','','','','','')
  INSERT INTO `zt_case` SET `product` = '3',`branch` = '0',`module` = '25',`story` = '0',`title` = '查看启动页',`pri` = '3',`type` = 'feature',`stage` = '',`keywords` = '启动页',`frequency` = '1',`precondition` = '',`version` = '1',`openedBy` = 'tianliwei',`openedDate` = '2017-09-08 09:31:39',`status` = 'normal'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '13',`version` = '1',`desc` = '打开APP，加载启动页;',`expect` = '展现&quot;订阅宣传图&quot;;'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '13',`version` = '1',`desc` = '点击跳过',`expect` = '在5秒内可以点击跳过;'
  SELECT product FROM `zt_case` WHERE id  = '13'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '13',`actor` = 'tianliwei',`action` = 'opened',`date` = '2017-09-08 09:31:39',`comment` = '',`extra` = '',`product` = ',3,',`project` = '0'
  INSERT INTO `zt_case` SET `product` = '3',`branch` = '0',`module` = '25',`story` = '0',`title` = '用非注册用户进行登录',`pri` = '3',`type` = 'feature',`stage` = '',`keywords` = '登录',`frequency` = '1',`precondition` = '1.用非注册用户进行登录',`version` = '1',`openedBy` = 'tianliwei',`openedDate` = '2017-09-08 09:31:39',`status` = 'normal'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '14',`version` = '1',`desc` = '手机号输入带有英文手机号;',`expect` = '无法输入英文字符;'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '14',`version` = '1',`desc` = '手机号输入不够和超过11位手机号;',`expect` = '弱提示&quot;手机不是11位&quot;;'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '14',`version` = '1',`desc` = '手机号输入未注册手机号;',`expect` = '强提示框&quot;你输入的手机号或密码有误，请确认后重新填写&quot;;'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '14',`version` = '1',`desc` = '不输入手机号;',`expect` = '强提示框&quot;请输入手机号&quot;;'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '14',`version` = '1',`desc` = '输入错误的密码;',`expect` = '强提示框&quot;你输入的手机号或密码有误，请确认后重新填写&quot;;'
  SELECT product FROM `zt_case` WHERE id  = '14'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '14',`actor` = 'tianliwei',`action` = 'opened',`date` = '2017-09-08 09:31:39',`comment` = '',`extra` = '',`product` = ',3,',`project` = '0'
  INSERT INTO `zt_case` SET `product` = '3',`branch` = '0',`module` = '25',`story` = '0',`title` = '已有订阅单的用户登录,订阅单有项目更新',`pri` = '3',`type` = 'feature',`stage` = '',`keywords` = '登录',`frequency` = '1',`precondition` = '1.存在注册用户和未审核状态的用户',`version` = '1',`openedBy` = 'tianliwei',`openedDate` = '2017-09-08 09:31:39',`status` = 'normal'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '15',`version` = '1',`desc` = '输入正确的手机号和密码，点击【登录】',`expect` = '登录成功，页面转向到【信息】页'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '15',`version` = '1',`desc` = '查看页面展示',`expect` = '展示订阅单里面的项目更新数据，右上角都显示最新,安装未查看和已查看排序；'
  SELECT product FROM `zt_case` WHERE id  = '15'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '15',`actor` = 'tianliwei',`action` = 'opened',`date` = '2017-09-08 09:31:39',`comment` = '',`extra` = '',`product` = ',3,',`project` = '0'
  INSERT INTO `zt_case` SET `product` = '3',`branch` = '0',`module` = '25',`story` = '0',`title` = '已有订阅单的用户登录,,订阅单没有项目更新',`pri` = '3',`type` = 'feature',`stage` = '',`keywords` = '登录',`frequency` = '1',`precondition` = '1.存在注册用户和未审核状态的用户',`version` = '1',`openedBy` = 'tianliwei',`openedDate` = '2017-09-08 09:31:39',`status` = 'normal'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '16',`version` = '1',`desc` = '输入正确的手机号和密码，点击【登录】',`expect` = '登录成功，页面转向到【信息】页'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '16',`version` = '1',`desc` = '查看页面展示',`expect` = '显示文案[暂无最新订阅信息]；'
  SELECT product FROM `zt_case` WHERE id  = '16'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '16',`actor` = 'tianliwei',`action` = 'opened',`date` = '2017-09-08 09:31:39',`comment` = '',`extra` = '',`product` = ',3,',`project` = '0'
  INSERT INTO `zt_case` SET `product` = '3',`branch` = '0',`module` = '25',`story` = '0',`title` = '没有订阅单的正常用户登录',`pri` = '3',`type` = 'feature',`stage` = '',`keywords` = '登录',`frequency` = '1',`precondition` = '1.存在注册用户和未审核状态的用户',`version` = '1',`openedBy` = 'tianliwei',`openedDate` = '2017-09-08 09:31:39',`status` = 'normal'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '17',`version` = '1',`desc` = '输入正确的手机号和密码，点击【登录】',`expect` = '登录成功，页面转向到【信息】页'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '17',`version` = '1',`desc` = '查看页面展示',`expect` = '显示文案[您还没有订阅任何内容噢，快去订阅吧！]和【立即订阅】按钮'
  SELECT product FROM `zt_case` WHERE id  = '17'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '17',`actor` = 'tianliwei',`action` = 'opened',`date` = '2017-09-08 09:31:39',`comment` = '',`extra` = '',`product` = ',3,',`project` = '0'
  INSERT INTO `zt_case` SET `product` = '3',`branch` = '0',`module` = '25',`story` = '0',`title` = 'APP强制更新',`pri` = '3',`type` = 'feature',`stage` = '',`keywords` = 'app更新',`frequency` = '1',`precondition` = '1.app有版本更新',`version` = '1',`openedBy` = 'tianliwei',`openedDate` = '2017-09-08 09:31:39',`status` = 'normal'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '18',`version` = '1',`desc` = '成功登录',`expect` = '登录成功后,会有提示app更新【文案】并下载安装，无法点击其他地方，必须下载安装使用新版'
  SELECT product FROM `zt_case` WHERE id  = '18'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '18',`actor` = 'tianliwei',`action` = 'opened',`date` = '2017-09-08 09:31:39',`comment` = '',`extra` = '',`product` = ',3,',`project` = '0'
  INSERT INTO `zt_case` SET `product` = '3',`branch` = '0',`module` = '25',`story` = '0',`title` = '异常注册用户',`pri` = '3',`type` = 'feature',`stage` = '',`keywords` = '注册',`frequency` = '1',`precondition` = '1.点击【我要注册】',`version` = '1',`openedBy` = 'tianliwei',`openedDate` = '2017-09-08 09:31:39',`status` = 'normal'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '19',`version` = '1',`desc` = '手机号输入带有英文手机号;',`expect` = '无法输入英文字符;'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '19',`version` = '1',`desc` = '手机号输入不够和超过11位手机号;',`expect` = '弱提示&quot;手机不是11位&quot;;'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '19',`version` = '1',`desc` = '不输入手机号，点击【获取手机验证码】;',`expect` = '弱提示框&quot;请输入手机号&quot;;'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '19',`version` = '1',`desc` = '输入正确的手机号，获取验证码后，输入错误验证码;',`expect` = '弱提示“短信验证码错误”'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '19',`version` = '1',`desc` = '输入正确的手机号，获取验证码后，修改手机号，再输入正确验证码;',`expect` = '弱提示“请填写正确的电话号码”'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '19',`version` = '1',`desc` = '输入错误的手机号、验证码',`expect` = '弱提示“请填写正确的电话号码”'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '19',`version` = '1',`desc` = '输入已注册过的手机号、正确的验证码和密码；',`expect` = '弱提示“该电话号码已注册”'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '19',`version` = '1',`desc` = '未输入手机，点击【获取手机验证码】；',`expect` = '弱提示&quot;手机不是11位&quot;;'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '19',`version` = '1',`desc` = '设置注册密码，两次不一致；',`expect` = '弱提示&quot;输入密码两次不一样，请重新确认输入&quot;;'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '19',`version` = '1',`desc` = '完善信息，有*备注未填写，点击【完成注册】',`expect` = '弱提示&quot;*号为必填项，请确认填写完毕&quot;;'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '19',`version` = '1',`desc` = '同一个手机两个手机号注册;',`expect` = '弱提示不要在同一个手机注册多个账号;'
  SELECT product FROM `zt_case` WHERE id  = '19'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '19',`actor` = 'tianliwei',`action` = 'opened',`date` = '2017-09-08 09:31:39',`comment` = '',`extra` = '',`product` = ',3,',`project` = '0'
  INSERT INTO `zt_case` SET `product` = '3',`branch` = '0',`module` = '25',`story` = '0',`title` = '正常情况注册用户',`pri` = '3',`type` = 'feature',`stage` = '',`keywords` = '注册',`frequency` = '1',`precondition` = '1.点击【我要注册】',`version` = '1',`openedBy` = 'tianliwei',`openedDate` = '2017-09-08 09:31:39',`status` = 'normal'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '20',`version` = '1',`desc` = '输入正确的手机号和验证码，点击注册用户协议,点击【下一步】',`expect` = '显示注册协议信息,转向到设置密码页；'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '20',`version` = '1',`desc` = '输入相同的两个密码，点击【下一步】',`expect` = '密码要求大于6位,转向到完善信息页；'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '20',`version` = '1',`desc` = '上传或者选择头像',`expect` = '可以上传和选择头像，也可以不设置；'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '20',`version` = '1',`desc` = '必须输入姓名、公司全称、行业、城市；',`expect` = '必选项必须填写，未填写无法完成注册'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '20',`version` = '1',`desc` = '可选选择性别、QQ、邮箱',`expect` = '可选项可以选择性填写；'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '20',`version` = '1',`desc` = '显示手机号，不可修改；',`expect` = '手机号为回显方式，无法修改；'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '20',`version` = '1',`desc` = '点击【完成注册】；',`expect` = '所有信息正确，完成注册转向到【信息】页'
  SELECT product FROM `zt_case` WHERE id  = '20'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '20',`actor` = 'tianliwei',`action` = 'opened',`date` = '2017-09-08 09:31:39',`comment` = '',`extra` = '',`product` = ',3,',`project` = '0'
  INSERT INTO `zt_case` SET `product` = '3',`branch` = '0',`module` = '25',`story` = '0',`title` = '异常操作忘记密码',`pri` = '3',`type` = 'feature',`stage` = '',`keywords` = '忘记密码',`frequency` = '1',`precondition` = '1.点击【忘记密码？】',`version` = '1',`openedBy` = 'tianliwei',`openedDate` = '2017-09-08 09:31:39',`status` = 'normal'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '21',`version` = '1',`desc` = '手机号输入带有英文手机号;',`expect` = '无法输入英文字符;'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '21',`version` = '1',`desc` = '手机号输入不够和超过11位手机号;',`expect` = '弱提示&quot;手机不是11位&quot;;'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '21',`version` = '1',`desc` = '不输入手机号，点击【获取手机验证码】;',`expect` = '弱提示框&quot;请输入手机号&quot;;'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '21',`version` = '1',`desc` = '输入正确的手机号，获取验证码后，输入错误验证码;',`expect` = '弱提示“短信验证码错误”'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '21',`version` = '1',`desc` = '输入正确的手机号，获取验证码后，修改手机号，再输入正确验证码;',`expect` = '弱提示“请填写正确的电话号码”'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '21',`version` = '1',`desc` = '输入错误的手机号、验证码',`expect` = '弱提示“请填写正确的电话号码”'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '21',`version` = '1',`desc` = '未输入手机，点击【获取手机验证码】；',`expect` = '弱提示&quot;手机不是11位&quot;;'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '21',`version` = '1',`desc` = '设置注册密码，两次不一致；',`expect` = '弱提示&quot;输入密码两次不一样，请重新确认输入&quot;;'
  SELECT product FROM `zt_case` WHERE id  = '21'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '21',`actor` = 'tianliwei',`action` = 'opened',`date` = '2017-09-08 09:31:39',`comment` = '',`extra` = '',`product` = ',3,',`project` = '0'
  INSERT INTO `zt_case` SET `product` = '3',`branch` = '0',`module` = '25',`story` = '0',`title` = '忘记密码功能验证',`pri` = '3',`type` = 'feature',`stage` = '',`keywords` = '忘记密码',`frequency` = '1',`precondition` = '1.点击【忘记密码？】',`version` = '1',`openedBy` = 'tianliwei',`openedDate` = '2017-09-08 09:31:39',`status` = 'normal'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '22',`version` = '1',`desc` = '输入正确的手机号和验证码，点击【下一步】',`expect` = '转向到重置密码页；'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '22',`version` = '1',`desc` = '输入相同的两个密码，点击【下一步】',`expect` = '转向到【信息】页'
  SELECT product FROM `zt_case` WHERE id  = '22'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '22',`actor` = 'tianliwei',`action` = 'opened',`date` = '2017-09-08 09:31:39',`comment` = '',`extra` = '',`product` = ',3,',`project` = '0'
  INSERT INTO `zt_case` SET `product` = '3',`branch` = '0',`module` = '25',`story` = '0',`title` = '退出程序再次打开',`pri` = '3',`type` = 'feature',`stage` = '',`keywords` = '系统可靠性',`frequency` = '1',`precondition` = '',`version` = '1',`openedBy` = 'tianliwei',`openedDate` = '2017-09-08 09:31:39',`status` = 'normal'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '23',`version` = '1',`desc` = '登录程序过后,不退出账号关闭程序,下次打开程序',`expect` = '默认上次登录账号进入程序,无法再次输入登录信息'
  SELECT product FROM `zt_case` WHERE id  = '23'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '23',`actor` = 'tianliwei',`action` = 'opened',`date` = '2017-09-08 09:31:39',`comment` = '',`extra` = '',`product` = ',3,',`project` = '0'
  INSERT INTO `zt_case` SET `product` = '3',`branch` = '0',`module` = '25',`story` = '0',`title` = 'APP可选更新',`pri` = '3',`type` = 'feature',`stage` = '',`keywords` = 'app更新',`frequency` = '1',`precondition` = '1.app有版本更新',`version` = '1',`openedBy` = 'tianliwei',`openedDate` = '2017-09-08 09:31:39',`status` = 'normal'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '24',`version` = '1',`desc` = '成功登录;',`expect` = '登录成功后,会有提示app更新【文案】并下载安装，可以点击稍后设置或者其他区域不进行更新'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '24',`version` = '1',`desc` = '手动下载',`expect` = '关于有财,进行手动下载更新'
  SELECT product FROM `zt_case` WHERE id  = '24'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '24',`actor` = 'tianliwei',`action` = 'opened',`date` = '2017-09-08 09:31:39',`comment` = '',`extra` = '',`product` = ',3,',`project` = '0'
  INSERT INTO `zt_case` SET `product` = '3',`branch` = '0',`module` = '25',`story` = '0',`title` = 'APP不进行更新',`pri` = '3',`type` = 'feature',`stage` = '',`keywords` = 'app更新',`frequency` = '1',`precondition` = '1.app没有版本更新',`version` = '1',`openedBy` = 'tianliwei',`openedDate` = '2017-09-08 09:31:39',`status` = 'normal'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '25',`version` = '1',`desc` = '成功登录',`expect` = '登录成功后,没有提示app更新'
  SELECT product FROM `zt_case` WHERE id  = '25'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '25',`actor` = 'tianliwei',`action` = 'opened',`date` = '2017-09-08 09:31:39',`comment` = '',`extra` = '',`product` = ',3,',`project` = '0'
  INSERT INTO `zt_case` SET `product` = '3',`branch` = '0',`module` = '25',`story` = '0',`title` = '禁用状态用户进行登录',`pri` = '3',`type` = 'feature',`stage` = '',`keywords` = '登录',`frequency` = '1',`precondition` = '',`version` = '1',`openedBy` = 'tianliwei',`openedDate` = '2017-09-08 09:31:39',`status` = 'normal'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '26',`version` = '1',`desc` = '输入正确的手机号和密码，点击【登录】',`expect` = '弱提示文案[账号已被禁用]，登录失败'
  SELECT product FROM `zt_case` WHERE id  = '26'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '26',`actor` = 'tianliwei',`action` = 'opened',`date` = '2017-09-08 09:31:39',`comment` = '',`extra` = '',`product` = ',3,',`project` = '0'
  INSERT INTO `zt_case` SET `product` = '3',`branch` = '0',`module` = '25',`story` = '0',`title` = '删除状态用户进行登录',`pri` = '3',`type` = 'feature',`stage` = '',`keywords` = '登录',`frequency` = '1',`precondition` = '',`version` = '1',`openedBy` = 'tianliwei',`openedDate` = '2017-09-08 09:31:39',`status` = 'normal'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '27',`version` = '1',`desc` = '输入正确的手机号和密码，点击【登录】',`expect` = '弱提示文案[账号已删除]，登录失败'
  SELECT product FROM `zt_case` WHERE id  = '27'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '27',`actor` = 'tianliwei',`action` = 'opened',`date` = '2017-09-08 09:31:39',`comment` = '',`extra` = '',`product` = ',3,',`project` = '0'
  INSERT INTO `zt_case` SET `product` = '3',`branch` = '0',`module` = '25',`story` = '0',`title` = '新版本用户更新第一次登录',`pri` = '3',`type` = 'feature',`stage` = '',`keywords` = '登录',`frequency` = '1',`precondition` = '1.新版本更新',`version` = '1',`openedBy` = 'tianliwei',`openedDate` = '2017-09-08 09:31:39',`status` = 'normal'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '28',`version` = '1',`desc` = '输入正确的手机号和密码，点击【登录】',`expect` = '登录成功，页面转向到【信息】页'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '28',`version` = '1',`desc` = '查看页面展示',`expect` = '出现一个新功能的简易使用操作说明'
  SELECT product FROM `zt_case` WHERE id  = '28'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '28',`actor` = 'tianliwei',`action` = 'opened',`date` = '2017-09-08 09:31:39',`comment` = '',`extra` = '',`product` = ',3,',`project` = '0'
  INSERT INTO `zt_case` SET `product` = '3',`branch` = '0',`module` = '25',`story` = '0',`title` = '验证码60秒发送一次',`pri` = '3',`type` = 'feature',`stage` = '',`keywords` = '系统可靠性',`frequency` = '1',`precondition` = '',`version` = '1',`openedBy` = 'tianliwei',`openedDate` = '2017-09-08 09:31:39',`status` = 'normal'
  INSERT INTO `zt_casestep` SET `type` = 'step',`parent` = '0',`case` = '29',`version` = '1',`desc` = '点击一次发送验证码',`expect` = '验证码发送,倒计时60秒后才能继续发送'
  SELECT product FROM `zt_case` WHERE id  = '29'
  INSERT INTO `zt_action` SET `objectType` = 'case',`objectID` = '29',`actor` = 'tianliwei',`action` = 'opened',`date` = '2017-09-08 09:31:39',`comment` = '',`extra` = '',`product` = ',3,',`project` = '0'

20170908 09:31:39: /index.php?m=testcase&f=browse&productID=3
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
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `case` IN ('29','28','27','26','25','24','23','22','21','20','19','18','17','16','15','14','13') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `case` IN ('29','28','27','26','25','24','23','22','21','20','19','18','17','16','15','14','13') GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case` IN ('29','28','27','26','25','24','23','22','21','20','19','18','17','16','15','14','13') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.`case`=t2.`id`  WHERE t1.`case` IN ('29','28','27','26','25','24','23','22','21','20','19','18','17','16','15','14','13') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT id,name,path,short FROM `zt_module` WHERE root  = '3' AND  type IN ('case','story') AND  deleted  = '0'
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

20170908 09:31:59: /index.php?m=testsuite&f=library
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id,name FROM `zt_testsuite` WHERE product  = '0' AND  deleted  = '0' AND  type  = 'library' ORDER BY `id` desc 
  SELECT * FROM `zt_module` WHERE root  = '1' AND  type  = 'caselib' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_case` WHERE lib  = '1' AND  product  = '0' AND  deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_case` WHERE lib  = '1' AND  product  = '0' AND  deleted  = '0' 
  SELECT * FROM `zt_case` WHERE lib  = '1' AND  product  = '0' AND  deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_case` WHERE lib  = '1' AND  product  = '0' AND  deleted  = '0' ORDER BY `id` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_module` WHERE root  = '1' AND  type  = 'caselib' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_module` WHERE root  = '1' AND  type  = 'caselib' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:32:02: /index.php?m=testsuite&f=import&libID=1
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:32:06: /index.php?m=testsuite&f=batchCreateCase&libID=1&moduleID=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id,name FROM `zt_testsuite` WHERE product  = '0' AND  deleted  = '0' AND  type  = 'library' ORDER BY `id` desc 
  SELECT * FROM `zt_module` WHERE root  = '1' AND  type  = 'caselib' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:32:11: /index.php?m=testsuite&f=createLib
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id,name FROM `zt_testsuite` WHERE product  = '0' AND  deleted  = '0' AND  type  = 'library' ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:32:12: /index.php?m=qa&f=index&locate=no&productID=
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

20170908 09:32:12: /index.php?m=block&f=printBlock&id=77&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '77'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'tianliwei' ORDER BY `id` desc  LIMIT 15 

20170908 09:32:13: /index.php?m=block&f=printBlock&id=78&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '78'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'tianliwei' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170908 09:32:13: /index.php?m=block&f=printBlock&id=79&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '79'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.*,t2.name as productName,t3.name as buildName,t4.name as projectName FROM `zt_testtask` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product=t2.id  LEFT JOIN `zt_build` AS t3  ON t1.build=t3.id  LEFT JOIN `zt_project` AS t4  ON t1.project=t4.id  LEFT JOIN `zt_projectproduct` AS t5  ON t1.project=t5.project  WHERE t1.deleted  = '0' AND  t1.product IN ('3') AND  t1.product = t5.product  AND  t1.status  = 'wait' ORDER BY t1.`id` desc  LIMIT 15 

20170908 09:32:14: /index.php?m=testsuite&f=library
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id,name FROM `zt_testsuite` WHERE product  = '0' AND  deleted  = '0' AND  type  = 'library' ORDER BY `id` desc 
  SELECT * FROM `zt_module` WHERE root  = '1' AND  type  = 'caselib' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_case` WHERE lib  = '1' AND  product  = '0' AND  deleted  = '0' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_case` WHERE lib  = '1' AND  product  = '0' AND  deleted  = '0' 
  SELECT * FROM `zt_case` WHERE lib  = '1' AND  product  = '0' AND  deleted  = '0' ORDER BY `id` desc 
  SELECT * FROM `zt_case` WHERE lib  = '1' AND  product  = '0' AND  deleted  = '0' ORDER BY `id` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_module` WHERE root  = '1' AND  type  = 'caselib' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '1' 
  SELECT * FROM `zt_module` WHERE root  = '1' AND  type  = 'caselib' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:32:21: /index.php?m=testsuite&f=exportTemplet&libID=1
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:32:24: /index.php?m=testsuite&f=exportTemplet&libID=1
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_module` WHERE root  = '1' AND  type  = 'caselib' AND  deleted  = '0' ORDER BY `grade` desc,`order` 

20170908 09:37:48: /
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_user` WHERE account  = 'admin' AND  deleted  = '0'

20170908 09:37:48: /index.php?m=user&f=login&referer=Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:37:50: /index.php?m=user&f=login&referer=Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'admin'
  SELECT * FROM `zt_user` WHERE account  = 'admin' AND  deleted  = '0'
  SELECT fails FROM `zt_user` WHERE account  = 'admin'
  UPDATE `zt_user` SET  `fails` = '1', `locked` = '0000-00-00 00:00:00' WHERE account  = 'admin'

20170908 09:37:56: /index.php?m=user&f=login&referer=Lw==
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'admin'
  SELECT * FROM `zt_user` WHERE account  = 'admin' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '125.70.29.117', `last` = '1504834676' WHERE account  = 'admin'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'admin'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'admin'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'admin'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'admin' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '1',`actor` = 'admin',`action` = 'login',`date` = '2017-09-08 09:37:56',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170908 09:37:56: /
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170908 09:37:56: /index.php?m=my&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:37:56: /index.php?m=block&f=printBlock&id=1&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '1'

20170908 09:37:56: /index.php?m=block&f=printBlock&id=2&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '2'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' ORDER BY `order`,`id` desc 
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  lib IN ('6','5')
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-09-08' AND  date  < '2017-09-09' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), (1), '1=1')  AND  IF(objectType != 'doclib', '1=1', objectID IN ('6','5'))   ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('1','22','13','12')
  SELECT id, title AS name FROM `zt_case` WHERE id IN ('13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29')
  SELECT id, name AS name FROM `zt_testsuite` WHERE id IN ('1')
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170908 09:37:56: /index.php?m=block&f=printBlock&id=4&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170908 09:37:56: /index.php?m=block&f=printBlock&id=6&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170908 09:37:56: /index.php?m=block&f=printBlock&id=5&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-08 09:37:56' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170908 09:37:56: /index.php?m=block&f=printBlock&id=7&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170908 09:37:56: /index.php?m=block&f=printBlock&id=8&module=my
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

20170908 09:37:57: /index.php?m=block&f=printBlock&id=9&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'admin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170908 09:37:57: /index.php?m=block&f=printBlock&id=3&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170908 09:38:00: /index.php?m=admin&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:38:01: /index.php?m=mail&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170908 09:38:01: /index.php?m=mail&f=edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:38:06: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:38:14: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('chenyang','')

20170908 09:38:17: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:38:31: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('tianliwei','')

20170908 09:38:33: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:42:16: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170908 09:42:21: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170908 09:42:50: /index.php?m=testcase&f=browse
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
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `case` IN ('29','28','27','26','25','24','23','22','21','20','19','18','17','16','15','14','13') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `case` IN ('29','28','27','26','25','24','23','22','21','20','19','18','17','16','15','14','13') GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case` IN ('29','28','27','26','25','24','23','22','21','20','19','18','17','16','15','14','13') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.`case`=t2.`id`  WHERE t1.`case` IN ('29','28','27','26','25','24','23','22','21','20','19','18','17','16','15','14','13') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','case') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT id,name,path,short FROM `zt_module` WHERE root  = '3' AND  type IN ('case','story') AND  deleted  = '0'
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

20170908 09:42:51: /index.php?m=product&f=ajaxGetDropMenu&t=html&objectID=3&module=testcase&method=browse&extra=
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 

20170908 09:42:52: /index.php?m=branch&f=ajaxGetDropMenu&t=html&objectID=3&module=testcase&method=browse&extra=
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 

20170908 09:42:52: /index.php?m=bug&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
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

20170908 09:43:01: /index.php?m=bug&f=assignTo&bugID=6&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
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
  SELECT * FROM `zt_history` WHERE action IN ('187','197') ORDER BY `id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:43:13: /index.php?m=bug&f=assignTo&bugID=6&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
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
  SELECT t1.*, t2.name AS projectName, t3.title AS storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion, t4.name AS taskName, t5.title AS planName FROM `zt_bug` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  LEFT JOIN `zt_task` AS t4  ON t1.task = t4.id  LEFT JOIN `zt_productplan` AS t5  ON t1.plan = t5.id  WHERE t1.id  = '6'
  SELECT id, title FROM `zt_case` WHERE `fromBug`  = '6'
  SELECT * FROM `zt_file` WHERE objectType  = 'bug' AND  objectID  = '6' AND  extra  != 'editor'
  UPDATE `zt_bug` SET `assignedTo` = 'tianliwei',`mailto` = ',tianliwei',`lastEditedBy` = 'tianliwei',`lastEditedDate` = '2017-09-08 09:43:13',`assignedDate` = '2017-09-08 09:43:13' WHERE id  = '6'
  SELECT product, project FROM `zt_bug` WHERE id  = '6'
  INSERT INTO `zt_action` SET `objectType` = 'bug',`objectID` = '6',`actor` = 'tianliwei',`action` = 'assigned',`date` = '2017-09-08 09:43:13',`comment` = '请处理',`extra` = 'tianliwei',`product` = ',3,',`project` = '3'
  INSERT INTO `zt_history` SET `field` = 'assignedTo',`old` = 'qiuqingqiang',`new` = 'tianliwei',`diff` = '',`action` = '253'
  INSERT INTO `zt_history` SET `field` = 'mailto',`old` = '',`new` = ',tianliwei',`diff` = '',`action` = '253'
  SELECT t1.*, t2.name AS projectName, t3.title AS storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion, t4.name AS taskName, t5.title AS planName FROM `zt_bug` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  LEFT JOIN `zt_task` AS t4  ON t1.task = t4.id  LEFT JOIN `zt_productplan` AS t5  ON t1.plan = t5.id  WHERE t1.id  = '6'
  SELECT id, title FROM `zt_case` WHERE `fromBug`  = '6'
  SELECT * FROM `zt_file` WHERE objectType  = 'bug' AND  objectID  = '6' AND  extra  != 'editor'
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_action` WHERE `id` = '253' 
  SELECT * FROM `zt_history` WHERE action IN ('253') ORDER BY `id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170908 09:43:13: /index.php?m=bug&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
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

20170908 09:43:36: /index.php?m=bug&f=create&productID=3&branch=0&extra=moduleID=0
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
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('3') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('3') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT t2.id, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.product  = '3' AND  t2.status  != 'done' ORDER BY t2.`begin` desc  LIMIT 1 
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','bug') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT t2.id, t2.name, t2.deleted FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.product  = '3' AND  t2.id IN ('3') ORDER BY t1.`project` desc 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT id,account,title,content,public FROM `zt_usertpl` WHERE type  = 'bug' AND ( account  = 'tianliwei' OR public  = '1') ORDER BY `id` 
  SELECT id, listName FROM `zt_usercontact` WHERE account  = 'tianliwei'
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:43:36: /index.php?m=bug&f=ajaxGetModuleOwner&t=html&moduleID=0&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT QD FROM `zt_product` WHERE `id` = '3' 

20170908 09:43:39: /index.php?m=bug&f=ajaxGetModuleOwner&t=html&moduleID=15&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_module` WHERE `id` = '15' 
  SELECT * FROM `zt_module` WHERE id IN ('') AND  deleted  = '0'
  SELECT QD FROM `zt_product` WHERE `id` = '3' 

20170908 09:43:39: /index.php?m=story&f=ajaxGetProductStories&t=html&productID=3&branch=0&moduleID=15
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id,type,parent FROM `zt_module` WHERE id  = '15'
  SELECT * FROM `zt_module` WHERE `id` = '15' 
  SELECT id FROM `zt_module` WHERE path  LIKE ',15,%' AND  deleted  = '0'
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('3') AND  t1.module IN ('15') AND  t1.deleted  = '0' ORDER BY `id` desc 

20170908 09:43:40: /index.php?m=task&f=ajaxGetProjectTasks&t=html&projectID=3&taskID=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.id, t1.name, t2.realname AS finishedByRealName FROM `zt_task` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.finishedBy = t2.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' ORDER BY `finishedBy`,`id` desc 

20170908 09:43:40: /index.php?m=story&f=ajaxGetProjectStories&t=html&projectID=3&productID=3&branch=0&moduleID=0&storyID=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t2.id, t2.title, t2.module, t2.pri, t2.estimate, t3.name AS product FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_product` AS t3  ON t1.product = t3.id  WHERE t1.project  = '3' AND  t2.deleted  = '0' AND  t2.product  = '3'

20170908 09:43:40: /index.php?m=bug&f=ajaxLoadAssignedTo&t=html&projectID=3&selectedUser=tianliwei
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3'

20170908 09:43:41: /index.php?m=build&f=ajaxGetProjectBuilds&t=html&projectID=3&productID=3&varName=openedBuild&build=0&branch=0&index=0&needCreate=true
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.project  = '3' AND  t1.product  = '3' AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 

20170908 09:44:05: /index.php?m=bug&f=create&productID=3&branch=0&extra=moduleID=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted, INSTR(',td,pm,qd,qa,dev,', role) AS roleOrder FROM `zt_user` WHERE deleted  = '0' ORDER BY `roleOrder` DESC,`account` 
  SELECT version FROM `zt_story` WHERE id  = '0'
  SELECT id,title FROM `zt_bug` WHERE deleted  = '0' AND  title IN ('测试bug') AND  openedDate  >= '2017-09-08 09:43:05' AND  product=3 
  INSERT INTO `zt_bug` SET `product` = '3',`branch` = '0',`module` = '15',`project` = '3',`openedBuild` = 'trunk',`assignedTo` = 'tianliwei',`deadline` = '0000-00-00',`type` = 'codeerror',`os` = '',`browser` = '',`color` = '',`title` = '测试bug',`severity` = '3',`pri` = '0',`steps` = '<p>[步骤]</p><p>[结果]</p><p>[期望]</p>',`story` = '0',`task` = '0',`mailto` = ',tianliwei',`keywords` = '',`case` = '0',`caseVersion` = '0',`result` = '0',`testtask` = '0',`openedBy` = 'tianliwei',`openedDate` = '2017-09-08 09:44:05',`assignedDate` = '2017-09-08 09:44:05'
  SELECT product, project FROM `zt_bug` WHERE id  = '7'
  INSERT INTO `zt_action` SET `objectType` = 'bug',`objectID` = '7',`actor` = 'tianliwei',`action` = 'opened',`date` = '2017-09-08 09:44:05',`comment` = '',`extra` = '',`product` = ',3,',`project` = '3'
  SELECT t1.*, t2.name AS projectName, t3.title AS storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion, t4.name AS taskName, t5.title AS planName FROM `zt_bug` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  LEFT JOIN `zt_task` AS t4  ON t1.task = t4.id  LEFT JOIN `zt_productplan` AS t5  ON t1.plan = t5.id  WHERE t1.id  = '7'
  SELECT id, title FROM `zt_case` WHERE `fromBug`  = '7'
  SELECT * FROM `zt_file` WHERE objectType  = 'bug' AND  objectID  = '7' AND  extra  != 'editor'
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_action` WHERE `id` = '254' 
  SELECT * FROM `zt_history` WHERE action IN ('254') ORDER BY `id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170908 09:44:05: /index.php?m=bug&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
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

20170908 09:44:18: /index.php?m=user&f=logout
  SELECT * FROM `zt_config` WHERE owner IN ('system','tianliwei') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '22',`actor` = 'tianliwei',`action` = 'logout',`date` = '2017-09-08 09:44:18',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170908 09:44:18: /index.php?m=user&f=login
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:44:22: /index.php?m=user&f=login
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'admin'
  SELECT * FROM `zt_user` WHERE account  = 'admin' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '125.70.29.127', `last` = '1504835062' WHERE account  = 'admin'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'admin'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'admin'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'admin'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'admin' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '1',`actor` = 'admin',`action` = 'login',`date` = '2017-09-08 09:44:22',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170908 09:44:22: /index.php?m=bug&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
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

20170908 09:44:24: /index.php?m=company&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170908 09:44:24: /index.php?m=company&f=browse
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

20170908 09:44:25: /index.php?m=admin&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:44:26: /index.php?m=mail&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170908 09:44:26: /index.php?m=mail&f=edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:44:29: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:44:33: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('tianliwei','')

20170908 09:44:34: /index.php?m=mail&f=test
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account,  CONCAT(realname, " ", email) AS email FROM `zt_user` WHERE email  != '' AND  deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:44:55: /index.php?m=project&f=index
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

20170908 09:44:55: /index.php?m=block&f=printBlock&id=13&module=project
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '13'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170908 09:44:55: /index.php?m=block&f=printBlock&id=14&module=project
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '14'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170908 09:44:55: /index.php?m=qa&f=index
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

20170908 09:44:56: /index.php?m=block&f=printBlock&id=10&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '10'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170908 09:44:56: /index.php?m=block&f=printBlock&id=11&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '11'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'admin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170908 09:44:56: /index.php?m=block&f=printBlock&id=12&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '12'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.*,t2.name as productName,t3.name as buildName,t4.name as projectName FROM `zt_testtask` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product=t2.id  LEFT JOIN `zt_build` AS t3  ON t1.build=t3.id  LEFT JOIN `zt_project` AS t4  ON t1.project=t4.id  LEFT JOIN `zt_projectproduct` AS t5  ON t1.project=t5.project  WHERE t1.deleted  = '0' AND  t1.product IN ('3') AND  t1.product = t5.product  AND  t1.status  = 'wait' ORDER BY t1.`id` desc  LIMIT 15 

20170908 09:44:58: /index.php?m=bug&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
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

20170908 09:45:04: /index.php?m=bug&f=create&productID=3&branch=0&extra=moduleID=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
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
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.product IN ('3') AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('3') AND  t1.deleted  = '0' ORDER BY `id` desc 
  SELECT t2.id, t2.name FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.product  = '3' AND  t2.status  != 'done' ORDER BY t2.`begin` desc  LIMIT 1 
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3' AND  t2.deleted  = '0'
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT createdVersion FROM `zt_product` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type IN ('story','bug') AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`type` desc,`order` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT t2.id, t2.name, t2.deleted FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.product  = '3' AND  t2.id IN ('3') ORDER BY t1.`project` desc 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT id,account,title,content,public FROM `zt_usertpl` WHERE type  = 'bug' AND ( account  = 'admin' OR public  = '1') ORDER BY `id` 
  SELECT id, listName FROM `zt_usercontact` WHERE account  = 'admin'
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:45:04: /index.php?m=bug&f=ajaxGetModuleOwner&t=html&moduleID=0&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT QD FROM `zt_product` WHERE `id` = '3' 

20170908 09:45:06: /index.php?m=story&f=ajaxGetProjectStories&t=html&projectID=3&productID=3&branch=0&moduleID=0&storyID=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t2.id, t2.title, t2.module, t2.pri, t2.estimate, t3.name AS product FROM `zt_projectstory` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  LEFT JOIN `zt_product` AS t3  ON t1.product = t3.id  WHERE t1.project  = '3' AND  t2.deleted  = '0' AND  t2.product  = '3'

20170908 09:45:06: /index.php?m=build&f=ajaxGetProjectBuilds&t=html&projectID=3&productID=3&varName=openedBuild&build=0&branch=0&index=0&needCreate=true
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.id, t1.name, t1.project, t2.status as projectStatus, t3.id as releaseID, t3.status as releaseStatus, t4.name as branchName FROM `zt_build` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_release` AS t3  ON t1.id = t3.build  LEFT JOIN `zt_branch` AS t4  ON t1.branch = t4.id  WHERE t1.project  = '3' AND  t1.product  = '3' AND  t1.deleted  = '0' ORDER BY t1.`date` desc,t1.`id` desc 

20170908 09:45:06: /index.php?m=bug&f=ajaxLoadAssignedTo&t=html&projectID=3&selectedUser=tianliwei
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.account, t2.realname FROM `zt_team` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.account = t2.account  WHERE t1.project  = '3'

20170908 09:45:06: /index.php?m=task&f=ajaxGetProjectTasks&t=html&projectID=3&taskID=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT t1.id, t1.name, t2.realname AS finishedByRealName FROM `zt_task` AS t1  LEFT JOIN `zt_user` AS t2  ON t1.finishedBy = t2.account  WHERE t1.project  = '3' AND  t1.deleted  = '0' ORDER BY `finishedBy`,`id` desc 

20170908 09:45:13: /index.php?m=bug&f=ajaxGetModuleOwner&t=html&moduleID=15&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_module` WHERE `id` = '15' 
  SELECT * FROM `zt_module` WHERE id IN ('') AND  deleted  = '0'
  SELECT QD FROM `zt_product` WHERE `id` = '3' 

20170908 09:45:13: /index.php?m=story&f=ajaxGetProductStories&t=html&productID=3&branch=0&moduleID=15
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id,type,parent FROM `zt_module` WHERE id  = '15'
  SELECT * FROM `zt_module` WHERE `id` = '15' 
  SELECT id FROM `zt_module` WHERE path  LIKE ',15,%' AND  deleted  = '0'
  SELECT t1.id, t1.title, t1.module, t1.pri, t1.estimate, t2.name AS product FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE 1=1  AND  t1.product IN ('3') AND  t1.module IN ('15') AND  t1.deleted  = '0' ORDER BY `id` desc 

20170908 09:45:27: /
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170908 09:45:27: /index.php?m=my&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:45:27: /index.php?m=block&f=printBlock&id=2&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '2'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' ORDER BY `order`,`id` desc 
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  lib IN ('6','5')
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-09-08' AND  date  < '2017-09-09' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), (1), '1=1')  AND  IF(objectType != 'doclib', '1=1', objectID IN ('6','5'))   ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('1','22','13','12')
  SELECT id, title AS name FROM `zt_bug` WHERE id IN ('7','6')
  SELECT id, title AS name FROM `zt_case` WHERE id IN ('13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29')
  SELECT id, name AS name FROM `zt_testsuite` WHERE id IN ('1')
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170908 09:45:27: /index.php?m=block&f=printBlock&id=1&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '1'

20170908 09:45:27: /index.php?m=block&f=printBlock&id=3&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170908 09:45:27: /index.php?m=block&f=printBlock&id=4&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170908 09:45:27: /index.php?m=block&f=printBlock&id=6&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170908 09:45:27: /index.php?m=block&f=printBlock&id=7&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170908 09:45:27: /index.php?m=block&f=printBlock&id=5&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-08 09:45:27' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170908 09:45:27: /index.php?m=block&f=printBlock&id=9&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'admin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170908 09:45:27: /index.php?m=block&f=printBlock&id=8&module=my
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

20170908 09:45:30: /index.php?m=my&f=managecontacts&listID=0&mode=new&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id, listName FROM `zt_usercontact` WHERE account  = 'admin'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:45:30: /index.php?m=admin&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:45:32: /index.php?m=extension&f=browse
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_extension` WHERE status  = 'installed'
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:45:34: /index.php?m=mail&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170908 09:45:34: /index.php?m=mail&f=edit
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT email FROM `zt_user` WHERE email  != ''
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:45:37: /index.php?m=my&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'admin' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 09:45:37: /index.php?m=block&f=printBlock&id=1&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '1'

20170908 09:45:37: /index.php?m=block&f=printBlock&id=2&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '2'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' ORDER BY `order`,`id` desc 
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  lib IN ('6','5')
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-09-08' AND  date  < '2017-09-09' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), (1), '1=1')  AND  IF(objectType != 'doclib', '1=1', objectID IN ('6','5'))   ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('1','22','13','12')
  SELECT id, title AS name FROM `zt_bug` WHERE id IN ('7','6')
  SELECT id, title AS name FROM `zt_case` WHERE id IN ('13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29')
  SELECT id, name AS name FROM `zt_testsuite` WHERE id IN ('1')
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170908 09:45:37: /index.php?m=block&f=printBlock&id=3&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '3'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170908 09:45:37: /index.php?m=block&f=printBlock&id=6&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '6'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170908 09:45:37: /index.php?m=block&f=printBlock&id=5&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '5'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-08 09:45:37' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170908 09:45:37: /index.php?m=block&f=printBlock&id=7&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '7'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'admin' ORDER BY `id` desc  LIMIT 15 

20170908 09:45:37: /index.php?m=block&f=printBlock&id=8&module=my
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

20170908 09:45:37: /index.php?m=block&f=printBlock&id=4&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '4'
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'admin' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170908 09:45:37: /index.php?m=block&f=printBlock&id=9&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '9'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'admin' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170908 09:45:39: /index.php?m=bug&f=create&productID=3&branch=0&extra=moduleID=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT account, realname, deleted, INSTR(',td,pm,qd,qa,dev,', role) AS roleOrder FROM `zt_user` WHERE deleted  = '0' ORDER BY `roleOrder` DESC,`account` 
  SELECT version FROM `zt_story` WHERE id  = '0'
  SELECT id,title FROM `zt_bug` WHERE deleted  = '0' AND  title IN ('测试bug') AND  openedDate  >= '2017-09-08 09:44:37' AND  product=3 
  INSERT INTO `zt_bug` SET `product` = '3',`branch` = '0',`module` = '15',`project` = '3',`openedBuild` = 'trunk',`assignedTo` = 'tianliwei',`deadline` = '0000-00-00',`type` = 'codeerror',`os` = '',`browser` = '',`color` = '',`title` = '测试bug ',`severity` = '3',`pri` = '0',`steps` = '<p>[步骤]</p><p>[结果]</p><p>[期望]</p>',`story` = '0',`task` = '0',`mailto` = ',chenyang',`keywords` = '',`case` = '0',`caseVersion` = '0',`result` = '0',`testtask` = '0',`openedBy` = 'admin',`openedDate` = '2017-09-08 09:45:37',`assignedDate` = '2017-09-08 09:45:37'
  SELECT product, project FROM `zt_bug` WHERE id  = '8'
  INSERT INTO `zt_action` SET `objectType` = 'bug',`objectID` = '8',`actor` = 'admin',`action` = 'opened',`date` = '2017-09-08 09:45:37',`comment` = '',`extra` = '',`product` = ',3,',`project` = '3'
  SELECT t1.*, t2.name AS projectName, t3.title AS storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion, t4.name AS taskName, t5.title AS planName FROM `zt_bug` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  LEFT JOIN `zt_task` AS t4  ON t1.task = t4.id  LEFT JOIN `zt_productplan` AS t5  ON t1.plan = t5.id  WHERE t1.id  = '8'
  SELECT id, title FROM `zt_case` WHERE `fromBug`  = '8'
  SELECT * FROM `zt_file` WHERE objectType  = 'bug' AND  objectID  = '8' AND  extra  != 'editor'
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_action` WHERE `id` = '257' 
  SELECT * FROM `zt_history` WHERE action IN ('257') ORDER BY `id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT account, email, realname FROM `zt_user` WHERE account IN ('tianliwei','chenyang')

20170908 09:45:39: /index.php?m=bug&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
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

20170908 09:55:38: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170908 09:55:40: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170908 10:05:10: /index.php?m=testcase&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
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
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `case` IN ('29','28','27','26','25','24','23','22','21','20','19','18','17','16','15','14','13') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `case` IN ('29','28','27','26','25','24','23','22','21','20','19','18','17','16','15','14','13') GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case` IN ('29','28','27','26','25','24','23','22','21','20','19','18','17','16','15','14','13') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.`case`=t2.`id`  WHERE t1.`case` IN ('29','28','27','26','25','24','23','22','21','20','19','18','17','16','15','14','13') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`
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
  SELECT * FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'admin'))  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 10:05:11: /index.php?m=testcase&f=view&caseID=29&version=1
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_case` WHERE `id` = '29' 
  SELECT id, title FROM `zt_bug` WHERE `case`  = '29'
  SELECT * FROM `zt_casestep` WHERE `case`  = '29' AND  version  = '1' ORDER BY `id` 
  SELECT * FROM `zt_file` WHERE objectType  = 'testcase' AND  objectID  = '29' AND  extra  != 'editor'
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT `case` AS name, COUNT(*) AS value FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case`  = '29' GROUP BY name ORDER BY `value` DESC 
  SELECT path FROM `zt_module` WHERE id  = '25'
  SELECT * FROM `zt_module` WHERE id IN ('25') AND  deleted  = '0' ORDER BY `grade` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT * FROM `zt_action` WHERE objectType  = 'case' AND  objectID  = '29' ORDER BY `date`,`id` 
  SELECT * FROM `zt_history` WHERE action IN ('251') ORDER BY `id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 10:05:38: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170908 10:15:12: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170908 10:15:39: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170908 10:16:35: /index.php?m=my&f=dynamic
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' ORDER BY `order`,`id` desc 
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  lib IN ('6','5')
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-09-08' AND  date  < '2017-09-09' AND  actor  = 'admin' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), (1), '1=1')  AND  IF(objectType != 'doclib', '1=1', objectID IN ('6','5'))   ORDER BY `date` desc,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_action` WHERE 1  AND  date  > '2017-09-08' AND  date  < '2017-09-09' AND  actor  = 'admin' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), (1), '1=1')  AND  IF(objectType != 'doclib', '1=1', objectID IN ('6','5'))   
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-09-08' AND  date  < '2017-09-09' AND  actor  = 'admin' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), (1), '1=1')  AND  IF(objectType != 'doclib', '1=1', objectID IN ('6','5'))   ORDER BY `date` desc,`id` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, title AS name FROM `zt_bug` WHERE id IN ('8')
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('1')
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 10:16:37: /index.php?m=company&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170908 10:16:37: /index.php?m=company&f=browse
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

20170908 10:16:42: /index.php?m=user&f=delete&userID=29
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_user` WHERE `id`  = '29'
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 10:16:48: /index.php?m=user&f=delete&userID=29
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_user` WHERE `id`  = '29'
  UPDATE `zt_user` SET  `deleted` = '1' WHERE id  = '29'
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '29',`actor` = 'admin',`action` = 'deleted',`date` = '2017-09-08 10:16:48',`comment` = '',`extra` = '1',`product` = ',0,',`project` = '0'

20170908 10:16:48: /index.php?m=company&f=browse
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

20170908 10:16:52: /index.php?m=admin&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 10:16:53: /index.php?m=action&f=trash
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_action` WHERE action  = 'deleted' AND  extra  = '1' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_action` WHERE action  = 'deleted' AND  extra  = '1' 
  SELECT * FROM `zt_action` WHERE action  = 'deleted' AND  extra  = '1' ORDER BY `id` desc  LIMIT 0, 20 
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('29')
  SELECT id, title AS name FROM `zt_case` WHERE id IN ('5','7','8','9','10','11','12','6')
  SELECT id, name AS name FROM `zt_project` WHERE id IN ('2','1')
  SELECT id, name AS name FROM `zt_product` WHERE id IN ('2','1')
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 10:17:08: /index.php?m=user&f=view&account=MailTest
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170908 10:17:09: /index.php?m=user&f=todo&account=MailTest
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_user` WHERE `account`  = 'MailTest'
  SELECT * FROM `zt_todo` WHERE account  = 'MailTest' AND  date  >= '20170908' AND  date  <= '20170908' ORDER BY `date`,`status`,`begin`,`id` asc 
  SELECT COUNT(*) AS recTotal FROM `zt_todo` WHERE account  = 'MailTest' AND  date  >= '20170908' AND  date  <= '20170908' 
  SELECT * FROM `zt_todo` WHERE account  = 'MailTest' AND  date  >= '20170908' AND  date  <= '20170908' ORDER BY `date`,`status`,`begin`,`id` asc 
  SELECT * FROM `zt_todo` WHERE account  = 'MailTest' AND  date  >= '20170908' AND  date  <= '20170908' ORDER BY `date`,`status`,`begin`,`id` asc 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_user` WHERE `account`  = 'MailTest'
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 10:17:16: /index.php?m=report&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170908 10:17:16: /index.php?m=report&f=productSummary
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id, code, name, PO FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed'
  SELECT * FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-08'
  SELECT id,plan,product,status FROM `zt_story` WHERE deleted  = '0'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 10:17:17: /index.php?m=company&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170908 10:17:17: /index.php?m=company&f=browse
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

20170908 10:17:24: /index.php?m=user&f=edit&userID=11&from=company
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_user` WHERE `id`  = '11'
  SELECT t2.* FROM `zt_usergroup` AS t1  LEFT JOIN `zt_group` AS t2  ON t1.group = t2.id  WHERE t1.account  = 'chenyang'
  SELECT * FROM `zt_dept` WHERE `id` = '0' 
  SELECT * FROM `zt_dept` ORDER BY `grade` desc,`order` 
  SELECT id, name FROM `zt_group`
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 10:17:48: /index.php?m=user&f=edit&userID=11&from=company
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_user` WHERE `id`  = '11'

20170908 10:17:54: /index.php?m=user&f=edit&userID=11&from=company
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_user` WHERE `id`  = '11'
  UPDATE `zt_user` SET `realname` = '陈杨',`dept` = '21',`role` = 'td',`join` = '2015-06-15',`gender` = 'm',`account` = 'chenyang',`email` = 'chenyang@chinanuoyi.cn',`commiter` = 'chenyang',`skype` = '',`qq` = '501553705',`yahoo` = '',`gtalk` = '',`wangwang` = '',`mobile` = '',`phone` = '18628187947',`address` = '',`zipcode` = '' WHERE id  = '11'
  DELETE FROM `zt_usergroup` WHERE account  = 'chenyang'
  REPLACE `zt_usergroup` SET `account` = 'chenyang',`group` = '6'

20170908 10:17:54: /index.php?m=company&f=browse
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

20170908 10:18:06: /index.php?m=user&f=logout
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '1',`actor` = 'admin',`action` = 'logout',`date` = '2017-09-08 10:18:06',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170908 10:18:06: /index.php?m=user&f=login
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 10:25:12: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170908 10:28:07: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170908 10:35:13: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170908 10:38:07: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170908 10:40:21: /index.php?m=my
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170908 10:45:13: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170908 10:48:08: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170908 10:54:41: /index.php?m=user&f=login
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 10:55:13: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170908 11:04:42: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170908 11:05:14: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170908 11:07:48: /index.php?m=user&f=login
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 11:07:57: /index.php?m=user&f=login
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'chenyang'
  SELECT * FROM `zt_user` WHERE account  = 'chenyang' AND  deleted  = '0'
  SELECT fails FROM `zt_user` WHERE account  = 'chenyang'
  UPDATE `zt_user` SET  `fails` = '1', `locked` = '0000-00-00 00:00:00' WHERE account  = 'chenyang'

20170908 11:08:02: /index.php?m=user&f=login
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT locked FROM `zt_user` WHERE account  = 'chenyang'
  SELECT * FROM `zt_user` WHERE account  = 'chenyang' AND  deleted  = '0'
  UPDATE `zt_user` SET  visits = visits + 1, `ip` = '125.70.29.117', `last` = '1504840082' WHERE account  = 'chenyang'
  UPDATE `zt_user` SET  `fails` = '0', `locked` = '0000-00-00 00:00:00' WHERE account  = 'chenyang'
  SELECT t1.acl FROM `zt_group` AS t1  LEFT JOIN `zt_usergroup` AS t2  ON t1.id=t2.group  WHERE t2.account  = 'chenyang'
  SELECT module, method FROM `zt_usergroup` AS t1  LEFT JOIN `zt_grouppriv` AS t2  ON t1.group = t2.group  WHERE t1.account  = 'chenyang'
  SELECT `group` FROM `zt_usergroup` WHERE `account` = 'chenyang' 
  INSERT INTO `zt_action` SET `objectType` = 'user',`objectID` = '11',`actor` = 'chenyang',`action` = 'login',`date` = '2017-09-08 11:08:02',`comment` = '',`extra` = '',`product` = ',0,',`project` = '0'

20170908 11:08:02: /index.php?m=index&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170908 11:08:02: /index.php?m=my&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'chenyang' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 11:08:02: /index.php?m=block&f=printBlock&id=17&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '17'

20170908 11:08:02: /index.php?m=block&f=printBlock&id=18&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '18'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' ORDER BY `order`,`id` desc 
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  lib IN ('6','5')
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-09-08' AND  date  < '2017-09-09' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), ((product =',0,' AND project = '0') OR project IN ('3') OR INSTR(',3,', product) > 0), '1=1')  AND  IF(objectType != 'doclib', '1=1', objectID IN ('6','5'))   ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('11','1','29','22','13','12')
  SELECT id, title AS name FROM `zt_bug` WHERE id IN ('8','7','6')
  SELECT id, title AS name FROM `zt_case` WHERE id IN ('13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29')
  SELECT id, name AS name FROM `zt_testsuite` WHERE id IN ('1')
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170908 11:08:03: /index.php?m=block&f=printBlock&id=24&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '24'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'chenyang' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'chenyang' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'chenyang' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'chenyang' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'chenyang' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170908 11:08:03: /index.php?m=block&f=printBlock&id=22&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '22'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'chenyang' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'chenyang' ORDER BY `id` desc  LIMIT 15 

20170908 11:08:03: /index.php?m=block&f=printBlock&id=20&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '20'
  SELECT * FROM `zt_todo` WHERE account  = 'chenyang' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'chenyang' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170908 11:08:03: /index.php?m=block&f=printBlock&id=21&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '21'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-08 11:08:03' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170908 11:08:03: /index.php?m=block&f=printBlock&id=19&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '19'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170908 11:08:03: /index.php?m=block&f=printBlock&id=25&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '25'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'chenyang' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170908 11:08:03: /index.php?m=block&f=printBlock&id=23&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '23'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'chenyang' ORDER BY `id` desc  LIMIT 15 

20170908 11:08:06: /index.php?m=my&f=profile&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_user` WHERE `account`  = 'chenyang'
  SELECT t2.* FROM `zt_usergroup` AS t1  LEFT JOIN `zt_group` AS t2  ON t1.group = t2.id  WHERE t1.account  = 'chenyang'
  SELECT path FROM `zt_dept` WHERE id  = '21'
  SELECT * FROM `zt_dept` WHERE id IN ('18','21') ORDER BY `grade` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 11:08:23: /index.php?m=product&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 

20170908 11:08:23: /index.php?m=product&f=browse
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
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

20170908 11:08:26: /index.php?m=story&f=view&storyID=8
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
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
  SELECT * FROM `zt_story` WHERE id  = '8' OR product IN ('3') AND  status IN ('','draft','active','changed') AND  deleted  = '0'  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 11:08:38: /index.php?m=tree&f=browse&rootID=3&view=story
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE id 
  SELECT * FROM `zt_module` WHERE root  = '0' AND  type  = 'story' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type  = 'story' AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_module` WHERE root  = '3' AND  parent  = '0' AND  type  = 'story' AND  branch  = '0' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_module` WHERE root  = '3' AND  type  = 'story' AND  branch  = '0' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 11:08:40: /index.php?m=product&f=browse
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
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

20170908 11:08:43: /index.php?m=product&f=dynamic&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' ORDER BY `order`,`id` desc 
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  lib IN ('6','5')
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-09-08' AND  date  < '2017-09-09' AND  product  LIKE '%,3,%' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), ((product =',0,' AND project = '0') OR project IN ('3') OR product like'%,3,%' or product='3'), '1=1')  AND  IF(objectType != 'doclib', '1=1', objectID IN ('6','5'))   ORDER BY `date` desc,`id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_action` WHERE 1  AND  date  > '2017-09-08' AND  date  < '2017-09-09' AND  product  LIKE '%,3,%' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), ((product =',0,' AND project = '0') OR project IN ('3') OR product like'%,3,%' or product='3'), '1=1')  AND  IF(objectType != 'doclib', '1=1', objectID IN ('6','5'))   
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-09-08' AND  date  < '2017-09-09' AND  product  LIKE '%,3,%' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), ((product =',0,' AND project = '0') OR project IN ('3') OR product like'%,3,%' or product='3'), '1=1')  AND  IF(objectType != 'doclib', '1=1', objectID IN ('6','5'))   ORDER BY `date` desc,`id` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, title AS name FROM `zt_bug` WHERE id IN ('8','7','6')
  SELECT id, title AS name FROM `zt_case` WHERE id IN ('29','28','27','26','25','24','23','22','21','20','19','18','17','16','15','14','13')
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 11:08:48: /index.php?m=release&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.*, t2.name as productName, t3.id as buildID, t3.name as buildName FROM `zt_release` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  LEFT JOIN `zt_build` AS t3  ON t1.build = t3.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY t1.`date` DESC 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 11:08:56: /index.php?m=product&f=roadmap&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_productplan` WHERE product  = '3' AND  deleted  = '0' ORDER BY `begin` desc 
  SELECT t1.*, t2.name as productName, t3.id as buildID, t3.name as buildName FROM `zt_release` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  LEFT JOIN `zt_build` AS t3  ON t1.build = t3.id  WHERE t1.product  = '3' AND  t1.deleted  = '0' ORDER BY t1.`date` DESC 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 11:09:00: /index.php?m=doc&f=objectLibs&type=product&objectID=3&from=product
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id,name FROM `zt_product` WHERE id  = '3'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' AND  product  = '3' ORDER BY `order`,`id` 
  SELECT DISTINCT product FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project=t2.id  WHERE t1.product  = '3' AND  t2.deleted  = '0'
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 11:09:01: /index.php?m=product&f=project&status=all&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t2.* FROM `zt_projectproduct` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  WHERE t1.product  = '3' AND  t2.deleted  = '0' AND  t2.iscat  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 11:09:02: /index.php?m=project&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
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
  SELECT * FROM `zt_block` WHERE account  = 'chenyang' AND  module  = 'project' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 11:09:02: /index.php?m=block&f=printBlock&id=30&module=project
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '30'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'chenyang' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'chenyang' ORDER BY `id` desc  LIMIT 15 

20170908 11:09:02: /index.php?m=block&f=printBlock&id=29&module=project
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '29'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170908 11:09:04: /index.php?m=qa&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_block` WHERE account  = 'chenyang' AND  module  = 'qa' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 11:09:04: /index.php?m=block&f=printBlock&id=26&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '26'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'chenyang' ORDER BY `id` desc  LIMIT 15 

20170908 11:09:04: /index.php?m=block&f=printBlock&id=27&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '27'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'chenyang' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170908 11:09:04: /index.php?m=block&f=printBlock&id=28&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '28'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.*,t2.name as productName,t3.name as buildName,t4.name as projectName FROM `zt_testtask` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product=t2.id  LEFT JOIN `zt_build` AS t3  ON t1.build=t3.id  LEFT JOIN `zt_project` AS t4  ON t1.project=t4.id  LEFT JOIN `zt_projectproduct` AS t5  ON t1.project=t5.project  WHERE t1.deleted  = '0' AND  t1.product IN ('3') AND  t1.product = t5.product  AND  t1.status  = 'wait' ORDER BY t1.`id` desc  LIMIT 15 

20170908 11:09:05: /index.php?m=doc&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
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

20170908 11:09:06: /index.php?m=report&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170908 11:09:06: /index.php?m=report&f=productSummary
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id, code, name, PO FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed'
  SELECT * FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-08'
  SELECT id,plan,product,status FROM `zt_story` WHERE deleted  = '0'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 11:09:08: /index.php?m=report&f=productsummary
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT id, code, name, PO FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed'
  SELECT * FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-08'
  SELECT id,plan,product,status FROM `zt_story` WHERE deleted  = '0'
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 11:09:11: /index.php?m=doc&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
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

20170908 11:09:13: /index.php?m=doc&f=browse&libID=5
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
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

20170908 11:09:21: /index.php?m=doc&f=browse&libID=6
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_doclib` WHERE `id` = '6' 
  SELECT t1.* FROM `zt_doclib` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project=t2.id  WHERE t1.project  != '0' AND  t1.deleted  = '0' ORDER BY t2.`order` desc,t1.`order`,t1.`id` 
  SELECT * FROM `zt_doclib` WHERE `id` = '6' 
  SELECT id,name FROM `zt_project` WHERE id  = '3'
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

20170908 11:09:23: /index.php?m=doc&f=create&libID=6&moduleID=0
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_doclib` WHERE `id` = '6' 
  SELECT * FROM `zt_doclib` WHERE `id` = '6' 
  SELECT id,name FROM `zt_project` WHERE id  = '3'
  SELECT * FROM `zt_module` WHERE root  = '6' AND  type  = 'doc' AND  deleted  = '0' ORDER BY `grade` desc,`order` 
  SELECT id, name FROM `zt_group`
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 11:09:23: /index.php?m=file&f=ajaxUeditorUpload&uid=59b209e305127&action=config&&noCache=1504840163796
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170908 11:11:31: /index.php?m=my&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'chenyang' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 11:11:32: /index.php?m=block&f=printBlock&id=17&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '17'

20170908 11:11:32: /index.php?m=block&f=printBlock&id=18&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '18'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' ORDER BY `order`,`id` desc 
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  lib IN ('6','5')
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-09-08' AND  date  < '2017-09-09' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), ((product =',0,' AND project = '0') OR project IN ('3') OR INSTR(',3,', product) > 0), '1=1')  AND  IF(objectType != 'doclib', '1=1', objectID IN ('6','5'))   ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('11','1','29','22','13','12')
  SELECT id, title AS name FROM `zt_bug` WHERE id IN ('8','7','6')
  SELECT id, title AS name FROM `zt_case` WHERE id IN ('13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29')
  SELECT id, name AS name FROM `zt_testsuite` WHERE id IN ('1')
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170908 11:11:32: /index.php?m=block&f=printBlock&id=21&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '21'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-08 11:11:32' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170908 11:11:32: /index.php?m=block&f=printBlock&id=19&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '19'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170908 11:11:32: /index.php?m=block&f=printBlock&id=20&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '20'
  SELECT * FROM `zt_todo` WHERE account  = 'chenyang' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'chenyang' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170908 11:11:32: /index.php?m=block&f=printBlock&id=23&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '23'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'chenyang' ORDER BY `id` desc  LIMIT 15 

20170908 11:11:32: /index.php?m=block&f=printBlock&id=24&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '24'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'chenyang' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'chenyang' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'chenyang' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'chenyang' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'chenyang' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170908 11:11:32: /index.php?m=block&f=printBlock&id=22&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '22'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'chenyang' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'chenyang' ORDER BY `id` desc  LIMIT 15 

20170908 11:11:32: /index.php?m=block&f=printBlock&id=25&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '25'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'chenyang' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170908 11:15:14: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170908 11:16:08: /index.php?m=project&f=task&project=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
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

20170908 11:16:14: /index.php?m=qa&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_block` WHERE account  = 'chenyang' AND  module  = 'qa' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 11:16:14: /index.php?m=block&f=printBlock&id=26&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '26'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'chenyang' ORDER BY `id` desc  LIMIT 15 

20170908 11:16:14: /index.php?m=block&f=printBlock&id=27&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '27'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'chenyang' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170908 11:16:15: /index.php?m=block&f=printBlock&id=28&module=qa
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '28'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT t1.*,t2.name as productName,t3.name as buildName,t4.name as projectName FROM `zt_testtask` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product=t2.id  LEFT JOIN `zt_build` AS t3  ON t1.build=t3.id  LEFT JOIN `zt_project` AS t4  ON t1.project=t4.id  LEFT JOIN `zt_projectproduct` AS t5  ON t1.project=t5.project  WHERE t1.deleted  = '0' AND  t1.product IN ('3') AND  t1.product = t5.product  AND  t1.status  = 'wait' ORDER BY t1.`id` desc  LIMIT 15 

20170908 11:16:16: /index.php?m=branch&f=ajaxGetDropMenu&t=html&objectID=3&module=qa&method=index&extra=
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 

20170908 11:16:17: /index.php?m=bug&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
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

20170908 11:16:20: /index.php?m=testcase&f=browse&productID=3
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
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
  SELECT count(*) as count, `case` FROM `zt_bug` WHERE `case` IN ('29','28','27','26','25','24','23','22','21','20','19','18','17','16','15','14','13') AND  deleted  = '0' GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE `case` IN ('29','28','27','26','25','24','23','22','21','20','19','18','17','16','15','14','13') GROUP BY `case`
  SELECT count(*) as count, `case` FROM `zt_testresult` WHERE caseResult  = 'fail' AND  `case` IN ('29','28','27','26','25','24','23','22','21','20','19','18','17','16','15','14','13') GROUP BY `case`
  SELECT count(distinct t1.id) as count, t1.`case` FROM `zt_casestep` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.`case`=t2.`id`  WHERE t1.`case` IN ('29','28','27','26','25','24','23','22','21','20','19','18','17','16','15','14','13') AND  t1.type  != 'group' AND  t1.version=t2.version  GROUP BY t1.`case`
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
  SELECT * FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'chenyang'))  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 11:16:34: /index.php?m=testcase&f=browse&productid=3&branch=0&browseType=needconfirm
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT * FROM `zt_branch` WHERE product  = '3' AND  deleted  = '0' ORDER BY `order` 
  SELECT * FROM `zt_product` WHERE `id` = '3' 
  SELECT t1.*, t2.title AS storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  WHERE t2.status = 'active'  AND  t1.deleted  = '0' AND  t2.version > t1.storyVersion  AND  t1.product  = '3' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  WHERE t2.status = 'active'  AND  t1.deleted  = '0' AND  t2.version > t1.storyVersion  AND  t1.product  = '3' 
  SELECT t1.*, t2.title AS storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  WHERE t2.status = 'active'  AND  t1.deleted  = '0' AND  t2.version > t1.storyVersion  AND  t1.product  = '3' ORDER BY `id` desc 
  SELECT t1.*, t2.title AS storyTitle FROM `zt_case` AS t1  LEFT JOIN `zt_story` AS t2  ON t1.story = t2.id  WHERE t2.status = 'active'  AND  t1.deleted  = '0' AND  t2.version > t1.storyVersion  AND  t1.product  = '3' ORDER BY `id` desc 
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
  SELECT * FROM `zt_testsuite` WHERE product  = '3' AND  deleted  = '0' AND  (`type` = 'public' OR (`type` = 'private' and addedBy = 'chenyang'))  ORDER BY `id` desc 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 11:16:42: /index.php?m=product&f=ajaxGetDropMenu&t=html&objectID=3&module=testcase&method=browse&extra=
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 

20170908 11:16:44: /index.php?m=doc&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
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

20170908 11:16:46: /index.php?m=custom&f=ajaxMenu&module=doc&method=index&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 11:16:46: /index.php?m=custom&f=ajaxGetMenu&t=json&module=doc&method=index&type=all&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170908 11:16:49: /index.php?m=custom&f=ajaxMenu&module=doc&method=index&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 11:16:50: /index.php?m=custom&f=ajaxGetMenu&t=json&module=doc&method=index&type=all&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170908 11:16:53: /index.php?m=custom&f=ajaxMenu&module=doc&method=index&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 11:16:53: /index.php?m=custom&f=ajaxGetMenu&t=json&module=doc&method=index&type=all&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170908 11:16:56: /index.php?m=custom&f=ajaxGetMenu&t=json&module=qa&method=index&type=all&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170908 11:16:57: /index.php?m=custom&f=ajaxGetMenu&t=json&module=project&method=index&type=all&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170908 11:16:58: /index.php?m=custom&f=ajaxGetMenu&t=json&module=product&method=index&type=all&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170908 11:16:58: /index.php?m=custom&f=ajaxGetMenu&t=json&module=project&method=bug&type=all&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170908 11:16:58: /index.php?m=custom&f=ajaxGetMenu&t=json&module=productplan&method=browse&type=all&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170908 11:17:01: /index.php?m=custom&f=ajaxGetMenu&t=json&module=testsuite&method=browse&type=all&onlybody=yes
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170908 11:17:09: /index.php?m=my&f=index
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE account  = 'chenyang' AND  module  = 'my' AND  hidden  = '0' ORDER BY `order` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 11:17:10: /index.php?m=block&f=printBlock&id=17&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '17'

20170908 11:17:10: /index.php?m=block&f=printBlock&id=18&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '18'
  SELECT *,  IF(INSTR(" closed", status) < 2, 0, 1) AS isClosed FROM `zt_product` WHERE deleted  = '0' ORDER BY `isClosed`,`order` desc 
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  deleted  = '0' ORDER BY `isDone`,`status`,`order` desc 
  SELECT * FROM `zt_doclib` WHERE deleted  = '0' ORDER BY `order`,`id` desc 
  SELECT * FROM `zt_doc` WHERE deleted  = '0' AND  lib IN ('6','5')
  SELECT * FROM `zt_action` WHERE 1  AND  date  > '2017-09-08' AND  date  < '2017-09-09' AND  IF((objectType!= 'doc' && objectType!= 'doclib'), ((product =',0,' AND project = '0') OR project IN ('3') OR INSTR(',3,', product) > 0), '1=1')  AND  IF(objectType != 'doclib', '1=1', objectID IN ('6','5'))   ORDER BY `date` desc 
  SELECT commiter, account, realname FROM `zt_user` WHERE commiter  != ''
  SELECT id, account AS name FROM `zt_user` WHERE id IN ('11','1','29','22','13','12')
  SELECT id, title AS name FROM `zt_bug` WHERE id IN ('8','7','6')
  SELECT id, title AS name FROM `zt_case` WHERE id IN ('13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29')
  SELECT id, name AS name FROM `zt_testsuite` WHERE id IN ('1')
  SELECT account, realname, deleted FROM `zt_user` WHERE deleted  = '0' ORDER BY `account` 

20170908 11:17:10: /index.php?m=block&f=printBlock&id=19&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '19'
  SELECT *, IF(INSTR(" done", status) < 2, 0, 1) AS isDone FROM `zt_project` WHERE iscat  = '0' AND  status  != 'done' AND  deleted  = '0' ORDER BY `order` desc 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_project` WHERE id IN ('3') 
  SELECT * FROM `zt_project` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT id, project, estimate, consumed, `left`, status, closedReason FROM `zt_task` WHERE project IN ('3') AND  deleted  = '0'
  SELECT project, date AS name, `left` AS value FROM `zt_burn` WHERE project IN ('3') ORDER BY `date` desc 

20170908 11:17:10: /index.php?m=block&f=printBlock&id=22&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '22'
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'chenyang' ORDER BY `id` desc  LIMIT 15 
  SELECT t1.*, t2.id as projectID, t2.name as projectName, t3.id as storyID, t3.title as storyTitle, t3.status AS storyStatus, t3.version AS latestStoryVersion FROM `zt_task` AS t1  LEFT JOIN `zt_project` AS t2  ON t1.project = t2.id  LEFT JOIN `zt_story` AS t3  ON t1.story = t3.id  WHERE t1.deleted  = '0' AND  t1.`assignedTo`  = 'chenyang' ORDER BY `id` desc  LIMIT 15 

20170908 11:17:10: /index.php?m=block&f=printBlock&id=20&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '20'
  SELECT * FROM `zt_todo` WHERE account  = 'chenyang' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 
  SELECT * FROM `zt_todo` WHERE account  = 'chenyang' AND  date  >= '1970-01-01' AND  date  <= '2109-01-01' AND  status IN ('wait','doing') ORDER BY `date`,`status`,`begin`  LIMIT 20 

20170908 11:17:10: /index.php?m=block&f=printBlock&id=23&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '23'
  SELECT * FROM `zt_bug` WHERE deleted  = '0' AND  `assignedTo`  = 'chenyang' ORDER BY `id` desc  LIMIT 15 

20170908 11:17:10: /index.php?m=block&f=printBlock&id=21&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '21'
  SELECT * FROM `zt_product` WHERE deleted  = '0' AND  status  != 'closed' ORDER BY `order` desc 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_product` WHERE id IN ('3') 
  SELECT * FROM `zt_product` WHERE id IN ('3') ORDER BY `order` desc 
  SELECT product, status, count(status) AS count FROM `zt_story` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product, status
  SELECT product, count(*) AS count FROM `zt_productplan` WHERE deleted  = '0' AND  product IN ('3') AND  end  > '2017-09-08 11:17:10' GROUP BY product
  SELECT product, count(*) AS count FROM `zt_release` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS conut FROM `zt_bug` WHERE deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE status  = 'active' AND  deleted  = '0' AND  product IN ('3') GROUP BY product
  SELECT product,count(*) AS count FROM `zt_bug` WHERE AssignedTo  = '' AND  deleted  = '0' AND  product IN ('3') GROUP BY product

20170908 11:17:10: /index.php?m=block&f=printBlock&id=25&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '25'
  SELECT t1.assignedTo AS assignedTo, t2.* FROM `zt_testrun` AS t1  LEFT JOIN `zt_case` AS t2  ON t1.case = t2.id  LEFT JOIN `zt_testtask` AS t3  ON t1.task = t3.id  WHERE t1.assignedTo  = 'chenyang' AND  t1.status  != 'done' AND  t3.status  != 'done' AND  t3.deleted  = '0' AND  t2.deleted  = '0' ORDER BY `id` desc  LIMIT 15 

20170908 11:17:10: /index.php?m=block&f=printBlock&id=24&module=my
  SELECT * FROM `zt_config` WHERE owner IN ('system','chenyang') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_block` WHERE id  = '24'
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'chenyang' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'chenyang' 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'chenyang' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'chenyang' ORDER BY `id` desc 
  SELECT t1.*, t2.name as productTitle FROM `zt_story` AS t1  LEFT JOIN `zt_product` AS t2  ON t1.product = t2.id  WHERE t1.deleted  = '0' AND  assignedTo  = 'chenyang' ORDER BY `id` desc 
  SELECT id,title FROM `zt_productplan` WHERE product IN ('') AND  deleted  = '0'
  SELECT * FROM `zt_storystage` WHERE branch IN ('0')

20170908 11:25:14: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170908 11:35:14: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170908 11:45:15: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170908 11:55:15: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170908 12:05:15: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170908 12:15:16: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_config` WHERE 1 = 1  AND  owner IN ('system') AND  module IN ('common') AND  section IN ('global') AND  `key` IN ('sn')

20170908 12:25:16: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170908 12:35:16: /index.php?m=misc&f=ping&t=html
  SELECT * FROM `zt_config` WHERE owner IN ('system','admin') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170908 13:53:13: /index.php?m=my&f=index
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170908 13:53:14: /index.php?m=user&f=login&referer=L2luZGV4LnBocD9tPW15JmY9aW5kZXg=
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 

20170908 13:55:31: /index.php?m=my
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 

20170908 18:43:46: /index.php?m=user&f=login&referer=Lw==
  SELECT * FROM `zt_company` ORDER BY `id`  LIMIT 1 
  SELECT * FROM `zt_config` WHERE owner IN ('system','') ORDER BY `id` 
  SELECT * FROM `zt_lang` ORDER BY `lang`,`id` 
  SELECT * FROM `zt_cron` ORDER BY `lastTime` desc  LIMIT 1 


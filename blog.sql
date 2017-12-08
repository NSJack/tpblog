/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-06-11 12:40:36
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `adminuser`
-- ----------------------------
DROP TABLE IF EXISTS `adminuser`;
CREATE TABLE `adminuser` (
  `auid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `auname` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `passwd` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`auid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of adminuser
-- ----------------------------
INSERT INTO `adminuser` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `adminuser` VALUES ('2', 'c', 'a9f7e97965d6cf799a529102a973b8b9');
INSERT INTO `adminuser` VALUES ('3', 'a', '8a8bb7cd343aa2ad99b7d762030857a2');
INSERT INTO `adminuser` VALUES ('4', 'b', 'edbab45572c72a5d9440b40bcc0500c0');

-- ----------------------------
-- Table structure for `blog`
-- ----------------------------
DROP TABLE IF EXISTS `blog`;
CREATE TABLE `blog` (
  `bid` int(150) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(150) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `author` varchar(150) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `content` varchar(20000) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `intime` int(50) unsigned NOT NULL DEFAULT '0',
  `uptime` int(50) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of blog
-- ----------------------------
INSERT INTO `blog` VALUES ('2', '123aaa', 'admin', '<p>qqqq</p>', '1493448622', '1493620198');
INSERT INTO `blog` VALUES ('3', '闭关三个月', '逆凡', '<p>闭关三个月，学习、沉淀、思考、总结</p>', '1493621055', '1493621055');
INSERT INTO `blog` VALUES ('4', '今天', '逆凡', '<p>今天终于修好了数据库，历经三天，最后两天基本没合过眼，现在总结一下：</p><p style=\"margin-left: 40px;\">1.不要着急下手，先阅读错误信息</p><p style=\"margin-left: 40px;\">2.找到对应点，看逻辑是否正确</p><p style=\"margin-left: 40px;\">3.再检查字段和语法是否有疏漏</p>', '1493646851', '1493646851');
INSERT INTO `blog` VALUES ('5', '通往梦想的那一分钟', '逆凡', '<p style=\"margin-left: 40px;\">我是一名大二的学生，今天我想将我的这段时间的一些感悟分享给大家。在踏进大学校门的那一天，我的感觉和很多的学子一样，怀着新鲜的眼光看着眼前社会人士们羡慕的最高学府。我和他们一样，梦想着未来会飞黄腾达，于是在这种新鲜感中都是那么的朝气蓬勃、意气风发。我们感慨着12年的苦学时光是多么的努力，庆幸着自己最终来到了这里，每个人都显得那么珍惜这份来之不易。图书馆、操场、自习室、会议厅、社会实践，这些地方总是少不了他们的身影。然而可惜的是好景不长，或许慢慢放松的生活<span style=\"font-size: 16px;\">节奏</span>会令人的斗志日渐消散，就这样，不知不觉，我和大家都一起迷失在了舒适安逸的“大学”生活里，每天按部就班的上着课表上那参差不齐的几节课，有空就充当着廉价劳动力流转在兼职的各个社会角落，这样的生活让我感觉有事可做，一度的以为自己是走在正确的路上，努力着，奋斗着，方向也渐渐的偏远着。就这样我们在自我感觉良好的生活里苟且的活着，直到我发现我打零工赚来的钱已不能满足我的时候，我开始想这样早出晚归的生活是否是对的，于是在理性的这场较量中，我选择了辞掉所有的工作，回归属于我的地方。在没有事情的这几天时间里，我开始了又一轮的独立思考。注意，是独立思考！！！神情恍惚的我呆呆的望着窗外的那棵树在想，如果我是它，我能长到这般高大吗？答案是不知道。或许是运气使然，也或许是自己的表现赢得了老师的认可，L老师邀请我成为她团队的一员和她一起用PHP开发一个项目，然而那时的我甚至连PHP是什么都不知道，说句实话，我是有点心虚的。但内心又强烈的渴望可以去尝试，这时候正在纠结的我却听到老师说大学只有你去多折腾一下你才会知道你的方向，于是我本着那就去试一下，哪怕是比别人多付出一些也好，这时已经来到第十八周了，我们团队的领导者知道我们这批都是小白后，就定下了先学习再来做的方案。于是，连带着这个寒假，我都是在这种学习的生活中度过的（为此老爸还特意为我拉了网），就这样一个小白开始向程序员的转变之路开始了。但谁也没想到，这种生活的开始对我来说竟然令我的生活和眼界发生了天翻地覆的变化。我终于明白了老师一直对我们填鸭式灌输的“要过有意义的生活”是什么意思了，我感觉到了前所未有的清醒，原来梦想其实一直都在我们身边，只不过它在前一分钟，而我们在后一分钟。但这一分钟对有些人来说或许仅仅是“一分钟”，而对有些人来说就是两个世界。于是在发现这“一分钟”开始的我，开始疯狂的追逐这一分钟。原来自己很满意的，没有时间做其他事情的生活现在被我生生的挤出了八小时的时间。当然，这是在保证正常休息和正常上课的前提下，利用所有能挤出来的时间来学习。两个月后，当我再一次走在学校的科创路上，看着来来往往的学子，男生们口中的游戏，女生们口中的衣服和口红，再也不会出现在我的生活中了。现在我也成为一名菜鸟程序员，但庆幸的是我找到那一分钟，并且将它紧紧的攥在了我的手心。或许，在未来的某一天，这把钥匙就会打开梦想的那扇大门。</p>', '1494068126', '1494068242');
INSERT INTO `blog` VALUES ('6', '南柯一梦', '逆凡', '<p>因为我是一个穷人家的孩子，所以我生活在社会的最底层。因为我是一个穷人家的孩子，所以我比其他孩子更懂得什么是奋斗，什么是坚强，什么是努力，什么是梦想，什么是永不言败，什么是坚持自我。二十年风风雨雨，二十载雨露春秋，或许过程并非称心如意，但每一步都是完美。我曾向往富裕与地位，金钱与权力，但人生不如意之事十之八九，恰好这些就在其内。但时间是公平的，每个人在相同的时间里创造的价值都由他们自己决定，只有把握住时间去创造更多的价值，才不枉人生一世。前半生我浑浑噩噩，被迫或本能的走在路上，但后半世我要将自己的命运牢牢地把握在自己的手里，我要在这条路上超越一切，包括超越自己。奔跑的脚步永不停歇，我们一直在路上！</p>', '1494672115', '1494672115');
INSERT INTO `blog` VALUES ('7', '时代的愚昧', '逆凡', '<p>大学生<span style=\"font-size: 16px;\">是属于这个国家的青年一代，</span>是中国青年的顶梁柱，是万千学子中的佼佼者，是这个时代的希望。在这个人群中，愚昧中的我也曾像他们一样混天度日，了了无为；也曾像他们一样喜欢谈论梦想与希望，但也仅仅是我们口中的谈资，我们口口声声说着自己是大学生，说自己是这个国家未来的希望，然而令人悲哀的是这种名词也只是我们茶余饭后的<span style=\"font-size: 16px;\">话题，我们从井底望着天空，以为天地就那么大，可笑的是我们还以为自己是最棒的，每天的麻醉自己。醒醒吧，青年们！国家需要你们，人民需要你们，你们的根在这里，你们的家在这里，而你的心，却在哪里！愚昧已经充斥了整个时代，醒醒吧！青年们，世界才是我们的舞台，中国的脊梁还等着我们去撑起！我们的背后有着万千国人的期盼，他们希望我们能够从中崛起，而不是在无为中沉沦。醒醒吧，青年们，国家的希望会在我们的身上绽放光芒，但我们是否能做那最亮的一轮。醒醒吧，青年们，梦想都是在脚下才会有希望，脚步不再蹉跎，才能绽放光芒！世界很大，有万千繁华，世界很小，只能记住为数不多的几人。我希望我们能为中华之崛起而奋斗，为梦想而奋斗！</span></p>', '1494950596', '1494950596');

-- ----------------------------
-- Table structure for `settings`
-- ----------------------------
DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
  `sid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `k` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `v` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `intro` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `kname` varchar(150) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of settings
-- ----------------------------
INSERT INTO `settings` VALUES ('1', 'blog_pages', '5', '每页显示的日志数', '后台每页显示的日志数');
INSERT INTO `settings` VALUES ('2', 'web_name', '我的博客，学习用的。', '设置网站名称', '网站名称');
INSERT INTO `settings` VALUES ('3', 'test', '', '无意义的，留着以后用', 'test');
INSERT INTO `settings` VALUES ('5', 'web_intro', '欢迎光临我的博客系统，这是我学习所做', '。。', '随便写一句话放在页头');

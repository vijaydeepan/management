

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(255) NOT NULL,
  `brand_active` int(11) NOT NULL DEFAULT '0',
  `brand_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO brands VALUES("1","Gap","1","2");





CREATE TABLE `categories` (
  `categories_id` int(11) NOT NULL AUTO_INCREMENT,
  `categories_name` varchar(255) NOT NULL,
  `categories_active` int(11) NOT NULL DEFAULT '0',
  `categories_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`categories_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO categories VALUES("10","bullet","1","1");





CREATE TABLE `collection` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `balance` int(11) NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `company` (
  `company` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO company VALUES("AVE ICE CREAM","perumalpuram","645346542");
INSERT INTO company VALUES("AVE ICE CREAM","perumalpuram","645346542");
INSERT INTO company VALUES("AVE ICE CREAM","perumalpuram","645346542");
INSERT INTO company VALUES("AVE ICE CREAM","perumalpuram","645346542");
INSERT INTO company VALUES("AVE ICE CREAM","perumalpuram","645346542");
INSERT INTO company VALUES("AVE ICE CREAM","perumalpuram","645346542");
INSERT INTO company VALUES("AVE ICE CREAM","perumalpuram","645346542");
INSERT INTO company VALUES("AVE ICE CREAM","perumalpuram","645346542");





CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(100) NOT NULL,
  `gstno` int(255) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `due` int(255) NOT NULL,
  `note` varchar(500) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;






CREATE TABLE `customerduepay` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_date` date NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `due` int(255) NOT NULL,
  `payamount` int(255) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO customerduepay VALUES("11","2018-03-13","deeeep","1784","500");
INSERT INTO customerduepay VALUES("12","2018-04-05","aaa","0","44");
INSERT INTO customerduepay VALUES("13","2018-04-06","deeeep","1367","367");
INSERT INTO customerduepay VALUES("14","2018-04-06","deeeep","1000","500");





CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `color` varchar(7) DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

INSERT INTO events VALUES("1","All Day Event","#40E0D0","2015-12-31 00:00:00","2015-12-31 00:00:00");
INSERT INTO events VALUES("19","bdy","#FF0000","2018-03-07 00:00:00","2018-03-08 00:00:00");
INSERT INTO events VALUES("20","tbht","#40E0D0","2018-03-05 00:00:00","2018-03-06 00:00:00");





CREATE TABLE `order_item` (
  `order_item_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL DEFAULT '0',
  `product_id` int(11) NOT NULL DEFAULT '0',
  `quantity` double NOT NULL,
  `rate` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `order_item_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`order_item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=442 DEFAULT CHARSET=latin1;

INSERT INTO order_item VALUES("336","166","20","0","45","450.00","1");
INSERT INTO order_item VALUES("337","167","22","0","33","330.00","1");
INSERT INTO order_item VALUES("338","168","24","0","6","6.00","1");
INSERT INTO order_item VALUES("339","169","26","0","80","80.00","1");
INSERT INTO order_item VALUES("340","170","24","0","6","6.00","1");
INSERT INTO order_item VALUES("341","171","24","0","6","6.00","1");
INSERT INTO order_item VALUES("342","172","24","0","6","6.00","1");
INSERT INTO order_item VALUES("343","173","24","0","6","6.00","1");
INSERT INTO order_item VALUES("344","174","24","0","6","6.00","1");
INSERT INTO order_item VALUES("345","175","30","0","45","45.00","1");
INSERT INTO order_item VALUES("346","176","23","0","55","55.00","1");
INSERT INTO order_item VALUES("347","177","22","0","33","3300.00","1");
INSERT INTO order_item VALUES("348","178","33","0","45","90.00","1");
INSERT INTO order_item VALUES("349","179","23","0","55","770.00","1");
INSERT INTO order_item VALUES("350","180","22","1","33","33.00","1");
INSERT INTO order_item VALUES("351","181","34","25","150","3750.00","1");
INSERT INTO order_item VALUES("352","0","34","1","150","150.00","1");
INSERT INTO order_item VALUES("353","182","34","1","150","150.00","1");
INSERT INTO order_item VALUES("354","183","34","1","150","150.00","1");
INSERT INTO order_item VALUES("355","184","34","1","150","150.00","1");
INSERT INTO order_item VALUES("356","185","34","1","150","150.00","1");
INSERT INTO order_item VALUES("357","186","34","1","150","150.00","1");
INSERT INTO order_item VALUES("358","0","34","14","150","2100.00","1");
INSERT INTO order_item VALUES("359","0","34","14","150","2100.00","1");
INSERT INTO order_item VALUES("360","0","34","14","150","2100.00","1");
INSERT INTO order_item VALUES("361","0","34","14","150","2100.00","1");
INSERT INTO order_item VALUES("362","0","34","14","150","2100.00","1");
INSERT INTO order_item VALUES("363","0","34","14","150","2100.00","1");
INSERT INTO order_item VALUES("364","0","34","14","150","2100.00","1");
INSERT INTO order_item VALUES("366","188","34","1","150","150.00","1");
INSERT INTO order_item VALUES("367","188","34","2","150","300.00","1");
INSERT INTO order_item VALUES("368","189","34","1.5","150","225.00","1");
INSERT INTO order_item VALUES("369","190","34","2.5","150","375.00","1");
INSERT INTO order_item VALUES("370","191","34","1.5","150","225.00","1");
INSERT INTO order_item VALUES("371","192","34","0.5","150","75.00","1");
INSERT INTO order_item VALUES("372","193","34","13","150","1950.00","1");
INSERT INTO order_item VALUES("373","194","35","14","13","182.00","1");
INSERT INTO order_item VALUES("374","195","34","14","150","2100.00","1");
INSERT INTO order_item VALUES("375","196","37","50","87","4350.00","1");
INSERT INTO order_item VALUES("376","197","37","1","87","87.00","1");
INSERT INTO order_item VALUES("377","198","37","100","87","8700.00","1");
INSERT INTO order_item VALUES("378","0","37","0","","","1");
INSERT INTO order_item VALUES("379","0","38","0","","","1");
INSERT INTO order_item VALUES("380","199","37","1","87","87.00","1");
INSERT INTO order_item VALUES("381","199","37","1","87","87.00","1");
INSERT INTO order_item VALUES("382","199","39","1","34","34.00","1");
INSERT INTO order_item VALUES("383","200","37","1","87","87.00","1");
INSERT INTO order_item VALUES("384","201","37","1","87","87.00","1");
INSERT INTO order_item VALUES("385","202","37","1","87","87.00","1");
INSERT INTO order_item VALUES("386","203","37","1","87","87.00","1");
INSERT INTO order_item VALUES("387","204","37","1","87","87.00","1");
INSERT INTO order_item VALUES("388","205","37","1","87","87.00","1");
INSERT INTO order_item VALUES("389","206","40","1","34","34.00","1");
INSERT INTO order_item VALUES("390","206","39","1","34","34.00","1");
INSERT INTO order_item VALUES("391","207","41","1","45","45.00","1");
INSERT INTO order_item VALUES("392","207","40","1","34","34.00","1");
INSERT INTO order_item VALUES("393","207","37","2","87","174.00","1");
INSERT INTO order_item VALUES("394","208","42","1","33","33.00","1");
INSERT INTO order_item VALUES("395","208","41","1","45","45.00","1");
INSERT INTO order_item VALUES("396","0","47","1","100","100.00","1");
INSERT INTO order_item VALUES("397","0","47","1","100","100.00","1");
INSERT INTO order_item VALUES("398","0","47","1","100","100.00","1");
INSERT INTO order_item VALUES("399","209","47","1","100","100.00","1");
INSERT INTO order_item VALUES("400","209","46","1","450","450.00","1");
INSERT INTO order_item VALUES("401","210","48","1","1780","1780.00","1");
INSERT INTO order_item VALUES("402","0","40","1","34","34.00","1");
INSERT INTO order_item VALUES("403","0","40","1","34","34.00","1");
INSERT INTO order_item VALUES("404","0","40","1","34","34.00","1");
INSERT INTO order_item VALUES("405","0","40","1","34","34.00","1");
INSERT INTO order_item VALUES("406","0","40","1","34","34.00","1");
INSERT INTO order_item VALUES("407","0","40","1","34","34.00","1");
INSERT INTO order_item VALUES("408","0","40","1","34","34.00","1");
INSERT INTO order_item VALUES("409","0","41","1","45","45.00","1");
INSERT INTO order_item VALUES("410","211","41","1","45","45.00","1");
INSERT INTO order_item VALUES("411","212","50","1","234","234.00","1");
INSERT INTO order_item VALUES("412","0","51","1","","33.00","1");
INSERT INTO order_item VALUES("413","0","56","1","","22.00","1");
INSERT INTO order_item VALUES("414","213","56","1","","22.00","1");
INSERT INTO order_item VALUES("415","0","57","1","","22.00","1");
INSERT INTO order_item VALUES("416","0","57","1","","22.00","1");
INSERT INTO order_item VALUES("417","0","57","1","","22.00","1");
INSERT INTO order_item VALUES("418","214","57","1","","22.00","1");
INSERT INTO order_item VALUES("419","0","55","33","","","1");
INSERT INTO order_item VALUES("420","0","51","0","","","1");
INSERT INTO order_item VALUES("421","0","55","33","","","1");
INSERT INTO order_item VALUES("422","0","51","0","","","1");
INSERT INTO order_item VALUES("423","0","53","1","","2.00","1");
INSERT INTO order_item VALUES("424","0","53","1","","22.00","1");
INSERT INTO order_item VALUES("425","0","53","1","","22.00","1");
INSERT INTO order_item VALUES("426","0","53","1","","22.00","1");
INSERT INTO order_item VALUES("427","0","53","1","","22.00","1");
INSERT INTO order_item VALUES("428","0","57","1","","10.00","1");
INSERT INTO order_item VALUES("429","216","57","1","","10.00","1");
INSERT INTO order_item VALUES("430","0","57","1","","10.00","1");
INSERT INTO order_item VALUES("431","0","57","1","","22.00","1");
INSERT INTO order_item VALUES("432","217","57","2","","66.00","1");
INSERT INTO order_item VALUES("433","218","56","1","","22.00","1");
INSERT INTO order_item VALUES("434","219","51","1","","22.00","1");
INSERT INTO order_item VALUES("435","219","42","1","","2.00","1");
INSERT INTO order_item VALUES("436","219","41","1","","22.00","1");
INSERT INTO order_item VALUES("437","220","54","1","","","1");
INSERT INTO order_item VALUES("438","220","55","1","","","1");
INSERT INTO order_item VALUES("439","221","54","1","","22.00","1");
INSERT INTO order_item VALUES("440","221","54","2","","64.00","1");
INSERT INTO order_item VALUES("441","222","51","1","","33.00","1");





CREATE TABLE `order_item2` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL DEFAULT '0',
  `product_id` int(11) NOT NULL DEFAULT '0',
  `quantity` varchar(255) NOT NULL,
  `box` int(255) NOT NULL,
  `tquantity` int(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `order_item_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO order_item2 VALUES("0","131","34","20","0","0","35","700.00","1");
INSERT INTO order_item2 VALUES("0","132","34","10","0","0","35","350.00","1");
INSERT INTO order_item2 VALUES("0","133","34","1","0","0","35","35.00","1");
INSERT INTO order_item2 VALUES("0","134","34","33","0","0","35","1155.00","1");
INSERT INTO order_item2 VALUES("0","135","35","1","0","0","33","759.00","1");
INSERT INTO order_item2 VALUES("0","136","35","1","23","23","33","759.00","1");
INSERT INTO order_item2 VALUES("0","137","35","1","23","23","33","759.00","1");
INSERT INTO order_item2 VALUES("0","138","35","1","23","23","33","759.00","1");
INSERT INTO order_item2 VALUES("0","139","35","1","23","23","33","759.00","1");
INSERT INTO order_item2 VALUES("0","139","34","1","1","0","35","0.00","1");
INSERT INTO order_item2 VALUES("0","139","35","1","23","23","33","759.00","1");
INSERT INTO order_item2 VALUES("0","140","36","8","12","96","87","8352.00","1");
INSERT INTO order_item2 VALUES("0","141","35","1","23","23","33","759.00","1");
INSERT INTO order_item2 VALUES("0","142","36","1","12","12","87","1044.00","1");
INSERT INTO order_item2 VALUES("0","143","36","1","12","12","87","1044.00","1");
INSERT INTO order_item2 VALUES("0","144","35","1","23","23","33","759.00","1");
INSERT INTO order_item2 VALUES("0","145","37","5","7","35","67","2345.00","1");
INSERT INTO order_item2 VALUES("0","131","34","20","0","0","35","700.00","1");
INSERT INTO order_item2 VALUES("0","132","34","10","0","0","35","350.00","1");
INSERT INTO order_item2 VALUES("0","133","34","1","0","0","35","35.00","1");
INSERT INTO order_item2 VALUES("0","134","34","33","0","0","35","1155.00","1");
INSERT INTO order_item2 VALUES("0","135","35","1","0","0","33","759.00","1");
INSERT INTO order_item2 VALUES("0","136","35","1","23","23","33","759.00","1");
INSERT INTO order_item2 VALUES("0","137","35","1","23","23","33","759.00","1");
INSERT INTO order_item2 VALUES("0","138","35","1","23","23","33","759.00","1");
INSERT INTO order_item2 VALUES("0","139","35","1","23","23","33","759.00","1");
INSERT INTO order_item2 VALUES("0","139","34","1","1","0","35","0.00","1");
INSERT INTO order_item2 VALUES("0","139","35","1","23","23","33","759.00","1");
INSERT INTO order_item2 VALUES("0","140","36","8","12","96","87","8352.00","1");
INSERT INTO order_item2 VALUES("0","141","35","1","23","23","33","759.00","1");
INSERT INTO order_item2 VALUES("0","142","36","1","12","12","87","1044.00","1");
INSERT INTO order_item2 VALUES("0","143","36","1","12","12","87","1044.00","1");
INSERT INTO order_item2 VALUES("0","144","35","1","23","23","33","759.00","1");
INSERT INTO order_item2 VALUES("0","145","37","5","7","35","67","2345.00","1");





CREATE TABLE `order_item6` (
  `order_item_id` int(255) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL DEFAULT '0',
  `product_id` int(11) NOT NULL DEFAULT '0',
  `quantity` double NOT NULL,
  `rate` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `order_item_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`order_item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=128 DEFAULT CHARSET=latin1;

INSERT INTO order_item6 VALUES("1","112","51","1","233","233.00","1");
INSERT INTO order_item6 VALUES("2","112","51","1","233","233.00","1");
INSERT INTO order_item6 VALUES("3","113","51","1","233","233.00","1");
INSERT INTO order_item6 VALUES("4","113","51","1","233","233.00","1");
INSERT INTO order_item6 VALUES("5","114","47","1","100","100.00","1");
INSERT INTO order_item6 VALUES("6","114","46","1","450","450.00","1");
INSERT INTO order_item6 VALUES("7","115","51","1","233","233.00","1");
INSERT INTO order_item6 VALUES("8","115","41","1","45","45.00","1");
INSERT INTO order_item6 VALUES("9","115","53","1","44","44.00","1");
INSERT INTO order_item6 VALUES("10","116","51","1","233","233.00","1");
INSERT INTO order_item6 VALUES("11","116","41","1","45","45.00","1");
INSERT INTO order_item6 VALUES("12","116","46","1","450","450.00","1");
INSERT INTO order_item6 VALUES("13","116","41","1","45","45.00","1");
INSERT INTO order_item6 VALUES("14","116","42","1","33","33.00","1");
INSERT INTO order_item6 VALUES("15","117","51","1","233","233.00","1");
INSERT INTO order_item6 VALUES("16","117","41","1","45","45.00","1");
INSERT INTO order_item6 VALUES("17","117","46","1","450","450.00","1");
INSERT INTO order_item6 VALUES("18","117","41","1","45","45.00","1");
INSERT INTO order_item6 VALUES("19","117","42","1","33","33.00","1");
INSERT INTO order_item6 VALUES("20","118","51","1","233","233.00","1");
INSERT INTO order_item6 VALUES("21","118","41","1","45","45.00","1");
INSERT INTO order_item6 VALUES("22","118","46","1","450","450.00","1");
INSERT INTO order_item6 VALUES("23","118","41","1","45","45.00","1");
INSERT INTO order_item6 VALUES("24","118","42","1","33","33.00","1");
INSERT INTO order_item6 VALUES("25","119","47","1","100","100.00","1");
INSERT INTO order_item6 VALUES("26","119","51","1","233","233.00","1");
INSERT INTO order_item6 VALUES("27","119","48","1","1780","1780.00","1");
INSERT INTO order_item6 VALUES("28","120","46","1","450","450.00","1");
INSERT INTO order_item6 VALUES("29","120","42","1","33","33.00","1");
INSERT INTO order_item6 VALUES("30","120","50","1","234","234.00","1");
INSERT INTO order_item6 VALUES("31","120","51","1","233","233.00","1");
INSERT INTO order_item6 VALUES("32","121","47","1","100","100.00","1");
INSERT INTO order_item6 VALUES("33","121","50","1","234","234.00","1");
INSERT INTO order_item6 VALUES("34","121","51","1","233","233.00","1");
INSERT INTO order_item6 VALUES("35","121","48","1","1780","1780.00","1");
INSERT INTO order_item6 VALUES("36","122","48","1","1780","1780.00","1");
INSERT INTO order_item6 VALUES("37","122","47","1","100","100.00","1");
INSERT INTO order_item6 VALUES("38","122","47","1","100","100.00","1");
INSERT INTO order_item6 VALUES("39","122","50","1","234","234.00","1");
INSERT INTO order_item6 VALUES("40","123","50","1","234","234.00","1");
INSERT INTO order_item6 VALUES("41","123","42","1","33","33.00","1");
INSERT INTO order_item6 VALUES("42","123","48","1","1780","1780.00","1");
INSERT INTO order_item6 VALUES("43","124","47","1","100","100.00","1");
INSERT INTO order_item6 VALUES("44","124","50","1","234","234.00","1");
INSERT INTO order_item6 VALUES("45","124","41","1","45","45.00","1");
INSERT INTO order_item6 VALUES("46","125","50","1","234","234.00","1");
INSERT INTO order_item6 VALUES("47","125","41","1","45","45.00","1");
INSERT INTO order_item6 VALUES("48","125","46","1","450","450.00","1");
INSERT INTO order_item6 VALUES("49","126","50","1","234","234.00","1");
INSERT INTO order_item6 VALUES("50","127","50","1","234","234.00","1");
INSERT INTO order_item6 VALUES("51","127","40","1","34","34.00","1");
INSERT INTO order_item6 VALUES("52","127","40","1","34","34.00","1");
INSERT INTO order_item6 VALUES("53","128","51","1","233","233.00","1");
INSERT INTO order_item6 VALUES("54","128","41","1","45","45.00","1");
INSERT INTO order_item6 VALUES("55","128","41","1","45","45.00","1");
INSERT INTO order_item6 VALUES("56","129","51","1","233","233.00","1");
INSERT INTO order_item6 VALUES("57","129","41","1","45","45.00","1");
INSERT INTO order_item6 VALUES("58","129","41","1","45","45.00","1");
INSERT INTO order_item6 VALUES("59","130","53","1","44","44.00","1");
INSERT INTO order_item6 VALUES("60","130","48","1","1780","1780.00","1");
INSERT INTO order_item6 VALUES("61","130","48","1","1780","1780.00","1");
INSERT INTO order_item6 VALUES("62","131","50","1","234","234.00","1");
INSERT INTO order_item6 VALUES("63","131","42","1","33","33.00","1");
INSERT INTO order_item6 VALUES("64","131","47","1","100","100.00","1");
INSERT INTO order_item6 VALUES("65","132","50","1","234","234.00","1");
INSERT INTO order_item6 VALUES("66","132","50","1","234","234.00","1");
INSERT INTO order_item6 VALUES("67","132","48","1","1780","1780.00","1");
INSERT INTO order_item6 VALUES("68","0","46","1","450","450.00","1");
INSERT INTO order_item6 VALUES("69","0","50","1","234","234.00","1");
INSERT INTO order_item6 VALUES("70","133","48","1","1780","1780.00","1");
INSERT INTO order_item6 VALUES("71","133","50","1","234","234.00","1");
INSERT INTO order_item6 VALUES("72","133","48","1","1780","1780.00","1");
INSERT INTO order_item6 VALUES("73","134","51","1","233","233.00","1");
INSERT INTO order_item6 VALUES("74","134","48","1","1780","1780.00","1");
INSERT INTO order_item6 VALUES("75","134","47","1","100","100.00","1");
INSERT INTO order_item6 VALUES("76","135","51","1","233","233.00","1");
INSERT INTO order_item6 VALUES("77","135","42","1","33","33.00","1");
INSERT INTO order_item6 VALUES("78","135","51","1","233","233.00","1");
INSERT INTO order_item6 VALUES("79","136","50","1","234","234.00","1");
INSERT INTO order_item6 VALUES("80","136","41","1","45","45.00","1");
INSERT INTO order_item6 VALUES("81","136","42","1","33","33.00","1");
INSERT INTO order_item6 VALUES("82","136","42","1","33","33.00","1");
INSERT INTO order_item6 VALUES("83","137","44","1","0","0.00","1");
INSERT INTO order_item6 VALUES("84","137","42","1","33","33.00","1");
INSERT INTO order_item6 VALUES("85","137","41","1","45","45.00","1");
INSERT INTO order_item6 VALUES("86","138","51","1","233","233.00","1");
INSERT INTO order_item6 VALUES("87","138","46","1","450","450.00","1");
INSERT INTO order_item6 VALUES("88","138","48","1","1780","1780.00","1");
INSERT INTO order_item6 VALUES("89","139","47","1","100","100.00","1");
INSERT INTO order_item6 VALUES("90","139","40","1","34","34.00","1");
INSERT INTO order_item6 VALUES("91","139","44","1","0","0.00","1");
INSERT INTO order_item6 VALUES("92","140","51","1","233","233.00","1");
INSERT INTO order_item6 VALUES("93","140","50","1","234","234.00","1");
INSERT INTO order_item6 VALUES("94","140","41","1","45","45.00","1");
INSERT INTO order_item6 VALUES("95","141","50","1","234","234.00","1");
INSERT INTO order_item6 VALUES("96","141","40","1","34","34.00","1");
INSERT INTO order_item6 VALUES("97","141","41","1","45","45.00","1");
INSERT INTO order_item6 VALUES("98","142","40","1","34","34.00","1");
INSERT INTO order_item6 VALUES("99","142","46","1","450","450.00","1");
INSERT INTO order_item6 VALUES("100","142","40","1","34","34.00","1");
INSERT INTO order_item6 VALUES("101","142","47","1","100","100.00","1");
INSERT INTO order_item6 VALUES("102","143","46","1","450","450.00","1");
INSERT INTO order_item6 VALUES("103","143","47","1","100","100.00","1");
INSERT INTO order_item6 VALUES("104","143","46","1","450","450.00","1");
INSERT INTO order_item6 VALUES("105","144","47","1","100","100.00","1");
INSERT INTO order_item6 VALUES("106","144","41","1","45","45.00","1");
INSERT INTO order_item6 VALUES("107","144","57","1","10","10.00","1");
INSERT INTO order_item6 VALUES("108","144","42","1","33","33.00","1");
INSERT INTO order_item6 VALUES("109","144","47","1","100","100.00","1");
INSERT INTO order_item6 VALUES("110","145","53","1","44","44.00","1");
INSERT INTO order_item6 VALUES("111","145","46","1","450","450.00","1");
INSERT INTO order_item6 VALUES("112","145","47","1","100","100.00","1");
INSERT INTO order_item6 VALUES("113","146","51","1","233","233.00","1");
INSERT INTO order_item6 VALUES("114","146","48","1","1780","1780.00","1");
INSERT INTO order_item6 VALUES("115","146","48","1","1780","1780.00","1");
INSERT INTO order_item6 VALUES("116","147","51","1","233","233.00","1");
INSERT INTO order_item6 VALUES("117","147","50","1","234","234.00","1");
INSERT INTO order_item6 VALUES("118","148","48","1","1780","1780.00","1");
INSERT INTO order_item6 VALUES("119","148","51","1","233","233.00","1");
INSERT INTO order_item6 VALUES("120","148","47","1","100","100.00","1");
INSERT INTO order_item6 VALUES("121","148","46","1","450","450.00","1");
INSERT INTO order_item6 VALUES("122","149","51","1","233","233.00","1");
INSERT INTO order_item6 VALUES("123","149","47","1","100","100.00","1");
INSERT INTO order_item6 VALUES("124","149","57","1","10","10.00","1");
INSERT INTO order_item6 VALUES("125","150","42","1","33","33.00","1");
INSERT INTO order_item6 VALUES("126","151","50","1","234","234.00","1");
INSERT INTO order_item6 VALUES("127","152","50","1","234","234.00","1");





CREATE TABLE `order_item7` (
  `order_item_id` int(255) NOT NULL AUTO_INCREMENT,
  `order_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `hns` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  PRIMARY KEY (`order_item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=latin1;

INSERT INTO order_item7 VALUES("1","114","56","45","0");
INSERT INTO order_item7 VALUES("2","114","56","45","0");
INSERT INTO order_item7 VALUES("3","115","56","45","3");
INSERT INTO order_item7 VALUES("4","115","56","45","3");
INSERT INTO order_item7 VALUES("5","115","56","45","2");
INSERT INTO order_item7 VALUES("6","116","56","45","5");
INSERT INTO order_item7 VALUES("7","116","56","45","4");
INSERT INTO order_item7 VALUES("8","116","56","45","3");
INSERT INTO order_item7 VALUES("9","116","56","45","1");
INSERT INTO order_item7 VALUES("10","116","0","0","0");
INSERT INTO order_item7 VALUES("11","117","56","45","5");
INSERT INTO order_item7 VALUES("12","117","56","45","4");
INSERT INTO order_item7 VALUES("13","117","56","45","3");
INSERT INTO order_item7 VALUES("14","117","56","45","1");
INSERT INTO order_item7 VALUES("15","117","0","0","0");
INSERT INTO order_item7 VALUES("16","118","56","45","5");
INSERT INTO order_item7 VALUES("17","118","56","45","4");
INSERT INTO order_item7 VALUES("18","118","56","45","3");
INSERT INTO order_item7 VALUES("19","118","56","45","1");
INSERT INTO order_item7 VALUES("20","118","0","0","0");
INSERT INTO order_item7 VALUES("21","119","56","45","3");
INSERT INTO order_item7 VALUES("22","119","0","0","0");
INSERT INTO order_item7 VALUES("23","119","0","0","0");
INSERT INTO order_item7 VALUES("24","120","55","445","23");
INSERT INTO order_item7 VALUES("25","120","55","445","22");
INSERT INTO order_item7 VALUES("26","120","0","0","0");
INSERT INTO order_item7 VALUES("27","120","0","0","0");
INSERT INTO order_item7 VALUES("28","121","56","45","5");
INSERT INTO order_item7 VALUES("29","121","55","445","3");
INSERT INTO order_item7 VALUES("30","121","54","3443","4");
INSERT INTO order_item7 VALUES("31","121","54","3443","2");
INSERT INTO order_item7 VALUES("32","122","55","445","5");
INSERT INTO order_item7 VALUES("33","122","55","445","4");
INSERT INTO order_item7 VALUES("34","122","54","3443","2");
INSERT INTO order_item7 VALUES("35","122","56","45","1");
INSERT INTO order_item7 VALUES("36","123","55","445","34");
INSERT INTO order_item7 VALUES("37","123","56","45","33");
INSERT INTO order_item7 VALUES("38","123","54","3443","22");
INSERT INTO order_item7 VALUES("39","124","54","3443","3");
INSERT INTO order_item7 VALUES("40","124","55","445","2");
INSERT INTO order_item7 VALUES("41","124","56","45","1");
INSERT INTO order_item7 VALUES("42","125","54","3443","4");
INSERT INTO order_item7 VALUES("43","125","55","445","3");
INSERT INTO order_item7 VALUES("44","125","56","45","2");
INSERT INTO order_item7 VALUES("45","127","55","445","4");
INSERT INTO order_item7 VALUES("46","127","56","45","3");
INSERT INTO order_item7 VALUES("47","127","54","3443","2");
INSERT INTO order_item7 VALUES("48","128","54","3443","3");
INSERT INTO order_item7 VALUES("49","128","54","3443","2");
INSERT INTO order_item7 VALUES("50","128","0","0","0");
INSERT INTO order_item7 VALUES("51","129","54","3443","3");
INSERT INTO order_item7 VALUES("52","129","54","3443","2");
INSERT INTO order_item7 VALUES("53","129","0","0","0");
INSERT INTO order_item7 VALUES("54","130","54","3443","3");
INSERT INTO order_item7 VALUES("55","130","56","45","2");
INSERT INTO order_item7 VALUES("56","130","55","445","1");
INSERT INTO order_item7 VALUES("57","131","55","445","3");
INSERT INTO order_item7 VALUES("58","131","55","445","1");
INSERT INTO order_item7 VALUES("59","131","0","0","0");
INSERT INTO order_item7 VALUES("60","132","55","445","1");
INSERT INTO order_item7 VALUES("61","132","0","0","0");
INSERT INTO order_item7 VALUES("62","132","0","0","0");
INSERT INTO order_item7 VALUES("63","0","54","3443","2");
INSERT INTO order_item7 VALUES("64","0","55","445","3");
INSERT INTO order_item7 VALUES("65","133","54","3443","3");
INSERT INTO order_item7 VALUES("66","133","0","0","0");
INSERT INTO order_item7 VALUES("67","133","0","0","0");
INSERT INTO order_item7 VALUES("68","134","54","3443","5");
INSERT INTO order_item7 VALUES("69","134","55","445","3");
INSERT INTO order_item7 VALUES("70","134","54","3443","1");
INSERT INTO order_item7 VALUES("71","135","55","445","32");
INSERT INTO order_item7 VALUES("72","135","54","3443","23");
INSERT INTO order_item7 VALUES("73","135","56","45","21");
INSERT INTO order_item7 VALUES("74","136","55","445","9");
INSERT INTO order_item7 VALUES("75","136","55","445","8");
INSERT INTO order_item7 VALUES("76","136","55","445","7");
INSERT INTO order_item7 VALUES("77","136","0","0","0");
INSERT INTO order_item7 VALUES("78","137","55","445","4");
INSERT INTO order_item7 VALUES("79","137","54","3443","3");
INSERT INTO order_item7 VALUES("80","137","55","445","1");
INSERT INTO order_item7 VALUES("81","138","54","3443","3");
INSERT INTO order_item7 VALUES("82","139","54","3443","3");
INSERT INTO order_item7 VALUES("83","140","55","445","3");
INSERT INTO order_item7 VALUES("84","140","55","445","2");
INSERT INTO order_item7 VALUES("85","140","56","45","1");
INSERT INTO order_item7 VALUES("86","140","55","445","3");
INSERT INTO order_item7 VALUES("87","141","55","445","3");
INSERT INTO order_item7 VALUES("88","141","55","445","2");
INSERT INTO order_item7 VALUES("89","141","55","445","3");
INSERT INTO order_item7 VALUES("90","141","56","45","1");
INSERT INTO order_item7 VALUES("91","142","54","3443","5");
INSERT INTO order_item7 VALUES("92","142","55","445","3");
INSERT INTO order_item7 VALUES("93","142","55","445","1");
INSERT INTO order_item7 VALUES("94","142","55","445","2");
INSERT INTO order_item7 VALUES("95","143","54","3443","3");
INSERT INTO order_item7 VALUES("96","143","55","445","1");
INSERT INTO order_item7 VALUES("97","143","56","45","4");
INSERT INTO order_item7 VALUES("98","144","54","3443","4");
INSERT INTO order_item7 VALUES("99","144","55","445","2");
INSERT INTO order_item7 VALUES("100","144","56","45","1");
INSERT INTO order_item7 VALUES("101","144","54","3443","1");
INSERT INTO order_item7 VALUES("102","145","55","445","4");
INSERT INTO order_item7 VALUES("103","145","55","445","2");
INSERT INTO order_item7 VALUES("104","145","56","45","1");
INSERT INTO order_item7 VALUES("105","145","55","445","1");
INSERT INTO order_item7 VALUES("106","146","55","445","444");
INSERT INTO order_item7 VALUES("107","147","55","445","2");
INSERT INTO order_item7 VALUES("108","147","55","445","1");
INSERT INTO order_item7 VALUES("109","148","54","3443","2");
INSERT INTO order_item7 VALUES("110","148","56","45","3");
INSERT INTO order_item7 VALUES("111","148","55","445","1");
INSERT INTO order_item7 VALUES("112","149","54","3443","2");
INSERT INTO order_item7 VALUES("113","149","55","445","3");
INSERT INTO order_item7 VALUES("114","150","54","3443","23");
INSERT INTO order_item7 VALUES("115","151","54","3443","2");
INSERT INTO order_item7 VALUES("116","152","55","445","3");





CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_date` date NOT NULL,
  `billno` varchar(255) NOT NULL,
  `gstno` int(255) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_contact` varchar(255) NOT NULL,
  `sub_total` varchar(255) NOT NULL,
  `cgst` varchar(255) NOT NULL,
  `sgst` varchar(255) NOT NULL,
  `igst` varchar(255) NOT NULL,
  `purchasexpense` int(255) NOT NULL,
  `cgsttotal` varchar(255) NOT NULL,
  `sgsttotal` varchar(255) NOT NULL,
  `igsttotal` varchar(255) NOT NULL,
  `tax` int(255) NOT NULL,
  `vat` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `grand_total` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL,
  `due` varchar(255) NOT NULL,
  `payment_type` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `order_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=223 DEFAULT CHARSET=latin1;

INSERT INTO orders VALUES("215","2018-04-16","gsf3424","0","","","","","","","0","","","","0","","","","","","","0","0","0");





CREATE TABLE `orders2` (
  `order_id` int(255) NOT NULL AUTO_INCREMENT,
  `order_date` date NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `deepan` varchar(255) NOT NULL,
  `client_contact` varchar(255) NOT NULL,
  `sub_total` varchar(255) NOT NULL,
  `tax` int(255) NOT NULL,
  `vat` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `grand_total` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL,
  `due` varchar(255) NOT NULL,
  `payment_type` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `order_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=146 DEFAULT CHARSET=latin1;

INSERT INTO orders2 VALUES("145","2018-03-13","abdulak","","151599156","2345.00","0","","","0","2345.00","2000","345.00","2","2","1");





CREATE TABLE `orders3` (
  `order_id` int(255) NOT NULL AUTO_INCREMENT,
  `order_date` date NOT NULL,
  `billno` varchar(255) NOT NULL,
  `gst` int(255) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_contact` varchar(255) NOT NULL,
  `product1quantity` int(255) NOT NULL,
  `product1rate` int(255) NOT NULL,
  `product1total` int(255) NOT NULL,
  `sub_total` varchar(255) NOT NULL,
  `cgst` varchar(255) NOT NULL,
  `sgst` varchar(255) NOT NULL,
  `igst` varchar(255) NOT NULL,
  `cgsttotal` varchar(255) NOT NULL,
  `sgsttotal` varchar(255) NOT NULL,
  `igsttotal` varchar(255) NOT NULL,
  `tax` int(255) NOT NULL,
  `vat` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `grand_total` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL,
  `due` varchar(255) NOT NULL,
  `payment_type` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `order_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=153 DEFAULT CHARSET=latin1;






CREATE TABLE `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_image` text NOT NULL,
  `brand_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `costprice` int(255) NOT NULL,
  `profit` int(255) NOT NULL,
  `cgst` int(255) NOT NULL,
  `cgsttotal` int(255) NOT NULL,
  `sgst` int(255) NOT NULL,
  `sgsttotal` int(255) NOT NULL,
  `tax` int(255) NOT NULL,
  `total` int(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO product VALUES("13","redmi22","../assests/images/stock/123815a67f3b2bcbc2.jpg","12","8","17","4000","3000","1000","18","0","18","0","1440","5440","1","1");
INSERT INTO product VALUES("14","hello","../assests/images/stock/264935a6936b834d98.png","11","8","-207","3000","2000","1000","18","540","18","540","1080","4080","1","1");





CREATE TABLE `product1` (
  `product_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `hns` varchar(255) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO product1 VALUES("3","dd","34334");
INSERT INTO product1 VALUES("4","vv","4343");
INSERT INTO product1 VALUES("5","ff","333");
INSERT INTO product1 VALUES("6","deee","");
INSERT INTO product1 VALUES("7","sdds","");
INSERT INTO product1 VALUES("8","43","");





CREATE TABLE `product1rate` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `cgst` int(255) NOT NULL,
  `sgst` int(255) NOT NULL,
  `igst` int(255) NOT NULL,
  `Rate` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO product1rate VALUES("1","9","9","0","70");





CREATE TABLE `production` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `hns` varchar(255) NOT NULL,
  `quantity` float NOT NULL,
  `cost_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;






CREATE TABLE `production_order` (
  `production_id` int(255) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `quantity` double NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `cost_price` int(255) NOT NULL,
  `selling_price` int(255) NOT NULL,
  `cgst` int(255) NOT NULL,
  `sgst` int(255) NOT NULL,
  PRIMARY KEY (`production_id`)
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=latin1;

INSERT INTO production_order VALUES("114","2018-03-05","0","ddd","0","0","0","0");
INSERT INTO production_order VALUES("115","2018-03-05","0","500","0","0","0","0");
INSERT INTO production_order VALUES("116","2018-03-05","0","venilla ice cream","0","0","0","0");
INSERT INTO production_order VALUES("117","2018-03-05","0","dairy","0","0","0","0");
INSERT INTO production_order VALUES("118","2018-03-05","0","dairy","0","0","0","0");
INSERT INTO production_order VALUES("119","2018-03-05","0","500liter","0","0","0","0");
INSERT INTO production_order VALUES("120","2018-03-06","0","dee","0","0","0","0");
INSERT INTO production_order VALUES("121","2018-03-06","0","dee","0","0","0","0");
INSERT INTO production_order VALUES("122","2018-03-06","0","dee","0","0","0","0");
INSERT INTO production_order VALUES("123","2018-03-06","0","20litre","0","0","0","0");
INSERT INTO production_order VALUES("125","2018-03-11","0","dee","0","0","0","0");
INSERT INTO production_order VALUES("126","2018-03-11","0","dee","0","0","0","0");
INSERT INTO production_order VALUES("127","2018-03-13","1.5","milk powder","0","0","0","0");
INSERT INTO production_order VALUES("128","2018-03-13","22","sugarecan","0","0","0","0");
INSERT INTO production_order VALUES("129","2018-03-15","37","sugarecan","0","0","0","0");





CREATE TABLE `production_size` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

INSERT INTO production_size VALUES("1","196","1","23");
INSERT INTO production_size VALUES("2","197","1","100");
INSERT INTO production_size VALUES("3","197","1","333");
INSERT INTO production_size VALUES("4","197","1","333");
INSERT INTO production_size VALUES("5","197","1","333");
INSERT INTO production_size VALUES("6","197","1","333");
INSERT INTO production_size VALUES("7","197","1","333");
INSERT INTO production_size VALUES("8","197","1","333");
INSERT INTO production_size VALUES("9","198","1","222");
INSERT INTO production_size VALUES("10","197","1","22");
INSERT INTO production_size VALUES("11","197","1","334");
INSERT INTO production_size VALUES("12","200","1","344");
INSERT INTO production_size VALUES("13","198","1","2322");
INSERT INTO production_size VALUES("14","199","1","344");
INSERT INTO production_size VALUES("15","196","1","234");
INSERT INTO production_size VALUES("16","196","1","23");
INSERT INTO production_size VALUES("17","205","1","3443");
INSERT INTO production_size VALUES("18","198","1","222");
INSERT INTO production_size VALUES("19","205","2","50");
INSERT INTO production_size VALUES("20","205","2","33");
INSERT INTO production_size VALUES("21","205","1","45");
INSERT INTO production_size VALUES("22","207","2","34");
INSERT INTO production_size VALUES("23","207","2","100");
INSERT INTO production_size VALUES("24","208","2","50");
INSERT INTO production_size VALUES("25","208","1","30");
INSERT INTO production_size VALUES("26","209","4","50");
INSERT INTO production_size VALUES("27","209","5","100");
INSERT INTO production_size VALUES("28","210","2","50");
INSERT INTO production_size VALUES("29","210","1","100");
INSERT INTO production_size VALUES("30","212","2","34324");





CREATE TABLE `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(200) NOT NULL,
  `gen_name` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `o_price` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `onhand_qty` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `qty_sold` int(10) NOT NULL,
  `expiry_date` varchar(500) NOT NULL,
  `date_arrival` varchar(500) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

INSERT INTO products VALUES("58","dee","deee","  ","","344","233","-111","","0","2","23","","");
INSERT INTO products VALUES("59","vijay","vijay"," ","","345","324","-21","","0","42","45","","");





CREATE TABLE `purchase` (
  `product_name` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `date` date NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `supplier_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO purchase VALUES("","0","0000-00-00","","deepan");
INSERT INTO purchase VALUES("","0","0000-00-00","","deepan");





CREATE TABLE `purchase_expense` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `expensename` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO purchase_expense VALUES("1","cutting");
INSERT INTO purchase_expense VALUES("2","travel");
INSERT INTO purchase_expense VALUES("4","dee");
INSERT INTO purchase_expense VALUES("5","tea");
INSERT INTO purchase_expense VALUES("6","feee");





CREATE TABLE `purchase_order` (
  `purchase_id` int(255) NOT NULL AUTO_INCREMENT,
  `invoice_no` int(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `wastage` int(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `suplier_name` varchar(255) NOT NULL,
  `total_quantity` int(255) NOT NULL,
  `taken_quantity` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  PRIMARY KEY (`purchase_id`)
) ENGINE=InnoDB AUTO_INCREMENT=159 DEFAULT CHARSET=latin1;

INSERT INTO purchase_order VALUES("157","0","","0","2018-03-13","mat ice cream","","0","100","0","0");
INSERT INTO purchase_order VALUES("158","0","","0","2018-03-13","mat ice cream","","78","1000","0","0");





CREATE TABLE `purchase_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `purchase_quantity` int(255) NOT NULL,
  `rate` int(255) NOT NULL,
  `box` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

INSERT INTO purchase_product VALUES("37","mat ice cream","0","1078","67","7");





CREATE TABLE `quotation` (
  `order_id` int(255) NOT NULL AUTO_INCREMENT,
  `order_date` date NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_contact` varchar(255) NOT NULL,
  `sub_total` int(255) NOT NULL,
  `vat` int(255) NOT NULL,
  `total_amount` int(255) NOT NULL,
  `discount` int(255) NOT NULL,
  `grand_total` int(255) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

INSERT INTO quotation VALUES("65","2018-02-23","23","3232","764","176","940","3","937");
INSERT INTO quotation VALUES("66","2018-02-23","343","43","764","0","0","0","0");





CREATE TABLE `quotation_order_item` (
  `order_item_id` int(255) NOT NULL AUTO_INCREMENT,
  `order_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `rate` int(255) NOT NULL,
  `total` int(255) NOT NULL,
  `order_item_status` int(255) NOT NULL,
  PRIMARY KEY (`order_item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=214 DEFAULT CHARSET=latin1;

INSERT INTO quotation_order_item VALUES("212","63","13","1","4000","4000","1");
INSERT INTO quotation_order_item VALUES("213","63","11","1","300","300","1");





CREATE TABLE `sale_return` (
  `purchase_id` int(255) NOT NULL AUTO_INCREMENT,
  `invoice_no` int(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `wastage` int(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `suplier_name` varchar(255) NOT NULL,
  `total_quantity` int(255) NOT NULL,
  `taken_quantity` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  PRIMARY KEY (`purchase_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

INSERT INTO sale_return VALUES("35","0","","4","2018-03-13","mat ice cream","","65","13","0","0");
INSERT INTO sale_return VALUES("36","0","","0","2018-04-08","seeni","","-15","15","0","0");
INSERT INTO sale_return VALUES("37","0","","0","2018-04-08","seeni","","0","15","0","0");





CREATE TABLE `sales` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_number` varchar(100) NOT NULL,
  `cashier` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `due_date` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `balance` varchar(100) NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB AUTO_INCREMENT=144 DEFAULT CHARSET=latin1;

INSERT INTO sales VALUES("142","RS-3930200","Admin","01/07/18","cash","1165","-555","43","4rr","");
INSERT INTO sales VALUES("143","RS-26232973","<br /><b>Notice</b>:  Undefined index: SESS_FIRST_NAME in <b>C:\\xampp\\htdocs\\anketsystems\\final\\sale","01/26/18","cash","1620","","2323","dsd","");





CREATE TABLE `sales_bill` (
  `no` int(244) NOT NULL AUTO_INCREMENT,
  `number` int(255) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `product` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `product_code` varchar(150) NOT NULL,
  `gen_name` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL,
  `cgst` int(255) NOT NULL,
  `cgsttotal` int(255) NOT NULL,
  `sgst` int(255) NOT NULL,
  `sgsttotal` int(255) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `due` int(255) NOT NULL,
  `date` varchar(500) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

INSERT INTO sales_bill VALUES("54","1111111111","0","RS-33003276","","8160","","","","ffff","","0","1080","0","1080","","0","01/28/18");
INSERT INTO sales_bill VALUES("55","327462837","0","RS-20308","","12240","","","","nithya","","0","1620","0","1620","","0","01/28/18");
INSERT INTO sales_bill VALUES("56","42324457","0","RS-928282","","12104","","","","abdul","","0","1602","0","1602","","50","01/28/18");





CREATE TABLE `sales_order` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice` varchar(100) NOT NULL,
  `para` varchar(255) NOT NULL,
  `product` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `product_code` varchar(150) NOT NULL,
  `gen_name` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL,
  `cgst` int(255) NOT NULL,
  `cgsttotal` int(255) NOT NULL,
  `sgst` int(255) NOT NULL,
  `sgsttotal` int(255) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `date` varchar(500) NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB AUTO_INCREMENT=517 DEFAULT CHARSET=latin1;

INSERT INTO sales_order VALUES("515","RS-928282","","hello","2","8024","1800","","","","3000","18","1062","18","1062","100","");
INSERT INTO sales_order VALUES("516","RS-928282","","hello","1","4080","1000","","","","3000","18","540","18","540","0","");





CREATE TABLE `suplierduepay` (
  `suplier_id` int(255) NOT NULL AUTO_INCREMENT,
  `order_date` date NOT NULL,
  `suplier_name` varchar(100) NOT NULL,
  `due` int(255) NOT NULL,
  `payamount` int(255) NOT NULL,
  PRIMARY KEY (`suplier_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO suplierduepay VALUES("10","2018-03-13","abdulak","345","100");
INSERT INTO suplierduepay VALUES("12","2018-04-09","abdulak","102459","32");





CREATE TABLE `supliers` (
  `suplier_id` int(11) NOT NULL AUTO_INCREMENT,
  `suplier_name` varchar(100) NOT NULL,
  `suplier_address` varchar(100) NOT NULL,
  `suplier_contact` varchar(100) NOT NULL,
  `gst` int(255) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `note` varchar(500) NOT NULL,
  PRIMARY KEY (`suplier_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

INSERT INTO supliers VALUES("26","abdulak","uhfhjfhj","151599156","0","","102389.15");
INSERT INTO supliers VALUES("27","sda3","23","21","0","","23");
INSERT INTO supliers VALUES("29","sdf","34","4343","45534","","442.24");





CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO user VALUES("1","admin","admin","Admin","admin");
INSERT INTO user VALUES("2","cashier","cashier","Cashier Pharmacy","Cashier");
INSERT INTO user VALUES("3","admin","admin123","Administrator","admin");





CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO users VALUES("1","admin","2171a8380ef2c424fbc80eb45cee7b91","");




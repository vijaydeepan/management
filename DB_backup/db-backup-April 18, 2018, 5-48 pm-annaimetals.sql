

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





CREATE TABLE `checkbox` (
  `aluminium` int(255) NOT NULL,
  `material` int(255) NOT NULL,
  `acpsheet` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






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

INSERT INTO company VALUES("Annai Metals","perumalpuram","645346542");
INSERT INTO company VALUES("Annai Metals","perumalpuram","645346542");
INSERT INTO company VALUES("Annai Metals","perumalpuram","645346542");
INSERT INTO company VALUES("Annai Metals","perumalpuram","645346542");
INSERT INTO company VALUES("Annai Metals","perumalpuram","645346542");
INSERT INTO company VALUES("Annai Metals","perumalpuram","645346542");
INSERT INTO company VALUES("Annai Metals","perumalpuram","645346542");
INSERT INTO company VALUES("Annai Metals","perumalpuram","645346542");





CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(100) NOT NULL,
  `gstno` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `due` int(255) NOT NULL,
  `note` varchar(500) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

INSERT INTO customer VALUES("63","AAA","SF4D333D3D33D","DFDSFSD","342342","5431","");





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





CREATE TABLE `duplication` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `duplicate` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO duplication VALUES("1","1");





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
) ENGINE=InnoDB AUTO_INCREMENT=457 DEFAULT CHARSET=latin1;

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
INSERT INTO order_item VALUES("442","223","60","50","","750.00","1");
INSERT INTO order_item VALUES("443","223","61","50","","750.00","1");
INSERT INTO order_item VALUES("444","223","62","50","","750.00","1");
INSERT INTO order_item VALUES("445","223","63","50","","750.00","1");
INSERT INTO order_item VALUES("446","223","66","50","","0.00","1");
INSERT INTO order_item VALUES("447","224","67","50","","500.00","1");
INSERT INTO order_item VALUES("448","224","68","100","","800.00","1");
INSERT INTO order_item VALUES("449","225","65","50","","10650.00","1");
INSERT INTO order_item VALUES("450","225","64","50","","27500.00","1");
INSERT INTO order_item VALUES("451","226","82","1","","2.00","1");
INSERT INTO order_item VALUES("452","227","90","350","","74550.00","1");
INSERT INTO order_item VALUES("453","228","92","3","","999.00","1");
INSERT INTO order_item VALUES("454","229","100","50","","10000.00","1");
INSERT INTO order_item VALUES("455","230","107","66","","3630.00","1");
INSERT INTO order_item VALUES("456","230","104","55","","3630.00","1");





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
  `hsn` varchar(255) NOT NULL,
  `quantity` double NOT NULL,
  `rate` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `order_item_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`order_item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=358 DEFAULT CHARSET=latin1;

INSERT INTO order_item6 VALUES("1","112","51","","1","233","233.00","1");
INSERT INTO order_item6 VALUES("2","112","51","","1","233","233.00","1");
INSERT INTO order_item6 VALUES("3","113","51","","1","233","233.00","1");
INSERT INTO order_item6 VALUES("4","113","51","","1","233","233.00","1");
INSERT INTO order_item6 VALUES("5","114","47","","1","100","100.00","1");
INSERT INTO order_item6 VALUES("6","114","46","","1","450","450.00","1");
INSERT INTO order_item6 VALUES("7","115","51","","1","233","233.00","1");
INSERT INTO order_item6 VALUES("8","115","41","","1","45","45.00","1");
INSERT INTO order_item6 VALUES("9","115","53","","1","44","44.00","1");
INSERT INTO order_item6 VALUES("10","116","51","","1","233","233.00","1");
INSERT INTO order_item6 VALUES("11","116","41","","1","45","45.00","1");
INSERT INTO order_item6 VALUES("12","116","46","","1","450","450.00","1");
INSERT INTO order_item6 VALUES("13","116","41","","1","45","45.00","1");
INSERT INTO order_item6 VALUES("14","116","42","","1","33","33.00","1");
INSERT INTO order_item6 VALUES("15","117","51","","1","233","233.00","1");
INSERT INTO order_item6 VALUES("16","117","41","","1","45","45.00","1");
INSERT INTO order_item6 VALUES("17","117","46","","1","450","450.00","1");
INSERT INTO order_item6 VALUES("18","117","41","","1","45","45.00","1");
INSERT INTO order_item6 VALUES("19","117","42","","1","33","33.00","1");
INSERT INTO order_item6 VALUES("20","118","51","","1","233","233.00","1");
INSERT INTO order_item6 VALUES("21","118","41","","1","45","45.00","1");
INSERT INTO order_item6 VALUES("22","118","46","","1","450","450.00","1");
INSERT INTO order_item6 VALUES("23","118","41","","1","45","45.00","1");
INSERT INTO order_item6 VALUES("24","118","42","","1","33","33.00","1");
INSERT INTO order_item6 VALUES("25","119","47","","1","100","100.00","1");
INSERT INTO order_item6 VALUES("26","119","51","","1","233","233.00","1");
INSERT INTO order_item6 VALUES("27","119","48","","1","1780","1780.00","1");
INSERT INTO order_item6 VALUES("28","120","46","","1","450","450.00","1");
INSERT INTO order_item6 VALUES("29","120","42","","1","33","33.00","1");
INSERT INTO order_item6 VALUES("30","120","50","","1","234","234.00","1");
INSERT INTO order_item6 VALUES("31","120","51","","1","233","233.00","1");
INSERT INTO order_item6 VALUES("32","121","47","","1","100","100.00","1");
INSERT INTO order_item6 VALUES("33","121","50","","1","234","234.00","1");
INSERT INTO order_item6 VALUES("34","121","51","","1","233","233.00","1");
INSERT INTO order_item6 VALUES("35","121","48","","1","1780","1780.00","1");
INSERT INTO order_item6 VALUES("36","122","48","","1","1780","1780.00","1");
INSERT INTO order_item6 VALUES("37","122","47","","1","100","100.00","1");
INSERT INTO order_item6 VALUES("38","122","47","","1","100","100.00","1");
INSERT INTO order_item6 VALUES("39","122","50","","1","234","234.00","1");
INSERT INTO order_item6 VALUES("40","123","50","","1","234","234.00","1");
INSERT INTO order_item6 VALUES("41","123","42","","1","33","33.00","1");
INSERT INTO order_item6 VALUES("42","123","48","","1","1780","1780.00","1");
INSERT INTO order_item6 VALUES("43","124","47","","1","100","100.00","1");
INSERT INTO order_item6 VALUES("44","124","50","","1","234","234.00","1");
INSERT INTO order_item6 VALUES("45","124","41","","1","45","45.00","1");
INSERT INTO order_item6 VALUES("46","125","50","","1","234","234.00","1");
INSERT INTO order_item6 VALUES("47","125","41","","1","45","45.00","1");
INSERT INTO order_item6 VALUES("48","125","46","","1","450","450.00","1");
INSERT INTO order_item6 VALUES("49","126","50","","1","234","234.00","1");
INSERT INTO order_item6 VALUES("50","127","50","","1","234","234.00","1");
INSERT INTO order_item6 VALUES("51","127","40","","1","34","34.00","1");
INSERT INTO order_item6 VALUES("52","127","40","","1","34","34.00","1");
INSERT INTO order_item6 VALUES("53","128","51","","1","233","233.00","1");
INSERT INTO order_item6 VALUES("54","128","41","","1","45","45.00","1");
INSERT INTO order_item6 VALUES("55","128","41","","1","45","45.00","1");
INSERT INTO order_item6 VALUES("56","129","51","","1","233","233.00","1");
INSERT INTO order_item6 VALUES("57","129","41","","1","45","45.00","1");
INSERT INTO order_item6 VALUES("58","129","41","","1","45","45.00","1");
INSERT INTO order_item6 VALUES("59","130","53","","1","44","44.00","1");
INSERT INTO order_item6 VALUES("60","130","48","","1","1780","1780.00","1");
INSERT INTO order_item6 VALUES("61","130","48","","1","1780","1780.00","1");
INSERT INTO order_item6 VALUES("62","131","50","","1","234","234.00","1");
INSERT INTO order_item6 VALUES("63","131","42","","1","33","33.00","1");
INSERT INTO order_item6 VALUES("64","131","47","","1","100","100.00","1");
INSERT INTO order_item6 VALUES("65","132","50","","1","234","234.00","1");
INSERT INTO order_item6 VALUES("66","132","50","","1","234","234.00","1");
INSERT INTO order_item6 VALUES("67","132","48","","1","1780","1780.00","1");
INSERT INTO order_item6 VALUES("68","0","46","","1","450","450.00","1");
INSERT INTO order_item6 VALUES("69","0","50","","1","234","234.00","1");
INSERT INTO order_item6 VALUES("70","133","48","","1","1780","1780.00","1");
INSERT INTO order_item6 VALUES("71","133","50","","1","234","234.00","1");
INSERT INTO order_item6 VALUES("72","133","48","","1","1780","1780.00","1");
INSERT INTO order_item6 VALUES("73","134","51","","1","233","233.00","1");
INSERT INTO order_item6 VALUES("74","134","48","","1","1780","1780.00","1");
INSERT INTO order_item6 VALUES("75","134","47","","1","100","100.00","1");
INSERT INTO order_item6 VALUES("76","135","51","","1","233","233.00","1");
INSERT INTO order_item6 VALUES("77","135","42","","1","33","33.00","1");
INSERT INTO order_item6 VALUES("78","135","51","","1","233","233.00","1");
INSERT INTO order_item6 VALUES("79","136","50","","1","234","234.00","1");
INSERT INTO order_item6 VALUES("80","136","41","","1","45","45.00","1");
INSERT INTO order_item6 VALUES("81","136","42","","1","33","33.00","1");
INSERT INTO order_item6 VALUES("82","136","42","","1","33","33.00","1");
INSERT INTO order_item6 VALUES("83","137","44","","1","0","0.00","1");
INSERT INTO order_item6 VALUES("84","137","42","","1","33","33.00","1");
INSERT INTO order_item6 VALUES("85","137","41","","1","45","45.00","1");
INSERT INTO order_item6 VALUES("86","138","51","","1","233","233.00","1");
INSERT INTO order_item6 VALUES("87","138","46","","1","450","450.00","1");
INSERT INTO order_item6 VALUES("88","138","48","","1","1780","1780.00","1");
INSERT INTO order_item6 VALUES("89","139","47","","1","100","100.00","1");
INSERT INTO order_item6 VALUES("90","139","40","","1","34","34.00","1");
INSERT INTO order_item6 VALUES("91","139","44","","1","0","0.00","1");
INSERT INTO order_item6 VALUES("92","140","51","","1","233","233.00","1");
INSERT INTO order_item6 VALUES("93","140","50","","1","234","234.00","1");
INSERT INTO order_item6 VALUES("94","140","41","","1","45","45.00","1");
INSERT INTO order_item6 VALUES("95","141","50","","1","234","234.00","1");
INSERT INTO order_item6 VALUES("96","141","40","","1","34","34.00","1");
INSERT INTO order_item6 VALUES("97","141","41","","1","45","45.00","1");
INSERT INTO order_item6 VALUES("98","142","40","","1","34","34.00","1");
INSERT INTO order_item6 VALUES("99","142","46","","1","450","450.00","1");
INSERT INTO order_item6 VALUES("100","142","40","","1","34","34.00","1");
INSERT INTO order_item6 VALUES("101","142","47","","1","100","100.00","1");
INSERT INTO order_item6 VALUES("102","143","46","","1","450","450.00","1");
INSERT INTO order_item6 VALUES("103","143","47","","1","100","100.00","1");
INSERT INTO order_item6 VALUES("104","143","46","","1","450","450.00","1");
INSERT INTO order_item6 VALUES("105","144","47","","1","100","100.00","1");
INSERT INTO order_item6 VALUES("106","144","41","","1","45","45.00","1");
INSERT INTO order_item6 VALUES("107","144","57","","1","10","10.00","1");
INSERT INTO order_item6 VALUES("108","144","42","","1","33","33.00","1");
INSERT INTO order_item6 VALUES("109","144","47","","1","100","100.00","1");
INSERT INTO order_item6 VALUES("110","145","53","","1","44","44.00","1");
INSERT INTO order_item6 VALUES("111","145","46","","1","450","450.00","1");
INSERT INTO order_item6 VALUES("112","145","47","","1","100","100.00","1");
INSERT INTO order_item6 VALUES("113","146","51","","1","233","233.00","1");
INSERT INTO order_item6 VALUES("114","146","48","","1","1780","1780.00","1");
INSERT INTO order_item6 VALUES("115","146","48","","1","1780","1780.00","1");
INSERT INTO order_item6 VALUES("116","147","51","","1","233","233.00","1");
INSERT INTO order_item6 VALUES("117","147","50","","1","234","234.00","1");
INSERT INTO order_item6 VALUES("118","148","48","","1","1780","1780.00","1");
INSERT INTO order_item6 VALUES("119","148","51","","1","233","233.00","1");
INSERT INTO order_item6 VALUES("120","148","47","","1","100","100.00","1");
INSERT INTO order_item6 VALUES("121","148","46","","1","450","450.00","1");
INSERT INTO order_item6 VALUES("122","149","51","","1","233","233.00","1");
INSERT INTO order_item6 VALUES("123","149","47","","1","100","100.00","1");
INSERT INTO order_item6 VALUES("124","149","57","","1","10","10.00","1");
INSERT INTO order_item6 VALUES("125","150","42","","1","33","33.00","1");
INSERT INTO order_item6 VALUES("126","151","50","","1","234","234.00","1");
INSERT INTO order_item6 VALUES("127","152","50","","1","234","234.00","1");
INSERT INTO order_item6 VALUES("128","153","67","","20","12","240.00","1");
INSERT INTO order_item6 VALUES("129","153","68","","50","19","950.00","1");
INSERT INTO order_item6 VALUES("130","154","80","","1","34","34.00","1");
INSERT INTO order_item6 VALUES("131","155","80","","1","34","34.00","1");
INSERT INTO order_item6 VALUES("132","156","80","","1","34","34.00","1");
INSERT INTO order_item6 VALUES("133","157","80","","1","34","34.00","1");
INSERT INTO order_item6 VALUES("134","158","80","","1","34","34.00","1");
INSERT INTO order_item6 VALUES("135","159","80","","1","34","34.00","1");
INSERT INTO order_item6 VALUES("136","160","80","","1","34","34.00","1");
INSERT INTO order_item6 VALUES("137","161","80","QWE123","1","34","34.00","1");
INSERT INTO order_item6 VALUES("138","162","80","HYT123","1","34","34.00","1");
INSERT INTO order_item6 VALUES("139","163","80","GHJ453","1","34","34.00","1");
INSERT INTO order_item6 VALUES("140","164","80","GHJ453","1","34","34.00","1");
INSERT INTO order_item6 VALUES("141","165","80","GHJ453","1","34","34.00","1");
INSERT INTO order_item6 VALUES("142","166","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("143","167","80","HYT123","1","34","34.00","1");
INSERT INTO order_item6 VALUES("144","168","80","NBV345","1","34","34.00","1");
INSERT INTO order_item6 VALUES("145","168","80","HYT123","1","34","34.00","1");
INSERT INTO order_item6 VALUES("146","0","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("147","0","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("148","0","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("149","0","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("150","0","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("151","0","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("152","0","80","","1","34","34.00","1");
INSERT INTO order_item6 VALUES("153","0","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("154","0","80","GHJ453","1","34","34.00","1");
INSERT INTO order_item6 VALUES("155","0","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("156","0","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("157","0","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("158","0","80","","1","34","34.00","1");
INSERT INTO order_item6 VALUES("159","0","80","","1","34","34.00","1");
INSERT INTO order_item6 VALUES("160","0","80","","1","34","34.00","1");
INSERT INTO order_item6 VALUES("161","0","80","","1","34","34.00","1");
INSERT INTO order_item6 VALUES("162","169","80","","1","34","34.00","1");
INSERT INTO order_item6 VALUES("163","169","80","","1","34","34.00","1");
INSERT INTO order_item6 VALUES("164","170","80","","1","34","34.00","1");
INSERT INTO order_item6 VALUES("165","170","80","","1","34","34.00","1");
INSERT INTO order_item6 VALUES("166","171","80","","1","34","34.00","1");
INSERT INTO order_item6 VALUES("167","171","80","","1","34","34.00","1");
INSERT INTO order_item6 VALUES("168","0","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("169","172","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("170","173","80","GHJ453","1","34","34.00","1");
INSERT INTO order_item6 VALUES("171","174","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("172","175","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("173","176","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("174","177","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("175","178","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("176","179","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("177","180","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("178","181","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("179","182","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("180","183","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("181","184","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("182","185","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("183","186","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("184","186","80","","1","34","34.00","1");
INSERT INTO order_item6 VALUES("185","187","80","GHJ453","1","34","34.00","1");
INSERT INTO order_item6 VALUES("186","188","80","QWE123","1","34","34.00","1");
INSERT INTO order_item6 VALUES("187","189","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("188","190","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("189","191","80","GHJ453","1","34","34.00","1");
INSERT INTO order_item6 VALUES("190","192","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("191","193","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("192","194","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("193","195","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("194","196","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("195","197","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("196","198","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("197","199","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("198","200","80","GHJ453","1","34","34.00","1");
INSERT INTO order_item6 VALUES("199","201","80","GHJ453","1","34","34.00","1");
INSERT INTO order_item6 VALUES("200","202","80","GHJ453","1","34","34.00","1");
INSERT INTO order_item6 VALUES("201","203","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("202","204","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("203","205","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("204","206","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("205","207","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("206","208","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("207","209","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("208","210","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("209","211","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("210","211","80","","1","34","34.00","1");
INSERT INTO order_item6 VALUES("211","212","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("212","213","80","","1","34","34.00","1");
INSERT INTO order_item6 VALUES("213","214","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("214","215","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("215","216","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("216","217","61","","1","","","1");
INSERT INTO order_item6 VALUES("217","218","61","","1","","","1");
INSERT INTO order_item6 VALUES("218","218","61","","1","","","1");
INSERT INTO order_item6 VALUES("219","219","61","","1","","","1");
INSERT INTO order_item6 VALUES("220","219","72","","1","","","1");
INSERT INTO order_item6 VALUES("221","220","60","","1","","","1");
INSERT INTO order_item6 VALUES("222","221","63","","1","","","1");
INSERT INTO order_item6 VALUES("223","222","61","","1","","","1");
INSERT INTO order_item6 VALUES("224","223","61","","1","","","1");
INSERT INTO order_item6 VALUES("225","224","61","","1","","","1");
INSERT INTO order_item6 VALUES("226","225","61","","1","","","1");
INSERT INTO order_item6 VALUES("227","226","61","","1","","","1");
INSERT INTO order_item6 VALUES("228","227","61","","1","","","1");
INSERT INTO order_item6 VALUES("229","228","61","","1","","","1");
INSERT INTO order_item6 VALUES("230","228","62","","1","","","1");
INSERT INTO order_item6 VALUES("231","228","62","","2","","","1");
INSERT INTO order_item6 VALUES("232","229","60","","5","","","1");
INSERT INTO order_item6 VALUES("233","230","60","","11","","","1");
INSERT INTO order_item6 VALUES("234","231","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("235","231","80","","1","34","34.00","1");
INSERT INTO order_item6 VALUES("236","231","85","","1","33","33.00","1");
INSERT INTO order_item6 VALUES("237","232","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("238","232","80","","1","34","34.00","1");
INSERT INTO order_item6 VALUES("239","232","85","","1","33","33.00","1");
INSERT INTO order_item6 VALUES("240","233","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("241","233","80","","1","34","34.00","1");
INSERT INTO order_item6 VALUES("242","233","85","","1","33","33.00","1");
INSERT INTO order_item6 VALUES("243","234","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("244","234","80","","1","34","34.00","1");
INSERT INTO order_item6 VALUES("245","234","85","","1","33","33.00","1");
INSERT INTO order_item6 VALUES("246","235","85","GFD456","1","33","33.00","1");
INSERT INTO order_item6 VALUES("247","236","80","GHJ453","1","34","34.00","1");
INSERT INTO order_item6 VALUES("248","236","85","","1","33","33.00","1");
INSERT INTO order_item6 VALUES("249","237","80","GHJ453","1","34","34.00","1");
INSERT INTO order_item6 VALUES("250","237","85","","1","33","33.00","1");
INSERT INTO order_item6 VALUES("251","238","80","GHJ453","1","34","34.00","1");
INSERT INTO order_item6 VALUES("252","238","85","","1","33","33.00","1");
INSERT INTO order_item6 VALUES("253","239","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("254","240","85","GFD456","1","33","33.00","1");
INSERT INTO order_item6 VALUES("255","241","80","GHJ453","1","34","34.00","1");
INSERT INTO order_item6 VALUES("256","242","80","GHJ453","1","34","34.00","1");
INSERT INTO order_item6 VALUES("257","243","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("258","244","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("259","245","85","GFD456","1","33","33.00","1");
INSERT INTO order_item6 VALUES("260","246","85","GFD456","1","33","33.00","1");
INSERT INTO order_item6 VALUES("261","0","85","GFD456","1","33","33.00","1");
INSERT INTO order_item6 VALUES("262","0","85","GFD456","1","33","33.00","1");
INSERT INTO order_item6 VALUES("263","0","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("264","0","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("265","0","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("266","0","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("267","247","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("268","248","85","GFD456","1","33","33.00","1");
INSERT INTO order_item6 VALUES("269","249","85","GFD456","1","33","33.00","1");
INSERT INTO order_item6 VALUES("270","250","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("271","251","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("272","252","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("273","253","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("274","254","85","GFD456","1","33","33.00","1");
INSERT INTO order_item6 VALUES("275","255","85","GFD456","1","33","33.00","1");
INSERT INTO order_item6 VALUES("276","256","85","GFD456","1","33","33.00","1");
INSERT INTO order_item6 VALUES("277","257","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("278","258","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("279","258","85","","1","33","33.00","1");
INSERT INTO order_item6 VALUES("280","259","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("281","260","80","GHJ453","1","34","34.00","1");
INSERT INTO order_item6 VALUES("282","261","85","GFD456","1","33","33.00","1");
INSERT INTO order_item6 VALUES("283","262","85","GFD456","1","33","33.00","1");
INSERT INTO order_item6 VALUES("284","263","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("285","264","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("286","265","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("287","266","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("288","267","85","GFD456","1","33","33.00","1");
INSERT INTO order_item6 VALUES("289","268","85","GFD456","1","33","33.00","1");
INSERT INTO order_item6 VALUES("290","269","85","GFD456","1","33","33.00","1");
INSERT INTO order_item6 VALUES("291","270","87","GFD456","1","50","50.00","1");
INSERT INTO order_item6 VALUES("292","271","87","GFD456","1","50","50.00","1");
INSERT INTO order_item6 VALUES("293","272","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("294","273","85","GHJ453","1","33","33.00","1");
INSERT INTO order_item6 VALUES("295","274","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("296","274","85","GFD456","1","33","33.00","1");
INSERT INTO order_item6 VALUES("297","275","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("298","275","85","GHJ453","1","33","33.00","1");
INSERT INTO order_item6 VALUES("299","275","87","NBV345","1","50","50.00","1");
INSERT INTO order_item6 VALUES("300","276","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("301","276","85","HYT123","1","33","33.00","1");
INSERT INTO order_item6 VALUES("302","277","80","GHJ453","1","34","34.00","1");
INSERT INTO order_item6 VALUES("303","278","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("304","279","80","GFD456","1","34","34.00","1");
INSERT INTO order_item6 VALUES("305","280","85","GFD456","1","33","33.00","1");
INSERT INTO order_item6 VALUES("306","281","85","GFD456","1","33","33.00","1");
INSERT INTO order_item6 VALUES("307","282","80","7601","1","34","34.00","1");
INSERT INTO order_item6 VALUES("308","283","85","QWE123","1","33","33.00","1");
INSERT INTO order_item6 VALUES("309","284","80","QWE123","1","34","34.00","1");
INSERT INTO order_item6 VALUES("310","287","85","QWE123","1","33","33.00","1");
INSERT INTO order_item6 VALUES("311","288","80","QWE123","1","34","34.00","1");
INSERT INTO order_item6 VALUES("312","289","80","QWE123","1","34","34.00","1");
INSERT INTO order_item6 VALUES("313","290","80","QWE123","1","34","34.00","1");
INSERT INTO order_item6 VALUES("314","293","80","QWE123","1","34","34.00","1");
INSERT INTO order_item6 VALUES("315","295","80","HYT123","1","34","34.00","1");
INSERT INTO order_item6 VALUES("316","297","85","QWE123","1","33","33.00","1");
INSERT INTO order_item6 VALUES("317","0","85","","1","33","33.00","1");
INSERT INTO order_item6 VALUES("318","298","67","","1","12","12.00","1");
INSERT INTO order_item6 VALUES("319","299","67","NBV345","1","12","12.00","1");
INSERT INTO order_item6 VALUES("320","300","80","QWE123","1","34","34.00","1");
INSERT INTO order_item6 VALUES("321","301","80","QWE123","1","34","34.00","1");
INSERT INTO order_item6 VALUES("322","302","87","0","1","50","50.00","1");
INSERT INTO order_item6 VALUES("323","303","85","0","1","33","33.00","1");
INSERT INTO order_item6 VALUES("324","304","85","QWE123","1","33","33.00","1");
INSERT INTO order_item6 VALUES("325","305","80","QWE123","1","34","34.00","1");
INSERT INTO order_item6 VALUES("326","306","80","QWE123","1","34","34.00","1");
INSERT INTO order_item6 VALUES("327","307","80","QWE123","1","34","34.00","1");
INSERT INTO order_item6 VALUES("328","308","94","76278","1","13","13.00","1");
INSERT INTO order_item6 VALUES("329","309","105","3244","1","23","23.00","1");
INSERT INTO order_item6 VALUES("330","310","107","3244","1","11","11.00","1");
INSERT INTO order_item6 VALUES("331","311","107","3244","1","11","11.00","1");
INSERT INTO order_item6 VALUES("332","312","105","3244","1","23","23.00","1");
INSERT INTO order_item6 VALUES("333","313","105","3244","1","23","23.00","1");
INSERT INTO order_item6 VALUES("334","314","107","3244","1","11","11.00","1");
INSERT INTO order_item6 VALUES("335","315","105","3244","1","23","23.00","1");
INSERT INTO order_item6 VALUES("336","316","105","3244","1","23","23.00","1");
INSERT INTO order_item6 VALUES("337","317","105","3244","1","23","23.00","1");
INSERT INTO order_item6 VALUES("338","318","105","3244","1","23","23.00","1");
INSERT INTO order_item6 VALUES("339","319","107","3244","1","11","11.00","1");
INSERT INTO order_item6 VALUES("340","320","108","3244","1","0","0.00","1");
INSERT INTO order_item6 VALUES("341","321","108","","1","0","0.00","1");
INSERT INTO order_item6 VALUES("342","322","108","","1","0","0.00","1");
INSERT INTO order_item6 VALUES("343","323","109","","1","0","0.00","1");
INSERT INTO order_item6 VALUES("344","324","109","","1","0","0.00","1");
INSERT INTO order_item6 VALUES("345","325","110","","1","0","0.00","1");
INSERT INTO order_item6 VALUES("346","326","105","","1","23","23.00","1");
INSERT INTO order_item6 VALUES("347","327","107","","1","11","11.00","1");
INSERT INTO order_item6 VALUES("348","328","105","23","1","23","23.00","1");
INSERT INTO order_item6 VALUES("349","329","108","","1","0","0.00","1");
INSERT INTO order_item6 VALUES("350","330","108","","1","0","0.00","1");
INSERT INTO order_item6 VALUES("351","331","105","23","1","23","23.00","1");
INSERT INTO order_item6 VALUES("352","332","105","23","1","23","23.00","1");
INSERT INTO order_item6 VALUES("353","333","105","23","1","23","23.00","1");
INSERT INTO order_item6 VALUES("354","334","107","3434","1","11","11.00","1");
INSERT INTO order_item6 VALUES("355","335","108","","1","0","0.00","1");
INSERT INTO order_item6 VALUES("356","336","107","3434","1","11","11.00","1");
INSERT INTO order_item6 VALUES("357","337","107","3434","1","11","11.00","1");





CREATE TABLE `order_item7` (
  `order_item_id` int(255) NOT NULL AUTO_INCREMENT,
  `order_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `hns` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  PRIMARY KEY (`order_item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=320 DEFAULT CHARSET=latin1;

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
INSERT INTO order_item7 VALUES("117","153","62","0","4");
INSERT INTO order_item7 VALUES("118","153","61","0","3");
INSERT INTO order_item7 VALUES("119","154","61","0","2");
INSERT INTO order_item7 VALUES("120","155","61","0","2");
INSERT INTO order_item7 VALUES("121","156","61","0","2");
INSERT INTO order_item7 VALUES("122","157","61","0","2");
INSERT INTO order_item7 VALUES("123","158","61","0","3");
INSERT INTO order_item7 VALUES("124","159","61","0","32");
INSERT INTO order_item7 VALUES("125","160","61","0","3");
INSERT INTO order_item7 VALUES("126","161","63","0","5");
INSERT INTO order_item7 VALUES("127","162","64","0","5");
INSERT INTO order_item7 VALUES("128","163","62","0","4");
INSERT INTO order_item7 VALUES("129","163","62","0","4");
INSERT INTO order_item7 VALUES("130","164","62","0","4");
INSERT INTO order_item7 VALUES("131","164","62","0","4");
INSERT INTO order_item7 VALUES("132","165","62","0","4");
INSERT INTO order_item7 VALUES("133","165","62","0","4");
INSERT INTO order_item7 VALUES("134","166","61","0","5");
INSERT INTO order_item7 VALUES("135","166","69","0","1");
INSERT INTO order_item7 VALUES("136","167","64","0","4");
INSERT INTO order_item7 VALUES("137","167","64","0","5");
INSERT INTO order_item7 VALUES("138","167","62","0","5");
INSERT INTO order_item7 VALUES("139","168","65","0","5");
INSERT INTO order_item7 VALUES("140","168","64","0","6");
INSERT INTO order_item7 VALUES("141","0","61","0","3");
INSERT INTO order_item7 VALUES("142","0","61","0","3");
INSERT INTO order_item7 VALUES("143","0","61","0","3");
INSERT INTO order_item7 VALUES("144","0","61","0","3");
INSERT INTO order_item7 VALUES("145","0","61","0","3");
INSERT INTO order_item7 VALUES("146","0","61","0","4");
INSERT INTO order_item7 VALUES("147","0","61","0","1");
INSERT INTO order_item7 VALUES("148","0","62","0","4");
INSERT INTO order_item7 VALUES("149","0","61","0","1");
INSERT INTO order_item7 VALUES("150","0","61","0","1");
INSERT INTO order_item7 VALUES("151","0","61","0","1");
INSERT INTO order_item7 VALUES("152","0","61","0","2");
INSERT INTO order_item7 VALUES("153","0","61","0","2");
INSERT INTO order_item7 VALUES("154","0","61","0","2");
INSERT INTO order_item7 VALUES("155","0","62","0","4");
INSERT INTO order_item7 VALUES("156","170","61","0","1");
INSERT INTO order_item7 VALUES("157","171","61","0","1");
INSERT INTO order_item7 VALUES("158","0","61","0","2");
INSERT INTO order_item7 VALUES("159","172","61","0","2");
INSERT INTO order_item7 VALUES("160","173","62","0","2");
INSERT INTO order_item7 VALUES("161","174","61","0","2");
INSERT INTO order_item7 VALUES("162","175","61","0","2");
INSERT INTO order_item7 VALUES("163","176","61","0","2");
INSERT INTO order_item7 VALUES("164","177","61","0","2");
INSERT INTO order_item7 VALUES("165","178","61","0","2");
INSERT INTO order_item7 VALUES("166","179","61","0","2");
INSERT INTO order_item7 VALUES("167","180","61","0","2");
INSERT INTO order_item7 VALUES("168","181","61","0","1");
INSERT INTO order_item7 VALUES("169","182","61","0","3");
INSERT INTO order_item7 VALUES("170","183","61","0","3");
INSERT INTO order_item7 VALUES("171","184","61","0","3");
INSERT INTO order_item7 VALUES("172","185","61","0","4");
INSERT INTO order_item7 VALUES("173","186","61","0","3");
INSERT INTO order_item7 VALUES("174","187","62","0","3");
INSERT INTO order_item7 VALUES("175","188","63","0","3");
INSERT INTO order_item7 VALUES("176","189","61","0","2");
INSERT INTO order_item7 VALUES("177","190","61","GFD456","1");
INSERT INTO order_item7 VALUES("178","191","62","GHJ453","2");
INSERT INTO order_item7 VALUES("179","192","61","GFD456","0");
INSERT INTO order_item7 VALUES("180","193","61","GFD456","4");
INSERT INTO order_item7 VALUES("181","194","61","GFD456","3");
INSERT INTO order_item7 VALUES("182","194","62","GHJ453","3");
INSERT INTO order_item7 VALUES("183","195","61","GFD456","2");
INSERT INTO order_item7 VALUES("184","196","61","GFD456","2");
INSERT INTO order_item7 VALUES("185","197","61","GFD456","2");
INSERT INTO order_item7 VALUES("186","198","61","GFD456","3");
INSERT INTO order_item7 VALUES("187","199","61","GFD456","2");
INSERT INTO order_item7 VALUES("188","200","62","GHJ453","2");
INSERT INTO order_item7 VALUES("189","201","62","GHJ453","2");
INSERT INTO order_item7 VALUES("190","202","62","GHJ453","2");
INSERT INTO order_item7 VALUES("191","203","61","GFD456","1");
INSERT INTO order_item7 VALUES("192","204","61","GFD456","1");
INSERT INTO order_item7 VALUES("193","205","61","GFD456","1");
INSERT INTO order_item7 VALUES("194","206","61","GFD456","2");
INSERT INTO order_item7 VALUES("195","207","61","GFD456","2");
INSERT INTO order_item7 VALUES("196","208","61","GFD456","2");
INSERT INTO order_item7 VALUES("197","209","61","GFD456","2");
INSERT INTO order_item7 VALUES("198","210","61","GFD456","2");
INSERT INTO order_item7 VALUES("199","211","61","GFD456","2");
INSERT INTO order_item7 VALUES("200","212","61","GFD456","2");
INSERT INTO order_item7 VALUES("201","214","61","GFD456","1");
INSERT INTO order_item7 VALUES("202","215","61","GFD456","2");
INSERT INTO order_item7 VALUES("203","216","61","GFD456","2");
INSERT INTO order_item7 VALUES("204","231","61","GFD456","2");
INSERT INTO order_item7 VALUES("205","232","61","GFD456","2");
INSERT INTO order_item7 VALUES("206","233","61","GFD456","2");
INSERT INTO order_item7 VALUES("207","234","61","GFD456","2");
INSERT INTO order_item7 VALUES("208","235","61","GFD456","2");
INSERT INTO order_item7 VALUES("209","236","62","GHJ453","3");
INSERT INTO order_item7 VALUES("210","237","62","GHJ453","3");
INSERT INTO order_item7 VALUES("211","238","62","GHJ453","3");
INSERT INTO order_item7 VALUES("212","239","61","GFD456","2");
INSERT INTO order_item7 VALUES("213","240","61","GFD456","2");
INSERT INTO order_item7 VALUES("214","241","62","GHJ453","2");
INSERT INTO order_item7 VALUES("215","242","62","GHJ453","2");
INSERT INTO order_item7 VALUES("216","243","61","GFD456","2");
INSERT INTO order_item7 VALUES("217","244","61","GFD456","2");
INSERT INTO order_item7 VALUES("218","245","61","GFD456","1");
INSERT INTO order_item7 VALUES("219","246","61","GFD456","1");
INSERT INTO order_item7 VALUES("220","0","61","GFD456","1");
INSERT INTO order_item7 VALUES("221","0","61","GFD456","1");
INSERT INTO order_item7 VALUES("222","0","61","GFD456","2");
INSERT INTO order_item7 VALUES("223","0","61","GFD456","2");
INSERT INTO order_item7 VALUES("224","0","61","GFD456","2");
INSERT INTO order_item7 VALUES("225","0","61","GFD456","2");
INSERT INTO order_item7 VALUES("226","247","61","GFD456","2");
INSERT INTO order_item7 VALUES("227","248","61","GFD456","1");
INSERT INTO order_item7 VALUES("228","249","61","GFD456","1");
INSERT INTO order_item7 VALUES("229","250","61","GFD456","2");
INSERT INTO order_item7 VALUES("230","251","61","GFD456","2");
INSERT INTO order_item7 VALUES("231","252","61","GFD456","2");
INSERT INTO order_item7 VALUES("232","253","61","GFD456","2");
INSERT INTO order_item7 VALUES("233","254","61","GFD456","2");
INSERT INTO order_item7 VALUES("234","255","61","GFD456","2");
INSERT INTO order_item7 VALUES("235","256","61","GFD456","2");
INSERT INTO order_item7 VALUES("236","257","61","GFD456","1");
INSERT INTO order_item7 VALUES("237","257","62","GHJ453","1");
INSERT INTO order_item7 VALUES("238","258","61","GFD456","2");
INSERT INTO order_item7 VALUES("239","259","61","GFD456","1");
INSERT INTO order_item7 VALUES("240","260","62","GHJ453","2");
INSERT INTO order_item7 VALUES("241","261","61","GFD456","2");
INSERT INTO order_item7 VALUES("242","262","61","GFD456","1");
INSERT INTO order_item7 VALUES("243","263","61","GFD456","1");
INSERT INTO order_item7 VALUES("244","264","61","GFD456","2");
INSERT INTO order_item7 VALUES("245","265","61","GFD456","2");
INSERT INTO order_item7 VALUES("246","266","61","GFD456","2");
INSERT INTO order_item7 VALUES("247","267","61","GFD456","2");
INSERT INTO order_item7 VALUES("248","268","61","GFD456","2");
INSERT INTO order_item7 VALUES("249","269","61","GFD456","2");
INSERT INTO order_item7 VALUES("250","270","61","GFD456","3");
INSERT INTO order_item7 VALUES("251","271","61","GFD456","3");
INSERT INTO order_item7 VALUES("252","272","61","GFD456","1");
INSERT INTO order_item7 VALUES("253","273","62","GHJ453","1");
INSERT INTO order_item7 VALUES("254","274","61","GFD456","1");
INSERT INTO order_item7 VALUES("255","274","61","GFD456","2");
INSERT INTO order_item7 VALUES("256","275","61","GFD456","2");
INSERT INTO order_item7 VALUES("257","275","62","GHJ453","3");
INSERT INTO order_item7 VALUES("258","275","65","NBV345","4");
INSERT INTO order_item7 VALUES("259","276","61","GFD456","2");
INSERT INTO order_item7 VALUES("260","276","64","HYT123","3");
INSERT INTO order_item7 VALUES("261","276","64","HYT123","3");
INSERT INTO order_item7 VALUES("262","277","62","GHJ453","2");
INSERT INTO order_item7 VALUES("263","278","61","GFD456","2");
INSERT INTO order_item7 VALUES("264","279","61","GFD456","2");
INSERT INTO order_item7 VALUES("265","280","61","GFD456","1");
INSERT INTO order_item7 VALUES("266","281","61","GFD456","2");
INSERT INTO order_item7 VALUES("267","282","90","7601","5");
INSERT INTO order_item7 VALUES("268","283","63","QWE123","1");
INSERT INTO order_item7 VALUES("269","284","63","QWE123","2");
INSERT INTO order_item7 VALUES("270","285","63","QWE123","3");
INSERT INTO order_item7 VALUES("271","286","63","QWE123","3");
INSERT INTO order_item7 VALUES("272","287","63","QWE123","3");
INSERT INTO order_item7 VALUES("273","289","63","QWE123","2");
INSERT INTO order_item7 VALUES("274","290","63","QWE123","2");
INSERT INTO order_item7 VALUES("275","293","63","QWE123","2");
INSERT INTO order_item7 VALUES("276","294","64","HYT123","3");
INSERT INTO order_item7 VALUES("277","295","64","HYT123","3");
INSERT INTO order_item7 VALUES("278","296","63","QWE123","2");
INSERT INTO order_item7 VALUES("279","297","63","QWE123","2");
INSERT INTO order_item7 VALUES("280","299","65","NBV345","2");
INSERT INTO order_item7 VALUES("281","300","63","QWE123","2");
INSERT INTO order_item7 VALUES("282","301","63","QWE123","3");
INSERT INTO order_item7 VALUES("283","302","91","0","0");
INSERT INTO order_item7 VALUES("284","303","91","0","0");
INSERT INTO order_item7 VALUES("285","304","63","QWE123","2");
INSERT INTO order_item7 VALUES("286","305","63","QWE123","2");
INSERT INTO order_item7 VALUES("287","306","63","QWE123","2");
INSERT INTO order_item7 VALUES("288","307","63","QWE123","2");
INSERT INTO order_item7 VALUES("289","308","93","76278","3");
INSERT INTO order_item7 VALUES("290","309","100","3244","8");
INSERT INTO order_item7 VALUES("291","310","100","3244","3");
INSERT INTO order_item7 VALUES("292","311","100","3244","3");
INSERT INTO order_item7 VALUES("293","312","100","3244","2");
INSERT INTO order_item7 VALUES("294","313","100","3244","3");
INSERT INTO order_item7 VALUES("295","314","100","3244","3");
INSERT INTO order_item7 VALUES("296","315","100","3244","2");
INSERT INTO order_item7 VALUES("297","316","100","3244","3");
INSERT INTO order_item7 VALUES("298","317","100","3244","3");
INSERT INTO order_item7 VALUES("299","318","100","3244","3");
INSERT INTO order_item7 VALUES("300","319","100","3244","2");
INSERT INTO order_item7 VALUES("301","320","100","3244","2");
INSERT INTO order_item7 VALUES("302","320","102","al2323","3");
INSERT INTO order_item7 VALUES("303","321","108","","0");
INSERT INTO order_item7 VALUES("304","322","109","","0");
INSERT INTO order_item7 VALUES("305","323","108","","0");
INSERT INTO order_item7 VALUES("306","324","108","","0");
INSERT INTO order_item7 VALUES("307","325","109","","0");
INSERT INTO order_item7 VALUES("308","326","108","","0");
INSERT INTO order_item7 VALUES("309","327","109","","0");
INSERT INTO order_item7 VALUES("310","328","108","","0");
INSERT INTO order_item7 VALUES("311","329","100","3244","2");
INSERT INTO order_item7 VALUES("312","330","100","3244","2");
INSERT INTO order_item7 VALUES("313","331","108","","0");
INSERT INTO order_item7 VALUES("314","332","108","","0");
INSERT INTO order_item7 VALUES("315","333","100","3244","2");
INSERT INTO order_item7 VALUES("316","334","100","3244","3");
INSERT INTO order_item7 VALUES("317","335","100","3244","2");
INSERT INTO order_item7 VALUES("318","336","100","3244","3");
INSERT INTO order_item7 VALUES("319","337","100","3244","2");





CREATE TABLE `order_item8` (
  `order_item_id` int(255) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL DEFAULT '0',
  `product_id` int(11) NOT NULL DEFAULT '0',
  `hsn` varchar(255) NOT NULL,
  `feet` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `quantity` float NOT NULL,
  `rate` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `order_item_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`order_item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

INSERT INTO order_item8 VALUES("1","1","68","","0","8/4","1","","","32.00","1");
INSERT INTO order_item8 VALUES("2","2","73","","0","8/5","100","","","1000.00","1");
INSERT INTO order_item8 VALUES("3","2","72","","0","8/4","444","","","14652.00","1");
INSERT INTO order_item8 VALUES("4","2","70","","0","","213","","","85200.00","1");
INSERT INTO order_item8 VALUES("5","3","70","","0","22","1","","","33.00","1");
INSERT INTO order_item8 VALUES("6","7","70","","","22","1","","","2.94","1");
INSERT INTO order_item8 VALUES("7","7","73","","","22","1","","","2.94","1");
INSERT INTO order_item8 VALUES("8","8","70","","","22","1","","","2.94","1");
INSERT INTO order_item8 VALUES("9","8","73","","","22","1","","","2.94","1");
INSERT INTO order_item8 VALUES("10","9","70","","","22","1","","","2.94","1");
INSERT INTO order_item8 VALUES("11","9","73","","","22","1","","","2.94","1");
INSERT INTO order_item8 VALUES("12","10","70","","32.29","22","1","","","2.94","1");
INSERT INTO order_item8 VALUES("13","10","73","","32.29","22","1","","","2.94","1");
INSERT INTO order_item8 VALUES("14","11","70","","355.21","22","1","33","","32.34","1");
INSERT INTO order_item8 VALUES("15","11","83","","236.81","33","1","22","","21.56","1");
INSERT INTO order_item8 VALUES("16","12","93","","6805.80","10","22","632.28","","13910.16","1");
INSERT INTO order_item8 VALUES("17","13","93","","247.57","2","2","23","","44.62","1");
INSERT INTO order_item8 VALUES("18","14","93","","32.29","3","3","3","","8.73","1");
INSERT INTO order_item8 VALUES("19","15","93","","43.06","3","4.4","4","","9.86","1");
INSERT INTO order_item8 VALUES("20","16","93","","32.29","","2","3","","5.76","1");
INSERT INTO order_item8 VALUES("21","17","93","","32.29","","2","3","","5.76","1");
INSERT INTO order_item8 VALUES("22","18","93","","355.21","","3","33","","96.03","1");
INSERT INTO order_item8 VALUES("23","19","93","","32.29","","3","3","","8.73","1");
INSERT INTO order_item8 VALUES("24","20","93","","355.21","","3","33","","96.03","1");
INSERT INTO order_item8 VALUES("25","21","93","76278","32.29","","3","3","","8.73","1");
INSERT INTO order_item8 VALUES("26","22","93","76278","21.53","","1","2","4","0.00","1");
INSERT INTO order_item8 VALUES("27","23","93","76278","32.29","","3","3","0","8.73","1");
INSERT INTO order_item8 VALUES("28","24","106","646","236.81","","233","22","0","4972.22","1");





CREATE TABLE `order_item9` (
  `order_item_id` int(255) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL DEFAULT '0',
  `product_id` int(11) NOT NULL DEFAULT '0',
  `hns` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `size1` varchar(255) NOT NULL,
  `quantity` double NOT NULL,
  `rate` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `order_item_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`order_item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=200 DEFAULT CHARSET=latin1;

INSERT INTO order_item9 VALUES("1","155","72","","","0","1","43","","0");
INSERT INTO order_item9 VALUES("2","156","72","","3/4","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("3","157","72","","3/4","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("4","158","72","","4/5","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("5","158","73","","2/4","0","1","0","0.00","0");
INSERT INTO order_item9 VALUES("6","159","72","","3/4","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("7","159","73","","4/5","0","1","0","0.00","0");
INSERT INTO order_item9 VALUES("8","160","73","2323","3/4","0","1","0","0.00","0");
INSERT INTO order_item9 VALUES("9","160","72","2332","5/5","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("10","161","72","2332","3/5f","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("11","162","72","2332","3/5","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("12","163","73","2323","4","0","1","0","0.00","0");
INSERT INTO order_item9 VALUES("13","164","73","2323","4","0","1","0","0.00","0");
INSERT INTO order_item9 VALUES("14","165","73","2323","4","0","1","0","0.00","0");
INSERT INTO order_item9 VALUES("15","166","72","2332","","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("16","167","72","2332","","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("17","168","72","2332","","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("18","168","72","2332","","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("19","0","73","2323","","0","1","0","0.00","0");
INSERT INTO order_item9 VALUES("20","0","73","2323","","0","1","0","0.00","0");
INSERT INTO order_item9 VALUES("21","0","73","2323","","0","1","0","0.00","0");
INSERT INTO order_item9 VALUES("22","0","73","2323","","0","1","0","0.00","0");
INSERT INTO order_item9 VALUES("23","0","72","2332","3","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("24","0","72","2332","","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("25","0","72","2332","","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("26","0","73","2323","","0","1","0","0.00","0");
INSERT INTO order_item9 VALUES("27","0","72","2332","","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("28","0","72","2332","4/5","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("29","0","72","2332","","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("30","0","73","2323","","0","1","0","0.00","0");
INSERT INTO order_item9 VALUES("31","0","72","2332","","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("32","0","72","2332","","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("33","0","73","2323","","0","1","0","0.00","0");
INSERT INTO order_item9 VALUES("34","0","72","2332","","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("35","0","72","2332","","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("36","0","73","2323","","0","1","0","0.00","0");
INSERT INTO order_item9 VALUES("37","0","72","2332","","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("38","0","72","2332","3/4","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("39","0","72","2332","","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("40","0","72","2332","","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("41","0","72","2332","4/5","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("42","170","72","2332","4","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("43","171","72","2332","4","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("44","0","72","2332","","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("45","172","72","2332","","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("46","173","72","2332","3","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("47","174","72","2332","","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("48","175","72","2332","","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("49","176","72","2332","","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("50","177","72","2332","","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("51","178","72","2332","","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("52","179","72","2332","","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("53","180","72","2332","","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("54","181","73","2323","","0","1","0","0.00","0");
INSERT INTO order_item9 VALUES("55","182","72","2332","3","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("56","183","72","2332","3","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("57","184","72","2332","","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("58","185","72","2332","4f","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("59","186","72","2332","4","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("60","186","73","2323","3","0","1","0","0.00","0");
INSERT INTO order_item9 VALUES("61","187","72","2332","4","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("62","188","73","2323","","0","1","0","0.00","0");
INSERT INTO order_item9 VALUES("63","189","73","2323","3","0","1","0","0.00","0");
INSERT INTO order_item9 VALUES("64","190","72","2332","3","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("65","191","72","2332","","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("66","192","72","2332","","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("67","193","72","2332","4/5f","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("68","194","72","2332","23","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("69","195","72","2332","3","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("70","196","72","2332","3","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("71","197","72","2332","3","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("72","198","73","2323","","0","1","0","0.00","0");
INSERT INTO order_item9 VALUES("73","199","72","2332","3","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("74","200","73","2323","33","0","1","0","0.00","0");
INSERT INTO order_item9 VALUES("75","201","73","2323","33","0","1","0","0.00","0");
INSERT INTO order_item9 VALUES("76","202","73","2323","33","0","1","0","0.00","0");
INSERT INTO order_item9 VALUES("77","203","72","2332","","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("78","204","72","2332","","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("79","205","72","2332","2","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("80","207","72","2332","","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("81","208","72","2332","","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("82","209","72","2332","3f","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("83","210","72","2332","3f","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("84","211","72","2332","3f","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("85","212","72","2332","3","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("86","214","72","2332","","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("87","215","72","2332","2","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("88","216","72","2332","","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("89","231","70","7604","","0","1","0","0.00","0");
INSERT INTO order_item9 VALUES("90","232","70","7604","","0","1","0","0.00","0");
INSERT INTO order_item9 VALUES("91","233","70","7604","","0","1","0","0.00","0");
INSERT INTO order_item9 VALUES("92","234","72","2332","","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("93","235","70","7604","2","0","1","22","22.00","0");
INSERT INTO order_item9 VALUES("94","236","70","7604","22","0","1","22","22.00","0");
INSERT INTO order_item9 VALUES("95","237","70","7604","22","0","1","22","22.00","0");
INSERT INTO order_item9 VALUES("96","238","70","7604","22","0","1","22","22.00","0");
INSERT INTO order_item9 VALUES("97","239","73","2323","2","0","1","0","0.00","0");
INSERT INTO order_item9 VALUES("98","240","70","7604","2","0","1","2","2.00","0");
INSERT INTO order_item9 VALUES("99","241","70","7604","22","0","11","2","22.00","0");
INSERT INTO order_item9 VALUES("100","242","70","7604","22","0","11","2","22.00","0");
INSERT INTO order_item9 VALUES("101","243","72","2332","22","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("102","244","72","2332","22","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("103","245","72","2332","22","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("104","246","72","2332","22","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("105","0","72","2332","22","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("106","0","72","2332","22","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("107","0","70","7604","22","0","1","22","22.00","0");
INSERT INTO order_item9 VALUES("108","0","70","7604","22","0","1","22","22.00","0");
INSERT INTO order_item9 VALUES("109","0","70","7604","22","0","1","22","22.00","0");
INSERT INTO order_item9 VALUES("110","0","83","22323","2","0","2","22","44.00","0");
INSERT INTO order_item9 VALUES("111","247","83","22323","2","0","2","22","44.00","0");
INSERT INTO order_item9 VALUES("112","248","70","7604","22","0","1","22","22.00","0");
INSERT INTO order_item9 VALUES("113","249","70","7604","22","0","1","22","22.00","0");
INSERT INTO order_item9 VALUES("114","250","73","2323","22","0","1","22","22.00","0");
INSERT INTO order_item9 VALUES("115","251","73","2323","2","0","1","22","22.00","0");
INSERT INTO order_item9 VALUES("116","252","73","2323","2","0","1","22","22.00","0");
INSERT INTO order_item9 VALUES("117","253","73","2323","2","0","1","22","22.00","0");
INSERT INTO order_item9 VALUES("118","254","83","22323","1","0","1","2","2.00","0");
INSERT INTO order_item9 VALUES("119","255","83","22323","1","0","1","2","2.00","0");
INSERT INTO order_item9 VALUES("120","256","70","7604","22","0","1","220","220.00","0");
INSERT INTO order_item9 VALUES("121","257","83","22323","22","0","1","22","22.00","0");
INSERT INTO order_item9 VALUES("122","258","70","7604","2","0","2","33","66.00","0");
INSERT INTO order_item9 VALUES("123","258","73","2323","3","0","2","33","66.00","0");
INSERT INTO order_item9 VALUES("124","259","73","2323","22","0","1","11","11.00","0");
INSERT INTO order_item9 VALUES("125","260","73","2323","22","0","2","22","44.00","0");
INSERT INTO order_item9 VALUES("126","261","73","2323","","0","2","22","44.00","0");
INSERT INTO order_item9 VALUES("127","262","73","2323","","0","1","22","22.00","0");
INSERT INTO order_item9 VALUES("128","263","83","22323","22","0","1","22","22.00","0");
INSERT INTO order_item9 VALUES("129","264","83","22323","22f","0","1","22","22.00","0");
INSERT INTO order_item9 VALUES("130","265","73","2323","22","0","1","2","2.00","0");
INSERT INTO order_item9 VALUES("131","266","73","2323","22","0","1","11","11.00","0");
INSERT INTO order_item9 VALUES("132","267","70","7604","2","0","1","22","22.00","0");
INSERT INTO order_item9 VALUES("133","268","72","2332","2f","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("134","269","73","2323","2","0","0","22","0.00","0");
INSERT INTO order_item9 VALUES("135","270","73","2323","2","0","1","0","0.00","0");
INSERT INTO order_item9 VALUES("136","271","73","2323","2","0","1","0","0.00","0");
INSERT INTO order_item9 VALUES("137","272","83","22323","2","0","1","1","0.00","0");
INSERT INTO order_item9 VALUES("138","273","70","7604","3","0","1","0","0.00","0");
INSERT INTO order_item9 VALUES("139","274","70","7604","2","0","1","22","22.00","0");
INSERT INTO order_item9 VALUES("140","274","73","2323","1","0","32","2","64.00","0");
INSERT INTO order_item9 VALUES("141","275","73","2323","","0","2","22","44.00","0");
INSERT INTO order_item9 VALUES("142","275","83","22323","","0","2","22","44.00","0");
INSERT INTO order_item9 VALUES("143","275","88","ere232","","0","2","22","44.00","0");
INSERT INTO order_item9 VALUES("144","276","72","2332","","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("145","276","83","22323","","0","1","22","22.00","0");
INSERT INTO order_item9 VALUES("146","277","73","2323","22","0","1","22","22.00","0");
INSERT INTO order_item9 VALUES("147","278","73","2323","2","0","1","22","22.00","0");
INSERT INTO order_item9 VALUES("148","279","73","2323","2","0","1","22","22.00","0");
INSERT INTO order_item9 VALUES("149","280","73","2323","22","0","1","22","22.00","0");
INSERT INTO order_item9 VALUES("150","281","83","22323","2","0","1","22","22.00","0");
INSERT INTO order_item9 VALUES("151","282","89","7605","3","0","6","13","78.00","0");
INSERT INTO order_item9 VALUES("152","283","70","7604","2","0","6","22","132.00","0");
INSERT INTO order_item9 VALUES("153","284","73","2323","22","0","44","22","968.00","0");
INSERT INTO order_item9 VALUES("154","285","83","22323","2","0","4","2","8.00","0");
INSERT INTO order_item9 VALUES("155","286","83","22323","2","0","4","2","8.00","0");
INSERT INTO order_item9 VALUES("156","287","83","22323","2","0","4","2","8.00","0");
INSERT INTO order_item9 VALUES("157","288","70","7604","2","0","4","22","88.00","0");
INSERT INTO order_item9 VALUES("158","289","70","7604","2","0","6","033","198.00","0");
INSERT INTO order_item9 VALUES("159","290","72","2332","2","0","4","3f","172.00","0");
INSERT INTO order_item9 VALUES("160","293","72","2332","2","0","4","4322","172.00","0");
INSERT INTO order_item9 VALUES("161","294","70","7604","2","0","6","2","0.00","0");
INSERT INTO order_item9 VALUES("162","295","70","7604","2","0","6","2","0.00","0");
INSERT INTO order_item9 VALUES("163","296","70","7604","2","0","4","2","8.00","0");
INSERT INTO order_item9 VALUES("164","297","72","2332","2","0","4","433","172.00","0");
INSERT INTO order_item9 VALUES("165","298","72","2332","2","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("166","299","72","2332","2","0","1","43","43.00","0");
INSERT INTO order_item9 VALUES("167","300","72","2332","2","0","4","4322","172.00","0");
INSERT INTO order_item9 VALUES("168","301","72","2332","3","0","9","43","387.00","0");
INSERT INTO order_item9 VALUES("169","302","83","22323","3","0","9","33","297.00","0");
INSERT INTO order_item9 VALUES("170","303","73","2323","","0","1","0","0.00","0");
INSERT INTO order_item9 VALUES("171","304","72","2332","2","0","44","43","1892.00","0");
INSERT INTO order_item9 VALUES("172","305","70","7604","2","0","6","33","198.00","0");
INSERT INTO order_item9 VALUES("173","306","70","7604","2","0","6","33","198.00","0");
INSERT INTO order_item9 VALUES("174","307","70","7604","3","0","9","3","27.00","0");
INSERT INTO order_item9 VALUES("175","308","93","76278","3","0","9","3","27.00","0");
INSERT INTO order_item9 VALUES("176","309","104","33s","8","0","32","44","1408.00","0");
INSERT INTO order_item9 VALUES("177","312","104","33s","8","0","16","22","352.00","0");
INSERT INTO order_item9 VALUES("178","316","104","33s","3","0","9","3","27.00","0");
INSERT INTO order_item9 VALUES("179","317","104","33s","3","4","12","33","396.00","0");
INSERT INTO order_item9 VALUES("180","318","106","646","3","5","15","44","660.00","0");
INSERT INTO order_item9 VALUES("181","319","106","646","3","3","9","3","27.00","0");
INSERT INTO order_item9 VALUES("182","320","104","33s","3","3","9","33","297.00","0");
INSERT INTO order_item9 VALUES("183","321","106","646","3","4","12","4","48.00","0");
INSERT INTO order_item9 VALUES("184","322","106","646","3","4","12","4","48.00","0");
INSERT INTO order_item9 VALUES("185","323","106","646","3","4","12","44","528.00","0");
INSERT INTO order_item9 VALUES("186","324","106","646","3","4","12","44","528.00","0");
INSERT INTO order_item9 VALUES("187","325","106","646","3","4","12","44","528.00","0");
INSERT INTO order_item9 VALUES("188","326","110","","","","1","0","0.00","0");
INSERT INTO order_item9 VALUES("189","327","109","","","","1","0","0.00","0");
INSERT INTO order_item9 VALUES("190","328","108","","","","1","0","0.00","0");
INSERT INTO order_item9 VALUES("191","329","106","646","3","3","9","33","297.00","0");
INSERT INTO order_item9 VALUES("192","330","106","646","2","3","6","3","18.00","0");
INSERT INTO order_item9 VALUES("193","331","106","646","4","4","16","3","48.00","0");
INSERT INTO order_item9 VALUES("194","332","106","646","3","4","12","3","36.00","0");
INSERT INTO order_item9 VALUES("195","333","109","","","","1","0","0.00","0");
INSERT INTO order_item9 VALUES("196","334","104","33s","3","4","12","44","528.00","0");
INSERT INTO order_item9 VALUES("197","335","106","646","3","3","9","33","297.00","0");
INSERT INTO order_item9 VALUES("198","336","104","33s","3","4","12","33","396.00","0");
INSERT INTO order_item9 VALUES("199","337","106","646","3","3","9","33","297.00","0");





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
) ENGINE=InnoDB AUTO_INCREMENT=231 DEFAULT CHARSET=latin1;

INSERT INTO orders VALUES("215","2018-04-16","gsf3424","0","","","","","","","0","","","","0","","","","","","","0","0","0");
INSERT INTO orders VALUES("229","2018-04-18","45345","0","AAA","","","9","9","0","0","900","900","0","0","","","0","11800.00","10000","1800.00","2","2","1");
INSERT INTO orders VALUES("230","2018-04-18","342","0","AAA","","","9","9","9","0","653.4","653.4","653.4","0","","","0","9220.20","8000","1220.20","2","3","1");





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
  `gst` varchar(255) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_contact` varchar(255) NOT NULL,
  `product1quantity` int(255) NOT NULL,
  `product1rate` int(255) NOT NULL,
  `product1total` int(255) NOT NULL,
  `product2total` varchar(255) NOT NULL,
  `product3total` varchar(255) NOT NULL,
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
  `aluminium` varchar(255) NOT NULL,
  `material` varchar(255) NOT NULL,
  `acpsheet` varchar(255) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=338 DEFAULT CHARSET=latin1;

INSERT INTO orders3 VALUES("308","2018-04-18","1","32","ddd","32 ","3","213","639","","","","9","9","9","58.67999999999999","58.67999999999999","58.67999999999999","0","","","3","825.04","33","792.04","2","1","1","1","","");
INSERT INTO orders3 VALUES("309","2018-04-18","309","32","ddd","824.04 ","40","213","8520","","","","9","9","9","768.8700000000001","768.8700000000001","768.8700000000001","0","","","3","10846.61","44","10802.61","2","1","1","1","","");
INSERT INTO orders3 VALUES("310","2018-04-18","310","32","ddd","11626.65 ","2","213","426","","","","9","9","9","39.33","39.33","39.33","0","","","33","518.99","44","474.99","2","1","1","1","","");
INSERT INTO orders3 VALUES("311","2018-04-18","311","32","ddd","12101.64 ","2","213","426","","","","9","9","9","39.33","39.33","39.33","0","","","33","518.99","33","485.99","2","1","1","1","","");
INSERT INTO orders3 VALUES("312","2018-04-18","312","32","ddd","12587.63 ","3","213","639","","","","9","9","9","59.58","59.58","59.58","0","","","33","804.74","33","771.74","2","1","1","1","","");
INSERT INTO orders3 VALUES("313","2018-04-18","313","32","ddd","13359.37 ","3","213","639","","","","9","9","9","59.58","59.58","59.58","0","","","0","840.74","33","807.74","2","1","1","1","","");
INSERT INTO orders3 VALUES("314","2018-04-19","314","32","ddd","14167.11 ","3","213","639","","","","9","9","9","106.02","106.02","106.02","0","","","33","1460.06","44","1416.06","2","1","1","1","","");
INSERT INTO orders3 VALUES("315","2018-04-18","315","32","ddd","15583.17 ","3","213","639","","","","9","9","9","59.58","59.58","59.58","0","","","33","804.74","33","771.74","2","1","1","1","","");
INSERT INTO orders3 VALUES("316","2018-04-18","316","32","ddd","16354.91 ","3","213","639","","","","9","9","9","59.58","59.58","59.58","0","","","33","804.74","33","771.74","2","1","1","1","","");
INSERT INTO orders3 VALUES("317","2018-04-18","317","32","ddd","17126.65 ","3","213","639","","","","9","9","9","59.58","59.58","59.58","0","","","3","837.74","44","793.74","2","1","1","1","","");
INSERT INTO orders3 VALUES("318","2018-04-18","318","32","ddd","17920.39 ","2","213","426","","","","9","9","9","99.81","99.81","99.81","0","","","0","1399.43","1233","166.43","2","2","1","123","","");
INSERT INTO orders3 VALUES("319","2018-04-18","319","32","ddd","18086.82 ","2","213","426","","","","9","9","9","41.76","41.76","41.76","0","","","33","553.28","333","220.28","2","1","1","2","","");
INSERT INTO orders3 VALUES("320","2018-04-18","320","32","ddd","18307.1 ","3","213","639","","","","9","9","9","81.27","81.27","81.27","0","","","33","1146.81","334","812.81","2","1","1","2","","");
INSERT INTO orders3 VALUES("321","2018-04-18","321","32","ddd","19119.91 ","0","213","0","","","","9","9","9","1.3499999999999999","1.3499999999999999","1.3499999999999999","0","","","33","19.05","33","-13.95","2","1","1","1","","");
INSERT INTO orders3 VALUES("322","2018-04-18","322","32","ddd","19105.96 ","0","213","0","","","","9","9","9","1.3499999999999999","1.3499999999999999","1.3499999999999999","0","","","33","19.05","22","-2.95","2","1","1","1","","");
INSERT INTO orders3 VALUES("323","2018-04-11","323","32","ddd","19103.01 ","0","213","0","","","","9","9","9","44.550000000000004","44.550000000000004","44.550000000000004","0","","","33","628.65","33","601.56","2","1","1","1","","");
INSERT INTO orders3 VALUES("324","2018-04-11","323","32","ddd","19103.01 ","0","213","0","","","","9","9","9","44.550000000000004","44.550000000000004","44.550000000000004","0","","","33","628.65","33","601.56","2","1","1","1","","");
INSERT INTO orders3 VALUES("325","2018-04-18","325","32","ddd","20306.13 ","0","213","0","0"," 528.00","","9","9","9","44.550000000000004","44.550000000000004","44.550000000000004","0","","","33","628.65","33","595.65","2","1","1","1","","");
INSERT INTO orders3 VALUES("326","2018-04-18","326","32","ddd","20901.78 ","0","213","0","23"," 0.00","","9","9","9","-0.9","-0.9","-0.9","0","","","33","-12.70","33","-45.70","3","1","1","3","","");
INSERT INTO orders3 VALUES("327","2018-04-18","327","32","ddd","20856.08 ","0","213","0","11"," 0.00","","9","9","9","0.99","0.99","0.99","0","","","3","10.97","3","7.97","2","1","1","3","","");
INSERT INTO orders3 VALUES("328","2018-04-18","328","32","ddd","20864.05 ","0","213","0","23"," 0.00","","9","9","9","0.09","0.09","0.09","0","","","22","1.27","3","-1.73","2","1","1","3","","");
INSERT INTO orders3 VALUES("329","2018-04-18","329","32","ddd","20862.32 ","2","213","426","0"," 297.00","","9","9","9","63.089999999999996","63.089999999999996","63.089999999999996","0","","","22","890.27","333","557.27","2","1","1","12","","");
INSERT INTO orders3 VALUES("330","2018-04-18","330","32","ddd","21419.59 ","2","213","426","0"," 18.00","","9","9","9","39.96","39.96","39.96","0","","","33","527.88","33","494.88","2","1","1","12","","");
INSERT INTO orders3 VALUES("331","2018-04-18","331","32","ddd","21914.47 ","0","213","0","23"," 48.00","","9","9","9","3.42","3.42","3.42","0","","","33","48.26","34","14.26","2","1","1","13","","");
INSERT INTO orders3 VALUES("332","2018-04-25","332","32","ddd","21928.73 ","0","213","0","23"," 36.00","","9","9","9","5.040000000000001","5.040000000000001","5.040000000000001","0","","","3","71.12","33","38.12","2","1","1","13","","");
INSERT INTO orders3 VALUES("333","2018-04-18","333","32","ddd","21966.85 ","3","213","639","23"," 0.00","","9","9","9","59.4","59.4","59.4","0","","","2","838.20","33","805.20","2","1","1","23","","");
INSERT INTO orders3 VALUES("334","2018-04-18","334","32","ddd","22772.05 ","2","213","426","11"," 528.00","","9","9","9","83.88","83.88","83.88","0","","","33","1183.64","333","850.64","2","1","1","123","","");
INSERT INTO orders3 VALUES("335","2018-04-18","335","32","ddd","23622.69 ","2","213","426","0"," 297.00","","9","9","9","64.89","64.89","64.89","0","","","2","915.67","33","882.67","2","1","1","12","","");
INSERT INTO orders3 VALUES("336","2018-04-18","336","32","ddd","24505.36 ","2","213","426","11"," 396.00","","9","9","9","72.99","72.99","72.99","0","","","22","1007.97","222","785.97","2","1","1","12","","");
INSERT INTO orders3 VALUES("337","2018-04-18","337","32","ddd","25291.33 ","33","213","7029","11"," 297.00","","9","9","9","658.35","658.35","658.35","0","","","22","9268.05","344","8924.05","2","1","1","1","","");





CREATE TABLE `orders4` (
  `order_id` int(255) NOT NULL AUTO_INCREMENT,
  `order_date` date NOT NULL,
  `billno` varchar(255) NOT NULL,
  `gstno` varchar(255) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

INSERT INTO orders4 VALUES("24","2018-04-18","324","SF4D333D3D33D","AAA","","","9","9","0","0","447.4998","447.4998","0","0","","","0","5867.22","3456","2411.22","2","1","1");





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
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

INSERT INTO product1 VALUES("3","dd","34334");
INSERT INTO product1 VALUES("4","vv","4343");
INSERT INTO product1 VALUES("5","ff","333");
INSERT INTO product1 VALUES("6","deee","");
INSERT INTO product1 VALUES("7","sdds","");
INSERT INTO product1 VALUES("8","43","");
INSERT INTO product1 VALUES("9","singel guru","");
INSERT INTO product1 VALUES("10","singel guru 16 feet","");
INSERT INTO product1 VALUES("11","singel guru 14 feet","");
INSERT INTO product1 VALUES("12","Doubel guru 12 feet","");
INSERT INTO product1 VALUES("13","Doubel guru 14 feet","");
INSERT INTO product1 VALUES("14","Doubel guru 16 feet","");
INSERT INTO product1 VALUES("15","acp sheet","");
INSERT INTO product1 VALUES("16","ALUMINIUM SECTION","");
INSERT INTO product1 VALUES("17","BROWN ","");
INSERT INTO product1 VALUES("18","ddee","");
INSERT INTO product1 VALUES("19","abdulaluminium","");
INSERT INTO product1 VALUES("20","alu pro","");
INSERT INTO product1 VALUES("21","nil","");
INSERT INTO product1 VALUES("22","ALUMINUM SECTION","");
INSERT INTO product1 VALUES("23","blue acpsheet","");
INSERT INTO product1 VALUES("24","srd","");
INSERT INTO product1 VALUES("25","alum22","");
INSERT INTO product1 VALUES("26","ALUMINUM SETION","");
INSERT INTO product1 VALUES("27","aluminium","");
INSERT INTO product1 VALUES("28","nill","");
INSERT INTO product1 VALUES("29","zore","");





CREATE TABLE `product1rate` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `cgst` int(255) NOT NULL,
  `sgst` int(255) NOT NULL,
  `igst` int(255) NOT NULL,
  `Rate` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO product1rate VALUES("1","9","9","9","213");





CREATE TABLE `product3` (
  `product_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `hns` varchar(255) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO product3 VALUES("6","ACP SHEET","");
INSERT INTO product3 VALUES("7","blueacpsheet","");
INSERT INTO product3 VALUES("8","ds2","");
INSERT INTO product3 VALUES("9","acp product","");
INSERT INTO product3 VALUES("10","nill","");
INSERT INTO product3 VALUES("11","zero","");





CREATE TABLE `product4` (
  `product_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `hns` varchar(255) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO product4 VALUES("1","brown","");
INSERT INTO product4 VALUES("2","pink","");
INSERT INTO product4 VALUES("3","dee","");
INSERT INTO product4 VALUES("4","xxxxxxxxxx","");





CREATE TABLE `product5` (
  `product_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `hns` varchar(255) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO product5 VALUES("1","fgd","");
INSERT INTO product5 VALUES("2","xx2","");
INSERT INTO product5 VALUES("3","abdulmaterial","");
INSERT INTO product5 VALUES("5","SCREWS","");
INSERT INTO product5 VALUES("8","df","");
INSERT INTO product5 VALUES("9","clip","");
INSERT INTO product5 VALUES("10","nill","");
INSERT INTO product5 VALUES("11","zero","");





CREATE TABLE `production` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `hns` varchar(255) NOT NULL,
  `quantity` float NOT NULL,
  `cost_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=latin1;

INSERT INTO production VALUES("100","ALUMINUM SETION","3244","-3","0","0");
INSERT INTO production VALUES("102","aluminium","al2323","-3","0","0");
INSERT INTO production VALUES("104","ds2","33s","-71","0","0");
INSERT INTO production VALUES("105","df","23","-12","0","23");
INSERT INTO production VALUES("106","acp product","646","70.81","0","0");
INSERT INTO production VALUES("107","clip","3434","58","0","11");
INSERT INTO production VALUES("111","zore","","0","0","0");
INSERT INTO production VALUES("112","zero","","0","0","0");
INSERT INTO production VALUES("113","zero","","0","0","0");





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
  `gst` varchar(255) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `note` varchar(500) NOT NULL,
  PRIMARY KEY (`suplier_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

INSERT INTO supliers VALUES("36","ddd","232","23","32","","34215.38");
INSERT INTO supliers VALUES("37","sfsd","dsfsdf","3432423","dsfsdf3w32ss","","");





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






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
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `due` int(255) NOT NULL,
  `note` varchar(500) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

INSERT INTO customer VALUES("51","deeeep","ifghjf","23656","9213","1367");
INSERT INTO customer VALUES("52","","","","0","");
INSERT INTO customer VALUES("53","vxcx","45","54","0","45");
INSERT INTO customer VALUES("54","xxx","sss","333","2","33");
INSERT INTO customer VALUES("55","dddd","333","333","606","44");
INSERT INTO customer VALUES("56","hari","fkjhjk","4343","100","44");





CREATE TABLE `customerduepay` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_date` date NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `due` int(255) NOT NULL,
  `payamount` int(255) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO customerduepay VALUES("11","2018-03-13","deeeep","1784","500");





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
) ENGINE=InnoDB AUTO_INCREMENT=411 DEFAULT CHARSET=latin1;

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





CREATE TABLE `order_item3` (
  `order_item_id` int(255) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL DEFAULT '0',
  `product_id` int(11) NOT NULL DEFAULT '0',
  `quantity` double NOT NULL,
  `rate` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `order_item_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`order_item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO order_item3 VALUES("1","0","37","10","87","870.00","1");
INSERT INTO order_item3 VALUES("2","2","37","11","87","1131.00","1");
INSERT INTO order_item3 VALUES("3","3","37","13","87","1131.00","1");





CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_date` date NOT NULL,
  `billno` varchar(255) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=212 DEFAULT CHARSET=latin1;

INSERT INTO orders VALUES("196","2018-03-13","98676","deeeep"," ","","","","","0","","","","0","","","0","4350.00","2566","1784.00","2","2","1");
INSERT INTO orders VALUES("197","2018-03-14","34453","deeeep","1284 ","","","","","0","","","","0","","","0","87.00","4","83.00","2","1","1");
INSERT INTO orders VALUES("198","2018-03-14","423423","deeeep","0 ","","","","","222","","","","0","","","0","8700.00","23","8677.00","2","1","1");
INSERT INTO orders VALUES("199","2018-03-15","222","deeeep","8677 ","","","","","0","","","","0","","","2","206.00","2","204.00","2","1","1");
INSERT INTO orders VALUES("200","2018-03-22","3213","deeeep","8881 ","","","","","0","","","","0","","","3","84.00","3","81.00","2","1","1");
INSERT INTO orders VALUES("201","2018-03-15","3424","deeeep","8962 ","","","","","0","","","","0","","","0","87.00","33","54.00","2","1","1");
INSERT INTO orders VALUES("202","2018-03-15","213","deeeep","9016 ","","","","","0","","","","0","","","0","-98.00","44","-142.00","2","1","1");
INSERT INTO orders VALUES("203","2018-03-15","24324","deeeep","8874 ","","","","","0","","","","0","","","3","91.83","33","58.83","2","1","1");
INSERT INTO orders VALUES("204","2018-03-15","3243423","deeeep","8933 ","","","","","0","","","","0","","","3","90.09","33","57.09","2","1","1");
INSERT INTO orders VALUES("205","2018-03-15","24423","deeeep","8990 ","","2","2","2","78","1.74","1.74","1.74","0","","","3","89.22","34","55.22","2","1","1");
INSERT INTO orders VALUES("206","2018-03-15","45345","xxx","0 ","","2.5","2.5","0","0","1.36","1.36","0.00","0","","","4","66.72","33","33.72","2","1","1");
INSERT INTO orders VALUES("207","2018-03-15","3434","deeeep","9045 ","","2","2","2","134","5.06","5.06","5.06","0","","","0","268.18","23","245.18","2","1","1");
INSERT INTO orders VALUES("208","2018-03-15","344334","dddd","0 ","","2.5","2.5","0","80","1.56","1.56","0.00","0","","","0","81.12","35","46.12","2","1","1");
INSERT INTO orders VALUES("209","2018-03-15","4434","dddd","46 ","","2","2","2","150","11.00","11.00","11.00","0","","","0","583.00","23","560.00","2","1","1");
INSERT INTO orders VALUES("210","2018-03-15","3776","hari","0 ","","5","6","7","150","89.00","106.80","124.60","0","","","0","2100.40","2000","100.40","2","1","1");
INSERT INTO orders VALUES("211","2018-04-03","808979","xxx","34 ","","2","34","4","0","0.9","15.3","1.8","0","","","66","-9.00","7","-16.00","2","2","1");





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
  `client_name` varchar(255) NOT NULL,
  `client_contact` varchar(255) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO orders3 VALUES("1","2018-04-05","3333",""," ","","2","1","2","17.4","8.7","17.4","0","","","2","911.50","222","689.50","2","1","1");
INSERT INTO orders3 VALUES("2","2018-04-05","343",""," ","","2","1","2","22.62","11.31","22.62","0","","","33","1151.55","333","818.55","2","1","1");
INSERT INTO orders3 VALUES("3","2018-04-12","2342","abdulak","1753.05 ","","2","1","2","22.62","11.31","22.62","0","","","33","1151.55","333","818.55","2","1","1");





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





CREATE TABLE `production` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `hns` varchar(255) NOT NULL,
  `quantity` float NOT NULL,
  `cost_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

INSERT INTO production VALUES("37","sugarecan","","68","0","87");
INSERT INTO production VALUES("38","","","0","0","0");
INSERT INTO production VALUES("39","seeni","322","2","0","34");
INSERT INTO production VALUES("40","dee","3423","9","0","34");
INSERT INTO production VALUES("41","sss","233","4","0","45");
INSERT INTO production VALUES("42","seeni555","3463647","1","0","33");
INSERT INTO production VALUES("43","tea","","0","0","0");
INSERT INTO production VALUES("44","55","","0","0","0");
INSERT INTO production VALUES("45","tea","","0","0","0");
INSERT INTO production VALUES("46","sugarrrr","mnds11","1","0","450");
INSERT INTO production VALUES("47","ssuuuggaarr","zxcz44","4","0","100");
INSERT INTO production VALUES("48","seeni44","1701","1","0","1780");
INSERT INTO production VALUES("49","","","0","0","0");





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
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

INSERT INTO sale_return VALUES("35","0","","4","2018-03-13","mat ice cream","","65","13","0","0");





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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO suplierduepay VALUES("10","2018-03-13","abdulak","345","100");





CREATE TABLE `supliers` (
  `suplier_id` int(11) NOT NULL AUTO_INCREMENT,
  `suplier_name` varchar(100) NOT NULL,
  `suplier_address` varchar(100) NOT NULL,
  `suplier_contact` varchar(100) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `note` varchar(500) NOT NULL,
  PRIMARY KEY (`suplier_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

INSERT INTO supliers VALUES("26","abdulak","uhfhjfhj","151599156","","2571.6");





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




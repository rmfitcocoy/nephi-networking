/*
SQLyog Community v12.5.0 (64 bit)
MySQL - 5.5.11 : Database - nephi_networking_local
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`nephi_networking_local` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `nephi_networking_local`;

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `categoryid` bigint(20) NOT NULL,
  `categoryname` varchar(70) DEFAULT NULL,
  `categorydescription` varchar(150) DEFAULT NULL,
  `datecreated` datetime DEFAULT NULL,
  `dateupdated` datetime DEFAULT NULL,
  `isactive` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`categoryid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `category` */

insert  into `category`(`categoryid`,`categoryname`,`categorydescription`,`datecreated`,`dateupdated`,`isactive`) values 
(1,'product here','description','2019-03-06 17:36:15','2019-03-08 21:43:39',1),
(2,'blba','fasdf','2019-03-06 22:01:07','2019-03-06 22:01:07',1),
(3,'blba','fasdf','2019-03-06 22:14:22','2019-03-06 22:14:22',1),
(4,'test','testwestsag','2019-03-06 22:59:10','2019-03-06 22:59:10',1);

/*Table structure for table `customer` */

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `customerid` bigint(20) NOT NULL,
  `firstname` varchar(35) DEFAULT NULL,
  `lastname` varchar(35) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `phonenumber` varchar(25) DEFAULT NULL,
  `address` varchar(70) DEFAULT NULL,
  `province` varchar(70) DEFAULT NULL,
  `datecreated` datetime DEFAULT NULL,
  `dateupdated` datetime DEFAULT NULL,
  `isactive` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`customerid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `customer` */

insert  into `customer`(`customerid`,`firstname`,`lastname`,`email`,`phonenumber`,`address`,`province`,`datecreated`,`dateupdated`,`isactive`) values 
(1,'_firstname here','_lastname','_email','_phonenumber','_address','_province','2019-03-06 23:00:24','2019-03-08 21:44:56',0),
(2,'_firstname','_lastname','_email','rtyu3456789','address here','province herheasdhfasd fasdjf;laksjf; asf','2019-03-06 23:00:42','2019-03-06 23:00:42',1),
(3,'_firstname','_lastname','_email','rtyu3456789','address here','province herheasdhfasd fasdjf;laksjf; asf','2019-03-06 23:00:43','2019-03-06 23:00:43',1),
(4,'_firstname','_lastname','_email','rtyu3456789','address here','province herheasdhfasd fasdjf;laksjf; asf','2019-03-06 23:00:43','2019-03-06 23:00:43',1);

/*Table structure for table `orderdetail` */

DROP TABLE IF EXISTS `orderdetail`;

CREATE TABLE `orderdetail` (
  `orderdetailid` bigint(20) NOT NULL,
  `orderid` bigint(20) DEFAULT NULL,
  `productid` bigint(20) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`orderdetailid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `orderdetail` */

insert  into `orderdetail`(`orderdetailid`,`orderid`,`productid`,`quantity`,`price`) values 
(1,1,1,100,1.20),
(2,1,1,10,2.00);

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `orderid` bigint(20) NOT NULL,
  `customerid` bigint(20) DEFAULT NULL,
  `paymentcode` varchar(70) DEFAULT NULL,
  `shippingfee` decimal(10,2) DEFAULT NULL,
  `transactstatus` varchar(70) DEFAULT NULL,
  `paymentdate` date DEFAULT NULL,
  `paidamount` decimal(10,2) DEFAULT NULL,
  `shippers` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `orders` */

insert  into `orders`(`orderid`,`customerid`,`paymentcode`,`shippingfee`,`transactstatus`,`paymentdate`,`paidamount`,`shippers`) values 
(1,1,'asdasds',100.52,'deliver','2019-03-08',20.20,'sm'),
(2,1,'codektpn here',102.00,'delivery','2019-03-06',10.00,'cokalioin'),
(3,1,'codektpn here',102.00,'delivery','2019-03-08',10.00,'cokalioin');

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `productid` bigint(20) NOT NULL,
  `productname` varchar(70) DEFAULT NULL,
  `productdescription` varchar(150) DEFAULT NULL,
  `currentprice` double DEFAULT NULL,
  `currentquantity` int(11) DEFAULT NULL,
  `supplierid` bigint(20) DEFAULT NULL,
  `categoryid` bigint(20) DEFAULT NULL,
  `picture` varchar(70) DEFAULT NULL,
  `datecreated` datetime DEFAULT NULL,
  `dateupdated` datetime DEFAULT NULL,
  `isactive` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`productid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `products` */

insert  into `products`(`productid`,`productname`,`productdescription`,`currentprice`,`currentquantity`,`supplierid`,`categoryid`,`picture`,`datecreated`,`dateupdated`,`isactive`) values 
(1,'asdasds','dec',101,1,1,1,'deliver','2019-03-08 01:05:29','2019-03-08 22:14:01',1),
(2,'asdasds','dec',101,1,1,1,'deliver','2019-03-08 01:06:28','2019-03-08 22:14:01',1),
(3,'asdasds','dec',101,1,1,1,'deliver','2019-03-08 01:06:32','2019-03-08 22:14:01',1),
(4,'asdasds','dec',101,1,1,1,'deliver','2019-03-08 01:06:32','2019-03-08 22:14:01',1);

/*Table structure for table `supplier` */

DROP TABLE IF EXISTS `supplier`;

CREATE TABLE `supplier` (
  `suplierid` bigint(20) NOT NULL,
  `supliername` varchar(70) DEFAULT NULL,
  `suplierdescription` varchar(150) DEFAULT NULL,
  `suplieremail` varchar(70) DEFAULT NULL,
  `supliercontactnumber` varchar(15) DEFAULT NULL,
  `suplieraddress` varchar(150) DEFAULT NULL,
  `suplierprovince` varchar(70) DEFAULT NULL,
  `datecreated` datetime DEFAULT NULL,
  `dateupdated` datetime DEFAULT NULL,
  `isactive` tinyint(4) DEFAULT NULL,
  `suplierpicture` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`suplierid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `supplier` */

insert  into `supplier`(`suplierid`,`supliername`,`suplierdescription`,`suplieremail`,`supliercontactnumber`,`suplieraddress`,`suplierprovince`,`datecreated`,`dateupdated`,`isactive`,`suplierpicture`) values 
(1,'asdasds','dec','ema','23423423','address','pro','2019-03-08 01:12:19','2019-03-08 22:16:00',1,'image'),
(2,'product here','description','f@gmail.com','23423424','address','province','2019-03-08 01:12:19','2019-03-08 01:12:19',1,'iamge here');

/* Procedure structure for procedure `spV1CategoryDelete` */

/*!50003 DROP PROCEDURE IF EXISTS  `spV1CategoryDelete` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spV1CategoryDelete`(
	_categoryid BIGINT
	 
    )
BEGIN
	UPDATE category
		SET isactive = 0
		
	WHERE categoryid =  _categoryid;
	SELECT categoryid FROM category WHERE categoryid =  _categoryid;	
	
END */$$
DELIMITER ;

/* Procedure structure for procedure `spV1CategoryGetAll` */

/*!50003 DROP PROCEDURE IF EXISTS  `spV1CategoryGetAll` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spV1CategoryGetAll`(
	
	 
    )
BEGIN
	
	SELECT categoryid, categoryname , categorydescription FROM category WHERE isactive = 1;	
	
END */$$
DELIMITER ;

/* Procedure structure for procedure `spV1CategoryGetId` */

/*!50003 DROP PROCEDURE IF EXISTS  `spV1CategoryGetId` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spV1CategoryGetId`(
	_categoryid BIGINT
	 
    )
BEGIN
	
	SELECT categoryid, categoryname , categorydescription FROM category WHERE categoryid =  _categoryid and isactive = 1;	
	
END */$$
DELIMITER ;

/* Procedure structure for procedure `spV1CategoryPost` */

/*!50003 DROP PROCEDURE IF EXISTS  `spV1CategoryPost` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spV1CategoryPost`(
	_categoryname VARCHAR(70)
	,_categorydescription VARCHAR(150)
	 
    )
BEGIN
		SELECT @_categoryid := IFNULL(MAX(categoryid), 0) + 1 FROM category;
	
	INSERT INTO category(categoryid,categoryname,categorydescription, datecreated, dateupdated, isactive) 
	VALUES (@_categoryid,_categoryname,_categorydescription,NOW(),NOW(),1);
	END */$$
DELIMITER ;

/* Procedure structure for procedure `spV1CategoryPut` */

/*!50003 DROP PROCEDURE IF EXISTS  `spV1CategoryPut` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spV1CategoryPut`(
	_categoryid BIGINT
	,_categoryname VARCHAR(70)
	,_categorydescription VARCHAR(150)
	 
    )
BEGIN
	UPDATE category
		SET categoryname = _categoryname
		,categorydescription = _categorydescription
		,dateupdated  =  NOW()
	WHERE categoryid =  _categoryid;
	SELECT categoryid, categoryname , categorydescription FROM category WHERE categoryid =  _categoryid;	
	
END */$$
DELIMITER ;

/* Procedure structure for procedure `spV1CustomerDelete` */

/*!50003 DROP PROCEDURE IF EXISTS  `spV1CustomerDelete` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spV1CustomerDelete`(
	_customerid BIGINT
	 
    )
BEGIN
		UPDATE customer
		SET isactive = 0
		
	WHERE customerid =  _customerid;
	
	SELECT customerid FROM customer WHERE customerid =  _customerid;	
	
END */$$
DELIMITER ;

/* Procedure structure for procedure `spV1CustomerGetAll` */

/*!50003 DROP PROCEDURE IF EXISTS  `spV1CustomerGetAll` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spV1CustomerGetAll`(
	
	 
    )
BEGIN
	
	SELECT customerid, firstname , lastname , email , phonenumber , address , province FROM customer WHERE  isactive = 1;	
	
END */$$
DELIMITER ;

/* Procedure structure for procedure `spV1CustomerGetId` */

/*!50003 DROP PROCEDURE IF EXISTS  `spV1CustomerGetId` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spV1CustomerGetId`(
	_customerid BIGINT
	 
    )
BEGIN
	
	SELECT customerid, firstname , lastname , email , phonenumber , address , province FROM customer WHERE customerid =  _customerid;	
	
END */$$
DELIMITER ;

/* Procedure structure for procedure `spV1CustomerPost` */

/*!50003 DROP PROCEDURE IF EXISTS  `spV1CustomerPost` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spV1CustomerPost`(
	_firstname VARCHAR(35)
	,_lastname VARCHAR(35)
	,_email VARCHAR(70)
	,_phonenumber VARCHAR(25)
	,_address VARCHAR(70)
	,_province VARCHAR(70) 
    )
BEGIN
	SELECT @_customerid := IFNULL(MAX(customerid), 0) + 1 FROM customer;
	
	INSERT INTO customer(customerid, firstname, lastname, email, phonenumber, address, province, datecreated, dateupdated, isactive) 
	VALUES (@_customerid, _firstname, _lastname, _email, _phonenumber ,_address ,_province ,NOW() ,NOW() ,1);
END */$$
DELIMITER ;

/* Procedure structure for procedure `spV1CustomerPut` */

/*!50003 DROP PROCEDURE IF EXISTS  `spV1CustomerPut` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spV1CustomerPut`(
	_customerid BIGINT
	,_firstname VARCHAR(35)
	,_lastname VARCHAR(35)
	,_email VARCHAR(70)
	,_phonenumber VARCHAR(25)
	,_address VARCHAR(70)
	,_province VARCHAR(70) 
	 
    )
BEGIN
	UPDATE customer
		SET firstname = _firstname
		,lastname = _lastname
		,email = _email
		,phonenumber = _phonenumber
		,address = _address
		,province = _province
		,dateupdated  =  NOW()
	WHERE customerid =  _customerid;
	SELECT customerid, firstname , lastname , email , phonenumber , address , province FROM customer WHERE customerid =  _customerid;	
	
END */$$
DELIMITER ;

/* Procedure structure for procedure `spV1OrderDetailDelete` */

/*!50003 DROP PROCEDURE IF EXISTS  `spV1OrderDetailDelete` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spV1OrderDetailDelete`(
	_orderdetailid BIGINT
	 
    )
BEGIN
		UPDATE orderdetail
		SET isactive = 0
		
	WHERE orderid =  _orderdetailid;
	
	SELECT orderid  FROM orderdetail WHERE orderdetailid =  _orderdetailid;	
	
END */$$
DELIMITER ;

/* Procedure structure for procedure `spV1OrderDetailGetAll` */

/*!50003 DROP PROCEDURE IF EXISTS  `spV1OrderDetailGetAll` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spV1OrderDetailGetAll`(

	 
    )
BEGIN
	
	SELECT orderdetail.orderdetailid as 'orderdetailid', orderdetail.orderid as 'orderid', orderdetail.productid as 'productid' 
		, orderdetail.quantity as 'quantity', orderdetail.price 'price',
		orders.customerid, orders.paymentcode, orders.shippingfee, orders.transactstatus, orders.paymentdate, orders.shippers,
		customer.firstname, customer.lastname, customer.email, customer.phonenumber,customer.address,
		 products.productname, products.productdescription, products.currentprice, products.currentquantity, products.supplierid, products.categoryid
		,supplier.supliername, supplier.suplierdescription, supplier.suplieremail, supplier.supliercontactnumber, supplier.suplieraddress
		,category.categoryname,category.categorydescription
		
	   FROM orderdetail 
	LEFT JOIN orders
	ON orders.orderid = orderdetail.orderid
	LEFT JOIN products
	ON products.productid = orderdetail.productid AND products.isactive = 1
	LEFT JOIN customer
	ON customer.customerid = orders.customerid  AND customer.isactive = 1
	LEFT JOIN supplier
	ON supplier.suplierid = products.supplierid  AND supplier.isactive = 1
	LEFT JOIN category
	ON category.categoryid = products.categoryid  AND category.isactive = 1;
	
END */$$
DELIMITER ;

/* Procedure structure for procedure `spV1OrderDetailGetId` */

/*!50003 DROP PROCEDURE IF EXISTS  `spV1OrderDetailGetId` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spV1OrderDetailGetId`(
	_orderdetailid BIGINT
	 
    )
BEGIN
	
		SELECT orderdetail.orderdetailid as 'orderdetailid', orderdetail.orderid as 'orderid', orderdetail.productid as 'productid' 
		, orderdetail.quantity as 'quantity', orderdetail.price 'price',
		orders.customerid, orders.paymentcode, orders.shippingfee, orders.transactstatus, orders.paymentdate, orders.shippers,
		customer.firstname, customer.lastname, customer.email, customer.phonenumber,customer.address,
		 products.productname, products.productdescription, products.currentprice, products.currentquantity, products.supplierid, products.categoryid
		,supplier.supliername, supplier.suplierdescription, supplier.suplieremail, supplier.supliercontactnumber, supplier.suplieraddress
		,category.categoryname,category.categorydescription
		
	   FROM orderdetail 
	LEFT JOIN orders
	ON orders.orderid = orderdetail.orderid
	LEFT JOIN products
	ON products.productid = orderdetail.productid AND products.isactive = 1
	LEFT JOIN customer
	ON customer.customerid = orders.customerid  AND customer.isactive = 1
	LEFT JOIN supplier
	ON supplier.suplierid = products.supplierid  AND supplier.isactive = 1
	LEFT JOIN category
	ON category.categoryid = products.categoryid  AND category.isactive = 1 wHERE orderdetailid =  _orderdetailid;	
	
END */$$
DELIMITER ;

/* Procedure structure for procedure `spV1OrderDetailPost` */

/*!50003 DROP PROCEDURE IF EXISTS  `spV1OrderDetailPost` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spV1OrderDetailPost`(
	_orderid BIGINT
	,_productid BIGINT
	,_quantity INT
	,_price DECIMAL(10,2)
    )
BEGIN
	SELECT @_orderdetailid := IFNULL(MAX(orderdetailid), 0) + 1 FROM orderdetail;
	
	INSERT INTO orderdetail(orderdetailid, orderid, productid, quantity, price) 
	VALUES (@_orderdetailid, _orderid, _productid, _quantity, _price );
END */$$
DELIMITER ;

/* Procedure structure for procedure `spV1OrderDetailPut` */

/*!50003 DROP PROCEDURE IF EXISTS  `spV1OrderDetailPut` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spV1OrderDetailPut`(
	_orderdetailid BIGINT
	,_orderid BIGINT
	,_productid BIGINT
	,_quantity INT
	,_price DECIMAL(10,2)
	 
    )
BEGIN
	UPDATE orderdetail
		SET orderid = _orderid
		,productid = _productid
		,quantity = _quantity
		,price = _price
		
	WHERE orderdetailid =  _orderdetailid;
	SELECT orderid, productid , quantity , price   FROM orderdetail WHERE orderdetailid =  _orderdetailid;	
	
END */$$
DELIMITER ;

/* Procedure structure for procedure `spV1OrdersGetAll` */

/*!50003 DROP PROCEDURE IF EXISTS  `spV1OrdersGetAll` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spV1OrdersGetAll`(

	 
    )
BEGIN
	
	SELECT orders.customerid,orders.paymentcode , orders.shippingfee , orders.shippingfee , orders.transactstatus , orders.paymentdate 
	, orders.paidamount,orders.shippers  
	,customer.firstname, customer.lastname, customer.email, customer.phonenumber,customer.address
	FROM orders
	LEFT JOIN customer
	ON customer.customerid = orders.customerid  AND customer.isactive = 1;
	
END */$$
DELIMITER ;

/* Procedure structure for procedure `spV1OrdersGetId` */

/*!50003 DROP PROCEDURE IF EXISTS  `spV1OrdersGetId` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spV1OrdersGetId`(
	_orderid BIGINT
	 
    )
BEGIN
	SELECT orders.customerid,orders.paymentcode , orders.shippingfee , orders.shippingfee , orders.transactstatus , orders.paymentdate 
	, orders.paidamount,orders.shippers  
	,customer.firstname, customer.lastname, customer.email, customer.phonenumber,customer.address
	FROM orders
	LEFT JOIN customer
	ON customer.customerid = orders.customerid  AND customer.isactive = 1
	 WHERE orderid =  _orderid;
END */$$
DELIMITER ;

/* Procedure structure for procedure `spV1OrdersPost` */

/*!50003 DROP PROCEDURE IF EXISTS  `spV1OrdersPost` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spV1OrdersPost`(
	_customerid BIGINT
	,_paymentcode VARCHAR(70)
	,_shippingfee  DECIMAL(10,2)
	,_transactstatus VARCHAR(70)
	,_paymentdate dateTIME
	,_paidamount DECIMAL(10,2)
	,_shippers VARCHAR(70)
    )
BEGIN
	SELECT @_orderid := IFNULL(MAX(orderid), 0) + 1 FROM orders;
	
	INSERT INTO orders(orderid, customerid, paymentcode, shippingfee, transactstatus , paymentdate, paidamount,shippers) 
	VALUES (@_orderid, _customerid, _paymentcode, _shippingfee, _transactstatus ,_paymentdate ,_paidamount,_shippers);
END */$$
DELIMITER ;

/* Procedure structure for procedure `spV1OrdersPut` */

/*!50003 DROP PROCEDURE IF EXISTS  `spV1OrdersPut` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spV1OrdersPut`(
	_orderid BIGINT
	,_customerid BIGINT
	,_paymentcode VARCHAR(70)
	,_shippingfee  DECIMAL(10,2)
	,_transactstatus VARCHAR(70)
	,_paymentdate DATETIME
	,_paidamount DECIMAL(10,2)
	,_shippers VARCHAR(70)
	 
    )
BEGIN
	UPDATE orders
		SET customerid = _customerid
		,paymentcode = _paymentcode
		,shippingfee = _shippingfee
		,transactstatus = _transactstatus
		,paymentdate = _paymentdate
		,paidamount = _paidamount
		,shippers = _shippers
		
	WHERE orderid =  _orderid;
	SELECT customerid, paymentcode , shippingfee , shippingfee , transactstatus , paymentdate , paidamount,shippers  FROM orders WHERE orderid =  _orderid;
	
END */$$
DELIMITER ;

/* Procedure structure for procedure `spV1ProductsDelete` */

/*!50003 DROP PROCEDURE IF EXISTS  `spV1ProductsDelete` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spV1ProductsDelete`(
	_productid BIGINT
	
    )
BEGIN
	UPDATE products
		SET isactive = 1
	WHERE productid =  _productid;
	SELECT productid
	FROM products WHERE productid =  _productid;	
	
END */$$
DELIMITER ;

/* Procedure structure for procedure `spV1ProductsGetAll` */

/*!50003 DROP PROCEDURE IF EXISTS  `spV1ProductsGetAll` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spV1ProductsGetAll`(

    )
BEGIN
	SELECT products.productid, products.productname , products.productdescription , products.currentprice , products.currentquantity , 
	products.supplierid , products.categoryid ,picture 
	,supplier.supliername, supplier.suplierdescription, supplier.suplieremail, supplier.supliercontactnumber, supplier.suplieraddress
	,category.categoryname,category.categorydescription
	FROM products
	LEFT JOIN supplier
	ON supplier.suplierid = products.supplierid  AND supplier.isactive = 1
	LEFT JOIN category
	ON category.categoryid = products.categoryid  AND category.isactive = 1
	 WHERE products.isactive = 1;	
	
END */$$
DELIMITER ;

/* Procedure structure for procedure `spV1ProductsGetId` */

/*!50003 DROP PROCEDURE IF EXISTS  `spV1ProductsGetId` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spV1ProductsGetId`(
	_productid BIGINT
    )
BEGIN
	SELECT products.productid, products.productname , products.productdescription , products.currentprice , products.currentquantity , 
	products.supplierid , products.categoryid ,picture 
	,supplier.supliername, supplier.suplierdescription, supplier.suplieremail, supplier.supliercontactnumber, supplier.suplieraddress
	,category.categoryname,category.categorydescription
	FROM products
	LEFT JOIN supplier
	ON supplier.suplierid = products.supplierid  AND supplier.isactive = 1
	LEFT JOIN category
	ON category.categoryid = products.categoryid  AND category.isactive = 1
	 WHERE products.isactive = 1 and productid =  _productid;	
	
END */$$
DELIMITER ;

/* Procedure structure for procedure `spV1ProductsPost` */

/*!50003 DROP PROCEDURE IF EXISTS  `spV1ProductsPost` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spV1ProductsPost`(
	_productname VARCHAR(70)
	,_productdescription VARCHAR(150)
	,_currentprice  DECIMAL(10,0)
	,_currentquantity INT
	,_supplierid BIGINT
	,_categoryid BIGINT
	,_picture VARCHAR(70)
    )
BEGIN
	SELECT @_productsid := IFNULL(MAX(productid), 0) + 1 FROM products;
	
	INSERT INTO products(productid, productname, productdescription, currentprice, currentquantity , supplierid, categoryid,picture, datecreated, dateupdated, isactive) 

	VALUES (@_productsid, _productname, _productdescription, _currentprice, _currentquantity ,_supplierid ,_categoryid,_picture ,NOW() ,NOW() ,1);
END */$$
DELIMITER ;

/* Procedure structure for procedure `spV1ProductsPut` */

/*!50003 DROP PROCEDURE IF EXISTS  `spV1ProductsPut` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spV1ProductsPut`(
	_productid BIGINT
	,_productname VARCHAR(70)
	,_productdescription VARCHAR(150)
	,_currentprice  DECIMAL(10,0)
	,_currentquantity INT
	,_supplierid BIGINT
	,_categoryid BIGINT
	,_picture VARCHAR(70)
	 
    )
BEGIN
	UPDATE products
		SET productname = _productname
		,productdescription = _productdescription
		,currentprice = _currentprice
		,currentquantity = _currentquantity
		,supplierid = _supplierid
		,categoryid = _categoryid
		,picture = _picture
		,dateupdated  =  NOW()
	WHERE _productid =  _productid;
	SELECT productid, productname , productdescription , currentprice , currentquantity , supplierid , categoryid ,picture 
	FROM products WHERE productid =  _productid;	
	
END */$$
DELIMITER ;

/* Procedure structure for procedure `spV1SupplierDelete` */

/*!50003 DROP PROCEDURE IF EXISTS  `spV1SupplierDelete` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spV1SupplierDelete`(
	_supplierid BIGINT
	 
    )
BEGIN
	UPDATE supplier
		SET isactive = 0
	WHERE suplierid =  _supplierid;
	SELECT suplierid FROM supplier WHERE suplierid =  _supplierid;	
	
END */$$
DELIMITER ;

/* Procedure structure for procedure `spV1SupplierGetAll` */

/*!50003 DROP PROCEDURE IF EXISTS  `spV1SupplierGetAll` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spV1SupplierGetAll`(

	 
    )
BEGIN

	SELECT suplierid, supliername , suplierdescription , suplieremail , supliercontactnumber , suplieraddress , suplierprovince ,suplierpicture 
	FROM supplier WHERE isactive = 1;	
	
END */$$
DELIMITER ;

/* Procedure structure for procedure `spV1SupplierGetId` */

/*!50003 DROP PROCEDURE IF EXISTS  `spV1SupplierGetId` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spV1SupplierGetId`(
	_supplierid BIGINT
	 
    )
BEGIN

	SELECT suplierid, supliername , suplierdescription , suplieremail , supliercontactnumber , suplieraddress , suplierprovince ,suplierpicture 
	FROM supplier WHERE suplierid =  _supplierid and isactive = 1;	
	
END */$$
DELIMITER ;

/* Procedure structure for procedure `spV1SupplierPost` */

/*!50003 DROP PROCEDURE IF EXISTS  `spV1SupplierPost` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spV1SupplierPost`(
	_supliername VARCHAR(70)
	,_suplierdescription VARCHAR(150)
	,_suplieremail VARCHAR(70)
	,_supliercontactnumber VARCHAR(15)
	,_suplieraddress VARCHAR(70)
	,_suplierprovince VARCHAR(70)
	,_suplierpicture VARCHAR(70)
    )
BEGIN
	SELECT @_supplierid := IFNULL(MAX(suplierid), 0) + 1 FROM supplier;
	
	INSERT INTO supplier(suplierid, supliername, suplierdescription, suplieremail, supliercontactnumber  , suplieraddress, suplierprovince,suplierpicture, datecreated, dateupdated, isactive) 
	VALUES (@_supplierid, _supliername, _suplierdescription, _suplieremail, _supliercontactnumber ,_suplieraddress ,_suplierprovince,_suplierpicture ,NOW() ,NOW() ,1);
END */$$
DELIMITER ;

/* Procedure structure for procedure `spV1SupplierPut` */

/*!50003 DROP PROCEDURE IF EXISTS  `spV1SupplierPut` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spV1SupplierPut`(
	_supplierid BIGINT
	,_supliername VARCHAR(70)
	,_suplierdescription VARCHAR(150)
	,_suplieremail VARCHAR(70)
	,_supliercontactnumber VARCHAR(15)
	,_suplieraddress VARCHAR(70)
	,_suplierprovince VARCHAR(70)
	,_suplierpicture VARCHAR(70)
	 
    )
BEGIN
	UPDATE supplier
		SET supliername = _supliername
		,suplierdescription = _suplierdescription
		,suplieremail = _suplieremail
		,supliercontactnumber = _supliercontactnumber
		,suplieraddress = _suplieraddress
		,suplierprovince = _suplierprovince
		,suplierpicture = _suplierpicture
		,dateupdated  =  NOW()
	WHERE suplierid =  _supplierid;
	SELECT suplierid, supliername , suplierdescription , suplieremail , supliercontactnumber , suplieraddress , suplierprovince ,suplierpicture 
	FROM supplier WHERE suplierid =  _supplierid;	
	
END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

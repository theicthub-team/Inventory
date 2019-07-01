--
-- Database: `inventory_management_system`
--

-- brand table
CREATE TABLE brand (
  brand_id int(11) NOT NULL AUTO_INCREMENT,
  brand_name VARCHAR(255) NOT NULL,
  brand_creation_time DATETIME DEFAULT CURRENT_TIMESTAMP,
  brand_modification_time DATETIME ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (brand_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- batch table
CREATE TABLE batch (
  batch_id int(11) NOT NULL AUTO_INCREMENT,
  batch_name VARCHAR(255) NOT NULL,
  batch_description TEXT NOT NULL,
  batch_creation_time DATETIME DEFAULT CURRENT_TIMESTAMP,
  batch_modification_time DATETIME ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (batch_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- category table
CREATE TABLE category (
  category_id int(11) NOT NULL AUTO_INCREMENT,
  category_name VARCHAR(255) NOT NULL,
  category_parent_id int(11) NOT NULL,
  category_creation_time DATETIME DEFAULT CURRENT_TIMESTAMP,
  category_modification_time DATETIME ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (category_id),
  FOREIGN KEY (category_parent_id) REFERENCES category(category_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- product table
CREATE TABLE product (
  product_id int(11) NOT NULL AUTO_INCREMENT,
  product_name VARCHAR(255) NOT NULL,
  product_category_id int(11) NOT NULL,
  product_brand_id int(11) NOT NULL,
  product_batch_id int(11) NOT NULL,
  product_creation_time DATETIME DEFAULT CURRENT_TIMESTAMP,
  product_modification_time DATETIME ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (product_id),
  FOREIGN KEY (product_category_id) REFERENCES category(category_id),
  FOREIGN KEY (product_brand_id) REFERENCES brand(brand_id),
  FOREIGN KEY (product_batch_id) REFERENCES batch(batch_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- product_quantity_unit table
CREATE TABLE product_quantity_unit (
  product_quantity_unit_id int(11) NOT NULL AUTO_INCREMENT,
  product_quantity_unit_name VARCHAR(255) NOT NULL,
  product_quantity_unit_creation_time DATETIME DEFAULT CURRENT_TIMESTAMP,
  product_quantity_unit_modification_time DATETIME ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (product_quantity_unit_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- product_color table
CREATE TABLE product_color (
  product_color_id int(11) NOT NULL AUTO_INCREMENT,
  product_color_name VARCHAR(255) NOT NULL,
  product_color_creation_time DATETIME DEFAULT CURRENT_TIMESTAMP,
  product_color_modification_time DATETIME ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (product_color_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- product_size table
CREATE TABLE product_size (
  product_size_id int(11) NOT NULL AUTO_INCREMENT,
  product_size_name VARCHAR(255) NOT NULL,
  product_size_creation_time DATETIME DEFAULT CURRENT_TIMESTAMP,
  product_size_modification_time DATETIME ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (product_size_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- warehouse table
CREATE TABLE warehouse (
  warehouse_id int(11) NOT NULL AUTO_INCREMENT,
  warehouse_name VARCHAR(255) NOT NULL,
  warehouse_address VARCHAR(255) NOT NULL,
  warehouse_lat DECIMAL(10, 8) DEFAULT NULL,
  warehouse_long DECIMAL(11, 8) DEFAULT NULL,
  warehouse_creation_time DATETIME DEFAULT CURRENT_TIMESTAMP,
  warehouse_modification_time DATETIME ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (warehouse_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- stock table
CREATE TABLE stock (
  stock_id int(11) NOT NULL AUTO_INCREMENT,
  stock_product_id int(11) NOT NULL,
  stock_product_quantity_unit int(11) NOT NULL,
  stock_product_quantity int(11) NOT NULL,
  stock_product_purchase_price DOUBLE(4,2) NOT NULL,
  stock_product_sales_price DOUBLE(4,2) NOT NULL,
  stock_product_expire_date DATETIME NOT NULL,
  stock_product_color int(11) DEFAULT NULL,
  stock_product_size int(11) DEFAULT NULL,
  stock_product_height DOUBLE(4,2) DEFAULT NULL,
  stock_product_weight DOUBLE(4,2) DEFAULT NULL,
  stock_warehouse int(11) NOT NULL,
  stock_status VARCHAR(255) NOT NULL,
  stock_creation_time DATETIME DEFAULT CURRENT_TIMESTAMP,
  stock_modification_time DATETIME ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (stock_id),
  FOREIGN KEY (stock_product_id) REFERENCES product(product_id),
  FOREIGN KEY (stock_product_quantity_unit) REFERENCES product_quantity_unit(product_quantity_unit_id),
  FOREIGN KEY (stock_product_color) REFERENCES product_color(product_color_id),
  FOREIGN KEY (stock_product_size) REFERENCES product_size(product_size_id),
  FOREIGN KEY (stock_warehouse) REFERENCES warehouse(warehouse_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- package table
CREATE TABLE package (
  package_id int(11) NOT NULL AUTO_INCREMENT,
  package_name VARCHAR(255) NOT NULL,
  package_start_date DATETIME NOT NULL,
  package_end_date DATETIME NOT NULL,
  package_price DOUBLE(4,2) NOT NULL,
  package_creation_time DATETIME DEFAULT CURRENT_TIMESTAMP,
  package_modification_time DATETIME ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (package_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- combo table
CREATE TABLE combo (
  combo_id int(11) NOT NULL AUTO_INCREMENT,
  combo_package_id int(11) NOT NULL,
  combo_stock_id int(11) NOT NULL,
  combo_product_quantity int(11) NOT NULL,
  combo_creation_time DATETIME DEFAULT CURRENT_TIMESTAMP,
  combo_modification_time DATETIME ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (combo_id),
  FOREIGN KEY (combo_package_id) REFERENCES package(package_id),
  FOREIGN KEY (combo_stock_id) REFERENCES stock(stock_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- cart table
CREATE TABLE cart (
  cart_id int(11) NOT NULL AUTO_INCREMENT,
  cart_stock_id int(11) NOT NULL,
  card_product_quantity int(11) NOT NULL,
  cart_creation_time DATETIME DEFAULT CURRENT_TIMESTAMP,
  cart_modification_time DATETIME ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (cart_id),
  FOREIGN KEY (cart_stock_id) REFERENCES stock(stock_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- contact table
CREATE TABLE contact (
  contact_id int(11) NOT NULL AUTO_INCREMENT,
  contact_type VARCHAR(255) NOT NULL,
  contact_name VARCHAR(255) NOT NULL,
  contact_address VARCHAR(255) NOT NULL,
  contact_designation VARCHAR(255) NOT NULL,
  contact_mobile VARCHAR(255) NOT NULL,
  contact_creation_time DATETIME DEFAULT CURRENT_TIMESTAMP,
  contact_modification_time DATETIME ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (contact_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- order table
CREATE TABLE orders (
  orders_id int(11) NOT NULL AUTO_INCREMENT,
  orders_cart_id int(11) NOT NULL,
  orders_contact_id int(11) NOT NULL,
  orders_status VARCHAR(255) NOT NULL,
  orders_total_cost DOUBLE(4,2) NOT NULL,
  orders_paid DOUBLE(4,2) NOT NULL,
  orders_type VARCHAR(255) NOT NULL,
  orders_shipping_cost DOUBLE(4,2) NOT NULL,
  orders_date DATETIME NOT NULL,
  orders_delivery_date DATETIME NOT NULL,
  orders_discount DOUBLE(4,2) NOT NULL,
  orders_creation_time DATETIME DEFAULT CURRENT_TIMESTAMP,
  orders_modification_time DATETIME ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (orders_id),
  FOREIGN KEY (orders_cart_id) REFERENCES cart(cart_id),
  FOREIGN KEY (orders_contact_id) REFERENCES contact(contact_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- user designations like manager,CEO,software Engineer etc.
CREATE TABLE `user_designation`
(
    `user_designation_id`                int(11)      NOT NULL AUTO_INCREMENT,
    `user_designation_Name`              varchar(255) NOT NULL,
    `user_designation_creation_time`     DATETIME DEFAULT CURRENT_TIMESTAMP,
    `user_designation_modification_time` DATETIME ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (user_designation_id)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

INSERT INTO user_designation (user_designation_id, user_designation_Name, user_designation_creation_time,
                              user_designation_modification_time)
VALUES (1, 'CEO', now(), now()),
       (2, 'MD', now(), now()),
       (3, 'Manager', now(), now()),
       (4, 'Software Engineer', now(), now())
;
-- system user type like super_admin,admin,manager,user
-- max access level 4
-- super_admin level 4
-- admin level 3
-- manager level 2
-- user level 1
CREATE TABLE `user_type`
(
    `user_type_id`                int(11)      NOT NULL AUTO_INCREMENT,
    `user_type_Name`              varchar(255) NOT NULL,
    `user_type_access_level`      int(11)      NOT NULL,
    `user_type_creation_time`     DATETIME DEFAULT CURRENT_TIMESTAMP,
    `user_type_modification_time` DATETIME ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (user_type_id)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

INSERT INTO user_type (user_type_id, user_type_Name, user_type_access_level, user_type_creation_time,
                       user_type_modification_time)
VALUES (1, 'super_admin', 4, now(), now()),
       (2, 'admin', 3, now(), now()),
       (3, 'manager', 2, now(), now()),
       (4, 'user', 1, now(), now())
;
-- user info
CREATE TABLE `user`
(
    `user_id`                int(11)      NOT NULL AUTO_INCREMENT,
    `user_Name`              varchar(255) NOT NULL,
    `user_PhoneNo`           varchar(255) NOT NULL,
    `user_Email`             varchar(255) NOT NULL,
    `user_Password`          varchar(255) NOT NULL,
    `user_Status`            varchar(255) NOT NULL,
    `user_creation_time`     DATETIME DEFAULT CURRENT_TIMESTAMP,
    `user_modification_time` DATETIME ON UPDATE CURRENT_TIMESTAMP,
    `user_designation_id`    int(11)      NOT NULL,
    `user_type_id`           int(11)      NOT NULL,
    PRIMARY KEY (user_id),
    FOREIGN KEY (user_designation_id) REFERENCES user_designation (user_designation_id),
    FOREIGN KEY (user_type_id) REFERENCES user_type (user_type_id)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

INSERT INTO user (user_id, user_Name, user_PhoneNo, user_Email, user_Password, user_Status, user_creation_time,
                  user_modification_time, user_designation_id, user_type_id)
VALUES (1, 'Abdullah Al Rifat', '01671080275', 'abdullahalrifat95@gmail.com', SHA1('accessdenied'), 'Active', now(),
        now(), 4, 1),
       (2, 'Sadik Ahammed', '01521208519', 'sadik061@gmail.com', SHA1('0912'), 'Active', now(), now(), 4, 4)
;
-- select user_Name,user_PhoneNo,user_Email,user_Password,user_designation_Name,user_type_Name,user_type_access_level from user NATURAL JOIN user_designation NATURAL JOIN user_type

-- user token
CREATE TABLE `user_token`
(
    `user_token_id`                int(11)      NOT NULL AUTO_INCREMENT,
    `user_id`                      int(11)      NOT NULL,
    `user_token_no`                varchar(255) NOT NULL,
    `user_token_creation_time`     DATETIME DEFAULT CURRENT_TIMESTAMP,
    `user_token_modification_time` DATETIME ON UPDATE CURRENT_TIMESTAMP,

    PRIMARY KEY (user_token_id),
    FOREIGN KEY (user_id) REFERENCES user (user_id)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

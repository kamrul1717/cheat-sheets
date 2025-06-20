RENAME TABLE inventory TO inventory_old;


CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `po_no` varchar(255) DEFAULT NULL,
  `so_no` varchar(255) DEFAULT NULL,
  `t_type` int(11) DEFAULT NULL,
  `location_id` int(11) NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `product_serial` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `stock_in` double DEFAULT '0',
  `stock_out` double DEFAULT '0',
  `sell_price` double DEFAULT '0',
  `transaction_date` date NOT NULL,
  `month` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `year` int(4) DEFAULT NULL,
  `is_agree` int(11) DEFAULT '0',
  `purchase_return_id` int(11) DEFAULT NULL,
  `sell_return_id` int(11) DEFAULT NULL,
    PRIMARY KEY (id, year)
) ENGINE=InnoDB DEFAULT CHARSET=utf8
PARTITION BY RANGE (year) (
  PARTITION p2022 VALUES LESS THAN (2023),
  PARTITION p2023 VALUES LESS THAN (2024),
  PARTITION p2024 VALUES LESS THAN (2025),
  PARTITION p2025 VALUES LESS THAN (2026),
  PARTITION pmax VALUES LESS THAN MAXVALUE
);

ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


  CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `po_no` varchar(255) DEFAULT NULL,
  `so_no` varchar(255) DEFAULT NULL,
  `t_type` int(11) DEFAULT NULL,
  `location_id` int(11) NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `product_serial` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `stock_in` double DEFAULT '0',
  `stock_out` double DEFAULT '0',
  `sell_price` double DEFAULT '0',
  `transaction_date` date NOT NULL,
  `month` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `year` int(4) DEFAULT NULL,
  `is_agree` int(11) DEFAULT '0',
  `purchase_return_id` int(11) DEFAULT NULL,
  `sell_return_id` int(11) DEFAULT NULL,
    PRIMARY KEY (id, transaction_date)
) ENGINE=InnoDB DEFAULT CHARSET=utf8
PARTITION BY RANGE (YEAR(transaction_date)) (
  PARTITION p2022 VALUES LESS THAN (2023),
  PARTITION p2023 VALUES LESS THAN (2024),
  PARTITION p2024 VALUES LESS THAN (2025),
  PARTITION p2025 VALUES LESS THAN (2026),
  PARTITION pmax VALUES LESS THAN MAXVALUE
);

ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;






  INSERT INTO inventory (id, company_id, store_id, po_no, so_no, t_type, location_id, item_id, brand_id, model_id, product_serial, code, stock_in, stock_out, sell_price, transaction_date, month, year, is_agree, purchase_return_id, sell_return_id)
SELECT id, company_id, store_id, po_no, so_no, t_type, location_id, item_id, brand_id, model_id, product_serial, code, stock_in, stock_out, sell_price, transaction_date, month, year, is_agree, purchase_return_id, sell_return_id
FROM inventory_old;
CREATE TABLE `product` (
                           `id` INT ( 11 ) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID',
                           `good_id` VARCHAR ( 55 ) NOT NULL COMMENT '商品ID',
                           `item_link` VARCHAR ( 255 ) NOT NULL COMMENT '商品链接',
                           `title` VARCHAR ( 255 ) NOT NULL COMMENT '商品标题',
                           `dtitle` VARCHAR ( 255 ) NOT NULL COMMENT '商品副标题',
                           `main_img` VARCHAR ( 255 ) NOT NULL COMMENT '商品主图',
                           `market_main_img` VARCHAR ( 255 ) NOT NULL COMMENT '商品营销主图',
                           `original_price` DECIMAL ( 10, 2 ) NOT NULL COMMENT '商品原价',
                           `actual_price` DECIMAL ( 10, 2 ) NOT NULL COMMENT '卷后价',
                           `seller_id` VARCHAR ( 50 ) NOT NULL COMMENT '商家ID',
                           `shop_name` VARCHAR ( 255 ) NOT NULL COMMENT '商家名称',
                           `shop_type` TINYINT ( 1 ) NOT NULL COMMENT '店铺类型 1 淘宝 2 天猫',
                           `brand_id` VARCHAR ( 50 ) NOT NULL COMMENT '品牌ID',
                           `status` TINYINT ( 1 ) NOT NULL COMMENT '上架状态',
                           `sale_date` INT ( 11 ) NOT NULL COMMENT '上架时间',
                           `coupon_link` VARCHAR ( 255 ) NOT NULL COMMENT '优惠券链接',
                           `coupon_id` VARCHAR ( 255 ) NOT NULL COMMENT '优惠券ID',
                           `coupon_start_time` INT ( 11 ) NOT NULL COMMENT '优惠券开始时间',
                           `coupon_end_time` INT ( 11 ) NOT NULL COMMENT '优惠券结束时间',
                           `coupon_price` DECIMAL ( 10, 2 ) NOT NULL COMMENT '优惠券价格',
                           `ext` text NOT NULL COMMENT '扩展字段',
                           `created_at` INT ( 11 ) NOT NULL COMMENT '创建时间',
                           `updated_at` INT ( 11 ) NOT NULL COMMENT '修改时间',
                           PRIMARY KEY ( `id` ),
                           UNIQUE KEY `good_id_index` ( `good_id` ) USING BTREE COMMENT '商品ID'
);


CREATE TABLE `product_send_record` (
                                       `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
                                       `product_id` int(11) NOT NULL COMMENT '商品ID',
                                       `type` tinyint(1) NOT NULL COMMENT '类型 1 大淘客',
                                       `created_at` int(11) NOT NULL COMMENT '创建时间',
                                       `updated_at` int(11) NOT NULL COMMENT '修改时间',
                                       PRIMARY KEY (`id`)
) COMMENT='微信发送记录';

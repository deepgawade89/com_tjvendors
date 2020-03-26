ALTER TABLE `#__tjvendors_vendors` ADD address text NOT NULL AFTER vendor_title;
ALTER TABLE `#__tjvendors_vendors` ADD country int(3) NOT NULL AFTER address;
ALTER TABLE `#__tjvendors_vendors` ADD region int(5) NOT NULL AFTER country;
ALTER TABLE `#__tjvendors_vendors` ADD city varchar(50) NOT NULL AFTER region;
ALTER TABLE `#__tjvendors_vendors` ADD other_city varchar(50) NOT NULL AFTER city;
ALTER TABLE `#__tjvendors_vendors` ADD zip varchar(50) NOT NULL AFTER other_city;
ALTER TABLE `#__tjvendors_vendors` ADD phone_number varchar(50)  NOT NULL AFTER zip;
ALTER TABLE `#__tjvendors_vendors` ADD website_address varchar(100)  NOT NULL AFTER phone_number;
ALTER TABLE `#__tjvendors_vendors` ADD vat_number varchar(50)  NOT NULL AFTER website_address;
ALTER TABLE `#__tjvendors_vendors` ADD created_by int(11)  NOT NULL AFTER params;
ALTER TABLE `#__tjvendors_vendors` ADD modified_by int(11)  NOT NULL AFTER created_by;
ALTER TABLE `#__tjvendors_vendors` ADD created_time datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER modified_by;
ALTER TABLE `#__tjvendors_vendors` ADD modified_time datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER created_time;

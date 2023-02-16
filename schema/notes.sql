ALTER TABLE `strategy_variation_data` ADD `notes` VARCHAR(250) NULL DEFAULT '' AFTER `area_look_at`;

ALTER TABLE `one_one_service_data` ADD `notes` VARCHAR(250) NULL DEFAULT '' AFTER `consider_offer`;

ALTER TABLE `one_many_service_data` ADD `notes` VARCHAR(250) NULL DEFAULT '' AFTER `consider_offer`;

ALTER TABLE `strategy_management_data` ADD `notes` VARCHAR(250) NULL DEFAULT '' AFTER `area_look_at`;
<?php


class m0004_create_guideline
{
    public function up()
    {
        $db = \app\core\App::$app->db;
        $SQL = "CREATE TABLE IF NOT EXISTS `guidelines` (
                  `guid_id` int NOT NULL AUTO_INCREMENT,
                  `sub_category_id` int NOT NULL,
                  `guideline` text NOT NULL,
                  `guid_status` TEXT NOT NULL ,                  
                  `activate_date` DATE NOT NULL,
                  `expiry_date` DATE NOT NULL,
                  `last_modified_date` TIMESTAMP(6) DEFAULT CURRENT_TIMESTAMP(6),
                  PRIMARY KEY (`guid_id`)
               ) ENGINE = INNODB;";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\App::$app->db;
        $SQL = "DROP TABLE IF EXISTS `guidelines`;";
        $db->pdo->exec($SQL);
    }
}

<?php

class m0006_create_notification_table
{
    public function up()
    {
        $db = \app\core\App::$app->db;
        $SQL = "CREATE TABLE IF NOT EXISTS `notification` (
                  `not_id` int NOT NULL AUTO_INCREMENT,
                  `cat_id` int NOT NULL ,
                  `class` varchar(45) NOT NULL ,
                  `date` DATE NOT NULL ,
                  `type` varchar(20) NOT NULL,
                  PRIMARY KEY (`not_id`)
               ) ENGINE = INNODB;";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\App::$app->db;
        $SQL = "DROP TABLE IF EXISTS `notification`;";
        $db->pdo->exec($SQL);
    }
}

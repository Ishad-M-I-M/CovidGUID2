<?php

class m0007_create_notification_status
{
    public function up()
    {
        $db = \app\core\App::$app->db;
        $SQL = "CREATE TABLE IF NOT EXISTS `notification_status` (
                  `not_id` int NOT NULL AUTO_INCREMENT,
                  `status` int NOT NULL ,
                  `user_id` int NOT NULL ,
                  PRIMARY KEY (`not_id`, `user_id`)
               ) ENGINE = INNODB;";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\App::$app->db;
        $SQL = "DROP TABLE IF EXISTS `notification_status`;";
        $db->pdo->exec($SQL);
    }
}
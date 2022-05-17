<?php

class m0008_category_subscription
{
    public function up()
    {
        $db = \app\core\App::$app->db;
        $SQL = "CREATE TABLE IF NOT EXISTS `category_subscription` (
                  `cat_id` int,
                  `user_id` int,
                  PRIMARY KEY (`cat_id`, `user_id`)
               ) ENGINE = INNODB;";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \app\core\App::$app->db;
        $SQL = "DROP TABLE IF EXISTS `category_subscription`;";
        $db->pdo->exec($SQL);
    }

}
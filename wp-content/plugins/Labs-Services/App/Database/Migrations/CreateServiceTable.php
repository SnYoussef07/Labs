<?php
namespace App\Database\Migrations;

class CreateServiceTable
{
    /**
     * Création de la table
     *
     * @return void
     */
    public static function up()
    {
        global $wpdb;
        // $wpdb->prefix permet de récuper le prefix qu'on avait choisis quand on a créer notre base de donnée wordpress la toute première fois qu'on a lancé wp server apres notre wp core download
        $table_name = $wpdb->prefix . 'sn_service';
        /*  */
        $wpdb->query("CREATE TABLE IF NOT EXISTS  $table_name  (
      id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      title VARCHAR(255) NOT NULL,
      content TEXT NOT NULL,
      icone VARCHAR(255) NOT NULL,
      created_at TIMESTAMP
    )
    COLLATE utf8mb4_unicode_520_ci
    ;");
    }
}

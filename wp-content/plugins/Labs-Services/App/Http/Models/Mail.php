<?php
namespace App\Http\Models;

class Mail
{
    // les propriétés de l'objet model. Les propriété de l'objet qui sont représentative de la structure de la table dans la base de donnée.
    public $id;
    public $email;
    public $created_at;
    protected static $table = 'wp_sn_newsletter';
    /**
     * Fonction qui est appelé lors de l'instance d'un objet.
     */
    public function __construct()
    {
        // on rempli déjà la date de création
        $this->created_at = current_time('mysql');
    }
    /**
     * fonction qui prend en charge la sauvegarde du mail dans la base de donnée.
     *
     * @return void
     */
    public function save()
    {
        global $wpdb;
        // nous utilisons à nous la méthode insert de l'objet $wpdb;
        return $wpdb->insert(
            $wpdb->prefix . 'sn_newsletter', // le nom de la table
            // ici nous affichons toutes les colonnes avec leur valeur sous forme d'objet.
            [
                'id' => $this->id,
                'email' => $this->email,
                'created_at' => $this->created_at,
            ]
        );
    }

    public static function all()
    {
        global $wpdb;
        $table = self::$table;
        $query = "SELECT * FROM $table";
        //$query = "SELECT * FROM $table ORDER BY id DESC";
        return $wpdb->get_results($query);
    }

    // On créer une seconde function 'find()' pour faire une requête différente de 'all()' ,find elle ira récupérer dans la base de donnée que les mails dont l'id vaut ce qui est passé dans l'url.
    public static function find($id)
    {
        global $wpdb;
        $table = self::$table;
        $query = "SELECT *
        protected static $table = ' FROM $table WHERE id = $id";

        $objet = $wpdb->get_row($query);
        $mail = new Mail();
        foreach ($objet as $key => $value) {
            $mail->$key = $value;
        }
        return $mail;
    }

    // Function qui va nous permettre de supprimer un mail dans la base de donné,cette function attend un paramètre '$id' que l'on va remplir par la suite quand on va appelé cette function
    public static function delete($id)
    {
        global $wpdb;
        // delete est une methode de notre class wpdb
        // https://developer.wordpress.org/reference/classes/wpdb/delete/
        return $wpdb->delete(
            self::$table,
            [
                'id' => $id,
            ]
        );
    }
}

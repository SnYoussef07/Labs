<?php
namespace App\Http\Controllers;

//use App\Http\Models\Mail;
//use App\Http\Requests\Request;

class MailController
{

    public static function send()
    {
        global $wpdb;

        /* if (!wp_verify_nonce($_POST['_wpnonce'], 'send-mail')) {
            return;
        }; */

        // Maintenant à chaque fois qu'il y a une tenative réussie ou ratée d'envoi de mail, on lance la methode 'validation' de la class Request et on rempli son paramètre avec un tableau de clef et de valeur. On fait en sorte que le nom des clefs correspondent aux names des inputs du formulaire.
        /* Request::validation([
            'name' => 'required',
            'email' => 'email',
            'firstname' => 'required',
            'message' => 'required',
        ]); */

        // Nous récupérons les données envoyé par le formulaire qui se retrouve dans la variable $_POST
        /* $email = $_POST['email'];
        $name = $_POST['name'];
        $firstname = $_POST['firstname'];
        $message = $_POST['message']; */
        // la fonction wordpress pour envoyer des mails https://developer.wordpress.org/reference/functions/wp_mail/

        // Si le mail est bien envoyé status = 'success' sinon 'error'
        /* if (wp_mail($email, 'Pour ' . $name . ' ' . $firstname, $message)) {
            $_SESSION['notice'] = [
                'status' => 'success',
                'message' => 'votre e-mail a bien été envoyé',
            ];

            $mail = new Mail();
            $mail->userid = get_current_user_id();
            $mail->lastname = $name;
            $mail->firstname = $firstname;
            $mail->email = $email;
            $mail->content = $message;
            // Sauvegarde du mail dans la base de donnée
            $mail->save();

        } else {
            $_SESSION['notice'] = [
                'status' => 'error',
                'message' => 'Une erreur est survenue, veuillez réessayer plus tard',
            ];
        } */
        // la fonction wp_safe_redirect redirige vers une url. La fonction wp_get_referer renvoi vers la page d'ou la requête a été envoyé.
        wp_safe_redirect(wp_get_referer());
    }

    public static function index()
    {
        // on va chercher toute les entrés de la table dont le model mail s'occupe et on inverse l'ordre afin d'avoir le plus récent en premier.
        //$mails = array_reverse(Mail::all());
        
        // on envoi notre variable $old qui contient les anciennes valeurs dans notre view send-mail pour qu'on puisse afficher son contenu dans les champs.
        view('pages/send-mail');
    }

    public static function show()
    {
        /* // Maintenant qu'on est ici on à besoin de savoir quel mail est demandé on va donc dans notre url voir que vaut id= ?? et on le stock dans une variable $id
        $id = $_GET['id'];
        // on fait appel à notre function find et dans passe en paramètre l'id pour que notre function sache l'émail à aller chercher dans notre BDD
        $mail = Mail::find($id);
        // on retourn une vue avec le contenu de Mail, cette vue n'est pas encore crée nous allons la crée au prochain commit. Pour l'instant si vous cliquez il essaie d'affiche un fichier qu'il ne trouve pas et vous vous retrouvez donc avec un fond gris.
        view('pages/show-mail', compact('mail')); */
    }

    // function qui est lancé via le hook admin_action_mail-delete ligne 23 du fichier hooks.php.
    public static function delete()
    {
        // on récupère l'id envoyé via $_POST notre formulaire ligne 29 dans show-mail.html.php
        /* $id = $_POST['id'];
        // si notre function delete($id) est lancée alors on rempli SESSION avec un status et un message positif puis on redirect sur notre page mail-client
        if (Mail::delete($id)) {
            $_SESSION['notice'] = [
                'status' => 'success',
                'message' => 'Le mail a bien été supprimé',
            ];
            wp_safe_redirect(menu_page_url('mail-client'));
        }
        // Si le mail na pas été supprimé on renvoi sur la page avec une notification négative
        else {
            $_SESSION['notice'] = [
                'status' => 'error',
                'message' => 'un Problème est survenu, veuillez rééssayer',
            ];
            wp_safe_redirect(wp_get_referer());
        } */
    }

   

    
}

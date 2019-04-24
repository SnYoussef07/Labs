<?php
namespace App\Http\Controllers;

use App\Http\Models\Mail;
use App\Http\Models\Newsletter;
use App\Http\Requests\Request;

class MailController
{
    public static function send()
    {
        // Maintenant à chaque fois qu'il y a une tenative réussie ou ratée d'envoi de mail, on lance la methode 'validation' de la class Request et on rempli son paramètre avec un tableau de clef et de valeur. On fait en sorte que le nom des clefs correspondent aux names des inputs du formulaire.
        Request::validation([
            'name' => 'required',
            'email' => 'email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Nous récupérons les données envoyé par le formulaire qui se retrouve dans la variable $_POST
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $emailAdmin = "Admin@Admin.be";

        $mail = new Mail();
        $mail->userid = get_current_user_id();
        $mail->lastname = $name;
        $mail->email = $email;
        $mail->lsubject = $subject;
        $mail->content = $message;
        // Sauvegarde du mail dans la base de donnée
        $mail->save();

        // Si le mail est bien envoyé status = 'success' sinon 'error'
        if (wp_mail($emailAdmin, 'Par ' . $name . ' Sujet : [' . $subject . '] ' . 'email :' . $email, $message)) {
        $_SESSION['notice'] = [
        'status' => 'success',
        'message' => 'votre e-mail a bien été envoyé',
        ];
        } else {
        $_SESSION['notice'] = [
        'status' => 'danger',
        'message' => 'Une erreur est survenue, veuillez réessayer plus tard',
        ];
        }
        // la fonction wp_safe_redirect redirige vers une url. La fonction wp_get_referer renvoi vers la page d'ou la requête a été envoyé.
        wp_safe_redirect(wp_get_referer());
    }

    public static function saveNewsletter()
    {
        Request::validation([
            'emailNews' => 'email',
        ]);

        $emailAdmin = "Test@tt.be";
        $message = "Email :" . $_POST['emailNews'] . "est inscrit a la newsletter";

        $mail = new Newsletter();
        $mail->email = $_POST['emailNews'];
        // Sauvegarde du mail dans la base de donnée
        $mail->save();

        wp_mail($emailAdmin, 'Inscription a la newsLetter', $message);

        wp_safe_redirect(wp_get_referer());
    }

    public static function delete()
    {
        $id = $_POST['id'];
        Newsletter::delete($id);

        wp_safe_redirect(wp_get_referer());
    }

}

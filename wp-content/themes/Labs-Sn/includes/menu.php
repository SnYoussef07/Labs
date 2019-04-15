
<?php
// Nous allons prendre l'habitude de préfixer nos class afin de ne pas créer de conflit avec wordpress on ne sait jamais que le nom soit déjà utiliser ailleurs.
class MgMenu
{
    /**
     * Fonction qui ajoute un menu au thème.
     *
     * @return void
     */
    public static function register_main_menu()
    {
        register_nav_menu('main-menu', 'Menu principal');
    }

    /**
     * Fonction qui ajoute des attributes au balise a des nav_menu
     *
     * @param [type] $atts
     * @param [type] $item
     * @param [type] $args
     * @return void
     */
    public static function ajout_menu_a_class($atts, $item, $args)
    {
        // On ajoute un condition pour pouvoir choisir les class que l'on ajoute en fonction du menu
        $class = ''; // or something based on $item

        $atts['class'] = $class;
        return $atts;

    }
}

add_action('after_setup_theme', [MgMenu::class, 'register_main_menu']);
add_filter('nav_menu_css_class', [MgMenu::class, 'ajout_menu_a_class'], 10, 3);

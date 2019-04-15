<?php

class MgCustomizer
{
/**
 * Fonction qui ajoute la possibilité de customiser la partie personnalisation du thème
 * //https://developer.wordpress.org/themes/customize-api/customizer-objects/
 *
 * @param [type] $wp_customize
 * @return void
 */
    public static function ajout_personnalisation_about($wp_customize)
    {

        /* Panel */
        $wp_customize->add_panel('coding-panel-Section', [
            'title' => __('Custom Labs'),
        ]);

        $wp_customize->add_section('section-titre', [
            'panel' => 'coding-panel-Section',
            'title' => 'Section About',
        ]);

        $wp_customize->add_section('section-img-carousel', [
            'panel' => 'coding-panel-Section',
            'title' => 'Section image carousel',
        ]);

        /* **les Control et setting** */

        /* Titre de section about */
        $wp_customize->add_setting('about_id_text', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control('about_contro_text', [
            'label' => 'Titre Section About',
            'section' => 'section-titre',
            'settings' => 'about_id_text']);

        /* paragraphe Gauch*/
        $wp_customize->add_setting('about_id_paragraphe_gauch', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field',
        ]);
        /* paragraphe Gauch*/
        $wp_customize->add_control('about_contro_paragraphe_gauch', [
            'label' => 'Paragraphe Gauch',
            'section' => 'section-titre',
            'settings' => 'about_id_paragraphe_gauch',
            'type' => 'textarea']);

        /* paragraphe Droit*/
        $wp_customize->add_setting('about_id_paragraphe_droit', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field',
        ]);
        /* paragraphe Droit*/
        $wp_customize->add_control('about_contro_paragraphe_droit', [
            'label' => 'Paragraphe Droit',
            'section' => 'section-titre',
            'settings' => 'about_id_paragraphe_droit',
            'type' => 'textarea']);

        /* ****IMAGE CAROUSEL**** */
        /* img 1*/
        $wp_customize->add_setting('carousel-img-1', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field',
        ]);
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'img-1',
                array(
                    'label' => 'Upload image carousel 1',
                    'section' => 'section-img-carousel',
                    'settings' => 'carousel-img-1',
                    'context' => 'your_setting_context',
                )
            )
        );
        /* img 2*/
        $wp_customize->add_setting('carousel-img-2', [
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_textarea_field',
        ]);
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'img-2',
                array(
                    'label' => 'Upload image carousel 2',
                    'section' => 'section-img-carousel',
                    'settings' => 'carousel-img-2',
                    'context' => 'your_setting_context',
                )
            )
        );
        /* ****logo Labs**** */

    }

}
add_action('customize_register', [MgCustomizer::class, 'ajout_personnalisation_about']);

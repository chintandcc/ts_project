<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Header extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [

            //Header    
            'header_logo'                       => get_field('header_logo', 'option'),
            'announcement_bar'                  => get_field('announcement_bar', 'option'),
            'schedule_an_appointment_button'    => get_field('schedule_an_appointment_button', 'option'),
            'patient_referral_button'           => get_field('patient_referral_button', 'option'),

            // Footer
            'footer_logo'                       => get_field('footer_logo', 'option'),
            'footer_heading'                    => get_field('footer_heading', 'option'),
            'footer_description'                => get_field('footer_description', 'option'),
            'copyright_text'                    => get_field('copyright_text', 'option'),
            'website_credits'                   => get_field('website_credits', 'option'),
            'location_heading'                  => get_field('location_heading', 'option'),
            'location'                          => get_field('location', 'option'),
            'lets_chat_heading'                 => get_field('lets_chat_heading', 'option'),
            'phone_number'                      => get_field('phone_number', 'option'),
            'email_address'                     => get_field('email_address', 'option'),
            'hours_heading'                     => get_field('hours_heading', 'option'),
            'hours'                             => get_field('hours', 'option'),
            'social_media_heading'              => get_field('social_media_heading', 'option'),
            'footer_social_media'               => get_field('footer_social_media', 'option'),
        ];
    }
}
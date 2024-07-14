<?php

namespace App\View\Composers;

use Illuminate\Support\Arr;
use Roots\Acorn\View\Composer;

class TsContent extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        // '*',
        'partials.content-ts',
    ];

    /**
     * Data to be passed to the view.
     *
     * @return array
     */
    public function with()
    {
        return [
            'tsContetData' => $this->tsContetData(),
            // Add more fields as needed
        ];
    }

    /**
     * Get ACF repeater field.
     *
     * @return array
     */

    public function tsContetData()
    {
        $data = [];
        $flexible_content = get_field('page_content');
        if ($flexible_content) {
            foreach ($flexible_content as $content) {
                if ($content['acf_fc_layout'] == 'hero_slider') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'slider' => $content['slider'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                } elseif ($content['acf_fc_layout'] == 'image_with_content') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'background_color' => $content['background_color'],
                        'image_style' => $content['image_style'],
                        'image' => $content['image'],
                        'heading' => $content['heading'],
                        'description' => $content['description'],
                        'button_style' => $content['button_style'],
                        'logo' => $content['logo'],
                        'primary_button' => $content['primary_button'],
                        'secondary_button' => $content['secondary_button'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                } 
                elseif ($content['acf_fc_layout'] == 'featured_service') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'description' => $content['description'],
                        'featured_services' => $content['featured_services'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                } 
                elseif ($content['acf_fc_layout'] == 'background_image_with_content') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'image' => $content['image'],
                        'heading' => $content['heading'],
                        'description' => $content['description'],
                        'button' => $content['button'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                } 
                elseif ($content['acf_fc_layout'] == 'ratings_and_reviews') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'description' => $content['description'],
                        'reviews' => $content['reviews'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                } 
                elseif ($content['acf_fc_layout'] == 'content_banner') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'description' => $content['description'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                } 
                elseif ($content['acf_fc_layout'] == 'full_video_section') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'poster_image' => $content['poster_image'],
                        'video_url' => $content['video_url'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                } 
                elseif ($content['acf_fc_layout'] == 'simple_content') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'section_style' => $content['section_style'],
                        'heading' => $content['heading'],
                        'description' => $content['description'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                } 
                elseif ($content['acf_fc_layout'] == 'video_grid') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'video_grid' => $content['video_grid'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                } 
                elseif ($content['acf_fc_layout'] == 'ratings_and_reviews') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'description' => $content['description'],
                        'reviews' => $content['reviews'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                } 
                elseif ($content['acf_fc_layout'] == 'list_content') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'list_content' => $content['list_content'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                } 
                elseif ($content['acf_fc_layout'] == 'content_with_full_image') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'image' => $content['image'],
                        'description' => $content['description'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                } 
                elseif ($content['acf_fc_layout'] == 'cta_section') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'button' => $content['button'],
                        'description' => $content['description'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                } 
                elseif ($content['acf_fc_layout'] == 'contact_info') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'sub_heading' => $content['sub_heading'],
                        'description' => $content['description'],
                        'address_heading' => $content['address_heading'],
                        'address' => $content['address'],
                        'hours_heading' => $content['hours_heading'],
                        'phone_heading' => $content['phone_heading'],
                        'phone_number' => $content['phone_number'],
                        'reviews' => $content['reviews'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                } 
                elseif ($content['acf_fc_layout'] == 'map_section') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'map_image' => $content['map_image'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                } 
                elseif ($content['acf_fc_layout'] == 'contact_form') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'from_shortcode' => $content['from_shortcode'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                } 
                elseif ($content['acf_fc_layout'] == 'image_with_content_grid') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'description' => $content['description'],
                        'image_grid' => $content['image_grid'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                } 
                elseif ($content['acf_fc_layout'] == 'general_content') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'description' => $content['description'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                } 
                elseif ($content['acf_fc_layout'] == 'our_doctors_listing') {
                    $service_post_data = [
                        'post_type' => 'doctor',
                        'posts_per_page' => '-1',
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'ASC',
                    ];
                    $service_posts = new \WP_Query($service_post_data);
                    $all_services = [];
                    if ($service_posts->have_posts()) {
                        while ($service_posts->have_posts()):
                            $service_posts->the_post();
                            $services_icon = get_field('service_icon', get_the_ID());
                            $fea_img = '';
                            if (get_the_post_thumbnail_url()) {
                                $fea_img = get_the_post_thumbnail_url();
                                $image_id = get_post_thumbnail_id();
                                $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                                $image_title = get_the_title($image_id);
                                if ($image_alt) {
                                    $image_alt = $image_alt;
                                } else {
                                    $image_alt = get_the_title();
                                }
                            } else {
                                $image_alt = get_the_title();
                            }
                            $all_services[] = [
                                'id' => get_the_ID(),
                                'title' => get_the_title(),
                                'service_icon' => $services_icon,
                                'fea_img' => $fea_img,
                                'url' => get_the_permalink(),
                                'con_excerpt' => get_the_excerpt(),
                                'content_desc' => get_the_content(),
                            ];
                        endwhile;
                        wp_reset_postdata();
                    }
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'section_style' => $content['section_style'],
                        'all_services' => $all_services,
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                }

                /*==================================================Community=========================================== */

                elseif ($content['acf_fc_layout'] == 'simple_content') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'description' => $content['description'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                }
                elseif ($content['acf_fc_layout'] == 'images_grid') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'image_grid' => $content['image_grid'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                }  
                elseif ($content['acf_fc_layout'] == 'gallery') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'section_style' => $content['section_style'],
                        'heading' => $content['heading'],
                        'gallery_tabs' => $content['gallery_tabs'],
                        'gallery' => $content['gallery'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                }  
                elseif ($content['acf_fc_layout'] == 'cta_section') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'buttons' => $content['buttons'],
                        'description' => $content['description'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                }  


                /*==================================================Information=========================================== */
                elseif ($content['acf_fc_layout'] == 'simple_content') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'section_style' => $content['section_style'],
                        'heading' => $content['heading'],
                        'description' => $content['description'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                }
                elseif ($content['acf_fc_layout'] == 'image_with_content') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'image_position' => $content['image_position'],
                        'image' => $content['image'],
                        'heading' => $content['heading'],
                        'description' => $content['description'],
                        'primary_button' => $content['primary_button'],
                        'secondary_button' => $content['secondary_button'],
                        'sub_heading' => $content['sub_heading'],
                        'sub_description' => $content['sub_description'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                }
                elseif ($content['acf_fc_layout'] == 'cta_section') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'buttons' => $content['buttons'],
                        'description' => $content['description'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                }
                elseif ($content['acf_fc_layout'] == 'video_section') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'image' => $content['image'],
                        'video_url' => $content['video_url'],
                        'heading' => $content['heading'],
                        'description' => $content['description'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                }

                /*==================================================Instruction=========================================== */
                elseif ($content['acf_fc_layout'] == 'banner') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'image' => $content['image'],
                        'video_url' => $content['video_url'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                }
                elseif ($content['acf_fc_layout'] == 'general_content') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'section_color' => $content['section_color'],
                        'sub_heading' => $content['sub_heading'],
                        'heading' => $content['heading'],
                        'description' => $content['description'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                }
                elseif ($content['acf_fc_layout'] == 'cta_section') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'buttons' => $content['buttons'],
                        'description' => $content['description'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                }

                /*==================================================Doctor=========================================== */
                elseif ($content['acf_fc_layout'] == 'banner') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'image' => $content['image'],
                        'description' => $content['description'],
                        'ratings_number' => $content['ratings_number'],
                        'review_rate' => $content['review_rate'],
                        'link' => $content['link'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                }
                elseif ($content['acf_fc_layout'] == 'content_with_video') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'video_url' => $content['video_url'],
                        'description' => $content['description'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                }
                elseif ($content['acf_fc_layout'] == 'image_with_content') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'image_position' => $content['image_position'],
                        'image_style' => $content['image_style'],
                        'image' => $content['image'],
                        'heading' => $content['heading'],
                        'description' => $content['description'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                }
                elseif ($content['acf_fc_layout'] == 'cta_section') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'buttons' => $content['buttons'],
                        'description' => $content['description'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                }
                /*==================================================Procedure=========================================== */
                elseif ($content['acf_fc_layout'] == 'banner') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'sub_heading' => $content['sub_heading'],
                        'image' => $content['image'],
                        'video_url' => $content['video_url'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                }
                elseif ($content['acf_fc_layout'] == 'cta_section') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'section_style' => $content['section_style'],
                        'section_color' => $content['section_color'],
                        'heading' => $content['heading'],
                        'description' => $content['description'],
                        'sub_heading' => $content['sub_heading'],
                        'sub_description' => $content['sub_description'],
                        'primary_button' => $content['primary_button'],
                        'secondary_button' => $content['secondary_button'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                }
                elseif ($content['acf_fc_layout'] == 'select_patient_reviews') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'select_patient_reviews' => $content['select_patient_reviews'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                }
                /*==================================================Procedure=========================================== */
                elseif ($content['acf_fc_layout'] == 'content_with_video') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'short_description' => $content['short_description'],
                        'image' => $content['image'],
                        'video_url' => $content['video_url'],
                        'sub_heading' => $content['sub_heading'],
                        'description' => $content['description'],
                        'button_heading' => $content['button_heading'],
                        'buttons' => $content['buttons'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                }
                elseif ($content['acf_fc_layout'] == 'simple_content') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'section_style' => $content['section_style'],
                        'heading' => $content['heading'],
                        'description' => $content['description'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                }
                elseif ($content['acf_fc_layout'] == 'other_patient_reviews') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                }
                elseif ($content['acf_fc_layout'] == 'cta_section') {
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'button' => $content['button'],
                        'description' => $content['description'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                    ];
                    array_push($data, $this_content);
                }
            }
        }
        return $data;
    }
}

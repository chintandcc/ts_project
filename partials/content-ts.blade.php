@if ($tsContetData)
    @foreach ($tsContetData as $content)
        @if ($content->layout == 'hero_slider')
            @include('partials.sections.hero_slider')
        @endif
        @if ($content->layout == 'image_with_content')
            @include('partials.sections.image_with_content')
        @endif
        @if ($content->layout == 'featured_service')
            @include('partials.sections.featured_service')
        @endif
        @if ($content->layout == 'background_image_with_content')
            @include('partials.sections.background_image_with_content')
        @endif
        @if ($content->layout == 'ratings_and_reviews')
            @include('partials.sections.ratings_and_reviews')
        @endif
        @if ($content->layout == 'content_banner')
            @include('partials.sections.content_banner')
        @endif
        @if ($content->layout == 'full_video_section')
            @include('partials.sections.full_video_section')
        @endif
        @if ($content->layout == 'simple_content')
            @include('partials.sections.simple_content')
        @endif
        @if ($content->layout == 'our_doctors_listing')
            @include('partials.sections.our_doctors_listing')
        @endif
        @if ($content->layout == 'video_grid')
            @include('partials.sections.video_grid')
        @endif
        @if ($content->layout == 'list_content')
            @include('partials.sections.list_content')
        @endif
        @if ($content->layout == 'content_with_full_image')
            @include('partials.sections.content_with_full_image')
        @endif
        @if ($content->layout == 'cta_section')
            @include('partials.sections.cta_section')
        @endif
        @if ($content->layout == 'our_procedures_listing')
            @include('partials.sections.our_procedures_listing')
        @endif
        @if ($content->layout == 'patient_reviews_listing')
            @include('partials.sections.patient_reviews_listing')
        @endif
        @if ($content->layout == 'instructions_listing')
            @include('partials.sections.instructions_listing')
        @endif
        @if ($content->layout == 'contact_info')
            @include('partials.sections.contact_info')
        @endif
        @if ($content->layout == 'map_section')
            @include('partials.sections.map_section')
        @endif
        @if ($content->layout == 'contact_form')
            @include('partials.sections.contact_form')
        @endif
        @if ($content->layout == 'image_with_content_grid')
            @include('partials.sections.image_with_content_grid')
        @endif
        @if ($content->layout == 'community_listing')
            @include('partials.sections.community_listing')
        @endif
        @if ($content->layout == 'information_listing')
            @include('partials.sections.information_listing')
        @endif
        @if ($content->layout == 'general_content')
            @include('partials.sections.general_content')
        @endif
        @if ($content->layout == 'blog_listing')
            @include('partials.sections.blog_listing')
        @endif
    @endforeach
@endif
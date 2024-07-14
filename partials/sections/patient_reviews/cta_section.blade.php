@if (isset($content->hide_section) && $content->hide_section != 1)
    <section class="@if ($content->extra_class) {!! $content->extra_class !!} @endif" @if ($content->id) id="{!! $content->id !!}" @endif>
    </section>
@endif

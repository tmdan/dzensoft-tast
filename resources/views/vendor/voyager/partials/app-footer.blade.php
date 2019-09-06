<footer class="app-footer">
    <div class="site-footer-right">
        @if (rand(1,100) == 100)
            <i class="voyager-rum-1"></i> {{ __('voyager::theme.footer_copyright2') }}
        @else
            {!! __('voyager::theme.footer_copyright') !!} <a href="https://www.linkedin.com/in/tmdan" target="_blank">tmdan</a>
        @endif
        @php $version = env('APP_VERSION', 'prod'); @endphp
        @if (!empty($version))
            - {{ $version }}
        @endif
    </div>
</footer>

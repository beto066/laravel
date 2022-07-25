<nav aria-label="Navegação de página exemplo">
    <ul class="pagination justify-content-center">
        @if($posts->onFirstPage())
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Anterior</a>
            </li>
        @else
            <li class="page-item">
                <a class="page-link" href="{{ $posts->previousPageUrl() }}">Anterior</a>
            </li>

            <li class="page-item">
                <a class="page-link" href="{{ $posts->url(1) }}">1</a>
            </li>

            @if($posts->currentPage() > 2)
                <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
            @endif
        @endif

        <li class="page-item active">
            <a class="page-link" href="#">
                {{ $posts->currentPage() }}
                <span class="sr-only">(atual)</span>
            </a>
        </li>

        @if($posts->onLastPage())
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Próxima</a>
            </li>
        @else
            @if($posts->currentPage() < $posts->lastPage() - 1)
                <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
            @endif

            <li class="page-item">
                <a class="page-link" href="{{ $posts->url($posts->lastPage()) }}">{{ $posts->lastPage() }}</a>
            </li>

            <li class="page-item">
                <a class="page-link" href="{{ $posts->nextPageUrl() }}">Próxima</a>
            </li>
        @endif
    </ul>
</nav>

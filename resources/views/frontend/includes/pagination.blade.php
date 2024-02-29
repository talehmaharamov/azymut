<div class="col-12">
    <ul class="pagination">
        <li class="page-item {{ ($contents->currentPage() == 1) ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $contents->url(1) }}" aria-label="Previous">
                «
            </a>
        </li>
        @for ($i = 1; $i <= $contents->lastPage(); $i++)
            <li class="page-item {{ ($contents->currentPage() == $i) ? 'active' : '' }}">
                <a class="page-link" href="{{ $contents->url($i) }}">
                    {{ $i }}
                    @if ($contents->currentPage() == $i)
                        <span class="sr-only">(current)</span>
                    @endif
                </a>
            </li>
        @endfor
        <li class="page-item {{ ($contents->currentPage() == $contents->lastPage()) ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $contents->url($contents->currentPage() + 1) }}" aria-label="Next">
                »
            </a>
        </li>
    </ul>
</div>

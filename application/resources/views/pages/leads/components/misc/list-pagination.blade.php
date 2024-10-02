<!--modified Laravel Pagination Template: https://laravel.com/docs/8.x/pagination-->
<?php
/** @var array $page */
?>

@if (isset($page['pagination_elements']))
    <nav id="list-pagination" class="d-flex justify-content-center">
        <ul class="autoload pagination">

            {{-- Pagination Elements --}}
            @foreach ($page['pagination_elements'] as $element)

                {{-- Previous Page Link --}}
                @if ($element['label'] == 'pagination.previous')
                    @if ($element['enabled'])
                        <li class="page-item">
                            <a data-url="{{ $element['url'] }}" data-loading-target="{{ $page['loading_target'] ?? '' }}"
                               href="javascript:void(0)" rel="prev" aria-label="@lang('pagination.previous')" class="js-ajax-ux-request page-link">&lsaquo;</a>
                        </li>                        
                    @else
                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                            <span aria-hidden="true" class="page-link">&lsaquo;</span>
                        </li>
                    @endif
                    @continue
                @endif

                {{-- Next Page Link --}}
                @if ($element['label'] == 'pagination.next')
                    @if ($element['enabled'])
                        <li class="page-item">
                            <a data-url="{{ $element['url'] }}" data-loading-target="{{ $page['loading_target'] ?? '' }}"
                               href="javascript:void(0)" class="js-ajax-ux-request page-link">&rsaquo;</a>
                        </li>
                    @else
                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                            <span aria-hidden="true" class="page-link">&rsaquo;</span>
                        </li>
                    @endif
                    @continue                    
                @endif            

                {{-- "Three Dots" Separator --}}
                @if ($element['label'] === '...')
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element['label'] }}</span></li>
                    @continue
                @endif

                {{-- Numbers links --}}
                @if ($element['active'] === true)
                    <li class="page-item active" aria-current="page"><span class="page-link">{{ $element['label'] }}</span></li>
                @else
                    <li class="page-item">
                        <a data-url="{{ $element['url'] }}" data-loading-target="{{ $page['loading_target'] ?? '' }}"
                           href="javascript:void(0)" class="js-ajax-ux-request page-link">{{ $element['label'] }}</a>
                    </li>
                @endif

            @endforeach

        </ul>
    </nav>
@else
    <nav id="list-pagination"></nav>
@endif

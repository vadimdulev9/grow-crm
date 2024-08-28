@if (isset($lead_arrows))
    <div id="card-modal-arrows" class="fc-button-group">
        @if (isset($lead_arrows['prev_id']))
            <a data-url="{{  urlResourceWithOffset('/leads/'.$lead_arrows['prev_id'], (int)request('offset') - 1) }}" data-loading-target="card-modal-arrows" id="card-modal-arrow-left"
               href="javascript:void(0)" class="js-ajax-ux-request fc-prev-button fc-button">
                <span class="fc-icon fc-icon-chevron-left" role="img"></span>
            </a>
        @else
            <span id="card-modal-arrow-left" class="fc-prev-button fc-button disabled">
                <span class="fc-icon fc-icon-chevron-left" role="img"></span>
            </span>
        @endif
            @if (isset($lead_arrows['next_id']))
            <a data-url="{{ urlResourceWithOffset('/leads/'.$lead_arrows['next_id'], (int)request('offset') + 1) }}" data-loading-target="card-modal-arrows" id="card-modal-arrow-right"
               href="javascript:void(0)" class="js-ajax-ux-request fc-next-button fc-button">
                <span class="fc-icon fc-icon-chevron-right" role="img"></span>
            </a>
        @else
            <span id="card-modal-arrow-right" class="fc-next-button fc-button disabled">
                <span class="fc-icon fc-icon-chevron-right" role="img"></span>
            </span>
        @endif
    </div>
@endif
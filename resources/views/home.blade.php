@extends('layouts.main')
@section('content')
{{-- Main Content --}}
    {{-- Portfolio (start) --}}
    <ul class="grid" id="portfolio-grid" style="position: relative;">
        <li class="grid-sizer"></li>
        <li
            id="p-item-10"
            class="grid-item element-item animate p_one_hlaf show-it"
            {{-- style="position: absolute; left: 0px; top: 0px;" --}}
        >
            <a
                class="item-link"
                href="#!"
                data-id="10"
                style="cursor:initial;"
            >
                <img
                    loading="lazy"
                    width="435"
                    height="900"
                    src="{{ asset('images/left.jpg') }}"
                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image gray"
                    alt=""
                />
                <!-- <div class="portfolio-text-holder">
                    <p class="portfolio-title">
                        FINANCE
                    </p>
                </div> -->
            </a>
        </li>
        <li
            id="p-item-15"
            class="grid-item element-item animate p_one_hlaf show-it"
            {{-- style="position: absolute; left: 465px; top: 0px;" --}}
        >
            <a
                class="item-link"
                href="#!"
                data-id="15"
                style="cursor:initial;"
            >
                <img
                    width="435"
                    height="435"
                    src="{{ asset('images/right.jpeg') }}"
                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image gray"
                    alt=""
                />
                <!-- <div class="portfolio-text-holder">
                    <p class="portfolio-title">
                        PROGRESS
                    </p>
                </div> -->
            </a>
        </li>
        <li
            id="p-item-17"
            class="grid-item element-item animate p_one_hlaf show-it"
            {{-- style="position: absolute; left: 465px; top: 465px;" --}}
        >
            <a
                class="item-link"
                href="#!"
                data-id="17"
                data-bs-toggle="modal" data-bs-target="#RedPillModal"
            >
                <img
                    width="435"
                    height="435"
                    src="{{ asset('images/bottom.jpg') }}"
                    class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                    alt=""
                />
                <div class="portfolio-text-holder">
                    <p class="portfolio-title">RED PILL</p>
                </div>
            </a>
        </li>
    </ul>
    {{-- Portfolio (end) --}}
{{-- ... --}}
{{-- Footer Home (start) --}}
<!-- <div class="site-content hidden text-center" style="margin-top: -250px">
    Button trigger modal
    <button class="btn btn-danger btn-lg mb-5" data-bs-toggle="modal" data-bs-target="#RedPillModal">Red Pill</button>
    <p class="text-secondary">&copy; 2022 - Globallleaders</p>
</div> -->
<!-- Modal -->
<div class="modal fade" id="RedPillModal" tabindex="-1" aria-labelledby="RedPillModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content bg-dark">
        <div class="modal-header">
          <h5 class="modal-title" id="RedPillModalLabel">Bitten geben Sie den PIN ein</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="GET" action="/contact-form" id="redPillModal">
            <div class="modal-body">
            <input
                type="text"
                class="form-control bg-transparent border-danger shadow-none"
                id="uniqueCode"
                placeholder="XXXX-XXXX"
            />
                <div class="alert alert-danger text-center alert-error" role="alert">
                Bitte gültigen Code eingeben
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn blade_cancle_btn"  data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn blade_submit_btn save">Submit</button>
            </div>
        </form>
      </div>
    </div>
  </div>
<style>
    .alert-error {
        display:none;
        padding: 2px;
        margin-top: 10px;
    }
</style>
{{-- Footer (end) --}}
<script>
    var ajax_var_url = '{{route("check-code")}}';
</script>
@endsection
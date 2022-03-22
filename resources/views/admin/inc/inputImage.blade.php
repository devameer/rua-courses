<!--begin::Image input-->
<div class="image-input image-input-outline {{ $image ? 'image-input-changed' : 'image-input-empty' }} " data-kt-image-input="true" style='background-image: url("{{ asset($image) }}")'>
    <!--begin::Image preview wrapper-->
    <label for="input-{{ $name }}" class="image-input-wrapper w-125px h-125px" style="background-image: url('{{ asset(str_replace('\\', '/', $image)) }}')"></label>
    <!--end::Image preview wrapper-->

    <!--begin::Edit button-->
    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click"
        title="Change avatar">

        <svg width="16px" fill="#fff" height="16px" viewBox="0 0 488.728 488.728" style="enable-background:new 0 0 488.728 488.728;" xml:space="preserve">
            <path d="M487.147,462.52l-36.4-167.6c0-4.2-2.1-7.3-5.2-10.4l-261.3-261.3c-20-22.9-74.3-38.1-112.4,0l-47.9,47.9
  c-31,31-31,81.4,0,112.4l261.3,261.3c2.1,2.1,5.2,4.2,9.4,5.2l168.6,38.5C473.347,490.02,492.347,483.62,487.147,462.52z
  M53.047,154.42c-15.6-15.6-15.6-39.6,0-55.2l47.9-47.9c15.2-15.2,40-15.2,55.2,0l238.4,238.4h-27.1c-11.4,0-20.8,9.4-20.8,20.8
  v34.3h-34.3c-11.4,0-20.8,9.4-20.8,20.8v26.1L53.047,154.42z M333.047,415.72v-29.2h34.3c18,1.7,20.8-16.5,20.8-20.8v-34.4h29.2
  l24,109.3L333.047,415.72z" />

        </svg>


        <!--begin::Inputs-->
        <input type="file" id="input-{{ $name }}" name="{{ $name }}" accept=".png, .jpg, .jpeg" />
        <input type="hidden" name="{{ $name }}_remove" />
        <!--end::Inputs-->
    </label>
    <!--end::Edit button-->

    <!--begin::Cancel button-->
    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" data-bs-dismiss="click"
        title="Cancel avatar">

        <svg width="16px" fill="#fff" height="16px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">

            <rect width="24" height="24" transform="rotate(180 12 12)" opacity="0" />
            <path
                d="M13.41 12l4.3-4.29a1 1 0 1 0-1.42-1.42L12 10.59l-4.29-4.3a1 1 0 0 0-1.42 1.42l4.3 4.29-4.3 4.29a1 1 0 0 0 0 1.42 1 1 0 0 0 1.42 0l4.29-4.3 4.29 4.3a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42z" />
        </svg>
    </span>
    <!--end::Cancel button-->

    <!--begin::Remove button-->
    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" data-bs-dismiss="click"
        title="Remove avatar">

        <svg width="16px" fill="#fff" height="16px" viewBox="0 0 24 24">

            <rect width="24" height="24" transform="rotate(180 12 12)" opacity="0" />
            <path
                d="M13.41 12l4.3-4.29a1 1 0 1 0-1.42-1.42L12 10.59l-4.29-4.3a1 1 0 0 0-1.42 1.42l4.3 4.29-4.3 4.29a1 1 0 0 0 0 1.42 1 1 0 0 0 1.42 0l4.29-4.3 4.29 4.3a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42z" />

        </svg>
    </span>
    <!--end::Remove button-->
</div>
<!--end::Image input-->

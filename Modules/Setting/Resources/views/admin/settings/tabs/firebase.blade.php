<div class="row">
    <div class="col-md-8">
        {{ Form::text('firebase_web_api_key', trans('setting::attributes.firebase_web_api_key'), $errors, $settings) }}
        {{ Form::text('firebase_dynamic_link_prefix', trans('setting::attributes.firebase_dynamic_link_prefix'), $errors, $settings) }}
        {{ Form::text('firebase_apn', trans('setting::attributes.firebase_apn'), $errors, $settings) }}
    </div>
</div>

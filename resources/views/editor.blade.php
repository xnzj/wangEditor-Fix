<div {!! admin_attrs($group_attrs) !!}>
    <label for="{{$id}}" class="{{$viewClass['label']}} control-label">{{$label}}</label>
    <div class="{{$viewClass['field']}}">
        <div class="{{$class}}">
            <p>{!! $value !!}</p>
        </div>
        <textarea name="{{$name}}" class="d-none" placeholder="{{ $placeholder }}" {!! $attributes !!} >{!! $value !!}</textarea>
        @include('admin::form.error')
        @include('admin::form.help-block')
    </div>
</div>

<script require="wangEditor" @script>
    var $editor = new wangEditor(this);
    var $textarea = $(this).parent().find('textarea');
    $editor.customConfig.onchange = function (html) {
        $textarea.val(html);
    }
    $editor.customConfig = Object.assign($editor.customConfig, @json($config));
    $editor.create();
</script>

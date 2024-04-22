{{--  echo "<pre>"; print_r($key); dd("========");  --}}
@error($key)
    <span class="invalid-feedback" role="alert">
        <span class="text-danger" style="color: red">{{ $message }}</span>
    </span>
@enderror

@if($item['type'] == 'text')
    <div class="form-group">
        <label class="col-md-3 control-label" for="{{$item['name']}}">{{$item['title']}}</label>
        <div class="col-md-9">
            <input type="{{$item['type']}}" placeholder='{{$item['placeholder']}}'
                   @if(isset($item['id'])) id="{{$item['id']}}" @endif
                   name="{{$item['name']}}" value='{{$item['value']}}'
                   class="form-control {{$item['append']['class']}}"
                   style="{{$item['append']['style']}}" {{$item['extra']}}>
            @if(isset($item['help']))
                <span class="help-block">{{$item['help']}}</span>
            @endif
        </div>
    </div>
@endif

@component('thrust::components.' . ($inline ? 'inlineFormField' : 'formField') , ["field" => $field, "title" => $title, "description" => $description])
    <input type={{$type}}
            id="{{$field}}" value="{{$value}}" name="{{$field}}"
           placeholder="{{$title}}"
            {{$attributes}} {!! $validationRules !!}>
@endcomponent
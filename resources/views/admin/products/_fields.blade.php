<div class="form-group">
    {{  Form::label('product_name', 'Product Name:')   }}
    {{ Form::text('name','',['class'=>'form-control border-input','placeholder'=>'Macbook pro']) }}

</div>

<div class="form-group">
    {{  Form::label('price', ' Price:')   }}
    {{ Form::text('price','',['class'=>'form-control border-input','placeholder'=>'$2500']) }}

</div>

<div class="form-group">
    {{  Form::label('description', ' Description:')   }}
    {{ Form::textarea('description','',['class'=>'form-control border-input','placeholder'=>'Product Description']) }}


</div>

<div class="form-group">
    {{  Form::label('file', 'File:')   }}
    {{ Form::file('image',['class'=>'form-control border-input']) }}

</div>
</div>
</div>

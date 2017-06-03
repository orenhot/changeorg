<div class="col-md-12">
    @if($errors->first())
        <div class="alert alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4><i class="icon fa fa-times"></i> Alert!</h4>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>





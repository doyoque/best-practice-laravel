<div class="container">
    <div class="row">
        <?php print_r($book->id); ?>
        <form action="{{url('book/'.$book->id)}}" class="col-md-4" method="POST">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <div class="form-group">
                <label for="title">book title</label>
                <input class="form-control" type="text" value="{{$book->title}}" required="yes" name="title" placeholder="title of book">
            </div>
            <div class="form-group">
                <label for="isbn">ISBN</label>
                <input class="form-control" type="text" value="{{$book->isbn}}" required="yes" name="isbn" placeholder="isbn">
            </div>
            <button class="btn btn-success" type="submit">Edit book</button>
        </form>
    </div>
</div>

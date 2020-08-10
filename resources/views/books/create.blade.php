<div class="container">
    <div class="row">
        <form class="col-md-4" action="{{ url('book') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label for="title">Book title</label>
                <input value="biji" class="form-control" type="text" id="title" name="title" placeholder="Title books">
            </div>
            <div class="form-group">
                <label for="isbn">ISBN</label>
                <input value="12345678" class="form-control" type="number" id="isbn" name="isbn" placeholder="ISBN">
            </div>

            <button class="btn btn-sucess" type="submit">Create new book</button>
        </form>
    </div>
</div>

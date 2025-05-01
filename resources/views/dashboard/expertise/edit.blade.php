<!-- Button trigger modal -->
<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal{{ $expertise->id }}">
    <i class="fa fa-pen"></i>
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal{{ $expertise->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Expertise</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('dashboard.expertise.update' , $expertise->id) }}" method="post">
                <div class="modal-body">
                    @csrf
                    @method('put')
                    <div class="card-body shadow">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="title" class="form-control"
                                        id="title" placeholder="Enter Expertise title" value="{{ $expertise->title }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="desc" class="form-control"
                                        id="desc" placeholder="Enter Expertise desc" value="{{ $expertise->desc }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="icon" class="form-control"
                                        id="icon" placeholder="Enter Expertise icon" value="{{ $expertise->icon }}">
                                </div>
                            </div>
                        </div>
                        
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>
    </div>
</div>
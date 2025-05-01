<!-- Button trigger modal -->
<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal{{ $contact->id }}">
    <i class="fa fa-eye"></i>
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal{{ $contact->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Message from: {{ $contact->name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>{{ $contact->message }}</p>
                <p>Phone: {{ $contact->phone }}</p>
                <p>Email: {{ $contact->email }}</p>
            </div>

        </div>
    </div>
</div>
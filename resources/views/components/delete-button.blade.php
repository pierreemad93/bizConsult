@props(['toRoute', 'id'])
<form action="{{ $toRoute }}" method="POST" class="d-inline" id="deleteForm-{{ $id }}">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" onclick="confirmDelete({{ $id }})">
        <i class="fe fe-trash"></i>
    </button>
</form>

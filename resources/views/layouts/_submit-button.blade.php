{{-- <div class="buttons"> --}}
    <a href="{{ url()->previous() }}">
        <button type="button" class="btn btn-default" data-dismiss="modal" >
            <i class="fa fa-times"></i> Cancel
        </button>
    </a>

    <button type="submit" class="btn btn-primary" id="button-save">
        <i class="fa fa-save"></i> {{ isset($edit) && $edit ? 'Update' : 'Save' }}
    </button>
{{-- </div> --}}
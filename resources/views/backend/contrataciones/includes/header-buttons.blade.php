<div class="btn-toolbar float-right" role="toolbar" aria-label="@lang('labels.general.toolbar_btn_groups')">

    @if(Route::is('admin.personal.index'))
        <a href="{{ route('admin.personal.create') }}" class="btn btn-success ml-1" data-toggle="tooltip" title="@lang('buttons.general.crud.create')"><i class="fas fa-plus-circle"></i></a>    
    @endif
    
</div><!--btn-toolbar-->

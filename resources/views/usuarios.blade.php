
@extends('layouts.principal')

@Section('contenido')

  <h1>{{ __('Titulo') }}</h1>



     <table class="table table-bordered" id="users-table">
       <thead>
           <tr>
               <th>Id</th>
               <th>Name</th>
               <th>Email</th>
               <th>Profesion</th>
               <th>Created At</th>
               <th>Updated At</th>
               <th>Acción</th>
           </tr>
       </thead>
   </table>

</form>

@endSection
@Section('script')


<script>

$(function() {

    $('#users-table').DataTable({
      dom: 'Bfrtip',
      buttons: [
        {
            extend: 'copy',
            text: 'Copy to clipboard'
        },
    , 'excel', 'pdf'
  ],
        processing: true,
        serverSide: true,
        ajax: '{{ url('api/user/data') }}',
        headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       },
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'profesion_id', name: 'profesion_id' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' },
            { data:'btn'},
        ]

    });
});
</script>
@endSection

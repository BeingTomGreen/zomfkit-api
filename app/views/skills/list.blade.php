@extends('base')

@section('content')

    @foreach ($skill_items as $skill_item)
      <td>{{ $skill_item->item_name }}</td>
    @endforeach

{{ $skill_items->links() }}

@stop
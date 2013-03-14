<?xml version="1.0" encoding="UTF-8" ?>

<skill_items>
	@foreach ($skillItems as $skillItem)
	<skill_item>
		<item_id>{{ $skillItem->item_id }}</item_id>
		<item_skill>{{ $skillItem->item_skill }}</item_skill>
		<item_name>{{ $skillItem->item_name }}</item_name>
		<item_level>{{ $skillItem->item_level }}</item_level>
		<item_experience>{{ $skillItem->item_experience }}</item_experience>
		<item_members>{{ $skillItem->item_members }}</item_members>
		<item_category>{{ $skillItem->item_category }}</item_category>
	</skill_item>
	@endforeach
</skill_items>